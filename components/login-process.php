<?php
    session_start();
    if(isset($_REQUEST['login_button'])||$_REQUEST['auto']==1){
        require '../_database/database.php';
        $errmsg_arr = array();
        $errflag = false;
        $username=  mysql_real_escape_string($_REQUEST['username']);
        $password=  mysql_real_escape_string($_REQUEST['password']);
        if($username == '') {
            $errmsg_arr[] = 'Username missing';
            $errflag = true;
        }
        if($password == '') {
            $errmsg_arr[] = 'Password missing';
            $errflag = true;
        }
        if($errflag) {
            $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
            session_write_close();
            header("location: authentication-check.php");
            exit();
        }
        $sql="SELECT username,password FROM userprofile WHERE username='$username'AND password='$password'";
        $result=  mysql_query($sql) or die(mysql_errno());
        $trws= mysql_num_rows($result);
        if($trws==1){
            $rws=  mysql_fetch_array($result);
            $_SESSION['username']=$rws['username'];
            $_SESSION['password']=$rws['password'];
            header("location:../home.php?username=$username&request=login&status=success");    
        }
        else {
            $errmsg_arr[] = 'user name and password not found';
            $errflag = true;
            if($errflag) {
                $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
                session_write_close();
                header("location: ../components/authentication-check.php");
                exit();
            }
        }
    }
?>