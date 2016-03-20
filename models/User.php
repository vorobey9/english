<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 08.03.2016
 * Time: 19:34
 */
class User {
    public function add($array) {
        if(isset($array)) {

            $firstName = $array['firstName'];
            $middleName = $array['middleName'];
            $lastName = $array['lastName'];

            $mail = $array['mail'];
            $mail = strtolower($mail);

            $password = $array['password'];
            $password = strtolower($password);
            $password = md5($password);

            $idPic = $array['idPic'] || 1;

            if($this->checkMail($mail) == true) {
                return false;
            }
            if (is_numeric($firstName) || is_numeric($middleName) || is_numeric($lastName)) {
                return false;
            }
            $db = Db::getConnection();
            $result = $db->query("INSERT INTO users (firstName, middleName, lastName, mail, password, idPic) VALUES ('$firstName', '$middleName', '$lastName', '$mail', '$password', '$idPic')");
            if($result) {
                return true;
            }
        }
        return false;
    }

    private function checkMail($mail) {
//        echo 'In CHECK'.'<br>';
        $mail = strtolower($mail);
        $db = Db::getConnection();
        $res = $db->query("SELECT * FROM users WHERE mail='$mail'");
        $res->setFetchMode(PDO::FETCH_ASSOC);
        $result = $res->fetch();
        if($result) {
            return true;
        }
        else {
            return false;
        }
    }

    private function checkIdForAdmin($id) {
        $id = intval($id);
        if(isset($id)) {
            $db = Db::getConnection();
            $resQuery = $db->query("SELECT role FROM `users` WHERE id='$id'");
            $resQuery->setFetchMode(PDO::FETCH_ASSOC);
            $res = $resQuery->fetch();
            if($res['role'] == 'admin') {
                return true;
            }
            else {
                return false;
            }
        }
        return false;
    }

    public function deleteById($id) {
        $id = intval($id);
        if($this->checkIdForAdmin($id)) {
            return false;
        }
        if(isset($id)) {
            $db = Db::getConnection();
            $resQuery = $db->query('DELETE FROM `users` WHERE id='.$id);
            if($resQuery) {
                return true;
            }
        }
        return false;
    }

    public function getById($id) {
        $id = intval($id);
        if(isset($id)) {
            $db = Db::getConnection();
            $result = $db->query("SELECT * FROM `users` WHERE id='$id'");
            if($result) {
                $result->setFetchMode(PDO::FETCH_ASSOC);
                $result = $result->fetch();
                return $result;
            }
        }
        return false;
    }

    public function getAll() {
        $db = Db::getConnection();
        $result = array();
        $resQuery = $db->query('SELECT * FROM `users`');
        if($resQuery) {
            $resQuery->setFetchMode(PDO::FETCH_ASSOC);
            $i = 0;
            while($row = $resQuery->fetch()) {
                $result[$i]['id'] = $row['id'];
                $result[$i]['firstName'] = $row['firstName'];
                $result[$i]['middleName'] = $row['middleName'];
                $result[$i]['lastName'] = $row['lastName'];
                $result[$i]['mail'] = $row['mail'];
                $result[$i]['password'] = $row['password'];
                $result[$i]['idPic'] = $row['idPic'];
                $result[$i]['role'] = $row['role'];
                $i++;
            }
            return $result;
        }
        return false;
    }

    private function updateParameter($parameterName, $newValue, $id) {
        $id = intval($id);
        if($this->checkIdForAdmin($id)) {
            return false;
        }
        if(isset($id)) {
            if ($parameterName == 'id') {
                return false;
            }
            $db = Db::getConnection();
            $resQuery = $db->query("UPDATE `users` SET $parameterName='$newValue' WHERE id='$id'");
            if($resQuery) {
                return true;
            }
        }
        return false;
    }

//    private function getParameterById($id, $parameterName) {
//        $id = intval($id);
//        $db = Db::getConnection();
//        $result = array();
//        $resQuery = $db->query("SELECT $parameterName FROM `users` WHERE id='$id'");
//        if($resQuery) {
//            $resQuery->setFetchMode(PDO::FETCH_ASSOC);
//            $resQuery = $resQuery->fetch();
//            $password = $resQuery['password'];
//            return $password;
//        }
//        else {
//            return false;
//        }
//    }

    public function changePassword($id, $oldPassword, $newPassword) {
        $id = intval($id);
        $oldPassword = strtolower($oldPassword);
        $tempRes = $this->getById($id);
        $tempPassword = $tempRes['password'];
        if($tempPassword == md5($oldPassword)) {
            $newPassword = strtolower($newPassword);
            $newPassword = md5($newPassword);
            $res = $this->updateParameter("password", $newPassword, $id);
            return $res;
        }
        else {
            return false;
        }
    }

    public function forgetPassword($mail) {

        $mail = strtolower($mail);
        if($this->checkMail($mail)) {
            //генерируем новый пароль
            $newPassword = $this->generatePassword();
            $newPassword = md5($newPassword);

            //тут меняю существующий, чтоб он потом зашел
            $db = Db::getConnection();
            $resQuery = $db->query("UPDATE `users` SET password='$newPassword' WHERE mail='$mail'");
            if($resQuery) {

                //тут отправляю новый пароль на почту чуваку

                return true;
            }
            else {
                return false;
            }
        }
        else {
            return false;
        }
    }

    private function generatePassword() {
        $letters = "qwertyuiopasdfghjklzxcvbnm1234567890";
        $lenghtPassword = 8;
        $password = "";
        while ($lenghtPassword > 0) {
            $i = mt_rand(0, strlen($letters)-1);
            $password = $password.$letters[$i];
            $lenghtPassword--;
        }
        return $password;
    }

    public function getIdByMail($mail) {
        $mail = strtolower($mail);
        $db = Db::getConnection();
        $resQuery = $db->query("SELECT id FROM `users` WHERE mail='$mail'");
        if($resQuery) {
            $resQuery->setFetchMode(PDO::FETCH_ASSOC);
            $resQuery = $resQuery->fetch();
            $result = $resQuery['id'];
            return $result;
        }
        else {
            return false;
        }
    }

    public function checkLogin ($mail, $password) {
        $mail = strtolower($mail);
        $password = strtolower($password);
        if($this->checkMail($mail)) {
            $db = Db::getConnection();
            $resQuery = $db->query("SELECT password FROM `users` WHERE mail='$mail'");
            if($resQuery) {
                $resQuery->setFetchMode(PDO::FETCH_ASSOC);
                $resQuery = $resQuery->fetch();
                $tempPassword = $resQuery['password'];
                if(md5($password) == $tempPassword) {
                    return true;
                }
                else {
                    return false;
                }
            }
            else {
                return false;
            }
        }
        else {
            return false;
        }

    }
}