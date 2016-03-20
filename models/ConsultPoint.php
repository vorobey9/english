<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 14.03.2016
 * Time: 19:23
 */
class ConsultPoint {

    private function checkIdTeacher($id) {
        $id = intval($id);
        if(isset($id)) {
            $db = Db::getConnection();
            $resQuery = $db->query("SELECT * FROM `teacher` WHERE id='$id'");
            if($resQuery) {
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

                                ////////////////////////////////////
                                //////DATA BASE/////////////////////
                                ////////////////////////////////////

                                return true;
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
        $resQuery = $db->query("SELECT * FROM `consultPoint` WHERE idTeacher='$idTeacher' AND dayStamp='$dayStamp'");
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

    public function testDate() {
        $date = '14:05:05';
//        $date = date('H:i:s', $date);
//        $date = date('H:i:s', $date);
//        echo $date.'<br>';

//        $db = Db::getConnection();
//        $result = $db->query("INSERT INTO `consultpoints` (idTeacher, beginTime, endTime, dayStamp, description, room) VALUES ('9', '$date', '$date', '1', 'abc', '4205')");
//        if($result) {
//            echo "AAAAA";
//        }
//        else {
//            echo "BBBBB";
//        }
        echo $this->checkTimeFormat("23:11:01");
    }
}