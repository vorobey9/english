<?php include ROOT . '/views/header.php'; ?>

<section class="top-block cathedra-top-block">
    <div class="title-block wow animated fadeIn">

        <div class="col-md-8 col-md-offset-2 description">
            <h1 class=" text-center">Кафедра Іноземної мови</h1>
        </div>
    </div>

</section>


<section class="cathedra-grid box-size">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="block box-size transition3s radius5px">
                    <h3 class="text-center">Наші викладачі</h3>

                    <div class="teachers-grid">

                        <div class=" owl-theme owl-loaded cathedra-owl">

                            <?php foreach($teachers as $teach): ?>

                                <div class="teacher  transition3s">
                                    <div class="col-md-6">
                                        <div class="pic">
                                            <a href="#"><img src="<?php echo '/template/images'.$teach['urlImage']; ?>" class="img-responsive" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info-block     transition3s">
                                            <div class="text">
                                                <h2 class="name"><?php echo $teach['lastName'].' '.$teach['firstName'].' '.$teach['middleName']; ?></h2>
                                                <span class="post"><?php echo $teach['post']; ?></span>
                                                <p>
                                                    <?php echo $teach['description']; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php endforeach; ?>

                        <!--
                            <div class="teacher  transition3s">
                                <div class="col-md-6">
                                    <div class="pic">
                                        <a href="#"><img src="images/teacher/11.jpg" class="img-responsive" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info-block     transition3s">
                                        <div class="text">
                                            <h2 class="name">Мунтян Антонина Александровна</h2>
                                            <span class="post"> ст.преподаватель</span>
                                            <p>
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                                brunch. Food truck quinoa nesciunt laborum eiusmod.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="teacher  transition3s">
                                <div class="col-md-6">
                                    <div class="pic">
                                        <a href="#"><img src="images/teacher/12.jpg" class="img-responsive" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info-block     transition3s">
                                        <div class="text">
                                            <h2 class="name">Мунтян Антонина Александровна</h2>
                                            <span class="post"> ст.преподаватель</span>
                                            <p>
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                                brunch. Food truck quinoa nesciunt laborum eiusmod.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="teacher  transition3s">
                                <div class="col-md-6">
                                    <div class="pic">
                                        <a href="#"><img src="images/teacher/13.jpg" class="img-responsive" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info-block     transition3s">
                                        <div class="text">
                                            <h2 class="name">Мунтян Антонина Александровна</h2>
                                            <span class="post"> ст.преподаватель</span>
                                            <p>
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                                brunch. Food truck quinoa nesciunt laborum eiusmod.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="teacher  transition3s">
                                <div class="col-md-6">
                                    <div class="pic">
                                        <a href="#"><img src="images/teacher/11.jpg" class="img-responsive" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info-block     transition3s">
                                        <div class="text">
                                            <h2 class="name">Мунтян Антонина Александровна</h2>
                                            <span class="post"> ст.преподаватель</span>
                                            <p>
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                                brunch. Food truck quinoa nesciunt laborum eiusmod.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="teacher  transition3s">
                                <div class="col-md-6">
                                    <div class="pic">
                                        <a href="#"><img src="images/teacher/11.jpg" class="img-responsive" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info-block     transition3s">
                                        <div class="text">
                                            <h2 class="name">Мунтян Антонина Александровна</h2>
                                            <span class="post"> ст.преподаватель</span>
                                            <p>
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                                brunch. Food truck quinoa nesciunt laborum eiusmod.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="teacher  transition3s">
                                <div class="col-md-6">
                                    <div class="pic">
                                        <a href="#"><img src="images/teacher/13.jpg" class="img-responsive" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info-block     transition3s">
                                        <div class="text">
                                            <h2 class="name">Мунтян Антонина Александровна</h2>
                                            <span class="post"> ст.преподаватель</span>
                                            <p>
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                                brunch. Food truck quinoa nesciunt laborum eiusmod.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        -->
                        </div>



                    </div>
                    <div class="panels">

                        <h3 class="text-center">Інформація про кафедру</h3>


                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <a role="button" data-toggle="collapse" data-parent="#accordion"
                                   href="#History" aria-expanded="true" aria-controls="History">
                                    <div class="panel-heading" role="tab" id="headingOne">


                                        <h4 class="panel-title"> Історія кафедри</h4>
                                    </div>
                                </a>

                                <div id="History" class="panel-collapse collapse " role="tabpanel"
                                     aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <p>
                                            <?php echo $history['description']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">

                                <a class="collapsed" role="button" data-toggle="collapse"
                                   data-parent="#accordion" href="#Subject" aria-expanded="false"
                                   aria-controls="collapseTwo">
                                    <div class="panel-heading" role="tab" id="headingTwo">

                                        <h4 class="panel-title">   Дисципліни</h4>

                                    </div>
                                </a>

                                <div id="Subject" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <?php echo $subject['description']; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">

                                <a class="collapsed" role="button" data-toggle="collapse"
                                   data-parent="#accordion" href="#Science" aria-expanded="false"
                                   aria-controls="collapseThree">
                                    <div class="panel-heading" role="tab" id="headThree">

                                        <h4 class="panel-title">    Наукова робота</h4>

                                    </div>
                                </a>

                                <div id="Science" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <p>
                                            <?php echo $science['description']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
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

                    <!--
                    <div class="news box-size transition3s item ">
                        <a href="#">
                            <div class="pic radius5px">
                                <img src="images/study1.jpg" class="img-responsive" alt="">
                                <div class="imp-label">Важлива новина</div>
                            </div>
                        </a>
                        <div class="info">
                            <a href="#"><h2 class="title">Lorem ipsum dolor sit amet, consectetur</h2></a>

                            <div class="data">
                                <span class="author"><i class="fa fa-user" aria-hidden="true"></i>Мунтян Аноніна Олександрівна.</span>
                                <span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i>28.02.16</span>
                            </div>
                        </div>
                    </div>

                    <div class="news box-size transition3s item ">
                        <a href="#">
                            <div class="pic radius5px">
                                <img src="images/study1.jpg" class="img-responsive" alt="">
                                <div class="imp-label">Важлива новина</div>
                            </div>
                        </a>
                        <div class="info">
                            <a href="#"><h2 class="title">Lorem ipsum dolor sit amet, consectetur</h2></a>

                            <div class="data">
                                <span class="author"><i class="fa fa-user" aria-hidden="true"></i>Мунтян Аноніна Олександрівна.</span>
                                <span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i>28.02.16</span>
                            </div>
                        </div>
                    </div>

                    <div class="news box-size transition3s item ">
                        <a href="#">
                            <div class="pic radius5px">
                                <img src="images/study1.jpg" class="img-responsive" alt="">
                                <div class="imp-label">Важлива новина</div>
                            </div>
                        </a>
                        <div class="info">
                            <a href="#"><h2 class="title">Lorem ipsum dolor sit amet, consectetur</h2></a>

                            <div class="data">
                                <span class="author"><i class="fa fa-user" aria-hidden="true"></i>Мунтян Аноніна Олександрівна.</span>
                                <span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i>28.02.16</span>
                            </div>
                        </div>
                    </div>

                    <div class="news box-size transition3s item ">
                        <a href="#">
                            <div class="pic radius5px">
                                <img src="images/learn.png" class="img-responsive" alt="">
                                <div class="imp-label">Важлива новина</div>
                            </div>
                        </a>
                        <div class="info">
                            <a href="#"><h2 class="title">Lorem ipsum dolor sit amet, consectetur</h2></a>

                            <div class="data">
                                <span class="author"><i class="fa fa-user" aria-hidden="true"></i>Мунтян Аноніна Олександрівна.</span>
                                <span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i>28.02.16</span>
                            </div>
                        </div>
                    </div>

                    -->
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
                </span>
                </div>
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
<script src="/template/js/owl.carousel.min.js"></script>
<script src="/template/js/salvattore.min.js"></script>
<script src="/template/js/jquery.magnific-popup.min.js"></script>
<script src="/template/js/main.js"></script>
<script src="/template/js/script.js"></script>
</body>
</html>

