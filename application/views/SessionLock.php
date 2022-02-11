<?php
if(!isset($_SESSION))
{
    session_start();
}
else
{
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

<body class="hold-transition login-page hold-transition lockscreen">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a class="h1"><b></b></a>
                <img src="<?php echo base_url('assets/img/HomePantry.png')?>" width="128px" heightalt="100px" "Retail Scanning"
                    class="img-size-60">
            </div>
            <div class="card-body">
                <div class="lockscreen-wrapper">
                    <div class="lockscreen-logo">
                        <a href="../../index2.html"><b>Admin</b>LTE</a>
                    </div>
                    <!-- User name -->
                    <div class="lockscreen-name">John Doe</div>

                    <!-- START LOCK SCREEN ITEM -->
                    <div class="lockscreen-item">
                        <!-- lockscreen image -->
                        <div class="lockscreen-image">
                            <img src="<?php echo base_url('assets/img/user1-128x128.jpg')?>" 
                        </div>
                        <!-- /.lockscreen-image -->

                        <!-- lockscreen credentials (contains the form) -->
                        <form class="lockscreen-credentials">
                        <div class="input-group">
                            <input type="password" class="form-control" placeholder="password">

                            <div class="input-group-append">
                            <button type="button" class="btn">
                                <i class="fas fa-arrow-right text-muted"></i>
                            </button>
                            </div>
                        </div>
                        </form>
                        <!-- /.lockscreen credentials -->

                    </div>
                    <!-- /.lockscreen-item -->
                    <div class="help-block text-center">
                        Enter your password to retrieve your session
                    </div>
                    <div class="text-center">
                        <a href="login.html">Or sign in as a different user</a>
                    </div>
                    <div class="lockscreen-footer text-center">
                        Copyright &copy; 2014-2021 <b><a href="https://adminlte.io" class="text-black">AdminLTE.io</a></b><br>
                        All rights reserved
                    </div>
                    </div>
                    <!-- /.center -->
            </div>
        </div>
    </div>
    </body>
    <!-- jQuery -->
    <script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('assets/adminlte.min.js')?>"></script>
    <!-- jquery-validation -->
    <script src="<?php echo base_url('assets/jquery-validation/jquery.validate.min.js')?>"></script>
    <script src="<?php echo base_url('assets/jquery-validation/additional-methods.min.js')?>"></script>
    <script src="<?php echo base_url('assets/demo.js')?>"></script>
    <script src="<?php echo base_url('assets/sweetalert2/sweetalert2.min.js')?>"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="<?php echo base_url('assets/sweetalert2/sweetalert2.all.min.js')?>"></script>
    <script>
   /* var user = "";
    if(localStorage.getItem('user') !== undefined && localStorage.getItem('user')){
        user = localStorage.getItem("user");
    }else{
        user = $("#user").val();
    }
    */
    $(function() {
        $.validator.setDefaults({
            submitHandler: function() {
                var usuario = {
                    user: $("#user").val(),
                    password: $("#password").val()
                };
                $.ajax({
                    url: '<?php echo urlApi; ?>getLogin',
                    type: 'post',
                    contentType: 'application/json; charset=utf-8',
                    data: JSON.stringify(usuario),
                    success: function(data) {
                        localStorage.clear();
                        localStorage.setItem("Token", data.token);
                        localStorage.setItem("Usuario", data.Login);
                        //localStorage.setItem("Nivel",data.Nivel);
                        //localStorage.setItem("ID_Nivel",data.ID_Nivel);
                        //localStorage.setItem("Cliente",data.Cliente);
                        //localStorage.setItem("ID_Cliente",data.ID_Cliente);
                        //localStorage.setItem("NombresUsuarios",data.NombresUsuarios);
                        //localStorage.setItem("ApellidosUsuarios",data.ApellidosUsuarios);
                        //localStorage.setItem("menu",JSON.stringify(data.menu));
                        var form = document.querySelector('#quickForm');
                        form.reset();
                        $('#exampleInputEmail1').val('');
                        $('#exampleInputPassword1').val('');
                        var token = data.token;
                        var us = data.Login;
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 5000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal
                                    .stopTimer)
                                toast.addEventListener('mouseleave', Swal
                                    .resumeTimer)
                            }
                        })
                        Toast.fire({
                            icon: 'success',
                            title: data.message
                        })
                        window.location.href = "Principal/dashboard"
                    },
                    error: function(xhr, status, error) {
                        var form = document.querySelector('#quickForm');
                        form.reset();
                        $('#exampleInputEmail1').val('');
                        $('#exampleInputPassword1').val('');
                        var err = JSON.parse(xhr.responseText);
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 5000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal
                                    .stopTimer)
                                toast.addEventListener('mouseleave', Swal
                                    .resumeTimer)
                            }
                        })
                        Toast.fire({
                            icon: 'error',
                            title: err.message
                        })
                    }
                });
            }
        });
        $('#quickForm').validate({
            rules: {
                email: {
                    required: true,
                    email: true,
                },
                password: {
                    required: true,
                    minlength: 5
                },
                terms: {
                    required: true
                },
            },
            messages: {
                email: {
                    required: "Ingrese una dirección de correo electrónico",
                    email: "Ingrese una dirección de correo electrónico válida"
                },
                password: {
                    required: "Por favor ingrese una contraseña",
                    minlength: "Su contraseña debe tener al menos 5 caracteres"
                },
                terms: "Acepta nuestros términos"
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
    });
    </script>

</html>