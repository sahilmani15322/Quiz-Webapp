<?php
include('connection.php');
include("check.php");
$sql = mysqli_query($conn,"SELECT * FROM table_1 WHERE name='$user_check' ");
$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);
$login_user=$row['name'];
$image_name=$row['imagename'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <style>
        body{
            background-color:#92a8d1;
            background-image: url("background/4.jpg");
            background-size: 100% 720px;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }
        div.a{
        	height:200px;
        	border: 1px solid black;
        	margin-left: 10;
            background-color: #f18973;        	
        }
        img{
        	margin-top: -60px;
        }
        h1{
        	
        	margin-left: 20%;
        }
        a.lo{
        	color: black;
        	margin-left: 75%;
        	font-size: 30px;
        	text-decoration: none;
        	display: inline-block;
            margin-top: -20%;
            margin-right: 2%;
        }
        a.os{
        	text-decoration: none;
        	margin-left: 25%;
        	margin-top: 8%;
        	background-color: #405d27;
        	color: white;
        	height:70px;
        	width:300px;
        	text-align:center;
        	padding: 20px 10px;
        	display: inline-block;
        	font-size: 50px;
        }
        a.dbms{
            text-decoration: none;
            margin-left: 10%;
            margin-top: 8%;
            background-color: #405d27;
            color: white;
            height:70px;
            width:300px;
            text-align:center;
            padding: 20px 10px;
            display: inline-block;
            font-size: 50px;
        }
        a.os:hover,a.dbms:hover{
        	background-color: grey;
        }
        img{
                margin-top: -5.9%;
        }
        a.hp{
            margin-left: 75%;
        }

       

        </style>
        <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
    	<div class="a">
    	<h1 >Hello, <em><?php echo $login_user;?></em><a class="hp" href="mainpage.php"><img id="img" src="icon/home-icon2.png" height=50 width=50 style="cursor: pointer;"></a></h1>
    	<img src=<?php echo $image_name;?> height=200 width=200>
    	<a class="lo" href="logout.php" >Logout</a>
    	</div>
        <div class="quiz">
    	<a href="osquiz.php" class="os">
    	OS
    	</a>
        <a href="dbmsquiz.php" class="dbms">
        DBMS
        </a>
        </div>
    	
    </body>
</html>