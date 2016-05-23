<?php include ROOT . '/views/header.php'; ?>
<section class="list-news news-block box-size">
    <div class="container">
        <div class="col-md-8 ">

            <div class="title-block">
                <h2 class="text-center">Свіжі новини</h2>
            </div>

            <div class="row video" data-columns>

                <?php foreach($otherNews as $news): ?>
                    <div class="block item transition3s radius5px">
                            <a href="<?php echo '/news/'.$news['id'];?>">
                            <div class="pic radius5px">
                                 <img src="<?php echo '/template/images'.$news['urlImage']; ?>" class="img-responsive " alt="">
                            </div>
                            </a>
                            <div class="info">
                                <a href="<?php echo '/news/'.$news['id'];?>"> <h2><?php echo $news['title']; ?></h2></a>
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
<?php include ROOT . '/views/footer.php'; ?>