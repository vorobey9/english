<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 14.03.2016
 * Time: 19:39
 */
include_once ROOT . '/models/Inscribe.php';

class TestController {
    public function actionTest() {
        $test = new Inscribe();
        $test->test();
        return true;
    }
}