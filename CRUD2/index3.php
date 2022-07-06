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
        <h1><a href="glav.php" >Машины</h1></a>
        <tr>
            <th>Код автомобиля</th>
            <th>Гос. номер</th>
            <th>Марка топлива</th>
        </tr>

        <?php

            /*
             * Делаем выборку всех строк из таблицы "products"
             */
$mahini = mysqli_query($connect, "SELECT * FROM `mahini`");

            /*
             * Преобразовываем полученные данные в нормальный массив
             */

            $mahini = mysqli_fetch_all($mahini);

            /*
             * Перебираем массив и рендерим HTML с данными из массива
             * Ключ 0 - id
             * Ключ 1 - title
             * Ключ 2 - price
             * Ключ 3 - description
             */

            foreach ($mahini as $mahini) {
                ?>
                    <tr>
                        <td><?= $mahini[0] ?></td>
                        <td><?= $mahini[1] ?></td>
                        <td><?= $mahini[2] ?></td>
                        <td><a href="update3.php?nomer=<?= $mahini[0] ?>">Изменить</a></td>
                        <td><a style="color: red;" href="vendor3/delete.php?nomer=<?= $mahini[0] ?>">Удалить</a></td>
                    </tr>
                <?php
            }
        ?>
    </table>
    <h3>Новая запись</h3>
    <form action="vendor3/create.php" method="post">
        <p>Гос. номер</p>
        <input type="text" name="title">
        <p>Марка топлива</p>
        <input type="text" name="price" > 
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
