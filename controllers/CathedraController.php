<?php

class CathedraController
{
    public function actionView() {
        $User = new Users();
        $News = new News();
        $Elective = new Elective();
        $DescSection = new DescOfSiteSection();

        $history = $DescSection->getByName('cathedraHistory');
        $subject = $DescSection->getByName('subjectCathedra');
        $science = $DescSection->getByName('scienceCathedra');

        $dataElective = $Elective->getByTitle('departmen');
        $idElective = $dataElective['id'];
        $importanceNews = $News->getAll($idElective, 1, 4, false);

        $teachers = $User->getAllTeachers();

        require_once(ROOT. '/views/cathedra/cathedra.php');
        return true;
    }
}