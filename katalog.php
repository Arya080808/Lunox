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
     <form action="cartKomputer.php" method="POST">
     <div class="row"> 

      <div class="vstavka">
        <img src="vstavka.jpg" alt="photo">
      </div>

      <div class="buscet">
        <div class="info">
          <h3>Корзина</h3>
        </div>
      </div>

      <?php foreach ($info as $data){
        if ($data['type']=="компьютер") {
          $id=$row["id_product"];
          $quantity = '1';
        echo '<div class="product">';
        echo '<div class="image">';
        echo "<a href='productCard.php?id=" . $data['id_product'] . "'>";
        echo '<img src=' . $data['img'] . ' alt="photo" ></div>';
        echo '<div class="info">';
        echo '<h3>' . $data['nameP'] . '</h3>';
        echo '<ul class="charact">';
        echo '<li>Видеокарта<br>' . $data['videocart'] . '</li><br>';
        echo '<li>Оперативная память<br>' . $data['operativ'] . '</li><br>';
        echo '<li>Процессор<br>' . $data['processor'] . '</li><br>';
        echo '<li>Материнская плата<br>' . $data['materinca'] . '</li><br>';
        echo '<li>Блок питания<br>' . $data['blockpit'] . '</li><br>';
        echo '<li>Корпус<br>' . $data['corpus'] . '</li><br>';
        echo '<li>Цвет<br>' . $data['color'] . '</li><br></ul>';
        echo '<div class="info-price">';
        echo '<span class="price">' . $data['price'] . '₽</span>';
        echo '<input type="hidden" value=' . $data['id_product'] . '>';

        echo '<div class="product__quantity"></div>';
        

        echo "<a class='buttoncart' 
              data-sb-id-or-vendor-code='" . $data['id_product'] . "'
              data-sb-product-name='" . $data['nameP'] . "'
              data-sb-product-price='" . $data['price'] . "'
              data-sb-product-quantity='1'
              data-sb-product-img='" . $data['img'] . "' href='#'>В корзину</a>";
        echo "<a class='buyb' href='cartKomputer.php?id=" . $data['id_product'] . "'>Купить</a></form></div></div></div>";
        }; 
      }?>


      <form action="cartLaptop.php" method="POST">

      <?php 
      require_once 'conf.php';
      $info = $dbh->query("SELECT * FROM laptop");

      foreach ($info as $data){
        if ($data['type']=="ноутбук") {
        echo '<div class="product">';
        echo '<div class="image">';
        echo '<img src=' . $data['img'] . ' alt="photo"></div>';
        echo '<div class="info">';
        echo '<h3>' . $data['nameP'] . '</h3>';
        echo '<ul class="charact">';
        echo '<li>Видеокарта<br>' . $data['videocart'] . '</li><br>';
        echo '<li>Оперативная память<br>' . $data['operativ'] . '</li><br>';
        echo '<li>Процессор<br>' . $data['processor'] . '</li><br>';
        echo '<li>Число ядер<br>' . $data['num_cores'] . '</li><br>';
        echo '<li>SSD накопитель<br>' . $data['ssd'] . '</li><br>';
        echo '<li>Дисплей и Гц<br>' . $data['diagerc'] . '</li><br>';
        echo '<li>Цвет<br>' . $data['color'] . '</li><br></ul>';
        echo '<div class="info-price">';
        echo '<span class="price">' . $data['price'] . '₽</span>';
        echo '<input type="hidden" value=' . $data['id_product'] . '>';
        echo "<a href='index.php?id=" . $data['id_laptop'] . "'>Add to cart</a>";
        echo "<a href='cartLaptop.php?id=" . $data['id_laptop'] . "'>Купить</a></div></div></div>";
        };

      }?>
      
     </div>
   </div> 

</div>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<link rel="stylesheet" href="smartbasket/css/smartbasket.min.css">

<div class="smart-basket__wrapper"></div>

<script src="./smartbasket/js/smartbasket.min.js"></script>

  <script>
    $(function () {
      $('.smart-basket__wrapper').smbasket({
        productElement: 'product',
        buttonAddToBasket: 'buttoncart',
        productPrice: 'product__price-number',
        productSize: 'product__size-element',
        
        productQuantityWrapper: 'product__quantity',
        smartBasketMinArea: 'buscet',
        countryCode: '+7',
        smartBasketCurrency: '₽',
        smartBasketMinIconPath: './smartbasket/img/shopping-basket-wight.svg',

        agreement: {
          isRequired: true,
          isChecked: true,
          isLink: 'https://artstranger.ru/privacy.html',
        },
        nameIsRequired: false,
      });
    });
  </script>
</body>
</html> 