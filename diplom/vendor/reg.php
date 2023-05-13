<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<body>
<h1>Регистрация</h1>
    <form action="loginAction.php" method="POST">
    <input type="text" name = "login" required placeholder="Введите логин">
    <input type="email" name = "email" required placeholder="Введите e-mail">
    <input type="password" name = "password" required placeholder="Введите пароль">
    <input type="password" name = "repassword" required placeholder="Подтвердите пароль">
    <button type="submit" name="submit_reg">Зарегистрировать</button>
    <br>
    </form>
</body>
</html>