<?php
$servername = "localhost";
$username = "";
$password = "ankit";
$conn = new mysql($servername,$username,$password);
if($conn->connect_error)
{
	die("Connection failed :".$conn->connect_error);
}