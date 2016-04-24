<?php include ROOT . '/views/header.php'; ?>

<section class="auth-block box-size">
    <div class="container">
        <div class="row">
            <div class="col-md-6 auth">
                <h1>Вход в систему</h1>
                <h4>Дніпропетровський Національний Університет імені академіка В.А.Лазаряна</h4>
            </div>

            <div class="col-md-6 auth transition3s">
                <form action="#" method="post">
                    <div>
                        <input type="email"  id="email" name="email" placeholder="Email:" value="<?php echo $email; ?>">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <label for="email"><?php echo $errors['email']; ?></label>
                    </div>


                    <div>
                        <input type="password" id="password" name="password" placeholder="Пароль:" value="<?php echo $password; ?>">
                        <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                        <label for="password"><?php echo $errors['password']; ?></label>
                    </div>


                    <div class="btn-container pull-left">
                        <label><?php echo $errors['all']; ?></label>
                        <input type="submit" name="submit" id="sendLog" class="btn btn-default login-btn" value="Увійти">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<header class="cathedra-block hidden-xs hidden-sm black box-size fixed">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-12">
                <div class="ico">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                </div>
                <div class="title"><h1>Кафедра Іноземної Мови</h1> <span>Дніпропетровський Національний Університет імені академіка В.А.Лазаряна
                </span></div>
            </div>
            <div class="col-md-3 col-xs-12  pull-right">
                <div class="number">
                    <span>тел: +38092123456</span>
                </div>
            </div>

        </div>
    </div>

</header>

<script src="/template/js/jquery.min.js"></script>
<script src="/template/js/bootstrap.min.js"></script>
<script src="/template/js/wow.min.js"></script>
<script src="/template/js/script.js"></script>
</body>
</html>