<?php include 'session_manager.php';?>
<?php 
include 'config.php';
//extract($_GET);

$ino= $_GET['ino'];

//$message;
//$result1 = mysqli_query($conn," select * from lorryreceipt where lno='$name' & status='$status'")or die (mysqli_error($conn));  
$result = mysqli_query($conn,"update lorryreceipt set status='0' where lno='$ino'")or die (mysqli_error($conn));     
$array=mysqli_affected_rows($conn);
 echo json_encode($array);

	
	
?>
