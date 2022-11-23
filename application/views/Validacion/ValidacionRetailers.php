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
                                                        class="fas fa-store"></i>&nbsp;Recepción
                                                    Data</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-procesamiento-tab"
                                                    data-toggle="pill" href="#custom-tabs-procesamiento" role="tab"
                                                    aria-controls="custom-tabs-procesamiento" aria-selected="false"><i
                                                        class="fas fa-database"></i>&nbsp;Procesamiento Data</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill"
                                                    href="#custom-tabs-one-messages" role="tab"
                                                    aria-controls="custom-tabs-one-messages" aria-selected="false"><i
                                                        class="fas fa-tachometer-alt"></i>&nbsp;Indicadores
                                                    Recepción</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill"
                                                    href="#custom-tabs-one-settings" role="tab"
                                                    aria-controls="custom-tabs-one-settings" aria-selected="false"><i
                                                        class="fas fa-cubes"></i>&nbsp;Módulo TAR</a>
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
                                                    <div class=" col-md-2">
                                                        <label class="col-sm-5 col-form-label col-form-label-sm"><i
                                                                class="fas fa-folder-open"></i>&nbsp;Archivos:</label>
                                                        <div class="col-sm-7">
                                                            <select class="form-control form-control-sm"
                                                                id="cboOpcionesRec" name="cboOpcionesRec"
                                                                style="width:auto;">
                                                                <option selected> - - Seleccione - - </option>
                                                                <option value="faltantes">Tiendas Faltantes</option>
                                                                <option value="nuevas">Tiendas Nuevas</option>
                                                                <option value="tamano">Tamaño Archivos</option>
                                                                <option value="registro">Cantidad de Registros</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class=" col-md-3">
                                                        <label class="col-sm-4 col-form-label col-form-label-sm"><i
                                                                class="fas fa-industry"></i>&nbsp;Retailer:</label>
                                                        <div class="col-sm-8">
                                                            <select class="form-control form-control-sm"
                                                                name="cboRetailersRec" id="cboRetailersRec"
                                                                style="width:auto;">
                                                                <option> - - Seleccione - - </option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label class="col-sm-4 col-form-label col-form-label-sm"><i
                                                                class="fas fa-calendar-week"></i>&nbsp;Semanas:</label>
                                                        <div class="col-sm-8">
                                                            <select class="form-control form-control-sm"
                                                                id="cboSemanasRec" name="cboSemanasRec"
                                                                style="width:auto;">
                                                                <option> - - Seleccione - - </option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-row">
                                                            <div class="col-md-6 col-auto">
                                                                <label for="minimo"><i
                                                                        class="fas fa-minus-circle"></i>&nbsp;Mìnimo</label>
                                                                <input type="number"
                                                                    class="form-control form-control-sm text-center"
                                                                    id="minimoRec" placeholder="Min" step="1" min="1"
                                                                    max="100" value="30" required
                                                                    style="width: 75px !important;" />
                                                            </div>
                                                            <div class="col-md-6 col-auto">
                                                                <label for="maximo"><i
                                                                        class="fas fa-plus-circle"></i>&nbsp;Màximo</label>
                                                                <input type="number"
                                                                    class="form-control form-control-sm text-center"
                                                                    id="maximoRec" placeholder="Max" step="1" min="1"
                                                                    max="100" value="30" required
                                                                    style="width: 75px !important;" />
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-2">

                                                        <div class="row mt-2">
                                                            <div class="col-md-6 mt-3">
                                                                <button class="btn btn-danger form-control btn-block"
                                                                    onClick="ResetRec();" title="Borrar Filtros"><i
                                                                        class="fas fa-times-circle"></i>&nbsp;Borrar</button>
                                                            </div>
                                                            <div class="col-md-6 mt-3">
                                                                <button id="btnProcesar"
                                                                    class="btn btn-success form-control btn-block"
                                                                    type="submit" onClick="ValidarProcesoRec();"
                                                                    title="Procesar Solicitud"><i
                                                                        class="fas fa-check"></i>&nbsp;Procesar</button>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                                <hr>

                                                <!-- Resultados Tamaño y Cantidad Registros-->
                                                <div class="form-group row" id="ShowDivArchivos" style="display:none;">
                                                    <div class="col-md-12">

                                                        <div class="card">

                                                            <div class="card-header">

                                                                <h6 class="card-title text-primary"
                                                                    id="ShowMsgArchivos">
                                                                </h6>

                                                                <div class="card-tools">
                                                                    <button type="button" class="btn btn-tool"
                                                                        data-card-widget="collapse">
                                                                        <i class="fas fa-minus"></i>
                                                                    </button>
                                                                </div>

                                                            </div>
                                                            <!-- /.card-header -->
                                                            <div class="card-body">

                                                                <div class="row">

                                                                    <div class="table-responsive">

                                                                        <div id="jsonTableRec">

                                                                            <table
                                                                                class="table table-bordered table-hover table-sm">

                                                                                <thead class="bg-info text-center">
                                                                                    <tr>
                                                                                        <th>#</th>
                                                                                        <th>Tienda</th>
                                                                                        <th id="T0rec">Actual</th>
                                                                                        <th>Promedio</th>
                                                                                        <th>% Variación</th>
                                                                                        <th id="T1rec">T-1</th>
                                                                                        <th id="T2rec">T-2</th>
                                                                                        <th id="T3rec">T-3</th>
                                                                                        <th id="T4rec">T-4</th>
                                                                                    </tr>
                                                                                </thead>

                                                                                <tbody id="tablaJsonRec">
                                                                                    <!-- Resultados ACV -->
                                                                                </tbody>

                                                                            </table>

                                                                        </div>

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

                                                <!-- Resultados Tiendas Faltantes -->
                                                <div class="form-group row" id="showTiendasFaltantes"
                                                    style="display:none;">

                                                    <div class="col-md-12">

                                                        <div class="card">

                                                            <div class="card-header">

                                                                <h5 class="card-title" id="tiendasFaltantes"></h5>

                                                                <div class="card-tools">
                                                                    <button type="button" class="btn btn-tool"
                                                                        data-card-widget="collapse">
                                                                        <i class="fas fa-minus"></i>
                                                                    </button>
                                                                </div>

                                                            </div>
                                                            <!-- /.card-header -->
                                                            <div class="card-body">

                                                                <div class="row">

                                                                    <div class="table-responsive" id="showTabla">
                                                                        <!-- Mostrar Datos Tabla -->
                                                                        <table
                                                                            class="table table-light table-sm table-hover table-bordered"
                                                                            id="tiendaFaltante">
                                                                            <thead class="thead-light">
                                                                                <tr>
                                                                                    <th data-field="codigo">
                                                                                        <span>
                                                                                            Código
                                                                                        </span>
                                                                                    </th>
                                                                                    <th data-field="tienda">
                                                                                        <span>
                                                                                            Tienda
                                                                                        </span>
                                                                                    </th>
                                                                                    <th data-field="retail">
                                                                                        <span>
                                                                                            Retail
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
                                                    <!-- /.col -md-12 -->

                                                </div>
                                                <!-- /.row -->

                                                <!-- Resultados Tiendas Nuevas -->
                                                <div class="form-group row" id="showTiendasNuevas"
                                                    style="display:none;">

                                                    <div class="col-md-12">

                                                        <div class="card">

                                                            <div class="card-header">

                                                                <h5 class="card-title" id="tiendasNuevas"></h5>

                                                                <div class="card-tools">
                                                                    <button type="button" class="btn btn-tool"
                                                                        data-card-widget="collapse">
                                                                        <i class="fas fa-minus"></i>
                                                                    </button>
                                                                </div>

                                                            </div>
                                                            <!-- /.card-header -->
                                                            <div class="card-body">

                                                                <div class="row">

                                                                    <div class="table-responsive" id="showTablaNueva">
                                                                        <!-- Mostrar Datos Tabla -->
                                                                        <table
                                                                            class="table table-light table-sm table-hover table-bordered"
                                                                            id="tiendaNueva">
                                                                            <thead class="thead-light">
                                                                                <tr>
                                                                                    <th data-field="codigo">
                                                                                        <span>
                                                                                            Código Tienda
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

                                            </div>

                                            <!-- Tab2 Procesamiento -->
                                            <div class=" tab-pane fade" id="custom-tabs-procesamiento" role="tabpanel"
                                                aria-labelledby="custom-tabs-procesamiento-tab">

                                                <div class="form-group row">

                                                    <div class="col-md-2">
                                                        <label class="col-sm-5 col-form-label col-form-label-sm"><i
                                                                class="fas fa-folder-open"></i>&nbsp;Archivos:</label>
                                                        <div class="col-sm-7 col-auto">
                                                            <select class="form-control form-control-sm"
                                                                id="cboOpcionesPro" style="width:auto;">
                                                                <option selected> - - Seleccione - - </option>
                                                                <option value="retailers">Retailers</option>
                                                                <option value="acv">ACV por Tiendas</option>
                                                                <option value="acvTotalVentas">ACV Total Ventas
                                                                </option>
                                                                <option value="estructura">Estructura Comercial
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label class="col-sm-5 col-form-label col-form-label-sm"><i
                                                                class="fas fa-industry"></i>&nbsp;Retailer:</label>
                                                        <div class="col-sm-7">
                                                            <select class="form-control form-control-sm"
                                                                id="cboRetailersPro" style="width:auto;">
                                                                <option> - - Seleccione - - </option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label class="col-sm-4 col-form-label col-form-label-sm"><i
                                                                class="fas fa-calendar-week"></i>&nbsp;Semanas:</label>
                                                        <div class="col-sm-8">
                                                            <select class="form-control form-control-sm"
                                                                id="cboSemanasPro" style="width:auto;">
                                                                <option> - - Seleccione - - </option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <label for="minimo"><i
                                                                        class="fas fa-minus-circle"></i>&nbsp;Mìnimo</label>
                                                                <input type="number"
                                                                    class="form-control form-control-sm text-center"
                                                                    id="minimoPro" placeholder="Min" step="1" min="1"
                                                                    max="100" value="30" required
                                                                    style="width: 75px !important;" />
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="maximo"><i
                                                                        class="fas fa-plus-circle"></i>&nbsp;Màximo</label>
                                                                <input type="number"
                                                                    class="form-control form-control-sm text-center"
                                                                    id="maximoPro" placeholder="Max" step="1" min="1"
                                                                    max="100" value="30" required
                                                                    style="width: 75px !important;" />
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-2">

                                                        <div class="row mt-2">
                                                            <div class="col-md-6 mt-3">
                                                                <button class="btn btn-danger form-control btn-block"
                                                                    onClick="ResetPro();" title="Borrar Filtros"><i
                                                                        class="fas fa-times-circle"></i>&nbsp;Borrar</button>
                                                            </div>
                                                            <div class="col-md-6 mt-3">
                                                                <button id="btnProcesar"
                                                                    class="btn btn-success form-control btn-block"
                                                                    type="submit" onClick="ValidarProcesoPro();"
                                                                    title="Procesar Solicitud"><i
                                                                        class="fas fa-check"></i>&nbsp;Procesar</button>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                                <hr>

                                                <!-- Resultados Tiendas x Retail -->
                                                <div class="form-group row" id="showTiendasxRetail"
                                                    style="display:none;">

                                                    <div class="col-md-12">

                                                        <div class="card">

                                                            <div class="card-header">

                                                                <h5 class="card-title" id="tiendasxRetail"></h5>

                                                                <div class="card-tools">
                                                                    <button type="button" class="btn btn-tool"
                                                                        data-card-widget="collapse">
                                                                        <i class="fas fa-minus"></i>
                                                                    </button>
                                                                </div>

                                                            </div>
                                                            <!-- /.card-header -->
                                                            <div class="card-body">

                                                                <div class="row">

                                                                    <div class="table-responsive" id="showTablaxRetail">

                                                                        <!-- Mostrar Datos Tabla -->
                                                                        <table
                                                                            class="table table-striped table-sm table-hover table-bordered"
                                                                            id="tblTiendasxRetail" data-search="true"
                                                                            data-sort-class="table-active"
                                                                            data-sortable="true"
                                                                            data-show-refresh="true"
                                                                            data-show-pagination-switch="true"
                                                                            data-pagination-h-align="left"
                                                                            data-pagination-detail-h-align="right"
                                                                            data-show-fullscreen="true"
                                                                            data-show-toggle="true" data-toggle="table"
                                                                            data-height="460"
                                                                            data-header-style="headerStyle1">

                                                                            <thead class="thead-light">
                                                                                <tr>
                                                                                    <th data-field="codigo"
                                                                                        data-sortable="true">
                                                                                        <span>
                                                                                            Código
                                                                                        </span>
                                                                                    </th>
                                                                                    <th data-field="tienda"
                                                                                        data-sortable="true">
                                                                                        <span>
                                                                                            Tienda
                                                                                        </span>
                                                                                    </th>
                                                                                    <th data-field="direccion"
                                                                                        data-sortable="true">
                                                                                        <span>
                                                                                            Dirección
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

                                                <!-- Resultados ACV x Tiendas y Ventas Totales -->
                                                <div class="form-group row" id="ShowDivAcvTiendas"
                                                    style="display:none;">
                                                    <div class="col-md-12">

                                                        <div class="card">

                                                            <div class="card-header">

                                                                <h6 class="card-title text-primary"
                                                                    id="acvTableTiendasxRetail">
                                                                </h6>

                                                                <div class="card-tools">
                                                                    <button type="button" class="btn btn-tool"
                                                                        data-card-widget="collapse">
                                                                        <i class="fas fa-minus"></i>
                                                                    </button>
                                                                </div>

                                                            </div>
                                                            <!-- /.card-header -->
                                                            <div class="card-body">

                                                                <div class="row">

                                                                    <div class="table-responsive">

                                                                        <div id="jsonTablePro">

                                                                            <table
                                                                                class="table table-bordered table-hover table-sm">

                                                                                <thead class="bg-info text-center">
                                                                                    <tr>
                                                                                        <th>#</th>
                                                                                        <th>Tienda</th>
                                                                                        <th id="T0pro">Actual</th>
                                                                                        <th>Promedio</th>
                                                                                        <th>% Variación</th>
                                                                                        <th id="T1pro">T-1</th>
                                                                                        <th id="T2pro">T-2</th>
                                                                                        <th id="T3pro">T-3</th>
                                                                                        <th id="T4pro">T-4</th>
                                                                                    </tr>
                                                                                </thead>

                                                                                <tbody id="tablaJsonPro">
                                                                                    <!-- Resultados ACV -->
                                                                                </tbody>

                                                                            </table>

                                                                        </div>

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

                                            </div>

                                            <!-- Tab3 -->
                                            <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel"
                                                aria-labelledby="custom-tabs-one-messages-tab">
                                                Morbi turpis dolor, vulputate vitae felis non, tincidunt
                                                congue mauris.

                                            </div>

                                            <!-- Tab4 -->
                                            <div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel"
                                                aria-labelledby="custom-tabs-one-settings-tab">
                                                Pellentesque vestibulum commodo nibh nec blandit. Maecenas
                                                neque magna,
                                            </div>

                                        </div>

                                    </div>
                                    <!-- /.card -->
                                </div>

                            </div>

                        </div>

                        <!-- -->
                    </div>

                </div>

            </section> <!-- / section class="content"> -->

            <!-- Windows Modal Visualizar Registros-->
            <?php $this->load->view('Plantillas/Footer');?>
            <script src="<?php echo base_url('assets/constantes/url.js') ?>"></script>

            <script>
$(document).ready(function() {
    $(function() {
        //debugger;
        sessionStorage.clear();
        url();
        $("#cboRetailersRec").prop("disabled", true);
        $("#cboSemanasRec").prop("disabled", true);
        cargarRetailerRec();
        cargarSemanasRec();
    });
});

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

            <script>
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
$("#cboOpcionesRec").change(function() {
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
$("#cboRetailersRec").change(function() {
    $("#cboSemanasRec").prop("disabled", false);
    $("#cboSemanasRec").prop("selectedIndex", 0);
    LimpiezaRec();
});
//
$("#cboSemanasRec").change(function() {
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
        .done(function(response) {
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
        .done(function(response) {
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
            url: sessionStorage.getItem("urlApi") +
                "getAllRegistroArchivoxRetail_Pivot/" +
                idSem,
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
                    window.location = "/retailscannig/index.php";
                }
            })
            .always(function(jqXHR, textStatus) {
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
            url: sessionStorage.getItem("urlApi") + "getRegistroArchivoxRetail_Pivot/" + idRet + "/" + idSem + "",
            method: "get",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded",
                Authorization: "Bearer " + localStorage.getItem("Token"),
            },
        };
        $.ajax(settings)
            .done(function(response) {
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
                    window.location = "/retailscannig/index.php";
                }
            })
            .always(function(jqXHR, textStatus) {
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
            url: sessionStorage.getItem("urlApi") +
                "getAllTamanoArchivoxRetail_Pivot/" +
                idSem,
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
                    window.location = "/retailscannig/index.php";
                }
            })
            .always(function(jqXHR, textStatus) {
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
            url: sessionStorage.getItem("urlApi") +
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
            .done(function(response) {
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
                    window.location = "/retailscannig/index.php";
                }
            })
            .always(function(jqXHR, textStatus) {
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
        url: sessionStorage.getItem("urlApi") +
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
        .done(function(response) {
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
                window.location = "/retailscannig/index.php";
            }
        })
        .always(function(jqXHR, textStatus) {
            $("#cargando").css("display", "none");
            //$("#cargando").addClass('d-none');
        });
}
//
function ProcesarTndFaltantes(idOpc, idRet, idSem) {
    //
    const settings = {
        //"url": '<?php echo urlApi; ?>getTiendasFaltantes/' + idOpc + '/' + idRet + '/' + idSem + '',
        url: sessionStorage.getItem("urlApi") +
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
        .done(function(response) {
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
                    title: $("#cboRetailersRec option:selected").text().trim() +
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
                window.location = "/retailscannig/index.php";
            }
        })
        .always(function(jqXHR, textStatus) {
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
        url: sessionStorage.getItem("urlApi") +
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
        .done(function(response) {
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
                    title: $("#cboRetailersRec option:selected").text().trim() +
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
                window.location = "/retailscannig/index.php";
            }
        })
        .always(function(jqXHR, textStatus) {
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
        .done(function(response) {
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
                window.location = "/retailscannig/index.php";
            }
        })
        .always(function(jqXHR, textStatus) {
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
                row4 = "<td class='text-right'>" + monto + "</td>";
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
                row6 = "<td class='text-right'>" + monto + "</td>";
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
        row += row3 + row1 + row2 + row4 + row5 + row6 + row7;

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
            </script>
            <script>
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
$("#cboOpcionesPro").change(function() {
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
$("#cboRetailersPro").change(function() {
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
$("#cboSemanasPro").change(function() {
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
        .done(function(response) {
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
                window.location = "/retailscannig/index.php";
            }
        })
        .always(function(jqXHR, textStatus) {
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
        url: sessionStorage.getItem("urlApi") +
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
        .done(function(response) {
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
                window.location = "/retailscannig/index.php";
            }
        })
        .always(function(jqXHR, textStatus) {
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
        url: sessionStorage.getItem("urlApi") +
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
        .done(function(response) {
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
                    title: $("#cboRetailersPro option:selected").text().trim() +
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
                window.location = "/retailscannig/index.php";
            }
        })
        .always(function(jqXHR, textStatus) {
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
            url: sessionStorage.getItem("urlApi") +
                "getAllACVTotalVentasxRetail_Pivot/" +
                idSem,
            method: "get",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded",
                Authorization: "Bearer " + localStorage.getItem("Token"),
            },
        };
        $.ajax(settings)
            .done(function(response) {

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
                    window.location = "/retailscannig/index.php";
                }
            })
            .always(function(jqXHR, textStatus) {
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
        .done(function(response) {
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
                window.location = "/retailscannig/index.php";
            }
        })
        .always(function(jqXHR, textStatus) {
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
                row4 = "<td class='text-right'>" + monto + "</td>";
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
                row6 = "<td class='text-right'>" + monto + "</td>";
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
        row += row3 + row1 + row2 + row4 + row5 + row6 + row7;

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
            </script>
            <script>
//
function formatoPrecio(value) {
    return Number(value).toLocaleString("es-ES", {
        maximumFractionDigits: 2,
        minimumFractionDigits: 2,
    });
}
//
function formatoMontoEntero(value) {
    return Number(value).toLocaleString("es-ES", {
        maximumFractionDigits: 0,
        minimumFractionDigits: 0,
    });
}
//
function getSemanaID(id, jsonData) {
    for (var i = 0; i < jsonData.length; i++) {
        if (jsonData[i]["id_Semana"] == id) {
            return true;
            break;
        }
    }
    return false;
}
//
            </script>