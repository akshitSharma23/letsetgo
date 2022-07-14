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
<html>
<head>
  <title>Index</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
  opacity: 1;
}
#ro{
  background-color: #162558;
}
p,h3{color:white;}
  </style>
</head>
<body  style="background-color:#cce8fe;"><br>
<!-------------------------------slide show scrpting-------------------------->
<div id="slideshow" >

   <div>
     <img src="slide/1.png" id="r" max-width="1600" min-width="1600" class="responsive">
   </div>
   <div>
     <img src="slide/2.png" id="r" class="responsive">
   </div>
   <div>
     <img src="slide/3.png" id="r" class="responsive">
   </div>
   <div>
     <img src="slide/4.png" id="r" class="responsive">
   </div>
   <div>
     <img src="slide/5.png" id="r" class="responsive">
   </div>
   <div>
     <img src="slide/6.png" id="r" class="responsive">
   </div>
</div>


<script>
$("#slideshow > div:gt(0)").hide();

setInterval(function() {
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
},  3000);
</script>
<!-------------------------------image hover-------------------------->
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
      <center><h3 style="font-size:20;color:white;">Experience/ Information about Excursions</h3></center><br/>
	  <p> All the necessary information regarding a trip will be collected from Travelers and presented at the very top. Rest all other information and experiences will be shared afterwards. A traveler can share experience, images, hotel
information, local cuisines, places to visit nearby, overall expenses and much more about the place, what they personally suggest about the place, rate the overall experience and so on.

	  </p>
       </div><br>
  </div>
<br/>


  <div class="row"><br>
    <div class="col-md-10">
      <center><h3 style="font-size:20;color:white;">Personal Connections</h3></center><br/>
	  <p>All the travelers have the privilege to talk to each other over the chat feature so that they can be prepared before planning a trip. They’ll also have the opportunity to talk to tour guides even before visiting the location itself.
	   </p> 
	</div>
         <div class="col-md-2"><center><img src="images/pc.jpg" id="ii"></center></div><br>
  </div>


<br/>
  <div class="row"><br>
    <div class="col-md-2"><img src="images/calc.png" id="ii"></div>
    <div class="col-md-10">
      <center><h3 style="font-size:20;color:white;">Expense Calculator</h3></center><br/>
	  <p> Splitting up the expense will become a puny task with the help of expense calculator. The website will have an expense calculator which will take number of people as one of the input parameters and expense by every individual as another input parameter and finally show who has to pay whom how much. The website will eliminate the role of pen and paper and make dividing expenses a hassle free task. 
	  </p>
       </div><br>
  </div>
<br/>
  <div class="row"><br>
    <div class="col-md-10">
      <center><h3 style="font-size:20;color:white;"> Book Your Local Guide</h3></center><br/>
	  <p> Local Guides can also register themselves, and travelers can book a guide even before reaching the destination and talk to them on a personal chat feature. </p>
       </div>
         <div class="col-md-2"><img src="images/tg.png" id="ii"></div><br>
  </div>
<br/>
</div>

<div class="container-fluid" id="ro">
<div class="row" >
  <div class="col-4">
<h3>ABOUT US</h3>
<p>Let's Set Go: Travel Comunity, explore what people have to say about places you wanna visit. Book a tour guide to help you with your journy. Share your own experinces with us. Manage your expense at one place.</p>
  </div>
  <div class="col-4">
<h3>SERVICES</h3>
<p>: Manage your expence</p>
<p>: Book your tour guide.</p>
<p>: Check people experince</p>
<p>: Explore world with a guide</p>
  </div>
  <div class="col-4">
<h3>CONNECT</h3>
<p>: Mail- LSG@travel.com</p>
  </div>
</div>
</div>
</body>
</html>

