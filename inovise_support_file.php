<?php include 'session_manager.php';?>
<?php 
include 'config.php';
//extract($_GET);
$name = $_GET['lrno'];
$rate = $_GET['rate'];
$rate1 = $_GET['rate1'];
$subtotal = $_GET['subtotal'];
$load = $_GET['load'];
$unload = $_GET['unload'];
$stat = $_GET['stat'];
$tail = $_GET['tail'];
$detention = $_GET['detention'];
$delivery = $_GET['delivery'];
$other= $_GET['other'];
$totalcharge = $_GET['totalcharge'];
$lrtot= $_GET['lrtot'];
$ino= $_GET['ino'];
$status=0;
//$message;
//$result1 = mysqli_query($conn," select * from lorryreceipt where lno='$name' & status='$status'")or die (mysqli_error($conn));  
$result = mysqli_query($conn,"update lorryreceipt set status='$status',ino='$ino',rate='$rate',perc='$rate1',subtot='$subtotal',loading='$load',unload='$unload',stat='$stat',tail='$tail',detention='$detention',delivery='$delivery',other='$other',totalcharge='$totalcharge',lrtotal='$lrtot' where lno='$name' && status=0")or die (mysqli_error($conn));     
$array=mysqli_affected_rows($conn);
 echo json_encode($array);

	
	
?>
