<?php
include('config.php');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$cfpass = $_POST['cfpass'];

$sql = "INSERT INTO admin (fname,lname,email,password,cfpass) VALUES ('$fname','$lname','$email','$password','$cfpass')";

if($conn->query($sql))

  header('location:index.php');

      die("Something Went Wrong");
 ?>
