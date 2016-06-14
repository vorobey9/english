<?php

class Folders {
    public function add($array) {
        if(isset($array)) {
            $title = $array['title'];
            $description = $array['description'];
            if($array['typeExercise'] == 'puzzle' || $array['typeExercise'] == 'inscribe' || $array['typeExercise'] == 'test') {
                $typeExercise = $array['typeExercise'];
                    $db = Db::getConnection();
                    $result = $db->query("INSERT INTO `folders` (title, description, typeExercise) VALUES ('$title', '$description', '$typeExercise')");
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

    public function getAll($type) {
        $db = Db::getConnection();
        $resQuery = $db->query("SELECT * FROM `folders` WHERE typeExercise='$type'");

        $result = array();
        if($resQuery) {
            $resQuery->setFetchMode(PDO::FETCH_ASSOC);
            $i = 0;
            while($row = $resQuery->fetch()) {
                $result[$i]['id'] = $row['id'];
                $result[$i]['title'] = $row['title'];
                $result[$i]['description'] = $row['description'];
                $result[$i]['typeExercise'] = $row['typeExercise'];
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
}