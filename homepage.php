<?php
session_start();
spl_autoload_register(function ($class){
    include_once ("classes/".$class.".class.php");
});


$security = new Security();
if(!$security->isLoggedin()){
    header('Location: login.php');
}
?>

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
   
   <div id="titel">
   <h1>Wat zijn jouw interesses?</h1>
  </div>
  
  

    
    </div>

    
</body>

</html>
