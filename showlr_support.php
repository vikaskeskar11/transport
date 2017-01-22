<?php include 'session_manager.php';?>
<?php 
include 'config.php';
$name = $_GET['ino'];
$name1=	$_GET['lrno'];
  $result = mysqli_query($conn,"SELECT *  from lorryreceipt where lno='$name1' && status=1 && ino='$name'");  
  //$i=0;
  $array = mysqli_fetch_row($result);  
//$array1=explode(',',$array) ; 
 echo json_encode($array);

?>
