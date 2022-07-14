<?php
session_start();
include'connection.php';

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
$location= $_POST['loc'];

if (isset($_POST['loc'])) {
  $query = "SELECT * FROM city WHERE location like'$location'";
  $result = mysqli_query($con,$query);

  $select="SELECT * FROM experience WHERE location LIKE '$location'";
  $query=mysqli_query($con,$select);
?>
  <html>
  <head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<center><u><b><h2>People's Experiences</h2></b></u><center>
<centre><table class="table table-bordered" style="border: 2px solid black;">
    <thead style="border: 2px solid ;">
        <tr style="border: 2px solid;">
        <th style="border: 2px solid;">Hotel</th>
        <th style="border: 2px solid;">Fuel</th>
        <th style="border: 2px solid;">Misc</th>
        <th style="border: 2px solid;">People's Review</th>
        <th style="border: 2px solid;">Memories</th>
        </tr>
    </thead><?php
  while($result=mysqli_fetch_array($query))
  {
      ?>
      
        <tbody>
      <tr>
          
          <td style="border: 2px solid white;"><?php echo $result['hotel']; ?></td>
          <td style="border: 2px solid white;"><?php echo $result['fuel']; ?></td>
          <td style="border: 2px solid white;"><?php echo $result['misc']; ?></td>
          <td style="border: 2px solid white;"><?php echo $result['yourexp']; ?></td>
          <td style="border: 2px solid white;"><img src="<?php echo $result['image']; ?>" width="400" height="280"></td>
      </tr>
  </tbody>
  </table>
  <center><u><b><h2>Tour Guides Available in the city</h2></b></u><center>
  </centre>
<?php
 $s="SELECT * FROM tourguide WHERE location LIKE '$location'";
 $q=mysqli_query($con,$s);
?>
 <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
<table class="table table-bordered" style="border: 2px solid black;">
        <thead style="border: 2px solid ;">
            <tr style="border: 2px solid ;">
            <th style="border: 2px solid ;">Name</th>
            <th style="border: 2px solid ;">Email</th>
            <th style="border: 2px solid ;">Location</th>
            </tr>
        </thead>
        <tbody>
<?php
 while($result=mysqli_fetch_array($q))
 {
?>
      <tr> 
          <td style="border: 2px solid white;"><?php echo $result['name']; ?></td>
          <td style="border: 2px solid white;"><?php echo $result['email']; ?></td>
          <td style="border: 2px solid white;"><?php echo $result['location']; ?></td>
          <!-- <td style="border: 2px solid white;"><img src="<?php echo $result['image']; ?>" width="400" height="280"></td> -->
      </tr>
      </tbody>
    </table>
<?php
}?>
  </body>
  </html>
  <?php
}
} 
else {
  echo 'Error: '.mysql_error();
}
?>