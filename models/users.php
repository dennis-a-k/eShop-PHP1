<?php
if (!isset($_SESSION)) {
    session_start();
}

include_once $_SERVER['DOCUMENT_ROOT'] . '/config/index.php';

/**
 * Функция заполняет массив пользователей
 * @return - возвращает массив пользователей
*/
function getUsers($connect)
{
    //создаём пустой массив пользователей и подключаемся к БД к таблице с пользователями
    $users = [];
    $sql = "SELECT * FROM users ORDER BY `name`";
    $result = mysqli_query($connect, $sql);

    if (!$result)
        die(mysqli_error($connect));

    //перебираем таблицу товаров и заполняем массив
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }
    
    return $users;
}

/**
 * Функция меняет роль пользователя
*/
function editUser($connect, $role, $id)
{
    //меняем роль пользователя
    $role == 1 ? $role = 2 : $role = 1;
    //обновляем данные в таблице
    $sql = "UPDATE users SET `role`='$role' WHERE `id`=$id";
    mysqli_query($connect, $sql);
}

/**
 * Функция удаляет пользователя из БД
*/
function deleteUser($connect, $id)
{
    //удаляем данные в таблице
    $sql = "DELETE FROM users WHERE id=$id";
    mysqli_query($connect, $sql);
}
