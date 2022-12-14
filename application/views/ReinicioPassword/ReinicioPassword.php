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
                    <p class="login-box-msg pb-0 text-info">Ingrese correo para recuperar contraseña</p>
                    <form id="quickForm">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Correo electrónico:</label>
                                <input type="text" id="inputCorreo" class="form-control form-control-sm" placeholder="Introduzca su correo electrónico">
                            </div>
                            <div class="card-footer">
                                <button type="button" id="recuperarContrasena" name="submitForm" class="btn btn-sm btn-block btn-primary">R e c u p e r a r</button>
                            </div>
                        </div>
                    </form>
                    <p class="mb-1">
                        <small>
                            <a href="<?php echo base_url('/')?>">Regresar</a>
                        </small>
                    </p>
                </div>
            </div>
        </div>

        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Elija perfil con el que desea entrar</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form id="FormPelfilesUsuario">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="inputText font-weight-bold">Perfiles:</div>
                                                    <select id="selectPerfil" name="selectPerfil" class="form-control">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </form>                          
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="button" id='botonIngresarMP'class="btn btn-primary">Ingresar</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </body>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="<?php echo base_url('jsHP/jsLogin.js') ?>"></script>
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


        $("#recuperarContrasena").click(function() {
            if ($("#quickForm").valid()) {
                var settings = {
                    "async": true,
                    "crossDomain": true,
                    "url": '<?php echo urlApi; ?>recuperarContrasena',
                    "method": "POST",
                    "headers": {
                        "Content-Type": "application/x-www-form-urlencoded",
                        "Authorization": "Bearer " + localStorage.getItem('Token')
                    },
                    "data": {
                        "usuario": $("#inputCorreo").val()
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







        
        $('#recuperarContrasena__').click(function(){
            alert($("#inputCorreo").val())
            
            var settings = {
                "url": localStorage.getItem("urlApi")+'recuperarContrasena/',
                "method": "POST",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
                "data": {
                    "usuario": $("#inputCorreo").val()
                }
            }
            
            $.ajax(settings).done(function(response) {
                /*var idCategoriaB = $('#selectCategoriaBuscar').val();
                cargarTablaCodigoBarrasExistenteVerificar(CodigoBarras,idCategoriaB);         
                if (response.data[0].Cantidad != 0){
                    $('#htmlCodigoBarrasVerificar').html("Productos con el codigo de barra: "+CodigoBarras);
                }else{
                    $('#htmlCodigoBarrasVerificar').html("No se encontraron productos con codigo de barra: "+CodigoBarras);
                }
                $('#CodigoBarraExistenteVerificarModal').modal('show');*/
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
                        title: 'Su Session ha Expirado',
                        confirmButtonText: `Ok`,
                    })
                    window.location = '/homepantry20/index.php';
                }
            })   
        });

        $('#quickForm').validate({
            rules: {
                inputCorreo: {
                    required: true
                }
            },
            messages: {
                inputCorreo: {
                    required: "Ingrese una dirección de correo electrónico",
                    email: "Ingrese una dirección de correo electrónico válida"
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
       

       
    </script>
</html>