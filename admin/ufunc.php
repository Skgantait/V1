<?php


mysqli_report(MYSQLI_REPORT_OFF);
$deasyMailPath = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'DeasyMail.php';
if (file_exists($deasyMailPath)) {
  require_once($deasyMailPath);
}




    define('SMTP_OTP', 'smtp.hostinger.com');
    define('PORT_OTP', 465);
    define('MAIL_OTP', 'dsuhani@calgoric.com');
    define('PASS_OTP', 'Dsuhani@85');
    define('TITLE_OTP', 'CALGORIC');





define("USER_SERVER", "localhost");
define("USER_USERNAME", "root");
define("USER_PASSWORD", "saikat12345");
define("USER_NAME", "calgoric_help");



function get_OTP(){
     return mt_rand(100000, 999999);
}
 

 function getMailBody($otp){
    $rslt = '<div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
  <div style="margin:50px auto;width:70%;padding:20px 0">
    <div style="border-bottom:1px solid #eee">      
      <img src="https://www.calgoric.com/images/logo.png" style="width: 150px; height: auto;">
    </div>
    <p style="font-size:1.3em;font-weight:700">Verify your email address,</p>

    <p>Please use the following OTP to complete your Sign Up procedures.</p>
    <h2 style="background: #00466a;margin: 0 auto;width: max-content;padding: 0 10px;color: #fff;border-radius: 4px;">' . $otp . '</h2>
    <p> </p>
    <div style="width:800px; margin:0 auto;text-align: center;">(This code is valid for 10 minutes)</div>
    <p style="font-size:0.9em;">Regards,<br />CALGORIC</p>
    <hr style="border:none;border-top:1px solid #eee" />
    <div style="float:right;padding:8px 0;color:#aaa;font-size:0.8em;line-height:1;font-weight:300">
      <p>Calgoric Private Limited</p>
      <p>Kolkata, W.B.-700003</p>
      <p>India</p>
    </div>
  </div>
</div>';



    return $rslt;
}


 function getSuccessMailBody($email, $pass){
    $rslt = '<div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
  <div style="margin:50px auto;width:70%;padding:20px 0">
    <div style="border-bottom:1px solid #eee">      
      <img src="https://www.calgoric.com/images/logo.png" style="width: 150px; height: auto;">
    </div>
    <p style="font-size:1.3em;font-weight:700">Your Admin Account Successfully Created</p>

    <p>Please use the following credential for login your admin account.</p>
    <h2 style="background: #00466a;margin: 0 auto;width: max-content;padding: 0 10px;color: #fff;border-radius: 4px;">UID: ' . $email . '</h2>
    <p> </p>
    <h2 style="background: #00466a;margin: 0 auto;width: max-content;padding: 0 10px;color: #fff;border-radius: 4px;">Password: ' . $pass . '</h2>

    
    <p style="font-size:0.9em;">Regards,<br />CALGORIC</p>
    <hr style="border:none;border-top:1px solid #eee" />
    <div style="float:right;padding:8px 0;color:#aaa;font-size:0.8em;line-height:1;font-weight:300">
      <p>Calgoric Private Limited</p>
      <p>Kolkata, W.B.-700003</p>
      <p>India</p>
    </div>
  </div>
</div>';



    return $rslt;
}

 

function sendOTP($email, $name, $otp){
  if (!class_exists('DeasyMail')) {
    return false;
  }
	$mailobj = new DeasyMail(SMTP_OTP, PORT_OTP, MAIL_OTP, PASS_OTP, TITLE_OTP);

	if (!$mailobj->sendMail($email,$name,getMailBody($otp),'OTP for e-mail verification.')){
            return false;
        }
	return true;
}

function sendSuccessMail($email, $pass){
  if (!class_exists('DeasyMail')) {
    return false;
  }
    $mailobj = new DeasyMail(SMTP_OTP, PORT_OTP, MAIL_OTP, PASS_OTP, TITLE_OTP);

    if (!$mailobj->sendMail($email, 'Admin User',getSuccessMailBody($email, $pass),'Successfully Created CALGORIC User Account.')){
            return false;
        }
    return true;
}



function getUser($email, &$rtrn, &$msg){
	$msg = "";
    $rtrn = array();
    $count = 0;

	$DB = mysqli_connect(USER_SERVER, USER_USERNAME, USER_PASSWORD, USER_NAME);
    if (!$DB) {
        //echo '<script type="text/javascript">alert("Connection error");</script>';
      //$msg =  "Connection error: " . mysqli_connect_error();
    	$count = -1;
      $msg =  "Connection error... ";
    } else{
        $sql = "SELECT * FROM admin WHERE email='" . $email ."'";
        if ($rslt = mysqli_query($DB, $sql)) {
            $count = mysqli_num_rows($rslt);
            if ($count > 0){
                $rows = mysqli_fetch_all($rslt, MYSQLI_ASSOC);
                $rtrn = $rows[0];
            } else {
            	$msg = "User not exist";
            }
            mysqli_free_result($rslt);
        }

        mysqli_close($DB);  
    }

    return $count;

}


function creatUser(&$msg){
	$msg = "";
    if (!isset($_SESSION['newuser'])){
    	$msg =  "Critical error... ";
    	return -1;
    }
	# Create connection
	$DB = mysqli_connect(USER_SERVER, USER_USERNAME, USER_PASSWORD, USER_NAME);
	if (!$DB) {
      $msg =  "Connection error-0... ";
      return 0;
	}

	$sql = "INSERT INTO admin (email, pass, flag) VALUES (?, ?, ?)";

	if ($stmt = mysqli_prepare($DB, $sql)) {
		$_SESSION['newuser']['pass'] = md5($_SESSION['newuser']['pass']);
		$stg = 'sss';
		mysqli_stmt_bind_param($stmt, $stg, $_SESSION['newuser']['email'], $_SESSION['newuser']['pass'], $_SESSION['newuser']['flag']);

		# Execute the statement
		if (mysqli_stmt_execute($stmt)) {	
			
			mysqli_close($DB);
            return 1;


		} else {
			$msg =  "Connection error-1: " . mysqli_connect_error();
			mysqli_close($DB);
			return 0;
		}
	} else{
		$msg =  "Connection error-2: " . mysqli_connect_error();
		mysqli_close($DB);
		return 0;
	}

}

?>