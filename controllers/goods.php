<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/models/goods.php';

//заполняем массив товаров при помощи вызова ф-ии getGoods
$goods = getGoods($connect);
