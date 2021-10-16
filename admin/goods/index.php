<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/controllers/admin.php';

if ($_SESSION['user']['role'] != 1) {
    header('Location: /');
}

$title = 'Товары';

$content = $_SERVER['DOCUMENT_ROOT'] . '/views/admin.php';

include_once $_SERVER['DOCUMENT_ROOT'] . '/template/main.php';

