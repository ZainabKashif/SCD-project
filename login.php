<?php
    include "connection.php";
    $loginalert=false;
    $loginerror=false;
    if ($_SERVER["REQUEST_METHOD"]== "POST")
    {
        $username=$_POST["username"];
        $password=$_POST["password"];
        $query= "SELECT * FROM admin where username ='$username' AND password='$password'";
        $result = mysqli_query($conn, $query);
        $num = mysqli_num_rows($result);
        if($num ==1)
        {
            $loginalert=true;
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['username']=$username;
            header('location: admin.php');
        }
        
        else
        {
            $loginerror=true;
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
    <title>Login</title>
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
    .nav{
        margin-left: 134px;
    }
    .nav a{
        padding: 0px 20px;
        font-weight: bold;
        text-decoration: none;
        color: gray;
    }
    #indicator{
        width: 100px;
        border: none;
        background: #ee9696;
        height: 3px;
        margin-top: 5px;
        margin-left: 19px;
        transform: translateX(100px);
    }
</style>

<body>
    <?php
    if($loginalert)
    {
        echo'<p id="showalert" style="background-color : #e4fccc;">You are logged in.</p>';
    }
    if($loginerror)
    {
        echo'<p id="showalert" style="background-color : #fb6767;">Incorrect credentials.</p>';
    }
    ?>
    
    <div class="myadminform">
        <img src="images/loginicon.jpg" alt="">
        <h1 style="text-align:center;">ADMIN LOG IN</h1>
        
        <form id="adminloginform" action="login.php" method="post">
            <div style="margin-left :95px; margin-top: 80px;">
                <p style="margin-block-end: 0em;">Admin Username</p>
                <input class="a" for="username" type="text" name="username" placeholder="Enter Username">
                <p style="margin-block-end: 0em;">Password</p>
                <input class="a" for="password" type="password" name="password" placeholder="Enter Password">
                <input style="margin-block-start: 2em;" class="a" type="submit" value="Login"><br>
                
                <p><a href="mainpage.php">Click here </a> to return to home page.</p>
            </div>
        </form>
    </div>
</body>

</html>