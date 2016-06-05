<?php include ROOT . '/views/header.php'; ?>

<section class="top-block schedule-top-block tests-top-block">
    <div class="title-block wow animated fadeIn">
        <h1 class="text-center"><?php echo $infoFolder['title']; ?></h1>
        <div class="col-md-8 col-md-offset-2">
            <div class="description">
                <h4>
                    <?php echo $infoFolder['description']; ?>
                </h4>
            </div>

        </div>
    </div>

</section>


<section class="exercise-grid box-size transition3s">
    <div class="container-fluid">


        <div class="task-area">
            <div class="col-md-8 col-xs-12">
                <div class=" block transition3s radius5px">

                    <div class="gap-block">
                        <form action="#" method="post">

                            <?php $i = 1;
                            foreach($arrStr as $item): ?>
                            <div class="task transition3s">
                                <span class="count"><?php echo $i.'. '; ?></span>
                                <?php foreach ($item['words'] as $word): ?>
                                    <?php if($word == $item['skipWord']): ?>
                                        <input type="text" size="<?php echo strlen($word); ?>" class="gap-input userAnswer" data-id="<?php echo $item['id']; ?>" data-right="<?php echo $word; ?>">
                                    <?php else:?>
                                        <label><?php echo $word; ?></label>
                                    <?php endif;?>
                                <?php endforeach; ?>
                            </div>
                            <?php $i++;
                            endforeach;?>

                            <div class="btn-container col-md-6 col-md-offset-3 text-center">
                                <input type="button" class="btn news-btn" data-idFolder="<?php echo $idFolder; ?>" data-idUser="<?php echo $idUser; ?>" onclick="pushCheckButton(<?php echo $idFolder; ?>);" value="Перевірити" id="check">
                            </div>
                        </form>
                    </div>

                </div>


                <!--Модальные окна форматировать тут!!-->
                <div class="modal fade " id="check-modal" tabindex="-1"
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
<!--
                                <h4 class="modal-title">Название задания</h4>
                                -->

                            </div>

                            <div class="modal-body">

                                <div class="result-modal">
                                    <h5>Ваш результат (%)</h5>
                                    <h5 id="markRes"></h5>
                                    <p>Всьoго завдань: <span id="allRes"></span></p>
                                    <p>Правильних завдань: <span id="rightRes"></span></p>
                                </div>

                                <div class="result-table">
                                    <table class="table-responsive table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Результат</th>
                                            <th>Ім'я</th>
                                            <th>%</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <th>Поточний</th>
                                            <td class="userNameTable">зачекайте...</td>
                                            <td id="tempResTable">зачекайте...</td>
                                        </tr>
                                        <tr>
                                            <th>Найкращий</th>
                                            <td class="userNameTable">зачекайте...</td>
                                            <td id="bestResTable">зачекайте...</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="modal-footer text-center">
                                <div class="btn-container">
                                    <button id="result-btn" type="button" class="btn news-btn" onclick="showInfo();">
                                        Подивитися результати
                                    </button>
                                    <button type="button"
                                            class="btn news-btn"
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


            </div>

            <div class="col-md-4 col-xs-12">
                <div class="important-block result-block radius5px">
                    <h2>Останні пройдені завдання</h2>

                    <div class="result-grid ">

                        <?php foreach($lastExer as $item): ?>

                            <div class="task">
                                <h3 class="title"><?php echo $item['title']; ?></h3>
                                <span class="count ok"><?php echo $item['mark'].'%'; ?></span>
                            </div>

                        <?php endforeach; ?>

                    </div>

                </div>
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
<script src="/template/js/inscribeJS.js"></script>
</body>
</html>


