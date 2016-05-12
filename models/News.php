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
                $idAuthor = $array['idAuthor'];
                $urlImage = $array['urlImage'];
                if(!isset($urlImage)) {
                    if($importance == 1) {
                        $urlImage = '/newsImg/emptyImportance.jpg';
                    }
                    else {
                        $urlImage = '/newsImg/empty.jpg';
                    }
                }
                if(isset($title) && isset($description)) {
                    $db = Db::getConnection();
                    $result = $db->query("INSERT INTO `news` (title, description, idElective, importance, idAuthor, urlImage) VALUES ('$title', '$description', '$idElective', '$importance', '$idAuthor', '$urlImage')");
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

    public function getAll($idElective, $importance, $limit, $begin) {
        $idElective = intval($idElective);
        $importance = intval($importance);
        $limit = (string) $limit;
        $begin = (string) $begin;
        if(isset($importance) && ($importance == 0 || $importance == 1)) {
            if(isset($limit) && intval($limit) > 0) {
                if(isset($begin) && intval($begin) > 0) {
                    $db = Db::getConnection();
                    $resQuery = $db->query("SELECT * FROM `news` WHERE idElective='$idElective' AND importance='$importance' ORDER BY tempDate DESC LIMIT $begin,$limit");
                }
                else {
                    $db = Db::getConnection();
                    $resQuery = $db->query("SELECT * FROM `news` WHERE idElective='$idElective' AND importance='$importance' ORDER BY tempDate DESC LIMIT 0,$limit");
                }
            }
            else {
                $db = Db::getConnection();
                $resQuery = $db->query("SELECT * FROM `news` WHERE importance='$importance' ORDER BY tempDate DESC");
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
                    $result[$i]['idAuthor'] = $row['idAuthor'];
                    $result[$i]['urlImage'] = $row['urlImage'];
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

//    public function getAllByIdElective($idElective, $importance) {
//        $idElective = intval($idElective);
//        $importance = intval($importance);
//        if(isset($idElective) && isset($importance)) {
//            $db = Db::getConnection();
//            $resQuery = $db->query("SELECT * FROM `news` WHERE idElective='$idElective' AND importance='$importance'");
//            $result = array();
//            if($resQuery) {
//                $resQuery->setFetchMode(PDO::FETCH_ASSOC);
//                $i = 0;
//                while($row = $resQuery->fetch()) {
//                    $result[$i]['id'] = $row['id'];
//                    $result[$i]['title'] = $row['title'];
//                    $result[$i]['description'] = $row['description'];
//                    $result[$i]['tempDate'] = $row['tempDate'];
//                    $result[$i]['idElective'] = $row['idElective'];
//                    $result[$i]['importance'] = $row['importance'];
//                    $result[$i]['idAuthor'] = $row['idAuthor'];
//                    $result[$i]['urlImage'] = $row['urlImage'];
//                    $i++;
//                }
//                return $result;
//            }
//        }
//        return false;
//    }

//    public function getLastNewsByIdElective($idElective, $importance, $limit) {
//        $idElective = intval($idElective);
//        $importance = intval($importance);
//        //$limit = intval($limit);
//        $limit = (string) $limit;
//        //echo '<br>'.'idElective = '.$idElective.' ; importance = '.$importance.' ; limit = '.$limit.'<br>';
//        if(isset($idElective) && isset($importance) && isset($limit) && intval($limit) > 0) {
//            $db = Db::getConnection();
//            $resQuery = $db->query("SELECT * FROM `news` WHERE idElective='$idElective' AND importance='$importance' ORDER BY tempDate DESC LIMIT 0,$limit");
//            //$resQuery = $db->query("SELECT * FROM `news` WHERE idElective='$idElective' AND importance='$importance' ORDER BY tempDate DESC LIMIT 0, '$limit'");
//            $result = array();
//            if($resQuery) {
//                $resQuery->setFetchMode(PDO::FETCH_ASSOC);
//                $i = 0;
//                while($row = $resQuery->fetch()) {
//                    $result[$i]['id'] = $row['id'];
//                    $result[$i]['title'] = $row['title'];
//                    $result[$i]['description'] = $row['description'];
//                    $result[$i]['tempDate'] = $row['tempDate'];
//                    $result[$i]['idElective'] = $row['idElective'];
//                    $result[$i]['importance'] = $row['importance'];
//                    $result[$i]['idAuthor'] = $row['idAuthor'];
//                    $result[$i]['urlImage'] = $row['urlImage'];
//                    $i++;
//                }
//                return $result;
//            }
//            else {
//                return false;
//            }
//        }
//        else {
//            return false;
//        }
//    }

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