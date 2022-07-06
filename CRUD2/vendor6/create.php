<?php

//Добавление нового продукта


/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../config/connect.php';

/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */

$title = $_POST['title'];
$price = $_POST['price'];

/*
 * Делаем запрос на добавление новой строки в таблицу products
 */

mysqli_query($connect,"INSERT INTO `ychenik` (`ychenikkod`, `fio`, `adres`) VALUES (NULL, '$title', '$price')");

/*
 * Переадресация на главную страницу
 */

header('Location: ../index6.php');