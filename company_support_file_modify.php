<?php include 'session_manager.php';?>
<?php 
include 'config.php';
$name = $_GET['name'];
	//$name = "gsdf";
  $result = mysqli_query($conn,"SELECT * FROM company where cname='$name'") or die (mysqli_error($conn));     
  $array = mysqli_fetch_row($result);                      
 echo json_encode($array);
?>
