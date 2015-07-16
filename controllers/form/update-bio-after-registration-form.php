<form action="components/update-bio-after-registration.php" method="post" enctype="multipart/form-data" id="UploadForm" autocomplete="off">
<?php
    $username = mysql_real_escape_string($_REQUEST['username']);
    $sql = "SELECT * FROM userprofile WHERE username='$username'";
    $result = mysql_query($sql);
    $rws = mysql_fetch_array($result);
?>
    <div class="col-md-6">
        <div class="form-group float-label-control">
            <label for="">Description</label>
            <textarea class="form-control" placeholder="<?php echo $rws['shortbio'];?>" rows="10" placeholder="<?php echo $rws['shortbio'];?>" name="user_shortbio" value="<?php echo $rws['shortbio'];?>" required><?php echo $rws['shortbio'];?></textarea>
        </div>
    </div>    
    <div class="col-md-6">
        <div class="form-group float-label-control">
            <label for="">Age</label>   
            <input type="text" class="form-control" placeholder="<?php echo $rws['dob'];?>" name="user_dob" value="<?php echo $rws['dob'];?>" required>
        </div>
    </div>          
<?php
    $username =  $_POST['username'];
?>     
    <hr>                 
    <div class="submit">           
        <center>
            <button class="btn btn-primary ladda-button" data-style="zoom-in" type="submit"  id="SubmitButton" value="Upload" />Save Your Profile</button>
        </center>
    </div>
</form>