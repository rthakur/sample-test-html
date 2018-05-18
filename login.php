<?php
session_start();
//echo session_id();die;
include('config.php');

if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $result = $conn->query("SELECT * FROM admin WHERE email = '$email' AND password = '$password'");
    $row = mysqli_fetch_assoc($result);
    //echo '<pre>';
    //print_r($row);
    //die;
      $_SESSION['user'] = $row['email'];
      //echo $_SESSION['user'];die;
      if(isset($_SESSION['user']))
      //header("refresh:5; url=dashboard.php");
      //echo "You are Successfully Logged In";
      echo '<script> window.open("dashboard.php","_self");</script>';

      die('Please Fill Valid Email and Password Or Fill the information for login');



}









 ?>
