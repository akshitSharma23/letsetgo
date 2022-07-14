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

include 'connection.php';
$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {
  $location=$_POST['location'];
  $hotel=$_POST['hotel'];
  $fuel=$_POST['fuel'];
  $misc=$_POST['misc'];
  $spent=$_POST['spent'];
  $went=$_POST['went'];
  $yourexp=$_POST['yourexp'];
  
  $file = $_FILES["uploadfile"];
//$tempname = $_FILES["uploadfile"];	
  
//print_r($filename);
  
  $filename=$file['name'];
  $filepath=$file['tmp_name'];
  $fileerror=$file['error'];

  if($fileerror==0)
  {
      $destfile='upload/'.$filename;
  }

    move_uploaded_file($filepath,$destfile);
    
    //$create="CREATE TABLE experience (hotel,fuel,misc,yourexp,image) VALUES('$hotel','$fuel','$misc','$yourexp','$destfile')";
    
    $insert="INSERT INTO experience (location,hotel,fuel,misc,spent,went,yourexp,image) VALUES('$location','$hotel','$fuel','$misc','$spent','$went','$yourexp','$destfile')";
    $query=mysqli_query($con,$insert);
    // if($query)
    // {
    //     echo "inserted";
    // }
    // else{
    //     echo "not imserted";
    // }

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

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="container">

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

#r{border-radius: 24px;  height:75%;opacity: 1;}



#i,#ii{
  width:50%;
  height:50%;
  border-radius: 24px;
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
<centre>
<body  style="background-color:#cce8fe;"><br>

<table class="table table-bordered" style="border: 2px solid white;">
        <thead style="border: 2px solid white;">
            <tr style="border: 2px solid white;">
            <th style="border: 2px solid white;">Location</th>
            <!-- <th style="border: 2px solid white;">HOTEL</th>
            <th style="border: 2px solid white;">FUEL</th>--> 
            <th style="border: 2px solid white;">Total Expenditure</th> 
            <th style="border: 2px solid white;">No of days spent</th> 
            <th style="border: 2px solid white;">No of people went</th> 
            <th style="border: 2px solid white;">Your Experience</th>
            <th style="border: 2px solid white;">Memories</th>
            </tr>
        </thead>
        <tbody>
    <?php

    $select="SELECT * FROM experience";
    $query=mysqli_query($con,$select);

    while($result=mysqli_fetch_array($query))
    {
        ?>
        <tr>
            <td style="border: 2px solid white;"><?php echo $result['location']; ?></td>
            <td style="border: 2px solid white;"><?php echo $result['misc']+$result['fuel']+$result['hotel']; ?></td> 
            <td style="border: 2px solid white;"><?php echo $result['spent']; ?></td>
            <td style="border: 2px solid white;"><?php echo $result['went']; ?></td>
            <td style="border: 2px solid white;"><?php echo $result['yourexp']; ?></td>
            <td style="border: 2px solid white;"><img src="<?php echo $result['image']; ?>" width="400" height="280" alt="no image"></td>
        </tr>
    <?php
    }
}
    ?>
    </tbody>
    </table>
    </centre>
    </body>
  </html>