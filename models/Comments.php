<?php

class Comments
{
    public function add($array) {
        if(isset($array)) {
            $idAuthor = $array['idAuthor'];
            $idNews = $array['idNews'];
            $text = $array['text'];

            $db = Db::getConnection();
            $result = $db->query("INSERT INTO `commentar` (idAuthor, idNews, text) VALUES ('$idAuthor', '$idNews', '$text')");
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->fetch();
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

    public function getAllByIdNews($idNews ,$limit, $begin) {
        $resQuery = false;
        if($limit == false) {
            $db = Db::getConnection();
            $resQuery = $db->query("SELECT `users`.`firstName`, `users`.`middleName`, `users`.`lastName`, `users`.`urlImage`, `commentar`.`text`, `commentar`.`thisDate`  FROM `commentar` INNER JOIN `users` ON `commentar`.`idAuthor` = `users`.`id` WHERE `commentar`.`idNews` = '$idNews' ORDER BY `commentar`.`thisDate` ASC");
        }
        else if($begin == false && intval($limit) > 0) {
            $limit = (string) $limit;
            $db = Db::getConnection();
            $resQuery = $db->query("SELECT `users`.`firstName`, `users`.`middleName`, `users`.`lastName`, `users`.`urlImage`, `commentar`.`text`, `commentar`.`thisDate` FROM `commentar` INNER JOIN `users` ON `commentar`.`idAuthor` = `users`.`id` WHERE `commentar`.`idNews` = '$idNews' ORDER BY `commentar`.`thisDate` ASC LIMIT 0, $limit");
        }
        else if(intval($limit) > 0 && intval($begin) > 0) {
            $begin = (string) $begin;
            $limit = (string) $limit;
            $db = Db::getConnection();
            $resQuery = $db->query("SELECT `users`.`firstName`, `users`.`middleName`, `users`.`lastName`, `users`.`urlImage`, `commentar`.`text`, `commentar`.`thisDate` FROM `commentar` INNER JOIN `users` ON `commentar`.`idAuthor` = `users`.`id` WHERE `commentar`.`idNews` = '$idNews' ORDER BY `commentar`.`thisDate` ASC LIMIT $begin, $limit");
        }
        $result = array();
        if($resQuery) {
            $resQuery->setFetchMode(PDO::FETCH_ASSOC);
            $i = 0;
            while($row = $resQuery->fetch()) {
                $result[$i]['firstName'] = $row['firstName'];
                $result[$i]['middleName'] = $row['middleName'];
                $result[$i]['lastName'] = $row['lastName'];
                $result[$i]['urlImage'] = $row['urlImage'];
                $result[$i]['text'] = $row['text'];
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
            $result = $db->query("SELECT * FROM `commentar` WHERE id='$id'");
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
            $resQuery = $db->query('DELETE FROM `commentar` WHERE id='.$id);
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
            $resQuery = $db->query("UPDATE `commentar` SET $parameterName='$newValue' WHERE id='$id'");
            if($resQuery) {
                return true;
            }
        }
        return false;
    }
}