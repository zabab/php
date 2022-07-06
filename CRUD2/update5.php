<?php

    /*
     * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
     */

    require_once 'config/connect.php';

    /*
     * Получаем ID продукта из адресной строки - /product.php?id=1
     */

    $obychenie_nomer = $_GET['nomer'];

    /*
     * Делаем выборку строки с полученным ID выше
     */

    $obychenie = mysqli_query($connect, "SELECT * FROM `obychenie` WHERE `nomergryp` = '$obychenie_nomer'");

    /*
     * Преобразовывем полученные данные в нормальный массив
     * Используя функцию mysqli_fetch_assoc массив будет иметь ключи равные названиям столбцов в таблице
     */

    $obychenie = mysqli_fetch_assoc($obychenie);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update</title>
</head>
<body>
    <h3>Редактирование записи</h3>
    <form action="vendor5/update.php" method="post">
        <input type="hidden" name="nomer" value="<?= $obychenie['nomergryp'] ?>">
        <p>Код курса</p>
        <input type="text" name="kurs" value="<?= $obychenie['kodkurse'] ?>">
        <p>Код преподавателя</p>
        <input type="text" name="prepod" value="<?= $obychenie['kodprepoda'] ?>">
         <p>Код ученика</p>
        <input type="text" name="ychenik" value="<?= $obychenie['kodychenik'] ?>">
         <p>Код автомобиля</p>
        <input type="text" name="avto" value="<?= $obychenie['kodavto'] ?>">
       <p>Топлива марка</p>
        <input type="text" name="marka" value="<?= $obychenie['toplivomark'] ?>">
        <p>Оплата</p>
        <input type="text" name="oplata" value="<?= $obychenie['oplata'] ?>">
         <br> <br>
        <button type="submit">Изменить</button>
    </form>
</body>
</html>