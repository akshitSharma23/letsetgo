<?php

session_start();
include 'connection.php';
$msg=$_POST['msg'];
$name=$_SESSION['loginemail'];

$sql="insert into posts(msg,name) values ('$msg','$name')";
$result=$con->query($sql);

header("location: chathome.php");
?>