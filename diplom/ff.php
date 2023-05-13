<?php
session_start();
require "vendor/db.php";
if($id = isset($_SESSION['user']['id'])) {
    $user = mysqli_query($link,"SELECT * FROM user WHERE id = '$id'");
}


$postquery = mysqli_query($link, "SELECT * FROM post INNER JOIN user ON `post`.`user_id` = `user`.`id`");
$tovarquery = mysqli_query($link, "SELECT * FROM tovar");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="nav">
<?php if ($_SESSION['user']['flag'] > 0 && $_SESSION['user']) : ?>
<a href="admin.php">Администрирование</a>

    <? endif ?>
<? if(!isset($_SESSION['user'])):?>
    <a href="vendor/auto.php">Войти</a>
    <a href="vendor/reg.php">Регистрация</a>
    <a href="index.php">Главная</a></li>
    <li><a href="компания.html" >О компании</a></li>
          <a href="услуги.php">Услуги</a></li>
          <li><a href="index.html">Контакты</a></li>
        
    
<? else:?>
    <a href="kabinet.php">Личный кабинет</a>
    <a href="basket.php">Корзина</a>
    <a href="vendor/exit.php">Выход</a>
    
   
<?endif ?>
</div>

</body>
</html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Монтаж</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>

   
    <div id="main" style="display: flex;">
 