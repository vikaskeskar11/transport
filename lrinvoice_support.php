<?php include 'session_manager.php';?>
<?php 
include 'config.php';
$name = $_GET['ino'];
	
  $result = mysqli_query($conn,"SELECT *  from lorryreceipt where ino='$name'");  
  //$i=0;
  $array = mysqli_fetch_all($result);  
//$array1=explode(',',$array) ; 
 echo json_encode($array);

?>
