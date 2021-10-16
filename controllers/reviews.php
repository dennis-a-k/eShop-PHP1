<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/models/reviews.php';

//проверяем была ли нажата кнопка Загрузить
if (isset($_POST['upload'])) {
    //проверяем входные данные на тэги и удаляем их если есть при помощи ф-ии strip_tags()
    $name = (!empty($_POST['name'])) ? trim(strip_tags($_POST['name'])) : '';
    $review = (!empty($_POST['review'])) ? trim(strip_tags($_POST['review'])) : '';
    $id = (int)$_GET['id'];
    //записываем данные в таблицу
    sendComment($name, $review, $connect);
    
    header('Location: /layouts/good/?id=' . $id);
}

//заполняем массив отзывов при помощи вызова ф-ии getReviews
$reviews = getReviews($connect);
