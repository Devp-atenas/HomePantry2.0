<!-- Content Header (Page header) -->
<?php $this->load->view('Plantillas/Header');?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="bi bi-cart4"></i>&nbsp;Reporte Consumos por Hogar</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content Consumos por Hogar-->
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
                    <div class="col-md-3">
                        <div class="inputText font-weight-bold">Otra Semana:</div>
                        <select id="selectSemanaHogar" name="selectSemanaHogar" class="form-control form-control-sm">
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table id="TablaXXX" class="table display compact table-sm">
                        <thead>
                            <tr>
                                <th>Alta:&nbsp;<span class="label label-warning" id="altaHogar"></span></th>
                                <th>Responsable:&nbsp;<span class="label label-warning" id="responsableHogar"></span></th>
                                <th>Celular:&nbsp;<span class="label label-warning" id="celularHogar"></span></th>
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
                        <select id="selectCanalTabla" name="selectCanalTabla" class="form-control form-control-sm" disabled>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <div class="inputText font-weight-bold">Cadena:</div>
                        <select id="selectCadenaTabla" name="selectCadenaTabla" class="form-control form-control-sm" disabled>
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
                        <input type="text" name="inputTotalProductos" id="inputTotalProductos" class="form-control input-sm" disabled>
                    </div>
                    <div class="col-md-2">
                        <div class="inputText font-weight-bold">Tipo de Moneda:</div>
                        <select id="selectTipoMonedaTabla" name="selectTipoMonedaTabla" class="form-control form-control-sm" disabled>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <div class="inputText font-weight-bold">Monto Factura:</div>
                        <input type="text" name="inputMontoFactura" id="inputMontoFactura" class="form-control input-sm" disabled>
                    </div>
                </div>
                <HR/>
                <div class="form-group-row form-group-sm row mb-0 mt-0">
                    <div class="col-sm-9">
                        <p class="text-danger" id="idDetalleConsumoM"></p>
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


<!-- /Windows Modal Visualizar Registros-->
<?php $this->load->view('Plantillas/Footer');?>

<script>
$(document).ready(function() {
    
    if (localStorage.getItem("flagHogarRegCon") !== null) {
        var idSemana = localStorage.getItem("idSemana");
        var idArea = localStorage.getItem("idArea");
        var idEstado = localStorage.getItem("idEstado");
        var idPanelHogar = localStorage.getItem("idPanelHogar");
        var idTipoConsumo = localStorage.getItem("idTipoConsumo");
        cargarSemana('#selectSemanaTabla',idSemana);
        cargarArea('#selectAreaTabla',idArea,idSemana);
        cargarEstado('#selectEstadoTabla',idEstado,idSemana,idArea);
        cargarHogar('#selectHogarTabla',idPanelHogar,idSemana,idArea,idEstado,/*idMostrar*/2);
        cargarTipoConsumo('#selectTipoConsumoTabla',idTipoConsumo,idSemana,idPanelHogar,/*idMostrar*/2);
        cargarDiaSemana('#selectDiaSemanaTabla',0,idSemana,idPanelHogar,idTipoConsumo,2);
        cargarSemana('#selectSemanaHogar',idSemana);
        $('#ocultarMostrarDetalle').hide();
        $('#ocultarMostrarDetalleFactura').hide();
        
        localStorage.removeItem('flagHogarRegCon');
        
    }else{
        cargarSemana('#selectSemanaTabla',0);
        $('#ocultarMostrarDetalle').hide();
        $('#ocultarMostrarDetalleFactura').hide();
        
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
    $('#ocultarMostrarDetalle').hide();
    $('#ocultarMostrarDetalleFactura').hide();
    cargarArea('#selectAreaTabla',0,idSemana);
    
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
    cargarEstado('#selectEstadoTabla',0,idSemana,idArea);
    
    
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
    
    
});

/**/
$("#selectFechaTabla").change(function() {
    if ($('#selectSemanaHogar option:selected').length != 0){
        var idSemana = $("#selectSemanaHogar").val();
        
    }else{
        var idSemana = $("#selectSemanaTabla").val();
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
    
    
    if (idSemana != idSemanaHogar){
        document.getElementById('selectHogarTabla').disabled = true;
        document.getElementById('selectEstadoTabla').disabled = true;
        document.getElementById('selectAreaTabla').disabled = true;
        
        
    
    }else{
        document.getElementById('selectHogarTabla').disabled = false;
        document.getElementById('selectEstadoTabla').disabled = false;
        document.getElementById('selectAreaTabla').disabled = false;
        //
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
                    //var form = document.querySelector('#FormUsuariosEdit');
                    //form.reset();
                    //window.location = '/homepantry20/index.php';
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
//99999
function cargarTablaConsumos(idConsumo){
    Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Consulta Reporte Consumo por hogar(idConsumo)",idConsumo,"R");

    var URL;

    var idTipoConsumo = $("#selectTipoConsumoTabla").val();

    if (idConsumo == 0 && idTipConsumo == 0){
        URL = '<?php echo urlApi; ?>g_ValBuscarDetallesxProductosxFacturaResuelto/' + idConsumo;
    }else{
        URL = '<?php echo urlApi; ?>getBuscarDetalleFacturaxConsumo/' + idConsumo;
    }
    
    $("#idDetalleConsumoM").html('<strong>Detalle Productos: ('+idConsumo+ ')</strong>');
    
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
            {title:"Total Compra", field:"total", sorter:"number", formatter:"money",
                formatterParams:{
                    decimal:",",
                    thousand:".",
                    precision:false},
                bottomCalc:"sum", topCalcParams:{
                    precision:2,
                }
            },
            {title:"Moneda", field:"Moneda", sorter:"string"}
        ],
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


// ??????????????????????????????????????????????????????????????????????
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdn.datatables.net/datetime/1.1.1/js/dataTables.dateTime.min.js"></script>
<script src="<?php echo base_url('assets/autoNumeric-1.9.18.js') ?>"></script>