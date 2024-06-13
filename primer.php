<?php
require_once 'conf.php';


//$result = $dbh->query("SELECT * FROM products WHERE productsid = 1");


//$file = json_decode(file_get_contents('file.json'));
//echo $file->product[0]->name;


//if ($result->num_rows > 0) {
   // while($row = $result->fetch_assoc()) {
        // Получаем JSON-данные из поля
       // $json_data = $row['characteristics'];

        // Декодируем JSON-данные в массив
       // $data = json_decode($json_data, true);

        // Выводим информацию о характеристиках товара
        //foreach ($data as $key => $value) {
       //     echo $key . ": " . $value . "<br>";
        //}
    //}
//}
//else {
  //  echo "0 results";
//}


$res = file_get_contents('s.json');
print_r($res);

?>
