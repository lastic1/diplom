<?php
session_start();
require "vendor/db.php";
$idtovar = $_GET['id'];
$tovarquery = mysqli_query($link, "SELECT * FROM tovar WHERE id = '$idtovar'");
$tovar = mysqli_fetch_assoc($tovarquery);
$postquery = mysqli_query($link,"SELECT * FROM post INNER JOIN tovar ON post.tovar_id = tovar.id WHERE tovar.id = '$idtovar'")
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
<div class="one_tovar">
<form action="basketAction.php" method="POST">
    <input type="hidden" value="<?=$tovar['id']?>" name="id">
        <h1 align="center"><?=$tovar['name']?></h1>
        <h4>Описание товара:</h4>
        
        <p id="description"><?=$tovar['description']?></p>
    <button type="submit" name="submit_basket" id="basket_submit">В корзину</button>

</div>
</form>
<div class="postt">
    <? while($post = mysqli_fetch_assoc($postquery)): ?>
        <p>Название поста: <?=$post['post_text']  ?></p>
        <p>Содержание поста: <?=$post['post_description']  ?></p> <br>
        
</div>

<?endwhile?>
<input type="button" value="Добавить отзыв" id="post_create" onclick="POSTN()">
<div class="post_create">
<? require "postApp.php" ?>
</div>

</body>
<script src="mail.js"></script>
</html>
