<?php
session_start();
?>

<header id="header-part">
        <div class="header-top d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="header-contact">
                            <ul>
                                <li><i class="fa fa-envelope"></i><a href="mailto:instituteoftechnologies@gmail.com">Institute of Technologies@gmail.com</a></li>
                                <li><i class="fa fa-phone"></i><span>+03312345567</span></li>
                            </ul>
                        </div> <!-- header contact -->
                    </div>
                    <div class="col-md-6">
                        <div class="header-right d-flex justify-content-end">
                            <div class="social d-flex">
                                <span class="follow-us">Follow Us :</span>
                                <ul>
                                    <li><a href="https://www.facebook.com/ggdcqh"><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a></li>
                                    <li><a href="https://twitter.com/login?lang=en"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="https://www.linkedin.com/feed/"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div> <!-- social -->
                            <div class="login-register">
                                <ul>
								<?php if(!isset($_SESSION['ulogin'])){ ?>
                                    <li><a href="pages/login.php">Admin Login</a></li>
                                    <li><a href="pages/ulogin.php">User Login</a></li>
								<?php } if(isset($_SESSION['ulogin'])){ ?>
                                    <li><a href="pages/logout.php">Logout</a></li>
									
								<?php }?>
                                </ul>
                            </div>
                        </div> <!-- header right -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header top -->
        
        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="#index-4.php">
                                <img src="images/logo.png" width="50%" >
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a href="index.php">Home</a>
                                        
                                    </li>
                                    <li class="nav-item">
                                        <a href="about.php">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="courses.php">Courses</a>
                                        <ul class="sub-menu">
                                            
                                            <li><a href="android.php">ANDROID</a></li>
                                            <li><a href="java.php">JAVA</a></li>
                                            <li><a href="nodejs.php">NODE JS</a></li>
                                            <li><a href="php.php">PHP</a></li>
                                            <li><a href="javascript.php">JAVASCRIPT</a></li>
                                            <li><a href="python.php">PYTHON</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="events.php">Events</a>
                                        <ul class="sub-menu">
                                            
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="teachers.php">Teachers</a>
                                        <ul class="sub-menu">
                                            
                                        </ul>
                                    </li>
                                    
                                   <li class="nav-item">
                                        <a href="admission.php">ADMISSION</a>
                                        <ul class="sub-menu">
                                            <li><a href="admission.php">ADMISSION FORM</a></li>
                                            <li><a href="scholarship.php">Schoolarship Form</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="contact.php">Contact</a>
                                    </li>
                                </ul>
                            </div>
                             
                        </nav> <!-- nav -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
    </header>
    
    <!--====== HEADER PART ENDS ======-->
   