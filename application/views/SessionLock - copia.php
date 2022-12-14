
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
                <img src="<?php echo base_url('assets/img/HomePantry.png')?>" width="128px" heightalt="100px" "Home Pantry"
                    class="img-size-60">
            </div>
            <div class="card-body">
                <div class="hold-transition lockscreen">
                    <div class="lockscreen-wrapper">
                        <div id="lockscreenName" class="lockscreen-name"></div>

                        <div class="lockscreen-item">
                            <div id="lockscreen-image" class="lockscreen-image">
                            <!--
                                <img src="../dist/img/Usuarios/avatar5.png" class="img-circle elevation-2" alt="User Image">
                            -->
                            </div>


                            <form class="lockscreen-credentials" id="quickForm">
                                <div class="input-group">
                                    <input type="password" id="password" class="form-control" placeholder="password">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn">
                                            <i class="fas fa-arrow-right text-muted"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    <div class="help-block text-center">
                        Ingrese su password
                    </div>
                <div class="text-center">
                    <a href="../">O ingrese como usuario diferente</a>
                </div>
                <div class="lockscreen-footer text-center">
                    Copyright &copy; 2020-2022 <b>Home Pantry</b><br>
                    All rights reserved
                </div>
            </div>
            
            <div>
                <p class="mb-1">
                    <small>
                        <a href="<?php echo base_url('Principal/ReinicioPassword')?>">Olvid?? mi contrase??a</a>
                    </small>
                </p>
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
    <script src="<?php echo base_url('assets/sweetalert2/sweetalert2.min.js')?>"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="<?php echo base_url('assets/sweetalert2/sweetalert2.all.min.js')?>"></script>
    <script>

    $.getJSON('https://api.ipify.org?format=json', function(data){
            //alert("Hola 1: "+data.ip);
            var IP2 = data.ip;
            localStorage.setItem("IPHP20",data.ip);
    });

    $(document).ready(function() {

        var lockscreenName = localStorage.getItem("nombreUsuario");
        var user = localStorage.getItem("user");
        var Avatar = localStorage.getItem("Avatar");
        localStorage.clear();
        sessionStorage.clear();
        localStorage.setItem("nombreUsuario",lockscreenName);
        localStorage.setItem("user",user);
        localStorage.setItem("Avatar",Avatar);
        /*
        <div id="lockscreen-image" class="lockscreen-image">
            <img src="../dist/img/Usuarios/avatar5.png" class="img-circle elevation-2" alt="User Image">
        
        </div>
        */
        
        img = document.createElement('img');
        //img.setAttribute("src", `./landing/images/${item.img_padre}`);
        img.setAttribute("src", `../dist/img/Usuarios/${Avatar}`);
        img.setAttribute("alt", `User Image`);
        img.setAttribute("class", `img-circle`);
        


        document.getElementById('lockscreen-image').appendChild(img);
        
        
        $("#lockscreenName").html(lockscreenName);
        //alert(localStorage.getItem("Avatar"));
        //var rImag = '<img src="../dist/img/Usuarios/'+localStorage.setItem("Avatar",Avatar)+'" class="img-circle elevation-2" alt="User Image">'
        //$("#lockscreen-image").html(localStorage.getItem("nombreUsuario"));
    });
    
    $(function() {
        $.validator.setDefaults({
            submitHandler: function() {
                var usuario = {
                    user: localStorage.getItem("user"),
                    password: $("#password").val()
                };
                $.ajax({
                    url: '<?php echo urlApi; ?>getLogin',
                    type: 'post',
                    contentType: 'application/json; charset=utf-8',
                    data: JSON.stringify(usuario),
                    success: function(data) {
                        /*$.getJSON('https://api.ipify.org?format=json', function(data){
                                alert("Hola 2: "+data.ip);
                        });*/
                        //generarMenu();
                        //alert("Hola 2: "+IP2);
                        var IP = localStorage.getItem("IPHP20");
                        localStorage.clear();
                        var urlApi = '<?php echo urlApi; ?>';
                        localStorage.setItem("IP",IP);
                        localStorage.setItem("urlApi",urlApi);
                        localStorage.setItem("Token", data.token);
                        localStorage.setItem("Usuario", data.Login);
                        localStorage.setItem("user", data.Login);
                        localStorage.setItem("nombreUsuario",data.nombreUsuario);
                        localStorage.setItem("IdUsuario",data.IdUsuario);
                        Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Autenticar",localStorage.getItem("IdUsuario"),"R");
                        //generarMenu($("#user").val());
                        //localStorage.setItem("Nivel",data.Nivel);
                        //localStorage.setItem("ID_Nivel",data.ID_Nivel);
                        //localStorage.setItem("Cliente",data.Cliente);
                        //localStorage.setItem("ID_Cliente",data.ID_Cliente);
                        //localStorage.setItem("ApellidosUsuarios",data.ApellidosUsuarios);
                        //localStorage.setItem("menu",JSON.stringify(data.menu));
                        var form = document.querySelector('#quickForm');
                        form.reset();
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
                        window.location.href = "dashboard"
                    },
                    error: function(xhr, status, error) {
                        var form = document.querySelector('#quickForm');
                        form.reset();
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
               password: {
                    required: true,
                    minlength: 5
                }
            },
            messages: {
                password: {
                    required: "Por favor ingrese una contrase??a",
                    minlength: "Su contrase??a debe tener al menos 5 caracteres"
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
    });
    </script>
    <script>

        function Bitacora(idUsuario,IP,Operacion,idPrincipal,CRUD) {
            var urlApi = localStorage.getItem("urlApi");
            var settings = {
                "url":urlApi+'addHistory',
                "method": "POST",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
                "data": {
                    "idUsuario": idUsuario,
                    "IP": IP,
                    "Operacion": Operacion,
                    "idPrincipal": idPrincipal,
                    "CRUD": CRUD
                }
            }
            $.ajax(settings).done(function(response) {
                let selected = $(etiqueta);
                selected.find("option").remove();
                if (idSeleccionado == 0){
                    selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
                }
                for (var i = 0; i < response.data.length; i++) {
                    if (response.data[i].Id_Area == idSeleccionado) {
                        selected.append("<option value=" + response.data[i].Id_Area + " selected>" +
                            response.data[i].Id_Area + " - " + response.data[i].Area + "</option>");
                    } else {
                        selected.append("<option value=" + response.data[i].Id_Area + ">" + response
                            .data[i].Id_Area + " - " + response.data[i].Area + "</option>");
                    }
                }
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
        }




</script>


</html>