/***** recepcion.js - 07jul21        *****/
/***** Funciones Tab1 Recepcion Data *****/
/*---------------------------------------*/
function ResetRec() {
	//
	$("#cboSemanasRec").prop("disabled", true);
	$("#cboRetailersRec").prop("disabled", true);
	$("#cboRetailersRec").prop("selectedIndex", 0);
	$("#cboSemanasRec").prop("selectedIndex", 0);
	$("#cboOpcionesRec").prop("selectedIndex", 0);
	$("#minimoRec").val("30");
	$("#maximoRec").val("30");
	LimpiezaRec();
}
//
$("#cboOpcionesRec").change(function () {
	$("#cboRetailersRec").prop("disabled", false);
	$("#cboRetailersRec").prop("selectedIndex", 0);
	LimpiezaRec();
	let value = this.value;
	if (value == "tamano") {
		$("#cboSemanasRec").prop("selectedIndex", 1);
		ProcesarTamano_AllRetails($("#cboSemanasRec").val());
	}
	if (value == "registro") {
		$("#cboSemanasRec").prop("selectedIndex", 1);
		ProcesarRegistro_AllRetails($("#cboSemanasRec").val());
	}
	
});
//
$("#cboRetailersRec").change(function () {
	$("#cboSemanasRec").prop("disabled", false);
	$("#cboSemanasRec").prop("selectedIndex", 0);
	LimpiezaRec();
});
//
$("#cboSemanasRec").change(function () {
	ValidarProcesoRec();
});
//
function LimpiezaRec() {
	//
	$("#ShowDivArchivos").css("display", "none");
	$("#tablaJsonRec").html("");
	//
	$("#showTiendasFaltantes").css("display", "none");
	$("#showTiendasNuevas").css("display", "none");
	//
}
//
function cargarRetailerRec() {
	var settings = {
		//"url": '<?php echo urlApi; ?>getRetailes',
		url: sessionStorage.getItem("urlApi") + "getRetailes",
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
			let select = $("#cboRetailersRec");
			select.find("option").remove();
			select.append(
				"<option value='0' selected disabled> -- Seleccione -- </option>"
			);
			for (var i = 0; i < response.data.length; i++) {
				select.append(
					"<option value=" +
						response.data[i].id_retail +
						">" +
						response.data[i].retail +
						"</option>"
				);
			}
			//
			$("#cboRetailersPro").empty();
			$("#cboRetailersRec").find("option").clone().appendTo("#cboRetailersPro");
			$("#cboRetailersPro").prop("disabled", true);
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
function cargarSemanasRec() {
	var settings = {
		//"url": '<?php echo urlApi; ?>getAllSemana',
		url: sessionStorage.getItem("urlApi") + "getAllSemana",
		method: "get",
		headers: {
			"Content-Type": "application/x-www-form-urlencoded",
			Authorization: "Bearer " + localStorage.getItem("Token"),
		},
	};
	$.ajax(settings)
		.done(function (response) {
			let select = $("#cboSemanasRec");
			select.find("option").remove();
			select.append(
				"<option value='0' selected disabled> -- Seleccione -- </option>"
			);
			for (var i = 0; i < response.data.length; i++) {
				select.append(
					"<option value=" +
						response.data[i].IdSemana +
						">" +
						response.data[i].Semana +
						"</option>"
				);
			}
			//$("#cboSemanasRec").prop("disabled", false);
			//
			$("#cboSemanasPro").empty();
			$("#cboSemanasRec").find("option").clone().appendTo("#cboSemanasPro");
			$("#cboSemanasPro").prop("disabled", true);
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
function ValidarProcesoRec() {
	//
	debugger;
	//
	sessionStorage.removeItem("minRec");
	sessionStorage.removeItem("maxRec");
	var msg = (message = "");
	var vError = false;
	//
	var cmbOpciones = document.getElementById("cboOpcionesRec").selectedIndex;
	if (cmbOpciones == null || cmbOpciones == 0 || cmbOpciones < 0) {
		msg += "Archivos" + ",";
		vError = true;
	}
	var cmbRetailer = $("#cboRetailersRec").val();
	if (
		cmbRetailer == null ||
		cmbRetailer == 0 ||
		cmbRetailer < 0 ||
		cmbRetailer == undefined
	) {
		msg += " Retailer" + ",";
		vError = true;
	}
	var cmbSemana = $("#cboSemanasRec").val();
	if (cmbSemana == null || cmbSemana == 0 || cmbSemana < 0) {
		msg += " Semanas";
		vError = true;
	}
	//
	let vMinimo = parseInt($("#minimoRec").val());
	if (vMinimo <= 0) {
		msg += " Valor Mínimo debe ser mayor a Cero..!" + ",";
		vError = true;
	}
	let vMaximo = parseInt($("#maximoRec").val());
	if (vMaximo > 100) {
		msg += " Valor Máximo debe ser menor o igual a Cien..!" + ",";
		vError = true;
	}
	//
	message = "Seleccione " + msg;
	//
	if (vError) {
		const Toast = Swal.mixin({
			toast: true,
			position: "top-end",
			showConfirmButton: false,
			timer: 5000,
			timerProgressBar: true,
			didOpen: (toast) => {
				toast.addEventListener("mouseenter", Swal.stopTimer);
				toast.addEventListener("mouseleave", Swal.resumeTimer);
			},
		});
		Toast.fire({
			icon: "error",
			title: message,
		});
		return false;
	}
	$("#cargando").css("display", "block");
	sessionStorage.setItem("minRec", parseInt($("#minimoRec").val()));
	sessionStorage.setItem("maxRec", parseInt($("#maximoRec").val()));
	LimpiezaRec();
	SeleccionRec(cmbOpciones, cmbRetailer, cmbSemana);
}
//
function SeleccionRec(idOpc, idRet, idSem) {
	//debugger;
	if (idOpc == 1) {
		ProcesarTndFaltantes(idOpc, idRet, idSem);
	} else if (idOpc == 2) {
		ProcesarTndNuevas(idOpc, idRet, idSem);
	} else if (idOpc == 3) {
		ProcesarTamano_Retails(idRet, idSem);
	} else if (idOpc == 4) {
		ProcesarRegistro_Retails(idRet, idSem);
	}
}
//
function ProcesarRegistro_AllRetails(idSem) {
	//
	//debugger;
	//
	if (validarMinMaxRec()) {
		$("#tablaJsonRec").html("");
		$("#cargando").css("display", "block");
		identificarSemanasRec(idSem);
		//
		let idSemanas = "";
		for (let i = 0; i <= 4; i++) {
			idSemanas += idSem - i + "*";
		}
		idSem = idSemanas.slice(0, -1);
		//
		const settings = {
			url:
				sessionStorage.getItem("urlApi") +
				"getAllRegistroArchivoxRetail_Pivot/" +
				idSem,
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

				let dataInfoLength = response.data.length;
				//
				if (dataInfoLength == 0) {
					const Toast = Swal.mixin({
						toast: true,
						position: "top-end",
						showConfirmButton: false,
						timer: 5000,
						timerProgressBar: true,
						didOpen: (toast) => {
							toast.addEventListener("mouseenter", Swal.stopTimer);
							toast.addEventListener("mouseleave", Swal.resumeTimer);
						},
					});
					Toast.fire({
						icon: "info",
						title: " Sin registro de Tamaños para todas las tiendas..!",
					});
					//
					$("#ShowDivArchivos").css("display", "block");
					$("#tablaJsonRec").html("");
					let tbody =
						"<tr><td colspan='9' class='text-center'>| NO HAY DATOS QUE MOSTRAR |</td></tr>";
					$("#tablaJsonRec").append(tbody);
					//
					return false;
				} else {
					//
					let jsonData = response.data;
					debugger;
					//
					$("#tablaJsonRec").html("");
					let tbody = fillTableBodyRec(jsonData);
					$("#tablaJsonRec").append(tbody);
				}

				$("#ShowMsgArchivos").html(
					"<i class='fas fa-folder-open'></i>&nbsp;Total Registro Archivos"
				);

				$("#ShowDivArchivos").css("display", "block");
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
			});
	}
}
//
function ProcesarRegistro_Retails(idRet, idSem) {
	//
	debugger;
	//
	if (validarMinMaxRec()) {
		$("#cargando").css("display", "block");
		identificarSemanasRec(idSem);
		//
		let idSemanas = "";
		for (let i = 0; i <= 4; i++) {
			idSemanas += idSem - i + "*";
		}
		idSem = idSemanas.slice(0, -1);
		//
		const settings = {
			url: sessionStorage.getItem("urlApi") +	"getRegistroArchivoxRetail_Pivot/" + idRet + "/" + idSem +	"",
			method: "get",
			headers: {
				"Content-Type": "application/x-www-form-urlencoded",
				Authorization: "Bearer " + localStorage.getItem("Token"),
			},
		};
		$.ajax(settings)
			.done(function (response) {
				console.log(response);
				debugger;

				let dataInfoLength = response.data.length;
				//
				if (dataInfoLength == 0) {
					const Toast = Swal.mixin({
						toast: true,
						position: "top-end",
						showConfirmButton: false,
						timer: 5000,
						timerProgressBar: true,
						didOpen: (toast) => {
							toast.addEventListener("mouseenter", Swal.stopTimer);
							toast.addEventListener("mouseleave", Swal.resumeTimer);
						},
					});
					Toast.fire({
						icon: "info",
						title: " Sin registro de Tamaños para el Retail..!",
					});
					//
					$("#ShowDivArchivos").css("display", "block");
					$("#tablaJsonRec").html("");
					let tbody =
						"<tr><td colspan='9' class='text-center'>| ...NO HAY DATOS QUE MOSTRAR... |</td></tr>";
					$("#tablaJsonRec").append(tbody);
					//
					return false;
				} else {
					//
					let jsonData = response.data;
					debugger;
					//
					$("#tablaJsonRec").html("");
					let tbody = fillTableBodyRec(jsonData);
					$("#tablaJsonRec").append(tbody);
				}

				$("#ShowMsgArchivos").html(
					"<i class='fas fa-folder-open'></i>&nbsp;Total Registro Archivos"
				);

				$("#ShowDivArchivos").css("display", "block");
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
			});
	}
}
//
function ProcesarTamano_AllRetails(idSem) {
	//
	debugger;
	//
	if (validarMinMaxRec()) {
		$("#tablaJsonRec").html("");
		$("#cargando").css("display", "block");
		let idSem = $("#cboSemanasRec").val();
		identificarSemanasRec(idSem);
		//
		let idSemanas = "";
		for (let i = 0; i <= 4; i++) {
			idSemanas += idSem - i + "*";
		}
		idSem = idSemanas.slice(0, -1);
		//
		const settings = {
			url:
				sessionStorage.getItem("urlApi") +
				"getAllTamanoArchivoxRetail_Pivot/" +
				idSem,
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

				let dataInfoLength = response.data.length;
				//
				if (dataInfoLength == 0) {
					const Toast = Swal.mixin({
						toast: true,
						position: "top-end",
						showConfirmButton: false,
						timer: 5000,
						timerProgressBar: true,
						didOpen: (toast) => {
							toast.addEventListener("mouseenter", Swal.stopTimer);
							toast.addEventListener("mouseleave", Swal.resumeTimer);
						},
					});
					Toast.fire({
						icon: "info",
						title: " Sin registro de Tamaños para todas las tiendas..!",
					});
					//
					$("#ShowDivArchivos").css("display", "block");
					$("#tablaJsonRec").html("");
					let tbody =
						"<tr><td colspan='9' class='text-center'>| NO HAY DATOS QUE MOSTRAR |</td></tr>";
					$("#tablaJsonRec").append(tbody);
					//
					return false;
				} else {
					//
					let jsonData = response.data;
					debugger;
					//
					$("#tablaJsonRec").html("");
					let tbody = fillTableBodyRec(jsonData);
					$("#tablaJsonRec").append(tbody);
				}

				$("#ShowMsgArchivos").html(
					"<i class='fas fa-folder-open'></i>&nbsp;Total tamaño archivos"
				);

				$("#ShowDivArchivos").css("display", "block");
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
			});
	}
}
//
function ProcesarTamano_Retails(idRet, idSem) {
	//
	debugger;
	//
	if (validarMinMaxRec()) {
		$("#cargando").css("display", "block");
		identificarSemanasRec(idSem);
		//
		let idSemanas = "";
		for (let i = 0; i <= 4; i++) {
			idSemanas += idSem - i + "*";
		}
		idSem = idSemanas.slice(0, -1);
		//
		const settings = {
			url:
				sessionStorage.getItem("urlApi") +
				"getTamanoArchivoxRetail_Pivot/" +
				idRet +
				"/" +
				idSem +
				"",
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

				let dataInfoLength = response.data.length;
				//
				if (dataInfoLength == 0) {
					const Toast = Swal.mixin({
						toast: true,
						position: "top-end",
						showConfirmButton: false,
						timer: 5000,
						timerProgressBar: true,
						didOpen: (toast) => {
							toast.addEventListener("mouseenter", Swal.stopTimer);
							toast.addEventListener("mouseleave", Swal.resumeTimer);
						},
					});
					Toast.fire({
						icon: "info",
						title: " Sin registro de Tamaños para el Retail..!",
					});
					//
					$("#ShowDivArchivos").css("display", "block");
					$("#tablaJsonRec").html("");
					let tbody =
						"<tr><td colspan='9' class='text-center'>| NO HAY DATOS QUE MOSTRAR |</td></tr>";
					$("#tablaJsonRec").append(tbody);
					//
					return false;
				} else {
					//
					let jsonData = response.data;
					debugger;
					//
					$("#tablaJsonRec").html("");
					let tbody = fillTableBodyRec(jsonData);
					$("#tablaJsonRec").append(tbody);
				}

				$("#ShowMsgArchivos").html(
					"<i class='fas fa-folder-open'></i>&nbsp;Total Tamaño Archivos"
				);

				$("#ShowDivArchivos").css("display", "block");
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
			});
	}
}
//
function ProcesarCantRegistros(idOpc, idRet, idSem) {
	//
	//debugger;
	//
	let idSemana = "";
	for (let i = 0; i <= 4; i++) {
		idSemana += idSem - i + ",";
	}
	idSem = idSemana.slice(0, -1);
	//
	const settings = {
		//"url": '<?php echo urlApi; ?>getCantidadRegistros/' + idOpc + '/' + idRet + '/' + idSem + '',
		url:
			sessionStorage.getItem("urlApi") +
			"getCantidadRegistros/" +
			idOpc +
			"/" +
			idRet +
			"/" +
			idSem +
			"",
		method: "get",
		headers: {
			"Content-Type": "application/x-www-form-urlencoded",
			Authorization: "Bearer " + localStorage.getItem("Token"),
		},
	};
	$.ajax(settings)
		.done(function (response) {
			//
			var data = response.data;
			const idSemActual = $("#cboSemanasRec").val();
			idSem = idSem.split(",");
			// iterate over each element in the array para buscar semana faltante
			for (var i = 0; i < idSem.length; i++) {
				let value = getSemanaID(idSem[i], data);
				if (!value) {
					$("#cboSemanasRec").val(idSem[i]);
					let semana = $("#cboSemanasRec option:selected").text().trim();
					semana = response.data[i].semana.substr(0, 4);
					const InsertarSemana = {
						Num_registro: 0,
						id_Semana: parseInt(idSem[i]),
						semana: semana,
					};
					data.push(InsertarSemana);
				}
			}
			//
			let value = 0;
			let PromedioTamano = 0;
			let TamanoActual = 0;
			for (var i = 0; i < idSem.length; i++) {
				//
				value = parseInt(response.data[i].id_Semana);
				semana = response.data[i].semana.substr(0, 4);
				value = idSemActual - value;
				semana = response.data[i].semana.substr(0, 4);
				//
				if (value == 0) {
					$("#SemActual").html(
						Number(response.data[i].Num_registro).toLocaleString("es-ES", {
							minimumFractionDigits: 0,
						}) + " Kb"
					);
					$("#titRepSemActual").html(semana);
					TamanoActual = parseInt(response.data[i].Num_registro);
				}
				//
				if (value == 1) {
					$("#SemTend1").html(
						Number(response.data[i].Num_registro).toLocaleString("es-ES", {
							minimumFractionDigits: 0,
						}) + " Kb"
					);
					$("#titRepSemTend1").html(semana);
					PromedioTamano =
						PromedioTamano + parseInt(response.data[i].Num_registro);
				}
				//
				if (value == 2) {
					$("#SemTend2").html(
						Number(response.data[i].Num_registro).toLocaleString("es-ES", {
							minimumFractionDigits: 0,
						}) + " Kb"
					);
					$("#titRepSemTend2").html(semana);
					PromedioTamano =
						PromedioTamano + parseInt(response.data[i].Num_registro);
				}
				//
				if (value == 3) {
					$("#SemTend3").html(
						Number(response.data[i].Num_registro).toLocaleString("es-ES", {
							minimumFractionDigits: 0,
						}) + " Kb"
					);
					$("#titRepSemTend3").html(semana);
					PromedioTamano =
						PromedioTamano + parseInt(response.data[i].Num_registro);
				}
				//
				if (value == 4) {
					$("#SemTend4").html(
						Number(response.data[i].Num_registro).toLocaleString("es-ES", {
							minimumFractionDigits: 0,
						}) + " Kb"
					);
					$("#titRepSemTend4").html(semana);
					PromedioTamano =
						PromedioTamano + parseInt(response.data[i].Num_registro);
				}
			}
			//
			PromedioTamano = Math.round(PromedioTamano / 4);
			$("#Promedio").html(
				parseInt(PromedioTamano).toLocaleString("es-ES", {
					minimumFractionDigits: 0,
				}) + " Kb"
			);
			//
			let Variacion = 0;
			if (TamanoActual == 0) {
				$("#Variacion").html("No Aplica");
			} else {
				Variacion = ((TamanoActual - PromedioTamano) / PromedioTamano) * 100;
				Variacion = Variacion.toFixed(2);
				$("#Variacion").html(
					parseFloat(Variacion).toLocaleString("es-ES", {
						maximumFractionDigits: 2,
						minimumFractionDigits: 2,
					}) + " %"
				);
			}
			//
			$("#cboSemanasRec").val(idSemActual);
			$("#ShowDivArchivos").css("display", "block");
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
			//$("#cargando").addClass('d-none');
		});
}
//
function ProcesarTndFaltantes(idOpc, idRet, idSem) {
	//
	const settings = {
		//"url": '<?php echo urlApi; ?>getTiendasFaltantes/' + idOpc + '/' + idRet + '/' + idSem + '',
		url:
			sessionStorage.getItem("urlApi") +
			"getTiendasFaltantes/" +
			idOpc +
			"/" +
			idRet +
			"/" +
			idSem +
			"",
		method: "get",
		headers: {
			"Content-Type": "application/x-www-form-urlencoded",
			Authorization: "Bearer " + localStorage.getItem("Token"),
		},
	};
	$.ajax(settings)
		.done(function (response) {
			var dataInfoLength = response.data.length;
			//
			if (dataInfoLength == 0) {
				var $table = $("#tiendaFaltante");
				$table.bootstrapTable("destroy");

				const Toast = Swal.mixin({
					toast: true,
					position: "top-end",
					showConfirmButton: false,
					timer: 5000,
					timerProgressBar: true,
					didOpen: (toast) => {
						toast.addEventListener("mouseenter", Swal.stopTimer);
						toast.addEventListener("mouseleave", Swal.resumeTimer);
					},
				});
				Toast.fire({
					icon: "info",
					title:
						$("#cboRetailersRec option:selected").text().trim() +
						", Sin registro de Tiendas Faltantes",
				});
				return false;
			} else {
				var $table = $("#tiendaFaltante");
				$table.bootstrapTable("destroy");

				$("#tiendaFaltante").bootstrapTable({
					data: response.data,
				});

				$("#tiendasFaltantes").html(
					"<i class='fas fa-store-slash'></i>&nbsp;Tiendas"
				);

				$("#showTiendasFaltantes").css("display", "block");
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
			//$("#cargando").addClass('d-none');
		});
}
//
function ProcesarTndNuevas(idOpc, idRet, idSem) {
	//
	// debugger;
	//
	const settings = {
		//"url": '<?php echo urlApi; ?>getTiendasNuevas/' + idOpc + '/' + idRet + '/' + idSem + '',
		url:
			sessionStorage.getItem("urlApi") +
			"getTiendasNuevas/" +
			idOpc +
			"/" +
			idRet +
			"/" +
			idSem +
			"",
		method: "get",
		headers: {
			"Content-Type": "application/x-www-form-urlencoded",
			Authorization: "Bearer " + localStorage.getItem("Token"),
		},
	};
	$.ajax(settings)
		.done(function (response) {
			var dataInfoLength = response.data.length;
			//
			if (dataInfoLength == 0) {
				$("#tiendaNueva").bootstrapTable("removeAll");

				const Toast = Swal.mixin({
					toast: true,
					position: "top-end",
					showConfirmButton: false,
					timer: 5000,
					timerProgressBar: true,
					didOpen: (toast) => {
						toast.addEventListener("mouseenter", Swal.stopTimer);
						toast.addEventListener("mouseleave", Swal.resumeTimer);
					},
				});
				Toast.fire({
					icon: "info",
					title:
						$("#cboRetailersRec option:selected").text().trim() +
						", Sin registro de Tiendas Nuevas",
				});
				return false;
			} else {
				var $table = $("#tiendaNueva");
				$table.bootstrapTable("destroy");

				$("#tiendaNueva").bootstrapTable({
					data: response.data,
				});
				$("#tiendasNuevas").html("<i class='fas fa-store'></i>&nbsp;Tiendas");
			}

			$("#showTiendasNuevas").css("display", "block");
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
			//$("#cargando").addClass('d-none');
		});
}
//

function identificarSemanasRec(idSem) {
	//
	//debugger;
	//
	let idSemanas = "";
	for (let i = 0; i <= 4; i++) {
		idSemanas += idSem - i + ",";
	}
	idSem = idSemanas.slice(0, -1);
	//
	const settings = {
		//"url": '<?php echo urlApi; ?>getTituloSemanas/' + idSem + '',
		url: sessionStorage.getItem("urlApi") + "getTituloSemanas/" + idSem,

		method: "get",
		headers: {
			"Content-Type": "application/x-www-form-urlencoded",
			Authorization: "Bearer " + localStorage.getItem("Token"),
		},
	};
	$.ajax(settings)
		.done(function (response) {
			//
			for (let i = 0; i < idSem.length; i++) {
				value = response.data[i].semana;
				if (i == 0) {
					$("#T0rec").html("Actual - " + value);
				}
				if (i == 1) {
					$("#T1rec").html("T1 - " + value);
				}
				if (i == 2) {
					$("#T2rec").html("T2 - " + value);
				}
				if (i == 3) {
					$("#T3rec").html("T3 - " + value);
				}
				if (i == 4) {
					$("#T4rec").html("T4 - " + value);
				}
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
		})
		.always(function (jqXHR, textStatus) {
			//alert("complete");
			$("#cargando").css("display", "none");
		});
}
//
function fillTableBodyRec(Data) {
	debugger;
	const jsonData = Data;
	let row = "";
	//	
	//let col = [];
	//
	let col = Object.keys(jsonData[0]);
	//
	for (let i = 0; i < jsonData.length; i++) {
		let divProm = 0;
		let total = 0;
		let semActual = 0;
		//		
		
		let row2 = "";
		let row3 = "";
		let row4 = "";
		let row5 = "";
		let row6 = "";
		let row7 = "";
		//
		row += "<tr>";
		row += "<td class='text-center'>" + parseInt(i + 1) + "</td>";
		//
		for (let j = 0; j < col.length; j++) {
			//
			if (j == 0) {				
				//tienda				
				let value = jsonData[i][col[5 - j]];
				row += "<td>" + value + "</td>";
			}
			if (j == 1) {
				//actual
				let monto = jsonData[i][col[5 - j]];
				if (monto == null) {
					monto = 0;
				} else {
					total = total + parseFloat(monto);
					divProm++;
				}
				semActual = parseFloat(monto);
				monto = formatoMontoEntero(monto);
				row3 = "<td class='text-right'>" + monto + "</td>";
			}
			if (j == 2) {
				//T1
				let monto = jsonData[i][col[5 - j]];
				if (monto == null) {
					monto = 0;
				} else {
					total = total + parseFloat(monto);
					divProm++;
				}
				monto = formatoMontoEntero(monto);
				row4  = "<td class='text-right'>" + monto + "</td>";
			}
			if (j == 3) {
				//T2
				let monto = jsonData[i][col[5 - j]];
				if (monto == null) {
					monto = 0;
				} else {
					total = total + parseFloat(monto);
					divProm++;
				}
				monto = formatoMontoEntero(monto);
				row5 = "<td class='text-right'>" + monto + "</td>";
			}
			if (j == 4) {
				//T3
				let monto = jsonData[i][col[5 - j]];
				if (monto == null) {
					monto = 0;
				} else {
					total = total + parseFloat(monto);
					divProm++;
				}
				monto = formatoMontoEntero(monto);
				row6  = "<td class='text-right'>" + monto + "</td>";
			}
			if (j == 5) {
				//T4
				let monto = jsonData[i][col[5 - j]];
				if (monto == null) {
					monto = 0;
				} else {
					total = total + parseFloat(monto);
					divProm++;
				}
				monto = formatoMontoEntero(monto);
				row7 = "<td class='text-right'>" + monto + "</td>";
			}
		}
		//
		let Promedio = 0;
		if (parseInt(divProm) <= 0) {
			row1 = "<td class='text-center'>" + "No Aplica" + "</td>";
		} else {
			Promedio = parseFloat(total) / divProm;
			let Prom = formatoMontoEntero(Promedio);
			row1 = "<td class='text-right'>" + Prom + "</td>";
		}
		//
		let Variacion = 0;
		if (parseFloat(semActual) <= 0) {
			Variacion = "No Aplica";
			row2 = "<td class='text-center'>" + Variacion + "</td>";
		} else {
			Variacion =
				((parseFloat(semActual) - parseFloat(Promedio)) /
					parseFloat(Promedio)) *
				100;
			Varia = formatoMontoEntero(Variacion);
			if (
				parseFloat(Variacion) <
				parseInt(sessionStorage.getItem("minPro")) * -1
			) {
				row2 =
					"<td class='text-right bg-danger font-weight-bold'>" +
					Varia +
					"</td>";
			} else {
				if (
					parseFloat(Variacion) > parseInt(sessionStorage.getItem("maxPro"))
				) {
					row2 =
						"<td class='text-right bg-success font-weight-bold'>" +
						Varia +
						"</td>";
				} else {
					row2 = "<td class='text-right'>" + Varia + "</td>";
				}
			}
		}
		//
		row += row1 + row2 + row3 +row4 + row5 + row6 + row7;
		
		row += "</tr>";
	}
	return row;
}
//
function validarMinMaxRec() {
	//
	sessionStorage.removeItem("minRec");
	sessionStorage.removeItem("maxRec");
	//
	let msg = "";
	let vError = false;
	let vminimoRec = parseInt($("#minimoRec").val());
	if (vminimoRec <= 0) {
		msg += " Valor Mínimo debe ser mayor a Cero..!" + ",";
		vError = true;
	}
	let vMaximoRec = parseInt($("#maximoRec").val());
	if (vMaximoRec > 100) {
		msg += " Valor Máximo debe ser menor o igual a Cien..!";
		vError = true;
	}
	//
	if (vError) {
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
			title: msg,
		});
		return false;
	}
	sessionStorage.setItem("minRec", parseInt($("#minimoRec").val()));
	sessionStorage.setItem("maxRec", parseInt($("#maximoRec").val()));
	return true;
}
