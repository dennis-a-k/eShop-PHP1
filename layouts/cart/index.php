<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/controllers/good.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/controllers/cart.php';

$title = 'Корзина';

$content = $_SERVER['DOCUMENT_ROOT'] . '/views/cart.php';

include_once $_SERVER['DOCUMENT_ROOT'] . '/template/main.php';
