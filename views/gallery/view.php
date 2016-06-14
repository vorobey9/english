<?php include ROOT . '/views/header.php'; ?>

<section class="top-block mediagallery-block">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="top-text col-md-6 col-md-offset-3">
                <div class=" wow animated fadeIn">
                    <h1 class=" text-center">Медіа галерея</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="media-grid media-gallery">
    <div class="container-fluid">
        <div class="control">
            <ul class="list-unstyled">
                <li id="but1" class="active"><a onclick="pushImg();">Фотоматеріали</a></li>
                <li id="but2"><a onclick="pushVideo();">Відеоматеріали</a></li>
            </ul>
        </div>
    </div>

    <div class="second-container">
        <!-- Для фотографий!-->
        <div class="popup-gallery " id="imgGallery">
            <div  class="row second" data-columns>

                <?php foreach($images as $image): ?>
                <div class="item box-size ">
                    <a href="<?php echo '/template/images'.$image['url'] ?>" title="The Cleaner">
                        <img class="img-responsive"
                             src="<?php echo '/template/images'.$image['url'] ?>"></a>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
        <!-- Для фотографий!-->
    </div>



    <div class="container-fluid" id="videoGallery">

        <!-- Для Видеозаписей!-->

        <!--
        <div class="row photo" data-columns>


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

        <!--
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
        -->

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
<script src="/template/js/galleryJS.js"></script>


</body>
</html>