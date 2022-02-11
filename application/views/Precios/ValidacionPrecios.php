            <!-- Colocar Include Header y Menu -->
            <?php $this->load->view('Plantillas/Header');?>

            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1><i class="fas fa-money-bill-alt"></i>&nbsp;Validación de Precios:</h1>
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

            <!-- Content Wrapper. Contains page content -->

            <!-- Main content -->
            <section class="content">

                <div class="container-fluid">

                    <div class="row">

                        <div class="col-md-12">

                            <div class="card card-primary card-outline">

                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-edit"></i>
                                        Precios
                                    </h3>
                                </div>

                                <div class="card-body">

                                    <div class="form-group row">

                                        <div class="col-md-3">
                                            <label><i class="fas fa-calendar-week"></i>&nbsp;Semanas:</label>
                                            <div class="form-group">
                                                <select class="form-control form-control-sm" id="cboSemanas"
                                                    name="cboSemanas">
                                                    <option> - - Seleccione - - </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">

                                            <div class="row mt-2">
                                                <div class="col-md-6 mt-3">
                                                    <button class="btn btn-danger btn-sm form-control btn-block"
                                                        onClick="Reset();" title="Borrar Filtros"><i
                                                            class="fas fa-times-circle"></i>&nbsp;Borrar</button>
                                                </div>
                                                <!--
                                                <div class="col-md-6 mt-3">
                                                    <button id="btnProcesar"
                                                        class="btn btn-success form-control btn-sm btn-block"
                                                        type="submit" onClick="ProcesarSemana();"
                                                        title="Procesar Solicitud"><i
                                                            class="fas fa-check"></i>&nbsp;Procesar</button>
                                                </div>
                                                -->
                                            </div>

                                        </div>

                                    </div>

                                </div>
                                <!-- /.card -->

                            </div>


                        </div>

                    </div>
                    <!-- ./row -->

                </div><!-- /.container-fluid -->

                <!-- .cargando -->
                <div class="container-fluid text-center text-danger pt-3" id="cargando" style="display:none;">
                    <span><img src="<?php echo base_url('dist/img/ajax-loader8.gif') ?>"><strong>&nbsp;&nbsp;Espere...,
                            procesando!</strong></span>
                </div>
                <!-- /.cargando -->

                <div class="container-fluid" id="mainPreciosRaros" style="display:none;">

                    <div class="row">
                        <div class="col-md-12">

                            <div class="card card-primary card-outline">

                                <div class="card-header">

                                    <!--<h6 class="card-title text-primary" id="showCodigoBarras"></h6>-->

                                    <button id="download-xlsx" class="btn btn-primary btn-sm"
                                        title="Exportar a Excel"><i class="fas fa-file-excel"></i></button>
                                    <button id="download-pdf" class="btn btn-secondary btn-sm" title="Exportar a PDF"><i
                                            class="fas fa-file-pdf"></i></button>

                                    <span class="badge bg-warning" id="totalRegistros"></span>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                </div>

                                <div class="card-body">

                                    <div class="row">

                                        <div id="tblPreciosRaros">
                                            <!-- Mostrar Datos Tabla -->
                                        </div>

                                    </div>
                                    <!-- /.row -->
                                </div>

                            </div>
                            <!-- /.card -->

                        </div>

                    </div>

                </div>

                <!-- /.container-fluid -->

                <!-- /.modal CrearProducto -->
                <div class="modal fade" id="ModificarPrecios" data-backdrop="static" data-keyboard="false" role="dialog"
                    aria-labelledby="myModalLabel" data-focus-on="input:first">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Large Modal</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <div class="form-group row" style="display:none;">
                                    <div class="col-md-12">
                                        <label class="text-danger">id Registro:</label>
                                        <input type="text" class="form-control form-control-sm text-center"
                                            id="idRegistro" name="idRegistro" placeholder="...." Readonly />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label class="text-danger">C&oacute;digo de Barras:</label>
                                        <input type="text" class="form-control form-control-sm text-center"
                                            id="codigoBarras" name="codigoBarras" placeholder="...." Readonly />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label class="text-danger">Categoria:</label>
                                        <input type="text" class="form-control form-control-sm" id="txtCategoria"
                                            name="txtCategoria" placeholder="...." Readonly />

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label class="text-danger">Producto:</label>
                                        <input type="text" class="form-control form-control-sm" id="txtProducto"
                                            name="txtProducto" placeholder="...." Readonly />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label class="text-danger">Precio actual:</label>
                                        <input type="text" class="form-control form-control-sm text-right"
                                            id="txtPrecioActual" name="txtPrecioActual" placeholder="...." Readonly />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label class="text-primary">Precio del Producto:</label>
                                        <input type="text" class="form-control form-control-sm text-right"
                                            id="PrecioProducto" placeholder="...." required />
                                        <div class="error" id="productoErr"></div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-danger" data-dismiss="modal" title="Salir"><i
                                        class='fas fa-sign-out-alt'></i> Salir</button>
                                <button type="button" class="btn btn-primary" title="Grabar" onclick="CrearProductos();"
                                    id="btn-crearProd"><i class='fas fa-save'></i> Grabar</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->

            </section>
            <!-- /.content -->

            <!-- Windows Modal Visualizar Registros-->
            <?php $this->load->view('Plantillas/Footer');?>
            <script src="<?php echo base_url('assets/constantes/url.js') ?>"></script>
            <script src="<?php echo base_url('assets/validacion/precios/validacionprecios.js') ?>"></script>

            <script>
$(document).ready(function() {
    $(function() {
        //debugger;
        sessionStorage.clear();
        url();
        $("#cboSemanas").prop("disabled", true);
        cargarSemanas();
    });
});
            </script>
            <script>
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
$("#cboSemanas").change(function() {
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
        .done(function(response) {
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
        .fail(function(jqXHR, textStatus) {
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
                window.location = "/homepantry20/index.php";
            }
        })
        .always(function(jqXHR, textStatus) {
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
        url: sessionStorage.getItem("urlApi") +
            "insertAllPreciosRaros_x_Semana/" +
            idSemana,
        method: "get",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
            Authorization: "Bearer " + localStorage.getItem("Token"),
        },
    };
    $.ajax(settings)
        .done(function(response) {
            //console.log(response);
            //debugger;
            MostrarPreciosRarosSemana();
        })
        .fail(function(jqXHR, textStatus) {
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
                window.location = "/homepantry20/index.php";
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
        url: sessionStorage.getItem("urlApi") +
            "getAllPreciosRaros_x_Semana/" +
            idSemana,
        method: "get",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
            Authorization: "Bearer " + localStorage.getItem("Token"),
        },
    };
    $.ajax(settings)
        .done(function(response) {
            console.log(response);
            //debugger;	
            /** */

            $("#totalRegistros").html("Total Registros: " + response.data.length);

            var table = new Tabulator("#tblPreciosRaros", {
                height: "450px",
                //layout: "fitColumns",
                //layout:"fitDataFill",
                layout: "fitDataStretch",
                data: response.data,
                pagination: "local", //paginate the data
                paginationSize: 25, //allow 7 rows per page of data						
                paginationSizeSelector: [25, 50, 75, 100, 500],
                movableColumns: true,
                //groupBy:"Retail",	25252550
                movableRows: true,
                locale: true,
                columns: [{
                        title: "ID",
                        field: "Id_DataUnida"
                    },
                    {
                        title: "Retail",
                        field: "Retail"
                    },
                    {
                        title: "Tienda",
                        field: "Tienda"
                    },
                    {
                        title: "Barra",
                        field: "CodigoBarra"
                    },
                    {
                        title: "Categoria",
                        field: "Categoria"
                    },
                    {
                        title: "Producto",
                        field: "Producto"
                    },
                    {
                        title: "Precio",
                        field: "Precio",
                        formatter: "money",
                        hozAlign: "right"
                    },
                    {
                        title: "Precio Prom",
                        field: "PrecioProm",
                        formatter: "money",
                        hozAlign: "right"
                    },
                    {
                        title: "% Mìn",
                        field: "Min_Porcentaje",
                        hozAlign: "center"
                    },
                    {
                        title: "% Màx",
                        field: "Max_Porcentaje",
                        hozAlign: "center"
                    },
                    {
                        title: "Precio Min",
                        field: "PreciMin",
                        formatter: "money",
                        hozAlign: "right"
                    },
                    {
                        title: "Precio Màx",
                        field: "PreciMax",
                        formatter: "money",
                        hozAlign: "right"
                    },
                ],
                langs: {
                    "es-ar": {
                        pagination: {
                            page_size: "Mostrar: ", //label for the page size select element
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
                rowClick: function(e, row) {
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
                    $("#txtPrecioActual").val(Number(data.Precio).toLocaleString("es-ES", {
                        minimumFractionDigits: 2
                    }));
                    //alert(data.CodigoBarra);
                },

                //
            });

            table.setLocale("es-ar"); //set locale to french

            // trigger download of data.xlsx file
            document
                .getElementById("download-xlsx")
                .addEventListener("click", function() {
                    table.download("xlsx", "ListadoProductosNuevos.xlsx", {
                        sheetName: "Resultados",
                    });
                });

            // trigger download of data.pdf file
            document
                .getElementById("download-pdf")
                .addEventListener("click", function() {
                    table.download("pdf", "data.pdf", {
                        orientation: "portrait", //set page orientation to portrait
                        title: "Listado de Productos Nuevos", //add title to report
                    });
                });
            $("#mainPreciosRaros").css("display", "block");
            /***/
        })
        .fail(function(jqXHR, textStatus) {
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
                window.location = "/homepantry20/index.php";
            }
        })
        .always(function(jqXHR, textStatus) {
            $("#cargando").css("display", "none");
            $("#cboSemanas").prop("disabled", false);
        });
}
            </script>