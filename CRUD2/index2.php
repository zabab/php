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
    <title>Instruktyr</title>
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
        <h1><a href="glav.php" >Инструктор</h1></a>
        <tr>
            <th>Интруктора код</th>
            <th>Номер паспорта</th>
            <th>Адрес</th>
            <th>ФИО</th>
        </tr>

        <?php

            /*
             * Делаем выборку всех строк из таблицы "products"
             */
$instruktyr = mysqli_query($connect, "SELECT * FROM `instruktyr`");

            /*
             * Преобразовываем полученные данные в нормальный массив
             */

            $instruktyr = mysqli_fetch_all($instruktyr);

            /*
             * Перебираем массив и рендерим HTML с данными из массива
             * Ключ 0 - id
             * Ключ 1 - title
             * Ключ 2 - price
             * Ключ 3 - description
             */

            foreach ($instruktyr as $instruktyr) {
                ?>
                    <tr>
                        <td><?= $instruktyr[0] ?></td>
                        <td><?= $instruktyr[1] ?></td>
                        <td><?= $instruktyr[2] ?></td>
                         <td><?= $instruktyr[3] ?> </td>
                        <td><a href="update2.php?nomer=<?= $instruktyr[0] ?>">Изменить</a></td>
                        <td><a style="color: red;" href="vendor2/delete.php?nomer=<?= $instruktyr[0] ?>">Удалить</a></td>
                    </tr>
                <?php
            }
        ?>
    </table>
    <h3>Новая запись</h3>
    <form action="vendor2/create.php" method="post">
        <p>Номер паспорта</p>
        <input type="text" name="title">
        <p>Адрес</p>
        <input type="text" name="price"> 
           <p>ФИО</p>
        <input type="text" name="kol">
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
</html>
