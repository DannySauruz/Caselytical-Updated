<?php

$conn=mysqli_connect("localhost","root","","test_db");

if(mysqli_connect_error())
{
	echo "Cannot Connect to database";
	exit();
}


?>