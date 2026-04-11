<?php
$_POST_RESPONSE = [
            'type'=>'UploadFile',
            'error'=> 0, // error 0 is no error, error 1 is system error, error 2 is condition not meet
            'message' => '',
            'response'=> []//['PostJson'=> [], 'UploadFile'=>[]]
        ];

if (!$_FILES) {
    $_POST_RESPONSE['error'] = 1;
    $_POST_RESPONSE['message'] = 'No file found';
    
    echo json_encode($_POST_RESPONSE);
    exit();
}

$_FILES_COUNT = count($_FILES['file']['name']);
if ($_FILES_COUNT < 1) {
    $_POST_RESPONSE['error'] = 1;
    $_POST_RESPONSE['message'] = 'No file found';
    //$_POST_RESPONSE['response'] = $_FILES;
    
    echo json_encode($_POST_RESPONSE);
    exit();
}

/*
$_DEASYPOSTCHECK = 1;
if (!isset($_HOST) || !isset($_SELF)) {
    //http_response_code(405);
    $_POST_RESPONSE['error'] = 1;
    $_POST_RESPONSE['message'] = 'Unauthorized access!! 4';
    $_DEASYPOSTCHECK = 0;
} else {
    if ($_SERVER['HTTP_HOST'] != $_HOST || $_SERVER['PHP_SELF'] != $_SELF) {
        $_POST_RESPONSE['error'] = 1;
        $_POST_RESPONSE['message'] = 'Unauthorized access!! 5';
        $_DEASYPOSTCHECK = 0;
    } else {
        if ($_POST_RESPONSE['type']  != 'PostJson' && $_POST_RESPONSE['type']  != 'UploadFile'){
            $_POST_RESPONSE['error'] = 1;
            $_POST_RESPONSE['message'] = 'Unauthorized access!! 6';
            $_DEASYPOSTCHECK = 0;
        }
    }
}
 */
/*
 
//$_CLIENT_UID
 //========================================
//  For POST Start
//========================================
if ($_POST_RESPONSE['type']  === 'PostJson' && $_DEASYPOSTCHECK === 1) {
    if (isset($_POST)) {
        $condition = true;
        if ($condition){
            $RETURN_RESULT = $_POST; // anything you want to return to client
            $_POST_RESPONSE['response'] = $RETURN_RESULT;
            //echo json_encode($_POST_RESPONSE);
        } else {
            //http_response_code(400);
            $_POST_RESPONSE['error'] = 2;// error 0 is no error, error 1 is system error, error 2 is condition not meet
            $_POST_RESPONSE['message'] = 'Condition Not True.';
            //echo json_encode($_POST_RESPONSE);
        }
    } */
    /*else {
        //http_response_code(405);
        $_POST_RESPONSE['error'] = 1;
        $_POST_RESPONSE['message'] = 'You Pass With Empty Data.';
        //echo json_encode($_POST_RESPONSE);
    }*/
//}

//========================================
//  For POST End
//========================================
$directory =str_replace('\\', '/', dirname(__DIR__)) ."/upload/"; 


//echo json_encode([        'type'=>'PostJson',        'error'=> 0,        'message' => isset($_FILES),        'response'=> []   ]);
//exit();
        //========================================
        //  For FILES Start
        //========================================
if ($_POST_RESPONSE['type']  === 'UploadFile') {
    if (isset($_FILES)) {
        $condition = true;
        if ($condition){

            
            $filecount = count(glob($directory . "*"));

            $res = [];
            //$j = $_FILES_COUNT;
            for ($i=0; $i < $_FILES_COUNT; $i++) { 
                
                $arrFilename = explode(".", $_FILES['file']['name'][$i]);
                $arrFilename = array_reverse($arrFilename);
                //  strtolower(str_replace(" ", "-", preg_replace('/[^a-zA-Z0-9 \']/', '', $arrFilename[1]))) . '-' . time() . '.' . $arrFilename[0];
                //If valid file upload in the proper location.
                if ($_FILES['file']['error'][$i] === 0) { 
                    $filecount = $filecount + 1;
                    $file_name = $filecount . '.' . $arrFilename[0];
                        //move_uploaded_file($_FILES['file']["tmp_name"][$i], __DIR__ . "/upload/" .  $file_name);
                        move_uploaded_file($_FILES['file']["tmp_name"][$i],$directory .  $file_name);

                    //Preapare the uploaded file with physical pathe
                    $fileName = $file_name;
                    //$j--;
                    $res[$i] = array(
                        'file_name'=> $filecount,
                        'url'=>$fileName,
                        'msg' => '',
                        'responseCode' => 0
                    );

                } else {
                    $res[$i] = array(
                        'file_name'=> $filecount,
                        'url'=>'',
                        'msg' => 'Error in file upload!!',
                        'responseCode' => 1
                    );
                }
            }

            $_POST_RESPONSE['response'] = $res;
        } else {
            //http_response_code(400);
            $_POST_RESPONSE['error'] = 2;// error 0 is no error, error 1 is system error, error 2 is condition not meet
            $_POST_RESPONSE['message'] = 'Condition Not True.';
            //echo json_encode($_POST_RESPONSE);
        }
    }         
}
        //========================================
        //  For FILES End
        //========================================
echo json_encode($_POST_RESPONSE);
    exit();

?>