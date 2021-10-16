<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/index.php';

function addOrder($idGood, $count, $name, $address, $phone, $email, $connect)
{
    $idUser = 'user' . time() . rand(0, 1000);
    //записываем данные в таблицу заказов
    for ($i=0; $i<count($idGood); $i++) {
        $sql = "INSERT INTO `orders`(`id_good`, `count`, `name`, `address`, `phone`, `email`, `id_user`) VALUES ('$idGood[$i]', '$count[$i]', '$name', '$address', '$phone', '$email', '$idUser')";
        $result = mysqli_query($connect, $sql);

        if (!$result)
            die(mysqli_error($connect));
    }
    //очищаем корзину после оформления заказа
    if (isset($_COOKIE['cart'])) {
        foreach ($_COOKIE['cart'] as $key => $value) {
            setcookie("cart[$key][id]", '', time() - 1, '/');
            setcookie("cart[$key][count]", '', time() - 1, '/');
        }
    }
}
