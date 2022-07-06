<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Home page - Avtoshcool</title>
   
</head>
<body>

    <h1>Автошкола</h1>
    <div class="split right">
  <div class="centered">
<p style="text-align: center"><a href="index.php" >Заправка</a></p>
<p style="text-align: center"><a href="index1.php" >Экзамены</a></p>
<p style="text-align: center"><a href="index2.php" >Интрукторы</a></p>
<p style="text-align: center"><a href="index3.php" >Машины</a></p>
<p style="text-align: center"><a href="index5.php" >Обучение</a></p>
<p style="text-align: center"><a href="index6.php" >Учащиеся</a></p>
<p style="text-align: center"><a href="index7.php" >Курсы</a></p>
</div>
</div>
<?php

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once 'config/connect.php';

?>
<style>
       h1, div {
        text-align: center;
    }
    a {
    font-size: 14pt; /* Размер шрифта в пунктах */ 
}
    th, td {
        padding: 30px;
    }

    th {
        background: #606060;
        color: #fff;
    }
    .split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}
.left {
  left: 0;
}

/* Control the right side */
.right {
  right: 0;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}
  #content {
    width: 500px; /* Ширина слоя */
    margin: 0 auto 50px; /* Выравнивание по центру */
   }
   #footer {
    position: fixed; /* Фиксированное положение */
    left: 0; bottom: 0; /* Левый нижний угол */
    padding: 10px; /* Поля вокруг текста */
    background: gray; /* Цвет фона */
    color: #fff; /* Цвет текста */
    width: 100%; /* Ширина слоя */
   }
</style>
    <div class="split left">
  <div class="centered">
   <table >
        <tr>
            <th>Категория</th>
            <form method="get" action="test_search.php">
    <input required type="search" name="search" placeholder="Поиск..." >
    <input type="submit">
</form><br><br><br><br>
            <th>Кол-во часов</th>
            <th>Форма обучения</th>
            <th>Стоимость</th>
        </tr>

        <?php
$kyrsi = mysqli_query($connect, "SELECT * FROM `kyrsi`");


            $kyrsi = mysqli_fetch_all($kyrsi);

            foreach ($kyrsi as $kyrsi) {
                ?>
                    <tr>
                        <td><?= $kyrsi[1] ?></td>
                        <td><?= $kyrsi[2] ?></td>
                         <td><?= $kyrsi[3] ?> </td>
                         <td><?= $kyrsi[4] ?> руб.</td>
                    </tr>
                <?php
            }
        ?>
    </table>
</div>
</div>
    <div id="footer">
    <footer >
            &copy; 2021 - Автошкола
    </footer>
    </div>
</body>
</html>

