<?php
session_start();
if(isset($_SESSION['loginemail']))
{
    session_destroy();
    session_unset();
header("Location: index.php"); /* Redirect browser */
     exit();
}
?>
