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
                $importance = $array['importance'] || 0;
                if(isset($title) && isset($description)) {
                    $db = Db::getConnection();
                    $result = $db->query("INSERT INTO `news` (title, description, idElective, importance) VALUES ('$title', '$description', '$idElective', '$importance')");
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
                $result[$i]['importance'] = $row['importance'];
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

    public function getAllByIdElective($idElective, $limit) {
        $idElective = intval($idElective);
        if(isset($idElective)) {
            $db = Db::getConnection();
            if(isset($limit)) {
                $resQuery = $db->query("SELECT * FROM `news` WHERE idElective='$idElective' ORDER BY ASC LIMIT '$limit'");
            }
            else{
                $resQuery = $db->query("SELECT * FROM `news` WHERE idElective='$idElective'");
            }
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
                    $result[$i]['importance'] = $row['importance'];
                    $i++;
                }
                return $result;
            }
        }
        return false;
    }

//"SELECT * FROM `" . DB_PREFIX . "corresponds` WHERE `id_r`='3' AND `id_s`='2' ORDER BY `date` ASC LIMIT 5";


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

        var_dump($this->getAll());
    }
}