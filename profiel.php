<?php
    session_start();
    spl_autoload_register(function ($class){
        include_once ("classes/".$class.".class.php");
    });

    if (isset($_SESSION['userID'])){
        $userID = $_SESSION['userID'];
        $user = new User();
        $user->getUserData($userID);
        echo "test";
    }else{
        echo "oops fout";
        //header('Location: login.php');
    }



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>

    </header>
    <main>
        <h2>dit is het account van <?php echo $user->getEmail();?></h2>
    </main>
    <footer>

    </footer>
</body>
</html>
// profiel aanpassen zie feature 4
// foto + naam + username weergeven



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IMDterest</title>
    <link rel="stylesheet" href="css/style_homepage.css">
</head>
<body>
   
    <header>
       <a id="logo" href="homepage.php"><h1>IMDTEREST</h1></a>
       <a href="homepage.php"><button id ="buttonhomepage">HOMEPAGE</button></a>
       <a href="profiel.php"><button id ="buttonprofiel">PROFIEL</button></a>
<a href="logout.php"><button id ="buttonuitlog">UITLOGGEN</button></a>
</header>

<div id="achtergrond">
   
   <div id="bewerk">
   <h1>Profiel bewerken</h1>
  </div>
  
        <form method="post"> 
    Username: <input type="text" name="nickname"><br />
    Password: <input type="password" name="password"><br />
    <input type="submit" value="Submit">
</form>
  

    
    </div>
</body>
</html>


