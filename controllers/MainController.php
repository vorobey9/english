<?php

class MainController
{
    public function actionView()
    {
        $DescriptionSection = new DescOfSiteSection();
        $News = new News();
        $Elective = new Elective();
        $User = new Users();
        $Book = new Book();

        $dataElective = $Elective->getByTitle('departmen');
        $idElective = $dataElective['id'];

        $importanceNews = $News->getAll($idElective, 1, 4, false);

        $otherNews = $News->getAll($idElective, 0, 6, false);

        $aboutDepartmen = $DescriptionSection->getByName('mainAbout');

        $teachers = $User->getAllTeachers();

        $dataBooks = $Book->getAll(3, false);

        require_once(ROOT . '/views/main.php');
        return true;
    }
}