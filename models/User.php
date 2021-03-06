<?php


class User
{

    public static function register($name, $email, $mobile, $password)
    {
       $db = Db::getConnection();

        $sql = 'INSERT INTO user (name, email, mobile, password) VALUE (:name, :email, :mobile, :password)';

        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':mobile', $mobile, PDO::PARAM_INT);
        $result->bindParam(':password', $password, PDO::PARAM_STR);

        return $result->execute();
    }

    public static function checkName($name)
    {
        if (strlen($name) >= 3) {
            return true;
        }
        return false;
    }

    public static function checkEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    public static function checkPassword($password)
    {
        if (strlen($password) >= 6) {
            return true;
        }
        return false;
    }

    public static function checkMobile($mobile)
    {
        $phonenumber = preg_replace('/(\-|\s|\+)/i', '', trim($mobile));
        if (strlen($phonenumber) == 10 && preg_match('/^\d+$/i', $mobile)) {
            return true;
        }
        return false;
    }


    public static function checkEmailExists($email)
    {
        $db = Db::getConnection();

        $sql = 'SELECT COUNT(*) FROM user WHERE email = :email';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();

        if ($result->fetchColumn())
            return true;
        return false;
    }

    public static function checkUserData($email, $password)
    {
        $db = Db::getConnection();

        $sql = 'SELECT * FROM user WHERE email = :email AND password = :password';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);

        $user = $result->fetch();
        if ($user) {
            return $user['id'];
        }
        return false;
    }


    public static function auth($userId)
    {
        session_start();
        // Записываем идентификатор пользователя в сессию
        $_SESSION['user'] = $userId;
    }

    
    public static function isGuest()
    {
        if (isset($_SESSION['user'])) {
            return false;
        }
        return true;
    }

    public static function checkLogged()
    {
        session_start();
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }

        header("Location: /user/login");
    }

}