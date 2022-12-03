function headerStyle1(column) {
    return {
        codigo: {

            css: {
                background: '#2072A9',
                color: 'white'
            }
        },
        tienda: {
            css: {
                background: '#2072A9',
                color: 'white'
            }
        },
        direccion: {
            css: {
                background: '#2072A9',
                color: 'white'
            }
        }
    } [column.field]
}
//
function headerStyle2(column) {
    return {
        codigo: {

            css: {
                background: '#2072A9',
                color: 'white'
            }
        },
        tienda: {
            css: {
                background: '#2072A9',
                color: 'white'
            }
        },
        total: {
            css: {
                background: '#2072A9',
                color: 'white'
            }
        }
    } [column.field]
}
//
function priceFormatter(value) {
    return Number(value).toLocaleString("es-ES", {
        minimumFractionDigits: 2
    });
}
//
function ProcesarVentas_ACV_TiendaxRetails() {
    //
    debugger;
    //
    const idRet = $("#cboRetailersPro").val();
    const idSem = $("#cboSemanasPro").val();
    //
    var settings = {
        "url": '<?php echo urlApi; ?>getACVTiendasxRetail/' + idRet + '/' + idSem + '',
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {

        console.log(response);
        debugger;

        var dataInfoLength = response.data.length;
        //
        if (dataInfoLength == 0) {

            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'info',
                title: $("#cboRetailersPro option:selected").text().trim() +
                    ' Sin registro de ACV..!',
            })
            return false;
        } else {
            //
            debugger;
            //
            var tableData = response.data;
            var table = "#pivotTable", {
                //set initial table data
                data: tableData,
                height: "400px",
                responsiveLayout: true,
                locale: true,
                layout: "fitColumns",
                movableRows: true,
                groupBy: "tienda",
                /*
                pagination: "local",
                paginationSize: 5,
                paginationSizeSelector: [5, 10, 15, 20],
                */
                columns: [{
                        title: "Tienda",
                        field: "tienda"
                    },
                    {
                        title: "Semana",
                        field: "Semana"
                    },
                    {
                        title: "Monto",
                        field: "Monto",
                        formatter: "money",
                        formatterParams: {
                            decimal: ",",
                            thousand: ".",
                            align: "right",
                            precision: false,
                        },
                    },

                ],

            });
            table.clearData();
            table.setData(tableData);
            //table.updateOrAddData(tableData);
            table.redraw();

            var activeRowCount = table.getDataCount(true);

        }

        //trigger download of data.xlsx file
        $("#download-xlsx").click(function() {
            table.download("xlsx", "data.xlsx", {
                sheetName: "My Data"
            });
        });

        //trigger download of data.pdf file
        $("#download-pdf").click(function() {
            table.download("pdf", "data.pdf", {
                orientation: "portrait", //set page orientation to portrait
                title: "Example Report", //add title to report
            });
        });

        $("#showACVTiendasxRetail").css("display", "block");


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
            window.location = '/retailscannig/index.php';
        }
    })
}
//
function ProcesarTotalVentas_ACV_xRetails() {
    //
    debugger;
    //
    const idRet = $("#cboRetailersPro").val();
    const idSem = $("#cboSemanasPro").val();
    //
    var settings = {
        "url": '<?php echo urlApi; ?>getACVTotalVentasxRetail/' + idRet + '/' + idSem + '',
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {

        console.log(response);
        debugger;

        var dataInfoLength = response.data.length;
        //
        if (dataInfoLength == 0) {

            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'info',
                title: $("#cboRetailersPro option:selected").text().trim() +
                    ' Sin registro de ACV..!',
            })
            return false;
        } else {
            //
            debugger;
            //
            var tableData = response.data;
            var table = new Tabulator("#pivotTable", {
                //set initial table data
                data: tableData,
                height: "400px",
                responsiveLayout: true,
                locale: true,
                layout: "fitColumns",
                movableRows: true,
                groupBy: "tienda",
                /*
                pagination: "local",
                paginationSize: 5,
                paginationSizeSelector: [5, 10, 15, 20],
                */
                columns: [{
                        title: "Semana",
                        field: "Semana"
                    },
                    {
                        title: "Ventas Totales",
                        field: "venta_total",
                        formatter: "money",
                        formatterParams: {
                            decimal: ",",
                            thousand: ".",
                            align: "right",
                            precision: false,
                        },
                    },

                ],

            });
            table.clearData();
            table.setData(tableData);
            table.redraw();

            var activeRowCount = table.getDataCount(true);

        }

        //trigger download of data.xlsx file
        $("#download-xlsx").click(function() {
            table.download("xlsx", "data.xlsx", {
                sheetName: "My Data"
            });
        });

        //trigger download of data.pdf file
        $("#download-pdf").click(function() {
            table.download("pdf", "data.pdf", {
                orientation: "portrait", //set page orientation to portrait
                title: "Example Report", //add title to report
            });
        });

        $("#showACVTiendasxRetail").css("display", "block");
        $('table tr:first').css('font-weight', 'bold');


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
            window.location = '/retailscannig/index.php';
        }
    })

}
//
function LimpiezaRec() {
    $("#showRepTendencias").css("display", "none");
    $("#showTiendasFaltantes").css("display", "none");
    $("#showTiendasNuevas").css("display", "none");
    //
    $("#SemActual").html("");
    $("#SemTend1").html("");
    $("#SemTend2").html("");
    $("#SemTend3").html("");
    $("#SemTend4").html("");
    //
    $("#titRepSemActual").html("");
    $("#titRepSemTend1").html("");
    $("#titRepSemTend2").html("");
    $("#titRepSemTend3").html("");
    $("#titRepSemTend4").html("");
}
//
function ResetPro() {
    $("#cboSemanasPro").prop("disabled", true);
    $("#cboRetailersPro").prop("disabled", true);
    $("#cboRetailersPro").prop("selectedIndex", 0);
    $("#cboSemanasPro").prop("selectedIndex", 0);
    $("#cboOpcionesPro").prop("selectedIndex", 0);
    LimpiezaPro();
}
//
function ValidarProcesoPro() {
    //
    //debugger;
    //
    var msg = message = "";
    var error = true;
    //
    var cmbOpciones = document.getElementById("cboOpcionesPro").selectedIndex;
    if (cmbOpciones == null || cmbOpciones == 0 || cmbOpciones < 0) {
        msg += "Archivos" + ",";
        error = true;
    } else {
        error = false;
    }
    var cmbRetailer = $("#cboRetailersPro")
        .val(); //document.getElementById("cboRetailersRec").selectedIndex;
    if (cmbRetailer == null || cmbRetailer == 0 || cmbRetailer < 0) {
        msg += " Retailer" + ","
        error = true;
    } else {
        error = false;
    }
    var cmbSemana = $("#cboSemanasPro").val(); //document.getElementById("cboSemanasRec").selectedIndex;
    if (cmbSemana == null || cmbSemana == 0 || cmbSemana < 0) {
        msg += " Semanas";
        if (sessionStorage.getItem("ACV") == 0) {
            error = false;
        } else {
            error = true;
        }
    } else {
        error = false;

    }
    message = "Seleccione " + msg;
    //
    if (error) {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
        Toast.fire({
            icon: 'error',
            title: message,
        })
        return false;
    }
    LimpiezaPro();
    SeleccionPro(cmbOpciones, cmbRetailer, cmbSemana);
}
//
function SeleccionPro(idOpc, idRet, idSem) {
    debugger;
    if (idOpc == 1) {
        ProcesarTiendaxRetails(idRet)
    } else if (idOpc == 2) {
        ProcesarACV_TiendaxRetails(idRet, idSem)
    } else if (idOpc == 3) {
        ProcesarTotalVentas_ACV_xRetails(idRet, idSem);
    } else if (idOpc == 4) {
        ProcesarCantRegistros2(idOpc, idRet, idSem);
    }
}
//
function ProcesarTiendaxRetails(idRet) {
    //
    // debugger;
    //
    var settings = {
        "url": '<?php echo urlApi; ?>getTiendasRetail/' + idRet,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {

        //var response = response;
        //var mydata = JSON.parse(response)
        console.log(response);
        debugger;

        //$('#tblTiendasxRetail').bootstrapTable('removeAll');
        var $table = $('#tblTiendasxRetail');
        /*
         $table.bootstrapTable('refresh', {
             data: response.data,
             pageSize: 2
         });
         */
        $table.bootstrapTable("destroy");


        $('#tblTiendasxRetail').bootstrapTable({
            data: response.data
        });

        $table.bootstrapTable('refresh');
        $table.bootstrapTable('togglePagination');

        $table.bootstrapTable('refreshOptions', {
            locale: 'es-SP'
        });

        $("#tiendasxRetail").html("<i class='fas fa-house'></i>&nbsp;Tiendas");
        $("#showTiendasxRetail").css("display", "block");

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
            window.location = '/retailscannig/index.php';
        }
    })
}
//
function ProcesarACV_TiendaxRetails() {
    //
    debugger;
    //
    const idRet = $("#cboRetailersPro").val();
    const idSem = $("#cboSemanasPro").val();

    var settings = {
        "url": '<?php echo urlApi; ?>getACVTiendasRetail/' + idRet + '/' + idSem,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {

        console.log(response);
        debugger;

        //$('#tblTiendasxRetail').bootstrapTable('removeAll');
        var $table = $('#tblAcvTiendasxRetail');

        $table.bootstrapTable("destroy");

        $('#tblAcvTiendasxRetail').bootstrapTable({
            data: response.data
        });

        $table.bootstrapTable('refresh');
        $table.bootstrapTable('togglePagination');

        $table.bootstrapTable('refreshOptions', {
            locale: 'es-SP'
        });

        $("#acvTiendasxRetail").html("<i class='fas fa-house'></i>&nbsp;Tiendas");

        $("#showAcvTiendasxRetail").css("display", "block");

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
            window.location = '/retailscannig/index.php';
        }
    })
}
//
function LimpiezaPro() {
    $("#showTiendasxRetail").css("display", "none");
    $("#showAcvTiendasxRetail").css("display", "none");
    //
}
//
function MostrarAcvRetailxTiendas() {
    //
    //debugger;
    //
    var msg = message = "";
    var error = true;
    //
    var cmbOpciones = document.getElementById("cboOpcionesPro").selectedIndex;
    if (cmbOpciones == null || cmbOpciones == 0 || cmbOpciones < 0) {
        msg += "Archivos" + ",";
        error = true;
    } else {
        error = false;
    }
    var cmbRetailer = $("#cboRetailersPro")
        .val(); //document.getElementById("cboRetailersRec").selectedIndex;
    if (cmbRetailer == null || cmbRetailer == 0 || cmbRetailer < 0) {
        msg += " Retailer" + ","
        error = true;
    } else {
        error = false;
    }

    var cmbSemana = $("#cboSemanasPro").val();
    console.log(cmbSemana); //var cmbSemana = 36;
    message = "Seleccione " + msg;
    //
    if (error) {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
        Toast.fire({
            icon: 'error',
            title: message,
        })
        return false;
    }
    //LimpiezaPro();
    //ProcesarVentas_ACV_TiendaxRetails(cmbRetailer, cmbSemana);
}
//
//
function cargarRetailerRec() {
    var settings = {
        "url": '<?php echo urlApi; ?>getRetailes',
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        //console.log(response);
        //debugger;
        let select = $("#cboRetailersRec");
        select.find("option").remove();
        select.append("<option value='0' selected disabled> -- Seleccione -- </option>");
        for (var i = 0; i < response.data.length; i++) {
            select.append("<option value=" + response.data[i].id_retail + ">" + response.data[i].retail +
                "</option>");
        }
        //
        $("#cboRetailersPro").empty();
        $("#cboRetailersRec").find("option").clone().appendTo("#cboRetailersPro");
        $("#cboRetailersPro").prop("disabled", true);
        //
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
            window.location = '/retailscannig/index.php';
        }
    })
}
//
function cargarSemanasRec() {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllSemana',
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let select = $("#cboSemanasRec");
        select.find("option").remove();
        select.append("<option value='0' selected disabled> -- Seleccione -- </option>");
        for (var i = 0; i < response.data.length; i++) {
            select.append("<option value=" + response.data[i].IdSemana + ">" + response.data[i].Semana +
                "</option>");
        }
        //$("#cboSemanasRec").prop("disabled", false);
        //
        $("#cboSemanasPro").empty();
        $("#cboSemanasRec").find("option").clone().appendTo("#cboSemanasPro");
        $("#cboSemanasPro").prop("disabled", true);
        //
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
            window.location = '/retailscannig/index.php';
        }
    })
}
//
function ValidarProcesoRec() {
    //
    //debugger;
    //
    var msg = message = "";
    var error = true;
    //
    var cmbOpciones = document.getElementById("cboOpcionesRec").selectedIndex;
    if (cmbOpciones == null || cmbOpciones == 0 || cmbOpciones < 0) {
        msg += "Archivos" + ",";
        error = true;
    } else {
        error = false;
    }
    var cmbRetailer = $("#cboRetailersRec").val();
    //
    if (cmbRetailer == null || cmbRetailer == 0 || cmbRetailer < 0 || cmbRetailer == undefined) {
        msg += " Retailer" + ","
        error = true;
    } else {
        error = false;
    }
    var cmbSemana = $("#cboSemanasRec").val();
    if (cmbSemana == null || cmbSemana == 0 || cmbSemana < 0) {
        msg += " Semanas";
        error = true;
    } else {
        error = false;
    }
    message = "Seleccione " + msg;
    //
    if (error) {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
        Toast.fire({
            icon: 'error',
            title: message,
        })
        return false;
    }
    LimpiezaRec();
    SeleccionRec(cmbOpciones, cmbRetailer, cmbSemana);
}
//
function SeleccionRec(idOpc, idRet, idSem) {
    //debugger;
    if (idOpc == 1) {
        ProcesarTndFaltantes(idOpc, idRet, idSem)
    } else if (idOpc == 2) {
        ProcesarTndNuevas(idOpc, idRet, idSem)
    } else if (idOpc == 3) {
        ProcesarArchTamano(idOpc, idRet, idSem);
    } else if (idOpc == 4) {
        ProcesarCantRegistros(idOpc, idRet, idSem);
    }
}
//
function ProcesarArchTamano(idOpc, idRet, idSem) {
    //
    debugger;
    //
    let i = 0;
    let idsemana = "";
    for (i = 0; i <= 4; i++) {
        idsemana += idSem - i + ",";
    }
    idSem = idsemana.slice(0, -1);
    //
    var settings = {
        "url": '<?php echo urlApi; ?>getTamanoArchivo/' + idOpc + '/' + idRet + '/' + idSem + '',
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        debugger;
        let cont = 0;
        $.each(response.data, function(i, item) {
            //debugger;
            //alert(response.data[i].id_Semana + " " + response.data[i].Tam_Archivo);
            cont++;
            if (cont == 1) {
                $("#SemActual").html(Number(response.data[i].Tam_Archivo).toLocaleString("es-ES", {
                    minimumFractionDigits: 0
                }) + " Kb");
                $("#titRepSemActual").html(response.data[i].semana);
            } else if (cont == 2) {
                $("#SemTend1").html(Number(response.data[i].Tam_Archivo).toLocaleString("es-ES", {
                    minimumFractionDigits: 0
                }) + " Kb");
                $("#titRepSemTend1").html(response.data[i].semana);
            } else if (cont == 3) {
                $("#SemTend2").html(Number(response.data[i].Tam_Archivo).toLocaleString("es-ES", {
                    minimumFractionDigits: 0
                }) + " Kb");
                $("#titRepSemTend2").html(response.data[i].semana);
            } else if (cont == 4) {
                $("#SemTend3").html(Number(response.data[i].Tam_Archivo).toLocaleString("es-ES", {
                    minimumFractionDigits: 0
                }) + " Kb");
                $("#titRepSemTend3").html(response.data[i].semana);
            } else if (cont == 5) {
                $("#SemTend4").html(Number(response.data[i].Tam_Archivo).toLocaleString("es-ES", {
                    minimumFractionDigits: 0
                }) + " Kb");
                $("#titRepSemTend4").html(response.data[i].semana);
            }

        });

        $("#showRepTendencias").css("display", "block");

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
            window.location = '/retailscannig/index.php';
        }
    })
}
//
function ProcesarCantRegistros(idOpc, idRet, idSem) {
    //
    //debugger;
    //
    let i = 0;
    let idsemana = "";
    for (i = 0; i <= 4; i++) {
        idsemana += idSem - i + ",";
    }
    idSem = idsemana.slice(0, -1);
    //
    var settings = {
        "url": '<?php echo urlApi; ?>getCantidadRegistros/' + idOpc + '/' + idRet + '/' + idSem + '',
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        debugger;
        let cont = 0;
        $.each(response.data, function(i, item) {
            //debugger;
            //alert(response.data[i].id_Semana + " " + response.data[i].Tam_Archivo);
            cont++;
            if (cont == 1) {
                $("#SemActual").html(Number(response.data[i].Num_registro).toLocaleString("es-ES", {
                    minimumFractionDigits: 0
                }));
                $("#titRepSemActual").html(response.data[i]
                    .semana);
            } else if (cont == 2) {
                $("#SemTend1").html(Number(response.data[i].Num_registro).toLocaleString(
                    "es-ES", {
                        minimumFractionDigits: 0
                    }));
                $("#titRepSemTend1").html(response.data[i]
                    .semana);
            } else if (cont == 3) {
                $("#SemTend2").html(Number(response.data[i].Num_registro).toLocaleString(
                    "es-ES", {
                        minimumFractionDigits: 0
                    }));
                $("#titRepSemTend2").html(response.data[i]
                    .semana);
            } else if (cont == 4) {
                $("#SemTend3").html(Number(response.data[i].Num_registro).toLocaleString(
                    "es-ES", {
                        minimumFractionDigits: 0
                    }));
                $("#titRepSemTend3").html(response.data[i]
                    .semana);
            } else if (cont == 5) {
                $("#SemTend4").html(Number(response.data[i].Num_registro).toLocaleString(
                    "es-ES", {
                        minimumFractionDigits: 0
                    }));
                $("#titRepSemTend4").html(response.data[i]
                    .semana);
            }

        });
        $("#showRepTendencias").css("display", "block");
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
            window.location = '/retailscannig/index.php';
        }
    })
}
//
function ProcesarTndFaltantes(idOpc, idRet, idSem) {
    //
    debugger;
    //
    var settings = {
        "url": '<?php echo urlApi; ?>getTiendasFaltantes/' + idOpc + '/' + idRet + '/' + idSem + '',
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {

        var $table = $('#tiendaFaltante');
        $table.bootstrapTable("destroy");

        $('#tiendaFaltante').bootstrapTable({
            data: response.data
        });

        $("#tiendasFaltantes").html("<i class='fas fa-house-damage'></i>&nbsp;Tiendas");

        $("#showTiendasFaltantes").css("display", "block");

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
            window.location = '/retailscannig/index.php';
        }
    })
}
//
function ProcesarTndNuevas(idOpc, idRet, idSem) {
    //
    // debugger;
    //
    var settings = {
        "url": '<?php echo urlApi; ?>getTiendasNuevas/' + idOpc + '/' + idRet + '/' + idSem + '',
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {

        console.log(response);
        debugger;

        var dataInfoLength = response.data.length;
        //
        if (dataInfoLength == 0) {

            $('#tiendaNueva').bootstrapTable('removeAll');

            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'info',
                title: 'No hay registro de Tiendas Nuevas',
            })
            return false;
        } else {

            var $table = $('#tiendaNueva');
            $table.bootstrapTable("destroy");

            $('#tiendaNueva').bootstrapTable({
                data: response.data
            });
            $("#tiendasNuevas").html("<i class='fas fa-house-user'></i>&nbsp;Tiendas");

        }

        $("#showTiendasNuevas").css("display", "block");

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
            window.location = '/retailscannig/index.php';
        }
    })
}
//
function ResetRec() {
    //$('input[type="radio"]').prop('checked', false);
    //$('#cboTiendas').find('option:not(:first)').remove();
    $("#cboSemanasRec").prop("disabled", true);
    $("#cboRetailersRec").prop("disabled", true);
    $("#cboRetailersRec").prop("selectedIndex", 0);
    $("#cboSemanasRec").prop("selectedIndex", 0);
    $("#cboOpcionesRec").prop("selectedIndex", 0);
    LimpiezaRec();
}
//