/***** procesamiento.js - 07jul21          *****/
/***** Funciones Tab2 Procesamientos Datos *****/
/*---------------------------------------------*/
function ResetPro() {
	$("#cboSemanasPro").prop("disabled", true);
	$("#cboRetailersPro").prop("disabled", true);
	$("#cboRetailersPro").prop("selectedIndex", 0);
	$("#cboSemanasPro").prop("selectedIndex", 0);
	$("#cboOpcionesPro").prop("selectedIndex", 0);
	$("#minimoPro").val("30");
	$("#maximoPro").val("30");
	LimpiezaPro();
}
//
$("#cboOpcionesPro").change(function () {
	debugger;
	let value = this.value;
	$("#cboRetailersPro").prop("disabled", false);
	$("#cboRetailersPro").prop("selectedIndex", 0);
	if (value == "retailers" || value == "estructura") {
		sessionStorage.setItem("ACV", 0);
	} else {
		sessionStorage.setItem("ACV", 1);
	}
	LimpiezaPro();
	if (value == "acvTotalVentas") {
		$("#cboRetailersPro").prop("disabled", true);
		$("#cboRetailersPro").prop("selectedIndex", 0);
		$("#cboSemanasPro").prop("disabled", false);
		$("#cboSemanasPro").prop("selectedIndex", 1);
		ProcesarAll_ACV_TotalVentasxRetail();
	}
});
//
$("#cboRetailersPro").change(function () {
	debugger;
	LimpiezaPro();
	if (sessionStorage.getItem("ACV") == 1) {
		$("#cargando").css("display", "block");
		let value = this.value;
		$("#cboSemanasPro").prop("selectedIndex", 1);
		if (MostrarAcvRetailxTiendas()) {
			if ($("#cboOpcionesPro").val() == "acvTotalVentas") {
				ProcesarTotalVentas_ACV_xRetails();
				$("#acvTableTiendasxRetail").html(
					"<i class='fas fa-cash-register'></i>&nbsp;ACV Ventas Totales x Retails"
				);
			} else {
				ProcesarVentas_ACV_TiendaxRetails();
				$("#acvTableTiendasxRetail").html(
					"<i class='fas fa-cash-register'></i>&nbsp;ACV Ventas Total x Tienda"
				);
			}
			$("#cboSemanasPro").prop("disabled", false);
		}
	} else {
		$("#cboSemanasPro").prop("disabled", true);
		$("#cboSemanasPro").prop("selectedIndex", 0);
	}
});
//
$("#cboSemanasPro").change(function () {
	debugger;
	LimpiezaPro();
	if (sessionStorage.getItem("ACV") == 1) {
		if (MostrarAcvRetailxTiendas()) {
			$("#cargando").css("display", "block");
			if ($("#cboOpcionesPro").val() == "acvTotalVentas") {
				$("#cboRetailersPro").prop("disabled", true);
				$("#cboRetailersPro").prop("selectedIndex", 0);
				ProcesarAll_ACV_TotalVentasxRetail();
			} else {
				//Acv por tiendas
				ProcesarVentas_ACV_TiendaxRetails();
			}
			$("#cboSemanasPro").prop("disabled", false);
		}
	} else {
		$("#cboSemanasPro").prop("disabled", true);
		$("#cboSemanasPro").prop("selectedIndex", 0);
	}
});
//
function SeleccionPro(idOpc, idRet, idSem) {
	debugger;
	if (idOpc == 1) {
		ProcesarTiendaxRetails(idRet);
	} else if (idOpc == 2) {
		ProcesarVentas_ACV_TiendaxRetails();
	} else if (idOpc == 3) {
		ProcesarAll_ACV_TotalVentasxRetail();
	} else if (idOpc == 4) {
		ProcesarCantRegistros2(idOpc, idRet, idSem);
	}
}
//
function ProcesarTiendaxRetails(idRet) {
	//
	// debugger;
	//
	const settings = {
		//"url": '<?php echo urlApi; ?>getTiendasRetail/' + idRet,
		url: sessionStorage.getItem("urlApi") + "getTiendasRetail/" + idRet + "",
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
			let $table = $("#tblTiendasxRetail");

			$table.bootstrapTable("destroy");

			$("#tblTiendasxRetail").bootstrapTable({
				data: response.data,
			});

			$table.bootstrapTable("refresh");
			$table.bootstrapTable("togglePagination");

			$table.bootstrapTable("refreshOptions", {
				locale: "es-SP",
			});

			$("#tiendasxRetail").html("<i class='fas fa-house'></i>&nbsp;Tiendas");
			$("#showTiendasxRetail").css("display", "block");
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
//
function ProcesarACV_TiendaxRetails(idRet, idSem) {
	//
	//FINAl 06jul21
	debugger;
	//
	let idSemanas = "";
	for (let i = 0; i <= 4; i++) {
		idSemanas += idSem - i + "*";
	}
	idSem = idSemanas.slice(0, -1);
	//
	const settings = {
		//"url": '<?php echo urlApi; ?>getACVxTiendasxRetail_Pivot/' + idRet + '/' + idSem,
		url:
			sessionStorage.getItem("urlApi") +
			"getACVxTiendasxRetail_Pivot/" +
			idRet +
			"/" +
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
			debugger;

			//$('#tblTiendasxRetail').bootstrapTable('removeAll');
			let $table = $("#tblAcvTiendasxRetail");

			$table.bootstrapTable("destroy");

			$("#tblAcvTiendasxRetail").bootstrapTable({
				data: response.data,
			});

			$table.bootstrapTable("refresh");
			$table.bootstrapTable("togglePagination");

			$table.bootstrapTable("refreshOptions", {
				locale: "es-SP",
			});

			$("#acvTiendasxRetail").html("<i class='fas fa-house'></i>&nbsp;Tiendas");

			$("#showAcvTiendasxRetail").css("display", "block");
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
//
function LimpiezaPro() {
	//debugger;
	$("#showACVTiendasxRetail").css("display", "none");
	$("#showTiendasxRetail").css("display", "none");
	$("#ShowDivAcvTiendas").css("display", "none");
	$("#tablaJsonPro").html("");
}
//
function MostrarAcvRetailxTiendas() {
	//
	debugger;
	//
	sessionStorage.removeItem("minPro");
	sessionStorage.removeItem("maxPro");
	let msg = (message = "");
	let vError = false;
	//
	let cmbOpciones = document.getElementById("cboOpcionesPro").selectedIndex;
	if (cmbOpciones == null || cmbOpciones == 0 || cmbOpciones < 0) {
		msg += "Archivos" + ",";
		vError = true;
	}
	let cmbRetailer = $("#cboRetailersPro").val(); //document.getElementById("cboRetailersRec").selectedIndex;
	if (cmbRetailer == null || cmbRetailer == 0 || cmbRetailer < 0) {
		if ($("#cboOpcionesPro").val() == "acvTotalVentas") {
			vError = false;
		} else {
			msg += " Retailer" + ",";
			vError = true;
		}
	}
	//
	let vMinimo = parseInt($("#minimoPro").val());
	if (vMinimo <= 0) {
		msg += " Valor Mínimo debe ser mayor a Cero..!" + ",";
		vError = true;
	}
	let vMaximo = parseInt($("#maximoPro").val());
	if (vMaximo > 100) {
		msg += " Valor Máximo debe ser menor o igual a Cien..!" + ",";
		vError = true;
	}
	//
	message = "Seleccione " + msg;
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
	} else {
		sessionStorage.setItem("minPro", parseInt($("#minimoPro").val()));
		sessionStorage.setItem("maxPro", parseInt($("#maximoPro").val()));
		return true;
	}
}
//
function ProcesarVentas_ACV_TiendaxRetails() {
	// FINAL 2
	//debugger;
	//
	//if (validarMinMaxPro()) {
	$("#tablaJsonPro").html("");
	const idRet = $("#cboRetailersPro").val();
	let idSem = $("#cboSemanasPro").val();
	//
	identificarSemanasPro(idSem);
	//
	let idSemanas = "";
	for (let i = 0; i <= 4; i++) {
		idSemanas += idSem - i + "*";
	}
	idSem = idSemanas.slice(0, -1);
	//
	const settings = {
		//"url": '<?php echo urlApi; ?>getACVxTiendasxRetail_Pivot/' + idRet + '/' + idSem,
		url:
			sessionStorage.getItem("urlApi") +
			"getACVxTiendasxRetail_Pivot/" +
			idRet +
			"/" +
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
					title:
						$("#cboRetailersPro option:selected").text().trim() +
						" Sin registro de ACV..!",
				});
				//
				$("#ShowDivAcvTiendas").css("display", "block");
				$("#tablaJsonPro").html("");
				let tbody =
					"<tr><td colspan='9' class='text-center'>| NO HAY DATOS QUE MOSTRAR |</td></tr>";
				$("#tablaJsonPro").append(tbody);
				//
				return false;
			} else {
				//
				let jsonData = response.data;
				console.log(jsonData);
				let columnas = idSemanas.split("*");
				debugger;
				//
				$("#tablaJsonPro").html("");
				let tbody = fillTableBodyPro(jsonData);
				$("#tablaJsonPro").append(tbody);
			}
			$("#acvTableTiendasxRetail").html(
				"<i class='fas fa-cash-register'></i>&nbsp;ACV Ventas Total x Retails"
			);

			$("#ShowDivAcvTiendas").css("display", "block");
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
	//}
}
//
function ProcesarAll_ACV_TotalVentasxRetail() {
	//
	debugger;
	//
	if (validarMinMaxPro()) {
		$("#tablaJsonPro").html("");
		$("#cargando").css("display", "block");
		let idSem = $("#cboSemanasPro").val();
		identificarSemanasPro(idSem);
		//
		let idSemanas = "";
		for (let i = 0; i <= 4; i++) {
			idSemanas += idSem - i + "*";
		}
		idSem = idSemanas.slice(0, -1);
		//
		const settings = {
			//"url": '<?php echo urlApi; ?>getAllACVTotalVentasxRetail_Pivot/' + idSem,
			url:
				sessionStorage.getItem("urlApi") +
				"getAllACVTotalVentasxRetail_Pivot/" +
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

				let dataInfoLength = response.data.length;

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
						title: " Sin registro de ACV todas las tiendas..!",
					});
					//
					$("#ShowDivAcvTiendas").css("display", "block");
					$("#tablaJsonPro").html("");
					let tbody =
						"<tr><td colspan='9' class='text-center'>| NO HAY DATOS QUE MOSTRAR |</td></tr>";
					$("#tablaJsonPro").append(tbody);
					//
					return false;
				} else {
					//
					let jsonData = response.data;
					console.log(jsonData);
					debugger;
					//
					$("#tablaJsonPro").html("");
					let tbody = fillTableBodyPro(jsonData);
					$("#tablaJsonPro").append(tbody);
				}

				$("#acvTableTiendasxRetail").html(
					"<i class='fas fa-cash-register'></i>&nbsp;ACV Total Ventas x Retails"
				);
				$("#ShowDivAcvTiendas").css("display", "block");
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
function identificarSemanasPro(idSem) {
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
					$("#T0pro").html("Actual - " + value);
				}
				if (i == 1) {
					$("#T1pro").html("T1 - " + value);
				}
				if (i == 2) {
					$("#T2pro").html("T2 - " + value);
				}
				if (i == 3) {
					$("#T3pro").html("T3 - " + value);
				}
				if (i == 4) {
					$("#T4pro").html("T4 - " + value);
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
function fillTableBodyPro(Data) {
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
				monto = formatoPrecio(monto);
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
				monto = formatoPrecio(monto);
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
				monto = formatoPrecio(monto);
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
				monto = formatoPrecio(monto);
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
				monto = formatoPrecio(monto);
				row7 = "<td class='text-right'>" + monto + "</td>";
			}
		}
		//
		let Promedio = 0;
		if (parseInt(divProm) <= 0) {
			row1 = "<td class='text-center'>" + "No Aplica" + "</td>";
		} else {
			Promedio = parseFloat(total) / divProm;
			let Prom = formatoPrecio(Promedio);
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
			Varia = formatoPrecio(Variacion);
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
function fillTableBodyPro2(Data) {
	//debugger;
	const jsonData = Data;
	let row = "";
	//let col = [];
	//
	let col = Object.keys(jsonData[0]);
	//
	for (let i = 0; i < jsonData.length; i++) {
		let divProm = 0;
		let total = 0;
		let semActual = 0;
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
				monto = jsonData[i][col[5 - j]];
				if (monto == null) {
					monto = 0;
				} else {
					total = total + parseFloat(monto);
					divProm++;
				}
				semActual = parseFloat(monto);
				monto = formatoPrecio(monto);
				row += "<td class='text-right'>" + monto + "</td>";
			}
			if (j == 2) {
				//T1
				monto = jsonData[i][col[5 - j]];
				if (monto == null) {
					monto = 0;
				} else {
					total = total + parseFloat(monto);
					divProm++;
				}
				monto = formatoPrecio(monto);
				row += "<td class='text-right'>" + monto + "</td>";
			}
			if (j == 3) {
				//T2
				monto = jsonData[i][col[5 - j]];
				if (monto == null) {
					monto = 0;
				} else {
					total = total + parseFloat(monto);
					divProm++;
				}
				monto = formatoPrecio(monto);
				row += "<td class='text-right'>" + monto + "</td>";
			}
			if (j == 4) {
				//T3
				monto = jsonData[i][col[5 - j]];
				if (monto == null) {
					monto = 0;
				} else {
					total = total + parseFloat(monto);
					divProm++;
				}
				monto = formatoPrecio(monto);
				row += "<td class='text-right'>" + monto + "</td>";
			}
			if (j == 5) {
				//T4
				monto = jsonData[i][col[5 - j]];
				if (monto == null) {
					monto = 0;
				} else {
					total = total + parseFloat(monto);
					divProm++;
				}
				monto = formatoPrecio(monto);
				row += "<td class='text-right'>" + monto + "</td>";
			}
		}
		//
		let Promedio = 0;
		if (parseInt(divProm) <= 0) {
			row += "<td class='text-center'>" + "No Aplica" + "</td>";
		} else {
			Promedio = parseFloat(total) / divProm;
			let Prom = formatoPrecio(Promedio);
			row += "<td class='text-right'>" + Prom + "</td>";
		}
		//
		let Variacion = 0;
		if (parseFloat(semActual) <= 0) {
			Variacion = "No Aplica";
			row += "<td class='text-center'>" + Variacion + "</td>";
		} else {
			Variacion =
				((parseFloat(semActual) - parseFloat(Promedio)) /
					parseFloat(Promedio)) *
				100;
			Varia = formatoPrecio(Variacion);
			if (
				parseFloat(Variacion) <
				parseInt(sessionStorage.getItem("minPro")) * -1
			) {
				row +=
					"<td class='text-right bg-danger font-weight-bold'>" +
					Varia +
					"</td>";
			} else {
				if (
					parseFloat(Variacion) > parseInt(sessionStorage.getItem("maxPro"))
				) {
					row +=
						"<td class='text-right bg-success font-weight-bold'>" +
						Varia +
						"</td>";
				} else {
					row += "<td class='text-right'>" + Varia + "</td>";
				}
			}
		}
		//
		row += "</tr>";
	}
	return row;
}
//
function validarMinMaxPro() {
	//
	sessionStorage.removeItem("minPro");
	sessionStorage.removeItem("maxPro");
	//
	let msg = "";
	let vError = false;
	let vminimoPro = parseInt($("#minimoPro").val());
	if (vminimoPro <= 0) {
		msg += " Valor Mínimo debe ser mayor a Cero..!" + ",";
		vError = true;
	}
	let vMaximoPro = parseInt($("#maximoPro").val());
	if (vMaximoPro > 100) {
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
	sessionStorage.setItem("minPro", parseInt($("#minimoPro").val()));
	sessionStorage.setItem("maxPro", parseInt($("#maximoPro").val()));
	return true;
}
//
function ValidarProcesoPro() {
	//
	debugger;
	//
	sessionStorage.removeItem("minPro");
	sessionStorage.removeItem("maxPro");
	var msg = (message = "");
	var vError = true;
	//
	var cmbOpciones = document.getElementById("cboOpcionesPro").selectedIndex;
	if (cmbOpciones == null || cmbOpciones == 0 || cmbOpciones < 0) {
		msg += "Archivos" + ",";
		vError = true;
	} else {
		vError = false;
	}
	var cmbRetailer = $("#cboRetailersPro").val(); //document.getElementById("cboRetailersRec").selectedIndex;
	if (cmbRetailer == null || cmbRetailer == 0 || cmbRetailer < 0) {
		msg += " Retailer" + ",";
		vError = true;
	} else {
		vError = false;
	}
	var cmbSemana = $("#cboSemanasPro").val(); //document.getElementById("cboSemanasRec").selectedIndex;
	if (cmbSemana == null || cmbSemana == 0 || cmbSemana < 0) {
		msg += " Semanas";
		if (sessionStorage.getItem("ACV") == 0) {
			vError = false;
		} else {
			vError = true;
		}
	} else {
		vError = false;
	}
	//
	let vMinimo = parseInt($("#minimoPro").val());
	if (vMinimo <= 0) {
		msg += " Valor Mínimo debe ser mayor a Cero..!" + ",";
		vError = true;
	}
	let vMaximo = parseInt($("#maximoPro").val());
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
	} else {
		$("#cargando").css("display", "block");
		sessionStorage.setItem("minPro", parseInt($("#minimoPro").val()));
		sessionStorage.setItem("maxPro", parseInt($("#maximoPro").val()));
		LimpiezaPro();
		SeleccionPro(cmbOpciones, cmbRetailer, cmbSemana);
		return true;
	}
}
