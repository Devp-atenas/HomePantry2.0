/***** productosnuevos.js - 21jul21  *****/
/*---------------------------------------*/
function Reset() {
	//
	$("#cboProductosPendientes").prop("selectedIndex", 0);
	$("#cboCanal").prop("selectedIndex", 0);
	LimpiezaProd();
}
//
$("#cboProductosPendientes").change(function () {
	LimpiezaProd();
});
//
function LimpiezaProd() {
	//
	$("#ShowBarcode").css("display", "none");
	$("#tablaJsonProd").html("");
	//
}
//
function cargarProductosPendientes() {
	//
	//debugger;
	$("#cboProductosPendientes").prop("disabled", true);
	$("#cboCanal").prop("disabled", true);
	$("#cargandoBarras").css("display", "block");
	//
	var settings = {

		url: sessionStorage.getItem("urlApi") + "getAllRegistros_x_CodigoBarras_AllCanal",
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
					"<option value=" + response.data[i].id + ">" + response.data[i].id + " - ("+ response.data[i].total + ")" + "</option>"
				);
			}
			//
			cargarCanal();
			$("#cboProductosPendientes").prop("disabled", false);
			$("#cboProductosPendientes").prop("selectedIndex", 0);
			$("#cboCanal").prop("selectedIndex", 0);
			$("#cboCanal").prop("disabled", false);
			$("#cargandoBarras").css("display", "none");
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
	debugger;
	let cmbProductosPendientes = document.getElementById("cboProductosPendientes").selectedIndex;
	if (cmbProductosPendientes == null || cmbProductosPendientes == 0 || cmbProductosPendientes < 0) {
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
			title:"Seleccione un Codigo de Barras..!",
		});
		return false;
	}
	$("#CrearProductos").modal("show");
	$(".modal-title").html("<i class='fas fa-plus-square'></i>&nbsp;Crear Productos");
	setDate();
	$("#showCodigoBarras").val("<i class='fas fa-barcode'></i>" + $("#cboProductosPendientes").val());
	//
}
//
function ProcesarCodigoBarras3() {
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
			title:"Seleccione un Codigo de Barras..!",
		});
		return false;
	}
	$("#cargando").css("display", "block");
	$("#mainCodigoBarras").css("display", "none");
	Barra = $("#cboProductosPendientes").val();
	//
    var settings = {
		url: sessionStorage.getItem("urlApi") + "getAllRegistros_x_CodigoBarras_Seleccionado/"+ Barra,
		method: "get",
		headers: {
			"Content-Type": "application/x-www-form-urlencoded",
			Authorization: "Bearer " + localStorage.getItem("Token"),
		},
	};
    $.ajax(settings).done(function(response) {

        console.log(response);
        debugger;
        var $table = $('#tblCodigoBarrasPendientes');
        $table.bootstrapTable("destroy");

        $('#tblCodigoBarrasPendientes').bootstrapTable({
            data: response.data
        });

        $table.bootstrapTable('refresh');
        $table.bootstrapTable('togglePagination');

        $table.bootstrapTable('refreshOptions', {
            locale: 'es-SP'
        });

        $("#showCodigoBarras").html("<i class='fas fa-barcode'></i>&nbsp;" + Barra);
        $("#mainCodigoBarras").css("display", "block");

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
            window.location = '/RetailScannig/index.php';
        }
    }).always(function(jqXHR, textStatus) {
        $("#cargando").css("display", "none");
    });
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
			title:"Seleccione un Codigo de Barras..!",
		});
		return false;
	}
	$("#cargando").css("display", "block");
	$("#mainCodigoBarras2").css("display", "none");
	Barra = $("#cboProductosPendientes").val();
	//
    var settings = {
		url: sessionStorage.getItem("urlApi") + "getAllRegistros_x_CodigoBarras_Seleccionado/"+ Barra,
		method: "get",
		headers: {
			"Content-Type": "application/x-www-form-urlencoded",
			Authorization: "Bearer " + localStorage.getItem("Token"),
		},
	};
    $.ajax(settings).done(function(response) {

        console.log(response);
        //debugger;
		
        var table = new Tabulator("#tblCodigoBarrasPendientes", {
			//height:"311px",
			layout:"fitColumns",						
			data:response.data,
			columns:[
			{title:"Código", field:"codigo"},
			{title:"Retail", field:"retail"},
			{title:"Descripción", field:"descripcion"},
			{title:"Total", field:"total", hozAlign:"center"},
			//{title:"Favourite Color", field:"col"},
			//{title:"Date Of Birth", field:"dob", hozAlign:"center"},
			],
		});

		//trigger download of data.xlsx file
		document.getElementById("download-xlsx").addEventListener("click", function(){
			table.download("xlsx", "data.xlsx", {sheetName:"My Data"});
		});

		//trigger download of data.pdf file
		document.getElementById("download-pdf").addEventListener("click", function(){
			table.download("pdf", "data.pdf", {
				orientation:"portrait", //set page orientation to portrait
				title:"Listado de Productos Nuevos", //add title to report
			});
		});

        //$("#showCodigoBarras").html("<i class='fas fa-barcode'></i>&nbsp;" + Barra);
        $("#mainCodigoBarras").css("display", "block");


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
            window.location = '/RetailScannig/index.php';
        }
    }).always(function(jqXHR, textStatus) {
        $("#cargando").css("display", "none");
    });
}