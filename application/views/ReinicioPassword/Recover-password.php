<?php
if(!isset($_SESSION)){
	session_start();
}else{
	session_destroy();
	session_start();
}
?>

<!DOCTYPE html>
<html lang="es">

	<head>
	
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>| Acceso Home Pantry |</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

		<!-- Google Font: Source Sans Pro -->
		<link rel="stylesheet"
			href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome-free/css/all.min.css')?>">
		<!-- icheck bootstrap -->
		<link rel="stylesheet" href="<?php echo base_url('assets/icheck-bootstrap/icheck-bootstrap.min.css')?>">
		<!-- Theme style -->
		<link rel="stylesheet" href="<?php echo base_url('assets/adminlte.min.css')?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/sweetalert2/sweetalert2.min.css')?>">
		<!-- Login Page Images style -->
		<style type="text/css">
			.login-page {
				background: url("<?php echo base_url('assets/img/dashboard2.jpg')?>") no-repeat center center fixed;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
				-o-background-size: cover;
			}
		</style>
	</head>

	<body class="hold-transition login-page">
		<div id="ocultar" class="login-box">
			<!-- /.login-logo -->
			<div class="card card-outline card-primary">
				<div class="card-header text-center">
					<a class="h1"><b></b></a>
					<img src="<?php echo base_url('assets/img/HomePantry.png')?>" width="128px" heightalt="100px" class="img-size-60">
				</div>
				<div class="card-body">
					<p class="login-box-msg pb-0 text-info">Recuperacion de Contraseña.</p>
					<form id="RecoverPassword" >
						<div class="card-body">
							<div class="form-group">
								<label for="exampleInputEmail1">Password:</label>
								<input type="password" name="pass" id="pass" />

								<div id="mensajePass" class="mensajePass">
									
								</div>






								
							</div>

							<div class="form-group">
								<label for="exampleInputEmail2">Confirme Password:</label>
								<input type="password" id="inputConfirmacionPassword" name="inputConfirmacionPassword" class="form-control form-control-sm" placeholder="Confirme su password">
							</div>
							<div class="form-group">
								<input style="margin-left:20px;" type="checkbox" id="mostrar_contrasena" title="clic para mostrar contraseña"/>
								Mostrar Contraseña
							</div>
							<div class="card-footer">
								<button type="button" id="recuperarContrasena" name="recuperarContrasena" class="btn btn-sm btn-block btn-primary">R e c u p e r a r</button>
							</div>
						</div>
					</form>
					<p class="mb-1">
						<small>
							<a href="<?php echo base_url('/')?>">Inicio</a>
						</small>
					</p>
				</div>
			</div>
		</div>
	</body>
	
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<script src="<?php echo base_url('jsHP/jsBitacora.js') ?>"></script>
	<!-- jQuery -->
	<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url('assets/adminlte.min.js')?>"></script>
	<!-- jquery-validation -->
	<script src="<?php echo base_url('assets/jquery-validation/jquery.validate.min.js')?>"></script>
	<script src="<?php echo base_url('assets/jquery-validation/additional-methods.min.js')?>"></script>
	<script src="<?php echo base_url('assets/sweetalert2/sweetalert2.min.js')?>"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<script src="<?php echo base_url('assets/sweetalert2/sweetalert2.all.min.js')?>"></script>
	<script>

		$.getJSON('https://api.ipify.org?format=json', function(data){
				//alert("Hola 1: "+data.ip);
				var IP2 = data.ip;
				localStorage.setItem("IPHP20",data.ip);
		});

		

		$('#mostrar_contrasena').click(function () {
			if ($('#mostrar_contrasena').is(':checked')) {
				$('#pass').attr('type', 'text');
				$('#inputConfirmacionPassword').attr('type', 'text');
				
			} else {
				$('#pass').attr('type', 'password');
				$('#inputConfirmacionPassword').attr('type', 'password');
			}
		});

		$("#recuperarContrasena").click(function() {
			if ($("#RecoverPassword").valid()) {
				var settings = {
					"async": true,
					"crossDomain": true,
					"url": '<?php echo urlApi; ?>updatePassword',
					"method": "POST",
					"headers": {
						"Content-Type": "application/x-www-form-urlencoded",
						"Authorization": "Bearer " + localStorage.getItem('Token')
					},
					"data": {
						"contrasema": $("#inputCorreo").val(),
						"mail": $("#inputCorreo").val(),
						"mail": $("#inputCorreo").val(),
						
						
					}
				}
				$.ajax(settings).done(function(response) {
					const Toast = Swal.mixin({
						toast: true,
						position: 'top-end',
						showConfirmButton: false,
						timer: 10000,
						timerProgressBar: true,
						didOpen: (toast) => {
							toast.addEventListener('mouseenter', Swal.stopTimer)
							toast.addEventListener('mouseleave', Swal.resumeTimer)
						}
					})
					Toast.fire({
						icon: 'success',
						title: response.message,
						confirmButtonText: `Ok`,
					})
					
				}).fail(function(jqXHR, textStatus) {
					if (jqXHR.status == 400) {
						const Toast = Swal.mixin({
							toast: true,
							position: 'top-end',
							showConfirmButton: false,
							timer: 10000,
							timerProgressBar: true,
							didOpen: (toast) => {
								toast.addEventListener('mouseenter', Swal.stopTimer)
								toast.addEventListener('mouseleave', Swal.resumeTimer)
							}
						})
						Toast.fire({
							icon: 'info',
							title: 'Su Session ha Expirado',
							confirmButtonText: `Ok`,
						})
						var form = document.querySelector('#FormMaestroMenu');
						form.reset();
						window.location = '/homepantry20/index.php';
					}
				})
			}
		});

		$(document).ready(function () {
			//alert($('id').val());


			$("#RecoverPassword").validate({
				rules: {
					pass: {
						required: true,
						minlength: 5,
						maxlength: 50,
					},
					inputConfirmacionPassword: {
						equalTo: "#pass"
					}
				},
				messages: {
					pass: {
						required: "Por favor ingrese contraseña",
						minlength: "Contraseña muy corta",
						
					},
					inputConfirmacionPassword: {
						required: true,
						equalTo: "Su Contraseña no coincide"
					}
				},
				errorElement: 'span',
				errorPlacement: function(error, element) {
					error.addClass('invalid-feedback');
					element.closest('.form-group').append(error);
				},
				highlight: function(element, errorClass, validClass) {
					$(element).addClass('is-invalid');
				},
				unhighlight: function(element, errorClass, validClass) {
					$(element).removeClass('is-invalid');
				}
			});
    


			$('#pass').keyup(function(e) {
				var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
				var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
				var enoughRegex = new RegExp("(?=.{6,}).*", "g");
				var p;
				
				//$("#passstrength").remove();
				p = document.createElement('p');
				p.setAttribute("id", `passstrength`);
				

				p.setAttribute("class", `text-warning bg-dark`);
					
				
				if (false == enoughRegex.test($(this).val())) {
					p.setAttribute("class", `text-warning bg-dark`);	
					$('#passstrength').html('Más caracteres.');
				} else if (strongRegex.test($(this).val())) {
					p.setAttribute("class", `text-success`);	
					$('#passstrength').html('Fuerte!');
				} else if (mediumRegex.test($(this).val())) {
					p.removeAttribute("class");	
					p.setAttribute("class", `text-primary`);	
					$('#passstrength').html('Media!');
				} else {
					p.setAttribute("class", `text-danger`);	
					$('#passstrength').html('Débil!');
				}
				
				document.getElementById('mensajePass').appendChild(p);


				return true;
			});
		});
	</script>
</html>