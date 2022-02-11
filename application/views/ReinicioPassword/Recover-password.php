<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Recover Password (v2)</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome-free/css/all.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/icheck-bootstrap/icheck-bootstrap.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte.min.css')?>">  
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a class="h1">retailscannig</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Está a solo un paso de su nueva contraseña, recupere su contraseña ahora.</p>
      <form id="FormReinicioPasswordNew">
        <div class="input-group mb-3">
          <input type="hidden" id="inputUsuario" value="<?php echo $this->uri->segment('3'); ?>" name="inputUsuario" class="form-control" placeholder="Password">
          <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password">
          <div class="input-group-append">            
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" id="inputConfirmaPassword" name="inputConfirmaPassword" class="form-control" placeholder="Confirmación Password">
          <div class="input-group-append">            
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="button" id="reinicioPasswordNew" class="btn btn-primary btn-block">Solicitar nueva contraseña</button>
          </div>          
        </div>
      </form>            
    </div>
  </div>
</div>
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
  document.getElementById('FormReinicioPasswordNew').reset();  
  $('#FormReinicioPasswordNew').validate({
    rules: {
        inputPassword: {
        required: true ,
        minlength: 10,
        maxlength: 15,       
      },
      inputConfirmaPassword: {
        required: true,
        minlength: 10,
        maxlength: 15,
        equalTo: "#inputPassword"        
      },      
    },
    messages: {
        inputPassword: {
        required: "Ingrese su nueva contraseña", 
        minlength: "Su nombre debe tener al menos 10 caracteres",
        maxlength: "Su nombre debe tener al menos 15 caracteres",

      },
      inputConfirmaPassword: {
        required: "Ingrese su confirmación de la contraseña" , 
        minlength: "Su nombre debe tener al menos 10 caracteres",
        maxlength: "Su nombre debe tener al menos 15 caracteres",
        equalTo: "Por favor, introduzca el mismo valor de contraseña en la confirmación de la misma."      
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
$("#reinicioPasswordNew").click(function() {           
    if ($("#FormReinicioPasswordNew").valid()) {
      var settings = {
          "async": true,
          "crossDomain": true,
          "url": '<?php echo urlApi; ?>ReinicioPasswordNew',
          "method": "POST",
          "data": {
            "email":$("#inputUsuario").val(),
            "password":$("#inputPassword").val()
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
                    var form = document.querySelector('#FormReinicioPasswordNew');
                    form.reset();                     
                    window.location.href='/retailscannig/Principal/ReinicioPassworkOK'                                  
        })    
    }        
});
</script> 
</body>
</html>
