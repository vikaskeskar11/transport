<?php include 'session_manager.php';?>
<?php
//databse config file include this file to other files to access database
$db_name = "transport";
$server = "localhost";
$username = "root";
$password = "";
//connect to database
$conn = mysqli_connect($server,$username,$password) or die(mysqli_error($conn));
//select the database
mysqli_select_db($conn,$db_name) or die(mysqli_error($conn)); 

?>