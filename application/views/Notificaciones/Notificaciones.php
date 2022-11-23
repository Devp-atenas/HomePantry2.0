<!-- Content Header (Page header) -->
<?php $this->load->view('Plantillas/Header');?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="fas fa-warehouse"></i>&nbsp;Notificación Categoria Cliente:</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('Principal/dashboard') ?>">Home</a></li>
                    <li class="breadcrumb-item active"><a href="<?php echo base_url('Principal/logout') ?>">Salir</a>
                    </li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content Agregar Retail -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Notificación Categoria Cliente</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body" style="display: none;">
                <div class="col-md-12" >
                    <form id="FormNotificaciones">
                        <div class="form-group">
                            <label for="inputCliente">Cliente:</label>
                            <select id="inputCliente" name="inputCliente" class="form-control">
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputTipoReporte">Tipo Reporte:</label>
                            <select id="inputTipoReporte" name="inputTipoReporte" class="form-control">
                                <option value="Seleccione"> -- Seleccione -- </option>
                                <option value="General">General</option>
                                <option value="Detallado">Detallado</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputCategoria">Categoria:</label>
                            <select class="form-control form-control-sm selectpicker"
                                data-live-search="true" title="Seleccione Categorias"
                                name="cboCategoria" id="cboCategoria">
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputReporte">Reporte:</label>
                            <select id="inputReporte" name="inputReporte" class="form-control">
                                <option value="Seleccione"> -- Seleccione -- </option>
                                <option value="Semanal">Semanal</option>
                                <option value="Mensual">Mensual</option>
                            </select>
                        </div>
                        <div id="Semana" class="form-group">
                            <label for="inputSemanales">Semana:</label>
                            <select id="inputSemana" name="inputSemana" class="form-control">
                            </select>
                        </div>
                        <div id="Periodo" class="form-group">
                            <label for="inputPeriodo">Periodo:</label>
                            <select id="inputPeriodo" name="inputPeriodo" class="form-control">
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-12">
                                    <input type="button" id="botonenviar" value="Procesar"
                                        class="btn btn-success float-right">
                                </div>
                            </div>
                        </div>
                    </form>

                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</section>
<?php $this->load->view('Plantillas/Footer');?>
<script>
$("#inputReporte").change(function(){
  if ($("#inputReporte").val()=='Semanal'){
        $("#inputSemana").prop("disabled", false);
        $("#inputPeriodo").prop("disabled", true);
        $('#Periodo').hide();
        $('#Semana').show();
    }else{
        $("#inputSemana").prop("disabled", true);
        $("#inputPeriodo").prop("disabled", false);
        $('#Semana').hide();
        $('#Periodo').show()
    }
});

$("#inputCliente").change(function(){
    $("#cboCategoria").empty();
    $('#cboCategoria').prop('disabled',true);
    $('#cboCategoria').selectpicker('refresh');
    $('#inputTipoReporte').prop('selectedIndex',0);
});

$("#inputTipoReporte").change(function(){
        //debugger;
    if($("#inputTipoReporte").val()=="Detallado"){
        cargarCategoriasCliente()
    }else{
        $("#cboCategoria").empty();
        $('#cboCategoria').prop('disabled',true);
        $('#cboCategoria').selectpicker('refresh');
    }
});
function cargarCategoriasCliente() {
    debugger;
    $("#cboCategoria").empty();
    $('#cboCategoria').prop('disabled',true);
    $('#cboCategoria').selectpicker('refresh');
    var Cliente = $('#inputCliente').val();
    var settings = {
        "url": '<?php echo urlApi; ?>getCategoriaClienteSearch/' + Cliente + '',
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
        $("#cboCategoria").empty();
        //$("#cboBarra").append("<option value='0'>Seleccionar Todos</option>");
        for (var i = 0; i < len; i++) {
            $("#cboCategoria").append("<option value=" + response.data[i].id_Categoria + ">" + response.data[i].id_Categoria + "-" + response.data[i].Categoria.replace(/\s+/g, '') + "</option>");
        }
        $('#cboCategoria').prop('disabled',false);
        $('#cboCategoria').selectpicker('refresh');

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

function CargarCliente() {
    //debugger;
    var settings = {
        "url": '<?php echo urlApi; ?>getss_ClienteCategoria',
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        console.log(response.data);
        debugger;
        let selectCliente = $("#inputCliente");
        selectCliente.find("option").remove();
        selectCliente.append("<option value='' selected disabled> -- Seleccione -- </option>");
        for (var i = 0; i < response.data.length; i++) {
            selectCliente.append("<option value=" + response.data[i].Id_Cliente + ">" + response.data[i].Id_Cliente + "-" + response.data[i].Cliente + "</option>");
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
    })
}
function CargarSemana(){
    var settings = {
        "url": '<?php echo urlApi; ?>getAllSemanaReporte',
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let selectDesde = $("#inputSemana");
        selectDesde.find("option").remove();
        selectDesde.append("<option value='' selected disabled> -- Seleccione -- </option>");
        for (var i = 0; i < response.data.length; i++) {
            selectDesde.append("<option value=" + response.data[i].IDSemana + ">"+response.data[i].IDSemana+"-" + response.data[i].Semana + "</option>");
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
    })
}
function CargarMeses(){
    var settings = {
        "url": '<?php echo urlApi; ?>getMesesAll',
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let selectMeses = $("#inputPeriodo");
        selectMeses.find("option").remove();
        selectMeses.append("<option value='0' selected disabled> -- Seleccione -- </option>");
        for (var i = 0; i < response.data.length; i++) {
            selectMeses.append("<option value=" + response.data[i].IdMes + ">" + response.data[i].Mes + "</option>");
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
    })
}
$("#botonenviar").click(function() {
        debugger;
        var Cliente=$('#inputCliente').val();
        var TipoReporte=$('#inputTipoReporte').val();
        var PeriodoReporte=$('#inputReporte').val();
        var ReporteSemana=$('#inputSemana').val();
        var ReporteMes=$('#inputPeriodo').val();
        var Categoria=$('#cboCategoria').val();
        if(Categoria.length=="0"){
            Categoria="0";
        }
        if (ReporteMes==null){
            ReporteMes="0"
        }
        if (ReporteSemana==null){
            ReporteSemana="0"
        }
        var settings = {
        "url": '<?php echo urlApi; ?>SendNotificacionesEmailCategoria/'+ Cliente +'/'+ TipoReporte +'/'+ PeriodoReporte +'/'+ ReporteSemana +'/'+ ReporteMes +'/'+ Categoria +'',
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
            }
        }
        $.ajax(settings).done(function(response) {
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
                icon: 'success',
                title: response.message,
                confirmButtonText: `Ok`,
            })
            var form = document.querySelector('#FormNotificaciones');
            form.reset();
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

});
$(document).ready(function(){
    //debugger;
    $("#cboCadena").selectpicker();
    $("#inputSemana").prop("disabled", true);
    $("#inputPeriodo").prop("disabled", true);
    CargarCliente();
    CargarSemana();
    CargarMeses();
    //$('#Semana').hide();
    //$('#Periodo').hide();
});
</script>
</body>
</html>