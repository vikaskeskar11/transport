<?php 
include 'config.php';
$name = $_GET['lrno'];
	
  $result = mysqli_query($conn,"SELECT * FROM lorryreceipt where lno='$name'");  
  
  $array = mysqli_fetch_row($result);                      
 echo json_encode($array);

?>
