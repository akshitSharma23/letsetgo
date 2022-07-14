<!DOCTYPE html>
<html lang="en">
<head>
  <title>Signup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script type="text/javascript">
  function checkpass()
  {
    if(document.getElementById('pwd').value!=document.getElementById('cpwd').value)
    {
      document.getElementById('showalert').innerHTML="Password and Confirm Password Doesn't Match";
      document.getElementById('showalert').style.color="red";
      document.getElementById('sbutton').disabled=true;
    }
    else
    {
      document.getElementById("showalert").innerHTML="";
      document.getElementById('sbutton').disabled=false;
    }
  }

  </script>
  <style media="screen">
  input:invalid {
  border-color: red;
}
#color
{
color:white;
}

  </style>
</head>

<!---------- BODY --------------------->
<body>
<?php include'indexnavi.php';
?>
<div class="container" style="width:50%;align:center; margin-top:5%;border:2px solid lightgray; border-radius:50px;background-color:#162558;">
  <h2 id="color">Sign Up</h2>
  <form action="#" name="registration" method="post" id="registration">
    
	<div class="form-group">
      <label for="fname" id="color">Name:</label>
      <input type="text" class="form-control" name="name" id="fname" placeholder="Enter Name" required>
    </div>
   
    <div class="form-group">
      <label for="email" id="color">Email:</label>
      <input type="email" class="form-control" name="email" id="lname" placeholder="Enter email" required>
    </div>
    
    
	<div class="form-group">
      <label for="pwd" id="color">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
    </div>
    
	<div class="form-group">
      <label for="cpwd" id="color">Confirm Password:</label>
      <input type="password" class="form-control" id="cpwd" placeholder="Enter password again" name="cpwd" onmouseout="checkpass()">
    </div>
    
	<div id="showalert">
    </div>
    
	<div class="form-group" align="right">
      <button type="submit" class="btn btn-primary btn-block" id="sbutton" name="sbutton"  data-toggle="modal" data-target="#myModal1">Sign Up</button>
    </div>
    
	</form>
</div><br><br>
<?php
include'connection.php';
error_reporting(0);
if(isset($_POST['sbutton']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  
  $password=md5($_POST['pwd']);
  session_start();
  $_SESSION['email']=$email;
  $_SESSION['mobile']=$mobile;
  $_SESSION['name']=$name;
  $_SESSION['password']=$password;
  $_SESSION['gender']=$gender;
  $string = '0123456789';
  $string_shuffled=str_shuffle($string);
  $otp = substr($string_shuffled,1,6);
  $_SESSION['otp']=$otp;
  $result=mysqli_query($con,"select * from registration where email='$email'") or die(mysqli_error());
  $row= mysqli_fetch_array($result);
  if($row['email']!=$email)
  {
      if(strlen($mobile)==10)
          {
              $result=mysqli_query($con,"select * from otp where email='$email'") or die(mysqli_error());
               $row= mysqli_fetch_array($result);
              if($row['email']!=$email)
              {
              $user_reg_query="insert into otp(email,otp) values ('$email','$otp')" or die($user_reg_query);
               $user_reg_submit = mysqli_query($con , $user_reg_query) or die(mysqli_error($con));
               $_SESSION['so']=1;
              echo '<script>window.location="verifyotp.php"</script>';
              }
              else {
                  $user_reg_query="update otp set otp='$otp' where email='$email'" or die($user_reg_query);
               $user_reg_submit = mysqli_query($con , $user_reg_query) or die(mysqli_error($con));
               $_SESSION['so']=1;
                echo '<script>window.location="verifyotp.php"</script>';
              }
          }
          else {
              echo"<script>alert('enter correct mobile number');</script>";
              //header("Location: http://localhost/sms/signup.html");
          }

      }
   else
       {
      echo "account already exist !!!!";
       }
  }
 ?>
 </body>
 </html>
