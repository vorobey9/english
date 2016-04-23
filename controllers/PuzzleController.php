<?php

class PuzzleController {
    public function actionViewPuzzle ($idFolder) {
        $Folder = new Folders();
        $Puzzle = new Puzzles();
        $dataFolder = $Folder->getById($idFolder);
        $dataPuzzle = $Puzzle->getAllByIdFolder($idFolder);
        $transText = array();
        foreach($dataPuzzle as $puzzle) {
            $transText[] = $Puzzle->cutText($puzzle['textPuzzle']);
        }
        require_once(ROOT . '/views/training/puzzle.php');
        return true;
    }

    public function actionAjaxGetDataByFolder() {
        $Inscribe = new Inscribe();
        $idFolder = $_POST['idFolder'];
        $data = $Inscribe->getAllByIdFolder($idFolder);
        echo json_encode($data);
    }
}