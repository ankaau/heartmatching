                    <form class="form col-md-12 center-block" action="components/registration.php" method="post" autocomplete="off">
                        <div class="row">     
                            <div class="col-lg-6" style="z-index: 9;">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" placeholder="First Name" name="firstname" required>
                                </div>
                            </div>
                            <div class="col-lg-6" style="z-index: 9;">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" placeholder="Last Name" name="lastname" required>
                                </div>
                            </div>
                        </div>
                     <div class="row">     
                         <div class="col-lg-12">
                            <div class="form-group">
                                <input type="email" class="form-control input-lg" placeholder="Email Address" name="email" required>
                            </div>
                         </div>
                     </div>
                     <div class="row">   
                         <div class="col-lg-12">
                            <div class="form-group">
                                <div class="input-group">
                                    
                                    <input type="username" class="form-control input-lg" placeholder="username" name="username" id="username" required> 
                                    <span class="input-group-addon" id="status"></span>
                                </div>
                             </div>
                            </div>     
                        </div>
                        <div class="row">     
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="password" class="form-control input-lg" placeholder="pasword" name="password" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">    
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <button class="btn btn-primary ladda-button" data-style="zoom-in" type="submit"  id="SubmitButton" value="Upload" style="float:left;" name="signup_button"/>Register</button>
                                </div>
                            </div>
                        </div>
                    </form>