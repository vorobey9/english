<?php

include_once ROOT.'/models/News.php';

class NewsController
{
    public function actionIndex()
    {
//        echo 'Test in '.__METHOD__;
        $newsList = array();
        $newsList = News::getNewsList();

        require_once(ROOT.'/views/news/index.php');

//        echo '<pre>';
//        print_r($newsList);
//        echo '</pre>';

        return true;
    }
    //public function actionView($category, $id)
    //public function actionView($params)
    public function actionView($id)
    {
//        echo 'Test in '.__METHOD__;
        /*
        echo '<br>'.$params[0];
        echo '<br>'.$params[1];
        */
        //echo '<br>'.$category;
        //echo '<br>'.$id;

        if($id) {
            $newsItem = News::getNewsItemById($id);
            echo '<pre>';
            print_r($newsItem);
            echo '</pre>';

            echo 'actionView';
        }

        return true;
    }
}