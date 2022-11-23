//
// llenarcombos.JS - 11mar21 *
//
function llenarComboCategoria() {
	//
	let ajax = { idOpcion	: 1, idBusqueda1	: 0, idBusqueda2	: 0, };	 
	//	
	$.ajax({		
		url: "g_pPendllenarCombos.asp",
		cache: false,
		async: false,
		data: ajax,
		dataType: "json",
		beforeSend: function(objeto){
			$("#cargando").css("display", "block");
		},
		success: function (data) {
			//debugger;
			let $select = $("#cboCategoria");
			$select.find("option").remove();
			$select.append("<option value='0' selected disabled>-- Seleccione --</option>");
			$.each(data, function (i, value) {				
				$select.append("<option value=" + value.Id + ">" + value.Name + "</option>");					
			});				
			$("#cargando").css("display", "none");
		},
	});		
}
//
function llenarComboFabricantes() {
	//
	//debugger;
	var idCategoria=$("#cboCategoria").val();	
	if (idCategoria == null || idCategoria == 0) {
		swal("Aviso..!", "Seleccione una Categoria", "error");
		$("#cboCategoria").focus();
		return false;
	}
	let ajax = { idOpcion	: 2, idBusqueda1	: idCategoria, idBusqueda2	: 0,};	 
	//	
	$.ajax({		
		url: "g_pPendllenarCombos.asp",
		cache: false,
		async: false,
		data: ajax,
		dataType: "json",
		beforeSend: function(objeto){
			$("#cargando").css("display", "block");
		},
		success: function (data) {
			//debugger;
			let $select = $("#cboFabricante");
			$select.find("option").remove();
			$select.append("<option value='0' selected disabled>-- Seleccione --</option>");
			$.each(data, function (i, value) {				
				$select.append("<option value=" + value.Id + ">" + value.Name + "</option>");					
			});				
			$("#cargando").css("display", "none");
			llenarComboSegmento();
		},
	});		
}
//
function llenarComboMarca() {
	//
	//debugger;
	var idCategoria = $("#cboCategoria").val();	
	if (idCategoria == null || idCategoria == 0) {
		swal("Aviso..!", "Seleccione una Categoria", "error");
		$("#cboCategoria").focus();
		return false;
	}
	var idFabricante = $("#cboFabricante").val();	
	if (idFabricante == null || idFabricante == 0) {
		swal("Aviso..!", "Seleccione un Fabricante", "error");
		$("#cboFabricante").focus();
		return false;
	}
	let ajax = { idOpcion	: 3, idBusqueda1	: idCategoria, idBusqueda2	: idFabricante, };	 
	//	
	$.ajax({		
		url: "g_pPendllenarCombos.asp",
		cache: false,
		async: false,
		data: ajax,
		dataType: "json",
		beforeSend: function(objeto){
			$("#cargando").css("display", "block");
		},
		success: function (data) {
			//debugger;
			let $select = $("#cboMarcas");
			$select.find("option").remove();
			$select.append("<option value='0' selected disabled>-- Seleccione --</option>");
			$.each(data, function (i, value) {				
				$select.append("<option value=" + value.Id + ">" + value.Name + "</option>");					
			});				
			$("#cargando").css("display", "none");
		},
	});		
}
//
function llenarComboSegmento() {
	//
	//debugger;
	var idCategoria = $("#cboCategoria").val();	
	if (idCategoria == null || idCategoria == 0) {
		swal("Aviso..!", "Seleccione una Categoria", "error");
		$("#cboCategoria").focus();
		return false;
	}	
	let ajax = { idOpcion	: 4, idBusqueda1	: idCategoria, idBusqueda2	: 0, };	 
	//	
	$.ajax({		
		url: "g_pPendllenarCombos.asp",
		cache: false,
		async: false,
		data: ajax,
		dataType: "json",
		beforeSend: function(objeto){
			$("#cargando").css("display", "block");
		},
		success: function (data) {
			//debugger;
			let $select = $("#cboSegmento");
			$select.find("option").remove();
			$select.append("<option value='0' selected disabled>-- Seleccione --</option>");
			$.each(data, function (i, value) {				
				$select.append("<option value=" + value.Id + ">" + value.Name + "</option>");					
			});				
			$("#cargando").css("display", "none");
			llenarComboTamano();
		},
	});		
}
//
function llenarComboTamano() {
	//
	//debugger;
	var idCategoria = $("#cboCategoria").val();	
	if (idCategoria == null || idCategoria == 0) {
		swal("Aviso..!", "Seleccione una Categoria", "error");
		$("#cboCategoria").focus();
		return false;
	}	
	let ajax = { idOpcion	: 5, idBusqueda1	: idCategoria, idBusqueda2	: 0, };	 
	//	
	$.ajax({		
		url: "g_pPendllenarCombos.asp",
		cache: false,
		async: false,
		data: ajax,
		dataType: "json",
		beforeSend: function(objeto){
			$("#cargando").css("display", "block");
		},
		success: function (data) {
			//debugger;
			let $select = $("#cboTamano");
			$select.find("option").remove();
			$select.append("<option value='0' selected disabled>-- Seleccione --</option>");
			$.each(data, function (i, value) {				
				$select.append("<option value=" + value.Id + ">" + value.Name + "</option>");					
			});				
			$("#cargando").css("display", "none");
			llenarComboRango();
		},
	});		
}
//
function llenarComboRango() {
	//
	//debugger;
	var idCategoria = $("#cboCategoria").val();	
	if (idCategoria == null || idCategoria == 0) {
		swal("Aviso..!", "Seleccione una Categoria", "error");
		$("#cboCategoria").focus();
		return false;
	}	
	let ajax = { idOpcion	: 6, idBusqueda1	: idCategoria, idBusqueda2	: 0, };	 
	//	
	$.ajax({		
		url: "g_pPendllenarCombos.asp",
		cache: false,
		async: false,
		data: ajax,
		dataType: "json",
		beforeSend: function(objeto){
			$("#cargando").css("display", "block");
		},
		success: function (data) {
			//debugger;
			let $select = $("#cboRango");
			$select.find("option").remove();
			$select.append("<option value='0' selected disabled>-- Seleccione --</option>");
			$.each(data, function (i, value) {				
				$select.append("<option value=" + value.Id + ">" + value.Name + "</option>");					
			});				
			$("#cargando").css("display", "none");
			llenarComboUnidadMedida();
		},
	});		
}
//
function llenarComboUnidadMedida() {
	//
	//debugger;
	var idCategoria = $("#cboCategoria").val();	
	if (idCategoria == null || idCategoria == 0) {
		swal("Aviso..!", "Seleccione una Categoria", "error");
		$("#cboCategoria").focus();
		return false;
	}	
	let ajax = { idOpcion	: 7, idBusqueda1	: idCategoria, idBusqueda2	: 0, };	 
	//	
	$.ajax({		
		url: "g_pPendllenarCombos.asp",
		cache: false,
		async: false,
		data: ajax,
		dataType: "json",
		beforeSend: function(objeto){
			$("#cargando").css("display", "block");
		},
		success: function (data) {
			//debugger;
			let $select = $("#cboUnidadMedida");
			$select.find("option").remove();
			$select.append("<option value='0' selected disabled>-- Seleccione --</option>");
			$.each(data, function (i, value) {				
				$select.append("<option value=" + value.Id + ">" + value.Name + "</option>");					
			});				
			$("#cargando").css("display", "none");
			//llenarComboUnidadMedida();
		},
	});		
}
//
