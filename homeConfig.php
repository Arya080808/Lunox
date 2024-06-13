
<?php
require_once 'conf.php';


$info = $dbh->query("SELECT * FROM videocart");
?>



<DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible">
  <link rel="stylesheet" href="styleConfig.css" tepe="text/css" />
  <title>Lunox</title>
</head>

<body>

	<div class="info"><h2>Кастомизируйте свой ПК, подобрав желаемый корпус, процессор, графический адаптер и твердотельный накопитель</h2></div>
	
<div class="back">

	<div class="backk">
		<form action="cartSupConfig.php" method="post" class="config">
					
				
			<div class="video">
				<h3>Видеокарта:</h3><br>

				<div class="form-block">

				<?php foreach ($info as $data){
        if ($data['type']=="видеокарта") {
        	if ($data['category']=="D")
        	{
        		echo '<input type="radio" name="selected_productsV[]" value="' . $data['productId'] . '" checked>';
						echo '<label for="RX5700XT-8G">' . $data['nameP'] . '</label><br>';
						echo '<div class="product">';
        		echo '<div class="image">';
       		  echo '<img src=' . $data['img'] . ' alt="photo"></div>';
      		  echo '<div class="infoprod">';
     		    echo '<p>Штатная частота: ' . $data['nom_frequ'] . '</p><br>';
     		    echo '<p>Кол-во процессоров: ' . $data['num_process'] . '</p><br>';
     		    echo '<p>Макс пропускная способность: ' . $data['Max_throug'] . '</p><br>';
     		    echo '<div class="info-price">';
     		    echo '<span class="price">' . $data['price'] . '₽</span><br><br><br>';
        	}

        	if ($data['category']=="C")
        	{
        		echo '<input type="radio" name="selected_productsV[]" value="' . $data['productId'] . '" checked>';
						echo '<label for="RX5700XT-8G">' . $data['nameP'] . '</label><br>';
						echo '<div class="product">';
        		echo '<div class="image">';
       		  echo '<img src=' . $data['img'] . ' alt="photo"></div>';
      		  echo '<div class="infoprod">';
     		    echo '<p>Штатная частота: ' . $data['nom_frequ'] . '</p><br>';
     		    echo '<p>Кол-во процессоров: ' . $data['num_process'] . '</p><br>';
     		    echo '<p>Макс пропускная способность: ' . $data['Max_throug'] . '</p><br>';
     		    echo '<div class="info-price">';
     		    echo '<span class="price">' . $data['price'] . '₽</span><br><br><br>';
        	}
        }; 
      }?>
				</div>
			</div>

			<div class="video">
				<h3>Процессор:</h3><br>

				<div class="form-block">

					<?php 
      require_once 'conf.php';
      $info = $dbh->query("SELECT * FROM processor");

				foreach ($info as $data){
        if ($data['type']=="процессор") {
        	if ($data['category']=="C")
        	{
        		echo '<input type="radio" name="selected_productsP[]" value="' . $data['productId'] . '" checked>';
						echo '<label for="RX5700XT-8G">' . $data['nameP'] . '</label><br>';
						echo '<div class="product">';
        		echo '<div class="image">';
       		  echo '<img src=' . $data['img'] . ' alt="photo"></div>';
      		  echo '<div class="infoprod">';
     		    echo '<p>Число ядер: ' . $data['numb_cores'] . '</p><br>';
     		    echo '<p>Число потоков: ' . $data['numb_thread'] . '</p><br>';
     		    echo '<p>Частота процессора: ' . $data['frequency'] . '</p><br>';
     		    echo '<div class="info-price">';
     		    echo '<span class="price">' . $data['price'] . '₽</span><br><br><br>';
        	}
        }; 
      }?>
				</div>
			</div>


			<div class="video">
				<h3>Оперативная память:</h3><br>

				<div class="form-block">

					<?php 
      require_once 'conf.php';
      $info = $dbh->query("SELECT * FROM operativ");

				foreach ($info as $data){
        if ($data['type']=="оперативка") {
        	if ($data['category']=="B")
        	{
        		echo '<input type="radio" name="selected_productsO[]" value="' . $data['productId'] . '" checked>';
						echo '<label for="RX5700XT-8G">' . $data['nameP'] . '</label><br>';
						echo '<div class="product">';
        		echo '<div class="image">';
       		  echo '<img src=' . $data['img'] . ' alt="photo"></div>';
      		  echo '<div class="infoprod">';
     		    echo '<p>Тип памяти: ' . $data['memory_type'] . '</p><br>';
     		    echo '<p>Объем 1 модуля: ' . $data['vol_one_mod'] . '</p><br>';
     		    echo '<p>Тактовая частота: ' . $data['clock_frequen'] . '</p><br>';
     		    echo '<div class="info-price">';
     		    echo '<span class="price">' . $data['price'] . '₽</span><br><br><br>';
        	}
        }; 
      }?>
				</div>
			</div>

			<div class="video">
				<h3>Материнская плата:</h3><br>

				<div class="form-block">

					<?php 
      require_once 'conf.php';
      $info = $dbh->query("SELECT * FROM motherboard");

				foreach ($info as $data){
        if ($data['type']=="материнка") {
        	if ($data['category']=="B")
        	{
        		echo '<input type="radio" name="selected_productsM[]" value="' . $data['productId'] . '" checked>';
						echo '<label for="RX5700XT-8G">' . $data['nameP'] . '</label><br>';
						echo '<div class="product">';
        		echo '<div class="image">';
       		  echo '<img src=' . $data['img'] . ' alt="photo"></div>';
      		  echo '<div class="infoprod">';
     		    echo '<p>Тип поддерж памяти: ' . $data['memory_type'] . '</p><br>';
     		    echo '<p>Макс частота памяти: ' . $data['vol_one_mod'] . '</p><br>';
     		    echo '<p>Кол-во портов SATA: ' . $data['clock_frequen'] . '</p><br>';
     		    echo '<div class="info-price">';
     		    echo '<span class="price">' . $data['price'] . '₽</span><br><br><br>';
        	}
        }; 
      }?>
				</div>
			</div>


			<div class="video">
				<h3>Жесткий диск:</h3><br>

				<div class="form-block">

					<?php 
      require_once 'conf.php';
      $info = $dbh->query("SELECT * FROM hdd");

				foreach ($info as $data){
        if ($data['type']=="жестдиск") {
        	if ($data['category']=="B")
        	{
        		echo '<input type="radio" name="selected_productsH[]" value="' . $data['productId'] . '" checked>';
						echo '<label for="RX5700XT-8G">' . $data['nameP'] . '</label><br>';
						echo '<div class="product">';
        		echo '<div class="image">';
       		  echo '<img src=' . $data['img'] . ' alt="photo"></div>';
      		  echo '<div class="infoprod">';
     		    echo '<p>Обьем HDD: ' . $data['capacity'] . '</p><br>';
     		    echo '<p>Объем кэш-памяти: ' . $data['cache_size'] . '</p><br>';
     		    echo '<p>Интерфейс: ' . $data['interface'] . '</p><br>';
     		    echo '<div class="info-price">';
     		    echo '<span class="price">' . $data['price'] . '₽</span><br><br><br>';
        	}
        }; 
      }?>
				</div>
			</div>


			<div class="video">
				<h3>Блок питания:</h3><br>

				<div class="form-block">

					<?php 
      require_once 'conf.php';
      $info = $dbh->query("SELECT * FROM blocpit");

				foreach ($info as $data){
        if ($data['type']=="блокпит") {
        	if ($data['category']=="D")
        	{
        		echo '<input type="radio" name="selected_productsB[]" value="' . $data['productId'] . '" checked>';
						echo '<label for="RX5700XT-8G">' . $data['nameP'] . '</label><br>';
						echo '<div class="product">';
        		echo '<div class="image">';
       		  echo '<img src=' . $data['img'] . ' alt="photo"></div>';
      		  echo '<div class="infoprod">';
     		    echo '<p>Мощность: ' . $data['power'] . '</p><br>';
     		    echo '<p>Форм фактор: ' . $data['form_factor'] . '</p><br>';
     		    echo '<p>Диапазон входного напряжения: ' . $data['voltage_range'] . '</p><br>';
     		    echo '<div class="info-price">';
     		    echo '<span class="price">' . $data['price'] . '₽</span><br><br><br>';
        	}
        }; 
      }?>
				</div>
			</div>


			<div class="video">
				<h3>Корпус:</h3><br>

				<div class="form-block">

					<?php 
      require_once 'conf.php';
      $info = $dbh->query("SELECT * FROM corpus");

				foreach ($info as $data){
        if ($data['type']=="корпус") {
        	if ($data['category']=="B")
        	{
        		echo '<input type="radio" name="selected_productsK[]" value="' . $data['productId'] . '" checked>';
						echo '<label for="RX5700XT-8G">' . $data['nameP'] . '</label><br>';
						echo '<div class="product">';
        		echo '<div class="image">';
       		  echo '<img src=' . $data['img'] . ' alt="photo"></div>';
      		  echo '<div class="infoprod">';
     		    echo '<p>Типоразмер: ' . $data['standard_size'] . '</p><br>';
     		    echo '<p>Длина/Ширина/Высота: ' . $data['len_Wid_Hei'] . '</p><br>';
     		    echo '<p>Вентиляторы в комплекте: ' . $data['fans_includ'] . '</p><br>';
     		    echo '<div class="info-price">';
     		    echo '<span class="price">' . $data['price'] . '₽</span><br><br><br>';
        	}
        	if ($data['category']=="C")
        	{
        		echo '<input type="radio" name="selected_productsK[]" value="' . $data['productId'] . '" checked>';
						echo '<label for="RX5700XT-8G">' . $data['nameP'] . '</label><br>';
						echo '<div class="product">';
        		echo '<div class="image">';
       		  echo '<img src=' . $data['img'] . ' alt="photo"></div>';
      		  echo '<div class="infoprod">';
     		    echo '<p>Типоразмер: ' . $data['standard_size'] . '</p><br>';
     		    echo '<p>Длина/Ширина/Высота: ' . $data['len_Wid_Hei'] . '</p><br>';
     		    echo '<p>Вентиляторы в комплекте: ' . $data['fans_includ'] . '</p><br>';
     		    echo '<div class="info-price">';
     		    echo '<span class="price">' . $data['price'] . '₽</span><br><br><br>';
        	}
        }; 
      }?>
				</div>
			</div>

			<?php

		echo '<div class="la"><input type="submit" value="Оформить заказ"></div>';

		?>
			
		</form>
		
	</div>


</div>
	


</body>
</html>