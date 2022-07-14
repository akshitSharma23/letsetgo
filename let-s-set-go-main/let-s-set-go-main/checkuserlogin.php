<?php
$checkuser=$_POST['usertype'];

if($checkuser == "tourist")
{
	header("Location: touristlogin.php");
	exit;
}
else
{
	header("Location: tourguidelogin.php");
	exit;
}
?>