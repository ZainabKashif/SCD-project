<?php
    session_start();
    include "connection.php";
    $showalert=false;
    $showerror=false;
    if ($_SERVER["REQUEST_METHOD"]== "POST")
    {
        $username=$_POST["username"];
        $password=$_POST["password"];
        $cpassword=$_POST["cpassword"];
        $exists=false;
        if($password==$cpassword && $exists==false)
        {
            $query= "INSERT INTO `admin` (`username`, `password`, `date`) VALUES ('$username', '$password', current_timestamp() )";
            $result = mysqli_query($conn, $query);
            if($result)
            {
                $showalert=true;
            }
        }
        else if ($password != $cpassword)
        {
            $showerror=true;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <title>Signup</title>
</head>
<style>
    * {
        font-family: 'Montserrat', sans-serif;
    }

    body {
        background-image: url("images/loginbg.jpg");
        height: 100%;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .myadminform {
        background-color: white;
        opacity: 0.6;
        width: 500px;
        height: 540px;
        margin-left: 480px;
        margin-top: 100px;
        border-radius: 10px;
    }

    .a {
        width: 300px;
        height: 40px;
        margin-bottom: 10px;
        border-radius: 6px;
    }

    img {
        border-radius: 50px;
        height: 100px;
        width: 100px;
        margin-top: -55px;
        margin-left: 197px;
    }
</style>

<body>
    <?php
    if($showalert)
    {
        echo'<p id="showalert" style="background-color : #e4fccc;">Your account is now created and you can now login.</p>';
    }
    if($showerror)
    {
        echo'<p id="showalert" style="background-color : #fb6767;">Passwords do not match.</p>';
    }
    ?>
    
    <div class="myadminform">
        <img src="images/loginicon.jpg" alt="">
        <h1 style="text-align:center;">ADMIN SIGN UP</h1>
        <form action="signup.php" method="post">
            <div style="margin-left :95px; margin-top: 0px;">
                <p style="margin-block-end: 0em;">Admin Username</p>
                <input class="a" for="username" type="text" name="username" placeholder="Enter Username">
                <p style="margin-block-end: 0em;">Password</p>
                <input class="a" for="password" type="password" name="password" placeholder="Enter Password">
                <p style="margin-block-end: 0em;">Confirm Password</p>
                <input class="a" for="cpassword" type="password" name="cpassword" placeholder="Confirm Password">
                <p style="margin-block-start: 0em;">Make sure to enter same password.</p>
                <input class="a" type="submit" value="Signup"><br>
                <p>Already have an account? <a href="login.php">Login</a></p>
            </div>
        </form>
    </div>

    
</body>

</html>