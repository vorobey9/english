<?php
return array(
//    'training/test/([a-z]+)' => 'training/test/view/$1',
//    'training/puzzle/([a-z]+)' => 'training/puzzle/view/$1',
//    'training/collectoffer/([a-z]+)' => 'training/collectoffer/view/$1',
//    'training/test' => 'training/test/view',
//    'training/puzzle' => 'training/puzzle/view',
//    'training/collectoffer' => 'training/collectoffer/view',
//    'training' => 'training/training/view',
//    'addTeacher' => 'teachers/teachers/test',
    //'addUser' => 'user/user/test',
    'user/ajaxGetById' => 'user/user/ajaxGetById',

    'schedule/ajaxGetConsultPoint' => 'schedule/schedule/ajaxGetConsult',
    'schedule' => 'schedule/schedule/view',

    'exersice/ajaxCheckRes' => 'exercise/exersice/ajaxCheckRes',
    'exercise/ajaxGetFolder' => 'exercise/exercise/ajaxGetFolder',
    'exercise' => 'exercise/exercise/view',

    'test/([0-9]+)' => 'exercise/exercise/viewTest/$1',

    'gallery/ajaxGetVideo' => 'gallery/gallery/ajaxGetVideo',
    'gallery/ajaxGetImage' => 'gallery/gallery/ajaxGetImage',
    'gallery/ajaxGetDoc' => 'gallery/gallery/ajaxGetDoc',
    'gallery' => 'gallery/gallery/view',

    'library/ajaxGetById' => 'library/library/ajaxGetById',
    'library/ajaxGetBySearch' => 'library/library/ajaxGetBySearch',
    'library/ajaxAddDownload' => 'library/library/ajaxAddDownload',
    'library' => 'library/library/view',

    'elective/news/([0-9]+)/media' => 'elective/elective/viewMedia/$1',
    'elective/news/([0-9]+)' => 'elective/elective/itemNews/$1',
    'elective/([0-9]+)' => 'elective/elective/itemElective/$1',
    'elective/ajaxAddComment' => 'elective/elective/ajaxAddComment',
    'elective' => 'elective/elective/view',

    'news/([0-9]+)' => 'news/news/item/$1',
    'news' => 'news/news/view',
//
//
//
//    'zhopa' => 'article/article/test',
//    'training/test/([0-9]+)' => 'test/test/viewTest/$1',
//    'test/ajaxCheckTest' => 'test/test/ajaxCheckTest',
//
//    'training/inscribe/([0-9]+)' => 'inscribe/inscribe/viewInscribe/$1',
//    'inscribe/ajaxGetDataByFolder' => 'inscribe/inscribe/ajaxGetDataByFolder',
//    'training/puzzle/([0-9]+)' => 'puzzle/puzzle/viewPuzzle/$1',
//    'puzzle/ajaxGetDataByFolder' => 'puzzle/puzzle/ajaxGetDataByFolder',
//    'test' => 'user/user/test',

    'registration' => 'user/user/register',
    'cabinet' => 'cabinet/cabinet/index',
    'login' => 'user/user/login',
    'logout' => 'user/user/logout',




    '' => 'main/main/view',
//    'news/([a-z]+)/([0-9]+)' => 'news/view/$1/$2',
//    'news/([0-9]+)' => 'news/view/$1',
//    'news' => 'news/index', // actionIndex в NewsController
//    'products' => 'product/list', // actionList в ProductController
);