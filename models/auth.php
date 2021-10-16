<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/index.php';

/**
 * Функция регистрирует пользователя
 * @return - возвращает сообщение
*/
function registration($name, $email, $password, $connect, $salt)
{
    //подключаемся к базе с пользователями и проверяем есть ли пользователь с такой почтой
    $sql = "SELECT * FROM users WHERE `email`='$email'";
    $result = mysqli_query($connect, $sql);
    
    if (!$result)
        die(mysqli_error($connect));

    if (!mysqli_num_rows($result) > 0) {
        //шифруем пароль
        $pass = $salt . md5($password) . $salt;
        //заносим данные в таблицу пользователей
        $sql = "INSERT INTO users(`name`, `email`, `password`) VALUES ('$name','$email','$pass')";
        $result = mysqli_query($connect, $sql);
        setcookie('user[name]', $name, time() + 3600, '/layouts/auth/registration/');
        setcookie('user[email]', $email, time() + 3600, '/layouts/auth/');
        setcookie('user[password]', $password, time() + 3600, '/layouts/auth/');
        $message = 'success';
        return $message;
    }
    $message = 'error';
    return $message;
}

/**
 * Функция входа на сайт
 * @return - возвращает сообщение
*/
function login($email, $password, $remember, $connect, $salt)
{
    //подключаемся к базе с пользователями и проверяем есть ли пользователь с такой почтой и паролем
    $pass = $salt . md5($password) . $salt;
    $sql = "SELECT * FROM users WHERE `email`='$email' AND `password`='$pass'";
    $result = mysqli_query($connect, $sql);
    
    if (!$result)
        die(mysqli_error($connect));

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION['user']['role'] = $user['role'];
        $_SESSION['user']['id'] = $user['id'];
        setcookie('user[email]', $email, time() + 3600, '/layouts/auth/');
        setcookie('user[password]', $password, time() + 3600, '/layouts/auth/');
        header('Location: /layouts/auth/login/');
    }
    $error = true;
    return $error;
}
