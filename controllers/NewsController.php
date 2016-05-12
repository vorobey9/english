<?php

class NewsController
{
    public function actionView() {
        $News = new News();
        $Elective = new Elective();
        $User = new Users();

        $dataElective = $Elective->getByTitle('departmen');
        $idElective = $dataElective['id'];

        $importanceNews = $News->getAll($idElective, 1, 4, false);
        $otherNews = $News->getAll($idElective, 0, false, false);

        $teachers = $User->getAllTeachers();

        require_once(ROOT.'/views/news/view.php');
        return true;
    }

    public function actionItem($idNews) {
        $News = new News();
        $Elective = new Elective();
        $User = new Users();

        $dataElective = $Elective->getByTitle('departmen');
        $idElective = $dataElective['id'];

        $news = $News->getById($idNews);
        $idTeacher = $news['idAuthor'];
        $teacher = $User->getById($idTeacher);
        $teachers = $User->getAllTeachers();

        $importanceNews = $News->getAll($idElective, 1, 4, false);

        require_once(ROOT . '/views/news/item.php');
        return true;
    }

//    public function actionIndex()
//    {
////        echo 'Test in '.__METHOD__;
//        $newsList = array();
//        $newsList = News::getNewsList();
//
//        require_once(ROOT.'/views/news/item.php');
//
////        echo '<pre>';
////        print_r($newsList);
////        echo '</pre>';
//
//        return true;
//    }
//    //public function actionView($category, $id)
//    //public function actionView($params)
//    public function actionView($id)
//    {
////        echo 'Test in '.__METHOD__;
//        /*
//        echo '<br>'.$params[0];
//        echo '<br>'.$params[1];
//        */
//        //echo '<br>'.$category;
//        //echo '<br>'.$id;
//
//        if($id) {
//            $newsItem = News::getNewsItemById($id);
//            echo '<pre>';
//            print_r($newsItem);
//            echo '</pre>';
//
//            echo 'actionView';
//        }
//
//        return true;
//    }
}