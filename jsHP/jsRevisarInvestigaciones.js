$(document).ready(function() {
    cargarHogaresInvestigados('#selecHogarInvestigado',0);
    
});

$("#selecHogarInvestigado").change(function() {
    var idHogar = $("#selecHogarInvestigado").val();
    cargarConsumosInvestigados('#selecFecha',0,idHogar)
    $("#tablaResumen").show();
});


$("#selecFecha").change(function(){
    var idConsumo = $("#selecFecha").val();
    var idHogar = $("#selecHogarInvestigado").val();
    cargarSemana4idConsumo('#inputSemana',idConsumo);
	cargarArea4idHogar('#inputArea',idHogar);
	cargarEstado4idHogar('#inputEstado',idHogar);
	cargarConsumo4idConsumo('#inputTipoConsumo',idConsumo);
	cargarMotivoConsumo4idConsumo('#inputMotivoInvestigar',idConsumo);
	//cargarSemana4idConsumo('#inputSemana',idConsumo);
	
});

function cargarMotivoConsumo4idConsumo(etiqueta,idConsumo) {
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


function buscarSemana() {
	//	
	//Reset_Detalles();	
	//
	let ajax = {
		id_consumo: $("#cboIdConsumo").val(),
	};
	$.ajax({		
		url: "g_rRevInvBuscarSemanas.asp",
		cache: false,
		async: false,
		data: ajax,
		dataType: "html",
		beforeSend: function(objeto){
			$("#loader").html("<img src='images/ajax_small.gif'> Buscando!");
		},
		success: function (data) {			
			if(data!=="False"){
				$("#txtSemana").val(data);
			}else{
				$("#txtSemana").val("No Aplica");
			}
			$("#loader").html("");			
		},
	});		
}
//
function buscarArea() {		
	//		
	//Reset_Detalles();
	//
	var idItems		=	$("#cboHogar option:selected" ).text().trim();
	var fields 		=	idItems.split('-');	
	var idHogar		=	fields[0];
	//
	let ajax = {
		id_hogar: idHogar,
	};
	//
	$.ajax({			
		url: "g_rRevInvBuscarArea.asp",
		cache: false,
		async: false,
		data: ajax,
		dataType: "html",
		beforeSend: function(objeto){
			$("#loader").html("<img src='images/ajax_small.gif'> Buscando!");
		},
		success: function (data) {			
			if(data!=="False"){
				$("#txtArea").val(data);
			}else{
				$("#txtArea").val("No Aplica");
			}
			$("#loader").html("");			
		},
	});		
}
//
function buscarEstado() {	
	//		
	//Reset_Detalles();
	//
	var idItems		=	$("#cboHogar option:selected" ).text().trim();
	var fields 		=	idItems.split('-');	
	var idHogar		=	fields[0];
	//
	let ajax = {
		id_hogar: idHogar,
	};
	//
	$.ajax({			
		url: "g_rRevInvBuscarEstado.asp",
		cache: false,
		async: false,
		data: ajax,
		dataType: "html",
		beforeSend: function(objeto){
			$("#loader").html("<img src='images/ajax_small.gif'> Buscando!");
		},
		success: function (data) {			
			if(data!=="False"){
				$("#txtEstado").val(data);
			}else{
				$("#txtEstado").val("No Aplica");
			}
			$("#loader").html("");			
		},
	});		
}
//
function buscarTipoConsumo() {
	//
	//debugger;
	//		
	//Reset_Detalles();
	//	
	var idConsumo =	$("#cboIdConsumo" ).val().trim();	
	//	
	let ajax = {
		id_consumo: idConsumo,
	};
	//
	$.ajax({			
		url: "g_rRevInvBuscarTipoConsumo.asp",
		cache: false,
		async: false,
		data: ajax,
		dataType: "html",
		beforeSend: function(objeto){
			$("#loader").html("<img src='images/ajax_small.gif'> Buscando!");
		},
		success: function (data) {			
			if(data!=="False"){
				$("#txtTipoConsumo").val(data);
			}else{
				$("#txtTipoConsumo").val("No Aplica");
			}
			$("#loader").html("");			
		},
	});		
}
//
function buscarDiaSemana() {
	//
	var idConsumo =	$("#cboIdConsumo" ).val().trim();
	let ajax = {
		id_consumo: idConsumo,
	};
	//		
	$.ajax({		
		url: "g_rRevInvBuscarDiaSemana.asp",
		cache: false,
		async: false,
		data: ajax,
		dataType: "html",
		beforeSend: function(objeto){
			$("#loader").html("<img src='images/ajax_small.gif'> Buscando!");
		},
		success: function (data) {
			if(data=="False"){
				$("#txtDiaSemana").val("No Aplica");
			}else{
				$("#txtDiaSemana").val(data);				
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
function buscarSemana() {
	//	
	//Reset_Detalles();	
	//
	let ajax = {
		id_consumo: $("#cboIdConsumo").val(),
	};
	$.ajax({		
		url: "g_rRevInvBuscarSemanas.asp",
		cache: false,
		async: false,
		data: ajax,
		dataType: "html",
		beforeSend: function(objeto){
			$("#loader").html("<img src='images/ajax_small.gif'> Buscando!");
		},
		success: function (data) {			
			if(data!=="False"){
				$("#txtSemana").val(data);
			}else{
				$("#txtSemana").val("No Aplica");
			}
			$("#loader").html("");			
		},
	});		
}
//
function buscarArea() {		
	//		
	//Reset_Detalles();
	//
	var idItems		=	$("#cboHogar option:selected" ).text().trim();
	var fields 		=	idItems.split('-');	
	var idHogar		=	fields[0];
	//
	let ajax = {
		id_hogar: idHogar,
	};
	//
	$.ajax({			
		url: "g_rRevInvBuscarArea.asp",
		cache: false,
		async: false,
		data: ajax,
		dataType: "html",
		beforeSend: function(objeto){
			$("#loader").html("<img src='images/ajax_small.gif'> Buscando!");
		},
		success: function (data) {			
			if(data!=="False"){
				$("#txtArea").val(data);
			}else{
				$("#txtArea").val("No Aplica");
			}
			$("#loader").html("");			
		},
	});		
}
//
function buscarEstado() {	
	//		
	//Reset_Detalles();
	//
	var idItems		=	$("#cboHogar option:selected" ).text().trim();
	var fields 		=	idItems.split('-');	
	var idHogar		=	fields[0];
	//
	let ajax = {
		id_hogar: idHogar,
	};
	//
	$.ajax({			
		url: "g_rRevInvBuscarEstado.asp",
		cache: false,
		async: false,
		data: ajax,
		dataType: "html",
		beforeSend: function(objeto){
			$("#loader").html("<img src='images/ajax_small.gif'> Buscando!");
		},
		success: function (data) {			
			if(data!=="False"){
				$("#txtEstado").val(data);
			}else{
				$("#txtEstado").val("No Aplica");
			}
			$("#loader").html("");			
		},
	});		
}
//
function buscarTipoConsumo() {
	//
	//debugger;
	//		
	//Reset_Detalles();
	//	
	var idConsumo =	$("#cboIdConsumo" ).val().trim();	
	//	
	let ajax = {
		id_consumo: idConsumo,
	};
	//
	$.ajax({			
		url: "g_rRevInvBuscarTipoConsumo.asp",
		cache: false,
		async: false,
		data: ajax,
		dataType: "html",
		beforeSend: function(objeto){
			$("#loader").html("<img src='images/ajax_small.gif'> Buscando!");
		},
		success: function (data) {			
			if(data!=="False"){
				$("#txtTipoConsumo").val(data);
			}else{
				$("#txtTipoConsumo").val("No Aplica");
			}
			$("#loader").html("");			
		},
	});		
}
//
function buscarDiaSemana() {
	//
	var idConsumo =	$("#cboIdConsumo" ).val().trim();
	let ajax = {
		id_consumo: idConsumo,
	};
	//		
	$.ajax({		
		url: "g_rRevInvBuscarDiaSemana.asp",
		cache: false,
		async: false,
		data: ajax,
		dataType: "html",
		beforeSend: function(objeto){
			$("#loader").html("<img src='images/ajax_small.gif'> Buscando!");
		},
		success: function (data) {
			if(data=="False"){
				$("#txtDiaSemana").val("No Aplica");
			}else{
				$("#txtDiaSemana").val(data);				
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
function buscarDetalleConsumoxDia() {
	//
	// Buscar el detalle los del consumo individual
	// debugger;
	// Reset_Detalles();
	buscarCadena(0);
	buscarCanal();
	buscarMonedaPagoFactura();
	//	
	var idConsumo =	$("#cboIdConsumo" ).val().trim();	
	var idXonsumo =	$("#cboHogar" ).val().trim();	
	//			
	$.ajax({		
		url: "g_rRevInvBuscarDetalleConsumoxDia.asp?id_Consumo=" + idConsumo,
		cache: false,
		async: false,
		dataType: "json",
		beforeSend: function(objeto){
			$("#loader").html("<img src='images/ajax_small.gif'> Buscando!");
		},
		success: function (data) {							
			debugger;				
			console.log(data);				
			//
			var canal  = parseInt(data[0].canal);
			var cadena = parseInt(data[0].cadena);
			var moneda = parseInt(data[0].moneda);
			var totalProductos = parseInt(data[0].totalproductos);
			sessionStorage.setItem("idtipoConsumo", data[0].tipoconsumo );
			//
			$("#cboCanal").val(canal).change();
			$("#cboCadena").val(cadena).change();			
			$("#MonedaPagoFactura").val(moneda).change();
			$("#totalProductos").val(totalProductos);
			//
			$("#cboCanal").prop("disabled","disabled");
			$("#cboCadena").prop("disabled","disabled");			
			$("#MonedaPagoFactura").prop("disabled","disabled");			
			$("#totalProductos").prop("disabled","disabled");
			var factura=data[0].tienefactura;
			//
			if(factura==="True"){
				$("#loader").html("");				
				$("#tienefactura").html("Tiene Factura: ( SI )");
				$("#totalFactura").val("");							
				$("#tieneFactura").val("1");				
			}else{
				$("#tienefactura").html("Tiene Factura: ( NO )");					
				$("#totalFactura").val("");
				$("#tieneFactura").val("0");
			}
			if(parseFloat(data[0].totalcompra)===0){
				$("#montoFactura").html('Total Compra: Ver factura');	
			}else{
				var totalcompraGeneral = parseFloat(data[0].totalcompra);					
				totalcompra = Number(data[0].totalcompra).toLocaleString("es-ES", {minimumFractionDigits: 2});					
				$("#montoFactura").html("<span>Total Compra: " + totalcompra + "</span>");	
				$("#totalFactura").val(totalcompra);
				$("#totalFactura").attr("disabled", "disabled");
			}								
			$("#loader").html("");
			//
			buscarImagenFactura();
			//
		},    				
	});		
}
//
function buscarImagenFactura() {
	//	
	buscarDetallexProductoFactura();
	//
	//debugger;
	var idConsumo =	$("#cboIdConsumo").val().trim();
	//	
	$.ajax({
		url: "g_ValBuscarImagenFacturaxDia.asp",
		type: 'GET',
		cache: false,
		async: false,
		dataType: 'JSON',
		/*En el data se define los datos que se mandaran y como, en este ejemplo se envian los datos como tipo JSON*/
		data: {id_Consumo: idConsumo},
		/*El beforSend se ejecuta hasta que se reciba una respuesta del servidor, mientras tanto mostrara el mensaje "Cargando..."*/
		beforeSend: function(){
			$("#loader").html("<img src='images/ajax_small.gif'> Buscando Imagen!");
		}
	})
	/*Si la consulta se realizo con exito*/
	.done(function(data) {
		//debugger;
		$("#DetalleFactura").css("display", "block");				
		console.log(data);
		if (data[0].id==="0"){
			var imagen = "images/"+ data[0].imagen;	
		}else{
			var imagen = "images/facturas/"+ data[0].imagen;	
		}
		$("#imgfactura").attr("src", imagen);		
		$("#loader").html("");			
		//
		//buscarResumenSemanal();
		//
	})
	/*Si la consulta Fallo*/
	.fail(function() {
		swal("Alerta..!","Algo salio mal, Intente de Nuevo\nde continuar este Mensaje Reportelo\(img)", "error");
	},'json');
}
//
function buscarDetallexProductoFactura() {
	//
	//debugger;
	var idConsumo     =	$("#cboIdConsumo").val().trim();
	var idTipoConsumo = sessionStorage.getItem("idtipoConsumo");
	//	
	$.ajax({
		url: "g_rRevInvBuscarDetallesxProductosxFactura.asp",
		type: 'GET',
		cache: false,
		async: false,
		dataType: 'HTML',
		data: { id_Consumo : idConsumo, id_tipoConsumo : idTipoConsumo },
		beforeSend: function(){
			$("#loader").html("<img src='images/ajax_small.gif'> Buscando Imagen!");
		}
	})
	/*Si la consulta se realizo con exito*/
	.done(function(data) {
		//debugger;
		console.log(data);
		$("#loader").html("");
		$("#tabla-resultados").html(data);
		//				
	})
	/*Si la consulta Fallo*/
	.fail(function() {
		swal("Alerta..! bDxPF()","Algo salio mal, Intente de Nuevo\nde continuar este Mensaje Reportelo", "error");
	},'HTML');
		
}
//
function buscarCadena(id) {
	$("#loader").html("<img src='images/ajax_small.gif'> Buscando!");
	$("#cboCadena").prop("disabled", true);
	let ajax = {
		opcion: 1,
		id: id,
	};
	$.ajax({
		url: "g_rRevInvBuscarCadenaxConsumo.asp",
		type: "POST",
		cache: false,
		async: false,
		data: ajax,
		dataType: "json",
		success: function (data) {
			//debugger;
			let select = $("#cboCadena");
			select.find("option").remove();
			select.append("<option value='' selected disabled> -- Seleccione -- </option>");
			$.each(data.data, function (key, value) {
				select.append("<option value=" + value.id + ">" + value.nombre + "</option>");
			});
			$("#loader").html("");
			var len = $("#cboCadena option").length;
			if (len <= 2) {
				$("#cboCadena").prop("selectedIndex", 1);
				$("#cboCadena").prop("disabled", true);
				texto=$("#cboCadena option:selected" ).text().trim();			
			} else {
				$("#cboCadena").prop("selectedIndex", 0);
				$("#cboCadena").prop("disabled", false);
			}	  
		},
  });
}
//
function buscarCanal() {
	$("#loader").html("<img src='images/ajax_small.gif'> Buscando!");	
	let ajax = {
			id: 0,
		opcion: 2,
	};
	$.ajax({
		url: "g_rRevInvBuscarCadenaxConsumo.asp",
		type: "POST",
		cache: false,
		async: false,
		data: ajax,
		dataType: "json",
		success: function (data) {
			//debugger;
			let select = $("#cboCanal");
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