<?php

session_start();
    $username=$_SESSION["username"];
    

    
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="AboutUstyle.css">
</head>
<body>

  <header>
    <a class="logo-box" href="Home Page.php">
        <img src="Img/logo.png" class="logo">
        <h1>Filma-tix</h1>
    </a>
    <nav>
    <a  href="Home Page.php">
                <li>Home</li>
            </a>
            <a href="About Us.php">
                <li style="margin-right:20px;">About Us</li>
            </a>
            <div>
                <?php
                    echo"<p> <font color=aqua font-size: 150%;> $username </font></p>"
                ?>
            </div>
            <a href="../Login2.php">
                <li style="color:red;">Log Out</li>
            </a>
    </nav>
  </header>


<div class="about-section">
  <h1>Unlimited movies, TV shows, and more. Watch anywhere. Cancel anytime.</h1>
  <p>At Filma-tix, we want to entertain the world. Whatever your taste, and no matter where you live, we give you access to best-in-class TV shows, movies and documentaries. Our members control what they want to watch, when they want it, with no ads, in one simple subscription.</p>
  <p>Ready to watch? Enter your email to create or restart your membership.  </p>
</div>

<h2 align="center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="box">
      <img src="Img/nazmul.jpeg" style="width:100%">
      <div class="container">
        <h2>Nazmul Chowdhury</h2>
        <p class="title">CEO & Founder</p>
        <p>nazmulchowdhury@gmail.com</p>
        <img src="Img/fb.png" class="Appfoto">
        <img src="Img/insta.png" class="Appfoto">
        <img src="Img/twitter.png" class="Appfoto">
      </div>
    </div>
  </div>

  <div class="column">
    <div class="box">
      <img src="Img/iasha.jpeg" style="width:100%">
      <div class="container">
        <h2>S.M.Iasha</h2>
        <p class="title">Art Director</p>
        <p>S.M.iasha@gmail.com</p>
        <img src="Img/fb.png" class="Appfoto">
        <img src="Img/insta.png" class="Appfoto">
        <img src="Img/twitter.png" class="Appfoto">
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="box">
      <img src="Img/foyes.jpg" style="width:100%">
      <div class="container">
        <h2>Foyes Hassan</h2>
        <p class="title">Designer</p>
        <p>foyeshassan@gmail.com</p>
        <img src="Img/fb.png" class="Appfoto">
        <img src="Img/insta.png" class="Appfoto">
        <img src="Img/twitter.png" class="Appfoto">
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="box">
      <img src="Img/foysal.png" style="width:70%">
      <div class="container">
        <h2>Shaban Vocrri</h2>
        <p class="title">Art Director</p>
        <p>ShabanVocrri06@gmail.com</p>
        <img src="Img/fb.png" class="Appfoto">
        <img src="Img/insta.png" class="Appfoto">
        <img src="Img/twitter.png" class="Appfoto">
      </div>
    </div>
  </div>
</div>
</body>
</html>