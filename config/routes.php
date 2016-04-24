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
    'training/test/([0-9]+)' => 'test/test/viewTest/$1',
    'test/ajaxCheckTest' => 'test/test/ajaxCheckTest',

    'training/inscribe/([0-9]+)' => 'inscribe/inscribe/viewInscribe/$1',
    'inscribe/ajaxGetDataByFolder' => 'inscribe/inscribe/ajaxGetDataByFolder',
    'training/puzzle/([0-9]+)' => 'puzzle/puzzle/viewPuzzle/$1',
    'puzzle/ajaxGetDataByFolder' => 'puzzle/puzzle/ajaxGetDataByFolder',
    //'test' => 'test/test/test',
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