/***** productosnuevos.js - 21jul21 - 24jul21 *****/
/*------------------------------------------------*/
function Reset() {
	//
	$("#cboProductosPendientes").prop("selectedIndex", 0);
	//$("#cboCanal").prop("selectedIndex", 0);
	Limpieza();
}
//
$("#cboProductosPendientes").change(function () {
	$("#crear").prop("disabled", true);
	Limpieza();
	ProcesarCodigoBarras();
});
//
function Limpieza() {
	//
	$("#ShowBarcode").css("display", "none");
	$("#mainCodigoBarras").css("display", "none");
	//
}
//
function cargarProductosPendientes() {
	//
	//debugger;
	$("#cboProductosPendientes").prop("disabled", true);
	//$("#cboCanal").prop("disabled", true);
	$("#cargarCombos").css("display", "block");
	//
	var settings = {
		url:
			sessionStorage.getItem("urlApi") +
			"getAllRegistros_x_CodigoBarras_AllCanal",
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
			let select = $("#cboProductosPendientes");
			select.find("option").remove();
			select.append(
				"<option value='0' selected disabled> -- Seleccione -- </option>"
			);
			for (var i = 0; i < response.data.length; i++) {
				select.append(
					"<option value=" +
						response.data[i].id +
						">" +
						response.data[i].id +
						" - (" +
						response.data[i].total +
						")" +
						"</option>"
				);
			}
			//
			//cargarCanal();
			$("#cboProductosPendientes").prop("disabled", false);
			$("#cboProductosPendientes").prop("selectedIndex", 0);
			//$("#cboCanal").prop("selectedIndex", 0);
			//$("#cboCanal").prop("disabled", false);
			$("#cargarCombos").css("display", "none");
			$("#crear").prop("disabled", false);
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
function cargarCanal() {
	var settings = {
		url: sessionStorage.getItem("urlApi") + "getAllCanales",
		method: "get",
		headers: {
			"Content-Type": "application/x-www-form-urlencoded",
			Authorization: "Bearer " + localStorage.getItem("Token"),
		},
	};
	$.ajax(settings)
		.done(function (response) {
			let select = $("#cboCanal");
			select.find("option").remove();
			select.append(
				"<option value='0' selected disabled> -- Seleccione -- </option>"
			);
			for (var i = 0; i < response.data.length; i++) {
				select.append(
					"<option value=" +
						response.data[i].id +
						">" +
						response.data[i].nombre +
						"</option>"
				);
			}
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
function MostrarModalMaestroProductos() {
	//
	// debugger;
	//
	let idBarcode = $("#cboProductosPendientes").val();
	//
	if (idBarcode == null || idBarcode == 0 || idBarcode < 0) {
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
			icon: "error",
			title: "Seleccione un Codigo de Barras..!",
		});
		return false;
	}
	//
	$("#loader").css("display", "block");
	//
	var settings = {
		url:
			sessionStorage.getItem("urlApi") +
			"getValidarProductosNoExista/" +
			idBarcode,
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
			let value = response.data[0].total;
			if (Number(value) > 0) {
				Swal.fire(
					"Codigo de Barras, Registrado..!",
					"Reporte a IT esta inconsistencia..!",
					"info"
				);
			} else {
				$("#CrearProductos").modal("show");
				$(".modal-title").html(
					"<i class='fas fa-plus-square'></i>&nbsp;Crear Productos"
				);
				$("#codigoBarras").val(idBarcode);
				llenarComboCategoria();
				setDate();
			}
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
		})
		.always(function (jqXHR, textStatus) {
			$("#cargando").css("display", "none");
			$("#cboProductosPendientes").prop("disabled", false);
			$("#loader").css("display", "none");
		});
}
//
function setDate() {
	var today = new Date();
	var dd = today.getDate();
	var mm = today.getMonth() + 1; // Enero es 0!
	var yyyy = today.getFullYear();
	if (dd < 10) {
		dd = "0" + dd;
	}
	if (mm < 10) {
		mm = "0" + mm;
	}
	today = dd + "-" + mm + "-" + yyyy;
	$("#fechaCreacion").val(today);
}
//
function ProcesarCodigoBarras() {
	//
	//debugger;
	//
	let Barra = document.getElementById("cboProductosPendientes").selectedIndex;
	if (Barra == null || Barra == 0 || Barra < 0) {
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
			icon: "error",
			title: "Seleccione un Codigo de Barras..!",
		});
		return false;
	}
	$("#cargando").css("display", "block");
	$("#mainCodigoBarras2").css("display", "none");
	$("#cboProductosPendientes").prop("disabled", true);
	Barra = $("#cboProductosPendientes").val();
	//
	var settings = {
		url:
			sessionStorage.getItem("urlApi") +
			"getAllRegistros_x_CodigoBarras_Seleccionado/" +
			Barra,
		method: "get",
		headers: {
			"Content-Type": "application/x-www-form-urlencoded",
			Authorization: "Bearer " + localStorage.getItem("Token"),
		},
	};
	$.ajax(settings)
		.done(function (response) {
			console.log(response);
			//debugger;
			//table.clearData();

			//$("#tblCodigoBarrasPendientes").tabulator("destroy");

			var table = new Tabulator("#tblCodigoBarrasPendientes", {
				height: "400px",
				layout: "fitColumns",
				data: response.data,
				pagination: "local", //paginate the data
				paginationSize: 5, //allow 7 rows per page of data
				movableColumns: true,
				movableRows: true,
				locale: true,
				columns: [
					{ title: "Código", field: "codigo" },
					{ title: "Retail", field: "retail" },
					{ title: "Descripción", field: "descripcion" },
					{ title: "Total", field: "total", hozAlign: "center" },
					//{title:"Favourite Color", field:"col"},
					//{title:"Date Of Birth", field:"dob", hozAlign:"center"},
				],
				langs: {
					"es-ar": {
						pagination: {
							page_size: "Mostrar", //label for the page size select element
							first: "<i class='fas fa-backward'></i>", //text for the first page button
							first_title: "Inicio", //tooltip text for the first page button
							last: "<i class='fas fa-forward'></i>",
							last_title: "Ultimo",
							prev: "<i class='fas fa-caret-left'></i>",
							prev_title: "Anterior",
							next: "<i class='fas fa-caret-right'></i>",
							next_title: "Siguiente",
						},
						/*
						headerFilters: {
							default: "filter column...", //default header filter placeholder text
							columns: {
								name: "filter name...", //replace default header filter text for column name
							},
						},
						*/
					},
				},

				//
			});

			table.setLocale("es-ar"); //set locale to french

			// trigger download of data.xlsx file
			document
				.getElementById("download-xlsx")
				.addEventListener("click", function () {
					table.download("xlsx", "ListadoProductosNuevos.xlsx", {
						sheetName: "Resultados",
					});
				});

			// trigger download of data.pdf file
			document
				.getElementById("download-pdf")
				.addEventListener("click", function () {
					table.download("pdf", "data.pdf", {
						orientation: "portrait", //set page orientation to portrait
						title: "Listado de Productos Nuevos", //add title to report
					});
				});
			$("#mainCodigoBarras").css("display", "block");
			$("#crear").prop("disabled", false);
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
				window.location = "/RetailScannig/index.php";
			}
		})
		.always(function (jqXHR, textStatus) {
			$("#cargando").css("display", "none");
			$("#cboProductosPendientes").prop("disabled", false);
		});
}
