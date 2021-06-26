<?php

$servername='localhost';
$username="root";
$password="";
$database='chatroom';

$conn = mysqli_connect($servername, $username, $password);
$db=mysqli_select_db($conn, $database);

if(!$db)
{
	echo ("ERROR: ".mysqli_connect_error());
}

?>