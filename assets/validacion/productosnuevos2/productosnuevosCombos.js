//
// llenarcombos.JS - 24jul21 *
//
function llenarComboCategoria() {
	//
	//debugger;
	$("#cboCategoria").prop("disabled", true);
	$("#cboCanal").prop("disabled", true);
	$("#loader").css("display", "block");
	//
	var settings = {

		url: sessionStorage.getItem("urlApi") + "getAllCategorias",
		method: "get",
		headers: {
			"Content-Type": "application/x-www-form-urlencoded",
			Authorization: "Bearer " + localStorage.getItem("Token"),
		},
	};
	$.ajax(settings)
		.done(function (response) {
			//console.log(response);
			//debugger;
			let select = $("#cboCategoria");
			select.find("option").remove();
			select.append(
				"<option value='0' selected disabled> -- Seleccione -- </option>"
			);
			for (var i = 0; i < response.data.length; i++) {
				select.append(
					"<option value=" + response.data[i].id + ">" + response.data[i].nombre + "</option>"
				);
			}
			//
			$("#cboCategoria").prop("disabled", false);
			$("#cboCategoria").prop("selectedIndex", 0);
			$("#loader").css("display", "none");
			//
		})
		.fail(function (jqXHR, textStatus) {
			if (jqXHR.status == 400) {
				const Toast = Swal.mixin({
					toast: true,
					position: "top-end",
					showConfirmButton: false,
					timer: 10000,
					timerProgressBar: true,
					didOpen: (toast) => {
						toast.addEventListener("mouseenter", Swal.stopTimer);
						toast.addEventListener("mouseleave", Swal.resumeTimer);
					},
				});
				Toast.fire({
					title: "Su Session ha Expirado",
					confirmButtonText: `Ok`,
				});
				window.location = "/retailscannig/index.php";
			}
		});
}
//
function llenarComboFabricantes() {
	//
	//debugger;
	$("#loader").css("display", "block");
	var idCat=$("#cboCategoria").val();
	if (idCat == null || idCat == 0) {
		$("#cboCategoria").focus();
		return false;
	}
	//
	var settings = {		
		url: sessionStorage.getItem("urlApi") + "getAllFabricantes_x_Categoria/"+ idCat,
		method: "get",
		headers: {
			"Content-Type": "application/x-www-form-urlencoded",
			Authorization: "Bearer " + localStorage.getItem("Token"),
		},
	};
	$.ajax(settings)
		.done(function (response) {
			//console.log(response);
			//debugger;
			let select = $("#cboFabricante");
			select.find("option").remove();
			select.append(
				"<option value='0' selected disabled> -- Seleccione -- </option>"
			);
			for (var i = 0; i < response.data.length; i++) {
				select.append(
					"<option value=" + response.data[i].id + ">" + response.data[i].nombre + "</option>"
				);
			}
			//
			$("#cboFabricante").prop("disabled", false);
			$("#cboFabricante").prop("selectedIndex", 0);
			$("#loader").css("display", "none");
			llenarComboSegmento();
			//
		})
		.fail(function (jqXHR, textStatus) {
			if (jqXHR.status == 400) {
				const Toast = Swal.mixin({
					toast: true,
					position: "top-end",
					showConfirmButton: false,
					timer: 10000,
					timerProgressBar: true,
					didOpen: (toast) => {
						toast.addEventListener("mouseenter", Swal.stopTimer);
						toast.addEventListener("mouseleave", Swal.resumeTimer);
					},
				});
				Toast.fire({
					title: "Su Session ha Expirado",
					confirmButtonText: `Ok`,
				});
				window.location = "/retailscannig/index.php";
			}
		});
	//
}
//
function llenarComboMarca() {
	//
	debugger;
	$("#loader").css("display", "block");
	var idCat=$("#cboCategoria").val();
	if (idCat == null || idCat == 0) {
		$("#cboCategoria").focus();
		return false;
	}
	var idFab=$("#cboFabricante").val();
	if (idFab == null || idCat == 0) {
		$("#cboFabricante").focus();
		return false;
	}
	//
	var settings = {		
		url: sessionStorage.getItem("urlApi") + "getAllMarca_x_Categoria_x_Fabricante/"+ idCat + "/" + idFab,
		method: "get",
		headers: {
			"Content-Type": "application/x-www-form-urlencoded",
			Authorization: "Bearer " + localStorage.getItem("Token"),
		},
	};
	$.ajax(settings)
		.done(function (response) {
			//console.log(response);
			debugger;
			let select = $("#cboMarcas");
			select.find("option").remove();
			select.append(
				"<option value='0' selected disabled> -- Seleccione -- </option>"
			);
			for (var i = 0; i < response.data.length; i++) {
				select.append(
					"<option value=" + response.data[i].id + ">" + response.data[i].nombre + "</option>"
				);
			}
			//
			$("#cboMarcas").prop("disabled", false);
			$("#cboMarcas").prop("selectedIndex", 0);
			$("#loader").css("display", "none");
			//
		})
		.fail(function (jqXHR, textStatus) {
			if (jqXHR.status == 400) {
				const Toast = Swal.mixin({
					toast: true,
					position: "top-end",
					showConfirmButton: false,
					timer: 10000,
					timerProgressBar: true,
					didOpen: (toast) => {
						toast.addEventListener("mouseenter", Swal.stopTimer);
						toast.addEventListener("mouseleave", Swal.resumeTimer);
					},
				});
				Toast.fire({
					title: "Su Session ha Expirado",
					confirmButtonText: `Ok`,
				});
				window.location = "/retailscannig/index.php";
			}
		});
	//
}
//
function llenarComboSegmento(){
	//
	//debugger;
	$("#loader").css("display", "block");
	var idCat=$("#cboCategoria").val();
	if (idCat == null || idCat == 0) {
		$("#cboCategoria").focus();
		return false;
	}
	//
	var settings = {		
		url: sessionStorage.getItem("urlApi") + "getAllSegmento_x_Categoria/"+ idCat,
		method: "get",
		headers: {
			"Content-Type": "application/x-www-form-urlencoded",
			Authorization: "Bearer " + localStorage.getItem("Token"),
		},
	};
	$.ajax(settings)
		.done(function (response) {
			//console.log(response);
			//debugger;
			let select = $("#cboSegmento");
			select.find("option").remove();
			select.append(
				"<option value='0' selected disabled> -- Seleccione -- </option>"
			);
			for (var i = 0; i < response.data.length; i++) {
				select.append(
					"<option value=" + response.data[i].id + ">" + response.data[i].nombre + "</option>"
				);
			}
			//
			$("#cboSegmento").prop("disabled", false);
			$("#cboSegmento").prop("selectedIndex", 0);
			$("#loader").css("display", "none");
			llenarComboTamano();
			//
		})
		.fail(function (jqXHR, textStatus) {
			if (jqXHR.status == 400) {
				const Toast = Swal.mixin({
					toast: true,
					position: "top-end",
					showConfirmButton: false,
					timer: 10000,
					timerProgressBar: true,
					didOpen: (toast) => {
						toast.addEventListener("mouseenter", Swal.stopTimer);
						toast.addEventListener("mouseleave", Swal.resumeTimer);
					},
				});
				Toast.fire({
					title: "Su Session ha Expirado",
					confirmButtonText: `Ok`,
				});
				window.location = "/retailscannig/index.php";
			}
		});
	//
}
//
function llenarComboTamano(){
	//
	//debugger;
	$("#loader").css("display", "block");
	var idCat=$("#cboCategoria").val();
	if (idCat == null || idCat == 0) {
		$("#cboCategoria").focus();
		return false;
	}
	//
	var settings = {		
		url: sessionStorage.getItem("urlApi") + "getAllTamano_x_Categoria/"+ idCat,
		method: "get",
		headers: {
			"Content-Type": "application/x-www-form-urlencoded",
			Authorization: "Bearer " + localStorage.getItem("Token"),
		},
	};
	$.ajax(settings)
		.done(function (response) {
			//console.log(response);
			//debugger;
			let select = $("#cboTamano");
			select.find("option").remove();
			select.append(
				"<option value='0' selected disabled> -- Seleccione -- </option>"
			);
			for (var i = 0; i < response.data.length; i++) {
				select.append(
					"<option value=" + response.data[i].id + ">" + response.data[i].nombre + "</option>"
				);
			}
			//
			$("#cbocboTamano").prop("disabled", false);
			$("#cbocboTamano").prop("selectedIndex", 0);
			$("#loader").css("display", "none");
			llenarComboRango();
			//
		})
		.fail(function (jqXHR, textStatus) {
			if (jqXHR.status == 400) {
				const Toast = Swal.mixin({
					toast: true,
					position: "top-end",
					showConfirmButton: false,
					timer: 10000,
					timerProgressBar: true,
					didOpen: (toast) => {
						toast.addEventListener("mouseenter", Swal.stopTimer);
						toast.addEventListener("mouseleave", Swal.resumeTimer);
					},
				});
				Toast.fire({
					title: "Su Session ha Expirado",
					confirmButtonText: `Ok`,
				});
				window.location = "/retailscannig/index.php";
			}
		});
	//
}
//
function llenarComboRango(){
	//
	//debugger;
	$("#loader").css("display", "block");
	var idCat=$("#cboCategoria").val();
	if (idCat == null || idCat == 0) {
		$("#cboCategoria").focus();
		return false;
	}
	//
	var settings = {		
		url: sessionStorage.getItem("urlApi") + "getAllRango_x_Categoria/"+ idCat,
		method: "get",
		headers: {
			"Content-Type": "application/x-www-form-urlencoded",
			Authorization: "Bearer " + localStorage.getItem("Token"),
		},
	};
	$.ajax(settings)
		.done(function (response) {
			//console.log(response);
			//debugger;
			let select = $("#cboRango");
			select.find("option").remove();
			select.append(
				"<option value='0' selected disabled> -- Seleccione -- </option>"
			);
			for (var i = 0; i < response.data.length; i++) {
				select.append(
					"<option value=" + response.data[i].id + ">" + response.data[i].nombre + "</option>"
				);
			}
			//
			$("#cboRango").prop("disabled", false);
			$("#cboRango").prop("selectedIndex", 0);
			$("#loader").css("display", "none");
			llenarComboUnidadMedida();
			//
		})
		.fail(function (jqXHR, textStatus) {
			if (jqXHR.status == 400) {
				const Toast = Swal.mixin({
					toast: true,
					position: "top-end",
					showConfirmButton: false,
					timer: 10000,
					timerProgressBar: true,
					didOpen: (toast) => {
						toast.addEventListener("mouseenter", Swal.stopTimer);
						toast.addEventListener("mouseleave", Swal.resumeTimer);
					},
				});
				Toast.fire({
					title: "Su Session ha Expirado",
					confirmButtonText: `Ok`,
				});
				window.location = "/retailscannig/index.php";
			}
		});
	//
}
//
function llenarComboUnidadMedida(){
	//
	//debugger;
	$("#loader").css("display", "block");
	var idCat=$("#cboCategoria").val();
	if (idCat == null || idCat == 0) {
		$("#cboCategoria").focus();
		return false;
	}
	//
	var settings = {		
		url: sessionStorage.getItem("urlApi") + "getAllUnidadMed_x_Categoria/"+ idCat,
		method: "get",
		headers: {
			"Content-Type": "application/x-www-form-urlencoded",
			Authorization: "Bearer " + localStorage.getItem("Token"),
		},
	};
	$.ajax(settings)
		.done(function (response) {
			//console.log(response);
			//debugger;
			let select = $("#cboUnidadMedida");
			select.find("option").remove();
			select.append(
				"<option value='0' selected disabled> -- Seleccione -- </option>"
			);
			for (var i = 0; i < response.data.length; i++) {
				select.append(
					"<option value=" + response.data[i].id + ">" + response.data[i].nombre + "</option>"
				);
			}
			//
			$("#cboUnidadMedida").prop("disabled", false);
			$("#cboUnidadMedida").prop("selectedIndex", 0);
			$("#loader").css("display", "none");
			//
		})
		.fail(function (jqXHR, textStatus) {
			if (jqXHR.status == 400) {
				const Toast = Swal.mixin({
					toast: true,
					position: "top-end",
					showConfirmButton: false,
					timer: 10000,
					timerProgressBar: true,
					didOpen: (toast) => {
						toast.addEventListener("mouseenter", Swal.stopTimer);
						toast.addEventListener("mouseleave", Swal.resumeTimer);
					},
				});
				Toast.fire({
					title: "Su Session ha Expirado",
					confirmButtonText: `Ok`,
				});
				window.location = "/retailscannig/index.php";
			}
		});
	//
}
//