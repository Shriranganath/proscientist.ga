<?php
session_start();
include 'dbcon.php';

if(isset($_SESSION['name'])){
    echo "logged in";
    header('location:dashboard.php');
}



if(isset($_POST['Signup'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['Password']);
    $confirm_password = mysqli_real_escape_string($con, $_POST['confirm-password']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);


    $pass = password_hash($password, PASSWORD_BCRYPT);
    $conpass = password_hash($confirm_password, PASSWORD_BCRYPT);

    $token = bin2hex(random_bytes(15));

    $emailquery = " SELECT * FROM users WHERE email='$email' ";
    $query = mysqli_query($con, $emailquery);

    $_SESSION['name'] = $name;
    

    $emailcount = mysqli_num_rows($query);
    if($emailcount>0){
        ?>

        <script>
            alert("This email already exists")
        </script>

        <?php
    }else{
        if($password === $confirm_password){

            $insertquery = "INSERT INTO users(name, email, Password, conpass, mobile, token, status) VALUES('$name', '$email', '$pass', '$conpass', '$mobile', '$token', 'inactive')";

            $iquery = mysqli_query($con, $insertquery);

            if($iquery){
                ?>
                <script>
                    console.log("Inserted successfully")
                </script>
                <?php

            }
            else{
                ?>

                    <script>
                        alert("Something went wrong");
                    </script>

                <?php
            }
        }
        else{
            ?>

                <script>
                    alert("the password and the confirm password are not matching");
                </script>

            <?php
        }
    }


}


?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>SuperJack Coder</title>
    <style>
        .nav-item{
            font-size: 20px;
        }

         body {
    margin: 0;
    padding: 0;
    background: url(https://i.ibb.co/nnCb7gV/6845078.png) no-repeat;
    height: 100vh;
    font-family: sans-serif;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    overflow: hidden
}

.loginBox {
    margin-top: 10px
}

@media screen and (max-width: 600px;

) {
    body {
        background-size: cover;
        : fixed
    }
}

#particles-js {
    height: 100%
}

.loginBox {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 350px;
    min-height: 200px;
    background: #000000;
    border-radius: 10px;
    padding: 40px;
    box-sizing: border-box;
}

.user {
    margin: 0 auto;
    display: block;
    margin-bottom: 20px
}

h3 {
    margin: 0;
    padding: 0 0 20px;
    color: #59238F;
    text-align: center
}

.loginBox input {
    width: 100%;
    margin-bottom: 20px
}

.loginBox input[type="text"],
.loginBox input[type="password"] {
    border: none;
    border-bottom: 2px solid #262626;
    outline: none;
    height: 40px;
    color: #fff;
    background: transparent;
    font-size: 16px;
    padding-left: 20px;
    box-sizing: border-box
}

.loginBox input[type="text"]:hover,
.loginBox input[type="password"]:hover {
    color: #42F3FA;
    border: 1px solid #42F3FA;
    box-shadow: 0 0 5px rgba(0, 255, 0, .3), 0 0 10px rgba(0, 255, 0, .2), 0 0 15px rgba(0, 255, 0, .1), 0 2px 0 black
}

.loginBox input[type="text"]:focus,
.loginBox input[type="password"]:focus {
    border-bottom: 2px solid #42F3FA
}

.inputBox {
    position: relative
}

.inputBox span {
    position: absolute;
    top: 10px;
    color: #262626
}

.loginBox input[type="submit"] {
    border: none;
    outline: none;
    height: 40px;
    font-size: 16px;
    background: #59238F;
    color: #fff;
    border-radius: 20px;
    cursor: pointer
}

.loginBox a {
    color: #262626;
    font-size: 14px;
    font-weight: bold;
    text-decoration: none;
    text-align: center;
    display: block
}

a:hover {
    color: #00ffff
}

p {
    color: #0000ff
}
    </style>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="z-index: 100;">
  <a class="navbar-brand" href="index.php" style="font-size: 30px; font-family: fantasy;">SuperJack Coder</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="blog.html">Blog</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Membership
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="login.php">Login<span class="badge badge-secondary">New</span></a>
          <a class="dropdown-item" href="register.php">Register<span class="badge badge-secondary">New</span></a>
          <a class="dropdown-item" href="dashboard.php">Dashboard<span class="badge badge-secondary">New</span></a>
        </div>
      </li>
    </ul>
  </div>
</nav>

<div class="loginBox"> <img class="user" src="https://i.ibb.co/yVGxFPR/2.png" height="100px" width="100px">
    <h3>Sign Up Here</h3>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);  ?>" method="POST">
        <div class="inputBox"> <input type="text" name="name" placeholder="Name" id="name" required> </div>
        <div class="inputBox"> <input type="email" name="email" placeholder="Email" id="email" required> </div>
        <div class="inputBox"> <input type="password" name="Password" placeholder="Password" id="pass" minlength="8" required> </div>
        <div class="inputBox"> <input type="password" name="confirm-password" placeholder="confirm-password" id="pass" minlength="8" required> </div> 
             <div class="inputBox"> <input type="int" name="mobile" placeholder="mobile number" id="number"> </div>
        <input type="submit" name="Signup" value="Sign-up">
    </form> 
    <p style="display: flex;">Already have an account??<a href="login.php">Sign-in</a></p>
</div>  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>