<?php

    /*
     * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
     */

    require_once 'config/connect.php';

    /*
     * Получаем ID продукта из адресной строки - /product.php?id=1
     */

    $ekzamen_nomer = $_GET['nomer'];

    /*
     * Делаем выборку строки с полученным ID выше
     */

    $ekzamen = mysqli_query($connect, "SELECT * FROM `ekzamen` WHERE `nomerdogov` = '$ekzamen_nomer'");

    /*
     * Преобразовывем полученные данные в нормальный массив
     * Используя функцию mysqli_fetch_assoc массив будет иметь ключи равные названиям столбцов в таблице
     */

    $ekzamen = mysqli_fetch_assoc($ekzamen);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update</title>
</head>
<body>
    <h3>Редактирование записи</h3>
    <form action="vendor1/update.php" method="post">
        <input type="hidden" name="nomer" value="<?= $ekzamen['nomerdogov'] ?>">
        <p>Дата</p>
        <input type="date" name="data" value="<?= $ekzamen['date'] ?>">
        <p>Учащейся (личный код)</p>
        <input type="text" name="ych" value="<?= $ekzamen['ychenik'] ?>"> 
           <p>Машина (номер)</p>
        <input type="text" name="mah" value="<?= $ekzamen['avto'] ?>">
        <p>Инструктор (личный код)</p>
        <input type="text" name="ins" value="<?= $ekzamen['instruktor'] ?>">
        <p>Отделение ГИБД</p>
        <input type="text" name="otd" value="<?= $ekzamen['otdelenie'] ?>"> 
           <p>Результат</p>
        <input type="text" name="res" value="<?= $ekzamen['result'] ?>">
        <br><br>
        <button type="submit">Изменить</button>
    </form>
</body>
</html>