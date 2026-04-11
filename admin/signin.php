
                    <div class="section-heading">
                        <h3>ADMIN LOGIN</h3>
                        <h2 class="section-title"  style="color: #404040; font-size:22px">Log in to CALGORIC ADMIN</h2>
                    </div>

                    <div class="form-container">
                        <form name="login" action="#"  method="POST" enctype="multipart/form-data" autocomplete="off">

                            <label for="lname" class="name required">Registered-Email</label>
                            <input type="text" id="lname" name="email" placeholder="Your Email ID.." value="<?php echo $email; ?>" required>

                            <div style="float: left; width:100%">
                                <div class="password-section">
                                    <label for="conpass" class="name required">Password</label>
                                    <input type="password" class="form-control" id="conpass" name="conpass" placeholder="Type Your Password.." required>
                                    <span class="fa fa-eye-slash" id="togglePassword"  onclick="passtoggle()"></span>
                                </div>
                                <br>
                                <br>
                            </div>

                            <!--<input type="hidden" name="timezone" id="timezone" value="">-->
                                            
                            <input type="submit" class="button2" style="background-color: #FFFFFF; margin-top: 0px; margin-bottom: 15px;" value="Login" id="LogSubmit" name="LogSubmit">
                        </form>

                    </div>