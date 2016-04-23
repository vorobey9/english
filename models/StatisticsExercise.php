<?php

class StatisticsExercise {
    private function checkIdFolder($id) {
        $id = intval($id);
        if(isset($id)) {
            $db = Db::getConnection();
            $result = $db->query("SELECT * FROM `folders` WHERE id='$id'");
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result = $result->fetch();
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

    private function checkIdUser($id) {
        $id = intval($id);
        if(isset($id)) {
            $db = Db::getConnection();
            $result = $db->query("SELECT * FROM `users` WHERE id='$id'");
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result = $result->fetch();
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

    public function add($array) {
        if(isset($array)) {
            $idFolder = intval($array['idFolder']);
            $idUser = intval($array['idUser']);
            if($this->checkIdFolder($idFolder)) {
                if($this->checkIdUser($idUser)) {
                    $allItem = intval($array['allItem']);
                    $sucItem = intval($array['sucItem']);
                    if(isset($allItem) && isset($sucItem) && $allItem > 0) {
                        if($allItem >= $sucItem) {
                            $mark = $array['mark'];
                            $mark = floatval($mark);
                            $mark = round($mark, 2);
                            $db = Db::getConnection();
                            $result = $db->query("INSERT INTO `statisticsexercise` (idUser, idFolder, mark, allItem, sucItem) VALUES ('$idUser', '$idFolder', '$mark', '$allItem', '$sucItem')");
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
        $resQuery = $db->query("SELECT * FROM `statisticsexercise`");

        $result = array();
        if($resQuery) {
            $resQuery->setFetchMode(PDO::FETCH_ASSOC);
            $i = 0;
            while($row = $resQuery->fetch()) {
                $result[$i]['id'] = $row['id'];
                $result[$i]['idUser'] = $row['idUser'];
                $result[$i]['idFolder'] = $row['idFolder'];
                $result[$i]['mark'] = $row['mark'];
                $result[$i]['allItem'] = $row['allItem'];
                $result[$i]['sucItem'] = $row['sucItem'];
                $result[$i]['thisDate'] = $row['thisDate'];
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
            $result = $db->query("SELECT * FROM `statisticsexercise` WHERE id='$id'");
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
            $resQuery = $db->query('DELETE FROM `statisticsexercise` WHERE id='.$id);
            if($resQuery) {
                return true;
            }
        }
        return false;
    }

    public function testWTF() {
        $arr = array();
        $arr['idUser'] = 13;
        $arr['idFolder'] = 1;
        $arr['allItem'] = '10';
        $arr['sucItem'] = '3';
        var_dump($this->getAll());
    }
}