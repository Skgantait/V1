<?php
//header('Access-Control-Allow-Origin: *');
//header('Access-Control-Allow-Methods: GET, POST');
//header('Access-Control-Allow-Headers: *');
//header('Content-Type: application/json/x-www-form-urlencoded; charset=UTF-8');
//header('Content-Type: application/x-www-form-urlencoded');
//header('Content-Type: multipart/form-data');
session_start();

require_once('calgadmindb.php');


$recToken = null;
$headers = getallheaders();  //Get all header information 
if (isset($headers['datatype']) && !empty($headers['datatype'])) {
    $recToken = trim($headers['datatype']);
}

if ($recToken === null){
    //http_response_code(405);
    echo json_encode([
        'error'=> 1,
        'message' => 'FAILD: Data Type Not Set.',
        'response'=> []
    ]);
    exit();
}

/*
if ($recToken === 'File') {
    if ($_FILES) {
        //create file name from the uploaded file.
        $arrFilename = explode(".", $upload_file['file']['name']);
        $arrFilename = array_reverse($arrFilename);
        $file_name = strtolower(str_replace(" ", "-", preg_replace('/[^a-zA-Z0-9 \']/', '', $arrFilename[1]))) . '-' . time() . '.' . $arrFilename[0];
        //If valid file upload in the proper location.
        if ($_FILES['file']['error'] == 0) { 
            move_uploaded_file($_FILES["file"]["tmp_name"], __DIR__ . "/upload/" .  $file_name);
        }
        //Preapare the uploaded file with physical pathe
        $fileName = __DIR__ . "/upload/" . $file_name;
    }
} else if {
    $data = json_decode(trim(file_get_contents("php://input")),true);
}

*/
//echo '<pre>'; 
//print_r($file_get_contents("php://input")); 
//echo '</pre>';

//echo $file_get_contents("php://input");
//echo json_encode([
//            'message' => 'YES.'
//        ]);
//exit();


//$data = ['post'=>$_POST['email']];

//echo json_encode([
//            'error'=> true,
//            'message' =>$_POST['email']]); 
//exit();


/*
 $sql = "INSERT INTO tb_details (name_val, sort_description, main_categori, sub_catagori, syntax0, syntax1, syntax2, syntax3, syntax4, syntax5, syntax6, syntax7, syntax8, syntax9, syntax10, syntax11, syntax12, syntax13, syntax14, description0, description1, description2, description3, description4, description5, description6, description7, description8, description9, description10, description11, description12, description13, description14, examples0, examples1, examples2, examples3, examples4, examples5, examples6, examples7, examples8, examples9, examples10, examples11, examples12, examples13, examples14, ExampleDescription0, ExampleDescription1, ExampleDescription2, ExampleDescription3, ExampleDescription4, ExampleDescription5, ExampleDescription6, ExampleDescription7, ExampleDescription8, ExampleDescription9, ExampleDescription10, ExampleDescription11, ExampleDescription12, ExampleDescription13, ExampleDescription14, input0, input1, input2, input3, input4, input5, input6, input7, input8, input9, input10, input11, input12, input13, input14, input15, input16, input17, input18, input19, input_type0, input_type1, input_type2, input_type3, input_type4, input_type5, input_type6, input_type7, input_type8, input_type9, input_type10, input_type11, input_type12, input_type13, input_type14, input_type15, input_type16, input_type17, input_type18, input_type19, input_desc0, input_desc1, input_desc2, input_desc3, input_desc4, input_desc5, input_desc6, input_desc7, input_desc8, input_desc9, input_desc10, input_desc11, input_desc12, input_desc13, input_desc14, input_desc15, input_desc16, input_desc17, input_desc18, input_desc19, output0, output1, output2, output3, output4, output5, output6, output7, output8, output9, output10, output11, output12, output13, output14, output15, output16, output17, output18, output19, output_type0, output_type1, output_type2, output_type3, output_type4, output_type5, output_type6, output_type7, output_type8, output_type9, output_type10, output_type11, output_type12, output_type13, output_type14, output_type15, output_type16, output_type17, output_type18, output_type19, output_desc0, output_desc1, output_desc2, output_desc3, output_desc4, output_desc5, output_desc6, output_desc7, output_desc8, output_desc9, output_desc10, output_desc11, output_desc12, output_desc13, output_desc14, output_desc15, output_desc16, output_desc17, output_desc18, output_desc19, api, algorithms, references0, references1, references2, references3, references4, references5, references6, references7, references8, references9, references10, references11, link0, link1, link2, link3, link4, link5, link6, link7, link8, link9, link10, link11) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";


 if ($stmt = mysqli_prepare($link, $sql)) {
      # Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss", $param_fname, $param_lname, $param_email, $syntax1, $syntax2, $syntax3, $syntax4, $syntax5, $syntax6, $syntax7, $syntax8, $syntax9, $syntax10, $syntax11, $syntax12, $syntax13, $syntax14, $syntax15, $syntax16, $syntax17, $syntax18, $syntax19, $description0, $description1, $description2, $description3, $description4, $description5, $description6, $description7, $description8, $description9, $description10, $description11, $description12, $description13, $description14, $description15, $description16, $description17, $description18, $description19, $examples0, $examples1, $examples2, $examples3, $examples4, $examples5, $examples6, $examples7, $examples8, $examples9, $examples10, $examples11, $examples12, $examples13, $examples14, $examples15, $examples16, $examples17, $examples18, $examples19, $input0, $input1, $input2, $input3, $input4, $input5, $input6, $input7, $input8, $input9, $input10, $input11, $input12, $input13, $input14, $input15, $input16, $input17, $input18, $input19, $output0, $output1, $output2, $output3, $output4, $output5, $output6, $output7, $output8, $output9, $output10, $output11, $output12, $output13, $output14, $output15, $output16, $output17, $output18, $output19, $references0, $references1, $references2, $references3, $references4, $references5, $references6, $references7, $references8, $references9, $references10, $references11, $references12, $references13, $references14, $references15, $references16, $references17, $references18, $references19, $link0, $link1, $link2, $link3, $link4, $link5, $link6, $link7, $link8, $link9, $link10, $link11, $link12, $link13, $link14, $link15, $link16, $link17, $link18, $link19, $api, $algorithm, $seealso);

      # Set parameters
      $param_fname = $fname;
      $param_lname = $lname;
      $param_email = $email;
      $syntax1 = $syntax1;
      $syntax2 = $syntax2;
      $syntax3 = $syntax3;
      $syntax4 = $syntax4;
      $syntax5 = $syntax5;
      $syntax6 = $syntax6;
      $syntax7 = $syntax7;
      $syntax8 = $syntax8;
      $syntax9 = $syntax9;
      $syntax10 = $syntax10;
      $syntax11 = $syntax11;
      $syntax12 = $syntax12;
      $syntax13 = $syntax13;
      $syntax14 = $syntax14;
      $syntax15 = $syntax15;
      $syntax16 = $syntax16;
      $syntax17 = $syntax17;
      $syntax18 = $syntax18;
      $syntax19 = $syntax19;

      $description0 = $description0;
      $description1 = $description1;
      $description2 = $description2;
      $description3 = $description3;
      $description4 = $description4;
      $description5 = $description5;
      $description6 = $description6;
      $description7 = $description7;
      $description8 = $description8;
      $description9 = $description9;
      $description10 = $description10;
      $description11 = $description11;
      $description12 = $description12;
      $description13 = $description13;
      $description14 = $description14;
      $description15 = $description15;
      $description16 = $description16;
      $description17 = $description17;
      $description18 = $description18;
      $description19 = $description19;


      $examples0 = $examples0;
      $examples1 = $examples1;
      $examples2 = $examples2;
      $examples3 = $examples3;
      $examples4 = $examples4;
      $examples5 = $examples5;
      $examples6 = $examples6;
      $examples7 = $examples7;
      $examples8 = $examples8;
      $examples9 = $examples9;
      $examples10 = $examples10;
      $examples11 = $examples11;
      $examples12 = $examples12;
      $examples13 = $examples13;
      $examples14 = $examples14;
      $examples15 = $examples15;
      $examples16 = $examples16;
      $examples17 = $examples17;
      $examples18 = $examples18;
      $examples19 = $examples19;


      $input0 = $input0;
      $input1 = $input1;
      $input2 = $input2;
      $input3 = $input3;
      $input4 = $input4;
      $input5 = $input5;
      $input6 = $input6;
      $input7 = $input7;
      $input8 = $input8;
      $input9 = $input9;
      $input10 = $input10;
      $input11 = $input11;
      $input12 = $input12;
      $input13 = $input13;
      $input14 = $input14;
      $input15 = $input15;
      $input16 = $input16;
      $input17 = $input17;
      $input18 = $input18;
      $input19 = $input19;


      $output0 = $output0;
      $output1 = $output1;
      $output2 = $output2;
      $output3 = $output3;
      $output4 = $output4;
      $output5 = $output5;
      $output6 = $output6;
      $output7 = $output7;
      $output8 = $output8;
      $output9 = $output9;
      $output10 = $output10;
      $output11 = $output11;
      $output12 = $output12;
      $output13 = $output13;
      $output14 = $output14;
      $output15 = $output15;
      $output16 = $output16;
      $output17 = $output17;
      $output18 = $output18;
      $output19 = $output19;


      $references0 = $references0;
      $references1 = $references1;
      $references2 = $references2;
      $references3 = $references3;
      $references4 = $references4;
      $references5 = $references5;
      $references6 = $references6;
      $references7 = $references7;
      $references8 = $references8;
      $references9 = $references9;
      $references10 = $references10;
      $references11 = $references11;
      $references12 = $references12;
      $references13 = $references13;
      $references14 = $references14;
      $references15 = $references15;
      $references16 = $references16;
      $references17 = $references17;
      $references18 = $references18;
      $references19 = $references19;


      $references0 = $references0;
      $references1 = $references1;
      $references2 = $references2;
      $references3 = $references3;
      $references4 = $references4;
      $references5 = $references5;
      $references6 = $references6;
      $references7 = $references7;
      $references8 = $references8;
      $references9 = $references9;
      $references10 = $references10;
      $references11 = $references11;
      $references12 = $references12;
      $references13 = $references13;
      $references14 = $references14;
      $references15 = $references15;
      $references16 = $references16;
      $references17 = $references17;
      $references18 = $references18;
      $references19 = $references19;



      $link0 = $link0;
      $link1 = $link1;
      $link2 = $link2;
      $link3 = $link3;
      $link4 = $link4;
      $link5 = $link5;
      $link6 = $link6;
      $link7 = $link7;
      $link8 = $link8;
      $link9 = $link9;
      $link10 = $link10;
      $link11 = $link11;
      $link12 = $link12;
      $link13 = $link13;
      $link14 = $link14;
      $link15 = $link15;
      $link16 = $link16;
      $link17 = $link17;
      $link18 = $link18;
      $link19 = $link19;

      $api = $api;
      $algorithm = $algorithm;
      $seealso = $seealso;



      # Execute the statement
      if (mysqli_stmt_execute($stmt)) {
        echo "<script>" . "alert('New record created successfully.');" . "</script>";
        echo "<script>" . "window.location.href='./'" . "</script>";
        exit;
      } else {
        echo "Oops! Something went wrong. Please try again later.";
      }
    

    if ($stmt->execute()) {
        return true;
    }


    # Close statement
    mysqli_stmt_close($stmt);
  }

  # Close connection
  mysqli_close($link);
}

*/


//echo "hiiiiiiiiiiiiiiiiiiiiiiii";
$data = json_decode(trim(file_get_contents("php://input")),true);
//http_response_code(200);
if (isset($data)) {//if (isset($_POST['email'])) {//
    $condition = true;
    if ($data['nameval'] == ""){
        $condition = false;
    }
    if ($condition){
        //$data['maincategori'] = str_replace("&","\\&",$data['maincategori']);
        //echo json_encode($data);
        //$_SESSION['func_data']=$data;
        $msg='';
        if (insert_func($data,$msg)){
            $_SESSION['funclist'][$_SESSION['function']['main_categori']][count($_SESSION['funclist'][$_SESSION['function']['main_categori']])] = $_SESSION['function']['name_val'];
            //array_push($_SESSION['funclist'][$_SESSION['function']['main_categori']], $_SESSION['function']['name_val']);
            echo json_encode([
                'error'=> 0,
                'message' => 'SUCCESS: '.$msg,
                'response'=> $_SESSION['function']['srlno'] 
            ]);
            
        }else{
            echo json_encode([
                'error'=> 3,
                'message' => 'FAILD: '.$msg,
                'response'=> []
            ]);
        }
        
    } else {
        //http_response_code(400);
        echo json_encode([
            'error'=> 2, // error 0 is no error, error 1 is system error, error 2 is condition not meet
            'message' => 'FAILD: Function Name Must be set.',
            'response'=> []
        ]);
    }
} else {
    //http_response_code(405);
    echo json_encode([
        'error'=> 1,
        'message' => 'FAILD: You Pass With Empty Data.',
        'response'=> []
    ]);
}


exit();
?>

