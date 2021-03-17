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
      <header>
        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">
                <div class="site-nav-wrapper">

                    <div class="navbar-header">

                        <!-- Mobile Menu Open Button -->
                        <span id="mobile-nav-open-btn">&#9776;</span>

                        <!-- Logo -->
                        <a class="navbar-brand" href="index.html">
                            <img src="<?php echo asset('assets/tmp-img/logo/Logo1.png'); ?>" alt="logo">
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
        <img id="other-home-bg-image" src="<?php echo asset('assets/tmp-img/home/about.png');?>">
			<div id="other-home-content-inner" class="text-center">
				<div id="other-home-heading">
					<h1 id="other-home-heading-1">Careers</h1><br>
				</div>
				<div id="other-home-text">
					<p><a href="index.html"><img src="<?php echo asset('assets/tmp-img/Icons/home.png');?>" alt="home">Home</a> <img src="<?php echo asset('assets/tmp-img/Icons/arrow.png');?>" alt="arrow">About Us</p>
				</div>
			</div>
	</section>
	<!-- Home Ends -->
     <section id="services">
        <!-- Services 01 -->
        
        <div class="other-content-box-lg">

            <div class="container">
                <div class="row">

                    <div class="col-md-12  wow slideInDown">

                        <div class="horizontal-heading">
                            <h5>YOUR PARTNER TO</h5>
                            <h2>FAST AND EFFECTIVE <SPAN>BUSINESS COMMUNICATION</SPAN></h2>
                            <p><br> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero  eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo  dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet</p>
                        </div>

                    </div>

                </div>
                <div class="row">

                    <div class="col-md-12  wow slideInUp">

                        <div class="horizontal-heading">
                            <h5>OUR</h5>
                            <h2>MISSION AND <SPAN>VISION</SPAN></h2>
                            <p><br> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero  eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo  dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet</p>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero  eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua</p>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero  eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo  dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet</p>
                        </div>

                    </div>

                </div>

            </div>  

        </div>  
        
    </section>
    <!-- Working -->
	 <section id="our-team">

        <div class="content-box-md">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 text-center wow slideInDown">
                        <div class="horizontal-heading">
                            <h5>Meet Our </h5>
                            <h2> Excellent <span>Team</span></h2>
                            <p style="text-align: center;"><br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto tempora aut, nesciunt rem excepturi itaque laborum odio, id explicabo.</p>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-3 col-sm-3 wow fadeInLeft">

                        <div class="team-table">
                            <diev class="team">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <img src="<?php echo asset('assets/tmp-img/team/1.png');?>" alt="input" class="img-responsive">
                                    </div>
                                </div>
                            </diev>
                            <div class="team-heading">
                                <h2>William Smith</h2>
                                <h5>Manager</h5>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="3s">

                        <div class="team-table">
                            <diev class="team">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <img src="<?php echo asset('assets/tmp-img/team/2.png');?>" alt="input" class="img-responsive">
                                    </div>
                                </div>
                            </diev>
                            <div class="team-heading">
                                <h2>Esabella Smith</h2>
                                <h5>Marketing  Expert</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="3s">

                        <div class="team-table">
                            <diev class="team">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <img src="<?php echo asset('assets/tmp-img/team/3.png');?>" alt="input" class="img-responsive">
                                    </div>
                                </div>
                            </diev>
                            <div class="team-heading">
                                <h2>Emma Walker</h2>
                                <h5>Service Manager</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 wow fadeInRight">

                        <div class="team-table">
                            <diev class="team">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <img src="<?php echo asset('assets/tmp-img/team/4.png');?>" alt="input" class="img-responsive">
                                    </div>
                                </div>
                            </diev>
                            <div class="team-heading">
                                <h2>Michael Jhon</h2>
                                <h5>Founder, CEO</h5>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </section>
	<!-- Working Ends -->
    <!-- Stats -->
    <section id="stats">

        <div class="content-box-md">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 text-center wow slideInLeft">

                        <div class="horizontal-heading">

                            <h2 style="color: white;">About <SPAN>Beauty e Booking</SPAN><br></h2>
                            <p style="color: white; text-align: center;">lorem ipsum dollar lorem ipsum dollar lorem ipsum dollar lorem ipsum dollar lorem ipsum dollar lorem ipsum dollar</p>
                            
                        </div>

                    </div>

                </div>

                <div class="row wow fadeInUp" data-wow-duration="2s">

                    <div class="col-md-3 col-sm-3 col-xs-6">

                        <!-- Stats Item 01 -->
                        <div class="stats-item text-center">
                            <h1 class="counter">25</h1>
                            <p>Years Experience</p>
                        </div>

                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">

                        <!-- Stats Item 02 -->
                        <div class="stats-item text-center">
                            <h1 class="counter">476</h1>
                            <p>Projects Done</p>
                        </div>

                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">

                        <!-- Stats Item 03 -->
                        <div class="stats-item text-center">
                            <h1 class="counter">115</h1>
                            <p>Awards Received</p>
                        </div>

                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">

                        <!-- Stats Item 04 -->
                        <div class="stats-item text-center">
                            <h2 class="counter">276</h2>
                            <p>Happy Clients</p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- Stats Ends -->
    <section id="clients">

        <div class="content-box-sm">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 text-center">

                        <div class="horizontal-heading">
                            <h2>Our <span>History</span></h2>
                            <p style="text-align: center;">lorem ipsum dollar lorem ipsum dollar lorem ipsum dollar
                                   lorem ipsum dollar lorem ipsum dollar lorem ipsum dollar
                                   lorem ipsum dollar lorem ipsum dollar lorem ipsum dollar
                            </p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials -->
     <section id="testimonials">

        <div class="container-jumbotron">

            <div class="row">

                <div class="col-md-6 col-sm-4 wow slideInLeft my_img"></div>

                <div class="col-md-6 col-sm-8 wow fadeIn" data-wow-duration="2s">

                    <div id="testimonial-slider" class="owl-carousel owl-theme">

                        <!-- Testimonial 01 -->
                        <div class="testimonial">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h1>2020</h1>
                                    <h3><span>Beauty e Booking</span></h3>
                                </div>
                            </div>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem quas totam, delectus sit corporis quos error qui. Minus cupiditate explicabo minima ea neque perferendis corporis sint earum quas impedit.Minus cupiditate explicabo minima ea neque perferendis corporis sint earum quas impedit.Minus cupiditate explicabo minima ea neque perferendis corporis sint earum quas impedit</p>
                        </div>

                        <!-- Testimonial 02 -->
                        <div class="testimonial">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h1>2020</h1>
                                    <h3><span>Beauty e Booking</span></h3>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem quas totam, delectus sit corporis quos error qui. Minus cupiditate explicabo minima ea neque perferendis corporis sint earum quas impedit.Minus cupiditate explicabo minima ea neque perferendis corporis sint earum quas impedit.Minus cupiditate explicabo minima ea neque perferendis corporis sint earum quas impedit</p>
                        </div>

                        <!-- Testimonial 03 -->
                        <div class="testimonial">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h1>2020</h1>
                                    <h3><span>Beauty e Booking</span></h3>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem quas totam, delectus sit corporis quos error qui. Minus cupiditate explicabo minima ea neque perferendis corporis sint earum quas impedit.Minus cupiditate explicabo minima ea neque perferendis corporis sint earum quas impedit.Minus cupiditate explicabo minima ea neque perferendis corporis sint earum quas impedit</p>
                        </div>


                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- Testimonials Ends -->
    <!-- Clients -->
    <section id="clients">

        <div class="content-box-sm">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 text-center">

                        <div class="horizontal-heading">
                            <h5>Satisfied Clients</h5>
                            <h2>Our Happy <span>Clients</span></h2>
                        </div>

                    </div>

                </div>

                <div class="row wow bounceInLeft" data-wow-duration="1s" data-wow-delay=".5s">

                    <div class="col-md-12">

                        <div id="clients-list" class="owl-carousel owl-theme">

                            <!-- Client 01 -->
                            <div class="client">
                                <img src="<?php echo asset('assets/tmp-img/client/client-1.png');?>" class="img-responsive" alt="client">
                            </div>
                            <!-- Client 02 -->
                            <div class="client">
                                <img src="<?php echo asset('assets/tmp-img/client/client-2.png');?>" class="img-responsive" alt="client">
                            </div>
                            <!-- Client 03 -->
                            <div class="client">
                                <img src="<?php echo asset('assets/tmp-img/client/client-3.png');?>" class="img-responsive" alt="client">
                            </div>
                            <!-- Client 04 -->
                            <div class="client">
                                <img src="<?php echo asset('assets/tmp-img/client/client-4.png');?>" class="img-responsive" alt="client">
                            </div>
                            <!-- Client 05 -->
                            <div class="client">
                                <img src="<?php echo asset('assets/tmp-img/client/client-5.png');?>" class="img-responsive" alt="client">
                            </div>
                            <!-- Client 06 -->
                            <div class="client">
                                <img src="<?php echo asset('assets/tmp-img/client/client-6.png');?>" class="img-responsive" alt="client">
                            </div>
                            <!-- Client 07 -->
                            <div class="client">
                                <img src="<?php echo asset('assets/tmp-img/client/client-7.png');?>" class="img-responsive" alt="client">
                            </div>
                            <!-- Client 08 -->
                            <div class="client">
                                <img src="<?php echo asset('assets/tmp-img/client/client-8.png');?>" class="img-responsive" alt="client">
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- Clients Ends -->

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