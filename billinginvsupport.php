<?php include 'session_manager.php';?>
<?php 
include 'config.php';

$frmdate = $_GET['frmdate'];
$todate = $_GET['todate'];
$party1 = $_GET['party1'];
	
  $result = mysqli_query($conn,"SELECT * FROM invoice where idate between '$frmdate' and '$todate' and iparty='$party1'");  
  
  $array = mysqli_fetch_all($result);                      
 echo json_encode($array);

?>
