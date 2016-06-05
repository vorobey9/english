<html>
<head>
    <title>Страница студента</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="/template/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/template/css/animate.css"/>
    <link rel="stylesheet" href="/template/css/jasny-bootstrap.min.css"/>
    <link rel="stylesheet" href="/template/css/jquery.mCustomScrollbar.css"/>
    <link rel="stylesheet" href="/template/css/magnific-popup.css"/>
    <link rel="stylesheet" href="/template/css/jasny-bootstrap.min.css"/>
    <link rel="stylesheet" href="/template/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="/template/css/styles.css"/>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab&subset=latin,cyrillic' rel='stylesheet'
          type='text/css'>
</head>

<body>

<div class="up transition3s animated bounce">
    <i class="fa-angle-up  fa"></i>
</div>

<header class="cathedra-block box-size">
    <div class="container">
        <div class="row">

            <div class="col-md-7 col-xs-12">
                <div class="ico">
                    <a href="main.html"> <i class="fa fa-graduation-cap" aria-hidden="true"></i></a>
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
                    <li><a href="/schedule">Розклад</a></li>
                    <li><a href="/library">Біблиотека</a></li>
                    <li><a href="/exercise">Завдання</a></li>
                    <li><a href="/news">Новини</a></li>
                    <li><a href="/elective">Факультативи</a></li>
                    <li><a href="/gallery">Медіа</a></li>
                    <li><a href="#">Про кафедру</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>


<section class="personal box-size">
    <div class="container">
        <div class="row">

            <div class="col-md-8">
                <div class="block box-size transition3s radius5px ">

                    <div class="col-md-6">
                        <div class="pic">
                            <img src="<?php echo '/template/images'.$user['urlImage']; ?>" class="img-responsive " alt="">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="student-data">
                            <h2><?php echo $user['lastName'].' '.$user['firstName'].' '.$user['middleName']; ?></h2>
                            <h4>Студент</h4>
                            <div class="btn text-center more change-btn" >Редагувати дані користувача</div>
                        </div>

                    </div>

                </div>

                <div class="change-block block radius5px">
                    <div class="col-md-6">

                        <div class="change-form">
                            <!--
                            <form action="#">
                            -->
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-filename fileinput-exists " ></div>
                                    <div>
                                        <span class="btn btn-default btn-file"><span class="fileinput-new">Змінити фотографію</span><span class="fileinput-exists">Вибрати іншу</span><input type="file" name="..."></span>
                                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Очистити</a>
                                    </div>
                                </div>
                                <input type="text" id="name"  class="form-control" placeholder="Ім'я" value="<?php echo $user['firstName']; ?>">
                                <input type="text" id="surname"  class="form-control" placeholder="Призвіще" value="<?php echo $user['lastName']; ?>">
                                <input type="text" id="fullname"  class="form-control" placeholder="По-батькові" value="<?php echo $user['middleName']; ?>">
                                <input type="text" id="old-pass"  class="form-control" placeholder="Старий пароль">
                                <input type="text" id="new-pass"   class="form-control" placeholder="Новий пароль">
                                <input type="text" id="repeat-pass"   class="form-control" placeholder="Повторити пароль">
                                <input type="button" id="changeButton" data-id="<?php echo $user['id'];?>" class="more btn text-center" value="Змінити дані" onclick="changeInfo();">
                            <!--
                            </form>
                            -->
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="errors-block" id="errBlock">
                            <!--
                            <label for="name">Неверное введен email </label>
                            <label for="surname">Неверное введен пароль </label>
                            <label for="fullname">Неверное введено отчество </label>
                            <label for="old-pass">Неверное введено имя </label>
                            <label for="new-pass">Неверное введена фамилия </label>
                            <label for="repeat-pass">Пароли не совпадают </label>
                            -->
                        </div>
                    </div>
                </div>



                <div class="block task-success radius5px">
                    <div class="title-test">
                        <h3>Статистика проходження тестів</h3>
                    </div>

                    <div class="progress-task">
                        <div class="result-block transition3s">
                            <?php foreach($tests as $item): ?>
                                <div class="test">
                                    <h5><?php echo $item['title'];?></h5>
                                    <div class="progress progress-striped">
                                        <div class="<?php if($item['mark'] < 60) {
                                            echo 'progress-bar six-sec-ease-in-out progress-bar-danger';
                                        }
                                        else {
                                            echo 'progress-bar six-sec-ease-in-out';
                                        }
                                        ?>" role="progressbar"
                                             data-transitiongoal="<?php echo $item['mark']; ?>"></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="title-test">
                        <h3>Статистика проходження пазлів</h3>
                    </div>
                    <div class="progress-task">

                        <div class="result-block transition3s">

                            <?php foreach($puzzles as $item): ?>
                                <div class="test">
                                    <h5><?php echo $item['title'];?></h5>
                                    <div class="progress progress-striped">
                                        <div class="<?php if($item['mark'] < 60) {
                                            echo 'progress-bar six-sec-ease-in-out progress-bar-danger';
                                        }
                                        else {
                                            echo 'progress-bar six-sec-ease-in-out';
                                        }
                                        ?>" role="progressbar"
                                             data-transitiongoal="<?php echo $item['mark']; ?>"></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>

                    </div>

                    <div class="progress-task">
                        <div class="title-test">
                            <h3>Статистика завдання пропущене слово</h3>
                        </div>
                        <div class="result-block transition3s">

                            <?php foreach($inscribes as $item): ?>
                                <div class="test">
                                    <h5><?php echo $item['title'];?></h5>
                                    <div class="progress progress-striped">
                                        <div class="<?php if($item['mark'] < 60) {
                                            echo 'progress-bar six-sec-ease-in-out progress-bar-danger';
                                        }
                                        else {
                                            echo 'progress-bar six-sec-ease-in-out';
                                        }
                                        ?>" role="progressbar"
                                             data-transitiongoal="<?php echo $item['mark']; ?>"></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>

                    </div>



                </div>


            </div>


            <div class="col-md-4 ">
                <div class="important-block radius5px">
                    <h2>Важливі новини кафедри</h2>

                    <?php foreach($importanceNews as $news): ?>

                        <div class="news box-size transition3s item ">
                            <div class="pic radius5px">
                                <a href="<?php echo '/news/'.$news['id'];?>"> <img src="<?php echo '/template/images'.$news['urlImage']; ?>" class="img-responsive" alt=""></a>
                                <div class="imp-label">Важлива новина</div>
                            </div>

                            <div class="info">
                                <a href="<?php echo '/news/'.$news['id'];?>"><h2 class="title"><?php echo $news['title']; ?></h2></a>

                                <div class="data">
                                <span class="author"><i class="fa fa-user" aria-hidden="true"></i>
                                    <?php
                                    foreach($teachers as $teacher) {
                                        if($teacher['id'] == $news['idAuthor']) {
                                            echo $teacher['lastName'].' '.$teacher['firstName'].' '.$teacher['middleName'];
                                        }
                                    }
                                    ?>
                                </span>
                                    <span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo $news['tempDate']; ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>

        </div>
    </div>


</section>



<footer class="cathedra-block black box-size">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-12">
                <div class="ico">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                </div>
                <div class="title"><h1>Кафедра Іноземної Мови</h1>
                 <span>Дніпропетровський Національний Університет імені академіка В.А.Лазаряна
                </span></div>
            </div>
            <div class="col-md-3 col-xs-12  pull-right">
                <div class="number">
                    <span>тел: +38(056) 373 15 24</span>
                </div>
            </div>

        </div>
    </div>

</footer>

<script src="/template/js/jquery.min.js"></script>
<script src="/template/js/bootstrap.min.js"></script>
<script src="/template/js/waypoints.min.js"></script>
<script src="/template/js/wow.min.js"></script>
<script src="/template/js/salvattore.min.js"></script>
<script src="/template/js/jquery.magnific-popup.min.js"></script>
<script src="/template/js/jasny-bootstrap.min.js"></script>
<script src="/template/js/bootstrap-progressbar.min.js"></script>
<script src="/template/js/jquery.mCustomScrollbar.min.js"></script>
<script src="/template/js/script.js"></script>
<script src="/template/js/cabinetJS.js"></script>
</body>
</html>