<?php

//Добавление нового продукта


/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../config/connect.php';

/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */

$kurs = $_POST['kurs'];
$prepod = $_POST['prepod'];
$ychenik = $_POST['ychenik'];
$avto = $_POST['avto'];
$marka = $_POST['marka'];
$oplata = $_POST['oplata'];
/*
 * Делаем запрос на добавление новой строки в таблицу products
 */

mysqli_query($connect,"INSERT INTO `obychenie` (`nomergryp`, `kodkurse`, `kodprepoda`, `kodychenik`, `kodavto`, `toplivomark`, `oplata`) VALUES (NULL, '$kurs', '$prepod','$ychenik', '$avto', '$marka', '$oplata')");

/*
 * Переадресация на главную страницу
 */

header('Location: ../index5.php');