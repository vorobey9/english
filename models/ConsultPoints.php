<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 14.03.2016
 * Time: 19:23
 */
class ConsultPoints {
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
                        if($this->checkTimeFormat($array['beginTime']) || $this->checkTimeFormat($array['endTime'])) {
                            if(isset($array['room'])) {
                                $beginTime = $array['beginTime'];
                                $endTime = $array['endTime'];
                                $description = $array['description'];
                                $room = $array['room'];

                                //////DATA BASE/////////////////////
                                $db = Db::getConnection();
                                $result = $db->query("INSERT INTO `consultpoints` (idTeacher, beginTime, endTime, dayStamp, description, room) VALUES ('$idTeacher', '$beginTime', '$endTime', '$dayStamp', '$description', '$room')");

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
        else {
            return false;
        }
    }

    public function getAll() {
        $db = Db::getConnection();
        $resQuery = $db->query("SELECT * FROM `consultpoints`");

        $result = array();
        if($resQuery) {
            $resQuery->setFetchMode(PDO::FETCH_ASSOC);
            $i = 0;
            while($row = $resQuery->fetch()) {
                $result[$i]['id'] = $row['id'];
                $result[$i]['idTeacher'] = $row['idTeacher'];
                $result[$i]['beginTime'] = $row['beginTime'];
                $result[$i]['endTime'] = $row['endTime'];
                $result[$i]['dayStamp'] = $row['dayStamp'];
                $result[$i]['description'] = $row['description'];
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
            $result = $db->query("SELECT * FROM `consultpoints` WHERE id='$id'");
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
            $resQuery = $db->query('DELETE FROM `consultpoints` WHERE id='.$id);
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
            $resQuery = $db->query("UPDATE `consultpoints` SET $parameterName='$newValue' WHERE id='$id'");
            if($resQuery) {
                return true;
            }
        }
        return false;
    }

    private function checkDayPoint($idTeacher, $dayStamp) {
        $db = Db::getConnection();
        $resQuery = $db->query("SELECT * FROM `consultpoints` WHERE idTeacher='$idTeacher' AND dayStamp='$dayStamp'");
        $resQuery->setFetchMode(PDO::FETCH_ASSOC);
        $resQuery = $resQuery->fetch();
        if($resQuery) {
            return true;
        }
        else {
            return false;
        }
    }

    private function checkTimeFormat($time) {
        if (preg_match('/^([0-1][0-9]|[2][0-3]):([0-5][0-9]):([0-5][0-9])$/', $time))
            return true;
        else
            return false;
    }

    public function test() {
        var_dump($this->updateParameter('beginTime', "09:09:09", 8));
    }
}