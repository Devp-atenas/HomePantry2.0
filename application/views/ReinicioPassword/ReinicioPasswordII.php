<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Forgot Password (v2)</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome-free/css/all.min.css')?>">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/icheck-bootstrap/icheck-bootstrap.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte.min.css')?>">  
  <link rel="stylesheet" href="<?php echo base_url('assets/sweetalert2/sweetalert2.min.css')?>">  
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte.min.css')?>">  
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>Retail Scanning</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">¿Olvidaste tu contraseña? Aquí puede recuperar fácilmente una nueva contraseña.</p>
      <form id="FormReinicioPassword">
        <div class="input-group mb-3">
          <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email">
          <div class="input-group-append">            
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="button" id="reinicioPassword" class="btn btn-primary btn-block">Solicitar nueva contraseña</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <p class="mt-3 mb-1">
        <a href="<?php echo base_url('Principal/logout')?>">Login</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
<!-- jQuery -->
<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<script src="<?php echo base_url('assets/adminlte.min.js')?>"></script>
<script src="<?php echo base_url('assets/jquery-validation/jquery.validate.min.js')?>"></script>
<script src="<?php echo base_url('assets/jquery-validation/additional-methods.min.js')?>"></script>
<script src="<?php echo base_url('assets/adminlte.min.js')?>"></script>
<script src="<?php echo base_url('assets/demo.js')?>"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>
<script>
$(document).ready(function() {
  document.getElementById('FormReinicioPassword').reset();  
$('#FormReinicioPassword').validate({
    rules: {
      inputEmail: {
        required: true,
        email: true
      },      
    },
    messages: {
      inputEmail: {
        required: "Ingrese una dirección de correo electrónico",
        email: "Ingrese una dirección de correo electrónico válida"
      }
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.input-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
$("#reinicioPassword").click(function() {
  if ($("#FormReinicioPassword").valid()) {
    var settings = {
          "async": true,
          "crossDomain": true,
          "url": '<?php echo urlApi; ?>ReinicioPassword',
          "method": "POST",
          "data": {
            "email":$("#inputEmail").val()
          }
      }
      $.ajax(settings).done(function (response) {
        const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 10000,
                  timerProgressBar: true,
                  didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                  }})
                  Toast.fire({
                    icon: 'success',
                    title: response.message ,
                    confirmButtonText: `Ok`,
                    })
                    var form = document.querySelector('#FormReinicioPassword');
                    form.reset(); 
                    window.location.href = '<?php echo base_url();?>Principal/ReinicioPasswordMensajeEnvioCorreo';
        }).fail(function (jqXHR, textStatus) {
          if ( jqXHR.status== 400) {            
            const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 10000,
                  timerProgressBar: true,
                  didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                  }})
                  Toast.fire({
                    icon: 'error',
                    title: jqXHR.responseJSON.message                    
                    })
                    var form = document.querySelector('#FormReinicioPassword');
                    form.reset();                                            
              }          
          })     
    }     
});
</script> 
</body>
</html>
