<?php

    /*
     * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
     */

    require_once 'config/connect.php';

    /*
     * Получаем ID продукта из адресной строки - /product.php?id=1
     */

    $ychenik_kod = $_GET['kod'];

    /*
     * Делаем выборку строки с полученным ID выше
     */

    $ychenik = mysqli_query($connect, "SELECT * FROM `ychenik` WHERE `ychenikkod` = '$ychenik_kod'");

    /*
     * Преобразовывем полученные данные в нормальный массив
     * Используя функцию mysqli_fetch_assoc массив будет иметь ключи равные названиям столбцов в таблице
     */

    $ychenik = mysqli_fetch_assoc($ychenik);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update</title>
</head>
<body>
    <h3>Редактирование записи</h3>
    <form action="vendor6/update.php" method="post">
        <input type="hidden" name="kod" value="<?= $ychenik['ychenikkod'] ?>">
        <p>ФИО</p>
        <input type="text" name="title" value="<?= $ychenik['fio'] ?>">
        <p>Адрес</p>
        <input type="text" name="price" value="<?= $ychenik['adres'] ?>">
         <br> <br>
        <button type="submit">Изменить</button>
    </form>
</body>
</html>