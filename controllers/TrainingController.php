<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 14.02.2016
 * Time: 17:10
 */
include_once ROOT.'/models/Training.php';

include_once ROOT.'/views/header.php';

class TrainingController
{
    public function actionView()
    {
        require_once(ROOT.'/views/training/training.php');
        return true;
    }
}


include_once ROOT.'/views/footer.php';