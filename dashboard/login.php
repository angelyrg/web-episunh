<!DOCTYPE html>
<html lang="es">

<head>
	<title>Login Screen</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css">

</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content text-center">
		<div class="card borderless">
			<div class="row align-items-center ">
				<div class="col-md-12">
					<div class="card-body">
						<form action="" method="post">
							<h4 class="mb-3 f-w-400">Iniciar sesión</h4>
							<hr>
							<div class="form-group mb-3">
								<input type="text" class="form-control" name="username" id="username" placeholder="Usuario" autofocus>
							</div>
							<div class="form-group mb-4">
								<input type="password" class="form-control" name="password" id="password" placeholder="Contraseña">
							</div>							
							<button class="btn btn-block btn-primary mb-4" type="submit">Iniciar sesión</button>
							<p id="destino"></p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>

<script src="assets/js/pcoded.min.js"></script>

<script>

// 6 * 2 = 12
// 6 * 4 = 24
// 6 * 6 = 36
// 6 * 8 = 48
// 6 * 10 = 60

var x=2, y=4, z=6, resulta;

cuenta = 1;
while(cuenta < 6){
	resulta = z * (cuenta*x);
	document.getElementById('destino').innerHTML = resulta + " ";
	cuenta++;
}


</script>

</body>

</html>
