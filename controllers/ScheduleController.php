<?php

class ScheduleController
{
    public function actionView() {
        $DescOfSiteSection = new DescOfSiteSection();
        $descOfSection = $DescOfSiteSection->getByName('schedule');

        $Teachers = new Users();
        $teachers = $Teachers->getAllTeachers();

        require_once(ROOT.'/views/schedule/schedule.php');
        return true;
    }

    public function actionAjaxGetClassPoint() {
        $idTeacher = $_POST['idTeacher'];

        $User = new Users();
        $Teacher = $User->getById($idTeacher);

        $ClassPoint = new ClassPoints();
        $classes = $ClassPoint->getByIdTeacher($idTeacher);

        $data = array();

        $data['teacher'] = $Teacher;
        $data['data'] = $classes;

        echo json_encode($data);
    }

    public function actionAjaxGetConsultPoint() {
        $idTeacher = $_POST['idTeacher'];
        $User = new Users();
        $Teacher = $User->getById($idTeacher);

        $ConsultPoint = new ConsultPoints();
        $consults = $ConsultPoint->getByIdTeacher($idTeacher);

        $data = array();

        $data['teacher'] = $Teacher;
        $data['data'] = $consults;

        echo json_encode($data);
    }
}