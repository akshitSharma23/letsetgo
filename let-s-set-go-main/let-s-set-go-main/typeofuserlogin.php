<!DOCTYPE html>
<html lang="en">
<head>
  <title>Select Type of User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

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
<?php include'indexnavi.php';?>
  <div class="container" style="width:50%;align:center; margin-top:5%;border:2px solid lightgray; border-radius:50px;background-color:#162558;">
  <h2 id="color">Select Type of User</h2>
  <form action="checkuserlogin.php" name="registration" method="post" id="registration">
    
	<div class="form-group">
      <label for="usertype" id="color">Select Type of User:</label>
	  <select id="usertype" name="usertype" id="usertype" required>
		<option value="tourist">Tourist</option>
		<option value="tourguide">Tour Guide</option>
	  </select>
    </div>
    
	<div id="showalert">
    </div>
    
	<div class="form-group" align="right">
      <button type="submit" class="btn btn-primary btn-block" id="sbutton" name="sbutton"  data-toggle="modal" data-target="#myModal1">Log In</button>
    </div>
    
	</form>
</div><br><br>
 </body>
 </html>
