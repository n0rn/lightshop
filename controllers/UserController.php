<?php


class UserController
{


    public function actionRegister()
    {
        $name = false;
        $email = false;
        $mobile = false;
        $password = false;
        $result = false;

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $password = $_POST['password'];

            $errors = false;

            if (!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2х символов';
            }

            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный  email';
            }

            if (!User::checkMobile($mobile)) {
                $errors[] = 'Неправильный  номер телефона';
            }

            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }

            if (User::checkEmailExists($email)) {
                $errors[] = 'Такой email уже используется';
            }

            if ($errors == false) {
                 $result = User::register($name, $email, $mobile, $password);
            }
            
        }

        require_once(ROOT . '/views/user/register.php');

        return true;
    }


    public function actionLogin()
    {
        $email = '';
        $password = '';

        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password  = $_POST['password'];

            $errors = false;

            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный  email';
            }

            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }

            $userId = User::checkUserData($email, $password);

            if ($userId == false) {

                $errors[] = 'Неправильные данные для входа на сайт';

            } else {

                User::auth($userId);

                header("Location: /cabinet/");
            }
        }


        require_once(ROOT . '/views/user/login.php');

        return true;
    }

}