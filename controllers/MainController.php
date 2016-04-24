<?php

//include_once ROOT . '/views/header.php';

class MainController
{
    public function actionView()
    {
        $DescriptionSection = new DescOfSiteSection();
        $textAbout = $DescriptionSection->getByName('mainAbout');

        //require_once(ROOT.'/views/header.php');
        require_once(ROOT.'/views/index.php');
        return true;
    }
}

//include_once ROOT . '/views/footer1.php';