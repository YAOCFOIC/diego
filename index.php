<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Material Design Bootstrap</title>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="css/mdb.min.css" rel="stylesheet">
	<!-- Your custom styles (optional) -->
	<link href="css/style.css" rel="stylesheet">
</head>

<body>
	<!-- Main navigation -->
	<header>
		<!-- Main navigation -->
		<header>
			<!-- Modal REGISTER -->
			<div class="modal fade" id="REGISTER" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<!-- Material form register -->
					<div class="card">
						<h5 class="card-header info-color white-text text-center py-4">
							<strong>Registarse</strong>
						</h5>
						<!--Card content-->
						<div class="card-body px-lg-5 pt-0">
							<!-- Form -->
							<form class="text-center" style="color: #757575;" action="pagina_insertar_usuarios.php" method="post" name="registro">
								<div class="form-row">
									<div class="col">
										<!-- city -->
										<div class="md-form">
											<input type="text" id="materialRegisterFormFirstName" class="form-control" name="city">
											<label for="materialRegisterFormFirstName">ciudad</label>
										</div>
									</div>
									<div class="col">
										<!-- phone -->
										<div class="md-form">
											<input type="text" id="materialRegisterFormLastName" class="form-control" name="phone">
											<label for="materialRegisterFormLastName">celular</label>
										</div>
									</div>
								</div>
								<!-- Name -->
								<div class="md-form">
									<input name="name" type="text" id="name" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" >
									<label for="materialRegisterFormPhone">Nombre</label>
								</div>
								<!-- Name -->
								<div class="md-form">
									<input type="text" id="occupation" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" name="occupation">
									<label for="materialRegisterFormPhone">ocupación</label>
								</div>
								<!-- E-mail -->
								<div class="md-form mt-0">
									<input type="email" id="email" class="form-control" name="email">
									<label for="materialRegisterFormEmail">E-mail</label>
								</div>
								<!-- Password -->
								<div class="md-form">
									<input type="password" id="password" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock" name="password">
									<label for="materialRegisterFormPassword" >Password</label>
									
								</div>
								<!-- Newsletter -->
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="materialRegisterFormNewsletter">
									<label class="form-check-label" for="materialRegisterFormNewsletter">Subscribe to our newsletter</label>
								</div>
								<!-- Sign up button -->
								<button type="submit" class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" id="Registrarse" >Registrarse</button>
								<!-- Social register -->
								<p>or sign up with:</p>
								<a type="button" class="btn-floating btn-fb btn-sm">
									<i class="fab fa-facebook-f"></i>
								</a>
								<a type="button" class="btn-floating btn-git btn-sm">
									<i class="fab fa-google"></i>
								</a>
								<hr>
								<!-- Terms of service -->
								<p>By clicking
									<em>Sign up</em> you agree to our
									<a href="" target="_blank">terms of service</a>
								</form>
								<!-- Form -->
							</div>
							<!-- Material form register -->
						</div>
					</div>
				</div>
			</div>
			<!-- Full Page Intro -->
			<div class="view" id="image">
				<!-- Mask & flexbox options-->
				<div class="mask rgba-indigo-strong d-flex justify-content-center align-items-center">
					<!-- Content -->
					<div class="container">
						<!--Grid row-->
						<div class="row pt-lg-5 mt-lg-5">
							<!-- Grid column -->
							<div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left wow fadeInLeft"
							data-wow-delay="0.3s">
<!-- 							<h1 class="display-4 font-weight-bold">DENTAID </h1>
							<hr class="hr-light">
							<h6 class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem repellendus quasi
								fuga
								nesciunt dolorum nulla magnam veniam sapiente, fugiat! Commodi sequi non animi ea
							dolor molestiae, quisquam iste.</h6>
							<a class="btn btn-outline-white">Learn more</a> -->
						</div>
						<!--Grid column-->
						<!--Grid column-->
						<div class="col-md-6 col-xl-5 mb-4">
							<!--Form-->
							<div class="card wow fadeInRight" data-wow-delay="0.3s">
								<!-- Material form login -->
								<div class="card">
									<h5 class="card-header info-color white-text text-center py-4">
										<strong>Inicar Sesión</strong>
									</h5>

									<!--Card content-->
									<div class="card-body px-lg-5 pt-0">

										<!-- Form -->
										<form class="text-center" style="color: #757575;" action="comprueba_login.php" method="post">

											<!-- Email -->
											<div class="md-form">
												<input type="email" id="materialLoginFormEmail" class="form-control" name="Email">
												<label for="materialLoginFormEmail">E-mail</label>
											</div>

											<!-- Password -->
											<div class="md-form">
												<input type="password" id="materialLoginFormPassword" class="form-control" name="password">
												<label for="materialLoginFormPassword" >Password</label>
											</div>

											<div class="d-flex justify-content-around">
												<div>
													<!-- Remember me -->
													<div class="form-check">
														<input type="checkbox" class="form-check-input" id="materialLoginFormRemember" name="recordar" onclick="return confirm('¿Esta seguro de Guaradar información?')">
														<label class="form-check-label" for="materialLoginFormRemember">Recuérdame</label>
													</div>
												</div>
												<div>
													<!-- Forgot password -->
													<a href="">¿Se te olvidó tu contraseña?</a>
												</div>
											</div>

											<!-- Sign in button -->
											<button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit"  value="Login">Entrar</button>
											<!-- Register -->
											<p>¿No es un miembro?
												<a href="" data-toggle="modal" data-target="#REGISTER">Registrarse</a>
											</p>
											<!-- Social login -->
											<p>o inicia sesión con:</p>
											<a type="button" class="btn-floating btn-fb btn-sm">
												<i class="fab fa-facebook-f"></i>
											</a>
											<a type="button" class="btn-floating btn-git btn-sm">
												<i class="fab fa-google"></i>
											</a>
										</form>
										<!-- Form -->
									</div>
								</div>
								<!-- Material form login -->
								<!--Grid column-->
							</div>
							<!--Grid row-->
						</div>
						<!-- Content -->
					</div>
					<!-- Mask & flexbox options-->
				</div>
				<!-- Full Page Intro -->
			</header>


			<!-- Main navigation -->
			<!-- Start your project here-->
			<!-- Projects section v.3 -->
			<!-- SCRIPTS -->
			<!-- JQuery -->
			<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
			<!-- Bootstrap tooltips -->
			<script type="text/javascript" src="js/popper.min.js"></script>
			<!-- Bootstrap core JavaScript -->
			<script type="text/javascript" src="js/bootstrap.min.js"></script>
			<!-- MDB core JavaScript -->
			<script type="text/javascript" src="js/mdb.min.js"></script>
			<!-- main JavaScript-->
			<script type="text/javascript" src="js/main.js"></script>
		</body>

		</html>
