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
  <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
    
</head>

<body style="background-color: #636363;"> 
  <div class="row"> 
    <div class="col-3"></div>
    <div class="col-6" style="align-content: center; margin-top: 10%; color: white; ">
      <div class="entry"  >


          

          <div>
          <label for="exampleInputEmail1" class="form-label" font-size: 11pt>Вход</label>
          </div>

         <form action="" method="POST">

          <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Адрес электронной почты</label>
          <input type="email" required name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">Мы никогда не передадим ваш адрес электронной почты кому-либо еще.</div>
          </div>

          <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Пароль</label>
          <input type="password" required name="password" class="form-control" id="exampleInputPassword1">
         </div>
          

          <button type="submit" name="button_name" class="btn btn-dark">Войти</button><br /><br />




          <label><span ><a href="registration.php" style="color: white;">Еще нет аккаунта? Тогда, зарегиструруйся</a></span><br />
          

          <?php
          $text = 'Вход не выполнен';
          if(isset($_POST['button_name'])){
            $text = 'Добро пожаловать)';
          }
          ?>

<?php

$email = $_POST['email'];
$password = $_POST['password'];


$prep_query = $dbh->prepare("SELECT * FROM `users` WHERE `email` = :email");
$prep_query->execute(['email' => $email]);
$login_result = $prep_query->fetchAll();


if (count($login_result) == 1) {
  $user = $login_result[0];

  if ($password = $user['password']){

    session_start();
    $_SESSION['name'] = $user['name'];
    header("Location: profile.php");
  }

  else{
    echo "Неверный пароль.";
  }

}



?>
          </form>
          </div>
          <div class="col-3"></div>
    </div>
  </div>
        
        
<script src="Bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

</body>
</html> 
