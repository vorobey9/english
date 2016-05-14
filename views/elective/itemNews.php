<?php include ROOT . '/views/header.php'; ?>

<section class="single-news box-size" id="facultative">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="text-center"><?php echo $news['title']; ?></h2>

                <div class="pic">
                    <img src="<?php echo '/template/images'.$news['urlImage']; ?>" class="img-responsive" alt="">
                    <div class="data-block">
                        <div class="data">
                            <span class="author"><i class="fa fa-user" aria-hidden="true"></i><?php echo $teacher['lastName'].' '.$teacher['firstName'].' '.$teacher['middleName']; ?></span>
                            <span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo $news['tempDate']; ?></span>
                        </div>
                        <div class="media-link ">
                            <a href="#" class="transition5s"><span><i class="fa fa-camera-retro" aria-hidden="true"></i></span><h4 class="text-center">Медіафайли</h4></a>
                        </div>
                    </div>
                </div>

                <div class="text">
                    <p>
                        <?php echo $news['description']; ?>
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/footer.php'; ?>