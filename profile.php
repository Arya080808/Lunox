<?php

require_once 'conf.php';


$info = $dbh->query("SELECT * FROM ordeer");
$info2 = $dbh->query("SELECT * FROM users");
$info3 = $dbh->query("SELECT * FROM request");

session_start();
if (!isset($_SESSION['name'])){
  header("Location: entry.php");
}

?>

<DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible">
  <link rel="stylesheet" href="styleKatalog.css" tepe="text/css" />
  <title>Личный кабинет</title>
</head>
<body>

  <div class="blockquote2">

  <h1>Добро пожаловать, <?php echo $_SESSION['name']; ?>!</h1>


  <?php 
  foreach ($info2 as $data2){};

  echo '<div class="image">';
  echo '<img src=' . $data2['avatar'] . ' alt="photo"></div>';

    

      foreach ($info as $data){
        if ($data['email']==$data2['email']) {
        echo '<div class="info">';
        echo '<ul class="charact">';
        echo '<li>Заказы<br></li><br>';
        echo '<li<br>' . $data['num'] . '</li><br>';
        echo '<li>Доставка<br>' . $data['delivery'] . '</li><br>';
        echo '<li>Материнская плата<br></li><br>';
        echo '<li>Блок питания<br></li><br>';
        echo '<li>Корпус<br></li><br>';
        echo '<li>Цвет<br></li><br></ul></div>';
        }; 
    
      }

      foreach ($info3 as $data3){
        if ($data3['email']==$data2['email']) {
        echo '<div class="info">';
        echo '<ul class="charact">';
        echo '<li>Заказы<br></li><br>';
        echo '<li<br>' . $data3['nameP'] . '</li><br>';
        echo '<li>Доставка<br>' . $data3['quantity'] . '</li><br>';
        echo '<li>Материнская плата<br></li><br>';
        echo '<li>Блок питания<br></li><br>';
        echo '<li>Корпус<br></li><br>';
        echo '<li>Цвет<br></li><br></ul></div>';
        }; 
    
      }
      ?>

      <h1>Добро пожаловать, <?php echo $_SESSION['name']; ?>!</h1>

  <a href="entry.php">Выход</a>

</div>
</body>
</html>
