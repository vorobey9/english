<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.03.2016
 * Time: 21:14
 */
class Inscribe {
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
                    if(isset($array['skipWord']) && strstr($text, $array['skipWord'])) {
                        $skipWord = $array['skipWord'];
                        $db = Db::getConnection();
                        $result = $db->query("INSERT INTO `inscribe` (idFolder, text, skipWord) VALUES ('$idFolder', '$text', '$skipWord')");
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
        $resQuery = $db->query("SELECT * FROM `inscribe`");

        $result = array();
        if($resQuery) {
            $resQuery->setFetchMode(PDO::FETCH_ASSOC);
            $i = 0;
            while($row = $resQuery->fetch()) {
                $result[$i]['id'] = $row['id'];
                $result[$i]['idFolder'] = $row['idFolder'];
                $result[$i]['text'] = $row['text'];
                $result[$i]['skipWord'] = $row['skipWord'];
                $i++;
            }
            return $result;
        }
        return false;
    }

    public function getAllByIdFolder($idFolder) {
        $idFolder = intval($idFolder);
        if(isset($idFolder)) {
            $db = Db::getConnection();
            $resQuery = $db->query("SELECT * FROM `inscribe` WHERE idFolder='$idFolder'");

            $result = array();
            if($resQuery) {
                $resQuery->setFetchMode(PDO::FETCH_ASSOC);
                $i = 0;
                while($row = $resQuery->fetch()) {
                    $result[$i]['id'] = $row['id'];
                    $result[$i]['idFolder'] = $row['idFolder'];
                    $result[$i]['text'] = $row['text'];
                    $result[$i]['skipWord'] = $row['skipWord'];
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
            $result = $db->query("SELECT * FROM `inscribe` WHERE id='$id'");
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
            $resQuery = $db->query('DELETE FROM `inscribe` WHERE id='.$id);
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
            $resQuery = $db->query("UPDATE `inscribe` SET $parameterName='$newValue' WHERE id='$id'");
            if($resQuery) {
                return true;
            }
        }
        return false;
    }

    public function transformText($text, $skipWord) {
          return str_replace($skipWord, "(___?___)", $text);
    }

    public function test() {
        $arr = array();
        $arr['idFolder'] = 1;
        $arr['text'] = 'andrey lusa ggg';
        $arr['skipWord'] = 'la';

        var_dump($this->updateParameter('skipWord','andrey',2));
    }
}