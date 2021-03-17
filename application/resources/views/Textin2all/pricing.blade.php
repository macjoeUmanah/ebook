
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- title -->
    <title>Textin2all</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="<?php echo asset('assets/tmp-img/favicon/favicon-icon.png');?>">
    <!-- google-font-Railway -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700" rel="stylesheet">
    <!-- google-font-Open-Sans -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Raleway:100,200,300,400,500,600,700" rel="stylesheet">
<!-- fontawesome -->
{!! Html::style("assets/tmp-css/font-awesome/css/all.css") !!}
    <!-- bootstrap CSS -->
  
    {!! Html::style("assets/tmp-css/bootstrap/bootstrap.min.css") !!}
    <!-- Owl Carousel CSS -->
   
    {!! Html::style("assets/tmp-css/owl-carousel/owl.carousel.min.css") !!}
    {!! Html::style("assets/tmp-css/owl-carousel/owl.theme.default.min.css") !!}
    <!-- Responsive Tabs CSS -->
  
    {!! Html::style("assets/tmp-css/responsive-tabs/responsive-tabs.min.css") !!}
    <!-- Magnific Popup -->
   
    {!! Html::style("assets/tmp-css/magnific-popup/magnific-popup.min.css") !!}
    <!-- Animate CSS -->

    {!! Html::style("assets/tmp-css/animate/animate.min.css") !!}
    <!-- custom CSS -->
   
    {!! Html::style("assets/tmp-css/style.css") !!}
    <!-- Responsive CSS -->
  
    {!! Html::style("assets/tmp-css/responsive.css") !!}
</head>
<body>
      <!-- Header -->
      <header>
        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">
                <div class="site-nav-wrapper">

                    <div class="navbar-header">

                        <!-- Mobile Menu Open Button -->
                        <span id="mobile-nav-open-btn">&#9776;</span>

                        <!-- Logo -->
                        <a class="navbar-brand" href="index.html">
                            <img src="<?php echo asset('assets/tmp-img/logo/Logo.png');?>" alt="logo">
                        </a>
                    </div>

                    <!-- Main Menu -->
                    <div class="container">
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav pull-right">
                            <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('about')}}">About</a></li>
                                <li><a href="{{url('what')}}">what we do</a></li>
                                <li><a href="{{url('careers')}}">Careers</a></li>
                                <li><a href="{{url('pricing')}}">Pricing Plan</a></li>
                                <li><a href="{{url('contact')}}">Contact</a></li>
                                <li><a href="{{url('login')}}">Login</a></li>
                                <li><a href="{{url('signup')}}">Register</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Mobile Menu -->
                    <div id="mobile-nav">
                        <!-- Mobile Menu Close Button -->
                        <span id="mobile-nav-close-btn">&times;</span>

                        <div id="mobile-nav-content">
                            <ul class="nav">
                            <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('about')}}">About</a></li>
                                <li><a href="{{url('what')}}">what we do</a></li>
                                <li><a href="{{url('careers')}}">Careers</a></li>
                                <li><a href="{{url('pricing')}}">Pricing Plan</a></li>
                                <li><a href="{{url('contact')}}">Contact</a></li>
                                <li><a href="{{url('login')}}">Login</a></li>
                                <li><a href="{{url('signup')}}">Register</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </nav>
    </header>
    <!-- Header Ends -->
    <!-- Home -->
    <section id="other-home">
        <!-- Background Video -->
        <img id="other-home-bg-image" src="<?php echo asset('assets/tmp-img/home/Pricing.png');?>">
            <div id="other-home-content-inner" class="text-center">
                <div id="other-home-heading">
                    <h1 id="other-home-heading-1">Pricing Plan</h1><br>
                </div>
                <div id="other-home-text">
                    <p><a href="index.html"><img src="<?php echo asset('assets/tmp-img/Icons/home.png');?>" alt="home">Home</a> <img src="<?php echo asset('assets/tmp-img/Icons/arrow.png');?>" alt="arrow">Pricing</p>
                </div>
            </div>
    </section>
    <!-- Home Ends -->
    <section id="services">
        <!-- Services 01 -->
        
        <div class="other-content-box-lg">

            <div class="container">
                
                <div class="row">

                    <div class="col-md-12 col-sm-7  wow slideInDown">

                        <div class="horizontal-heading">
                            <h5>SMS SOLUTIONS</h5>
                            <h2>TAILORED TO YOU UNIQUE <span>BUSINESS NEEDS </span></h2>
                            <p><br> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero  eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo  dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet</p>
                            <p> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        </div>

                    </div>
                    <!-- <div class="col-md-5 col-sm-5 wow slideInRight">
                        <img src="img/services/sub-career.png" alt="client" class="img-responsive">
                    </div> -->
                </div>
                

        </div>

    </section>
<!-- Pricing -->
     <section id="pricing">

        <div class="content-box-md">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 text-center wow slideInDown">
                        <div class="horizontal-heading" style="margin: -100px 0 80px 0">
                            <h5>Lovely Customers</h5>
                            <h2>Our <span>Pricing</span></h2>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-4 col-sm-4 wow fadeInLeft">

                        <!-- Pricing Table 01 -->
                        <div class="pricing-table">
                            <div class="type">
                                <h4>Basic</h4>
                            </div>

                            <div class="price">

                                <div class="row">

                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <h2><span class="dollar">&#36;</span>29<br><span class="month">Month</span></h2>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8">
                                        <p>You will get all these awesome services with this great price. Get it now!</p>
                                    </div>

                                </div>

                            </div>
                            <ul class="package">
                                <li><i class="fa fa-check"></i>Full access</li>
                                <li><i class="fa fa-check"></i>Unlimited Bandwidth</li>
                                <li><i class="fa fa-check"></i>Powerful Admin Panel</li>
                                <li><i class="fa fa-check"></i>Email Accounts</li>
                                <li><i class="fa fa-check"></i>10 Free Web sites</li>
                            </ul>

                            <div id="pricing-btn-01">
                                <a class="btn btn-general btn-blue" href="#" title="Get Started" role="button">Get Started</a>
                            </div>

                        </div>

                    </div>
                    <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-duration="3s">

                        <!-- Pricing Table 02 -->
                        <div class="pricing-table">
                            <div class="type">
                                <h4>Unlimited</h4>
                            </div>

                            <div class="price">

                                <div class="row">

                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <h2><span class="dollar">&#36;</span>57<br><span class="month">Month</span></h2>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8">
                                        <p>You will get all these awesome services with this great price. Get it now!</p>
                                    </div>

                                </div>

                            </div>
                            <ul class="package">
                                <li><i class="fa fa-check"></i>Full access</li>
                                <li><i class="fa fa-check"></i>Unlimited Bandwidth</li>
                                <li><i class="fa fa-check"></i>Powerful Admin Panel</li>
                                <li><i class="fa fa-check"></i>Email Accounts</li>
                                <li><i class="fa fa-check"></i>10 Free Web sites</li>
                            </ul>

                            <div id="pricing-btn-02">
                                <a class="btn btn-general btn-blue" href="#" title="Get Started" role="button">Get Started</a>
                            </div>

                        </div>

                    </div>
                    <div class="col-md-4 col-sm-4 wow fadeInRight">

                        <!-- Pricing Table 03 -->
                        <div class="pricing-table">
                            <div class="type">
                                <h4>Professional</h4>
                            </div>

                            <div class="price">

                                <div class="row">

                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <h2><span class="dollar">&#36;</span>96<br><span class="month">Month</span></h2>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8">
                                        <p>You will get all these awesome services with this great price. Get it now!</p>
                                    </div>

                                </div>

                            </div>
                            <ul class="package">
                                <li><i class="fa fa-check"></i>Full access</li>
                                <li><i class="fa fa-check"></i>Unlimited Bandwidth</li>
                                <li><i class="fa fa-check"></i>Powerful Admin Panel</li>
                                <li><i class="fa fa-check"></i>Email Accounts</li>
                                <li><i class="fa fa-check"></i>10 Free Web sites</li>
                            </ul>

                            <div id="pricing-btn-03">
                                <a class="btn btn-general btn-blue" href="#" title="Get Started" role="button">Get Started</a>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- Pricing Ends -->
<section id="pricing-2">

        <div class="content-box-md">

            <div class="container">

                <div class="row">

                    <div class="col-md-4 col-sm-4 wow fadeInLeft">

                        <!-- Pricing Table 01 -->
                        <div class="horizontal-heading">
                            <h5>NO HIDDEN CHARGE</h5>
                            <h2>CHOOSE YOUR<br><span>PRICING PLAN </span></h2>
                            <p><br> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero  eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo  dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet</p>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-duration="3s">

                        <!-- Pricing Table 02 -->
                        <div class="pricing-table">
                            <div class="type">
                                <h4>Unlimited</h4>
                            </div>

                            <div class="price">

                                <div class="row">

                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <h2><span class="dollar">&#36;</span>57<br><span class="month">Month</span></h2>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8">
                                        <p>You will get all these awesome services with this great price. Get it now!</p>
                                    </div>

                                </div>

                            </div>
                            <ul class="package">
                                <li><i class="fa fa-check"></i>Full access</li>
                                <li><i class="fa fa-check"></i>Unlimited Bandwidth</li>
                                <li><i class="fa fa-check"></i>Powerful Admin Panel</li>
                                <li><i class="fa fa-check"></i>Email Accounts</li>
                                <li><i class="fa fa-check"></i>10 Free Web sites</li>
                            </ul>

                            <div id="pricing-btn-02">
                                <a class="btn btn-general btn-blue" href="#" title="Get Started" role="button">Get Started</a>
                            </div>

                        </div>

                    </div>
                    <div class="col-md-4 col-sm-4 wow fadeInRight">

                        <!-- Pricing Table 03 -->
                        <div class="pricing-table">
                            <div class="type">
                                <h4>Professional</h4>
                            </div>

                            <div class="price">

                                <div class="row">

                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <h2><span class="dollar">&#36;</span>96<br><span class="month">Month</span></h2>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8">
                                        <p>You will get all these awesome services with this great price. Get it now!</p>
                                    </div>

                                </div>

                            </div>
                            <ul class="package">
                                <li><i class="fa fa-check"></i>Full access</li>
                                <li><i class="fa fa-check"></i>Unlimited Bandwidth</li>
                                <li><i class="fa fa-check"></i>Powerful Admin Panel</li>
                                <li><i class="fa fa-check"></i>Email Accounts</li>
                                <li><i class="fa fa-check"></i>10 Free Web sites</li>
                            </ul>

                            <div id="pricing-btn-03">
                                <a class="btn btn-general btn-blue" href="#" title="Get Started" role="button">Get Started</a>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- Pricing Ends -->


    <!-- Testimonial Section -->
    <section id="testimonial" style="padding-top: 40px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center wow slideInDown">
                    <div class="horizontal-heading">
                        <h2> WHAT OUR <span>CLIENT SAYS</span></h2>
                    </div>
                </div>
                <div class="col-md-12 col-center m-auto">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <!-- Carousel -->
                        <div class="carousel-inner">
                            <div class="item carousel-item active">
                                <div class="img-box"><img src="<?php echo asset('assets/tmp-img/testimonial/client-3.jpg');?>" alt=""></div>
                                <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
                                <p class="overview"><b>Jennifer Smith</b>, </p><p>Athelete</p>
                            </div>
                            <div class="item carousel-item">
                                <div class="img-box"><img src="<?php echo asset('assets/tmp-img/testimonial/client-2.jpg');?>" alt=""></div>
                                <p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio.</p>
                                <p class="overview"><b>Dauglas McNun</b>, </p><p>Athelete</p>
                            </div>
                            <div class="item carousel-item">
                                <div class="img-box"><img src="<?php echo asset('assets/tmp-img/testimonial/client-1.jpg');?>" alt=""></div>
                                <p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
                                <p class="overview"><b>Hellen Wright</b>,</p><p>Athelete</p>
                            </div>
                        </div>
                        <!-- Carousel Controls -->
                        <!-- <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- Testimonial Section end -->

    <!-- Contact -->
    <section id="contact">
        <div class="content-box-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <!-- Contact Left -->
                        <div id="contact-left">
                            <a href="#home">
                                <img src="<?php echo asset('assets/tmp-img/logo/BBLogo.png');?>" alt="logo">
                            </a>
                            <div id="offices">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="office">
                                            <div class="col-md-3">
                                                <img src="<?php echo asset('assets/tmp-img/Icons/head-phone.png');?>" alt="logo">
                                            </div>
                                            <div id="number" class="col-md-9">
                                                <h5>Got Questions ? Call us 24/7!</h5>
                                                <h2>(111) 222-3333</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div id="address" class="col-md-12">
                                        <h4>Contact Info</h4>
                                        <h5>47 Anyville RD NW #2 Anytwonn AZ 01234</h5>
                                    </div>
                                </div>
                            </div>
                            <ul class="social-list">
                                <li><a href="#"><i class="fab fa-facebook-f"></a></li></i>
								<li><a href="#"><i class="fab fa-twitter"></a></li></i>
								<li><a href="#"><i class="fab fa-google-plus"></a></li></i>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div id="links">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="company">
                                        <h4>Company</h4>
                                        <ul class="company-link">
                                            <li><a href="{{url('what')}}">What We Do</a></li>
                                            <li><a href="{{url('pricing')}}">Pricing Plans</a></li>
                                            <li><a href="{{url('careers')}}">Careers</a></li>
                                            <li><a href="{{url('contact')}}">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="company">
                                        <h4>Explore</h4>
                                        <ul class="company-link">
                                            <li><a href="{{url('terms')}}">Terms of Services</a></li>
                                            <li><a href="{{url('policy')}}">Privacy Policy</a></li>
                                            <li><a href="{{url('contact')}}">Need Help</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="company">
                                        <h4>About us</h4>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat</p>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!-- Contact Ends -->

    <!-- Footer  -->
    <footer class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        Copyright &copy; 2021 All Rights Reserved By <span>Beauty e Booking</span>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Ends -->

   	<!-- JQuery -->
       {!! Html::script("assets/tmp-js/jquery-3.4.1.min.js") !!}
	<!-- bootstrap js -->
    
    {!! Html::script("assets/tmp-js/bootstrap/bootstrap.min.js") !!}
	<!-- Owl Carousel JS -->
   
    {!! Html::script("assets/tmp-js/owl-carousel/owl.carousel.min.js") !!}
	 <!-- Waypoints -->
    
    {!! Html::script("assets/tmp-js/waypoints/jquery.waypoints.min.js") !!}
	<!-- Responsive Tabs JS -->
    
    {!! Html::script("assets/tmp-js/resonsive-tabs/jquery.responsiveTabs.min.js") !!}
	<!-- Isotope -->
  
    {!! Html::script("assets/tmp-js/isotope/isotope.pkgd.min.js") !!}
	<!-- Magnific Popup -->
    
    {!! Html::script("assets/tmp-js/magnific-popup/jquery.magnific-popup.min.js") !!}
	<!-- Counter -->
   
    {!! Html::script("assets/tmp-js/counter/jquery.counterup.min.js") !!}
	<!-- Google Map JS -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9EdV2JfPG1Vfviw9gf_HlblIUfs7Ie2E"></script>
    <!-- Easing -->
   
    {!! Html::script("assets/tmp-js/easing/jquery.easing.1.3.min.js") !!}
    <!-- WOW JS -->
    
    {!! Html::script("assets/tmp-js/wow/wow.min.js") !!}
	<!-- Custom Js -->
    
    {!! Html::script("assets/tmp-js/script.js") !!}
    <!-- custom validation-js -->
    
    {!! Html::script("assets/tmp-js/validation.js") !!}
</body>
</html>