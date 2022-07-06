<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Поиск: <?php echo $_GET['search']; ?></title>
   
</head>
<body>
<h2>Поисковой запрос: <?php echo $_GET['search']; ?></h2>
<?php
$connect = mysqli_connect("localhost", "root", "root", "crud");

$search_get = $_GET['search'];
$search_get1 = $_GET['search'];
$sql = "SELECT * FROM `instruktyr` WHERE `fio` LIKE '%$search_get%' ";
$select = mysqli_query($connect, $sql);
while ($select_while = mysqli_fetch_assoc($select))
{
	?>
	<br>
	<b><a href="../index2.php?instryktkod=<?php echo $select_while['instryktkod']; ?>" ><?php echo $select_while['fio']; ?> </a></b>
	<?php
}
?>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Поиск: <?php echo $_GET['search']; ?></title>
   
</head>
<body>
<?php
$connect = mysqli_connect("localhost", "root", "root", "crud");

$search_get1 = $_GET['search'];
$sql1 = "SELECT * FROM `instruktyr` WHERE `instryktkod` LIKE '%$search_get1%' ";
$select1 = mysqli_query($connect, $sql1);
while ($select_while = mysqli_fetch_assoc($select1))
{
	?>
	<br>
	<b><a href="../index2.php?instryktkod=<?php echo $select_while['instryktkod']; ?>" ><?php echo $select_while['fio']; ?> </a></b>
	<?php
}
?>

</body>
</html>
