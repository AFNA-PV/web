<html>
<head><title>
insert</title>
</head>
<body>
<h1>INSERT DATA</h1>
<form action="index.php" method="post">
<input type="text" name="firstname" placeholder="firstname"><br><br>
<input type="text" name="lastname" placeholder="lastname"><br><br>
<input type="text" name="email" placeholder="email"><br><br>
<input type="text" name="number" placeholder="number"><br><br>
<input type="text" name="address" placeholder="address"><br><br>
<input type="submit" name="submit" value="insert"><br><br>
</form>
<button><a href="show.php">show data</a></button>
</body>
</html>

<?php
error_reporting(0);
include 'connection.php';

if(isset($_POST['submit'])){
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$number=$_POST['number'];
	$address=$_POST['address'];

	$sql="INSERT INTO
	registration(firstname,lastname,email,number,address)VALUES
	('$firstname','$lastname','$email','$number','$address')";
	
	$data=mysqli_query($con,$sql);
	
	if($data)
	{
		echo "inserted record successfull";
	}
	else
	{
		echo "error in connection";
	}
}
?>