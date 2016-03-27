<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 14.03.2016
 * Time: 19:39
 */
include_once ROOT . '/models/StatisticsExercise.php';

class TestController {
    public function actionTest() {

        echo __METHOD__.' actionTest '.'<br>';
        $test = new StatisticsExercise();
        $test->testWTF();
        return true;
    }
}