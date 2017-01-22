<?php include 'session_manager.php';?>
<?php 
include 'config.php';
$name = $_GET['name'];
	
  $result = mysqli_query($conn,"SELECT * FROM vehicle where regno='$name'");  
  
  $array = mysqli_fetch_row($result);                      
 echo json_encode($array);

?>
