<?
session_start();
require "db.php";
$id = $_SESSION['user']['id'];
$admin_basketquery = mysqli_query($link,"SELECT * FROM basket");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Корзина администратора</title>
</head>
<body>
    <a href="admin.php">Назад</a>
    <div class="admin">
    <? while($admin_basket = mysqli_fetch_assoc($admin_basketquery)): ?>
        <div class="admin_form">
            <form action="statusAction.php" method="POST">
            <input type="hidden" name="id" value="<?=$admin_basket['basket_id']?>">
<p>id заказа:  <?=$admin_basket['basket_id'] ?></p>
<p>id клиента: <?=$admin_basket['id_user'] ?></p>
<p>id товара: <?=$admin_basket['id_tovar'] ?></p>
<div class="status">
<p>Статус: </p>
<? if($admin_basket['status'] == 0){ ?>
    <input type="hidden" name="status" value="<?=$admin_basket['status']?>">
 <font color="orange"><p>в очереди</p></font> <br>
<? }  ?>
<? if($admin_basket['status'] == 1){ ?>
    <input type="hidden" name="status" value="<?=$admin_basket['status']?>">
 <font color="blue"><p>принят в обработку</p></font> <br>
<? }  ?>
<? if($admin_basket['status'] == 2){ ?>
    <input type="hidden" name="status" value="<?=$admin_basket['status']?>">
 <font color="green"><p>готов</p></font> <br>
<? }  ?>
<? if($admin_basket['status'] == 3){ ?>
    <input type="hidden"name="status" value="<?=$admin_basket['status']?>">
 <font color="red"><p>отмена</p></font> <br>
<? }  ?>
</div>
<input type="submit" name="button_up" value="изменить статус" id="up">
</form>
</div>

    <? endwhile ?>
    </div>
</body>
<script src="mail.js"></script>
</html>