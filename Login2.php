<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "registeracc";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_error()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }

    $username = $_POST['username'];  
    $password = $_POST['password'];
    
    if($username=='AdminAdmin'){

        if($password=='Admin123'){

            header('Location:Pages/AdminP.php'); 

        }

    }
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from registeraccount where Username = '$username' and Password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header('Location:Pages/Home Page.php');  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     

        session_start();
        $_SESSION["username"] = $username;
?>  


<!DOCTYPE html>
<html>
<head>
    <title>
        Login
    </title>
    
    <link rel="stylesheet" href="LoginCSS.css">



</head>
<body style="justify-content: center;">
    <video autoplay muted loop>
            <source src="Pages/Img/video.mp4" type="video/mp4">
    </video>


    <img src="Pages/img/logo.png" class="logologin">
        


    <Div class="boxlogin">

        <form action="" method="post"> 
            <h1 class="h1R" style="margin-left:110px">LOGIN</h1>

            <input class="inputAcc" style="margin-left: 15%;" type="text" name="username" id="username" placeholder="Enter a Username!" required><br>
            <label for="username" id="usernameMessage"></label><br>

            <input class="inputAcc" style="margin-left: 15%;" type="password" name="password" id="password" placeholder="Enter a Password" required><br>
            <label for="password" id="passwordMessage"></label><br>

            <button style="margin-left:120px;"class="button-1" role="button" id="register" value = "Login">Login</button>
            <a href="Register.php"><p style="margin-left: 5px; margin-top: 20px;">Create an Account?</a></p>
        </form>
                    
                
    </Div>
                

    <script src="LoginJSL.js"></script>


</body>
</html>