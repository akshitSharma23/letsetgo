<?php
session_start();
//error_reporting(0);
include 'connection.php';
$useremail=$_POST['email'];
$pass=md5($_POST['pswd']);
$result=mysqli_query($con,"SELECT * from tourist where email='$useremail'") or die(mysqli_error($con));
$row=mysqli_fetch_array($result);
if(isset($_POST['login']))
{
if($row['email']==$useremail && $row['password']==$pass)
{
    $_SESSION['loginemail']=$row['email'];
    $_SESSION['login']=1;
  	header('location:touristdashboard.php');
}
else {
    echo "<script>alert('incorrect password');</script>";
  }
}
 ?>