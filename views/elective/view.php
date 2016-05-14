<?php include ROOT . '/views/header.php'; ?>

<!--Описание Факультативов !-->

<section class="top-block">
    <div class="title-block wow animated fadeIn">
        <h1 class=" text-center">Факультативы</h1>
        <div class="col-md-8 col-md-offset-2">
            <div class="description">
                <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat.</h4>
            </div></div>
    </div>
</section>

<!--Описание Факультативов !-->

<!-- Список факультативов!-->
<section class="facult-list">
    <div class="container">
        <div class="row">


            <?php foreach($electiveList as $elective): ?>
                <div class="col-md-10 facultative transition3s">
                    <div class="block">
                        <div class="title">
                            <div class="bg"></div>
                            <a href="<?php echo '/elective/'.$elective['id']; ?>"><h2><?php echo $elective['title']; ?></h2></a>
                            <div class="maker-info">
                                <span class="author"><i class="fa fa-user" aria-hidden="true"></i>
                                    <?php
                                    foreach($teacherList as $teacher) {
                                        if($teacher['id'] == $elective['idAuthor']) {
                                            echo $teacher['lastName'].' '.$teacher['firstName'].' '.$teacher['middleName'];
                                        }
                                    }
                                    ?>
                                </span>
                                <!--
                                <span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i>ДАТА</span>
                                -->
                            </div>
                        </div>

                        <div class="info">
                            <div class="description">
                                <h4>
                                    <?php echo $elective['description']; ?>
                                </h4>

                            </div>
                            <div class="btn-container text-center">

                                <a href="<?php echo '/elective/'.$elective['id']; ?>" class="btn btn-default login-btn ">Узнать больше</a>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>
    </div>

</section>
<!-- Список факультативов!-->

<?php include ROOT . '/views/footer.php'; ?>