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
    <title>Ekzamen</title>
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
        <h1><a href="glav.php" >Экзамен</h1></a>
        <tr>
            <th>Номер договора</th>
            <th>Дата</th>
            <th>Учащейся (личный код)</th>
            <th>Машина (номер)</th>
            <th>Инструктор (личный код)</th>
            <th>Отделение ГИБД</th>
            <th>Результат</th>
        </tr>

        <?php

            /*
             * Делаем выборку всех строк из таблицы "products"
             */
$ekzamen = mysqli_query($connect, "SELECT * FROM `ekzamen`");

            /*
             * Преобразовываем полученные данные в нормальный массив
             */

            $ekzamen = mysqli_fetch_all($ekzamen);

            /*
             * Перебираем массив и рендерим HTML с данными из массива
             * Ключ 0 - id
             * Ключ 1 - title
             * Ключ 2 - price
             * Ключ 3 - description
             */

            foreach ($ekzamen as $ekzamen) {
                ?>
                    <tr>
                        <td><?= $ekzamen[0] ?></td>
                        <td><?= $ekzamen[1] ?></td>
                        <td><?= $ekzamen[2] ?></td>
                         <td><?= $ekzamen[3] ?></td>
                          <td><?= $ekzamen[4] ?></td>
                         <td><?= $ekzamen[5] ?></td>
                         <td><?= $ekzamen[6] ?></td>
                        <td><a href="update1.php?nomer=<?= $ekzamen[0] ?>">Изменить</a></td>
                        <td><a style="color: red;" href="vendor1/delete.php?nomer=<?= $ekzamen[0] ?>">Удалить</a></td>
                    </tr>
                <?php
            }
        ?>
    </table>
    <h3>Новая запись</h3>
    <form action="vendor1/create.php" method="post">
        <p>Дата</p>
        <input type="date" name="data" name="calendar">
        <p>Учащейся (личный код)</p>
        <input type="text" name="ych"> 
           <p>Машина (номер)</p>
        <input type="text" name="mah">
        <p>Инструктор (личный код)</p>
        <input type="text" name="ins">
        <p>Отделение ГИБД</p>
        <input type="text" name="otd"> 
           <p>Результат</p>
        <input type="text" name="res">
        <br> <br>
        <button type="submit">Добавить</button>
        <br> <br><br> <br><br> <br>
    </form>
</body>
<hr>
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
