            <!-- Colocar Include Header y Menu -->
            <?php $this->load->view('Plantillas/Header');?>
            <style type="text/css">
.tabulator {
    font-size: 12px;
}
            </style>

            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1><i class="fas fa-search-dollar"></i>&nbsp;Money Market:</h1>
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

            <!-- Main content -->
            <section class="content">

                <div class="container-fluid">

                    <div class="row">

                        <div class="col-md-12">

                            <div class="card card-primary card-outline">

                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-tachometer-alt"></i>
                                        Money Market
                                    </h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="card-body">

                                    <div class="form-group row mb-0 mt-0">

                                        <div class="col-md-3">
                                            <label><i class="fas fa-calendar-alt"></i>&nbsp;Semana:</label>
                                            <div class="form-group">
                                                <select class="form-control form-control-sm selectpicker"
                                                    id="cboSemanas" name="cboSemanas" multiple
                                                    data-selected-text-format="count > 2" multiple data-required="true"
                                                    data-live-search="true" title=" - - Seleccione - -"
                                                    data-max-options="8" data-actions-box="true">
                                                </select>
                                            </div>
                                            <div class="form-group" style="display:none;">
                                                <select class="form-control form-control-sm selectpicker"
                                                    id="cboTitSemanas" name="cboTitSemanas" title=" - - Seleccione - -"
                                                    data-max-options="8" data-actions-box="true">
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <label><i class="fas fa-industry"></i>&nbsp;Retail:</label>
                                            <div class="form-group">
                                                <select class="form-control form-control-sm selectpicker"
                                                    id="cboRetailers" name="cboRetailers" multiple
                                                    data-selected-text-format="count > 3" multiple data-required="true"
                                                    data-live-search="true" title=" - - Seleccione - -"
                                                    data-actions-box="true">
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <label><i class="fas fa-map-marker-alt"></i>&nbsp;Estado:</label>
                                            <div class="form-group">
                                                <select class="form-control form-control-sm selectpicker"
                                                    id="cboEstados" name="cboEstados"
                                                    data-selected-text-format="count > 3" multiple data-required="true"
                                                    data-live-search="true" title=" - - Seleccione - -"
                                                    data-actions-box="true">
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <label><i class="fas fa-store"></i>&nbsp;Tienda:</label>
                                            <div class="form-group">
                                                <select class="form-control form-control-sm selectpicker"
                                                    id="cboTiendas" name="cboTiendas" multiple
                                                    data-selected-text-format="count > 3" multiple data-required="true"
                                                    data-live-search="true" title=" - - Seleccione - -"
                                                    data-actions-box="true">
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-group row mb-0 mt-0 ">

                                        <div class="col-md-3">

                                            <label><i class="fas fa-shapes"></i>&nbsp;Categoria:</label>
                                            <div class="form-group">
                                                <select class="form-control form-control-sm selectpicker"
                                                    id="cboCategorias" name="cboCategorias" multiple
                                                    data-selected-text-format="count > 3" multiple data-required="true"
                                                    data-live-search="true" title=" - - Seleccione - -"
                                                    data-max-options="8" data-actions-box="true">
                                                </select>
                                            </div>

                                        </div>

                                        <div class="col-md-3">
                                            <label><i class="fas fa-certificate"></i>&nbsp;Fabricante:</label>
                                            <div class="form-group">
                                                <select class="form-control form-control-sm selectpicker"
                                                    id="cboFabricantes" name="cboFabricantes" multiple
                                                    data-selected-text-format="count > 3" multiple data-required="true"
                                                    data-live-search="true" title=" - - Seleccione - -"
                                                    data-actions-box="true">
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <label><i class="fas fa-registered"></i>&nbsp;Marca:</label>
                                            <div class="form-group">
                                                <select class="form-control form-control-sm selectpicker" id="cboMarcas"
                                                    name="cboMarcas" multiple data-selected-text-format="count > 3"
                                                    multiple data-required="true" data-live-search="true"
                                                    title=" - - Seleccione - -" data-actions-box="true">
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <label><i class="fas fa-barcode"></i>&nbsp;Codigo Barras:</label>
                                            <div class="form-group">
                                                <select class="form-control form-control-sm selectpicker"
                                                    id="cboBarcodes" name="cboBarcodes" multiple
                                                    data-selected-text-format="count > 3" multiple data-required="true"
                                                    data-live-search="true" title=" - - Seleccione - -"
                                                    data-actions-box="true">
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-group row mb-0 mt-0">

                                        <div class="col-sm-3">
                                            <label><i class="fas fa-money-bill-alt"></i>&nbsp;Moneda:</label>
                                            <div class="form-group">
                                                <select class="form-control form-control-sm selectpicker dropup "
                                                    data-required="true" id="cboMoneda" name="cboMoneda">
                                                    <option value="1">Bolivar Soberano</option>
                                                    <option value="2" selected>Dolar Americano</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">

                                            <div class="row">
                                                <div class="col-md-11">
                                                    <label><i class="fas fa-filter"></i>&nbsp;Mis
                                                        Selecciónes:&nbsp;&nbsp;</label>
                                                    <select class="form-control form-control-sm selectpicker"
                                                        id="cboFiltros" name="cboFiltros" data-required="true"
                                                        data-live-search="true"
                                                        title=" - - Seleccione Filtro Guardado - -">
                                                    </select>
                                                </div>
                                                <div class="col-md-1 mt-6">
                                                    <button class="btn btn-primary btn-sm btn-block" id="btnCrearFiltro"
                                                        title="Grabar Filtros"><i class="fas fa-save"></i></button>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-sm-3">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <button class="btn btn-danger btn-sm btn-block" onClick="Reset();"
                                                        title="Borrar Filtros"><i
                                                            class="fas fa-times-circle"></i>&nbsp;Borrar</button>
                                                </div>
                                                <div class="col-md-9">
                                                    <button id="btnProcesar" class="btn btn-success  btn-sm btn-block"
                                                        type="submit" onClick="ExcPrcWeek();"
                                                        title="Procesar Solicitud"><i
                                                            class="fas fa-check"></i>&nbsp;Procesar</button>
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

                <!-- .cargando filtros-->
                <div class="container-fluid text-center text-danger pt-3" id="cargando" style="display:none;">
                    <span><img src="<?php echo base_url('dist/img/ajax-loader8.gif') ?>"><strong>&nbsp;&nbsp;Espere,
                            Cargando datos...!
                </div>
                <!-- /.cargando filtros -->
                <!-- .procesando filtros-->
                <div class="container-fluid text-center text-danger pt-3" id="procesando" style="display:none;">
                    <span><img src="<?php echo base_url('dist/img/ajax-loader8.gif') ?>"><strong>&nbsp;&nbsp;Espere,
                            Procesando los datos...!
                </div>
                <!-- /.procesando filtros -->

                <div class="container-fluid" id="mainPreciosSemanales" style="display:none;">

                    <div class="row">

                        <div class="col-md-12">

                            <div class="card card-warning card-outline">

                                <div class="card-header">

                                    <button id="download-xlsx" class="btn btn-secondary btn-sm"
                                        title="Exportar a Excel"><i class="fas fa-file-export"></i>&nbsp;Excel
                                    </button>

                                    <span class="badge bg-primary" id="totalRegistros"></span>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                </div>

                                <div class="card-body">

                                    <div class="row">

                                        <div id="tblPreciosSemanales">
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

                <!-- /.modal CrearProducto -->
                <?php include 'mdlCrearfil.php'?>
                <!-- Fin Modales -->

            </section>
            <!-- /.content -->

            <!-- Windows Modal Visualizar Registros-->
            <?php $this->load->view('Plantillas/Footer');?>

            <script src="<?php echo base_url('assets/constantes/url.js') ?>"></script>
            <script src="<?php echo base_url('assets/js/money/eventos.js') ?>"></script>
            <script src="<?php echo base_url('assets/js/money/funciones.js') ?>"></script>
            <script src="<?php echo base_url('assets/js/money/fillcmbfilter.js') ?>"></script>

            <script>
$(document).ready(function() {
    $(function() {
        //debugger;
        sessionStorage.clear();
        createVar();
        $('.selectpicker').selectpicker();
        $('.selectpicker').selectpicker('deselectAll');
        $('.selectpicker').selectpicker('refresh');
        url();
        fillSem();
        fillFiltros();
    });
});
//
// FUNCIONES
//
function fillSem() {
    // debugger;
    $('#cargando').css('display', 'block');
    $('.selectpicker').prop('disabled', true);
    $('.selectpicker').selectpicker('refresh');
    var settings = {
        url: sessionStorage.getItem('urlApi') + "getAllSemMnyMrk",
        method: "get",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
            Authorization: "Bearer " + localStorage.getItem('Token'),
        },
    };
    $.ajax(settings)
        .done(function(response) {
            let select = $('#cboSemanas');
            select.find('option').remove();
            for (var i = 0; i < response.data.length; i++) {
                if (i != 0) {
                    select.append(
                        "<option value=" +
                        response.data[i].id +
                        ">" +
                        response.data[i].nombre +
                        "</option>"
                    );
                }
            }
            $('#cboTitSemanas').empty();
            $('#cboSemanas').find('option').clone().appendTo('#cboTitSemanas');
            $('#cboSemanas').focus();
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
                        toast.addEventListener('mouseenter', Swal.stopTimer);
                        toast.addEventListener('mouseleave', Swal.resumeTimer);
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
            $('#cargando').css('display', 'none');
            $('.selectpicker').prop('disabled', false);
            $('.selectpicker').selectpicker('refresh');
        });
}
//
function fillFiltros() {
    //debugger;
    $('#cargando').css('display', 'block');
    $('.selectpicker').prop('disabled', true);
    $('.selectpicker').selectpicker('refresh');
    let idClt = localStorage.getItem('ID_Cliente');
    //
    var settings = {
        url: sessionStorage.getItem('urlApi') + "getAllFilterClienteMnyMrk/" + idClt + '',
        method: "get",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
            Authorization: "Bearer " + localStorage.getItem('Token'),
        },
    };
    $.ajax(settings)
        .done(function(response) {
            //debugger;
            let select = $('#cboFiltros');
            select.find('option').remove();
            for (var i = 0; i < response.data.length; i++) {
                cadena = response.data[i].nombre;
                cadena = cadena.toUpperCase();
                select.append("<option value=" + response.data[i].id + ">" + cadena + "</option>");
            }
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
                        toast.addEventListener('mouseenter', Swal.stopTimer);
                        toast.addEventListener('mouseleave', Swal.resumeTimer);
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
            $('#cargando').css('display', 'none');
            $('.selectpicker').prop('disabled', false);
            $('.selectpicker').selectpicker('refresh');
        });
}
//
function fillRet() {
    //
    debugger;
    $('#cargando').css('display', 'block');
    $('.selectpicker').prop('disabled', true);
    $('.selectpicker').selectpicker('refresh');
    let idSem = $('#cboSemanas').val();
    var settings = {
        url: sessionStorage.getItem('urlApi') + 'getAllRetxMnyMrk/' + idSem + '',
        method: "get",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
            Authorization: "Bearer " + localStorage.getItem('Token'),
        },
    };
    $.ajax(settings)
        .done(function(response) {
            debugger;
            let select = $('#cboRetailers');
            select.find('option').remove();
            for (var i = 0; i < response.data.length; i++) {
                select.append("<option value=" + response.data[i].id + ">" + response.data[i].nombre + "</option>");
            }
            //
            let idRet = JSON.parse(sessionStorage.getItem('idRet'));
            if (idRet != 0) {
                $('#cboRetailers').selectpicker();
                $('#cboRetailers').selectpicker('val', idRet);
                $('#cboRetailers').selectpicker('refresh');
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
                        toast.addEventListener('mouseenter', Swal.stopTimer);
                        toast.addEventListener('mouseleave', Swal.resumeTimer);
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
            $('#cargando').css('display', 'none');
            $('.selectpicker').prop('disabled', false);
            $('.selectpicker').selectpicker('refresh');
        });
}
//
function fillEtd() {
    //
    debugger;
    $('#cargando').css('display', 'block');
    $('.selectpicker').prop('disabled', true);
    $('.selectpicker').selectpicker('refresh');
    let idSem = $('#cboSemanas').val();
    let idRet = $('#cboRetailers').val();
    var settings = {
        url: sessionStorage.getItem('urlApi') + 'getAllEtdxMnyMrk/' + idSem + '/' + idRet + '',
        method: "get",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
            Authorization: "Bearer " + localStorage.getItem('Token'),
        },
    };
    $.ajax(settings)
        .done(function(response) {
            debugger;
            let select = $('#cboEstados');
            select.find('option').remove();
            for (var i = 0; i < response.data.length; i++) {
                select.append(
                    "<option value=" +
                    response.data[i].id +
                    ">" +
                    response.data[i].nombre +
                    "</option>"
                );
            }
            let idEtd = JSON.parse(sessionStorage.getItem('idEtd'));
            if (idEtd != 0) {
                $('#cboEstados').selectpicker();
                $('#cboEstados').selectpicker('val', idEtd);
                $('#cboEstados').selectpicker('refresh');
            }
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
                        toast.addEventListener('mouseenter', Swal.stopTimer);
                        toast.addEventListener('mouseleave', Swal.resumeTimer);
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
            $('#cargando').css('display', 'none');
            $('.selectpicker').prop('disabled', false);
            $('.selectpicker').selectpicker('refresh');
        });
}
//
function fillTnd() {
    //
    $('#cargando').css('display', 'block');
    $('.selectpicker').prop('disabled', true);
    $('.selectpicker').selectpicker('refresh');
    let idSem = $('#cboSemanas').val();
    let idRet = $('#cboRetailers').val();
    let idEtd = $('#cboEstados').val();
    var settings = {
        url: sessionStorage.getItem('urlApi') + 'getAllTndxMnyMrk/' + idSem + '/' + idRet + '/' + idEtd + '',
        method: "get",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
            Authorization: "Bearer " + localStorage.getItem('Token'),
        },
    };
    $.ajax(settings)
        .done(function(response) {
            let select = $('#cboTiendas');
            select.find('option').remove();
            for (var i = 0; i < response.data.length; i++) {
                select.append(
                    "<option value=" +
                    response.data[i].id +
                    ">" +
                    response.data[i].nombre +
                    "</option>"
                );
            }
            let idTnd = JSON.parse(sessionStorage.getItem('idTnd'));
            if (idTnd != 0) {
                $('#cboTiendas').selectpicker();
                $('#cboTiendas').selectpicker('val', idTnd);
                $('#cboTiendas').selectpicker('refresh');
            }
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
                        toast.addEventListener('mouseenter', Swal.stopTimer);
                        toast.addEventListener('mouseleave', Swal.resumeTimer);
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
            $('#cargando').css('display', 'none');
            $('.selectpicker').prop('disabled', false);
            $('.selectpicker').selectpicker('refresh');
        });
}
//
function fillCat() {
    //
    $('#cargando').css('display', 'block');
    $('.selectpicker').prop('disabled', true);
    $('.selectpicker').selectpicker('refresh');
    let idSem = $('#cboSemanas').val();
    let idRet = $('#cboRetailers').val();
    let idTnd = $('#cboTiendas').val();
    //
    idSem = idSem.join();
    idRet = idRet.join();
    idTnd = idTnd.join();
    //
    idSem = reemplazaTodo(idSem, ",", "*");
    idRet = reemplazaTodo(idRet, ",", "*");
    idTnd = reemplazaTodo(idTnd, ",", "*");
    //
    var settings = {
        url: sessionStorage.getItem('urlApi') + 'getAllCatxMnyMrk/' + idSem + '/' + idRet + '/' + idTnd + '',
        method: "get",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
            Authorization: "Bearer " + localStorage.getItem('Token'),
        },
    };
    $.ajax(settings)
        .done(function(response) {
            let select = $('#cboCategorias');
            select.find('option').remove();
            for (var i = 0; i < response.data.length; i++) {
                select.append(
                    "<option value=" +
                    response.data[i].id +
                    ">" +
                    response.data[i].nombre +
                    "</option>"
                );
            }
            let idCat = JSON.parse(sessionStorage.getItem('idCat'));
            if (idCat != 0) {
                $('#cboCategorias').selectpicker();
                $('#cboCategorias').selectpicker('val', idCat);
                $('#cboCategorias').selectpicker('refresh');
            }
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
                        toast.addEventListener('mouseenter', Swal.stopTimer);
                        toast.addEventListener('mouseleave', Swal.resumeTimer);
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
            $('#cargando').css('display', 'none');
            $('.selectpicker').prop('disabled', false);
            $('.selectpicker').selectpicker('refresh');
        });
}
//
function fillFab() {
    //
    $('#cargando').css('display', 'block');
    $('.selectpicker').prop('disabled', true);
    $('.selectpicker').selectpicker('refresh');
    let idSem = $('#cboSemanas').val();
    let idRet = $('#cboRetailers').val();
    let idTnd = $('#cboTiendas').val();
    let idCat = $('#cboCategorias').val();
    var settings = {
        url: sessionStorage.getItem('urlApi') + 'getAllFabxMnyMrk/' + idSem + '/' + idRet + '/' + idTnd + '/' +
            idCat + '',
        method: "get",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
            Authorization: "Bearer " + localStorage.getItem('Token'),
        },
    };
    $.ajax(settings)
        .done(function(response) {
            let select = $('#cboFabricantes');
            select.find('option').remove();
            for (var i = 0; i < response.data.length; i++) {
                select.append(
                    "<option value=" +
                    response.data[i].id +
                    ">" +
                    response.data[i].nombre +
                    "</option>"
                );
            }
            let idFab = JSON.parse(sessionStorage.getItem('idFab'));
            if (idFab != 0) {
                $('#cboFabricantes').selectpicker();
                $('#cboFabricantes').selectpicker('val', idFab);
                $('#cboFabricantes').selectpicker('refresh');
            }
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
                        toast.addEventListener('mouseenter', Swal.stopTimer);
                        toast.addEventListener('mouseleave', Swal.resumeTimer);
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
            $('#cargando').css('display', 'none');
            $('.selectpicker').prop('disabled', false);
            $('.selectpicker').selectpicker('refresh');
        });
}
//
function fillMar() {
    //
    $('#cargando').css('display', 'block');
    $('.selectpicker').prop('disabled', true);
    $('.selectpicker').selectpicker('refresh');
    let idSem = $('#cboSemanas').val();
    let idRet = $('#cboRetailers').val();
    let idTnd = $('#cboTiendas').val();
    let idCat = $('#cboCategorias').val();
    let idFab = $('#cboFabricantes').val();
    var settings = {
        url: sessionStorage.getItem('urlApi') + 'getAllMrcxMnyMrk/' + idSem + '/' + idRet + '/' + idTnd + '/' +
            idCat + '/' + idFab + '',
        method: "get",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
            Authorization: "Bearer " + localStorage.getItem('Token'),
        },
    };
    $.ajax(settings)
        .done(function(response) {
            let select = $('#cboMarcas');
            select.find('option').remove();
            for (var i = 0; i < response.data.length; i++) {

                select.append(
                    "<option value=" +
                    response.data[i].id +
                    ">" +
                    response.data[i].nombre +
                    "</option>"
                );

            }
            let idMar = JSON.parse(sessionStorage.getItem('idMar'));
            if (idMar != 0) {
                $('#cboMarcas').selectpicker();
                $('#cboMarcas').selectpicker('val', idMar);
                $('#cboMarcas').selectpicker('refresh');
            }
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
                        toast.addEventListener('mouseenter', Swal.stopTimer);
                        toast.addEventListener('mouseleave', Swal.resumeTimer);
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
            $('#cargando').css('display', 'none');
            $('.selectpicker').prop('disabled', false);
            $('.selectpicker').selectpicker('refresh');
        });
}
//
function fillCod() {
    //
    $('#cargando').css('display', 'block');
    $('.selectpicker').prop('disabled', true);
    $('.selectpicker').selectpicker('refresh');
    let idSem = $('#cboSemanas').val();
    let idRet = $('#cboRetailers').val();
    let idTnd = $('#cboTiendas').val();
    let idCat = $('#cboCategorias').val();
    let idFab = $('#cboFabricantes').val();
    let idMar = $('#cboMarcas').val();
    var settings = {
        url: sessionStorage.getItem('urlApi') + 'getAllCodBarxMnyMrk/' + idSem + '/' + idRet + '/' + idTnd + '/' +
            idCat + '/' + idFab + '/' + idMar + '',
        method: "get",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
            Authorization: "Bearer " + localStorage.getItem('Token'),
        },
    };
    $.ajax(settings)
        .done(function(response) {
            let select = $('#cboBarcodes');
            select.find('option').remove();
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
            let idBar = JSON.parse(sessionStorage.getItem('idMar'));
            if (idBar != 0) {
                $('#cboBarcodes').selectpicker();
                $('#cboBarcodes').selectpicker('val', idBar);
                $('#cboBarcodes').selectpicker('refresh');
            }
            $('#cboBarcodes').focus();
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
                        toast.addEventListener('mouseenter', Swal.stopTimer);
                        toast.addEventListener('mouseleave', Swal.resumeTimer);
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
            $('#cargando').css('display', 'none');
            $('.selectpicker').prop('disabled', false);
            $('.selectpicker').selectpicker('refresh');
        });
}
//
function ExcPrcWeek() {
    //
    if (validarEntradaDatos()) {
        sessionStorage.removeItem('Moneda');
        $('#procesando').css('display', 'block');
        $('.selectpicker').prop('disabled', true);
        $('.selectpicker').selectpicker('refresh');
        $('#totalRegistros').html('');
        Limpieza();
        //
        let idSemana = $('#cboSemanas').val();
        if (idSemana.length > 8) {
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 10000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer);
                    toast.addEventListener('mouseleave', Swal.resumeTimer);
                },
            });
            Toast.fire({
                icon: "error",
                title: "Seleccione 8 Semanas máximo..!",
            });
            //
            $('#procesando').css('display', 'none');
            $('.selectpicker').prop('disabled', false);
            $('.selectpicker').selectpicker('refresh');
            return false;
        }
        //
        let idMnd = $('#cboMoneda').val();
        if (idMnd.length == 0) {
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 10000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer);
                    toast.addEventListener('mouseleave', Swal.resumeTimer);
                },
            });
            Toast.fire({
                icon: "error",
                title: "Seleccione Tipo Moneda..!",
            });
            //
            $('#procesando').css('display', 'none');
            $('.selectpicker').prop('disabled', false);
            $('.selectpicker').selectpicker('refresh');
            return false;
        } //
        //
        let idSem = $('#cboSemanas').val();
        let idRet = $('#cboRetailers').val();
        let idTnd = $('#cboTiendas').val();
        let idCat = $('#cboCategorias').val();
        let idFab = $('#cboFabricantes').val();
        let idMar = $('#cboMarcas').val();
        let idBar = $('#cboBarcodes').val();
        //
        idSem = idSem.join();
        idRet = idRet.join();
        idTnd = idTnd.join();
        idCat = idCat.join();
        idFab = idFab.join();
        idMar = idMar.join();
        idBar = idBar.join();
        //
        idSem = reemplazaTodo(idSem, ",", "*");
        idRet = reemplazaTodo(idRet, ",", "*");
        idTnd = reemplazaTodo(idTnd, ",", "*");
        idCat = reemplazaTodo(idCat, ",", "*");
        idFab = reemplazaTodo(idFab, ",", "*");
        idMar = reemplazaTodo(idMar, ",", "*");
        idBar = reemplazaTodo(idBar, ",", "*");
        //
        debugger;
        if (idMnd == 2) {
            sessionStorage.setItem('sTore', 'getRepMnyMrkPvtD/');
        } else {
            sessionStorage.setItem('sTore', 'getRepMnyMrkPvt/');
        }
        //
        var settings = {
            url: sessionStorage.getItem('urlApi') +
                sessionStorage.getItem('sTore') + idSem + '/' + idRet + '/' + idTnd + '/' + idCat + '/' + idFab +
                '/' + idMar + '/' +
                idBar + '',
            method: "get",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded",
                Authorization: "Bearer " + localStorage.getItem('Token'),
            },
        };
        $.ajax(settings)
            .done(function(response) {
                console.log(response);
                let jsonData = response.data;
                graPhData(jsonData);
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
                            toast.addEventListener('mouseenter', Swal.stopTimer);
                            toast.addEventListener('mouseleave', Swal.resumeTimer);
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
                $('#procesando').css('display', 'none');
                $('.selectpicker').prop('disabled', false);
                $('.selectpicker').selectpicker('refresh');
            });
    }
}
//
function graPhData(data) {
    //
    $('#procesando').css('display', 'block');
    $('.selectpicker').prop('disabled', true);
    $('.selectpicker').selectpicker('refresh');
    debugger;
    //
    let jsonData = data;
    let col = Object.keys(jsonData[0]);
    let totalCell = col.length;
    let arraySem = $('#cboSemanas').val();
    let titSem = arraySem.sort();
    // llenar los titulos de header
    let nomTitulo = [];
    for (let i = 0; i < titSem.length; i++) {
        let Colm = titSem[i];
        document.getElementById('cboTitSemanas').value = Colm;
        let sel = document.getElementById('cboTitSemanas');
        nomTitulo[i] = sel.options[sel.selectedIndex].text;
    }
    //
    $('#totalRegistros').html('Total Registros: ' + jsonData.length);
    //
    let table = new Tabulator('#tblPreciosSemanales', {
        height: "400px",
        layout: "fitDataStretch",
        data: jsonData,
        pagination: "local",
        paginationSize: 25,
        paginationSizeSelector: [25, 50, 75, 100, 500, 1000],
        headerFilterPlaceholder: "...?",
        movableColumns: true,
        tooltips: true,
        movableRows: true,
        locale: true,
        //
        columns: [{
                title: "Retail",
                field: "Retail",
                frozen: true,
                headerFilter: true,
            },
            {
                title: "Tienda",
                field: "Tienda",
                frozen: true,
                headerFilter: true,
            },
            {
                title: "Barra",
                field: "CodigoBarra",
                headerFilter: true,
            },
            {
                title: "Categoria",
                field: "Categoria",
                headerFilter: true,
            },
            {
                title: "Producto",
                field: "Producto",
                headerFilter: true,
            },
            {
                title: "Tamaño",
                field: "Tamano",
                hozAlign: "center",
                headerFilter: true,
            },
            {
                title: "Mínimo",
                field: "Minimo",
                formatter: "money",
                hozAlign: "right",
                formatterParams: {
                    decimal: ",",
                    thousand: ".",
                }
            },
            {
                title: "Máximo",
                field: "Maximo",
                formatter: "money",
                hozAlign: "right",
                formatterParams: {
                    decimal: ",",
                    thousand: ".",
                }
            },
            {
                title: "Promedio",
                field: "Promedio",
                formatter: "money",
                hozAlign: "right",
                formatterParams: {
                    decimal: ",",
                    thousand: ".",
                }
            },
            {
                title: nomTitulo[0],
                field: titSem[0],
                formatter: "money",
                hozAlign: "right",
                formatterParams: {
                    decimal: ",",
                    thousand: ".",
                }
            },
            {
                title: nomTitulo[1],
                field: titSem[1],
                formatter: "money",
                hozAlign: "right",
                formatterParams: {
                    decimal: ",",
                    thousand: ".",
                }
            },
            {
                title: nomTitulo[2],
                field: titSem[2],
                formatter: "money",
                hozAlign: "right",
                formatterParams: {
                    decimal: ",",
                    thousand: ".",
                }
            },
            {
                title: nomTitulo[3],
                field: titSem[3],
                formatter: "money",
                hozAlign: "right",
                formatterParams: {
                    decimal: ",",
                    thousand: ".",
                }
            },
            {
                title: nomTitulo[4],
                field: titSem[4],
                formatter: "money",
                hozAlign: "right",
                formatterParams: {
                    decimal: ",",
                    thousand: ".",
                }
            },
            {
                title: nomTitulo[5],
                field: titSem[5],
                formatter: "money",
                hozAlign: "right",
                formatterParams: {
                    decimal: ",",
                    thousand: ".",
                }
            },
            {
                title: nomTitulo[6],
                field: titSem[6],
                formatter: "money",
                hozAlign: "right",
                formatterParams: {
                    decimal: ",",
                    thousand: ".",
                }
            },
            {
                title: nomTitulo[7],
                field: titSem[7],
                formatter: "money",
                hozAlign: "right",
                formatterParams: {
                    decimal: ",",
                    thousand: ".",
                }
            },
        ],
        langs: {
            "es-ar": {
                pagination: {
                    page_size: "Mostrar: ",
                    first: "<i class='fas fa-backward'></i>",
                    first_title: "Inicio",
                    last: "<i class='fas fa-forward'></i>",
                    last_title: "Ultimo",
                    prev: "<i class='fas fa-caret-left'></i>",
                    prev_title: "Anterior",
                    next: "<i class='fas fa-caret-right'></i>",
                    next_title: "Siguiente",
                },
            },
        },
        rowFormatter: function(row) {
            //
            // debugger;
            let celda = row.getCells();
            // Get Promedio
            let valProm = celda[8].getValue();
            let valField = celda[8].getField()
            let oPciones = totalCell - titSem.length;
            //
            for (let i = oPciones; i < celda.length; i++) {
                let valColm = celda[i].getValue();
                let valField = celda[i].getField();
                if (valColm != null) {
                    if (valColm < valProm) {
                        celda[i].getElement().style.color = "#ffffff";
                        //celda[i].getElement().style.backgroundColor = "#98D2EB";
                        celda[i].getElement().style.backgroundColor = "#067BC2";


                    }
                    if (valColm > valProm) {
                        celda[i].getElement().style.color = "#ffffff"; //
                        celda[i].getElement().style.backgroundColor = "#E85F5C";
                    }
                }
            }
        }
        //
    });
    //
    table.setLocale('es-ar'); //set locale to spanish
    // trigger download of data.xlsx file
    document
        .getElementById('download-xlsx')
        .addEventListener('click', function() {
            table.download('xlsx', 'ListadoPreciosSemanales.xlsx', {
                sheetName: 'Resultados',
            });
        });

    $('#mainPreciosSemanales').css('display', 'block');
    $('#procesando').css('display', 'none');
    $('.selectpicker').prop('disabled', false);
    $('.selectpicker').selectpicker('refresh');
    //
}
//
function validarEntradaDatos() {
    let msgError = "";
    let bError = false;
    //
    let idSem = $('#cboSemanas').val();
    if (idSem == null || idSem == 0 || idSem == undefined || idSem.length == 0) {
        msgError += " Semana,";
        bError = true;
    }
    let idRet = $('#cboRetailers').val();
    if (idRet == null || idRet == 0 || idRet == undefined || idRet.length == 0) {
        msgError += " Retails,";
        bError = true;
    }
    //
    let idEtd = $('#cboEstados').val();
    if (idEtd == null || idEtd == 0 || idEtd == undefined || idEtd.length == 0) {
        msgError += " Estado,";
        bError = true;
    }
    //
    let idTnd = $('#cboTiendas').val();
    if (idTnd == null || idTnd == 0 || idTnd == undefined || idTnd.length == 0) {
        msgError += " Tienda,";
        bError = true;
    }
    //
    let idCat = $('#cboCategorias').val();
    if (idCat == null || idCat == 0 || idCat == undefined || idCat.length == 0) {
        msgError += " Categoria,";
        bError = true;
    }
    //
    let idFab = $('#cboFabricantes').val();
    if (idFab == null || idFab == 0 || idFab == undefined || idFab.length == 0) {
        msgError += " Fabricante,";
        bError = true;
    }
    //
    let idMar = $('#cboMarcas').val();
    if (idMar == null || idMar == 0 || idMar == undefined || idMar.length == 0) {
        msgError += " Marca,";
        bError = true;
    }
    let idBar = $('#cboBarcodes').val();
    if (idBar == null || idBar == 0 || idBar == undefined || idBar.length == 0) {
        msgError += " Código Barra,";
        bError = true;
    }
    let idMnd = $('#cboMoneda').val();
    if (idMnd == null || idMnd == 0 || idMnd == undefined || idMnd.length == 0) {
        msgError += " Moneda";
        bError = true;
    }
    //
    if (bError) {
        Swal.fire({
            icon: 'error',
            title: 'Indique los Datos de:',
            text: msgError,
            footer: '<i class="fas fa-filter"></i>&nbsp;PARA PODER CREAR EL FILTRO..!'
        });
        $('#procesando').css('display', 'none');
        $('.selectpicker').prop('disabled', false);
        $('.selectpicker').selectpicker('refresh');
        return false;
    }
    return true;
}
//
function findData(idFil) {
    //
    Limpieza();
    $('#procesando').css('display', 'block');
    $('.selectpicker').prop('disabled', true);
    $('.selectpicker').selectpicker('refresh');
    //
    var settings = {
        url: sessionStorage.getItem('urlApi') +
            "getDataMnyMrkFilClt/" + idFil + '',
        method: "get",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
            Authorization: "Bearer " + localStorage.getItem('Token'),
        },
    };
    $.ajax(settings)
        .done(function(response) {
            //
            excFiltroData(response.data);
            makeVarFiltro(response.data);
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
                        toast.addEventListener('mouseenter', Swal.stopTimer);
                        toast.addEventListener('mouseleave', Swal.resumeTimer);
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
            $('#procesando').css('display', 'none');
            $('.selectpicker').prop('disabled', false);
            $('.selectpicker').selectpicker('refresh');
        });

}
//
function excFiltroData(Data) {
    //
    sessionStorage.removeItem('Moneda');
    $('#procesando').css('display', 'block');
    $('.selectpicker').prop('disabled', true);
    $('.selectpicker').selectpicker('refresh');
    //
    let jsonData = Data;
    let idSem = jsonData[0]['Id_Semana'];
    let idRet = jsonData[0]['Id_Retail'];
    let idEtd = jsonData[0]['Id_Estado'];
    let idTnd = jsonData[0]['Id_Tienda'];
    let idCat = jsonData[0]['Id_Categoria'];
    let idFab = jsonData[0]['Id_Fabricante'];
    let idMar = jsonData[0]['Id_Marca'];
    let idBar = jsonData[0]['Barcode'];
    let idMnd = jsonData[0]['Id_Moneda'];
    //
    let idSeman = reemplazaTodo(idSem, "*", ",");
    let nSem = idSeman.split(',');
    //
    //debugger;
    if (idMnd == 2) {
        sessionStorage.setItem('sTore', 'getRepMnyMrkPvtD/');
    } else {
        sessionStorage.setItem('sTore', 'getRepMnyMrkPvt/');
    }
    var settings = {
        url: sessionStorage.getItem('urlApi') + sessionStorage.getItem('sTore') + idSem + '/' + idRet + '/' +
            idTnd + '/' + idCat + '/' + idFab + '/' + idMar + '/' + idBar + '',
        method: "get",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
            Authorization: "Bearer " + localStorage.getItem('Token'),
        },
    };
    $.ajax(settings)
        .done(function(response) {
            //debugger;
            let jsonData = response.data;
            graPhFilterData(jsonData, nSem);
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
                        toast.addEventListener('mouseenter', Swal.stopTimer);
                        toast.addEventListener('mouseleave', Swal.resumeTimer);
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
            $('#procesando').css('display', 'none');
            $('.selectpicker').prop('disabled', false);
            $('.selectpicker').selectpicker('refresh');
        });
}
//
function graPhFilterData(Data, arrSem) {
    //
    $('#procesando').css('display', 'block');
    $('.selectpicker').prop('disabled', true);
    $('.selectpicker').selectpicker('refresh');
    //debugger;
    //
    let jsonData = Data;
    let col = Object.keys(jsonData[0]);
    let totalCell = col.length;
    //let arraySem = $('#cboSemanas').val();
    let titSem = arrSem.sort();
    // llenar los titulos de header
    let nomTitulo = [];
    for (let i = 0; i < titSem.length; i++) {
        let Colm = titSem[i];
        document.getElementById('cboTitSemanas').value = Colm;
        let sel = document.getElementById('cboTitSemanas');
        nomTitulo[i] = sel.options[sel.selectedIndex].text;
    }
    //
    $('#totalRegistros').html('Total Registros: ' + jsonData.length);
    //
    let table = new Tabulator('#tblPreciosSemanales', {
        height: "400px",
        layout: "fitDataStretch",
        data: jsonData,
        pagination: "local",
        paginationSize: 25,
        paginationSizeSelector: [25, 50, 75, 100, 500, 1000],
        headerFilterPlaceholder: "...?",
        movableColumns: true,
        tooltips: true,
        movableRows: true,
        locale: true,
        //
        columns: [{
                title: "Retail",
                field: "Retail",
                frozen: true,
                headerFilter: true,
            },
            {
                title: "Tienda",
                field: "Tienda",
                frozen: true,
                headerFilter: true,
            },
            {
                title: "Barra",
                field: "CodigoBarra",
                headerFilter: true,
            },
            {
                title: "Categoria",
                field: "Categoria",
                headerFilter: true,
            },
            {
                title: "Producto",
                field: "Producto",
                headerFilter: true,
            },
            {
                title: "Tamaño",
                field: "Tamano",
                hozAlign: "center",
                headerFilter: true,
            },
            {
                title: "Mínimo",
                field: "Minimo",
                formatter: "money",
                hozAlign: "right",
                formatterParams: {
                    decimal: ",",
                    thousand: ".",
                }
            },
            {
                title: "Máximo",
                field: "Maximo",
                formatter: "money",
                hozAlign: "right",
                formatterParams: {
                    decimal: ",",
                    thousand: ".",
                }
            },
            {
                title: "Promedio",
                field: "Promedio",
                formatter: "money",
                hozAlign: "right",
                formatterParams: {
                    decimal: ",",
                    thousand: ".",
                }
            },
            {
                title: nomTitulo[0],
                field: titSem[0],
                formatter: "money",
                hozAlign: "right",
                formatterParams: {
                    decimal: ",",
                    thousand: ".",
                }
            },
            {
                title: nomTitulo[1],
                field: titSem[1],
                formatter: "money",
                hozAlign: "right",
                formatterParams: {
                    decimal: ",",
                    thousand: ".",
                }
            },
            {
                title: nomTitulo[2],
                field: titSem[2],
                formatter: "money",
                hozAlign: "right",
                formatterParams: {
                    decimal: ",",
                    thousand: ".",
                }
            },
            {
                title: nomTitulo[3],
                field: titSem[3],
                formatter: "money",
                hozAlign: "right",
                formatterParams: {
                    decimal: ",",
                    thousand: ".",
                }
            },
            {
                title: nomTitulo[4],
                field: titSem[4],
                formatter: "money",
                hozAlign: "right",
                formatterParams: {
                    decimal: ",",
                    thousand: ".",
                }
            },
            {
                title: nomTitulo[5],
                field: titSem[5],
                formatter: "money",
                hozAlign: "right",
                formatterParams: {
                    decimal: ",",
                    thousand: ".",
                }
            },
            {
                title: nomTitulo[6],
                field: titSem[6],
                formatter: "money",
                hozAlign: "right",
                formatterParams: {
                    decimal: ",",
                    thousand: ".",
                }
            },
            {
                title: nomTitulo[7],
                field: titSem[7],
                formatter: "money",
                hozAlign: "right",
                formatterParams: {
                    decimal: ",",
                    thousand: ".",
                }
            },
        ],
        langs: {
            "es-ar": {
                pagination: {
                    page_size: "Mostrar: ",
                    first: "<i class='fas fa-backward'></i>",
                    first_title: "Inicio",
                    last: "<i class='fas fa-forward'></i>",
                    last_title: "Ultimo",
                    prev: "<i class='fas fa-caret-left'></i>",
                    prev_title: "Anterior",
                    next: "<i class='fas fa-caret-right'></i>",
                    next_title: "Siguiente",
                },
            },
        },
        rowFormatter: function(row) {
            //
            // debugger;
            let celda = row.getCells();
            // Get Promedio
            let valProm = celda[8].getValue();
            let valField = celda[8].getField()
            let oPciones = totalCell - titSem.length;
            //
            for (let i = oPciones; i < celda.length; i++) {
                let valColm = celda[i].getValue();
                let valField = celda[i].getField();
                if (valColm != null) {
                    if (valColm < valProm) {
                        celda[i].getElement().style.color = "#ffffff";
                        celda[i].getElement().style.backgroundColor = "#067BC2"; //#29335C
                    }
                    if (valColm > valProm) {
                        celda[i].getElement().style.color = "#ffffff"; //
                        //celda[i].getElement().style.backgroundColor = "#DC3545"; //#DB2B39
                        celda[i].getElement().style.backgroundColor = "#E85F5C";

                    }
                }
            }
        }
        //
    });
    //
    table.setLocale('es-ar'); //set locale to spanish
    // trigger download of data.xlsx file
    document
        .getElementById('download-xlsx')
        .addEventListener('click', function() {
            table.download('xlsx', 'ListadoPreciosSemanales.xlsx', {
                sheetName: 'Resultados',
            });
        });

    $('#mainPreciosSemanales').css('display', 'block');
    $('#procesando').css('display', 'none');
    $('.selectpicker').prop('disabled', false);
    $('.selectpicker').selectpicker('refresh');
    //
}
            </script>