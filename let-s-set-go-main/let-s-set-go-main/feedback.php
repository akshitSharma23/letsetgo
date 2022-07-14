
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style>
	#div{background-color:#162558;color:white;
	border-radius:25px; width:70%;}
	textarea{color:black;}
  #color{color:white;}
</style>
<body>
  <?php
  include'dashboardnavi.php';
  ?><br><br>
  <div class="content-fluid"style="background-color:#162558;margin-left: 15%;width:70%;border-radius:25px;"><br><br>
  <form action="#" method="POST">
    <div class="form-group">
      <label for="points" id="color">Rate from 1 to 5:</label>
      <input type="range" class="form-control" name="points" min=0 max=5 required>
    </div>
    <div class="form-group">
      <label for="comment" id="color">Comment:</label>
      <textarea name="comment" class="form-control" placeholder="Comment" rows="10" required></textarea>
    </div><br>
    <div class="form-group">
      <button type="submit" name="feed"  class="btn btn-success btn-block">SUBMIT</button>
    </div><br>
    </div>
</form>
</div>
</body>
</html>
<?php
if(isset($_POST['feed']))
{
session_start();
      $email=$_SESSION['loginemail'];
  $r=$_POST['points'];
  $com=$_POST['comment'];
  $user="insert into feedback(rate,comment,email) values ('$r','$com','$email')" or die($user);
    $user_submit = mysqli_query($con , $user) or die(mysqli_error($con));
    echo "<script>alert('Thank for your Feedback')</script>";

}


?>
