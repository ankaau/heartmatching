<?php
    session_start();
    $temp= $_SESSION['username'];
    ini_set("display_errors",1);
    if(isset($_POST)){
        require '../_database/database.php';
        session_start();
        $Destination = '../userfiles/avatars';
        if(!isset($_FILES['ImageFile']) || !is_uploaded_file($_FILES['ImageFile']['tmp_name'])){
            $NewImageName= 'default.jpg';
            move_uploaded_file($_FILES['ImageFile']['tmp_name'], "$Destination/$NewImageName");
        }
        else{
            $RandomNum = rand(0, 9999999999);
            $ImageName = str_replace(' ','-',strtolower($_FILES['ImageFile']['name']));
            $ImageType = $_FILES['ImageFile']['type'];
            $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
            $ImageExt = str_replace('.','',$ImageExt);
            $ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
            $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
            move_uploaded_file($_FILES['ImageFile']['tmp_name'], "$Destination/$NewImageName");
        }
        //$firstname=$_REQUEST['firstname'];
        //$lastname=$_REQUEST['lastname'];
        //$email=$_REQUEST['email'];
        //$password=$_REQUEST['password'];
		$shortbio=if(isset($_REQUEST['shortbio']))?$_REQUEST:"";
        $dob=if(isset($_REQUEST['dob']))?$_REQUEST:"";
        $sql3="UPDATE userprofile SET avatar='$NewImageName',shortbio='$shortbio',dob='$dob' WHERE username = '$temp'";
        $username=$_SESSION['username'];
        //$sql4="INSERT INTO userprofile (firstname,lastname,email,username,password,avatar) VALUES ('$firstname','$lastname','$email','$username','$password','$NewImageName') WHERE username = '$temp'";
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