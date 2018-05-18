<?php
include('config.php');

if(isset($_POST['update']))
{
  $id = $_POST['id'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cfpass = $_POST['cfpass'];

  $sql = "UPDATE admin SET fname = '$fname' ,lname = '$lname',email='$email',password = '$password' , cfpass = '$cfpass' ";
  if($conn->query($sql))

  header('location:dashboard.php');

  die('Data Not Updated');

}


 ?>
