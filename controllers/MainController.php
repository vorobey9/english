<?php

//include_once ROOT . '/views/header.php';

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

        $importanceNews = $News->getLastNewsByIdElective($idElective, 1, 4);
        $otherNews = $News->getLastNewsByIdElective($idElective, 0, 6);

        $aboutDepartmen = $DescriptionSection->getByName('mainAbout');

        $teachers = $User->getAllTeachers();

        $dataBooks = $Book->getLastBooks(3);

        require_once(ROOT.'/views/main.php');
        return true;
    }
}

//include_once ROOT . '/views/footer1.php';