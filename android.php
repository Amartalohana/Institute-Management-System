<!doctype html>
<html lang="en">



<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>Institute of Technologies</title>
    
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
  
  
</head>

<body>
  
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
    
  <?php include('pages/header.php'); ?>
    
    <!--====== HEADER PART ENDS ======-->
   
    <!--====== SEARCH BOX PART START ======-->
    
    <div class="search-box">
        <div class="search-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form action="#">
                <input type="text" placeholder="Search by keyword">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div> <!-- search form -->
    </div>
    
    <!--====== SEARCH BOX PART ENDS ======-->
   
    <!--====== PAGE BANNER PART START ======-->
    
    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Learn basic Android</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="courses.php">Courses</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Learn basic Android</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
    
    <!--====== COURSES SINGEl PART START ======-->
    
    <section id="courses-single" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="courses-single-left mt-30">
                        <div class="title">
                            <h3>Learn basic Android Development from start for beginner</h3>
                        </div> <!-- title -->
                        <div class="course-terms">
                            <ul>
                                <li>
                                    <div class="teacher-name">
                                        <div class="thum">
                                           
                                        </div>
                                        <div class="name">
                                            <span>Teacher</span>
                                            <h6>Asma Qazi</h6>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="course-category">
                                        <span>Category</span>
                                        <h6>Programming </h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="review">
                                        <span>Review</span>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="rating">(20 Reviews)</li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- course terms -->
                        
                        <div class="courses-single-image pt-50">
                            <img src="images/course/android_green_blue_mosaic_30960_1920x1080.jpg" alt="Courses">
                        </div> <!-- courses single image -->
                        
                        <div class="courses-tab mt-30">
                            <ul class="nav nav-justified" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                                </li>
                                <li class="nav-item">
                                    <a id="curriculum-tab" data-toggle="tab" href="#curriculum" role="tab" aria-controls="curriculum" aria-selected="false">Curriculum</a>
                                </li>
                                <li class="nav-item">
                                    <a id="instructor-tab" data-toggle="tab" href="#instructor" role="tab" aria-controls="instructor" aria-selected="false">Instructor</a>
                                </li>
                                <li class="nav-item">
                                    <a id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews</a>
                                </li>
                            </ul>
                            
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                    <div class="overview-description">
                                        <div class="single-description pt-40">
                                            <h6>Course Summery</h6>
                                            <p>Android is a Linux based operating system it is designed primarily for touch screens mobile devices such as smartphones and tablet computers. 
											The operating system has developed a lot in the last 15 years starting from black and white phones to recent smartphones or mini computers.</p>
                                        </div>
                                        <div class="single-description pt-40">
                                            <h6>Requirements</h6>
                                            <p>Basic requirements is that you need a good design.Analyse the system first, make a design, then implement it. 
											If you don't know android , start with core java and OOP concepts followed by android development. 
											For more about analysis and design refer Object Oriented Analysis and Design .</p>
                                        </div>
                                    </div> <!-- overview description -->
                                </div>
                                <div class="tab-pane fade" id="curriculum" role="tabpanel" aria-labelledby="curriculum-tab">
                                    <div class="curriculum-cont">
                                        <div class="title">
                                            <h6>Learn basic Android Lecture Started</h6>
                                        </div>
                                        <div class="accordion" id="accordionExample">
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        <ul>
                                                            <li><i class="fa fa-file-o"></i></li>
                                                            <li><span class="lecture">Lecture 1.1</span></li>
                                                            <li><span class="head">What is Android </span></li>
                                                            <li><span class="time d-none d-md-block"><i class="fa fa-clock-o"></i> <span> 00.30.00</span></span></li>
                                                        </ul>
                                                    </a>
                                                </div>

                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>Basics</p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="card">
                                                <div class="card-header" id="headingTow">
                                                    <a href="#" data-toggle="collapse" class="collapsed" data-target="#collapseTow" aria-expanded="true" aria-controls="collapseTow">
                                                        <ul>
                                                            <li><i class="fa fa-file-o"></i></li>
                                                            <li><span class="lecture">Lecture 1.2</span></li>
                                                            <li><span class="head">What is Fragments</span></li>
                                                            <li><span class="time d-none d-md-block"><i class="fa fa-clock-o"></i> <span> 00.30.00</span></span></li>
                                                        </ul>
                                                    </a>
                                                </div>

                                                <div id="collapseTow" class="collapse" aria-labelledby="headingTow" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>Introduction To Fragments.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingThree">
                                                    <a href="#" data-toggle="collapse" class="collapsed" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        <ul>
                                                            <li><i class="fa fa-file-o"></i></li>
                                                            <li><span class="lecture">Lecture 1.3</span></li>
                                                            <li><span class="head">What is Android Development</span></li>
                                                            <li><span class="time d-none d-md-block"><i class="fa fa-clock-o"></i> <span> 00.30.00</span></span></li>
                                                        </ul>
                                                    </a>
                                                </div>
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>Introduction to development</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingFore">
                                                    <a href="#" data-toggle="collapse" class="collapsed" data-target="#collapseFore" aria-expanded="false" aria-controls="collapseFore">
                                                        <ul>
                                                            <li><i class="fa fa-file-o"></i></li>
                                                            <li><span class="lecture">Lecture 1.4</span></li>
                                                            <li><span class="head">What is Android widgets</span></li>
                                                            <li><span class="time d-none d-md-block"><i class="fa fa-clock-o"></i> <span> 00.30.00</span></span></li>
                                                        </ul>
                                                    </a>
                                                </div>
                                                <div id="collapseFore" class="collapse" aria-labelledby="headingFore" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>Introduction to Android widgets</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingFive">
                                                    <a href="#" data-toggle="collapse" class="collapsed" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                        <ul>
                                                            <li><i class="fa fa-file-o"></i></li>
                                                            <li><span class="lecture">Lecture 1.5</span></li>
                                                            <li><span class="head">What are Sensors</span></li>
                                                            <li><span class="time d-none d-md-block"><i class="fa fa-clock-o"></i> <span> 00.30.00</span></span></li>
                                                        </ul>
                                                    </a>
                                                </div>
                                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>Android Sensors.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="card">
                                                <div class="card-header" id="headingSix">
                                                    <a href="#" data-toggle="collapse" class="collapsed" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                        <ul>
                                                            <li><i class="fa fa-file-o"></i></li>
                                                            <li><span class="lecture">Lecture 1.6</span></li>
                                                            <li><span class="head">What is Application Development</span></li>
                                                            <li><span class="time d-none d-md-block"><i class="fa fa-clock-o"></i> <span> 00.30.00</span></span></li>
                                                        </ul>
                                                    </a>
                                                </div>
                                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>What is application development in Android.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="card">
                                                <div class="card-header" id="headingSeven">
                                                    <a href="#" data-toggle="collapse" class="collapsed" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                        <ul>
                                                            <li><i class="fa fa-file-o"></i></li>
                                                            <li><span class="lecture">Lecture 1.7</span></li>
                                                            <li><span class="head">What is Android Intents</span></li>
                                                            <li><span class="time d-none d-md-block"><i class="fa fa-clock-o"></i> <span> 00.30.00</span></span></li>
                                                        </ul>
                                                    </a>
                                                </div>
                                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>Introduction Android Intents</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- curriculum cont -->
                                </div>
                                <div class="tab-pane fade" id="instructor" role="tabpanel" aria-labelledby="instructor-tab">
                                    <div class="instructor-cont">
                                        <div class="instructor-author">
                                            <div class="author-thum">
                                                
                                            </div>
                                            <div class="author-name">
                                                <a href="#"><h5>Asma Qazi</h5></a>
                                                <span>Senior Android Developer</span>
                                                <ul class="social">
                                                    <li><a href="https://www.facebook.com/ggdcqh"><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a></li>
                                    <li><a href="https://twitter.com/login?lang=en"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="https://www.linkedin.com/feed/"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="instructor-description pt-25">
                                            <p></p>
                                        </div>
                                    </div> <!-- instructor cont -->
                                </div>
                                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                    <div class="reviews-cont">
                                        <div class="title">
                                            <h6>Student Reviews</h6>
                                        </div>
                                        <ul>
                                           <li>
                                               <div class="single-reviews">
                                                    <div class="reviews-author">
                                                        <div class="author-thum">
                                                            <img src="images/review/r-1.jpg" alt="Reviews">
                                                        </div>
                                                        <div class="author-name">
                                                            <h6>Bobby Aktar</h6>
                                                            <span>April 03, 2019</span>
                                                        </div>
                                                    </div>
                                                    <div class="reviews-description pt-20">
                                                        <p>A great course with a lot of useful knowledge.</p>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                            </ul>
                                                            <span>/ 5 Star</span>
                                                        </div>
                                                    </div>
                                                </div> <!-- single reviews -->
                                           </li>
                                           <li>
                                               <div class="single-reviews">
                                                    <div class="reviews-author">
                                                        <div class="author-thum">
                                                            <img src="images/review/r-2.jpg" alt="Reviews">
                                                        </div>
                                                        <div class="author-name">
                                                            <h6>Humayun Ahmed</h6>
                                                            <span>April 13, 2019</span>
                                                        </div>
                                                    </div>
                                                    <div class="reviews-description pt-20">
                                                        <p>Have a great opportunities of learning.</p>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                            </ul>
                                                            <span>/ 5 Star</span>
                                                        </div>
                                                    </div>
                                                </div> <!-- single reviews -->
                                           </li>
                                           <li>
                                               <div class="single-reviews">
                                                    <div class="reviews-author">
                                                        <div class="author-thum">
                                                            <img src="images/review/r-3.jpg" alt="Reviews">
                                                        </div>
                                                        <div class="author-name">
                                                            <h6>Tania Aktar</h6>
                                                            <span>April 20, 2019</span>
                                                        </div>
                                                    </div>
                                                    <div class="reviews-description pt-20">
                                                        <p>This is the best course.</p>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                            </ul>
                                                            <span>/ 5 Star</span>
                                                        </div>
                                                    </div>
                                                </div> <!-- single reviews -->
                                           </li>
                                        </ul>
                                        <div class="title pt-15">
                                            <h6>Leave A Comment</h6>
                                        </div>
                                        <div class="reviews-form">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-single">
                                                            <input type="text" placeholder="Fast name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-single">
                                                            <input type="text" placeholder="Last Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-single">
                                                            <div class="rate-wrapper">
                                                                <div class="rate-label">Your Rating:</div>
                                                                <div class="rate">
                                                                    <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                    <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                    <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                    <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                    <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-single">
                                                            <textarea placeholder="Comment"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-single">
                                                            <button type="button" class="main-btn">Post Comment</button>
                                                        </div>
                                                    </div>
                                                </div> <!-- row -->
                                            </form>
                                        </div>
                                    </div> <!-- reviews cont -->
                                </div>
                            </div> <!-- tab content -->
                        </div>
                    </div> <!-- courses single left -->
                    
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                            <div class="course-features mt-30">
                               <h4>Course Features </h4>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i>Duaration : <span>10 Hours</span></li>
                                    <li><i class="fa fa-clone"></i>Leactures : <span>09</span></li>
                                    <li><i class="fa fa-beer"></i>Quizzes :  <span>05</span></li>
                                    <li><i class="fa fa-user-o"></i>Students :  <span>100</span></li>
                                </ul>
                                <div class="price-button pt-10">
                                    <span>Price : <b>$25</b></span>
                                    <a href="admission.php" class="main-btn">Enroll Now</a>
                                </div>
                            </div> <!-- course features -->
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="You-makelike mt-30">
                                <h4>You make like </h4> 
                                <div class="single-makelike mt-20">
                                    <div class="image">
                                        <img src="images/your-make/y-1.jpg" alt="Image">
                                    </div>
                                    <div class="cont">
                                        <a href="javascript.php"><h4>Introduction to javascript</h4></a>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-user"></i>31</a></li>
                                            <li>$50</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-makelike mt-20">
                                    <div class="image">
                                        <img src="images/your-make/y-1.jpg" alt="Image">
                                    </div>
                                    <div class="cont">
                                        <a href="java.php"><h4>How to build a basic game with java </h4></a>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-user"></i>31</a></li>
                                            <li>$50</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-makelike mt-20">
                                    <div class="image">
                                        <img src="images/your-make/y-1.jpg" alt="Image">
                                    </div>
                                    <div class="cont">
                                        <a href="nodejs.php"><h4>Basic Node JS</h4></a>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-user"></i>31</a></li>
                                            <li>$50</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== COURSES SINGEl PART ENDS ======-->
   
    <!--====== FOOTER PART START ======-->
    
    <footer id="footer-part">
        <div class="footer-top pt-40 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-about mt-40">
                            <div class="logo">
                                <a href="#"><img src="images/logo.png" width="65%" alt="Logo"></a>
                            </div>
                            <p> INSTITUTE OF TECHNOLOGIES</p>
						<p>The platform to explore your ideas</p>
						<p>Start Your Bright Future</p>
						<p>Explore your Thoughts </p>
						<p>Your Way to Success</p>
                            <ul class="mt-20">
                                <li><a href="https://www.facebook.com/ggdcqh"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/login?lang=en"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://mail.google.com/mail/u/0/?tab=wm&ogbl#inbox"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-link mt-40">
                            <div class="footer-title pb-25">
                                <h6>Sitemap</h6>
                            </div>
                            <ul>
                                <li><a href="index.php"><i class="fa fa-angle-right"></i>Home</a></li>
                                <li><a href="about.php"><i class="fa fa-angle-right"></i>About us</a></li>
                                <li><a href="courses.php"><i class="fa fa-angle-right"></i>Courses</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>News</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Event</a></li>
                            </ul>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Gallery</a></li>
                                
                                <li><a href="teachers.php"><i class="fa fa-angle-right"></i>Teachers</a></li>
                                <li><a href="about.php"><i class="fa fa-angle-right"></i>Support</a></li>
                                <li><a href="contact.php"><i class="fa fa-angle-right"></i>Contact</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-link support mt-40">
                            <div class="footer-title pb-25">
                                <h6>Support</h6>
                            </div>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-right"></i>FAQS</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Privacy</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Policy</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Support</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Documentation</a></li>
                            </ul>
                        </div> <!-- support -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-address mt-40">
                            <div class="footer-title pb-25">
                                <h6>Contact Us</h6>
                            </div>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="cont">
                                        <p>QSIMABAD HYDERABAD</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="cont">
                                        <p>0333123456</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="cont">
                                        <p>institute@gmail.com</p>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- footer address -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer top -->
        
        <div class="footer-copyright pt-10 pb-25">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="copyright text-md-left text-center pt-15">
                            <p>  </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="copyright text-md-right text-center pt-15">
                            <p>Designed by <span>AMRITA & PARVEEN</span> </p>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer copyright -->
    </footer>
    
    
    <!--====== FOOTER PART ENDS ======-->
   
    <!--====== BACK TO TP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
    <!--====== BACK TO TP PART ENDS ======-->
   
    
    
    
    
    
    
    
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

</body>


</html>
