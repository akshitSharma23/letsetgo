
<?php
//error_reporting(0);
include 'connection.php';
$useremail=$_POST['email'];
$pass=$_POST['pswd'];
$result=mysqli_query($con,"SELECT * FROM tourguide WHERE email='$useremail'") or die(mysqli_error($con));
$row=mysqli_fetch_array($result);

if(isset($_POST['login']))
{
if($row['email']==$useremail && $row['password']==$pass)
{
    $_SESSION['email']=$row['email'];
    $_SESSION['login']=1;
  	header('Location:tourguidedashboard.php');
}
else {
    echo "<script>alert('incorrect password');</script>";
  }
}
 ?>