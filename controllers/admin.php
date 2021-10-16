<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/models/admin.php';

$textError = '';
//проверяем входные данные на тэги и удаляем их если есть при помощи ф-ии strip_tags()
$id = (!empty($_GET['id'])) ? (int)$_GET['id'] : ''; 
$title = (!empty($_POST['title'])) ? trim(strip_tags($_POST['title'])) : '';
$price = (!empty($_POST['price'])) ? (float)trim(strip_tags($_POST['price'])) : '';
$description = (!empty($_POST['description'])) ? trim(strip_tags($_POST['description'])) : '';

//указываем путь к папке для загрузки
$bigImg = $_SERVER['DOCUMENT_ROOT'] . '/img/big/';
$smallImg = $_SERVER['DOCUMENT_ROOT'] . '/img/small/';

//проверяем была ли нажата кнопка Отредактировать, Удалить или Загрузить
if (isset($_POST['edit'])) {
    //определяем если в массиве $_FILES с ключом img что-то есть и исключим ошибку error, то переносим файл из временной директории tmp_name в нашу папки с картинками
    if (!empty($_FILES['img']['error'])) {
        $textError = 'Произошла ошибка';
    } else {
        //проверяем на формат
        if ($_FILES['img']['type'] === 'image/jpeg' ||
            $_FILES['img']['type'] === 'image/jpg' ||
            $_FILES['img']['type'] === 'image/png') {
            editImg($_FILES['img'], $bigImg, $smallImg, $id, $connect, $textError);
        } else {
            $textError = 'Неверный формат файла';
        }
    }
    editGood($connect, $title, $price, $description, $id);
    header('Location: /admin/goods/');
} elseif (isset($_POST['delete'])) {
    deleteGood($connect, $id);
    header('Location: /admin/goods/');
} elseif (isset($_POST['upload'])) {
    //определяем если в массиве $_FILES с ключом img что-то есть и исключим ошибку error, то переносим файл из временной директории tmp_name в нашу папки с картинками
    if (!empty($_FILES['img']['error'])) {
        $textError = 'Произошла ошибка';
    } else {
        //проверяем на формат
        if ($_FILES['img']['type'] === 'image/jpeg' ||
            $_FILES['img']['type'] === 'image/jpg' ||
            $_FILES['img']['type'] === 'image/png') {
            uploadGood($_FILES['img'], $bigImg, $smallImg, $title, $price, $description, $connect, $textError);
            header('Location: /admin/goods/');
        } else {
            $textError = 'Неверный формат файла';
        }
    }
}

//заполняем массив товаров при помощи вызова ф-ии getGoods
$goods = getGoods($connect);
