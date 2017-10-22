<?php
include("check.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
        body{
        background-color: lightblue;
        }
        div.a{
        	font-size: 50px;
        }
        div.b{
        	margin-left: 35%;
        	margin-top: 6%;
        	margin-right: 45%;
        	font-size: 20px;
        }
        </style>
        <title>Sign Up</title>
    </head>
    <body>
        <div class="a">
        Upload your image<br>
        </div>
        <div class="b">
        <img src="icon/blank-man.png" height="250" width="270">
		<form action="upload.php" method="post" enctype="multipart/form-data">
			<input type="file" name="fileToUpload"><br><br><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="submit" value="Upload Image" name="submit">
		</form>
         </div>
    </body>
</html>
