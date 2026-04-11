<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Meta Keywords and Description-->
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!--Page Title-->
    <title>CALGORIC</title>


    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.png" title="calgoric"/>

    <!-- Main CSS Files -->
    <link rel="stylesheet" href="css/mainstyle.css">

    <!-- Namari Color CSS -->
    <link rel="stylesheet" href="css/namari-color.css">

   
    <!--Icon Fonts - Font Awesome Icons-->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Animate CSS-->
    <link href="css/animate.css" rel="stylesheet" type="text/css">

    <!--Google Webfonts-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
    <!--
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'>
    -->
    <link rel="stylesheet" href="css/sidemenustyles.css">
    <link rel="stylesheet" href="css/jqmath-0.4.3.css">
    <link rel="stylesheet" href="css/CodeStyler.css">
    <link rel="stylesheet" type="text/css" href="css/prompt-boxes.css">

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

    <style type="text/css">
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  display: none; /* Hidden by default */
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 400px; /* Could be more or less, depending on screen size */
}

    </style>

    <style>

        .ulm {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #38444d;
}

.ulm li{
    all: unset;
}

.lim {
  float: left;
}

.lim a{/*, .dropbtn {*/
    all: unset;
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  cursor: pointer;
}

.lim a:hover{/*, .dropdown:hover .dropbtn {*/
  background-color: #2980B9;
}
/*
.lim.dropdown {
  display: inline-block;
}
*/

/* Dropdown Button */
.dropbtn {
  color: white;
  padding: 14px 16px;
  text-decoration: none;
  background-color: #38444d;
  border: none;

  /*
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
*/

  cursor: pointer;
}

/* Dropdown button on hover & focus */
.dropbtn:hover{/*, .dropbtn:focus {*/
  background-color: #2980B9;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}


 .hscroll {
            padding: 5px;
            margin-bottom: 15px;
            width: 100%;
            height: 300px;
            overflow-x: hidden;
            overflow-y: auto;
        }

</style>


    <script>
            $(document).ready(function () {
                $('.collapsible-menu').data('collapsible-menu');
                var anchors = $('.collapsible-menu a.expanded');
                if (anchors.length > 1) {
                    anchors.not(anchors[0]).removeClass('expanded').addClass('collapsed').find('+ ul').slideUp('medium');
                }

                /*
                $('#collapsible-menu-transition').change(function () {
                    $('.collapsible-menu').data('collapsible-menu', this.value);
                    var anchors = $('.collapsible-menu a.expanded');

                    if (this.value == 'accordion' && anchors.length > 1) {
                        anchors.not(anchors[0]).removeClass('expanded').addClass('collapsed').find('+ ul').slideUp('medium');
                    }
                });
                */
                //$('#collapsible-menu-transition').val($('.collapsible-menu').data('collapsible-menu'));
            });



        </script>