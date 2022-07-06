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
    <title>Ученик</title>
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
        <h1><a href="glav.php" >Учащиеся</h1></a>
        <tr>
            <th>Код ученика</th>
            <th>ФИО</th>
            <th>Адрес</th>
        </tr>

        <?php

            /*
             * Делаем выборку всех строк из таблицы "products"
             */
$ychenik = mysqli_query($connect, "SELECT * FROM `ychenik`");

            /*
             * Преобразовываем полученные данные в нормальный массив
             */

            $ychenik = mysqli_fetch_all($ychenik);

            /*
             * Перебираем массив и рендерим HTML с данными из массива
             * Ключ 0 - id
             * Ключ 1 - title
             * Ключ 2 - price
             * Ключ 3 - description
             */

            foreach ($ychenik as $ychenik) {
                ?>
                    <tr>
                        <td><?= $ychenik[0] ?></td>
                        <td><?= $ychenik[1] ?></td>
                        <td><?= $ychenik[2] ?></td>
                        <td><a href="update6.php?kod=<?= $ychenik[0] ?>">Изменить</a></td>
                        <td><a style="color: red;" href="vendor6/delete.php?nomer=<?= $ychenik[0] ?>">Удалить</a></td>
                    </tr>
                <?php
            }
        ?>
    </table>
    <h3>Новая запись</h3>
    <form action="vendor6/create.php" method="post">
        <p>ФИО</p>
        <input type="text" name="title">
        <p>Адрес</p>
        <input type="text" name="price"> 
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
