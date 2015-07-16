<?php
    session_start();
    include '../_database/database.php';
    if(isset($_REQUEST['signup_button'])){
        $email=$_REQUEST['email'];
        $firstname=$_REQUEST['firstname'];
        $lastname=$_REQUEST['lastname'];
        $username=$_REQUEST['username'];
        $password=$_REQUEST['password'];
        $sql="INSERT INTO userprofile(firstname,lastname,email,username,password,joindate,avatar) VALUES('$firstname','$lastname','$email','$username','$password',CURRENT_TIMESTAMP,'default.jpg')";
        mysql_query($sql) or die(mysql_error());
        $_SESSION['username'] = $username;
        header('Location: ../update-profile-after-registration.php?username='.$username);
    }
?>