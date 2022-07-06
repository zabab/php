<?php

//Обновление информации о продукте

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../config/connect.php';

/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */

$nomer = $_POST['nomer'];
$data = $_POST['data'];
$ych = $_POST['ych'];
$mah = $_POST['mah'];
$ins = $_POST['ins'];
$otd = $_POST['otd'];
$res = $_POST['res'];

/*
 * Делаем запрос на изменение строки в таблице products
 */

mysqli_query($connect, "UPDATE `ekzamen` SET `date` = '$data', `ychenik` = '$ych', `avto` = '$mah', `instruktor` = '$ins', `otdelenie` = '$otd', `result` = '$res' WHERE `ekzamen`.`nomerdogov` = '$nomer'");

/*
 * Переадресация на главную страницу
 */

header('Location: ../index1.php');