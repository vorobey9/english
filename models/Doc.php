<?php

class Doc
{
    public function add($array) {
        if(isset($array)) {
            $idNews = $array['idNews'];
            $url = $array['url'];
            $title = $array['title'];
            $db = Db::getConnection();
            $result = $db->query("INSERT INTO `document` (idNews, url, title) VALUES ('$idNews', '$url', '$title')");
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

    public function getAll() {
        $db = Db::getConnection();
        $resQuery = $db->query("SELECT * FROM `document` ORDER BY uploadDate DESC");

        $result = array();
        if($resQuery) {
            $resQuery->setFetchMode(PDO::FETCH_ASSOC);
            $i = 0;
            while($row = $resQuery->fetch()) {
                $result[$i]['id'] = $row['id'];
                $result[$i]['idNews'] = $row['idNews'];
                $result[$i]['title'] = $row['title'];
                $result[$i]['url'] = $row['url'];
                $result[$i]['uploadDate'] = $row['uploadDate'];
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
            $result = $db->query("SELECT * FROM `document` WHERE id='$id'");
            if($result) {
                $result->setFetchMode(PDO::FETCH_ASSOC);
                $result = $result->fetch();
                return $result;
            }
        }
        return false;
    }

    public function getByIdNews($idNews) {
        $idNews = intval($idNews);
        if(isset($idNews)) {
            $db = Db::getConnection();
            $resQuery = $db->query("SELECT * FROM `document` WHERE idNews='$idNews' ORDER BY uploadDate DESC");

            $result = array();
            if($resQuery) {
                $resQuery->setFetchMode(PDO::FETCH_ASSOC);
                $i = 0;
                while($row = $resQuery->fetch()) {
                    $result[$i]['id'] = $row['id'];
                    $result[$i]['idNews'] = $row['idNews'];
                    $result[$i]['title'] = $row['title'];
                    $result[$i]['url'] = $row['url'];
                    $result[$i]['uploadDate'] = $row['uploadDate'];
                    $i++;
                }
                return $result;
            }
            return false;
        }
        return false;
    }

    public function deleteById($id) {
        $id = intval($id);
        if(isset($id)) {
            $db = Db::getConnection();
            $resQuery = $db->query('DELETE FROM `document` WHERE id='.$id);
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
            $resQuery = $db->query("UPDATE `document` SET $parameterName='$newValue' WHERE id='$id'");
            if($resQuery) {
                return true;
            }
        }
        return false;
    }
}