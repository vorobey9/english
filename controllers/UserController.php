<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 09.03.2016
 * Time: 20:52
 */
include_once ROOT . '/models/Users.php';

class UserController {
//    public function actionTest() {
//        $User = new Users();
//        $arr = array();
//        $arr['firstName'] = "Remy";
//        $arr['middleName'] = "Fuck";
//        $arr['lastName'] = "Lebo";
//        $arr['mail'] = "lebo111@gmail.com";
//        $arr['password'] = "jvu2brwz";
//        $arr['idPic'] = NULL;
//       // $res = $User->checkMailAndPassword("lebo111@gmail.com", "jvu2brwz");
//       // var_dump($res);
//       // return $res;
//    }

    public function actionRegister() {

        $User = new Users();

        $firstName = '';
        $middleName = '';
        $lastName = '';
        $email = '';
        $password = '';

        $errors = array();
        $errors['firstName'] = '';
        $errors['middleName'] = '';
        $errors['lastName'] = '';
        $errors['email'] = '';
        $errors['password'] = '';

        if(isset($_POST['submit'])) {
            $firstName = $_POST['firstName'];
            $middleName = $_POST['middleName'];
            $lastName = $_POST['lastName'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $ok = true;

            if(!$User->checkName($firstName)) {
                $errors['firstName'] = 'Слишком короткое имя';
            }
            if(!$User->checkName($middleName)) {
                $errors['middleName'] = 'Слишком короткое отчество';
            }
            if(!$User->checkName($lastName)) {
                $errors['lastName'] = 'Слишком короткая фамилия';
            }
            if($User->checkMail($email)) {
                $errors['email'] = 'Пользователь с такой почтой уже существует';;
            }
            if(!$User->checkPassword($password)) {
                $errors['password'] = 'Слишком короткий пароль';
            }

            foreach ($errors as $error) {
                if($error != '') {
                    $ok = false;
                }
            }

            if($ok) {
                $arr = array();
                $arr['firstName'] = $firstName;
                $arr['middleName'] = $middleName;
                $arr['lastName'] = $lastName;
                $arr['mail'] = $email;
                $arr['password'] = $password;
                $arr['idPic'] = NULL;

                $temp = $User->add($arr);
                if($temp) {
                    header("Location: /");
                }
                else {
                    echo '<br>NO<br>';
                }
            }
        }

        require_once(ROOT . '/views/users/registration.php');
        return true;
    }

    public function actionLogin() {

    }
}