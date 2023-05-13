<? 
require "vendor/db.php";
session_start();
$id = $_SESSION['user']['id'];
$userquery = mysqli_query($link, "SELECT * FROM user WHERE user.id = '$id'");
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


<a href="admin.php">Администрирование</a>


<? if(!isset($_SESSION['user'])):?>
    <? endif ?>
    <a href="vendor/exit.php">Выход</a>
    
<? if (isset($_SESSION['user'])) {?>
<?php while($user = mysqli_fetch_assoc($userquery)) {   ?>  
    <form action="cabinetAction.php" method="POST">
        <div class="personal">
            <input type="hidden" id="id" name ="id" value="<?=$user['id']?>"> 
     <p>Имя <input type="text" id="login" name="login" value="<?=$user['login']?>" disabled> </p>
       <p> Пароль <input type="password" id="password" name="password" value="<?=$user['password']?>" disabled> </p>  
       <p> E-mail <input type="email" id="email" name="email" value="<?=$user['email']?>" disabled ></p>
       
<? } ?>
<?}?>
<a href="password.php">Сменить пароль</a>
<input type="button" id="update" value="Редактировать данные" onclick="re()">

<button type="submit" name="submit_update" id="save">Сохранить</button>
</form>


</body>
<script src="mail.js"></script>
</html>