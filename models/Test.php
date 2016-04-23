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
                    $D = $array['answerD'];
                    $right = $array['answerRight'];
                    if(isset($A) && isset($B) && isset($C) && isset($D) && isset($right)) {
                        if(strcmp($right, $A) == 0 || strcmp($right, $B) == 0 || strcmp($right, $C) == 0 || strcmp($right, $D) == 0) {
                            $db = Db::getConnection();
                            $result = $db->query("INSERT INTO `test` (idFolder, text, answerA, answerB, answerC, answerD, answerRight) VALUES ('$idFolder', '$text', '$A', '$B', '$C', '$D', '$right')");
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
                $result[$i]['answerD'] = $row['answerD'];
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
                    $result[$i]['answerD'] = $row['answerD'];
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

    public function testWTF() {
        $arr = array();
        $arr['idFolder'] = 1;
        $arr['text'] = 'andrey lusa ggg aaa';
        $arr['answerA'] = 'andrey';
        $arr['answerB'] = 'lusa';
        $arr['answerC'] = 'ggg';
        $arr['answerD'] = 'aaa';
        $arr['answerRight'] = 'g';
        var_dump($this->updateParameter('answerA','aaa', 9));
    }

    public function checkUserAnswer($idFolder, $data) {
        $testData = $this->getAllByIdFolder($idFolder);
        $countAllTest = count($testData);
        $rightUserTest = 0;
        foreach($testData as $test) {
            $idTest = $test['id'];
            $rightAns = $test['answerRight'];
            foreach ($data as $item) {
                if($item->id == $idTest) {
                    if($item->value == $rightAns) {
                        $rightUserTest++;
                    }
                }
            }
        }
        $result = $rightUserTest*100/$countAllTest;
        return array(
            "res" => $result,
            "countRight" => $rightUserTest,
            "countAll" => $countAllTest
        );
    }
}