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
$kurs = $_POST['kurs'];
$prepod = $_POST['prepod'];
$ychenik = $_POST['ychenik'];
$avto = $_POST['avto'];
$marka = $_POST['marka'];
$oplata = $_POST['oplata'];

/*
 * Делаем запрос на изменение строки в таблице products
 */

mysqli_query($connect, "UPDATE `obychenie` SET `kodkurse` = '$kurs', `kodprepoda` = '$prepod', `kodychenik` = '$ychenik', `kodavto` = '$avto', `toplivomark` = '$marka', `oplata` = '$oplata' WHERE `obychenie`.`nomergryp` = '$nomer'");

/*
 * Переадресация на главную страницу
 */

header('Location: ../index5.php');