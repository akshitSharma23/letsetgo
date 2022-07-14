<?php
include 'connection.php';
include 'touristnav.php';
$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {
    $hotel=$_POST['hotel'];
    $fuel=$_POST['fuel'];
    $misc=$_POST['misc'];
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

    echo $destfile;

    move_uploaded_file($filepath,$destfile);
    $insert="INSERT INTO experience (hotel,fuel,misc,yourexp,image) VALUES('$hotel','$fuel','$misc','$yourexp','$destfile')";
    $query=mysqli_query($con,$insert);
    // if($query)
    // {
    //     echo "inserted";
    // }
    // else{
    //     echo "not imserted";
    // }
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
            <th>HOTEL</th>
            <th>FUEL</th>
            <th>MISC</th>
            <th>YOUR_EXP</th>
            <th>IMAGE</th>
            </tr>
        </thead>
        <tbody>
    <?php

    $select="SELECT * FROM experience";
    $query=mysqli_query($con,$select);

    

    while($result=mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $result['hotel']; ?></td>
            <td><?php echo $result['fuel']; ?></td>
            <td><?php echo $result['misc']; ?></td>
            <td><?php echo $result['yourexp']; ?></td>
            <td><img src="<?php echo $result['image']; ?>" width="120" height="80"></td>
        </tr>
    <?php
    }
}
    ?>
    </tbody>
    </table>
    </body>