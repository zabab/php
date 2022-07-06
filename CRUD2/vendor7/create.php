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
$kol = $_POST['kol'];
$st = $_POST['st'];
/*
 * Делаем запрос на добавление новой строки в таблицу products
 */

mysqli_query($connect,"INSERT INTO `kyrsi` (`kurskod`, `kategoria`, `rolvotime`, `formaobychenie`, `stoimost`) VALUES (NULL, '$title', '$price', '$kol', '$st')");

/*
 * Переадресация на главную страницу
 */

header('Location: ../index7.php');