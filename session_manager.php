<?php
if(!isset($_SESSION))
{
	session_start();
}

if($_SESSION['loginValidity']=="true")
{
	
}
else
{  
header('Location:login.php');
}
?>