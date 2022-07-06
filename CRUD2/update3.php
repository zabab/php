<?php

    /*
     * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
     */

    require_once 'config/connect.php';

    /*
     * Получаем ID продукта из адресной строки - /product.php?id=1
     */

    $mahini_nomer = $_GET['nomer'];

    /*
     * Делаем выборку строки с полученным ID выше
     */

    $mahini = mysqli_query($connect, "SELECT * FROM `mahini` WHERE `kod` = '$mahini_nomer'");

    /*
     * Преобразовывем полученные данные в нормальный массив
     * Используя функцию mysqli_fetch_assoc массив будет иметь ключи равные названиям столбцов в таблице
     */

    $mahini = mysqli_fetch_assoc($mahini);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update</title>
</head>
<body>
    <h3>Редактирование записи</h3>
    <form action="vendor3/update.php" method="post">
        <input type="hidden" name="nomer" value="<?= $mahini['kod'] ?>">
        <p>Гос. номер</p>
        <input type="text" name="title" value="<?= $mahini['gosnomer'] ?>">
         <p>Марка топлива</p>
        <input type="text" name="price" value="<?= $mahini['markatopliv'] ?>">
         <br> <br>
        <button type="submit">Изменить</button>
    </form>
</body>
</html>