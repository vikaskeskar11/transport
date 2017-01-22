<?php include 'session_manager.php';?>
<?php 
include 'config.php';

$frmdate = $_GET['frmdate'];
$todate = $_GET['todate'];
	
  $result = mysqli_query($conn,"SELECT * FROM lorryreceipt where ldate between '$frmdate' and '$todate' and status=0");  
  
  $array = mysqli_fetch_all($result);                      
 echo json_encode($array);

?>
