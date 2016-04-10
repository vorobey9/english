-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Апр 10 2016 г., 16:43
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `book`
--

INSERT INTO `book` (`id`, `title`, `author`, `yearBegin`, `description`, `url`, `countDownload`) VALUES
(2, 'kito', 'vasiy', 2014, 'affaef fg dgd df dg sfb', 'ggg/gg/gg', 2);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `classpoints`
--

INSERT INTO `classpoints` (`id`, `idTeacher`, `numLesson`, `dayStamp`, `numeratorGroup`, `denominatorGroup`, `room`) VALUES
(2, 9, 2, 3, '941', '911', '5411');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

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
(1, 'FUCK', 'vasiy afaeg gsrgs sgrs ggfh');

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
(1, 'theeee', 'abc', 'test', 9);

-- --------------------------------------------------------

--
-- Структура таблицы `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idNews` int(10) unsigned NOT NULL,
  `url` tinytext COLLATE utf8_bin NOT NULL,
  `type` varchar(20) COLLATE utf8_bin NOT NULL DEFAULT 'usual',
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `inscribe`
--

INSERT INTO `inscribe` (`id`, `idFolder`, `text`, `skipWord`) VALUES
(2, 1, 'andrey lusa ggg', 'andrey');

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
  PRIMARY KEY (`id`),
  KEY `idElective` (`idElective`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `tempDate`, `idElective`) VALUES
(3, 'MAIN', 'aaa', '2016-03-27 17:52:17', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `picface`
--

CREATE TABLE IF NOT EXISTS `picface` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `url` tinytext COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `picface`
--

INSERT INTO `picface` (`id`, `url`) VALUES
(1, 'thisisurl');

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
(1, 1, '123abc'),
(5, 1, 'testtext');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `statisticsdownloadbook`
--

INSERT INTO `statisticsdownloadbook` (`id`, `idBook`, `idUser`, `tampDate`) VALUES
(1, 2, 13, '2016-03-27 16:36:53'),
(2, 2, 13, '2016-03-27 16:38:32');

-- --------------------------------------------------------

--
-- Структура таблицы `statisticsexercise`
--

CREATE TABLE IF NOT EXISTS `statisticsexercise` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idFolder` int(10) unsigned NOT NULL,
  `idUser` int(10) unsigned NOT NULL,
  `mark` float unsigned NOT NULL,
  `allItem` int(10) unsigned NOT NULL,
  `sucItem` int(10) unsigned NOT NULL,
  `thisDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `idFolder` (`idFolder`),
  KEY `idUser` (`idUser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `statisticsexercise`
--

INSERT INTO `statisticsexercise` (`id`, `idFolder`, `idUser`, `mark`, `allItem`, `sucItem`, `thisDate`) VALUES
(4, 1, 13, 30, 10, 3, '2016-03-27 12:52:40');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `teachers`
--

INSERT INTO `teachers` (`id`, `firstName`, `middleName`, `lastName`, `post`, `description`, `idPic`) VALUES
(9, 'Fuck', 'Alexandrovich', 'Sapozhnikov', 'decan', 'he is very smart, long and big', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `test`
--

INSERT INTO `test` (`id`, `idFolder`, `text`, `answerA`, `answerB`, `answerC`, `answerD`, `answerRight`) VALUES
(9, 1, 'andrey lusa ggg aaa', 'aaa', 'lusa', 'ggg', 'aaa', 'ggg');

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
  `idPic` int(10) unsigned DEFAULT NULL,
  `role` varchar(5) COLLATE utf8_bin NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`),
  KEY `idPic` (`idPic`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=14 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `firstName`, `middleName`, `lastName`, `mail`, `password`, `idPic`, `role`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin', 1, 'admin'),
(13, 'Remy', 'Fuck', 'Lebo', 'lebo111@gmail.com', 'b94bed3fbb15a169a7fa31df69822d7f', 1, 'user');

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
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`idElective`) REFERENCES `elective` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`idPic`) REFERENCES `picface` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_ibfk_1` FOREIGN KEY (`idNews`) REFERENCES `news` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
