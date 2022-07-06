<?php

//Добавление нового продукта


/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../config/connect.php';

/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */
$data = $_POST['data'];
$ych = $_POST['ych'];
$mah = $_POST['mah'];
$ins = $_POST['ins'];
$otd = $_POST['otd'];
$res = $_POST['res'];

/*
 * Делаем запрос на добавление новой строки в таблицу products
 */

mysqli_query($connect,"INSERT INTO `ekzamen` (`nomerdogov`, `date`, `ychenik`, `avto`, `instruktor`, `otdelenie`, `result`) VALUES (NULL, '$data', '$ych', '$mah', '$ins', '$otd', '$res')");

/*
 * Переадресация на главную страницу
 */

header('Location: ../index1.php');