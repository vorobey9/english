<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 27.03.2016
 * Time: 20:00
 */

class Elective {

    public function getByTitle($title) {
        $db = Db::getConnection();
        $result = $db->query("SELECT * FROM `elective` WHERE title = '$title'");
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result = $result->fetch();
        if($result) {
            return $result;
        }
        else {
            return false;
        }
    }

    public function add($array) {
        if(isset($array)) {
            $title = $array['title'];
            $description = $array['description'];
            if(isset($title) && isset($description)) {

                echo 'In isset Title Desc'.'<br>';

                if(!$this->getByTitle($title)) {
                    $db = Db::getConnection();
                    $result = $db->query("INSERT INTO `elective` (title, description) VALUES ('$title', '$description')");
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
        else {
            return false;
        }
    }

    public function getAll() {
        $db = Db::getConnection();
        $resQuery = $db->query("SELECT * FROM `elective`");

        $result = array();
        if($resQuery) {
            $resQuery->setFetchMode(PDO::FETCH_ASSOC);
            $i = 0;
            while($row = $resQuery->fetch()) {
                $result[$i]['id'] = $row['id'];
                $result[$i]['title'] = $row['title'];
                $result[$i]['description'] = $row['description'];
                $i++;
            }
            return $result;
        }
        return false;
    }

    public function getById($id) {
        $id = intval($id);
        if(isset($id)) {
            $db = Db::getConnection();
            $result = $db->query("SELECT * FROM `elective` WHERE id='$id'");
            if($result) {
                $result->setFetchMode(PDO::FETCH_ASSOC);
                $result = $result->fetch();
                return $result;
            }
        }
        return false;
    }

    public function deleteById($id) {
        $id = intval($id);
        if(isset($id)) {
            $db = Db::getConnection();
            $resQuery = $db->query('DELETE FROM `elective` WHERE id='.$id);
            if($resQuery) {
                return true;
            }
        }
        return false;
    }

    public function updateParameter($parameterName, $newValue, $id) {
        $id = intval($id);
        if(isset($id)) {
            if ($parameterName == 'id') {
                return false;
            }
            $db = Db::getConnection();
            $resQuery = $db->query("UPDATE `elective` SET $parameterName='$newValue' WHERE id='$id'");
            if($resQuery) {
                return true;
            }
        }
        return false;
    }

    public function testWTF() {
        $arr = array();
        $arr['title'] = 'Sex111';
        $arr['description'] = 'vasiy afaeg gsrgs sgrs ggfh';

        var_dump($this->updateParameter('title', 'FUCK', 1));
    }
}