//
// CRUDV01.JS - 24jul21 -
//
function Reset_FormCrearProductos() {
	$("#cboCategoria").find("option:not(:first)").remove();
	$("#cboFabricante").find("option:not(:first)").remove();
	$("#cboMarcas").find("option:not(:first)").remove();
	$("#cboSegmento").find("option:not(:first)").remove();
	$("#cboTamano").find("option:not(:first)").remove();
	$("#cboRango").find("option:not(:first)").remove();
	$("#cboUnidadMedida").find("option:not(:first)").remove();
	$("#codigoBarras").html("");
	$("#fechaCreacion").html("");
}
//
function CrearProductos() {
	// Crear Producto
	debugger;
	if (validarCreacionProductos()) {
		//,
		Swal.fire({
			title: "Estan Correctos todos",
			text: ".. los Datos ?",
			icon: "warning",
			showCancelButton: true,
			confirmButtonColor: "#3085d6",
			cancelButtonColor: "#d33",
			cancelButtonText: "No",
			confirmButtonText: "Si",
		}).then((result) => {
			if (result.isConfirmed) {
				var settings = {
					async: true,
					crossDomain: true,
					url: sessionStorage.getItem("urlApi") + "addNewProducto",
					method: "POST",
					headers: {
						"Content-Type": "application/x-www-form-urlencoded",
						Authorization: "Bearer " + localStorage.getItem("Token"),
					},
					data: {
						barcode: $("#codigoBarras").val().trim(),
						categoria: $("#cboCategoria").val(),
						fabricante: $("#cboFabricante").val(),
						marca: $("#cboMarcas").val(),
						segmento: $("#cboSegmento").val(),
						tamano: $("#cboTamano").val(),
						rango: $("#cboRango").val(),
						unidad: $("#cboUnidadMedida").val(),
						fecha: $("#fechaCreacion").val(),
						descProducto: $("#descripcionProducto").val(),
						fragmento: $("#fragmentacion").val(),
						activo: 1
					},
				};
				$.ajax(settings)
					.done(function (response) {
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
							icon: "success",
							title: response.message,
							confirmButtonText: `Ok`,
						});
						/*
						var form = document.querySelector("#FormTam");
						form.reset();
						let xtable = $("#TableTam").DataTable();
						xtable.ajax.reload(null, false);
						*/
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
								icon: "info",
								title: "Su Session ha Expirado",
								confirmButtonText: `Ok`,
							});
							var form = document.querySelector("#FormTam");
							form.reset();
							window.location = "/retailscannig/index.php";
						}
					});
			}
		});
	}
}
//
function validarCreacionProductos() {
	//
	debugger;
	//
	$("#btn-crearProd").attr("disabled", true);
	//
	var Error = 0;
	//
	let barcode = $("#codigoBarras").val().trim();
	if (
		barcode == null ||
		barcode == "" ||
		barcode.length == 0 ||
		barcode == undefined
	) {
		$("#codigobarErr").html(
			"<span style='color:red;'>Introduzca una Codigo de barras!</span>"
		);
		Error++;
	} else {
		$("#codigobarErr").html("");
	}
	//Categoria
	let comboValor = document.getElementById("cboCategoria").selectedIndex;
	if (comboValor == null || comboValor == 0 || comboValor < 0) {
		$("#categoriaErr").html(
			"<span style='color:red;'>Seleccione Tipo de Categoria..!</span>"
		);
		Error++;
	} else {
		$("#categoriaErr").html("");
	}
	//Fabricante
	comboValor = document.getElementById("cboFabricante").selectedIndex;
	if (comboValor == null || comboValor == 0 || comboValor < 0) {
		$("#fabricanteErr").html(
			"<span style='color:red;'>Seleccione un Fabricante..!</span>"
		);
		Error++;
	} else {
		$("#fabricanteErr").html("");
	}
	//Marcas
	comboValor = document.getElementById("cboMarcas").selectedIndex;
	if (comboValor == null || comboValor == 0 || comboValor < 0) {
		$("#marcaErr").html(
			"<span style='color:red;'>Seleccione una Marca..!</span>"
		);
		Error++;
	} else {
		$("#marcaErr").html("");
	}
	//Segmento
	comboValor = document.getElementById("cboSegmento").selectedIndex;
	if (comboValor == null || comboValor == 0 || comboValor < 0) {
		$("#segmentoErr").html(
			"<span style='color:red;'>Seleccione un Segmento..!</span>"
		);
		Error++;
	} else {
		$("#segmentoErr").html("");
	}
	//Tamaño
	comboValor = document.getElementById("cboTamano").selectedIndex;
	if (comboValor == null || comboValor == 0 || comboValor < 0) {
		$("#tamanoErr").html(
			"<span style='color:red;'>Seleccione un Tamano..!</span>"
		);
		Error++;
	} else {
		$("#tamanoErr").html("");
	}
	//Rango
	comboValor = document.getElementById("cboRango").selectedIndex;
	if (comboValor == null || comboValor == 0 || comboValor < 0) {
		$("#rangoErr").html(
			"<span style='color:red;'>Seleccione un Rango..!</span>"
		);
		Error++;
	} else {
		$("#rangoErr").html("");
	}
	//Unidad Medida
	comboValor = document.getElementById("cboUnidadMedida").selectedIndex;
	if (comboValor == null || comboValor == 0 || comboValor < 0) {
		$("#unidadErr").html(
			"<span style='color:red;'>Seleccione una Unidad de Medida..!</span>"
		);
		Error++;
	} else {
		$("#unidadErr").html("");
	}
	// Descripcion Producto
	let descripcionProducto = $("#descripcionProducto").val().trim();
	if (
		descripcionProducto == null ||
		descripcionProducto == "" ||
		descripcionProducto.length == 0 ||
		descripcionProducto == undefined
	) {
		$("#productoErr").html(
			"<span style='color:red;'>Describa las Caracteristicas del producto..!</span>"
		);
		Error++;
	} else {
		$("#productoErr").html("");
	}
	// Fragmentacion
	let fragmentacion = $("#fragmentacion").val().trim();
	if (
		fragmentacion == null ||
		fragmentacion == "" ||
		fragmentacion.length == 0 ||
		fragmentacion == undefined
	) {
		$("#fragmentoErr").html(
			"<span style='color:red;'>Describa la Fragmentacion del producto..!</span>"
		);
		Error++;
	} else {
		$("#fragmentoErr").html("");
	}
	//
	if (Error == 0) {
		$("#btn-crearProd").attr("disabled", false);
		return true;
	} else {
		$("#btn-crearProd").attr("disabled", false);
		return false;
	}
}
//
