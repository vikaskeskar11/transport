<?php 
include 'config.php';
//extract($_GET);
$name = $_GET['lrno'];
$status=0;
$ino = 0;
$result = mysqli_query($conn,"update lorryreceipt set status='$status',ino='$ino' where lno='$name'")or die (mysqli_error($conn));     
$array=mysqli_affected_rows($conn);
 echo json_encode($array);

	
	
?>
