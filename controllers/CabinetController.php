<?php

class CabinetController
{
    public function actionView() {
        $User = new Users();
        $StatEx = new StatisticsExercise();
        $News = new News();
        $Elective = new Elective();
        $teachers = $User->getAllTeachers();
        $dataElective = $Elective->getByTitle('departmen');
        $idElective = $dataElective['id'];
        $importanceNews = $News->getAll($idElective, 1, 4, false);

        $idUser = $User->checkLogged();
        if(!$idUser) {
            header("Location: http://www.englishtest.ua/login");
        }
        $user = $User->getById($idUser);

        $tests = $StatEx->getByType('test', $idUser);
        $puzzles = $StatEx->getByType('puzzle', $idUser);
        $inscribes = $StatEx->getByType('inscribe', $idUser);

        require_once(ROOT. '/views/cabinet/index.php');
        return true;
    }

    public function actionAjaxChangeInfo() {
        $User = new Users();

        $idUser = $_POST['idUser'];
        $firstName = $_POST['firstName'];
        $middleName = $_POST['middleName'];
        $lastName = $_POST['lastName'];
        $oldPassword = $_POST['oldPassword'];
        $newPassword = $_POST['newPassword'];

        $arrEr = array();
        $check = true;

        if($User->checkName($firstName) && $User->checkName($middleName) && $User->checkName($lastName)) {
            if($User->checkPassword($oldPassword) && $User->checkPassword($newPassword)){
                $flag = $User->updateParameter('firstName', $firstName, $idUser);
                if(!$flag) {
                    $arrEr['firstName'] = "Помилка (Ім'я)";
                    $check = false;
                }
                $flag = $User->updateParameter('middleName', $middleName, $idUser);
                if(!$flag) {
                    $arrEr['middleName'] = "Помилка (По-батькові)";
                    $check = false;
                }
                $flag = $User->updateParameter('lastName', $lastName, $idUser);
                if(!$flag) {
                    $arrEr['lastName'] = "Помилка (Призвище)";
                    $check = false;
                }
                $flag = $User->changePassword($idUser, $oldPassword, $newPassword);
                if(!$flag) {
                    $arrEr['password'] = "Помилка (Пароль)";
                    $check = false;
                }
                echo json_encode(array(
                   'check' => $check,
                   'arrEr' => $arrEr,
                ));
            }
            else {
                $arrEr['password'] = "Занадно короткий пароль";
            }
        }
        else {
            $arrEr['firstName'] = "Занадно короткі дані П.І.Б";
        }
        echo json_encode(array(
            'check' => false,
            'arrEr' => $arrEr,
        ));
    }
}