<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/index.php';

/**
 * Функция заполняет данные о пользователе
 * @return - возвращает данные пользователя
*/
function getUser($id, $connect)
{
    $sql = "SELECT * FROM users WHERE `id`='$id'";
    $result = mysqli_query($connect, $sql);

    if (!$result)
        die(mysqli_error($connect));

    $user = mysqli_fetch_assoc($result);

    return $user;
}

/**
 * Функция меняет данные пользователя
*/
function editUser($connect, $id, $name, $email, $password, $salt)
{
    $pass = $salt . md5($password) . $salt;
    //обновляем данные в таблице
    $sql = "UPDATE users SET `name`='$name', `email`='$email', `password`='$pass' WHERE `id`=$id";
    mysqli_query($connect, $sql);
}

/**
 * Функция заполняет массив заказами
 * @return - возвращает массив заказов
*/
function getOrders($connect, $email)
{
    $orders = [];
    //подключаемся к БД к таблице с заказами
    $sql = "SELECT * FROM orders WHERE `email`='$email' ORDER BY `date` DESC";
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
