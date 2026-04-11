<?php
mysqli_report(MYSQLI_REPORT_OFF);

# Database credentials
define("DB_SERVER", "calgo");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "calgoric_web");
define("DB_TBL_FUNC", "func_details");

function get_default_arr(){
	$arr = array();
	$arr['srlno'] = '';
$arr['name_val'] = 'name-val';
$arr['sort_description'] = 'sort-description';
$arr['main_categori'] = 'main-categori';
$arr['sub_catagori'] = 'sub-catagori';
$arr['syntax0'] = 'syntax0';
$arr['syntax1'] = 'syntax1';
$arr['syntax2'] = 'syntax2';
$arr['syntax3'] = 'syntax3';
$arr['syntax4'] = 'syntax4';
$arr['syntax5'] = 'syntax5';
$arr['syntax6'] = 'syntax6';
$arr['syntax7'] = 'syntax7';
$arr['syntax8'] = 'syntax8';
$arr['syntax9'] = 'syntax9';
$arr['syntax10'] = 'syntax10';
$arr['syntax11'] = 'syntax11';
$arr['syntax12'] = 'syntax12';
$arr['syntax13'] = 'syntax13';
$arr['syntax14'] = 'syntax14';
$arr['description0'] = 'description0';
$arr['description1'] = 'description1';
$arr['description2'] = 'description2';
$arr['description3'] = 'description3';
$arr['description4'] = 'description4';
$arr['description5'] = 'description5';
$arr['description6'] = 'description6';
$arr['description7'] = 'description7';
$arr['description8'] = 'description8';
$arr['description9'] = 'description9';
$arr['description10'] = 'description10';
$arr['description11'] = 'description11';
$arr['description12'] = 'description12';
$arr['description13'] = 'description13';
$arr['description14'] = 'description14';
$arr['examples0'] = 'examples0';
$arr['examples1'] = 'examples1';
$arr['examples2'] = 'examples2';
$arr['examples3'] = 'examples3';
$arr['examples4'] = 'examples4';
$arr['examples5'] = 'examples5';
$arr['examples6'] = 'examples6';
$arr['examples7'] = 'examples7';
$arr['examples8'] = 'examples8';
$arr['examples9'] = 'examples9';
$arr['examples10'] = 'examples10';
$arr['examples11'] = 'examples11';
$arr['examples12'] = 'examples12';
$arr['examples13'] = 'examples13';
$arr['examples14'] = 'examples14';
$arr['ExampleDescription0'] = 'ExampleDescription0';
$arr['ExampleDescription1'] = 'ExampleDescription1';
$arr['ExampleDescription2'] = 'ExampleDescription2';
$arr['ExampleDescription3'] = 'ExampleDescription3';
$arr['ExampleDescription4'] = 'ExampleDescription4';
$arr['ExampleDescription5'] = 'ExampleDescription5';
$arr['ExampleDescription6'] = 'ExampleDescription6';
$arr['ExampleDescription7'] = 'ExampleDescription7';
$arr['ExampleDescription8'] = 'ExampleDescription8';
$arr['ExampleDescription9'] = 'ExampleDescription9';
$arr['ExampleDescription10'] = 'ExampleDescription10';
$arr['ExampleDescription11'] = 'ExampleDescription11';
$arr['ExampleDescription12'] = 'ExampleDescription12';
$arr['ExampleDescription13'] = 'ExampleDescription13';
$arr['ExampleDescription14'] = 'ExampleDescription14';
$arr['input0'] = 'input0';
$arr['input1'] = 'input1';
$arr['input2'] = 'input2';
$arr['input3'] = 'input3';
$arr['input4'] = 'input4';
$arr['input5'] = 'input5';
$arr['input6'] = 'input6';
$arr['input7'] = 'input7';
$arr['input8'] = 'input8';
$arr['input9'] = 'input9';
$arr['input10'] = 'input10';
$arr['input11'] = 'input11';
$arr['input12'] = 'input12';
$arr['input13'] = 'input13';
$arr['input14'] = 'input14';
$arr['input15'] = 'input15';
$arr['input16'] = 'input16';
$arr['input17'] = 'input17';
$arr['input18'] = 'input18';
$arr['input19'] = 'input19';
$arr['input_type0'] = 'input-type0';
$arr['input_type1'] = 'input-type1';
$arr['input_type2'] = 'input-type2';
$arr['input_type3'] = 'input-type3';
$arr['input_type4'] = 'input-type4';
$arr['input_type5'] = 'input-type5';
$arr['input_type6'] = 'input-type6';
$arr['input_type7'] = 'input-type7';
$arr['input_type8'] = 'input-type8';
$arr['input_type9'] = 'input-type9';
$arr['input_type10'] = 'input-type10';
$arr['input_type11'] = 'input-type11';
$arr['input_type12'] = 'input-type12';
$arr['input_type13'] = 'input-type13';
$arr['input_type14'] = 'input-type14';
$arr['input_type15'] = 'input-type15';
$arr['input_type16'] = 'input-type16';
$arr['input_type17'] = 'input-type17';
$arr['input_type18'] = 'input-type18';
$arr['input_type19'] = 'input-type19';
$arr['input_desc0'] = 'input-desc0';
$arr['input_desc1'] = 'input-desc1';
$arr['input_desc2'] = 'input-desc2';
$arr['input_desc3'] = 'input-desc3';
$arr['input_desc4'] = 'input-desc4';
$arr['input_desc5'] = 'input-desc5';
$arr['input_desc6'] = 'input-desc6';
$arr['input_desc7'] = 'input-desc7';
$arr['input_desc8'] = 'input-desc8';
$arr['input_desc9'] = 'input-desc9';
$arr['input_desc10'] = 'input-desc10';
$arr['input_desc11'] = 'input-desc11';
$arr['input_desc12'] = 'input-desc12';
$arr['input_desc13'] = 'input-desc13';
$arr['input_desc14'] = 'input-desc14';
$arr['input_desc15'] = 'input-desc15';
$arr['input_desc16'] = 'input-desc16';
$arr['input_desc17'] = 'input-desc17';
$arr['input_desc18'] = 'input-desc18';
$arr['input_desc19'] = 'input-desc19';
$arr['output0'] = 'output0';
$arr['output1'] = 'output1';
$arr['output2'] = 'output2';
$arr['output3'] = 'output3';
$arr['output4'] = 'output4';
$arr['output5'] = 'output5';
$arr['output6'] = 'output6';
$arr['output7'] = 'output7';
$arr['output8'] = 'output8';
$arr['output9'] = 'output9';
$arr['output10'] = 'output10';
$arr['output11'] = 'output11';
$arr['output12'] = 'output12';
$arr['output13'] = 'output13';
$arr['output14'] = 'output14';
$arr['output15'] = 'output15';
$arr['output16'] = 'output16';
$arr['output17'] = 'output17';
$arr['output18'] = 'output18';
$arr['output19'] = 'output19';
$arr['output_type0'] = 'output-type0';
$arr['output_type1'] = 'output-type1';
$arr['output_type2'] = 'output-type2';
$arr['output_type3'] = 'output-type3';
$arr['output_type4'] = 'output-type4';
$arr['output_type5'] = 'output-type5';
$arr['output_type6'] = 'output-type6';
$arr['output_type7'] = 'output-type7';
$arr['output_type8'] = 'output-type8';
$arr['output_type9'] = 'output-type9';
$arr['output_type10'] = 'output-type10';
$arr['output_type11'] = 'output-type11';
$arr['output_type12'] = 'output-type12';
$arr['output_type13'] = 'output-type13';
$arr['output_type14'] = 'output-type14';
$arr['output_type15'] = 'output-type15';
$arr['output_type16'] = 'output-type16';
$arr['output_type17'] = 'output-type17';
$arr['output_type18'] = 'output-type18';
$arr['output_type19'] = 'output-type19';
$arr['output_desc0'] = 'output-desc0';
$arr['output_desc1'] = 'output-desc1';
$arr['output_desc2'] = 'output-desc2';
$arr['output_desc3'] = 'output-desc3';
$arr['output_desc4'] = 'output-desc4';
$arr['output_desc5'] = 'output-desc5';
$arr['output_desc6'] = 'output-desc6';
$arr['output_desc7'] = 'output-desc7';
$arr['output_desc8'] = 'output-desc8';
$arr['output_desc9'] = 'output-desc9';
$arr['output_desc10'] = 'output-desc10';
$arr['output_desc11'] = 'output-desc11';
$arr['output_desc12'] = 'output-desc12';
$arr['output_desc13'] = 'output-desc13';
$arr['output_desc14'] = 'output-desc14';
$arr['output_desc15'] = 'output-desc15';
$arr['output_desc16'] = 'output-desc16';
$arr['output_desc17'] = 'output-desc17';
$arr['output_desc18'] = 'output-desc18';
$arr['output_desc19'] = 'output-desc19';
$arr['api'] = 'api';
$arr['algorithms'] = 'algorithms';
$arr['references0'] = 'references0';
$arr['references1'] = 'references1';
$arr['references2'] = 'references2';
$arr['references3'] = 'references3';
$arr['references4'] = 'references4';
$arr['references5'] = 'references5';
$arr['references6'] = 'references6';
$arr['references7'] = 'references7';
$arr['references8'] = 'references8';
$arr['references9'] = 'references9';
$arr['references10'] = 'references10';
$arr['references11'] = 'references11';
$arr['link0'] = 'link0';
$arr['link1'] = 'link1';
$arr['link2'] = 'link2';
$arr['link3'] = 'link3';
$arr['link4'] = 'link4';
$arr['link5'] = 'link5';
$arr['link6'] = 'link6';
$arr['link7'] = 'link7';
$arr['link8'] = 'link8';
$arr['link9'] = 'link9';
$arr['link10'] = 'link10';
$arr['link11'] = 'link11';

return $arr;
}



function getFuncData2($f_name){
	$f_name = urldecode($f_name);
	$rtrn = true;
	if (trim($f_name) != ""){
		$DB = mysqli_connect("calgo", "root", "", "calgoric_web");
	    if (!$DB) {
	        //echo '<script type="text/javascript">alert("Connection error");</script>';
	      //$msg = 'Connection error: ' . mysqli_connect_error() ;
	      $rtrn = false;
	  	} else {

			$sql = "SELECT * FROM func_details WHERE name_val='" . $f_name ."'";
		    if ($rslt = mysqli_query($DB, $sql)) {
		        $count = mysqli_num_rows($rslt);
		        if ($count > 0) {
		            $rows = mysqli_fetch_all($rslt, MYSQLI_ASSOC);
		            $_SESSION['function'] = $rows[0];
		            $rtrn = true;
		           // if ($rows[0]['name_val'] != $fnm){
		           //     $fnm = "";
		           //     $count = 0;
		           // }
		        }else{
		        	$rtrn = false;
		        }

		        # Free result set
		        mysqli_free_result($rslt);
		    }

		    # Close connection
	        mysqli_close($DB);

		}
	}

	return $rtrn;

}


function is_func($func_name, &$msg){
	# Create connection
	$DB = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
	if (!$DB) {
	    //echo '<script type="text/javascript">alert("Connection error");</script>';
	  $msg =  "Connection error: " . mysqli_connect_error();
	  return -1;
	}


	$rtrn = 0;
	$fnm = urldecode($func_name);
    $sql = "SELECT name_val FROM func_details WHERE name_val='" . $fnm ."'";
    if ($rslt = mysqli_query($DB, $sql)) {
        $count = mysqli_num_rows($rslt);
        if ($count > 0) {
           $rtrn = 1;
        }

        # Free result set
        mysqli_free_result($rslt);
    }

     mysqli_close($DB);

     return $rtrn;
}


function prv_s($count){
	$rslt = '';
	for($i = 0; $i < $count; $i++){
		$rslt = $rslt . 's';
	}

	return $rslt;
}

function insert_func($data, &$msg){
	//$_SESSION['function'] = array();
	$msg = '';
	$fnm = urldecode($data['nameval']);
	$ri = is_func($fnm,$msg);
	if ($ri != 0){
		if( $ri > 0){
			$msg = 'Function Name "'. $fnm . '" Already exist in the database.';	
		}	
         return false;
	}

	# Create connection
	$DB = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
	if (!$DB) {
	    //echo '<script type="text/javascript">alert("Connection error");</script>';
	  $msg =  "Connection error: " . mysqli_connect_error();
	  return false;
	}


	$rtrn = true;
	$sql = "INSERT INTO func_details (name_val, sort_description, main_categori, sub_catagori, syntax0, syntax1, syntax2, syntax3, syntax4, syntax5, syntax6, syntax7, syntax8, syntax9, syntax10, syntax11, syntax12, syntax13, syntax14, description0, description1, description2, description3, description4, description5, description6, description7, description8, description9, description10, description11, description12, description13, description14, examples0, examples1, examples2, examples3, examples4, examples5, examples6, examples7, examples8, examples9, examples10, examples11, examples12, examples13, examples14, ExampleDescription0, ExampleDescription1, ExampleDescription2, ExampleDescription3, ExampleDescription4, ExampleDescription5, ExampleDescription6, ExampleDescription7, ExampleDescription8, ExampleDescription9, ExampleDescription10, ExampleDescription11, ExampleDescription12, ExampleDescription13, ExampleDescription14, input0, input1, input2, input3, input4, input5, input6, input7, input8, input9, input10, input11, input12, input13, input14, input15, input16, input17, input18, input19, input_type0, input_type1, input_type2, input_type3, input_type4, input_type5, input_type6, input_type7, input_type8, input_type9, input_type10, input_type11, input_type12, input_type13, input_type14, input_type15, input_type16, input_type17, input_type18, input_type19, input_desc0, input_desc1, input_desc2, input_desc3, input_desc4, input_desc5, input_desc6, input_desc7, input_desc8, input_desc9, input_desc10, input_desc11, input_desc12, input_desc13, input_desc14, input_desc15, input_desc16, input_desc17, input_desc18, input_desc19, output0, output1, output2, output3, output4, output5, output6, output7, output8, output9, output10, output11, output12, output13, output14, output15, output16, output17, output18, output19, output_type0, output_type1, output_type2, output_type3, output_type4, output_type5, output_type6, output_type7, output_type8, output_type9, output_type10, output_type11, output_type12, output_type13, output_type14, output_type15, output_type16, output_type17, output_type18, output_type19, output_desc0, output_desc1, output_desc2, output_desc3, output_desc4, output_desc5, output_desc6, output_desc7, output_desc8, output_desc9, output_desc10, output_desc11, output_desc12, output_desc13, output_desc14, output_desc15, output_desc16, output_desc17, output_desc18, output_desc19, api, algorithms, references0, references1, references2, references3, references4, references5, references6, references7, references8, references9, references10, references11, link0, link1, link2, link3, link4, link5, link6, link7, link8, link9, link10, link11) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        	if ($stmt = mysqli_prepare($DB, $sql)) {
		      # Bind variables to the prepared statement as parameters
		      mysqli_stmt_bind_param($stmt, prv_s(210), $data['nameval'], $data['sortdescription'], $data['maincategori'], $data['subcatagori'], $data['syntax0'], $data['syntax1'], $data['syntax2'], $data['syntax3'], $data['syntax4'], $data['syntax5'], $data['syntax6'], $data['syntax7'], $data['syntax8'], $data['syntax9'], $data['syntax10'], $data['syntax11'], $data['syntax12'], $data['syntax13'], $data['syntax14'], $data['description0'], $data['description1'], $data['description2'], $data['description3'], $data['description4'], $data['description5'], $data['description6'], $data['description7'], $data['description8'], $data['description9'], $data['description10'], $data['description11'], $data['description12'], $data['description13'], $data['description14'], $data['examples0'], $data['examples1'], $data['examples2'], $data['examples3'], $data['examples4'], $data['examples5'], $data['examples6'], $data['examples7'], $data['examples8'], $data['examples9'], $data['examples10'], $data['examples11'], $data['examples12'], $data['examples13'], $data['examples14'], $data['ExampleDescription0'], $data['ExampleDescription1'], $data['ExampleDescription2'], $data['ExampleDescription3'], $data['ExampleDescription4'], $data['ExampleDescription5'], $data['ExampleDescription6'], $data['ExampleDescription7'], $data['ExampleDescription8'], $data['ExampleDescription9'], $data['ExampleDescription10'], $data['ExampleDescription11'], $data['ExampleDescription12'], $data['ExampleDescription13'], $data['ExampleDescription14'], $data['input0'], $data['input1'], $data['input2'], $data['input3'], $data['input4'], $data['input5'], $data['input6'], $data['input7'], $data['input8'], $data['input9'], $data['input10'], $data['input11'], $data['input12'], $data['input13'], $data['input14'], $data['input15'], $data['input16'], $data['input17'], $data['input18'], $data['input19'], $data['inputtype0'], $data['inputtype1'], $data['inputtype2'], $data['inputtype3'], $data['inputtype4'], $data['inputtype5'], $data['inputtype6'], $data['inputtype7'], $data['inputtype8'], $data['inputtype9'], $data['inputtype10'], $data['inputtype11'], $data['inputtype12'], $data['inputtype13'], $data['inputtype14'], $data['inputtype15'], $data['inputtype16'], $data['inputtype17'], $data['inputtype18'], $data['inputtype19'], $data['inputdesc0'], $data['inputdesc1'], $data['inputdesc2'], $data['inputdesc3'], $data['inputdesc4'], $data['inputdesc5'], $data['inputdesc6'], $data['inputdesc7'], $data['inputdesc8'], $data['inputdesc9'], $data['inputdesc10'], $data['inputdesc11'], $data['inputdesc12'], $data['inputdesc13'], $data['inputdesc14'], $data['inputdesc15'], $data['inputdesc16'], $data['inputdesc17'], $data['inputdesc18'], $data['inputdesc19'], $data['output0'], $data['output1'], $data['output2'], $data['output3'], $data['output4'], $data['output5'], $data['output6'], $data['output7'], $data['output8'], $data['output9'], $data['output10'], $data['output11'], $data['output12'], $data['output13'], $data['output14'], $data['output15'], $data['output16'], $data['output17'], $data['output18'], $data['output19'], $data['outputtype0'], $data['outputtype1'], $data['outputtype2'], $data['outputtype3'], $data['outputtype4'], $data['outputtype5'], $data['outputtype6'], $data['outputtype7'], $data['outputtype8'], $data['outputtype9'], $data['outputtype10'], $data['outputtype11'], $data['outputtype12'], $data['outputtype13'], $data['outputtype14'], $data['outputtype15'], $data['outputtype16'], $data['outputtype17'], $data['outputtype18'], $data['outputtype19'], $data['outputdesc0'], $data['outputdesc1'], $data['outputdesc2'], $data['outputdesc3'], $data['outputdesc4'], $data['outputdesc5'], $data['outputdesc6'], $data['outputdesc7'], $data['outputdesc8'], $data['outputdesc9'], $data['outputdesc10'], $data['outputdesc11'], $data['outputdesc12'], $data['outputdesc13'], $data['outputdesc14'], $data['outputdesc15'], $data['outputdesc16'], $data['outputdesc17'], $data['outputdesc18'], $data['outputdesc19'], $data['api'], $data['algorithms'], $data['references0'], $data['references1'], $data['references2'], $data['references3'], $data['references4'], $data['references5'], $data['references6'], $data['references7'], $data['references8'], $data['references9'], $data['references10'], $data['references11'], $data['link0'], $data['link1'], $data['link2'], $data['link3'], $data['link4'], $data['link5'], $data['link6'], $data['link7'], $data['link8'], $data['link9'], $data['link10'], $data['link11']);



			    # Execute the statement
			    if (mysqli_stmt_execute($stmt)) {
				    $msg = 'New Function "'. $fnm .'" insert successfully.';
			    	$rsltarr = array();
			    	$msg2='';
			    	if (getFuncData2($fnm)){
			        //if (get_func_details($fnm, $rsltarr, $msg2)){
				        //$_SESSION['function'] = $rsltarr;
	        		} else {
	        			$msg = $msg . " But couldnot store data in session.";
	        		}
	        			
	        		$rtrn = true;
			    } else {
			        $msg = "Oops! Something went wrong. Please try again later.";
			        $rtrn = false;
			    }
    
			    //$stmt->execute();
			    //if (!$stmt->execute()) {
			    //    $msg = "Oops! Something went wrong executing statment.";
			    //    $rtrn = false;
			    //}


			    # Close statement
			    mysqli_stmt_close($stmt);
  
        	}else{
        		$msg = 'Pssing wrong data. ';
        		$rtrn = false;
        	}

     mysqli_close($DB);

     return $rtrn;
}

function update_func($data, &$msg){
	$msg = '';
	$fnm = urldecode($data['nameval']);
	$ri = is_func($fnm,$msg);
	if ($ri < 1){
		if( $ri == 0){
			$msg = 'Function Name "'. $fnm . '" doesnot exist in the database.';	
		}	
         return false;
	}
	
	# Create connection
	$DB = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
	if (!$DB) {
	    //echo '<script type="text/javascript">alert("Connection error");</script>';
	  $msg =  "Connection error: " . mysqli_connect_error();
	  return false;
	}

//htmlspecialchars
//mysql_real_escape_string

	$rtrn = true;
	$sql = "UPDATE func_details SET name_val = ?, sort_description = ?, main_categori = ?, sub_catagori = ?, syntax0 = ?, syntax1 = ?, syntax2 = ?, syntax3 = ?, syntax4 = ?, syntax5 = ?, syntax6 = ?, syntax7 = ?, syntax8 = ?, syntax9 = ?, syntax10 = ?, syntax11 = ?, syntax12 = ?, syntax13 = ?, syntax14 = ?, description0 = ?, description1 = ?, description2 = ?, description3 = ?, description4 = ?, description5 = ?, description6 = ?, description7 = ?, description8 = ?, description9 = ?, description10 = ?, description11 = ?, description12 = ?, description13 = ?, description14 = ?, examples0 = ?, examples1 = ?, examples2 = ?, examples3 = ?, examples4 = ?, examples5 = ?, examples6 = ?, examples7 = ?, examples8 = ?, examples9 = ?, examples10 = ?, examples11 = ?, examples12 = ?, examples13 = ?, examples14 = ?, ExampleDescription0 = ?, ExampleDescription1 = ?, ExampleDescription2 = ?, ExampleDescription3 = ?, ExampleDescription4 = ?, ExampleDescription5 = ?, ExampleDescription6 = ?, ExampleDescription7 = ?, ExampleDescription8 = ?, ExampleDescription9 = ?, ExampleDescription10 = ?, ExampleDescription11 = ?, ExampleDescription12 = ?, ExampleDescription13 = ?, ExampleDescription14 = ?, input0 = ?, input1 = ?, input2 = ?, input3 = ?, input4 = ?, input5 = ?, input6 = ?, input7 = ?, input8 = ?, input9 = ?, input10 = ?, input11 = ?, input12 = ?, input13 = ?, input14 = ?, input15 = ?, input16 = ?, input17 = ?, input18 = ?, input19 = ?, input_type0 = ?, input_type1 = ?, input_type2 = ?, input_type3 = ?, input_type4 = ?, input_type5 = ?, input_type6 = ?, input_type7 = ?, input_type8 = ?, input_type9 = ?, input_type10 = ?, input_type11 = ?, input_type12 = ?, input_type13 = ?, input_type14 = ?, input_type15 = ?, input_type16 = ?, input_type17 = ?, input_type18 = ?, input_type19 = ?, input_desc0 = ?, input_desc1 = ?, input_desc2 = ?, input_desc3 = ?, input_desc4 = ?, input_desc5 = ?, input_desc6 = ?, input_desc7 = ?, input_desc8 = ?, input_desc9 = ?, input_desc10 = ?, input_desc11 = ?, input_desc12 = ?, input_desc13 = ?, input_desc14 = ?, input_desc15 = ?, input_desc16 = ?, input_desc17 = ?, input_desc18 = ?, input_desc19 = ?, output0 = ?, output1 = ?, output2 = ?, output3 = ?, output4 = ?, output5 = ?, output6 = ?, output7 = ?, output8 = ?, output9 = ?, output10 = ?, output11 = ?, output12 = ?, output13 = ?, output14 = ?, output15 = ?, output16 = ?, output17 = ?, output18 = ?, output19 = ?, output_type0 = ?, output_type1 = ?, output_type2 = ?, output_type3 = ?, output_type4 = ?, output_type5 = ?, output_type6 = ?, output_type7 = ?, output_type8 = ?, output_type9 = ?, output_type10 = ?, output_type11 = ?, output_type12 = ?, output_type13 = ?, output_type14 = ?, output_type15 = ?, output_type16 = ?, output_type17 = ?, output_type18 = ?, output_type19 = ?, output_desc0 = ?, output_desc1 = ?, output_desc2 = ?, output_desc3 = ?, output_desc4 = ?, output_desc5 = ?, output_desc6 = ?, output_desc7 = ?, output_desc8 = ?, output_desc9 = ?, output_desc10 = ?, output_desc11 = ?, output_desc12 = ?, output_desc13 = ?, output_desc14 = ?, output_desc15 = ?, output_desc16 = ?, output_desc17 = ?, output_desc18 = ?, output_desc19 = ?, api = ?, algorithms = ?, references0 = ?, references1 = ?, references2 = ?, references3 = ?, references4 = ?, references5 = ?, references6 = ?, references7 = ?, references8 = ?, references9 = ?, references10 = ?, references11 = ?, link0 = ?, link1 = ?, link2 = ?, link3 = ?, link4 = ?, link5 = ?, link6 = ?, link7 = ?, link8 = ?, link9 = ?, link10 = ?, link11 = ? WHERE srlno = " . urldecode($data['srlno']);

	if ($stmt = mysqli_prepare($DB, $sql)) {
		# Bind variables to the prepared statement as parameters
		mysqli_stmt_bind_param($stmt, prv_s(210), $data['nameval'], $data['sortdescription'], $data['maincategori'], $data['subcatagori'], $data['syntax0'], $data['syntax1'], $data['syntax2'], $data['syntax3'], $data['syntax4'], $data['syntax5'], $data['syntax6'], $data['syntax7'], $data['syntax8'], $data['syntax9'], $data['syntax10'], $data['syntax11'], $data['syntax12'], $data['syntax13'], $data['syntax14'], $data['description0'], $data['description1'], $data['description2'], $data['description3'], $data['description4'], $data['description5'], $data['description6'], $data['description7'], $data['description8'], $data['description9'], $data['description10'], $data['description11'], $data['description12'], $data['description13'], $data['description14'], $data['examples0'], $data['examples1'], $data['examples2'], $data['examples3'], $data['examples4'], $data['examples5'], $data['examples6'], $data['examples7'], $data['examples8'], $data['examples9'], $data['examples10'], $data['examples11'], $data['examples12'], $data['examples13'], $data['examples14'], $data['ExampleDescription0'], $data['ExampleDescription1'], $data['ExampleDescription2'], $data['ExampleDescription3'], $data['ExampleDescription4'], $data['ExampleDescription5'], $data['ExampleDescription6'], $data['ExampleDescription7'], $data['ExampleDescription8'], $data['ExampleDescription9'], $data['ExampleDescription10'], $data['ExampleDescription11'], $data['ExampleDescription12'], $data['ExampleDescription13'], $data['ExampleDescription14'], $data['input0'], $data['input1'], $data['input2'], $data['input3'], $data['input4'], $data['input5'], $data['input6'], $data['input7'], $data['input8'], $data['input9'], $data['input10'], $data['input11'], $data['input12'], $data['input13'], $data['input14'], $data['input15'], $data['input16'], $data['input17'], $data['input18'], $data['input19'], $data['inputtype0'], $data['inputtype1'], $data['inputtype2'], $data['inputtype3'], $data['inputtype4'], $data['inputtype5'], $data['inputtype6'], $data['inputtype7'], $data['inputtype8'], $data['inputtype9'], $data['inputtype10'], $data['inputtype11'], $data['inputtype12'], $data['inputtype13'], $data['inputtype14'], $data['inputtype15'], $data['inputtype16'], $data['inputtype17'], $data['inputtype18'], $data['inputtype19'], $data['inputdesc0'], $data['inputdesc1'], $data['inputdesc2'], $data['inputdesc3'], $data['inputdesc4'], $data['inputdesc5'], $data['inputdesc6'], $data['inputdesc7'], $data['inputdesc8'], $data['inputdesc9'], $data['inputdesc10'], $data['inputdesc11'], $data['inputdesc12'], $data['inputdesc13'], $data['inputdesc14'], $data['inputdesc15'], $data['inputdesc16'], $data['inputdesc17'], $data['inputdesc18'], $data['inputdesc19'], $data['output0'], $data['output1'], $data['output2'], $data['output3'], $data['output4'], $data['output5'], $data['output6'], $data['output7'], $data['output8'], $data['output9'], $data['output10'], $data['output11'], $data['output12'], $data['output13'], $data['output14'], $data['output15'], $data['output16'], $data['output17'], $data['output18'], $data['output19'], $data['outputtype0'], $data['outputtype1'], $data['outputtype2'], $data['outputtype3'], $data['outputtype4'], $data['outputtype5'], $data['outputtype6'], $data['outputtype7'], $data['outputtype8'], $data['outputtype9'], $data['outputtype10'], $data['outputtype11'], $data['outputtype12'], $data['outputtype13'], $data['outputtype14'], $data['outputtype15'], $data['outputtype16'], $data['outputtype17'], $data['outputtype18'], $data['outputtype19'], $data['outputdesc0'], $data['outputdesc1'], $data['outputdesc2'], $data['outputdesc3'], $data['outputdesc4'], $data['outputdesc5'], $data['outputdesc6'], $data['outputdesc7'], $data['outputdesc8'], $data['outputdesc9'], $data['outputdesc10'], $data['outputdesc11'], $data['outputdesc12'], $data['outputdesc13'], $data['outputdesc14'], $data['outputdesc15'], $data['outputdesc16'], $data['outputdesc17'], $data['outputdesc18'], $data['outputdesc19'], $data['api'], $data['algorithms'], $data['references0'], $data['references1'], $data['references2'], $data['references3'], $data['references4'], $data['references5'], $data['references6'], $data['references7'], $data['references8'], $data['references9'], $data['references10'], $data['references11'], $data['link0'], $data['link1'], $data['link2'], $data['link3'], $data['link4'], $data['link5'], $data['link6'], $data['link7'], $data['link8'], $data['link9'], $data['link10'], $data['link11']);


		# Execute the statement
		if (mysqli_stmt_execute($stmt)) {
			$msg = 'Function "'. $fnm .'" update successfully.';
			if (getFuncData2($fnm)){
			        //if (get_func_details($fnm, $rsltarr, $msg2)){
				        //$_SESSION['function'] = $rsltarr;
	      } else {
	        	$msg = $msg . " But couldnot store data in session.";
	      }
	        			
	      $rtrn = true;
		} else {
			$msg = "Oops! Something went wrong. Please try again later.";
			$rtrn = false;
		}
    
			    //$stmt->execute();
			    //if (!$stmt->execute()) {
			    //    $msg = "Oops! Something went wrong executing statment.";
			    //    $rtrn = false;
			    //}


		# Close statement
		mysqli_stmt_close($stmt);
  
   }else{
      $msg = 'Pssing wrong data. ';
      $rtrn = false;
   }

     mysqli_close($DB);

     return $rtrn;

}



?>