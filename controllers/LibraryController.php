<?php

class LibraryController
{
    public function actionView() {
        $DescOfSiteSection = new DescOfSiteSection();
        $descOfSection = $DescOfSiteSection->getByName('library');

        $Book = new Book();
        $books = $Book->getAll(false, false);

        require_once(ROOT.'/views/library/view.php');
        return true;
    }
    public function actionAjaxGetById() {
        $idBook = $_POST['idBook'];
        $Book = new Book();
        $res = $Book->getById($idBook);
        echo json_encode($res);
    }
    public function actionAjaxGetBySearch(){
        $Book = new Book();
        $res = $Book->getBySearch($_POST['type'], $_POST['text']);
        echo json_encode($res);
    }
    public function actionAjaxAddDownload() {
        $Book = new Book();
        return $Book->plusDownloadBook($_POST['idBook']);
    }
}