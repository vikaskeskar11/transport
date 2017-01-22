<?php include 'session_manager.php';?>
<?php 
include 'config.php';
$name = $_GET['name'];
	//$name = "gsdf";
  $result = mysqli_query($conn,"SELECT paddress,pcity,pdistrict,pstate,ppincode FROM persons where name='$name'");     
  $array = mysqli_fetch_row($result);                      
 echo json_encode($array);
?>
