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
  <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>


<body style="background-color: #636363;"> 
  <div class="row"> 
    <div class="col-3"></div>
    <div class="col-6" style="align-content: center; margin-top: 8%; color: white; ">
      <div class="entry"  >


          

          <div>
          <label for="exampleInputEmail1" class="form-label" font-size: 11pt>Оформление заказа</label>
          </div>

         <form action="" method="POST">


          <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">ФИО</label>
          <input type="text" required pattern="^[А-Яа-яЁё\s]+$" placeholder="ФИО" class="form-control"  pattern="^[A-Za-zА-Яа-яЁё]+$">
          </div>

          <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Адрес электронной почты</label>
          <input type="email" required name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">Мы никогда не передадим ваш адрес электронной почты кому-либо еще.</div>
          </div>

          <div class="mb-3">
          <label><span > Способ доставки:</span><br />
          <div class="blockquo">
          <select name="delivery">
            <option value="Почтой">Почтой</option>
            <option value="СДЭК">СДЭК</option>
          </select><Br></label>
        </div><Br>


          
          <div style="display: inline;"><label><span >Выбранный товар:  </span><label /><label name="product"><?= $result['nameP'] ?></label><Br></div>

          
          <label><span >Цена:</span><br />
          <div ><label type="number" name="price" value="<?= $result['price'] ?>" readonly></label></label><Br><Br></div>



          <label><span >Номер вашего заказа</span><br />
          <div ><label type="text" name="num"  value='<?php $num = rand(); echo ($num) ?>'readonly></label></label><Br><Br></div>

          

          <button type="submit" name="button_name" class="btn btn-dark">Купить</button><br /><br />



          <?php
          $text = 'Заказ пока не оформлен';
          if(isset($_POST['button_name'])){
            $text = 'Заказ оформлен';
          }
          ?>
          </div>
          
          <label><span > Статус</span><br />
          <div class="blockquo"><label type = "text" name = "text" value = "<?php print $text; ?>" readonly/></label></label><p></p></div>
          </div>


          </form>
          </div>
          <div class="col-3"></div>
    </div>
  </div>
        
        
<script src="Bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

</body>
</html> 
<?php


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

$new_order->execute();
$new_order = null;
$dbh = null;

?>