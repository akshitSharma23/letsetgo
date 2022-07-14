<?php
session_start();
error_reporting(0);
if(isset($_SESSION['loginemail']))
{
	$email=$_SESSION['loginemail'];
	$login=1;
}
if($login==1)
{
	include'touristnav.php';
}
else
{
	include 'indexnavi.php';
}
?>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
<!DOCTYPE html>
<html lang="en">
<html>

<head>
	<title>Image Upload</title>
	<link rel="stylesheet"
		type="text/css"
		href="style.css" />



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>

#r
{
color:white;
background-color: #162558;
opacity: 1;
border:2px solid white;
max-width: 90.5%;
min-width: 90.5%;
}

.p{
	color: white;
  max-width: 90.5%;
  min-width: 90.5%;
}

#r{border-radius: 25px;  height:75%;opacity: 1;}



#i,#ii{
  width:50%;
  height:50%;
  border-radius: 25px;
}
#i:hover{
  width:250px;
  height:250px;
}
.row{
  background-color: #162558;
  opacity: 1;
}
#ro{
  background-color: #162558;
}
p,h3{color:white;}
  </style>
</head>
<body  style="background-color:#cce8fe;"><br>

<div class="row"><br>
    <div class="col-md-12">
      <center><h2 style="font-size:30;color:white;">Share Your Experience</h2></center><br/>
      <center>
	  <p>  
		  Hey Travelers, we hope your journey must have been great!! <br><br> You can share your experience about how your trip went?, what you did there?, how much you did spent there? How was your overall experince of the trip? what would you suggest other people to do there and not to do? we'll love your experience.
	  </p>
	  </center>
	</div>
</div>

<center>
<div id="content">
		<center>
		<form method="POST" action="se2.php" enctype="multipart/form-data">
		<table class="table table-bordered">
		<br>
		<br>
        <tr><td>Location</td><td>  <input type="text" name="location"  pattern="^[A-Za-z- ]+" title="only name no special character or number"></td></tr>
		<br>
		<br>
        <tr><td>Hotel Expenditure</td><td>   <input type="int" name="hotel" pattern="^[0-9-.]*" title="only numeric values"></td></tr>
		<br>
		<br>
		<br>
        <tr><td>Fuel Expenditure  </td><td> <input type="int" name="fuel" pattern="^[0-9-.]*" title="only numeric values"></td></tr>
		<br>
		<br>
		<br>		
        <tr><td>Misc Expenditure</td><td>   <input type="int" name="misc" pattern="^[0-9-.]*" title="only numeric values"></td></tr>
		<br>
		<br>
		<br>
        <tr><td>Your Experience (in 500 characters)</td><td>   <input type="textarea" name="yourexp" pattern="^[A-Za-z- -0-9-.]+" title="only name" maxlength="500"></td></tr>
		<br>
		<br>
		<br>
		<tr><td>No of Days Spent </td><td>  <input type="textarea" name="spent" pattern="^[A-Za-z- -0-9-.]+" title="only name"></td></tr>
		<br>
		<br>
		<br>
		<tr><td>No of people went</td><td>   <input type="textarea" name="went" pattern="^[A-Za-z- -0-9-.]+" title="only name"></td></tr>
		<br>
		<br>
		<br>
        <tr><td>Share Memories:</td><td><input type="file" name="uploadfile" value="upload image here" /></td></tr>
		<br>
		<br>
		<tr  colspan=2><td>
			<div>
				<button type="submit" name="upload">UPLOAD</button>
			</div>
		</td></tr>
</table>
</center>
		</form>
	</div>
</center>
</body>
</html>