<html>
<head>
    <title>Админ панель главная</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="/template/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/template/css/jasny-bootstrap.min.css"/>
    <link rel="stylesheet" href="/template/css/animate.css"/>
    <link rel="stylesheet" href="/template/css/magnific-popup.css"/>
    <link rel="stylesheet" href="/template/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="/template/css/jquery.mCustomScrollbar.css"/>
    <link rel="stylesheet" href="/template/css/styles.css"/>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab&subset=latin,cyrillic' rel='stylesheet'
          type='text/css'>
</head>

<body>
<!--

 Админ панель главная

 !-->
<div class="wrapper transition3s">

    <div class="up transition3s animated bounce">
        <i class="fa-angle-up  fa"></i>
    </div>

    <section class="left-nav-section box-size transition3s">
        <div class="inside-block transition3s">

            <div class="header">

                <div class="user-info">
                    <h4><?php echo $teacher['lastName'].' '.$teacher['firstName'].' '.$teacher['middleName']; ?></h4>
                    <span class="post"><?php echo $teacher['post']; ?></span>

                </div>
            </div>

            <div class="navbar-block">
                <ul class="nav navbar-nav upper-text transition3s">

                    <li>
                        <a href="/admin/admin-news-list"  role="button"
                           aria-haspopup="true" aria-expanded="false">Новини</a>
                    </li>

                    <li >
                        <a href="/admin/admin-facultative-list"  role="button"
                           aria-haspopup="true" aria-expanded="false">Факультативи</a>

                    </li>


                    <li>
                        <a href="/admin/admin-task-folders-grid" role="button"
                           aria-haspopup="true" aria-expanded="false">Завдання</a>

                    </li>

                    <li>
                        <a href="/admin/admin-library-grid"  role="button"
                           aria-haspopup="true" aria-expanded="false">Бібліотека</a>
                    </li>

                    <li >
                        <a href="/admin/admin-schedule-page" role="button"
                           aria-haspopup="true" aria-expanded="false">Розклад</a>

                    </li>

                    <li>
                        <a href="/admin/admin-media-gallery"  role="button"
                           aria-haspopup="true" aria-expanded="false">Медіа галерея</a>

                    </li>
                    <li>
                        <a href="/admin/admin-cathedra"  role="button"
                           aria-haspopup="true" aria-expanded="false">Сторінка про кафедру</a>
                    </li>

                    <li>
                        <a href="/admin/admin-pages-description"  role="button"
                           aria-haspopup="true" aria-expanded="false">Редагування опису сторінок</a>
                    </li>
                </ul>
                <!--
                <ul class="nav navbar-nav upper-text transition3s">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Новини</a>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Факультативи</a>

                    </li>


                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Завдання</a>

                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Бібліотека</a>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Розклад</a>

                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Медіа галерея</a>

                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Успішність студентів </a>
                    </li>

                </ul>
                -->
            </div>
        </div>
    </section>


    <div id="top-nav-block" class="transition3s">
        <header class="cathedra-block box-size">
            <div class="container">
                <div class="row">

                    <div class="col-md-7 col-xs-12">
                        <div class="ico">
                            <a href="/"> <i class="fa fa-graduation-cap" aria-hidden="true"></i></a>
                        </div>
                        <div class="title"><h1>Кафедра Іноземної Мови</h1>
                <span>Дніпропетровський Національний Університет імені академіка В.А.Лазаряна
                </span>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="number">
                            <span>тел: +38(056) 373 15 24</span>
                        </div>
                        <div class="btn-container pull-right">
                            <?php $User = new Users();
                            if($User->isGuest()): ?>
                                <a href="/login" class="btn btn-default login-btn transition3s">Увійти</a>
                                <a href="/registration" class="btn btn-default login-btn transition3s">Регістрація</a>
                            <?php else: ?>
                                <a href="/logout" class="btn btn-default login-btn transition3s">Вийти</a>
                                <a href="/adminCabinet" class="btn btn-default login-btn transition3s">Мій кабінет</a>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>

        </header>

        <nav class="nav-block navbar navbar-default ">
            <div class="container">
                <div class="row">
                    <div class="navbar-header visible-xs">
                        <div id="smallBtn">Бокове меню</div>

                        <button type="button" class="navbar-toggle "
                                data-target="#main-nav" aria-expanded="false">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div id="main-nav">
                        <ul class="nav navbar-nav transition3s">
                            <li class="active"><a href="/">Головна</a></li>
                            <li><a href="/schedule">Розклад</a></li>
                            <li><a href="/library">Біблиотека</a></li>
                            <li><a href="/exercise">Завдання</a></li>
                            <li><a href="/news">Новини</a></li>
                            <li><a href="/elective">Факультативи</a></li>
                            <li><a href="/gallery">Медіа</a></li>
                            <li><a href="/cathedra">Про кафедру</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>