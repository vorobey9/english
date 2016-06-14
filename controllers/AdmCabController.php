<?php

class AdmCabController
{
    public function actionView() {
        $User = new Users();
        //$StatEx = new StatisticsExercise();
        $Folder = new Folders();

        $idUser = $User->checkLogged();
        if(!$User->checkIdForTeacher($idUser)) {
            header("Location: http://www.englishtest.ua");
        }

        $folders = $Folder->getAll('test');
        $teacher = $User->getById($idUser);
//        var_dump($folders);
        require_once(ROOT. '/views/admin/adminCabinet.php');
        return true;
    }
}