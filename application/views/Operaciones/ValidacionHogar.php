<!-- Content Header (Page header) -->
<?php $this->load->view('Plantillas/Header');?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="fas fa-home"></i>&nbsp;Validacion de Hogar:</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content Agregar Producto 11111-->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12"> <!--  bg-danger bg-gradient -->
                <div class="form-group row mb-0 mt-0">
                    <div class="col-md-3">
                        <div class="inputText font-weight-bold">Semana:</div>
                        <select id="selectSemanaTabla" name="selectSemanaTabla" class="form-control form-control-sm">
                        </select>
                    </div>
                    <div class="col-md-2">
                        <div class="inputText font-weight-bold">Area:</div>
                        <select id="selectAreaTabla" name="selectAreaTabla" class="form-control form-control-sm" data-live-search="true">
                        </select>
                    </div>
                    <div class="col-md-2">
                        <div class="inputText font-weight-bold">Estado:</div>
                        <select id="selectEstadoTabla" name="selectEstadoTabla" class="form-control form-control-sm">
                        </select>
                    </div>
                    <div class="col-md-2">
                        <div class="inputText font-weight-bold">Hogar:</div>
                        <select id="selectHogarTabla" name="selectHogarTabla" class="form-control form-control-sm">
                        </select>
                    </div>
                    <div class="col-md-2">
                        <div class="inputText font-weight-bold">Tipo Consumo:</div>
                        <select id="selectTipoConsumoTabla" name="selectTipoConsumoTabla" class="form-control form-control-sm" data-live-search="true">
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-0 mt-0">
                    <div class="col-md-2">
                        <div class="inputText font-weight-bold">Dia Semana:</div>
                        <select id="selectDiaSemanaTabla" name="selectDiaSemanaTabla" class="form-control form-control-sm">
                        </select>
                    </div>
                    <div class="col-md-2">
                        <div class="inputText font-weight-bold">Fecha:</div>
                        <select id="selectFechaTabla" name="selectFechaTabla" class="form-control form-control-sm">
                        </select>
                    </div>
                    <!--<div class="col-md-2">
                        <div class="inputText font-weight-bold">Mostrar:</div>
                        <select id="selectMostrarTabla" name="selectMostrarTabla" class="form-control form-control-sm" data-live-search="true">
                            <option value="2">Mostrar Todos</option>
                            <option value="0">Solo Pendientes</option>
                            <option value="1">Solo Validados</option>
                        </select>
                    </div>-->
                    <div class="col-md-3">
                        <div class="inputText font-weight-bold">Otra Semana:</div>
                        <select id="selectSemanaHogar" name="selectSemanaHogar" class="form-control form-control-sm">
                        </select>
                    </div>
                    <div class="col-md-4">
                        <div class="inputText font-weight-bold">Consumos Investigados:</div>
                        <select id="selectConsumosInvestigadosTabla" name="selectConsumosInvestigadosTabla" class="form-control form-control-sm" onchange="buscarDetalleConsumoResueltoxDia();">
                        </select>
                    </div>
                    <div class="col-sm-1">
                        <div class="inputText font-weight-bold">Investigar:</div>
                        <button type="button" id="buttonInvestigar" class="btn btn-block btn-xs btn-primary" onclick="callEnviarConsumoInvestigar();">
                            <i class="fas fa-info-circle fa-2x"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table id="TablaXXX" class="table display compact table-sm">
                        <thead>
                            <tr>
                                <th>Hogares:&nbsp;<span class="label label-default" id="totalHogares">0</span></th>
                                <th>Consumos:&nbsp;<span class="label label-info" id="totalConsumos">0</span></th>
                                <th>Validados:&nbsp;<span class="label label-success" id="totalValidados">0</span></th>
                                <th>Pendientes:&nbsp;<span class="label label-danger" id="totalPendientes">0</span></th>
                                <th>Investigados:&nbsp;<span class="label label-primary" id="totalInvestigados">0</span></th>
                                <th>Resueltos:&nbsp;<span class="label label-success" id="totalResueltos">0</span></th>
                                <th>Alta:&nbsp;<span class="label label-warning" id="altaHogar"></span></th>
                                <th>Responsable:&nbsp;<span class="label label-warning" id="responsableHogar"></span></th>
                                <th>Celular:&nbsp;<span class="label label-warning" id="celularHogar"></span></th>
                                <th>Integrantes:&nbsp;<span class="label label-warning" id="integrantesHogar"></span></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <div class="col-md-12" id="ocultarMostrarDetalleFactura" style="display:none;" >
                <div class="form-group row mb-0 mt-0">
                    <div class="col-md-12 text-center">
                        <h4>Detalle de la Factura</h4>
                    </div>
                </div>
                <div class="form-group row mb-0 mt-0">
                    <div class="col-md-2">
                        <div class="inputText font-weight-bold">Canal:</div>
                        <select id="selectCanalTabla" name="selectCanalTabla" class="form-control form-control-sm">
                        </select>
                    </div>
                    <div class="col-md-2">
                        <div class="inputText font-weight-bold">Cadena:</div>
                        <select id="selectCadenaTabla" name="selectCadenaTabla" class="form-control form-control-sm">
                        </select>
                    </div>
                    <div class="col-md-1">
                        <div class="inputText font-weight-bold">Factura:</div>
                        <div class="card">
                            <div class="form-group">
                            <div class="form-check d-inline">
                                    <input class="form-check-input" type="radio" id="tieneFactura" name="tieneFactura" value="0" disabled='disabled'">
                                    <label class="form-check-label">No</label>
                                </div>
                                <div class="form-check d-inline">
                                    <input class="form-check-input" type="radio" id="tieneFactura" name="tieneFactura" value="1" disabled='disabled'">
                                    <label class="form-check-label">Si</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="inputText font-weight-bold">Total Productos:</div>
                        <input type="text" name="inputTotalProductos" id="inputTotalProductos" class="form-control input-sm">
                    </div>
                    <div class="col-md-2">
                        <div class="inputText font-weight-bold">Tipo de Moneda:</div>
                        <select id="selectTipoMonedaTabla" name="selectTipoMonedaTabla" class="form-control form-control-sm">
                        </select>
                    </div>
                    <div class="col-md-2">
                        <div class="inputText font-weight-bold">Monto Factura:</div>
                        <input type="text" name="inputMontoFactura" id="inputMontoFactura" class="form-control input-sm">
                    </div>
                    <div class="col-md-1">
                        <div class="inputText font-weight-bold">Guardar:</div>
                        <button type="button" class="btn btn-block btn-xs btn-primary" data-toggle="modal" data-target="#guardarCambioFacturaModal">
                        <i class="fas fa-save fa-2x"></i>
                        </button>
                    </div>
                </div>
                <HR/>
                <div class="form-group-row alert alert-info" role="alert" id="hogarResuelto" style="display:none;" >
                    <h5>
                        <strong>
                            <p class="text-center"><i class="fas fa-check-double"></i>&nbsp;INVESTIGACI&Oacute;N DE CONSUMO RESUELTO&nbsp;<i class="fas fa-check-double"></i></p>
                            <p id="motivoInv"></p>
                            <p id="comentarioInv"></p>
                            <p id="motivoRsp" class="text-danger"></p>
                        </strong>
                    </h5>
                </div>
                <div class="form-group-row form-group-sm row mb-0 mt-0">
                    <div class="col-sm-9">
                        <p class="text-danger" id="idDetalleConsumoM"></p>
                    </div>
                </div>
                <div id="botonera" class="form-group form-group-sm row mb-0 mt-0">

                    <div class="col-sm-2">
                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="addProducto()">
                            <i class='fas fa-plus'></i>&nbsp;Agregar Producto
                        </button>
                    </div>
                    <div class="col-sm-2">
                        <button type="button" class="btn btn-outline-danger btn-sm" onclick="eliminarProducto()">
                            <i class="fas fa-times"></i>&nbsp;Eliminar Consumo
                        </button>
                    </div>
                    <div class="col-sm-2">
                        <button type="button" id="idValidarMasivo" class="btn btn-outline-success btn-sm">
                            <i class="fas fa-check-double"></i>&nbsp;Validar Masivo
                        </button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-outline-warning btn-sm" onclick="deshacerMasivo()">
                            <i class="fas fa-undo"></i>&nbsp;Deshacer Masivo
                        </button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" id="idPendienteMasivo" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#PendienteMasivoModal">
                            <i class="fa fa-exclamation-triangle"></i>&nbsp;Pendiente Masivo
                        </button>
                    </div>
                    <div class="col-sm-2">
                        <button type="button" id="idCambioMonedaMasivo" class="btn btn-outline-dark btn-sm">
                            <i class="bi bi-currency-exchange"></i>&nbsp;Moneda Masivo
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <HR/>
        <div id="ocultarMostrarDetalle" style="display:none;" >
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group row mb-0 mt-0">
                        <div class="col-md-12 text-center">
                            <div id="TablaDetalleProductos"></div>
                        </div>
                    </div>
                </div>
            </div>
            <HR/>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group row mb-0 mt-0">
                        <div class="col-md-12 text-center">
                            <h4>Indicador por semana</h4>
                        </div>
                    </div>
                    <div class="form-group row mb-0 mt-0">
                        <div class="col-md-12 text-center">
                            <div id="TablaResumen"></div>
                        </div>
                    </div>
                </div>
            </div>
            <HR/>
            <div class="row">
                <div class="col-md-12"> <!--  bg-danger bg-gradient -->
                    <div class="form-group row mb-0 mt-0">
                        <div class="col-md-12 text-center">
                            <h4>Grafica indicador por semana</h4>
                        </div>
                    </div>
                    <div class="form-group row mb-0 mt-0">
                        <div class="col-md-6">
                            <canvas id="ChartPrecio"></canvas>
                            <div class="text-center">
                                <h4>Monto</h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <canvas id="ChartCantidad"></canvas>
                            <div class="text-center">
                                <h4>Unidades</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Windows Modal Editar Tipo de Moneda 222222 -->

<!-- /.modal AgregarProducto  aaaaaa-->
<div class="modal fade" id="AgregarProductoModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class='fas fa-plus'></i>&nbsp;Agregar Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formAgregarProducto">
                    <div class="form-group">
                        <span class="text-danger text-center" id="waiting" style="display:none;"></span>
                        <input type="hidden" class="form-control input-sm text-right" id="inputIdConsumo" placeholder="...." readonly />
                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="otrosProductos" value="" />
                        <label for="otrosProductos" class="text-danger">Otros Productos:</label>
                    </div>
                    <div class="form-group form-group-sm row mb-0 mt-0">
                        <div class="col-sm-6">
                            <div id="showCategoriaMaster" style="display: none;" >
                                <div class="inputText font-weight-bold">CategoriaM:</div>
                                <select id="selectCategoriaMaster" name="selectCategoriaMaster" class="form-control" data-live-search="true">
                                </select>
                            </div>
                            <div id="showCategoriaOtrosProductos" style="display: none;">
                                <div class="inputText font-weight-bold">CategoriaO:</div>
                                <select id="selectCategoriaOtrosProductos" name="selectCategoriaOtrosProductos" class="form-control" data-live-search="true">
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div id="showProductoMaster" style="display: none;" >
                                <div class="inputText font-weight-bold">Producto:</div>
                                <select id="selectProductoMaster" name="selectProductoMaster" class="form-control" data-live-search="true">
                                </select>
                            </div>
                            <div id="showMarcaCubito" style="display: none;">
                                <div class="inputText font-weight-bold">Marca:</div>
                                <select id="selectMarcaCubitos" name="selectMarcaCubitos" class="form-control" data-live-search="true">
                                </select>
                            </div>
                        </div>
                    </div>
                    <div id="showCodigoBarras" style="display: none;">
                        <div class="form-group form-group-sm row mb-0 mt-0">
                            <div class="col-sm-6">
                                <div class="inputText font-weight-bold">C&oacute;digo de Barras:</div>
                                    <input type="text" class="form-control input-sm text-right" id="inputCodigoBarrasModal" name="inputCodigoBarrasModal" placeholder="...." readonly />
                                    <div class="error" id="inputcodigobarErr"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-group-sm row mb-0 mt-0">
                        <div class="col-sm-4">
                            <div class="inputText font-weight-bold">Tipo de Moneda:</div>
                            <select id="selectMonedaNew" name="selectMonedaNew" class="form-control">
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <div class="inputText font-weight-bold">Tasa de Cambio:</div>
                            <input type="text" class="form-control input-sm text-right" id="inputTasaCambioModal" placeholder="...." readonly />
                        </div>
                        <div class="col-sm-4">
                            <div class="inputText font-weight-bold" id="nombreCantidad" >Cantidad:</div>
                            <input type="text" class="form-control input-sm text-right" id="inputCantidadProductoModal" placeholder="...."  required />
                            <div class="error" id="inputcantidadErr"></div>
                        </div>
                    </div>
                    <div class="form-group form-group-sm row mb-0 mt-0">
                        <div class="col-md-4">
                            <div class="inputText font-weight-bold" id="nombrePrecio">Precio Unitario:</div>
                            <input type="text" class="form-control input-sm text-right" id="inputPrecioUnitarioModal" placeholder="...."  required />
                            <div class="error" id="inputprecioErr"></div>
                        </div>
                        <div class="col-md-4">
                            <div class="inputText font-weight-bold">Total Compra:</div>
                            <input type="text" class="form-control input-sm text-right" id="inputTotalCompraModal" placeholder="...." readonly />
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" title="Salir"><i class='fas fa-sign-out-alt'></i> Salir</button>
                <button type="button" class="btn btn-primary" title="Grabar" onclick="AgregarProductosalConsumo();" id="btn-salvarProd"><i class='fas fa-save'></i> Grabar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- /.modal investigarConsumo -->
<div class="modal fade" id="investigarConsumoModal">
    <div class="modal-dialog modal-dialog-centered"  role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class='fas fa-plus'></i>&nbsp;Investigar Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input type="hidden" class="form-control input-sm text-right" id="txtIdConsumoInvestigar" placeholder="...." readonly />
                    <label class="text-primary">Motivo de la Investigacion:</label>
                    <select class="form-control input-sm" id="selectInvestigar" name="selectInvestigar" required />
                    </select>
                    <div class="error" id="txtinvestigacionErr"></div>
                </div>
                <div class="form-group">
                    <label for="comentario">Deje aqu&iacute; comentario adicional:</label>
                    <textarea class="form-control" rows="5" id="txtComentarios" style="resize: none;"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" title="Salir"><i class='fas fa-sign-out-alt'></i> Salir</button>
                <button type="button" class="btn btn-primary" title="Grabar" onclick="enviarConsumoInvestigar();" id="btn-investigar"><i class='fas fa-paper-plane'></i> Guardar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade" id="EditarConsumoModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class='fas fa-search'></i>&nbsp;Actualizar Consumo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            
            <div class="form-group">
                <input type="hidden" class="form-control input-sm text-right" id="txtId" placeholder="...." readonly />
            </div>
            <div class="form-group">
                <label>Codigo de Barras:</label>
                <input type="text" class="form-control input-sm text-right" id="txtCodigoBarra" placeholder="...." minlength="7" maxlength="16" onkeypress="return onlyNumberKey(event);" required />
                <div class="error" id="codigobarErr"></div>
            </div>
            <div class="form-group">
                <label class="checkbox-inline"><input type="checkbox" id="chkSinBarras" value="">Producto sin C&oacute;digo de barras</label>
            </div>
            <div class="form-group">
                <label class="text-primary">Moneda de Pago:</label>
                <select class="form-control input-sm" name="cboTMonedaPago" id="cboTMonedaPago"  required>
                </select>
                <div class="error" id="txttmonedapagoErr"></div>
            </div>
            <div class="form-group">
                <label>Tasa de Cambio:</label>
                <input type="text" class="form-control input-sm text-right" id="txtTasa" placeholder="...." readonly /> 
            </div>
            <div class="form-group" id="showUnidades" style="display: none;">
                <label class="control-label" for="cantidad">Unidades por Empaque:</label>
                <input type="number" id="unidades" name="unidades" class="form-control input-sm" placeholder="Unidades por empaque" min="1" max="30" step="1" />
                <input type="hidden" id="tipocat" name="tipocat" readonly />
            </div>
            <div class="form-group">
                <label>Cantidad:</label>
                <input type="text" class="form-control input-sm text-right" id="txtCantidad" step="0.1" placeholder="...." onblur="ActualizarCalculoTotales();" required />
                <div class="error" id="cantidadErr"></div>
            </div>
            <div class="form-group">
                <label>Precio Unitario:</label>
                <input type="text" class="form-control input-sm text-right" id="txtPrecio" placeholder="...." onblur="ActualizarCalculoTotales();" required />
                <div class="error" id="precioErr"></div>
            </div>
            <div class="form-group">
                <label class="text-primary">Total Compra:</label>
                <input type="text" class="form-control input-sm text-right" id="txtTotal" placeholder="...." readonly />
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal" title="Salir"><i class='fas fa-sign-out-alt'></i> Salir</button>
            <button type="button" class="btn btn-primary" title="Grabar" onclick="salvarCambioProductos();" id="btn-salvar"><i class='fas fa-save'></i>Grabar</button>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- /.modal guardarCambioFacturaModal -->
<div class="modal fade" id="guardarCambioFacturaModal">
    <div class="modal-dialog modal-dialog-centered"  role="document">
        <div class="modal-content">
           <div class="modal-header">
                <h5 class="modal-title"><i class='fas fa-plus'></i>&nbsp;Cambios datos de la Factura</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <div class="modal-body">
                <div class="form-group">
                    <h5 class="text-center">¿Estan Correctos Todos los ajustes realizados?</h5>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" title="Salir"><i class='fas fa-sign-out-alt'></i> Salir</button>
                <button type="button" class="btn btn-primary" title="Grabar" onclick="updateFactura();" id="btn-investigar"><i class='fas fa-paper-plane'></i> Guardar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- /.modal ValidarMasivoModal -->
<div class="modal fade" id="ValidarMasivoModal">
    <div class="modal-dialog modal-dialog-centered"  role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class='fas fa-plus'></i>&nbsp;Validar Masivo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <h5 class="text-center">¿Seguro desea Validar Masivo?</h5>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" title="Salir"><i class='fas fa-sign-out-alt'></i> Salir</button>
                <button type="button" class="btn btn-primary" title="Grabar" onclick="updateValidarMasivo();" id="btn-investigar"><i class='fas fa-paper-plane'></i> Guardar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- /.modal EliminarStatusProductosModal -->
<div class="modal fade" id="EliminarStatusProductosModal">
    <div class="modal-dialog modal-dialog-centered"  role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class='fas fa-plus'></i>&nbsp;Status Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <h5 class="text-center">¿Esta Seguro deshacer el status del producto?</h5>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" title="Salir"><i class='fas fa-sign-out-alt'></i> Salir</button>
                <button type="button" class="btn btn-primary" title="Grabar" onclick="updateStatusProductos__();" id="idupdateStatusProductos"><i class='fas fa-paper-plane'></i> Guardar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- /.modal CambioMonedaMasivoModal -->
<div class="modal fade" id="CambioMonedaMasivoModal">
    <div class="modal-dialog modal-dialog-centered"  role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class='fas fa-edit'></i>&nbsp;Actualizar Moneda de Pago</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="text-primary">Moneda de Pago:</label>
                    <select class="form-control input-sm" name="MonedaConsumoMasivo" id="MonedaConsumoMasivo" required />
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" title="Salir"><i class='fas fa-sign-out-alt'></i> Salir</button>
                <button type="button" class="btn btn-primary" title="Grabar" onclick="cambioMonedaMasivo();" id="btn-investigar"><i class='fas fa-paper-plane'></i> Guardar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- /Windows Modal Visualizar Registros-->
<?php $this->load->view('Plantillas/Footer');?>

<script>
$(document).ready(function() {
    
    if (localStorage.getItem("flagValProdToValHogar") !== null) {
        var idSemana = localStorage.getItem("idSemana");
        var idArea = localStorage.getItem("idArea");
        var idEstado = localStorage.getItem("idEstado");
        var idPanelHogar = localStorage.getItem("idPanelHogar");
        var idTipoConsumo = localStorage.getItem("idTipoConsumo");
        var fechaCreacion = localStorage.getItem("fechaCreacion");
        var idConsumo = localStorage.getItem("idConsumo");
        cargarSemana('#selectSemanaTabla',idSemana);
        cargarArea('#selectAreaTabla',idArea,idSemana);
        cargarEstado('#selectEstadoTabla',idEstado,idSemana,idArea);
        cargarHogar('#selectHogarTabla',idPanelHogar,idSemana,idArea,idEstado,/*idMostrar*/2);
        cargarTipoConsumo('#selectTipoConsumoTabla',idTipoConsumo,idSemana,idPanelHogar,/*idMostrar*/2);
        cargarDiaSemana('#selectDiaSemanaTabla',fechaCreacion,idSemana,idPanelHogar,idTipoConsumo,2);
        cargarFecha('#selectFechaTabla',idConsumo,idSemana,idPanelHogar,idTipoConsumo,fechaCreacion,/*idMostrar*/2);
        ///document.getElementById('selectFechaTabla').disabled = true;
        cargarConsumosInvestigados('#selectConsumosInvestigadosTabla',idSemana,0);
        CalcularTotalesConsumos(idSemana);
        DatosResponsableHogar(idPanelHogar);
        
        
        cargarResumen(idConsumo);
        cargarTablaConsumos(idConsumo);
        datosGrafica(idSemana,idPanelHogar,idTipoConsumo);
        cargarSemana('#selectSemanaHogar',idSemana);
        cargarTablaResumen(idSemana,idPanelHogar,idTipoConsumo)
        $('#ocultarMostrarDetalle').show();
        $('#ocultarMostrarDetalleFactura').show();
        
        localStorage.removeItem('flagValProdToValHogar');
        
    }else{
        cargarSemana('#selectSemanaTabla',0);
        $('#ocultarMostrarDetalle').hide();
        $('#ocultarMostrarDetalleFactura').hide();
        document.getElementById('buttonInvestigar').disabled = true;
    }
    
    
    $(function($) {
        $('#txtPrecio').autoNumeric('init', {
            lZero: 'deny',
            aSep: '.',
            aDec: ','
        });
        $('#txtCantidad').autoNumeric('init', {
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
    //99999
    $('#idCambioMonedaMasivo').click(function(){
        cargarMoneda('#MonedaConsumoMasivo',0);
        $('#CambioMonedaMasivoModal').modal('show');
    });
});

$("#selectSemanaTabla").change(function() {
    var idSemana = $("#selectSemanaTabla").val();
    let select = $("#selectAreaTabla");
    select.find("option").remove();
    select = $("#selectEstadoTabla");
    select.find("option").remove();
    select = $("#selectHogarTabla");
    select.find("option").remove();
    select = $("#selectTipoConsumoTabla");
    select.find("option").remove();
    select = $("#selectDiaSemanaTabla");
    select.find("option").remove();
    select = $("#selectFechaTabla");
    select.find("option").remove();
    select = $("#selectConsumosInvestigadosTabla");
    select.find("option").remove();
    $("#responsableHogar").html("");
    $("#celularHogar").html("");
    $("#altaHogar").html("");
    $("#integrantesHogar").html("");
    $('#ocultarMostrarDetalle').hide();
    $('#ocultarMostrarDetalleFactura').hide();
    $('#hogarResuelto').hide();
    cargarArea('#selectAreaTabla',0,idSemana);
    cargarConsumosInvestigados('#selectConsumosInvestigadosTabla',idSemana,0);
    CalcularTotalesConsumos(idSemana);
    $('#botonera').show();
    document.getElementById('buttonInvestigar').disabled = true;
    document.getElementById('selectHogarTabla').disabled = false;
    document.getElementById('selectEstadoTabla').disabled = false;
    document.getElementById('selectAreaTabla').disabled = false;
});

$("#selectAreaTabla").change(function() {
    var idSemana = $("#selectSemanaTabla").val();
    var idArea = $("#selectAreaTabla").val();
    let select = $("#selectEstadoTabla");
    select.find("option").remove();
    select = $("#selectHogarTabla");
    select.find("option").remove();
    select = $("#selectTipoConsumoTabla");
    select.find("option").remove();
    select = $("#selectDiaSemanaTabla");
    select.find("option").remove();
    select = $("#selectFechaTabla");
    select.find("option").remove();
    select = $("#selectSemanaHogar");
    select.find("option").remove();
    $('#ocultarMostrarDetalle').hide();
    $('#ocultarMostrarDetalleFactura').hide();
    $("#responsableHogar").html("");
    $("#celularHogar").html("");
    $("#altaHogar").html("");
    $("#integrantesHogar").html("");
    cargarEstado('#selectEstadoTabla',0,idSemana,idArea);
    document.getElementById('buttonInvestigar').disabled = true;
    
});/**/
$("#selectEstadoTabla").change(function() {
    var idSemana = $("#selectSemanaTabla").val();
    var idArea = $("#selectAreaTabla").val();
    var idEstado = $("#selectEstadoTabla").val();
    var idMostrar = $("#selectMostrarTabla").val();
    let select = $("#selectHogarTabla");
    select.find("option").remove();
    select = $("#selectTipoConsumoTabla");
    select.find("option").remove();
    select = $("#selectDiaSemanaTabla");
    select.find("option").remove();
    select = $("#selectFechaTabla");
    select.find("option").remove();
    select = $("#selectSemanaHogar");
    select.find("option").remove();
    $('#ocultarMostrarDetalle').hide();
    $('#ocultarMostrarDetalleFactura').hide();
    cargarHogar('#selectHogarTabla',0,idSemana,idArea,idEstado,/*idMostrar*/2);
    $("#responsableHogar").html("");
    $("#celularHogar").html("");
    $("#altaHogar").html("");
    $("#integrantesHogar").html("");
    document.getElementById('buttonInvestigar').disabled = true;
    
});/**/
$("#selectHogarTabla").change(function() {
    var idSemana = $("#selectSemanaTabla").val();
    var idHogar = $("#selectHogarTabla").val();
    var idMostrar = $("#selectMostrarTabla").val();
    let select = $("#selectTipoConsumoTabla");
    select.find("option").remove();
    select = $("#selectDiaSemanaTabla");
    select.find("option").remove();
    select = $("#selectFechaTabla");
    select.find("option").remove();
    select = $("#selectSemanaHogar");
    select.find("option").remove();
    $('#ocultarMostrarDetalle').hide();
    $('#ocultarMostrarDetalleFactura').hide();
    cargarTipoConsumo('#selectTipoConsumoTabla',0,idSemana,idHogar,/*idMostrar*/2);
    DatosResponsableHogar(idHogar);
    document.getElementById('buttonInvestigar').disabled = true;
    
});/**/
$("#selectTipoConsumoTabla").change(function() {
    var idSemana = $("#selectSemanaTabla").val();
    var idHogar = $("#selectHogarTabla").val();
    var idTipoConsumo = $("#selectTipoConsumoTabla").val();
    var idMostrar = $("#selectMostrarTabla").val();
    let select = $("#selectDiaSemanaTabla");
    select.find("option").remove();
    select = $("#selectFechaTabla");
    select.find("option").remove();
    $('#ocultarMostrarDetalle').hide();
    $('#ocultarMostrarDetalleFactura').hide();
    cargarDiaSemana('#selectDiaSemanaTabla',0,idSemana,idHogar,idTipoConsumo,/*idMostrar*/2);
    document.getElementById('buttonInvestigar').disabled = true;
    
});/**/

$("#selectDiaSemanaTabla").change(function() {
    
    if ($('#selectSemanaHogar option:selected').length != 0){
        var idSemana = $("#selectSemanaHogar").val();
    }else{
        var idSemana = $("#selectSemanaTabla").val();
    }
    //var idSemana = $("#selectSemanaTabla").val();
    var idHogar = $("#selectHogarTabla").val();
    var idTipoConsumo = $("#selectTipoConsumoTabla").val();
    var Fecha = $("#selectDiaSemanaTabla").val();
    var idMostrar = $("#selectMostrarTabla").val();
    let select = $("#selectFechaTabla");
    select.find("option").remove();
    $('#ocultarMostrarDetalle').hide();
    $('#ocultarMostrarDetalleFactura').hide();
    cargarFecha('#selectFechaTabla',0,idSemana,idHogar,idTipoConsumo,Fecha,/*idMostrar*/2);
    document.getElementById('buttonInvestigar').disabled = true;
    
});

/**/
$("#selectFechaTabla").change(function() {
    if ($('#selectSemanaHogar option:selected').length != 0){
        var idSemana = $("#selectSemanaHogar").val();
        document.getElementById('buttonInvestigar').disabled = true;
    }else{
        var idSemana = $("#selectSemanaTabla").val();
        document.getElementById('buttonInvestigar').disabled = false;
    }
    var idHogar = $("#selectHogarTabla").val();
    var idTipoConsumo = $("#selectTipoConsumoTabla").val();

    var idConsumo = $("#selectFechaTabla").val();
    cargarResumen(idConsumo);
    cargarTablaConsumos(idConsumo);
    datosGrafica(idSemana,idHogar,idTipoConsumo);
    cargarSemana('#selectSemanaHogar',idSemana);
    cargarTablaResumen(idSemana,idHogar,idTipoConsumo)
    $('#ocultarMostrarDetalle').show();
    $('#ocultarMostrarDetalleFactura').show();
    var idSemana = $("#selectSemanaTabla").val();
    var idSemanaHogar = $("#selectSemanaHogar").val();
    
    if (idSemana === idSemanaHogar){
        document.getElementById('buttonInvestigar').disabled = false;
    }
});

$("#selectSemanaHogar").change(function() {
    var idSemana = $("#selectSemanaTabla").val();
    var idSemanaHogar = $("#selectSemanaHogar").val();
    var idHogar = $("#selectHogarTabla").val();
    var idTipoConsumo = $("#selectTipoConsumoTabla").val();
    //let select = $("#selectTipoConsumoTabla");
    //select.find("option").remove();
    let select = $("#selectDiaSemanaTabla");
    select.find("option").remove();
    select = $("#selectFechaTabla");
    select.find("option").remove();
    cargarDiaSemana('#selectDiaSemanaTabla',0,idSemanaHogar,idHogar,idTipoConsumo,/*idMostrar*/2);
    //cargarTipoConsumo('#selectTipoConsumoTabla',0,idSemana,idHogar,/*idMostrar*/2);
    $('#ocultarMostrarDetalle').hide();
    $('#ocultarMostrarDetalleFactura').hide();
    $("#responsableHogar").html("");
    $("#celularHogar").html("");
    $("#altaHogar").html("");
    $("#integrantesHogar").html("");
    document.getElementById('buttonInvestigar').disabled = true;
    
    if (idSemana != idSemanaHogar){
        $('#botonera').hide();
        document.getElementById('selectHogarTabla').disabled = true;
        document.getElementById('selectEstadoTabla').disabled = true;
        document.getElementById('selectAreaTabla').disabled = true;
        document.getElementById('buttonInvestigar').disabled = true;
        
    
    }else{
        $('#botonera').show();
        document.getElementById('selectHogarTabla').disabled = false;
        document.getElementById('selectEstadoTabla').disabled = false;
        document.getElementById('selectAreaTabla').disabled = false;
        //document.getElementById('buttonInvestigar').disabled = true;
    }
});

$("#selectConsumosInvestigadosTabla").change(function() {
    
    //var idSemana = $("#selectSemanaTabla").val();
    var idHogar = $("#selectHogarTabla").val();
    //var idTipoConsumo = $("#selectTipoConsumoTabla").val();
    
    var idConsumo = $("#selectConsumosInvestigadosTabla").val();
    let select = $("#selectAreaTabla");
    select.find("option").remove();
    select = $("#selectEstadoTabla");
    select.find("option").remove();
    select = $("#selectHogarTabla");
    select.find("option").remove();
    select = $("#selectTipoConsumoTabla");
    select.find("option").remove();
    select = $("#selectDiaSemanaTabla");
    select.find("option").remove();
    select = $("#selectFechaTabla");
    select.find("option").remove();
    cargarResumen(idConsumo);
    cargarTablaConsumos(idConsumo);
    //datosGrafica(idSemana,idHogar,idTipoConsumo);
    /*var idSemana = $("#selectSemanaTabla").val();
    var idHogar = $("#selectHogarTabla").val();
    var idTipoConsumo = $("#selectTipoConsumoTabla").val();
    cargarTablaResumen(idSemana,idHogar,idTipoConsumo);*/
    $('#ocultarMostrarDetalle').show();
    $('#ocultarMostrarDetalleFactura').show();
});
/**/

$("#selectCategoriaMaster").change(function() {
    var id_categoriaT = $("#selectCategoriaMaster").val();
    //$('#selectProductoMaster').select2();
    let select = $("#selectProductoMaster");
    select.find("option").remove();
    cargarProductoCategoria("#selectProductoMaster",id_categoriaT,0);
});

$("#selectCategoriaMaster").change(function() {
    var id_categoriaT = $("#selectCategoriaMaster").val();
    //$('#selectProductoTabla').select2();
    cargarProductoCategoria("#selectProductoMaster",id_categoriaT,0);
});

$("#selectCategoriaOtrosProductos").change(function() {
    var id_categoriaO = $("#selectCategoriaOtrosProductos").val();
    if (id_categoriaO != 8){
        $('#showMarcaCubito').hide();
    }else{
        $('#showMarcaCubito').show();
        cargarMarcaCubito('#selectMarcaCubitos',0);
    }
});

$("#selectProductoMaster").change(function() {
    var codBarra = $("#selectProductoMaster").val();
    $("#inputCodigoBarrasModal").val(codBarra);
});

$("#selectMonedaNew").change(function() {
    var idMoneda = $("#selectMonedaNew").val();
    var idSemana = $("#selectSemanaTabla").val();
    buscarTipoCambio(idMoneda,idSemana);
});

$("#inputCantidadProductoModal").change(function() {
    if ($("#inputPrecioUnitarioModal").val() != '' && $("#inputCantidadProductoModal").val() != '' ){
        var cantidad = $("#inputCantidadProductoModal").val();
        var precioUnitario = $("#inputPrecioUnitarioModal").val();
        var tasaCambio = $("#inputTasaCambioModal").val();
        $("#inputTotalCompraModal").val(cantidad*precioUnitario*tasaCambio);
    }
});

$("#inputPrecioUnitarioModal").change(function() {
    if ($("#inputPrecioUnitarioModal").val() != '' && $("#inputCantidadProductoModal").val() != '' ){
        var cantidad = $("#inputCantidadProductoModal").val();
        var precioUnitario = $("#inputPrecioUnitarioModal").val();
        var tasaCambio = $("#inputTasaCambioModal").val();
        $("#inputTotalCompraModal").val(cantidad*precioUnitario*tasaCambio);
    }
});

$("#selectCanalTabla").change(function() {
    var idCanal = $("#selectCanalTabla").val()
    cargarCadena('#selectCadenaTabla',response.data[0].Id_Cadena,idCanal);
        
});
//aaaaaa
$("#selectCategoriaOtrosProductos").change(function() {
	//
	var idCategoriaOtrosProductos = $("#selectCategoriaOtrosProductos").val()
	//		
	if(idCategoriaOtrosProductos == 5){
		// Huevos
		//$("#showUnidades").css("display", "block");
		//$("#showCubitos").css("display", "none");
		//$("#unidades").val("");	
		//$("#cantidad").val(""); 
		$("#nombreCantidad").html("Cantidad Empaque:");
		$("#nombrePrecio").html("Precio Empaque:");
		//$("#cboMarcaCubitos").prop("selectedIndex", 0);
		//
	} else if(idCategoriaOtrosProductos == 6){
		// Botellones
		//$("#showUnidades").css("display", "none");
		//$("#showCubitos").css("display", "none");
		//$("#unidades").val("0");
		$("#nombreCantidad").html("Cantidad:");
		$("#nombrePrecio").html("Precio Unitario:");
		//$("#cboMarcaCubitos").prop("selectedIndex", 0);
		//
	}else if(idCategoriaOtrosProductos == 8) {
		// Cubitos
		//$("#showUnidades").css("display", "none");
		//$("#showCubitos").css("display", "block");
		//$("#unidades").val("0");
		$("#nombreCantidad").html("Cantidad:");
		$("#nombrePrecio").html("Precio Unitario:");
		//$("#cboMarcaCubitos").prop("selectedIndex", 0);
		//
	}else if(idCategoriaOtrosProductos == 9) {
		// Quesos
		//$("#showUnidades").css("display", "none");
		//$("#showCubitos").css("display", "none");
		//$("#unidades").val("0");
		$("#nombreCantidad").html("Cantidad en Gramos:");
		$("#nombrePrecio").html("Precio Pagado:");
		//$("#cboMarcaCubitos").prop("selectedIndex", 0);
		//
	}else{
        $("#nombreCantidad").html("Cantidad:");
		$("#nombrePrecio").html("Precio Unitario:");
		//$("#showCubitos").css("display", "none");
	}
});




//----
/*
$("#inputTasaCambioModal").change(function() {
    alert(8888);
    if ($("#inputPrecioUnitarioModal").val() != '' && $("#inputCantidadProductoModal").val() != '' ){
        var cantidad = $("#inputCantidadProductoModal").val();
        var precioUnitario = $("#inputPrecioUnitarioModal").val();
        var tasaCambio = $("#inputTasaCambioModal").val();
        $("#inputTotalCompraModal").val(cantidad*precioUnitario*tasaCambio);
    }
});/**/

function j2(){
    const ctx = document.getElementById('ChartPrecio').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
}

function datosGrafica(idSemana,idHogar,idTipoConsumo){
    var valoresSemana = new Array();
    var PRECIO = 0;
    var CANTIDAD = 0;
    
    cargarResumenSemanal(idSemana,idHogar,idTipoConsumo);
}

function grafica(v1,v2,v3,v4,v5,t1,t2,t3,t4,t5,idGrafica){
    var ctx = document.getElementById(idGrafica).getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Semana '+t1,'Semana '+t2,'Semana '+t3,'Semana '+t4,'Semana '+t5],
            datasets: [{
                label: 'Valor',
                data: [v1,v2,v3,v4,v5],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }],
            },
        }
    });
}
// 7777777777777777777
function enviarConsumoInvestigar(){
    const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
    })
    swalWithBootstrapButtons.fire({
        title: "¿Seguro de Investigarlo?",
	    text: " Esta accion no se puede reversar..! ",
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText:  'No, Cancelar',
        confirmButtonText: 'Si, Investigar Consumo',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            var idConsumo = $("#selectFechaTabla").val();
            var idItemInvestigar =	$("#selectInvestigar").val();
            var idHogar = $("#selectHogarTabla").val();
            var observacion =	$("#txtComentarios").val();
            
            var settings = {
                "url": '<?php echo urlApi; ?>g_ValEnviarInvestigarConsumo',
                "method": "post",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
                "data": {
                    "idConsumo":idConsumo,
                    "idItemInvestigar": idItemInvestigar,
                    "idHogar":idHogar,
                    "observacion": observacion
                }
            }
            $.ajax(settings).done(function(response){
                $("#investigarConsumoModal").modal("hide");
                cargarTablaConsumos(idConsumo);
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
                }
            })
        }
    })
}

function callEnviarConsumoInvestigar(){
    cargarMotivosInvestigar("#selectInvestigar",0);
    var fecha = new Date();
    var hora = fecha.getHours();
    var DTN;
    
    if(hora >= 0 && hora < 12){
        DTN = "buenos días";
    }else if(hora >= 12 && hora < 18){
        DTN = "buenas tardes";
    }else{
        DTN = "buenas noches";
    }

    var prefijoMsj = "Hola "+DTN+", consulta generada por: "+localStorage.getItem("nombreUsuario");

    $("#txtComentarios").val(prefijoMsj);
    $("#investigarConsumoModal").modal("show");
}

function cargarMotivosInvestigar(etiqueta,idS) {
    var settings = {
        "url": '<?php echo urlApi; ?>geInvestigacionItems/',
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
            if (response.data[i].Id === idS){
                select.append("<option value=" + response.data[i].Id + " selected>" + response
                .data[i].Nombre + "</option>");
            }else{
                select.append("<option value=" + response.data[i].Id + ">" + response
                .data[i].Nombre + "</option>");
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

function cargarResumenSemanal(idSemana,idHogar,idTipoConsumo) {
    var valoresSemana = new Array();
    var settings = {
        "url": '<?php echo urlApi; ?>getResumenSemanalData/' + idSemana+'/'+idHogar+'/'+idTipoConsumo,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        var i = 4;
        var C1 = response.data[i].Cantidad;
        P1 = response.data[i].Precio;
        T1 = response.data[i].Semana.substring(0, 4);
        i = 3;
        C2 = response.data[i].Cantidad;
        P2 = response.data[i].Precio;
        T2 = response.data[i].Semana.substring(0, 4);
        i = 2;
        C3 = response.data[i].Cantidad;
        P3 = response.data[i].Precio;
        T3 = response.data[i].Semana.substring(0, 4);
        i = 1
        C4 = response.data[i].Cantidad;
        P4 = response.data[i].Precio;
        T4 = response.data[i].Semana.substring(0, 4);
        i = 0
        C5 = response.data[i].Cantidad;
        P5 = response.data[i].Precio;
        T5 = response.data[i].Semana.substring(0, 4);
        grafica(C1,C2,C3,C4,C5,T1,T2,T3,T4,T5,"ChartCantidad");
        grafica(P1,P2,P3,P4,P5,T1,T2,T3,T4,T5,"ChartPrecio");
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

function showMostrarInvestigarHogar() {
	var idConsumo =	$("#cboDetallexDiaSemana").val();
	$("#txtComentarios").val("")
	if (idConsumo == null || idConsumo == "" || idConsumo.Length == 0 || idConsumo== undefined || idConsumo== "0" ) {
		swal("Aviso..!", "Debe Seleccionar un Consumo...!", "error");
	}else{
		$("#txtIdConsumoInvestigar").val(idConsumo);
		$("#investigarConsumo").modal("show");
		$(".modal-title").html("<i class='fas fa-eye'></i> Investigar Consumo");
	}
}

function deleteConsumo() {
    var idConsumo = $("#selectFechaTabla").val();
        EliminarConsumo(idConsumo);
    
}
// ****
function updateValidarMasivo() {
    var idConsumo = $("#selectFechaTabla").val();
        ActualizarMasivo(idConsumo);
}

function ActualizarMasivo(idConsumo) {
    var settings = {
        "url": '<?php echo urlApi; ?>UpdateDetallesxProductosMasivo/'+idConsumo,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response){
        let select = $("#selectSemanaTabla");
        select.find("option").remove();
        select = $("#selectAreaTabla");
        select.find("option").remove();
        select = $("#selectEstadoTabla");
        select.find("option").remove();
        select = $("#selectHogarTabla");
        select.find("option").remove();
        select = $("#selectTipoConsumoTabla");
        select.find("option").remove();
        select = $("#selectDiaSemanaTabla");
        select.find("option").remove();
        select = $("#selectFechaTabla");
        select.find("option").remove();
        select = $("#selectConsumosInvestigadosTabla");
        select.find("option").remove();
        $("#totalValidados").html("");
        $("#totalPendientes").html("");
        $("#totalConsumos").html("");
        $("#totalInvestigados").html("");
        $("#responsableHogar").html("");
        $("#celularHogar").html("");
        $("#altaHogar").html("");
        $("#integrantesHogar").html("");
        $('#ocultarMostrarDetalle').hide();
        $('#ocultarMostrarDetalleFactura').hide();
        cargarSemana('#selectSemanaTabla',0);
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
    $('#ValidarMasivoModal').modal('hide');
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

function EliminarConsumo(idConsumo){
    var settings = {
        "url": '<?php echo urlApi; ?>deleteConsumo/'+idConsumo,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response){
        let select = $("#selectSemanaTabla");
        select.find("option").remove();
        select = $("#selectAreaTabla");
        select.find("option").remove();
        select = $("#selectEstadoTabla");
        select.find("option").remove();
        select = $("#selectHogarTabla");
        select.find("option").remove();
        select = $("#selectTipoConsumoTabla");
        select.find("option").remove();
        select = $("#selectDiaSemanaTabla");
        select.find("option").remove();
        select = $("#selectFechaTabla");
        select.find("option").remove();
        select = $("#selectConsumosInvestigadosTabla");
        select.find("option").remove();
        $("#totalValidados").html("");
        $("#totalPendientes").html("");
        $("#totalConsumos").html("");
        $("#totalInvestigados").html("");
        $("#responsableHogar").html("");
        $("#celularHogar").html("");
        $("#altaHogar").html("");
        $("#integrantesHogar").html("");
        $('#ocultarMostrarDetalle').hide();
        $('#ocultarMostrarDetalleFactura').hide();
        cargarSemana('#selectSemanaTabla',0)
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
    $('#EliminarConsumoModal').modal('hide');
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
function UpdateDetalleCompra(id,codiBarra,idMoneda,tasaCambio,cantida,precioProducto,total){
    $('#txtId').val(id);
    $('#txtCodigoBarra').val(codiBarra);
    $('#txtTasa').val(new Intl.NumberFormat("de-DE").format(tasaCambio));
    $('#txtCantidad').val(new Intl.NumberFormat("de-DE").format(cantida));
    $('#txtPrecio').val(new Intl.NumberFormat("de-DE").format(precioProducto));
    $('#txtTotal').val(new Intl.NumberFormat("de-DE").format(total));
    cargarMoneda('#cboTMonedaPago',idMoneda);
    $("#EditarConsumoModal").modal("show");
}

function salvarCambioProductos() {
    if ($("#formAgregarProducto").valid()) {
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": '<?php echo urlApi; ?>UpdateDetallesxProductosxUnico',
            "method": "post",
            "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
            "data": {
                "idConsumoDetalle":$("#txtId").val(),
                "codigoBarra": $("#txtCodigoBarra").val(),
                "idMoneda": $("#cboTMonedaPago").val(),
                "tasaCambio": eliminarSeparadorMiles($("#txtTasa").val()),
                "cantidad": eliminarSeparadorMiles($("#txtCantidad").val()),
                "Precio": eliminarSeparadorMiles($("#txtPrecio").val()),
                "TotalCompra": eliminarSeparadorMiles($("#txtTotal").val())
            }
        }
        $.ajax(settings).done(function(response){
            var idConsumo = $("#selectFechaTabla").val();
            cargarResumen(idConsumo);//aaaa
            cargarTablaConsumos(idConsumo);
            $("#EditarConsumoModal").modal("hide");
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
            var form = document.querySelector('#formAgregarProducto');
            form.reset();
            $('#AgregarProductoModal').modal('hide');
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

function updateFactura() {
    if ($("#formAgregarProducto").valid()) {
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": '<?php echo urlApi; ?>updateFacturaConsumo',
            "method": "post",
            "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
            "data": {
                "idConsumo":$("#selectFechaTabla").val(),
                "idCanal": $("#selectCanalTabla").val(),
                "idCadena": $("#selectCadenaTabla").val(),
                "Total_items": $("#inputTotalProductos").val(),
                "idMoneda": $("#selectTipoMonedaTabla").val(),
                "Total_Compra": eliminarSeparadorMiles($("#inputMontoFactura").val())
            }
        }
        $.ajax(settings).done(function(response){
            var idConsumo = $("#selectFechaTabla").val();
            cargarResumen(idConsumo);
            cargarTablaConsumos(idConsumo);
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
            var form = document.querySelector('#formAgregarProducto');
            form.reset();
            $('#AgregarProductoModal').modal('hide');
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

function AgregarProductosalConsumo() {
    if ($("#formAgregarProducto").valid()) {
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": '<?php echo urlApi; ?>agregarProductoalConsumo',
            "method": "post",
            "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
            "data": {
                "idConsumo":$("#selectFechaTabla").val(),
                "idHogar": $("#selectHogarTabla").val(),
                // idSemana
                // tieneFactura
                "Precio": $("#inputPrecioUnitarioModal").val(),
                "Cantidad": $("#inputCantidadProductoModal").val(),
                "NroBarcode": $("#inputCodigoBarrasModal").val(),
                // moneda
                "idMoneda": $("#selectMonedaNew").val(),
                "tasaCambio": $("#inputTasaCambioModal").val(),
                "idCategoria": $("#selectCategoriaOtrosProductos").val(),
                "idMarcaCubito": $("#selectMarcaCubitos").val(),
                // unidades
                "idProducto": $("#selectProductoMaster").val()
            }
        }
        $.ajax(settings).done(function(response){
            var idConsumo = $("#selectFechaTabla").val();
            cargarResumen(idConsumo);
            cargarTablaConsumos(idConsumo);
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
            var form = document.querySelector('#formAgregarProducto');
            form.reset();
            $('#AgregarProductoModal').modal('hide');
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

function addProducto(data) {
    $('#AgregarProductoModal').modal('show');
    $('#showCategoriaMaster').show();
    $('#showProductoMaster').show();
    $('#showMarcaCubito').hide();
    $('#showCodigoBarras').show();
    $('#showCategoriaOtrosProductos').hide();
    $('#otrosProductos').click(function(){
        if($(this).is(':checked')){
            $('#showOtrosProductos').show();
            $('#showCategoriaMaster').hide();
            $('#showCategoriaOtrosProductos').show();
            $('#showProductoMaster').hide();
            $('#showMarcaCubito').hide();
            $('#showCodigoBarras').hide();
            cargarCategoriaOtrosProductos("#selectCategoriaOtrosProductos",0);
        } else {
            $('#showOtrosProductos').hide();
            $('#showCategoriaMaster').show();
            $('#showCategoriaOtrosProductos').hide();
            $('#showProductoMaster').show();
            $('#showMarcaCubito').hide();
            $('#showCodigoBarras').show();
        }
    });
    var form = document.querySelector('#formAgregarProducto');
    form.reset();
    let select = $("#selectProductoTabla");
    select.find("option").remove();
    cargarMoneda('#selectMonedaNew',0);
    cargarCategoria("#selectCategoriaMaster",0);
}

function buscarTipoCambio(idMoneda,idSemana) {
    var settings = {
        "url": '<?php echo urlApi; ?>getTasaCambio/'+idMoneda+'/'+idSemana,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        $('#inputTasaCambioModal').val(response.data[0].columnaMoneda);
        if ($("#inputTasaCambioModal").val() != '' && $("#inputPrecioUnitarioModal").val() != '' && $("#inputCantidadProductoModal").val() != '' ){
            var cantidad = $("#inputCantidadProductoModal").val();
            var precioUnitario = $("#inputPrecioUnitarioModal").val();
            var tasaCambio = $("#inputTasaCambioModal").val();
            $("#inputTotalCompraModal").val(cantidad*precioUnitario*tasaCambio);
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

function buscarDetalleConsumoResueltoxDia() {
    buscarHogarResuelto();
}

function buscarHogarResuelto() {
    var idConsumo =	$("#selectConsumosInvestigadosTabla").val();
	if (idConsumo==="0" || idConsumo==null || idConsumo==undefined){
		// Validacion Normal
		var idConsumo =	$("#selectFechaTabla").val();
	}

    var settings = {
        "url": '<?php echo urlApi; ?>BuscarConsumoHogarResuelto/'+idConsumo,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        cargarResumen(idConsumo);
        cargarTablaConsumos(idConsumo);
        let select = $("#selectAreaTabla");
        select.find("option").remove();
        select = $("#selectEstadoTabla");
        select.find("option").remove();
        select = $("#selectHogarTabla");
        select.find("option").remove();
        select = $("#selectTipoConsumoTabla");
        select.find("option").remove();
        select = $("#selectDiaSemanaTabla");
        select.find("option").remove();
        select = $("#selectFechaTabla");
        select.find("option").remove();

        var motivoInv	=	response.data[0].motivo;
        var comentaInv 	=	response.data[0].comentario;
        var comentaRsp 	=	response.data[0].respuesta;
        $("#cargando").css("display", "none");
        $("#hogarResuelto").css("display", "block");

        cargarTablaResumenConsumoInvestigado();
        //
        if(response.data=="False"){
            $("#motivoInv").val("No Aplica");
            $("#comentarioInv").val("No Aplica");
            $("#motivoRsp").val("No Aplica");
        }else{
            $("#motivoInv").html("Motivo Investigacion: " + motivoInv);
            $("#comentarioInv").html("Comentario Adicional: " + comentaInv);
            $("#motivoRsp").html("Respuesta de Investigacion: " + comentaRsp);
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

function cargarMarcaCubito(identificador,idS) {
    var settings = {
        "url": '<?php echo urlApi; ?>getMarcaCubito/',
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        let select = $(identificador);
        select.find("option").remove();
        if (idS == 0){
            select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].Id_Marca === idS){
                select.append("<option value=" + response.data[i].Id_Marca + " selected>" + response
                .data[i].Marca + "</option>");
            }else{
                select.append("<option value=" + response.data[i].Id_Marca + ">" + response
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

function cargarCategoriaOtrosProductos(etiqueta,idS) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllCategoriaOtrosProductos',
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

function cargarProductoCategoria(etiqueta,parametro,idS) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllProductos_x_categoria/' + parametro,
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
            if (response.data[i].CodigoBarra === idS){
                select.append("<option value=" + response.data[i].CodigoBarra + " selected>" + response
                .data[i].Producto + "</option>");
            }else{
                select.append("<option value=" + response.data[i].CodigoBarra + ">" + response
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

function cargarConsumosInvestigados(etiqueta,idSemana,idS) {
    var settings = {
        "url": '<?php echo urlApi; ?>getConsumosInvestigados/' + idSemana,
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
        //Id_Consumo
        //Id_Hogar - DIA - FECHA - Area - Estado - TipoConsumo
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].CodigoBarra === idS){
                select.append("<option value=" + response.data[i].Id_Consumo + " selected>"
                + response.data[i].Id_Hogar
                + " - " + response.data[i].DIA
                + " - " + response.data[i].FECHA
                + " - " + response.data[i].Area
                + " - " + response.data[i].Estado
                + " - " + response.data[i].TipoConsumo
                + "</option>");
            }else{
                select.append("<option value=" + response.data[i].Id_Consumo + ">"
                + response.data[i].Id_Hogar
                + " - " + response.data[i].DIA
                + " - " + response.data[i].FECHA
                + " - " + response.data[i].Area
                + " - " + response.data[i].Estado
                + " - " + response.data[i].TipoConsumo
                + "</option>");
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
//99999
function CalcularTotalesConsumos(idSemana) {
    
    TotalesValidadosPendiente(idSemana);        // - Actualiza: totalValidados,totalPendientes
    //TotalesInvestigados(idSemana);              // - Actualiza: totalInvestigados
    TotalesResueltos(idSemana);                 // - Actualiza: totalResueltos
    buscarTotalHogaresReportados(idSemana);     // - Actualiza: totalHogares
    buscarTotalHogaresInvestigados(idSemana);   // - Actualiza: totalInvestigados
}

function TotalesValidadosPendiente(idSemana) {
    var settings = {
        "url": '<?php echo urlApi; ?>getTotalValidadosPendientexSemana/'+idSemana,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        var totalConsumos = 0;
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].validado){
               //validados
                $("#totalValidados").html(response.data[i].total);
                totalConsumos = response.data[i].total;
            }else{
               //pendientes
                $("#totalPendientes").html(response.data[i].total);
                totalConsumos += response.data[i].total;
            }
            $("#totalConsumos").html(totalConsumos);
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

function buscarTotalHogaresInvestigados(idSemana) {
    var settings = {
        "url": '<?php echo urlApi; ?>getTotalInvestigadosxSemana/'+idSemana,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        $("#totalInvestigados").html(response.data[0].Investigados);
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

function buscarTotalHogaresReportados(idSemana) {
    var settings = {
        "url": '<?php echo urlApi; ?>TotalizarHogaresxConsumos/'+idSemana,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        $("#totalHogares").html(response.data[0].Total);
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

function TotalesInvestigados(idSemana) {
    var settings = {
        "url": '<?php echo urlApi; ?>getTotalInvestigadosxSemana/'+idSemana,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        $("#totalInvestigados").html(response.data[0].Investigados);
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

function DatosResponsableHogar(idHogar) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAltaHogarxIdHohar/'+idHogar,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        $("#responsableHogar").html(response.data[0].Nombre);
        $("#celularHogar").html(response.data[0].Celular);
        $("#altaHogar").html(response.data[0].fecha);
        $("#integrantesHogar").html(response.data[0].TotalPersonas);
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

function TotalesResueltos(idSemana) {
    var settings = {
        "url": '<?php echo urlApi; ?>getTotalResueltosxSemana/'+idSemana,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        $("#totalResueltos").html(response.data[0].Resueltos);
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

function CambiarMoneda(data) {
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
        $('#inputTasaCambioModal').val(response.data[0].Tasa_de_cambio);
        $('#inputCantidad').val(response.data[0].Cantidad);
        $('#inputPrecioUnitarioModal').val(response.data[0].Precio_producto);
        $('#inputTotalCompraModal').val(response.data[0].Total_compra);
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

function cargarSemana(identificador,idEditar) {
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
        if (idEditar == 0){
            selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].IdSemana == idEditar) {
                selected.append("<option value=" + response.data[i].IdSemana + " selected>" +
                    response.data[i].Semana + "</option>");
            } else {
                selected.append("<option value=" + response.data[i].IdSemana + ">" + response.data[i].Semana + "</option>");
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

function cargarArea(etiqueta,idEditar,idSemana) {
    var settings = {
        "url": '<?php echo urlApi; ?>getBuscarAreaxSemana/'+idSemana,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        let selected = $(etiqueta);
        selected.find("option").remove();
        if (idEditar == 0){
            selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].Id_Area == idEditar) {
                selected.append("<option value=" + response.data[i].Id_Area + " selected>" +
                    response.data[i].Id_Area + " - " + response.data[i].Area + "</option>");
            } else {
                selected.append("<option value=" + response.data[i].Id_Area + ">" + response
                    .data[i].Id_Area + " - " + response.data[i].Area + "</option>");
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

function cargarEstado(etiqueta,idEditar,idSemana,idArea) {
    var settings = {
        "url": '<?php echo urlApi; ?>getBuscarEstadoxSemanaArea/'+idSemana+'/'+idArea,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        let selected = $(etiqueta);
        selected.find("option").remove();
        if (idEditar == 0){
            selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].Id_Estado == idEditar) {
                selected.append("<option value=" + response.data[i].Id_Estado + " selected>" +
                    response.data[i].Id_Estado + " - " + response.data[i].Estado + "</option>");
            } else {
                selected.append("<option value=" + response.data[i].Id_Estado + ">" + response
                    .data[i].Id_Estado + " - " + response.data[i].Estado + "</option>");
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

function cargarHogar(etiqueta,idEditar,idSemana,idArea,idEstado,idMostrar) {
    var settings = {
        "url": '<?php echo urlApi; ?>getBuscarHogarxSemanaAreaEstado/'+idSemana+'/'+idArea+'/'+idEstado+'/'+idMostrar,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        let selected = $(etiqueta);
        selected.find("option").remove();
        if (idEditar == 0){
            selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].Id_PanelHogar == idEditar) {
                selected.append("<option value=" + response.data[i].Id_PanelHogar + " selected>" +
                    response.data[i].Id_PanelHogar + " - " + response.data[i].CodigoHogar + "</option>");
            } else {
                selected.append("<option value=" + response.data[i].Id_PanelHogar + ">" + response
                    .data[i].Id_PanelHogar + " - " + response.data[i].CodigoHogar + "</option>");
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

function cargarTipoConsumo(etiqueta,idEditar,idSemana,idHogar,idMostrar) {
    var settings = {
        "url": '<?php echo urlApi; ?>getBuscarTipoConsumoxSemanaHogar/'+idSemana+'/'+idHogar+'/'+idMostrar,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        let selected = $(etiqueta);
        selected.find("option").remove();
        if (idEditar == 0){
            selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].Id_TipoConsumo == idEditar) {
                selected.append("<option value=" + response.data[i].Id_TipoConsumo + " selected>" +
                    response.data[i].Id_TipoConsumo + " - " + response.data[i].TipoConsumo + "</option>");
            } else {
                selected.append("<option value=" + response.data[i].Id_TipoConsumo + ">" + response
                    .data[i].Id_TipoConsumo + " - " + response.data[i].TipoConsumo + "</option>");
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

function cargarDiaSemana(etiqueta,idEditar,idSemana,idHogar,idTipoConsumo,idMostrar) {
    var settings = {
        "url": '<?php echo urlApi; ?>getBuscarTotalDiaSemanaxSemanaHogarTipoConsumo/'+idSemana+'/'+idHogar+'/'+idTipoConsumo+'/'+idMostrar,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        let selected = $(etiqueta);
        selected.find("option").remove();
        if (idEditar == 0){
            selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].FECHA == idEditar) {
                selected.append("<option value=" + response.data[i].FECHA + " selected>" +
                    response.data[i].DIA + " - " + response.data[i].FECHA + " (" + response.data[i].TOTAL_ROWS +")" +"</option>");
            } else {
                selected.append("<option value=" + response.data[i].FECHA + ">" +
                    response.data[i].DIA + " - " + response.data[i].FECHA + "(" + response.data[i].TOTAL_ROWS +")" +"</option>");
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

function cargarFecha(etiqueta,idEditar,idSemana,idHogar,idTipoConsumo,Fecha,idMostrar) {
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": '<?php echo urlApi; ?>getBuscarDiaSemanaxHogarTipoConsumoFecha',
        "method": "post",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
        "data": {
            "idSemana": idSemana,
            "idHogar": idHogar,
            "idTipoConsumo": idTipoConsumo,
            "Fecha": Fecha,
            "idMostrar": idMostrar
        }
    }
    $.ajax(settings).done(function(response) {
        let selected = $(etiqueta);
        selected.find("option").remove();
        if (idEditar == 0){
            selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].Id_Consumo == idEditar) {
                selected.append("<option value=" + response.data[i].Id_Consumo + " selected>" +
                    response.data[i].Item + " - " + response.data[i].DIA + " - " + response.data[i].FECHA +"</option>");
            } else {
                selected.append("<option value=" + response.data[i].Id_Consumo + ">" +
                    response.data[i].Item + " - " + response.data[i].DIA + " - " + response.data[i].FECHA +"</option>");
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

function cargarCanal(identificador,idEditar) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllCanal/',
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        let selected = $(identificador);
        selected.find("option").remove();
        if (idEditar == 0){
            selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].Id_Canal == idEditar) {
                selected.append("<option value=" + response.data[i].Id_Canal + " selected>" +
                    response.data[i].Canal + "</option>");
            } else {
                selected.append("<option value=" + response.data[i].Id_Canal + ">" + response.data[i].Canal + "</option>");
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

function cargarCadena(identificador,idEditar,idCanal) {
    var settings = {
        "url": '<?php echo urlApi; ?>getCadenaxCanal/'+idCanal,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        let selected = $(identificador);
        selected.find("option").remove();
        if (idEditar == 0){
            selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].Id_Cadena == idEditar) {
                selected.append("<option value=" + response.data[i].Id_Cadena + " selected>" +
                    response.data[i].Cadena + "</option>");
            } else {
                selected.append("<option value=" + response.data[i].Id_Cadena + ">" + response.data[i].Cadena + "</option>");
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

function cargarResumen(idConsumo) {
    var settings = {
        "url": '<?php echo urlApi; ?>getBuscarDetalleConsumoxDia/' + idConsumo,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        cargarCanal('#selectCanalTabla',response.data[0].Id_Canal);
        cargarCadena('#selectCaden aTabla',response.data[0].Id_Cadena,response.data[0].Id_Canal);
        var oblig = $("input:radio[name='tieneFactura']");
        oblig.filter("[value='"+response.data[0].Tiene_Factura+"']").attr('checked', true);
        $('#inputTotalProductos').val(response.data[0].total_Items);
        cargarMoneda('#selectTipoMonedaTabla',response.Id_Moneda);
        numero = response.data[0].Total_Compra;
        $('#inputMontoFactura').val(new Intl.NumberFormat("de-DE").format(numero));
        //****
        //$('#inputMontoFactura').val(response.data[0].Total_Compra);
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

function cargarCategoria(etiqueta,idS){
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

function ValidarDetalleCompra(idConsumoDetalle){
    const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
    })
    swalWithBootstrapButtons.fire({
        title: '¿Esta Seguro de Validar?',
        text: "El status del Producto.. ",
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText:  'No, Cancelar',
        confirmButtonText: 'Si, Validar status del producto',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            var idConsumo =	$("#selectFechaTabla").val();
            if (idConsumo==="0" || idConsumo==null || idConsumo==undefined){
                var idConsumo =	$("#selectConsumosInvestigadosTabla").val();
            }
            var settings = {
                "url": '<?php echo urlApi; ?>UpdateDetallesxProductosxUnicoDirecto/'+idConsumo+'/'+idConsumoDetalle,
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
            cargarTablaConsumos(idConsumo);
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

function EliminarDetalleCompra(idConsumoDetalle){
    const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
    })
    swalWithBootstrapButtons.fire({
        title: '¿Seguro de Eliminar Item?',
        text: "Esta accion no se puede reversar..!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        cancelButtonText:  'No, Cancelar',
        confirmButtonText: 'Si, Eliminar el item',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            var idConsumo =	$("#selectFechaTabla").val();
            var settings = {
                "url": '<?php echo urlApi; ?>EliminarDetalledelConsumo/'+idConsumoDetalle,
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
            cargarTablaConsumos(idConsumo);
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

function eliminarProducto(){
    var idConsumo = $("#selectFechaTabla").val();
    const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
    })
    swalWithBootstrapButtons.fire({
        title: '¿ Seguro de Eliminarlo Todo ?',
        text: " Esta accion no se puede reversar..! ",
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText:  'No, Cancelar',
        confirmButtonText: 'Si, Eliminar todo el consumo',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            var settings = {
                "url": '<?php echo urlApi; ?>EliminarTodoelConsumo/'+idConsumo,
                "method": "get",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
            }
            $.ajax(settings).done(function(response){
                let select = $("#selectSemanaTabla");
                select.find("option").remove();
                select = $("#selectAreaTabla");
                select.find("option").remove();
                select = $("#selectEstadoTabla");
                select.find("option").remove();
                select = $("#selectHogarTabla");
                select.find("option").remove();
                select = $("#selectTipoConsumoTabla");
                select.find("option").remove();
                select = $("#selectDiaSemanaTabla");
                select.find("option").remove();
                select = $("#selectFechaTabla");
                select.find("option").remove();
                select = $("#selectConsumosInvestigadosTabla");
                select.find("option").remove();
                $("#totalValidados").html("");
                $("#totalPendientes").html("");
                $("#totalConsumos").html("");
                $("#totalInvestigados").html("");
                $("#responsableHogar").html("");
                $("#celularHogar").html("");
                $("#altaHogar").html("");
                $("#integrantesHogar").html("");
                $('#ocultarMostrarDetalle').hide();
                $('#ocultarMostrarDetalleFactura').hide();
                cargarSemana('#selectSemanaTabla',0);
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
            cargarTablaConsumos(idConsumo);
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
//*****
function validarMasivo(arrayID){
    var idConsumo = $("#selectFechaTabla").val();
    const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
    })
    swalWithBootstrapButtons.fire({
        title: '¿ Seguro de Validar masivamente ?',
        text: " ... ",
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText:  'No, Cancelar',
        confirmButtonText: 'Si, Validar',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            var idConsumo =	$("#selectFechaTabla").val();
            if (idConsumo==="0" || idConsumo==null || idConsumo==undefined){
                var idConsumo =	$("#selectConsumosInvestigadosTabla").val();
            }
            var settings = {
                "url": '<?php echo urlApi; ?>UpdateDetallesxProductosMasivo',
                "method": "post",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
                "data": {
                    "arrayID":arrayID,
                    "idConsumo":idConsumo
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
                cargarTablaConsumos(idConsumo);
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

function PendienteMasivo(arrayID){
    //var idConsumo = $("#selectFechaTabla").val();
    const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
    })
    swalWithBootstrapButtons.fire({
        title: '¿Esta Seguro de Enviar',
        text: " seleccionados a Pendientes? ",
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText:  'No, Cancelar',
        confirmButtonText: 'Si, enviar a pendientes',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            var idConsumo =	$("#selectFechaTabla").val();
            if (idConsumo==="0" || idConsumo==null || idConsumo==undefined){
                var idConsumo =	$("#selectConsumosInvestigadosTabla").val();
            }
            var settings = {
                "url": '<?php echo urlApi; ?>g_ValUpdatePendientesMasivo',
                "method": "post",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
                "data": {
                    "arrayID":arrayID,
                    "idConsumo":idConsumo
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
                cargarTablaConsumos(idConsumo);
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

function validarMasivo_V2(){
    var idConsumo = $("#selectFechaTabla").val();
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    })
    swalWithBootstrapButtons.fire({
        title: '¿ Seguro de Validar masivamente ?',
        text: " ... ",
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText:  'No, Cancelar',
        confirmButtonText: 'Si, Validar Masivo',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            var idSemasna =	$("#selectSemanaTabla").val();
            var idConsumo =	$("#selectFechaTabla").val();
            if (idConsumo==="0" || idConsumo==null || idConsumo==undefined){
                var idConsumo =	$("#selectConsumosInvestigadosTabla").val();
            }

            var settings = {
                "url": '<?php echo urlApi; ?>UpdateDetallesxProductosMasivo',
                "method": "post",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
                "data": {
                    "idSemasna":idSemasna,
                    "idConsumo":idConsumo
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
                CalcularTotalesConsumos(idSemana);
                cargarTablaConsumos(idConsumo);
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
//-------------------------------------------------------
function deshacerMasivo(){
    var idConsumo = $("#selectFechaTabla").val();
    const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
    })
    swalWithBootstrapButtons.fire({
        title: '¿ Seguro Deshacer Masivamente ?',
        text: " ... ",
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText:  'No, Cancelar',
        confirmButtonText: 'Si, Deshacer Masivamente',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            /*var idConsumo =	$("#selectFechaTabla").val();
            if (idConsumo==="0" || idConsumo==null || idConsumo==undefined){
                var idConsumo =	$("#selectConsumosInvestigadosTabla").val();
            }*/
            var settings = {
                "url": '<?php echo urlApi; ?>UpdateDetallesxProductosMasivoDeshacer/'+idConsumo,
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
            cargarTablaConsumos(idConsumo);
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

function PendienteDetalleCompra(idConsumoDetalle){
    const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
    })
    swalWithBootstrapButtons.fire({
        title: '¿Seguro de Marcalo Pendiente?',
        text: "...",
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText:  'No, Cancelar',
        confirmButtonText: 'Si, Marcarlo como pendiente',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            var settings = {
                "url": '<?php echo urlApi; ?>MarcarProductoPendiente/'+idConsumoDetalle,
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
            //cargarTablaConsumos(idConsumo);
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
//9999999
function cambioMonedaMasivo(){
    var idConsumo = $("#selectFechaTabla").val();
    var idMoneda = $("#MonedaConsumoMasivo").val();
    var idSemana = $("#selectSemanaTabla").val();

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    })
    swalWithBootstrapButtons.fire({
        title: '¿Seguro Cambiar Moneda Masivamente?',
        text: " ... ",
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText:  'No, Cancelar',
        confirmButtonText: 'Si, Cambiar Moneda',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            /*var idConsumo =	$("#selectFechaTabla").val();
            if (idConsumo==="0" || idConsumo==null || idConsumo==undefined){
                var idConsumo =	$("#selectConsumosInvestigadosTabla").val();
            }*/
            var settings = {
                "url": '<?php echo urlApi; ?>g_ValUpdateCambioMonedaMasivo/'+idConsumo+'/'+idMoneda+'/'+idSemana,
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
            cargarTablaConsumos(idConsumo);
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

function DeshacerDetalleCompra(idConsumoDetalle) {
    const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
    })
    swalWithBootstrapButtons.fire({
        title: '¿Esta Seguro de Eliminar ?',
        text: "El status del Producto.. ",
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText:  'No, Cancelar',
        confirmButtonText: 'Si, Eliminar status',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            var idConsumo =	$("#selectFechaTabla").val();
            if (idConsumo==="0" || idConsumo==null || idConsumo==undefined){
                var idConsumo =	$("#selectConsumosInvestigadosTabla").val();
            }
            var settings = {
                "url": '<?php echo urlApi; ?>UpdateEliminarStatusProductos/'+idConsumo+'/'+idConsumoDetalle,
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
            cargarTablaConsumos(idConsumo);
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

function EliminarConsumo_(idConsumo){
    var settings = {
        "url": '<?php echo urlApi; ?>deleteConsumo/'+idConsumo,
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

function updateStatusProductos_(idConsumoDetalle) {
    var settings = {
        "url": '<?php echo urlApi; ?>UpdateEliminarStatusProductos/'+idConsumoDetalle,
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
    $('#EliminarStatusProductosModal').modal('hide');
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
//99999
function cargarTablaConsumos(idConsumo){
    var URL;

    var idTipoConsumo = $("#selectTipoConsumoTabla").val();

    if (idConsumo == 0 && idTipConsumo == 0){
        URL = '<?php echo urlApi; ?>g_ValBuscarDetallesxProductosxFacturaResuelto/' + idConsumo;
    }else{
        URL = '<?php echo urlApi; ?>getBuscarDetalleFacturaxConsumo/' + idConsumo;
    }
    
    $("#idDetalleConsumoM").html('<strong>Detalle Productos: ('+idConsumo+ ')</strong>');
    
    var bottomAcciones = function(cell, formatterParams){
        var value_ = cell.getValue();
        var id = cell.getRow().getData().Id_Consumo_Detalle_Productos;
        var codiBarra = cell.getRow().getData().Numero_codigo_barras;
        var idMoneda = cell.getRow().getData().id_Moneda;
        var tasaCambio = cell.getRow().getData().Tasa_de_cambio;
        var cantida = cell.getRow().getData().Cantidad;
        var precioProducto = cell.getRow().getData().Precio_producto;
       
        var total = cell.getRow().getData().total;
       /*return '<div class="btn-group" style="z-index:10000;">'
                    +'<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown">Accion</button>'
                    +'<ul class="dropdown-menu" role="menu" style="z-index:10000;">'
                        +'<li style="z-index:10000;"><a href="#" onclick="EditActionDatos('+value+'); return false;">Datos</a></li>'
                        +'<li><a id="fg003" href="#" onclick="UpdatexPromedio('+value+'); return false;" >Actualizar por Promedio</a></li>'
                        +'<li><a href="#" onclick="UpdatexModa('+value+'); return false;">Actualizar por Moda</a></li>'
                        +'<li><a href="#" onclick="Visualizar('+value+'); return false;">Visualizar</a></li>'
                    +'</ul>'
                +'</div>';*/
                //editar,validar,eliminar,pendiente,deshacer
                return  "<a id='fg003' href='#' onclick='UpdateDetalleCompra("+id+","+codiBarra+","+idMoneda+","+tasaCambio+","+cantida+","+precioProducto+","+total+"); return false;' ><i class='fa fa-edit data-toggle='tooltip' data-placement='top' title='Editar'></i></a>"
                        +" <a id='fg003' href='#' onclick='ValidarDetalleCompra("+id+"); return false;' ><i class='fa fa-check text-success data-toggle='tooltip' data-placement='top' title='Validar'></i></a>"
                        +" <a id='fg003' href='#' onclick='EliminarDetalleCompra("+id+"); return false;' ><i class='fa fa-eraser text-danger data-toggle='tooltip' data-placement='top' title='Eliminar'></i></a>"
                        +" <a id='fg003' href='#' onclick='PendienteDetalleCompra("+id+"); return false;' ><i class='fa fa-exclamation-triangle text-info data-toggle='tooltip' data-placement='top' title='Pendiente'></i></a>"
                        +" <a id='fg003' href='#' onclick='DeshacerDetalleCompra("+id+"); return false;' ><i class='fa fa-undo text-warning data-toggle='tooltip' data-placement='top' title='Deshacer'></i></a>";
    };

    var table = new Tabulator("#TablaDetalleProductos", {
        ajaxURL: URL,
        ajaxConfig:{
            method:"GET", //set request type to Position
            headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
        },
        layout:"fitDataStretch",
        placeholder:"Datos no encontrados",
        selectable:true, //make rows selectable
        columns:[
            {title:"Tipo Barras", field:"Tipo_codigo_barras", sorter:"string"},
            {title:"Código Barras", field:"Numero_codigo_barras", sorter:"string"},
            {title:"Descripción", field:"descripcion", sorter:"string"},
            {title:"Cantidad", field:"Cantidad", hozAlign:"center", sorter:"Number",
                bottomCalc:"sum", topCalcParams:{
                    precision:2
                }
            },
            {title:"Precio Unitario", field:"Precio_producto", sorter:"number", formatter:"money",
                formatterParams:{
                    decimal:",",
                    thousand:".",
                    precision:false,
                }
            },
            {title:"Tasa Cambio", field:"Tasa_de_cambio", hozAlign:"center", sorter:"number", formatter:"money",
                formatterParams:{
                    decimal:",",
                    thousand:".",
                    precision:false,
                }
            },
            {title:"Total Compra2", field:"total", sorter:"number", formatter:"money",
                formatterParams:{
                    decimal:",",
                    thousand:".",
                    precision:false},
                bottomCalc:"sum", topCalcParams:{
                    precision:2,
                }
            },
            {title:"Moneda", field:"Moneda", sorter:"string"},


            {title:"Validado", field:"Validado", hozAlign:"center", formatter : "tickCross",  headerFilter:"tickCross",  headerFilterParams:{"tristate":true},headerFilterEmptyCheck:function(value){return value === null}},


            {title:"Status", field:"Validado", hozAlign:"center", formatter:function(cell, formatterParams){
                
                var Validado = cell.getRow().getData().Validado;
                var Pendiente = cell.getRow().getData().Pendiente;

                if (Validado & !Pendiente){
                    return "<i class='fas fa-check'></i>";
                }else if (!Validado & Pendiente){
                    return "<i class='fas fa-crosshairs'></i>";
                }else if (Validado & Pendiente){
                    return "<i class='fas fa-check'></i>";
                }else{
                    return "<i class='fas fa-eye'></i>";
                }
            }},
            {formatter:bottomAcciones, hozAlign:"center"}
        ],
    });

    document.getElementById("idValidarMasivo").addEventListener("click", function(){
        //alert(row.select());
        /*var selectedData = table.getSelectedData();
        var arrayID;
        arrayID = jQuery.map(selectedData, function(value, index) {
            return (value.Id_Consumo_Detalle_Productos);
        });*/

        //validarMasivo(arrayID);
        validarMasivo_V2();
    });

    document.getElementById("idPendienteMasivo").addEventListener("click", function(){
        //alert(row.select());
        var selectedData = table.getSelectedData();
        var arrayID;
        arrayID = jQuery.map(selectedData, function(value, index) {
            return (value.Id_Consumo_Detalle_Productos);
        });
        //alert(arrayID);

        PendienteMasivo(arrayID);
    });
}

function cargarTablaResumen(idSemana,idHogar,idTipoConsumo){
    var table = new Tabulator("#TablaResumen", {
        ajaxURL: "<?php echo urlApi; ?>getResumenSemanal/" + idSemana+"/"+idHogar+"/"+idTipoConsumo,
        ajaxConfig:{
            method:"GET", //set request type to Position
            headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
        },
        layout:"fitColumns",
        placeholder:"Datos no encontrados",
        columns:[
        {title:"Semana", field:"Semana", sorter:"string"},
        {title:"Monto", field:"Precio", sorter:"number", formatter:"money",
            formatterParams:{
                decimal:",",
                thousand:".",
                precision:true,}
        },
        {title:"Unidades", field:"Cantidad", sorter:"number", hozAlign:"center"},
        ],
    });
}

function cargarTablaResumenConsumoInvestigado(){
    var idConsumo =	$("#selectConsumosInvestigadosTabla").val();
	//
	if (idConsumo==="0" || idConsumo==null || idConsumo==undefined){
		// Validacion Normal
		var idConsumo =	$("#selectFechaTabla").val();
		var idHogar	  = $("#selectHogarTabla").val();
    }else{
		var idItems		=	$("#selectConsumosInvestigadosTabla option:selected" ).text().trim();
		var fields 		=	idItems.split(' - ');
		var idHogar		=	fields[0];
	}
	let ajax = {
		id_Semana	: parseInt($("#cboSemana").val()),
		id_Hogar	: parseInt(idHogar),
		id_Consumo 	: parseInt(idConsumo),
	};

    var idSemana = $("#selectSemanaTabla").val();
    var idTipoConsumo = idConsumo;
    var table = new Tabulator("#TablaResumen", {
        ajaxURL: "<?php echo urlApi; ?>getResumenSemanal/" + idSemana+"/"+idHogar+"/"+idTipoConsumo,
        ajaxConfig:{
            method:"GET", //set request type to Position
            headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
        },
        layout:"fitColumns",
        placeholder:"Datos no encontrados",
        columns:[
        {title:"Semana", field:"Semana", sorter:"string"},
        {title:"Monto", field:"Precio", sorter:"number", formatter:"money",
            formatterParams:{
                decimal:",",
                thousand:".",
                precision:true,}
        },
        {title:"Unidades", field:"Cantidad", sorter:"number", hozAlign:"center"},
        ],
    });
}

function separadorMiles(numero) {
    return numero.replace(/\D/g, "")
    .replace(/([0-9])([0-9]{2})$/,'$1.$2')
    .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
}

function eliminarSeparadorMiles(number){
    const regex = /[.]/g;
    var aux = number.replace(regex, '');
    aux = aux.replace(',', '.');
    return aux;
}

function preformatFloat(float){
    if(!float){
        return '';
    }
    //Index of first comma
    const posC = float.indexOf(',');
    if(posC === -1){
    //No commas found, treat as float
        return float;
    }
    //Index of first full stop
    const posFS = float.indexOf('.');
    if(posFS === -1){
        //Uses commas and not full stops - swap them (e.g. 1,23 --> 1.23)
        return float.replace(/\,/g, '.');
    }
    //Uses both commas and full stops - ensure correct order and remove 1000s separators
    return ((posC < posFS) ? (float.replace(/\,/g,'')) : (float.replace(/\./g,'').replace(',', '.')));
}

function ActualizarCalculoTotales() {
	// Edit Productos
	// debugger;
	$("#txtTotal").val("");
	//
	var Cantidad = eliminarSeparadorMiles($("#txtCantidad").val());
	var Precio = eliminarSeparadorMiles($("#txtPrecio").val());
	var TasaCambio = eliminarSeparadorMiles($("#txtTasa").val());
	//
	valid = !isNaN(Cantidad) && !isNaN(Precio);
    if (!valid) {
        return false;
    }
	//
	var totalCompra = 0;
	totalCompra =(TasaCambio * Precio) * Cantidad;
	//
    $('#txtTotal').val(new Intl.NumberFormat("de-DE").format(totalCompra));
	//$("#txtTotal").val(number_format_js(totalCompra,2,',','.'));
	//
}

function cargarTabla_(idConsumo){
    $('#TablaDetalle').dataTable({
        "lengthMenu": [
            [ -1],
            [ "Todo"]
        ],
        "bDestroy": true,
        "searching": false, //--
        "info": true, //--
        "scrollY":        500,
        "scrollCollapse": true,
        "paging":         false,
        "autoWidth": true,
        "dom": '<"wrapper"flitp><"center"B>',
        "responsive": true,
        "buttons": [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        "ajax": {
            "url": '<?php echo urlApi; ?>getBuscarDetalleFacturaxConsumo/' + idConsumo,
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
                    window.location.href = '/HomePantry20/Principal/logout';
                }
            }
        },
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json",
            "sProcessing": "Procesando...",
        },
        "aoColumns": [{
                mData: 'Tipo_codigo_barras',
                className: "text-center"
            },
            {
                mData: 'Numero_codigo_barras',
                className: "text-center"
            },
            {
                mData: 'descripcion',
                className: "text-center"
            },
            {
                mData: 'Cantidad',
                className: "text-center"
            },
            {
                mData: 'Precio_producto',
                className: "text-center",
                render: $.fn.dataTable.render.number( '.', ',', 2, '' )
            },
            {
                mData: 'Tasa_de_cambio',
                className: "text-center"
            },
            {
                mData: 'total',
                className: "text-center",
                render: $.fn.dataTable.render.number( '.', ',', 2, '' )
            },
            {
                mData: 'Moneda',
                className: "text-center"
            },
            {
                mData: 'Validado',
                className: "text-center"
            },
        ],
        "columnDefs": [{
            "targets": 9,
            "orderable": true,
            "data": 'Id_Consumo_Detalle_Productos',
            "className": "text-center",
            "render": function(data, type, row, meta) {
                return '<a title="Cambiar Precio" href="#"><i class="fa fa-money-check-alt" style="font-size:24px;color:#000" aria-hidden="true" onclick="CambiarPrecio(' +
                    data +
                    '); return false;"y></i></a>&nbsp;&nbsp;<a title="Cambiar Moneda" href="#"><i class="fa fa-comments-dollar" style="font-size:24px;color:#000" aria-hidden="true" onclick="CambiarMoneda(' +
                    data +
                    '); return false;"y></i></a>';
            }
        }]
    });
}

// ??????????????????????????????????????????????????????????????????????
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdn.datatables.net/datetime/1.1.1/js/dataTables.dateTime.min.js"></script>
<script src="<?php echo base_url('assets/autoNumeric-1.9.18.js') ?>"></script>