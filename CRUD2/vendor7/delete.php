<?php

//Удаление продукта

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../config/connect.php';

/*
 * Получаем ID продукта из адресной строки
 */

$nomer = $_GET['nomer'];

/*
 * Делаем запрос на удаление строки из таблицы products
 */

mysqli_query($connect, "DELETE FROM `kyrsi` WHERE `kyrsi`.`kurskod` = '$nomer'");

/*
 * Переадресация на главную страницу
 */

header('Location: ../index7.php');