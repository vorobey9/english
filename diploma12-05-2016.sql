-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 12 2016 г., 22:55
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `diploma`
--

-- --------------------------------------------------------

--
-- Структура таблицы `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` tinytext COLLATE utf8_bin NOT NULL,
  `author` tinytext COLLATE utf8_bin NOT NULL,
  `yearBegin` year(4) NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `url` tinytext COLLATE utf8_bin NOT NULL,
  `countDownload` int(10) unsigned DEFAULT '0',
  `uploadDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `book`
--

INSERT INTO `book` (`id`, `title`, `author`, `yearBegin`, `description`, `url`, `countDownload`, `uploadDate`) VALUES
(5, 'Мужик всегда прав', 'Амиран Сардаров', 2014, 'Эта книга поможет ребятам, начинающим свой путь самца, а также тем, которые уже наломали дров и никак не могут понять, как правильно и эффективно взаимодействовать с женщинами, как общаться, строить отношения и соблазнять. Как правильно понимать женщин: те или иные «выкидоны», о чём они говорят, и что с ними делать. Я не буду писать о говнотехниках, шаблонах и разных заготовках на все случаи жизни, потому что это поверхностный подход, который не работает. Вернее, на одной из десяти может и сработает, а остальные девять заставят вас недоумевать, что же вы не так сделали', 'thisisurl', 0, '2016-05-11 12:31:27'),
(6, 'До встречи с тобой', 'Мойес Джоджо', 2012, 'Страшная авария превратила успешного бизнесмена в инвалида. Душевная близость с молодой сиделкой может стать для него спасением или новой трагедией.', 'thisisurl', 0, '2016-05-11 12:33:38'),
(7, 'Лавр ', 'Водолазкин Евгений', 2012, 'Книга о средневековом целителе — его судьбе, любви, жертве и великом даре. Роман вошел в шорт-листы премий "Русский букер", "Большая книга"', 'thisisurl', 0, '2016-05-11 12:35:05');

-- --------------------------------------------------------

--
-- Структура таблицы `classpoints`
--

CREATE TABLE IF NOT EXISTS `classpoints` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idTeacher` int(10) unsigned NOT NULL,
  `numLesson` tinyint(3) unsigned NOT NULL,
  `dayStamp` tinyint(3) unsigned NOT NULL,
  `numeratorGroup` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `denominatorGroup` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `room` varchar(10) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idTeacher` (`idTeacher`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `consultpoints`
--

CREATE TABLE IF NOT EXISTS `consultpoints` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idTeacher` int(10) unsigned NOT NULL,
  `beginTime` time NOT NULL,
  `endTime` time NOT NULL,
  `dayStamp` tinyint(3) unsigned NOT NULL,
  `description` tinytext COLLATE utf8_bin,
  `room` varchar(10) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idTeacher` (`idTeacher`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `descofsitesection`
--

CREATE TABLE IF NOT EXISTS `descofsitesection` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nameSection` tinytext COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `descofsitesection`
--

INSERT INTO `descofsitesection` (`id`, `nameSection`, `description`) VALUES
(1, 'mainAbout', 'Кафедра іноземних мов Дніпропетровського національного університету залізничного транспорту була заснована 9 січня 1933 року. У той час студенти вивчали німецьку та англійську мови, пізніше почала викладатися французька. Ці три мови викладаються на кафедрі по теперішній час.');

-- --------------------------------------------------------

--
-- Структура таблицы `document`
--

CREATE TABLE IF NOT EXISTS `document` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idNews` int(10) unsigned NOT NULL,
  `url` tinytext COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idNews` (`idNews`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `elective`
--

CREATE TABLE IF NOT EXISTS `elective` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` tinytext COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `elective`
--

INSERT INTO `elective` (`id`, `title`, `description`) VALUES
(1, 'departmen', '');

-- --------------------------------------------------------

--
-- Структура таблицы `folders`
--

CREATE TABLE IF NOT EXISTS `folders` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `typeExercise` varchar(20) COLLATE utf8_bin NOT NULL,
  `countInBlank` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `folders`
--

INSERT INTO `folders` (`id`, `title`, `description`, `typeExercise`, `countInBlank`) VALUES
(1, 'Название папки с заданием', 'Текст, который подсказывает, что нужно сделать пользователю в данной папке с заданиями, т.е. условия задания', 'test', 9);

-- --------------------------------------------------------

--
-- Структура таблицы `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idNews` int(10) unsigned NOT NULL,
  `url` tinytext COLLATE utf8_bin NOT NULL,
  `uploadDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `idNews` (`idNews`),
  KEY `idNews_2` (`idNews`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `inscribe`
--

CREATE TABLE IF NOT EXISTS `inscribe` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idFolder` int(10) unsigned NOT NULL,
  `text` tinytext COLLATE utf8_bin NOT NULL,
  `skipWord` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idFolder` (`idFolder`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `inscribe`
--

INSERT INTO `inscribe` (`id`, `idFolder`, `text`, `skipWord`) VALUES
(2, 1, 'andrey lusa ggg', 'andrey'),
(3, 1, 'This is why we play', 'play');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` tinytext COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `tempDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `idElective` int(10) unsigned NOT NULL,
  `importance` int(11) NOT NULL DEFAULT '0',
  `idAuthor` int(10) unsigned NOT NULL,
  `urlImage` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idElective` (`idElective`),
  KEY `idAuthor` (`idAuthor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=17 ;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `tempDate`, `idElective`, `importance`, `idAuthor`, `urlImage`) VALUES
(9, 'Важное собрание кафедры', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo con magna aliqua. occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.\n\nВ этот период научное исследование в области методики преподавания иностранных языков стало одним из основных направлений в деятельности кафедры. Преподавателями кафедры было опубликовано много научных работ (монографий, статей, тезисов и докладов), в том числе и за границей. О.Б. Тарнопольский неоднократно стажировался в США. С 2001 года кафедрой заведует кандидат филологических наук, доцент Власова Татьяна Ивановна. За это время кафедра перепрофилировала свою методическую работу с учётом последних достижений методической науки - обучение посредством видео- и мультимедийных программ. Т.И. Власова - автор четырех учебников на английском языке, которые получили гриф Минобразования. В 2002 году издается книга Власовой Т.И. - "Learn science", которая предназначена для студентов, магистрантов и аспирантов высших технических заведений, а в 2004 - пособие "Английский язык", которое предназначено для студентов инженерных специальностей. Публикуются методические указания и разработки. Состав кафедры Кафедра активно принимает участие в разнообразных международных проектах (Ливия, Иран, Франция, Канада), ведёт подготовку студентов _V-тых курсов по французскому языку для прохождения стажировки в Школе Управления и Бизнеса (ЕЖС) Сен-Назера (Франция) под руководством доц. Пустовойт Н.И. Студенты этого французского заведения ежегодно приезжают в ДИИТ на стажировку по разным дисциплинам. Преподаватели кафедры активно принимают участие в украинских и международных конференциях. Публикуют свои научные работы в международных изданиях.\n\nВ этот период научное исследование в области методики преподавания иностранных языков стало одним из основных направлений в деятельности кафедры. Преподавателями кафедры было опубликовано много научных работ (монографий, статей, тезисов и докладов), в том числе и за границей. О.Б. Тарнопольский неоднократно стажировался в США. С 2001 года кафедрой заведует кандидат филологических наук, доцент Власова Татьяна Ивановна. За это время кафедра перепрофилировала свою методическую работу с учётом последних достижений методической науки - обучение посредством видео- и мультимедийных программ. Т.И. Власова - автор четырех учебников на английском языке, которые получили гриф Минобразования. В 2002 году издается книга Власовой Т.И. - "Learn science", которая предназначена для студентов, магистрантов и аспирантов высших технических заведений, а в 2004 - пособие "Английский язык", которое предназначено для студентов инженерных специальностей. Публикуются методические указания и разработки.', '2016-05-12 17:13:54', 1, 1, 3, '/newsImg/emptyImportance.jpg'),
(10, 'Собрание старост в 12.20', 'Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост.', '2016-05-11 15:15:22', 1, 1, 6, '/newsImg/emptyImportance.jpg'),
(11, 'Сбор денег на помощь кафедре', 'Текст оповещения. Текст оповещения. Текст оповещения. Текст оповещения. Текст оповещения. Текст оповещения. Текст оповещения. Текст оповещения. Текст оповещения. Текст оповещения. Текст оповещения. Текст оповещения. Текст оповещения. Текст оповещения. Текст оповещения. Текст оповещения. Текст оповещения. Текст оповещения. Текст оповещения. Текст оповещения. Текст оповещения.', '2016-05-11 15:15:26', 1, 1, 3, '/newsImg/emptyImportance.jpg'),
(12, 'Преддипломная практика', 'Это текст для оповещения студентов. Это текст для оповещения студентов. Это текст для оповещения студентов. Это текст для оповещения студентов. Это текст для оповещения студентов. Это текст для оповещения студентов. Это текст для оповещения студентов. Это текст для оповещения студентов. Это текст для оповещения студентов. Это текст для оповещения студентов. Это текст для оповещения студентов. Это текст для оповещения студентов. Это текст для оповещения студентов. Это текст для оповещения студентов. Это текст для оповещения студентов. Это текст для оповещения студентов. Это текст для оповещения студентов. Это текст для оповещения студентов.', '2016-05-11 15:15:29', 1, 1, 6, '/newsImg/emptyImportance.jpg'),
(13, 'І тур Всеукраїнських студентських дебатів', '25 квітня 2016 року в Дніпропетровському національному університеті залізничного транспорту імені академіка В. Лазаряна відбувся І тур Всеукраїнських студентських дебатів з питань сталого розвитку. Цей захід проводиться в рамках співпраці ВНЗ із Міжнародним проектом ПРООН/ЄС «Місцевий розвиток орієнтований на громаду', '2016-05-11 15:57:20', 1, 0, 3, '/newsImg/empty.jpg'),
(14, 'Студентська Весна 2016 у ДНУЗТ', '6 і 7 квітня у Палаці культури студентів ДНУЗТ ім. академіка Лазаряна відбувся найочікуваніший фестиваль творчості і талантів «Студентська Весна 2016», у якому прийняли участь 8 факультетів і військова кафедра університету.', '2016-05-11 15:57:20', 1, 0, 6, '/newsImg/empty.jpg'),
(16, 'Святкування 71 – ї річниці перемоги у Другій світовій війні в ДІІТі', '5 травня 2016 року у Дніпропетровському національному університеті залізничного транспорту імені академіка В.Лазаряна був проведений урочистий мітинг біля пам’ятника загиблим студентам у роки війни. Мітинг відкривав голова Ради ветеранів університету Кільовий Валентин Петрович.', '2016-05-11 16:06:51', 1, 0, 3, '/newsImg/empty.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `picface`
--

CREATE TABLE IF NOT EXISTS `picface` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `url` tinytext COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `picface`
--

INSERT INTO `picface` (`id`, `url`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '4.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `puzzles`
--

CREATE TABLE IF NOT EXISTS `puzzles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idFolder` int(10) unsigned NOT NULL,
  `textPuzzle` tinytext COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idFolder` (`idFolder`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `puzzles`
--

INSERT INTO `puzzles` (`id`, `idFolder`, `textPuzzle`) VALUES
(1, 1, 'это просто текст для пазла'),
(5, 1, 'А здесь еще текст для пазла');

-- --------------------------------------------------------

--
-- Структура таблицы `statisticsdownloadbook`
--

CREATE TABLE IF NOT EXISTS `statisticsdownloadbook` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idBook` int(10) unsigned NOT NULL,
  `idUser` int(10) unsigned NOT NULL,
  `tampDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `idBook` (`idBook`),
  KEY `idUser` (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `statisticsexercise`
--

CREATE TABLE IF NOT EXISTS `statisticsexercise` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idFolder` int(10) unsigned NOT NULL,
  `idUser` int(10) unsigned NOT NULL,
  `mark` int(10) unsigned NOT NULL,
  `allItem` int(10) unsigned NOT NULL,
  `sucItem` int(10) unsigned NOT NULL,
  `thisDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `idFolder` (`idFolder`),
  KEY `idUser` (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `firstName` varchar(20) COLLATE utf8_bin NOT NULL,
  `middleName` varchar(20) COLLATE utf8_bin NOT NULL,
  `lastName` varchar(20) COLLATE utf8_bin NOT NULL,
  `post` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `description` text COLLATE utf8_bin,
  `idPic` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idPic` (`idPic`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idFolder` int(10) unsigned NOT NULL,
  `text` tinytext COLLATE utf8_bin NOT NULL,
  `answerA` varchar(20) COLLATE utf8_bin NOT NULL,
  `answerB` varchar(20) COLLATE utf8_bin NOT NULL,
  `answerC` varchar(20) COLLATE utf8_bin NOT NULL,
  `answerD` varchar(20) COLLATE utf8_bin NOT NULL,
  `answerRight` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idFolder` (`idFolder`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=12 ;

--
-- Дамп данных таблицы `test`
--

INSERT INTO `test` (`id`, `idFolder`, `text`, `answerA`, `answerB`, `answerC`, `answerD`, `answerRight`) VALUES
(9, 1, 'andrey lusa ggg aaa', 'aaa', 'lusa', 'ggg', 'aaa', 'ggg'),
(10, 1, 'bl aa bb ll', 'aa', 'bb', 'bl', 'll', 'aa'),
(11, 1, 'How are you?', 'How', 'are', 'you', 'are', 'you');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstName` varchar(20) COLLATE utf8_bin NOT NULL,
  `middleName` varchar(20) COLLATE utf8_bin NOT NULL,
  `lastName` varchar(20) COLLATE utf8_bin NOT NULL,
  `mail` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(32) COLLATE utf8_bin NOT NULL,
  `post` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `description` text COLLATE utf8_bin,
  `role` varchar(20) COLLATE utf8_bin NOT NULL DEFAULT 'student',
  `urlImage` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=14 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `firstName`, `middleName`, `lastName`, `mail`, `password`, `post`, `description`, `role`, `urlImage`) VALUES
(3, 'Антоніна', 'Олександрівна', 'Мунтян', 'muntyn@gmail.com', 'a32925235687b4749c493358999163e3', 'завідувач кафедри', '1', 'teacher', '/users/1.jpg'),
(6, 'Тетяна', 'Анатоліївна', 'Купцова', 'kupcova@gmail.com', '7e1e06ef970d76c0aa11ca250de26a2c', 'доцент', 'afwa afesgesg segsgsgs segsg sgse srgsrg srg  sgs gsrg sgs gsrg sg', 'teacher', '/users/2.jpg'),
(7, 'Ольга', 'Андріївна', 'Заніздра', 'zanizdra@gmail.com', 'f3d06717a954f8fb728b521a645ede67', 'старший викладач', 'afwa afesgesg segsgsgs segsg sgse srgsrg srg  sgs gsrg sgs gsrg sg', 'teacher', '/users/3.jpg'),
(8, 'Катерина', 'Михайлівна', 'Перерва', 'pererva@gmail.com', '4503750e711f148e794dd48c9d780842', 'старший викладач', 'afwa afesgesg segsgsgs segsg sgse srgsrg srg  sgs gsrg sgs gsrg sg', 'teacher', '/users/4.jpg'),
(9, 'Денис', 'Владимирович', 'Кузнецов', 'denis1@gmail.com', 'ec745e57b667908bc47cb8f7a470e080', NULL, NULL, 'student', ''),
(13, 'Андрій', 'Олександрович', 'Сапожников', 'sapozhnykov@gmail.com', '9448cb5781251a01136c2b6f26639dbb', NULL, NULL, 'student', '/users/defaultFace.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idNews` int(10) unsigned NOT NULL,
  `url` tinytext COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idNews` (`idNews`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `classpoints`
--
ALTER TABLE `classpoints`
  ADD CONSTRAINT `classpoints_ibfk_1` FOREIGN KEY (`idTeacher`) REFERENCES `teachers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `consultpoints`
--
ALTER TABLE `consultpoints`
  ADD CONSTRAINT `consultpoints_ibfk_1` FOREIGN KEY (`idTeacher`) REFERENCES `teachers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `document_ibfk_1` FOREIGN KEY (`idNews`) REFERENCES `news` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`idNews`) REFERENCES `news` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `inscribe`
--
ALTER TABLE `inscribe`
  ADD CONSTRAINT `inscribe_ibfk_1` FOREIGN KEY (`idFolder`) REFERENCES `folders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`idElective`) REFERENCES `elective` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `news_ibfk_3` FOREIGN KEY (`idAuthor`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `puzzles`
--
ALTER TABLE `puzzles`
  ADD CONSTRAINT `puzzles_ibfk_1` FOREIGN KEY (`idFolder`) REFERENCES `folders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `statisticsdownloadbook`
--
ALTER TABLE `statisticsdownloadbook`
  ADD CONSTRAINT `statisticsdownloadbook_ibfk_1` FOREIGN KEY (`idBook`) REFERENCES `book` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `statisticsdownloadbook_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `statisticsexercise`
--
ALTER TABLE `statisticsexercise`
  ADD CONSTRAINT `statisticsexercise_ibfk_1` FOREIGN KEY (`idFolder`) REFERENCES `folders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `statisticsexercise_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_ibfk_1` FOREIGN KEY (`idPic`) REFERENCES `picface` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `test_ibfk_1` FOREIGN KEY (`idFolder`) REFERENCES `folders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_ibfk_1` FOREIGN KEY (`idNews`) REFERENCES `news` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
