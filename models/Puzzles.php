<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.03.2016
 * Time: 20:31
 */
class Puzzles {
    private function checkIdFolder($id) {
        $id = intval($id);
        if(isset($id)) {
            $db = Db::getConnection();
            $resQuery = $db->query("SELECT * FROM `folders` WHERE id='$id'");
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
            $idFolder = intval($array['idFolder']);
            if($this->checkIdFolder($idFolder)) {
                if(isset($array['textPuzzle'])) {
                    $textPuzzle = $array['textPuzzle'];
                    $db = Db::getConnection();
                    $result = $db->query("INSERT INTO `puzzles` (idFolder, textPuzzle) VALUES ('$idFolder', '$textPuzzle')");
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
        $resQuery = $db->query("SELECT * FROM `puzzles`");

        $result = array();
        if($resQuery) {
            $resQuery->setFetchMode(PDO::FETCH_ASSOC);
            $i = 0;
            while($row = $resQuery->fetch()) {
                $result[$i]['id'] = $row['id'];
                $result[$i]['idFolder'] = $row['idFolder'];
                $result[$i]['textPuzzle'] = $row['textPuzzle'];
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
            $result = $db->query("SELECT * FROM `puzzles` WHERE id='$id'");
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
            $resQuery = $db->query('DELETE FROM `puzzles` WHERE id='.$id);
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
            $resQuery = $db->query("UPDATE `puzzles` SET $parameterName='$newValue' WHERE id='$id'");
            if($resQuery) {
                return true;
            }
        }
        return false;
    }


    public function test() {
//        $arr = array();
//        $arr['idFolder'] = 1;
//        $arr['textPuzzle'] = '123abc';

        var_dump($this->updateParameter('textPuzzle','testtext',5));
    }
}