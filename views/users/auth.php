<?php include ROOT . '/views/header.php'; ?>
<section class="login-block box-size">
    <div class="container">
        <div class="row">
            <div class="col-md-6 auth">
                <h1>Вход в систему</h1>
                <h4>Дніпропетровський Національний Університет імені академіка В.А.Лазаряна</h4>
            </div>

            <div class="col-md-6 auth-form transition3s">
                <form action="#" method="post">

                    <div class="<?php if($errors['email']) echo 'failed'; ?>">
                        <input type="email"  id="email" name="email" placeholder="Email:" value="<?php echo $email; ?>">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <label for="email"><?php echo $errors['email']; ?></label>

                    </div>

                    <div class="<?php if($errors['password']) echo 'failed'; ?>">
                        <input type="password" id="password" name="password" placeholder="Пароль:" value="<?php echo $password; ?>">
                        <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                        <label for="password"><?php echo $errors['password']; ?></label>
                    </div>
                    <label for="sendLog"><?php echo $errors['all']; ?></label>
                    <input type="submit" name="submit" id="sendLog" class="btn btn-default login-btn" value="Увійти">
                </form>
            </div>
        </div>
    </div>
</section>
<?php include ROOT . '/views/footer.php'; ?>