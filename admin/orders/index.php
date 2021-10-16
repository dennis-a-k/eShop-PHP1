<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/controllers/good.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/controllers/orders.php';

if ($_SESSION['user']['role'] != 1) {
    header('Location: /');
}

$title = 'Заказы';

$content = $_SERVER['DOCUMENT_ROOT'] . '/views/orders.php';

include_once $_SERVER['DOCUMENT_ROOT'] . '/template/main.php';
