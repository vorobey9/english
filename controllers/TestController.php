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
        $idFolder = $_POST['idFolder'];
        $inputData = json_decode($_POST['inputData']);
        $result = $Test->checkUserAnswer($idFolder, $inputData);
        echo json_encode($result);
    }
}