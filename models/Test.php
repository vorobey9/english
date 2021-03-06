<?php

class Test {
    private function checkIdFolder($id) {
        $id = intval($id);
        if(isset($id)) {
            $db = Db::getConnection();
            $result = $db->query("SELECT * FROM `folders` WHERE id='$id'");
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
            $idFolder = intval($array['idFolder']);
            if($this->checkIdFolder($idFolder)) {
                if(isset($array['text'])) {
                    $text = $array['text'];
                    $A = $array['answerA'];
                    $B = $array['answerB'];
                    $C = $array['answerC'];
                    $right = $array['answerRight'];
                    if(isset($A) && isset($B) && isset($C) && isset($right)) {
                            $db = Db::getConnection();
                            $result = $db->query("INSERT INTO `test` (idFolder, text, answerA, answerB, answerC, answerRight) VALUES ('$idFolder', '$text', '$A', '$B', '$C', '$right')");
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

    public function getAll() {
        $db = Db::getConnection();
        $resQuery = $db->query("SELECT * FROM `test`");

        $result = array();
        if($resQuery) {
            $resQuery->setFetchMode(PDO::FETCH_ASSOC);
            $i = 0;
            while($row = $resQuery->fetch()) {
                $result[$i]['id'] = $row['id'];
                $result[$i]['idFolder'] = $row['idFolder'];
                $result[$i]['text'] = $row['text'];
                $result[$i]['answerA'] = $row['answerA'];
                $result[$i]['answerB'] = $row['answerB'];
                $result[$i]['answerC'] = $row['answerC'];
                $result[$i]['answerRight'] = $row['answerRight'];
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
            $result = $db->query("SELECT * FROM `test` WHERE id='$id'");
            if($result) {
                $result->setFetchMode(PDO::FETCH_ASSOC);
                $result = $result->fetch();
                return $result;
            }
        }
        return false;
    }

    public function getAllByIdFolder($idFolder) {
        $idFolder = intval($idFolder);
        if(isset($idFolder)) {
            $db = Db::getConnection();
            $resQuery = $db->query("SELECT * FROM `test` WHERE idFolder='$idFolder'");

            $result = array();
            if($resQuery) {
                $resQuery->setFetchMode(PDO::FETCH_ASSOC);
                $i = 0;
                while($row = $resQuery->fetch()) {
                    $result[$i]['id'] = $row['id'];
                    $result[$i]['idFolder'] = $row['idFolder'];
                    $result[$i]['text'] = $row['text'];
                    $result[$i]['answerA'] = $row['answerA'];
                    $result[$i]['answerB'] = $row['answerB'];
                    $result[$i]['answerC'] = $row['answerC'];
                    $result[$i]['answerRight'] = $row['answerRight'];
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

    public function deleteById($id) {
        $id = intval($id);
        if(isset($id)) {
            $db = Db::getConnection();
            $resQuery = $db->query('DELETE FROM `test` WHERE id='.$id);
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
            $resQuery = $db->query("UPDATE `test` SET $parameterName='$newValue' WHERE id='$id'");
            if($resQuery) {
                return true;
            }
        }
        return false;
    }

    public function formatTests($tests) {
        $newTests = array();
        $i = 0;
        foreach($tests as $test) {
            $arr = array();
            $newTests[$i]['id'] = $test['id'];
            $newTests[$i]['idFolder'] = $test['idFolder'];
            $newTests[$i]['text'] = $test['text'];
            $arr[] = $test['answerA'];
            $arr[] = $test['answerB'];
            $arr[] = $test['answerC'];
            $arr[] = $test['answerRight'];
            shuffle($arr);
            $newTests[$i]['ans1'] = $arr[0];
            $newTests[$i]['ans2'] = $arr[1];
            $newTests[$i]['ans3'] = $arr[2];
            $newTests[$i]['ans4'] = $arr[3];
            $i++;
        }
        return $newTests;
    }

}