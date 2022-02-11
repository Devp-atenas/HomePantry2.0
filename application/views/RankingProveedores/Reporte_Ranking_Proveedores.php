            <!-- Colocar Include Header y Menu -->
            <?php $this->load->view('Plantillas/Header');?>
            <style type="text/css">
                    .tabulator { font-size: 12px; }
            </style>

            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1><i class="fas fa-award"></i>&nbsp;Ranking Proveedores:</h1>
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
                                        Ranking Proveedores
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
                                                <select class="form-control form-control-sm selectpicker" id="cboSemanas" name="cboSemanas"
                                                    multiple data-selected-text-format="count > 2" multiple data-required="true"
                                                    data-live-search="true" title=" - - Seleccione - -"
                                                    data-max-options="8" data-actions-box="true">
                                                </select>
                                            </div>
                                            <div class="form-group" style="display:none;">
                                                <select class="form-control form-control-sm selectpicker" id="cboTitSemanas" name="cboTitSemanas"
                                                   title=" - - Seleccione - -"
                                                   data-max-options="8" data-actions-box="true">
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <label><i class="fas fa-industry"></i>&nbsp;Retail:</label>
                                            <div class="form-group">
                                                <select class="form-control form-control-sm selectpicker" id="cboRetailers" name="cboRetailers"
                                                    multiple data-selected-text-format="count > 3" multiple data-required="true"
                                                    data-live-search="true" title=" - - Seleccione - -"
                                                    data-actions-box="true">
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <label><i class="fas fa-map-marker-alt"></i>&nbsp;Estado:</label>
                                            <div class="form-group">
                                                <select class="form-control form-control-sm selectpicker" id="cboEstados" name="cboEstados"
                                                    data-selected-text-format="count > 3" multiple data-required="true"
                                                    data-live-search="true" title=" - - Seleccione - -"
                                                    data-actions-box="true">
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <label><i class="fas fa-store"></i>&nbsp;Tienda:</label>
                                            <div class="form-group">
                                                <select class="form-control form-control-sm selectpicker" id="cboTiendas" name="cboTiendas"
                                                    multiple data-selected-text-format="count > 3" multiple data-required="true"
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
                                                <select class="form-control form-control-sm selectpicker dropup " data-required="true" id="cboMoneda" name="cboMoneda">
                                                    <option value="1">Bolivar Soberano</option>
                                                    <option value="2">Dolar Americano</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">

                                            <div class="row">
                                                <div class="col-md-11">
                                                <label><i class="fas fa-filter"></i>&nbsp;Selección:</label>
                                                    <select class="form-control form-control-sm selectpicker" id="cboFiltros" name="cboFiltros"
                                                        data-required="true"
                                                        data-live-search="true" title=" - - Seleccione Filtro Guardado - -">
                                                    </select>
                                                </div>
                                                <div class="col-md-1 mt-6">
                                                    <button class="btn btn-secondary btn-sm btn-block" onClick="Grabar();" title="Grabar Filtros"><i class="fas fa-save"></i></button>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-sm-3">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <button class="btn btn-danger btn-sm btn-block"
                                                        onClick="Reset();" title="Borrar Filtros"><i
                                                            class="fas fa-times-circle"></i>&nbsp;Borrar</button>
                                                </div>
                                                <div class="col-md-9">
                                                    <button id="btnProcesar"
                                                        class="btn btn-success  btn-sm btn-block"
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
                    <span><img src="<?php echo base_url('dist/img/ajax-loader8.gif') ?>"><strong>&nbsp;&nbsp;Espere,  Cargando datos...!
                </div>
                <!-- /.cargando filtros -->
                <!-- .procesando filtros-->
                <div class="container-fluid text-center text-danger pt-3" id="procesando" style="display:none;">
                    <span><img src="<?php echo base_url('dist/img/ajax-loader8.gif') ?>"><strong>&nbsp;&nbsp;Espere,  Procesando los datos...!
                </div>
                <!-- /.procesando filtros -->

                <div class="container-fluid" id="mainPreciosSemanales" style="display:none;" >

                    <div class="row">

                        <div class="col-md-12">

                            <div class="card card-secondary card-outline">

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

                <!-- /.container-fluid -->

            </section>
            <!-- /.content -->

            <!-- Windows Modal Visualizar Registros-->
            <?php $this->load->view('Plantillas/Footer');?>
            <script src="<?php echo base_url('assets/constantes/url.js') ?>"></script>

            <script>
            let columnas="";
$(document).ready(function() {
    $(function() {
        //debugger;
        $(".selectpicker").selectpicker();
        sessionStorage.clear();
        url();
        //$("#cboSemanas").prop("disabled", true);
        fillSem();
    });
});
            </script>

            <script>
function Reset() {
    $("#cboSemanas").prop("disabled", false);
    $("#cboSemanas").prop("selectedIndex", 0);
    $("#cargando").css("display", "none");
    $("#mainPreciosSemanales").css("display", "none");
    $("#totalRegistros").html("");
}
//
$(function() {
    //debugger;
    $("#cboSemanas").on("hide.bs.select", function (e, clickedIndex, isSelected, previousValue) {
        let idSem = $('#cboSemanas').val();
        if (idSem ==null || idSem == "" ||	idSem.length == 0 || idSem == undefined) {
            return false;
        }
        Limpieza();
        fillRet();
    });
    $("#cboRetailers").on("hide.bs.select", function (e, clickedIndex, isSelected, previousValue) {
        let idSem = $('#cboSemanas').val();
        if (idSem ==null || idSem == "" ||	idSem.length == 0 || idSem == undefined) {
            return false;
        }
        let idRet = $('#cboRetailers').val();
        if (idRet ==null || idRet == "" ||	idRet.length == 0 || idRet == undefined) {
            return false;
        }
        Limpieza();
        fillEtd();
    });
    $("#cboEstados").on("hide.bs.select", function (e, clickedIndex, isSelected, previousValue) {
        let idSem = $('#cboSemanas').val();
        if (idSem ==null || idSem == "" ||	idSem.length == 0 || idSem == undefined) {
            return false;
        }
        let idRet = $('#cboRetailers').val();
        if (idRet ==null || idRet == "" ||	idRet.length == 0 || idRet == undefined) {
            return false;
        }
        let idEtd = $('#cboEstados').val();
        if (idEtd ==null || idEtd == "" ||	idEtd.length == 0 || idEtd == undefined) {
            return false;
        }
        Limpieza();
        fillTnd();
    });
    $("#cboTiendas").on("hide.bs.select", function (e, clickedIndex, isSelected, previousValue) {
        let idSem = $('#cboSemanas').val();
        if (idSem ==null || idSem == "" ||	idSem.length == 0 || idSem == undefined) {
            return false;
        }
        let idRet = $('#cboRetailers').val();
        if (idRet ==null || idRet == "" ||	idRet.length == 0 || idRet == undefined) {
            return false;
        }
        let idTnd = $('#cboTiendas').val();
        if (idTnd ==null || idTnd == "" ||	idTnd.Length == 0 || idTnd == undefined) {
            return false;
        }
        Limpieza();
        fillCat();
    });
    $("#cboCategorias").on("hide.bs.select", function (e, clickedIndex, isSelected, previousValue) {
        let idSem = $('#cboSemanas').val();
        if (idSem ==null || idSem == "" ||	idSem.length == 0 || idSem == undefined) {
            return false;
        }
        let idRet = $('#cboRetailers').val();
        if (idRet ==null || idRet == "" ||	idRet.length == 0 || idRet == undefined) {
            return false;
        }
        let idTnd = $('#cboTiendas').val();
        if (idTnd ==null || idTnd == "" ||	idTnd.Length == 0 || idTnd == undefined) {
            return false;
        }
        let idCat = $('#cboCategorias').val();
        if (idCat ==null || idCat == "" ||	idCat.Length == 0 || idCat == undefined) {
            return false;
        }
        Limpieza();
        fillFab();
    });
    $("#cboFabricantes").on("hide.bs.select", function (e, clickedIndex, isSelected, previousValue) {
        let idSem = $('#cboSemanas').val();
        if (idSem ==null || idSem == "" ||	idSem.length == 0 || idSem == undefined) {
            return false;
        }
        let idRet = $('#cboRetailers').val();
        if (idRet ==null || idRet == "" ||	idRet.length == 0 || idRet == undefined) {
            return false;
        }
        let idTnd = $('#cboTiendas').val();
        if (idTnd ==null || idTnd == "" ||	idTnd.Length == 0 || idTnd == undefined) {
            return false;
        }
        let idCat = $('#cboCategorias').val();
        if (idCat ==null || idCat == "" ||	idCat.Length == 0 || idCat == undefined) {
            return false;
        }
        let idFab = $('#cboCategorias').val();
        if (idFab ==null || idFab == "" ||	idFab.Length == 0 || idFab == undefined) {
            return false;
        }
        Limpieza();
        fillMar();
    });
    $("#cboMarcas").on("hide.bs.select", function (e, clickedIndex, isSelected, previousValue) {
        let idSem = $('#cboSemanas').val();
        if (idSem ==null || idSem == "" ||	idSem.length == 0 || idSem == undefined) {
            return false;
        }
        let idRet = $('#cboRetailers').val();
        if (idRet ==null || idRet == "" ||	idRet.length == 0 || idRet == undefined) {
            return false;
        }
        let idTnd = $('#cboTiendas').val();
        if (idTnd ==null || idTnd == "" ||	idTnd.Length == 0 || idTnd == undefined) {
            return false;
        }
        let idCat = $('#cboCategorias').val();
        if (idCat ==null || idCat == "" ||	idCat.Length == 0 || idCat == undefined) {
            return false;
        }
        let idFab = $('#cboCategorias').val();
        if (idFab ==null || idFab == "" ||	idFab.Length == 0 || idFab == undefined) {
            return false;
        }
        let idMar = $('#cboCategorias').val();
        if (idMar ==null || idMar == "" ||	idMar.Length == 0 || idMar == undefined) {
            return false;
        }
        Limpieza();
        fillCod();
    });

});
//
function Limpieza() {
    //
    $("#mainPreciosSemanales").css("display", "none");
    //
}
//
function fillSem() {
    //debugger;
    $("#cargando").css("display", "block");
    $('.selectpicker').prop('disabled', true);
    $('.selectpicker').selectpicker('refresh');
    var settings = {
        url: sessionStorage.getItem("urlApi") + "getAllSemRanProv",
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
            $("#cboTitSemanas").empty();
		    $("#cboSemanas").find("option").clone().appendTo("#cboTitSemanas");
            $("#cboSemanas").focus();
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
                window.location = "/retailscannig/index.php";
            }
        })
        .always(function(jqXHR, textStatus) {
            $("#cargando").css("display", "none");
            $('.selectpicker').prop('disabled', false);
            $('.selectpicker').selectpicker('refresh');
        });
}
//
function fillRet() {
    //
    $("#cargando").css("display", "block");
    $('.selectpicker').prop('disabled', true);
    $('.selectpicker').selectpicker('refresh');
    let idSem = $('#cboSemanas').val();
    var settings = {
        url: sessionStorage.getItem("urlApi") + "getAllRetxPreSem/" + idSem + '',
        method: "get",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
            Authorization: "Bearer " + localStorage.getItem("Token"),
        },
    };
    $.ajax(settings)
        .done(function(response) {
            let select = $("#cboRetailers");
            select.find("option").remove();
            for (var i = 0; i < response.data.length; i++) {
                    select.append(
                        "<option value=" +
                        response.data[i].id +
                        ">" +
                        response.data[i].nombre +
                        "</option>"
                    );
            }
            $("#cboRetailers").focus();
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
                window.location = "/retailscannig/index.php";
            }
        })
        .always(function(jqXHR, textStatus) {
            $("#cargando").css("display", "none");
            $('.selectpicker').prop('disabled', false);
            $('.selectpicker').selectpicker('refresh');
        });
}
//
function fillEtd() {
    //
    $("#cargando").css("display", "block");
    $('.selectpicker').prop('disabled', true);
    $('.selectpicker').selectpicker('refresh');
    let idSem = $("#cboSemanas").val();
    let idRet = $("#cboRetailers").val();
    //debugger;
    var settings = {
        url: sessionStorage.getItem("urlApi") + "getAllEtdxPreSem/" + idSem + '/' + idRet + '',
        method: "get",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
            Authorization: "Bearer " + localStorage.getItem("Token"),
        },
    };
    $.ajax(settings)
        .done(function(response) {
            let select = $("#cboEstados");
            select.find("option").remove();
            for (var i = 0; i < response.data.length; i++) {
                    select.append(
                        "<option value=" +
                        response.data[i].id +
                        ">" +
                        response.data[i].nombre +
                        "</option>"
                    );
            }
            $("#cboEstados").focus();
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
                window.location = "/retailscannig/index.php";
            }
        })
        .always(function(jqXHR, textStatus) {
            $("#cargando").css("display", "none");
            $('.selectpicker').prop('disabled', false);
            $('.selectpicker').selectpicker('refresh');
        });
}
//
function fillTnd() {
    //
    $("#cargando").css("display", "block");
    $('.selectpicker').prop('disabled', true);
    $('.selectpicker').selectpicker('refresh');
    let idSem = $("#cboSemanas").val();
    let idRet = $("#cboRetailers").val();
    let idEtd = $("#cboEstados").val();
    var settings = {
        url: sessionStorage.getItem("urlApi") + "getAllTndxPreSem/" + idSem + '/' + idRet +  '/' + idEtd + '',
        method: "get",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
            Authorization: "Bearer " + localStorage.getItem("Token"),
        },
    };
    $.ajax(settings)
        .done(function(response) {
            let select = $("#cboTiendas");
            select.find("option").remove();
            for (var i = 0; i < response.data.length; i++) {
                    select.append(
                        "<option value=" +
                        response.data[i].id +
                        ">" +
                        response.data[i].nombre +
                        "</option>"
                    );
            }
            $("#cboTiendas").focus();
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
                window.location = "/retailscannig/index.php";
            }
        })
        .always(function(jqXHR, textStatus) {
            $("#cargando").css("display", "none");
            $('.selectpicker').prop('disabled', false);
            $('.selectpicker').selectpicker('refresh');
        });
}
//
function fillCat() {
    //
    $("#cargando").css("display", "block");
    $('.selectpicker').prop('disabled', true);
    $('.selectpicker').selectpicker('refresh');
    let idSem = $("#cboSemanas").val();
    let idRet = $("#cboRetailers").val();
    let idTnd = $("#cboTiendas").val();
    //
    idSem  = idSem.join();
    idRet  = idRet.join();
    idTnd  = idTnd.join();
    //
    idSem = reemplazaTodo(idSem, ",", "*");
    idRet = reemplazaTodo(idRet, ",", "*");
    idTnd = reemplazaTodo(idTnd, ",", "*");
    //
    var settings = {
        url: sessionStorage.getItem("urlApi") + "getAllCatxPreSem/" + idSem + '/' + idRet + '/' + idTnd + '',
        method: "get",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
            Authorization: "Bearer " + localStorage.getItem("Token"),
        },
    };
    $.ajax(settings)
        .done(function(response) {
            let select = $("#cboCategorias");
            select.find("option").remove();
            for (var i = 0; i < response.data.length; i++) {
                    select.append(
                        "<option value=" +
                        response.data[i].id +
                        ">" +
                        response.data[i].nombre +
                        "</option>"
                    );
            }
            $("#cboCategorias").focus();
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
                window.location = "/retailscannig/index.php";
            }
        })
        .always(function(jqXHR, textStatus) {
            $("#cargando").css("display", "none");
            $('.selectpicker').prop('disabled',false);
            $('.selectpicker').selectpicker('refresh');
        });
}
//
function fillFab() {
    //
    $("#cargando").css("display", "block");
    $('.selectpicker').prop('disabled', true);
    $('.selectpicker').selectpicker('refresh');
    let idSem = $("#cboSemanas").val();
    let idRet = $("#cboRetailers").val();
    let idTnd = $("#cboTiendas").val();
    let idCat = $("#cboCategorias").val();
    var settings = {
        url: sessionStorage.getItem("urlApi") + "getAllFabxPreSem/" + idSem + '/' + idRet + '/' + idTnd + '/' + idCat + '',
        method: "get",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
            Authorization: "Bearer " + localStorage.getItem("Token"),
        },
    };
    $.ajax(settings)
        .done(function(response) {
            let select = $("#cboFabricantes");
            select.find("option").remove();
            for (var i = 0; i < response.data.length; i++) {
                    select.append(
                        "<option value=" +
                        response.data[i].id +
                        ">" +
                        response.data[i].nombre +
                        "</option>"
                    );
            }
            $("#cboFabricantes").focus();
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
                window.location = "/retailscannig/index.php";
            }
        })
        .always(function(jqXHR, textStatus) {
            $("#cargando").css("display", "none");
            $('.selectpicker').prop('disabled', false);
            $('.selectpicker').selectpicker('refresh');
        });
}
//
function fillMar() {
    //
    $("#cargando").css("display", "block");
    $('.selectpicker').prop('disabled', true);
    $('.selectpicker').selectpicker('refresh');
    let idSem = $("#cboSemanas").val();
    let idRet = $("#cboRetailers").val();
    let idTnd = $("#cboTiendas").val();
    let idCat = $("#cboCategorias").val();
    let idFab = $("#cboFabricantes").val();
    var settings = {
        url: sessionStorage.getItem("urlApi") + "getAllMrcxPreSem/" + idSem + '/' + idRet + '/' + idTnd + '/' + idCat + '/' + idFab + '',
        method: "get",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
            Authorization: "Bearer " + localStorage.getItem("Token"),
        },
    };
    $.ajax(settings)
        .done(function(response) {
            let select = $("#cboMarcas");
            select.find("option").remove();
            for (var i = 0; i < response.data.length; i++) {

                    select.append(
                        "<option value=" +
                        response.data[i].id +
                        ">" +
                        response.data[i].nombre +
                        "</option>"
                    );

            }
            $("#cboMarcas").focus();
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
                window.location = "/retailscannig/index.php";
            }
        })
        .always(function(jqXHR, textStatus) {
            $("#cargando").css("display", "none");
            $('.selectpicker').prop('disabled', false);
            $('.selectpicker').selectpicker('refresh');
        });
}
//
function fillCod() {
    //
    $("#cargando").css("display", "block");
    $('.selectpicker').prop('disabled', true);
    $('.selectpicker').selectpicker('refresh');
    let idSem = $("#cboSemanas").val();
    let idRet = $("#cboRetailers").val();
    let idTnd = $("#cboTiendas").val();
    let idCat = $("#cboCategorias").val();
    let idFab = $("#cboFabricantes").val();
    let idMar = $("#cboMarcas").val();
    var settings = {
        url: sessionStorage.getItem("urlApi") + "getAllCodBarxPreSem/" + idSem + '/' + idRet + '/' + idTnd + '/' + idCat + '/' + idFab + '/' + idMar + '',
        method: "get",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
            Authorization: "Bearer " + localStorage.getItem("Token"),
        },
    };
    $.ajax(settings)
        .done(function(response) {
            let select = $("#cboBarcodes");
            select.find("option").remove();
            for (var i = 0; i < response.data.length; i++) {
                    select.append(
                        "<option value=" +
                        response.data[i].id +
                        ">" +
                        response.data[i].nombre +
                        "</option>"
                    );
            }
            $("#cboBarcodes").focus();
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
                window.location = "/retailscannig/index.php";
            }
        })
        .always(function(jqXHR, textStatus) {
            $("#cargando").css("display", "none");
            $('.selectpicker').prop('disabled', false);
            $('.selectpicker').selectpicker('refresh');
        });
}
//
function ExcPrcWeek() {
    //
    $("#procesando").css("display", "block");
    $('.selectpicker').prop('disabled', true);
    $('.selectpicker').selectpicker('refresh');
    $("#totalRegistros").html("");
    Limpieza();
    //
    let idSemana = $("#cboSemanas").val();
    //
    if (idSemana.length > 8) {
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
            title: "Seleccione 8 Semanas máximo..!",
        });
        //
        $("#procesando").css("display", "none");
        $('.selectpicker').prop('disabled', false);
        $('.selectpicker').selectpicker('refresh');
        return false;
    }
    //
    let idSem = $("#cboSemanas").val();
    let idRet = $("#cboRetailers").val();
    let idTnd = $("#cboTiendas").val();
    let idCat = $("#cboCategorias").val();
    let idFab = $("#cboFabricantes").val();
    let idMar = $("#cboMarcas").val();
    let idBar = $("#cboBarcodes").val();
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
    // debugger;
    //
    var settings = {
        url: sessionStorage.getItem("urlApi") +
            "getRepPreSemPvt/" + idSem + '/' + idRet +  '/' + idTnd + '/'  + idCat + '/' + idFab +  '/' + idMar + '/' + idBar + '',
        method: "get",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
            Authorization: "Bearer " + localStorage.getItem("Token"),
        },
    };
    $.ajax(settings)
        .done(function(response) {
            console.log(response);
            //
            debugger;
            let jsonData = response.data;
            //
            let col = Object.keys(jsonData[0]);
            let totalCell = col.length;
            let arraySem = $("#cboSemanas").val();
            let titSem = arraySem.sort();
            // llenar los titulos de header
            let nomTitulo = [];
            for (let i = 0; i < titSem.length; i++) {
                let Colm = titSem[i];
                document.getElementById('cboTitSemanas').value = Colm;
                let sel = document.getElementById("cboTitSemanas");
                nomTitulo[i] = sel.options[sel.selectedIndex].text;
            }
            //
            $("#totalRegistros").html("Total Registros: " + jsonData.length);
            //
            let table = new Tabulator("#tblPreciosSemanales", {
                height: "400px",
                layout: "fitDataStretch",
                data: jsonData,
                pagination: "local",
                paginationSize: 25,
                paginationSizeSelector: [25, 50, 75, 100, 500,1000],
                headerFilterPlaceholder: "...?",
                movableColumns: true,
                tooltips: true,
                movableRows: true,
                locale: true,
                //
                columns: [
                    { title: "Retail", field: "Retail", frozen: true, headerFilter: true, },
                    { title: "Tienda", field: "Tienda", frozen: true, headerFilter: true, },
                    { title: "Barra", field: "CodigoBarra", headerFilter: true, },
                    { title: "Categoria", field: "Categoria", headerFilter: true, },
                    { title: "Producto", field: "Producto", headerFilter: true, },
                    { title: "Tamaño", field: "Tamano", hozAlign: "center", headerFilter: true, },
                    { title: "Mínimo", field: "Minimo", formatter: "money", hozAlign: "right", formatterParams: { decimal: ",", thousand: ".", } },
                    { title: "Máximo", field: "Maximo", formatter: "money", hozAlign: "right", formatterParams: { decimal: ",", thousand: ".", } },
                    { title: "Promedio", field: "Promedio", formatter: "money", hozAlign: "right", formatterParams: { decimal: ",", thousand: ".", } },
                    { title: nomTitulo[0], field: titSem[0], formatter: "money", hozAlign: "right", formatterParams: { decimal: ",", thousand: ".", } },
                    { title: nomTitulo[1], field: titSem[1], formatter: "money", hozAlign: "right", formatterParams: { decimal: ",", thousand: ".", } },
                    { title: nomTitulo[2], field: titSem[2], formatter: "money", hozAlign: "right", formatterParams: { decimal: ",", thousand: ".", } },
                    { title: nomTitulo[3], field: titSem[3], formatter: "money", hozAlign: "right", formatterParams: { decimal: ",", thousand: ".", } },
                    { title: nomTitulo[4], field: titSem[4], formatter: "money", hozAlign: "right", formatterParams: { decimal: ",", thousand: ".", } },
                    { title: nomTitulo[5], field: titSem[5], formatter: "money", hozAlign: "right", formatterParams: { decimal: ",", thousand: ".", } },
                    { title: nomTitulo[6], field: titSem[6], formatter: "money", hozAlign: "right", formatterParams: { decimal: ",", thousand: ".", } },
                    { title: nomTitulo[7], field: titSem[7], formatter: "money", hozAlign: "right", formatterParams: { decimal: ",", thousand: ".", } },
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
                rowFormatter: function (row) {
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
                                celda[i].getElement().style.backgroundColor = "blue";
                            }
                            if (valColm > valProm) {
                                celda[i].getElement().style.color = "#ffffff"; //
                                celda[i].getElement().style.backgroundColor = "#FF0000";
                            }
                        }
                    }
                }
                //
            });
            //
            table.setLocale("es-ar"); //set locale to spanish
            // trigger download of data.xlsx file
            document
                .getElementById("download-xlsx")
                .addEventListener("click", function() {
                    table.download("xlsx", "ListadoPreciosSemanales.xlsx", {
                        sheetName: "Resultados",
                    });
                });

            $("#mainPreciosSemanales").css("display", "block");
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
                window.location = "/retailscannig/index.php";
            }
        })
        .always(function(jqXHR, textStatus) {
            $("#procesando").css("display", "none");
            $('.selectpicker').prop('disabled', false);
            $('.selectpicker').selectpicker('refresh');
        });
}
//
function reemplazaTodo(text, busca, reemplaza) {
    while (text.toString().indexOf(busca) != -1)
        text = text.toString().replace(busca, reemplaza);
    return text;
}
//
            </script>