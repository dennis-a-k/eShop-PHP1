<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/index.php';

/**
 * Функция заполняет массив отзывами
 * @return - возвращает массив с отзывами
*/
function getReviews($connect)
{
    //создаём пустой массив отзывов и подключаемся к БД к таблице с отзывами
    $reviews = [];
    $sql = "SELECT * FROM reviews ORDER BY `id` DESC";
    $result = mysqli_query($connect, $sql);

    if (!$result)
        die(mysqli_error($connect));

    //перебираем таблицу отзывов и заполняем массив
    while ($row = mysqli_fetch_assoc($result)) {
        $reviews[] = $row;
    }
    
    return $reviews;
}

function sendComment($name, $review, $connect)
{
    $sql = "INSERT INTO reviews(`name`, `review`) VALUES ('$name', '$review')";
    $result = mysqli_query($connect, $sql);

    if (!$result)
        die(mysqli_error($connect));
}
