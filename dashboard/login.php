<?php
session_start();

if (isset($_SESSION['login'])){
	header("Location: index.php");
}

?>

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
						<form method="post" id="login-form">
							<h4 class="mb-3 f-w-400">Iniciar sesión</h4>
							<hr>
							<div class="form-group mb-3">
								<input type="text" class="form-control" name="username" id="username" placeholder="Usuario" required autofocus>
							</div>
							<div class="form-group mb-4">
								<input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" required>
							</div>							
							<button class="btn btn-block btn-primary mb-4" type="submit">Iniciar sesión</button>

							<p id="message" class="text-danger"></p>
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->



<!-- Required Js -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/pcoded.min.js"></script>

<script>

	$("#login-form").on("submit", function(e){
		e.preventDefault();

		$.ajax({
			type: "POST",
			url: "app/login.php",
			data: $("#login-form").serialize(),
			success: function(resp){
				let result = parseInt(resp)
				
				console.log(result);

				if (result == 1){
					$("#message").html("");
					window.location.href="index.php";
				}else if (result == 0){
					$("#message").html("Usuario y/o contraseña incorrecto.");
				}

			}
		});

	});


</script>

</body>

</html>
