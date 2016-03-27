<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 27.03.2016
 * Time: 20:26
 */
class News {
    private function checkIdElective($id) {
        $id = intval($id);
        if(isset($id)) {
            $db = Db::getConnection();
            $result = $db->query("SELECT * FROM `elective` WHERE id='$id'");
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
            $idElective = intval($array['idElective']);
            if($this->checkIdElective($idElective)) {
                $title = $array['title'];
                $description = $array['description'];
                if(isset($title) && isset($description)) {
                    $db = Db::getConnection();
                    $result = $db->query("INSERT INTO `news` (title, description, idElective) VALUES ('$title', '$description', '$idElective')");
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
        $resQuery = $db->query("SELECT * FROM `news`");

        $result = array();
        if($resQuery) {
            $resQuery->setFetchMode(PDO::FETCH_ASSOC);
            $i = 0;
            while($row = $resQuery->fetch()) {
                $result[$i]['id'] = $row['id'];
                $result[$i]['title'] = $row['title'];
                $result[$i]['description'] = $row['description'];
                $result[$i]['tempDate'] = $row['tempDate'];
                $result[$i]['idElective'] = $row['idElective'];
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
            $result = $db->query("SELECT * FROM `news` WHERE id='$id'");
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
            $resQuery = $db->query('DELETE FROM `news` WHERE id='.$id);
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
            $resQuery = $db->query("UPDATE `news` SET $parameterName='$newValue' WHERE id='$id'");
            if($resQuery) {
                return true;
            }
        }
        return false;
    }

    public function testWTF() {
        $arr = array();
        $arr['title'] = 'MAIN';
        $arr['description'] = 'vasiy afaeg gsrgs sgrs ggfh';
        $arr['idElective'] = 1;

        var_dump($this->updateParameter('description', 'aaa', 3));
    }
}