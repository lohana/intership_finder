<!doctype html>
<html lang="en-US">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<title>Crear Cuenta | Internship Finder</title>

		<link rel="stylesheet" href="<?= Config::get('URL'); ?>css/style.css" type="text/css" media="all"/>
		<link rel="stylesheet" href="<?= Config::get('URL'); ?>css/custom.css" type="text/css" media="all"/>
		<link rel="stylesheet" href="<?= Config::get('URL'); ?>css/font-awesome.min.css" type="text/css" media="all"/>
		<link rel="stylesheet" href="<?= Config::get('URL'); ?>css/jquery.datetimepicker.css" type="text/css" media="all"/>
		<link rel="stylesheet" href="<?= Config::get('URL'); ?>css/chosen.css" type="text/css" media="all"/>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Serif:100,300,400,700,900,300italic,400italic,700italic,900italic" type="text/css" media="all"/>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:100,300,400,700,900,300italic,400italic,700italic,900italic" type="text/css" media="all"/>
		<?php $this->render('_snippet/favicon'); ?>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn"t work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
	</head>
	<body>
		<div class="site">
			<?php $this->render('_snippet/header'); ?>
			<div class="noo-page-heading">
 				<div class="container-boxed max text-center parallax-content">
					<div class="page-heading-info ">
						<h1 class="page-title">CREAR CUENTA</h1>
					</div>
					<div class="page-sub-heading-info">
						Ingresa tus datos para crear una cuenta
					</div>
				</div>
				<div class="parallax heading" data-parallax="1" data-parallax_no_mobile="1" data-velocity="0.1"></div>
			</div>
			<div class="container-wrap">
				<div class="main-content container-boxed max offset">
					<div class="row">
						<div class="noo-main col-md-12">
							<div class="account-form show-login-form-links">
								<div class="account-log-form">
									<form class="form-horizontal" action="<?= Config::get('URL'); ?>register/register_action" method="post">
										<?php $this->renderfeedbackMessages(); ?>
										<input type="hidden" name="csrf_token" value="<?= Csrf::makeToken(); ?>" />
										<div class="form-group"><h5 class="text-center mb-2">La contraseña debe tener al menos 6 caracteres.</h5></div>
										<div class="form-group row">
											<div class="col-xs-12">
												<input type="text" class="log form-control" name="name" placeholder="Nombre" value="<?= $this->name; ?>">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-xs-12">
												<input type="text" class="log form-control" name="lastname" placeholder="Apellidos" value="<?= $this->lastname; ?>">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-xs-12">
												<input type="text" class="log form-control" name="document" placeholder="Cédula / RUC" value="<?= $this->document ?>">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-xs-12">
										    	<input type="text" class="log form-control" name="phone" id="phone" placeholder="Teléfono" value="<?= $this->phone ?>">
										    </div>
										</div>
										<div class="form-group row">
											<div class="col-xs-12">
										    	<input type="text" class="log form-control" name="birth" id="birth" placeholder= "Fecha de Nacimiento" value="<?= $this->birthday ?>">
										    </div>
										</div>
										<div class="form-group row">
											<div class="col-xs-12">
												<div class="form-control-flat">
													<select class="user_role" name="city">
														<option value="">-Selecciona una Ciudad-</option>
														<?php foreach (Config::get('CITIES') as $key => $city) { ?>
														<option value="<?= $key; ?>" <?php if ($this->city == $key) { echo "selected"; } ?>><?= $city; ?></option>
														<?php } ?>
													</select>
													<i class="fa fa-caret-down"></i>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-xs-12">
												<input type="text" class="log form-control" name="email" placeholder="Correo Electrónico">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-xs-12">
												<input type="password" class="pwd form-control" name="password" placeholder="Contraseña">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-xs-12">
												<input type="password" class="pwd form-control" name="confirm_password" placeholder="Confirmación Contraseña">
											</div>
										</div>
										<div class="form-group text-center">
											<div class="checkbox account-reg-term">
												<div class="form-control-flat">
													<label class="checkbox">
														<input class="account_reg_term" type="checkbox" name="terms" title="Por favor acepta los Términos y Condiciones">
														<i></i>
														Acepto los <a href="<?= Config::get('URL'); ?>public/terms" target="_blank">Términos y Condiciones</a>
													</label>
												</div>
											</div>
										</div>
										<div class="form-actions form-group text-center">
											<button type="submit" class="btn btn-primary">Crear Cuenta</button>
											<div class="login-form-links">
												<span><a class="member-links member-register-link" href="<?= Config::get('URL'); ?>login">Ir a Inicio de Sesión</a></span>
												<span>Eres una compañía o univerisdad y quieres registrarte? Llena la solicitud <a href="<?= Config::get('URL'); ?>register/request" class="member-links member-register-link">aquí</a></span>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php $this->render('_snippet/footer'); ?>
		</div>
		<a href="#" class="go-to-top hidden-print"><i class="fa fa-angle-up"></i></a>

		<script type="text/javascript" src="<?= Config::get('URL'); ?>js/jquery.js"></script>
		<script type="text/javascript" src="<?= Config::get('URL'); ?>js/jquery-migrate.min.js"></script>
		<script type="text/javascript" src="<?= Config::get('URL'); ?>js/modernizr-2.7.1.min.js"></script>
		<script type="text/javascript" src="<?= Config::get('URL'); ?>js/jquery.cookie.js"></script>
		<script type="text/javascript" src="<?= Config::get('URL'); ?>js/jquery.blockUI.min.js"></script>
		<script type="text/javascript" src="<?= Config::get('URL'); ?>js/imagesloaded.pkgd.min.js"></script>
		<script type="text/javascript" src="<?= Config::get('URL'); ?>js/isotope-2.0.0.min.js"></script>
		<script type="text/javascript" src="<?= Config::get('URL'); ?>js/jquery.touchSwipe.min.js"></script>
		<script type="text/javascript" src="<?= Config::get('URL'); ?>js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?= Config::get('URL'); ?>js/hoverIntent-r7.min.js"></script>
		<script type="text/javascript" src="<?= Config::get('URL'); ?>js/superfish-1.7.4.min.js"></script>
		<script type="text/javascript" src="<?= Config::get('URL'); ?>js/script.js"></script>
		<script type="text/javascript" src="<?= Config::get('URL'); ?>js/chosen.jquery.min.js"></script>
		<script type="text/javascript" src="<?= Config::get('URL'); ?>js/jquery.datetimepicker.js"></script>
		<script type="text/javascript" src="<?= Config::get('URL'); ?>js/jquery.parallax-1.1.3.js"></script>
		<script type="text/javascript" src="<?= Config::get('URL'); ?>js/jquery.carouFredSel-6.2.1-packed.js"></script>
		<script type="text/javascript" src="<?= Config::get('URL'); ?>js/custom.js"></script>

		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$("#birth").datetimepicker({
					format: "d-m-Y",
					timepicker: false,
					startDate:"1990/01/01",
					scrollMonth: false,
					scrollTime: false,
					scrollInput: false
				});

				$('.noo-messages .fa-close').on('click', function() {
					$(this).parent().remove();
				});
			});
		</script>
	</body>
</html>