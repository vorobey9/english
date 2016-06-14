<?php

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
            $idAuthor = $array['idAuthor'];
            $idAuthor = intval($idAuthor);
            if(isset($title) && isset($description) && isset($idAuthor)) {

                echo 'In isset Title Desc'.'<br>';

                if(!$this->getByTitle($title)) {
                    $db = Db::getConnection();
                    $result = $db->query("INSERT INTO `elective` (title, description, idAuthor) VALUES ('$title', '$description', '$idAuthor')");
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
        $resQuery = $db->query("SELECT * FROM `elective` WHERE idAuthor != 1");

        $result = array();
        if($resQuery) {
            $resQuery->setFetchMode(PDO::FETCH_ASSOC);
            $i = 0;
            while($row = $resQuery->fetch()) {
                $result[$i]['id'] = $row['id'];
                $result[$i]['title'] = $row['title'];
                $result[$i]['description'] = $row['description'];
                $result[$i]['idAuthor'] = $row['idAuthor'];
                $result[$i]['createDate'] = $row['createDate'];
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

    public function getByIdAuthor($idAuthor) {
        $idAuthor = intval($idAuthor);
        if(isset($id)) {
            $db = Db::getConnection();
            $resQuery = $db->query("SELECT * FROM `elective` WHERE idAuthor='$idAuthor'");
            $result = array();
            if($resQuery) {
                $resQuery->setFetchMode(PDO::FETCH_ASSOC);
                $i = 0;
                while($row = $resQuery->fetch()) {
                    $result[$i]['id'] = $row['id'];
                    $result[$i]['title'] = $row['title'];
                    $result[$i]['description'] = $row['description'];
                    $result[$i]['idAuthor'] = $row['idAuthor'];
                    $result[$i]['createDate'] = $row['createDate'];
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

}