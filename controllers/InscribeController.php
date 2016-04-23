<?php

class InscribeController {
    public function actionViewInscribe ($idFolder) {
        $Folder = new Folders();
        $Inscribe = new Inscribe();
        $dataFolder = $Folder->getById($idFolder);
        $dataInscribe = $Inscribe->getAllByIdFolder($idFolder);
        $transText = array();
        foreach($dataInscribe as $inscribe) {
            $transText[] = $Inscribe->transformText($inscribe['text'], $inscribe['skipWord']);
        }
        require_once(ROOT . '/views/training/inscribe.php');
        return true;
    }

    public function actionAjaxGetDataByFolder() {
        $Inscribe = new Inscribe();
        $idFolder = $_POST['idFolder'];
        $data = $Inscribe->getAllByIdFolder($idFolder);
        echo json_encode($data);
    }
}