

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
                    <p class="login-box-msg pb-0 text-info">Ingrese sus credenciales de acceso</p>
                    <form id="quickForm" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Correo electrónico:</label>
                                <input type="text" id="user" class="form-control form-control-sm"
                                    id="exampleInputEmail1" placeholder="Introduzca su correo electrónico">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Contraseña:</label>
                                <input type="password" id="password" class="form-control form-control-sm"
                                    id="exampleInputPassword1" placeholder="Introduzca su contraseña">
                            </div>
                            <div class="card-footer">
                                <button type="submit" name="submitForm" class="btn btn-sm btn-block btn-primary">I n g r e s a r</button>
                            </div>
                        </div>
                    </form>
                    <p class="mb-1">
                        <small>
                            <a href="<?php echo base_url('Principal/ReinicioPassword')?>">Olvidé mi contraseña</a>
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
         
        $('#botonIngresarMP').click(function(){
            $('#myModal').modal('hide');
            var idPerfil = $('#selectPerfil').val();
            localStorage.setItem("idPerfil",idPerfil);
            Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Autenticar (IdUsuario)",localStorage.getItem("IdUsuario"),"R");
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
                title: 'Ingresando a Home Pantry'
            })
            window.location.href = "Principal/dashboard";               
        });

        $(function() {
            $.validator.setDefaults({
                submitHandler: function() {
                    var usuario = {
                        user:  $("#user").val(),
                        password: $("#password").val()
                    };
                    $.ajax({
                        url: '<?php echo urlApi; ?>getLoginMP',
                        type: 'post',
                        contentType: 'application/json; charset=utf-8',
                        data: JSON.stringify(usuario),
                        success: function(data) {
                            
                            var IP = localStorage.getItem("IPHP20");
                            localStorage.clear();
                            var urlApi = '<?php echo urlApi; ?>';
                            localStorage.setItem("IP",IP);
                            localStorage.setItem("urlApi",urlApi);
                            localStorage.setItem("Token", data.token);
                            localStorage.setItem("Usuario", data.Login);
                            localStorage.setItem("user", $("#user").val());
                            localStorage.setItem("nombreUsuario",data.nombreUsuario);
                            localStorage.setItem("IdUsuario",data.IdUsuario);
                            localStorage.setItem("idPerfil",data.idPerfil);
                            localStorage.setItem("Avatar",data.Avatar);
                            Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Autenticar (IdUsuario)",localStorage.getItem("IdUsuario"),"R");
                            cargarPerfilesUsuario('#selectPerfil',0,data.IdUsuario);
                            
                            //var form = document.querySelector('#quickForm');
                            //form.reset();
                            /*const Toast = Swal.mixin({
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
                            *///window.location.href = "Principal/dashboard"
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

       function cargarPerfilesUsuario(identificador,idS,idUsuario) {
            var settings = {
                "async": true,
                "crossDomain": true,
                "url":localStorage.getItem("urlApi")+'getPerfilesUsuario/'+idUsuario,
                "method": "get",
                "headers": {
                        "Content-Type": "application/x-www-form-urlencoded",
                        "Authorization": "Bearer " + localStorage.getItem('Token')
                    }
            }
            $.ajax(settings).done(function(response) {
                if (response.data.length == 1){//
                    // Para Cuando el usuario tiene un solo un perfil
                    localStorage.setItem("idPerfil",response.data[0].id);
                    Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Autenticar (IdUsuario)",localStorage.getItem("IdUsuario"),"R");
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
                        title: 'Ingresando a Home Pantry'
                    })
                    //window.location.href = "../Principal/dashboard";
                    window.location.href = "Principal/dashboard";
                }else{
                    // Para Cuando el usuario tiene mas de un un perfil
                    let selected = $(identificador);
                    selected.find("option").remove();
                    if (idS == 0){
                        selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
                    }
                    for (var i = 0; i < response.data.length; i++) {
                        if (response.data[i].id === idS){
                            selected.append("<option value='" + response.data[i].id + "' selected>" + response
                            .data[i].Perfil + "</option>");
                        }else{
                            selected.append("<option value='" + response.data[i].id + "'>" + response
                            .data[i].Perfil + "</option>");
                        }
                    }
                    $('#myModal').modal('show');
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
        
        /*function generarMenu_(user){
            var settings = {
                "url": '<?php echo urlApi; ?>getOpcionesMenu/'+user,
                "method": "get",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
            }
            $.ajax(settings).done(function(response) {
                var url;
                var TT = "";
                $.each(response, function(menuKey, menuValue) {
                    TT += '<li class="nav-item">'
                    +       '<a href="#" class="nav-link">'
                    +           '<i class="nav-icon fas fa-circle"></i>'
                    +           '<p>'+menuKey+'<i class="right fas fa-angle-left"></i></p>'
                    +       '</a>'
                    +       '<ul class="nav nav-treeview">';
                $.each(menuValue, function(subMenuKey, subMenuValue) {
                    url = "<?php echo base_url('"+subMenuValue.Url+"');?>"
                    TT += '<li class="nav-item">'
                        +              '<a href="'+url+'" class="nav-link">'
                        +                  '<i class="far fa-dot-circle nav-icon"></i>'
                        +                  '<p>'+subMenuValue.Nombre+'</p>'
                        +              '</a>'
                        +          '</li>';
                });

                    TT += '</ul>';
                    TT += '</li>';
                });
            localStorage.setItem("menuXD", TT);
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
        }*/
    </script>
</html>