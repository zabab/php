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
    <title>Obychenie</title>
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
        <h1><a href="glav.php" >Обучение</h1></a>
        <tr>
            <th>Номер группы</th>
            <th>Код курса</th>
            <th>Код преподователя</th>
            <th>Код ученика</th>
            <th>Код автомобиля</th>
            <th>Топлива марка</th>
            <th>Оплата</th>
        </tr>

        <?php

            /*
             * Делаем выборку всех строк из таблицы "products"
             */
$obychenie = mysqli_query($connect, "SELECT * FROM `obychenie`");

            /*
             * Преобразовываем полученные данные в нормальный массив
             */

            $obychenie = mysqli_fetch_all($obychenie);

            /*
             * Перебираем массив и рендерим HTML с данными из массива
             * Ключ 0 - id
             * Ключ 1 - title
             * Ключ 2 - price
             * Ключ 3 - description
             */

            foreach ($obychenie as $obychenie) {
                ?>
                    <tr>
                        <td><?= $obychenie[0] ?></td>
                        <td><?= $obychenie[1] ?></td>
                        <td><?= $obychenie[2] ?></td>
                         <td><?= $obychenie[3] ?></td>
                         <td><?= $obychenie[4] ?></td>
                         <td><?= $obychenie[5] ?></td>
                              <td><?= $obychenie[6] ?></td>
                        <td><a href="update5.php?nomer=<?= $obychenie[0] ?>">Изменить</a></td>
                        <td><a style="color: red;" href="vendor5/delete.php?nomer=<?= $obychenie[0] ?>">Удалить</a></td>
                    </tr>
                <?php
            }
        ?>
    </table>
    <h3>Новая запись</h3>
    <form action="vendor5/create.php" method="post">
        <p>Код курса</p>
        <input type="text" name="kurs">
        <p>Код преподавателя</p>
        <input type="text" name="prepod"> 
           <p>Код ученика</p>
        <input type="text" name="ychenik">
         <p>Код автомобиля</p>
        <input type="text" name="avto">
        <p>Топлива марка</p>
        <input type="text" name="marka"> 
           <p>Оплата</p>
        <input type="text" name="oplata">
        <br> <br>
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