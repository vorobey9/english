<?php include ROOT . '/views/headerAdmin.php'; ?>

    <section class="admin-panel box-size">

        <div class="full-container">
            <div class="row">
                <section class="panel-info-block">

                    <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                        <div class="block box-size transition3s radius5px admin-container">

                            <div class="news-panel">

                                <div class="add-block">

                                    <div class="schedule-edit">
                                        <!-- Розклад занять кафедри !-->
                                        <h3 class="text-center">Заповнення розкладу занять кафедри</h3>

                                        <div class="control">
                                            <div class="row">

                                                <div class="type-block radius5px">
                                                    <div class="col-md-3 sked active" id="numer">
                                                        <div class="pic">
                                                            <img src="images/calendar.png"
                                                                 class="img-responsive transition3s" alt="">
                                                        </div>
                                                        <h4 class="text-center">Чисельник</h4>
                                                    </div>

                                                    <div class="col-md-3 sked " id="denumer">
                                                        <div class="pic">
                                                            <img src="images/calendar2.png"
                                                                 class="img-responsive transition3s" alt="">
                                                        </div>
                                                        <h4 class="text-center">Знаменник</h4>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>


                                        <div class="table-block">

                                            <table class="table-responsive table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>Номер заняття</th>
                                                    <th>Понеділок</th>
                                                    <th>Вівторок</th>
                                                    <th>Середа</th>
                                                    <th>Четвер</th>
                                                    <th>П'ятниця</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                <tr>
                                                    <th class="col-md-1">1</th>

                                                    <td>
                                                        <a href="#" data-toggle="modal" data-target="#schedule1">
                                                            <div class="data-table">
                                    <span class="room">
                                   ауд. 5409
                                    </span>
                                    <span class="date ">
                                        група 941
                                    </span>
                                                            </div>
                                                        </a>

                                                    </td>

                                                    <td></td>
                                                    <td>
                                                        <a href="#" data-toggle="modal" data-target="#schedule1">
                                                            <div class="data-table">
                                    <span class="room">
                                   ауд. 5404
                                    </span>
                                    <span class="date ">
                                        група 941
                                    </span>
                                                            </div>
                                                        </a>

                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>

                                                <tr>
                                                    <th>2</th>
                                                    <td>
                                                        <a href="#" data-toggle="modal" data-target="#schedule1">
                                                            <div class="data-table">
                                    <span class="room">
                                   ауд. 5404
                                    </span>
                                    <span class="date ">
                                        група 941
                                    </span>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <a href="#" data-toggle="modal" data-target="#schedule1">
                                                            <div class="data-table">
                                    <span class="room">
                                   ауд. 5404
                                    </span>
                                    <span class="date ">
                                        група 941
                                    </span>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td></td>
                                                </tr>

                                                <tr>
                                                    <th>3</th>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <a href="#" data-toggle="modal" data-target="#schedule1">
                                                            <div class="data-table">
                                    <span class="room">
                                   ауд. 5404
                                    </span>
                                    <span class="date ">
                                        група 941
                                    </span>
                                                            </div>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th>4</th>
                                                    <td>
                                                        <a href="#" data-toggle="modal" data-target="#schedule1">
                                                            <div class="data-table">
                                    <span class="room">
                                   ауд. 5404
                                    </span>
                                    <span class="date ">
                                        група 941
                                    </span>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>

                                                <tr>
                                                    <th>5</th>
                                                    <td>
                                                        <a href="#" data-toggle="modal" data-target="#schedule1">
                                                            <div class="data-table">
                                    <span class="room">
                                   ауд. 5404
                                    </span>
                                    <span class="date ">
                                        група 941
                                    </span>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <a href="#" data-toggle="modal" data-target="#schedule1">
                                                            <div class="data-table">
                                    <span class="room">
                                   ауд. 5404
                                    </span>
                                    <span class="date ">
                                        група 941
                                    </span>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td></td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>


                                        <!-- Розклад занять кафедри !-->
                                        <!--Модальные окна форматировать тут!!-->
                                        <div class="modal fade " id="schedule1" tabindex="-1"
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

                                                        <h4 class="modal-title text-center">Понеділок</h4>

                                                    </div>

                                                    <div class="modal-body">
                                                        <div class="title-block">
                                                            <h4 class="text-center">1 Пара</h4>
                                                        </div>
                                                        <div class="input-block">
                                                            <label for="place">Введіть номер аудиторії:</label>
                                                            <input type="text" id="place-schedule" class="form-control">
                                                            <label for="group">Введіть номер групи:</label>
                                                            <input type="text" id="group" class="form-control">

                                                            <div class="errors">
                                                                <label for="place-schedule" class="alert alert-danger">
                                                                    Пусте поле введення номеру аудиторії</label>
                                                                <label for="group" class="alert alert-danger">Пусте поле
                                                                    введення номеру групи</label>
                                                            </div>
                                                            <div class="btn-container ">
                                                                <input type="button" class="btn admin-btn  btn-sm"
                                                                       value="Сохранити дані">
                                                                <input type="button" class="btn btn-danger  "
                                                                       value="Видалити дані">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Когда формируешь модалку заполнения расписания используй class = hidden когда при
                                                                                редактировании расписания убирай class = hidden
                                                                               <input type="button" class="btn btn-danger hidden" value="Видалити дані">
                                                                               !-->
                                                    <div class="modal-footer text-center">
                                                        <div class="btn-container">

                                                            <button type="button"
                                                                    class="btn news-btn pull-right"
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
                                        <!--Модальные окна форматировать тут!!-->
                                        <div class="modal fade " id="schedule2" tabindex="-1"
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

                                                        <h4 class="modal-title text-center">Понеділок</h4>

                                                    </div>

                                                    <div class="modal-body">


                                                        <div class="input-block">
                                                            <label for="place">Введіть номер аудиторії:</label>
                                                            <input type="text" id="place" class="form-control">


                                                            <label for="start">Початок консультації:</label>

                                                            <div class="input-group bootstrap-timepicker timepicker">
                                                                <input id="start" type="text" class="form-control ">
                                                                <span class="input-group-addon"><i
                                                                        class="glyphicon glyphicon-time"></i></span>
                                                            </div>
                                                            <label for="end">Закінчення консультації:</label>

                                                            <div class="input-group bootstrap-timepicker timepicker">
                                                                <input id="end" type="text" class="form-control ">
                                                                <span class="input-group-addon"><i
                                                                        class="glyphicon glyphicon-time"></i></span>
                                                            </div>
                                                            <label for="note">Напишіть замітку:</label>
                                                            <textarea class="form-control" id="note"
                                                                      placeholder="Замітка"></textarea>

                                                            <div class="errors">
                                                                <label for="place" class="alert alert-danger">Пусте поле
                                                                    введення номеру аудиторії</label>
                                                                <label for="note" class="alert alert-danger">Пусте поле
                                                                    замітки</label>
                                                                <label for="start" class="alert alert-danger">Пусте поле
                                                                    введення початку консультації</label>
                                                                <label for="end" class="alert alert-danger">Пусте поле
                                                                    введення закінчення консультації</label>
                                                                <label for="note" class="alert alert-danger">Закінчення
                                                                    консультації не може бути раніше початку
                                                                    консультації</label>
                                                            </div>
                                                            <div class="btn-container">
                                                                <input type="button" class="btn admin-btn"
                                                                       value="Сохранити дані">
                                                                <input type="button" class="btn btn-danger"
                                                                       value="Видалити дані">

                                                                <!-- Когда формируешь модалку заполнения консультации используй class = hidden когда при
                                                                 редактировании консультации убирай class = hidden
                                                                <input type="button" class="btn btn-danger hidden" value="Видалити дані">
                                                                !-->
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer text-center">
                                                        <div class="btn-container">

                                                            <button type="button"
                                                                    class="btn news-btn pull-right"
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

                                        <!-- Розклад консультацій кафедри !-->

                                        <h3 class="text-center">Заповнення розкладу консультацій кафедри</h3>

                                        <div class="table-block ">

                                            <table class="table-responsive table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>Понеділок</th>
                                                    <th>Вівторок</th>
                                                    <th>Середа</th>
                                                    <th>Четвер</th>
                                                    <th>П'ятниця</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="#" data-toggle="modal" data-target="#schedule2">
                                                            <div class="data-table">
                                    <span class="room">
                                   ауд. 5404
                                    </span>
                                    <span class="date ">
                                        8.00 - 9.30
                                    </span>
                                                            </div>
                                                        </a>

                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <a href="#" data-toggle="modal" data-target="#schedule2">
                                                            <div class="data-table">
                                    <span class="room">
                                   ауд. 5404
                                    </span>
                                    <span class="date ">
                                        8.00 - 9.30
                                    </span>
                                                            </div>
                                                        </a>

                                                    </td>
                                                    <td></td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <a href="#" data-toggle="modal" data-target="#schedule2">
                                                            <div class="data-table">
                                    <span class="room">
                                   ауд. 5404
                                    </span>
                                    <span class="date ">
                                        8.00 - 9.30
                                    </span>
                                                            </div>
                                                        </a>

                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <a href="#" data-toggle="modal" data-target="#schedule2">
                                                            <div class="data-table">
                                    <span class="room">
                                   ауд. 5404
                                    </span>
                                    <span class="date ">
                                        8.00 - 9.30
                                    </span>
                                                            </div>
                                                        </a>

                                                    </td>
                                                    <td></td>
                                                </tr>

                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <a href="#" data-toggle="modal" data-target="#schedule2">
                                                            <div class="data-table">
                                    <span class="room">
                                   ауд. 5404
                                    </span>
                                    <span class="date ">
                                        8.00 - 9.30
                                    </span>
                                                            </div>
                                                        </a>

                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <a href="#" data-toggle="modal" data-target="#schedule2">
                                                            <div class="data-table">
                                    <span class="room">
                                   ауд. 5404
                                    </span>
                                    <span class="date ">
                                        8.00 - 9.30
                                    </span>
                                                            </div>
                                                        </a>

                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <a href="#" data-toggle="modal" data-target="#schedule2">
                                                            <div class="data-table">
                                    <span class="room">
                                   ауд. 5404
                                    </span>
                                    <span class="date ">
                                        8.00 - 9.30
                                    </span>
                                                            </div>
                                                        </a>

                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <a href="#" data-toggle="modal" data-target="#schedule2">
                                                            <div class="data-table">
                                    <span class="room">
                                   ауд. 5404
                                    </span>
                                    <span class="date ">
                                        8.00 - 9.30
                                    </span>
                                                            </div>
                                                        </a>

                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <a href="#" data-toggle="modal" data-target="#schedule2">
                                                            <div class="data-table">
                                    <span class="room">
                                   ауд. 5404
                                    </span>
                                    <span class="date ">
                                        8.00 - 9.30
                                    </span>
                                                            </div>
                                                        </a>

                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <a href="#" data-toggle="modal" data-target="#schedule2">
                                                            <div class="data-table">
                                    <span class="room">
                                   ауд. 5404
                                    </span>
                                    <span class="date ">
                                        8.00 - 9.30
                                    </span>
                                                            </div>
                                                        </a>

                                                    </td>
                                                    <td></td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>


                                        <!-- Розклад консультацій кафедри !-->


                                    </div>


                                </div>


                            </div>


                        </div>


                    </div>


                </section>
            </div>
        </div>

    </section>


    <footer class="cathedra-block footer-nav-block black box-size">
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
</div>
<script src="/template/js/jquery.min.js"></script>
<script src="/template/js/bootstrap.min.js"></script>
<script src="/template/js/bootstrap-timepicker.js"></script>

<script src="/template/js/waypoints.min.js"></script>
<script src="/template/js/wow.min.js"></script>
<script src="/template/js/salvattore.min.js"></script>
<script src="/template/js/jquery.magnific-popup.min.js"></script>
<script src="/template/js/jasny-bootstrap.min.js"></script>
<script src="/template/js/jquery.mCustomScrollbar.min.js"></script>
<script src="/template/js/admin-js.js"></script>
<script type="text/javascript">
    $('#start').timepicker({
        minuteStep: 15,
        showSeconds: false,
        showMeridian: false
    });
    $('#end').timepicker({
        minuteStep: 15,
        showSeconds: false,
        showMeridian: false
    });
</script>

</body>
</html>
