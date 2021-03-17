
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
    <link rel="shortcut icon" href="<?php echo asset('assets/tmp-img/favicon/favicon-icon.png'); ?>">
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
                            <img src="<?php echo asset('assets/tmp-img/logo/Logo1.png');?>" alt="logo">
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
                                @if(Auth::guard('client')->check())
                                <li><a href="{{url('dashboard')}}">My Account</a></li>
                                @else

                                <li><a href="{{url('login')}}">Login</a></li>
                                @endif


                                @if(!Auth::guard('client')->check())
                                <li><a href="{{url('signup')}}">Register</a></li>
                                @endif
                                
                                
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
	<section id="home">
		<!-- Background Video -->
        <img id="home-bg-image" src="<?php echo asset('assets/tmp-img/home/Bg_img.png'); ?>">
		<div id="home-overlay"></div>
		<!-- Home Content -->
		<div id="home-content">
			<div id="home-content-inner" class="text-center">
				<div id="home-heading">
					<h1 id="home-heading-1">Send <span>SMS</span> to Anyone</h1><br>
					<h1 id="home-heading-2">Any where <span>Any Time </span></h1>
				</div>
				<div id="home-text">
					<p>lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>
				</div>
				<div id="home-btn">
					<a class="btn btn-general btn-home" href="sign-up.html" title="Register" role="button">Register</a>
				</div>
			</div>
		</div>
		<!-- Arrow Down -->
		<a href="#" id="arrow-down">
			<i class="fa fa-angle-down"></i>
		</a>
	</section>
	<!-- Home Ends -->
	 <section id="services">
        <!-- Services 01 -->
        <div id="services-01">
            <div class="content-box-lg">

                <div class="container">

                    <div class="row">

                        <div class="col-md-12 text-center wow slideInDown">

                            <div class="horizontal-heading">
                                <h5>Why Chose Us</h5>
                                <h2>Why our <span>Clients Trust</span> on us?</h2>
                                <p style="text-align: center;"><br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto tempora aut, nesciunt rem excepturi itaque laborum odio, id explicabo.</p>
                            </div>

                        </div>

                    </div>
                    
                    <div class="row">

                        <div class="col-md-7 col-sm-7 wow slideInLeft">
                            <img src="<?php echo asset('assets/tmp-img/services/service-2.png'); ?>" alt="client" class="img-responsive">
                        </div>
                        <div class="col-md-5 col-sm-5 wow slideInRight">

                            <!-- Service 01 -->
                            <div class="service">
                                <div class="row">

                                    <div class="col-md-2 col-sm-2">
                                        <div class="icon text-right">
                                            <img src="<?php echo asset('assets/tmp-img/services/1.png'); ?>" alt="client" class="img-responsive">
                                        </div>
                                    </div>

                                    <div class="col-md-10 col-sm-10">
                                        <h5>Service 01</h5>
                                        <h4>HIGH DELIVERY RATE</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto tempora aut, nesciunt rem excepturi itaque laborum odio, id explicabo.</p>
                                    </div>

                                </div>
                            </div>

                            <!-- Service 02 -->
                            <div class="service">
                                <div class="row">

                                    <div class="col-md-2 col-sm-2">
                                        <div class="icon text-right">
                                            <img src="<?php echo asset('assets/tmp-img/services/2.png'); ?>" alt="client" class="img-responsive">
                                        </div>
                                    </div>

                                    <div class="col-md-10 col-sm-10">
                                        <h5>Service 02</h5>
                                        <h4>AFFORDABLE PRICE</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto tempora aut, nesciunt rem excepturi itaque laborum odio, id explicabo.</p>
                                    </div>

                                </div>
                            </div>

                            <!-- Service 03 -->
                            <div class="service">
                                <div class="row">

                                    <div class="col-md-2 col-sm-2">
                                        <div class="icon text-right">
                                            <img src="<?php echo asset('assets/tmp-img/services/3.png'); ?>" alt="client" class="img-responsive">
                                        </div>
                                    </div>

                                    <div class="col-md-10 col-sm-10">
                                        <h5>Service 03</h5>
                                        <h4>24/7 SUPPORT</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto tempora aut, nesciunt rem excepturi itaque laborum odio, id explicabo.</p>
                                    </div>

                                </div>
                            </div>
                            <!-- Service 04 -->
                            <div class="service">
                                <div class="row">

                                    <div class="col-md-2 col-sm-2">
                                        <div class="icon text-right">
                                            <img src="<?php echo asset('assets/tmp-img/services/4.png'); ?>" alt="client" class="img-responsive">
                                        </div>
                                    </div>

                                    <div class="col-md-10 col-sm-10">
                                        <h5>Service 04</h5>
                                        <h4>CUSTOMER CENTRIC</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto tempora aut, nesciunt rem excepturi itaque laborum odio, id explicabo.</p>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>

    </section>
    <!-- Stats -->
    <section id="stats-1">

        <div class="content-box-md">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 text-center wow slideInLeft">

                        <div class="horizontal-heading">

                            <h2 style="color: white;">Client<SPAN> Testimonials</SPAN><br></h2>
                            <p style="color: white; text-align: center;">Customer Satisfaction Drives Us</p>
                            
                        </div>

                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12 text-center wow slideInUp">
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
                                        <div class="col-lg-4">
                                            <img src="<?php echo asset('assets/tmp-img/testimonial/client-3.jpg'); ?>" alt="" class="img-box">
                                            <div style="height: 300px; width:100%; background-color: white; border-radius: 10px; padding: 50px; margin-top: -71px;">
                                                <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui.</p>
                                                <p class="overview"><b>Jennifer Smith</b>, </p><p>Athelete</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <img src="<?php echo asset('assets/tmp-img/testimonial/client-2.jpg'); ?>" alt="" class="img-box">
                                            <div style="height: 300px; width:100%; background-color: white; border-radius: 10px; padding: 50px; margin-top: -71px;">
                                                <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui.</p>
                                                <p class="overview"><b>Dauglas McNun</b>, </p><p>Athelete</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <img src="<?php echo asset('assets/tmp-img/testimonial/client-1.jpg'); ?>" alt="" class="img-box">
                                            <div style="height: 300px; width:100%; background-color: white; border-radius: 10px; padding: 50px; margin-top: -71px;">
                                                <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui.</p>
                                                <p class="overview"><b>Hellen Wright</b>, </p><p>Athelete</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item carousel-item">
                                        <div class="col-lg-4">
                                            <img src="<?php echo asset('assets/tmp-img/testimonial/client-3.jpg'); ?>" alt="" class="img-box">
                                            <div style="height: 300px; width:100%; background-color: white; border-radius: 10px; padding: 50px; margin-top: -71px;">
                                                <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui.</p>
                                                <p class="overview"><b>Jennifer Smith</b>, </p><p>Athelete</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <img src="<?php echo asset('assets/tmp-img/testimonial/client-2.jpg'); ?>" alt="" class="img-box">
                                            <div style="height: 300px; width:100%; background-color: white; border-radius: 10px; padding: 50px; margin-top: -71px;">
                                                <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui.</p>
                                                <p class="overview"><b>Dauglas McNun</b>, </p><p>Athelete</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <img src="<?php echo asset('assets/tmp-img/testimonial/client-1.jpg'); ?>" alt="" class="img-box">
                                            <div style="height: 300px; width:100%; background-color: white; border-radius: 10px; padding: 50px; margin-top: -71px;">
                                                <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui.</p>
                                                <p class="overview"><b>Hellen Wright</b>, </p><p>Athelete</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item carousel-item">
                                        <div class="col-lg-4">
                                            <img src="<?php echo asset('assets/tmp-img/testimonial/client-3.jpg'); ?>" alt="" class="img-box">
                                            <div style="height: 300px; width:100%; background-color: white; border-radius: 10px; padding: 50px; margin-top: -71px;">
                                                <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui.</p>
                                                <p class="overview"><b>Jennifer Smith</b>, </p><p>Athelete</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <img src="<?php echo asset('assets/tmp-img/testimonial/client-2.jpg'); ?>" alt="" class="img-box">
                                            <div style="height: 300px; width:100%; background-color: white; border-radius: 10px; padding: 50px; margin-top: -71px;">
                                                <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui.</p>
                                                <p class="overview"><b>Dauglas McNun</b>, </p><p>Athelete</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <img src="<?php echo asset('assets/tmp-img/testimonial/client-1.jpg'); ?>" alt="" class="img-box">
                                            <div style="height: 300px; width:100%; background-color: white; border-radius: 10px; padding: 50px; margin-top: -71px;">
                                                <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui.</p>
                                                <p class="overview"><b>Hellen Wright</b>, </p><p>Athelete</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- Stats Ends -->
     <!-- Working -->
	 <section id="working">

        <div class="content-box-md">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 text-center wow slideInDown">
                        <div class="horizontal-heading">
                            <h2> How It <span>Works?</span></h2>
                            <p style="text-align: center;">you send SMS to your customers in three easy steps.</p>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-4 col-sm-4 wow fadeInLeft">

                        <div class="work-table">
                            <div class="type">
                                <h4>Step 1</h4>
                            </div>

                            <div class="work">

                                <div class="row">

                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <img src="<?php echo asset('assets/tmp-img/services/input.png'); ?>" alt="input" class="img-responsive">
                                    </div>

                                </div>

                            </div>

                            <div class="Work-heading">
                                <h2>Input</h2>
                                <p>Input your message, phone numbers of your recipients, and the details of how and when you want the SMS delivered.</p>
                            </div>
                            
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-duration="3s">

                        <div class="work-table black">
                            <div class="type">
                                <h4>Step 2</h4>
                            </div>

                            <div class="work">

                                <div class="row">

                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <img src="<?php echo asset('assets/tmp-img/services/translate.png'); ?>" alt="translate" class="img-responsive">
                                    </div>

                                </div>

                            </div>

                            <div class="Work-heading">
                                <h2>TRANSLATION</h2>
                                <p>Our solution translates your SMS protocol automatically to make it compatible with your recipients’ network carrier for delivery.</p>
                            </div>

                        </div>

                    </div>
                    <div class="col-md-4 col-sm-4 wow fadeInRight">

                        <div class="work-table">
                            <div class="type">
                                <h4>Step 3</h4>
                            </div>

                            <div class="work">

                                <div class="row">

                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <img src="<?php echo asset('assets/tmp-img/services/recive.png'); ?>" alt="Recive" class="img-responsive">
                                    </div>

                                </div>

                            </div>

                            <div class="Work-heading">
                                <h2>SMS RECEIVED</h2>
                                <p>Your customer receives your SMS within seconds. We made the whole process easy, fast, and convenient for you.</p>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
	<!-- Working Ends -->
	 <!-- Pricing -->
	 <section id="pricing">

        <div class="content-box-md">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 text-center wow slideInDown">
                        <div class="horizontal-heading">
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
    <!-- Working -->
	 <section id="our-team">

        <div class="content-box-md">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 text-center wow slideInDown">
                        <div class="horizontal-heading">
                            <h5>Meet Our </h5>
                            <h2> Excellent <span>Team</span></h2>
                            <p><br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto tempora aut, nesciunt rem excepturi itaque laborum odio, id explicabo.</p>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-3 col-sm-3 wow fadeInLeft">
                        <!-- Pricing Table 01 -->
                        <div class="team-table">
                            <diev class="team">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <img src="<?php echo asset('assets/tmp-img/team/1.png'); ?>" alt="input" class="img-responsive">
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

                        <!-- Pricing Table 02 -->
                        <div class="team-table">
                            <diev class="team">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <img src="<?php echo asset('assets/tmp-img/team/2.png'); ?>" alt="input" class="img-responsive">
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

                        <!-- Pricing Table 03 -->
                        <div class="team-table">
                            <diev class="team">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <img src="<?php echo asset('assets/tmp-img/team/3.png'); ?>" alt="input" class="img-responsive">
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

                        <!-- Pricing Table 03 -->
                        <div class="team-table">
                            <diev class="team">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <img src="<?php echo asset('assets/tmp-img/team/4.png'); ?>" alt="input" class="img-responsive">
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
                                <img src="<?php echo asset('assets/tmp-img/client/client-1.png'); ?>" class="img-responsive" alt="client">
                            </div>
                            <!-- Client 02 -->
                            <div class="client">
                                <img src="<?php echo asset('assets/tmp-img/client/client-2.png'); ?>" class="img-responsive" alt="client">
                            </div>
                            <!-- Client 03 -->
                            <div class="client">
                                <img src="<?php echo asset('assets/tmp-img/client/client-3.png'); ?>" class="img-responsive" alt="client">
                            </div>
                            <!-- Client 04 -->
                            <div class="client">
                                <img src="<?php echo asset('assets/tmp-img/client/client-4.png'); ?>" class="img-responsive" alt="client">
                            </div>
                            <!-- Client 05 -->
                            <div class="client">
                                <img src="<?php echo asset('assets/tmp-img/client/client-5.png'); ?>" class="img-responsive" alt="client">
                            </div>
                            <!-- Client 06 -->
                            <div class="client">
                                <img src="<?php echo asset('assets/tmp-img/client/client-6.png'); ?>" class="img-responsive" alt="client">
                            </div>
                            <!-- Client 07 -->
                            <div class="client">
                                <img src="<?php echo asset('assets/tmp-img/client/client-7.png'); ?>" class="img-responsive" alt="client">
                            </div>
                            <!-- Client 08 -->
                            <div class="client">
                                <img src="<?php echo asset('assets/tmp-img/client/client-8.png'); ?>" class="img-responsive" alt="client">
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
                                <img src="<?php echo asset('assets/tmp-img/logo/BBLogo.png'); ?>" alt="logo">
                            </a>
                            <div id="offices">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="office">
                                            <div class="col-md-3">
                                                <img src="<?php echo asset('assets/tmp-img/Icons/head-phone.png'); ?>" alt="logo">
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
                <!-- <iframe style="background-image: url('https://images.pexels.com/photos/255379/pexels-photo-255379.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500');" src="http://www.bulksms.rnwnd.com/webwidgets/subscribe?group=1&ll=https://i.pinimg.com/736x/5a/02/5e/5a025e222970a3dd2c3706bde935ae15.jpg&ff=A&fs=B&fz=18&fc=000000&mt=Join%20our%20VIP%20TEXT%20Tribe%21%0A%0AGet%20access%20to%20subscriber%20only%20MAJOR%20DISCOUNT%20sales%2C%20a%20FIRST%20LOOK%20at%20a%20new%20products%20and%20INSTANT%20customer%20service&ms=Thank%20you%20for%20Joining&rd=&ce=0&cb=0&ar=0" width="450" height="300" align="left" scrolling="auto"></iframe> -->
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