<?php
require_once 'conf.php';


$info = $dbh->query("SELECT * FROM complete");
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

   <div class="container">
     <form action="cart.php" method="POST">
     <div class="row"> 

      <div class="vstavka">
        <img src="vstavka.jpg" alt="photo">
      </div>
      <div class="comp">

        <div class="product">
          <div class="image"><a href="homeConfig.php" target = "katalog"><img src="home.jpg" alt="photo"></div>
        <div class="info"><h1><a href="homeConfig.php" target = "katalog">Собрать Домашни компьютер</a></h1></div>
        </div>
        
        <div class="product">
          <div class="image"><a href="mediumConfig.php" target = "katalog"><img src="medium.jpg" alt="photo"></div>
        <div class="info"><h1><a href="mediumConfig.php" target = "katalog">Собрать Медиум компьютер</a></h1></div>
        </div>

        <div class="product">
          <div class="image"><a href="gameConfig.php" target = "katalog"><img src="game.jpg" alt="photo"></div>
        <div class="info"><h1><a href="gameConfig.php" target = "katalog">Собрать Игровой компьютер</a></h1></div>
        </div>

        <div class="product">
          <div class="image"><a href="superConfig.php" target = "katalog"><img src="super.jpg" alt="photo"></div>
        <div class="info"><h1><a href="superConfig.php" target = "katalog">Собрать Супер компьютер</a></h1></div>
        </div>
      </div>

      <p>.</p>
      <p>.</p>
      <p>.</p>
     </div>
   </div> 

</div>


</body>
</html> 

