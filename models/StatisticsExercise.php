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

    public function add($idFolder, $idUser, $allItem, $sucItem, $mark) {
        $mark = round($mark, 2);
        if($allItem >= $sucItem) {
            $db = Db::getConnection();
            $result = $db->query("INSERT INTO `statisticsexercise` (idUser, idFolder, mark, allItem, sucItem) VALUES ('$idUser', '$idFolder', '$mark', '$allItem', '$sucItem')");
            if($result) {
                return true;
            }
        }
        return false;
    }

    public function getAll($idUser, $idFolder) {
        if($idUser != false && $idFolder != false) {
            $db = Db::getConnection();
            $resQuery = $db->query("SELECT * FROM `statisticsexercise` WHERE idUser='$idUser' AND idFolder='$idFolder'");
        }
        else {
            $db = Db::getConnection();
            $resQuery = $db->query("SELECT * FROM `statisticsexercise` ORDER BY thisDate DESC");
        }

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

    public function getBestRes($idUser, $idFolder) {
        $db = Db::getConnection();
        $result = $db->query("SELECT * FROM `statisticsexercise` WHERE idUser='$idUser' AND idFolder='$idFolder' ORDER BY mark DESC limit 0, 1");
        if($result) {
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result = $result->fetch();
            return $result;
        }
        else {
            return false;
        }
    }

    public function getLastForStat($idUser) {
        $db = Db::getConnection();
        $resQuery = $db->query("SELECT `statisticsexercise`.`mark`, `folders`.`title` FROM `statisticsexercise` INNER JOIN `folders` ON `statisticsexercise`.`idFolder` = `folders`.`id` WHERE `statisticsexercise`.`idUser`='$idUser' ORDER BY `statisticsexercise`.`thisDate` DESC limit 0, 10");
        $result = array();
        if($resQuery) {
            $resQuery->setFetchMode(PDO::FETCH_ASSOC);
            $i = 0;
            while($row = $resQuery->fetch()) {
                $result[$i]['mark'] = $row['mark'];
                $result[$i]['title'] = $row['title'];
                $i++;
            }
            return $result;
        }
        return false;
    }
}