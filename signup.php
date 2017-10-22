<?php
// Create connection
session_start();
include("connection.php");
$img="icon/blank-man.png";
if($_SERVER['REQUEST_METHOD']=='POST') 
	{ 
		if($_POST['pass']==$_POST['confpass']) 
		    {  
				$username=$_POST['user'];
				$email=$_POST['email']; 
				$password=$_POST['pass']; 
				$gender=$_POST['gender'];
				$sql="INSERT INTO table_1 (name, email, password,gender,imagename) VALUES('$username','$email','$password','$gender','$img')"; 
				if ($conn->query($sql) === TRUE) 
					{
    					$_SESSION['name']=$username;
    					header('Location: image.php');
					}		 
				else 
					{
    					echo "User could not be added.";
					}
		    } 
		else
			{
				echo "Passwords do not match.";
			}
	}
?>

