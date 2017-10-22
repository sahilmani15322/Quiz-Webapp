<?php
include('connection.php');
session_start();
 
if(!isset($_SESSION['name']))
{
}
else
{
    header("Location: mainpage.php");

}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>
            body{
            background-image: url("background/9.jpg");
            background-size: 100% 720px;
            background-color: lightblue;
            }
            header{
            text-align:center;
            color: white;
            background-color:black;
            height:50px;
            }

            div.inner{
            background-color:white;
            padding-left:20px; 
            padding-top: 20px;
            padding-bottom: 10px;
            }
            p.home{
                margin-left: -107%;
                margin-top: -39%;
                font-size: 39px;
            }
            div.a{
                margin-top: 28%;
                margin-left: 10%;
                margin-right: -5%;
            }
        </style>
        <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <title>Log In</title>
    </head>
    <body>
        <p class="home"><a href="mainpage.php"><img src="icon/home-icon2.png" height=50 width=50></a>Home Page</p>
        <div class="a">
        <form action="login.php" method="POST">
            <header><H1><B>Log In</B></H1></header>
            <div class="inner">
                <input type="text" name="user" placeholder="Username" required><br><br>
                <input type="password" name="pass" placeholder="Password" required><br><br>
                <input type="submit" value="Log In">
                <p>
                Dont have an Account?<a href="signup1.php"> Sign Up</a>
                </p>
            </div>
        </form>
        </div>

    </body>
</html>
