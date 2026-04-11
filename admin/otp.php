<div class="section-heading">
                                        <h3>OTP Verification</h3>
                                        <h2 class="section-title"  style="color: #404040; font-size:22px">An OTP has been sent to your email "<?php echo $email; ?>"</h2>
                                    </div>
                    
                                    <div class="form-container">
                                        <div class="section-heading">
                                            <h3>CALGORIC</h3>
                                        </div>
                                        <h3></h3>
                                        <form name="registerotp" action="#"  method="POST" enctype="multipart/form-data" autocomplete="off">

                                            <div style="margin-bottom: 30px;">
                                                <label for="otp" class="name">Enter OTP Code</label>
                                                <input type="text" id="otp" name="otp" placeholder="OTP..">

                                                <div style="float: right;margin-bottom: 30px; margin-right: 30px;"><a href="?step=2">Resend OTP</a></div>                           
                            
                                                <!--<input type="hidden" name="timezone" id="timezone" value="">-->
                                                <input type="submit" class="button2" style="background-color: #FFFFFF; margin-top: 0px; margin-bottom: 15px;" value="Submit" name="RegFirstSubmitotp">   
                                            </div>                          
                                        </form>
                                    </div>
                                    