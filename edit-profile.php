<?php include 'components/authentication.php' ?>
<?php include 'components/session-check.php' ?>
<?php include 'controllers/base/head.php' ?>
<?php include 'controllers/navigation/first-navigation.php' ?>          
    <div class="container">
	   <div class="no-gutter row"> 
           <div class="col-md-12">
               <div class="panel panel-default" id="sidebar">
                   <div class="panel-body">                
<?php          
    $sql = "SELECT * FROM userprofile where username='$username'";
    $result = mysql_query($sql) or die(mysql_error()); 
    $rws = mysql_fetch_array($result);
?>             
<?php include 'controllers/form/edit-profile-form.php' ?>
                   </div>
               </div>
           </div>
        </div>
    </div>