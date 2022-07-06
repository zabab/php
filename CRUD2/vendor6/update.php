<?php

//Обновление информации о продукте

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../config/connect.php';

/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */
$kod = $_POST['kod'];
$title = $_POST['title'];
$price = $_POST['price'];


/*
 * Делаем запрос на изменение строки в таблице products
 */

mysqli_query($connect, "UPDATE `ychenik` SET `fio` = '$title', `adres` = '$price' WHERE `ychenik`.`ychenikkod` = '$kod'");

/*
 * Переадресация на главную страницу
 */

header('Location: ../index6.php');