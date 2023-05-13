<? 
require "db.php";
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
    <title>Document</title>
</head>
<body>
<? if (isset($_SESSION['user'])) {?>
<?php while($user = mysqli_fetch_assoc($userquery)) {   ?>  
    <form action="passwordAction.php" method="POST">
   Введите новый пароль  <input type="number" name="newpassword" value="">
   Подтвердите новый пароль  <input type="number" name="newrepassword" value="">
   <button type="update_password" name="update_password">Обновить</button>
   </form>
   <? } ?>
<?}?>
</body>
</html>