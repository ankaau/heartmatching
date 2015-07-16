<?php include 'components/session-check-index.php' ?>
<?php include 'controllers/base/head.php' ?>
<div class="container">
    <div class="row">
      <div class="main">
          <h3 style="color:#65aeee;">Vendor Log In</h3>
          
          <form role="form" action="components/login-process.php" method="post" name="login">
              <div class="form-group">
                  <label for="inputUsernameEmail">Username or email</label>
                  <input type="text" class="form-control" id="inputUsernameEmail" name="username" placeholder="Username">
              </div>
              <div class="form-group">
                  <label for="inputPassword">Password</label>
                  <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
              </div>
              <button type="submit" class="btn btn btn-primary ladda-button" data-style="zoom-in" value="Sign In" name="login_button">
                  Log In  
              </button>
			  <h4>Not Registered yet ?<a href="index.php">Sign Up</a></h4>
          </form>
        </div>
    </div>
</div>