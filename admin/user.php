<?php
//echo md5("Dsuhani85@gmail.com");
//die();
session_start();
error_reporting(E_ALL ^ E_NOTICE);

//unset($_SESSION['adminlgin']);
//unset($_SESSION['calgoricadmincore']);


if (!isset($_SESSION['calgoricadmincore'])){
    echo '<script>window.parent.location.href = "sign.php";</script>';
    exit();

}


if ($_SESSION['calgoricadmincore'] != '1'){
    echo '<script>window.parent.location.href = "index.php";</script>';
    exit();

}


require_once('ufunc.php');


$email ="";
$msg = "";
$regisStp = 0;



//require_once('DeasyFileFolder.php');
//require_once('otpfunc.php');


if(isset($_POST["LogSubmit"])){
    // LOGIN SUBMIT

    $regisStp =0;
    $email=trim(strip_tags($_POST["email"]));
    $conpass = strip_tags($_POST["conpass"]);

    $rtrn = array();
    $count = getUser($email, $rtrn, $msg);

    if ($count > 0){
        $msg = "User already exist";
    } else if ($count == 0){
        $tar =array();
        $tar['email'] = $email;
        $tar['pass'] = $conpass;
        $otp = get_OTP();
        $tar['otp'] = $otp;
        
        $_SESSION['newuser']=$tar;

        if (sendOTP($email, $email, $otp)){
            $regisStp = 1;
        } else{
            $_SESSION['newuser'] = array();
            unset($_SESSION['newuser']);
            $msg = "Please Retry again.";
        }

    }

    
} else if(isset($_POST["RegFirstSubmitotp"])){
    $regisStp = 1;
    if (!isset($_SESSION['newuser'])){
        $regisStp = 0;
        $msg = "Error in submit.";
    } else {
        $email = $_SESSION['newuser']['email'];
        $otp = trim(strip_tags($_POST["otp"]));

        if ($otp == $_SESSION['newuser']['otp']){
            $pass = $_SESSION['newuser']['pass'];
            $_SESSION['newuser']['flag'] = 2;
            $tcnt = creatUser($msg);
            if ($tcnt > 0){
                $msg = "Successfully Created...";
                if (sendSuccessMail($email, $pass)){

                }
                
            }

             $_SESSION['newuser'] = array();
            unset($_SESSION['newuser']);
            echo '<script>alert("' . $msg . '")</script>';
            echo '<script>window.parent.location.href = "index.php";</script>';
            exit();

        }else{
            $msg="OTP Not Correct...";
        }
    }    

} else {
    if (isset($_GET['step'])){
        $tm = urldecode($_GET['step']);
        if ($tm == 2){
            if (isset($_SESSION['newuser'])){
                $email = $_SESSION['newuser']['email'];

                $otp = get_OTP();
                $_SESSION['newuser']['otp'] = $otp;

                if (sendOTP($_SESSION['newuser']['email'], $_SESSION['newuser']['email'], $otp)){
                    $regisStp = 1;
                } else{
                    $_SESSION['newuser'] = array();
                    unset($_SESSION['newuser']);
                    $msg = "Please Retry again.";
                }

            }
        }

    } 
}




?>

<!doctype html>
<html>
<head>
<?php include('head.php')?>

<style type="text/css">
</style>
 
<style>
    .required:after {
    content:" *";
    color: red;
  }


  .password-section {
         position: relative;
         /*display: inline-block;*/
      }

      .password-section .fa-eye {
         position: absolute;
         top: 55%;
         right: 22px; /* Adjust this value to control the icon's position */
         transform: translateY(-50%);
         cursor: pointer;
      }
      .password-section .fa-eye-slash {
         position: absolute;
         top: 55%;
         right: 22px; /* Adjust this value to control the icon's position */
         transform: translateY(-50%);
         cursor: pointer;
      }


</style>

</head>
<body>
    <?php include('preloader.php')?>
    <div id="wrapper">
        <!--BANNER-->
        <div id="banner" class="scrollto clearfix" data-enllax-ratio=".5">      
            <!--HEADER-->
            <div id="header" class="nav-collapse">
                <?php include('header.php')?>
            </div>
            <!--End of Header-->

            <!-- BANNER CONTENT-->

           

            <!--END BANNER CONTENT-->

        </div>
        <!--End BANNER-->


        <!--Main Content Area-->
        <main class="main container" id="content">
            <div style="margin-top: 60px"></div>

            <!--Contact Section-->
            <div id="contact" class="secondary-color text-center scrollto clearfix" style="background-color: #FFFFFF; margin-bottom:10px">
                <div class="col-4">
                    <div class="row no-padding-bottom clearfix">

                    </div>
                </div>
                
                <!--Content of the Right Side-->
                <div class="col-2-4">

                    <?php
                        if ($regisStp == 0){
                            include('signin.php');
                        } else if ($regisStp == 1 || $regisStp == 2){
                            include('otp.php');
                        }
                    ?>

                                    
                    <div style="margin-top:15px;"><label style="color: #CC2F70;"> <?php echo $msg ; ?> </label></div>
                                    
                    <h3></h3>

                </div>

            </div>

                <!--End Content Right Side-->
                
            <!--End of Contact Section-->
                

            <!--Footer-->
            <footer id="landing-footer" class="clearfix">
                <?php include('footer.php')?>
                <!--<script src="js/js/funcmain.js"></script>-->
                <script src="js/js/collapsible-menu.js"></script>
                <script src="js/mathscribe/jqmath-etc-0.4.6.min.js"></script>
                <script src="js/js/CodeStyler.js"></script>
                <script src="js/js/CodeStyler.js"></script>
                <!--<script src="js/DeasyDataHandle.js"></script>-->
            </footer>
            <!--End of Footer-->

           <script type="text/javascript">
                 var submit = document.getElementById('RegFirstSubmit');
               window.onload = function() {
                  //document.getElementById('timezone').value = GetTimeoffset();
                  submit.disabled =true;//.style.disabled  = true;//'disabled';//.setAttribute("disabled", "disabled");
                };

               
                // var submit = document.getElementById('RegFirstSubmit');
                //submit.style.disabled  = true;//'disabled';//.setAttribute("disabled", "disabled");
                const password = document.getElementById('pass');
                const confirm = document.getElementById('conpass');

                function check_pass(){

                }


                function conf_pass(){ 

                     if (password.value == confirm.value) {
                        confirm.style.color = 'green';
                        submit.disabled =false;
                     }else{
                        submit.disabled =true;
                        confirm.style.color = 'red';
                     }
                }

                function passtoggle(){
                    var passwordField = document.getElementById('conpass');
                    var eye = document.getElementById('togglePassword');

                    if (passwordField.getAttribute('type') === 'password') {
                        passwordField.setAttribute('type', 'text');
                        eye.classList.remove("fa-eye-slash");
                        eye.classList.add("fa-eye");
                    } else {
                        passwordField.setAttribute('type', 'password');
                        eye.classList.remove("fa-eye");
                        eye.classList.add("fa-eye-slash");
                    }
                }
           </script>


        </main>
        <!--End Main Content Area-->
        
        <!--Footer-->
        
        <!--End of Footer-->
    
    </div>
    <!-- End WRAPPER -->
</body>
</html>