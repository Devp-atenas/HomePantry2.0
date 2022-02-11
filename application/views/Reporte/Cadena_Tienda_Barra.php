            <!-- Colocar Include Header y Menu -->
            <?php $this->load->view('Plantillas/Header');?>

            <section class="content-header">

                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1><i class="fas fa-warehouse"></i>&nbsp;Validación de Retailers:</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a
                                        href="<?php echo base_url('Principal/dashboard') ?>">Inicio</a></li>
                                <li class="breadcrumb-item active"><a
                                        href="<?php echo base_url('Principal/logout') ?>">Salir</a></li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->

            </section> <!-- / section class="content header"> -->

            <section class="content">

                <div class="row">

                    <div class="col-md-12">
                        <!-- -->
                        <div class="row">

                            <div class="col-12 col-sm-12">

                                <div class="card card-primary card-outline card-outline-tabs">

                                    <div class="container-fluid text-center text-danger pt-3" id="cargando"
                                        style="display:none;">
                                        <span><img
                                                src="<?php echo base_url('dist/img/ajax-loader8.gif') ?>"><strong>&nbsp;Espere...,
                                                Procesando!</strong></span>
                                    </div>

                                    <div class="card-header p-0 pt-1">
                                        <ul class="nav nav-tabs nav-fill" id="custom-tabs-one-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="custom-tabs-recepcion-tab"
                                                    data-toggle="pill" href="#custom-tabs-recepcion" role="tab"
                                                    aria-controls="custom-tabs-recepcion" aria-selected="true"><i
                                                        class="fas fa-store"></i>&nbsp;Reporte Por Cadena-Tienda-Barra
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="card-body">

                                        <div class="tab-content" id="custom-tabs-one-tabContent">

                                            <!-- Tab1 Rececpcion Data -->
                                            <div class="tab-pane fade show active" id="custom-tabs-recepcion"
                                                role="tabpanel" aria-labelledby="custom-tabs-recepcion-tab">

                                                <div class="form-group row">
                                                    <!--Botones seleccion -->
                                                    <div class=" col-md-3">
                                                        <label class="col-sm-4 col-form-label col-form-label-sm"><i
                                                                class="fas fa-store"></i>&nbsp;Cadena:</label>
                                                        <div class="col-sm-8 col-auto">
                                                            <select id="cboCadena" name="cboCadena"
                                                                class="form-control form-control-sm selectpicker"
                                                                multiple data-selected-text-format="count > 1" multiple
                                                                data-live-search="true" title="Seleccione Cadena"
                                                                multiple data-max-options="1" multiple
                                                                data-actions-box="true">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class=" col-md-2">
                                                        <label class="col-sm-4 col-form-label col-form-label-sm"><i
                                                                class="fas fa-industry"></i>&nbsp;Tienda:</label>
                                                        <div class="col-sm-8 col-auto">
                                                            <select name="cboTienda" id="cboTienda"
                                                                class="form-control form-control-sm selectpicker"
                                                                multiple data-selected-text-format="count > 1" multiple
                                                                data-live-search="true" title="Seleccione Tienda"
                                                                multiple data-actions-box="true">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class=" col-md-2">
                                                        <label class="col-sm-4 col-form-label col-form-label-sm"><i
                                                                class="fas fa-calendar-week"></i>&nbsp;Semana:</label>
                                                        <div class="col-sm-8 col-auto">
                                                            <select name="cboSemana" id="cboSemana"
                                                                class="form-control form-control-sm selectpicker"
                                                                multiple data-selected-text-format="count > 1" multiple
                                                                data-live-search="true" title="Seleccione Semana"
                                                                data-max-options="1">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class=" col-md-2">
                                                        <label class="col-sm-4 col-form-label col-form-label-sm"><i
                                                                class="fas fa-barcode"></i>&nbsp;Barra:</label>
                                                        <div class="col-sm-8 col-auto">
                                                            <select class="form-control form-control-sm selectpicker"
                                                                multiple data-selected-text-format="count > 1" data-live-search="true" title="Seleccione Codigo Barra"
                                                                multiple data-actions-box="true"
                                                                multiple
                                                                name="cboBarra"
                                                                id="cboBarra">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">

                                                        <div class="row mt-4">
                                                            <div class="col">
                                                                <button class="btn btn-danger form-control btn-block"
                                                                    onClick="ResetRec();" title="Borrar Filtros"><i
                                                                        class="fas fa-times"></i>&nbsp;Borrar</button>
                                                            </div>
                                                            <div class="col">
                                                                <button id="btnProcesar"
                                                                    class="btn btn-success form-control btn-block"
                                                                    type="submit" onClick="ValidarProcesoRec();"
                                                                    title="Procesar Solicitud"><i
                                                                        class="fas fa-check"></i>&nbsp;Procesar</button>
                                                            </div>
                                                            <div class="col">
                                                                <button id="btnProcesar"
                                                                    class="btn btn-secondary form-control btn-block"
                                                                    type="submit" onClick="ProcesarExcel();"
                                                                    title="Procesar Solicitud"><i
                                                                        class="fas fa-file-excel"></i>&nbsp;Excel</button>

                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>

                                                <hr>

                                                <!-- Resultados Codigos de Barra Registros-->

                                                <div class="form-group row" id="showTablaBarcodexRetail"
                                                    style="display:none;">

                                                    <div class="col-md-12">

                                                        <div class="card">

                                                            <div class="card-header">

                                                                <h5 class="card-title" id="barcodexRetail"></h5>


                                                                <div class="card-tools">

                                                                      <!--<button class="btn btn-primary btn-sm"
                                                                        id="download-xlsx" title="Exportar a Excel"><i
                                                                            class="fas fa-file-excel"></i></button>
                                                                    <button type="button" class="btn btn-tool"
                                                                        data-card-widget="collapse">
                                                                        <i class="fas fa-minus"></i>
                                                                    </button>
                                                                    -->
                                                                </div>

                                                            </div>
                                                            <!-- /.card-header -->
                                                            <div class="card-body">

                                                                <div class="row">

                                                                    <div class="table-responsive">
                                                                        <!-- Mostrar Datos Tabla -->
                                                                        <table
                                                                            class="table table-light table-sm table-hover table-bordered"
                                                                            id="tblBarcodexRetail" data-search="true"
                                                                            data-sort-class="table-active"
                                                                            data-show-export="true" data-sortable="true"
                                                                            data-show-refresh="true"
                                                                            data-show-pagination-switch="true"
                                                                            data-pagination-h-align="left"
                                                                            data-pagination-detail-h-align="right"
                                                                            data-show-fullscreen="true"
                                                                            data-show-toggle="true" data-height="460"
                                                                            data-header-style="headerStyle1">
                                                                            <thead class="thead-light">
                                                                                <tr>
                                                                                    <th data-field="Semana">
                                                                                        <span>
                                                                                            Semana
                                                                                        </span>
                                                                                    </th>
                                                                                    <th data-field="Cadena">
                                                                                        <span>
                                                                                            Cadena
                                                                                        </span>
                                                                                    </th>
                                                                                    <th data-field="CodTienda" class="text-center">
                                                                                        <span>
                                                                                        Código Tienda
                                                                                        </span>
                                                                                    </th>
                                                                                    <th data-field="Tienda">
                                                                                        <span>
                                                                                       Tienda
                                                                                        </span>
                                                                                    </th>
                                                                                    <th data-field="CodBarra" class="text-center">
                                                                                        <span>
                                                                                       Código Barra
                                                                                        </span>
                                                                                    </th>
                                                                                    <th data-field="Producto">
                                                                                        <span>
                                                                                        Producto
                                                                                        </span>
                                                                                    </th>
                                                                                    <th data-field="Cantidad" class="text-right">
                                                                                        <span>
                                                                                        Cantidad
                                                                                        </span>
                                                                                    </th>
                                                                                    <th data-field="Precio" class="text-right">
                                                                                        <span>
                                                                                        Precio
                                                                                        </span>
                                                                                    </th>
                                                                                    <th data-field="Ventas" class="text-right">
                                                                                        <span>
                                                                                        Ventas
                                                                                        </span>
                                                                                    </th>
                                                                                </tr>
                                                                            </thead>

                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <!-- /.row -->
                                                            </div>
                                                            <!-- ./card-body -->
                                                        </div>
                                                        <!-- /.card -->
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.row -->
                                                <!-- /.row -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- -->
                    </div>
                </div>
            </section> <!-- / section class="content"> -->

            <?php $this->load->view('Plantillas/Footer');?>

            <script>
$(document).ready(function() {
    $(function() {
        //debugger;
        $("#cboCadena").selectpicker();
        $("#cboSemana").selectpicker();
        $("#cboBarra").selectpicker();
        cargarCadena();
        $("#download-xlsx").prop("disabled", true);
    });
});
$("#cboCadena").change(function(e) {
    //debugger;
    $("#cboTienda").empty();
    $("#cboTienda").selectpicker('refresh');
    cargarTiendaXCadena();
});
$("#cboTienda").change(function(e) {
    //debugger;
    $("#cboSemana").empty();
    $("#cboSemana").selectpicker('refresh');
    cargarSemanasRec();
});
$("#cboSemana").change(function(e) {
    //debugger;
    $("#cboBarra").empty();
    $('#cboBarra').selectpicker('refresh');
    cargarBarraXTiendaXCadena();
});

function ResetRec() {
    debugger;
    $("#cboCadena").prop("disabled", false);
    $("#cboCadena").empty();;
    $('#cboCadena').selectpicker('refresh');
    $("#cboSemana").empty();
    $('#cboSemana').selectpicker('refresh');
    $("#cboTienda").empty();
    $('#cboTienda').selectpicker('refresh');
    $("#cboBarra").empty();
    $('#cboBarra').selectpicker('refresh');
    cargarCadena();
}
//
function cargarBarraXTiendaXCadena() {
    $("#cboBarra").empty();
    $('#cboBarra').prop('disabled',true);
    $('#cboBarra').selectpicker('refresh');
    var Cadena = $('#cboCadena').val();
    var Tiendas = $('#cboTienda').val();
    var Semana = $('#cboSemana').val();
    var settings = {
        "url": '<?php echo urlApi; ?>getAllBarraXTiendaXRetail/' + Cadena + '/' + Tiendas + '/' + Semana + '',
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        console.log(response);
        debugger;
        var len = response.data.length;
        sessionStorage.setItem('ArrayBarra',len);
        $("#cboBarra").empty();
        //$("#cboBarra").append("<option value='0'>Seleccionar Todos</option>");
        for (var i = 0; i < len; i++) {
            $("#cboBarra").append("<option value=" + response.data[i].CodigoBarra + ">" + response.data[i].CodigoBarra + "-" + response.data[i].Descripcion.replace(/\s+/g, '') + "</option>");
        }
        $('#cboBarra').prop('disabled',false);
        $('#cboBarra').selectpicker('refresh');

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

function cargarCadena() {
    var settings = {
        "url": '<?php echo urlApi; ?>getRetailes',
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        console.log(response);
        //debugger;
        var len = response.data.length;
        $("#cboCadena").empty();
        for (var i = 0; i < len; i++) {
            $("#cboCadena").append("<option value='" + response.data[i].id_retail + "'>" + response.data[i]
                .retail + "</option>");
        }
        $('#cboCadena').selectpicker('refresh');

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

function cargarSemanasRec() {
    var settings = {
        "url": '<?php echo urlApi; ?>getSemanaAll',
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        var len = response.data.length;
        $("#cboSemana").empty();
        for (var i = 0; i < len; i++) {
            $("#cboSemana").append("<option value=" + response.data[i].IDSemana + ">" + response.data[i].Semana + "</option>");
        }
        $('#cboSemana').selectpicker('refresh');

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

function cargarTiendaXCadena() {
    //$("#cboTienda").empty();
    var Cadenas = $('#cboCadena').val();
    var settings = {
        "url": '<?php echo urlApi; ?>getTiendaXRetail/' + Cadenas + '',
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        console.log(response);
        //debugger;
        var len = response.data.length;
        $("#cboTienda").empty();
        for (var i = 0; i < len; i++) {
            $("#cboTienda").append("<option value='" + response.data[i].CodRetail + "'>" + response.data[i]
                .Tienda + "</option>");
        }
        $('#cboTienda').selectpicker('refresh');

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

function ValidarProcesoRec() {
    //
    //debugger;
    //
    var msg = message = "";
    var error = true;
    //
    var cmbCadena = $("#cboCadena").val();
    if (cmbCadena == null || cmbCadena == 0 || cmbCadena < 0) {
        msg += "Cadena" + ",";
        error = true;
    } else {
        error = false;
    }
    var cmbTienda = $("#cboTienda").val();
    //
    if (cmbTienda == null || cmbTienda == 0 || cmbTienda < 0 || cmbTienda == undefined) {
        msg += " Tienda" + ","
        error = true;
    } else {
        error = false;
    }
    var cmbSemana = $("#cboSemana").val();
    if (cmbSemana == null || cmbSemana == 0 || cmbSemana < 0) {
        msg += " Semana" + ",";
        error = true;
    } else {
        error = false;
    }

    var cmbBarra = $("#cboBarra").val();
    if (cmbBarra == null || cmbBarra == undefined || cmbBarra < 0 || cmbBarra.length==0) {
        msg += " Barra";
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
    $("#cargando").css("display", "block");
    //LimpiezaRec();
    SeleccionRec(cmbCadena, cmbTienda, cmbSemana, cmbBarra);
}

function SeleccionRec(cmbCadena, cmbTienda, cmbSemana, cmbBarra) {
    debugger;
    let arrayBarras=sessionStorage.getItem('ArrayBarra');
    if (arrayBarras==cmbBarra.length){
        cmbBarra="0";
    }
    Procesar(cmbCadena, cmbTienda, cmbSemana, cmbBarra);
}

function Procesar(cmbCadena, cmbTienda, cmbSemana, cmbBarra) {
    //
    const settings = {
        "url": '<?php echo urlApi; ?>ReporteBarraXTiendaXRetail/' + cmbCadena + '/' + cmbTienda + '/' + cmbSemana +
            '/' + cmbBarra,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        debugger;
        console.log(response.data);
        var dataInfoLength = response.data.length;
        //
        var $table = $('#tblBarcodexRetail');
        $table.bootstrapTable("destroy");
        //
        if (dataInfoLength == 0) {

            $("#download-xlsx").prop("disabled", true);
            $("#showTablaBarcodexRetail").css("display", "none");

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
                title: $("#cboRetailersRec option:selected").text().trim() +
                    ', Sin registro de Tiendas Faltantes',
            })
            return false;
        } else {

            $("#download-xlsx").prop("disabled", false);

            $('#tblBarcodexRetail').bootstrapTable({
                data: response.data
            });

            $table.bootstrapTable('refresh');

            $("#barcodexRetail").html("<i class='fas fa-barcode'></i>&nbsp;Còdigo Barras");

            $("#showTablaBarcodexRetail").css("display", "block");
            $("#showTiendasxRetail").css("display", "block");

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
            window.location = '/retailscannig/index.php';
        }
    }).always(function(jqXHR, textStatus) {
        $("#cargando").css("display", "none");
    });
}

function ValidarProcesoExcel() {
    //
    //debugger;
    //
    var msg = message = "";
    var error = true;
    //
    var cmbCadena = $("#cboCadena").val();
    if (cmbCadena == null || cmbCadena == 0 || cmbCadena < 0) {
        msg += "Cadena" + ",";
        error = true;
    } else {
        error = false;
    }
    var cmbTienda = $("#cboTienda").val();
    //
    if (cmbTienda == null || cmbTienda == 0 || cmbTienda < 0 || cmbTienda == undefined) {
        msg += " Tienda" + ","
        error = true;
    } else {
        error = false;
    }
    var cmbSemana = $("#cboSemana").val();
    if (cmbSemana == null || cmbSemana == 0 || cmbSemana < 0) {
        msg += " Semana" + ",";
        error = true;
    } else {
        error = false;
    }

    var cmbBarra = $("#cboBarra").val();
    if (cmbBarra == null || cmbBarra == 0 || cmbBarra < 0) {
        msg += " Barra";
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
    GenerarReporte(cmbCadena, cmbTienda, cmbSemana, cmbBarra)
}

function GenerarReporte(cmbCadena, cmbTienda, cmbSemana, cmbBarra) {
    debugger;
    let arrayBarras=sessionStorage.getItem('ArrayBarra');
    if (arrayBarras==cmbBarra.length){
        cmbBarra="0";
    }
   document.location.href = '<?php echo urlApi; ?>ReporteBarraXTiendaXRetail1/' + cmbCadena + '/' + cmbTienda + '/' +  cmbSemana + '/' + cmbBarra + '', '_blank';
    return false;
}


$("#download-xlsx").click(function(e) {
    debugger;
    $('#tblBarcodexRetail').tableExport({
        type: 'excel',
        excel: {
            fileFormat: 'xlsx'
        }
    });

});

function ProcesarExcel() {
    //debugger;
    var Cadena = $('#cboCadena').val();
    var Tiendas = $('#cboTienda').val();
    var Semana = $('#cboSemana').val();
    var Barra = $('#cboBarra').val();
    ValidarProcesoExcel();
    //$("#cargando").addClass('d-none');
}

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
            </script>