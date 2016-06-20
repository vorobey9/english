<?php
return array(

    'admin/cabinet' => 'admCab/admCab/view',
    'admin/schedule' => 'adminSchedule/adminSchedule/view',

    'admin/([a-z,-]+)' => 'admin/admin/openPage/$1',

    'user/ajaxGetById' => 'user/user/ajaxGetById',

    'schedule/ajaxGetClassPoint' => 'schedule/schedule/ajaxGetClassPoint',
    'schedule/ajaxGetConsultPoint' => 'schedule/schedule/ajaxGetConsultPoint',
    'schedule' => 'schedule/schedule/view',

    '/exercise/ajaxGetFolderByType' => 'exercise/exercise/ajaxGetFolderByType',
    '/exercise/ajaxGetByNameUser' => 'exercise/exercise/ajaxGetGetByNameUser',

    'exercise/ajaxSaveRes' => 'exercise/exercise/ajaxSaveRes',
    'exercise/ajaxShowInfoModal' => 'exercise/exercise/ajaxShowInfoModal',
    'exercise/ajaxGetFolder' => 'exercise/exercise/ajaxGetFolder',

    'exercise' => 'exercise/exercise/view',

    'test/([0-9]+)' => 'exercise/exercise/viewTest/$1',
    'inscribe/([0-9]+)' => 'exercise/exercise/viewInscribe/$1',
    'puzzle/([0-9]+)' => 'exercise/exercise/viewPuzzle/$1',

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

    'registration' => 'user/user/register',

    'cabinet/ajaxChangeInfo' => 'cabinet/cabinet/ajaxChangeInfo',
    'cabinet' => 'cabinet/cabinet/view',

    'cathedra' => 'cathedra/cathedra/view',

    'login' => 'user/user/login',
    'logout' => 'user/user/logout',

    '' => 'main/main/view',
);