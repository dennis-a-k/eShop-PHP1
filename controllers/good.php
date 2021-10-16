<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/models/good.php';

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $good = getGood($id, $connect);
}
