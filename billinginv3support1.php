<?php include 'session_manager.php';?>
<?php 
include 'config.php';

$party1 =$_GET['party1'];

	
  $result = mysqli_query($conn,"SELECT * FROM invoice where iparty='$party1'");  
  
  $array = mysqli_fetch_all($result);                      
 echo json_encode($array);

?>
