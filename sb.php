<?php
include('connection.php');
include("check.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Score Board</title>
        <style>
        body{
            background-image: url("background/6.jpg");
            background-size: 100% 720px;
            height:470px;
        }
        ul{
            list-style-type: none;
        }
        li{
            float: left;
            font-size: 40px;
            padding-right: 30px;
            padding-left: 30px;
            height: 80px;
            text-align: center;
            padding-top: 20px;
        }
        div.a{
            background-color: green;
            width: 100%;
            height: 100px;

        }
        ul{
            margin-left: -50px;
        }
        li.h:hover,li.rh:hover{
            background-color: grey;
        }
        div.ps{
            font-size: 30px;
            padding-top: 20px;
        }
        div.r{
            font-size: 30px;
            float: left;
            display: none;
            margin-top: 20px;
            margin-right:50px;
        }
        table{
            border: 1px solid black;
            border-collapse: collapse;
            background-color: white;
        }
        td,th{
            border: 1px solid black;
            padding: 10px 30px;
            text-align: center;
        }
        th{
            background-color: green;
        }
        </style>
        <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("li.rh").click(function(){
                    $("div.r").show();
                    $("div.ps").hide();
                });
                $("li.h").click(function(){
                    $("div.ps").show();
                    $("div.r").hide();
                });

            });
        </script>
    </head>
    <body>
        <div class="a">
        <ul>
            <li class="tli"><a href="mainpage.php"><img id="img" src="icon/home-icon2.png" height=50 width=50 style="cursor: pointer;"></a></li>
            <li class="h" style="cursor: pointer;">Personal Score</li>
            <li class="rh" style="cursor: pointer;">Ranking</li>
        </ul>
        </div>
        <div class="ps">
        Your Max Score for Operating System is  
        <?php 
        $sql=mysqli_query($conn,"SELECT * FROM os_score WHERE name= '$user_check' order by score desc");
        $result=mysqli_fetch_array($sql,MYSQLI_ASSOC);
        echo $result["score"];
        ?> Out of 25.<br><br>
        Your Max Score for Database Management system is  
        <?php 
        $sql=mysqli_query($conn,"SELECT * FROM dbms_score WHERE name= '$user_check' order by score desc");
        $result=mysqli_fetch_array($sql,MYSQLI_ASSOC);
        echo $result["score"];
        ?> Out of 25.
        </div>
        <div class="r">
        Operating System
        <br>
        <?php 
        $rank=1;
        $sql=mysqli_query($conn,"SELECT distinct name,score FROM os_score order by score desc");
        echo "<table>";
        echo "<tr>";
        echo "<th>Rank</th>";
        echo "<th>Name</th>";
        echo "<th>Score</th>";
        echo "</tr>";      
        while($result=mysqli_fetch_array($sql))
        {
            echo "<tr>";
            echo "<td>".$rank."</td>";
            echo "<td>".$result["name"]."</td>";
            echo "<td>".$result["score"]."</td>";
            echo "</tr>";
            $rank=$rank+1;
        }
        echo "</table>";
        ?>
        <br><br>
        </div>
        <div class="r">
        Database Management System
        <br>
        <?php 
        $rank=1;
        $sql=mysqli_query($conn,"SELECT distinct name,score FROM dbms_score order by score desc");
        echo "<table>";
        echo "<tr>";
        echo "<th>Rank</th>";
        echo "<th>Name</th>";
        echo "<th>Score</th>";
        echo "</tr>";      
        while($result=mysqli_fetch_array($sql))
        {
            echo "<tr>";
            echo "<td>".$rank."</td>";
            echo "<td>".$result["name"]."</td>";
            echo "<td>".$result["score"]."</td>";
            echo "</tr>";
            $rank=$rank+1;
        }
        echo "</table";
        
        ?>
        </div>
    </body>
</html>