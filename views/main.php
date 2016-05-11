<?php include ROOT . '/views/header.php'; ?>

<section class="about-block box-size">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="text-block fadeInLeft animated wow">
                    <div class="info-div">
                        <a href="#"><h2>Наша кафедра</h2></a>
                        <p>
                            <?php echo $aboutDepartmen['description']; ?>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="news-block important-news">
    <div class="container-fluid">
        <a href="#"><h2 class="title main wow animated fadeInLeft">Важливі новини </h2></a>

        <div class="row fadeInUp animated wow" data-wow-offset="200">

            <?php foreach($importanceNews as $news): ?>

            <div class="col-md-6 col-sm-6 block transition3s">
                <div class="pic">
                    <img src="<?php echo '/template/images'.$news['urlImage']; ?>" class="img-responsive" alt="">
                </div>
                <div class="info">
                    <h2><?php echo $news['title']; ?></h2>
                    <span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo $news['tempDate']; ?></span>
                    <a href="#" class="btn btn-default more transition3s">Дізнатися більше <i class="fa fa-angle-right"
                                                                                              aria-hidden="true"></i>
                    </a>
                </div>
            </div>

            <?php
            endforeach;
            ?>

        </div>

        <div class="col-md-4 col-md-offset-4 fadeIn animated wow more-block col-xs-offset-0 col-xs-12"
             data-wow-offset="200">
            <a href="#" class="btn btn-default more transition3s">Дізнатися більше</a>
        </div>
    </div>
</section>


<section class="task-block  box-size">
    <div class="container">
        <a href="#"><h2 class="title main wow animated fadeInUpBig">Завдання для вдосконалення своїх знань</h2></a>

        <div class="row fadeInUp animated wow" data-wow-offset="200">
            <div class="col-md-4  block transition3s">
                <div class="pic">
                    <a href="#"><img src="/template/images/task.svg" class="img-responsive transition3s" alt=""></a>
                </div>
                <a href="#"><h3>Тести</h3></a>
            </div>

            <div class="col-md-4  block transition3s">
                <div class="pic">
                    <a href="#"> <img src="/template/images/puzzle.svg" class="img-responsive transition3s" alt=""></a>
                </div>
                <a href="#"><h3>Пазли</h3></a>
            </div>

            <div class="col-md-4  block transition3s ">
                <div class="pic ">
                    <a href="#"> <img src="/template/images/test.svg" class="img-responsive transition3s" alt=""></a>
                </div>
                <a href="#"><h3>Пропущене слово</h3></a>
            </div>
        </div>
    </div>
</section>


<section class="teachers-block box-size">
    <div class="container">
        <a href="#"><h2 class="title main wow animated fadeIn">Викладачі</h2></a>

        <div class="row ">


            <div class="teachers fadeInUpBig animated wow" data-wow-offset="100">

                <?php for($i = 0; $i < 4; $i++): ?>
                    <div class="teacher block  transition3s">
                        <div class="pic col-md-5 col-xs-12">
                            <a href="#"><img src="<?php echo '/template/images'.$teachers[$i]['urlImage']; ?>" class="img-responsive" alt=""></a>
                        </div>
                        <div class="info-block  col-md-6 col-xs-12  transition3s">
                            <div class="text">
                                <h2 class="name"><?php echo $teachers[$i]['lastName'].' '.$teachers[$i]['firstName'].' '.$teachers[$i]['middleName']; ?></h2>
                                <span class="post"><?php echo $teachers[$i]['post']; ?></span>
                                <p class="description">
                                    <?php echo $teachers[$i]['description']; ?>
                                </p>
                            </div>
                        </div>

                    </div>
                <?php endfor; ?>
            </div>


        <div class="col-md-4 col-md-offset-4 fadeIn animated wow more-block col-xs-offset-0 col-xs-12"
             data-wow-offset="200">
            <a href="#" class="btn btn-default more transition3s">Дізнатися більше</a>
        </div>
    </div>
</section>

<section class="news-block latest">
    <div class="container">
        <a href="#"><h2 class="title main wow animated fadeIn">Новини кафедри</h2></a>

        <div class="row fadeInUp animated wow" data-wow-offset="200">

            <div class="owl-carousel owl-theme ">

                <?php foreach($otherNews as $news): ?>

                    <div class=" block transition3s">
                        <div class="pic">
                            <img src="<?php echo '/template/images'.$news['urlImage']; ?>" class="img-responsive" alt="">
                        </div>

                        <div class="info">
                            <a href="#"><h2><?php echo $news['title']; ?></h2></a>
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

                            <a href="#" class="btn btn-default more transition3s">Дізнатися більше <i
                                    class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>

                <?php endforeach; ?>

            </div>
            <div class="col-md-4 col-md-offset-4 fadeIn animated wow more-block col-xs-offset-0 col-xs-12"
                 data-wow-offset="200">
                <a href="#" class="btn btn-default more transition3s">Дізнатися більше</a>
            </div>
        </div>


    </div>
</section>


<section class="book-library">
    <div class="container">
        <a href="#"><h2 class="title main wow animated fadeIn">Учбовий матеріал</h2></a>

        <div class="row fadeInUp animated wow" data-wow-offset="200">

            <?php foreach($dataBooks as $book):?>

                <article>
                    <div class="col-md-4 col-xs-12 block transition3s">

                        <a href="#">
                            <div class="header ">
                                <h3><?php echo $book['title']; ?></h3>
                                <h4><?php echo $book['author']; ?></h4>
                                <h4><?php echo $book['yearBegin']; ?></h4>
                            </div>

                        </a>
                    </div>
                </article>

            <?php endforeach; ?>
        </div>
        <div class="col-md-4 col-md-offset-4 fadeIn animated wow more-block col-xs-offset-0 col-xs-12"
             data-wow-offset="200">
            <a href="#" class="btn btn-default more transition3s">Дізнатися більше</a>
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
                    <span>тел: +38092123456</span>
                </div>
            </div>

        </div>
    </div>

</footer>

<script src="/template/js/jquery.min.js"></script>
<script src="/template/js/bootstrap.min.js"></script>
<script src="/template/js/wow.min.js"></script>
<script src="/template/js/owl.carousel.min.js"></script>
<script src="/template/js/script.js"></script>
<script src="/template/js/main.js"></script>
</body>
</html>