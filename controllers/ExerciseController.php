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

        require_once(ROOT . '/views/exercise/view.php');
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
        $StatEx = new StatisticsExercise();

        $idUser = $User->checkLogged();
        if(!$idUser) {
            header("Location: http://www.englishtest.ua/login");
        }

        $infoFolder = $Folder->getById($idFolder);
        $defTests = $Test->getAllByIdFolder($idFolder);

        //output = [i]{'id', 'idFolder', 'text', 'ans1', 'ans2', 'ans3', 'ans4'}
        $tests = $Test->formatTests($defTests);

        $answerStr = '';

        /*Так и нужно, ничего не менять*/
        $len = count($defTests);
        for($i = 0; $i < $len-1; $i++) {
            $answerStr.=$defTests[$i]['answerRight'].'/';
        }
        $answerStr.=$defTests[$len-1]['answerRight'];

        $lastExer = $StatEx->getLastForStat($idUser);

        require_once(ROOT . '/views/exercise/test.php');
        return true;
    }

    public function actionAjaxSaveRes() {
        $User = new Users();
        $StatEx = new StatisticsExercise();

        $idUser = $User->checkLogged();
        $idFolder = $_POST['idFolder'];
        $mark = $_POST['mark'];
        $countQuestion = $_POST['countQuestion'];
        $countRight = $_POST['countRight'];

        $StatEx->add($idFolder, $idUser, $countQuestion, $countRight, $mark);
    }

    public function actionAjaxShowInfoModal() {
        $idUser = $_POST['idUser'];
        $idFolder = $_POST['idFolder'];

        $User = new Users();
        $StatEx = new StatisticsExercise();

        $bestRes = $StatEx->getBestRes($idUser, $idFolder);
        $user = $User->getById($idUser);
        echo json_encode(array(
            'best' => $bestRes,
            'user' => $user
        ));
    }
}