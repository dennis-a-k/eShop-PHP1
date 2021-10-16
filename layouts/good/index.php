<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/controllers/good.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/controllers/reviews.php';

$title = $good['title'];

$content = $_SERVER['DOCUMENT_ROOT'] . '/views/good.php';

include_once $_SERVER['DOCUMENT_ROOT'] . '/template/main.php';
