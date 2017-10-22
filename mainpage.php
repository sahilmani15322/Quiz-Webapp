<?php
include('connection.php');
session_start();
 
if(!isset($_SESSION['name']))
{
    $lio="Log In/Sign Up";   //lio=login in/out   liol=log in/out link 
    $liol="login1.php";
}
else
{
    $lio="Log Out";
    $liol="logout.php";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>HOME</title>
        <style>
            
            body{
               background-image: url("background/f.jpg");
               background-repeat: no-repeat;
               background-attachment: fixed;
            }

            div.a{
            
            width: 101%;
            background-color: #92a8d1;
            font-size: 60px;
            border: 1px solid grey;
            margin: -0.6% -0.10% 0% -0.6%;
            }
            div.b{
            height:1500px;
            margin:0% 100px 0px 100px;
            color: black;
            font-size: 30px;
            background-color: white;
            background: rgba(255, 255,255, 0.2);
            position: relative;
            padding: 20px 40px;
            word-spacing: 0.8px;
            }
            a.ls{
            font-size: 20px;
            color: black;
            margin-left: 15%;
            font-family: sans-serif;
            }

            ul.ul{
                width: 330px;
                display: none;
                position: absolute;
                list-style-type: none;
                text-align: left;
                margin-top: -114.2%;
                margin-left: -2%;
                background-color:rgb(80,140,50);
                }
            li.li{
                display: block;
                padding: 20px 20px;
                font-size: 30px
            }
            ul.ul a{
                text-decoration: none;
                color: black;
            }
            li.li:hover{
                background-color:#555;
            }
            ul.top{
            	display: block;
            	text-decoration: none;
            	list-style-type: none;
            }
            li.tli{
            	margin-top: -2%;
            	display: block;
            	float: left;
            	height:110px;
            	padding-left:20px;
            	padding-right: 40px; 
            	margin-top: -4.8%;
            	padding-top: 25px;
            }
            a.ta:link{
            	text-decoration:none;
            }
            li.tli:hover{
            	background-color: #82b74b;
            }
            a.test{
            text-decoration: none;
            margin-left: 25%;
            margin-top: 8%;
            background-color: #405d27;
            color: white;
            height:70px;
            width:500px;
            text-align:center;
            padding: 20px 10px;
            display: inline-block;
            font-size: 50px;
        }
        a.test:hover{
        	background-color: grey;
        }
        </style>
        <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script >
            $(document).ready(function(){   
                $("#img").click(function(){
                    $("ul.ul").toggle();
                });
              
            });
        </script>
    </head>
    <body>
     	<div class="a">
        <ul class="top">
        	<li class="tli"><img id="img" src="icon/menu-icon.png" height=50 width=50 style="cursor: pointer;"></li>
        	<li class="tli"><a class="ta" href="mainpage.php">Home</a></li>
        	<li class="tli"><a class="ta" href="os.php">OS</a></li>
        	<li class="tli"><a class="ta" href="dbms.php">DBMS</a></li>
        	<li class="tli"><a class="ta" href="aboutus.php">About us</a></li>
        </ul>
        <a class="ls" href=<?php echo $liol; ?>><?php echo $lio; ?></a>
      	</div>
        <div class="b" >
        <p>
        <h3>Introduction</h3>
        Online quizzes are a popular form of entertainment for web surfers. Online quizzes are generally free to play and for entertainment purposes only though some online quiz websites offer prizes. Websites feature online quizzes on many subjects. One popular type of online quiz is a personality quiz or relationship quiz which is similar to what can be found in many women's or teen magazines. Websites hosting quizzes include Quizilla, FunTrivia, OkCupid, Sporcle, and Quizlet.
        </p>
        <p>
        <h3>Blog quizzes</h3>
        Blog quizzes (also known as quiz blog) refer to a specific genre of quizzes which are conducted by the quizzers on blogs.[citation needed] Blog quizzes may be about verbs or a wide range of other topics.
        </p>
        <p>
        <h3>Educational quizzes</h3>
        Some companies and schools use online quizzes as a means to educate their employees or students respectively. Popular websites hosting quizzes for this purpose include Quizlet and Revision Quiz Maker.
        </p>
        <p>
        <h3>Practical applications</h3>
        Many online quizzes are set up to actually test knowledge or identify a person's attributes. Some companies use online quizzes as an efficient way of testing a potential hire's knowledge without that candidate needing to travel. Online dating services often use personality quizzes to find a match between similar members.
        </p>
        <p>
        <h3>Other</h3>
        Most online quizzes are to be taken lightly. The results do not often reflect the true personality or relationship. They are also rarely psychometrically valid. However, they may occasion reflection on the subject of the quiz and provide a springboard for a person to explore his or her emotions, beliefs, or actions.
        </p>
        
        <p>
        <a href="home.php" class="test">
        Test your Knowledge
        </a>
        </p>
       </div>
       <ul class="ul">
                <li class="li"><a href="ss.php">Insipirational Quotes</a></li>
                <li  class="li"><a href="sb.php">Score Board</a></li>
        </ul>
    </body>
</html>
