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
<script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
<!DOCTYPE html>
<html lang="en">
<html>
<head>

<title>Expense calculator</title>

<!-- <style>
    body{
        background-color:rgb(183, 0, 255);
    }
    .text-center{
        color: aliceblue;
        text-align: center;
    } -->
</style>

<!-- <script src="js/jquery-3.1.1.min.js"></script> -->

<!-- <script src="js/bootstrap.min.js"></script> -->
<script type="text/javascript">

    $(document).ready(function()
    {

        var html='<tr><td><input class="form-control" type="text" name="txtFullname[]"required=""></td><td><input class="form-control" type="int"name="Amount[]" required=""></td><td><input class="btn btn-warning" type="button" name="remove" id="remove" value="Remove"></td></tr>';
        
        var x=1;

        $("#add").click(function()
        {
            $("#table_field").append(html);
        }
        );
        $("#table_field").on('click','#remove',function()
        {
            $(this).closest('tr').remove();
        }
        );

    });
</script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>

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

#r{border-radius: 25px;  height:75%;opacity: 1;}



#i,#ii{
  width:50%;
  height:50%;
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
<body  style="background-color:#cce8fe;"><br>

<div class="row"><br>
    <div class="col-md-12">
      <center><h2 style="font-size:30;color:white;">Expense Calculator</h2></center><br/>
      <center><p> When you know the impact of little expenses, you will realise that there is nothing little in this world.</p></center>
	</div>
</div>

<center>
    <div class="container">
    <form class="insert-form" id="insert_form" method="post" action="">

    <div class="input-field">
    <table class="table table-bordered" id="table_field">
    <tr>
    <th>Full Name</th>
    <th>Amount</th>
    <th>Add or Remove</th>
    </tr>


    <?php
        $conn = mysqli_connect("localhost","root","","lsg");
        $txtFullname="";
        $Amount=0;
        $t="TRUNCATE TABLE expense";
        if(mysqli_query($conn,$t)){}
        else{
            echo failed;
        }
        if(isset($_POST['save'])){
            $txtFullname=$_POST['txtFullname'];
            $Amount=$_POST['Amount'];

            foreach($txtFullname as $key => $value){
                $save="INSERT INTO expense(name, amount) VALUES('".$value."', '".$Amount[$key]."')";
                $query=mysqli_query($conn, $save);
            }
        }
    ?>


    <tr>
    <td><input class="form-control" type="text" name="txtFullname[]" required=""></td>
    <td><input class="form-control" type="int"name="Amount[]" required=""></td>
    <td><input class="btn btn-warning" type="button" name="add" id="add" value="Add"></td>
    </tr>
    </table>
    <center>
    <input class="btn btn-success" type="submit" name="save" id="save" value="Save Data">
    </center>
    </div>
</form>



<table class="table table_striped">
    <tr>
        <th>Full Name</th>
        <th>Amount</th>
    </tr>

                        <!-- fetching satart from here -->
    <?php
        $select="SELECT * FROM expense";
        $result=mysqli_query($conn,$select);
        $count="SELECT COUNT(name) as total FROM expense";

        $r=mysqli_query($conn,$count);
        $values=mysqli_fetch_assoc($r);
        $num_rows=$values['total'];
        echo $num_rows."<br>"."<br>"."<br>";

        if($result)
        {
            $n=array();
            $e=array();

            $name=array($num_rows);
            $exp=array($num_rows);

            $nam="SELECT name FROM expense";
            $nam_result=mysqli_query($conn,$nam);
            $amt="SELECT amount FROM expense";
            $amt_result=mysqli_query($conn,$amt);
            while($rows=mysqli_fetch_array($nam_result)){ 
                $n[]=$rows;}
            while($rows=mysqli_fetch_array($amt_result)){ 
                $e[]=$rows;}
            for($i=0;$i<$num_rows;$i++){
                $name[$i]=$n[$i][0];}
            for($i=0;$i<$num_rows;$i++){
                $exp[$i]=$e[$i][0];
            }
            $n=$num_rows;
            // for($i=0;$i<$num_rows;$i++){
            //     echo $name[$i]." ";
            //     echo $exp[$i]." ";
            // }
            
            $k=0;
            $nam="";
            for($i=0;$i<$n;$i++){
                for ($j=$i;$j<$n;$j++){
                    if($exp[$i]<$exp[$j]){
                        $k=$exp[$j];
                        $exp[$j]=$exp[$i];
                        $exp[$i]=$k;
                        $nam=$name[$i];
                        $name[$i]=$name[$j];
                        $name[$j]=$nam;
                    }
                }
            }
        for($i=0;$i<$n;$i++){
            $e=$exp[$i]/$n;
            for($j=$i+1;$j<$n;$j++){
                echo $name[$j];
                echo " outstanding to ";
                echo $name[$i];
                echo " --> ";
                echo $e-($exp[$j]/$n);
                echo "<br>";
            }
        }


            while($rows=mysqli_fetch_array($result)){ 
                // $name[]=$rows;

                    ?>
    <tr>

        <?php
            
        ?>

            <td><?php echo $rows['name'];?></td>
            <td><?php echo $rows['amount'];?></td>
    </tr>
    <?php
                }
                // print_r($name);
                // print_r($exp);
            }
        else
        {
            echo "Failed" ;
        }

        $t="TRUNCATE TABLE expense";
        if(mysqli_query($conn,$t)){}
        else{
            echo failed;
        }

    ?>
                            <!-- ends here -->

</table>


</div>
</center>

</body>
</html>