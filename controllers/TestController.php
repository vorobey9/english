<?php

class TestController {
    public function actionViewTest($idFolder) {
        $Folder = new Folders();
        $Test = new Test();
        $dataFolder = $Folder->getById($idFolder);
        $dataTests = $Test->getAllByIdFolder($idFolder);
        require_once(ROOT . '/views/training/test.php');
        return true;
    }

    public function actionAjaxCheckTest() {
        $Test = new Test();
        $User = new Users();
        $StatExercise = new StatisticsExercise();

        $idUser = $User->checkLogged();
        $idFolder = $_POST['idFolder'];
        $inputData = json_decode($_POST['inputData']);
        $result = $Test->checkUserAnswer($idFolder, $inputData);

        $arr = array();
        $arr['idFolder'] = $idFolder;
        $arr['idUser'] = $idUser;
        $arr['allItem'] = $result['countAll'];
        $arr['sucItem'] = $result['countRight'];
        $arr['mark'] = $result['res'];
        $StatExercise->add($arr);

        echo json_encode($result);
    }
}