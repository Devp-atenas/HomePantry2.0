<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Retail Scanning</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/adminlte.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
    <link rel="stylesheet"
        href="<?php echo base_url('assets/datatables-responsive/css/responsive.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/datatables-buttons/css/buttons.bootstrap4.min.css') ?>">
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="<?php echo base_url('assets/img/user1-128x128.jpg') ?>" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="<?php echo base_url('assets/img/user8-128x128.jpg') ?>" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="<?php echo base_url('assets/img/user3-128x128.jpg') ?>" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <!-- Colocar Include Menu -->
        <?php 
        $data1['result'] =$this->uri->segment('3');
        $this->load->view('Menu/Menu',$data1);
        ?>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Maestro Tiendas Por Retail:</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a
                                        href="<?php echo base_url('Principal/dashboard') ?>">Home</a></li>
                                <li class="breadcrumb-item active"><a
                                        href="<?php echo base_url('Principal/logout') ?>">Salir</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Main content Agregar Tienda Retail -->
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Tienda Por Retail</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body" style="display: none;">
                                <form id="FormTiendaRetail">
                                    <div class="form-group">
                                        <label for="inputCodigoRetail">Codigo Retail:</label>
                                        <input id="inputCodigoRetail" name="inputCodigoRetail" class="form-control">
                                        </input>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputRetail">Retail:</label>
                                        <select id="inputRetail" name="inputRetail" class="form-control">
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputTienda">Tienda:</label>
                                        <input id="inputTienda" name="inputTienda" class="form-control">
                                        </input>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputCanal">Canal:</label>
                                        <select name="inputCanal" id="inputCanal" class="form-control">
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEstado">Estado:</label>
                                        <select name="inputEstado" id="inputEstado" class="form-control">
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputMunicipio">Municipio:</label>
                                        <select name="inputMunicipio" id="inputMunicipios" class="form-control">
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputParroquia">Parroquia:</label>
                                        <select name="inputParroquia" id="inputParroquias" class="form-control">
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputDireccion">Dirección:</label>
                                        <input type="text" name="inputDireccion" id="inputDireccion"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="Ind_PrecioConIVA">Indicador Precio Con IVA:</label>
                                        <input type="checkbox" id="Ind_PrecioConIVA" name="Ind_PrecioConIVA">
                                    </div>
                                    <div class="form-group">
                                        <label for="Ind_Ventas">Indicador Venta:</label>
                                        <input type="checkbox" id="Ind_Ventas" name="Ind_Ventas">
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12">
                                                <input type="button" id="botonenviar" value="Guardar"
                                                    class="btn btn-success float-right">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Listado de Tiendas Por Retail</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title"></h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="TableTiendaRetail"
                                            class="table table-bordered table-striped table-sm">
                                            <thead>
                                                <tr>
                                                    <th>Codigo</th>
                                                    <th>Cod Retail</th>
                                                    <th>Tienda</th>
                                                    <th>Retail </th>
                                                    <th>Canal</th>
                                                    <th>Estado</th>
                                                    <th>Municipio</th>
                                                    <th>Parroquia</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Codigo</th>
                                                    <th>Cod Retail</th>
                                                    <th>Tienda</th>
                                                    <th>Retail</th>
                                                    <th>Canal</th>
                                                    <th>Estado</th>
                                                    <th>Municipio</th>
                                                    <th>Parroquia</th>
                                                    <th></th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Windows Modal Visualizar Registros-->
            <div class="modal fade" id="modal-TiendaRetailVisualizar">
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
                                        <h3 class="card-title">Tienda</h3>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                                title="Collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="NombreVer" class="row">
                                            <div class="col-md-6">
                                                <label for="inputCodigoVer">Código:</label>
                                                <input type="text" name="nombres" id="inputCodigoVer"
                                                    class="form-control form-control-sm" readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputNombresVer">Retail:</label>
                                                <input type="text" name="nombres" id="inputRetailVer"
                                                    class="form-control form-control-sm" readonly>
                                            </div>
                                        </div>
                                        <div id="NombreVer" class="row">
                                            <div class="col-md-6">
                                                <label for="inputNombresVer">Codigo Retail:</label>
                                                <input type="text" name="nombres" id="inputCodigoRetaiVer"
                                                    class="form-control form-control-sm" readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputNombresVer">Canal:</label>
                                                <input type="text" name="nombres" id="inputCanalVer"
                                                    class="form-control form-control-sm" readonly>
                                            </div>
                                        </div>
                                        <div id="NombreVer" class="row">
                                            <div class="col-md-6">
                                                <label for="inputNombresVer">Estado:</label>
                                                <input type="text" name="nombres" id="inputEstadoVer"
                                                    class="form-control form-control-sm" readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputNombresVer">Municipio:</label>
                                                <input type="text" name="nombres" id="inputMunicipioVer"
                                                    class="form-control form-control-sm" readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputNombresVer">Parroquia:</label>
                                                <input type="text" name="nombres" id="inputParroquiaVer"
                                                    class="form-control form-control-sm" readonly>
                                            </div>
                                            <div id="NombreVer" class="col-md-6">
                                                <label for="inputNombresVer">Indicador Precio Con IVA:</label>
                                                <input type="text" name="nombres" id="inputInd_PrecioConIVAVer"
                                                    class="form-control form-control-sm" readonly>
                                            </div>
                                        </div>
                                        <div id="NombreVer" class="row">
                                            <div class="col-md-6">
                                                <label for="inputNombresVer">Indicador Ventas:</label>
                                                <input type="text" name="nombres" id="inputInd_VentasVer"
                                                    class="form-control form-control-sm" readonly>
                                            </div>
                                            <div id="NombreVer" class="col-md-6">
                                                <label for="inputNombresVer">Tienda:</label>
                                                <input type="text" name="nombres" id="inputTiendaVer"
                                                    class="form-control form-control-sm" readonly>
                                            </div>
                                        </div>
                                        <div id="NombreVer" class="row">
                                            <div class="col-md-12">
                                                <label for="inputNombresVer">Dirección:</label>
                                                <input type="text" name="nombres" id="inputDireccionVer"
                                                    class="form-control form-control-sm" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

    </div>
    <!-- Main content Editar Tienda Retail -->
    <div class="modal fade" id="modal-EditarTiendaRetail">
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
                                <h3 class="card-title">Tienda</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <form id="FormEditTiendaRetail">
                                    <div id="NombreVer" class="row">
                                        <div class="col-md-6">
                                            <label for="inputCodigoEdit">Código:</label>
                                            <input type="text" name="inputCodigoEdit" id="inputCodigoEdit"
                                                class="form-control form-control-sm">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputRetailEdit">Retail:</label>
                                            <select id="inputRetailEdit" name="inputRetailEdit" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                    <div id="NombreVer" class="row">
                                        <div class="col-md-6">
                                            <label for="inputCodigoRetailEdit">Codigo Retail:</label>
                                            <input type="text" name="inputCodigoRetailEdit" id="inputCodigoRetailEdit"
                                                class="form-control form-control-sm">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputNombresVer">Canal:</label>
                                            <select id="inputCanalEdit" name="inputCanalEdit" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                    <div id="NombreVer" class="row">
                                        <div class="col-md-6">
                                            <label for="inputEstadoEdit">Estado:</label>
                                            <select id="inputEstadoEdit" name="inputEstadoEdit" class="form-control">
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputMunicipioEdit">Municipio:</label>
                                            <select id="inputMunicipioEdit" name="inputMunicipioEdit"
                                                class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                    <div id="NombreVer" class="row">
                                        <div class="col-md-6">
                                            <label for="inputParroquiaEdit">Parroquia:</label>
                                            <select id="inputParroquiaEdit" name="inputParroquiaEdit"
                                                class="form-control">
                                            </select>
                                        </div>
                                        <div id="NombreVer" class="col-md-6">
                                            <label for="inputTiendaEdit">Tienda:</label>
                                            <input type="text" name="inputTiendaEdit" id="inputTiendaEdit"
                                                class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div id="NombreVer" class="row">
                                        <div class="col-md-12">
                                            <label for="inputDireccionEdit">Dirección:</label>
                                            <input type="text" name="inputDireccionEdit" id="inputDireccionEdit"
                                                class="form-control form-control-sm">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputInd_VentasEdit">Indicador Ventas:</label>
                                            <input type="checkbox" name="inputInd_VentasEdit" id="inputInd_VentasEdit"
                                                class="form-control form-control-sm">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="Ind_PrecioConIVAEdit">Indicador Precio Con IVA:</label>
                                            <input type="checkbox" name="Ind_PrecioConIVAEdit" id="Ind_PrecioConIVAEdit"
                                                class="form-control form-control-sm">
                                        </div>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="button" id="botonUpdate" value="Guardar" class="btn btn-success float-right">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    </div>
    </div>
    <!-- /Windows Modal Visualizar Registros-->
    <!-- Content Wrapper. Contains page content -->
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.1.0
        </div>
        <strong>Copyright &copy; 2014-2021 </strong> All rights reserved.
    </footer>
    <aside class="control-sidebar control-sidebar-dark">
    </aside>
    </div>
    
    <script>
    $("#botonUpdate").click(function() {
        if ($("#FormEditTiendaRetail").valid()) {
            var Ind_PrecioConIVA = 0;
            var Ind_Ventas = 0;
            if ($("input[name='Ind_PrecioConIVAEdit']:checked").val()) {
                var Ind_PrecioConIVA = 1;
            }
            if ($("input[name='inputInd_VentasEdit']:checked").val()) {
                var Ind_Ventas = 1;
            }
            var settings = {
                "async": true,
                "crossDomain": true,
                "url": '<?php echo urlApi; ?>UpdateTiendaRetail',
                "method": "post",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
                "data": {
                    "Id_Tiendas": $("#inputCodigoEdit").val(),
                    "Id_Retail": $("#inputRetailEdit").val(),
                    "Id_TiendaRetail": $("#inputCodigoRetailEdit").val(),
                    "Tienda": $("#inputTiendaEdit").val(),
                    "Direccion": $("#inputDireccionEdit").val(),
                    "Id_Canal": $("#inputCanalEdit").val(),
                    "Id_Estado": $("#inputEstadoEdit").val(),
                    "Id_Municipio": $("#inputMunicipioEdit").val(),
                    "Id_Parroquia": $("#inputParroquiaEdit").val(),
                    "Ind_Ventas": Ind_Ventas,
                    "Ind_PrecioConIVA": Ind_PrecioConIVA,
                    "activo": 1
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
                var form = document.querySelector('#FormEditTiendaRetail');
                form.reset();
                $('#modal-EditarTiendaRetail').modal('hide');
                let xtable = $('#TableTiendaRetail').DataTable();
                xtable.ajax.reload(null, false);
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
                    var form = document.querySelector('#FormPaisEdit');
                    form.reset();
                    window.location = '/retailscannig/index.php';
                }
            })
        }
    });

    function EditAction(data) {
        document.getElementById('FormEditTiendaRetail').reset();
        var settings = {
            "url": '<?php echo urlApi; ?>getTiendasRetailersID/' + data,
            "method": "get",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            }
        }
        $.ajax(settings).done(function(response) {
            $('#inputCodigoEdit').val(response.data[0].Id_Tiendas);
            cargarRetailEdit(response.data[0].Id_Retail);
            cargarCanalEdit(response.data[0].Id_Canal);
            cargarEstadoEdit(response.data[0].Id_Estado);
            cargarMunicipioEdit(response.data[0].Id_Municipio);
            cargarParroquiaEdit(response.data[0].Id_Parroquia);
            $('#inputCodigoRetailEdit').val(response.data[0].Id_TiendaRetail);
            $('#inputTiendaEdit').val(response.data[0].Tienda);
            $('#inputDireccionEdit').val(response.data[0].Direccion);
            if (response.data[0].Ind_PrecioConIVA == 'Si') {
                document.getElementById("Ind_PrecioConIVAEdit").checked = true;
            } else {
                document.getElementById("Ind_PrecioConIVAEdit").checked = false;
            }
            if (response.data[0].Ind_Ventas == 'Si') {
                document.getElementById("inputInd_VentasEdit").checked = true;
            } else {
                document.getElementById("inputInd_VentasEdit").checked = false;
            }
            $('#modal-EditarTiendaRetail').modal('show');
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
                window.location = '/retailscannig/index.php';
            }
        })
    }

    function cargarParroquiaEdit(IdParroquia) {
        var settings = {
            "url": '<?php echo urlApi; ?>getParroquia',
            "method": "get",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            }
        }
        $.ajax(settings).done(function(response) {
            let selectParroquiaEdit = $("#inputParroquiaEdit");
            selectParroquiaEdit.find("option").remove();
            selectParroquiaEdit.append("<option value='' selected disabled> -- Seleccione -- </option>");
            for (var i = 0; i < response.data.length; i++) {
                if (response.data[i].Id_Parroquia == IdParroquia) {
                    selectParroquiaEdit.append("<option value=" + response.data[i].Id_Parroquia + " selected>" +
                        response
                        .data[i].Parroquia + "</option>");
                } else {
                    selectParroquiaEdit.append("<option value=" + response.data[i].Id_Parroquia + ">" + response
                        .data[i]
                        .Parroquia + "</option>");
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
                window.location = '/retailscannig/index.php';
            }
        })
    }

    function cargarEstadoEdit(ID_Estado) {
        var settings = {
            "url": '<?php echo urlApi; ?>getEstado',
            "method": "get",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            }
        }
        $.ajax(settings).done(function(response) {
            let selectEstadoEdit = $("#inputEstadoEdit");
            selectEstadoEdit.find("option").remove();
            selectEstadoEdit.append("<option value='' selected disabled> -- Seleccione -- </option>");
            for (var i = 0; i < response.data.length; i++) {
                if (response.data[i].Id_Estado == ID_Estado) {
                    selectEstadoEdit.append("<option value=" + response.data[i].Id_Estado + " selected>" +
                        response.data[i]
                        .Estado + "</option>");
                } else {
                    selectEstadoEdit.append("<option value=" + response.data[i].Id_Estado + ">" + response.data[
                            i]
                        .Estado + "</option>");
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
                window.location = '/retailscannig/index.php';
            }
        })
    }

    function cargarMunicipioEdit(ID_Municipio) {
        var settings = {
            "url": '<?php echo urlApi; ?>getMunicipio',
            "method": "get",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            }
        }
        $.ajax(settings).done(function(response) {
            let selectMunicipioEdit = $("#inputMunicipioEdit");
            selectMunicipioEdit.find("option").remove();
            selectMunicipioEdit.append("<option value='' selected disabled> -- Seleccione -- </option>");
            for (var i = 0; i < response.data.length; i++) {
                if (response.data[i].Id_Municipio == ID_Municipio) {
                    selectMunicipioEdit.append("<option value=" + response.data[i].Id_Municipio + " selected>" +
                        response.data[i]
                        .Municipio + "</option>");
                } else {
                    selectMunicipioEdit.append("<option value=" + response.data[i].Id_Municipio + ">" + response
                        .data[i]
                        .Municipio + "</option>");
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
                window.location = '/retailscannig/index.php';
            }
        })
    }

    function cargarCanalEdit(Id_Canal) {
        var settings = {
            "url": '<?php echo urlApi; ?>getCanalretailscannig',
            "method": "get",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            }
        }
        $.ajax(settings).done(function(response) {
            let selectCanalEdit = $("#inputCanalEdit");
            selectCanalEdit.find("option").remove();
            for (var i = 0; i < response.data.length; i++) {
                if (response.data[i].Id_Canal == Id_Canal) {
                    selectCanalEdit.append("<option value=" + response.data[i].Id_Canal + " selected>" +
                        response
                        .data[i].Canal + "</option>");
                } else {
                    selectCanalEdit.append("<option value=" + response.data[i].Id_Canal + ">" + response.data[i]
                        .Canal + "</option>");
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
                window.location = '/retailscannig/index.php';
            }
        })
    }

    function cargarRetailEdit(Id_Retail) {
        var settings = {
            "url": '<?php echo urlApi; ?>getRetailes',
            "method": "get",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            }
        }
        $.ajax(settings).done(function(response) {
            let selectRetailEdit = $("#inputRetailEdit");
            selectRetailEdit.find("option").remove();
            for (var i = 0; i < response.data.length; i++) {
                if (response.data[i].id_retail == Id_Retail) {
                    selectRetailEdit.append("<option value=" + response.data[i].id_retail + " selected>" +
                        response
                        .data[i].retail + "</option>");
                } else {
                    selectRetailEdit.append("<option value=" + response.data[i].id_retail + ">" + response.data[
                            i]
                        .retail + "</option>");
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
                window.location = '/retailscannig/index.php';
            }
        })
    }

    function deleteAction(data) {
        Swal.fire({
            title: '¿Estas seguro?',
            text: "¡No podrás revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '¡Sí, bórralo!'
        }).then((result) => {
            if (result.isConfirmed) {
                var settings = {
                    "url": '<?php echo urlApi; ?>deleteTiendaRetail/' + data,
                    "method": "get",
                    "headers": {
                        "Content-Type": "application/x-www-form-urlencoded",
                        "Authorization": "Bearer " + localStorage.getItem('Token')
                    }
                }
                $.ajax(settings).done(function(response) {
                    var DatosJson = JSON.parse(JSON.stringify(response));
                    Swal.fire({
                        title: DatosJson.message,
                        width: '650px',
                        height: '45px'
                    }).then(function() {
                        let xtable = $('#TableTiendaRetail').DataTable();
                        xtable.ajax.reload(null, false);
                    });
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
                        window.location = '/retailscannig/index.php';
                    }
                })
            }
        })
    }
    $("#botonenviar").click(function() {
        var Ind_PrecioConIVA = 0;
        var Ind_Ventas = 0;
        if ($("input[name='Ind_PrecioConIVA']:checked").val()) {
            var Ind_PrecioConIVA = 1;
        }
        if ($("input[name='Ind_Ventas']:checked").val()) {
            var Ind_Ventas = 1;
        }
        if ($("#FormTiendaRetail").valid()) {
            var settings = {
                "async": true,
                "crossDomain": true,
                "url": '<?php echo urlApi; ?>addNewTiendaRetail',
                "method": "POST",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
                "data": {
                    "Id_Retail": $("#inputRetail").val(),
                    "Id_TiendaRetail": $("#inputCodigoRetail").val(),
                    "Tienda": $("#inputTienda").val(),
                    "Direccion": $("#inputDireccion").val(),
                    "Id_Canal": $("#inputCanal").val(),
                    "Id_Estado": $("#inputEstado").val(),
                    "Id_Municipio": $("#inputMunicipios").val(),
                    "Id_Parroquia": $("#inputParroquias").val(),
                    "Ind_Ventas": Ind_Ventas,
                    "Ind_PrecioConIVA": Ind_PrecioConIVA,
                    "activo": 1
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
                var form = document.querySelector('#FormTiendaRetail');
                form.reset();
                let xtable = $('#TableTiendaRetail').DataTable();
                xtable.ajax.reload(null, false);
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
                    var form = document.querySelector('#FormTamRango');
                    form.reset();
                    window.location = '/retailscannig/index.php';
                }
            })
        }
    });

    function VisualizarAction(data) {
        var settings = {
            "url": '<?php echo urlApi; ?>getAllTiendaId/' + data,
            "method": "get",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            }
        }
        $.ajax(settings).done(function(response) {
            $('#inputCodigoVer').val(response.data[0].Id_Tiendas);
            $('#inputRetailVer').val(response.data[0].Retail);
            $('#inputCodigoRetaiVer').val(response.data[0].Id_TiendaRetail);
            $('#inputCanalVer').val(response.data[0].Canal);
            $('#inputEstadoVer').val(response.data[0].Estado);
            $('#inputMunicipioVer').val(response.data[0].Municipio);
            $('#inputParroquiaVer').val(response.data[0].Parroquia);
            $('#inputInd_PrecioConIVAVer').val(response.data[0].Ind_PrecioConIVA);
            $('#inputInd_VentasVer').val(response.data[0].Ind_Ventas);
            $('#inputTiendaVer').val(response.data[0].Tienda);
            $('#inputDireccionVer').val(response.data[0].Direccion);
            $('#modal-TiendaRetailVisualizar').modal('show');// aaa
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
                window.location = '/retailscannig/index.php';
            }
        })
    }
    $(document).ready(function() {
        $('#FormTiendaRetail').validate({
            rules: {
                inputCodigoRetail: {
                    required: true,
                },
                inputRetail: {
                    required: true,
                },
                inputTienda: {
                    required: true,
                    minlength: 5,
                    maxlength: 50,
                },
                inputCanal: {
                    required: true,
                },
                inputEstado: {
                    required: true,
                },
                inputMunicipio: {
                    required: true,
                },
                inputParroquia: {
                    required: true,
                },
                inputDireccion: {
                    required: true,
                    minlength: 5,
                    maxlength: 255,
                },
            },
            messages: {
                inputCodigoRetail: {
                    required: "Por favor ingrese el Codigo Interno del Retail",
                },
                inputRetail: {
                    required: "Por favor Seleccione un Retail",
                },
                inputTienda: {
                    required: "Por favor ingrese el Nombre de la Tienda",
                    minlength: "El Nombre de la Tienda debe poseer minimo 5 Caracteres",
                    maxlength: "El Nombre de la Tienda debe poseer maximo 20 Caracteres",
                },
                inputCanal: {
                    required: "Por favor Seleccione el Canal de la Tienda",
                },
                inputEstado: {
                    required: "Por favor Seleccione el Estado de la Tienda",
                },
                inputMunicipio: {
                    required: "Por favor Seleccione el Municipio de la Tienda",
                },
                inputParroquia: {
                    required: "Por favor Seleccione la Parroquia de la Tienda",
                },
                inputDireccion: {
                    required: "Por favor Ingresse la Dirección de la Tienda",
                    minlength: "La Dirección de la Tienda debe poseer minimo 5 Caracteres",
                    maxlength: "La Dirección de la Tienda debe poseer maximo 50 Caracteres",
                },
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
        $('#FormEditTiendaRetail').validate({
            rules: {
                inputCodigoEdit: {
                    required: true,
                },
                inputRetailEdit: {
                    required: true,
                },
                inputTiendaEdit: {
                    required: true,
                    minlength: 5,
                    maxlength: 50,
                },
                inputCanalEdit: {
                    required: true,
                },
                inputEstadoEdit: {
                    required: true,
                },
                inputMunicipioEdit: {
                    required: true,
                },
                inputParroquiaEdit: {
                    required: true,
                },
                inputDireccionEdit: {
                    required: true,
                    minlength: 5,
                    maxlength: 255,
                },
            },
            messages: {
                inputCodigoEdit: {
                    required: "Por favor ingrese el Codigo Interno del Retail",
                },
                inputRetailEdit: {
                    required: "Por favor Seleccione un Retail",
                },
                inputTiendaEdit: {
                    required: "Por favor ingrese el Nombre de la Tienda",
                    minlength: "El Nombre de la Tienda debe poseer minimo 5 Caracteres",
                    maxlength: "El Nombre de la Tienda debe poseer maximo 20 Caracteres",
                },
                inputCanalEdit: {
                    required: "Por favor Seleccione el Canal de la Tienda",
                },
                inputEstadoEedit: {
                    required: "Por favor Seleccione el Estado de la Tienda",
                },
                inputMunicipioEdit: {
                    required: "Por favor Seleccione el Municipio de la Tienda",
                },
                inputParroquiaEdit: {
                    required: "Por favor Seleccione la Parroquia de la Tienda",
                },
                inputDireccionEdit: {
                    required: "Por favor Ingresse la Dirección de la Tienda",
                    minlength: "La Dirección de la Tienda debe poseer minimo 5 Caracteres",
                    maxlength: "La Dirección de la Tienda debe poseer maximo 50 Caracteres",
                },
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
        cargarRetail();
        cargarCanal();
        cargarEstado();
        $('#inputEstadoEdit').change(function() {
            var IdEstado = $(this).val();
            var settings = {
                "url": '<?php echo urlApi; ?>municipioSearch/' + IdEstado,
                "method": "get",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
            }
            $.ajax(settings).done(function(response) {
                let selectMunicipio = $("#inputMunicipioEdit");
                selectMunicipio.find("option").remove();
                selectMunicipio.append(
                    "<option value='' selected disabled> -- Seleccione -- </option>");
                for (var i = 0; i < response.data.length; i++) {
                    selectMunicipio.append("<option value=" + response.data[i].Id_Municipio +
                        ">" + response.data[i].Id_Municipio + "-" + response.data[i]
                        .Municipio + "</option>");
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
                    window.location = '/retailscannig/index.php';
                }
            })
        });
        $('#inputEstado').change(function() {
            var IdEstado = $(this).val();
            var settings = {
                "url": '<?php echo urlApi; ?>municipioSearch/' + IdEstado,
                "method": "get",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
            }
            $.ajax(settings).done(function(response) {
                let selectMunicipio = $("#inputMunicipios");
                selectMunicipio.find("option").remove();
                selectMunicipio.append(
                    "<option value='' selected disabled> -- Seleccione -- </option>");
                for (var i = 0; i < response.data.length; i++) {
                    selectMunicipio.append("<option value=" + response.data[i].Id_Municipio +
                        ">" + response.data[i].Id_Municipio + "-" + response.data[i]
                        .Municipio + "</option>");
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
                    window.location = '/retailscannig/index.php';
                }
            })
        });
        $('#inputMunicipioEdit').change(function() {
            var IdEstado = $(this).val();
            var settings = {
                "url": '<?php echo urlApi; ?>parroquiaSearch/' + IdEstado,
                "method": "get",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
            }
            $.ajax(settings).done(function(response) {
                let selectParroquia = $("#inputParroquiaEdit");
                selectParroquia.find("option").remove();
                selectParroquia.append(
                    "<option value='' selected disabled> -- Seleccione -- </option>");
                for (var i = 0; i < response.data.length; i++) {
                    selectParroquia.append("<option value=" + response.data[i].Id_Parroquia +
                        ">" + response.data[i].Id_Parroquia + "-" + response.data[i]
                        .Parroquia + "</option>");
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
                    window.location = '/retailscannig/index.php';
                }
            })
        });
        $('#inputMunicipios').change(function() {
            var IdEstado = $(this).val();
            var settings = {
                "url": '<?php echo urlApi; ?>parroquiaSearch/' + IdEstado,
                "method": "get",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
            }
            $.ajax(settings).done(function(response) {
                let selectParroquia = $("#inputParroquias");
                selectParroquia.find("option").remove();
                selectParroquia.append(
                    "<option value='' selected disabled> -- Seleccione -- </option>");
                for (var i = 0; i < response.data.length; i++) {
                    selectParroquia.append("<option value=" + response.data[i].Id_Parroquia +
                        ">" + response.data[i].Id_Parroquia + "-" + response.data[i]
                        .Parroquia + "</option>");
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
                    window.location = '/retailscannig/index.php';
                }
            })
        });
        $('#TableTiendaRetail').dataTable({
            "lengthMenu": [
                [20, 40, 80, -1],
                [20, 40, 80, "All"]
            ],
            "bDestroy": true,
            "autoWidth": true,
            "dom": '<"wrapper"flitp><"center"B>',
            "responsive": true,
            "buttons": [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            "ajax": {
                "url": '<?php echo urlApi; ?>getAllTiendas',
                "type": "GET",
                "headers": {
                    'Authorization': 'bearer ' + localStorage.getItem('Token')
                },
                "error": function(xhr, error, thrown) {
                    if (xhr.status === 403) {
                        var err = JSON.parse(xhr.responseText);
                        Swal.fire({
                            title: err.message,
                            width: '300px',
                            height: '100px'
                        })
                    }
                    if (xhr.status === 400) {
                        var err = JSON.parse(xhr.responseText);
                        Swal.fire({
                            title: err.message,
                            width: '250px',
                            height: '25px'
                        })
                        window.location.href = '/retailscannig/Principal/logout';
                    }
                }
            },
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
            },
            "aoColumns": [{
                    mData: 'Id_Tiendas',
                    className: "text-center"
                },
                {
                    mData: 'Id_TiendaRetail',
                    className: "text-center"
                },
                {
                    mData: 'Tienda',
                    className: "text-center"
                },
                {
                    mData: 'Retail',
                    className: "text-center"
                },
                {
                    mData: 'Canal',
                    className: "text-center"
                },
                {
                    mData: 'Estado',
                    className: "text-center"
                },
                {
                    mData: 'Municipio',
                    className: "text-center"
                },
                {
                    mData: 'Parroquia',
                    className: "text-center"
                },
            ],
            "columnDefs": [{
                    "width": '5px',
                    "targets": 0,
                },
                {
                    "width": '90px',
                    "targets": 8,
                    "orderable": true,
                    "data": 'Id_Tiendas',
                    "className": "text-center",
                    "render": function(data, type, row, meta) {
                        return '<a title="Eliminar" href="#"><img id="EliminarImg" src=<?php echo base_url('assets/iconos/delete.png') ?> width="30" height="30"  onclick="deleteAction(' +
                            data +
                            '); return false;"></a>&nbsp;&nbsp;<a title="Editar" href="#"><img src=<?php echo base_url('assets/iconos/editar.png') ?> width="25" height="25" onclick="EditAction(' +
                            data +
                            '); return false;"></a>&nbsp;&nbsp;<a title="Visualizar" href="#"><img src=<?php echo base_url('assets/iconos/ver.png') ?> width="25" height="25" onclick="VisualizarAction(' +
                            data + '); return false;"></a>';
                    }
                }
            ],
        });
    });

    function cargarRetail() {
        var settings = {
            "url": '<?php echo urlApi; ?>getRetailes',
            "method": "get",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            }
        }
        $.ajax(settings).done(function(response) {
            let selectRetail = $("#inputRetail");
            selectRetail.find("option").remove();
            selectRetail.append("<option value='' selected disabled> -- Seleccione -- </option>");
            for (var i = 0; i < response.data.length; i++) {
                selectRetail.append("<option value=" + response.data[i].id_retail + ">" + response.data[i]
                    .id_retail + "-" + response.data[i].retail + "</option>");
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
                window.location = '/retailscannig/index.php';
            }
        })
    }

    function cargarCanal() {
        var settings = {
            "url": '<?php echo urlApi; ?>getCanalretailscannig',
            "method": "get",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            }
        }
        $.ajax(settings).done(function(response) {
            let selectCanal = $("#inputCanal");
            selectCanal.find("option").remove();
            selectCanal.append("<option value='' selected disabled> -- Seleccione -- </option>");
            for (var i = 0; i < response.data.length; i++) {
                selectCanal.append("<option value=" + response.data[i].Id_Canal + ">" + response.data[i]
                    .Id_Canal + "-" + response.data[i].Canal + "</option>");
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
                window.location = '/retailscannig/index.php';
            }
        })
    }

    function cargarEstado() {
        var settings = {
            "url": '<?php echo urlApi; ?>getEstado',
            "method": "get",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            }
        }
        $.ajax(settings).done(function(response) {
            let selectEstado = $("#inputEstado");
            selectEstado.find("option").remove();
            selectEstado.append("<option value='' selected disabled> -- Seleccione -- </option>");
            for (var i = 0; i < response.data.length; i++) {
                selectEstado.append("<option value=" + response.data[i].Id_Estado + ">" + response.data[i]
                    .Id_Estado + "-" + response.data[i].Estado + "</option>");
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
                window.location = '/retailscannig/index.php';
            }
        })
    }
    </script>
</body>

</html>