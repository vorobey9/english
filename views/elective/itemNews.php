<?php include ROOT . '/views/header.php'; ?>

<section class="single-news box-size" id="facultative">

    <div id="media-page">
        <div class="media-links  fixed small-links">
            <ul class="list-unstyled transition3s text-center">
                <li class="active"><a href="#" class="transition5s"><span><i class="fa fa-camera-retro" aria-hidden="true"></i></span></a></li>
                <li><a href="#" class="transition5s"><span><i class="fa fa-video-camera" aria-hidden="true"></i></span></a></li>
                <li><a href="#" class="transition5s"><span><i class="fa fa-file-text" aria-hidden="true"></i></span></a></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="block">

                    <div class="pic">
                        <img src="<?php echo '/template/images'.$news['urlImage']; ?>" class="img-responsive" alt="">
                    </div>

                    <h2><?php echo $news['title']; ?></h2>

                    <div class="text">
                        <p> <?php echo $news['description']; ?></p>
                    </div>
                    <div class="data">
                        <span class="author"><i class="fa fa-user" aria-hidden="true"></i><?php echo $teacher['lastName'].' '.$teacher['firstName'].' '.$teacher['middleName']; ?></span>
                        <span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo $news['tempDate']; ?></span>
                    </div>

                </div>


                <div class="block">
                    <?php foreach ($comments as $comment):?>
                    <div class="answer-block">
                        <div class="avatar">
                            <img src="<?php echo '/template/images'.$comment['urlImage']; ?>" class=" img-responsive" alt="">
                        </div>
                        <div class="text">
                            <h5><?php echo $comment['lastName'].' '.$comment['firstName'].' '.$comment['middleName']; ?></h5>
                            <p>
                                <?php echo $comment['text']; ?>
                            </p>
                            <span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo $comment['thisDate'] ?></span>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="block">
                    <div class="comment-form">
                            <p>
                                <textarea id="comment" class="form-control" name="comment" data-idNews="<?php echo $news['id']; ?>" placeholder="Введіть коментарій" rows="8" aria-required="true"></textarea>
                            </p>
                        <?php if($idUser): ?>
                            <p id="reloadText"></p>
                            <button type="button" onclick="pushButton();" class="news-btn btn">Отправити</button>
                        <?php else: ?>
                            <a href="#"  class="news-btn btn" id="alert">Отправити</a>
                        <?php endif; ?>
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
    <!--Модальные окна форматировать тут!!-->
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
<script src="/template/js/wow.min.js"></script>
<script src="/template/js/salvattore.min.js"></script>
<script src="/template/js/script.js"></script>
<script src="/template/js/commentScript.js"></script>
</body>
</html>