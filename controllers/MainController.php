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

        $dataElective = $Elective->getByTitle('departmen');
        $idElective = $dataElective['id'];

        $aboutDepartmen = $DescriptionSection->getByName('mainAbout');

        $impNews = $News->getAllByIdElective($idElective, 1);
        $otherNews = $News->getAllByIdElective($idElective, 0);
        $teachers = $User->getAllTeachers();

        //var_dump($teachers);

        //require_once(ROOT.'/views/header.php');
        require_once(ROOT.'/views/index.php');
        return true;
    }
}

//include_once ROOT . '/views/footer1.php';