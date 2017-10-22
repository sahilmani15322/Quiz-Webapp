<?php
// Create connection
session_start();
include("connection.php");
$username=$_POST['user'];
$password=$_POST['pass'];

$sql="SELECT * FROM table_1 WHERE name= '$username' and password= '$password'";
$result=mysqli_query($conn,$sql) or die("failed to open Database".mysql_error());
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
if($row["name"]==$username && $row["password"]==$password)
{
	$_SESSION['name'] = $username; 
    header("location: home.php"); 
}
else
{
	echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";

}
?>
