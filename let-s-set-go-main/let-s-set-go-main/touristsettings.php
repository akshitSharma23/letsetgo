<?php
include 'connection.php';
error_reporting(0);
session_start();
$login=$_SESSION['login'];
if($login==1)
{
?>
<html>
<head>
	<title>SETTINGS</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style type="text/css">
	.row
	{
		background-color:#162558;
		width:95%;
		border-radius: 25px;
	}
	label,h3,u
	{
		color:white;
	}
</style>
</head>

<body>
	<?php
	include 'touristnav.php';
	include 'connection.php';
	?>
<center><h1 style="color:#162558;">Update Credentials</h1></center>
<center>
<div class="row" style="margin-top: 90px;">

	<div class="col">
			<form class="form-group form-inline" method="post"><center>
			<center><h3><u>Update Password</u></h3></center>
    		<label for="pwd">Old Password :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
    		<input type="password" class="form-control" name="oldpwd" requied><br><br>
    		<label for="pwd">New Password:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
    		<input type="password" class="form-control" id="pwd" name="pwd" required><br><br>
   			<label for="pwd">Confirm Password:&nbsp</label>
    		<input type="password" class="form-control" name="cpwd" id="cpwd" required><br><br>
    		<button type="submit" class="btn btn-success" name="pass">Update</button>
    		<br/><br/>
			</center>
		</form>
	</div>

</div>
</center>

<?php

session_start();
$email=$_SESSION['loginemail'];
if(isset($_POST['pass']))
{
$password=md5($_POST['oldpwd']);
$np=md5($_POST['pwd']);
$cnp=md5($_POST['cpwd']);
if($np==$cnp)
{
 $result= mysqli_query($con,"select * from tourist where email='$email'") or die(mysqli_error());
 $row= mysqli_fetch_array($result);

 if($row['password']==$password)
 {
	 mysqli_query($con,"update tourist set password='$np' where password='$password'") or die(mysqli_error());
	 echo '<script>alert("password updated successfully");</script>';
	 header('location:typeofuserlogin.php'); 
 }
 else {
 	{	echo '<script>alert("enter correct old password");</script>';}
 }
}
else {
	echo '<script>alert("enter same password");</script>';
}
}


?>
</body>
</html>
<?php }
else {
header('location:typeofuserlogin.php');
}
 ?>
