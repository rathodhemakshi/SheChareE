<?php 
 session_start();
$con=mysqli_connect("localhost","root","");

if($con)

$db=mysqli_select_db($con,"spms");

?>