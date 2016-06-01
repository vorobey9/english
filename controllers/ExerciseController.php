<?php

class ExerciseController
{
    public function actionView() {
        $DescOfSection = new DescOfSiteSection();
        $Folder = new Folders();
        $User = new Users();

        $description = $DescOfSection->getByName('exercise');
        $description = $description['description'];
        $folders = $Folder->getAll('test');
        $idUser = $User->checkLogged();

        require_once(ROOT.'/views/exersice/view.php');
        return true;
    }

    public function actionAjaxGetFolder() {
        $typeFolder = $_POST['typeExercise'];
        $Folder = new Folders();
        $folders = $Folder->getAll($typeFolder);
        echo json_encode($folders);
    }

    public function actionViewTest($idFolder) {
        $Folder = new Folders();
        $User = new Users();
        $Test = new Test();

        $idUser = $User->checkLogged();
        if($idUser == false) {
            header("Location: http://www.englishtest.ua/login");
        }

        $infoFolder = $Folder->getById($idFolder);
        $tests = $Test->getAllByIdFolder($idFolder);

        //output = [i]{'id', 'idFolder', 'text', 'ans1', 'ans2', 'ans3', 'ans4'}
        $tests = $Test->formatTests($tests);

        require_once(ROOT.'/views/exersice/test.php');
        return true;
    }

    public function actionAjaxCheckRes() {
        $arrRes = json_decode($_POST['arrRes']);
        $idFolder = $_POST['idFolder'];
        $Test = new Test();

    }
}