<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 27.02.2016
 * Time: 19:21
 */

include_once ROOT.'/views/header.php';

class MainController
{
    public function actionView()
    {
        require_once(ROOT.'/views/main.php');
        return true;
    }
}

include_once ROOT.'/views/footer.php';