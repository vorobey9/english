<?php

class AdminScheduleController {
    public function actionView() {
        $User = new Users();
        $idUser = $User->checkLogged();
        if(!$User->checkIdForTeacher($idUser)) {
            header("Location: http://www.englishtest.ua");
        }

        $ClassPoint = new ClassPoints();
        $ConsultPoint = new ConsultPoints();

        $teacher = $User->getById($idUser);

        $classPoints = $ClassPoint->getByIdTeacher($idUser);
        $consultPoints = $ConsultPoint->getByIdTeacher($idUser);

        require_once(ROOT. '/views/admin/adminSchedule.php');
        return true;
    }
}