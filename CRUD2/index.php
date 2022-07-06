<?php

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once 'config/connect.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zapravki</title>
</head>
<style>
    th, td {
        padding: 10px;
    }

    th {
        background: #606060;
        color: #fff;
    }

    td {
        background: #b5b5b5;
    }
</style>
<body>
   <table >
        <h1><a href="glav.php" >Заправка</h1></a>
        <tr>
            <th>Номер по порядку</th>
            <th>Номер чека</th>
            <th>Топливо</th>
            <th>Количество</th>
        </tr>

        <?php

            /*
             * Делаем выборку всех строк из таблицы "products"
             */
$zapravki = mysqli_query($connect, "SELECT * FROM `zapravki`");

            /*
             * Преобразовываем полученные данные в нормальный массив
             */

            $zapravki = mysqli_fetch_all($zapravki);

            /*
             * Перебираем массив и рендерим HTML с данными из массива
             * Ключ 0 - id
             * Ключ 1 - title
             * Ключ 2 - price
             * Ключ 3 - description
             */

            foreach ($zapravki as $zapravki) {
                ?>
                    <tr>
                        <td><?= $zapravki[0] ?></td>
                        <td><?= $zapravki[1] ?></td>
                        <td><?= $zapravki[2] ?></td>
                         <td><?= $zapravki[3] ?> литров</td>
                        <td><a href="update.php?nomer=<?= $zapravki[0] ?>">Изменить</a></td>
                        <td><a style="color: red;" href="vendor/delete.php?nomer=<?= $zapravki[0] ?>">Удалить</a></td>
                    </tr>
                <?php
            }
        ?>
    </table>
    <h3>Новая запись</h3>
    <form action="vendor/create.php" method="post">
        <p>Номер чека</p>
        <input type="text" name="title">
        <p>Топливо</p>
        <input type="text" name="price"> 
           <p>Количество</p>
        <input type="text" name="kol"><br> <br>
        <button type="submit">Добавить</button>
        <br> <br><br> <br><br> <br>
    </form>
</body>
    <footer >
        <style type="text/css">
               #footer {
    position: fixed; /* Фиксированное положение */
    left: 0; bottom: 0; /* Левый нижний угол */
    padding: 10px; /* Поля вокруг текста */
    background: gray; /* Цвет фона */
    color: #fff; /* Цвет текста */
    width: 100%; /* Ширина слоя */
   }
</style>
        <div id="footer">
            ZababoninaAvtoSchool - &copy; 2021
        </div>
    </footer>
</html>
