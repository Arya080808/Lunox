<?php
require_once 'conf.php';


$info = $dbh->query("SELECT * FROM keyboard");
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
     <form action="cartKeyboard.php" method="POST">
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
        if ($data['type']=="клавиатура") {

        if($data['availability']=="0"){
        echo '<div class="product">';
        echo '<div class="image">';
        echo '<img src=' . $data['img'] . ' alt="photo"></div>';
        echo '<div class="info">';
        echo '<h3>' . $data['nameP'] . '</h3>';
        echo '<ul class="charact">';
        echo '<li>Тип клавиатуры<br>' . $data['mechanic'] . '</li><br>';
        echo '<li>Профиль кейкапов<br>' . $data['profil_keycap'] . '</li><br>';
        echo '<li>Тип переключателей<br>' . $data['switch_type'] . '</li><br>';
        echo '<li>Общее количество клавиш<br>' . $data['num_keys'] . '</li><br>';
        echo '<div class="info-price">';
        echo '<span class="price">' . $data['price'] . '₽</span>';
        echo '<input type="hidden" value=' . $data['id_keyboard'] . '>';
        echo "<a href='needKeyboard.php?id=" . $data['id_keyboard'] . "'>Запросить</a></div></div></div>";
        }

        if($data['availability']>"0"){
        echo '<div class="product">';
        echo '<div class="image">';
        echo '<img src=' . $data['img'] . ' alt="photo"></div>';
        echo '<div class="info">';
        echo '<h3>' . $data['nameP'] . '</h3>';
        echo '<ul class="charact">';
        echo '<li>Тип клавиатуры<br>' . $data['mechanic'] . '</li><br>';
        echo '<li>Профиль кейкапов<br>' . $data['profil_keycap'] . '</li><br>';
        echo '<li>Тип переключателей<br>' . $data['switch_type'] . '</li><br>';
        echo '<li>Общее количество клавиш<br>' . $data['num_keys'] . '</li><br>';
        echo '<div class="info-price">';
        echo '<span class="price">' . $data['price'] . '₽</span>';
        echo '<input type="hidden" value=' . $data['id_keyboard'] . '>';

        echo "<a class='buttoncart' 
              data-sb-id-or-vendor-code='" . $data['id_keyboard'] . "'
              data-sb-product-name='" . $data['nameP'] . "'
              data-sb-product-price='" . $data['price'] . "'
              data-sb-product-quantity='" . $data['availability'] . "'
              data-sb-product-img='" . $data['img'] . "' href='#'>В корзину</a>";
        echo "<a href='cartKeyboard.php?id=" . $data['id_keyboard'] . "'>Купить</a></div></div></div>";
        }
        }; 
      }?></form>

      <form action="cartHeadphone.php" method="POST">

      <?php 
      require_once 'conf.php';
      $info = $dbh->query("SELECT * FROM headphone");

      foreach ($info as $data){
        if ($data['type']=="наушники") {

        if($data['availability']=="0"){
        echo '<div class="product">';
        echo '<div class="image">';
        echo '<img src=' . $data['img'] . ' alt="photo"></div>';
        echo '<div class="info">';
        echo '<h3>' . $data['nameP'] . '</h3>';
        echo '<ul class="charact">';
        echo '<li>Микрофон<br>' . $data['microphone'] . '</li><br>';
        echo '<li>Чувствительность<br>' . $data['sensitivity'] . '</li><br>';
        echo '<li>Формат звуковой схемы<br>' . $data['scheme_format'] . '</li><br>';
        echo '<li>Подключение<br>' . $data['wired'] . '</li><br>';
        echo '<div class="info-price">';
        echo '<span class="price">' . $data['price'] . '₽</span>';
        echo '<input type="hidden" value=' . $data['id_headphone'] . '>';
        echo "<a href='needHeadphone.php?id=" . $data['id_headphone'] . "'>Запросить</a></div></div></div>";
        }

        if($data['availability']>"0"){
        echo '<div class="product">';
        echo '<div class="image">';
        echo '<img src=' . $data['img'] . ' alt="photo"></div>';
        echo '<div class="info">';
        echo '<h3>' . $data['nameP'] . '</h3>';
        echo '<ul class="charact">';
        echo '<li>Микрофон<br>' . $data['microphone'] . '</li><br>';
        echo '<li>Чувствительность<br>' . $data['sensitivity'] . '</li><br>';
        echo '<li>Формат звуковой схемы<br>' . $data['scheme_format'] . '</li><br>';
        echo '<li>Подключение<br>' . $data['wired'] . '</li><br>';
        echo '<div class="info-price">';
        echo '<span class="price">' . $data['price'] . '₽</span>';
        echo '<input type="hidden" value=' . $data['id_headphone'] . '>';
        echo "<a href='cartHeadphone.php?id=" . $data['id_headphone'] . "'>Купить</a></div></div></div>";
        }
        };

      }?></form>

      <form action="cartMouse.php" method="POST">

      <?php 
      require_once 'conf.php';
      $info = $dbh->query("SELECT * FROM mouse");

      foreach ($info as $data){
        if ($data['type']=="мышка") {

        if($data['availability']=="0"){
        echo '<div class="product">';
        echo '<div class="image">';
        echo '<img src=' . $data['img'] . ' alt="photo"></div>';
        echo '<div class="info">';
        echo '<h3>' . $data['nameP'] . '</h3>';
        echo '<ul class="charact">';
        echo '<li>Количество кнопок<br>' . $data['num_button'] . '</li><br>';
        echo '<li>dpi<br>' . $data['dpi'] . '</li><br>';
        echo '<li>Тип сенсора<br>' . $data['sensor_type'] . '</li><br>';
        echo '<li>Подключение<br>' . $data['wired'] . '</li><br>';
        echo '<div class="info-price">';
        echo '<span class="price">' . $data['price'] . '₽</span>';
        echo '<input type="hidden" value=' . $data['id_mouse'] . '>';
        echo "<a href='needMouse.php?id=" . $data['id_mouse'] . "'>Запросить</a></div></div></div>";
        }

        if($data['availability']>"0"){
        echo '<div class="product">';
        echo '<div class="image">';
        echo '<img src=' . $data['img'] . ' alt="photo"></div>';
        echo '<div class="info">';
        echo '<h3>' . $data['nameP'] . '</h3>';
        echo '<ul class="charact">';
        echo '<li>Количество кнопок<br>' . $data['num_button'] . '</li><br>';
        echo '<li>dpi<br>' . $data['dpi'] . '</li><br>';
        echo '<li>Тип сенсора<br>' . $data['sensor_type'] . '</li><br>';
        echo '<li>Подключение<br>' . $data['wired'] . '</li><br>';
        echo '<div class="info-price">';
        echo '<span class="price">' . $data['price'] . '₽</span>';
        echo '<input type="hidden" value=' . $data['id_mouse'] . '>';
        echo "<a href='cartMouse.php?id=" . $data['id_mouse'] . "'>Купить</a></div></div></div>";  
        }
        };

      }?></form>

      <form action="cartMonitor.php" method="POST">

      <?php 
      require_once 'conf.php';
      $info = $dbh->query("SELECT * FROM monitor");

      foreach ($info as $data){
        if ($data['type']=="монитор") {

        if($data['availability']=="0"){
        echo '<div class="product">';
        echo '<div class="image">';
        echo '<img src=' . $data['img'] . ' alt="photo"></div>';
        echo '<div class="info">';
        echo '<h3>' . $data['nameP'] . '</h3>';
        echo '<ul class="charact">';
        echo '<li>Диагональ/разрешение<br>' . $data['diagonal'] . '</li><br>';
        echo '<li>Частота обновления экрана<br>' . $data['scr_refre_rate'] . '</li><br>';
        echo '<li>Плотность пикселей<br>' . $data['pixel_density'] . '</li><br>';
        echo '<div class="info-price">';
        echo '<span class="price">' . $data['price'] . '₽</span>';
        echo '<input type="hidden" value=' . $data['id_product'] . '>';
        echo "<a href='needMonitor.php?id=" . $data['id_monitor'] . "'>Запросить</a></div></div></div>";
        }

        if($data['availability']>"0"){
        echo '<div class="product">';
        echo '<div class="image">';
        echo '<img src=' . $data['img'] . ' alt="photo"></div>';
        echo '<div class="info">';
        echo '<h3>' . $data['nameP'] . '</h3>';
        echo '<ul class="charact">';
        echo '<li>Диагональ/разрешение<br>' . $data['diagonal'] . '</li><br>';
        echo '<li>Частота обновления экрана<br>' . $data['scr_refre_rate'] . '</li><br>';
        echo '<li>Плотность пикселей<br>' . $data['pixel_density'] . '</li><br>';
        echo '<div class="info-price">';
        echo '<span class="price">' . $data['price'] . '₽</span>';
        echo '<input type="hidden" value=' . $data['id_product'] . '>';
        echo "<a href='cartMonitor.php?id=" . $data['id_monitor'] . "'>Купить</a></div></div></div>"; 
        }
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