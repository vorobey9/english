<?php include ROOT . '/views/header.php'; ?>


<section class="top-block schedule-top-block">
    <div class="title-block wow animated fadeIn">
        <h1 class=" text-center">Розклад занять та консультацій кафедри</h1>
        <div class="col-md-8 col-md-offset-2">
            <div class="description">
                <h4><?php echo $descOfSection['description'];?></h4>
            </div>

        </div>
    </div>
</section>


<section class="schedule-grid">
    <div class="container">
        <div id="selectArea" class="row">
            <div class="col-md-6">
                <div class="controls-block transition3s">


                    <form action="#" method="post">

                        <div class="teacher-block upper-text">
                            <label for="teacher">Виберіть викладача:</label>
                            <select name="teacher" id="teacher">
                                <?php foreach($teachers as $teacher): ?>
                                    <option value="<?php echo $teacher['id']; ?>"><?php echo $teacher['lastName'].' '.$teacher['firstName'].' '.$teacher['middleName']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="schedule-block upper-text">
                            <label for="type-schedule">Виберіть тип занять:</label>
                            <select name="type-schedule" id="type-schedule">
                                <option value="ConsultPoint">Консультації кафедри</option>
                                <option value="ClassPoint">Розклад занять кафедри</option>
                            </select>
                        </div>
                        <div class="btn-container ">
                            <button type="submit" name="submit" class="btn news-btn upper-text">Вибрати</button>
                        </div>

                    </form>



                </div>
            </div>
            <div class="col-md-6 aboutTeacher">
                <?php if($showTecherBlock == true): ?>
                <div class="teacher-info box-size transition3s">
                    <div class="pic circular-portrait">
                        <img src="<?php echo '/template/images'.$teacherItem['urlImage']; ?>" class="img-responsive " alt="">
                    </div>

                    <div class="text">
                        <h2><?php echo $teacherItem['lastName'].' '.$teacherItem['firstName'].' '.$teacherItem['middleName']; ?></h2>
                        <h3><?php echo $teacherItem['post']; ?></h3>
                        <p>
                            <?php echo $teacherItem['description']; ?>
                        </p>
                    </div>
                </div>
                <?php endif; ?>

            </div>
        </div>
    </div>


    <div class="schedule-blocks">
        <div class="container">
            <div class="row schedule-box" data-columns>

                <?php if($showClassBlock == true): ?>

                <?php foreach($points as $item): ?>
                <div class="block item transition3s radius5px">
                    <div class="pic radius5px">
                        <h3>
                            <?php for($i=0; $i<5; $i++) {
                                    if($i+1 == $item['dayStamp']) {
                                        echo $dayName[$i];
                                    }
                            }?>
                        </h3>
                    </div>

                    <div class="info">
                        <table class="table-responsive table table-bordered">
                            <thead>
                            <tr>
                                <th>Номер заняття</th>
                                <th>Чисельник</th>
                                <th>Знаменник</th>
                            </tr>
                            </thead>

                            <tbody>

                            <?php for($i = 1; $i <=5; $i++): ?>
                            <tr>
                                <th><?php echo $i; ?></th>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#teach1day1schedule1">
                                    <span class="room">
                                        <?php if($item["numLesson"] == $i && $item['numeratorGroup']) {
                                            echo 'ауд. '.$item['room'];
                                        }?>
                                    </span>
                                    <span class="date ">
                                        <?php if($item["numLesson"] == $i && $item['numeratorGroup']) {
                                            echo 'група '.$item['numeratorGroup'];
                                        }?>
                                    </span>
                                    </a>
                                </td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#teach1day1schedule1">
                                    <span class="room">
                                        <?php if($item['numLesson'] == $i && $item['denominatorGroup']) {
                                            echo 'ауд. '.$item['room'];
                                        }?>
                                    </span>
                                    <span class="date ">
                                        <?php if($item['numLesson'] == $i && $item['denominatorGroup']) {
                                            echo 'група '.$item['denominatorGroup'];
                                        }?>
                                    </span>
                                    </a>
                                </td>
                            </tr>
                            <?php endfor; ?>

                            </tbody>
                        </table>
                    </div>
                </div>

                <?php endforeach; ?>

                <?php endif; ?>

            </div>

            <!-- Блок консультаций кафедры !-->

            <div class="row schedule-box" data-columns>

                <?php if($showConsultBlock == true): ?>
                    <?php foreach($points as $item): ?>
                    <div class="block">
                        <div class="pic radius5px">
                            <h3>
                                <?php for($i=0; $i<5; $i++) {
                                    if($i+1 == $item['dayStamp']) {
                                        echo $dayName[$i];
                                    }
                                }?>
                            </h3>
                        </div>

                        <div class="advice-block transition3s">
                            <div class="advice">
                                <h4>
                                    <?php echo 'ауд. '.$item['room']; ?>
                                </h4>
                                <h5>
                                    <?php
                                    $date1 = new DateTime($item['beginTime']);
                                    $date2 = new DateTime($item['endTime']);
                                    echo $date1->format('H:i').' - '.$date2->format('H:i'); ?>
                                </h5>
                                <div class="small-post">
                                    <span>Замітка:</span>
                                    <p>
                                        <?php echo $item['description']; ?>
                                    </p>
                                </div>
                            </div>


                        </div>
                    </div>
                    <?php endforeach; ?>
                <?php endif; ?>

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
</body>
</html>
