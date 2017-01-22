<?php session_start();
error_reporting(-1);

include 'config.php';

$user_name = $_POST["username"];
$user_pass = $_POST["password"];

if($conn)
{ 
	$query = "SELECT * FROM login WHERE username= '$user_name' AND password = '$user_pass'";
	$result =mysqli_query($conn,$query);
	$num = mysqli_num_rows($result);
	if($num>0)
	{	$_SESSION['loginValidity'] = "true";
		print_r($_SESSION);
		header("Location:index.php");
	}else{
		//header('Location:login.php?try=false');
	}
	mysqli_close($conn);
}else
{
	echo "Connection Problem";
}

?>