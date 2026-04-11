<?php

mysqli_report(MYSQLI_REPORT_OFF);

function getBlankCatArr(){
	$catArr;
	$catArr['Binary & Memory'] = array();
	$catArr['Data Function'] = array();
	$catArr['Database Functions'] = array();
	$catArr['Date & Time'] = array();
	$catArr['Files & Folders'] = array();
	$catArr['Finance'] = array();
	$catArr['Geometry'] = array();
	$catArr['Image Processing'] = array();
	$catArr['Integration'] = array();
	$catArr['IO'] = array();
	$catArr['Linear Algebra'] = array();
	$catArr['Machine Learning'] = array();
	$catArr['Mathematics'] = array();
	$catArr['Matrix Operation'] = array();
	$catArr['Optimization & Equation Solver'] = array();
	$catArr['Others'] = array();
	$catArr['Polynomial & BSpline'] = array();
	$catArr['Regression'] = array();
	$catArr['Signal Processing'] = array();
	$catArr['Statistics'] = array();
	$catArr['String'] = array();
	$catArr['Syntax'] = array();
	$catArr['System Info'] = array();
	$catArr['Table & Field'] = array();
	return $catArr;
}


function geFfuncList(){
	$funclist = getBlankCatArr();
	$_SESSION['funclist'] = $funclist;
    
	$DB = mysqli_connect("localhost", "root", "", "calgoric_web");
    if (!$DB) {
        //echo '<script type="text/javascript">alert("Connection error");</script>';
      $msg = "<script> alert('Connection error: " . mysqli_connect_error() . "') </script>";
      echo $msg;
  	} else {

  		$fcount = 0;
	    $funclist = getBlankCatArr();
	    $crows = array();
	    $csql = "SELECT name_val, main_categori FROM func_details ORDER BY main_categori";
	    if ($crslt = mysqli_query($DB, $csql)) {
	        $fcount = mysqli_num_rows($crslt);
	        if ($fcount > 0) {
	            $crows = mysqli_fetch_all($crslt, MYSQLI_ASSOC);
	            $tc="";
	            $l=0;
	            foreach ($crows as $row) { 
	                if ($row['main_categori'] != $tc){
	                    $funclist[$row['main_categori']] = array();
	                    //$_SESSION[$row['category']] = array();
	                    $tc = $row['main_categori'];
	                    $l=0;
	                }
	                $funclist[$tc][$l] = $row['name_val'];
	                //$_SESSION[$tc][$l] = $row['name_val'];
	                $l=$l+1;
	            }
	            $_SESSION['funclist']=$funclist;
	            $funclist = '';
	        }
	        mysqli_free_result($crslt);
	    }

	    # Close connection
        mysqli_close($DB);

  	}
}


function getFuncData($f_name){
	if (trim($f_name) != ""){
		$DB = mysqli_connect("localhost", "root", "", "calgoric_web");
	    if (!$DB) {
	        //echo '<script type="text/javascript">alert("Connection error");</script>';
	      $msg = "<script> alert('Connection error: " . mysqli_connect_error() . "') </script>";
	      echo $msg;
	  	} else {

			$sql = "SELECT * FROM func_details WHERE name_val='" . $f_name ."'";
		    if ($rslt = mysqli_query($DB, $sql)) {
		        $count = mysqli_num_rows($rslt);
		        if ($count > 0) {
		            $rows = mysqli_fetch_all($rslt, MYSQLI_ASSOC);
		            $_SESSION['function'] = $rows[0];
		           // if ($rows[0]['name_val'] != $fnm){
		           //     $fnm = "";
		           //     $count = 0;
		           // }
		        }

		        # Free result set
		        mysqli_free_result($rslt);
		    }

		    # Close connection
	        mysqli_close($DB);

		}
	}

}

function getSearchData($serch_key){
	$count = 0;
	$serch_key = trim($serch_key);
	if ($serch_key != ""){
		$DB = mysqli_connect("localhost", "root", "", "calgoric_web");
	    if (!$DB) {
	        //echo '<script type="text/javascript">alert("Connection error");</script>';
	      $msg = "<script> alert('Connection error: " . mysqli_connect_error() . "') </script>";
	      echo $msg;
	  	} else {
	  		$_SESSION['search'] = array();

	  		if ($serch_key == "All"){
		 		$sql = "SELECT name_val, main_categori, sort_description FROM func_details ORDER BY name_val";
		 	} else{
		 		$esc_key = mysqli_real_escape_string($DB, $serch_key);
		 		$is_known_category = array_key_exists($serch_key, getBlankCatArr());

		 		if ($is_known_category) {
		 			$sql = "SELECT name_val, main_categori, sort_description FROM func_details WHERE (main_categori = '" . $esc_key ."' OR name_val Like '" . $esc_key ."%') ORDER BY name_val";
		 		} elseif (strlen($serch_key) < 3) {
		 			$sql = "SELECT name_val, main_categori, sort_description FROM func_details WHERE (name_val Like '" . $esc_key ."%' OR main_categori Like '" . $esc_key ."%') ORDER BY name_val";
		 		} else {
		 			$sql = "SELECT name_val, main_categori, sort_description FROM func_details WHERE (name_val Like '" . $esc_key ."%' OR main_categori Like '" . $esc_key ."%' OR sort_description Like '%" . $esc_key ."%') ORDER BY name_val";
		 		}
		 	}


	    	$rslt = mysqli_query($DB, $sql);
	    	if ($rslt) {
	        	$count = mysqli_num_rows($rslt);
	        	if ($count > 0) {
	            	//$rows = mysqli_fetch_all($rslt, MYSQLI_ASSOC);
	            	 $_SESSION['search'] = mysqli_fetch_all($rslt, MYSQLI_ASSOC);
	        	}

	        	# Free result set
	        	mysqli_free_result($rslt);
	        }

	        # Close connection
	        mysqli_close($DB);
	    }
	}
	if ($count < 0){
		$count = 0;
	}
	return $count;
}



function CreateNew(){
	$jsonarr['srlno']='';
	$jsonarr['name_val']='name-val';
	$jsonarr['sort_description']='sort-description';
	$jsonarr['main_categori']='';
	$jsonarr['sub_catagori']='sub-catagori';
	$jsonarr['syntax0']='syntax0';
	$jsonarr['syntax1']='syntax1';
	$jsonarr['syntax2']='syntax2';
	$jsonarr['syntax3']='syntax3';
	$jsonarr['syntax4']='syntax4';
	$jsonarr['syntax5']='syntax5';
	$jsonarr['syntax6']='syntax6';
	$jsonarr['syntax7']='syntax7';
	$jsonarr['syntax8']='syntax8';
	$jsonarr['syntax9']='syntax9';
	$jsonarr['syntax10']='syntax10';
	$jsonarr['syntax11']='syntax11';
	$jsonarr['syntax12']='syntax12';
	$jsonarr['syntax13']='syntax13';
	$jsonarr['syntax14']='syntax14';
	$jsonarr['description0']='description0';
	$jsonarr['description1']='description1';
	$jsonarr['description2']='description2';
	$jsonarr['description3']='description3';
	$jsonarr['description4']='description4';
	$jsonarr['description5']='description5';
	$jsonarr['description6']='description6';
	$jsonarr['description7']='description7';
	$jsonarr['description8']='description8';
	$jsonarr['description9']='description9';
	$jsonarr['description10']='description10';
	$jsonarr['description11']='description11';
	$jsonarr['description12']='description12';
	$jsonarr['description13']='description13';
	$jsonarr['description14']='description14';
	$jsonarr['examples0']='examples0';
	$jsonarr['examples1']='examples1';
	$jsonarr['examples2']='examples2';
	$jsonarr['examples3']='examples3';
	$jsonarr['examples4']='examples4';
	$jsonarr['examples5']='examples5';
	$jsonarr['examples6']='examples6';
	$jsonarr['examples7']='examples7';
	$jsonarr['examples8']='examples8';
	$jsonarr['examples9']='examples9';
	$jsonarr['examples10']='examples10';
	$jsonarr['examples11']='examples11';
	$jsonarr['examples12']='examples12';
	$jsonarr['examples13']='examples13';
	$jsonarr['examples14']='examples14';
	$jsonarr['ExampleDescription0']='ExampleDescription0';
	$jsonarr['ExampleDescription1']='ExampleDescription1';
	$jsonarr['ExampleDescription2']='ExampleDescription2';
	$jsonarr['ExampleDescription3']='ExampleDescription3';
	$jsonarr['ExampleDescription4']='ExampleDescription4';
	$jsonarr['ExampleDescription5']='ExampleDescription5';
	$jsonarr['ExampleDescription6']='ExampleDescription6';
	$jsonarr['ExampleDescription7']='ExampleDescription7';
	$jsonarr['ExampleDescription8']='ExampleDescription8';
	$jsonarr['ExampleDescription9']='ExampleDescription9';
	$jsonarr['ExampleDescription10']='ExampleDescription10';
	$jsonarr['ExampleDescription11']='ExampleDescription11';
	$jsonarr['ExampleDescription12']='ExampleDescription12';
	$jsonarr['ExampleDescription13']='ExampleDescription13';
	$jsonarr['ExampleDescription14']='ExampleDescription14';
	$jsonarr['input0']='input0';
	$jsonarr['input1']='input1';
	$jsonarr['input2']='input2';
	$jsonarr['input3']='input3';
	$jsonarr['input4']='input4';
	$jsonarr['input5']='input5';
	$jsonarr['input6']='input6';
	$jsonarr['input7']='input7';
	$jsonarr['input8']='input8';
	$jsonarr['input9']='input9';
	$jsonarr['input10']='input10';
	$jsonarr['input11']='input11';
	$jsonarr['input12']='input12';
	$jsonarr['input13']='input13';
	$jsonarr['input14']='input14';
	$jsonarr['input15']='input15';
	$jsonarr['input16']='input16';
	$jsonarr['input17']='input17';
	$jsonarr['input18']='input18';
	$jsonarr['input19']='input19';
	$jsonarr['input_type0']='';
	$jsonarr['input_type1']='';
	$jsonarr['input_type2']='';
	$jsonarr['input_type3']='';
	$jsonarr['input_type4']='';
	$jsonarr['input_type5']='';
	$jsonarr['input_type6']='';
	$jsonarr['input_type7']='';
	$jsonarr['input_type8']='';
	$jsonarr['input_type9']='';
	$jsonarr['input_type10']='';
	$jsonarr['input_type11']='';
	$jsonarr['input_type12']='';
	$jsonarr['input_type13']='';
	$jsonarr['input_type14']='';
	$jsonarr['input_type15']='';
	$jsonarr['input_type16']='';
	$jsonarr['input_type17']='';
	$jsonarr['input_type18']='';
	$jsonarr['input_type19']='';
	$jsonarr['input_desc0']='input-desc0';
	$jsonarr['input_desc1']='input-desc1';
	$jsonarr['input_desc2']='input-desc2';
	$jsonarr['input_desc3']='input-desc3';
	$jsonarr['input_desc4']='input-desc4';
	$jsonarr['input_desc5']='input-desc5';
	$jsonarr['input_desc6']='input-desc6';
	$jsonarr['input_desc7']='input-desc7';
	$jsonarr['input_desc8']='input-desc8';
	$jsonarr['input_desc9']='input-desc9';
	$jsonarr['input_desc10']='input-desc10';
	$jsonarr['input_desc11']='input-desc11';
	$jsonarr['input_desc12']='input-desc12';
	$jsonarr['input_desc13']='input-desc13';
	$jsonarr['input_desc14']='input-desc14';
	$jsonarr['input_desc15']='input-desc15';
	$jsonarr['input_desc16']='input-desc16';
	$jsonarr['input_desc17']='input-desc17';
	$jsonarr['input_desc18']='input-desc18';
	$jsonarr['input_desc19']='input-desc19';
	$jsonarr['output0']='output0';
	$jsonarr['output1']='output1';
	$jsonarr['output2']='output2';
	$jsonarr['output3']='output3';
	$jsonarr['output4']='output4';
	$jsonarr['output5']='output5';
	$jsonarr['output6']='output6';
	$jsonarr['output7']='output7';
	$jsonarr['output8']='output8';
	$jsonarr['output9']='output9';
	$jsonarr['output10']='output10';
	$jsonarr['output11']='output11';
	$jsonarr['output12']='output12';
	$jsonarr['output13']='output13';
	$jsonarr['output14']='output14';
	$jsonarr['output15']='output15';
	$jsonarr['output16']='output16';
	$jsonarr['output17']='output17';
	$jsonarr['output18']='output18';
	$jsonarr['output19']='output19';
	$jsonarr['output_type0']='';
	$jsonarr['output_type1']='';
	$jsonarr['output_type2']='';
	$jsonarr['output_type3']='';
	$jsonarr['output_type4']='';
	$jsonarr['output_type5']='';
	$jsonarr['output_type6']='';
	$jsonarr['output_type7']='';
	$jsonarr['output_type8']='';
	$jsonarr['output_type9']='';
	$jsonarr['output_type10']='';
	$jsonarr['output_type11']='';
	$jsonarr['output_type12']='';
	$jsonarr['output_type13']='';
	$jsonarr['output_type14']='';
	$jsonarr['output_type15']='';
	$jsonarr['output_type16']='';
	$jsonarr['output_type17']='';
	$jsonarr['output_type18']='';
	$jsonarr['output_type19']='';
	$jsonarr['output_desc0']='output-desc0';
	$jsonarr['output_desc1']='output-desc1';
	$jsonarr['output_desc2']='output-desc2';
	$jsonarr['output_desc3']='output-desc3';
	$jsonarr['output_desc4']='output-desc4';
	$jsonarr['output_desc5']='output-desc5';
	$jsonarr['output_desc6']='output-desc6';
	$jsonarr['output_desc7']='output-desc7';
	$jsonarr['output_desc8']='output-desc8';
	$jsonarr['output_desc9']='output-desc9';
	$jsonarr['output_desc10']='output-desc10';
	$jsonarr['output_desc11']='output-desc11';
	$jsonarr['output_desc12']='output-desc12';
	$jsonarr['output_desc13']='output-desc13';
	$jsonarr['output_desc14']='output-desc14';
	$jsonarr['output_desc15']='output-desc15';
	$jsonarr['output_desc16']='output-desc16';
	$jsonarr['output_desc17']='output-desc17';
	$jsonarr['output_desc18']='output-desc18';
	$jsonarr['output_desc19']='output-desc19';
	$jsonarr['api']='api';
	$jsonarr['algorithms']='algorithms';
	$jsonarr['references0']='references0';
	$jsonarr['references1']='references1';
	$jsonarr['references2']='references2';
	$jsonarr['references3']='references3';
	$jsonarr['references4']='references4';
	$jsonarr['references5']='references5';
	$jsonarr['references6']='references6';
	$jsonarr['references7']='references7';
	$jsonarr['references8']='references8';
	$jsonarr['references9']='references9';
	$jsonarr['references10']='references10';
	$jsonarr['references11']='references11';
	$jsonarr['link0']='link0';
	$jsonarr['link1']='link1';
	$jsonarr['link2']='link2';
	$jsonarr['link3']='link3';
	$jsonarr['link4']='link4';
	$jsonarr['link5']='link5';
	$jsonarr['link6']='link6';
	$jsonarr['link7']='link7';
	$jsonarr['link8']='link8';
	$jsonarr['link9']='link9';
	$jsonarr['link10']='link10';
	$jsonarr['link11']='link11';

	$_SESSION['function'] = $jsonarr;


}







?>