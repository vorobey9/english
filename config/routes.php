<?php
return array(
    'training/test/([a-z]+)' => 'training/test/view/$1',
    'training/puzzle/([a-z]+)' => 'training/puzzle/view/$1',
    'training/collectoffer/([a-z]+)' => 'training/collectoffer/view/$1',
    'training/test' => 'training/test/view',
    'training/puzzle' => 'training/puzzle/view',
    'training/collectoffer' => 'training/collectoffer/view',
    'training' => 'training/training/view',
    'addTeacher' => 'teacher/teacher/test',
    //'addUser' => 'user/user/test',
    'test' => 'test/test/test',
    //'' => 'main/main/view',
//    'news/([a-z]+)/([0-9]+)' => 'news/view/$1/$2',
//    'news/([0-9]+)' => 'news/view/$1',
//    'news' => 'news/index', // actionIndex в NewsController
//    'products' => 'product/list', // actionList в ProductController
);