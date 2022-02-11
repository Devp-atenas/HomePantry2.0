<!-- Content Header (Page header) -->
<?php $this->load->view('Layout/Header');?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="fas fa-map-signs"></i>&nbsp;Mantenimiento de Municipio:</h1>
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
<!-- Main content Agregar Municipio -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Municipio</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body" style="display: none;">
                    <form id="FormMunicipio">
                        <div class="form-group">
                            <label for="inputPais">Pais:</label>
                            <select id="inputPais" name="inputPais" class="form-control">
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputEstado">Estado:</label>
                            <select id="inputEstado" name="inputEstado" class="form-control">
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputMunicipio">Municipio:</label>
                            <input type="text" name="inputMunicipio" id="inputMunicipio" class="form-control">
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
<!-- /Windows datatables Municipio-->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Listados de Municipio</h3>
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
                            <table id="TableMunicipio" class="table table-bordered table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>Pais</th>
                                        <th>Estado</th>
                                        <th>Municipio</th>
                                        <th>Activo</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tfoot>
                                    <tr>
                                        <th>Pais</th>
                                        <th>Estado</th>
                                        <th>Municipio</th>
                                        <th>Activo</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Windows Modal Editar Registros-->
<div class="modal fade" id="modal-MunicipioEditar">
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
                            <h3 class="card-title">Municipio</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="FormMunicipioEdit">
                                <div class="form-group">
                                    <label for="inputIdEditMunicipio">Código:</label>
                                    <input type="text" name="inputIdEditMunicipio" id="inputIdEditMunicipio"
                                        class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="inputPaisEdit">Pais:</label>
                                    <select id="inputPaisEdit" name="inputPaisEdit" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputEstadoEdit">Estado:</label>
                                    <select id="inputEstadoEdit" name="inputEstadoEdit" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputMunicipioEdit">Municipio:</label>
                                    <input type="text" name="inputMunicipioEdit" id="inputMunicipioEdit"
                                        class="form-control">
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

<!-- /Windows Modal Editar Registros-->
<!-- Windows Modal Visualizar Registros-->
<div class="modal fade" id="modal-MunicipioVisualizar">
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
                            <h3 class="card-title">Municipio</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="NombreVer" class="form-group">
                                <label for="inputCodigoVer">Código:</label>
                                <input type="text" name="Codigo" id="inputCodigoVer" class="form-control" readonly>
                            </div>
                            <div id="NombreVer" class="form-group">
                                <label for="inputMunicipioVer">Pais:</label>
                                <input type="text" name="Municipio" id="inputPaisVer" class="form-control" readonly>
                            </div>
                            <div id="NombreVer" class="form-group">
                                <label for="inputEstadoVer">Estado:</label>
                                <input type="text" name="Municipio" id="inputEstadoVer" class="form-control" readonly>
                            </div>
                            <div id="NombreVer" class="form-group">
                                <label for="inputMunicipio">Municipio:</label>
                                <input type="text" name="Municipio" id="inputMunicipioVer" class="form-control"
                                    readonly>
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

<!-- /Windows Modal Visualizar Registros-->
<?php $this->load->view('Layout/Footer');?>

<script>
$('#inputPais').change(function() {
    var IdPais = $(this).val();
    var settings = {
        "url": '<?php echo urlApi; ?>getEstadoIdPais/' + IdPais,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let select = $("#inputEstado");
        select.find("option").remove();
        select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        for (var i = 0; i < response.data.length; i++) {
            select.append("<option value=" + response.data[i].Id_Estado + ">" + response.data[i]
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
});

$('#inputPaisEdit').change(function() {
    var IdPais = $(this).val();
    var settings = {
        "url": '<?php echo urlApi; ?>getEstadoIdPais/' + IdPais,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let select = $("#inputEstadoEdit");
        select.find("option").remove();
        select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        for (var i = 0; i < response.data.length; i++) {
            select.append("<option value=" + response.data[i].Id_Estado + ">" + response.data[i]
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
});

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
                "url": '<?php echo urlApi; ?>deleteMunicipio/' + data,
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
                    width: '550px',
                    height: '35px'
                }).then(function() {
                    let xtable = $('#TableMunicipio').DataTable();
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

function ActualizarRegistro() {
    if ($("#FormMunicipioEdit").valid()) {
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": '<?php echo urlApi; ?>updateMunicipio',
            "method": "post",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "data": {
                "idMunicipio": $("#inputIdEditMunicipio").val(),
                "Id_Estado": $("#inputEstadoEdit").val(),
                "Municipio": $("#inputMunicipioEdit").val()
            }
        }
        $.ajax(settings).done(function(response) {
            let xtable = $('#TableMunicipio').DataTable();
            xtable.ajax.reload(null, false);
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 5000,
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
            var form = document.querySelector('#FormMunicipioEdit');
            form.reset();
            $('#modal-MunicipioEditar').modal('hide');
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

function cargarEstadoEdit(idPais, idEstado) {
    var settings = {
        "url": '<?php echo urlApi; ?>getEstadoIdPais/' + idPais,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let selectEstadoEdit = $("#inputEstadoEdit");
        selectEstadoEdit.find("option").remove();
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].Id_Estado == idEstado) {
                selectEstadoEdit.append("<option value=" + response.data[i].Id_Estado + " selected>" +
                    response.data[i].Id_Estado + "-" + response.data[i].Estado + "</option>");
            } else {
                selectEstadoEdit.append("<option value=" + response.data[i].Id_Estado + ">" + response.data[
                    i].Id_Estado + "-" + response.data[i].Estado + "</option>");
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
        let selectPaisEdit = $("#inputPaisEdit");
        selectPaisEdit.find("option").remove();
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].Id_Pais == idPais) {
                selectPaisEdit.append("<option value=" + response.data[i].Id_Pais + " selected>" + response
                    .data[i].Id_Pais + "-" + response.data[i].Pais + "</option>");
            } else {
                selectPaisEdit.append("<option value=" + response.data[i].Id_Pais + ">" + response.data[i]
                    .Id_Pais + "-" + response.data[i].Pais + "</option>");
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

function EditAction(data) {
    document.getElementById('FormMunicipioEdit').reset();
    var settings = {
        "url": '<?php echo urlApi; ?>getMunicipioId/' + data,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        console.log(response.data[0].Id_Pais);
        $('#inputIdEditMunicipio').val(response.data[0].Id_Municipio);
        cargarPaisEdit(response.data[0].Id_Pais);
        cargarEstadoEdit(response.data[0].Id_Pais, response.data[0].Id_Estado);
        $('#inputEstadoEdit').val(response.data[0].Estado);
        $('#inputMunicipioEdit').val(response.data[0].Municipio);
        $('#modal-MunicipioEditar').modal('show');
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

function VisualizarAction(data) {
    var settings = {
        "url": '<?php echo urlApi; ?>getMunicipioId/' + data,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        $('#inputCodigoVer').val(response.data[0].Id_Municipio);
        $('#inputPaisVer').val(response.data[0].Pais);
        $('#inputEstadoVer').val(response.data[0].Estado);
        $('#inputMunicipioVer').val(response.data[0].Municipio);
        $('#modal-MunicipioVisualizar').modal('show');
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
        let select = $("#inputPais");
        select.find("option").remove();
        select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        for (var i = 0; i < response.data.length; i++) {
            select.append("<option value=" + response.data[i].Id_Pais + ">" + response.data[i].Id_Pais +
                "-" + response.data[i].Pais + "</option>");
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
$("#botonenviar").click(function() {
    if ($("#FormMunicipio").valid()) {
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": '<?php echo urlApi; ?>addNewMunicipio',
            "method": "POST",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "data": {
                "pais": $("#inputPais").val(),
                "estado": $("#inputEstado").val(),
                "municipio": $("#inputMunicipio").val(),
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
            var form = document.querySelector('#FormMunicipio');
            form.reset();
            let xtable = $('#TableMunicipio').DataTable();
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
                var form = document.querySelector('#FormMunicipio');
                form.reset();
                window.location = '/retailscannig/index.php';
            }
        })
    }
});
$(document).ready(function() {
    cargarPais();
    $('#FormMunicipioEdit').validate({
        rules: {
            inputPaisEdit: {
                required: true,
            },
            inputEstadoEdit: {
                required: true,
            },
            inputMunicipioEdit: {
                required: true,
            },
        },
        messages: {
            inputPaisEdit: {
                required: "Por favor ingrese el Pais"
            },
            inputEstadoEdit: {
                required: "Por favor ingrese el Estado"
            },
            inputMunicipioEdit: {
                required: "Por favor ingrese el nombre del Municipio",
                minlength: "El Municipio debe tener al menos 5 caracteres",
                maxlength: "El Municipio debe tener al menos 20 caracteres"
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
    $('#FormMunicipio').validate({
        rules: {
            inputPais: {
                required: true,
            },
            inputEstado: {
                required: true,
            },
            inputMunicipio: {
                required: true,
                minlength: 5,
                maxlength: 20,
            },
        },
        messages: {
            inputPais: {
                required: "Por favor ingrese el Pais",
            },
            inputEstado: {
                required: "Por favor ingrese el Estado",
            },
            inputMunicipio: {
                required: "Por favor ingrese el nombre del Municipio",
                minlength: "El nombre del Municipio debe tener al menos 5 caracteres",
                maxlength: "El nombre del Municipio debe tener al maximo 20 caracteres"
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
    document.getElementById('FormMunicipio').reset();
    $('#TableMunicipio').dataTable({
        "lengthMenu": [
            [10, 25, 50, 100, -1],
            [10, 25, 50, 100, "All"]
        ],
        "bDestroy": true,
        "autoWidth": true,
        "dom": '<"wrapper"flitp><"center"B>',
        "responsive": true,
        "buttons": [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        "ajax": {
            "url": '<?php echo urlApi; ?>getMunicipio',
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
                mData: 'Pais',
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
                mData: 'Ind_Activo',
                className: "text-center"
            },
        ],
        "columnDefs": [{
            "targets": 4,
            "orderable": true,
            "data": 'Id_Municipio',
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