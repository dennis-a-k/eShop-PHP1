<?php
//Подключение к БД
const SERVER='localhost';
const DB='geekbrains';
const LOGIN='root';
const PASSWORD='root';

const SALT = 'eShop';

$connect = mysqli_connect(SERVER, LOGIN, PASSWORD, DB) or die('Ошибка подключения к БД');

$message = '';
$error = false;
