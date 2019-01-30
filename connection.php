<?php
 
$host ="localhost";
$user = "root";
$password ="";
$database = "arjuna";

$conn = mysqli_connect($host,$user,$password);
if(mysqli_connect_errno()){
	echo("Failed connection".mysqli_errno());
}
    mysqli_select_db($conn,$database) or die ("database Not Found");
?>
