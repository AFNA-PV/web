<html>
<title>show table</title>
</head>
<body>
<?php
include ('connection.php');
$sql="select*from registration";
$data=mysqli_query($con,$sql);
if (mysqli_num_rows($data)){
?>
<table border="2">
<tr>
<th>Id</th>
<th>firstname</th>
<th>lastname</th>
<th>email</th>
<th>phone number</th>
<th>address</th>
<th>delete</th>
<th>update</th>
</tr>
<?php
while($result=mysqli_fetch_array($data)){
echo"
<tr>
<td>".$result['id']."</td>
<td>".$result['firstname']."</td>
<td>".$result['lastname']."</td>
<td>".$result['email']."</td>
<td>".$result['number']."</td>
<td>".$result['address']."</td>
</tr>
";
}
}
else
{
echo "no records found";
}
?>
</table>
</body>
</html>
