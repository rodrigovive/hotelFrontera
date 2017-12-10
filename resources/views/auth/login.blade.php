<!DOCTYPE html>

<!-- Mirrored from gam.cool/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Oct 2017 14:16:37 GMT -->

<head>

	<!-- Basic Page Needs
================================================== -->
	<title>Hotel Admin </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
================================================== -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/colors/grey.html" id="colors">

</head>

<body>

	<!-- Wrapper -->
	<div id="wrapper">


		<!-- Content
================================================== -->

		<!-- Coming Soon Page -->
		<div class="coming-soon-page" style="background-image: url(images/main-search-background-01.jpg)">
			<div class="container">
				<!-- Search -->
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<h1 class="white"><strong>Login</strong></h1>
						<form class="form-horizontal" method="POST" action="{{ route('login') }}">
							{{ csrf_field() }}
							<div class="main-search-input gray-style margin-top-30 margin-bottom-10">

								<div class="main-search-input-item">
									<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
										<input id="email" type="email" name="email" placeholder="GAM-USER" required /> 
										@if ($errors->has('email'))
										<span class="help-block">
                                        	<strong>Error en el correos</strong>
                                    	</span> 
										@endif
									</div>
								</div>


								<div class="main-search-input-item">
									<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
										<input id="password" class="form-control" name="password" required type="password" placeholder="GAM-PIN" /> 
										@if ($errors->has('password'))
										<span class="help-block">
                                        	<strong>{{ $errors->first('password') }}</strong>
                                    	</span> 
										@endif
									</div>
								</div>
								<a href="dashboard.html"><button type="submit" class="button">Entrar</button></a>
							</div>
						</form>
					</div>
				</div>
				<!-- Search Section / End -->
			</div>
		</div>
		<!-- Coming Soon Page / End -->

	</div>
	<!-- Wrapper / End -->



	<!-- Scripts
================================================== -->
	<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
	<script type="text/javascript" src="scripts/mmenu.min.js"></script>
	<script type="text/javascript" src="scripts/chosen.min.js"></script>
	<script type="text/javascript" src="scripts/slick.min.js"></script>
	<script type="text/javascript" src="scripts/rangeslider.min.js"></script>
	<script type="text/javascript" src="scripts/magnific-popup.min.js"></script>
	<script type="text/javascript" src="scripts/waypoints.min.js"></script>
	<script type="text/javascript" src="scripts/counterup.min.js"></script>
	<script type="text/javascript" src="scripts/jquery-ui.min.js"></script>
	<script type="text/javascript" src="scripts/tooltips.min.js"></script>
	<script type="text/javascript" src="scripts/custom.js"></script>



</body>

<!-- Mirrored from gam.cool/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Oct 2017 14:16:37 GMT -->

</html>