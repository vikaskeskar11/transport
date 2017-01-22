<?php 
include 'config.php';
//extract($_GET);
$name = $_GET['lrno'];
$ino = $_GET['ino'];

$result = mysqli_query($conn,"update lorryreceipt set ino='$ino' where lno='$name'")or die (mysqli_error($conn));     
$array=mysqli_affected_rows($conn);

//$array = mysqli_fetch_row($result); 
 echo json_encode($array);

	
	
?>