<!DOCTYPE html> 
<html>
<head>
	<title>Inici sessió</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/f6c66edaad.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="container h-100">
	<div class="d-flex justify-content-center h-100">
		<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="img/logovib.jpeg" class="brand_logo" alt="Inici de sessió logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form>
						<div class="input-group mb-3">

								<div class="input-group-append">
									<span class="input-group-text"><i class="fas fa-user"></i></span>
								</div>
								<input type="text" name="username" id="username" class="form-control input_user" required>
								</div>
								<div class="input-group mb-2">

								<div class="input-group-append">
									<span class="input-group-text"><i class="fas fa-key"></i></span>
								</div>
								<input type="password" name="password" id="password" class="form-control input_pass" required>
								</div>
								<div class="form-group">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" name="rememberme" class="custom-control-input" id="customControlInline">
										<label class="custom-control-label" for="customControlInline">Recorda'm</label>
									</div>
								</div>
					</form>
					
				</div>
				<div class="d-flex justify-content-center mt-3 login-container">
					<button type="button" name="button" id="login" class="btn login_btn">Inicia Sessió</button>
				</div>
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						No tens compte? <a href="registre.html" class="m1-2">Registra't</a>
					</div>
					<div class="d-flex justify-content-center">
						<a href="#">Has oblidat la teva contrasenya?</a>
					</div>
				</div>
		</div>
	</div>
</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js">
</script>
<script>
	$(function(){
		$('#login').click(function(e){

			var valid = this.form.checkValidity();

			if(valid)
				var username = $('#username').val();
				var password = $('#password').val();
			}
			e.prevenDefault();

			// $.ajax, encara ens ho han de explicar correctament
		});
</script>
</body>
</html>