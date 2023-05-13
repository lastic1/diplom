<?
session_start();
require "vendor/db.php";
$id = $_SESSION['user']['id'];
$idtovar = $_GET['id'];
$basketquery = mysqli_query($link,"SELECT * FROM basket INNER JOIN user ON basket.id_user = user.id
INNER JOIN tovar ON basket.id_tovar = tovar.id
WHERE id_user = '$id'  ORDER BY basket_id DESC");


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
<a href="index.php">Выход</a>
<h1 align="center"> Корзина пользователя</h1>
<div class="basket">
    <? while($basket = mysqli_fetch_assoc($basketquery)) : ?>
        
        <form action="deleteBasket.php" method="POST">
        <input type="hidden" name="basket_id" value="<?=$basket['basket_id']?>">
Наименование товара:  <?=$basket['name']?>
<div class="status">
<p>Статус: </p>
<? if($basket['status'] == 0){ ?>
 <font color="orange"><p>в очереди</p></font> <br>
<? }  ?>
<? if($basket['status'] == 1){ ?>
 <font color="blue"><p>принят в обработку</p></font> <br>
<? }  ?>
<? if($basket['status'] == 2){ ?>
 <font color="green"><p>готов</p></font> <br>
<? }  ?>
<? if($basket['status'] == 3){ ?>
 <font color="red"><p>отмена</p></font> <br>
<? }  ?>
</div>
<button type="submit" name="delete_submit">Удалить</button>
  </form>  
  <?endwhile ?>
  </div>
</body>
</html>