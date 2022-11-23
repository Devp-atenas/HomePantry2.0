<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Mantenimiento de Usuarios:</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('Principal/dashboard') ?>">Home</a></li>
                    <li class="breadcrumb-item active"><a href="<?php echo base_url('Principal/logout') ?>">Salir</a>
                    </li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content Agregar Usuario -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Usuarios</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body" style="display: none;">
                    <form id="FormUsuarios">
                        <div class="form-group">
                            <label for="inputNombres">Nombres:</label>
                            <input type="text" name="inputNombres" id="inputNombres" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputApellidos">Apellidos:</label>
                            <input type="text" name="inputApellidos" id="inputApellidos" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">Email:</label>
                            <input type="email" name="inputEmail" id="inputEmail" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputTelefono">Teléfonos:</label>
                            <input type="text" name="inputTelefono" id="inputTelefono" class="form-control"
                                placeholder="+58-1111-1111111" />
                        </div>
                        <div class="form-group">
                            <label for="Clave">Password:</label>
                            <input type="password" name="Clave" id="Clave" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="ClaveConfirmacion">Confirmación Password:</label>
                            <input type="password" name="ClaveConfirmacion" id="ClaveConfirmacion" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputDireccion">Direccion:</label>
                            <textarea id="inputDireccion" name="inputDireccion" class="form-control"
                                rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputNivel">Nivel:</label>
                            <select id="inputNivel" name="inputNivel" class="form-control">
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputpais">Pais:</label>
                            <select id="inputpais" name="inputpais" class="form-control">
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputRetail">Retail:</label>
                            <select id="inputRetail" name="inputRetail" class="form-control">
                            </select>
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
<!-- /Windows datatables Usuarios-->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Listados de Usuarios</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card">
                        <div class="card-body">
                            <table id="TableUsuarios" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Usuario</th>
                                        <th>Retail</th>
                                        <th>Perfil</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Usuario</th>
                                        <th>Retail</th>
                                        <th>Perfil</th>
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

</div> <!-- / class="content-wrapper"> -->



</div> <!-- / class="wrapper"> -->
<!-- /Windows Modal Visualizar Registros-->
<!-- Content Wrapper. Contains page content -->
<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2021 </strong> ATENAS GRUPO CONSULTOR, C.A. Todos los derechos reservados.
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

</body>

</html>

<script>
function cargarNivelesEdit(idNivel) {
    var settings = {
        "url": '<?php echo urlApi; ?>getNiveles',
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let selectEdit = $("#inputNivelEdit");
        selectEdit.find("option").remove();
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].idNivel == idNivel) {
                selectEdit.append("<option value=" + response.data[i].idNivel + " selected>" + response
                    .data[i].nivel + "</option>");
            } else {
                selectEdit.append("<option value=" + response.data[i].idNivel + ">" + response.data[i]
                    .nivel + "</option>");
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

function cargarNiveles() {
    var settings = {
        "url": '<?php echo urlApi; ?>getNiveles',
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let select = $("#inputNivel");
        select.find("option").remove();
        select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        for (var i = 0; i < response.data.length; i++) {
            select.append("<option value=" + response.data[i].idNivel + ">" + response.data[i].nivel +
                "</option>");
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

function cargarPaisEdit(idPais) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllPaises',
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let selectPaisEdit = $("#inputpaisEdit");
        selectPaisEdit.find("option").remove();
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].idPais == idPais) {
                selectPaisEdit.append("<option value=" + response.data[i].Id_Pais + " selected>" + response
                    .data[i].Pais + "</option>");
            } else {
                selectPaisEdit.append("<option value=" + response.data[i].Id_Pais + ">" + response.data[i]
                    .Pais + "</option>");
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

function cargarPais() {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllPaises',
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let select = $("#inputpais");
        select.find("option").remove();
        select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        for (var i = 0; i < response.data.length; i++) {
            select.append("<option value=" + response.data[i].Id_Pais + ">" + response.data[i].Pais +
                "</option>");
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

function cargarRetailEdit(idRetail) {
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
            if (response.data[i].idCliente == idRetail) {
                selectRetailEdit.append("<option value=" + response.data[i].id_retail + " selected>" +
                    response.data[i].retail + "</option>");
            } else {
                selectRetailEdit.append("<option value=" + response.data[i].id_retail + ">" + response.data[
                    i].retail + "</option>");
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
        let select = $("#inputRetail");
        select.find("option").remove();
        select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        for (var i = 0; i < response.data.length; i++) {
            select.append("<option value=" + response.data[i].id_retail + ">" + response.data[i].retail +
                "</option>");
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
                "url": '<?php echo urlApi; ?>deleteDataUser/' + data,
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
                    let xtable = $('#TableUsuarios').DataTable();
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

function EditAction(data) {
    var settings = {
        "url": '<?php echo urlApi; ?>getUserID/' + data,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        $('#inputIdEdit').val(response.data[0].idUser);
        $('#inputNombresEdit').val(response.data[0].nombres);
        $('#inputApellidosEdit').val(response.data[0].apellidos);
        $('#inputApellidosEdit').val(response.data[0].apellidos);
        $('#inputEmailEdit').val(response.data[0].email);
        $('#inputTelefonoEdit').val(response.data[0].telefono);
        $('#ClaveEdit').val(response.data[0].clave);
        $('#ClaveConfirmacionEdit').val(response.data[0].clave);
        $('#inputDireccionEdit').val(response.data[0].direccion);
        cargarNivelesEdit(response.data[0].idNivel);
        cargarPaisEdit(response.data[0].idPais);
        cargarRetailEdit(response.data[0].idCliente);
        $('#modal-UsuariosEditar').modal('show');
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

function ActualizarRegistro() {
    if ($("#FormUsuariosEdit").valid()) {
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": '<?php echo urlApi; ?>updateDataUser',
            "method": "post",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "data": {
                "idUser": $("#inputIdEdit").val(),
                "email": $("#inputEmailEdit").val(),
                "clave": $("#ClaveEdit").val(),
                "nombres": $("#inputNombresEdit").val(),
                "apellidos": $("#inputApellidosEdit").val(),
                "telefono": $("#inputTelefonoEdit").val(),
                "direccion": $("#inputDireccionEdit").val(),
                "idNivel": $("#inputNivelEdit").val(),
                "idPais": $("#inputpaisEdit").val(),
                "activo": 1,
                "idCliente": $("#inputRetailEdit").val()
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
            var form = document.querySelector('#FormUsuariosEdit');
            form.reset();
            $('#modal-UsuariosEditar').modal('hide');
            let xtable = $('#TableUsuarios').DataTable();
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
                var form = document.querySelector('#FormUsuariosEdit');
                form.reset();
                window.location = '/retailscannig/index.php';
            }
        })
    }
}

function VisualizarAction(data) {
    var settings = {
        "url": '<?php echo urlApi; ?>getUserID/' + data,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        $('#inputCodigoVer').val(response.data[0].idUser);
        $('#inputNombresVer').val(response.data[0].nombres);
        $('#inputApellidosVer').val(response.data[0].apellidos);
        $('#inputEmailVer').val(response.data[0].email);
        $('#inputTelefonoVer').val(response.data[0].telefono);
        $('#inputDireccionVer').val(response.data[0].direccion);
        $('#inputNivelVer').val(response.data[0].nivel);
        $('#inputpaisVer').val(response.data[0].pais);
        $('#inputRetailVer').val(response.data[0].Cliente);
        $('#modal-UsuariosVisualizar').modal('show');
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
    document.getElementById('FormUsuarios').reset();
    document.getElementById('FormUsuariosEdit').reset();
    //Validacion del Formularios de Nuevo Usuarios
    $('#FormUsuarios').validate({
        rules: {
            inputNombres: {
                required: true,
            },
            inputApellidos: {
                required: true,
            },
            inputEmail: {
                required: true,
                email: true
            },
            inputTelefono: {
                required: true,
                minlength: 5
            },
            Clave: {
                required: true,
                minlength: 10,
                maxlength: 15,
            },
            ClaveConfirmacion: {
                required: true,
                minlength: 10,
                maxlength: 15,
                equalTo: "#Clave"
            },
            inputDireccion: {
                required: true,
                minlength: 10
            },
            inputNivel: {
                required: true
            },
            inputpais: {
                required: true
            },
            inputRetail: {
                required: true
            },
        },
        messages: {
            inputNombres: {
                required: "Por favor ingrese los nombres del usuario",
                minlength: "Su nombre debe tener al menos 5 caracteres"
            },
            inputApellidos: {
                required: "Por favor ingrese los apellidos del usuario",
                minlength: "Su apellidos debe tener al menos 5 caracteres"
            },
            inputEmail: {
                required: "Ingrese una dirección de correo electrónico",
                email: "Ingrese una dirección de correo electrónico válida"
            },
            inputTelefono: {
                required: "Ingrese el numero telefono del usuario",
                inputTelefono: 'customphone'
            },
            Clave: {
                required: "Por favor ingrese una contraseña",
                Clave: 'pwcheck'
            },
            ClaveConfirmacion: {
                required: "Por favor ingrese la confirmación contraseña",
                Clave: 'pwcheck',
                equalTo: "Por favor, introduzca el mismo valor de contraseña en la confirmación de la misma."
            },
            inputDireccion: {
                required: "Por favor ingrese la dirección del usuario",
                minlength: "Su dirección debe tener al menos 10 caracteres"
            },
            inputNivel: {
                required: "Por favor ingrese el nivel del usuario"
            },
            inputNivel: {
                required: "Por favor ingrese el nivel del usuario"
            },
            inputpais: {
                required: "Por favor ingrese el país del usuario"
            },
            inputRetail: {
                required: "Por favor ingrese el retail del usuario"
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
    //Boton de Guardar Acutualizar Usuarios
    $('#FormUsuariosEdit').validate({
        rules: {
            inputNombresEdit: {
                required: true,
            },
            inputApellidosEdit: {
                required: true,
            },
            inputEmailEdit: {
                required: true,
                email: true
            },
            inputTelefonoEdit: {
                required: true,
                minlength: 5
            },
            ClaveEdit: {
                required: true,
                minlength: 10,
            },
            ClaveConfirmacionEdit: {
                required: true,
                minlength: 10,
                equalTo: "#ClaveEdit"
            },
            inputDireccionEdit: {
                required: true,
                minlength: 10
            },
            inputNivelEdit: {
                required: true
            },
            inputpaisEdit: {
                required: true
            },
            inputRetailEdit: {
                required: true
            },
        },
        messages: {
            inputNombresEdit: {
                required: "Por favor ingrese los nombres del usuario",
                minlength: "Su nombre debe tener al menos 5 caracteres"
            },
            inputApellidosEdit: {
                required: "Por favor ingrese los apellidos del usuario",
                minlength: "Su apellidos debe tener al menos 5 caracteres"
            },
            inputEmailEdit: {
                required: "Ingrese una dirección de correo electrónico",
                email: "Ingrese una dirección de correo electrónico válida"
            },
            inputTelefonoEdit: {
                required: "Ingrese el numero telefono del usuario",
                inputTelefono: 'customphone'
            },
            ClaveEdit: {
                required: "Por favor ingrese una contraseña",
                Clave: 'pwcheck'
            },
            ClaveConfirmacionEdit: {
                required: "Por favor ingrese la confirmación contraseña",
                Clave: 'pwcheck',
                equalTo: "Por favor, introduzca el mismo valor de contraseña en la confirmación de la misma."
            },
            inputDireccionEdit: {
                required: "Por favor ingrese la dirección del usuario",
                minlength: "Su dirección debe tener al menos 10 caracteres"
            },
            inputNivelEdit: {
                required: "Por favor ingrese el nivel del usuario"
            },
            inputpaisEdit: {
                required: "Por favor ingrese el país del usuario"
            },
            inputRetailEdit: {
                required: "Por favor ingrese el retail del usuario"
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
    //Boton de Guardar Nuevo Usuarios
    $("#botonenviar").click(function() {
        if ($("#FormUsuarios").valid()) {
            var settings = {
                "async": true,
                "crossDomain": true,
                "url": '<?php echo urlApi; ?>addNewDataUser',
                "method": "POST",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
                "data": {
                    "email": $("#inputEmail").val(),
                    "clave": $("#Clave").val(),
                    "nombres": $("#inputNombres").val(),
                    "apellidos": $("#inputApellidos").val(),
                    "telefono": $("#inputTelefono").val(),
                    "direccion": $("#inputDireccion").val(),
                    "idNivel": $("#inputNivel").val(),
                    "idPais": $("#inputpais").val(),
                    "activo": 1,
                    "idCliente": $("#inputRetail").val()
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
                var form = document.querySelector('#FormUsuarios');
                form.reset();
                let xtable = $('#TableUsuarios').DataTable();
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
                            toast.addEventListener('mouseleave', Swal
                                .resumeTimer)
                        }
                    })
                    Toast.fire({
                        icon: 'info',
                        title: 'Su Session ha Expirado',
                        confirmButtonText: `Ok`,
                    })
                    var form = document.querySelector('#FormUsuarios');
                    form.reset();
                    window.location = '/retailscannig/index.php';
                }
            })
        }
    });
    cargarNiveles();
    cargarPais();
    cargarRetail();
    $('#TableUsuarios').dataTable({
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
            "url": '<?php echo urlApi; ?>getAllUsers',
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
                mData: 'Nombres',
                className: "text-center"
            },
            {
                mData: 'Apellidos',
                className: "text-center"
            },
            {
                mData: 'email',
                className: "text-center"
            },
            {
                mData: 'Retail',
                className: "text-center"
            },
            {
                mData: 'nivel',
                className: "text-center"
            },
        ],
        "columnDefs": [{
            "targets": 5,
            "orderable": true,
            "data": 'idUser',
            "className": "text-center",
            "render": function(data, type, row, meta) {
                return '<a title="Eliminar" href="#"><img id="EliminarImg" src=<?php echo base_url('assets/iconos/delete.png') ?> width="30" height="30"  onclick="deleteAction(' +
                    data +
                    '); return false;"></a>&nbsp;&nbsp;<a title="Editar" href="#"><img src=<?php echo base_url('assets/iconos/editar.png') ?> width="25" height="25" onclick="EditAction(' +
                    data +
                    '); return false;"></a>&nbsp;&nbsp;<a title="Visualizar" href="#"><img src=<?php echo base_url('assets/iconos/ver.png') ?> width="25" height="25" onclick="VisualizarAction(' +
                    data + '); return false;"></a>';
            }
        }],
    });
});
</script>