<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 07.03.2016
 * Time: 20:31
 */
class Teachers {
    public function getById($id) {
        $id = intval($id);
        if(isset($id)) {
            $db = Db::getConnection();
            $result = $db->query("SELECT * FROM teachers WHERE id='$id'");
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
        $resQuery = $db->query('SELECT * FROM teachers');
        if($resQuery) {
            $resQuery->setFetchMode(PDO::FETCH_ASSOC);
            $i = 0;
            while($row = $resQuery->fetch()) {
                $result[$i]['id'] = $row['id'];
                $result[$i]['firstName'] = $row['firstName'];
                $result[$i]['middleName'] = $row['middleName'];
                $result[$i]['lastName'] = $row['lastName'];
                $result[$i]['post'] = $row['post'];
                $result[$i]['description'] = $row['description'];
                $result[$i]['idPic'] = $row['idPic'];
                $i++;
            }
            return $result;
        }
        return false;
    }
    public function updateParameter($parameterName, $newValue, $idTeacher) {
        $idTeacher = intval($idTeacher);
        if(isset($idTeacher)) {
            if ($parameterName == 'id') {
                return false;
            }
            $db = Db::getConnection();
            $resQuery = $db->query("UPDATE teachers SET $parameterName='$newValue' WHERE id='$idTeacher'");
            if($resQuery) {
                return true;
            }
        }
        return false;
    }

    public function deleteById($id) {
        $id = intval($id);
        if(isset($id)) {
            $db = Db::getConnection();
            $resQuery = $db->query('DELETE FROM `teachers` WHERE id='.$id);
            if($resQuery) {
                return true;
            }
        }
        return false;
    }

    public function add($array) {
        if(isset($array)) {
            $firstName = $array['firstName'];
            $middleName = $array['middleName'];
            $lastName = $array['lastName'];
            $post = $array['post'];
            $description = $array['description'];
            $idPic = $array['idPic'] || 1;
            if (is_numeric($firstName) || is_numeric($middleName) || is_numeric($lastName) || is_numeric($post)) {
                return false;
            }
            $db = DB::getConnection();
            $result = $db->query("INSERT INTO teachers (firstName, middleName, lastName, post, description, idPic) VALUES ('$firstName', '$middleName', '$lastName', '$post', '$description', '$idPic')");
            if($result) {
                return true;
            }
        }
        return false;
    }
}