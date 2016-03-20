<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 08.03.2016
 * Time: 17:12
 */
include_once ROOT.'/models/Teacher.php';

class TeacherController {
    public function actionTest() {
        $teacher = new Teacher();
        $res = $teacher->getAll();
        var_dump($res);
        return $res;
    }
}