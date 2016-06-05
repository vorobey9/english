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
        <div class="row">
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
                            <button onclick="pushSelectButton();" type="button" class="btn news-btn upper-text ">Вибрати</button>
                        </div>
                    </form>


                </div>
            </div>
            <div class="col-md-6 " id="teacherArea">
<!--
                <div class="teacher-info box-size transition3s">
                    <div class="pic circular-portrait">
                        <img src="images/1.jpg" class="img-responsive " alt="">
                    </div>

                    <div class="text">
                        <h2>Мунтян Антоніна Олександрівна</h2>
                        <h3>ст. викладач</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo con magna aliqua. occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit.
                        </p>
                    </div>
                </div>
                -->
            </div>
        </div>
    </div>


    <div class="schedule-blocks">
        <div class="container" id="blockArea">
            <!--
            <div class="row schedule-box" data-columns>
                <div class="block item transition3s radius5px">
                    <div class="pic radius5px">
                        <h3>Понеділок</h3>
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
                            <tr>
                                <th>1</th>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#teach1day1schedule1">
                                    <span class="room">
                                   ауд. 5409
                                    </span>
                                    <span class="date ">
                                        група 941
                                    </span>
                                    </a>

                                </td>
                                <td></td>
                            </tr>

                            <tr>
                                <th>2</th>
                                <td>
                                    <span class="room">
                                    5409
                                    </span>
                                    <span class="date">
                                      9.20 - 11.00
                                    </span>
                                </td>
                                <td></td>
                            </tr>

                            <tr>
                                <th>3</th>
                                <td></td>
                                <td>
                                    <span class="room">
                                    5409
                                    </span>
                                    <span class="date">
                                      9.20 - 11.00
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <th>4</th>
                                <td>
                                    <span class="room">
                                    5409
                                    </span>
                                    <span class="date">
                                      9.20 - 11.00
                                    </span>
                                </td>
                                <td></td>
                            </tr>

                            <tr>
                                <th>5</th>
                                <td>
                                    <span class="room">
                                    5409
                                    </span>
                                    <span class="date">
                                      9.20 - 11.00
                                    </span>
                                </td>
                                <td></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="block item transition3s radius5px">
                    <div class="pic radius5px">
                        <h3>Вівторок</h3>
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
                            <tr>
                                <th>1</th>
                                <td>
                                    <span class="room">
                                   ауд. 5409
                                    </span>
                                    <span class="date ">
                                        група 941
                                    </span>

                                </td>
                                <td></td>
                            </tr>

                            <tr>
                                <th>2</th>
                                <td>
                                    <span class="room">
                                    5409
                                    </span>
                                    <span class="date">
                                      9.20 - 11.00
                                    </span>
                                </td>
                                <td></td>
                            </tr>

                            <tr>
                                <th>3</th>
                                <td></td>
                                <td>
                                    <span class="room">
                                    5409
                                    </span>
                                    <span class="date">
                                      9.20 - 11.00
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <th>4</th>
                                <td>
                                    <span class="room">
                                    5409
                                    </span>
                                    <span class="date">
                                      9.20 - 11.00
                                    </span>
                                </td>
                                <td></td>
                            </tr>

                            <tr>
                                <th>5</th>
                                <td>
                                    <span class="room">
                                    5409
                                    </span>
                                    <span class="date">
                                      9.20 - 11.00
                                    </span>
                                </td>
                                <td></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="block item transition3s radius5px">
                    <div class="pic radius5px">
                        <h3>Середа</h3>
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
                            <tr>
                                <th>1</th>
                                <td>
                                    <span class="room">
                                   ауд. 5409
                                    </span>
                                    <span class="date ">
                                        група 941
                                    </span>

                                </td>
                                <td></td>
                            </tr>

                            <tr>
                                <th>2</th>
                                <td>
                                    <span class="room">
                                    5409
                                    </span>
                                    <span class="date">
                                      9.20 - 11.00
                                    </span>
                                </td>
                                <td></td>
                            </tr>

                            <tr>
                                <th>3</th>
                                <td></td>
                                <td>
                                    <span class="room">
                                    5409
                                    </span>
                                    <span class="date">
                                      9.20 - 11.00
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <th>4</th>
                                <td>
                                    <span class="room">
                                    5409
                                    </span>
                                    <span class="date">
                                      9.20 - 11.00
                                    </span>
                                </td>
                                <td></td>
                            </tr>

                            <tr>
                                <th>5</th>
                                <td>
                                    <span class="room">
                                    5409
                                    </span>
                                    <span class="date">
                                      9.20 - 11.00
                                    </span>
                                </td>
                                <td></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="block item transition3s radius5px">
                    <div class="pic radius5px">
                        <h3>Четвер</h3>
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
                            <tr>
                                <th>1</th>
                                <td>
                                    <span class="room">
                                   ауд. 5409
                                    </span>
                                    <span class="date ">
                                        група 941
                                    </span>

                                </td>
                                <td></td>
                            </tr>

                            <tr>
                                <th>2</th>
                                <td>
                                    <span class="room">
                                    5409
                                    </span>
                                    <span class="date">
                                      9.20 - 11.00
                                    </span>
                                </td>
                                <td></td>
                            </tr>

                            <tr>
                                <th>3</th>
                                <td></td>
                                <td>
                                    <span class="room">
                                    5409
                                    </span>
                                    <span class="date">
                                      9.20 - 11.00
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <th>4</th>
                                <td>
                                    <span class="room">
                                    5409
                                    </span>
                                    <span class="date">
                                      9.20 - 11.00
                                    </span>
                                </td>
                                <td></td>
                            </tr>

                            <tr>
                                <th>5</th>
                                <td>
                                    <span class="room">
                                    5409
                                    </span>
                                    <span class="date">
                                      9.20 - 11.00
                                    </span>
                                </td>
                                <td></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="block item transition3s radius5px">
                    <div class="pic radius5px">
                        <h3>П'ятниця</h3>
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
                            <tr>
                                <th>1</th>
                                <td>
                                    <span class="room">
                                   ауд. 5409
                                    </span>
                                    <span class="date ">
                                        група 941
                                    </span>

                                </td>
                                <td></td>
                            </tr>

                            <tr>
                                <th>2</th>
                                <td>
                                    <span class="room">
                                    5409
                                    </span>
                                    <span class="date">
                                      9.20 - 11.00
                                    </span>
                                </td>
                                <td></td>
                            </tr>

                            <tr>
                                <th>3</th>
                                <td></td>
                                <td>
                                    <span class="room">
                                    5409
                                    </span>
                                    <span class="date">
                                      9.20 - 11.00
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <th>4</th>
                                <td>
                                    <span class="room">
                                    5409
                                    </span>
                                    <span class="date">
                                      9.20 - 11.00
                                    </span>
                                </td>
                                <td></td>
                            </tr>

                            <tr>
                                <th>5</th>
                                <td>
                                    <span class="room">
                                    5409
                                    </span>
                                    <span class="date">
                                      9.20 - 11.00
                                    </span>
                                </td>
                                <td></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>


            </div>
            -->

            <!-- Блок консультаций кафедры !-->




            <!--
            <div class="row schedule-box" data-columns>


                <div class="block">
                    <div class="pic radius5px">
                        <h3>Понеділок</h3>
                    </div>

                    <div class="advice-block transition3s">
                        <div class="advice">
                            <h4>ауд. 4300</h4>
                            <h5>8.00-9.30</h5>
                            <div class="small-post">
                                <span>Замітка:</span>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                    labore et
                                    dolore magna aliqua.
                                </p>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="block">
                    <div class="pic radius5px">
                        <h3>Вівторок</h3>
                    </div>

                    <div class="advice-block transition3s">
                        <div class="advice">
                            <h4>ауд. 4300</h4>
                            <h5>8.00-9.30</h5>
                            <div class="small-post">
                                <span>Замітка:</span>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                    labore et
                                    dolore magna aliqua.
                                </p>
                            </div>
                        </div>


                    </div>                </div>


                <div class="block">
                    <div class="pic radius5px">
                        <h3>Середа</h3>
                    </div>

                    <div class="advice-block transition3s">
                        <div class="advice">
                            <h4>ауд. 4300</h4>
                            <h5>8.00-9.30</h5>
                            <div class="small-post">
                                <span>Замітка:</span>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                    labore et
                                    dolore magna aliqua.
                                </p>
                            </div>
                        </div>


                    </div>                </div>


                <div class="block">
                    <div class="pic radius5px">
                        <h3>Четвер</h3>
                    </div>

                    <div class="advice-block transition3s">
                        <div class="advice">
                            <h4>ауд. 4300</h4>
                            <h5>8.00-9.30</h5>
                            <div class="small-post">
                                <span>Замітка:</span>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                    labore et
                                    dolore magna aliqua.
                                </p>
                            </div>
                        </div>


                    </div>                </div>


                <div class="block">
                    <div class="pic radius5px">
                        <h3>П'ятниця</h3>
                    </div>

                    <div class="advice-block transition3s">
                        <div class="advice">
                            <h4>ауд. 4300</h4>
                            <h5>8.00-9.30</h5>
                            <div class="small-post">
                                <span>Замітка:</span>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                    labore et
                                    dolore magna aliqua.
                                </p>
                            </div>
                        </div>


                    </div>
                </div>


            </div>
            -->


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
<script src="/template/js/scheduleJS.js"></script>
</body>
</html>
