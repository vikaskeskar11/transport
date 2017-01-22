<?php 
include 'config.php';
$name = $_GET['name'];
  $result = mysqli_query($conn,"SELECT * FROM persons where name='$name'") or die (mysqli_error($conn));     
  $array = mysqli_fetch_row($result);                      
 echo json_encode($array);
?>
