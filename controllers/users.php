<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/models/users.php';

$id = (!empty($_GET['id'])) ? (int)$_GET['id'] : '';
$role = (!empty($_GET['role'])) ? (int)$_GET['role'] : '';

//заполняем массив пользователей при помощи вызова ф-ии getUsers
$users = getUsers($connect);

if (isset($_POST['edit'])) {
    editUser($connect, $role, $id);
    header('Location: /admin/users/');
} elseif (isset($_POST['delete'])) {
    deleteUser($connect, $id);
    header('Location: /admin/users/');
}
