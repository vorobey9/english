<?php

class ElectiveController
{
    public function actionView() {
        $Elective = new Elective();
        $Teacher = new Users();

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
        $Teacher = new Users();
        $News = new News();

        $news = $News->getById($idNews);

        $idTeacher = $news['idAuthor'];
        $teacher = $Teacher->getById($idTeacher);

        require_once(ROOT.'/views/elective/itemNews.php');
        return true;
    }
}