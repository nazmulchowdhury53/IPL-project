<!DOCTYPE html>
<html>
<head>

<title>Admin</title>

<style>

    table{
        border-collapse:collapse;
        width:100%;
        color:rgb(30, 123, 30);
        font-family:monospace;
        font-size:25px;
        text-align:left;

    }

    th{
        background-color:rgb(0, 61, 102);
        color:white;
    }
    * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
 }

 body{
    background-color: rgb(0, 54, 54);
    font-family: Arial, Helvetica, sans-serif;
}

.logo-box {
    display: flex;
    align-items: center;
}

.logo {
    width: 50px;
    height: 50px;
    margin-right: 10px;
}

nav {
    display: flex;
    list-style: none;
    align-items: center;

}
header {
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 5%;
    border: 1px #ccc solid;

}
li {
    padding-bottom: 5px;
    margin-left: 20px;
    font-size: 20px;
    color: grey;
}

a {
    text-decoration: none;

}

li:hover {
    border-bottom: 3px solid aqua;
}
h1{
    color: rgb(0, 152, 153);
    font-size: 30px;
    margin-top:15px;
    margin-bottom:15px;
}

h2 {
    color: rgb(0, 152, 153);
    font-size: 30px;
    margin-top:15px;
    margin-bottom:15px;
}

h1:hover{
    color:aqua;
}
h2:hover{
    color:aqua;
}

.footer {
display: flex;
justify-content: center;
margin-top: 60px;
height: 260px;
background-color: white;
padding-top: 35px;
}

.footer-content {
width: 760px;
display: flex;
}

.left {
flex: 1;
}

.left h1 {
font-size: 23px !important;
}
.left p {
margin-top: 25px;
}



.right {
flex: 1;
margin-left: 20px;
}

.our-links {
display: flex;
justify-content: space-between;
}

.our-links h1 {
font-size: 23px !important;
}

.socials {
display: flex;
}

.ico-box {
background: #fff;
height: 30px;
width: 33px;
display: flex;
justify-content: center;
align-items: center;
}

.ico {
margin-left: 10px;
}

.latest {
margin-bottom: 25px;
}


.about {
display: flex;
margin-top: 19px;
justify-content: space-between;
}

.r-about {
display: flex;
flex-direction: column;
align-items: left;
align-items: left;
justify-content: right;
justify-content: flex-end;
}

.designby{
margin-left: 20%;
}

@media only screen and (max-width: 1380px) {
body {
padding: 0 20px;
}
}

@media only screen and (max-width: 580px) {
.logo-box h1{
font-size: 1.2rem !important;
}
}
@media only screen and (max-width: 520px) {
.logo-box h1{
font-size: .8rem !important;
}
}

/* Three image containers (use 25% for four, and 50% for two, etc) */
.column {
  float: left;
  width: 25%;
  padding: 5px;
}

/* Clear floats after image containers */
.row::after {
  content: "";
  clear: both;
  display: table;
}

p{
    color: gray;
}

p:hover{
    color: aqua;
    cursor: pointer;
}

h3{
    color: rgb(0, 152, 153);

}
h3:hover{
    color: gold;

}

</style>

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
                    echo"<p> <font color=aqua font-size: 150%;> AdminAdmin </font></p>"
                    
                ?>
            </div>
            <a href="../Login2.php">
                <li style="color:red;">Log Out</li>
            </a>
            
    </nav>
</header>


<h1 align="center" style="font-size:50px;">Welcome Admin!</h1>

<h2>Top 3 Most Viewed Movies Last Week:</h2>
<div class="row">
  <div class="column">
    <img src="img/img-01.png"  style="width:100%">
    <p>200,000 Views</p>
  </div>
  <div class="column">
    <img src="img/img-05.png"  style="width:100%">
    <p>53,000 Views</p>
  </div>
  <div class="column">
    <img src="img/img-08.png"  style="width:100%">
    <p>52,000 Views</p>
  </div>
  <div class="column">
    <h3>1. Avanger</h3><br>
    <p>Description:After the devastating events of Avengers: Infinity War (2018), the universe is in ruins. With the help of remaining allies, the Avengers assemble once more in order to reverse Thanos' actions and restore balance to the universe.</p><br>
    <p>200,000 Views</p><br>
    <h3>2. Jurassic Park</h3><br>
    <p>Description:Teens attending an adventure camp on the opposite side of Isla Nublar must band together to survive when dinosaurs wreak havoc on the island.</p><br>
    <p>53,000 Views</p><br>
    <h3>3. Aliens</h3><br>
    <p>Description:The crew of a commercial spacecraft encounter a deadly lifeform after investigating an unknown transmission.</p><br>
    <p>52,000 Views</p>
    
  </div>
</div>

<h2>Top 3 Most Viewed Series Last Week:</h2>
<div class="row">
  <div class="column">
    <img src="img/Series/img-1.png"  style="width:100%">
    <p>200,000 Views</p>
  </div>
  <div class="column">
    <img src="img/Series/img-5.png"  style="width:100%">
    <p>53,000 Views</p>
  </div>
  <div class="column">
    <img src="img/Series/img-8.png"  style="width:100%">
    <p>52,000 Views</p>
    
  </div>
  <div class="column">
    <h3>1. How I met your mother</h3><br>
    <p>Description:A father recounts to his children - through a series of flashbacks - the journey he and his four best friends took leading up to him meeting their mother.</p><br>
    <p>200,000 Views</p><br>
    <h3>2. The Witcher</h3><br>
    <p>Description:Geralt of Rivia, a solitary monster hunter, struggles to find his place in a world where people often prove more wicked than beasts.</p><br>
    <p>53,000 Views</p><br>
    <h3>3. Stranger Things</h3><br>
    <p>Description:When a young boy disappears, his mother, a police chief and his friends must confront terrifying supernatural forces in order to get him back.</p><br>
    <p>52,000 Views</p>
    
  </div>
</div>


<h2>New Members:</h2>
<table>
    <th>ID  -</th>
    <th>Username</th>
    <th>Email</th>
    <th>Password</th>
    
    <?php

    $conn=mysqli_connect("localhost","root","","registeracc");
    if($conn->connect_error){
        die("Connection failed: ". $conn-> connect_error);

    }

    $sql="select ID, Username, Password, Email from registeraccount";

    $result=$conn->query($sql);

    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            echo "<tr><td>". $row["ID"] ."</td><td>". $row["Username"]. "</td><td>". $row["Email"] ."</td><td>". $row["Password"] ."</td></tr>";
        }
        echo "</table>";
    }else{
        echo"0 result";
    }

    $conn->close();
    
    
    ?>
</table>

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

</body>
</html>