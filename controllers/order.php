<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/models/order.php';

//проверяем была ли нажата кнопка Заказать
if (isset($_POST['order'])) {
    //проверяем входные данные на тэги и удаляем их если есть при помощи ф-ии strip_tags() и пробелы при помощи trim()
    $idGood = $_POST['id_good'];
    $count = $_POST['count'];
    $name = (!empty($_POST['name'])) ? trim(strip_tags($_POST['name'])) : '';
    $address = (!empty($_POST['address'])) ? trim(strip_tags($_POST['address'])) : '';
    $phone = (!empty($_POST['phone'])) ? str_replace(' ', '', trim($_POST['phone'])) : '';
    $email = (!empty($_POST['email'])) ? trim(strip_tags($_POST['email'])) : '';
    addOrder($idGood, $count, $name, $address, $phone, $email, $connect);
    header('Location: /layouts/cart/');
}
