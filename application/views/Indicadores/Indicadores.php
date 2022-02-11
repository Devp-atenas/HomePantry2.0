<?php $this->load->view('Layout/Header');?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="fas fa-tachometer-alt"></i>&nbsp;Mantenimiento de Indicadores:</h1>
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
<!-- Main content Agregar Indicadores -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Indicadores</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body" style="display: none;">
                    <form id="FormIndicadores">
                        <div class="form-group">
                            <label for="inputIndicador">Indicador:</label>
                            <input id="inputIndicador" name="inputIndicador" class="form-control">
                            </input>
                        </div>
                        <div class="form-group">
                            <label for="inputDefinicion">Definición:</label>
                            <input id="inputDefinicion" name="inputDefinicion" class="form-control">
                            </input>
                        </div>
                        <div class="form-group">
                            <label for="inputAbreviatura">Abreviatura:</label>
                            <input id="inputAbreviatura" name="inputAbreviatura" class="form-control">
                            </input>
                        </div>
                        <div class="form-group">
                            <label for="inputUnidadMedida">Unidad Medida:</label>
                            <input name="inputUnidadMedida" id="inputUnidadMedida" class="form-control">
                            </input>
                        </div>
                        <div class="form-group">
                            <label for="Ind_mensual">Indicador Mensual:</label>
                            <input type="checkbox" id="Ind_mensual" name="Ind_mensual">
                        </div>
                        <div class="form-group">
                            <label for="Ind_semanal">Indicador Semanal:</label>
                            <input type="checkbox" id="Ind_semanal" name="Ind_semanal">
                        </div>
                        <div class="form-group">
                            <label for="Ind_Atenas">Indicador Atenas:</label>
                            <input type="checkbox" id="Ind_Atenas" name="Ind_Atenas">
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
                </form>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</section>
<!-- /Windows datatables Indicadores-->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Listados de Indicadores</h3>
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
                            <table id="TableIndicadores" class="table table-bordered table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>Indicador</th>
                                        <th>Definición</th>
                                        <th>Abreviatura</th>
                                        <th>Unidad Medida</th>
                                        <th>Indicador Mensual</th>
                                        <th>Indicador Semanal</th>
                                        <th>Indicador Atenas</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tfoot>
                                    <tr>
                                        <th>Indicador</th>
                                        <th>Definición</th>
                                        <th>Abreviatura</th>
                                        <th>Unidad Medida</th>
                                        <th>Indicador Mensual</th>
                                        <th>Indicador Semanal</th>
                                        <th>Indicador Atenas</th>
                                        <th></th>
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
<div class="modal fade" id="modal-IndicadoresEditar">
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
                            <h3 class="card-title">Indicador</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="FormIndicadorEdit">
                                <div class="form-group">
                                    <label for="inputIdEditCodigo">Codigo:</label>
                                    <input type="text" name="inputIdEditCodigo" id="inputIdEditCodigo"
                                        class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="inputIdEditIndicador">Indicador:</label>
                                    <input type="text" name="inputIdEditIndicador" id="inputIdEditIndicador"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputDefiniciónEdit">Definición:</label>
                                    <input id="inputDefiniciónEdit" name="inputDefiniciónEdit" class="form-control">
                                    </input>
                                </div>
                                <div class="form-group">
                                    <label for="inputAbreviaturaEdit">Abreviatura:</label>
                                    <input type="text" name="inputAbreviaturaEdit" id="inputAbreviaturaEdit"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputUnidadMedidaEdit">Unidad Medida:</label>
                                    <input type="text" name="inputUnidadMedidaEdit" id="inputUnidadMedidaEdit"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Ind_semanalEdit">Indicador Semanal:</label>
                                    <input type="checkbox" id="Ind_semanalEdit" name="Ind_semanalEdit">
                                </div>
                                <div class="form-group">
                                    <label for="Ind_mensualEdit">Indicador Mensual:</label>
                                    <input type="checkbox" id="Ind_mensualEdit" name="Ind_mensualEdit">
                                </div>
                                <div class="form-group">
                                    <label for="Ind_atenasEdit">Indicador Atenas:</label>
                                    <input type="checkbox" id="Ind_atenasEdit" name="Ind_atenasEdit">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12">
                                            <input type="button" onclick="ActualizarRegistro()" id="editIndicador"
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

<!-- /Windows Modal Editar Registros-->
<!-- Windows Modal Visualizar Registros-->
<div class="modal fade" id="modal-IndicadoresVisualizar">
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
                            <h3 class="card-title">Indicador</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="NombreVer" class="form-group">
                                <label for="inputIndicadorVer">Indicador:</label>
                                <input type="text" name="inputIndicadorVer" id="inputIndicadorVer" class="form-control"
                                    readonly>
                            </div>
                            <div id="NombreVer" class="form-group">
                                <label for="inputDefinicionVer">Definición:</label>
                                <input type="text" name="inputDefinicionVer" id="inputDefinicionVer"
                                    class="form-control" readonly>
                            </div>
                            <div id="NombreVer" class="form-group">
                                <label for="inputAbreviaturaVer">Abreviatura:</label>
                                <input type="text" name="Abreviatura" id="inputAbreviaturaVer" class="form-control"
                                    readonly>
                            </div>
                            <div id="NombreVer" class="form-group">
                                <label for="inputUnidadMedidaVer">Unidad Medida:</label>
                                <input type="text" name="inputUnidadMedidaVer" id="inputUnidadMedidaVer"
                                    class="form-control" readonly>
                            </div>
                            <div id="NombreVer" class="form-group">
                                <label for="inputIndicadorSemanal">Indicador Semanal:</label>
                                <input type="text" name="inputIndicadorSemanal" id="inputIndicadorSemanal"
                                    class="form-control" readonly>
                            </div>
                            <div id="NombreVer" class="form-group">
                                <label for="inputIndicadorMensual">Indicador Mensual:</label>
                                <input type="text" name="inputIndicadorMensual" id="inputIndicadorMensual"
                                    class="form-control" readonly>
                            </div>
                            <div id="NombreVer" class="form-group">
                                <label for="inputIndicadorAtenas">Indicador Atenas:</label>
                                <input type="text" name="inputIndicadorAtenas" id="inputIndicadorAtenas"
                                    class="form-control" readonly>
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

<!-- Content Wrapper. Contains page content -->
<?php $this->load->view('Layout/Footer');?>

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
                "url": '<?php echo urlApi; ?>deleteIndicador/' + data,
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
                    height: '25px'
                }).then(function() {
                    let xtable = $('#TableIndicadores').DataTable();
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
    var Ind_mensual = 0;
    var Ind_semanal = 0;
    var Ind_Atenas = 0;
    if ($("input[name='Ind_mensualEdit']:checked").val()) {
        var Ind_mensual = 1;
    }
    if ($("input[name='Ind_semanalEdit']:checked").val()) {
        var Ind_semanal = 1;
    }
    if ($("input[name='Ind_atenasEdit']:checked").val()) {
        var Ind_Atenas = 1;
    }
    if ($("#FormIndicadorEdit").valid()) {
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": '<?php echo urlApi; ?>UpdateIndicador',
            "method": "post",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "data": {
                "Id_Indicador": $("#inputIdEditCodigo").val(),
                "Indicador": $("#inputIdEditIndicador").val(),
                "Definicion": $("#inputDefiniciónEdit").val(),
                "Abreviatura": $("#inputAbreviaturaEdit").val(),
                "UnidadMedida": $("#inputUnidadMedidaEdit").val(),
                "Ind_Sem": Ind_semanal,
                "Ind_Men": Ind_mensual,
                "Ind_Atenas": Ind_Atenas
            }
        }
        $.ajax(settings).done(function(response) {
            let xtable = $('#TableIndicadores').DataTable();
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
            var form = document.querySelector('#FormIndicadorEdit');
            form.reset();
            $('#modal-IndicadoresEditar').modal('hide');
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
                var form = document.querySelector('#FormIndicadorEdit');
                form.reset();
                window.location = '/retailscannig/index.php';
            }
        })
    }
}

function EditAction(data) {
    document.getElementById('FormIndicadorEdit').reset();
    var settings = {
        "url": '<?php echo urlApi; ?>getIndicador/' + data,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        $('#inputIdEditCodigo').val(response.data[0].Id_Indicador);
        $('#inputIdEditIndicador').val(response.data[0].Indicador);
        $('#inputDefiniciónEdit').val(response.data[0].Definicion);
        $('#inputAbreviaturaEdit').val(response.data[0].Abreviatura);
        $('#inputUnidadMedidaEdit').val(response.data[0].UnidadMedida);
        if (response.data[0].Ind_Sem == 'Si') {
            document.getElementById("Ind_semanalEdit").checked = true;
        } else {
            document.getElementById("Ind_semanalEdit").checked = false;
        }
        if (response.data[0].Ind_Men == 'Si') {
            document.getElementById("Ind_mensualEdit").checked = true;
        } else {
            document.getElementById("Ind_mensualEdit").checked = false;
        }
        if (response.data[0].Ind_Atenas == 'Si') {
            document.getElementById("Ind_atenasEdit").checked = true;
        } else {
            document.getElementById("Ind_atenasEdit").checked = false;
        }
        $('#modal-IndicadoresEditar').modal('show');
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
        "url": '<?php echo urlApi; ?>getIndicador/' + data,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        $('#inputIndicadorVer').val(response.data[0].Indicador);
        $('#inputDefinicionVer').val(response.data[0].Definicion);
        $('#inputAbreviaturaVer').val(response.data[0].Abreviatura);
        $('#inputUnidadMedidaVer').val(response.data[0].UnidadMedida);
        $('#inputIndicadorSemanal').val(response.data[0].Ind_Sem);
        $('#inputIndicadorMensual').val(response.data[0].Ind_Men);
        $('#inputIndicadorAtenas').val(response.data[0].Ind_Atenas);
        $('#modal-IndicadoresVisualizar').modal('show');
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
    var Ind_mensual = 0;
    var Ind_semanal = 0;
    var Ind_Atenas = 0;
    if ($("input[name='Ind_mensual']:checked").val()) {
        var Ind_mensual = 1;
    }
    if ($("input[name='Ind_semanal']:checked").val()) {
        var Ind_semanal = 1;
    }
    if ($("input[name='Ind_Atenas']:checked").val()) {
        var Ind_Atenas = 1;
    }
    if ($("#FormIndicadores").valid()) {
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": '<?php echo urlApi; ?>addNewIndicador',
            "method": "POST",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "data": {
                "Indicador": $("#inputIndicador").val(),
                "Definicion": $("#inputDefinicion").val(),
                "Abreviatura": $("#inputAbreviatura").val(),
                "UnidadMedida": $("#inputUnidadMedida").val(),
                "Ind_mensual": Ind_mensual,
                "Ind_semanal": Ind_semanal,
                "Ind_Atenas": Ind_Atenas,
                "Ind_Activo": 1
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
            var form = document.querySelector('#FormIndicadores');
            form.reset();
            let xtable = $('#TableFabricante').DataTable();
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
                var form = document.querySelector('#FormIndicadores');
                form.reset();
                window.location = '/retailscannig/index.php';
            }
        })
    }
});
$(document).ready(function() {
    $('#FormFabricanteEdit').validate({
        rules: {
            inputIndicador: {
                required: true,
            },
            Definición: {
                required: true
            },
            inputAbreviaturaEdit: {
                required: true
            },
        },
        messages: {
            inputCategoriaEdit: {
                required: "Por favor ingrese la categoria del Fabricante"
            },
            inputFabricanteEdit: {
                required: "Por favor ingrese el nombre del fabricante",
                minlength: "Su nombre debe tener al menos 5 caracteres"
            },
            inputAbreviaturaEdit: {
                required: "Por favor ingrese la abreviatura del Fabricante",
                minlength: "Su nombre debe tener al menos 3 caracteres"
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
    $('#FormIndicadores').validate({
        rules: {
            inputIndicador: {
                required: true,
                minlength: 5,
            },
            inputDefinicion: {
                required: true,
                minlength: 5,
            },
            inputAbreviatura: {
                required: true,
                minlength: 5,
            },
            inputUnidadMedida: {
                required: true,
                minlength: 5,
            },
        },
        messages: {
            inputIndicador: {
                required: "Por favor ingrese el nombres del Indicador",
                minlength: "El Indicador debe tener al menos 5 caracteres"
            },
            inputDefinicion: {
                required: "Por favor ingrese la Definicion del Indicador",
                minlength: "Su nombre debe tener al menos 5 caracteres"
            },
            inputAbreviatura: {
                required: "Por favor ingrese la Abreviatura del Indicador",
                minlength: "Su nombre debe tener al menos 5 caracteres"
            },
            inputUnidadMedida: {
                required: "Por favor ingrese la Unidad de Medida",
                minlength: "Su nombre debe tener al menos 5 caracteres"
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
    document.getElementById('FormIndicadores').reset();
    $('#TableIndicadores').dataTable({
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
            "url": '<?php echo urlApi; ?>getAllIndicadores',
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
                mData: 'Indicador',
                className: "text-center"
            },
            {
                mData: 'Definicion',
                className: "text-center"
            },
            {
                mData: 'Abreviatura',
                className: "text-center"
            },
            {
                mData: 'UnidadMedida',
                className: "text-center"
            },
            {
                mData: 'Ind_Sem',
                className: "text-center"
            },
            {
                mData: 'Ind_Men',
                className: "text-center"
            },
            {
                mData: 'Ind_Atenas',
                className: "text-center"
            },
        ],
        "columnDefs": [{
            "targets": 7,
            "orderable": true,
            "data": 'Id_Indicador',
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
</body>

</html>