<?php include '_database/database.php' ?>
<?php include 'controllers/base/head.php' ?>
        <div class="container" style="padding-top:100px;">
            <div class="no-gutter row">             
                <div class="col-md-12">
                     <center><h2 style="color:#65aeee;">Fill Up the details below to Continue</h2></center>
              	     <div class="panel panel-default" id="sidebar">
                        <div class="panel-body">
<?php
    $sql = "SELECT * FROM userprofile where username='$username'";
    $result = mysql_query($sql) or die(mysql_error()); 
    $rws = mysql_fetch_array($result);
?>                
<?php include 'controllers/form/update-profile-after-registration-form.php' ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>