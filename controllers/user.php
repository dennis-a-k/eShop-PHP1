<?php
if (!isset($_SESSION)) {
    session_start();
}

include_once $_SERVER['DOCUMENT_ROOT'] . '/models/user.php';

$id = (!empty($_GET['id'])) ? (int)$_GET['id'] : '';
$name = (!empty($_POST['name'])) ? trim(strip_tags($_POST['name'])) : '';
$email = (!empty($_POST['email'])) ? trim(strip_tags($_POST['email'])) : '';
$password = (!empty($_POST['password'])) ? trim(strip_tags($_POST['password'])) : '';

//заполняем данные пользователя при помощи вызова ф-ии getUser
$user = getUser($_SESSION['user']['id'], $connect);

//заполняем массив заказов при помощи вызова ф-ии getOrders
$orders = getOrders($connect, $user['email']);

//меняем данные пользователя
if (isset($_POST['edit'])) {
    editUser($connect, $id, $name, $email, $password, SALT);
    header('Location: /admin/user/');
}
