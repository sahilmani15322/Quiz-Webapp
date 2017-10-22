<?php
include('connection.php');
session_start();
$user_check=$_SESSION['name'];
 
if(!isset($user_check))
{
header("Location: login1.php");
}
?>