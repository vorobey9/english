<?php include ROOT . '/views/header1.php'; ?>

<div>
    <form action="#" method="post">
        <h2><?php echo $errors['all']; ?></h2>
        <label for="email">mail</label>
        <input id="email" name="email" type="email" value="<?php echo $email; ?>">
        <label><?php echo $errors['email']; ?></label>

        <br>

        <label for="password">password</label>
        <input id="password" name="password" type="password" value="<?php echo $password; ?>">
        <label><?php echo $errors['password']; ?></label>

        <br>

        <input type="submit" name="submit" id="sendLog" value="Регистрация">
    </form>
</div>

<?php include ROOT . '/views/footer1.php'; ?>
