<?php include ROOT . '/views/headerAdmin.php'; ?>

    <section class="admin-panel box-size">

        <div class="full-container">
            <div class="row">
                <section class="panel-info-block">


                    <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                        <div class="block box-size transition3s radius5px ">

                            <div class="col-md-4">
                                <div class="pic">
                                    <img src="<?php echo '/template/images'.$teacher['urlImage']; ?>" class="img-responsive radius5px " alt="">
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="student-data">
                                    <h2><?php echo $teacher['lastName'].' '.$teacher['firstName'].' '.$teacher['middleName']; ?></h2>
                                    <h4><?php echo $teacher['post'] ?></h4>
                                    <p>
                                        <?php echo $teacher['description']; ?>
                                    </p>
                                </div>
                            </div>


                        </div>

                        <div class="test-statistic box-size ">

                            <div class="block col-md-5  radius5px">


                                <div class="title-result">
                                    <h2>Статистика проходження завдань студентів :</h2>
                                    <h4 id="nameFolder1"></h4>
                                </div>
                                <div class="front-side">
                                    <form action="#">

                                        <div class="upper-text test-block">
                                            <label for="test-type">Виберіть тип завдання:</label>
                                            <select name="test-type" id="test-type">
                                                <option value="test" >Тести</option>
                                                <option value="inscribe" >Пропущене слово</option>
                                                <option value="puzzle" >Пазли</option>
                                            </select>

                                            <input type="button" class="news-btn btn text-center" onclick="step1();" value="Далі">

                                            <div id="selectFolder" style="display: none;">
                                                <label for="folder-type">Виберіть папку з завданням:</label>
                                                <select name="folder-type" id="folder-type">
                                                    <?php foreach($folders as $item):?>
                                                        <option value="<?php echo $item['id']; ?>"><?php echo $item['title'];?></option>
                                                    <?php endforeach; ?>
                                                </select>

                                                <div class="radio-block" id="radioArea1">

                                                    <select name="radio-type" id="radio-type">
                                                            <option value="best">Кращі</option>
                                                            <option value="loser">Гірші</option>
                                                            <option value="last">Останні</option>
                                                    </select>
                                                    <!--
                                                    <input id='best' type="radio" name='variant1' checked='checked' />
                                                    <label for="best">Кращі</label>

                                                    <input id='worse' type="radio" name='variant1'  />
                                                    <label for="worse">Гірщі</label>

                                                    <input id='last' type="radio" name='variant1'  />
                                                    <label for="last">Останні</label>
                                                    -->
                                                </div>


                                                <input type="button" class="news-btn btn text-center" id="test-btn" onclick="show1();" value="Вибрати">
                                            </div>

                                        </div>
                                    </form>
                                </div>

                                <div class="back-side result-block">

                                    <div class="result-grid " id="showRes1">

                                        <!--
                                        <div class="task">
                                            <h3 class="title">Валентин Вялых</h3>
                                            <span class="count ok">100%</span>
                                        </div>
                                        <div class="btn-container">
                                            <div class="btn news-btn" id="back">Назад до списку</div>
                                        </div>
                                        -->

                                    </div>


                                </div>

                            </div>

                            <div class="block col-md-5  radius5px ">
                                <div class="title-result">
                                    <h2>Статистика проходження завдань :</h2>
                                    <h5>Сапожников Андрей Олександрович</h5>
                                </div>

                                <div class="front-side">
                                    <form action="#">

                                        <div class="upper-text test-block">
                                            <label for="test-type">Виберіть тип завдання:</label>
                                            <select name="test-type" id="test-type2">
                                                <option value="test">Тести</option>
                                                <option value="inscribe">Пропущене слово</option>
                                                <option value="puzzle">Пазли</option>
                                            </select>

                                            <input type="text" id="name-student"  class="form-control" placeholder="Ім'я">
                                            <input type="text" id="surname-student"  class="form-control" placeholder="Призвіще">
                                            <input type="text" id="fullname-student"  class="form-control" placeholder="По-батькові">
                                            <div class="errors-block">
                                                <!-- ПОТОМ РАСКОММЕНТИРУЙ
                                                <label for="name-student">Неверно введено имя </label>
                                                <label for="surname-student">Неверно введена фамилия </label>
                                                <label for="fullname-student">Неверно введено отчество </label>
                                                -->
                                            </div>
                                            <!--
                                            <input type="button" class="news-btn btn text-center" id="test-btn" value="Вибрати">
                                            -->
                                            <input type="button" class="news-btn btn text-center" id="test-btn" onclick="show2();" value="Вибрати">

                                        </div>
                                    </form>
                                </div>

                                <div class="back-side result-block">

                                    <div class="result-grid ">


                                        <div class="task">

                                            <div class="left pull-left">
                                                <h3 class="title">Present Perfect Continious</h3>
                                                <span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i>28.02.16</span>
                                            </div>
                                            <div class="right pull-right">
                                                <span class="count ok">100%</span>
                                            </div>
                                        </div>

                                        <div class="task">

                                            <div class="left pull-left">
                                                <h3 class="title">Present Perfect Continious</h3>
                                                <span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i>28.02.16</span>
                                            </div>
                                            <div class="right pull-right">
                                                <span class="count ok">100%</span>
                                            </div>
                                        </div>
                                        <div class="task">

                                            <div class="left pull-left">
                                                <h3 class="title">Present Perfect Continious</h3>
                                                <span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i>28.02.16</span>
                                            </div>
                                            <div class="right pull-right">
                                                <span class="count ok">100%</span>
                                            </div>
                                        </div>
                                        <div class="task">

                                            <div class="left pull-left">
                                                <h3 class="title">Present Perfect Continious</h3>
                                                <span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i>28.02.16</span>
                                            </div>
                                            <div class="right pull-right">
                                                <span class="count ok">100%</span>
                                            </div>
                                        </div><div class="task">

                                            <div class="left pull-left">
                                                <h3 class="title">Present Perfect Continious</h3>
                                                <span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i>28.02.16</span>
                                            </div>
                                            <div class="right pull-right">
                                                <span class="count ok">100%</span>
                                            </div>
                                        </div>
                                        <div class="task">

                                            <div class="left pull-left">
                                                <h3 class="title">Present Perfect Continious</h3>
                                                <span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i>28.02.16</span>
                                            </div>
                                            <div class="right pull-right">
                                                <span class="count ok">100%</span>
                                            </div>
                                        </div>
                                        <div class="task">

                                            <div class="left pull-left">
                                                <h3 class="title">Present Perfect Continious</h3>
                                                <span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i>28.02.16</span>
                                            </div>
                                            <div class="right pull-right">
                                                <span class="count bad">10%</span>
                                            </div>
                                        </div>
                                        <div class="task">

                                            <div class="left pull-left">
                                                <h3 class="title">Present Perfect Continious</h3>
                                                <span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i>28.02.16</span>
                                            </div>
                                            <div class="right pull-right">
                                                <span class="count middle">60%</span>
                                            </div>
                                        </div>


                                        <div class="btn-container">
                                            <div class="btn news-btn" id="back">Назад до списку</div>
                                        </div>
                                    </div>


                                </div>
                            </div>



                            <div class="block col-md-12  radius5px teacher">
                                <h2>Редагування даних викладача</h2>
                                <div class="change-form col-md-6">
                                    <form action="#">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-filename fileinput-exists " ></div>
                                            <div>
                                                <span class="btn btn-default btn-file"><span class="fileinput-new">Змінити фотографію</span><span class="fileinput-exists">Вибрати іншу</span><input type="file" name="..."></span>
                                                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Очистити</a>
                                            </div>
                                        </div>
                                        <input type="text" id="name"  class="form-control" placeholder="Ім'я">
                                        <input type="text" id="surname"  class="form-control" placeholder="Призвіще">
                                        <input type="text" id="fullname"  class="form-control" placeholder="По-батькові">
                                        <input type="text" id="post"  class="form-control" placeholder="Посада">
                                        <input type="text" id="old-pass"  class="form-control" placeholder="Старий пароль">
                                        <input type="text"id="new-pass"   class="form-control" placeholder="Новий пароль">
                                        <input type="text"id="repeat-pass"   class="form-control" placeholder="Повторити пароль">
                                        <textarea name="info" id="teacher-info" cols="30" rows="6" placeholder="Введіть інформацію про викладача"></textarea>
                                        <input type="submit" class="news-btn btn text-center" value="Змінити дані">
                                    </form>
                                </div>

                                <div class="errors-block col-md-6">
                                    <!-- ПОТОМ РАСКОММЕНТИРУЙ
                                    <label for="name">Неверно введен email </label>
                                    <label for="surname">Неверно введен пароль </label>
                                    <label for="fullname">Неверно введено отчество </label>
                                    <label for="old-pass">Неверно введено имя </label>
                                    <label for="new-pass">Неверно введена фамилия </label>
                                    <label for="new-pass">Неверно введена должность преподователя </label>
                                    <label for="new-pass">Пустое поле информации про учителя</label>
                                    <label for="repeat-pass">Пароли не совпадают </label>
                                    -->
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
<script src="/template/js/waypoints.min.js"></script>
<script src="/template/js/wow.min.js"></script>
<script src="/template/js/salvattore.min.js"></script>
<script src="/template/js/jquery.magnific-popup.min.js"></script>
<script src="/template/js/jasny-bootstrap.min.js"></script>
<script src="/template/js/jquery.mCustomScrollbar.min.js"></script>
<script src="/template/js/admin-js.js"></script>
<script src="/template/js/adminCabinetJS.js"></script>
</body>
</html>
