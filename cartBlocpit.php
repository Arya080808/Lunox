<?php
require_once 'conf.php';

$info = $dbh->prepare("
  SELECT * FROM blocpit where productId=:id");
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

          <div class="blockquote2">
          <h2><span >Оформление заказа:</h2> <br />
          </div>

         <form action="" method="POST">

          <div class="blockquote2">
          <label><span > ФИО:</span> <br />
          <div class="blockquo"><input type="text" name="name" pattern="^[А-Яа-яЁё\s]+$" placeholder="ФИО" required /></label><p></p></div>
          </div>
          
          <div class="blockquote2">
          <label><span > Номер телефона:</span><br />
          <div class="blockquo"><input type="text" name="phone" pattern="[0-9]{11}" placeholder="телефон, 11 цифр начиная с 8" required /></label><p></p><br /></div>
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
          <label><span > Выбранный товар:</span><br />
          <div class="blockquooo"><input  type="text" name="product" value="<?= $result['nameP'] ?>" readonly></label><p></p></div>
          </div>
          
        
          <div class="blockquote2">
          <label><span > Цена:</span><br />
          <div class="blockquo"><input type="number" name="price" value="<?= $result['price'] ?>" readonly></label><p></p></div>
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


$new_order = $dbh->prepare("INSERT INTO ordeer (name, phone, delivery, sum, num, nameP) VALUES(:name, :phone, :delivery, :sum, :num, :nameP)");

$new_order->bindParam(':name', $name);
$new_order->bindParam(':phone', $phone);
$new_order->bindParam(':delivery', $delivery);
$new_order->bindParam(':sum', $sum);
$new_order->bindParam(':num', $num);
$new_order->bindParam(':nameP', $nameP);

$name = $_POST['name'];
$phone = $_POST['phone'];
$delivery = $_POST['delivery'];
$sum = $_POST['price'];
$nameP = $_POST['product'];
$num = $_POST['num'];

$new_order->execute();
$new_order = null;
$dbh = null;

?>