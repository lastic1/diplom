<?php
session_start();
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
<form action="loginAction.php" method="POST">
    <input type="text" name = "login"required placeholder="Введите логин или e-mail">
    <input type="password" name ="password" required placeholder="Введите пароль">
    <button type="submit" name="submit_login">Войти</button>
    <br>
    </form>


    </form>
</body>
</html>