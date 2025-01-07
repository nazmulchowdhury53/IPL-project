<?php

session_start();
    $username=$_SESSION["username"];

    
?>

<html>
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filma-tix</title>
    <link rel="stylesheet" href="FilmaStyle.css">

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

    <div class="container-1">
        <div class="box-1">
            <img class="img" src="Img/error.png">
            <h3>This Page isn't available at the moment. Please contact Filma-tix Support (filam-tixSupport@gmail.com) or check back again later!</h3>
        </div>
        <div class="box-2">
            <h3>We could't find the Movie you wanted to watch</h3>
            <p style="margin-top: 100px;">Movie Description:<br>Error: Can't find the Description for this Movie!</p>
        </div>
    </div>


    <h1 align="center" style="margin-top:50px;">Top 3 Most Watched Movies Last Month</h1>

<a href="Filmat.html">
<div class="slideshow-container">

    <div class="mySlides fade">
      <img src="Img/1.png" style="width:100%">
    </div>
    
    <div class="mySlides fade">
      <img src="Img/2.png" style="width:100%">
    </div>
    
    <div class="mySlides fade">
      <img src="Img/3.png" style="width:100%">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    
    </div>
    <br>
    
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
    </div>
</div> 
</a>




<div class="footer">
    <div class="footer-content">
        <div class="left">
            <h1>About Filma-tix</h1>
            <p>At Filma-tix, we want to entertain the world. Whatever your taste, and no matter where you live, we give you access to best-in-class TV shows, movies and documentaries.</p>

        </div>
        <div class="right">
            <div class="our-links">
                <h1>Our Links</h1>
                <div class="socials">
                    <div class="ico-box ico">
                        <img src="Img/facebook.png">
                    </div>
                    <div class="ico-box ico">
                        <img src="img/twitter.png">
                    </div>
                    <div class="ico-box ico">
                        <img src="img/instagram.png">
                    </div>
                </div>
            </div>

            <div class="about">
                <div class="l-about">
                    <p>Advertise</p>
                    <p>Support</p>
                    <p>Freelancer</p>
                    <p>Contact</p>
                </div>
                <div class="designby">

                    <p>Designed by: Ardi Osmani & Endrit Kryeziu</p> 
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
showSlides(slideIndex += n);
}

function currentSlide(n) {
showSlides(slideIndex = n);
}

function showSlides(n) {
var i;
var slides = document.getElementsByClassName("mySlides");
var dots = document.getElementsByClassName("dot");
if (n > slides.length) {slideIndex = 1}    
if (n < 1) {slideIndex = slides.length}
for (i = 0; i < slides.length; i++) {
  slides[i].style.display = "none";  
}
for (i = 0; i < dots.length; i++) {
  dots[i].className = dots[i].className.replace(" active", "");
}
slides[slideIndex-1].style.display = "block";  
dots[slideIndex-1].className += " active";
}
</script>

</body>
</html>