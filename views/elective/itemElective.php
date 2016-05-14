<?php include ROOT . '/views/header.php'; ?>

<section class="about-facultative">
    <div class="title-block wow animated fadeIn">
        <h1 class=" text-center"><?php echo $elective['title']; ?></h1>
        <div class="col-md-8 col-md-offset-2">
            <div class="description">
                <h4>
                    <?php echo $elective['description']; ?>
                </h4>
            </div>
        </div>
    </div>
</section>

<section class="news-list box-size" id="facultative">
    <div class="container">
        <div class="row masonry" data-columns>

            <?php foreach($news as $item): ?>

                <div class="news box-size transition3s item ">
                    <div class="pic ">
                        <a href="<?php echo '/elective/news/'.$item['id']; ?>"><img class="img-responsive transition3s" src="<?php echo '/template/images'.$item['urlImage']; ?>" alt="The title of the picture"></a>

                        <div class="data-block ">
                            <div class="data">
                                <span class="author"><i class="fa fa-user" aria-hidden="true"></i><?php echo $teacher['lastName'].' '.$teacher['firstName'].' '.$teacher['middleName']; ?></span>
                                <span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo $item['tempDate']; ?></span>
                            </div>
                            <div class="media-link ">
                                <a href="#" class="transition5s"><span><i class="fa fa-camera-retro" aria-hidden="true"></i></span><h4 class="text-center">Медіафайли</h4></a>
                            </div>
                        </div>

                    </div>

                    <div class="info">
                        <a href="<?php echo '/elective/news/'.$item['id']; ?>"><h2 class="title"><?php echo $item['title']; ?></h2></a>



                        <div class="text">
                            <p>
                                <?php echo mb_substr($item['description'],0,299).'...'; ?>
                            </p>
                        </div>
                        <div class="btn-container text-center">
                            <a href="<?php echo '/elective/news/'.$item['id']; ?>" class="btn btn-default news-btn">Читать полностью</a>
                        </div>
                    </div>

                </div>
            <?php endforeach; ?>
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