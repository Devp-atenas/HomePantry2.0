<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>| Home Pantry 2.0 |</title>


        <script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
        <script src="<?php echo base_url('jsHP/jsAlertas.js') ?>"></script>
        <script>



            $(document).ready(function() {

                if (localStorage.getItem("nombreUsuario") !== null){

                    ListaAlertas(localStorage.getItem("IdUsuario"));
                    $("#nombreUsuario").html(localStorage.getItem("nombreUsuario"));
                    $("#nombreUsuario2").html(localStorage.getItem("nombreUsuario"));

                    img = document.createElement('img');
                    //img.setAttribute("src", `../dist/img/Usuarios/${localStorage.getItem("Avatar")}`);
                    img.setAttribute("src", `<?php echo base_url('dist/img/Usuarios/')?>${localStorage.getItem("Avatar")}`);
                    img.setAttribute("alt", `User Image`);
                    img.setAttribute("class", `img-circle elevation-2`);
                    document.getElementById('lockscreen-image').appendChild(img);

                    img = document.createElement('img');
                    //img.setAttribute("src", `../dist/img/Usuarios/${localStorage.getItem("Avatar")}`);
                    img.setAttribute("src", `<?php echo base_url('dist/img/Usuarios/')?>${localStorage.getItem("Avatar")}`);
                    img.setAttribute("alt", `User Image`);
                    img.setAttribute("class", `img-circle elevation-2`);
                    document.getElementById('lockscreen-image2').appendChild(img);

                }else{
                    window.location = '/homepantry20/index.php';
                }
            });

            function LogOut(){
                sessionStorage.clear();
                localStorage.clear();
                window.location = '/homepantry20/index.php';
            }

        </script>



        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.2.0/css/dataTables.dateTime.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/black-tie/jquery-ui.min.css" integrity="sha512-+Z63RrG0zPf5kR9rHp9NlTMM29nxf02r1tkbfwTRGaHir2Bsh4u8A79PiUKkJq5V5QdugkL+KPfISvl67adC+Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.9/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <link rel="stylesheet" href="<?php echo base_url('vendor/css/custom.min.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('vendor/css/nprogress.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('dist/iconNew/node_modules/bootstrap-icons/font/bootstrap-icons.css') ?>">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
        <link rel="stylesheet" href="<?php echo base_url('assets/adminlte.min.css') ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css" integrity="sha512-8vq2g5nHE062j3xor4XxPeZiPjmRDh6wlufQlfC6pdQ/9urJkU07NM0tEREeymP++NczacJ/Q59ul+/K2eYvcg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
        
        
        
        
        
        <link rel="stylesheet" href="<?php echo base_url('assets/datatables-buttons/css/buttons.bootstrap4.min.css') ?>">
        <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
        <!-- Include the Bootstrap Table  CSS for the table -->
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.css">
        <!-- favicon -->
        <!--<link rel="icon" type="image/png" sizes="48x48" href="<?php echo base_url('favicon.ico') ?>">-->
        <link rel="icon"
            href="https://atenasconsultores.com/wp-content/uploads/2020/12/cropped-emblemaAtenasColor-32x32.png"
            sizes="32x32" />
        <!-- Selectpicker -->
        <link rel="stylesheet" href="<?php echo base_url('assets/selectpicker/css/bootstrap-select.css') ?>">
        <!-- Include tabulator the table -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tabulator/5.2.1/css/tabulator.min.css" />
        <!--  <link href="https://cdn.datatables.net/v/dt/dt-1.10.16/sl-1.2.5/datatables.min.css" rel="stylesheet">-->
        <link href="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/css/dataTables.checkboxes.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/6.0.0-beta.2/dropzone.min.css" integrity="sha512-qkeymXyips4Xo5rbFhX+IDuWMDEmSn7Qo7KpPMmZ1BmuIA95IPVYsVZNn8n4NH/N30EY7PUZS3gTeTPoAGo1mA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style type="text/css">
            .z1000 { z-index: 10000; }
        </style>
        <link href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/select/1.3.4/css/select.dataTables.min.css" rel="stylesheet">
        <!-- <style type="text/css">
        table {
            border-collapse: collapse;
        }
        thead {
        background: -moz-linear-gradient(top, #0066ff 0%, #00ff66 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #0066ff), color-stop(100%, #00ff66));
        background: -webkit-linear-gradient(top, #0066ff 0%, #00ff66 100%);
        background: -o-linear-gradient(top, #0066ff 0%, #00ff66 100%);
        background: -ms-linear-gradient(top, #0066ff 0%, #00ff66 100%);
        background: linear-gradient(to bottom, #0066ff 0%, #00ff66 100%);
        }
        </style> -->
    </head>

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
        <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>
                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown open" style="padding-left: 15px;">
                        <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                            <div id="lockscreen-image" class="lockscreen-image">
                                <span class="" id="nombreUsuario"></span>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                            <!--
                                <a class="dropdown-item" href="javascript:;"> Profile</a>
                            <a class="dropdown-item" href="javascript:;">
                                <span class="badge bg-red pull-right">50%</span>
                                <span>Settings</span>
                            </a>
                            <a class="dropdown-item" href="javascript:;">Help</a>
                            -->
                            <!--<a class="dropdown-item" href="<?php echo base_url('Principal/SessionLock')?>">
                                <i class="bi bi-lock-fill"></i>&nbsp;Bloquear
                            </a>-->
                            <a class="dropdown-item" onclick="LogOut()" href="<?php echo base_url('Principal/logout')?>">
                                <i class="bi bi-arrow-right-circle"></i>&nbsp;Salir
                            </a>
                            
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-bell"></i>
                            <span id="Total" class="badge badge-danger navbar-badge"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <div id="TotalAlertas"></div>
                            <div class="dropdown-divider"></div>
                            <div id="Alertas4Perfil"></div>
                            <a href="<?php echo base_url('Principal/DetalleAlertas')?>" class="dropdown-item dropdown-footer">Ir a detalle de las alertas</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                            <i class="fas fa-expand-arrows-alt"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?php echo base_url('Principal/dashboard')?>" class="brand-link">
                <!-- dist/img/cropped-emblemaAtenasColor-32x32.png -->
                <img src="<?php echo base_url('assets/img/HomePantry.png')?>" alt="Atenas"
                    class="brand-image img-thumbnail elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Home Pantry</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div id="lockscreen-image2" class="lockscreen-image">
                        <span class="" id="nombreUsuario2"></span>
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><p id="usuario"></p></a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                    <?php
                        $this->load->view('Menu/Menu');
                    ?>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
        <!-- jQuery -->
        

        









    </body>
</html>