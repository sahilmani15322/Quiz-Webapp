<?php
include("connection.php");
include("check.php")

?>
<html>
<head>
<title>Score</title>
<style type="text/css">
    div.a{
        font-size: 80px;
        background-color: red;
    }
    img{
        margin-top: 2%;
        margin-bottom: -1%;
    }
    div.b{
        font-size: 30px;
        margin-top: 10%;
    }
    a.home{
            text-decoration: none;
            margin-left:35%;
            margin-top: 8%;
            background-color: #405d27;
            color: white;
            height:70px;
            width:400px;
            text-align:center;
            padding: 20px 10px;
            display: inline-block;
            font-size: 50px;
        }
        a.home:hover{
            background-color: grey;
        }
</style>
</head>
<body>
<div class="a">
Thankyou <img src="icon/smile.png" height="90">
</div>
<div class="b">
<?php
$point=$_REQUEST['points'];
mysqli_query($conn,"INSERT INTO dbms_score (name,score) VALUES('$user_check','$point')");
?>
Your Score for Database Management System is  <?php 
$sql=mysqli_query($conn,"SELECT * FROM dbms_score WHERE name= '$user_check' order by s_no desc");
$result=mysqli_fetch_array($sql,MYSQLI_ASSOC);
echo $result["score"];
?> Out of 25.
</div>
<a href="mainpage.php" class="home">
Go to Home
</a>

</body>
</html>
