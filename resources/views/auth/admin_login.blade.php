<!doctype html>
<html lang="en" dir="ltr">
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>   	
		<!-- META DATA -->
        <meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<!-- FAVICON -->
		<link href="{{URL::asset('images/logo.png')}}" rel="icon">

		<!-- TITLE -->
		<title>{{config('app.name')}} - Admin Login</title>

		<!-- BOOTSTRAP CSS -->
		<link id="style" href="{{URL::asset('dash/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

		<!-- STYLE CSS -->
		<link href="{{URL::asset('dash/assets/css/style.css')}}" rel="stylesheet"/>
		<link href="{{URL::asset('dash/assets/css/skin-modes.css')}}" rel="stylesheet" />

		<!--- FONT-ICONS CSS -->
		<link href="{{URL::asset('dash/assets/css/icons.css')}}" rel="stylesheet"/>
	
	</head>

	<body class="ltr bg-white">
		<!-- PAGE -->
		<div class="page">
			<div>
				<!-- CONTAINER OPEN -->
				<div class="col col-login mx-auto text-center">
					<a href="/" class="text-center">
						<img src="{{URL::asset('images/logo.png')}}" class="header-brand-img" alt="" style="width: 170px; height: 80px;">
					</a>
				</div>
				<div class="container-login100">
					<div class="wrap-login100 p-0">
						<div class="card-body">
                            @includeIf('layouts.error_template')
							<form class="login100-form" method="POST" action="{{ route('admin.login') }}">
                            @csrf
								<span class="login100-form-title">
									Admin Login
								</span>
								<div class="wrap-input100 validate-input" data-bs-validate = "Valid email is required: ex@abc.xyz">
									<input class="input100" type="text" name="email" placeholder="Email">
								</div>
								<div class="wrap-input100 validate-input" data-bs-validate = "Password is required">
									<input class="input100" type="password" name="password" placeholder="Password">
                                </div>
								<div class="container-login100-form-btn">
									<button type="submit" class="login100-form-btn btn-primary">
										Login
                                    </button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- CONTAINER CLOSED -->
			</div>
		</div>
		<!-- End PAGE -->


		<!-- BACKGROUND-IMAGE CLOSED -->

		        
        <!-- JQUERY JS -->
        <script src="{{URL::asset('dash/assets/js/jquery.min.js')}}"></script>

        <!-- BOOTSTRAP JS -->
        <script src="{{URL::asset('dash/assets/plugins/bootstrap/js/popper.min.js')}}"></script>
        <script src="{{URL::asset('dash/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

        <!-- Perfect SCROLLBAR JS-->
        <script src="{{URL::asset('dash/assets/plugins/p-scroll/perfect-scrollbar.js')}}"></script>

        <!-- STICKY JS -->
        <script src="{{URL::asset('dash/assets/js/sticky.js')}}"></script>

        <!-- CUSTOM JS -->
        <script src="{{URL::asset('dash/assets/js/custom.js')}}"></script>

	</body>
</html>