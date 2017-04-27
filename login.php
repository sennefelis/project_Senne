<?php
session_start();
spl_autoload_register(function ($class){
    include_once ("classes/".$class.".class.php");
});


if(!empty($_POST)){



    $email = $_POST["email"];
    $password = $_POST["password"];


    
    $user = new User();
    $user->setEmail($email);
    $user = $user->getByEmail();
        if(password_verify($password, $user['password'])){
            $_SESSION['email'] = $email;
            header('Location: homepage.php');
        }
        else
        {
            header('Location: login.php');
        }

}



?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

 <header>
     <nav>
       <ul class="login"><a href="registratie.php">Registreren</a></ul>
   </nav>
 </header>
  
   <div class="box">
    <form class="form-group" action="" method="post">
            
            <!--<legend>Pinterst</legend>-->
            <div>
                <label for="email">Email</label>
                <input type="email" required name="email" id="password">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" required name="password" id="password">
            </div>
        
        
        <button class="btn" type="submit" >Login</button>
        
        <div class="clearfix"></div>
        
    </form>
    </div>

    
</body>
</html>
