<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 09.03.2016
 * Time: 20:52
 */
include_once ROOT . '/models/Users.php';

class UserController {

    public function actionAjaxGetById() {
        $idTeacher = $_POST['idTeacher'];
        $User = new Users();
        echo json_encode($User->getById($idTeacher));
    }

    public function actionRegister() {

        $User = new Users();

        $firstName = '';
        $middleName = '';
        $lastName = '';
        $email = '';
        $password = '';
        $passwordR = '';

        $errors = array();
        $errors['firstName'] = '';
        $errors['middleName'] = '';
        $errors['lastName'] = '';
        $errors['email'] = '';
        $errors['password'] = '';
        $errors['passwordR'] = '';
        $errors['all'] = '';

        if(isset($_POST['submit'])) {
            $firstName = $_POST['firstName'];
            $middleName = $_POST['middleName'];
            $lastName = $_POST['lastName'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $passwordR = $_POST['passwordR'];


            $ok = true;

            if(!$User->checkName($firstName)) {
                $errors['firstName'] = "Занадто коротке ім'я або присутні цифри";
            }
            if(!$User->checkName($middleName)) {
                $errors['middleName'] = "Занадто коротке призвище або присутні цифри";
            }
            if(!$User->checkName($lastName)) {
                $errors['lastName'] = "Занадто коротке по-батькові або присутні цифри";
            }
            if($User->checkMail($email)) {
                $errors['email'] = "Користувач із такою поштою вже існує";
            }
            if(!$User->checkPassword($password)) {
                $errors['password'] = "Занадто короткий пароль";
            }
            if($password != $passwordR) {
                $errors['passwordR'] = 'Різні паролі';
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
                    $errors['all'] = "Помилка під час відправки";
                }
            }
        }

        require_once(ROOT . '/views/users/register.php');
        return true;
    }

    public function actionLogin() {
        $urlReq = getenv("HTTP_REFERER");

        if($urlReq[7] == 'w') {
            /* обрезаем http://www.englishtest.ua */
            $urlReq = substr($urlReq, 25);
        }
        else {
            /* обрезаем http://englishtest.ua */
            $urlReq = substr($urlReq, 21);
        }

        if($urlReq != '/login' && $urlReq != '/login#') {
            $_SESSION['urlReq'] = $urlReq;
        }

        $User = new Users();
        $email = '';
        $password = '';

        $errors = array();
        $errors['email'] = '';
        $errors['password'] = '';
        $errors['all'] = '';

        $ok = true;

        if(isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            if(!$User->checkPassword($password)) {
                $errors['password'] = 'Слишком короткий пароль';
            }

            foreach ($errors as $error) {
                if($error != '') {
                    $ok = false;
                }
            }

            $userId = $User->checkLogin($email, $password);

            if($userId == false) {
                $errors['all'] = 'Неправильная почта или пароль';
            }
            else {
                //User - Auth
                $User->auth($userId);

                if(isset($_SESSION['urlReq'])) {
                    $goUrl = $_SESSION['urlReq'];
                    unset($_SESSION['urlReq']);
                    header("Location: ".$goUrl);
                }
                else {
                    header("Location: /cabinet");
                }
            }
        }

        require_once(ROOT . '/views/users/auth.php');
        return true;
    }

    public function actionLogout() {
        unset($_SESSION['user']);
        header("Location: /");
    }
}