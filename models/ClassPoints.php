<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 20.03.2016
 * Time: 14:15
 */

class ClassPoints {
    private function checkIdTeacher($id) {
        $id = intval($id);
        if(isset($id)) {
            $db = Db::getConnection();
            $result = $db->query("SELECT * FROM `teachers` WHERE id='$id'");
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
            $idTeacher = intval($array['idTeacher']);
            $dayStamp = intval($array['dayStamp']);
            if($this->checkIdTeacher($idTeacher)) {
                if($dayStamp < 8 && $dayStamp > 0) {
                    if(is_numeric($dayStamp) && !$this->checkDayPoint($idTeacher, $dayStamp)) {
                            if(isset($array['room'])) {
                                $numLesson = $array['numLesson'];
                                $numeratorGroup = $array['numeratorGroup'];
                                $denominatorGroup = $array['denominatorGroup'];
                                $room = $array['room'];

                                //////DATA BASE/////////////////////
                                $db = Db::getConnection();
                                $result = $db->query("INSERT INTO `classpoints` (idTeacher, numLesson, dayStamp, numeratorGroup, denominatorGroup, room) VALUES ('$idTeacher', '$numLesson', '$dayStamp', '$numeratorGroup', '$denominatorGroup', '$room')");

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
    private function checkDayPoint($idTeacher, $dayStamp) {
        $db = Db::getConnection();
        $resQuery = $db->query("SELECT * FROM `classpoints` WHERE idTeacher='$idTeacher' AND dayStamp='$dayStamp'");
        $resQuery->setFetchMode(PDO::FETCH_ASSOC);
        $resQuery = $resQuery->fetch();
        if($resQuery) {
            return true;
        }
        else {
            return false;
        }
    }

    public function getAll() {
        $db = Db::getConnection();
        $resQuery = $db->query("SELECT * FROM `classpoints`");

        $result = array();
        if($resQuery) {
            $resQuery->setFetchMode(PDO::FETCH_ASSOC);
            $i = 0;
            while($row = $resQuery->fetch()) {
                $result[$i]['id'] = $row['id'];
                $result[$i]['idTeacher'] = $row['idTeacher'];
                $result[$i]['numLesson'] = $row['numLesson'];
                $result[$i]['dayStamp'] = $row['dayStamp'];
                $result[$i]['numeratorGroup'] = $row['numeratorGroup'];
                $result[$i]['denominatorGroup'] = $row['denominatorGroup'];
                $result[$i]['room'] = $row['room'];
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
            $result = $db->query("SELECT * FROM `classpoints` WHERE id='$id'");
            if($result) {
                $result->setFetchMode(PDO::FETCH_ASSOC);
                $result = $result->fetch();
                return $result;
            }
        }
        return false;
    }

    public function getByIdTeacher($idTeacher) {
        $idTeacher = intval($idTeacher);
        $db = Db::getConnection();
        $resQuery = $db->query("SELECT * FROM `classpoints` WHERE idTeacher='$idTeacher' ORDER BY dayStamp ASC");

        $result = array();
        if($resQuery) {
            $resQuery->setFetchMode(PDO::FETCH_ASSOC);
            $i = 0;
            while($row = $resQuery->fetch()) {
                $result[$i]['id'] = $row['id'];
                $result[$i]['idTeacher'] = $row['idTeacher'];
                $result[$i]['numLesson'] = $row['numLesson'];
                $result[$i]['dayStamp'] = $row['dayStamp'];
                $result[$i]['numeratorGroup'] = $row['numeratorGroup'];
                $result[$i]['denominatorGroup'] = $row['denominatorGroup'];
                $result[$i]['room'] = $row['room'];
                $i++;
            }
            return $result;
        }
        return false;
    }

    public function deleteById($id) {
        $id = intval($id);
        if(isset($id)) {
            $db = Db::getConnection();
            $resQuery = $db->query('DELETE FROM `classpoints` WHERE id='.$id);
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
            $resQuery = $db->query("UPDATE `classpoints` SET $parameterName='$newValue' WHERE id='$id'");
            if($resQuery) {
                return true;
            }
        }
        return false;
    }
}