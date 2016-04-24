<?php include ROOT . '/views/header1.php'; ?>

<div>
    <form action="#" method="post">
        <label for="firstName">firstName</label>
        <input id="firstName" name="firstName" type="text" value="<?php echo $firstName; ?>">
        <label><?php echo $errors['firstName']; ?></label>

        <br>

        <label for="middleName">middleName</label>
        <input id="middleName" name="middleName" type="text" value="<?php echo $middleName; ?>">
        <label><?php echo $errors['middleName']; ?></label>

        <br>

        <label for="lastName">lastName</label>
        <input id="lastName" name="lastName" type="text" value="<?php echo $lastName; ?>">
        <label><?php echo $errors['lastName']; ?></label>

        <br>

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