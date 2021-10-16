<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/models/cart.php';

$cart = [];
$cost = 0;

//заполняем массив корзины при помощи вызова ф-ии getCart
$cart = getCart($cart); 

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    addCart($id);
    header("Location: /");
}

if (isset($_GET['sign'])) {
    $sign = trim(strip_tags($_GET['sign']));
    $idCart = (int)$_GET['id_cart'];
    changeCountGoodCart($sign, $idCart);
    header("Location: /layouts/cart/");
}
