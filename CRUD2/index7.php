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
    <title>Курсы</title>
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
        <h1><a href="glav.php" >Курсы</h1></a>
        <tr>
            <th>Курса номер</th>
            <th>Категория</th>
            <th>Кол-во часов</th>
            <th>Форма обучения</th>
            <th>Стоимость</th>
        </tr>

        <?php

            /*
             * Делаем выборку всех строк из таблицы "products"
             */
$kyrsi = mysqli_query($connect, "SELECT * FROM `kyrsi`");

            /*
             * Преобразовываем полученные данные в нормальный массив
             */

            $kyrsi = mysqli_fetch_all($kyrsi);

            /*
             * Перебираем массив и рендерим HTML с данными из массива
             * Ключ 0 - id
             * Ключ 1 - title
             * Ключ 2 - price
             * Ключ 3 - description
             */

            foreach ($kyrsi as $kyrsi) {
                ?>
                    <tr>
                        <td><?= $kyrsi[0] ?></td>
                        <td><?= $kyrsi[1] ?></td>
                        <td><?= $kyrsi[2] ?></td>
                         <td><?= $kyrsi[3] ?> </td>
                         <td><?= $kyrsi[4] ?> руб.</td>
                        <td><a href="update7.php?nomer=<?= $kyrsi[0] ?>">Изменить</a></td>
                        <td><a style="color: red;" href="vendor7/delete.php?nomer=<?= $kyrsi[0] ?>">Удалить</a></td>
                    </tr>
                <?php
            }
        ?>
    </table>
    <h3>Новая запись</h3>
    <form action="vendor7/create.php" method="post">
        <p>Категория</p>
        <input type="text" name="title">
        <p>Количество часов</p>
        <input type="text" name="price"> 
           <p>Форма обучения</p>
        <input type="text" name="kol">
           <p>Стоимость</p>
        <input type="text" name="st">
        <br> <br>
        <button type="submit">Добавить</button>
        <br> <br><br> <br><br> <br>
    </form>
</body>
 </h1>
 </table>
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
