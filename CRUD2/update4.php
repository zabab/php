<?php

    /*
     * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
     */

    require_once 'config/connect.php';

    /*
     * Получаем ID продукта из адресной строки - /product.php?id=1
     */

    $instruktyr_nomer = $_GET['nomer'];

    /*
     * Делаем выборку строки с полученным ID выше
     */

    $instruktyr = mysqli_query($connect, "SELECT * FROM `instruktyr` WHERE `instryktkod` = '$instruktyr_nomer'");

    /*
     * Преобразовывем полученные данные в нормальный массив
     * Используя функцию mysqli_fetch_assoc массив будет иметь ключи равные названиям столбцов в таблице
     */

    $instruktyr = mysqli_fetch_assoc($instruktyr);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update</title>
</head>
<body>
    <h3>Редактирование записи</h3>
    <form action="vendor2/update.php" method="post">
        <input type="hidden" name="nomer" value="<?= $instruktyr['instryktkod'] ?>">
        <p>Номер паспорта</p>
        <input type="text" name="title" value="<?= $instruktyr['nomerpasport'] ?>">
        <p>Адрес</p>
        <input type="text" name="price" value="<?= $instruktyr['adres'] ?>">
        <p>ФИО</p>
        <input type="text" name="kol" value="<?= $instruktyr['fio'] ?>">
         <br> <br>
        <button type="submit">Изменить</button>
    </form>
</body>
</html>