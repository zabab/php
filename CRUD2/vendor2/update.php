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
$title = $_POST['title'];
$price = $_POST['price'];
$kol = $_POST['kol'];

/*
 * Делаем запрос на изменение строки в таблице products
 */

mysqli_query($connect, "UPDATE `instruktyr` SET `nomerpasport` = '$title', `adres` = '$price', `fio` = '$kol' WHERE `instruktyr`.`instryktkod` = '$nomer'");

/*
 * Переадресация на главную страницу
 */

header('Location: ../index2.php');