<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/models/orders.php';

//заполняем массив заказов при помощи вызова ф-ии getOrders
$orders = getOrders($connect);

//если передаётся в гет-параметре id_user, то вызываем ф-ю completed
if (isset($_GET['user'])) {
    $user = trim(strip_tags($_GET['user']));
    completed($user, $connect);
    header('Location: /admin/orders/');
}
