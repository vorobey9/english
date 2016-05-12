<?php include ROOT . '/views/header.php'; ?>

<section class="single-news box-size">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="block radius5px">
                    <h2 class="text-center"><?php echo $news['title']; ?></h2>
                    <div class="pic radius5px">
                        <img src="<?php echo '/template/images'.$news['urlImage']; ?>" class="img-responsive" alt="">
                        <div class="data-block">
                            <div class="data">
                                <span class="author"><i class="fa fa-user" aria-hidden="true"></i><?php echo $teacher['lastName'].' '.$teacher['firstName'].' '.$teacher['middleName']; ?></span>
                                <span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo $news['tempDate']; ?></span>
                            </div>

                        </div>
                    </div>

                    <div class="text">
                        <p><?php echo $news['description']; ?></p>
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

                        <div class="pic radius5px">
                            <a href="#"> <img src="images/study1.jpg" class="img-responsive" alt=""></a>
                            <div class="imp-label">Важлива новина</div>
                        </div>

                        <div class="info">
                            <a href="#"><h2 class="title">Lorem ipsum dolor sit amet, consectetur</h2></a>

                            <div class="data">
                                <span class="author"><i class="fa fa-user" aria-hidden="true"></i>Мунтян Аноніна Олександрівна.</span>
                                <span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i>28.02.16</span>
                            </div>
                        </div>
                    </div>

                    <div class="news box-size transition3s item ">
                        <div class="pic radius5px">
                            <a href="#"> <img src="images/study1.jpg" class="img-responsive" alt=""></a>
                            <div class="imp-label">Важлива новина</div>
                        </div>
                        <div class="info">
                            <a href="#"><h2 class="title">Lorem ipsum dolor sit amet, consectetur</h2></a>

                            <div class="data">
                                <span class="author"><i class="fa fa-user" aria-hidden="true"></i>Мунтян Аноніна Олександрівна.</span>
                                <span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i>28.02.16</span>
                            </div>
                        </div>
                    </div>

                    <div class="news box-size transition3s item ">

                        <div class="pic radius5px">
                            <a href="#"> <img src="images/study1.jpg" class="img-responsive" alt=""></a>
                            <div class="imp-label">Важлива новина</div>
                        </div>

                        <div class="info">
                            <a href="#"><h2 class="title">Lorem ipsum dolor sit amet, consectetur</h2></a>

                            <div class="data">
                                <span class="author"><i class="fa fa-user" aria-hidden="true"></i>Мунтян Аноніна Олександрівна.</span>
                                <span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i>28.02.16</span>
                            </div>
                        </div>
                    </div>

                    <div class="news box-size transition3s item ">
                        <div class="pic radius5px">
                            <a href="#"> <img src="images/learn.png" class="img-responsive" alt=""></a>
                            <div class="imp-label">Важлива новина</div>
                        </div>
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

<?php include ROOT . '/views/footer.php'; ?>