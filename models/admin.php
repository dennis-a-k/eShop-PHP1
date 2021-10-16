<?php
if (!isset($_SESSION)) {
    session_start();
}

include_once $_SERVER['DOCUMENT_ROOT'] . '/config/index.php';

/**
 * Функция заполняет массив товарами
 * @return - возвращает массив товаров
*/
function getGoods($connect)
{
    //создаём пустой массив товаров и подключаемся к БД к таблице с товарами
    $goods = [];
    $sql = "SELECT * FROM goods ORDER BY `title`";
    $result = mysqli_query($connect, $sql);

    if (!$result)
        die(mysqli_error($connect));

    //перебираем таблицу товаров и заполняем массив
    while ($row = mysqli_fetch_assoc($result)) {
        $goods[] = $row;
    }
    
    return $goods;
}

function editImg($arrFile, $bigImg, $smallImg, $id, $connect, $textError)
{
    //записываем расширение картинки и вызываем ф-ю changeImage() для уменьшения картинки и загрузки в папку с маленькими картинками
    if (copy($arrFile['tmp_name'], $bigImg . translit($arrFile['name']))) {
        $path = $smallImg . translit($arrFile['name']);
        $type = explode('/', $arrFile['type'])[1];
        $img = translit($arrFile['name']);
        changeImage(128, 128, $arrFile['tmp_name'], $path, $type);
        //обновляем данные в таблице
        $sql = "UPDATE goods SET img='$img' WHERE `id`=$id";
        mysqli_query($connect, $sql);
    } else {
        $textError = 'Ошибка загрузки файла!';
    }
}

function editGood($connect, $title, $price, $description, $id)
{
    //обновляем данные в таблице
    $sql = "UPDATE goods SET `title`='$title', `price`='$price', `description`='$description' WHERE `id`=$id";
    mysqli_query($connect, $sql);
}

function deleteGood($connect, $id)
{
    //удаляем данные в таблице
    $sql = "DELETE FROM goods WHERE id=$id";
    mysqli_query($connect, $sql);
}

function uploadGood($arrFile, $bigImg, $smallImg, $title, $price, $description, $connect, $textError)
{
    //записываем расширение картинки и вызываем ф-ю changeImage() для уменьшения картинки и загрузки в папку с маленькими картинками
    if (copy($arrFile['tmp_name'], $bigImg . translit($arrFile['name']))) {
        $path = $smallImg . translit($arrFile['name']);
        $img = translit($arrFile['name']);
        $type = explode('/', $arrFile['type'])[1];
        $sql = "INSERT INTO goods(`title`, `price`, `img`, `description`) VALUES ('$title', '$price', '$img', '$description')";
        mysqli_query($connect, $sql);
        changeImage(128, 128, $arrFile['tmp_name'], $path, $type);
    } else {
        $textError = 'Ошибка загрузки файла!';
    }
}

/**
 * Функция преобразует текст с кириллицы на латиницу
 * @param $string - строка на кириллице
 * @return - текст на латинице
*/
function translit($string)
{
    $translit = [
        'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh',
        'з' => 'z', 'и' => 'i', 'й' => 'j', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o',
        'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c',
        'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch', 'ы' => 'y', 'ъ' => '', 'ь' => '', 'э' => 'eh', 'ю' => 'yu', 'я'=>'ya'
    ];

    return str_replace(' ', '_', strtr(mb_strtolower(trim($string)), $translit));
}

/**
 * Функция уменьшает размер файла
 * @param $h - необходимая высота картинки
 * @param $w - необходимая ширина картинки
 * @param $src - путь от куда получаем картинку
 * @param $newsrc - путь куда сохраняем новую картинку
 * @param $type - расширение картинки
 * @return - ничего не возвращаем
*/
function changeImage($h, $w, $src, $newsrc, $type)
{
    $newimg = imagecreatetruecolor($h, $w);
    switch ($type) {
        case 'jpeg':
            $img = imagecreatefromjpeg($src);
            imagecopyresampled($newimg, $img, 0, 0, 0, 0, $h, $w, imagesx($img), imagesy($img));
            imagejpeg($newimg, $newsrc);
            break;
        case 'png':
            $img = imagecreatefrompng($src);
            imagecopyresampled($newimg, $img, 0, 0, 0, 0, $h, $w, imagesx($img), imagesy($img));
            imagepng($newimg, $newsrc);
            break;
        case 'gif':
            $img = imagecreatefromgif($src);
            imagecopyresampled($newimg, $img, 0, 0, 0, 0, $h, $w, imagesx($img), imagesy($img));
            imagegif($newimg, $newsrc);
            break;
    }
}
