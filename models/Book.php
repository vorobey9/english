<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 27.03.2016
 * Time: 16:01
 */


class Book {
    public function add($array) {
        if(isset($array)) {
                $title = $array['title'];
                $author = $array['author'];
                $yearBegin = $array['yearBegin'];
                $description = $array['description'];
                $url = $array['url'];
                $db = Db::getConnection();
                $result = $db->query("INSERT INTO `book` (title, author, yearBegin, description, url) VALUES ('$title', '$author', '$yearBegin', '$description', '$url')");
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

    public function getAll($limit, $begin) {
        $resQuery = false;
        if($limit == false) {
            $db = Db::getConnection();
            $resQuery = $db->query("SELECT * FROM `book` ORDER BY uploadDate DESC");
        }
        else if($begin == false && intval($limit) > 0) {
            $limit = (string) $limit;
            $db = Db::getConnection();
            $resQuery = $db->query("SELECT * FROM `book` ORDER BY uploadDate DESC LIMIT 0, $limit");
        }
        else if(intval($limit) > 0 && intval($begin) > 0) {
            $begin = (string) $begin;
            $limit = (string) $limit;
            $db = Db::getConnection();
            $resQuery = $db->query("SELECT * FROM `book` ORDER BY uploadDate DESC LIMIT $begin, $limit");
        }
        $result = array();
        if($resQuery) {
            $resQuery->setFetchMode(PDO::FETCH_ASSOC);
            $i = 0;
            while($row = $resQuery->fetch()) {
                $result[$i]['id'] = $row['id'];
                $result[$i]['title'] = $row['title'];
                $result[$i]['author'] = $row['author'];
                $result[$i]['yearBegin'] = $row['yearBegin'];
                $result[$i]['description'] = $row['description'];
                $result[$i]['url'] = $row['url'];
                $result[$i]['countDownload'] = $row['countDownload'];
                $result[$i]['uploadDate'] = $row['uploadDate'];
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
            $result = $db->query("SELECT * FROM `book` WHERE id='$id'");
            if($result) {
                $result->setFetchMode(PDO::FETCH_ASSOC);
                $result = $result->fetch();
                return $result;
            }
        }
        return false;
    }

    public function getBySearch($type, $val) {
        $valLC = mb_strtolower($val);
        $valFUC =  ucfirst($val);
        if(isset($type) && isset($val)) {
            switch($type) {
                case 'title':
                    $db = Db::getConnection();
                    $resQuery = $db->query("SELECT * FROM `book` WHERE title LIKE '%$val%' OR title LIKE '%$valFUC%' OR title LIKE '%$valLC%'");
                    break;
                case 'author':
                    $db = Db::getConnection();
                    $resQuery = $db->query("SELECT * FROM `book` WHERE author LIKE '%$val%'");
                    break;
                case 'year':
                    $db = Db::getConnection();
                    $resQuery = $db->query("SELECT * FROM `book` WHERE yearBegin LIKE '%$val%'");
                    break;
                case 'description':
                    $db = Db::getConnection();
                    $resQuery = $db->query("SELECT * FROM `book` WHERE description LIKE '%$val%'");
                    break;
            }

            $result = array();
            if($resQuery) {
                $resQuery->setFetchMode(PDO::FETCH_ASSOC);
                $i = 0;
                while($row = $resQuery->fetch()) {
                    $result[$i]['id'] = $row['id'];
                    $result[$i]['title'] = $row['title'];
                    $result[$i]['author'] = $row['author'];
                    $result[$i]['yearBegin'] = $row['yearBegin'];
                    $result[$i]['description'] = $row['description'];
                    $result[$i]['url'] = $row['url'];
                    $result[$i]['countDownload'] = $row['countDownload'];
                    $result[$i]['uploadDate'] = $row['uploadDate'];
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
            $resQuery = $db->query('DELETE FROM `book` WHERE id='.$id);
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
            $resQuery = $db->query("UPDATE `book` SET $parameterName='$newValue' WHERE id='$id'");
            if($resQuery) {
                return true;
            }
        }
        return false;
    }

    public function plusDownloadBook($id) {
        $id = intval($id);
        if(isset($id)) {
            $db = Db::getConnection();
            $result = $db->query("UPDATE `book` SET countDownload = countDownload+1 WHERE id='$id'");
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

    public function testWTF() {
        $arr = array();
        $arr['title'] = 'Sex in the city';
        $arr['author'] = 'vasiy';
        $arr['yearBegin'] = '2014';
        $arr['description'] = 'affaef fg dgd df dg sfb';
        $arr['url'] = 'ggg/gg/gg';
        var_dump($this->plusDownloadBook(2));
    }
}