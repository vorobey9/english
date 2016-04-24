<?php

class DescOfSiteSection {
    public function add($array) {
        if(isset($array)) {

            $nameSection = $array['nameSection'];
            $description = $array['description'];

            if (!$this->checkNameSection($nameSection)) {
                $db = Db::getConnection();
                $result = $db->query("INSERT INTO `descofsitesection` (nameSection, description) VALUES ('$nameSection', '$description')");
                $result->setFetchMode(PDO::FETCH_ASSOC);
                $result = $result->fetch();
                if ($result) {
                    return true;
                } else {
                    return false;
                }
            }
            else {
                return false;
            }
        }
    }

    public function getAll() {
        $db = Db::getConnection();
        $resQuery = $db->query("SELECT * FROM `descofsitesection`");

        $result = array();
        if($resQuery) {
            $resQuery->setFetchMode(PDO::FETCH_ASSOC);
            $i = 0;
            while($row = $resQuery->fetch()) {
                $result[$i]['id'] = $row['id'];
                $result[$i]['nameSection'] = $row['nameSection'];
                $result[$i]['description'] = $row['description'];
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
            $result = $db->query("SELECT * FROM `descofsitesection` WHERE id='$id'");
            if($result) {
                $result->setFetchMode(PDO::FETCH_ASSOC);
                $result = $result->fetch();
                return $result;
            }
        }
        return false;
    }

    public function getByName($name) {
        if(isset($name)) {
            $db = Db::getConnection();
            $result = $db->query("SELECT * FROM `descofsitesection` WHERE nameSection='$name'");
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
            $resQuery = $db->query('DELETE FROM `descofsitesection` WHERE id='.$id);
            if($resQuery) {
                return true;
            }
        }
        return false;
    }

    public function deleteByName($name) {
        if(isset($name)) {
            $db = Db::getConnection();
            $resQuery = $db->query('DELETE FROM `descofsitesection` WHERE nameSection='.$name);
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
            $resQuery = $db->query("UPDATE `descofsitesection` SET $parameterName='$newValue' WHERE id='$id'");
            if($resQuery) {
                return true;
            }
        }
        return false;
    }

    private function checkNameSection($name) {
        if(isset($name)) {
            $db = Db::getConnection();
            $result = $db->query("SELECT * FROM 'descofsitesection' WHERE nameSection='$name'");
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
}