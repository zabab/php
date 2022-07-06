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

mysqli_query($connect, "DELETE FROM `ekzamen` WHERE `ekzamen`.`nomerdogov` = '$nomer'");

/*
 * Переадресация на главную страницу
 */

header('Location: ../index1.php');