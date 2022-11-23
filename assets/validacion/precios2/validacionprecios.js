/***** validacionprecios.js - 23jul21 - 26jul21 *****/
/*--------------------------------------------------*/
function Reset() {
	$("#cboSemanas").prop("disabled", false);
	$("#cboSemanas").prop("selectedIndex", 0);
	$("#cargando").css("display", "none");
	$("#mainPreciosRaros").css("display", "none");	
	$("#totalRegistros").html("");
	Limpieza();
}
//
$("#cboSemanas").change(function () {
	//debugger;
	Limpieza();
	ProcesarSemana();
});
//
//
function Limpieza() {
	//
	$("#mainPreciosRaros").css("display", "none");
	//
}
//
function cargarSemanas() {
	//debugger;
	$("#cargando").css("display", "block");
	var settings = {
		url: sessionStorage.getItem("urlApi") + "getAllSemanaPrecios",
		method: "get",
		headers: {
			"Content-Type": "application/x-www-form-urlencoded",
			Authorization: "Bearer " + localStorage.getItem("Token"),
		},
	};
	$.ajax(settings)
		.done(function (response) {
			let select = $("#cboSemanas");
			select.find("option").remove();
			select.append(
				"<option value='0' selected disabled> -- Seleccione -- </option>"
			);
			for (var i = 0; i < response.data.length; i++) {
				if (i != 0) {
					select.append(
						"<option value=" +
							response.data[i].IdSemana +
							">" +
							response.data[i].Semana +
							"</option>"
					);
				}
			}
			$("#cboSemanas").prop("disabled", false);
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
		})
		.always(function (jqXHR, textStatus) {
			$("#cargando").css("display", "none");
			$("#cboSemanas").prop("disabled", false);
			$("#cboSemanas").prop("selectedIndex", 0);
		});
}
//
function ProcesarSemana() {
	//
	//debugger;
	//
	$("#cargando").css("display", "block");
	$("#totalRegistros").html("");
	let idSemana = $("#cboSemanas").val();
	//
	if (idSemana == null || idSemana == 0 || idSemana < 0) {
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
			title: "Seleccione una Semana..!",
		});
		return false;
	}
	//
	//$("#loader").css("display", "block");
	//
	var settings = {
		url:
			sessionStorage.getItem("urlApi") +
			"insertAllPreciosRaros_x_Semana/" +
			idSemana,
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
			MostrarPreciosRarosSemana();			
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
		/*
		.always(function (jqXHR, textStatus) {
			$("#cargando").css("display", "none");
			$("#cboProductosPendientes").prop("disabled", false);
			$("#loader").css("display", "none");
		});
		*/
}
//
function MostrarPreciosRarosSemana() {
	//
	//debugger;
	//
	$("#cargando").css("display", "block");
	let idSemana = $("#cboSemanas").val();
	//	
	var settings = {
		url:
			sessionStorage.getItem("urlApi") +
			"getAllPreciosRaros_x_Semana/" +
			idSemana,
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
			/** */
			
			$("#totalRegistros").html("Total Registros: " +response.data.length);
						
			var table = new Tabulator("#tblPreciosRaros", {
				height: "450px",
				//layout: "fitColumns",
				//layout:"fitDataFill",
				 layout:"fitDataStretch",
				data: response.data,
				pagination: "local", //paginate the data
				paginationSize: 25, //allow 7 rows per page of data						
    			paginationSizeSelector:[25, 50, 75, 100, 500],
				movableColumns: true,
				//groupBy:"Retail",	25252550				
							
				movableRows: true,
				locale: true,
				columns: [
					{ title: "ID", field: "Id_DataUnida" },
					{ title: "Retail", field: "Retail" },
					{ title: "Tienda", field: "Tienda" },					
					{ title: "Barra", field: "CodigoBarra" },
					{ title: "Categoria", field: "Categoria" },
					{ title: "Producto", field: "Producto" },					
					{ title: "Precio", field: "Precio", formatter:"money", hozAlign:"right" },
					{ title: "Precio Prom", field: "PrecioProm", formatter:"money", hozAlign:"right"  },					
					{ title: "% Mìn", field: "Min_Porcentaje", hozAlign:"center" },
					{ title: "% Màx", field: "Max_Porcentaje", hozAlign:"center" },
					{ title: "Precio Min", field: "PreciMin", formatter:"money", hozAlign:"right"  },
					{ title: "Precio Màx", field: "PreciMax", formatter:"money", hozAlign:"right"  },
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
				rowClick:function(e, row){
					//e - the click event object
					//row - row component

					var data = row.getData(); //get row data
					$("#ModificarPrecios").modal("show");
					$(".modal-title").html(
						"<i class='fas fa-edit'></i>&nbsp;Modificar Precios"
					);
					
					$("#idRegistro").val(data.Id_DataUnida);					
					$("#codigoBarras").val(data.CodigoBarra);					
					$("#txtProducto").val(data.Producto);					
					$("#txtCategoria").val(data.Categoria);
					$("#txtPrecioActual").val(Number(data.Precio).toLocaleString("es-ES", {minimumFractionDigits: 2}));
					//alert(data.CodigoBarra);
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
			$("#mainPreciosRaros").css("display", "block");			
			/***/		
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
			$("#cboSemanas").prop("disabled", false);
		});
}
