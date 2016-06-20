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
            $resQuery = $db->query("SELECT * FROM `statisticsexercise` WHERE idUser='$idUser' AND idFolder='$idFolder' ORDER BY thisDate DESC");
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

    public function getByType($type, $idUser) {
        if(isset($type) && isset($idUser)) {

            $db = Db::getConnection();
            $resQuery = $db->query("SELECT `statisticsexercise`.`mark`, `folders`.`title` FROM `statisticsexercise` INNER JOIN `folders` ON `statisticsexercise`.`idFolder` = `folders`.`id` WHERE `statisticsexercise`.`idUser`='$idUser' AND `folders`.`typeExercise` = '$type' ORDER BY `statisticsexercise`.`thisDate` DESC");
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
            else {
                return false;
            }
        }
        else {
            return false;
        }
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

    public function getAllByParam($idFolder, $byType) {
        switch ($byType) {
            case 'best':
                $db = Db::getConnection();
                $resQuery = $db->query("SELECT `statisticsexercise`.`mark`, `users`.`lastName`, `users`.`firstName` FROM `statisticsexercise` INNER JOIN `users` ON `statisticsexercise`.`idUser` = `users`.`id` WHERE idFolder='$idFolder' ORDER BY mark DESC limit 0, 10");
                break;
            case 'loser':
                $db = Db::getConnection();
                $resQuery = $db->query("SELECT `statisticsexercise`.`mark`, `users`.`lastName`, `users`.`firstName` FROM `statisticsexercise` INNER JOIN `users` ON `statisticsexercise`.`idUser` = `users`.`id` WHERE idFolder='$idFolder' ORDER BY mark ASC limit 0, 10");
                break;
            case 'last':
                $db = Db::getConnection();
                $resQuery = $db->query("SELECT `statisticsexercise`.`mark`, `users`.`lastName`, `users`.`firstName` FROM `statisticsexercise` INNER JOIN `users` ON `statisticsexercise`.`idUser` = `users`.`id` WHERE idFolder='$idFolder' ORDER BY thisDate DESC limit 0, 10");
                break;
        }
        $result = array();
        if($resQuery) {
            $resQuery->setFetchMode(PDO::FETCH_ASSOC);
            $i = 0;
            while($row = $resQuery->fetch()) {
                $result[$i]['mark'] = $row['mark'];
                $result[$i]['firstName'] = $row['firstName'];
                $result[$i]['lastName'] = $row['lastName'];
                $i++;
            }
            return $result;
        }
        else {
            return false;
        }
    }

    public function getByNameByTypeEx($firstName, $middleName, $lastName, $typeEx) {
                $db = Db::getConnection();
                $resQuery = $db->query("SELECT `statisticsexercise`.`mark`, `folders`.`title`, `statisticsexercise`.`thisDate` FROM (`folders` INNER JOIN `statisticsexercise` ON `statisticsexercise`.`idFolder` = `folders`.`id`) INNER JOIN `users` ON `statisticsexercise`.`idUser` = `users`.`id` WHERE `users`.`firstName`='$firstName' AND `users`.`middleName`='$middleName' AND `users`.`lastName`='$lastName' AND `folders`.`typeExercise` = `$typeEx` ORDER BY mark DESC limit 0, 10");
        $result = array();
        if($resQuery) {
            $resQuery->setFetchMode(PDO::FETCH_ASSOC);
            $i = 0;
            while($row = $resQuery->fetch()) {
                $result[$i]['mark'] = $row['mark'];
                $result[$i]['title'] = $row['title'];
                $result[$i]['thisDate'] = $row['thisDate'];
                $i++;
            }
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