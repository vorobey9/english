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

    public function actionViewInscribe($idFolder) {
        $Folder = new Folders();
        $User = new Users();
        $Inscribe = new Inscribe();
        $StatEx = new StatisticsExercise();

        $idUser = $User->checkLogged();
        if(!$idUser) {
            header("Location: http://www.englishtest.ua/login");
        }

        $infoFolder = $Folder->getById($idFolder);
        $defInscribe = $Inscribe->getAllByIdFolder($idFolder);

        $arrStr = array();

        $i = 0;
        foreach($defInscribe as $item) {
            $arrStr[$i]['words'] = explode(' ', $item['text']);
            $arrStr[$i]['skipWord'] = $item['skipWord'];
            $arrStr[$i]['id'] = $item['id'];
            $arrStr[$i]['idFolder'] = $item['idFolder'];
            $i++;
        }

        $lastExer = $StatEx->getLastForStat($idUser);

        require_once(ROOT . '/views/exercise/inscribe.php');
        return true;
    }

    public function actionViewPuzzle($idFolder) {
        $Folder = new Folders();
        $User = new Users();
        $Puzzle = new Puzzles();
        $StatEx = new StatisticsExercise();

        $idUser = $User->checkLogged();
        if(!$idUser) {
            header("Location: http://www.englishtest.ua/login");
        }

        $infoFolder = $Folder->getById($idFolder);
        $defPuzzle = $Puzzle->getAllByIdFolder($idFolder);

        $arrStr = array();
        $i = 0;
        foreach($defPuzzle as $item) {
            $tempText = explode(' ', $item['textEnglish']);
            shuffle($tempText);
            $arrStr[$i]['words'] = $tempText;
            $arrStr[$i]['textEnglish'] = explode(' ', $item['textEnglish']);
            $arrStr[$i]['textPuzzle'] = $item['textPuzzle'];
            $arrStr[$i]['textInfo'] = $item['textEnglish'];
            $arrStr[$i]['id'] = $item['id'];
            $arrStr[$i]['idFolder'] = $item['idFolder'];
            $i++;
        }

        $lastExer = $StatEx->getLastForStat($idUser);

        require_once(ROOT . '/views/exercise/puzzle.php');
        return true;
    }
}