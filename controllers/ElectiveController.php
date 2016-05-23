<?php

class ElectiveController
{
    public function actionView() {
        $Elective = new Elective();
        $Teacher = new Users();
        $DescOfSection = new DescOfSiteSection();

        $aboutElectives = $DescOfSection->getByName('elective');
        $electiveList = $Elective->getAll();
        $teacherList = $Teacher->getAllTeachers();

        require_once(ROOT.'/views/elective/view.php');
        return true;
    }

    public function actionItemElective($idElective) {
        $Elective = new Elective();
        $Teacher = new Users();
        $News = new News();

        $news = $News->getAll($idElective, 0, false, false);

        $elective = $Elective->getById($idElective);
        $idAuthor = $elective['idAuthor'];
        $teacher = $Teacher->getById($idAuthor);

        require_once(ROOT.'/views/elective/itemElective.php');
        return true;
    }

    public function actionItemNews($idNews) {
        $User = new Users();
        $News = new News();
        $Comments = new Comments();

        $news = $News->getById($idNews);

        $comments = $Comments->getAllByIdNews($idNews, false, false);

        $idUser = $User->checkLogged();

        $idTeacher = $news['idAuthor'];
        $teacher = $User->getById($idTeacher);

        require_once(ROOT.'/views/elective/itemNews.php');
        return true;
    }

    public function actionAjaxAddComment() {
        $User = new Users();
        $Comments = new Comments();

        $idNews = $_POST['idNews'];
        $text = $_POST['text'];
        $idAuthor = $User->checkLogged();

        $arr = array();
        $arr['idAuthor'] = $idAuthor;
        $arr['idNews'] = $idNews;
        $arr['text'] = $text;

        $res = $Comments->add($arr);
        if($res) {
            echo true;
        }
        else {
            echo false;
        }
    }
}