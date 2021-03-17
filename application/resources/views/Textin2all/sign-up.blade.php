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
							  <p class="mb-4 text-center login">Register</p>

							  @include('notification.notify')
			      		</div>
			      	</div>
							<form class="signin-form" method="post" action="{{url('user/post-registration')}}">

							<div class="form-group mb-3">
							  <span class="fa fa-user"></span>
							  <input type="text" name="first_name" class="form-control" value="{{old('first_name')}}" placeholder="First Name" required>
						  </div>
						  

						  <div class="form-group mb-3">
							  <span class="fa fa-user"></span>
							  <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{old('last_name')}}" required>
			      		</div>
			      		        <div class="form-group mb-3">
							  <span class="fa fa-user"></span>
							  <input type="text" class="form-control" placeholder="Username" name="user_name" value="{{old('user_name')}}" required>
			      		</div>
		           
                    <div class="form-group mb-3">
                        <span class="fa fa-envelope"></span>
                        <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group mb-3">
                        <span class="fa fa-lock"></span>
                        <input type="password" name="password" value="{{old('password')}}" class="form-control" placeholder="password" required>
                    </div>
                    <div class="form-group mb-3">
                        <span class="fa fa-lock"></span>
                        <input type="password" class="form-control" placeholder="repeat password" name="cpassword"  value="{{old('cpassword')}}" required>
					</div>

					<div class="form-group mb-3">
						<i class="fa fa-mobile"></i>
						<input type="phone" class="form-control" placeholder="Enter Number" name="phone"  value="{{old('phone')}}" required>
					</div>
					
					<input type="hidden" name="country" value="United States of America" class="form-control">
					
					<input type="hidden" value="no" name="email_notify">
                    
					<div class="form-group d-md-flex">
		            	<div class="w-100 text-left">
			            	<label class="checkbox-wrap checkbox-primary mb-0">I accept <a href="#">Terms & Condition</a>
                                and <a href="#">Privacy Policy</a>
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
										</label>
									</div>
					</div>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary submit px-3" style="background: #078BFE !important;">Log In</Inp></button>
		            </div>
					<div class="bottom-divider">
						<h5><span>Or Sign In With</span></h5>

					</div>
					<div class="w-100">
						<p style="	text-align: center; margin-bottom: 0; margin-top: 23px;">Have an account? <a href="{{url('login')}}">Log in Here</a></p>
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

