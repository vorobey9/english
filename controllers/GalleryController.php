<?php

class GalleryController
{
    public function actionView() {
        $Image = new Image();
        $images = $Image->getByIdNews(1);
        require_once(ROOT.'/views/gallery/view.php');
        return true;
    }

    public function actionAjaxGetVideo() {
        $Video = new Video();
        $idNews = $_POST['idNews'];
        $data = $Video->getByIdNews($idNews);
        echo json_encode($data);
    }

    public function actionAjaxGetImage() {
        $Image = new Image();
        $idNews = $_POST['idNews'];
        $data = $Image->getByIdNews($idNews);
        echo json_encode($data);
    }

    public function actionAjaxGetDoc() {
        $Doc = new Doc();
        $idNews = $_POST['idNews'];
        $data = $Doc->getByIdNews($idNews);
        echo json_encode($data);
    }
}