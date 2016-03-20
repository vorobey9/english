<?php

class News
{
    public static function getNewsItemById($id)
    {
        //Запрос к БД
        $id = intval($id);
        if($id) {
//            $host = 'localhost';
//            $dbname = 'mvc_site';
//            $user = 'root';
//            $password = '';
//
//            $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

            $db = Db::getConnection();

            $newsList = array();

            $result = $db->query('SELECT * FROM news WHERE id='.$id);

            //$result->setFetchMode(PDO::FETCH_NUM);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            /*
            $i = 0;
            while($row = $result->fetch()) {
                $newsList[$i]['id'] = $row['id'];
                $newsList[$i]['title'] = $row['title'];
                $newsList[$i]['date'] = $row['date'];
                $newsList[$i]['short_content'] = $row['Short_content'];
                $i++;
            }
            */
            $newsItem = $result->fetch();

            return $newsItem;
        }
    }

    public static function getNewsList()
    {
//        //Запрос к БД
//        $host = 'localhost';
//        $dbname = 'mvc_site';
//        $user = 'root';
//        $password = '';
//
//        $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

        $db = Db::getConnection();

        $newsList = array();

        $result = $db->query('SELECT id, title, date, short_content FROM news ORDER BY date DESC LIMIT 10');

        $i = 0;
        while($row = $result->fetch()) {
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['short_content'] = $row['short_content'];
            $i++;
        }

        return $newsList;
    }
}