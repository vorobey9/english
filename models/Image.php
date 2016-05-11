<?php

class Image {
    public function add($array) {
        if(isset($array)) {
            $idNews = $array['idNews'];
            $url = $array['url'];
            $typeImage = $array['type'];
                $db = Db::getConnection();
                $result = $db->query("INSERT INTO `image` (idNews, url, typeImage) VALUES ('$idNews', '$url', '$typeImage')");
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
        $resQuery = $db->query("SELECT * FROM `image`");

        $result = array();
        if($resQuery) {
            $resQuery->setFetchMode(PDO::FETCH_ASSOC);
            $i = 0;
            while($row = $resQuery->fetch()) {
                $result[$i]['id'] = $row['id'];
                $result[$i]['idNews'] = $row['idNews'];
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
            $result = $db->query("SELECT * FROM `image` WHERE id='$id'");
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
            $resQuery = $db->query("SELECT * FROM `image` WHERE idNews='$idNews'");

            $result = array();
            if($resQuery) {
                $resQuery->setFetchMode(PDO::FETCH_ASSOC);
                $i = 0;
                while($row = $resQuery->fetch()) {
                    $result[$i]['id'] = $row['id'];
                    $result[$i]['idNews'] = $row['idNews'];
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

    public function getLastImage($limit) {
        $limit = intval($limit);
        if(isset($limit) && $limit > 0) {
            $db = Db::getConnection();
            $resQuery = $db->query("SELECT * FROM `image` ORDER BY uploadDate DESC LIMIT 0, '$limit'");

            $result = array();
            if($resQuery) {
                $resQuery->setFetchMode(PDO::FETCH_ASSOC);
                $i = 0;
                while($row = $resQuery->fetch()) {
                    $result[$i]['id'] = $row['id'];
                    $result[$i]['idNews'] = $row['idNews'];
                    $result[$i]['url'] = $row['url'];
                    $result[$i]['uploadDate'] = $row['uploadDate'];
                    $i++;
                }
                return $result;
            }
            return false;
        }
        else {
            return false;
        }
    }

    public function deleteById($id) {
        $id = intval($id);
        if(isset($id)) {
            $db = Db::getConnection();
            $resQuery = $db->query('DELETE FROM `image` WHERE id='.$id);
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
            $resQuery = $db->query("UPDATE `image` SET $parameterName='$newValue' WHERE id='$id'");
            if($resQuery) {
                return true;
            }
        }
        return false;
    }
}