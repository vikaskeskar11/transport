<?php include 'session_manager.php';?>
<?php 
include 'config.php';
$name = $_GET['ino'];
	
  $result = mysqli_query($conn,"SELECT *  from invoice where ino='$name'");  
  
  $array = mysqli_fetch_row($result);                      
 echo json_encode($array);

?>
