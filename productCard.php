
<?php
require_once 'conf.php';

$info = $dbh->prepare("
  SELECT * FROM complete where id_product=:id");
$info->bindParam(':id', $id);
$id=$_GET['id'];
$info->execute();
$result = $info->fetch(PDO::FETCH_ASSOC);
?>
<DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible">
  <link rel="stylesheet" href="styleKatalog.css" tepe="text/css" />
  <title>Lunox</title>

</head>

<body> 

          <div class="form-buy">
          <br />
          <br />
          <br />
          <br />

          <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Подробное описание товара</title>
<style>
.container {
max-width: 800px;
margin: 0 auto;
padding: 20px;
}
.product-info {
display: flex;
}
.product-image {
flex: 1;
margin-right: 90px;
}
.product-details {
flex: 2;
}
h1, p {
margin-bottom: 20px;
}
</style>
</head>

<body>

<form action="cartKomputer.php" method="POST">

<div class="container">
<h1><?= $result['nameP'] ?></h1>
<div class="product-info">
<div class="product-image">
<img src="<?= $result['img'] ?>" alt="Изображение товара" width ="650px">
</div>
<div class="product-details">
<p><strong>Цена:</strong> <?= $result['price'] ?></p>
<p><strong>Описание:</strong><?= $result['type'] ?></p>

<h2>Характеристики товара:</h2>

<li>Видеокарта: <br><?= $result['videocart'] ?></li>
<li>Оперативная: <br><?= $result['operativ'] ?></li>
<li>Процессор:  <br><?= $result['processor'] ?></li>
<li>Материнская: <br><?= $result['materinca'] ?></li>
<li>Блок питания: <br><?= $result['blockpit'] ?></li>
<li>Корпус: <br><?= $result['corpus'] ?></li><br>
<li>Цвет: <br><?= $result['color'] ?></li><br></ul>
</ul>


</form>
</div>
</div>
</div>
</form>

</body>
</html>
</code></pre>
