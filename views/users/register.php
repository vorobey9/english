<?php include ROOT . '/views/header.php'; ?>

<section class="auth-block box-size">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 auth">
                <h1>Регистрация пользователя</h1>
                <h4>Дніпропетровський Національний Університет імені академіка В.А.Лазаряна</h4>
            </div>

            <div class="col-md-10 col-md-offset-1 register transition3s">
                <form action="#" method="post">
                    <div class="col-md-6 col-xs-12  pull-left">
                        <input type="text" id="lastName" name="lastName" class="<?php if($errors['lastName']) echo 'failed'; ?>" placeholder="Призвище:" value="<?php echo $lastName; ?>">
                        <input type="text" id="firstName" name="firstName" class="<?php if($errors['firstName']) echo 'failed'; ?>" placeholder="Им'я:" value="<?php echo $firstName; ?>">
                        <input type="text" id="middleName" name="middleName" class="<?php if($errors['middleName']) echo 'failed'; ?>" placeholder="По-батькові:" value="<?php echo $middleName; ?>">
                        <input type="email" id="email" name="email" class="<?php if($errors['email']) echo 'failed'; ?>" placeholder="Email:" value="<?php echo $email; ?>">
                        <input type="password" id="password" name="password" class="<?php if($errors['password']) echo 'failed'; ?>" placeholder="Пароль:" value="<?php echo $password; ?>">
                        <input type="password" id="passwordR" name="passwordR" class="<?php if($errors['passwordR']) echo 'failed'; ?>" placeholder="Повторіть пароль:" value="<?php echo $passwordR; ?>">
                    </div>
                    <div class="pull-right col-md-6 col-xs-12 ">
                        <label for="lastName"><?php echo $errors['lastName']; ?></label>
                        <label for="firstName"><?php echo $errors['firstName']; ?></label>
                        <label for="middleName"><?php echo $errors['middleName']; ?></label>
                        <label for="email"><?php echo $errors['email']; ?></label>
                        <label for="password"><?php echo $errors['password']; ?></label>
                        <label for="passwordR"><?php echo $errors['passwordR']; ?></label>

                    </div>
                    <input class="btn btn-default login-btn" type="submit" name="submit" id="sendLog" value="Зареєструватися">
                </form>
            </div>
        </div>
    </div>
</section>
<?php include ROOT . '/views/footer.php'; ?>