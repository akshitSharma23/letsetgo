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
      <label for="location" id="color">Location:</label>
      <input type="text" class="form-control" name="location" id="lname" placeholder="Enter Location" required>
    </div>
    
    <div class="form-group">
      <label for="pwd" id="color">Password(mininum length 7):</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" 
      minlength=7; onkeyup="return validate()" required>
  </div>
  
  <div>
    <ul>
    <li id="uppercase">Atleast 1 Uppercase letter.</li>
    <li id="lowercase">Atleast 1 Lowercase letter.</li>
    <li id="special">Atleast 1 Special Character (!,@,#,$,%,_).</li>
    <li id="numeric">Atleast 1 number.</li>
    </ul>
 </div>
 <script>
  function validate()
{
  var pass=document.getElementById('pwd');
  var upper=document.getElementById('uppercase');
  var lower=document.getElementById('lowercase');
  var special=document.getElementById('special');
  var number=document.getElementById('numeric');

  
  if (pass.value.match(/[0-9]/))
  {
    number.style.color="green"
  }
  else{
    number.style.color="red"
  }

  if (pass.value.match(/[A-Z]/))
  {
    upper.style.color="GREEN"
  }
  else{
    upper.style.color="red"
  }
  if (pass.value.match(/[a-z]/))
  {
    lower.style.color="GREEN"
  }
  else{
    lower.style.color="red"
  }
  if (pass.value.match(/[!\@\#\$\%\_]/))
  {
    special.style.color="GREEN"
  }
  else{
    special.style.color="red"
  }
}
  </script>

	<div class="form-group">
      <label for="cpwd" id="color">Confirm Password:</label>
      <input type="password" class="form-control" id="cpwd" placeholder="Enter password again" name="cpwd" onmouseout="checkpass()">
    </div>

    <div class="form-group">
      <label for="photo" id="color">Guide Photo:</label>
      <input type="file" name="uploadfile" value="upload image here" required/>
    </div>
	
	<div id="showalert">
    </div>
    
	<div class="form-group" style="aligen:center">
      <button type="submit" class="btn btn-primary btn-block" id="sbutton" name="sbutton"  data-toggle="modal" data-target="#myModal1">Sign Up</button>
    </div>
    
	</form>
</div><br><br>

<?php
include'connection.php';

if(isset($_POST['sbutton']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['pwd'];
  $location=$_POST['location'];
  $file = $_FILES['uploadfile'];

  if(!preg_match("/^[a-zA-Z\s]+$/",$name))
  {
    echo "Please enter Name as string only";
  }
  $pattern = ' ^.*(?=.{7,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$ ';

   preg_match($pattern,$password);


 $query = mysqli_query($con, "SELECT * FROM tourguide where email='$email'");
 if(mysqli_num_rows($query)>0)
 {
  echo "<script>alert('email already exists please enter new email');</script>";
 }
else
{
	$user_reg_query="INSERT INTO tourguide(name,email,password,location,image) values ('$name','$email','$password','$location','$file')" or die($user_reg_query);
	
	if(mysqli_query($con,$user_reg_query))
	{
		echo "<script>alert('User Created Sucessfully');</script>";
		echo '<script>window.location="typeofuserlogin.php"</script>';
	}
	
	else
	{
		echo "<script>alert('Cannot create user');</script>";
	}
}
} 
?>
 </body>
 </html>