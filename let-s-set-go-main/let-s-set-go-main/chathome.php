<?php
session_start();
include 'connection.php';
?>

<html>
<head>
	<title></title>
</head>

<body>
<div id="main">


<div class="output">
	<?php
		$sql="SELECT * FROM posts";
		$result=$con->query($sql);
		if( isset($result->num_rows) && $result->num_rows >0){
			while($row=$result->fetch_assoc()){
				echo "User: ". $row['name'].", sent: ".$row['msg'].", at: ".$row['date']."<br>";
				echo "<br>";
			}
		}
		else
		{
			echo "No Messages yet";
		}
		$con->close();
		
	?>
</div>
<form method="POST" action="chatsend.php">
<textarea name="msg" placeholder="Type your message here..."  class="form-control"></textarea><br/>
<input type="submit" value="Send"/>
</body>
</html>