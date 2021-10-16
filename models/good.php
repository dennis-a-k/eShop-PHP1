<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/index.php';

/**
 * Функция заполняет массив с выбраным товаром по id
 * @return - возвращает массив с товаром
*/
function getGood($id, $connect)
{
    //подключаемся к БД к таблице с товарами и выбираем нужный по id
    $sql = "SELECT * FROM goods WHERE id='$id'";
    $result = mysqli_query($connect, $sql);

    if (!$result)
        die(mysqli_error($connect));

    $good = mysqli_fetch_assoc($result);
    return $good;
}
