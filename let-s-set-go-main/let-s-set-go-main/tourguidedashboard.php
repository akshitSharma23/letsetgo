<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
//error_reporting(0);
if(isset($_SESSION['email']))
{
	$email=$_SESSION['email'];
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
    ?>




<!-- 
// }            <----------- un-comment this after deleting below code 
                    code written below is data fetching from DB
-->


<html>
    <head>
    </head>

    <body>
    <table>
        <thead>
            <tr>
            <th>Name </th>
            <th>Email </th>
            <th>Password </th>
            <th>Location </th>
            <th>Image </th>
            </tr>
        </thead>
        <tbody>
    <?php

    $select="SELECT * FROM tourguide WHERE email='$email'";
    $query=mysqli_query($con,$select);
    

    while($result=mysqli_fetch_array($query))
    {
        ?>
        <tr>
            <td><?php echo $result['name']; ?></td>
            <td><?php echo $result['email']; ?></td>
            <td><?php echo $result['password']; ?></td>
            <td><?php echo $result['location']; ?></td>
            <td><img src="<?php echo $result['image']; ?>" width="120" height="80"></td>
        </tr>
    <?php
    }

    ?>
    </tbody>
    </table>
    </body>
</html>