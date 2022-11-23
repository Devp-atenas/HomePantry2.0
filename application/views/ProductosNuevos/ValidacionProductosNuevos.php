            <!-- Colocar Include Header y Menu 27jul21 -->
            <?php $this->load->view('Plantillas/Header'); ?>

            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1><i class="fas fa-cart-plus"></i>&nbsp;Validación de Productos Nuevos:</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('Principal/dashboard') ?>">Inicio</a></li>
                                <li class="breadcrumb-item active"><a href="<?php echo base_url('Principal/logout') ?>">Salir</a></li>
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
                                        Productos Nuevos
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Maestro de Productos:</label>
                                                <button title="Crear Productos" type="submit" class="btn btn-block btn-sm btn-primary" onclick="MostrarModalMaestroProductos();"><i class="fas fa-plus"></i>&nbsp;CREAR PRODUCTO</button>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Seleccione C&oacute;digo de Barra:</label>
                                                <select class="form-control form-control-sm" title="Seleccionar codigo de Barra a Procesar" name="cboProductosPendientes" id="cboProductosPendientes" onchange="ProcesarCodigoBarras();" />
                                                <option value="0" selected disabled>-- Seleccione -- </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="row mt-3">
                                                <div class="col-md-12 mt-3">
                                                    <button class="btn btn-danger btn-sm  btn-block" onClick="Reset();" title="Borrar Filtros"><i class="fas fa-times-circle"></i>&nbsp;Borrar</button>
                                                </div>
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
                <div class="container-fluid text-center text-danger pt-3" id="cargarCombos" style="display:none;">
                    <span><img src="<?php echo base_url('dist/img/ajax-loader8.gif') ?>"><strong>&nbsp;&nbsp;Espere,&nbsp;buscando códigos de barras nuevos..!</strong></span>
                </div>
                <div class="container-fluid text-center text-danger pt-3" id="cargando" style="display:none;">
                    <span><img src="<?php echo base_url('dist/img/ajax-loader8.gif') ?>"><strong>&nbsp;&nbsp;Espere,&nbsp;procesando...!</strong></span>
                </div>
                <!-- /.cargando -->

                <div class="container-fluid" id="mainCodigoBarras" style="display:none;">

                    <div class="row">

                        <div class="col-md-12">

                            <div class="card card-primary card-outline">

                                <div class="card-header">

                                    <button id="download-xlsx" class="btn btn-primary btn-sm" title="Exportar a Excel">Excel</button>
                                    <button id="download-pdf" class="btn btn-secondary btn-sm" title="Exportar a PDF">Pdf</button>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                </div>

                                <div class="card-body">

                                    <div class="row">

                                        <div id="tblCodigoBarrasPendientes">
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
                <div class="modal fade" id="CrearProductos" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="myModalLabel" data-focus-on="input:first">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Large Modal</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <div class="form-group row" id="loader" style="display:none;">
                                    <span class="text-danger text-center">
                                        <img src="<?php echo base_url('dist/img/ajax_small.gif') ?>">&nbsp;Procesando,
                                        Espere....!</span>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label class="text-danger">C&oacute;digo de Barras:</label>
                                        <input type="text" class="form-control form-control-sm text-md-center text-danger font-weight-bold" id="codigoBarras" name="codigoBarras" placeholder="...." Readonly />
                                        <div class="error" id="codigobarErr"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="text-primary">Fecha de Alta:</label>
                                        <input type="text" class="form-control form-control-sm text-md-center text-danger font-weight-bold" id="fechaCreacion" name="fechaCreacion" placeholder="Fecha de Creacion" Readonly />
                                        <input type="hidden" class="form-control form-control-sm text-md-center text-danger font-weight-bold" id="fechaRegistro" name="fechaRegistro" placeholder="Fecha de Creacion" Readonly />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label class="text-primary">Seleccione Categoria:</label>
                                        <select class="form-control form-control-sm" name="cboCategoria" id="cboCategoria" onchange="llenarComboFabricantes();" required>
                                            <option value="" selected disabled>-- Seleccionar -- </option>
                                        </select>
                                        <div class="error" id="categoriaErr"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="text-primary">Seleccione Fabricante:</label>
                                        <select class="form-control form-control-sm" name="cboFabricante" id="cboFabricante" onchange="llenarComboMarca();" required>
                                            <option value="" selected disabled>-- Seleccionar -- </option>
                                        </select>
                                        <div class="error" id="fabricanteErr"></div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label class="text-primary">Seleccione Marca:</label>
                                        <select class="form-control form-control-sm" name="cboMarcas" id="cboMarcas" required>
                                            <option value="" selected disabled>-- Seleccionar -- </option>
                                        </select>
                                        <div class="error" id="marcaErr"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="text-primary">Seleccione Segmento:</label>
                                        <select class="form-control form-control-sm" name="cboSegmento" id="cboSegmento" required>
                                            <option value="" selected disabled>-- Seleccionar -- </option>
                                        </select>
                                        <div class="error" id="segmentoErr"></div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label class="text-primary">Seleccione Tamaño:</label>
                                        <select class="form-control form-control-sm" name="cboTamano" id="cboTamano" required>
                                            <option value="" selected disabled>-- Seleccionar -- </option>
                                        </select>
                                        <div class="error" id="tamanoErr"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="text-primary">Seleccione Rango:</label>
                                        <select class="form-control form-control-sm" name="cboRango" id="cboRango" required>
                                            <option value="" selected disabled>-- Seleccionar -- </option>
                                        </select>
                                        <div class="error" id="rangoErr"></div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label class="text-primary">Seleccione Unidad / Medida:</label>
                                        <select class="form-control form-control-sm" name="cboUnidadMedida" id="cboUnidadMedida" required>
                                            <option value="" selected disabled>-- Seleccionar -- </option>
                                        </select>
                                        <div class="error" id="unidadErr"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="text-primary">Atributo 1:</label>
                                        <select class="form-control form-control-sm" name="cboAtributo1" id="cboAtributo1" required>
                                            <option value="" selected disabled>-- Seleccionar -- </option>
                                        </select>
                                        <div class="error" id="atributoErr1"></div>
                                    </div>

                                </div>

                                <div class="form-group row">

                                    <div class="col-md-6">
                                        <label class="text-primary">Atributo 2:</label>
                                        <select class="form-control form-control-sm" name="cboAtributo2" id="cboAtributo2" required>
                                            <option value="" selected disabled>-- Seleccionar -- </option>
                                        </select>
                                        <div class="error" id="atributoErr2"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="text-primary">Atributo 3:</label>
                                        <select class="form-control form-control-sm" name="cboAtributo3" id="cboAtributo3" required>
                                            <option value="" selected disabled>-- Seleccionar -- </option>
                                        </select>
                                        <div class="error" id="atributoErr3"></div>
                                    </div>
                                </div>
                                <div class="form-group row">

                                    <div class="col-md-6">
                                        <label class="text-primary">Atributo 4:</label>
                                        <select class="form-control form-control-sm" name="cboAtributo4" id="cboAtributo4" required>
                                            <option value="" selected disabled>-- Seleccionar -- </option>
                                        </select>
                                        <div class="error" id="atributoErr4"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="text-primary">Atributo 5:</label>
                                        <select class="form-control form-control-sm" name="cboAtributo5" id="cboAtributo5" required>
                                            <option value="" selected disabled>-- Seleccionar -- </option>
                                        </select>
                                        <div class="error" id="atributoErr5"></div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label class="text-primary">Atributo 6:</label>
                                        <select class="form-control form-control-sm" name="cboAtributo6" id="cboAtributo6" required>
                                            <option value="" selected disabled>-- Seleccionar -- </option>
                                        </select>
                                        <div class="error" id="atributoErr6"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="text-primary">Atributo 7:</label>
                                        <select class="form-control form-control-sm" name="cboAtributo7" id="cboAtributo7" required>
                                            <option value="" selected disabled>-- Seleccionar -- </option>
                                        </select>
                                        <div class="error" id="atributoErr7"></div>
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <div class="col-md-12">
                                        <label class="text-primary">Descripci&oacute;n Producto:</label>
                                        <!--<textarea id="descripcionProducto" class="form-control form-control-sm" rows="4" placeholder="...." style="resize: none;"></textarea>-->
                                        <input type="text" class="form-control form-control-sm" id="descripcionProducto" placeholder="...." minlength="5" maxlength="100" required />
                                        <div class="error" id="productoErr"></div>
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label class="text-primary">Fragmentaci&oacute;n Producto:</label>
                                        <!--<textarea id="fragmentacion" class="form-control form-control-sm" rows="4" placeholder="...." style="resize: none;"></textarea>-->
                                        <input type="text" class="form-control form-control-sm" id="fragmentacion" placeholder="...." minlength="5" maxlength="50" />
                                        <div class="error" id="fragmentoErr"></div>
                                    </div>

                                </div>

                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-danger" data-dismiss="modal" title="Salir"><i class='fas fa-sign-out-alt'></i> Salir</button>
                                <button type="button" class="btn btn-primary" title="Grabar" onclick="CrearProductos();" id="btn-crearProd"><i class='fas fa-save'></i> Grabar</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->

                <!-- /.modal Enviarr Investigar -->
                <div class="modal fade" id="tiendasReportadas" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="myModalLabel" data-focus-on="input:first">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Large Modal</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <div class="form-group row">
                                    <div class="col-md-6">
                                    <label class="text-primary">C&oacute;digo de Barras:</label>
                                        <input type="text" class="form-control form-control-sm text-center"
                                            id="txtcodigoBarras" name="txtcodigoBarras" placeholder="...." Readonly />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="text-primary">Retail:</label>
                                        <input type="text" class="form-control form-control-sm" id="txtRetail"
                                            name="txtRetail" placeholder="...." Readonly />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label class="text-primary">Producto:</label>
                                        <input type="text" class="form-control form-control-sm" id="txtProducto"
                                            name="txtProducto" placeholder="...." Readonly />
                                    </div>
                                </div>
                                <div class="form-group row text-center">
                                    <button id="tiendasrep-xlsx" class="btn btn-primary btn-sm" title="Exportar a Excel">Excel</button>&nbsp;
                                    <button id="tiendasrep-pdf" class="btn btn-secondary btn-sm" title="Exportar a PDF">Pdf</button>
                                </div>
                                <div class="form-row">
                                    <div id="tbltiendasReportadas">
                                        <!-- Mostrar Datos Tabla -->
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-danger" data-dismiss="modal" title="Salir"><i class='fas fa-sign-out-alt'></i> Salir</button>
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
            <?php $this->load->view('Plantillas/Footer'); ?>
            <script src="<?php echo base_url('assets/constantes/url.js') ?>"></script>

            <script>
                $(document).ready(function() {
                    $(function() {
                        //debugger;
                        sessionStorage.clear();
                        url();
                        $("#cboProductosPendientes").prop("disabled", true);
                        cargarProductosPendientes();
                        //cargarCanal();
                    });
                });
            </script>

            <script>
                /***** productosnuevos.js - 21jul21 - 24jul21 *****/
                /*------------------------------------------------*/
                function Reset() {
                    //
                    $("#cboProductosPendientes").prop("selectedIndex", 0);
                    //$("#cboCanal").prop("selectedIndex", 0);
                    Limpieza();
                }
                //
                $("#cboProductosPendientes").change(function() {
                    $("#crear").prop("disabled", true);
                    Limpieza();
                    ProcesarCodigoBarras();
                });
                //
                function Limpieza() {
                    //
                    $("#mainCodigoBarras").css("display", "none");
                    $("#tblCodigoBarrasPendientes").css("display", "none");
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
                        url: sessionStorage.getItem("urlApi") +
                            "getAllRegistros_x_CodigoBarras_AllCanal",
                        method: "get",
                        headers: {
                            "Content-Type": "application/x-www-form-urlencoded",
                            Authorization: "Bearer " + localStorage.getItem("Token"),
                        },
                    };
                    $.ajax(settings).done(function(response) {
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
                        .fail(function(jqXHR, textStatus) {
                            if (jqXHR.status == 400) {
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: "top-end",
                                    showConfirmButton: false,
                                    timer: 8000,
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
                            timer: 8000,
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
                        url: sessionStorage.getItem("urlApi") +
                            "getValidarProductosNoExista/" +
                            idBarcode,
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
                        .fail(function(jqXHR, textStatus) {
                            if (jqXHR.status == 400) {
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: "top-end",
                                    showConfirmButton: false,
                                    timer: 8000,
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
                    today = yyyy + "-" + mm + "-" + dd;
                    $("#fechaRegistro").val(today);

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
                            timer: 8000,
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
                        url: sessionStorage.getItem("urlApi") +
                            "getAllRegistros_x_CodigoBarras_Seleccionado/" +
                            Barra,
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

                            //Generate Search print icon
                            var sendIcon = function(cell, formatterParams){ //plain text value
                                return "<i class='fa fa-paper-plane'></i>";
                            };

                            var table = new Tabulator("#tblCodigoBarrasPendientes", {
                                height: "400px",
                                layout: "fitColumns",
                                //layout: "fitDataStretch",
                                data: response.data,
                                pagination: "local", //paginate the data
                                paginationSize: 10, //allow 7 rows per page of data
                                movableColumns: true,
                                movableRows: true,
                                locale: true,
                                maxHeight:"100%",
                                placeholder:"No Hay Datos Disponibles",
                                columns: [

                                    {formatter:"rownum", align:"center", width:40, frozen:true},
                                    {
                                        formatter:sendIcon, width:40, align:"center", frozen:true, cellClick:function(e, cell){

                                            //alert("Investigando codigo : " + cell.getRow().getData().codigo+ "\nRetail: "+ cell.getRow().getData().retail )
                                            //
                                            let idRet = cell.getRow().getData().id;
                                            let idBar = cell.getRow().getData().codigo;
                                            var settings = {
                                                url: sessionStorage.getItem("urlApi") + "getAllTiendasReportadas_x_CodigoBarras_Seleccionado/" + idRet + "/" + idBar,
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
                                                    //table.clearData();
                                                    var tableTiendas = new Tabulator("#tbltiendasReportadas", {
                                                        height: "360px",
                                                        layout:"fitDataFill",
                                                        ///layout: "fitDataStretch",
                                                        data: response.data,
                                                        pagination: "local", //paginate the data
                                                        paginationSize: 10, //allow 7 rows per page of data
                                                        movableColumns: true,
                                                        locale: true,
                                                        //footerElement:"<button>Custom Button</button>",
                                                        maxHeight:"100%",
                                                        placeholder:"No Hay Datos Disponibles",
                                                        columns: [
                                                            {formatter:"rownum", align:"center", width:40},
                                                            {
                                                                title: "Tienda",
                                                                field: "tienda"
                                                            },
                                                            {
                                                                title: "Dirección",
                                                                field: "direccion"
                                                            },
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
                                                            },
                                                        },
                                                    });

                                                    tableTiendas.setLocale("es-ar"); //set locale to french
                                                    // trigger download of data.xlsx file
                                                    document
                                                        .getElementById("tiendasrep-xlsx")
                                                        .addEventListener("click", function() {
                                                            tableTiendas.download("xlsx", "tiendasReportadas.xlsx", {
                                                                sheetName: "Resultados",
                                                            });
                                                        });

                                                    // trigger download of data.pdf file
                                                    document
                                                        .getElementById("tiendasrep-pdf")
                                                        .addEventListener("click", function() {
                                                            tableTiendas.download("pdf", "tiendasReportadas.pdf", {
                                                                orientation: "portrait", //set page orientation to portrait
                                                                title: "Listado de Tiendas Reportadas", //add title to report
                                                            });
                                                        });
                                                    //
                                                    tableTiendas.redraw(true);

                                                    $("#tiendasReportadas").modal("show");
                                                    $(".modal-title").html(
                                                        "<i class='fas fa-store'></i>&nbsp;Tiendas que Reportan"
                                                    );
                                                    $("#txtcodigoBarras").val(cell.getRow().getData().codigo);
                                                    $("#txtProducto").val(cell.getRow().getData().descripcion);
                                                    $("#txtRetail").val(cell.getRow().getData().retail);
                                                })
                                                .fail(function(jqXHR, textStatus) {
                                                    if (jqXHR.status == 400) {
                                                        const Toast = Swal.mixin({
                                                            toast: true,
                                                            position: "top-end",
                                                            showConfirmButton: false,
                                                            timer: 8000,
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
                                                    //$("#cboProductosPendientes").prop("disabled", false);
                                                });
                                                /* */
                                        }
                                    },
                                    {
                                        title: "Código",
                                        field: "codigo"
                                    },
                                    {
                                        title: "Retail",
                                        field: "retail"
                                    },
                                    {
                                        title: "Descripción",
                                        field: "descripcion"
                                    },
                                    {
                                        title: "Total",
                                        field: "total",
                                        hozAlign: "center"
                                    },
                                    {
                                        title: "id",
                                        field: "id",
                                        hozAlign: "center"
                                    },
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
                                /*
                                rowClick: function(e, row) {
                                    //e - the click event object
                                    var data = row.getData(); //get row data
                                    $("#tiendasReportadas").modal("show");
                                    $(".modal-title").html(
                                        "<i class='fas fa-store'></i>&nbsp;Tiendas que Reportan"
                                    );
                                    $("#txtcodigoBarras").val(data.codigo);
                                    $("#txtProducto").val(data.descripcion);
                                    $("#txtRetail").val(data.retail);
                                },
                                */
                                //
                            });

                            table.setLocale("es-ar"); //set locale to french
                            table.hideColumn("id");
                            table.redraw(true);

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
                            $("#mainCodigoBarras").css("display", "block");
                            $("#crear").prop("disabled", false);
                        })
                        .fail(function(jqXHR, textStatus) {
                            if (jqXHR.status == 400) {
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: "top-end",
                                    showConfirmButton: false,
                                    timer: 8000,
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
                            $("#cboProductosPendientes").prop("disabled", false);
                        });
                }
            </script>

            <script>
                // CRUDV01.JS - 24jul21 -  //
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
                    $("#fechaRegistro").html("");
                    $("#descripcionProducto").html("");
                    $("#fragmentacion").html("");
                    $("#cboAtributo1").find("option:not(:first)").remove();
                    $("#cboAtributo2").find("option:not(:first)").remove();
                    $("#cboAtributo3").find("option:not(:first)").remove();
                    $("#cboAtributo4").find("option:not(:first)").remove();
                    $("#cboAtributo5").find("option:not(:first)").remove();
                    $("#cboAtributo6").find("option:not(:first)").remove();
                    $("#cboAtributo7").find("option:not(:first)").remove();
                }
                //
                function validarCreacionProductos() {
                    //
                    //debugger;
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
                function CrearProductos() {
                    // Crear Producto
                    // debugger;
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
                                //
                                var settings = {
                                    async: true,
                                    crossDomain: true,
                                    url: sessionStorage.getItem("urlApi") + "addProductoNuevo",
                                    method: "POST",
                                    headers: {
                                        "Content-Type": "application/x-www-form-urlencoded",
                                        Authorization: "Bearer " + localStorage.getItem("Token"),
                                    },
                                    data: {
                                        barcode     : $("#codigoBarras").val().trim(),
                                        categoria   : $("#cboCategoria option:selected" ).attr('value'),
                                        fabricante  : $("#cboFabricante option:selected" ).attr('value'),
                                        marca       : $("#cboMarcas option:selected" ).attr('value'),
                                        segmento    : $("#cboSegmento option:selected" ).attr('value'),
                                        tamano      : $("#cboTamano option:selected" ).attr('value'),
                                        rango       : $("#cboRango option:selected" ).attr('value'),
                                        unidad      : $("#cboUnidadMedida option:selected" ).attr('value'),
                                        fecha       : $("#fechaRegistro").val(),
                                        descProducto: $("#descripcionProducto").val().trim(),
                                        fragmento   : $("#fragmentacion").val().trim(),
                                        activo      : 1,
                                        pendiente   : 1,
                                        atributo1   : $("#cboAtributo1 option:selected" ).attr('value'),
                                        atributo2   : $("#cboAtributo2 option:selected" ).attr('value'),
                                        atributo3   : $("#cboAtributo3 option:selected" ).attr('value'),
                                        atributo4   : $("#cboAtributo4 option:selected" ).attr('value'),
                                        atributo5   : $("#cboAtributo5 option:selected" ).attr('value'),
                                        atributo6   : $("#cboAtributo6 option:selected" ).attr('value'),
                                        atributo7   : $("#cboAtributo7 option:selected" ).attr('value'),
                                    },
                                };
                                $.ajax(settings)
                                    .done(function(response) {
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
                                            icon: "success",
                                            title: response.message,
                                            confirmButtonText: `Ok`,
                                        });
                                        //ok proceso
                                        Limpieza();

                                    })
                                    .fail(function(jqXHR, textStatus) {
                                        if (jqXHR.status == 400) {
                                            const Toast = Swal.mixin({
                                                toast: true,
                                                position: "top-end",
                                                showConfirmButton: false,
                                                timer: 8000,
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
                                            window.location = "/homepantry20/index.php";
                                        }
                                    })
                                    .always(function(jqXHR, textStatus) {
                                        Reset_FormCrearProductos();
                                        $("#CrearProductos").modal("hide");
                                        $("#loader").css("display", "none");
                                    });
                            }
                        });
                    }
                }
                //
            </script>

            <script>
                //
                // llenarcombos.JS - 24jul21 - 28jul21 \\

                function llenarComboCategoria() {
                    //
                    //debugger;
                    $("#cboCategoria").prop("disabled", true);
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
                        .done(function(response) {
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
                        .fail(function(jqXHR, textStatus) {
                            if (jqXHR.status == 400) {
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: "top-end",
                                    showConfirmButton: false,
                                    timer: 8000,
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
                }
                //
                function llenarComboFabricantes() {
                    //
                    //debugger;
                    //$("#loader").css("display", "block");
                    var idCat = $("#cboCategoria").val();
                    if (idCat == null || idCat == 0) {
                        $("#cboCategoria").focus();
                        return false;
                    }
                    //
                    var settings = {
                        url: sessionStorage.getItem("urlApi") + "getAllFabricantes_x_Categoria/" + idCat,
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
                            llenarComboSegmento();
                            llenarComboAtributo1();
                            //$("#loader").css("display", "none");
                            //
                        })
                        .fail(function(jqXHR, textStatus) {
                            if (jqXHR.status == 400) {
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: "top-end",
                                    showConfirmButton: false,
                                    timer: 8000,
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
                    //
                }
                //
                function llenarComboMarca() {
                    //
                    //debugger;
                    //$("#loader").css("display", "block");
                    var idCat = $("#cboCategoria").val();
                    if (idCat == null || idCat == 0) {
                        $("#cboCategoria").focus();
                        return false;
                    }
                    var idFab = $("#cboFabricante").val();
                    if (idFab == null || idCat == 0) {
                        $("#cboFabricante").focus();
                        return false;
                    }
                    //
                    var settings = {
                        url: sessionStorage.getItem("urlApi") + "getAllMarca_x_Categoria_x_Fabricante/" + idCat + "/" + idFab,
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
                            //$("#loader").css("display", "none");
                            //
                        })
                        .fail(function(jqXHR, textStatus) {
                            if (jqXHR.status == 400) {
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: "top-end",
                                    showConfirmButton: false,
                                    timer: 8000,
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
                    //
                }
                //
                function llenarComboSegmento() {
                    //
                    //debugger;
                    //$("#loader").css("display", "block");
                    var idCat = $("#cboCategoria").val();
                    if (idCat == null || idCat == 0) {
                        $("#cboCategoria").focus();
                        return false;
                    }
                    //
                    var settings = {
                        url: sessionStorage.getItem("urlApi") + "getAllSegmento_x_Categoria/" + idCat,
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
                        .fail(function(jqXHR, textStatus) {
                            if (jqXHR.status == 400) {
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: "top-end",
                                    showConfirmButton: false,
                                    timer: 8000,
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
                    //
                }
                //
                function llenarComboTamano() {
                    //
                    //debugger;
                    $("#loader").css("display", "block");
                    var idCat = $("#cboCategoria").val();
                    if (idCat == null || idCat == 0) {
                        $("#cboCategoria").focus();
                        return false;
                    }
                    //
                    var settings = {
                        url: sessionStorage.getItem("urlApi") + "getAllTamano_x_Categoria/" + idCat,
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
                        .fail(function(jqXHR, textStatus) {
                            if (jqXHR.status == 400) {
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: "top-end",
                                    showConfirmButton: false,
                                    timer: 8000,
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
                    //
                }
                //
                function llenarComboRango() {
                    //
                    //debugger;
                    $("#loader").css("display", "block");
                    var idCat = $("#cboCategoria").val();
                    if (idCat == null || idCat == 0) {
                        $("#cboCategoria").focus();
                        return false;
                    }
                    //
                    var settings = {
                        url: sessionStorage.getItem("urlApi") + "getAllRango_x_Categoria/" + idCat,
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
                        .fail(function(jqXHR, textStatus) {
                            if (jqXHR.status == 400) {
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: "top-end",
                                    showConfirmButton: false,
                                    timer: 8000,
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
                    //
                }
                //
                function llenarComboUnidadMedida() {
                    //
                    //debugger;
                    $("#loader").css("display", "block");
                    var idCat = $("#cboCategoria").val();
                    if (idCat == null || idCat == 0) {
                        $("#cboCategoria").focus();
                        return false;
                    }
                    //
                    var settings = {
                        url: sessionStorage.getItem("urlApi") + "getAllUnidadMed_x_Categoria/" + idCat,
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
                        .fail(function(jqXHR, textStatus) {
                            if (jqXHR.status == 400) {
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: "top-end",
                                    showConfirmButton: false,
                                    timer: 8000,
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
                    //
                }
                //
                function llenarComboAtributo1() {
                    //
                    //debugger;
                    //$("#loader").css("display", "block");
                    var idCat = $("#cboCategoria").val();
                    if (idCat == null || idCat == 0) {
                        $("#cboCategoria").focus();
                        return false;
                    }
                    //
                    var settings = {
                        url: sessionStorage.getItem("urlApi") + "getAllAtributo1/" + idCat,
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
                            let select = $("#cboAtributo1");
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
                            $("#cboAtributo1").prop("disabled", false);
                            $("#cboAtributo1").prop("selectedIndex", 0);
                            llenarComboAtributo2();
                            $("#loader").css("display", "none");
                            //
                        })
                        .fail(function(jqXHR, textStatus) {
                            if (jqXHR.status == 400) {
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: "top-end",
                                    showConfirmButton: false,
                                    timer: 8000,
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
                    //
                }
                //
                function llenarComboAtributo2() {
                    //
                    //debugger;
                    //$("#loader").css("display", "block");
                    var idCat = $("#cboCategoria").val();
                    if (idCat == null || idCat == 0) {
                        $("#cboCategoria").focus();
                        return false;
                    }
                    //
                    var settings = {
                        url: sessionStorage.getItem("urlApi") + "getAllAtributo2/" + idCat,
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
                            let select = $("#cboAtributo2");
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
                            $("#cboAtributo2").prop("disabled", false);
                            $("#cboAtributo2").prop("selectedIndex", 0);
                            llenarComboAtributo3();
                            $("#loader").css("display", "none");
                            //
                        })
                        .fail(function(jqXHR, textStatus) {
                            if (jqXHR.status == 400) {
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: "top-end",
                                    showConfirmButton: false,
                                    timer: 8000,
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
                    //
                }
                //
                function llenarComboAtributo3() {
                    //
                    //debugger;
                    //$("#loader").css("display", "block");
                    var idCat = $("#cboCategoria").val();
                    if (idCat == null || idCat == 0) {
                        $("#cboCategoria").focus();
                        return false;
                    }
                    //
                    var settings = {
                        url: sessionStorage.getItem("urlApi") + "getAllAtributo3/" + idCat,
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
                            let select = $("#cboAtributo3");
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
                            $("#cboAtributo3").prop("disabled", false);
                            $("#cboAtributo3").prop("selectedIndex", 0);
                            llenarComboAtributo4();
                            $("#loader").css("display", "none");
                            //
                        })
                        .fail(function(jqXHR, textStatus) {
                            if (jqXHR.status == 400) {
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: "top-end",
                                    showConfirmButton: false,
                                    timer: 8000,
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
                    //
                }
                //
                function llenarComboAtributo4() {
                    //
                    //debugger;
                    //$("#loader").css("display", "block");
                    var idCat = $("#cboCategoria").val();
                    if (idCat == null || idCat == 0) {
                        $("#cboCategoria").focus();
                        return false;
                    }
                    //
                    var settings = {
                        url: sessionStorage.getItem("urlApi") + "getAllAtributo4/" + idCat,
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
                            let select = $("#cboAtributo4");
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
                            $("#cboAtributo4").prop("disabled", false);
                            $("#cboAtributo4").prop("selectedIndex", 0);
                            llenarComboAtributo5();
                            $("#loader").css("display", "none");
                            //
                        })
                        .fail(function(jqXHR, textStatus) {
                            if (jqXHR.status == 400) {
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: "top-end",
                                    showConfirmButton: false,
                                    timer: 8000,
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
                    //
                }
                //
                function llenarComboAtributo5() {
                    //
                    //debugger;
                    //$("#loader").css("display", "block");
                    var idCat = $("#cboCategoria").val();
                    if (idCat == null || idCat == 0) {
                        $("#cboCategoria").focus();
                        return false;
                    }
                    //
                    var settings = {
                        url: sessionStorage.getItem("urlApi") + "getAllAtributo5/" + idCat,
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
                            let select = $("#cboAtributo5");
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
                            $("#cboAtributo5").prop("disabled", false);
                            $("#cboAtributo5").prop("selectedIndex", 0);
                            llenarComboAtributo6();
                            $("#loader").css("display", "none");
                            //
                        })
                        .fail(function(jqXHR, textStatus) {
                            if (jqXHR.status == 400) {
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: "top-end",
                                    showConfirmButton: false,
                                    timer: 8000,
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
                    //
                }
                //
                function llenarComboAtributo6() {
                    //
                    //debugger;
                    //$("#loader").css("display", "block");
                    var idCat = $("#cboCategoria").val();
                    if (idCat == null || idCat == 0) {
                        $("#cboCategoria").focus();
                        return false;
                    }
                    //
                    var settings = {
                        url: sessionStorage.getItem("urlApi") + "getAllAtributo6/" + idCat,
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
                            let select = $("#cboAtributo6");
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
                            $("#cboAtributo6").prop("disabled", false);
                            $("#cboAtributo6").prop("selectedIndex", 0);
                            llenarComboAtributo7();
                            $("#loader").css("display", "none");
                            //
                        })
                        .fail(function(jqXHR, textStatus) {
                            if (jqXHR.status == 400) {
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: "top-end",
                                    showConfirmButton: false,
                                    timer: 8000,
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
                    //
                }
                //
                function llenarComboAtributo7() {
                    //
                    //debugger;
                    //$("#loader").css("display", "block");
                    var idCat = $("#cboCategoria").val();
                    if (idCat == null || idCat == 0) {
                        $("#cboCategoria").focus();
                        return false;
                    }
                    //
                    var settings = {
                        url: sessionStorage.getItem("urlApi") + "getAllAtributo7/" + idCat,
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
                            let select = $("#cboAtributo7");
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
                            $("#cboAtributo7").prop("disabled", false);
                            $("#cboAtributo7").prop("selectedIndex", 0);
                            $("#loader").css("display", "none");
                            //
                        })
                        .fail(function(jqXHR, textStatus) {
                            if (jqXHR.status == 400) {
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: "top-end",
                                    showConfirmButton: false,
                                    timer: 8000,
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
                    //
                }
                //
            </script>