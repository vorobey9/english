<?php

class ScheduleController
{
//    public function actionView() {
//        $DescOfSiteSection = new DescOfSiteSection();
//        $descOfSection = $DescOfSiteSection->getByName('schedule');
//
//        $Teachers = new Users();
//        $teachers = $Teachers->getAllTeachers();
//
//        require_once(ROOT.'/views/schedule/view.php');
//        return true;
//    }

    public function actionView() {
        $DescOfSiteSection = new DescOfSiteSection();
        $descOfSection = $DescOfSiteSection->getByName('schedule');

        $Teachers = new Users();
        $teachers = $Teachers->getAllTeachers();

        $idTeacher = '';
        $typePoint = '';
        $points = '';

        $showTecherBlock = false;
        $showClassBlock = false;
        $showConsultBlock = false;

        if(isset($_POST['submit'])) {
            $idTeacher = $_POST['teacher'];
            $typePoint = $_POST['type-schedule'];

            $teacherItem = $Teachers->getById($idTeacher);

            $dayName = array();
            $dayName[] = "Понеділок";
            $dayName[] = "Вівторок";
            $dayName[] = "Середа";
            $dayName[] = "Четверг";
            $dayName[] = "П'ятниця";

            if($teacherItem) {
                $showTecherBlock = true;
            }
            if($typePoint == 'ConsultPoint') {
                $ConsultPoint = new ConsultPoints();
                $points = $ConsultPoint->getByIdTeacher($idTeacher);
                if($points) {
                    $showConsultBlock = true;
                }
            }
            else if($typePoint == 'ClassPoint'){
                $ClassPoint = new ClassPoints();
                $points = $ClassPoint->getByIdTeacher($idTeacher);
                if($points) {
                    $showClassBlock = true;
                }
            }
        }

        require_once(ROOT.'/views/schedule/view.php');
        return true;
    }

}