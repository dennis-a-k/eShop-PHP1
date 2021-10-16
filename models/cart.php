<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/index.php';

/**
 * Функция заполняет массив корзины для вывода на экран
 * @return - возвращает массив корзины
*/
function getCart($cart)
{
    if (!empty($_COOKIE['cart'])) {
        foreach ($_COOKIE['cart'] as $value) {
            $cart[] = $value;
        }
        return $cart;
    }
}

/**
 * Функция записывает Куки корзины
*/
function addCart($id)
{
    if (!$_COOKIE['cart']) {
        setcookie("cart[$id][id]", $id, time() + 3600, '/');
        setcookie("cart[$id][count]", 1, time() + 3600, '/');
    } else {
        setcookie("cart[$id][id]", $id, time() + 3600, '/');
        setcookie("cart[$id][count]", ++$_COOKIE['cart'][$id]['count'], time() + 3600, '/');
    }
}

/**
 * Функция меняет количество товара в корзине
*/
function changeCountGoodCart($sign, $idCart)
{
    if ($sign == 'plus') {
        setcookie("cart[$idCart][id]", $idCart, time() + 3600, '/');
        setcookie("cart[$idCart][count]", ++$_COOKIE['cart'][$idCart]['count'], time() + 3600, '/');
    } elseif ($sign == 'minus') {
        if (isset($_COOKIE['cart'][$idCart]) && $_COOKIE['cart'][$idCart]['count'] == 1) {
            setcookie("cart[$idCart][id]", '', time() - 1, '/');
            setcookie("cart[$idCart][count]", '', time() - 1, '/');
        } else {
            setcookie("cart[$idCart][id]", $idCart, time() + 3600, '/');
            setcookie("cart[$idCart][count]", --$_COOKIE['cart'][$idCart]['count'], time() + 3600, '/');
        }
    } else {
        die ('Ошибка!');
    }
}
