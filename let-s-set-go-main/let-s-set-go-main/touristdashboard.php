<?php
include 'touristnav.php';
if(isset($_SESSION['loginemail']))
{
	$email=$_SESSION['loginemail'];
}
?>

<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>

  .zoom:hover
{
	width:400px;
	height:400px;
}

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

/*slide show*/
#slideshow {

  /*margin-top: 5	%;*/
    max-width: 100%;
    min-width: 100%;
    height: 800px;
    padding: 5px;
    border-radius: 25px;
    border:5px solid #162558;
}

#r{border-radius: 25px; max-width:90.5%; min-width:90.5%; height:780px;opacity: 1;}

#slideshow > div {
    position: absolute;
    width: 1600px;
}

#i,#ii{
  width:200px;
  height:200px;
  border-radius: 25px;
}
#i:hover{
  width:250px;
  height:250px;
}
.row{
  background-color: #162558;
  opacity: 1.0;
}
#ro{
  background-color: #162558;
}
p,h3{color:white;}
  </style>
</head>
<body>


<div class="container-fluid" style="margin-top:5%;">

<center>
<div>
<a href="agra.php"><img src="loc/agra1.png" id="i" alt="agra"></a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href="delhi.php"><img src="loc/del1.png" id="i" alt="delhi"></a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href="mum.php"><img src="loc/mum1.png" id="i" alt="mumbai"> </a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href="rish.php"><img src="loc/rish1.png" id="i" alt="rishikesh"> </a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
</center>

</div>
<!-------------------------------content-------------------------->
<br><br>
<div class="container-flud" id="container-flud">
<br/>
  <div class="row"><br>
  
    <div class="col-md-2"><img src="images/blog.jpg" id="ii"></div>
    <div class="col-md-10">
      <center><h3 style="font-size:20;color:white;"><a href="se1.php">Experience/ Information about Excursions</a></h3></center><br/>
	  <p> All the necessary information regarding a trip will be collected from Travelers and presented at the very top. Rest all other information and experiences will be shared afterwards. A traveler can share experience, images, hotel
information, local cuisines, places to visit nearby, overall expenses and much more about the place, what they personally suggest about the place, rate the overall experience and so on.

	  </p>
       </div><br>
  </div>
<br/>


  <div class="row"><br>
    <div class="col-md-10">
      <center><h3 style="font-size:20;color:white;"><a href="expensecalculator.php">Expense Calculator</a></h3></center><br/>
	  <p> Splitting up the expense will become a puny task with the help of expense calculator. The website will have an expense calculator which will take number of people as one of the input parameters and expense by every individual as another input parameter and finally show who has to pay whom how much. The website will eliminate the role of pen and paper and make dividing expenses a hassle free task. 
	  </p> 
	</div>
         <div class="col-md-2"><img src="images/calc.png" id="ii"></div></center></div><br>
  </div>

  <div class="row"><br>
  <div class="col-md-2"><img src="images/tg.png" id="ii"></div>
    <div class="col-md-10">
      <center><h3 style="font-size:20;color:white;"><a href="bookguide.php"> Book Your Local Guide</a></h3></center><br/>
	  <p> Local Guides can also register themselves, and travelers can book a guide even before reaching the destination and talk to them on a personal chat feature. </p>
       </div>
         
  </div>

  
</body>
</html>