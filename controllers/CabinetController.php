<?php

class CabinetController
{
    public function actionIndex() {

        //$User = new Users();

        //$userId = $User->checkLogged();
        //echo $userId;

        //$user = $User->getById($userId);
        //echo 'Hello, ' . $user['firstName'];

        require_once(ROOT. '/views/cabinet/index.php');
        return true;
    }
}