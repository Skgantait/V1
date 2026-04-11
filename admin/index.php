<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
//echo $uid;

require_once('get.php');
//echo var_dump( getBlankCatArr());


$fnm = "";
$srch ="";
$count = 0;

if(isset($_GET['fnm']))  {
    $fnm = urldecode($_GET['fnm']);
    getFuncData($fnm);
}
elseif(isset($_GET['srch'])) {
    $srch = urldecode($_GET['srch']);
    $count = getSearchData($srch);
}else{
    CreateNew();
}
 
geFfuncList();

//==================================================





//====================================================
?>

<!doctype html>
<html>
<head>
<?php include('head.php')?>
</head>
<body>
    <?php include('preloader.php')?>
    <?php include('modal.php')?>
    <div id="wrapper">

       <!--=============== SIDEBAR ===============-->
       <?php include('sidebar.php')?>
        <!--===============END SIDEBAR ===============-->
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

            <!--========== SEARCH ==========-->
            <div class="search-container">
                <div class="search-heading">
                    <span>FIND FUNCTION</span>
                </div>
                <div class="search-main">
                    <input type="search" id="search" name="search" pattern=".*\S.*" placeholder="Find function by keyword">
                    <button class="search-btn" onclick="search()">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </div>
                <!--<input type="search" name="search" pattern=".*\S.*" required>-->                
            </div>
            <!--========== END SEARCH ==========-->





                <?php 
                ///*
                    if($srch != ""){
                        include('func_list.php');
                    }else{
                        include('func_body.php');
                    }
                    //*/
                ?>

            <!--Footer-->
            <footer id="landing-footer" class="clearfix">
                <?php include('footer.php')?>
            </footer>
            <!--End of Footer-->


        </main>
        <!--End Main Content Area-->
        
        <!--Footer-->
        
        <!--End of Footer-->
    
    </div>
    <!-- End WRAPPER -->

</body>
</html>