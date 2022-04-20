<!-- Content Header (Page header) -->
<?php $this->load->view('Plantillas/Header');?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="fas fa-search-dollar"></i>&nbsp;Productos Pendientes:</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content Agregar Producto aaaaaaaaaaa-->
<!-- /Windows datatables Producto Rango-->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group row mb-0 mt-0">
                    <div class="col-md-2">
                        <div class="inputText font-weight-bold">Cantidad de Productos:</div>
                        <div class="card">
                            <div class="form-group">
                            <div class="form-check d-inline">
                                    <input class="form-check-input" type="radio" id="PPTOP" name="PPTOP" value="300" checked>
                                    <label class="form-check-label">Ultimos 300&nbsp;</label>
                                </div>
                                <div class="form-check d-inline">
                                    <input class="form-check-input" type="radio" id="PPTODOS" name="PPTOP" value="0">
                                    <label class="form-check-label">Todos</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label class="inputText font-weight-bold">Código de Barra:</label>
                        <select id="selectProductosPendientes" name="selectProductosPendientes" class="form-control form-control-sm">
                        </select>
                    </div>
                    <div  iv id="showBotones" class="col-md-6" style="display:none;">
                        <div class="col-md-4">
                            <label>Maestro de Productos:</label>
                            <button type="button" class="btn btn-block btn-sm btn-primary" data-toggle="modal" data-target="#modal-crearProducto">
                                <i class="fas fa-plus"></i>&nbsp;CREAR
                            </button>
                        </div>
                        <div class="col-md-4">
                            <label>Cierre Productos:</label>
                            <button type="button" class="btn btn-block btn-sm btn-success" onclick="verificarProductoExista();">
                                <i class="fas fa-sign-in-alt"></i>&nbsp;CERRAR
                            </button>
                        </div>
                        <div class="col-md-4">
                            <label>Masivo de Precios:</label>
                            <button id ="bottonProcesar" title="Crear un Productos" type="submit" class="btn btn-block btn-sm btn-info"><i class="fas fa-check-double"></i>&nbsp;PROCESAR</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="DatosProductosPendiente" style="display:none;" >
            <div class="form-group row">
                <div class="col-sm-4">
                    <div class="form-group text-center">
                        <span class="label label-info" id="totalProductos">0</span>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group text-center">
                        <span class="label label-danger " id="totalPendientes">0</span>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group text-center">
                        <span class="label label-warning" id="totalValidados">0</span>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">
                    <strong><p id="categoriaR" class="text-primary"></p></strong>
                </div>
                <div class="col-sm-6">
                    <strong><p id="descripcionR" class="text-primary"></p></strong>
                </div>
                <div class="col-md-2">
                    <div class="inputText font-weight-bold">Promedio:</div>
                    <input type="text" name="inputPromedioR" id="inputPromedioR" class="form-control input-sm" readonly />
                </div>
                <div class="col-md-2">
                    <div class="inputText font-weight-bold">Moda:</div>
                    <input type="text" name="inputModaR" id="inputModaR" class="form-control input-sm" readonly />
                </div>
            </div>
        </div>
        <HR/>
        
        <div id="showTabla">
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
                            <div id="TableProductosPendientes"></div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>
</section>

<div class="modal fade" id="MostrarDetallesModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class='fas fa-search'></i>&nbsp;Mostrar Detalle del Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Codigo de Barras:</label>
                    <input type="text" class="form-control input-sm text-right" id="inputCodigoBarrasVis" placeholder="...."  readonly />
                </div>
                <div class="form-group">
                    <label>Cantidad:</label>
                    <input type="text" class="form-control input-sm text-right" id="inputCantidadVis"  placeholder="...."  readonly />
                </div>
                <div class="form-group">
                    <label>Precio Unitario:</label>
                    <input type="text" class="form-control input-sm text-right" id="inputPrecioVis" placeholder="...." readonly />
                </div>
                <!--<div class="form-group">
                    <label>Moneda:</label>
                    <input type="text" class="form-control input-sm text-right" id="inputMonedaVis" placeholder="...." readonly />							 
                </div>-->
                <div class="form-group">
                    <label>Tasa de Cambio:</label>
                    <input type="text" class="form-control input-sm text-right" id="inputTasaCambioVis" placeholder="...." readonly />							 
                </div>
                <div class="form-group">
                    <label class="text-primary">Total Compra:</label>
                    <input type="text" class="form-control input-sm text-right" id="inputTotalCompraVis" placeholder="...." readonly />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" title="Salir"><i class='fas fa-sign-out-alt'></i> Salir</button>
            </div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
    <!-- /.modal -->
	


<!-- Windows Modal Editar Datos de consumo 222222 -->
<div class="modal fade" id="modal-EditarDatos">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class='fas fa-plus'></i>&nbsp;Modificar Consumo</h5>
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
                            <form id="FormDatosEdit">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Codigo de Barra:</div>
                                            <input type="text" class="form-control input-sm" id="inputCodigoBarra" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Cantidad:</div>
                                            <input type="text" class="form-control input-sm" id="inputCantidad" data-a-sep="." data-a-dec=",">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Precio Unitario:</div>
                                            <input type="text" class="form-control input-sm" id="inputPrecioUnitario" data-a-sep="." data-a-dec=",">
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="visibility:hidden;">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="inputId">id:</label>
                                            <input type="text" name="inputId" id="inputId" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="inputIdMoneda">inputIdMoneda:</label>
                                            <input type="text" name="inputIdMoneda" id="inputIdMoneda" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="inputTasaCambio">inputTasaCambio:</label>
                                            <input type="text" name="inputTasaCambio" id="inputTasaCambio" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <input type="button" onclick="ActualizarConsumoManual()" id="editUsuario"
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
<!-- /.modal Masivo precios -->
<div class="modal fade" id="modal-MasivoPrecios">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title"><i class='fas fa-plus'></i>&nbsp;Actualizar Precios Masivos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="FormMasivoPrecios">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Codigo de Barra:</div>
                                <input type="text" class="form-control input-sm" id="inputCodigoBarraModal" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="inputText font-weight-bold">Indique el Precio:</div>
                                <input type="text" class="form-control input-sm text-right" id="inputPrecioMasivoModal" placeholder="...." onblur="ActualizarCalculoTotales();" required />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" title="Salir"><i class='fas fa-sign-out-alt'></i> Salir</button>
                <button type="button" class="btn btn-primary" title="Grabar" onclick="actualizarPrecioMasivo();" id="btn-salvarMasivo"><i class='fas fa-save'></i> Grabar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Windows Modal crearProducto -->
<div class="modal fade" id="modal-crearProducto">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class='fas fa-plus'></i>&nbsp;Crear Producto</h5>
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
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                        <form id="FormProducto">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Categoria:</div>
                                    <select id="inputCategoria" name="inputCategoria" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Fabricante:</div>
                                    <select id="inputFabricante" name="inputFabricante" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Marca:</div>
                                    <select id="inputMarca" name="inputMarca" class="form-control">
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Segmento:</div>
                                    <select id="inputSegmento" name="inputSegmento" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Tamaño:</div>
                                    <select id="inputTamano" name="inputTamano" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Tamaño Rango:</div>
                                    <select id="inputTamanoRango" name="inputTamanoRango" class="form-control">
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Unidad Medida:</div>
                                    <select id="inputUnidadMedida" name="inputUnidadMedida" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Fragmentacion:</div>
                                    <input type="text" name="inputFragmentacion" id="inputFragmentacion" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Codigo de Barra:</div>
                                    <input type="text" name="inputCodigoBarraNP" id="inputCodigoBarraNP" class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Producto:</div>
                                    <input type="text" name="inputProducto" id="inputProducto" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="inputText font-weight-bold">Activo:</div>
                                <div class="card">
                                    <div class="form-group">
                                    <div class="form-check d-inline">
                                            <input class="form-check-input" type="radio" id="activoAdd" name="activoAdd" value="0">
                                            <label class="form-check-label">No</label>
                                        </div>
                                        <div class="form-check d-inline">
                                            <input class="form-check-input" type="radio" id="activoAdd" name="activoAdd" value="1">
                                            <label class="form-check-label">Si</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                            <div class="inputText font-weight-bold">Pendiente:</div>
                                <div class="card">
                                    <div class="form-group">
                                    <div class="form-check d-inline">
                                            <input class="form-check-input" type="radio" id="pendienteAdd" name="pendienteAdd" value="0">
                                            <label class="form-check-label">No</label>
                                        </div>
                                        <div class="form-check d-inline">
                                            <input class="form-check-input" type="radio" id="pendienteAdd" name="pendienteAdd" value="1">
                                            <label class="form-check-label">Si</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Atributo 1:</div>
                                    <select id="inputAtributo1" name="inputAtributo1" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Atributo 2:</div>
                                    <select id="inputAtributo2" name="inputAtributo2" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Atributo 3:</div>
                                    <select id="inputAtributo3" name="inputAtributo3" class="form-control">
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Atributo 4:</div>
                                    <select id="inputAtributo4" name="inputAtributo4" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Atributo 5:</div>
                                    <select id="inputAtributo5" name="inputAtributo5" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Atributo 6:</div>
                                    <select id="inputAtributo6" name="inputAtributo6" class="form-control">
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Atributo 7:</div>
                                    <select id="inputAtributo7" name="inputAtributo7" class="form-control">
                                    </select>
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
<?php $this->load->view('Plantillas/Footer');?>

<script>
$(document).ready(function() {
    
    
    $(function($) {
        
        
        $('#inputPrecioMasivoProcesar').autoNumeric('init', {
            lZero: 'deny',
            aSep: '.',
            aDec: ','
        });
        $('#inputPrecioMasivoModal').autoNumeric('init', {
            lZero: 'deny',
            aSep: '.',
            aDec: ','
        });
        $('#inputPrecioUnitario').autoNumeric('init', {
            lZero: 'deny',
            aSep: '.',
            aDec: ','
        });
        $('#inputCantidad').autoNumeric('init', {
            lZero: 'deny',
            aSep: '.',
            aDec: ','
        });
    });
    
    $('#showBotones').hide();
    $('#showTabla').hide();
    $('#DatosProductosPendiente').hide();//aaaaaaaaa
    //$('#selectProductosPendientes').select2();
    var PPTOP = $('input:radio[name=PPTOP]:checked').val()
    cargarProductosPendientesTopN('#selectProductosPendientes',PPTOP);
    
    // Crear Producto
    
    //cargarCategoria("#inputCategoria",0);
    $('#FormProductoEdit').validate({
        rules: {
            inputCategoriaEdit: {
                required: true,
            },
            inputTamEdit: {
                required: true,
                decimal: true
            },
            inputAbreviaturaEdit: {
                required: true,
                minlength: 3,
                maxlength: 5,
            },
        },
        messages: {
            inputCategoriaEdit: {
                required: "Por favor ingrese la categoria"
            },
            inputTamEdit: {
                required: "Por favor ingrese el Producto",

            },
            inputAbreviaturaEdit: {
                required: "Por favor ingrese la abreviatura de la Producto",
                minlength: "Su Abreviatura debe tener al menos 3 caracteres",
                maxlength: "Su Abreviatura debe tener al menos 5 caracteres"
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
    $('#FormProducto').validate({
        rules: {
            inputCategoria: {
                required: true,
            },
            inputFabricante: {
                required: true
            },
            inputMarca: {
                required: true
            },
            inputSegmento: {
                required: true
            },
            inputTamano: {
                required: true
            },
            inputTamanoRango: {
                required: true
            },
            inputUnidadMedida: {
                required: true
            },
            inputFragmentacion: {
                required: true
            },
            inputCodigoBarra: {
                required: true,
                minlength: 13,
                maxlength: 20
            },
            inputProducto: {
                required: true
            },
            activoAdd: {
                required: true
            },
            pendienteAdd: {
                required: true
            },
            inputAbreviatura: {
                required: true,
                minlength: 3,
                maxlength: 5
            },
        },
        messages: {
            inputCategoria: {
                required: "Por favor ingrese la categoria"
            },
            inputMarca: {
                required: "Por favor ingrese la Marca"
            },
            inputTam: {
                required: "Por favor ingrese el Producto",
            },
            inputAbreviatura: {
                required: "Por favor ingrese la abreviatura del Producto",
                minlength: "Su abrevitura debe tener al menos 3 caracteres",
                maxlength: "Su abreviatura debe tener al menos 5 caracteres"
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
    document.getElementById('FormProducto').reset();
    //cargarCategoria("#inputCategoriaTabla",0);
    /* ------------------------- */
    // Fin Crear Producto
});

//aaaaaaaa
$("input[name='PPTOP']").click(function() {
    var PPTOP = $('input:radio[name=PPTOP]:checked').val();
    
    if (PPTOP != 0){
        cargarProductosPendientesTopN('#selectProductosPendientes',PPTOP);
    }else{
        cargarProductosPendientes('#selectProductosPendientes');
    }
});

$("#selectProductosPendientes").change(function() {
    $('#categoria').html("");
    $('#descripción').html("");
    $('#totalProductos').html("");
    $('#totalPendientes').html("");
    $('#totalValidados').html("");
    $('#categoriaR').html("");
    $('#descripcionR').html("");
    $('#showBotones').show();
    $('#showTabla').show();
    $('#DatosProductosPendiente').hide();
    var CodigoBarras = $('#selectProductosPendientes').val();
    $('#inputCodigoBarraNP').val(CodigoBarras);
    cargarTotalesAll('#totalProductos',"TOTAL PRODUCTOS: ",CodigoBarras);
    cargarTotales('#totalPendientes',"TOTAL PENDIENTES: ",CodigoBarras,0);
    cargarTotales('#totalValidados',"TOTAL MARCADOS: ",CodigoBarras,1);
    cargarAVG(CodigoBarras);
    cargarModa(CodigoBarras);
    cargarResumenProducto(CodigoBarras);
    //$('#DatosProductosPendiente').show();
    cargarTabla(CodigoBarras);
    //obtener los roles del perfil
    //preguntar si
    //$("#fg003").addClass('disabled');
    $("#fg003").removeClass('disabled');
    $("#fg003").attr("href", '#');
});



$("#botonenviar").click(function() {
    if ($("#FormProducto").valid()) {
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": '<?php echo urlApi; ?>addProductoNuevo',
            "method": "POST",
            "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
            "data": {
                "Id_Categoria": $("#inputCategoria").val(),
                "CodigoBarra": $("#inputCodigoBarraNP").val(),
                "Producto": $("#inputProducto").val(),
                "id_Segmento": $("#inputSegmento").val(),
                "Id_Fabricante": $("#inputFabricante").val(),
                "Id_Marca": $("#inputMarca").val(),
                "Id_Tamano": $("#inputTamano").val(),
                "Id_TamanoRango": $("#inputTamanoRango").val(),
                "id_UnidadMedida": $("#inputUnidadMedida").val(),
                "Fragmentacion": $("#inputFragmentacion").val(),
                "activo": $('input:radio[name=activoAdd]:checked').val(),
                "Ind_Pendiente": $('input:radio[name=pendienteAdd]:checked').val(),
                "Id_Atributo1": $("#inputAtributo1").val(),
                "Id_Atributo2": $("#inputAtributo2").val(),
                "Id_Atributo3": $("#inputAtributo3").val(),
                "Id_Atributo4": $("#inputAtributo4").val(),
                "Id_Atributo5": $("#inputAtributo5").val(),
                "Id_Atributo6": $("#inputAtributo6").val(),
                "Id_Atributo7": $("#inputAtributo7").val()
            }
        }
        $.ajax(settings).done(function(response) {
            //cargarProductosPendientes('#selectProductosPendientes');
            //$('#showBotones').hide();
            //$('#showTabla').hide();
            $('#modal-crearProducto').modal('hide');
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
            var form = document.querySelector('#FormProducto');
            form.reset();
            
            //let xtable = $('#TableProducto').DataTable();
            //xtable.ajax.reload(null, false);
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
                var form = document.querySelector('#FormProducto');
                form.reset();
                window.location = '/homepantry20/index.php';
            }
        })
    }
});
function showMostrarMasivoPrecios() {
    
    
    
    
    
    
    $("#inputCodigoBarraModal").val($("#selectProductosPendientes").val());
	$("#inputPrecioMasivoModal").val("");

	$("#modal-MasivoPrecios").modal("show");
}
//****
function actualizarPrecioMasivo(){
    var CodigoBarras = $('#inputCodigoBarraModal').val();
    var precio = eliminarSeparadorMiles($('#inputPrecioMasivoModal').val());
    
    var settings = {
        "url": '<?php echo urlApi; ?>UpdatePrecioMasivoProductosPendientes/' + CodigoBarras+"/"+precio,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        var CodigoBarras = $('#selectProductosPendientes').val();
        cargarTabla(CodigoBarras);
        cargarAVG(CodigoBarras);
        cargarModa(CodigoBarras);
        $("#modal-MasivoPrecios").modal("hide");
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
//----
function actualizarPrecioMasivoV2(CodigoBarras,Precio,ArraySeleccionados){
    //var CodigoBarras = $('#inputCodigoBarraModal').val();
    //var Precio = eliminarSeparadorMiles($('#inputPrecioMasivoModal').val());
    
    console.log('Longitud array: '+ArraySeleccionados.length)
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": '<?php echo urlApi; ?>UpdatePrecioMasivoProductosPendientes',
        "method": "POST",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
        "data": {
            "codigoBarra": CodigoBarras,
            "precio": Precio,
            "array": ArraySeleccionados
        }
    }
    $.ajax(settings).done(function(response) {
        var CodigoBarras = $('#selectProductosPendientes').val();
        cargarTabla(CodigoBarras);
        cargarAVG(CodigoBarras);
        cargarModa(CodigoBarras);
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
//**** */
function cargarAVG(CodigoBarra) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAVGProductosPendientes/' + CodigoBarra,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        $('#inputPromedioR').val(new Intl.NumberFormat("de-DE").format(response[0].promedio));
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

function cargarModa(CodigoBarra) {
    var settings = {
        "url": '<?php echo urlApi; ?>getModaProductosPendientes/' + CodigoBarra,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        //$('#inputModaR').val(response[0].Moda);
        $('#inputModaR').val(new Intl.NumberFormat("de-DE").format(response[0].Moda));
        $('#DatosProductosPendiente').show();
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
        $('#inputPORCMinVal').val(response.Min_Por_Val);
        $('#inputPORCMaxVal').val(response.Max_Por_Val);
        $('#inputMinVal').val(response.Min_Val);
        $('#inputMaxVal').val(response.Max_Val);
        $('#inputPromedio').val(response.Promedio);
        $('#inputModa').val(response.Moda);
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

function cargarTotales(etiqueta,titulo,idCodigoBarras,idStatus) {
    var settings = {
        "url": '<?php echo urlApi; ?>getContarProductosPendientesxValidar/'+idCodigoBarras+'/'+idStatus,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        $(etiqueta).html('<strong>'+titulo+'</strong>'+response.data[0].total);
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

function verificarProductoExista() {
    CodigoBarras = $('#selectProductosPendientes').val();
    //alert('CodigoBarras: '+CodigoBarras);
    var settings = {
        "url": '<?php echo urlApi; ?>getProductoPendienteExista/'+CodigoBarras,
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        if (response.data[0].cant == 0){
            Swal.fire({
                icon: 'error',
                title: 'Codigo Barras: '+CodigoBarras,
                text: 'No existe, debe crearlo primero..!',
                })
        }else{
            CerrarProductoPendiente(CodigoBarras);
            $('#showBotones').hide();
            $('#showTabla').hide();
            $('#DatosProductosPendiente').hide();
            //$('#selectProductosPendientes').select2();
            jQuery("#PPTOP").attr('checked', true);
            var PPTOP = $('input:radio[name=PPTOP]:checked').val()
            cargarProductosPendientesTopN('#selectProductosPendientes',PPTOP);
            
            
            
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


function CerrarProductoPendiente(CodigoBarras){
    
    const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
    })
    swalWithBootstrapButtons.fire({
        title: '¿Seguro Estan Verificados',
        text: ".. todos los Productos?",
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText:  'No, Cancelar',
        confirmButtonText: 'Si, Cerrar Producto',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            var settings = {
                "url": '<?php echo urlApi; ?>updateCerrarProductoPendiente/'+CodigoBarras,
                "method": "get",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
            }
            $.ajax(settings).done(function(response){
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
            //cargarTabla(idConsumo);
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
                    //var form = document.querySelector('#FormUsuariosEdit');
                    //form.reset();
                    //window.location = '/homepantry20/index.php';
                }
            })
        }
    })
}


function cargarTotalesAll(etiqueta,titulo,idCodigoBarras) {
    var settings = {
        "url": '<?php echo urlApi; ?>getContarProductosPendientesxValidarAll/'+idCodigoBarras,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        $(etiqueta).html('<strong>'+titulo+'</strong>'+response.data[0].total);
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



function cargarResumenProducto(idCodigoBarras) {
    var settings = {
        "url": '<?php echo urlApi; ?>getPendbuscarDatosCodigoBarras/'+idCodigoBarras,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        $('#categoriaR').html("Categoria: "+response.data[0].Categoria);
        $('#descripcionR').html("Descripción: "+response.data[0].Producto);
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


function cargarProductosPendientes(identificador) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllProductosPendiente/',
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
            if (response.data[i].TipMed){ 
                TipoMed="Med"
            }else{
                TipoMed=""
            }
            selected.append("<option value=" + response.data[i].Numero_codigo_barras + ">" + response
                .data[i].Numero_codigo_barras +" - ("+response.data[i].Total+") - "+response.data[i].Estatus+" - "+TipoMed+"</option>");
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

function cargarProductosPendientesTopN(identificador,N) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllProductosPendienteTopN/'+N,
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
            if (response.data[i].TipMed){ 
                TipoMed="Med"
            }else{
                TipoMed=""
            }
            selected.append("<option value=" + response.data[i].Numero_codigo_barras + ">" + response
                .data[i].Numero_codigo_barras +" - ("+response.data[i].Total+") - "+response.data[i].Estatus+" - "+TipoMed+"</option>");
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

function UpdatePrecioCantidadManual(idConsumoDetalle,idMoneda,tasaCambio,cantidad,precio){
    var CodigoBarras = $('#selectProductosPendientes').val();
    $('#inputId').val(idConsumoDetalle);
    $('#inputIdMoneda').val(idMoneda);
    $('#inputTasaCambio').val(tasaCambio);
    $('#inputCodigoBarra').val(CodigoBarras);
    $('#inputCantidad').val(new Intl.NumberFormat("de-DE").format(cantidad));
    $('#inputPrecioUnitario').val(new Intl.NumberFormat("de-DE").format(precio));
    $('#modal-EditarDatos').modal('show');
}

function Visualizar(cantidad,precio,tasaCambio,/*moneda,*/precioConversion){
    var CodigoBarras = $('#selectProductosPendientes').val();
    $('#inputCodigoBarrasVis').val(CodigoBarras);
    $('#inputCantidadVis').val(new Intl.NumberFormat("de-DE").format(cantidad));
    $('#inputPrecioVis').val(new Intl.NumberFormat("de-DE").format(precio));
    $('#inputTasaCambioVis').val(new Intl.NumberFormat("de-DE").format(tasaCambio));
    //$('#inputMonedaVis').val(moneda);
    $('#inputTotalCompraVis').val(new Intl.NumberFormat("de-DE").format(precioConversion));
    $('#MostrarDetallesModal').modal('show');
}

function ActualizarConsumoManual() {
    
    var idConsumoDetalle =$('#inputId').val();
    var idMoneda = $('#inputIdMoneda').val();
    var tasaCambio = $('#inputTasaCambio').val();
    var cantidad = eliminarSeparadorMiles($('#inputCantidad').val());
    var precio = eliminarSeparadorMiles($('#inputPrecioUnitario').val());
    //precio = preformatFloat(precio);
    //alert(precio);
    //alert(cantidad);
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": '<?php echo urlApi; ?>UpdateProductosPendientesPrecioxAll/'+idConsumoDetalle+'/'+idMoneda+'/'+tasaCambio+'/'+precio+'/'+cantidad,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        var CodigoBarras = $('#selectProductosPendientes').val();
        cargarTabla(CodigoBarras);
        cargarAVG(CodigoBarras);
        cargarModa(CodigoBarras);
    $('#modal-EditarDatos').modal('hide');
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


function UpdatePrecioxPromedio(idConsumoDetalle,idMoneda,tasaCambio,cantidad){
    var precio = eliminarSeparadorMiles($('#inputPromedioR').val());
    const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
    })
    swalWithBootstrapButtons.fire({
        title: 'Desea Actualizar el Precio',
        text: ".. con el Promedio ??",
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText:  'No, Cancelar',
        confirmButtonText: 'Si, Actualizat con Promedio',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            var settings = {
                "url": '<?php echo urlApi; ?>UpdateProductosPendientesPrecioxAll/'+idConsumoDetalle+'/'+idMoneda+'/'+tasaCambio+'/'+precio+'/'+cantidad,
                "method": "get",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
            }
            $.ajax(settings).done(function(response){
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
            var CodigoBarras = $('#selectProductosPendientes').val();
            cargarTabla(CodigoBarras);
            cargarAVG(CodigoBarras);
            cargarModa(CodigoBarras);
    
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
                    //var form = document.querySelector('#FormUsuariosEdit');
                    //form.reset();
                    //window.location = '/homepantry20/index.php';
                }
            })
        }
    })
}
function UpdatePrecioxModa(idConsumoDetalle,idMoneda,tasaCambio,cantidad){
    var precio = eliminarSeparadorMiles($('#inputModaR').val());
    const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
    })
    swalWithBootstrapButtons.fire({
        title: 'Desea Actualizar el Precio',
        text: ".. con la Moda ?",
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText:  'No, Cancelar',
        confirmButtonText: 'Si, Actualizat con Moda',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            var settings = {
                "url": '<?php echo urlApi; ?>UpdateProductosPendientesPrecioxAll/'+idConsumoDetalle+'/'+idMoneda+'/'+tasaCambio+'/'+precio+'/'+cantidad,
                "method": "get",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
            }
            $.ajax(settings).done(function(response){
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
            var CodigoBarras = $('#selectProductosPendientes').val();
            cargarTabla(CodigoBarras);
            cargarAVG(CodigoBarras);
            cargarModa(CodigoBarras);
    
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
                    //var form = document.querySelector('#FormUsuariosEdit');
                    //form.reset();
                    //window.location = '/homepantry20/index.php';
                }
            })
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
        select.append("<option value='' selected disabled> -- Seleccione -- </option>");
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
// Inicio Crear Producto
$("#inputCategoria").change(function() {
    cargarFabricante("#inputFabricante",0);
    
    var id_categoria = $("#inputCategoria").val();
    if ($.trim($('#inputFabricante').val()) !== '') {
        var id_fabricante = $("#inputFabricante").val();
        let selectMarca = $("#inputMarca");
        selectMarca.find("option").remove();
        cargarMarca("#inputMarca",id_categoria,id_fabricante,0);
    }
    let selectSegmento = $("#inputSegmento");
    selectSegmento.find("option").remove();
    let selectTamano = $("#inputTamano");
    selectTamano.find("option").remove();
    let selectTamanoRango = $("#inputTamanoRango");
    selectTamanoRango.find("option").remove();
    let selectUnidadMedida = $("#inputUnidadMedida");
    selectUnidadMedida.find("option").remove();
    let selectAtributo1 = $("#inputAtributo1");
    selectAtributo1.find("option").remove();
    let selectAtributo2 = $("#inputAtributo2");
    selectAtributo2.find("option").remove();
    let selectAtributo3 = $("#inputAtributo3");
    selectAtributo3.find("option").remove();
    let selectAtributo4 = $("#inputAtributo4");
    selectAtributo4.find("option").remove();
    let selectAtributo5 = $("#inputAtributo5");
    selectAtributo5.find("option").remove();
    let selectAtributo6 = $("#inputAtributo6");
    selectAtributo6.find("option").remove();
    let selectAtributo7 = $("#inputAtributo7");
    selectAtributo7.find("option").remove();
    
    cargarSegmento("#inputSegmento",id_categoria,0);
    cargarTamano("#inputTamano",id_categoria,0);
    cargarTamanoRango("#inputTamanoRango",id_categoria,0);
    cargarUnidadMedida("#inputUnidadMedida",id_categoria,0);
    cargarAtributo1("#inputAtributo1",id_categoria,0);
    cargarAtributo2("#inputAtributo2",id_categoria,0);
    cargarAtributo3("#inputAtributo3",id_categoria,0);
    cargarAtributo4("#inputAtributo4",id_categoria,0);
    cargarAtributo5("#inputAtributo5",id_categoria,0);
    cargarAtributo6("#inputAtributo6",id_categoria,0);
    cargarAtributo7("#inputAtributo7",id_categoria,0);
    
});

$("#inputFabricante").change(function() {
    var id_categoria = $("#inputCategoria").val();
    var id_fabricante = $("#inputFabricante").val();
    let selectMarca = $("#inputMarca");
    selectMarca.find("option").remove();
    cargarMarca("#inputMarca",id_categoria,id_fabricante,0);
});


function cargarAtributo7(etiqueta,id_categoria,idS) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllAtributo7_x_Categoria/' + id_categoria,
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
                select.append("<option value=" + response.data[i].id + " selected>" + response
                .data[i].nombre + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id + ">" + response
                .data[i].nombre + "</option>");
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
function cargarAtributo6(etiqueta,id_categoria,idS) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllAtributo6_x_Categoria/' + id_categoria,
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
                select.append("<option value=" + response.data[i].id + " selected>" + response
                .data[i].nombre + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id + ">" + response
                .data[i].nombre + "</option>");
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
function cargarAtributo5(etiqueta,id_categoria,idS) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllAtributo5_x_Categoria/' + id_categoria,
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
                select.append("<option value=" + response.data[i].id + " selected>" + response
                .data[i].nombre + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id + ">" + response
                .data[i].nombre + "</option>");
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
function cargarAtributo4(etiqueta,id_categoria,idS) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllAtributo4_x_Categoria/' + id_categoria,
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
                select.append("<option value=" + response.data[i].id + " selected>" + response
                .data[i].nombre + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id + ">" + response
                .data[i].nombre + "</option>");
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
function cargarAtributo3(etiqueta,id_categoria,idS) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllAtributo3_x_Categoria/' + id_categoria,
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
                select.append("<option value=" + response.data[i].id + " selected>" + response
                .data[i].nombre + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id + ">" + response
                .data[i].nombre + "</option>");
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
function cargarAtributo2(etiqueta,id_categoria,idS) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllAtributo2_x_Categoria/' + id_categoria,
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
                select.append("<option value=" + response.data[i].id + " selected>" + response
                .data[i].nombre + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id + ">" + response
                .data[i].nombre + "</option>");
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
function cargarAtributo1(etiqueta,id_categoria,idS) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllAtributo1_x_Categoria/' + id_categoria,
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
                select.append("<option value=" + response.data[i].id + " selected>" + response
                .data[i].nombre + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id + ">" + response
                .data[i].nombre + "</option>");
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
function cargarUnidadMedida(etiqueta,id_categoria,idS) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllUnidadMed_x_Categoria/' + id_categoria,
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
                select.append("<option value=" + response.data[i].id + " selected>" + response
                .data[i].nombre + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id + ">" + response
                .data[i].nombre + "</option>");
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
function cargarTamanoRango(etiqueta,id_categoria,idS) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllRango_x_Categoria/' + id_categoria,
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
                select.append("<option value=" + response.data[i].id + " selected>" + response
                .data[i].nombre + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id + ">" + response
                .data[i].nombre + "</option>");
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
function cargarTamano(etiqueta,id_categoria,idS) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllTamano_x_Categoria/' + id_categoria,
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
                select.append("<option value=" + response.data[i].id + " selected>" + response
                .data[i].nombre + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id + ">" + response
                .data[i].nombre + "</option>");
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
function cargarSegmento(etiqueta,id_categoria,idS) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllSegmento_x_Categoria/' + id_categoria,
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
                select.append("<option value=" + response.data[i].id + " selected>" + response
                .data[i].nombre + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id + ">" + response
                .data[i].nombre + "</option>");
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
function cargarMarca(etiqueta,id_categoria,id_fabricante,idS) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllMarca_x_Categoria_x_Fabricante/' + id_categoria+'/'+id_fabricante,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        let selectMarca = $(etiqueta);
        selectMarca.find("option").remove();
        if (idS == 0){
            selectMarca.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id === idS){
                selectMarca.append("<option value=" + response.data[i].id + " selected>" + response
                .data[i].Marca + "</option>");
            }else{
                selectMarca.append("<option value=" + response.data[i].id + ">" + response
                .data[i].Marca + "</option>");
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
function cargarFabricante(etiqueta,idS) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllFabricante',
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
            if (response.data[i].id_Fabricante === idS){
            select.append("<option value=" + response.data[i].id_Fabricante + " selected>" + response
                .data[i].Fabricante + " - "+ response.data[i].id_Fabricante + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id_Fabricante + ">" + response
                .data[i].Fabricante + " - "+ response.data[i].id_Fabricante + "</option>");
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
//**** */

function eliminarSeparadorMiles(number){
    
    const regex = /[.]/g;
    var aux = number.replace(regex, '');
    aux = aux.replace(',', '.');
    return aux;
}
function cargarTabla(CodigoBarras){
    var bottomAcciones = function(cell, formatterParams){
        var value = cell.getRow().getData().Id_Consumo_Detalle_Productos;
        var idMoneda = cell.getRow().getData().id_Moneda;
        var tasaCambio = cell.getRow().getData().tasa_de_cambio;
        var cantidad = cell.getRow().getData().Cantidad;
        var precio = cell.getRow().getData().precio;
        var moneda = cell.getRow().getData().Moneda;
        var precioConversion = cell.getRow().getData().Precio_Conversion;

        /*return '<div class="btn-group" style="z-index:10000;">'
            +'<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown">Accion</button>'
            +'<ul class="dropdown-menu" role="menu" style="z-index:10000;">'
                +'<li style="z-index:10000;"><a href="#" onclick="UpdatePrecioCantidadManual('+value+'); return false;">Datos</a></li>'
                +'<li><a id="fg003" href="#" onclick="UpdatePrecioxPromedio('+value+'); return false;" >Actualizar por Promedio</a></li>'
                +'<li><a href="#" onclick="UpdatePrecioxModa('+value+'); return false;">Actualizar por Moda</a></li>'
                +'<li><a href="#" onclick="Visualizar('+value+'); return false;">Visualizar</a></li>'
            +'</ul>'
        +'</div>';*/
        //editar,validar,eliminar,pendiente,deshacer
        return  "<a id='fg003' href='#' onclick='UpdatePrecioCantidadManual("+value+","+idMoneda+","+tasaCambio+","+cantidad+","+precioConversion+"); return false;' ><i class='fa fa-edit' data-toggle='tooltip' data-placement='top' title='Actualizar Manual'></i></a>&nbsp;"
                +"<a id='fg003' href='#' onclick='UpdatePrecioxPromedio("+value+","+idMoneda+","+tasaCambio+","+cantidad+"); return false;' ><i class='fa fa-calculator text-success' data-toggle='tooltip' data-placement='top' title='Actualizar por Promedio'></i></a>&nbsp;"
                +"<a id='fg003' href='#' onclick='UpdatePrecioxModa("+value+","+idMoneda+","+tasaCambio+","+cantidad+"); return false;' ><i class='fa fa-arrow-up text-danger data-toggle='tooltip' data-placement='top' title='Actualizar por Moda'></i></a>&nbsp;"
                +"<a id='fg003' href='#' onclick='Visualizar("+cantidad+","+precio+","+tasaCambio+","+precioConversion+"); return false;' ><i class='fa fa-eye text-warning data-toggle='tooltip' data-placement='top' title='Visualizar'></i></a>" ;
    };
    var table = new Tabulator("#TableProductosPendientes", {
        ajaxURL: '<?php echo urlApi; ?>getDetallesxProductosPendientes/' + CodigoBarras,
        ajaxConfig:{
            method:"GET", //set request type to Position
            headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
        },
        height : "350px" ,
        layout:"fitDataStretch",
        rowFormatter:function(row){
            if(row.getData().col == "blue"){
                row.getElement().style.backgroundColor = "#A6A6DF";
            }
        },
        ajaxProgressiveLoad:"scroll",
        paginationSize : 20,
        placeholder:"Datos no encontrados",
        selectable:true,
        selectablePersistence:true, //make rows selectable
        columns:[
        /*{formatter:"rowSelection", titleFormatter:"rowSelection", hozAlign:"center", width:40, headerSort:false, cellClick:function(e, cell){
            cell.getRow().toggleSelect();
            }
        },*/
            {title:"Id Hogar", field:"Id_Hogar", sorter:"number"},
            {title:"Area", field:"Area", sorter:"string"},
            {title:"Estado", field:"Estado", sorter:"string"},
            {title:"Semana", field:"Semana", hozAlign:"center", sorter:"string"},
            {title:"Cantidad", field:"Cantidad", hozAlign:"center", sorter:"number"},
            {title:"Precio SC", field:"precio", sorter:"number", formatter:"money",
                formatterParams:{
                    decimal:",",
                    thousand:".",
                    precision:false
                }
            },
            {title:"Precio", field:"Precio_Conversion", sorter:"number", formatter:"money",
                formatterParams:{
                    decimal:",",
                    thousand:".",
                    precision:false
                }
            },
            {title:"Moneda", field:"Moneda", sorter:"string"},
            {formatter:bottomAcciones, hozAlign:"center"}
        ],
    });

    /*table.on("rowSelectionChanged", function(data, rows){
        document.getElementById("select-stats").innerHTML = data.length;
    });

    document.getElementById("seleccionarSoberanos").addEventListener("click", function(){
        table.deselectRow();
        table.selectRow(table.getRows().filter(row => row.getData().Moneda.indexOf("Soberano") >=0 ));
    });

    document.getElementById("deseleccionarSoberanos").addEventListener("click", function(){
        table.deselectRow(table.getRows().filter(row => row.getData().Moneda.indexOf("Soberano") >=0 ));
    });

    document.getElementById("seleccionarDigital").addEventListener("click", function(){
        table.deselectRow();
        table.selectRow(table.getRows().filter(row => row.getData().Moneda.indexOf("Digital") >=0 ));
    });

    document.getElementById("deseleccionarDigital").addEventListener("click", function(){
        table.deselectRow(table.getRows().filter(row => row.getData().Moneda.indexOf("Digital") >=0 ));
    });

    document.getElementById("select-all").addEventListener("click", function(){
        table.selectRow();
    });

    document.getElementById("deselect-all").addEventListener("click", function(){
        table.deselectRow();
    });
    */
    document.getElementById("bottonProcesar").addEventListener("click", function(){
        var datosSeleccionados = table.getSelectedData();
        const ids = datosSeleccionados.map(d => d.Id_Hogar);
        console.log(ids);
        
        var CodigoBarras = $("#selectProductosPendientes").val();
        var Precio = "";
        const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
        })
        swalWithBootstrapButtons.fire({
            title: '¿Esta seguro de procesar los precios masivamente?',
            text: "los precios masivos.. ",
            icon: 'warning',
            html:
                '<input id="inputcodigoBarrasProcesar" value='+CodigoBarras+'>' +
                '<input id="inputPrecioMasivoProcesar">',
            focusConfirm: false,
            showCancelButton: true,
            cancelButtonText:  'No, Cancelar',
            confirmButtonText: 'Si, Procesar precios masivos',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                Precio = document.getElementById('inputPrecioMasivoProcesar').value;
                actualizarPrecioMasivoV2(CodigoBarras,Precio,datosSeleccionados);
            }
        });
    });
}
function cargarTabla_(CodigoBarras){
    $('#TableProductosPendientes').dataTable({
        "lengthMenu": [
            [ -1],
            [ "Todo"]
        ],
        "bDestroy": true,
        "autoWidth": true,
        "dom": '<"wrapper"flitp><"center"B>',
        "responsive": true,
        "buttons": [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        "ajax": {
            "url": '<?php echo urlApi; ?>getDetallesxProductosPendientes/' + CodigoBarras,
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
                mData: 'Area',
                className: "text-center"
            },
            {
                mData: 'Estado',
                className: "text-center"
            },
            {
                mData: 'Semana',
                className: "text-center"
            },
            {
                mData: 'Cantidad',
                className: "text-center"
            },
            {
                mData: 'precio',
                className: "text-center",
                render: $.fn.dataTable.render.number( '.', ',', 2, '' )
            },
            {
                mData: 'Moneda',
                className: "text-center"
            }
        ],// 
        "columnDefs": [{
            "targets": 0,
            "orderable": false,
            'checkboxes': {
               'selectRow': true
            },
            "data": 'Id_Consumo_Detalle_Productos',
            "className": 'dt-body-center',
            "render": function(data, type, row, meta) {
                return '<input type="checkbox" name="id[]" value="' + $('<div/>').text(data).html() + '">';
            },
            
        },
        {
            "targets": 8,
            "orderable": false,
            "data": 'Id_Consumo_Detalle_Productos',
            "className": 'dt-body-center',
            "render": function(data, type, row, meta) {
                return '<div class="btn-group"><button type="button" class="btn btn-info  btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accion</button>'
                +'<div class="dropdown-menu">'
                +'<a class="dropdown-item" href="#" onclick="UpdatePrecioCantidadManual('+data+'); return false;">Datos</a>'
                +'<a id="fg003" class="dropdown-item" href="#" onclick="UpdatePrecioxPromedio('+data+'); return false;" >Actualizar por Promedio</a>'
                +'<a class="dropdown-item" href="#" onclick="UpdatePrecioxModa('+data+'); return false;">Actualizar por Moda</a>'
                +'<div class="dropdown-divider"></div>'
                +'<a class="dropdown-item" href="#" onclick="Visualizar('+data+'); return false;">Visualizar</a>'
                +'</div></div>';
            }
        }]
    });
}

</script>
<script src="<?php echo base_url('jsHP/jsBitacora.js') ?>"></script>
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
<script src="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/js/dataTables.checkboxes.min.js"></script>
