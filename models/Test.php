<?php

class Test {
    private function checkIdFolder($id) {

        echo __METHOD__.'<br>';

        $id = intval($id);
        if(isset($id)) {
            $db = Db::getConnection();
            $resQuery = $db->query("SELECT * FROM `folders` WHERE id='$id'");
            if($resQuery) {

                echo __METHOD__.' true '.'<br>';
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

            echo __METHOD__.' true isset array'.'<br>';

            $idFolder = intval($array['idFolder']);
            if($this->checkIdFolder($idFolder)) {

                echo __METHOD__.' true checkIdFolder'.'<br>';

                if(isset($array['text'])) {

                    echo __METHOD__.' true isset text'.'<br>';

                    $text = $array['text'];
                    $A = $array['answerA'];
                    $B = $array['answerB'];
                    $C = $array['answerC'];
                    $D = $array['answerD'];
                    $right = $array['answerRight'];
                    if(isset($A) && isset($B) && isset($C) && isset($D) && isset($right)) {

                        echo __METHOD__.' true isset A B C D right'.'<br>';

                        if(strcmp($right, $A) == 0 || strcmp($right, $B) == 0 || strcmp($right, $C) == 0 || strcmp($right, $D) == 0) {

                            echo __METHOD__.' true strcmp'.'<br>';

                            $db = Db::getConnection();
                            $result = $db->query("INSERT INTO `test` (idFolder, text, answerA, answerB, answerC, answerD, answerRight) VALUES ('$idFolder', '$text', '$A', '$B', '$C', '$D', '$right')");
                            if($result) {

                                echo __METHOD__.' true result'.'<br>';

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
}