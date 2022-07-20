<!-- Content Header (Page header) -->
<?php $this->load->view('Plantillas/Header'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="fas fa-shapes"></i>&nbsp;Mantenimiento de Categoria:</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('Principal/dashboard')?>">Inicio</a></li>
                    <li class="breadcrumb-item active"><a href="<?php echo base_url('Principal/logout')?>">Salir</a>
                    </li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content Agregar Categoria 1111-->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Categoria</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body" style="display: none;">
                    <form id="FormCategoria">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Nombre de la Categoria:</div>
                                    <input type="text" class="form-control input-sm" id="CategoriaAdd" placeholder="Ingrese nombre de la categoria ...">
                                </div>
                            </div>
                            <div class="col-md-6">
                            <div class="inputText font-weight-bold">Medicina:</div>
                                <div class="card">
                                    <div class="form-group">
                                    <div class="form-check d-inline">
                                            <input class="form-check-input" type="radio" id="medicinaAdd" name="medicinaAdd" value="0">
                                            <label class="form-check-label">No</label>
                                        </div>
                                        <div class="form-check d-inline">
                                            <input class="form-check-input" type="radio" id="medicinaAdd" name="medicinaAdd" value="1">
                                            <label class="form-check-label">Si</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Minimo % Categoria:</div>
                                    <input type="number" step="0.01" class="form-control input-sm" id="inputminimoAdd" placeholder="Ingrese minimo % categoria ...">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Maximo % Categoria:</div>
                                    <input type="number" step="0.01" class="form-control input-sm" id="inputmaximoAdd" placeholder="Ingrese maximo % categoria ...">
                                </div>
                            </div>
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
<!-- /Windows datatables Categoria-->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Listados de Categoria</h3>
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
                            <table id="TableCategoria" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Categoria</th>
                                        <th>Minimo %</th>
                                        <th>Maximo %</th>
                                        <th>Medicina</th>
                                        <th>Estatus</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tfoot>
                                    <tr>
                                        <th>Categoria</th>
                                        <th>Minimo %</th>
                                        <th>Maximo %</th>
                                        <th>Medicina</th>
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
<div class="modal fade" id="modal-CategoriaEditar">
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
                            <h3 class="card-title">Categoria</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="FormCategoriaEdit">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Nombre de la Categoria:</div>
                                            <input type="text" class="form-control input-sm" id="CategoriaEdit" placeholder="Ingrese nombre de la categoria ...">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="inputText font-weight-bold">Medicina:</div>
                                        <div class="card">
                                            <div class="form-group">
                                            <div class="form-check d-inline">
                                                    <input class="form-check-input" type="radio" id="medicinaEdit" name="medicinaEdit" value="0">
                                                    <label class="form-check-label">No</label>
                                                </div>
                                                <div class="form-check d-inline">
                                                    <input class="form-check-input" type="radio" id="medicinaEdit" name="medicinaEdit" value="1">
                                                    <label class="form-check-label">Si</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Minimo % Categoria:</div>
                                            <input type="number" step="0.01" class="form-control input-sm" id="inputminimoEdit" placeholder="Ingrese minimo % categoria ...">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Maximo % Categoria:</div>
                                            <input type="number" step="0.01" class="form-control input-sm" id="inputmaximoEdit" placeholder="Ingrese maximo % categoria ...">
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="visibility:hidden;">
                                    <div class="col-md-6">
                                
                                        <div class="form-group">
                                            <label for="inputIdEditFabricante">id:</label>
                                            <input type="text" name="idCategoriaEdit" id="idCategoriaEdit"
                                                class="form-control">
                                        </div>
                                    </div>
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
<!-- Windows Modal Campos Vacio-->
<div class="modal fade" id="modalCamposVacio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">
                    Aviso:
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                </button>
            </div>
            <div class="modal-body">
                Complete los siguientes datos para poder guardar
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="modal-body">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" aria-hidden="true"> Aceptar
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- Windows Modal Visualizar Registros-->
<div class="modal fade" id="modal-CategoriaVisualizar">
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
                            <h3 class="card-title">Categoria</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="inputText font-weight-bold">Nombre de la Categoria:</div>
                                        <input type="text" class="form-control input-sm" id="CategoriaView" placeholder="Ingrese nombre de la categoria ..." readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <div class="inputText font-weight-bold">Medicina:</div>
                                    <div class="card">
                                        <div class="form-group">
                                        <div class="form-check d-inline">
                                                <input class="form-check-input" type="radio" id="medicinaView" name="medicinaView" value="0" disabled='disabled'">
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check d-inline">
                                                <input class="form-check-input" type="radio" id="medicinaView" name="medicinaView" value="1" disabled='disabled'">
                                                <label class="form-check-label">Si</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="inputText font-weight-bold">Minimo % Categoria:</div>
                                        <input type="number" step="0.01" class="form-control input-sm" id="inputminimoView" placeholder="Ingrese minimo % categoria ..." readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="inputText font-weight-bold">Maximo % Categoria:</div>
                                        <input type="number" step="0.01" class="form-control input-sm" id="inputmaximoView" placeholder="Ingrese maximo % categoria ..." readonly>
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

<!-- /Windows Modal Visualizar Registros-->
<?php $this->load->view('Plantillas/Footer'); ?>

<script>
//22222222222
function EditAction(data) {
    var settings = {
        "url": '<?php echo urlApi; ?>getCategoriaId/' + data,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        $('#idCategoriaEdit').val(response.data[0].Id_Categoria);
        $('#CategoriaEdit').val(response.data[0].Categoria);
        var oblig = $("input:radio[name='medicinaEdit']");
        oblig.filter("[value='"+response.data[0].ind_Medicina+"']").attr('checked', true);
        $('#inputminimoEdit').val(response.data[0].Min_Por_Val);
        $('#inputmaximoEdit').val(response.data[0].Max_Por_Val);
        $('#modal-CategoriaEditar').modal('show');
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
// 333333333
function VisualizarAction(data) {
    var settings = {
        "url": '<?php echo urlApi; ?>getCategoriaId/' + data,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        $('#CategoriaView').val(response.data[0].Categoria);
        var oblig = $("input:radio[name='medicinaView']");
        oblig.filter("[value='"+response.data[0].ind_Medicina+"']").attr('checked', true);
        $('#inputminimoView').val(response.data[0].Min_Por_Val);
        $('#inputmaximoView').val(response.data[0].Max_Por_Val);
        
        
        
        /*$('#inputCodigoVer').val(response.data[0].id_Categoria);
        $('#inputNombresVer').val(response.data[0].Categoria);
        $('#inputAbreviaturaVer').val(response.data[0].Abreviatura);
        $('#inputminVer').val(response.data[0].Min_Por_Val);
        $('#inputmaxVer').val(response.data[0].Max_Por_Val);*/
        $('#modal-CategoriaVisualizar').modal('show');
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
//1111111111111111111111
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
                "url": '<?php echo urlApi; ?>deleteCategoria/' + data,
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
                    width: '400px',
                    height: '25px'
                }).then(function() {
                    let xtable = $('#TableCategoria').DataTable();
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
                    window.location = '/homepantry20/index.php';
                }
            })
        }
    })
}
// -222222222
function ActualizarRegistro() {
    if ($("#FormCategoriaEdit").valid()) {
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": '<?php echo urlApi; ?>updateCategoria',
            "method": "post",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "data": {
                "id_Categoria": $("#idCategoriaEdit").val(),
                "Categoria": $("#CategoriaEdit").val(),
                "ind_Medicina": $('input:radio[name=medicinaEdit]:checked').val(),
                "Min_Por_Val": $("#inputminimoEdit").val(),
                "Max_Por_Val": $("#inputmaximoEdit").val()
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
            var form = document.querySelector('#FormCategoriaEdit');
            form.reset();
            $('#modal-CategoriaEditar').modal('hide');
            let xtable = $('#TableCategoria').DataTable();
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
                var form = document.querySelector('#FormCategoriaEdit');
                form.reset();
                window.location = '/homepantry20/index.php';
            }
        })
    }
}

$(document).ready(function() {
    document.getElementById('FormCategoria').reset();
    document.getElementById('FormCategoriaEdit').reset();
    //Validacion del Formularios de Nuevo Categoria
    $.validator.addMethod('decimal', function(value, element) {
        return this.optional(element) || /^((\d+(\\.\d{0,2})?)|((\d*(\.\d{1,2}))))$/.test(value);
    }, "Please ingrese a formato de numero correcto, formato 0.00");
    $('#FormCategoria').validate({
        rules: {
            inputNombres: {
                required: true,
            },
            inputAbreviatura: {
                required: true,
                minlength: 3,
                maxlength: 5,
            },
            inputMinimo: {
                required: true,
                decimal: true
            },
            inputMaximo: {
                required: true,
                decimal: true
            },
        },
        messages: {
            inputNombres: {
                required: "Por favor ingrese los nombres del Categoria",
                minlength: "Su nombre debe tener al menos 5 caracteres"
            },
            inputAbreviatura: {
                required: "Por favor ingrese los Abreviatura del Categoria",
                minlength: "Su abreviatura debe tener al minimo 3 caracteres",
                maxlength: "Su abreviatura debe tener al maximo 5 caracteres"
            },
            inputMinimo: {
                required: "Por favor ingrese el Minimo de la Categoria",
                decimal: "Please enter a correct number, format 0.00"

            },
            inputMaximo: {
                required: "Por favor ingrese el Maximo de la Categoria",
                decimal: "Please enter a correct number, format 0.00"
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
    //Boton de Guardar Actualizar Categoria
    $('#FormCategoriaEdit').validate({
        rules: {
            inputNombresEdit: {
                required: true,
            },
            inputAbreviaturaEdit: {
                required: true,
                minlength: 3,
                maxlength: 5,
            },
            inputminimoEdit: {
                required: true,
                decimal: true
            },
            inputmaximoEdit: {
                required: true,
                decimal: true
            },
        },
        messages: {
            inputNombresEdit: {
                required: "Por favor ingrese los nombres del Categoria",
                minlength: "Su nombre debe tener al menos 5 caracteres"
            },
            inputAbreviaturaEdit: {
                required: "Por favor ingrese los Abreviatura del Categoria",
                minlength: "Su abreviatura debe tener al minimo 3 caracteres",
                maxlength: "Su abreviatura debe tener al maximo 5 caracteres"
            },
            inputminimoEdit: {
                required: "Por favor ingrese el Minimo de la Categoria",
                decimal: "Please enter a correct number, format 0.00"

            },
            inputmaximoEdit: {
                required: "Por favor ingrese el Maximo de la Categoria",
                decimal: "Please enter a correct number, format 0.00"
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
    //Boton de Guardar Nuevo Categoria
    
    // 00000000000000000000000000
    $("#botonenviar").click(function() {
        
        
        var camposVacios = "";
        if ($("#CategoriaAdd").val() == "") {
            camposVacios += "Ingrese nombre de la categoria<br>";
        }
        if (!$("input[name='medicinaAdd']:radio").is(':checked')) {
            camposVacios += "Seleccione si es medicina<br>";
        }
        if ($("#inputminimoAdd").val() == "") {
            camposVacios += "Ingrese minimo % categoria<br>";
        }
        if ($("#inputmaximoAdd").val() == "") {
            camposVacios += "Ingrese maximo % categoria<br>";
        }
        if (camposVacios != "") {
            $(function() {
                $('#modal-body').html(camposVacios);
            });
            $('#modalCamposVacio').modal('show');
        }else{
            if ($("#FormCategoria").valid()) {
                var settings = {
                    "async": true,
                    "crossDomain": true,
                    "url": '<?php echo urlApi; ?>addNewCategoria',
                    "method": "POST",
                    "headers": {
                        "Content-Type": "application/x-www-form-urlencoded",
                        "Authorization": "Bearer " + localStorage.getItem('Token')
                    },
                    "data": {
                        "Categoria": $("#CategoriaAdd").val(),
                        "ind_Medicina": $('input:radio[name=medicinaAdd]:checked').val(),
                        "Min_Por_Val": $("#inputminimoAdd").val(),
                        "Max_Por_Val": $("#inputmaximoAdd").val()
                        
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
                    var form = document.querySelector('#FormCategoria');
                    form.reset();
                    let xtable = $('#TableCategoria').DataTable();
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
                        var form = document.querySelector('#FormUsuarios');
                        form.reset();
                        window.location = '/homepantry20/index.php';
                    }
                })
            }        
        }
    });
    
    $('#TableCategoria').dataTable({
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
            "url": '<?php echo urlApi;?>getAllCategoria',
            "type": "GET",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
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
                mData: 'Categoria',
                className: "text-center"
            },
            {
                mData: 'Min_Por_Val',
                render: $.fn.dataTable.render.number('.', ',', 3, ''),
                className: "text-center"
            },
            {
                mData: 'Max_Por_Val',
                render: $.fn.dataTable.render.number('.', ',', 3, ''),
                className: "text-center"
            },
            {
                mData: 'ind_Medicina',
                className: "text-center"
            },
            {
                mData: 'status',
                className: "text-center"
            },
        ],
        "columnDefs": [{
            "targets": 5,
            "orderable": true,
            "data": 'id_Categoria',
            "className": "text-center",
            "render": function(data, type, row, meta) {
                return '<a title="Eliminar" href="#"><img id="EliminarImg" src=<?php echo base_url('assets/iconos/delete.png')?> width="30" height="30"  onclick="deleteAction(' +
                    data +
                    '); return false;"></a>&nbsp;&nbsp;<a title="Editar" href="#"><img src=<?php echo base_url('assets/iconos/editar.png')?> width="25" height="25" onclick="EditAction(' +
                    data +
                    '); return false;"></a>&nbsp;&nbsp;<a title="Visualizar" href="#"><img src=<?php echo base_url('assets/iconos/ver.png')?> width="25" height="25" onclick="VisualizarAction(' +
                    data + '); return false;"></a>';
            }
        }],
    });
});// $(document).ready(function() {
</script>

<!-- DataTables  & Plugins -->

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