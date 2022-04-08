<!-- Content Header (Page header) -->
<?php $this->load->view('Plantillas/Header');?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="fas fa-search-dollar"></i>&nbsp;Validacion de Productos:</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content Agregar Producto 11111-->
<!-- /Windows datatables Producto Rango-->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12"> <!-- bg-danger bg-gradient -->
                <div class="form-group row mb-0 mt-0">
                    <div class="col-md-4">
                        <div class="inputText font-weight-bold">Semana:</div>
                        <select id="selectSemanaTabla" name="selectSemanaTabla" class="form-control">
                        </select>
                    </div>
                    <div class="col-md-4">
                            <div class="inputText font-weight-bold">Categoria:</div>
                            <select id="selectCategoriaTabla" name="selectCategoriaTabla" class="form-control" data-live-search="true">
                            </select>
                    </div>
                    <div class="col-md-4">
                        <div class="inputText font-weight-bold">Producto:</div>
                        <select id="selectProductoTabla" name="selectProductoTabla" class="form-control">
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div id="ocultarMostrar2" style="display:none;" >
            <HR/>
            <div class="row">
                <div class="col-md-12"> <!--  bg-danger bg-gradient -->
                <div class="form-group row mb-0 mt-0">
                        <div class="col-md-1">
                                <div class="inputText font-weight-bold">%Min:</div>
                                <input type="text" name="inputPORCMinVal" id="inputPORCMinVal" class="form-control" readonly>
                        </div>
                        <div class="col-md-2">
                                <div class="inputText font-weight-bold">Min:</div>
                                <input type="text" name="inputMinVal" id="inputMinVal" class="form-control" readonly>
                        </div>
                        <div class="col-md-1">
                                <div class="inputText font-weight-bold">%Max:</div>
                                <input type="text" name="inputPORCMaxVal" id="inputPORCMaxVal" class="form-control" readonly>
                        </div>
                        <div class="col-md-2">
                                <div class="inputText font-weight-bold">MaxVal:</div>
                                <input type="text" name="inputMaxVal" id="inputMaxVal" class="form-control" readonly>
                        </div>
                        <div class="col-md-2">
                                <div class="inputText font-weight-bold">Promedio:</div>
                                <input type="text" name="inputPromedio" id="inputPromedio" class="form-control" readonly>
                        </div>
                        <div class="col-md-2">
                                <div class="inputText font-weight-bold">Moda:</div>
                                <input type="text" name="inputModa" id="inputModa" class="form-control" readonly>
                        </div>
                        <div class="col-md-2">
                            <label>Masivo de Precios:</label>
                            <button id ="bottonProcesarValidarProducto" title="Crear un Productos" type="submit" class="btn btn-block btn-sm btn-info"><i class="fas fa-check-double"></i>&nbsp;PROCESAR</button>
                        </div>
                    </div>
                    <div class="form-group row mb-0 mt-0">
                        <div class="col-md-3">
                            <label></label> <span class="text-danger" id="codigoBarra"></span>
                        </div>
                        <div class="col-md-9">
                            <label></label> <span class="text-danger" id="descripcionProducto"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="ocultarMostrar" style="display:none;" >
            <div class="row">
                <div class="col-md-12">
                <!--
                    <div class="form-group row mb-0 mt-0">
                        <div class="col-md-12 text-center">
                        <button id="seleccionarSoberanos">Seleccionar Soberanos</button>
                        <button id="deseleccionarSoberanos">Deseleccionar Soberano</button>
                        <button id="seleccionarDigital">Seleccionar Digital</button>
                        <button id="deseleccionarDigital">Deseleccionar Digital</button>
                        <button id="select-all">Seleccionar Todo</button>
                        <button id="deselect-all">Deseleccionar Todo</button>
                        Seleccionados: <span id="select-stats"></span>
                        </div>
                    </div>
                    <HR/>
                    -->
                    <div class="form-group row mb-0 mt-0">
                        <div class="col-md-12 text-center">
                            <div id="TableDetalleProductos"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Windows Modal Editar 2222 -->
<div class="modal fade" id="modal-TipoMoneda">
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
                            <h3 class="card-title">Detalle de Consumo</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="FormMonedaEdit">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Codigo de Barra:</div>
                                            <input type="text" class="form-control input-sm" id="inputCodigoBarra" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Moneda Actual:</div>
                                            <input type="text" class="form-control input-sm" id="inputMonedaActual" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Seleccionar Moneda:</div>
                                            <select id="selectMonedaNew" name="selectMonedaNew" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Tasa de Cambio:</div>
                                            <input type="text" class="form-control input-sm" id="inputTasaCambio" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Cantidad:</div>
                                            <input type="text" class="form-control input-sm" id="inputCantidad">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Precio Unitario:</div>
                                            <input type="text" class="form-control input-sm" id="inputPrecioUnitario">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Total Compra:</div>
                                            <input type="text" class="form-control input-sm" id="inputTotalCompra" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="visibility:hidden;">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputId">id:</label>
                                            <input type="text" name="inputId" id="inputId" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <input type="button" onclick="ActualizarDatos()" id="editUsuario"
                                            value="Guardar" class="btn btn-success float-right">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->

<div class="modal fade" id="procesarMasivoModal">
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
                            <h3 class="card-title">Actualizacion Masiva</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="formProcesarMasivo">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Seleccionar Moneda:</div>
                                            <select id="selectMonedaMasivo" name="selectMonedaMasivo" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Tasa de Cambio:</div>
                                            <input type="text" class="form-control input-sm" id="inputTasaCambioMasivo" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Cantidad:</div>
                                            <input type="text" class="form-control input-sm" id="inputCantidadMasivo">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Precio Unitario:</div>
                                            <input type="text" class="form-control input-sm" id="inputPrecioUnitarioMasivo">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Total Compra:</div>
                                            <input type="text" class="form-control input-sm" id="inputTotalCompraMasivo" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="visibility:hidden;">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputId">id:</label>
                                            <input type="text" name="inputId" id="inputId" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <input type="button" onclick="ActualizarDatos()" id="editUsuario"
                                            value="Guardar" class="btn btn-success float-right">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->


<?php $this->load->view('Plantillas/Footer');?>

<script>
$(document).ready(function() {
    
    
    $(function($) {
        
        
        $('#inputCantidad').autoNumeric('init', {
            lZero: 'deny',
            aSep: '.',
            aDec: ','
        });
        $('#inputPrecioUnitario').autoNumeric('init', {
            lZero: 'deny',
            aSep: '.',
            aDec: ','
        });
        $('#inputCantidadMasivo').autoNumeric('init', {
            lZero: 'deny',
            aSep: '.',
            aDec: ','
        });
        $('#inputPrecioUnitarioMasivo').autoNumeric('init', {
            lZero: 'deny',
            aSep: '.',
            aDec: ','
        });
    });
    
    
    //$('#selectSemanaTabla').select2();
    //$('#selectCategoriaTabla').select2();
    cargarSemana('#selectSemanaTabla');
    $('#ocultarMostrar').hide();
    $('#ocultarMostrar2').hide();
    cargarCategoria("#selectCategoriaTabla",0);
});

$("#selectSemanaTabla").change(function() {
    var id_categoriaT = $("#selectCategoriaTabla").val();
    //console.log(id_categoriaT);
    $('#ocultarMostrar').hide();
    $('#ocultarMostrar2').hide();
    let select = $("#selectProductoTabla");
    select.find("option").remove();
    select = $("#selectCategoriaTabla");
    select.find("option").remove();
    cargarCategoria("#selectCategoriaTabla",0);
    $('#codigoBarra').html("");
    $('#descripcionProducto').html("");
});

$("#selectCategoriaTabla").change(function() {
    var id_categoriaT = $("#selectCategoriaTabla").val();
    //console.log(id_categoriaT);
    $('#ocultarMostrar').hide();
    $('#ocultarMostrar2').hide();
    $('#selectProductoTabla').select2();
    cargarProductoCategoria(id_categoriaT,0);
    let select = $("#selectProductoTabla");
    select.find("option").remove();
    $('#codigoBarra').html("");
    $('#descripcionProducto').html("");
});

$("#selectProductoTabla").change(function() {
    var id_semanaT = $("#selectSemanaTabla").val();
    var id_categoriaT = $("#selectCategoriaTabla").val();
    var id_productoT = $("#selectProductoTabla").val();
    cargarResumen(id_semanaT,id_categoriaT,id_productoT);
    $('#ocultarMostrar').show();
    $('#ocultarMostrar2').show();
    CargarDatosProducto(id_productoT);
});

$("#inputCantidad").change(function() {
    if ($("#inputPrecioUnitario").val() != '' && $("#inputCantidad").val() != '' ){
        var cantidad = $("#inputCantidad").val();
        var precioUnitario = $("#inputPrecioUnitario").val();
        var tasaCambio = $("#inputTasaCambio").val();
        $("#inputTotalCompra").val(SeparadorMiles(cantidad*precioUnitario*tasaCambio));
    }
});

$("#inputPrecioUnitario").change(function() {
    if ($("#inputPrecioUnitario").val() != '' && $("#inputCantidad").val() != '' ){
        var cantidad = $("#inputCantidad").val();
        var precioUnitario = $("#inputPrecioUnitario").val();
        var tasaCambio = $("#inputTasaCambio").val();
        $("#inputTotalCompra").val(SeparadorMiles(cantidad*precioUnitario*tasaCambio));
    }
});
//----
function tasaCambioIdSemanaIdMoneda(etiqueta,idSemana,idMoneda){
    if (idMoneda != 2){
        var settings = {
            "url": '<?php echo urlApi; ?>getTasaCambioxIdSemanaIdMoneda/' + idSemana+'/'+idMoneda,
            "method": "get",
            "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
        }
        $.ajax(settings).done(function(response) {
            $(etiqueta).val(SeparadorMiles(response.data[0].tasa));
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
    }else{
        $(etiqueta).val("1.0");
    }
}

$("#selectMonedaMasivo").change(function() {
    var idMoneda = $("#selectMonedaMasivo").val();
    var idSemana = $("#selectSemanaTabla").val();
    tasaCambioIdSemanaIdMoneda("#inputTasaCambioMasivo",idSemana,idMoneda);
});

$("#inputCantidadMasivo").change(function() {
    if ($("#inputPrecioUnitarioMasivo").val() != '' && $("#inputCantidadMasivo").val() != '' ){
        var cantidad = $("#inputCantidadMasivo").val();
        var precioUnitario = $("#inputPrecioUnitarioMasivo").val();
        var tasaCambio = $("#inputTasaCambio").val();
        $("#inputTotalCompraMasivo").val(cantidad*precioUnitario*tasaCambio);
    }
});
$("#inputPrecioUnitarioMasivo").change(function() {
    if ($("#inputPrecioUnitarioMasivo").val() != '' && $("#inputCantidadMasivo").val() != '' ){
        var cantidad = $("#inputCantidadMasivo").val();
        var precioUnitario = $("#inputPrecioUnitarioMasivo").val();
        var tasaCambio = $("#inputTasaCambio").val();
        $("#inputTotalCompraMasivo").val(cantidad*precioUnitario*tasaCambio);
    }
});

function CargarDatosProducto(idDetalle) {
    var settings = {
        "url": '<?php echo urlApi; ?>getDetalleProducto/' + idDetalle,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        //$('#codigoBarra').html(response.data[0].CodigoBarra);
        $("#codigoBarra").html('<strong>Codigo de Barra: ('+response.data[0].CodigoBarra+ ')</strong>');
        $("#descripcionProducto").html('<strong>Descripcion: ('+response.data[0].Producto+ ')</strong>');
        //$('#descripcionProducto').html(response.data[0].Producto);
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

function ValidarHogar_(data) {
    // Abrir nuevo tab
    

}


function ValidarHogar(idConsumoDetalleProductos) {
    var settings = {
        "url": '<?php echo urlApi; ?>getFiltrosToValidacionHogar/'+idConsumoDetalleProductos,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        localStorage.setItem("idSemana", response.data[0].Id_Semana);
        localStorage.setItem("idArea", response.data[0].Id_Area);
        localStorage.setItem("idEstado", response.data[0].Id_Estado);
        localStorage.setItem("idPanelHogar", response.data[0].Id_PanelHogar);
        localStorage.setItem("idTipoConsumo", response.data[0].id_TipoConsumo);
        localStorage.setItem("fechaCreacion", response.data[0].Fecha_Creacion);
        localStorage.setItem("idConsumo", response.data[0].Id_Consumo);
        localStorage.setItem("flagValProdToValHogar", 1);
        
        var win = window.open("<?php echo base_url('Principal/ValidacionHogar')?>", '_blank');
        win.focus();
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









function EditActionDatos(data) {
    var settings = {
        "url": '<?php echo urlApi; ?>getDetalleCompraId/' + data,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        $('#inputId').val(response.data[0].Id_Consumo_Detalle_Productos);
        $('#inputCodigoBarra').val(response.data[0].Numero_codigo_barras);
        $('#inputMonedaActual').val(response.data[0].Moneda);
        $('#inputTasaCambio').val(response.data[0].Tasa_de_cambio);
        $('#inputCantidad').val(response.data[0].Cantidad);
        $('#inputPrecioUnitario').val(response.data[0].Precio_producto);
        $('#inputTotalCompra').val(response.data[0].Total_compra);
        cargarMoneda('#selectMonedaNew',response.data[0].id_Moneda);
        $('#modal-TipoMoneda').modal('show');
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
function ActualizarDatos() {
    if ($("#FormMonedaEdit").valid()) {
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": '<?php echo urlApi; ?>updateMonedaConsumoDetallexIdConsumoDetalle',
            "method": "post",
            "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
            "data": {
                "id_Consumo_Detalle_Productos":  $("#inputId").val(),
                "id_Moneda": $("#selectMonedaNew").val(),
                "Cantidad": $("#inputCantidad").val(),
                "Precio_producto": $("#inputPrecioUnitario").val()
            }
        }
        $.ajax(settings).done(function(response) {
            var id_semanaT = $("#selectSemanaTabla").val();
            var id_categoriaT = $("#selectCategoriaTabla").val();
            var id_productoT = $("#selectProductoTabla").val();
            //let xtable = $('#TableProducto').DataTable();
            //xtable.ajax.reload(null, false);
            cargarResumen(id_semanaT,id_categoriaT,id_productoT);
            $('#modal-TipoMoneda').modal('hide');
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
            var form = document.querySelector('#FormAtributoEdit');
            form.reset();
            $('#modal-AtributoEditar').modal('hide');
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
                window.location = '/homepantry20/index.php';
            }
        })
    }
}
function cargarSemana(identificador) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllSemana/',
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        let selected = $(identificador);
        selected.find("option").remove();
        selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
        for (var i = 0; i < response.data.length; i++) {
            selected.append("<option value=" + response.data[i].IdSemana + ">" + response
                .data[i]
                .Semana + "</option>");
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
function cargarMoneda(identificador,idS) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllMoneda/',
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        let select = $(identificador);
        select.find("option").remove();
        select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        if (idS == 0){
            select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].Id_Moneda === idS){
                select.append("<option value=" + response.data[i].Id_Moneda + " selected>" + response
                .data[i].Moneda + "</option>");
            }else{
                select.append("<option value=" + response.data[i].Id_Moneda + ">" + response
                .data[i].Moneda + "</option>");
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
            window.location = '/homepantry20/index.php';
        }
    })
}
function cargarResumen(semana,categoria,producto) {
    var settings = {
        "url": '<?php echo urlApi; ?>getResumenConsumoSemanaCatProd/' + semana+'/'+categoria+'/'+producto,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        $('#inputPORCMinVal').val(SeparadorMiles(response.Min_Por_Val));
        $('#inputPORCMaxVal').val(SeparadorMiles(response.Max_Por_Val));
        $('#inputMinVal').val(SeparadorMiles(response.Min_Val));
        $('#inputMaxVal').val(SeparadorMiles(response.Max_Val));
        $('#inputPromedio').val(SeparadorMiles(response.Promedio));
        $('#inputModa').val(SeparadorMiles(response.Moda));
        cargarTabla(semana,categoria,producto,response.Min_Val,response.Max_Val);
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

function cargarProductoCategoria(parametro,idS) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllProductos_x_categoria/' + parametro,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        let select = $("#selectProductoTabla");
        select.find("option").remove();
        if (idS == 0){
            select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id === idS){
                select.append("<option value=" + response.data[i].Id_Producto + " selected>" + response
                .data[i].Producto + "</option>");
            }else{
                select.append("<option value=" + response.data[i].Id_Producto + ">" + response
                .data[i].Producto + "</option>");
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
            window.location = '/homepantry20/index.php';
        }
    })
}
function cargarCategoria(etiqueta,idS) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllCategoria',
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        let select = $(etiqueta);
        select.find("option").remove();
        if (idS == 0){
            select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id === idS){
                select.append("<option value=" + response.data[i].id_Categoria + " selected>" + response
                .data[i].Categoria + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id_Categoria + ">" + response
                .data[i].Categoria + "</option>");
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
            window.location = '/homepantry20/index.php';
        }
    })
}


function isMayorMenor(precio,minimo,maximo){
    
    if (precio < minimo || precio > maximo){
        return true;
    }else{
        return false;
    }
}
//----
function actualizarMasivo(data) {
    
}


function cargarTabla(id_semanaT,id_categoriaT,id_productoT,minimo,maximo){
    var bottomAcciones = function(cell, formatterParams){
        var value = cell.getRow().getData().Id_Consumo_Detalle_Productos;
        var Cantidad = cell.getRow().getData().Cantidad;
        return  "<a id='fg003' href='#' onclick='EditActionDatos("+value+"); return false;' ><i class='fa fa-edit' data-toggle='tooltip' data-placement='top' title='Actualizar Manual'></i></a>&nbsp;"
                +"<a id='fg003' href='#' onclick='ValidarHogar("+value+"); return false;' ><i class='bi bi-house-fill' data-toggle='tooltip' data-placement='top' title='Validar Hogar'></i></a>&nbsp;";
    };
    var mayorMenor = function(cell, formatterParams){
        var Precio = cell.getRow().getData().Precio;
        if(isMayorMenor(Precio,minimo,maximo)){
            return "<span style='color:red; font-weight:bold;'>" + Precio + "</span>";
        }else{
            return Precio;
        }
    };
    var table = new Tabulator("#TableDetalleProductos", {
        ajaxURL: '<?php echo urlApi; ?>getConsumoSemanaCatProd/' + id_semanaT +'/'+id_categoriaT+'/'+id_productoT,
        ajaxConfig:{
            method:"GET", //set request type to Position
            headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
        },
        height : "350px" ,
        renderVerticalBuffer : 700 ,
        layout:"fitDataStretch",
        rowFormatter:function(row){
            if(isMayorMenor(row.getData().Precio,minimo,maximo)){
                row.getElement().style.backgroundColor = "#FF8686"
            }
        },
        progressload : "scroll",
        //paginationSize : 20,
        placeholder:"Datos no encontrados",
        selectable:true,
        //selectablePersistence:true, //make rows selectable
        columns:[
            {title:"Id Hogar", field:"Id_Hogar", sorter:"number"},
            {title:"Cantidad", field:"Cantidad", sorter:"number"},
            {title:"Precio", field:"Precio", sorter:"number", formatter:"money",
                formatterParams:{
                    decimal:",",
                    thousand:".",
                    precision:false
                }/*,
                function(cell, formatterParams){
                var Precio = cell.getRow().getData().Precio;
                    if(isMayorMenor(row.getData().Precio,minimo,maximo)){
                        return "<span style='color:red; font-weight:bold;'>" + Precio + "</span>";
                    }else{
                        return Precio;
                    }
                }*/
            },
            {title:"Area", field:"Area", sorter:"string"},
            {title:"Estado", field:"Estado", sorter:"string"},
            {title:"Fecha de Creacion", field:"Fecha_Creacion", hozAlign:"center", sorter:"number"},
            {title:"Acciones",formatter:bottomAcciones, hozAlign:"center", maxWidth : 200}
                ],
            });

    document.getElementById("bottonProcesarValidarProducto").addEventListener("click", function(){
        var datosSeleccionados = table.getSelectedData();
        //----
        
        
        cargarMoneda('#selectMonedaMasivo',0);
        $('#procesarMasivoModal').modal('show');
        
        });
}

function cargarTabla_(id_semanaT,id_categoriaT,id_productoT,minimo,maximo){
    $('#TableProducto').dataTable({
        "lengthMenu": [
            [ -1],
            [ "Todo"]
        ],
        "bDestroy": true,
        "searching": false, //--
        "autoWidth": true,
        "scrollY": 350,
        "scrollCollapse": true,
        "paging": false,
        "dom": '<"wrapper"flitp><"center">',
        "responsive": true,
        "ajax": {
            "url": '<?php echo urlApi; ?>getConsumoSemanaCatProd/' + id_semanaT +'/'+id_categoriaT+'/'+id_productoT,
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
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json",
            "sProcessing": "Procesando...",
            "decimal": ",",
            "thousands": "."
        },
        "aoColumns": [{
                mData: 'Id_Hogar',
                className: "text-center"
            },
            {
                mData: 'CodigoBarra',
                className: "text-center"
            },
            {
                mData: 'Cantidad',
                className: "text-center"
            },
            {
                mData: 'Precio',
                className: "text-center",
                render: $.fn.dataTable.render.number( '.', ',', 2, '' )
            },
            {
                mData: 'Area',
                className: "text-center"
            },
            {
                mData: 'Estado',
                className: "text-center"
            },
            {
                mData: 'Fecha_Creacion',
                className: "text-center"
            },
        ],
        "columnDefs": [{
            "targets": 7,
            "orderable": true,
            "data": 'Id_Consumo_Detalle_Productos',
            "className": "text-center",
            "render": function(data, type, row, meta) {
                return '<a title="Cambiar Moneda" href="#"><i class="fa fa-marker" style="font-size:24px;color:#000" aria-hidden="true" onclick="EditActionDatos(' +
                    data +
                    '); return false;"></i></a>'+
                    '<a title="Cambiar Moneda" href="#"><i class="bi bi-house" style="font-size:24px;color:#000" aria-hidden="true" onclick="EditActionDatos(' +
                    data +
                    '); return false;"></i></a>';
            }
        }],
        "createdRow": function( row, data, dataIndex){
            if (data['Precio'] < minimo || data['Precio'] > maximo){
                $('td', row).eq(3).css('color', '#EE0012');
            }
        }
    });
}

function eliminarSeparadorMiles(number){
    
    const regex = /[.]/g;
    var aux = number.replace(regex, '');
    aux = aux.replace(',', '.');
    return aux;
}
function SeparadorMiles(number){
    return new Intl.NumberFormat("de-DE").format(number);
}





</script>
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
<script src="<?php echo base_url('assets/autoNumeric-1.9.18.js') ?>"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>