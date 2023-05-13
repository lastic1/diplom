<?php 
session_start();
if($_SESSION['user']['flag']==0 ){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="index.php">Назад</a>
<a href="admin_basket">Назад</a>
    <a href="admin_basket.php">Просмотр статусов заказа</a>
    <a href="postApp.php">Добавить посты</a>
</body>
</html>