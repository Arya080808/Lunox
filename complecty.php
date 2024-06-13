<?php
require_once 'conf.php';


$info = $dbh->query("SELECT * FROM videocart");
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
     <form action="cartVideocart.php" method="POST">
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
        if ($data['type']=="видеокарта") {
          if($data['availability']=="0"){
            echo '<div class="product">';
            echo '<div class="image">';
            echo '<img src=' . $data['img'] . ' alt="photo"></div>';
            echo '<div class="info">';
            echo '<h3>' . $data['nameP'] . '</h3>';
            echo '<ul class="charact">';
            echo '<li>Штатная частота<br>' . $data['nom_frequ'] . '</li><br>';
            echo '<li>Кол-во процессоров<br>' . $data['num_process'] . '</li><br>';
            echo '<li>Макс пропускная способность<br>' . $data['Max_throug'] . '</li><br>';
            echo '<div class="info-price">';
            echo '<span class="price">' . $data['price'] . '₽</span>';
            echo '<input type="hidden" value=' . $data['productId'] . '>';
            echo "<a href='needVideocart.php?id=" . $data['productId'] . "'>Запросить</a></div></div></div>";
          }

          if($data['availability']>"0"){
            echo '<div class="product">';
            echo '<div class="image">';
            echo '<img src=' . $data['img'] . ' alt="photo"></div>';
            echo '<div class="info">';
            echo '<h3>' . $data['nameP'] . '</h3>';
            echo '<ul class="charact">';
            echo '<li>Штатная частота<br>' . $data['nom_frequ'] . '</li><br>';
            echo '<li>Кол-во процессоров<br>' . $data['num_process'] . '</li><br>';
            echo '<li>Макс пропускная способность<br>' . $data['Max_throug'] . '</li><br>';
            echo '<div class="info-price">';
            echo '<span class="price">' . $data['price'] . '₽</span>';
            echo '<input type="hidden" value=' . $data['productId'] . '>';
            
            echo "<a class='buttoncart' 
              data-sb-id-or-vendor-code='" . $data['productId'] . "'
              data-sb-product-name='" . $data['nameP'] . "'
              data-sb-product-price='" . $data['price'] . "'
              data-sb-product-quantity='" . $data['availability'] . "'
              data-sb-product-img='" . $data['img'] . "' href='#'>В корзину</a>";
            echo "<a href='cartVideocart.php?id=" . $data['productId'] . "'>Купить</a></div></div></div>";
          }
        }; 
      }?></form>

      <form action="cartProcessor.php" method="POST">
      <?php 
      require_once 'conf.php';
      $info = $dbh->query("SELECT * FROM processor");

      foreach ($info as $data){
        if ($data['type']=="процессор") {

        if($data['availability']=="0"){
        echo '<div class="product">';
        echo '<div class="image">';
        echo '<img src=' . $data['img'] . ' alt="photo"></div>';
        echo '<div class="info">';
        echo '<h3>' . $data['nameP'] . '</h3>';
        echo '<ul class="charact">';
        echo '<li>Число ядер<br>' . $data['numb_cores'] . '</li><br>';
        echo '<li>Число потоков<br>' . $data['numb_thread'] . '</li><br>';
        echo '<li>Частота процессора<br>' . $data['frequency'] . '</li><br>';
        echo '<div class="info-price">';
        echo '<span class="price">' . $data['price'] . '₽</span>';
        echo '<input type="hidden" value=' . $data['productId'] . '>';
        echo "<a href='needProcessor.php?id=" . $data['productId'] . "'>Запросить</a></div></div></div>";
        }

        if($data['availability']>"0"){
        echo '<div class="product">';
        echo '<div class="image">';
        echo '<img src=' . $data['img'] . ' alt="photo"></div>';
        echo '<div class="info">';
        echo '<h3>' . $data['nameP'] . '</h3>';
        echo '<ul class="charact">';
        echo '<li>Число ядер<br>' . $data['numb_cores'] . '</li><br>';
        echo '<li>Число потоков<br>' . $data['numb_thread'] . '</li><br>';
        echo '<li>Частота процессора<br>' . $data['frequency'] . '</li><br>';
        echo '<div class="info-price">';
        echo '<span class="price">' . $data['price'] . '₽</span>';
        echo '<input type="hidden" value=' . $data['productId'] . '>';
        echo "<a href='cartProcessor.php?id=" . $data['productId'] . "'>Купить</a></div></div></div>";
        }
        };

      }?></form>

      <form action="cartOperativ.php" method="POST">
      <?php 
      require_once 'conf.php';
      $info = $dbh->query("SELECT * FROM operativ");

      foreach ($info as $data){
        if ($data['type']=="оперативка") {

        if($data['availability']=="0"){
        echo '<div class="product">';
        echo '<div class="image">';
        echo '<img src=' . $data['img'] . ' alt="photo"></div>';
        echo '<div class="info">';
        echo '<h3>' . $data['nameP'] . '</h3>';
        echo '<ul class="charact">';
        echo '<li>Тип памяти<br>' . $data['memory_type'] . '</li><br>';
        echo '<li>Объем 1 модуля<br>' . $data['vol_one_mod'] . '</li><br>';
        echo '<li>Тактовая частота<br>' . $data['clock_frequen'] . '</li><br>';
        echo '<div class="info-price">';
        echo '<span class="price">' . $data['price'] . '₽</span>';
        echo '<input type="hidden" value=' . $data['productId'] . '>';
        echo "<a href='needOperativ.php?id=" . $data['productId'] . "'>Запросить</a></div></div></div>";
        }

        if($data['availability']>"0"){
        echo '<div class="product">';
        echo '<div class="image">';
        echo '<img src=' . $data['img'] . ' alt="photo"></div>';
        echo '<div class="info">';
        echo '<h3>' . $data['nameP'] . '</h3>';
        echo '<ul class="charact">';
        echo '<li>Тип памяти<br>' . $data['memory_type'] . '</li><br>';
        echo '<li>Объем 1 модуля<br>' . $data['vol_one_mod'] . '</li><br>';
        echo '<li>Тактовая частота<br>' . $data['clock_frequen'] . '</li><br>';
        echo '<div class="info-price">';
        echo '<span class="price">' . $data['price'] . '₽</span>';
        echo '<input type="hidden" value=' . $data['productId'] . '>';
        echo "<a href='cartOperativ.php?id=" . $data['productId'] . "'>Купить</a></div></div></div>";
        }
        };

      }?></form>

      <form action="cartMotherboard.php" method="POST">
      <?php 
      require_once 'conf.php';
      $info = $dbh->query("SELECT * FROM motherboard");

      foreach ($info as $data){
        if ($data['type']=="материнка") {

        if($data['availability']=="0"){
        echo '<div class="product">';
        echo '<div class="image">';
        echo '<img src=' . $data['img'] . ' alt="photo"></div>';
        echo '<div class="info">';
        echo '<h3>' . $data['nameP'] . '</h3>';
        echo '<ul class="charact">';
        echo '<li>Тип поддерж памяти<br>' . $data['memory_type'] . '</li><br>';
        echo '<li>Макс частота памяти<br>' . $data['max_frequency'] . '</li><br>';
        echo '<li>Кол-во портов SATA<br>' . $data['sata_ports'] . '</li><br>';
        echo '<div class="info-price">';
        echo '<span class="price">' . $data['price'] . '₽</span>';
        echo '<input type="hidden" value=' . $data['productId'] . '>';
        echo "<a href='needMotherboard.php?id=" . $data['productId'] . "'>Запросить</a></div></div></div>";
        }

        if($data['availability']>"0"){
        echo '<div class="product">';
        echo '<div class="image">';
        echo '<img src=' . $data['img'] . ' alt="photo"></div>';
        echo '<div class="info">';
        echo '<h3>' . $data['nameP'] . '</h3>';
        echo '<ul class="charact">';
        echo '<li>Тип поддерж памяти<br>' . $data['memory_type'] . '</li><br>';
        echo '<li>Макс частота памяти<br>' . $data['max_frequency'] . '</li><br>';
        echo '<li>Кол-во портов SATA<br>' . $data['sata_ports'] . '</li><br>';
        echo '<div class="info-price">';
        echo '<span class="price">' . $data['price'] . '₽</span>';
        echo '<input type="hidden" value=' . $data['productId'] . '>';
        echo "<a href='cartMotherboard.php?id=" . $data['productId'] . "'>Купить</a></div></div></div>";
        }
        };

      }?></form>

      <form action="cartHdd.php" method="POST">
      <?php 
      require_once 'conf.php';
      $info = $dbh->query("SELECT * FROM hdd");

      foreach ($info as $data){
        if ($data['type']=="жестдиск") {

        if($data['availability']=="0"){
        echo '<div class="product">';
        echo '<div class="image">';
        echo '<img src=' . $data['img'] . ' alt="photo"></div>';
        echo '<div class="info">';
        echo '<h3>' . $data['nameP'] . '</h3>';
        echo '<ul class="charact">';
        echo '<li>Обьем HDD<br>' . $data['capacity'] . '</li><br>';
        echo '<li>Объем кэш-памяти<br>' . $data['cache_size'] . '</li><br>';
        echo '<li>Интерфейс<br>' . $data['interface'] . '</li><br>';
        echo '<div class="info-price">';
        echo '<span class="price">' . $data['price'] . '₽</span>';
        echo '<input type="hidden" value=' . $data['productId'] . '>';
        echo "<a href='needHdd.php?id=" . $data['productId'] . "'>Запросить</a></div></div></div>";
        }

        if($data['availability']>"0"){
        echo '<div class="product">';
        echo '<div class="image">';
        echo '<img src=' . $data['img'] . ' alt="photo"></div>';
        echo '<div class="info">';
        echo '<h3>' . $data['nameP'] . '</h3>';
        echo '<ul class="charact">';
        echo '<li>Обьем HDD<br>' . $data['capacity'] . '</li><br>';
        echo '<li>Объем кэш-памяти<br>' . $data['cache_size'] . '</li><br>';
        echo '<li>Интерфейс<br>' . $data['interface'] . '</li><br>';
        echo '<div class="info-price">';
        echo '<span class="price">' . $data['price'] . '₽</span>';
        echo '<input type="hidden" value=' . $data['productId'] . '>';
        echo "<a href='cartHdd.php?id=" . $data['productId'] . "'>Купить</a></div></div></div>";
        }
        };

      }?></form>

      <form action="cartCorpus.php" method="POST">
      <?php 
      require_once 'conf.php';
      $info = $dbh->query("SELECT * FROM corpus");

      foreach ($info as $data){
        if ($data['type']=="корпус") {

        if($data['availability']=="0"){
        echo '<div class="product">';
        echo '<div class="image">';
        echo '<img src=' . $data['img'] . ' alt="photo"></div>';
        echo '<div class="info">';
        echo '<h3>' . $data['nameP'] . '</h3>';
        echo '<ul class="charact">';
        echo '<li>Типоразмер<br>' . $data['standard_size'] . '</li><br>';
        echo '<li>Длина/Ширина/Высота<br>' . $data['len_Wid_Hei'] . '</li><br>';
        echo '<li>Вентиляторы в комплекте<br>' . $data['fans_includ'] . '</li><br>';
        echo '<div class="info-price">';
        echo '<span class="price">' . $data['price'] . '₽</span>';
        echo '<input type="hidden" value=' . $data['productId'] . '>';
        echo "<a href='needCorpus.php?id=" . $data['productId'] . "'>Запросить</a></div></div></div>";
        }

        if($data['availability']>"0"){
        echo '<div class="product">';
        echo '<div class="image">';
        echo '<img src=' . $data['img'] . ' alt="photo"></div>';
        echo '<div class="info">';
        echo '<h3>' . $data['nameP'] . '</h3>';
        echo '<ul class="charact">';
        echo '<li>Типоразмер<br>' . $data['standard_size'] . '</li><br>';
        echo '<li>Длина/Ширина/Высота<br>' . $data['len_Wid_Hei'] . '</li><br>';
        echo '<li>Вентиляторы в комплекте<br>' . $data['fans_includ'] . '</li><br>';
        echo '<div class="info-price">';
        echo '<span class="price">' . $data['price'] . '₽</span>';
        echo '<input type="hidden" value=' . $data['productId'] . '>';
        echo "<a href='cartCorpus.php?id=" . $data['productId'] . "'>Купить</a></div></div></div>";
        }
        };

      }?></form>

      <form action="cartBlocpit.php" method="POST">
      <?php 
      require_once 'conf.php';
      $info = $dbh->query("SELECT * FROM blocpit");

      foreach ($info as $data){
        if ($data['type']=="блокпит") {

        if($data['availability']=="0"){
        echo '<div class="product">';
        echo '<div class="image">';
        echo '<img src=' . $data['img'] . ' alt="photo"></div>';
        echo '<div class="info">';
        echo '<h3>' . $data['nameP'] . '</h3>';
        echo '<ul class="charact">';
        echo '<li>Мощность<br>' . $data['power'] . '</li><br>';
        echo '<li>Форм фактор<br>' . $data['form_factor'] . '</li><br>';
        echo '<li>Диапазон входного напряжения<br>' . $data['voltage_range'] . '</li><br>';
        echo '<div class="info-price">';
        echo '<span class="price">' . $data['price'] . '₽</span>';
        echo '<input type="hidden" value=' . $data['productId'] . '>';
        echo "<a href='needBlocpit.php?id=" . $data['  productId'] . "'>Запросить</a></div></div></div>";
        }

        if($data['availability']>"0"){
        echo '<div class="product">';
        echo '<div class="image">';
        echo '<img src=' . $data['img'] . ' alt="photo"></div>';
        echo '<div class="info">';
        echo '<h3>' . $data['nameP'] . '</h3>';
        echo '<ul class="charact">';
        echo '<li>Мощность<br>' . $data['power'] . '</li><br>';
        echo '<li>Форм фактор<br>' . $data['form_factor'] . '</li><br>';
        echo '<li>Диапазон входного напряжения<br>' . $data['voltage_range'] . '</li><br>';
        echo '<div class="info-price">';
        echo '<span class="price">' . $data['price'] . '₽</span>';
        echo '<input type="hidden" value=' . $data['productId'] . '>';
        echo "<a href='cartBlocpit.php?id=" . $data['  productId'] . "'>Купить</a></div></div></div>";
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