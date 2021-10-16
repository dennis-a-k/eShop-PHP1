<?php
if (!isset($_SESSION)) {
    session_start();
}

include_once $_SERVER['DOCUMENT_ROOT'] . '/models/auth.php';

if (isset($_POST['registration'])) {
    $name = (!empty($_POST['name'])) ? trim(strip_tags($_POST['name'])) : '';
    $email = (!empty($_POST['email'])) ? trim(strip_tags($_POST['email'])) : '';
    $password = (!empty($_POST['password'])) ? trim(strip_tags($_POST['password'])) : '';
    $message = registration($name, $email, $password, $connect, SALT);
}

if (isset($_POST['login'])) {
    $email = (!empty($_POST['email'])) ? trim(strip_tags($_POST['email'])) : '';
    $password = (!empty($_POST['password'])) ? trim(strip_tags($_POST['password'])) : '';
    $remember = (!empty($_POST['remember'])) ? trim(strip_tags($_POST['remember'])) : '';
    $error = login($email, $password, $remember, $connect, SALT);
}

if (isset($_GET['logout'])){
    unset($_SESSION['user']);
    session_destroy();
    header('Location: /');
    exit;
  }
