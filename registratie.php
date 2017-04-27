<?php

spl_autoload_register(function ($class){
    include_once ("classes/".$class.".class.php");
});

if(!empty($_POST)) {
    $errors=array();
// check of velden ingevuld zijn
    if(strlen($_POST["password"]) >=6){
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $options = [
            'cost' =>12,
        ];
        $password = password_hash($password, PASSWORD_DEFAULT, $options);

        $user = new User();
        $user->setEmail($email);
        $user->setFirstname($firstname);
        $user->setPassword($password);
        $controle = $user->getByEmail();
        if($controle){
            echo 'controle';
            //error, gebruiker met email bestaat al
            $errors[] = 'Er bestaat al een gebruiker met dit e-mailadres.';
        }else{
            $is_user_registered = $user->createUser();
            if ($is_user_registered) {
                session_start();
                $_SESSION['email'] = $email;
                header('Location: login.php');
            } else {
                header('Location: registratie.php');
            }
        }

    }
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <!--<link rel="stylesheet" href="resetcss.css">-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
   <header>
   <nav>
       <ul class="login"><a href="login.php">Login</a></ul>
   </nav>
   </header>
   
   
<div class="box">
    <h1>Registreren</h1>
    <div>
        <?php
        if(isset($errors)) {
            foreach ($errors as $error) {
                echo '<p>'.$error.'</p>';
            }
        }?>
    </div>
<form action="" method="post">

  <div class="form-group">
    <label for="firstname">First name</label>
    <input name="firstname" id="password" type="text" />
  </div>
   
  <div class="form-group">
    <label for="lastname">Last Name</label>
    <input name="lastname" id="password" type="text" />
  </div>
  
    <div class="form-group">
    <label for="username">Username</label>
    <input name="username" id="password" type="text" />
  </div>
  
  <div class="form-group">
    <label for="email">Email address</label>
    <input name="email" id="password" type="email" />
  </div>
  
  <div class="form-group">
    <label for="password">Password</label>
    <input name="password" id="password" type="password" />
  </div>
  
  
  <div class="form-group">
  <button class="btn" type="submit">Registreren</button>
    </div>
  <div class="clearfix"></div>
</form>
</div>

    
</body>
</html>
