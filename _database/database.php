<?php
    $hostname = "localhost";
    $user = "root";
    $password = "ankit";
    $database = "joomlatest";
    $prefix = "";
    $bd = mysql_connect($hostname,$user,$password) or die("Opps some thing went wrong");
    mysql_select_db($database, $bd) or die("Oops some thing went wrong");
    //$database=mysqli_connect($hostname,$user,$password,$database);
?>