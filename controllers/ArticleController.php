<?php

class ArticleController
{
    public function actionTest()
    {
        $arr = array();
        $arr['author'] = 'Водолазкин Евгений';
        $arr['title'] = 'Лавр ';
        $arr['yearBegin'] = '2012';
        $arr['description'] = 'Книга о средневековом целителе — его судьбе, любви, жертве и великом даре. Роман вошел в шорт-листы премий "Русский букер", "Большая книга"';
        $arr['url'] = 'thisisurl';

        $book = new Book();
        $book->add($arr);
    }
}