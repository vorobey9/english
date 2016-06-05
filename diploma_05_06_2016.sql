-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 05 2016 г., 19:59
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `book`
--

INSERT INTO `book` (`id`, `title`, `author`, `yearBegin`, `description`, `url`, `countDownload`, `uploadDate`) VALUES
(5, 'Мужик всегда прав', 'Амиран Сардаров', 2014, 'Эта книга поможет ребятам, начинающим свой путь самца, а также тем, которые уже наломали дров и никак не могут понять, как правильно и эффективно взаимодействовать с женщинами, как общаться, строить отношения и соблазнять. Как правильно понимать женщин: те или иные «выкидоны», о чём они говорят, и что с ними делать. Я не буду писать о говнотехниках, шаблонах и разных заготовках на все случаи жизни, потому что это поверхностный подход, который не работает. Вернее, на одной из десяти может и сработает, а остальные девять заставят вас недоумевать, что же вы не так сделали', '/template/docs/info.docx', 3, '2016-06-01 19:21:00'),
(6, 'До встречи с тобой', 'Мойес Джоджо', 2012, 'Страшная авария превратила успешного бизнесмена в инвалида. Душевная близость с молодой сиделкой может стать для него спасением или новой трагедией.', '/template/docs/info.docx', 0, '2016-05-23 11:58:28'),
(7, 'Лавр ', 'Водолазкин Евгений', 2012, 'Книга о средневековом целителе — его судьбе, любви, жертве и великом даре. Роман вошел в шорт-листы премий "Русский букер", "Большая книга"', '/template/docs/info.docx', 0, '2016-05-23 11:58:34'),
(8, 'Меня зовут Лис', 'Ли Виксен', 2010, 'Прикинувшись мальчишкой-солдатом, девушка Лис поступает на службу в легион Алой Розы. Ее не волнует судьба мира: было бы чем перекусить да где заснуть. Но все меняется, когда Лис находит учителя в лице сурового командира-иноземца Атоса и узнает страшную тайну, которую хранит генерал легиона — прекрасная и жуткая леди Алайла…\r\n\r\n«Меня зовут Лис» — это история девушки, бегущей от прошлого навстречу ужасам войны. Это дверь в огромный мир неведомого королевства, в котором днем бушуют войны, а в свете костра рассказывают удивительные сказки.', '/template/docs/info.docx', 1, '2016-05-27 15:03:45'),
(9, 'На службе зла', 'Роберт Гэлбрейт', 2004, 'Робин Эллакотт получает с курьером таинственный пакет - в котором обнаруживается отрезанная женская нога.\r\n\r\nЕе начальник, частный детектив Корморан Страйк, не так удивлен - но встревожен не меньше. В его прошлом есть четыре возможных кандидатуры на личность отправителя - и каждый из четверых способен на немыслимую жестокость.\r\n\r\nПолиция сосредоточивает усилия на поиске одного из этих четверых - но Страйк чем дальше, тем больше уверен, что именно этот подозреваемый ни при чем. Вдвоем с Робин они вынуждены взять дело в свои руки и погрузиться в пучины исковерканной психики остальных троих подозреваемых. Но таинственный убийца наносит новые удары, и Страйк с Робин понимают, что их время на исходе...\r\n\r\n«На службе зла» - дьявольски увлекательный роман-загадка с множеством неожиданных сюжетных поворотов, а также - история мужчины и женщины, пребывающих на перепутье как в профессиональном плане, так и в том, что касается личных отношений.', '/template/docs/info.docx', 0, '2016-05-23 11:58:46');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `classpoints`
--

INSERT INTO `classpoints` (`id`, `idTeacher`, `numLesson`, `dayStamp`, `numeratorGroup`, `denominatorGroup`, `room`) VALUES
(1, 6, 1, 1, '934', '921', '5409a'),
(3, 6, 2, 3, '945', NULL, '5410');

-- --------------------------------------------------------

--
-- Структура таблицы `commentar`
--

CREATE TABLE IF NOT EXISTS `commentar` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idAuthor` int(10) unsigned NOT NULL,
  `idNews` int(10) unsigned NOT NULL,
  `text` text NOT NULL,
  `thisDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `idAuthor` (`idAuthor`),
  KEY `idNews` (`idNews`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `commentar`
--

INSERT INTO `commentar` (`id`, `idAuthor`, `idNews`, `text`, `thisDate`) VALUES
(1, 13, 17, 'Это текст коментария =) он здесь, чтоб проверить вывод комментариев)', '2016-05-23 16:29:00'),
(2, 13, 16, 'bla bla bla', '2016-05-23 17:03:29'),
(3, 9, 17, 'привет, всем', '2016-05-23 17:33:55'),
(4, 13, 17, 'eee', '2016-05-23 18:39:47'),
(5, 13, 17, 'qqq', '2016-05-23 18:41:39'),
(6, 13, 17, 'yyy', '2016-05-23 18:43:17'),
(7, 13, 17, 'ooo', '2016-05-23 18:46:43'),
(8, 13, 18, 'First Message', '2016-05-26 16:02:03'),
(9, 13, 17, 'Андрей нормальный кодер)', '2016-06-01 13:09:35');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `consultpoints`
--

INSERT INTO `consultpoints` (`id`, `idTeacher`, `beginTime`, `endTime`, `dayStamp`, `description`, `room`) VALUES
(1, 6, '10:50:00', '12:20:00', 3, 'HELLO', '5404'),
(2, 6, '08:00:00', '09:20:00', 1, 'WORLD', '5408');

-- --------------------------------------------------------

--
-- Структура таблицы `descofsitesection`
--

CREATE TABLE IF NOT EXISTS `descofsitesection` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nameSection` tinytext COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `descofsitesection`
--

INSERT INTO `descofsitesection` (`id`, `nameSection`, `description`) VALUES
(1, 'mainAbout', 'Кафедра іноземних мов Дніпропетровського національного університету залізничного транспорту була заснована 9 січня 1933 року. У той час студенти вивчали німецьку та англійську мови, пізніше почала викладатися французька. Ці три мови викладаються на кафедрі по теперішній час.'),
(2, 'schedule', 'Завдяки цьому розділу Ви зможете знайти потрібну інформацію щодо розкладу консультацій та занять кафедри іноземної мови. Вам потрібно лише вибрати викладача та тип заняття.'),
(3, 'library', 'Ефективна навігація в електронній бібліотеці – це можливість користувача знаходити інформацію, яка його цікавить, в усьому доступному інформаційному просторі з найбільшою повнотою і точністю при найменших витратах зусиль. Тому нижче Ви можете знайти потрібну літературу з іноземної мови, скориставшись навігаційною панеллю.'),
(4, 'elective', 'Факультативний курс або факультативний предмет - це необов''язковий навчальний курс (предмет), що вивчається у вищому навчальному закладі на вибір студента. Факультативні курси організовуються радами вузів на свій розсуд з метою розширення і поглиблення наукових і прикладних знань студентів.'),
(5, 'exercise', 'Це розділ завдань, мета якого допомогти користувачу підвищити знання з іноземної мови. Нижче Вам потрібно вибрати тип завдання та тему, за якою треба буде виконувати завдання. Успіхів!');

-- --------------------------------------------------------

--
-- Структура таблицы `document`
--

CREATE TABLE IF NOT EXISTS `document` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idNews` int(10) unsigned NOT NULL,
  `title` text COLLATE utf8_bin NOT NULL,
  `url` tinytext COLLATE utf8_bin NOT NULL,
  `uploadDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `idNews` (`idNews`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `document`
--

INSERT INTO `document` (`id`, `idNews`, `title`, `url`, `uploadDate`) VALUES
(1, 17, 'Методичка1', '/elective/info.docx', '2016-05-27 10:32:18'),
(2, 17, 'Правила', '/elective/info.docx', '2016-05-27 10:32:28');

-- --------------------------------------------------------

--
-- Структура таблицы `elective`
--

CREATE TABLE IF NOT EXISTS `elective` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` tinytext COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `createDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `idAuthor` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idAuthor` (`idAuthor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `elective`
--

INSERT INTO `elective` (`id`, `title`, `description`, `createDate`, `idAuthor`) VALUES
(1, 'departmen', '', '2016-05-14 12:26:17', 1),
(2, 'Movie Club', 'Отрасль человеческой деятельности, заключающаяся в создании движущихся изображений. Иногда также упоминается как синемато́граф (от фр. cinématographe, устар.) и кинематогра́фия. Название заимствовано у одноимённого аппарата, изобретённого братьями Люмьер, и положившего начало коммерческому использованию технологии. Кинематограф был изобретён в конце XIX века и стал крайне популярен в XX веке', '2016-05-14 16:16:40', 3),
(3, 'English Nation', 'Англича́не (англ. English people) — нация и этническая группа, составляющая основное население Англии, которая разговаривает на английском языке. Сформировался в Средние века на острове Великобритания из германских племён англов, саксов, фризов и ютов, а также ассимилированного ими кельтского населения острова.\r\n\r\nВ настоящее время англичан, рассматривающих себя таковыми, насчитывается 50 миллионов человек. Английское этническое происхождение, учитывая граждан США, Канады, Австралии, Новой Зеландии и ЮАР, имеют сегодня в мире около 110 миллионов человек.\r\n\r\nАнгличане Великобритании, числом 44,7 млн человек, являются её основным населением. Остальные живут также в Канаде, США, Австралии, Новой Зеландии, ЮАР, Индии и т. д. Их язык — британский вариант английского, диалекты: восточный, северный, южный, западный, кентский. Письменность на основе латиницы. В древности использовалось руническое письмо. Верующие — преимущественно протестанты-англикане, а также методисты, католики.', '2016-05-14 14:41:27', 6),
(4, 'London is the capital of Great Britain', 'Великобрита́ния[7] (русское название от англ. Great Britain) или Соединённое Королевство (United Kingdom [jʊ̈nai̯tɘd kɪŋɡdə̯m]?, сокращённо UK); полная официальная форма — Соединённое Короле́вство Великобрита́нии и Се́верной Ирла́ндии[1] (англ. The United Kingdom of Great Britain and Northern Ireland) — островное государство на северо-западе Европы[8]. Великобритания — одно из крупнейших государств Европы, ядерная держава, постоянный член Совета Безопасности ООН. Наследница Британской империи, крупнейшей в истории, и существовавшей в XIX — начале XX веков.\n\nВеликобритания считается родиной современной парламентской демократии. Форма правления — парламентарная монархия.\n\nГосударство состоит из четырёх «исторических провинций» (по-английски — «countries», то есть «страны»): Англия, Шотландия, Уэльс и Северная Ирландия. Форма административно-территориального устройства — унитарное государство, хотя три из четырёх исторических провинций (кроме Англии) обладают значительной степенью автономии.\n\nСтолица — город Лондон, один из крупнейших городов Европы и важнейший мировой финансово-экономический центр.', '2016-05-14 16:32:59', 7);

-- --------------------------------------------------------

--
-- Структура таблицы `folders`
--

CREATE TABLE IF NOT EXISTS `folders` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `typeExercise` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `folders`
--

INSERT INTO `folders` (`id`, `title`, `description`, `typeExercise`) VALUES
(1, 'This is task', 'Текст, который подсказывает, что нужно сделать пользователю в данной папке с заданиями, т.е. условия задания', 'test'),
(2, 'Present Simple', 'Это текст с заданием, он тестовый, так что не обращайте внимание.', 'test'),
(3, 'Present Perfect', 'Цей розділ присвячено часу Present Perfect. Це тестовий текст для заповнення.', 'test'),
(4, 'What is your name?', 'Це текст для перевірки. Тут може бути все що завгодно, тому що, тому що.', 'puzzle'),
(5, 'London is the capital', 'Розташуйте столиці стран у правильному порядку згідно з грамматикою', 'puzzle'),
(6, 'Dnepro is a big city', 'Текст, который подсказывает, что нужно сделать пользователю в данной папке с заданиями, т.е. условия задания', 'inscribe'),
(7, 'English is very good language', 'Текст, который подсказывает, что нужно сделать пользователю в данной папке с заданиями, т.е. условия задания', 'inscribe');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `image`
--

INSERT INTO `image` (`id`, `idNews`, `url`, `uploadDate`) VALUES
(1, 1, '/gallery/g1.jpg', '2016-05-26 17:36:54'),
(2, 1, '/gallery/g2.jpg', '2016-05-26 17:36:54'),
(3, 1, '/gallery/g3.jpg', '2016-05-26 17:37:17'),
(4, 1, '/gallery/g4.jpg', '2016-05-26 17:37:17'),
(5, 1, '/gallery/g5.jpg', '2016-05-26 17:37:28'),
(6, 17, '/elective/e1.jpg', '2016-05-26 18:54:51'),
(7, 17, '/elective/e2.jpg', '2016-05-26 18:54:41');

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
(2, 6, 'Igor is a man', 'is'),
(3, 6, 'This is why we play', 'play');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_bin NOT NULL,
  `description` mediumtext COLLATE utf8_bin NOT NULL,
  `tempDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `idElective` int(10) unsigned NOT NULL,
  `importance` int(11) NOT NULL DEFAULT '0',
  `idAuthor` int(10) unsigned NOT NULL,
  `urlImage` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idElective` (`idElective`),
  KEY `idAuthor` (`idAuthor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=19 ;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `tempDate`, `idElective`, `importance`, `idAuthor`, `urlImage`) VALUES
(1, 'ForImage', '', '2016-05-26 17:05:25', 1, 2, 1, ''),
(9, 'Важное собрание кафедры', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo con magna aliqua. occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.\n\nВ этот период научное исследование в области методики преподавания иностранных языков стало одним из основных направлений в деятельности кафедры. Преподавателями кафедры было опубликовано много научных работ (монографий, статей, тезисов и докладов), в том числе и за границей. О.Б. Тарнопольский неоднократно стажировался в США. С 2001 года кафедрой заведует кандидат филологических наук, доцент Власова Татьяна Ивановна. За это время кафедра перепрофилировала свою методическую работу с учётом последних достижений методической науки - обучение посредством видео- и мультимедийных программ. Т.И. Власова - автор четырех учебников на английском языке, которые получили гриф Минобразования. В 2002 году издается книга Власовой Т.И. - "Learn science", которая предназначена для студентов, магистрантов и аспирантов высших технических заведений, а в 2004 - пособие "Английский язык", которое предназначено для студентов инженерных специальностей. Публикуются методические указания и разработки. Состав кафедры Кафедра активно принимает участие в разнообразных международных проектах (Ливия, Иран, Франция, Канада), ведёт подготовку студентов _V-тых курсов по французскому языку для прохождения стажировки в Школе Управления и Бизнеса (ЕЖС) Сен-Назера (Франция) под руководством доц. Пустовойт Н.И. Студенты этого французского заведения ежегодно приезжают в ДИИТ на стажировку по разным дисциплинам. Преподаватели кафедры активно принимают участие в украинских и международных конференциях. Публикуют свои научные работы в международных изданиях.\n\nВ этот период научное исследование в области методики преподавания иностранных языков стало одним из основных направлений в деятельности кафедры. Преподавателями кафедры было опубликовано много научных работ (монографий, статей, тезисов и докладов), в том числе и за границей. О.Б. Тарнопольский неоднократно стажировался в США. С 2001 года кафедрой заведует кандидат филологических наук, доцент Власова Татьяна Ивановна. За это время кафедра перепрофилировала свою методическую работу с учётом последних достижений методической науки - обучение посредством видео- и мультимедийных программ. Т.И. Власова - автор четырех учебников на английском языке, которые получили гриф Минобразования. В 2002 году издается книга Власовой Т.И. - "Learn science", которая предназначена для студентов, магистрантов и аспирантов высших технических заведений, а в 2004 - пособие "Английский язык", которое предназначено для студентов инженерных специальностей. Публикуются методические указания и разработки.', '2016-05-23 13:06:34', 1, 1, 3, '/newsImg/mainNews.png'),
(10, 'Собрание старост в 12.20', 'Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост. Очередное собрание старост.', '2016-05-23 13:05:06', 1, 1, 6, '/newsImg/emptyImportance1.jpg'),
(11, 'Сбор денег на помощь кафедре', 'Текст оповещения. Текст оповещения. Текст оповещения. Текст оповещения. Текст оповещения. Текст оповещения. Текст оповещения. Текст оповещения. Текст оповещения. Текст оповещения. Текст оповещения. Текст оповещения. Текст оповещения. Текст оповещения. Текст оповещения. Текст оповещения. Текст оповещения. Текст оповещения. Текст оповещения. Текст оповещения. Текст оповещения.', '2016-05-23 13:05:09', 1, 1, 3, '/newsImg/emptyImportance1.jpg'),
(12, 'Преддипломная практика', 'Это текст для оповещения студентов. Это текст для оповещения студентов. Это текст для оповещения студентов. Это текст для оповещения студентов. Это текст для оповещения студентов. Это текст для оповещения студентов. Это текст для оповещения студентов. Это текст для оповещения студентов. Это текст для оповещения студентов. Это текст для оповещения студентов. Это текст для оповещения студентов. Это текст для оповещения студентов. Это текст для оповещения студентов. Это текст для оповещения студентов. Это текст для оповещения студентов. Это текст для оповещения студентов. Это текст для оповещения студентов. Это текст для оповещения студентов.', '2016-05-23 13:05:14', 1, 1, 6, '/newsImg/emptyImportance1.jpg'),
(13, 'І тур Всеукраїнських студентських дебатів', '25 квітня 2016 року в Дніпропетровському національному університеті залізничного транспорту імені академіка В. Лазаряна відбувся І тур Всеукраїнських студентських дебатів з питань сталого розвитку. Цей захід проводиться в рамках співпраці ВНЗ із Міжнародним проектом ПРООН/ЄС «Місцевий розвиток орієнтований на громаду', '2016-05-11 15:57:20', 1, 0, 3, '/newsImg/empty.jpg'),
(14, 'Студентська Весна 2016 у ДНУЗТ', '6 і 7 квітня у Палаці культури студентів ДНУЗТ ім. академіка Лазаряна відбувся найочікуваніший фестиваль творчості і талантів «Студентська Весна 2016», у якому прийняли участь 8 факультетів і військова кафедра університету.', '2016-05-11 15:57:20', 1, 0, 6, '/newsImg/empty.jpg'),
(16, 'Святкування 71 – ї річниці перемоги у Другій світовій війні в ДІІТі', '5 травня 2016 року у Дніпропетровському національному університеті залізничного транспорту імені академіка В.Лазаряна був проведений урочистий мітинг біля пам’ятника загиблим студентам у роки війни. Мітинг відкривав голова Ради ветеранів університету Кільовий Валентин Петрович.', '2016-05-11 16:06:51', 1, 0, 3, '/newsImg/empty.jpg'),
(17, 'Новость номер 1', 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum', '2016-05-14 16:31:45', 2, 0, 3, '/newsImg/empty.jpg'),
(18, 'Новость номер 2', 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.', '2016-05-14 15:15:00', 2, 0, 3, '/newsImg/empty.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `puzzles`
--

CREATE TABLE IF NOT EXISTS `puzzles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idFolder` int(10) unsigned NOT NULL,
  `textPuzzle` tinytext COLLATE utf8_bin NOT NULL,
  `textEnglish` tinytext COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idFolder` (`idFolder`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `puzzles`
--

INSERT INTO `puzzles` (`id`, `idFolder`, `textPuzzle`, `textEnglish`) VALUES
(1, 4, 'ЭТО ПРОСТО ТЕКСТ ДЛЯ ПАЗЛА', 'THIS IS SOME TEXT FOR THE PUZZLE'),
(5, 4, 'А ЗДЕСЬ ЕЩЕ ТЕКСТ ДЛЯ ПАЗЛА', 'AND THERE IS STILL A PUZZLE FOR TEXT');

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
  `mark` float unsigned NOT NULL,
  `allItem` int(10) unsigned NOT NULL,
  `sucItem` int(10) unsigned NOT NULL,
  `thisDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `idFolder` (`idFolder`),
  KEY `idUser` (`idUser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=73 ;

--
-- Дамп данных таблицы `statisticsexercise`
--

INSERT INTO `statisticsexercise` (`id`, `idFolder`, `idUser`, `mark`, `allItem`, `sucItem`, `thisDate`) VALUES
(34, 1, 13, 33.33, 3, 1, '2016-06-01 13:23:53'),
(58, 1, 13, 25, 4, 1, '2016-06-01 18:16:06'),
(59, 1, 13, 50, 4, 2, '2016-06-01 18:16:15'),
(60, 1, 13, 25, 4, 1, '2016-06-01 18:16:21'),
(61, 1, 13, 50, 4, 2, '2016-06-01 18:16:37'),
(62, 1, 13, 50, 4, 2, '2016-06-01 18:17:40'),
(63, 1, 13, 75, 4, 3, '2016-06-01 18:17:58'),
(64, 1, 13, 75, 4, 3, '2016-06-01 18:19:31'),
(65, 1, 13, 75, 4, 3, '2016-06-05 10:16:31'),
(66, 6, 13, 50, 2, 1, '2016-06-05 12:20:05'),
(67, 6, 13, 50, 2, 1, '2016-06-05 12:23:06'),
(68, 6, 13, 100, 2, 2, '2016-06-05 12:26:01'),
(69, 6, 13, 0, 2, 0, '2016-06-05 12:26:22'),
(70, 6, 13, 0, 2, 0, '2016-06-05 12:47:44'),
(71, 4, 13, 50, 2, 1, '2016-06-05 16:56:36'),
(72, 4, 13, 100, 2, 2, '2016-06-05 16:57:39');

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
  `answerRight` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idFolder` (`idFolder`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=13 ;

--
-- Дамп данных таблицы `test`
--

INSERT INTO `test` (`id`, `idFolder`, `text`, `answerA`, `answerB`, `answerC`, `answerRight`) VALUES
(9, 1, 'Where ___ you from?', 'is', 'will', 'not', 'are'),
(10, 1, 'Mike ___ work in London', 'is', 'be', 'on', 'will'),
(11, 1, 'How ___ you?', 'on', 'is', 'of', 'are'),
(12, 1, 'My name ___ Vova.', 'are', 'on', 'of', 'is');

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
(1, 'admin', 'admin', 'admin', 'admin1@gmail.com', 'e00cf25ad42683b3df678c61f42c6bda', NULL, NULL, 'admin', '/users/defaultFace.jpg'),
(3, 'Антоніна', 'Олександрівна', 'Мунтян', 'muntyn@gmail.com', 'a32925235687b4749c493358999163e3', 'завідувач кафедри', '1', 'teacher', '/users/1.jpg'),
(6, 'Тетяна', 'Анатоліївна', 'Купцова', 'kupcova@gmail.com', '7e1e06ef970d76c0aa11ca250de26a2c', 'доцент', 'afwa afesgesg segsgsgs segsg sgse srgsrg srg  sgs gsrg sgs gsrg sg', 'teacher', '/users/2.jpg'),
(7, 'Ольга', 'Андріївна', 'Заніздра', 'zanizdra@gmail.com', 'f3d06717a954f8fb728b521a645ede67', 'старший викладач', 'afwa afesgesg segsgsgs segsg sgse srgsrg srg  sgs gsrg sgs gsrg sg', 'teacher', '/users/3.jpg'),
(8, 'Катерина', 'Михайлівна', 'Перерва', 'pererva@gmail.com', '4503750e711f148e794dd48c9d780842', 'старший викладач', 'afwa afesgesg segsgsgs segsg sgse srgsrg srg  sgs gsrg sgs gsrg sg', 'teacher', '/users/4.jpg'),
(9, 'Денис', 'Владимирович', 'Кузнецов', 'denis1@gmail.com', 'ec745e57b667908bc47cb8f7a470e080', NULL, NULL, 'student', '/users/defaultFace.jpg'),
(13, 'Андрій', 'Олександрович', 'Сапожников', 'sapozhnykov@gmail.com', '9448cb5781251a01136c2b6f26639dbb', NULL, NULL, 'student', '/users/defaultFace.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idNews` int(10) unsigned NOT NULL,
  `url` tinytext COLLATE utf8_bin NOT NULL,
  `uploadDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `idNews` (`idNews`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `video`
--

INSERT INTO `video` (`id`, `idNews`, `url`, `uploadDate`) VALUES
(1, 1, 'bumer.mp4', '2016-05-26 17:50:04'),
(2, 1, 'gelik.mp4', '2016-05-26 17:50:19'),
(3, 17, '/elective/e1.mp4', '2016-05-27 09:32:45'),
(4, 17, '/elective/e2.mp4', '2016-05-27 09:32:45');

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `classpoints`
--
ALTER TABLE `classpoints`
  ADD CONSTRAINT `classpoints_ibfk_2` FOREIGN KEY (`idTeacher`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `commentar`
--
ALTER TABLE `commentar`
  ADD CONSTRAINT `commentar_ibfk_1` FOREIGN KEY (`idAuthor`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commentar_ibfk_2` FOREIGN KEY (`idNews`) REFERENCES `news` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `consultpoints`
--
ALTER TABLE `consultpoints`
  ADD CONSTRAINT `consultpoints_ibfk_2` FOREIGN KEY (`idTeacher`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `document_ibfk_1` FOREIGN KEY (`idNews`) REFERENCES `news` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `elective`
--
ALTER TABLE `elective`
  ADD CONSTRAINT `elective_ibfk_1` FOREIGN KEY (`idAuthor`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
