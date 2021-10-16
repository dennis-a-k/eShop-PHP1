<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/index.php';

/**
 * Функция заполняет массив товарами
 * @return - возвращает массив товаров
*/
function getGoods($connect)
{
    //создаём пустой массив товаров и подключаемся к БД к таблице с товарами
    $goods = [];
    $sql = "SELECT * FROM goods ORDER BY `id` DESC";
    $result = mysqli_query($connect, $sql);

    if (!$result)
        die(mysqli_error($connect));

    //перебираем таблицу товаров и заполняем массив
    while ($row = mysqli_fetch_assoc($result)) {
        $goods[] = $row;
    }
    
    return $goods;
}
