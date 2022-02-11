<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Retail Scanning</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome-free/css/all.min.css')?>">
<link rel="stylesheet" href="<?php echo base_url('assets/adminlte.min.css')?>">
<link rel="stylesheet" href="<?php echo base_url('assets/datatables-bs4/css/dataTables.bootstrap4.min.css')?>">
<link rel="stylesheet" href="<?php echo base_url('assets/datatables-responsive/css/responsive.bootstrap4.min.css')?>">
<link rel="stylesheet" href="<?php echo base_url('assets/datatables-buttons/css/buttons.bootstrap4.min.css')?>">
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
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
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
              <img src="<?php echo base_url('assets/img/user1-128x128.jpg')?>" alt="User Avatar" class="img-size-50 mr-3 img-circle">
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
              <img src="<?php echo base_url('assets/img/user8-128x128.jpg')?>" alt="User Avatar" class="img-size-50 img-circle mr-3">
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
              <img src="<?php echo base_url('assets/img/user3-128x128.jpg')?>" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
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
  <?php $this->load->view('Menu/Menu'); ?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mantenimiento de Tamaño Rango:</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url('Principal/dashboard')?>">Home</a></li>
            <li class="breadcrumb-item active"><a href="<?php echo base_url('Principal/logout')?>">Salir</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content Agregar Segmento -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tamaño Rango</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fa fa-plus"></i>
                </button>
              </div>
            </div>
              <div class="card-body" style="display: none;">
              <form id="FormTamRango">
              <div class="form-group">
                  <label for="inputCategoria">Categoria:</label>
                  <select id="inputCategoria" name="inputCategoria" class="form-control">
                  </select>
                </div>
                <div class="form-group">
                  <label for="inputTamRango">Tamaño Rango:</label>
                  <input type="text" name="inputTamRango"  id="inputTamRango" class="form-control">
                </div>
                <div class="form-group">
                  <label for="inputAbreviatura">Abreviatura:</label>
                  <input type="text" name="inputAbreviatura"  id="inputAbreviatura" class="form-control">
                </div>
                <div class="form-group">
                <div class="row">
                    <div class="col-12">
                      <input type="button" id="botonenviar" value="Guardar" class="btn btn-success float-right">
                    </div>
                  </div>
                </div>
                </form >
              </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </section>
    <!-- /Windows datatables Tamaño Rango-->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Listados de Tamaño Rango</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
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
                <table id="TableTamRango" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Categoria</th>
                    <th>Tamaño Rango</th>
                    <th>Abreviatura</th>
                    <th>Estatus</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <tfoot>
                  <tr>
                    <th>Categoria</th>
                    <th>Tamaño Rango</th>
                    <th>Abreviatura</th>
                    <th>Estatus</th>
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
    <!-- Windows Modal Editar Registros-->
    <div class="modal fade" id="modal-TamRangoEditar">
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
              <h3 class="card-title">Tamaño Rango</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
              <div class="card-body">
              <form id="FormTamRangoEdit">
              <div class="form-group">
                  <label for="inputIdEditTamRango">Código:</label>
                  <input type="text" name="inputIdEditTamRango"  id="inputIdEditTamRango" class="form-control" readonly>
                </div>
                <div class="form-group">
                  <label for="inputCategoriaEdit">Categoria:</label>
                  <select id="inputCategoriaEdit" name="inputCategoriaEdit" class="form-control">
                  </select>
                </div>
                <div class="form-group">
                  <label for="inputTamRangoEdit">Tamaño Rango:</label>
                  <input type="text" name="inputTamRangoEdit"  id="inputTamRangoEdit" class="form-control">
                </div>
                <div class="form-group">
                  <label for="inputAbreviaturaEdit">Abreviatura:</label>
                  <input type="text" name="inputAbreviaturaEdit"  id="inputAbreviaturaEdit" class="form-control">
                </div>
                <div class="form-group">
                <div class="row">
                    <div class="col-12">
                      <input type="button" onclick="ActualizarRegistro()" id="editUsuario" value="Guardar" class="btn btn-success float-right">
                    </div>
                  </div>
                </div>
                </form >
              </div>
          </div>
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
    <!-- Windows Modal Visualizar Registros-->
    <div class="modal fade" id="modal-TamRangoVisualizar">
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
              <h3 class="card-title">Tamaño Rango</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
              <div class="card-body">
              <div id="NombreVer" class="form-group">
                  <label for="inputCodigoVer">Código:</label>
                  <input type="text"  name="Codigo" id="inputCodigoVer" class="form-control" readonly>
                </div>
               <div id="NombreVer" class="form-group">
                  <label for="inputCategoriaVer">Categoria:</label>
                  <input type="text"  name="Categoria" id="inputCategoriaVer" class="form-control" readonly>
                </div>
                <div id="NombreVer" class="form-group">
                  <label for="inputTamanoRango">Tamaño Rango:</label>
                  <input type="text"  name="Segmento" id="inputTamanoRango" class="form-control" readonly>
                </div>
                <div id="NombreVer" class="form-group">
                  <label for="inputAbreviatura">Abreviatura:</label>
                  <input type="text"  name="Abreviatura" id="inputAbreviaturaVer" class="form-control" readonly>
                </div>
              </div>
          </div>
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
<script src="<?php echo base_url('assets/jquery/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets/jquery-validation/jquery.validate.min.js')?>"></script>
<script src="<?php echo base_url('assets/jquery-validation/additional-methods.min.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables-bs4/js/dataTables.bootstrap4.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables-responsive/js/dataTables.responsive.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables-responsive/js/responsive.bootstrap4.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables-buttons/js/dataTables.buttons.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables-buttons/js/buttons.bootstrap4.min.js')?>"></script>
<script src="<?php echo base_url('assets/jszip/jszip.min.js')?>"></script>
<script src="<?php echo base_url('assets/pdfmake/pdfmake.min.js')?>"></script>
<script src="<?php echo base_url('assets/pdfmake/vfs_fonts.js')?>"></script>
<script src="<?php echo base_url('assets/datatables-buttons/js/buttons.html5.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables-buttons/js/buttons.print.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables-buttons/js/buttons.colVis.min.js')?>"></script>
<script src="<?php echo base_url('assets/adminlte.min.js')?>"></script>
<script src="<?php echo base_url('assets/demo.js')?>"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>
<script>
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
      "url": '<?php echo urlApi; ?>deleteTamRango/'+data,
      "method": "get",
        "headers": {
          "Content-Type": "application/x-www-form-urlencoded",
          "Authorization": "Bearer "+localStorage.getItem('Token')
          }
      }
      $.ajax(settings).done(function (response) {
          var DatosJson = JSON.parse(JSON.stringify(response));
            Swal.fire({
                title: DatosJson.message,
                width: '650px',
                height:'45px'
          }).then(function() {
          let xtable = $('#TableTamRango').DataTable();
					xtable.ajax.reload( null, false);
        });
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
                    title: 'Su Session ha Expirado',
                    confirmButtonText: `Ok`,
                  })
                  window.location = '/homepantry20/index.php/index.php/index.php';
            }
        })
    }
  })
}
function ActualizarRegistro() {
  if ($("#FormTamRangoEdit").valid()) {
    var settings = {
          "async": true,
          "crossDomain": true,
          "url": '<?php echo urlApi; ?>updateTamRango',
          "method": "post",
          "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer "+localStorage.getItem('Token')
          },
          "data": {
            "Id_TamanoRango":$("#inputIdEditTamRango").val(),
            "Id_Categoria":$("#inputCategoriaEdit").val(),
            "TamanoRango":$("#inputTamRangoEdit").val(),
            "Abreviatura":$("#inputAbreviaturaEdit").val()
          }
      }
      $.ajax(settings).done(function (response) {
        let xtable = $('#TableTamRango').DataTable();
        xtable.ajax.reload( null, false);
        const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 5000,
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
                    var form = document.querySelector('#FormTamRangoEdit');
                    form.reset();
                  $('#modal-TamRangoEditar').modal('hide');
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
                    icon: 'info',
                    title: 'Su Session ha Expirado',
                    confirmButtonText: `Ok`,
                    })
                    var form = document.querySelector('#FormUsuariosEdit');
                    form.reset();
                    window.location = '/homepantry20/index.php/index.php/index.php';
              }
      })
  }
}
function cargarCategoriaEdit(idCategoria){
  var settings = {
    "url": '<?php echo urlApi; ?>getAllCategoria',
    "method": "get",
    "headers": {
       "Content-Type": "application/x-www-form-urlencoded",
       "Authorization": "Bearer "+localStorage.getItem('Token')
      }
    }
    $.ajax(settings).done(function (response) {
        let selectCategoriaEdit = $("#inputCategoriaEdit");
		    selectCategoriaEdit.find("option").remove();
		    for (var i=0; i<response.data.length; i++)
        {
          if (response.data[i].id_Categoria==idCategoria){
            selectCategoriaEdit.append("<option value=" + response.data[i].id_Categoria + " selected>"+response.data[i].id_Categoria+"-" + response.data[i].Categoria + "</option>");
          }else{
            selectCategoriaEdit.append("<option value=" + response.data[i].id_Categoria + ">"+response.data[i].id_Categoria+"-" + response.data[i].Categoria + "</option>");
          }
        }
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
                  title: 'Su Session ha Expirado',
                  confirmButtonText: `Ok`,
                })
                window.location = '/homepantry20/index.php/index.php/index.php';
          }
      })
}
function EditAction(data) {
  document.getElementById('FormTamRangoEdit').reset();
  var settings = {
    "url": '<?php echo urlApi; ?>getTamRangoId/'+data,
    "method": "get",
    "headers": {
       "Content-Type": "application/x-www-form-urlencoded",
       "Authorization": "Bearer "+localStorage.getItem('Token')
      }
    }
    $.ajax(settings).done(function (response) {
      $('#inputIdEditTamRango').val(response.data[0].Id_TamanoRango);
      cargarCategoriaEdit(response.data[0].Id_Categoria);
      $('#inputTamRangoEdit').val(response.data[0].TamanoRango);
      $('#inputAbreviaturaEdit').val(response.data[0].Abreviatura);
      $('#modal-TamRangoEditar').modal('show');
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
                  title: 'Su Session ha Expirado',
                  confirmButtonText: `Ok`,
                })
                window.location = '/homepantry20/index.php/index.php/index.php';
          }
      })
}
function VisualizarAction(data){
  var settings = {
    "url": '<?php echo urlApi; ?>getTamRangoId/'+data,
    "method": "get",
    "headers": {
       "Content-Type": "application/x-www-form-urlencoded",
       "Authorization": "Bearer "+localStorage.getItem('Token')
      }
    }
    $.ajax(settings).done(function (response) {
      $('#inputCodigoVer').val(response.data[0].Id_TamanoRango);
      $('#inputCategoriaVer').val(response.data[0].Categoria);
      $('#inputTamanoRango').val(response.data[0].TamanoRango);
      $('#inputAbreviaturaVer').val(response.data[0].Abreviatura);
      $('#modal-TamRangoVisualizar').modal('show');
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
                  title: 'Su Session ha Expirado',
                  confirmButtonText: `Ok`,
                })
                window.location = '/homepantry20/index.php/index.php/index.php';
          }
      })
}
function cargarCategoria(){
  var settings = {
    "url": '<?php echo urlApi; ?>getAllCategoria',
    "method": "get",
    "headers": {
       "Content-Type": "application/x-www-form-urlencoded",
       "Authorization": "Bearer "+localStorage.getItem('Token')
      }
    }
    $.ajax(settings).done(function (response) {
        let select = $("#inputCategoria");
		    select.find("option").remove();
		    select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        for (var i=0; i<response.data.length; i++)
        {
          select.append("<option value=" + response.data[i].id_Categoria + ">"+ response.data[i].id_Categoria+"-" + response.data[i].Categoria + "</option>");
        }
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
                  title: 'Su Session ha Expirado',
                  confirmButtonText: `Ok`,
                })
                window.location = '/homepantry20/index.php/index.php/index.php';
          }
      })
}
$("#botonenviar").click(function() {
  if ($("#FormTamRango").valid()) {
    var settings = {
          "async": true,
          "crossDomain": true,
          "url": '<?php echo urlApi; ?>addNewTamRango',
          "method": "POST",
          "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer "+localStorage.getItem('Token')
          },
          "data": {
            "Id_Categoria":$("#inputCategoria").val(),
            "TamanoRango":$("#inputTamRango").val(),
            "Abreviatura":$("#inputAbreviatura").val(),
            "activo":1
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
                    var form = document.querySelector('#FormTamRango');
                    form.reset();
            let xtable = $('#TableTamRango').DataTable();
            xtable.ajax.reload( null, false);
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
                    icon: 'info',
                    title: 'Su Session ha Expirado',
                    confirmButtonText: `Ok`,
                    })
                    var form = document.querySelector('#FormTamRango');
                    form.reset();
                    window.location = '/homepantry20/index.php/index.php/index.php';
              }
          })
  }
});
$(document).ready(function() {
  cargarCategoria();
  $('#FormTamRangoEdit').validate({
      rules: {
        inputCategoriaEdit: {
          required: true,
        },
        inputTamRangoEdit:{
          required: true,
          minlength: 5,
          maxlength: 50,
        },
        inputAbreviaturaEdit:{
          required: true,
          minlength: 3,
          maxlength: 5,
        },
      },
      messages: {
        inputCategoriaEdit: {
          required: "Por favor ingrese la categoria"
        },
        inputTamRangoEdit: {
          required: "Por favor ingrese el Tamaño Rango",
          minlength: "Su Tamaño Rango debe tener al menos 5 caracteres",
          maxlength: "Su Tamaño Rango debe tener al menos 50 caracteres"
        },
        inputAbreviaturaEdit: {
          required: "Por favor ingrese la abreviatura de la Segmento",
          minlength: "Su Abreviatura debe tener al menos 3 caracteres",
          maxlength: "Su Abreviatura debe tener al menos 5 caracteres"
        },
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
  });
  $('#FormTamRango').validate({
      rules: {
        inputCategoria: {
          required: true,
        },
        inputTamRango:{
          required: true,
          minlength: 5,
          maxlength: 50,
        },
        inputAbreviatura:{
          required: true,
          minlength: 3,
          maxlength: 5,
        },
      },
      messages: {
        inputCategoria: {
          required: "Por favor ingrese la categoria"
        },
        inputTamRango: {
          required: "Por favor ingrese el Tamaño Rango " ,
          minlength: "Su Tamaño Rango debe tener al menos 5 caracteres",
          maxlength: "Su Tamaño Rango debe tener al menos 50 caracteres"
        },
        inputAbreviatura: {
          required: "Por favor ingrese la abreviatura del Tamaño Rango" ,
          minlength: "Su abrevitura debe tener al menos 3 caracteres",
          maxlength: "Su abreviatura debe tener al menos 5 caracteres"
        },
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
  });
  document.getElementById('FormTamRango').reset();
  $('#TableTamRango').dataTable({
        "lengthMenu": [[30, 60, 150, -1], [30, 60, 150, "All"]],
        "bDestroy": true,
        "autoWidth": true,
        "dom":'<"wrapper"flitp><"center"B>',
        "responsive": true,
        "buttons": [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        "ajax":{
                "url": '<?php echo urlApi; ?>getAllTamRango',
                "type": "GET",
                "headers":{'Authorization':'bearer '+localStorage.getItem('Token')},
                "error": function(xhr, error, thrown) {
                  if(xhr.status === 403) {
                      var err = JSON.parse(xhr.responseText);
                      Swal.fire({
                      title: err.message,
                      width: '300px',
                      height:'100px'
                      })
                    }
                  if(xhr.status === 400) {
                    var err = JSON.parse(xhr.responseText);
                    Swal.fire({
                      title: err.message,
                      width: '250px',
                      height:'25px'
                      })
                      window.location.href='/retailscannig/Principal/logout';
                  }
              }
        },
        "language": {
          "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        },
        "aoColumns": [
              { mData: 'Categoria',className: "text-center" } ,
              { mData: 'TamanoRango',className: "text-center"},
              { mData: 'Abreviatura',className: "text-center"},
              { mData: 'Ind_Activo',className: "text-center"},
            ]  ,
            "columnDefs": [ {
            "targets": 4,
            "orderable": true,
            "data": 'Id_TamanoRango',
            "className": "text-center",
            "render": function ( data, type, row, meta ) {
            return '<a title="Eliminar" href="#"><img id="EliminarImg" src=<?php echo base_url('assets/iconos/delete.png')?> width="30" height="30"  onclick="deleteAction('+data+'); return false;"></a>&nbsp;&nbsp;<a title="Editar" href="#"><img src=<?php echo base_url('assets/iconos/editar.png')?> width="25" height="25" onclick="EditAction('+data+'); return false;"></a>&nbsp;&nbsp;<a title="Visualizar" href="#"><img src=<?php echo base_url('assets/iconos/ver.png')?> width="25" height="25" onclick="VisualizarAction('+data+'); return false;"></a>';}
        }],
      });
});
</script>
</body>
</html>