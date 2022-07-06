<?php

    /*
     * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
     */

    require_once 'config/connect.php';

    /*
     * Получаем ID продукта из адресной строки - /product.php?id=1
     */

    $zapravki_nomer = $_GET['nomer'];

    /*
     * Делаем выборку строки с полученным ID выше
     */

    $zapravki = mysqli_query($connect, "SELECT * FROM `zapravki` WHERE `nomer` = '$zapravki_nomer'");

    /*
     * Преобразовывем полученные данные в нормальный массив
     * Используя функцию mysqli_fetch_assoc массив будет иметь ключи равные названиям столбцов в таблице
     */

    $zapravki = mysqli_fetch_assoc($zapravki);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update</title>
</head>
<body>
    <h3>Редактирование записи</h3>
    <form action="vendor/update.php" method="post">
        <input type="hidden" name="nomer" value="<?= $zapravki['nomer'] ?>">
        <p>Номер чека</p>
        <input type="text" name="title" value="<?= $zapravki['chek'] ?>">
        <p>Топливо</p>
        <input type="text" name="price" value="<?= $zapravki['toplivo'] ?>">
        <p>Количество</p>
        <input type="text" name="kol" value="<?= $zapravki['kolvo'] ?>">
         <br> <br>
        <button type="submit">Изменить</button>
    </form>
</body>
</html>