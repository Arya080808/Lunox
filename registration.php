<?php
require_once 'conf.php';


?>
<DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible">
  <link rel="stylesheet" href="styleKatalog.css" tepe="text/css" />
  <title>Lunox</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body> 


          <div class="entry">


          

          <div>
          <label for="exampleInputEmail1" class="form-label" font-size: 11pt>Регистрация</label>
          </div>

         <form action="" method="POST">

          <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Логин</label>
          <input type="text" required name="name" class="form-control"  pattern="^[A-Za-zА-Яа-яЁё]+$">
          </div>

          <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Адрес электронной почты</label>
          <input type="email" required name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">Мы никогда не передадим ваш адрес электронной почты кому-либо еще.</div>
          </div>

          <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Пароль</label>
          <input type="password" required name="password" class="form-control" id="exampleInputPassword1">
         </div>

         <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Повтор пароля</label>
          <input type="password" required name="repeatpass" class="form-control" id="exampleInputPassword1">
         </div>
          

          <button type="submit" name="button_name" class="btn btn-primary">Зарегистрироваться</button><br /><br />




          
          
          
 
          <?php
          $text = 'Ожидание';
          if(isset($_POST['button_name'])){
            $text = 'Вы зарегистрированы!)';
          }
          ?>
          
          <div><?php print $text; ?>
          </div>
          

          </form>
          </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html> 
<?php


$new_user = $dbh->prepare("INSERT INTO users (name, email, password, avatar) VALUES(:name, :email, :password, :avatar)");


$avatar = 'avatars/noavatar.jpg';

$new_user->bindParam(':name', $name);
$new_user->bindParam(':email', $email);
$new_user->bindParam(':password', $password);
$new_user->bindParam(':avatar', $avatar);

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$repeatpass = $_POST['repeatpass'];



$new_user->execute();
$new_user = null;
$dbh = null;

?>