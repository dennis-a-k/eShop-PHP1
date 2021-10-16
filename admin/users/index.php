<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/controllers/users.php';

if ($_SESSION['user']['role'] != 1) {
    header('Location: /');
}

$title = 'Пользователи';

$content = $_SERVER['DOCUMENT_ROOT'] . '/views/users.php';

include_once $_SERVER['DOCUMENT_ROOT'] . '/template/main.php';
