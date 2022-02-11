<?php $this->load->view('Layout/Header');?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="fas fa-users"></i>&nbsp; Mantenimiento de Usuarios Manufactureros:</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('Principal/dashboard') ?>">Inicio</a></li>
                    <li class="breadcrumb-item active"><a href="<?php echo base_url('Principal/logout') ?>">Salir</a>
                    </li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content Agregar Usuario -->
<!-- /Windows datatables Usuarios-->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Listados de Usuarios Manufactureros</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card">
                        <div class="card-body">
                            <table id="TableUsuariosManufactureros" class="table table-bordered table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Usuario</th>
                                        <th>Cliente</th>
                                        <th>Perfil</th>
                                        <th>Estatus</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Usuario</th>
                                        <th>Cliente</th>
                                        <th>Perfil</th>
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
<div class="modal fade" id="modal-UsuariosEditar">
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
                            <h3 class="card-title">Usuarios</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="FormUsuariosEdit">
                                <div class="form-group">
                                    <label for="inputIdEdit">Código:</label>
                                    <input type="text" name="inputIdEdit" id="inputIdEdit" class="form-control"
                                        readonly>
                                </div>
                                <div class="form-group">
                                    <label for="inputNombresEdit">Nombres:</label>
                                    <input type="text" name="inputNombresEdit" id="inputNombresEdit"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputApellidos">Apellidos:</label>
                                    <input type="text" name="inputApellidosEdit" id="inputApellidosEdit"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputEmailEdit">Email:</label>
                                    <input type="text" name="inputEmailEdit" id="inputEmailEdit" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputTelefonoEdit">Teléfonos:</label>
                                    <input type="text" name="inputTelefonoEdit" id="inputTelefonoEdit"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="ClaveEdit">Password:</label>
                                    <input type="password" name="ClaveEdit" id="ClaveEdit" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="ClaveConfirmacionEdit">Confirmación Password:</label>
                                    <input type="password" name="ClaveConfirmacionEdit" id="ClaveConfirmacionEdit"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputDireccionEdit">Direccion:</label>
                                    <textarea id="inputDireccionEdit" name="inputDireccionEdit" class="form-control"
                                        rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputNivelEdit">Nivel:</label>
                                    <select id="inputNivelEdit" name="inputNivelEdit" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputpaisEdit">Pais:</label>
                                    <select id="inputpaisEdit" name="inputpaisEdit" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputRetailEdit">Retail:</label>
                                    <select id="inputRetailEdit" name="inputRetailEdit" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12">
                                            <input type="button" onclick="ActualizarRegistro()" id="editUsuario"
                                                value="Guardar" class="btn btn-success float-right">
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
            <div class="modal-footer justify-content-between">
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- Windows Modal Visualizar Registros-->
<div class="modal fade" id="modal-UsuariosVisualizar">
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
                            <h3 class="card-title">Usuarios</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="NombreVer" class="form-group">
                                <label for="inputCodigoVer">Código:</label>
                                <input type="text" name="nombres" id="inputCodigoVer" class="form-control" readonly>
                            </div>

                            <div id="NombreVer" class="form-group">
                                <label for="inputNombresVer">Nombres:</label>
                                <input type="text" name="nombres" id="inputNombresVer" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="inputApellidosVer">Apellidos:</label>
                                <input type="text" name="Apellidos" id="inputApellidosVer" class="form-control"
                                    readonly>
                            </div>
                            <div class="form-group">
                                <label for="inputEmailVer">Email:</label>
                                <input type="text" name="email" id="inputEmailVer" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="inputTelefonoVer">Teléfonos:</label>
                                <input type="text" name="Telefonos" id="inputTelefonoVer" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="inputDireccionVer">Direccion:</label>
                                <textarea id="inputDireccionVer" name="DireccionEdit" class="form-control" rows="4"
                                    readonly></textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputNivelVer">Nivel:</label>
                                <input type="text" name="inputNivelVer" id="inputNivelVer" class="form-control"
                                    readonly>
                            </div>
                            <div class="form-group">
                                <label for="inputpaisVer">Pais:</label>
                                <input type="text" name="inputpaisVer" id="inputpaisVer" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="inputRetailVer">Retail:</label>
                                <input type="text" name="inputRetailVer" id="inputRetailVer" class="form-control"
                                    readonly>
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
<?php $this->load->view('Layout/Footer');?>
<script>
function Activar(data) {
    Swal.fire({
        title: '¿Estas seguro de Activar el Usuario?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: '¡Sí, Activalo!'
    }).then((result) => {
        if (result.isConfirmed) {
            var settings = {
                "url": '<?php echo urlApi; ?>UsManufacturerosActivar/' + data,
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
                    width: '250px',
                    height: '25px'
                }).then(function() {
                    let xtable = $('#TableUsuariosManufactureros').DataTable();
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
function Inactiva(data) {
    Swal.fire({
        title: '¿Estas seguro de Inactivar el Usuario?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: '¡Sí, Inactivalo!'
    }).then((result) => {
        if (result.isConfirmed) {
            var settings = {
                "url": '<?php echo urlApi; ?>UsManufacturerosInactivar/' + data,
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
                    width: '250px',
                    height: '25px'
                }).then(function() {
                    let xtable = $('#TableUsuariosManufactureros').DataTable();
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
$(document).ready(function() {
    $('#TableUsuariosManufactureros').dataTable({
        "lengthMenu": [
            [10, 20, 50, -1],
            [10, 20, 50, "All"]
        ],
        "bDestroy": true,
        "autoWidth": true,
        "dom": '<"wrapper"flitp><"center"B>',
        "responsive": true,
        "buttons": [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        "ajax": {
            "url": '<?php echo urlApi; ?>getAllUsManufactureros',
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
                mData: 'nombres',
                className: "text-center"
            },
            {
                mData: 'apellidos',
                className: "text-center"
            },
            {
                mData: 'email',
                className: "text-center"
            },
            {
                mData: 'Cliente',
                className: "text-center"
            },
            {
                mData: 'nivel',
                className: "text-center"
            },
            {
                mData: 'Estatus',
                className: "text-center"
            },
        ],
        "columnDefs": [{
            "targets": 6,
            "orderable": true,
            "data": 'idUser',
            "className": "text-center",
            "render": function(data, type, row, meta) {
                return '<a title="Activar" href="#" onclick="Activar(' + data + '); return false;"><i class="fas fa-check"></i></a>&nbsp;&nbsp;&nbsp;<a title="Desactivar" href="#" onclick="Inactiva(' + data + '); return false;"><i class="fas fa-times"></i></a>';
            }
        }],
    });
});
</script>