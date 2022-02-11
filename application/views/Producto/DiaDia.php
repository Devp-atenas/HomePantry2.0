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
        <?php $this->load->view('Menu/Menu');?>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Maestro Producto Dia Dia:</h1>
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
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Productos Dia Dia </h3>
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
                                        <table id="TableDiaDia" class="table table-bordered table-striped table-sm">
                                            <thead>
                                                <tr>
                                                    <th>Retail</th>
                                                    <th>Semana</th>
                                                    <th>Codigo </th>
                                                    <th>Codigo Barra</th>
                                                    <th>Descripción</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Retail</th>
                                                    <th>Semana</th>
                                                    <th>Codigo</th>
                                                    <th>Codigo Barra</th>
                                                    <th>Descripción</th>
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
            <div class="modal fade" id="modal-DiaDiaVisualizar">
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
                                        <h3 class="card-title">Producto</h3>
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
                                                <label for="inputNombresVer">Código Retail:</label>
                                                <input type="text" name="nombres" id="inputNombresVer"
                                                    class="form-control form-control-sm" readonly>
                                            </div>
                                        </div>
                                        <div id="NombreVer" class="row">
                                            <div class="col-md-6">
                                                <label for="inputNombresVer">Código Barra:</label>
                                                <input type="text" name="nombres" id="inputCodigoBarraVer"
                                                    class="form-control form-control-sm" readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputNombresVer">Descripción:</label>
                                                <input type="text" name="nombres" id="inputDescripcionVer"
                                                    class="form-control form-control-sm" readonly>
                                            </div>
                                        </div>
                                        <div id="NombreVer" class="row">
                                            <div class="col-md-6">
                                                <label for="inputNombresVer">Nivel 1 Code:</label>
                                                <input type="text" name="nombres" id="inputNivel1_CodeVer"
                                                    class="form-control form-control-sm" readonly>
                                            </div>
                                            <div id="NombreVer" class="col-md-6">
                                                <label for="inputNombresVer">Nivel 1 Desc:</label>
                                                <input type="text" name="nombres" id="inputNivel1_DescVer"
                                                    class="form-control form-control-sm" readonly>
                                            </div>
                                        </div>
                                        <div id="NombreVer" class="row">
                                            <div class="col-md-6">
                                                <label for="inputNombresVer">Nivel 2 Code:</label>
                                                <input type="text" name="nombres" id="inputNivel2_CodeVer"
                                                    class="form-control form-control-sm" readonly>
                                            </div>
                                            <div id="NombreVer" class="col-md-6">
                                                <label for="inputNombresVer">Nivel 2 Desc:</label>
                                                <input type="text" name="nombres" id="inputNivel2_DesCVer"
                                                    class="form-control form-control-sm" readonly>
                                            </div>
                                        </div>
                                        <div id="NombreVer" class="row">
                                            <div id="NombreVer" class="col-md-6">
                                                <label for="inputNombresVer">Nivel 3 Code:</label>
                                                <input type="text" name="nombres" id="inputNivel3_CodeVer"
                                                    class="form-control form-control-sm" readonly>
                                            </div>
                                            <div id="NombreVer" class="col-md-6">
                                                <label for="inputNombresVer">Nivel 3 Desc:</label>
                                                <input type="text" name="nombres" id="inputNivel3_DescVer"
                                                    class="form-control form-control-sm" readonly>
                                            </div>
                                        </div>
                                        <div id="NombreVer" class="row">
                                            <div id="NombreVer" class="col-md-6">
                                                <label for="inputNombresVer">Nivel 4 Code:</label>
                                                <input type="text" name="nombres" id="inputNivel4_CodeVer"
                                                    class="form-control form-control-sm" readonly>
                                            </div>
                                            <div id="NombreVer" class="col-md-6">
                                                <label for="inputNombresVer">Nivel 4 Desc:</label>
                                                <input type="text" name="nombres" id="inputNivel4_DescVer"
                                                    class="form-control form-control-sm" readonly>
                                            </div>
                                        </div>
                                        <div id="NombreVer" class="row">
                                            <div id="NombreVer" class="col-md-6">
                                                <label for="inputNombresVer">Nivel 5 Code:</label>
                                                <input type="text" name="nombres" id="inputNivel5_CodeVer"
                                                    class="form-control form-control-sm" readonly>
                                            </div>
                                            <div id="NombreVer" class="col-md-6">
                                                <label for="inputNombresVer">Nivel 5 Desc:</label>
                                                <input type="text" name="nombres" id="inputNivel5_DescVer"
                                                    class="form-control form-control-sm" readonly>
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
    <script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/jquery-validation/jquery.validate.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/jquery-validation/additional-methods.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/datatables/jquery.dataTables.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/datatables-buttons/js/dataTables.buttons.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/datatables-buttons/js/buttons.bootstrap4.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/jszip/jszip.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/pdfmake/pdfmake.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/pdfmake/vfs_fonts.js') ?>"></script>
    <script src="<?php echo base_url('assets/datatables-buttons/js/buttons.html5.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/datatables-buttons/js/buttons.print.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/datatables-buttons/js/buttons.colVis.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/adminlte.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/demo.js') ?>"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>
    <script>
    function VisualizarAction(data) {
        var settings = {
            "url": '<?php echo urlApi; ?>getAllProdDiaDiaId/' + data,
            "method": "get",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            }
        }
        $.ajax(settings).done(function(response) {
            $('#inputCodigoVer').val(response.data[0].Id_Producto);
            $('#inputNombresVer').val(response.data[0].Codigo);
            $('#inputCodigoBarraVer').val(response.data[0].Cod_Barra);
            $('#inputDescripcionVer').val(response.data[0].Descripcion);
            $('#inputNivel1_CodeVer').val(response.data[0].Nivel1_Code);
            $('#inputNivel1_DescVer').val(response.data[0].Nivel1_Desc);
            $('#inputNivel2_CodeVer').val(response.data[0].Nivel2_Code);
            $('#inputNivel2_DesCVer').val(response.data[0].Nivel2_DesC);
            $('#inputNivel3_CodeVer').val(response.data[0].Nivel3_Code);
            $('#inputNivel3_DescVer').val(response.data[0].Nivel3_Desc);
            $('#inputNivel4_CodeVer').val(response.data[0].Nivel4_Code);
            $('#inputNivel4_DescVer').val(response.data[0].Nivel4_DesC);
            $('#inputNivel5_CodeVer').val(response.data[0].Nivel5_Code);
            $('#inputNivel5_DescVer').val(response.data[0].Nivel5_Desc);
            $('#modal-DiaDiaVisualizar').modal('show');
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
        $('#TableDiaDia').dataTable({
            "lengthMenu": [
                [60, 100, 200, -1],
                [60, 100, 200, "All"]
            ],
            "bDestroy": true,
            "autoWidth": true,
            "dom": '<"wrapper"flitp><"center"B>',
            "responsive": true,
            "buttons": [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            "ajax": {
                "url": '<?php echo urlApi; ?>getAllProdDiaDia',
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
                    mData: 'Retail',
                    className: "text-center"
                },
                {
                    mData: 'Semana',
                    className: "text-center"
                },
                {
                    mData: 'Codigo',
                    className: "text-center"
                },
                {
                    mData: 'Cod_Barra',
                    className: "text-center"
                },
                {
                    mData: 'Descripcion',
                    className: "text-center"
                },
            ],
            "columnDefs": [{
                "targets": 5,
                "orderable": true,
                "data": 'Id_Producto',
                "className": "text-center",
                "render": function(data, type, row, meta) {
                    return '<a title="Visualizar" href="#"><img src=<?php echo base_url('assets/iconos/ver.png') ?> width="25" height="25" onclick="VisualizarAction(' +
                        data + '); return false;"></a>';
                }
            }],
        });
    });
    </script>
</body>

</html>