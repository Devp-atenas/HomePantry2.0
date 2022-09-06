$(document).ready(function() {
    cargarHogaresInvestigados('#selecHogarInvestigado',0);
    $('#investigar').attr('disabled', true);
    
});

$("#selecHogarInvestigado").change(function() {
    var idHogar = $("#selecHogarInvestigado").val();
    cargarConsumosInvestigados('#selecFecha',0,idHogar)
    $("#tablaResumen").show();
});


$("#selecFecha").change(function(){
    var idConsumo = $("#selecFecha").val();
    var idHogar = $("#selecHogarInvestigado").val();
    $('#investigar').attr('disabled', false);
    cargarSemana4idConsumo('#inputSemana',idConsumo);
	cargarArea4idHogar('#inputArea',idHogar);
	cargarEstado4idHogar('#inputEstado',idHogar);
	cargarConsumo4idConsumo('#inputTipoConsumo',idConsumo);
	cargarMotivoConsumo4idConsumo('#inputMotivoInvestigar',idConsumo);
    
    cargarTablaConsumos(idConsumo);
    cargarResumen(idConsumo);
    $('#ocultarMostrarDetalle').show();
    $('#ocultarMostrarDetalleFactura').show();
});

function resultadoInvestigacionHogar() {
	//	
	$("#txtRespuesta").val("");	
	$("#responderInvestigacion").modal("show");
	//$(".modal-title").html("<i class='fas fa-edit'></i> Responder Investigaci&oacute;n");		
	//				
}

function cargarResumen(idConsumo) {
    var settings = {
        "url": localStorage.getItem("urlApi")+'getBuscarDetalleConsumoxDia/' + idConsumo,
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

function cargarCanal(identificador,idEditar) {
    var settings = {
        "url": localStorage.getItem("urlApi")+'getAllCanal/',
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
        "url": localStorage.getItem("urlApi")+'getCadenaxCanal/'+idCanal,
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

function cargarMoneda(identificador,idS) {
    var settings = {
        "url": localStorage.getItem("urlApi")+'getAllMoneda/',
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




function cargarTablaConsumos(idConsumo){
    var URL;

    //var idTipoConsumo = $("#selectTipoConsumoTabla").val();
    URL = localStorage.getItem("urlApi")+'getBuscarDetalleFacturaxConsumo/'+idConsumo;
    /*if (idConsumo == 0 && idTipConsumo == 0){
        URL = '<?php echo urlApi; ?>g_ValBuscarDetallesxProductosxFacturaResuelto/' + idConsumo;
    }else{
        URL = '<?php echo urlApi; ?>getBuscarDetalleFacturaxConsumo/' + idConsumo;
    }*/
    
    //$("#idDetalleConsumoM").html('<strong>Detalle Productos: ('+idConsumo+ ')</strong>');
    
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
                    precision:false
                },
                bottomCalc:"sum", topCalcParams:{
                    decimal:",",
                    thousand:".",
                    precision:2
                    
                }
            },
            {title:"Moneda", field:"Moneda", sorter:"string"},
        ],
    });
}




function cargarMotivoConsumo4idConsumo(etiqueta,idConsumo) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url":localStorage.getItem("urlApi")+'getMotivoInvestigacion4IdConsumo/'+idConsumo,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        if( response.data.length == 0) {
            $(etiqueta).val("No Aplica");
        }else{
            var motivoObservacion = response.data[0].InvestigacionItems.split('-');
            var observacion = replaceAll($.trim(motivoObservacion[1]), "_", ",");

            $(etiqueta).val($.trim(motivoObservacion[0]));
            $("#inputComentarioAdicional").val(observacion);
			
            $('#inputMotivoInvestigacion').val($.trim(motivoObservacion[0]));
            $("#inputComentarios").val(observacion);
			
            //$("#txtMotivoInvestigar").val(motivo);				
			//$("#txtMotivoInvestigacion").val(motivo);
			//$("#txtComentarioAdicional").val(observa);				
			//$("#txtPregunta").val(observa);	
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
function cargarConsumo4idConsumo(etiqueta,idConsumo) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url":urlApi+'getTipoConsumo4IdConsumo/'+idConsumo,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        if( response.data.length == 0) {
            $(etiqueta).val("No Aplica");
        }else{
            $(etiqueta).val(response.data[0].tipo);
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
function cargarEstado4idHogar(etiqueta,idHogar) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url":urlApi+'getEstado4idHogar/'+idHogar,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        if( response.data.length == 0) {
            $(etiqueta).val("No Aplica");
        }else{
            $(etiqueta).val(response.data[0].estado);
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


function cargarArea4idHogar(etiqueta,idHogar) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url":urlApi+'getArea4IdHogar/'+idHogar,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        if( response.data.length == 0) {
            $(etiqueta).val("No Aplica");
        }else{
            $(etiqueta).val(response.data[0].area);
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

function cargarSemana4idConsumo(etiqueta,idConsumo) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url":urlApi+'getSemanas4IdConsumo/'+idConsumo,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        if( response.data.length == 0) {
            $(etiqueta).val("No Aplica");
        }else{
            $(etiqueta).val(response.data[0].semana);
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



function cargarHogaresInvestigados(etiqueta,idSeleccionado) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url":urlApi+'getHogaresInvestigados',
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        console.log(response.data);				
			
        $("#totalHogares").html(response.data.length);
        let selected = $(etiqueta);
        selected.find("option").remove();
        if (idSeleccionado == 0){
            selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id == idSeleccionado) {
                selected.append("<option value=" + response.data[i].id+ " selected>" +
                    response.data[i].id + " - " + response.data[i].CodigoHogar +  " - " + response.data[i].TipoConsumo +" - " + response.data[i].semanaCombo +  " - " + response.data[i].Estado + "</option>");
            } else {
                selected.append("<option value=" + response.data[i].id + ">" + response
                    .data[i].id + " - " + response.data[i].CodigoHogar +  " - " + response.data[i].TipoConsumo + " - " + response.data[i].semanaCombo +  " - " + response.data[i].Estado +"</option>");
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

function cargarConsumosInvestigados(etiqueta,idSeleccionado,idHogar) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url":urlApi+'getReporteConsumosInvestigados/'+idHogar,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        $("#totalPendientes").html(response.data.length);
        let selected = $(etiqueta);
        selected.find("option").remove();
        if (idSeleccionado == 0){
            selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id == idSeleccionado) {
                selected.append("<option value=" + response.data[i].Id_Consumo+ " selected>" +
                    response.data[i].semana + " - " + response.data[i].DIA +  " - " + response.data[i].FECHA + "</option>");
            } else {
                selected.append("<option value=" + response.data[i].Id_Consumo + ">" + response
                    .data[i].semana + " - " + response.data[i].DIA +  " - " + response.data[i].FECHA + "</option>");
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

function Reset() {
	//		
	$("#cboHogar").val("");
	$("#cboIdConsumo").val("");	
	$("#totalHogares").html("");
	Reset_Detalles();
	llenarCmbHogaresInvestigados();
}
//
function Reset_Detalles() {
	//				
	$("#tabla-resultados").html("");	
	$("#montoFactura").val("");	
	$("#imgfactura").html("<img src='images/loader/cargador4.gif'");	
	$("#montoFactura").css("display", "none");
	$("#DetalleFactura").css("display", "none");
	$("#hogarValidado").css("display", "none");	
	$("#hogarEliminado").css("display", "none");
	$("#hogarInvestigado").css("display", "none");
	$("#tienefactura").html("");
	$("#altaHogar").html("");
	$("#responsableHogar").html("");
	$("#celularHogar").html("");
	$("#MonedaPagoFactura").val(0);	
	$("#totalPendientes").html("");			
	//
	$("#txtSemana").val("");	
	$("#txtArea").val("");
	$("#txtEstado").val("");
	$("#txtTipoConsumo").val("");
	$("#txtDiaSemana").val("");
	$("#txtMotivoInvestigar").val("");
	$("#txtComentarioAdicional").val("");
	//
}
//
function llenarCmbHogaresInvestigados() {
	//	
	// debugger;
	//
	$.ajax({		
		url: "g_rRevInvLlenarCmbHogarInvestigado.asp",
		cache: false,
		async: false,
		dataType: "json",		
		beforeSend: function(objeto){
			$("#loader").html("<img src='images/ajax_small.gif'> Buscando!");
		},
		success: function (data) {
			//debugger;
			console.log(data);	
			var contador=0;
			let $select = $("#cboHogar");
			$select.find("option").remove();
			$select.append("<option value='0' selected disabled>-- Seleccione --</option>");
			$.each(data, function (i, value) {				
				contador++;
				$select.append("<option value=" + value.Id + ">" + value.Nombre + "</option>");				
			});				
			$("#loader").html("");
			$("#totalHogares").html(contador);			
			$("#cboHogar").focus();
		},
	});		
}
//
function llenarCmbConsumosInvestigados() {
	//	
	debugger;
	Reset_Detalles();
	//
	var idHogar	= $("#cboHogar").val();
	//
	$.ajax({		
		url: "g_rRevInvLlenarCmbConsumosInvestigados.asp?id_Hogar=" + idHogar,
		cache: false,
		async: false,
		dataType: "json",
		beforeSend: function(objeto){
			$("#loader").html("<img src='images/ajax_small.gif'> Buscando!");
		},
		success: function (data) {
			//debugger;
			var contador=0;
			console.log(data);				
			let $select = $("#cboIdConsumo");
			$select.find("option").remove();
			$select.append("<option value='0' selected disabled>-- Seleccione --</option>");
			$.each(data, function (i, value) {	
				contador++;
				$select.append("<option value=" + value.Id + ">" + value.Nombre + "</option>");				
			});				
			$("#loader").html("");
			$("#totalPendientes").html(contador);	
			$("#cboIdConsumo").focus();
		},
	});		
}
//
$("#cboHogar").change(function(){
    //
	event.preventDefault();
	//
	Reset_Detalles();
	//
	llenarCmbConsumosInvestigados();
	//
	$(function() {
		buscarAltaHogar();
	});
	//
});
//
$("#cboIdConsumo").change(function(){
    //
	event.preventDefault();
	//	
	$(function() {
		buscarSemana();
	});
	$(function() {
		buscarArea();
	});
	$(function() {
		buscarEstado();
	});
	$(function() {
		buscarTipoConsumo();
	});
	
	$(function() {
		buscarDiaSemana();
	});	
	
	$(function() {
		buscarMotivoInvestigacion();
	});	
	
	$(function() {
		buscarDetalleConsumoxDia();
	});	
	
	$(function() {
		//CalculosTotales();
	});	
});
//
function buscarAltaHogar() {
	//
	// Buscar la fecha de Creacion/Ingreso del hogar y el responsable Hogar
	//
	var idItems		=	$("#cboHogar option:selected" ).text().trim();
	var fields 		=	idItems.split('-');	
	var idHogar		=	fields[0];
	//
	$.ajax({		
		url: "g_rRevInvBuscarAltaHogar.asp?id_Hogar=" + idHogar,
		cache: false,
		async: false,
		beforeSend: function(objeto){
			$("#loader").html("<img src='images/ajax_small.gif'> Alta Hogar..!");
		},
		success: function (data) {
			//debugger;
			console.log(data);							
			//				
			var nombre   = data[0].nombre;
			var apellido = data[0].apellido;
			var celular  = data[0].celular;
			var fecha    = data[0].fecha;
			//
			if (fecha == null || fecha == "" || fecha.length == 0 || fecha == undefined ) {
				$("#responsableHogar").html(nombre+" "+apellido);
				$("#celularHogar").html(celular);
				$("#altaHogar").html("Sin Registro");			
			}else{
				$("#responsableHogar").html(nombre+" "+apellido);
				$("#celularHogar").html(celular);
				$("#altaHogar").html(fecha);			
			}
			$("#loader").html("");			
		},
	});		
}
//
function buscarMotivoInvestigacion() {
	//
	// Buscar Motivo de la investigacion del consumo
	//
	// debugger;	
	//
	var idConsumo =	$("#cboIdConsumo" ).val().trim();	
	//
	$.ajax({		
		url: "g_rRevInvBuscarMotivoInvestigacion.asp?id_consumo=" + idConsumo,
		cache: false,
		async: false,
		dataType: "html",
		beforeSend: function(objeto){
			$("#loader").html("<img src='images/ajax_small.gif'> Buscando Motivo..!");
		},
		success: function (data) {
			//debugger;
			console.log(data);							
			//
			var fields 		=	data.split('-');	
			var motivo		=	fields[0];
			var observa 	=	fields[1];
			//
			observa = replaceAll(observa, "_", ",");
			
			if(data=="False"){
				$("#txtMotivoInvestigar").val("No Aplica");
				$("#txtMotivoInvestigacion").val("No Aplica");
				$("#txtComentarioAdicional").val("No Aplica");				
				$("#txtPregunta").val("No Aplica");			
			}else{
				$("#txtMotivoInvestigar").val(motivo);				
				$("#txtMotivoInvestigacion").val(motivo);
				$("#txtComentarioAdicional").val(observa);				
				$("#txtPregunta").val(observa);			
			}
			$("#loader").html("");
		},
	});		
}
//
function buscarHogarValidado() {
	//		
	$("#loader").html("<img src='images/ajax_small.gif'> Buscando Hogar Validado...!");	
	var idConsumo =	$("#cboHogar" ).val().trim();		
	let ajax = {
		idConsumo: idConsumo,		
	};
	$.ajax({
		url: "g_rRevInvBuscarHogarValidado.asp",
		type: "POST",
		cache: false,
		async: false,
		data: ajax,
		//dataType: "json",
		success: function (data) {			
			//debugger;
			console.log(data);				
			$("#loader").html("");
			if(data==="True"){
				$("#hogarValidado").css("display", "block");						
			}else{
				$("#hogarValidado").css("display", "none");
			}			
		},
  });
}
//
function CalculosTotales() {
	// Totalizar consumos x Validados y Pendientes
	debugger;
	return false;
	//
	var idSemana	=	$("#cboSemana").val(); 	
	//		
	$.ajax({		
		url: "g_rRevInvTotalizarConsumosxResueltosyPendientes.asp?id_semana=" + idSemana,
		cache: false,
		async: false,
		dataType: "json",
		beforeSend: function(objeto){
			$("#loader").html("<img src='images/ajax_small.gif'> Totalizando!");
		},
		success: function (data) {							
			//debugger;				
			console.log(data);				
			//
			var count = data.length;
  			console.log(count);
			//				
			if(count==2){
				var tvalidados=data[0].total;
				var tpendientes=data[1].total;
				var total = parseInt(tvalidados) + parseInt(tpendientes);
			} else if (count==1) {
				var validado = data[0].validado;
				if (validado=="True"){
					var tvalidados = data[0].total;
					var tpendientes = 0;	
				}else{
					var tvalidados = 0;
					var tpendientes = data[0].total;
				}					
				var total = parseInt(tvalidados) + parseInt(tpendientes);			
			}
			//
			valor = Number(total).toLocaleString("es-ES", {minimumFractionDigits: 0});	
			$("#totalConsumos").html(valor);		
			//
			valor = Number(tvalidados).toLocaleString("es-ES", {minimumFractionDigits: 0});	
			$("#totalValidados").html(valor);		
			//
			valor = Number(tpendientes).toLocaleString("es-ES", {minimumFractionDigits: 0});	
			$("#totalPendientes").html(valor);		
			//
			$("#altaHogar").html("<i class='fas fa-calendar-day'></i>");				
			buscarTotalHogaresReportados();
			$("#loader").html("");
		},    				
	});		
}
//
function buscarTotalHogaresReportados() {
	// Buscar total de hogares reportan consumos x seamana
	// debugger;		
	var idSemana =	$("#cboSemana").val();
	//
	$.ajax({		
		url: "g_ValTotalizarHogaresxConsumos.asp?id_Semana=" + idSemana,
		cache: false,
		async: false,
		beforeSend: function(objeto){
			$("#loader").html("<img src='images/ajax_small.gif'> Totalizando Hogares!");
		},
		success: function (data) {
			//debugger;
			console.log(data);									
			valor = Number(data).toLocaleString("es-ES", {minimumFractionDigits: 0});	
			$("#totalHogares").html(valor);							
			$("#loader").html("");
		},
	});		
}
//
function buscarMonedaPagoFactura() {		
	//	
	$("#loader").html("<img src='images/ajax_small.gif'> Buscando Moneda!");	
	//
	$.ajax({
		url: "g_rRevInvLlenarCmbMonedaPagoFactura.asp",
		type: "POST",
		cache: false,
		async: false,
		//data: ajax,
		dataType: "json",
		success: function (data) {
			//debugger;
			console.log(data);
			let select = $("#MonedaPagoFactura");
			select.find("option").remove();
			select.append("<option value='0' selected disabled> -- Seleccione -- </option>");
			$.each(data.data, function (key, value) {
				select.append("<option value=" + value.id + ">" + value.nombre + "</option>");
			});
			$("#loader").html("");			
		},
  });
	
}
//
function buscarResumenSemanal(){	
	//
	//debugger;	
	//
	let ajax = {
		id_semana	: $("#cboSemana").val(),
		id_Hogar	: $("#cboHogar").val(),
		id_TipCons	: $("#cboTipoConsumo").val(),
	};
	//
	$.ajax({
		url: "g_ValCalcularResumenSemanal.asp",
		type: 'GET',
		cache: false,
		async: false,
		dataType: 'HTML',
		/*En el data se define los datos que se mandaran y como, en este ejemplo se envian los datos como tipo JSON*/
		data: ajax,
		/*El beforSend se ejecuta hasta que se reciba una respuesta del servidor, mientras tanto mostrara el mensaje "Cargando..."*/
		beforeSend: function(){
			$("#loader").html("<img src='images/ajax_small.gif'> Espere, Calculando!");
		}
	})
	/*Si la consulta se realizo con exito*/
	.done(function(data) {
		//debugger;
		console.log(data);
		$("#loader").html("");
		$("#tabla-resumen").html(data);
		//				
	})
	/*Si la consulta Fallo*/
	.fail(function() {
		swal("Alerta..!","Algo salio mal, Intente de Nuevo\nde continuar este Mensaje Reportelo\n(rs)", "error");
	},'HTML');
	
}
//
function buscarHogarInvestigado() {
	//
	//debugger;
	$("#loader").html("<img src='images/ajax_small.gif'> Buscando Hogar Investigado!");	
	var idConsumo =	$("#cboHogar").val().trim();
	let ajax = {
		idConsumo: idConsumo,		
	};
	$.ajax({
		url: "g_rRevInvBuscarHogarInvestigado.asp",
		type: "GET",
		cache: false,
		async: false,
		data: ajax,
		//dataType: "json",
		success: function (data) {			
			//debugger;
			console.log(data);				
			$("#loader").html("");			
			if(data==="True"){
				$("#hogarInvestigado").css("display", "block");						
			}else{
				$("#hogarInvestigado").css("display", "none");
			}			
		},
  });
}
//
function resultadoInvestigacionHogar() {
	//	
	$("#txtRespuesta").val("");	
	$("#responderInvestigacion").modal("show");
	$(".modal-title").html("<i class='fas fa-edit'></i> Responder Investigaci&oacute;n");		
	//				
}
//
function enviarRespuestaInvestigacion() {
	//
	debugger;
	var idConsumo =	$("#cboIdConsumo").val();
	var observa	  = $("#txtRespuesta").val(); 
	//
	if (observa == null || observa == "" || observa.Length == 0 || observa== undefined ) {
		swal("Aviso..!", "Debe Indicar la Respuesta...!", "error");
		return false;	
	}
	//
	console.log(observa);
	//eliminar todo tipo de saltos de línea
 	observa = observa.replace(/(\r\n|\n|\r)/gm, " ");
	//eliminarán todos los caracteres no imprimibles
	observa = observa.replace(/[^\x20-\x7E]/gmi, "")	
 	console.log(observa);
	observa = replaceAll(observa, ",", "_");
	observa = replaceAll(observa, "'", "`");
	observa = observa.replace(/['"]+/g, '`');
	console.log(observa);
	//
	swal({
		title: "¿ Seguro Enviar la Respuesta ?",
	  text: " Esta accion no se puede reversar..! ",
	  type: "warning",
	  showCancelButton: true,
	  confirmButtonClass: "btn-danger",
	  confirmButtonText: "Si",
	  cancelButtonText: "No",
	  closeOnConfirm: true,
	  showLoaderOnConfirm: true,
	},
	function () {
		//				
		let ajax = {				
			id_Consumo  : idConsumo,
			observacion	: observa,
		};								
		$.ajax({		
			url: "g_rRevInvRespuestaInvestigacionConsumo.asp",
			type: 'GET',
			cache: false,
			async: false,
			data: ajax,
			beforeSend: function(objeto){
				$("#loader").html("<img src='images/ajax_small.gif'> Enviando, Respuesta!");
			}			
		})
		/*Si la consulta se realizo con exito*/
		.done(function(data) {
			//
			if(data==="True"){				
				$("#loader").html("");
				$("#responderInvestigacion").modal("hide");					
				swal("Aviso..!", "Respuesta Enviada...!", "success");
				//
				var esUltimoElementoSeleccionado = $("#cboIdConsumo > option:selected").index() == $("#cboIdConsumo > option").length -1;
				if (!esUltimoElementoSeleccionado) {					
					$("#cboIdConsumo option:selected").remove();
					$("#cboIdConsumo > option:selected").removeAttr("selected").next("option").attr("selected", "selected");
				} else {
					$("#cboIdConsumo option:selected").remove();
					$("#cboIdConsumo > option:selected").removeAttr("selected");
				   	$("#cboIdConsumo > option").first().attr("selected", "selected");
				}
				//				
				if($("#cboIdConsumo option").length===1) { 
					Reset();
				}else{
					$("#cboIdConsumo").change();
				}
				//
			}else{
				swal("Aviso..!", "Algo Salio Mal.., Intente de nuevo!","error");
			}
		})
		/*Si la consulta Fallo*/
		.fail(function() {			
			swal("Alerta..!","Algo salio mal, Intente de Nuevo\nde continuar este Mensaje Reportelo\n(er)", "error");
		},'HTML');
		//
	}
  );
}
//
function replaceAll(text, busca, reemplaza) {
  while (text.toString().indexOf(busca) != -1)
    text = text.toString().replace(busca, reemplaza);
  return text;
}