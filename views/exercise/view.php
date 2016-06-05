<?php include ROOT . '/views/header.php'; ?>

<section class="top-block schedule-top-block tests-top-block">
    <div class="title-block wow animated fadeIn">
        <h1 class="text-center">Завдання</h1>
        <div class="col-md-8 col-md-offset-2">
            <div class="description">
                <h4><?php echo $description; ?></h4>
            </div>

        </div>
    </div>

</section>


<section class="exercise-grid box-size transition3s">
    <div class="container">

        <div class="task-area folders">


            <div class="col-md-10 col-md-offset-1 col-xs-offset-0 hidden-xs">
                <div class="type-block radius5px">
                    <div class="col-md-3 test radius5px active" id="testButton" onclick="pushButtonEx('test');">
                        <div class="pic">
                            <img src="/template/images/task.svg" class="img-responsive transition3s" alt="">
                        </div>
                        <h3>Тести</h3>
                    </div>

                    <div class="col-md-3 test radius5px" id="puzzleButton" onclick="pushButtonEx('puzzle');">
                        <div class="pic">
                            <img src="/template/images/puzzle.svg" class="img-responsive transition3s" alt="">
                        </div>
                        <h3>Пазли</h3>
                    </div>

                    <div class="col-md-3 test radius5px" id="inscribeButton" onclick="pushButtonEx('inscribe');">
                        <div class="pic ">
                            <img src="/template/images/test.svg" class="img-responsive transition3s" alt="">
                        </div>
                        <h3>Пропущене слово</h3>
                    </div>
                </div>

                <div class="block transition3s radius5px">

                    <div class="main-block">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 id="titleArea"><?php echo $folders[0]['title']; ?></h2>
                            <p id="descArea">
                                <?php echo $folders[0]['description']; ?>
                            </p>
                        </div>


                        <div class="btn-container col-md-6 col-md-offset-3 text-center">
                            <?php if($idUser): ?>
                                <a href="<?php echo '/test/'.$folders[0]['id']; ?>" id="startBut" class="btn news-btn" data-typeEx="test" data-id="<?php echo $folders[0]['id']; ?>">Розпочати</a>
                            <?php else: ?>
                                <button id="alert" class="btn news-btn" value="Розпочати">Розпочати</button>
                            <?php endif; ?>
                        </div>
                    </div>




                    <div class="left-block" id="foldersArea">

                        <?php foreach($folders as $item): ?>
                            <a onclick="pushOnFolder(this);" data-description="<?php echo $item['description'];?>" data-id="<?php echo $item['id'];?>" data-title="<?php echo $item['title'];?>"><h4><?php echo $item['title']; ?></h4></a>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>


            <div class="col-xs-12 visible-xs small-task-area">

                <div class="block transition3s radius5px">
                    <div class="left-block">
                        <h2>Виберіть папку з завданнями</h2>

                        <?php foreach($folders as $item): ?>
                        <a href="#"><h4><?php echo $item['title']; ?></h4></a>
                        <?php endforeach; ?>

                    </div>

                </div>

                <div class="block transition3s radius5px">
                    <div class="main-block">
                        <div class="col-xs-12">
                            <h2><?php echo $folders[0]['title']; ?></h2>
                            <p>
                                <?php echo $folders[0]['description']; ?>
                            </p>
                        </div>
                        <div class="btn-container col-xs-12 text-center">
                            <input type="submit" class="btn news-btn" value="Перевірити">
                        </div>
                    </div>
                </div>



            </div>
        </div>

    </div>

    <!--Модальные окна форматировать тут!!-->
    <div class="modal fade " id="exception" tabindex="-1"
         role="dialog"
         aria-labelledby="myModalLabel">
        <div class="modal-dialog "
             role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"><span
                            aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <h5 class="text-center">Ви увійшли в систему як гість, авторизуйтесь для продовження дії</h5>
                </div>

                <div class="modal-footer text-center">
                    <div class="btn-container">
                        <a href="/login" type="button"
                           class="btn news-btn"
                        >
                            Увійти
                        </a>
                        <button type="button"
                                class="btn news-btn"
                                data-dismiss="modal"><i
                                class="fa fa-times">
                            </i>Закрити
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
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
<script src="/template/js/script.js"></script>
<script src="/template/js/exerciseView.js"></script>
</body>
</html>
