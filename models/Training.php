<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 14.02.2016
 * Time: 17:27
 */
//models

class Training
{

}

class Test
{
    public static function getTestByFolder($folder)
    {
        if($folder) {
            $db = Db::getConnection();
            /*
            ДОПИШИ ЗАПРОС К БД
            */
            $resultQuery = $db->query();
        }
    }
}

class Puzzle
{

}

class CollectOffer
{

}