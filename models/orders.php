<?php
if (!isset($_SESSION)) {
    session_start();
}

include_once $_SERVER['DOCUMENT_ROOT'] . '/config/index.php';

/**
 * Функция заполняет массив заказами
 * @return - возвращает массив заказов
*/
function getOrders($connect)
{
    $orders = [];
    //подключаемся к БД к таблице с заказами
    $sql = "SELECT * FROM orders ORDER BY `date` DESC";
    $result = mysqli_query($connect, $sql);

    if (!$result)
        die(mysqli_error($connect));

    //перебираем таблицу заказов
    while ($row = mysqli_fetch_assoc($result)) {
        //создаём ключ по номеру id_use
        $key = $row['id_user'];
        //создаём массив с товарами и количеством, где ключ - это id товара, а значение - количество товара
        $orders[$key]['goods'][$row['id_good']] = $row['count'];
        //заполняем массив остальными данными по клиенту (адрес, телефон, почта итд)
        $orders[$key]['user'] = $row;
    }

    return $orders;
}

/**
 * Функция заменяет статус заказа
*/
function completed($idUser, $connect)
{
    $sql = "UPDATE orders SET completed='1' WHERE id_user='$idUser'";
    $result = mysqli_query($connect, $sql);

    if (!$result)
        die(mysqli_error($connect));
    
    return true;
}
