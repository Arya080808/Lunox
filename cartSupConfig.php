<?php

require_once 'conf.php';

if ($dbh->connect_error) {
    die("Connection failed: " . $dbh->connect_error);
}

$selectedProductsV = $_POST['selected_productsV'];
$selectedProductsP = $_POST['selected_productsP'];
$selectedProductsO = $_POST['selected_productsO'];
$selectedProductsM = $_POST['selected_productsM'];
$selectedProductsH = $_POST['selected_productsH'];
$selectedProductsB = $_POST['selected_productsB'];
$selectedProductsK = $_POST['selected_productsK'];

$ProductsV = 0;
$ProductsP = 0;
$ProductsO = 0;
$ProductsM = 0;
$ProductsH = 0;
$ProductsB = 0;
$ProductsK = 0;

if ($selectedProductsV != 0){
foreach ($selectedProductsV as $productId) {
    $ProductsV = $productId;
}    
}

if ($selectedProductsP != 0){
foreach ($selectedProductsP as $productId) {
    $ProductsP = $productId;
}    
}

if ($selectedProductsO != 0){ 
foreach ($selectedProductsO as $productId) { 
    $ProductsO = $productId;
}
}

if ($selectedProductsM != 0){ 
foreach ($selectedProductsM as $productId) {
    $ProductsM = $productId;
}
}

if ($selectedProductsH != 0){
foreach ($selectedProductsH as $productId) {
    $ProductsH = $productId;
}
}

if ($selectedProductsB != 0){ 
foreach ($selectedProductsB as $productId) { 
    $ProductsB = $productId;
}
}

if ($selectedProductsK != 0){ 
foreach ($selectedProductsK as $productId) {
    $ProductsK = $productId;
}
}


$orderQuery = $dbh->prepare("INSERT INTO pers_assembly (id_videocart, id_processor, id_operativ, id_motherboard, id_hdd, id_blocpit, id_corpus) VALUES ('$ProductsV', '$ProductsP', '$ProductsO', '$ProductsM', '$ProductsH', '$ProductsB', '$ProductsK')");


    

   




require_once 'conf.php';

$info = $dbh->prepare("
  SELECT * FROM videocart where productId=:id");
$info->bindParam(':id', $id);
$id=$_POST['selected_productsV'];

if ($selectedProductsV != 0){
foreach ($selectedProductsV as $productId) {
    $id = $productId;
}    
}

$info->execute();
$result = $info->fetch(PDO::FETCH_ASSOC);

$totalSum = 0;
$totalSum += $result['price']
?>

<DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible">
  <link rel="stylesheet" href="styleKatalogg.css" tepe="text/css" />
  <title>Lunox</title>

</head>

<body> 
          <div class="form-buy">
          <br />
          <br />
          <br />
          <br />

          <div class="blockquote2">
          <h2><span >Оформление заказа:</h2> <br />
          </div>

         <form action="" method="POST">

          <div class="blockquote2">
          <label><span > ФИО:</span> <br />
          <div class="blockquo"><input type="text" name="name" pattern="^[А-Яа-яЁё\s]+$" placeholder="ФИО" required/></label><p></p></div>
          </div>
          
          <div class="blockquote2">
          <label><span > Емаил</span> <br />
          <div class="blockquo"><input type="text" name="email" pattern="^\S+@\S+\.\S+$" placeholder="Email" required /></label><p></p><br /></div>
          </div>
          

          <div class="blockquote2">
          <label><span > Способ доставки:</span><br />
          <div class="blockquo">
          <select name="delivery">
            <option value="Почтой">Почтой</option>
            <option value="СДЭК">СДЭК</option>
          </select><Br></label><p></p>  
          </div>
          </div>
          

          <div class="blockquote2">
          <label><span > Ваша сборка состоит из:</span><br />
          <div class="blockquooo">
            <?php  
            if ($selectedProductsV == null) 
            { 
                echo'<input  type="text" value="Видеокарта" readonly><br />';
            } 
            else
            {
                $result['nameP']; 
                echo'<input  type="text" value="' . $result['nameP'] . '" readonly><br />';
            } ?>

<?php
require_once 'conf.php';

$info = $dbh->prepare("
  SELECT * FROM processor where productId=:id");
$info->bindParam(':id', $id);
$id=$_POST['selected_productsP'];

if ($selectedProductsP != 0){
foreach ($selectedProductsP as $productId) {
    $id = $productId;
}
}

$info->execute();
$result = $info->fetch(PDO::FETCH_ASSOC);

$totalSum += $result['price']
?>

            <input  type="text" value="Процессор <?= $result['nameP'] ?>" readonly><br />
<?php
require_once 'conf.php';

$info = $dbh->prepare("
  SELECT * FROM operativ where productId=:id");
$info->bindParam(':id', $id);
$id=$_POST['selected_productsO'];

if ($selectedProductsO != 0){
foreach ($selectedProductsO as $productId) {
    $id = $productId;
}
}

$info->execute();
$result = $info->fetch(PDO::FETCH_ASSOC);

$totalSum += $result['price']
?>
            <input  type="text" value="Оперативка <?= $result['nameP'] ?>" readonly><br />
<?php
require_once 'conf.php';

$info = $dbh->prepare("
  SELECT * FROM motherboard where productId=:id");
$info->bindParam(':id', $id);
$id=$_POST['selected_productsM'];

if ($selectedProductsM != 0){
foreach ($selectedProductsM as $productId) {
    $id = $productId;
}
}

$info->execute();
$result = $info->fetch(PDO::FETCH_ASSOC);

$totalSum += $result['price']
?>
            <input  type="text" value="Мат плата<?= $result['nameP'] ?>" readonly><br />
<?php
require_once 'conf.php';

$info = $dbh->prepare("
  SELECT * FROM hdd where productId=:id");
$info->bindParam(':id', $id);
$id=$_POST['selected_productsH'];

if ($selectedProductsH != 0){
foreach ($selectedProductsH as $productId) {
    $id = $productId;
}
}

$info->execute();
$result = $info->fetch(PDO::FETCH_ASSOC);

$totalSum += $result['price']
?>
            <input  type="text" value="Жесткий диск <?= $result['nameP'] ?>" readonly><br />
<?php
require_once 'conf.php';

$info = $dbh->prepare("
  SELECT * FROM blocpit where productId=:id");
$info->bindParam(':id', $id);
$id=$_POST['selected_productsB'];

if ($selectedProductsB != 0){
foreach ($selectedProductsB as $productId) {
    $id = $productId;
}
}

$info->execute();
$result = $info->fetch(PDO::FETCH_ASSOC);

$totalSum += $result['price']
?>
            <input  type="text" value="Блок питания <?= $result['nameP'] ?>" readonly><br />
<?php
require_once 'conf.php';

$info = $dbh->prepare("
  SELECT * FROM corpus where productId=:id");
$info->bindParam(':id', $id);
$id=$_POST['selected_productsK'];

if ($selectedProductsK != 0){
foreach ($selectedProductsK as $productId) {
    $id = $productId;
}
}
$info->execute();
$result = $info->fetch(PDO::FETCH_ASSOC);

$totalSum += $result['price']
?>
            <?php  
            if ($selectedProductsK == null) 
            { 
                echo'<input  type="text" value="Корпус" readonly><br />';
            } 
            else
            {
                $result['nameP']; 
                echo'<input  type="text" value="' . $result['nameP'] . '" readonly><br />';
            } ?></div>
          </div>

          <div class="blockquote2">
          <label><span >Введите название сборки:</span><br />
          <div class="blockquo"><input type="text" name="product" pattern="^[А-Яа-яЁё\s]+$" placeholder="название" required /></label><p></p></div>
          </div>
        
          <div class="blockquote2">
          <label><span > Цена:</span><br />
          <div class="blockquo"><input type="number" name="price" value="<?= $totalSum ?>" readonly></label><p></p></div>
          </div>
          

          <div class="blockquote2">
          <label><span > Номер вашего заказа</span><br />
          <div class="blockquo"><input type="text" name="num"  value='<?php $num = rand(); echo ($num) ?>'readonly></label><p></p></div>
          </div>
          
          <div class="blockquote3">
          <input type="submit" name="button_name" value="Купить">
          <?php
          $text = 'Заказ пока не оформлен';
          if(isset($_POST['button_name'])){
            $text = 'Заказ оформлен';
          }
          ?>
          </div>
          
          <div class="blockquote2">
          <label><span > Статус</span><br />
          <div class="blockquo"><input type = "text" name = "text" value = "<?php print $text; ?>" readonly/></label><p></p></div>
          </div>
          

          </form>
          </div>
        

</body>
</html>

<?php

require_once 'conf.php';

$new_order = $dbh->prepare("INSERT INTO ordeer (name, email, delivery, sum, num, nameP) VALUES(:name, :email, :delivery, :sum, :num, :nameP)");

$new_order->bindParam(':name', $name);
$new_order->bindParam(':email', $email);
$new_order->bindParam(':delivery', $delivery);
$new_order->bindParam(':sum', $sum);
$new_order->bindParam(':num', $num);
$new_order->bindParam(':nameP', $nameP);

$name = $_POST['name'];
$email = $_POST['email'];
$delivery = $_POST['delivery'];
$sum = $_POST['price'];
$nameP = $_POST['product'];
$num = $_POST['num'];

$orderQuery->execute();
$orderQuery = null;
$new_order->execute();
$new_order = null;
$dbh = null;

?>