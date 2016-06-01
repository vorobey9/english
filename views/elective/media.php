<?php include ROOT . '/views/header.php'; ?>

<!--

 Страница медиафайлов факультативов


 !-->


<section class="top-block mediafiles-block">
    <div class="title-block wow animated fadeIn">
        <div class="description">
            <h1 class=" text-center"><?php echo $title; ?></h1>
            <h2 class=" text-center">Медіафайли зустрічі</h2>
        </div>
    </div>

</section>


<section class="media-grid">


    <div id="media-page">
        <div class="media-links small-links">
            <ul class="list-unstyled text-center">
                <li id="imgBut" class="active"><a onclick="pushImage(<?php echo $idNews;?>);" class="transition5s"><span><i class="fa fa-camera-retro" aria-hidden="true"></i></span></a></li>
                <li id="videoBut"><a onclick="pushVideo(<?php echo $idNews;?>);" class="transition5s"><span><i class="fa fa-video-camera" aria-hidden="true"></i></span></a></li>
                <li id="docBut"><a onclick="pushDoc(<?php echo $idNews;?>)" class="transition5s"><span><i class="fa fa-file-text" aria-hidden="true"></i></span></a></li>
            </ul>
        </div>

    </div>

    <div class="container-fluid">
        <div class="row">
            <div id="forMediaJS" class="col-md-10 col-sm-10 col-lg-10 col-lg-offset-1  col-xs-10 ">
                <!-- Для фотографий!-->
                <div class="popup-gallery">
                    <div class="row photo" data-columns>

                        <?php foreach($images as $image): ?>
                            <div class="item box-size">
                                <a href="<?php echo '/template/images'.$image['url'] ?>" title="The Cleaner">
                                    <img class="img-responsive" src="<?php echo '/template/images'.$image['url'] ?>">
                                </a>
                            </div>
                        <?php endforeach; ?>

                    </div>

                </div>

                <!-- Для фотографий!-->


                <!-- Для Видеозаписей!-->

<!--
                <div class="row video" data-columns>


                    <div class="item box-size">
                        <video src="video/bumer.mp4" controls></video>
                        <h3>The bumer damage</h3>
                    </div>

                    <div class="item box-size">
                        <video src="video/gelik.mp4" controls></video>
                        <h3>The bumer damage</h3>
                    </div>

                    <div class="item box-size">
                        <video src="video/bumer.mp4" controls></video>
                        <h3>The bumer damage</h3>
                    </div>

                    <div class="item box-size">
                        <video src="video/bumer.mp4" controls></video>
                        <h3>The bumer damage</h3>
                    </div>

                    <div class="item box-size">
                        <video src="video/gelik.mp4" controls></video>
                        <h3>The bumer damage</h3>
                    </div>

                    <div class="item box-size">
                        <video src="video/bumer.mp4" controls></video>
                        <h3>The bumer damage</h3>
                    </div>

                </div>
-->
                <!-- Для Видеозаписей!-->


                <!-- Для Документов!-->
<!--
                <div class="row document" data-columns>

                    <div class="item box-size">

                        <div class="header ">
                            <div class="info-block">
                                <span>Название: </span><h2>Визначення попиту на пересування населенних малих міст маршрутним пасажирським транспортом
                                </h2>
                                <div >
                                    <span>Автор: </span><h4>Любий, Є. В.,Любий, Є. В,Любий, Є. В,Любий, Є. В </h4>
                                </div>
                            </div>
                            <div class="btn-container text-center">
                                <a href="#" class="btn btn-default news-btn">Скачати</a>
                            </div>
                        </div>

                    </div>

                    <div class="item box-size">

                        <div class="header ">
                            <div class="info-block">
                                <span>Название: </span><h2>Визначення попиту на пересування населенних малих міст маршрутним пасажирським транспортом
                                </h2>
                                <div >
                                    <span>Автор: </span><h4>Любий, Є. В.,Любий, Є. В,Любий, Є. В,Любий, Є. В </h4>
                                </div>
                            </div>
                            <div class="btn-container text-center">
                                <a href="#" class="btn btn-default news-btn">Скачати</a>
                            </div>
                        </div>

                    </div>

                    <div class="item box-size">

                        <div class="header ">
                            <div class="info-block">
                                <span>Название: </span><h2>Визначення попиту на пересування населенних малих міст маршрутним пасажирським транспортом
                                </h2>
                                <div >
                                    <span>Автор: </span><h4>Любий, Є. В.,Любий, Є. В,Любий, Є. В,Любий, Є. В </h4>
                                </div>
                            </div>
                            <div class="btn-container text-center">
                                <a href="#" class="btn btn-default news-btn">Скачати</a>
                            </div>
                        </div>

                    </div>

                    <div class="item box-size">

                        <div class="header ">
                            <div class="info-block">
                                <span>Название: </span><h2>Визначення попиту на пересування населенних малих міст маршрутним пасажирським транспортом
                                </h2>
                                <div >
                                    <span>Автор: </span><h4>Любий, Є. В.,Любий, Є. В,Любий, Є. В,Любий, Є. В </h4>
                                </div>
                            </div>
                            <div class="btn-container text-center">
                                <a href="#" class="btn btn-default news-btn">Скачати</a>
                            </div>
                        </div>

                    </div>

                    <div class="item box-size">

                        <div class="header ">
                            <div class="info-block">
                                <span>Название: </span><h2>Визначення попиту на пересування населенних малих міст маршрутним пасажирським транспортом
                                </h2>
                                <div >
                                    <span>Автор: </span><h4>Любий, Є. В.,Любий, Є. В,Любий, Є. В,Любий, Є. В </h4>
                                </div>
                            </div>
                            <div class="btn-container text-center">
                                <a href="#" class="btn btn-default news-btn">Скачати</a>
                            </div>
                        </div>

                    </div>

                    <div class="item box-size">

                        <div class="header ">
                            <div class="info-block">
                                <span>Название: </span><h2>Визначення попиту на пересування населенних малих міст маршрутним пасажирським транспортом
                                </h2>
                                <div >
                                    <span>Автор: </span><h4>Любий, Є. В.,Любий, Є. В,Любий, Є. В,Любий, Є. В </h4>
                                </div>
                            </div>
                            <div class="btn-container text-center">
                                <a href="#" class="btn btn-default news-btn">Скачати</a>
                            </div>
                        </div>

                    </div>


                    <!-- Для Документов!-->



<!--
                </div>
-->
            </div>
        </div>
        <div class="paginator">
            <div class="row">
                <div class="text-center animated fadeInUp wow col-md-6 col-md-offset-3" >
                    <ul class="pagination pagination-lg">
                        <li class="disabled hidden-xs">
                            <a href="#">
                                <i class="fa fa-chevron-left"></i>
                                <i class="fa fa-chevron-left"></i>
                            </a>
                        </li>
                        <li class="disabled">
                            <a href="#">
                                <i class="fa fa-chevron-left"></i>
                            </a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li>
                            <a href="#">
                                <i class="fa fa-chevron-right"></i>
                            </a>
                        </li>
                        <li class="hidden-xs">
                            <a href="#">
                                <i class="fa fa-chevron-right"></i>
                                <i class="fa fa-chevron-right"></i>
                            </a>
                        </li>
                    </ul>
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
<script src="/template/js/script.js"></script>
<script src="/template/js/mediaJS.js"></script>
</body>
</html>