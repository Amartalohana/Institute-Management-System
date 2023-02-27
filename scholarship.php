<!doctype html>
<html lang="en">



<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>Institute of technologies</title>
    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="css/slick.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="css/animate.css">
    
    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="css/nice-select.css">
    
    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="css/jquery.nice-number.min.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="css/default.css">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="css/style.css">
    
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="css/responsive.css">
	<!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="image1/" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="css2/font-awesome.min.css">
    <!-- ALL CSS FILES -->
    <link href="css/materialize.css" rel="stylesheet">
    <link href="css2/bootstrap.css" rel="stylesheet" />
    <link href="css2/style.css" rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="css2/style-mob.css" rel="stylesheet" />
  <style>
  waves-effect input[type="button"], .waves-effect input[type="reset"], .waves-effect input[type="submit"] {
     border: 0;
     font-style: normal;
     font-size: inherit;
     text-transform: inherit;
     background: none;
     outline:none;
}
 .waves-effect img {
     position: relative;
     z-index: -1;
}
 .waves-notransition {
     transition: none !important;
}
 .waves-circle {
     -webkit-transform: translateZ(0);
     transform: translateZ(0);
     -webkit-mask-image: -webkit-radial-gradient(circle, white 100%, black 100%);
}
 .waves-input-wrapper {
     border-radius: 0.2em;
     vertical-align: bottom;
}
 .waves-input-wrapper .waves-button-input {
     position: relative;
     top: 0;
     left: 0;
     z-index: 1;
}
  </style>
  
</head>

<body>

   <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "schoolmanagement";

   
   $conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}?>
   <!--====== PRELOADER PART START ======-->
    
    <div class="preloader">
        <div class="loader rubix-cube">
            <div class="layer layer-1"></div>
            <div class="layer layer-2"></div>
            <div class="layer layer-3 color-1"></div>
            <div class="layer layer-4"></div>
            <div class="layer layer-5"></div>
            <div class="layer layer-6"></div>
            <div class="layer layer-7"></div>
            <div class="layer layer-8"></div>
        </div>
    </div>
    
    <!--====== PRELOADER PART START ======-->
   
    <!--====== HEADER PART START ======-->
	<?php include ("pages/header.php");?>
    
    <!--====== HEADER PART ENDS ======-->
    <!--====== HEADER PART ENDS ======-->
   
    
   
    <!--====== PAGE BANNER PART START ======-->
    
    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Schoolarship</h2>
                        
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
   
    <!--SECTION START-->
    <section class="c-all h-quote">
        <div class="container">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="all-title quote-title qu-new">
                    <h2>Request an Schoolarship</h2>
                    <p>The BS Mathematics assists students to enhance their quantitative skills which are highly valued as a mathematician. This degree prepares students for a career in the public and private sectors. The graduates can pursue for further studies, or in work finance, consultancy, advertising, management, banking, marketing, accountancy, commerce, education, research and IT.</p>
                    <p class="help-line">Help Line <span>+92309876678</span> </p> <span class="help-arrow pulse"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </div>
            </div>
			
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="n-form-com admiss-form">
                    <div class="col s12">
                        <form class="form-horizontal" method="post">
                            <div class="form-group">
                                <label class="control-label col-sm-3">Full Name:</label>
                                <div class="col-sm-9">
                                    <input name="fname" type="text" class="form-control" placeholder="Enter your Full name" required>
                                </div>
                            </div>
							<div class="form-group">
                                <label class="control-label col-sm-3">Degree Title/Program:</label>
                                <div class="col-sm-9">
                                    <input name="degree" type="text" class="form-control" placeholder="Enter your Degree Title/Program" required>
                                </div>
                            </div>
							
							<div class="form-group">
                                <label class="control-label col-sm-3">Name Of Institute:</label>
                                <div class="col-sm-9">
                                    <input name="institute" type="text" class="form-control" placeholder="Enter your Name Of Institute" required>
                                </div>
                            </div>
							
							<div class="form-group">
                                <label class="control-label col-sm-3">CNIC:</label>
                                <div class="col-sm-9">
                                    <input name="cnic" type="text" class="form-control" placeholder="Enter your CNIC" required>
                                </div>
                            </div>
							<div class="form-group">
							<div class="radio">
                                <label class="control-label col-sm-3">Merital Status:</label>
                                
								<label class="">
                                    <input name="ms" type="radio" class="mr-5" value="Single" required>Single</label>
									
								<label>
                                    <input name="ms" type="radio" class="mr-5" value="Married" required>Married</label>
									<label>
                                    <input name="ms" type="radio" class="mr-5" value="Single" required>Divorced</label>
                                    
                            </div>
                            </div>
                                
                            
							<div class="form-group">
                                <label class="control-label col-sm-3">Age:</label>
                                <div class="col-sm-9">
                                    <input name="age" type="number" class="form-control" placeholder="Enter your Age" required>
                                </div>
                            </div>
							
								<div class="form-group">
                                <label class="control-label col-sm-3">Domicile:</label>
                                <div class="col-sm-9">
                                    <input name="domicile" type="text" class="form-control" placeholder="Enter your Domicile" required>
                                </div>
                            </div>
							
                            <div class="form-group">
                                <label class="control-label col-sm-3">Phone:</label>
                                <div class="col-sm-9">
                                    <input name="phone" type="number" class="form-control" placeholder="Enter your phone number" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Email:</label>
                                <div class="col-sm-9">
                                    <input name="email" type="email" class="form-control" placeholder="Enter email" required>
                                </div>
                            </div>
							
							<div class="form-group">
                                <label class="control-label col-sm-3">Present Address:</label>
                                <div class="col-sm-9">
                                    <input name="preadd" type="text" class="form-control" placeholder="Enter your Present Address">
                                </div>
                            </div>
							
							<div class="form-group">
                                <label class="control-label col-sm-3">Perminant Address:</label>
                                <div class="col-sm-9">
                                    <input name="peradd" type="text" class="form-control" placeholder="Enter your Perminant Address">
                                </div>
                            </div>
							
                            <div class="form-group">
                                <label class="control-label col-sm-3">Your City:</label>
                                <div class="col-sm-9">
                                    <input name="city" type="text" class="form-control" placeholder="Enter your city">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Education:</label>
                                <div class="col-sm-9">
                                    <input name="lquali" type="text" class="form-control" placeholder="Enter your Last Qualification">
                                    <input name="metric" type="text" class="form-control" placeholder="Enter your SSC-II Marks">
                                    <input name="inter" type="text" class="form-control" placeholder="Enter your HSC-II Marks">
                                    
                                </div>
                            </div>
                            
							<div class="form-group">
                                
                            <div class="form-group mar-bot-0">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <i class="waves-effect waves-light light-btn waves-input-wrapper" style=""><input type="submit" name="submit" value="APPLY NOW" class="waves-button-input"></i>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<?php
	if ($_SERVER['REQUEST_METHOD']=='POST'){
		
		$fname = $_POST['fname'];
		$degree = $_POST['degree'];
		$institute = $_POST['institute'];
		$cnic = $_POST['cnic'];
		$mstatus = $_POST['ms'];
		$age = $_POST['age'];
		$domicile = $_POST['domicile'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$peradd = $_POST['peradd'];
		$preadd = $_POST['preadd'];
		$city  = $_POST['city'];
		$education = $_POST['lquali'];
		$metric = $_POST['metric'];
		$inter = $_POST['inter'];
		
		$sql = "INSERT INTO ` scholarship`(`fulnam`, `dg/prog`, `ins`, `cnic`, `mstatus`, `age`, `domicile`, `phon`, `email`, `peradd`, `preadd`, `city`, `education`, `metric`, `inter`) VALUES ('$fname','$degree','$institute','$cnic','$mstatus','$age','$domicile','$phone','$email','$peradd','$preadd','$city','$education','$metric','$inter')";
		
		if($conn->query($sql) === TRUE){
			
			echo "<script>alert('Form Submitted Successfully');</script>";
			echo '';
			echo '<script>';
			echo '</script>';
		}else{
			echo "<script>alert('Error: ');</script>";
		}
		
	}
	
	
	
	
	
	?>
             
    <!--SECTION END-->


    <!--SECTION END-->
	

    <!--====== COUNTER PART START ======-->
    
    
    
    <!--====== COUNTER PART ENDS ======-->
   
    
    
    <!--====== TEACHERS PART ENDS ======-->
   
    <!--====== COUNTER PART START ======-->
    
    <div id="counter-part" class="bg_cover pt-65 pb-110" data-overlay="8" style="background-image: url(images/bg-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter text-center mt-40">
                        <span><span class="counter">30,000</span>+</span>
                        <p>Students enrolled</p>
                    </div> <!-- single counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter text-center mt-40">
                        <span><span class="counter">41,000</span>+</span>
                        <p>Courses Uploaded</p>
                    </div> <!-- single counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter text-center mt-40">
                        <span><span class="counter">11,000</span>+</span>
                        <p>People certificate</p>
                    </div> <!-- single counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter text-center mt-40">
                        <span><span class="counter">39,000</span>+</span>
                        <p>Global Teachers</p>
                    </div> <!-- single counter -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
    
    <!--====== COUNTER PART ENDS ======-->
   
    
    
   
   
    <!--====== BACK TO TOP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
    <!--====== BACK TO TOP PART ENDS ======-->


    
    
    
    
    
    
    
    
    <!--====== jquery js ======-->
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="js/bootstrap.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="js/slick.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="js/jquery.magnific-popup.min.js"></script>
    
    <!--====== Counter Up js ======-->
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    
    <!--====== Nice Select js ======-->
    <script src="js/jquery.nice-select.min.js"></script>
    
    <!--====== Nice Number js ======-->
    <script src="js/jquery.nice-number.min.js"></script>
    
    <!--====== Count Down js ======-->
    <script src="js/jquery.countdown.min.js"></script>
    
    <!--====== Validator js ======-->
    <script src="js/validator.min.js"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="js/ajax-contact.js"></script>
    
    <!--====== Main js ======-->
    <script src="js/main.js"></script>
    
    <!--====== Map js ======-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
    <script src="js/map-script.js"></script>
	<!--Import jQuery before materialize.js-->
    <script src="js1/main.min.js"></script>
    <script src="js1/bootstrap.min.js"></script>
    <script src="js1/materialize.min.js"></script>
    <script src="js1/custom.js"></script>

