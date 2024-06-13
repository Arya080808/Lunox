<?php
require_once 'conf.php';

$info = $dbh->prepare("
  SELECT * FROM operativ where productId=:id");
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
          <label><span > Емаил</span> <br />
          <div class="blockquo"><input type="text" name="email" pattern="^\S+@\S+\.\S+$" placeholder="Email" required /></label><p></p><br /></div>
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
          <label><span > Введите желаемое количество товара для запроса</span><br />
          <div class="blockquo"><input type="text" name="quantity" pattern="[0-9]" placeholder="Количество" required/></label><p></p></div>
          </div>
          
          
          <div class="blockquote3">
          <input type="submit" name="button_name" value="Оформить">  
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

$new_order = $dbh->prepare("INSERT INTO request (nameR, email, sum, nameP, quantity) VALUES(:nameR, :email, :sum, :nameP, :quantity)");

$new_order->bindParam(':nameR', $nameR);
$new_order->bindParam(':email', $email);
$new_order->bindParam(':sum', $sum);
$new_order->bindParam(':nameP', $nameP);
$new_order->bindParam(':quantity', $quantity);

$nameR = $_POST['name'];
$email = $_POST['email'];
$sum = $_POST['price'];
$nameP = $_POST['product'];
$quantity = $_POST['quantity'];

$new_order->execute();
$new_order = null;
$dbh = null;

?>