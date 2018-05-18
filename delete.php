<?php
include('config.php');

//$id = '';
if(isset($_GET["delete"]))
{
  $id = $_GET["delete"];
  $sql = "DELETE FROM admin WHERE id = '$id'";
  if($conn->query($sql) == TRUE)

  header('location:dashboard.php');

  die('Something Not Work Well');
}
 ?>
