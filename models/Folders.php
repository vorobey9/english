<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 20.03.2016
 * Time: 14:56
 */

class Folders {
    public function add($array) {
        if(isset($array)) {
            $title = $array['title'];
            $description = $array['description'];
            if($array['typeExercise'] == 'puzzle' || $array['typeExercise'] == 'inscribe' || $array['typeExercise'] == 'test') {
                $typeExercise = $array['typeExercise'];
                $countInBlank = intval($array['countInBlank']);
                if($countInBlank > 0 && is_numeric($countInBlank)) {
                    $db = Db::getConnection();
                    $result = $db->query("INSERT INTO `folders` (title, description, typeExercise, countInBlank) VALUES ('$title', '$description', '$typeExercise', '$countInBlank')");
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
        $resQuery = $db->query("SELECT * FROM `folders`");

        $result = array();
        if($resQuery) {
            $resQuery->setFetchMode(PDO::FETCH_ASSOC);
            $i = 0;
            while($row = $resQuery->fetch()) {
                $result[$i]['id'] = $row['id'];
                $result[$i]['title'] = $row['title'];
                $result[$i]['description'] = $row['description'];
                $result[$i]['typeExercise'] = $row['typeExercise'];
                $result[$i]['countInBlank'] = $row['countInBlank'];
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
            $result = $db->query("SELECT * FROM `folders` WHERE id='$id'");
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
            $resQuery = $db->query('DELETE FROM `folders` WHERE id='.$id);
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
            $resQuery = $db->query("UPDATE `folders` SET $parameterName='$newValue' WHERE id='$id'");
            if($resQuery) {
                return true;
            }
        }
        return false;
    }

    public function test() {
//        $arr = array();
//        $arr['title'] = 'theeee';
//        $arr['description'] = 'abc';
//        $arr['typeExercise'] = 'test';
//        $arr['countInBlank'] = 9;
        var_dump($this->deleteById(3));
    }
}