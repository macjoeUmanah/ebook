<!doctype html>
<html lang="en">
  <head>
  	<title>Login 07</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	
	{!! Html::style("assets/tmp-css/forms.min.css") !!}
	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<img src="<?php echo asset('assets/tmp-img/sign-up.png');?>" alt="sign-up" width="100%">
							</div>
			      </div>
						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
							  <img src="<?php echo asset('assets/tmp-img/form-brand.png');?>" alt="beauty" width="30%" style="margin-left: 140px;">
			      			<h3 class="mb-4 text-center Welcome">Welcome Back!</h3>
							  <p class="mb-4 text-center login">Login to your account</p>
							  @include('notification.notify')
			      		</div>
			      	</div>
							<form method="post" action="{{url('client/get-login')}}" class="signin-form">
			      		<div class="form-group mb-3">
							  <span class="fa fa-user"></span>
							  <input type="text" class="form-control" placeholder="Username" name="username" required>
			      		</div>
		            <div class="form-group mb-3">
						<i class="fa fa-lock"></i>
						<input type="password" class="form-control" placeholder="Password" name="password" required>
					</div>
					<input type="hidden" value="yes" name="remember">
					<div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
						</div>
						<div class="w-50 text-md-right">
							<a href="#">Forgot Password</a>
						</div>
					</div>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary submit px-3">Log In</Inp></button>
		            </div>
					<div class="bottom-divider">
						<h5><span>Or Sign In With</span></h5>

					</div>
					<div class="w-100">
						<p class="social-media d-flex justify-content-center">
							<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
							<a href="#" class="social-icon d-flex align-items-center justify-content-center" style="margin: 0 45px 0 45px;"><span class="fa fa-twitter"></span></a>
							<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a>
						</p>
						<p style="	text-align: center;margin-bottom: 0; margin-top: 23px;">Don't have an account? <a href="{{url('signup')}}">Sign Up Here</a></p>
					</div>

		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

  {!! Html::script("assets/tmp-js/jquery.min.js") !!}
  {!! Html::script("assets/tmp-js/popper.js") !!}
  {!! Html::script("assets/tmp-js/bootstrap.min.js") !!}
  {!! Html::script("assets/tmp-js/main.js") !!}

	</body>
</html>

