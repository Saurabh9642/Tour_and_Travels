<!DOCTYPE html>
<html>
    <head>
        <title> Login Page</title>
        <?php require_once("Connection.php")?>  
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    </head>
    <body>
        <div class="container" id="main">
            <div class="sign-up">
                <form action="login123.php" method="post">
                    <h1 style="text-shadow: 0px 0px 10px rgb(64, 59, 234);">Create Account</h1>
                    <div class="social-container">
                        <a href="https://www.facebook.com/" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://accounts.google.com/" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="https://www.linkedin.com/login" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <p style="font-size: 16px;">Use your Email for Registration</p>
                    <input type="text" name="Username" id="fn" placeholder="Enter the Username"  required="">
                    <input type="email" name="Email_Id" id="em" placeholder=" Enter Your Email"  required="">
                    <input type="password" name="Password" id="ps" placeholder="Password(Only 8 characters)"  required="">
                    <button  name="signup">Sign Up</button>
                    <h1 style="font-size: 16px;">Already have an account?<span style="font-size: 16px;color: blue;">Login here</span></h1>
                </form>
            </div>

            <div class="sign-in">
                <form action="Sign_In.php" method="post">
                    <h1><span>LOGIN</span></h1>
                    <?php
                    if(isset($_GET['signinerror'])){
                        $signinerror=$_GET['signinerror'];
                    }
                    if(!empty($signinerror)){
                        echo '<script>alert("Invaild Login credentials...please Try Again")</script>';
                    }
                    ?>
                    <div class="social-container">
                        <a href="https://www.facebook.com/" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://accounts.google.com/" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="https://www.linkedin.com/login" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <p style="font-size: 16px;"> Use Your Account for Login</p>
                    <input type="email" name="login_var" values="<?php if(!empty($signinerror)){echo $signinerror;}?>"
                    placeholder="Email_Id" required="">
                    <input type="password" name="password" placeholder="Password" required="">
                    <p style="font-size: 16px;color: #443ccf;margin-left: -150px;"><a href="http://localhost/jadhav/Reset_Password.php">Forget Password ?</a></p>
                    <button style="margin-bottom: 40px;" name="signin">Sign In</button>
                    <h1 style="font-size: 16px;">Don't have an account?<span style="font-size: 16px;color: blue;">Sign Up</span></h1>
                </form>
            </div>

            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-left">
                        <h1>Welcome Back!</h1>
                        <p>To keep connected with us please login with your personal info</p>
                        <button id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-right">
                        <h1>Hello Friend !</h1>
                        <p>Enter your personal details and startnjourney with us</p>
                        <button id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            const signUpButton = document.getElementById('signUp')
            const signInButton = document.getElementById('signIn')
            const main = document.getElementById('main');

            signUpButton.addEventListener('click', () => {
                main.classList.add("right-panel-active");
            });
            signInButton.addEventListener('click', () => {
                main.classList.remove("right-panel-active");
            });
        </script>
        
        <?php
            $Username=$_POST['Username'];
            $Email_Id=$_POST['Email_Id'];
            $Password=$_POST['Password'];
            $sql="INSERT INTO `register` (`Sr_No`, `Username`, `Email_Id`, `Password`) VALUES (NULL, '$Username', '$Email_Id', '$Password')";
            if(isset($_POST['signup']))
            {
                if($connection->query($sql)==TRUE)
                {
                  echo '<script>alert("Sign_Up Successful")</script>';
                }
                else
                {
                   echo "Welcome.....";
                }
            }
        ?>
   </body>
</html>