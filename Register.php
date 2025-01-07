<!DOCTYPE html>
<html>
<head>
    <title>
        Login
    </title>
    
    <link rel="stylesheet" href="LoginCSS.css">



</head>
<body>

        <video autoplay muted loop>
            <source src="Pages/Img/video.mp4" type="video/mp4">
        </video>

        <h1 class="centered">Unlimited movies, TV shows, and more.<br>
            Watch anywhere. Cancel anytime.</h1>

            <button class="button1" onclick="togglePopup()">Make an Account</button>



        <div class="popup" id="popup-1">
            <div class="overlay">
                <div class="content">
                    <div class="close-btn" onclick="togglePopup()">&times;</div>
                


            <div>


                <form action="Provoje2002.php" method="post">
                    <h1 class="h1R">REGISTER</h1>

                    <input class="inputAcc" type="text" id="name" name="FName" placeholder="Enter your Name!" required><br>
                    <label for="name" id="nameMessage"></label><br>

                    <input class="inputAcc" type="text" id="surname" name="SName" placeholder="Enter your Surname!" required><br>
                    <label for="surname" id="surnameMessage"></label><br>

                    <input class="inputAcc" type="text" id="username" name="username" placeholder="Enter a Username!" required><br>
                    <label for="username" id="usernameMessage"></label><br>

                    <input class="inputAcc" type="text" id="email" name="email" placeholder="Enter your Email!" required><br>
                    <label  for="email" id="emailMessage"></label><br>

                    <input class="inputAcc" type="password" id="password" name="password" placeholder="Enter a Password" required><br>
                    <label for="password" id="passwordMessage"></label><br>

                    <input type="checkbox" id="checkBox" class="checkBox" required>I agree to your <B>terms and conditions!</B> <br>
                    <label for="checkBox" id="checkBoxMsg"></label><br>

                    <input type="checkbox" id="checkBox" class="checkBox" required>I <B>consent</B> to be updatated via email! <br>
                    <label for="checkBox" id="checkBoxMsg"></label><br>

                    <br><a href="Login2.php"><p style="margin-left: 5px; margin-top: 10px;">Alredy have an account?</a></p>

                    <button class="button-1" role="button" id="register" value="register">SIGN UP</button>

                    
                
                </form>



            </div>


        </div>
        </div>
        </div>



    <script src="LoginJS.js">

    </script>



</body>
</html>