<?php
$checkuser=$_POST['usertype'];

if($checkuser == "tourist")
{
	header("Location: touristsignup.php");
	exit;
}
else
{
	header("Location: tourguidesignup.php");
	exit;
}
?>