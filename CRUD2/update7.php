<?php

    /*
     * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
     */

    require_once 'config/connect.php';

    /*
     * Получаем ID продукта из адресной строки - /product.php?id=1
     */

    $kyrsi_nomer = $_GET['nomer'];

    /*
     * Делаем выборку строки с полученным ID выше
     */

    $kyrsi = mysqli_query($connect, "SELECT * FROM `kyrsi` WHERE `kurskod` = '$kyrsi_nomer'");

    /*
     * Преобразовывем полученные данные в нормальный массив
     * Используя функцию mysqli_fetch_assoc массив будет иметь ключи равные названиям столбцов в таблице
     */

    $kyrsi = mysqli_fetch_assoc($kyrsi);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update</title>
</head>
<body>
    <h3>Редактирование записи</h3>
    <form action="vendor7/update.php" method="post">
        <input type="hidden" name="nomer" value="<?= $kyrsi['kurskod'] ?>">
        <p>Категория</p>
        <input type="text" name="title" value="<?= $kyrsi['kategoria'] ?>">
        <p>Количество часов</p>
        <input type="text" name="price" value="<?= $kyrsi['rolvotime'] ?>">
        <p>Форма обучения</p>
        <input type="text" name="kol" value="<?= $kyrsi['formaobychenie'] ?>">
        <p>Стоимость</p>
        <input type="text" name="st" value="<?= $kyrsi['stoimost'] ?>">
         <br> <br>
        <button type="submit">Изменить</button>
    </form>
</body>
</html>