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
        <img id="other-home-bg-image" src="<?php echo asset('assets/tmp-img/home/contact.png');?>">
			<div id="other-home-content-inner" class="text-center">
				<div id="other-home-heading">
					<h1 id="other-home-heading-1">Contact</h1><br>
				</div>
				<div id="other-home-text">
					<p><a href="index.html"><img src="<?php echo asset('assets/tmp-img/Icons/home.png');?>" alt="home">Home</a> <img src="<?php echo asset('assets/tmp-img/Icons/arrow.png');?>" alt="arrow">Contact</p>
				</div>
			</div>
	</section>
	<!-- Home Ends -->
    <section id="Contact">

        <div class="content-box-md">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 text-center wow slideInDown">
                        <div class="horizontal-heading">
                            <h2> Get In <span>Touch</span></h2>
                            <p style="text-align: center;">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-4 col-sm-4 wow fadeInLeft" style="width: 30%; height: 30%;">

                        <div class="work-table">

                            <div class="work">

                                <div class="row">

                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <img src="<?php echo asset('assets/tmp-img/Icons/location.png');?>" alt="location" class="img-responsive">
                                    </div>

                                </div>

                            </div>

                            <div class="Work-heading">
                                <h2 style="padding: 10px;">VISIT OUR OFFICE</h2>
                                <p>47 Anyville RD NW #2 Anytwonn <br> AZ 01234</p>
                            </div>
                            
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-duration="3s" style="width: 30%; height: 30%;">

                        <div class="work-table">

                            <div class="work">

                                <div class="row">

                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <img src="<?php echo asset('assets/tmp-img/Icons/mobile.png');?>" alt="location" class="img-responsive">
                                    </div>

                                </div>

                            </div>

                            <div class="Work-heading">
                                <h2 style="padding: 10px;">LET’S TALK</h2>
                                <p>+1 (111) 222-3333 <br> +1 (111) 222-2222</p>
                            </div>
                            
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-4 wow fadeInRight" style="width: 30%; height: 30%;">

                        <div class="work-table">

                            <div class="work">

                                <div class="row">

                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <img src="<?php echo asset('assets/tmp-img/Icons/email.png');?>" alt="location" class="img-responsive">
                                    </div>

                                </div>

                            </div>

                            <div class="Work-heading">
                                <h2 style="padding: 10px;">E-MAIL US</h2>
                                <p>info@beautyebooking.com <br> Careers@beautyebooking.com </p>
                            </div>
                            
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section id="services" style="margin-bottom: 30px;">
        <div id="services">
            <div class="content-box">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 wow slideInLeft">
                            <img src="<?php echo asset('assets/tmp-img/contact-img.png');?>" alt="client" class="img-responsive">
                        </div>
                        <div class="col-md-6 col-sm-5 wow slideInRight">
                            <div id="contact-right">
                                <div class="horizontal-heading" style="margin-bottom: 40px;">
                                    <h2 style="font-size: 30px;">SEND US <span> A MESSAGE </span></h2>
                                </div>
                                <form name="form">
                                    <div id="errorBox"></div>
                                    <input type="text" name="Name" placeholder="Name*" class="form-control">
                                    <input type="email" name="Email" placeholder="Email*" class="form-control">
                                    <textarea class="form-control" placeholder="Message*"></textarea>
                                    <div id="send-btn" style="margin-top: 10px;">
                                        <p class="btn btn-general btn-white" style="color: white; background-color: #0885FE;" id="sign_user" onClick="Submit()">Sign Up</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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