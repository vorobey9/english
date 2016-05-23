<?php include ROOT . '/views/header.php'; ?>

<!--
 Страница библиотеки (сетка книг)
 !-->

<section class="top-block library-block">
    <div class="title-block wow animated fadeIn">
        <h1 class=" text-center">Бібліотека</h1>
        <div class="col-md-8 col-md-offset-2">
            <div class="description">
                <h4>
                    <?php echo $descOfSection['description']; ?>
                </h4>
            </div>
            <div class="controls">
                <!--
                <form action="#" method="post" class="search">
                -->
                    <input type="search" id="searchText" name="" placeholder="поиск" class="input" />
                    <button type="submit" onclick="pushSearch();" name="submit" class="btn">  <i class="fa fa-search" aria-hidden="true"></i></button>
                    <select name="category" id="category">
                        <option value="title">за назвою</option>
                        <option value="author">за автором</option>
                        <option value="year">за роком видання</option>
                        <option value="description">за описом</option>
                    </select>
                <!--
                </form>
                -->
            </div>
        </div>
    </div>
</section>

<section class="library-grid">

    <div class="container">
        <div class="row document" id="booksArea" data-columns>
            <?php foreach($books as $book): ?>
                <div class="item box-size">
                    <div class="pic">
                        <img src="/template/images/book2.svg" class="img-responsive" alt="">
                    </div>

                    <div class="info-block">
                        <span >Назва: </span>
                        <h2>
                            <?php echo $book['title']; ?>
                        </h2>
                        <div >
                            <span>Автор: </span>
                            <h4>
                                <?php echo $book['author']; ?>
                            </h4>
                        </div>
                        <div class="btn-container text-center">
                            <a href="#" class="btn btn-default news-btn" data-toggle="modal"  data-target="#book1" onclick="pushButton(<?php echo $book['id']; ?>);" >Детальніше</a><!-- data-target="#book1" -- id книги которая передается в модальное окно !-->
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

        <!--Модальные окна форматировать тут!!-->
        <div class="modal fade " id="book1" tabindex="-1"
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
                        <h4 class="modal-title" id="titleModalka">Зачекайте...</h4>
                    </div>

                    <div class="modal-body">
                        <div class="pic">
                            <img src="/template/images/book2.svg"
                                 class="img-responsive" alt=""/>
                        </div>


                        <div class="modalArticle">
                            <h3 id="authorModalka">Автор: Зачекайте...</h3>
                            <h3 id="yearBeginModalka">Рік видання: Зачекайте...</h3>
                            <div class="modalText">
                                <h3>Анотація:</h3>
                                <p id="descriptionModalka">
                                    Зачекайте...
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer text-center">
                        <div class="btn-container">
                            <a href="#" type="button" id="urlBookModalka" class="btn news-btn">
                                Скачати
                            </a>
                            <button type="button"
                                    class="btn news-btn"
                                    data-dismiss="modal"><i
                                    class="fa fa-times">
                                </i>Закрити
                            </button>
                        </div>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
        </div>

        <!--Модальные окна форматировать тут!!-->

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
<script src="/template/js/library.js"></script>
</body>
</html>