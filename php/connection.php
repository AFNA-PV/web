<?php
$con=mysqli_connect('localhost','root','','test');
if($con){
	echo "connection successfull";
}
else{
	echo "error in connection";

}
?>