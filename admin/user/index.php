<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/controllers/good.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/controllers/user.php';

if (!$_SESSION) {
    header('Location: /');
}

$title = $user['name'];

$content = $_SERVER['DOCUMENT_ROOT'] . '/views/user.php';

include_once $_SERVER['DOCUMENT_ROOT'] . '/template/main.php';
