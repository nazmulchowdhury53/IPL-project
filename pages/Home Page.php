<?php

session_start();
    $username=$_SESSION["username"];

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filma-tix</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <a class="logo-box" href="Home Page.html">
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
    

        <div class="search">
            <video autoplay muted loop id="myVideo">
                <source src="Img/video.mp4" type="video/mp4">
            </video>
          
            <div class="search-container">
                <form action="#">
                  <input type="text" placeholder="Search">
       
                </form>
                <div class="search-logo">
                  <button type="submit"><img src="img/search.png" alt=""></button>
                 
                </div>
              </div>
        </div>

        <div class="body-content-box">
            <div class="body-content">
                <h1 class="latest">Latest Movies</h1>
                <a href="ActionPage.php"><p>Action</p></a>
                <a href="HorrorPage.php"><p>Horror</p></a>
                <p>Comedy</p>
                <p>Drama</p>
                <a href="SeriesPage.php"><p>Series</p></a>
            </div>
        </div>
        <div class="pic-box">
<a href="Filmat.php">
    <div class="pics">
        <div class="four">
            <div class="four-pic">
                <div class="pic-square">
                    <img src="img/img-01.png" class="pic-img" id="demo1">
                    <div class="pic-info">
                        <p id="demo1">Avengers: Endgame</p>
                        <p>24 Oct 2020</p>
                    </div>
                </div>
                <div class="pic-square border">
                    <img src="img/img-02.png"class="pic-img">
                    <div class="pic-info">
                        <p>Godzilla: King of the Monsters</p>
                        <p>24 Oct 2020</p>
                    </div>
                </div>
                <div class="pic-square border">
                    <img src="img/img-03.png"class="pic-img">
                    <div class="pic-info">
                        <p>Inception</p>
                        <p>24 Oct 2020</p>
                    </div>
                </div>
                <div class="pic-square border">
                    <img src="img/img-04.png"class="pic-img">
                    <div class="pic-info">
                        <p>Joker</p>
                        <p>24 Oct 2020</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="four">
            <div class="four-pic">
                <div class="pic-square">
                    <img src="img/img-05.png"class="pic-img">
                    <div class="pic-info">
                        <p>Jurassic Park</p>
                        <p>24 Oct 2020</p>
                    </div>
                </div>
                <div class="pic-square border">
                    <img src="img/img-06.png"class="pic-img">
                    <div class="pic-info">
                        <p>Mad Max</p>
                        <p>24 Oct 2020</p>
                    </div>
                </div>
                <div class="pic-square border">
                    <img src="img/img-07.png"class="pic-img">
                    <div class="pic-info">
                        <p>Star Wars: The Rise of Skywalker (Episode IX)</p>
                        <p>24 Oct 2020</p>
                    </div>
                </div>
                <div class="pic-square border">
                    <img src="img/img-08.png"class="pic-img">
                    <div class="pic-info">
                        <p>Aliens</p>
                        <p>24 Oct 2020</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="four">
            <div class="four-pic">
                <div class="pic-square">
                    <img src="img/img-09.png"class="pic-img">
                    <div class="pic-info">
                        <p>Spectre</p>
                        <p>24 Oct 2020</p>
                    </div>
                </div>
                <div class="pic-square border">
                    <img src="img/img-10.png"class="pic-img">
                    <div class="pic-info">
                        <p>Godfather Part II</p>
                        <p>24 Oct 2020</p>
                    </div>
                </div>
                <div class="pic-square border">
                    <img src="img/img-11.png"class="pic-img">
                    <div class="pic-info">
                        <p>2001: A Space Odyssey</p>
                        <p>24 Oct 2020</p>
                    </div>
                </div>
                <div class="pic-square border">
                    <img src="img/img-12.png"class="pic-img">
                    <div class="pic-info">
                        <p>The Lord of the Rings: The Return of the King</p>
                        <p>24 Oct 2020</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="four">
            <div class="four-pic">
                <div class="pic-square">
                    <img src="img/img-13.png"class="pic-img">
                    <div class="pic-info">
                        <p>Star Wars</p>
                        <p>24 Oct 2020</p>
                    </div>
                </div>
                <div class="pic-square border">
                    <img src="img/img-14.png"class="pic-img">
                    <div class="pic-info">
                        <p>Watchmen</p>
                        <p>24 Oct 2020</p>
                    </div>
                </div>
                <div class="pic-square border">
                    <img src="img/img-15.png"class="pic-img">
                    <div class="pic-info">
                        <p>The Seventh Seal</p>
                        <p>24 Oct 2020</p>
                    </div>
                </div>
                <div class="pic-square border">
                    <img src="img/img-16.png"class="pic-img">
                    <div class="pic-info">
                        <p>The Angry Birds Movie</p>
                        <p>24 Oct 2020</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</a>

<div align="center">
    <button class="button-1">Previus Page</button>
    <a href="Home Page.php"><button class="button-1">1</button></a>
    <a href="Home Page2.php"><button class="button-1">2</button></a>
    <a href="Home Page2.php"><button class="button-1">Next Page</button></a>
</div>


<h1 align="center" style="margin-top: 50px;">Top 3 Most Watched Movies Last Month</h1>

<a href="Filmat.php">
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