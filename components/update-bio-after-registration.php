<?php
    session_start();
    $temp= $_SESSION['username'];
    ini_set("display_errors",1);
    if(isset($_POST)){
        require '../_database/database.php';
		if(!isset($_SESSION){
			session_start();
			}
        $shortbio=$_REQUEST['shortbio'];
        $dob=$_REQUEST['dob'];
        $sql3="UPDATE userprofile SET shortbio='$shortbio',dob='$dob' WHERE username = '$temp'";
		$username=$_SESSION['username'];
        $sql4="INSERT INTO userprofile (shortbio,dob) VALUES ('$shortbio','$dob') WHERE username = '$temp'";
        $result = mysql_query("SELECT * FROM userprofile WHERE username = '$username'");
        if( mysql_num_rows($result) > 0) {
            mysql_query($sql3)or die(mysql_error());
            header("location:../edit-profile.php?username=$username");
        }
        else{
            mysql_query($sql3)or die(mysql_error());
            header("location:../edit-profile.php?username=$username");
        }  
    }    
?>