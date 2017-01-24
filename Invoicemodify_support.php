
<?php 
include 'config.php';
$name = $_GET['ino'];
	
  $result = mysqli_query($conn,"select * from invoice where ino='$name'");  
  
  $array = mysqli_fetch_row($result);
  //$array1 = mysql_fetch_row($result1);
 echo json_encode($array);
 //echo json_encode($array1);

?>
