<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 27.03.2016
 * Time: 19:04
 */

class StatisticsDownloadBook {
    private function checkIdBook($id) {
        $id = intval($id);
        if(isset($id)) {
            $db = Db::getConnection();
            $resQuery = $db->query("SELECT * FROM `book` WHERE id='$id'");
            if($resQuery) {
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

    private function checkIdUser($id) {
        $id = intval($id);
        if(isset($id)) {
            $db = Db::getConnection();
            $resQuery = $db->query("SELECT * FROM `users` WHERE id='$id'");
            if($resQuery) {
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

    public function add($array) {
        if(isset($array)) {
            $idBook = intval($array['idBook']);
            $idUser = intval($array['idUser']);
            if($this->checkIdBook($idBook) && $this->checkIdUser($idUser)) {
                $db = Db::getConnection();
                $result = $db->query("INSERT INTO `statisticsDownloadBook` (idBook, idUser) VALUES ('$idBook', '$idUser')");
                if($result) {
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

    public function getAll() {
        $db = Db::getConnection();
        $resQuery = $db->query("SELECT * FROM `statisticsDownloadBook`");

        $result = array();
        if($resQuery) {
            $resQuery->setFetchMode(PDO::FETCH_ASSOC);
            $i = 0;
            while($row = $resQuery->fetch()) {
                $result[$i]['id'] = $row['id'];
                $result[$i]['idBook'] = $row['idBook'];
                $result[$i]['idUser'] = $row['idUser'];
                $result[$i]['tampDate'] = $row['tampDate'];
                $i++;
            }
            return $result;
        }
        return false;
    }

    public function deleteById($id) {
        $id = intval($id);
        if(isset($id)) {
            $db = Db::getConnection();
            $resQuery = $db->query('DELETE FROM `statisticsDownloadBook` WHERE id='.$id);
            if($resQuery) {
                return true;
            }
        }
        return false;
    }

    public function getByIdBook($id) {
        $db = Db::getConnection();
        $resQuery = $db->query("SELECT * FROM `statisticsDownloadBook` WHERE idBook = '$id'");

        $result = array();
        if($resQuery) {
            $resQuery->setFetchMode(PDO::FETCH_ASSOC);
            $i = 0;
            while($row = $resQuery->fetch()) {
                $result[$i]['id'] = $row['id'];
                $result[$i]['idBook'] = $row['idBook'];
                $result[$i]['idUser'] = $row['idUser'];
                $result[$i]['tampDate'] = $row['tampDate'];
                $i++;
            }
            return $result;
        }
        return false;
    }

    public function getByIdUser($id) {
        $db = Db::getConnection();
        $resQuery = $db->query("SELECT * FROM `statisticsDownloadBook` WHERE idUser = '$id'");

        $result = array();
        if($resQuery) {
            $resQuery->setFetchMode(PDO::FETCH_ASSOC);
            $i = 0;
            while($row = $resQuery->fetch()) {
                $result[$i]['id'] = $row['id'];
                $result[$i]['idBook'] = $row['idBook'];
                $result[$i]['idUser'] = $row['idUser'];
                $result[$i]['tampDate'] = $row['tampDate'];
                $i++;
            }
            return $result;
        }
        return false;
    }

    public function testWTF() {
        $arr = array();
        $arr['idBook'] = 2;
        $arr['idUser'] = 13;

        var_dump($this->getByIdUser(13));
    }
}