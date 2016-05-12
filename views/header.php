<html>
<head>
    <title></title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="/template/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/template/css/animate.css"/>
    <link rel="stylesheet" href="/template/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="/template/css/owl.carousel.css"/>
    <link rel="stylesheet" href="/template/css/styles.css"/>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab&subset=latin,cyrillic' rel='stylesheet'
          type='text/css'>
</head>

<body>

<!--Preloader Вставь на все страницы в header !-->
<div class="preloader">
    <div class="logo-container">
        <img src="/template/images/preolader.svg">
    </div>

    <div class="loader-container">
                <span class="loader">
                    <span class="loader-inner">
                    </span>
                </span>
    </div>
</div>

<!--Preloader Вставь на все страницы в header !-->

<div class="up transition3s animated bounce">
    <i class="fa-angle-up  fa"></i>
</div>

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
                        <a href="/cabinet" class="btn btn-default login-btn transition3s">Мій кабінет</a>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>

</header>

<nav class="nav-block navbar navbar-default  ">
    <div class="container">
        <div class="row">
            <div class="navbar-header visible-xs">
                <button type="button" class="navbar-toggle "
                        data-target="#main-nav" aria-expanded="false">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i></a>
            </div>

            <div id="main-nav">
                <ul class="nav navbar-nav transition3s">
                    <li class="active"><a href="/">Головна</a></li>
                    <li><a href="#">Розклад</a></li>
                    <li><a href="#">Біблиотека</a></li>
                    <li><a href="#">Завдання</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Події кафедри<span
                                class="caret"></span></a>
                        <ul class="dropdown-menu ">
                            <li><a href="/news">Новини</a></li>
                            <li><a href="facultList.html">Факультативи</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Медіа</a></li>
                    <li><a href="#">Дисципліни</a></li>
                    <li><a href="#">Про кафедру</a></li>

                </ul>
            </div>
        </div>
    </div>
</nav>
