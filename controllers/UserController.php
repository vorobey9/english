<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 09.03.2016
 * Time: 20:52
 */
include_once ROOT . '/models/Users.php';

class UserController {
    public function actionTest() {
        $User = new Users();
        $arr = array();
        $arr['firstName'] = "Remy";
        $arr['middleName'] = "Fuck";
        $arr['lastName'] = "Lebo";
        $arr['mail'] = "lebo111@gmail.com";
        $arr['password'] = "jvu2brwz";
        $arr['idPic'] = NULL;
       // $res = $User->checkMailAndPassword("lebo111@gmail.com", "jvu2brwz");
        var_dump($res);
        return $res;
    }
}