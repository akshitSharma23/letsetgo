
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<style>
#color
{
color:white;
}
</style>
</head>
<body>
  <?php include 'indexnavi.php'; ?>
<div class="container" style="width:35%;align:center; margin-top:5%;border:2px solid gray; border-radius:50px;background-color:#162558;">
  <br><br>
  
  <h2 id="color">User Login</h2>
  <form action="#" method="post">
    <div class="form-group">
      <label for="email" id="color">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group">
      <label for="pwd" id="color">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
    </div>

    <button type="submit" class="btn btn-primary btn-block" name="login">Submit</button>

  </form><br><br>
  <center id="color">Don't have an account ?<a href="typeofusersignup.php">Create account !</a></center>
</div><br><br>

<?php
// error_reporting(0);
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
  	header('location:tourguidedashboard.php');
    
}
else {
    echo "<script>alert('incorrect password');</script>";
  }
}
 ?>

 </body>
 </html>