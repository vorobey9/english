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

            echo 'In isset'.'<br>';
                $title = $array['title'];
                $author = $array['author'];
                $yearBegin = $array['yearBegin'];
                $description = $array['description'];
                $url = $array['url'];

            echo 'title = '.$title.'<br>';
            echo 'author = '.$author.'<br>';
            echo 'description = '.$description.'<br>';
            echo 'url = '.$url.'<br>';

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

    public function getAll() {
        $db = Db::getConnection();
        $resQuery = $db->query("SELECT * FROM `book`");

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