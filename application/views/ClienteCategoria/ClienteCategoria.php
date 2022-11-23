<!-- Content Header (Page header) -->
<?php $this->load->view('Layout/Header');?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="fas fa-shapes"></i>&nbsp;Mantenimiento de Cliente Categoria:</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('Principal/dashboard')?>">Inicio</a></li>
                    <li class="breadcrumb-item active"><a href="<?php echo base_url('Principal/logout')?>">Salir</a>
                    </li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content Agregar Categoria -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Cliente Categoria</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body" style="display: none;">
                    <form id="FormCategoriaCliente">
                        <div class="form-group">
                            <label for="inputCliente">Cliente:</label>
                            <select id="inputCliente" name="inputCliente" class="form-control">
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputCategoria">Categoria:</label>
                            <select id="inputCategoria" name="inputCategoria" class="form-control">
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputMinimo">Semanal:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name="inputSemanal" id="inputSemanal" class="form-check-input">&nbsp;&nbsp;&nbsp;&nbsp;
                            <label for="inputMaximo">Mensual:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name="inputMensual" id="inputMensual" class="form-check-input">
                        </div>
                        <div class="form-group">
                            <label for="inputMaximo">Semanal Desde:</label>
                            <select id="inputSemanaDesde" name="inputSemanaDesde" class="form-control">
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputMaximo">Semanal Hasta:</label>
                            <select name="inputSemanaHasta" id="inputSemanaHasta" class="form-control">
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputMaximo">Semanal Publicación:</label>
                            <select name="inputSemanaPublicacion" id="inputSemanaPublicacion" class="form-control">
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputMaximo">Mensual Desde:</label>
                            <select name="inputPeriodoDesde" id="inputPeriodoDesde" class="form-control">
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputMaximo">Mensual Hasta:</label>
                            <select name="inputPeriodoHasta" id="inputPeriodoHasta" class="form-control">
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputMaximo">Mensual Publicación:</label>
                            <select name="inputPeriodoPublicacion" id="inputPeriodoPublicacion" class="form-control">
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputMaximo">Para(Quien Recibe):</label>
                            <input type="text" name="para_email" id="para_email" class="form-control">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-12">
                                    <input type="button" id="botonenviar" value="Guardar"
                                        class="btn btn-success float-right">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</section>
<!-- /Windows datatables Categoria-->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Listados Cliente Categoria</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="TableCategoriaCliente" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Cliente</th>
                                        <th>Categoria</th>
                                        <th>Activa</th>
                                        <th>Semanal</th>
                                        <th>Mensual</th>
                                        <th>Semanal Desde</th>
                                        <th>Semana Publicación</th>
                                        <th>Mensual Desde</th>
                                        <th>Mensual Publicación</th>
                                        <th>Para</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tfoot>
                                    <tr>
                                        <th>Cliente</th>
                                        <th>Categoria</th>
                                        <th>Activa</th>
                                        <th>Semanal</th>
                                        <th>Mensual</th>
                                        <th>Semanal Desde</th>
                                        <th>Semana Publicación</th>
                                        <th>Mensual Desde</th>
                                        <th>Mensual Publicación</th>
                                        <th>Para</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Windows Modal Editar Registros-->
<div class="modal fade" id="modal-CategoriaClienteEditar">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Categoria Cliente</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="FormCategoriaClienteEdit">
                                <div class="form-group">
                                    <label for="inputIdEdit">Código:</label>
                                    <input type="text" name="inputIdEdit" id="inputIdEdit" class="form-control"
                                        readonly>
                                </div>
                                <div class="form-group">
                                    <label for="inputClienteEdit">Cliente:</label>
                                    <select id="inputClienteEdit" name="inputClienteEdit" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputCategoriaEdit">Categoria:</label>
                                    <select id="inputCategoriaEdit" name="inputCategoriaEdit" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group">
                                        <label for="inputSemanalEdita">Semanal:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="checkbox" name="inputSemanalEdit" id="inputSemanalEdit" class="form-check-input">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="inputMensualEdit">Mensual:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="checkbox" name="inputMensualEdit" id="inputMensualEdit" class="form-check-input">
                                </div>
                                <div class="form-group">
                                    <label for="inputSemanaDesdeEdits">Semanal Desde:</label>
                                    <select id="inputSemanaDesdeEdit" name="inputSemanaDesdeEdit" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputSemanaHastaEdit">Semanal Hasta:</label>
                                    <select name="inputSemanaHastaEdit" id="inputSemanaHastaEdit" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputSemanaPublicacionEdit">Semanal Publicación:</label>
                                    <select name="inputSemanaPublicacionEdit" id="inputSemanaPublicacionEdit" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputPeriodoDesdeEdit">Mensual Desde:</label>
                                    <select name="inputPeriodoDesdeEdit" id="inputPeriodoDesdeEdit" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputPeriodoHastaEdit">Mensual Hasta:</label>
                                    <select name="inputPeriodoHastaEdit" id="inputPeriodoHastaEdit" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputPeriodoPublicacionEdit">Mensual Publicación:</label>
                                    <select name="inputPeriodoPublicacionEdit" id="inputPeriodoPublicacionEdit" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputPeriodoPublicacionEdit">Activa:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox" name="Activa" id="Activa" class="form-check-input">
                                </div>
                                <div class="form-group">
                                    <label for="inputPeriodoPublicacionEdit">Para(Quien Recibe):</label>
                                    <input type="text" name="inputparaEdit" id="inputparaEdit" class="form-control">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12">
                                            <input type="button" onclick="ActualizarRegistro()" id="editUsuario"
                                                value="Guardar" class="btn btn-success float-right">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="modal-footer justify-content-between">
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- Windows Modal Visualizar Registros-->
<div class="modal fade" id="modal-CategoriaClienteVisualizar">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Categoria Cliente</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                                        <div id="NombreVer" class="row">
                                            <div class="col-md-6">
                                                <label for="inputCodigoVer">Código:</label>
                                                <input type="text" name="nombres" id="inputCodigoVer"
                                                    class="form-control form-control-sm" readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputCategoriaVer">Categoria:</label>
                                                <input type="text" name="Categoria" id="inputCategoriaVer"
                                                    class="form-control form-control-sm" readonly>
                                            </div>
                                        </div>
                                        <div id="NombreVer" class="row">
                                            <div class="col-md-6">
                                                <label for="inputClienteVer">Cliente:</label>
                                                <input type="text" name="inputClienteVer" id="inputClienteVer"
                                                    class="form-control form-control-sm" readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputSemanalVer">Semanal:</label>
                                                <input type="text" name="inputSemanalVer" id="inputSemanalVer"
                                                    class="form-control form-control-sm" readonly>
                                            </div>
                                        </div>
                                        <div id="NombreVer" class="row">
                                            <div class="col-md-6">
                                                <label for="inputMensualVer">Mensual:</label>
                                                <input type="text" name="inputMensualVer" id="inputMensualVer"
                                                    class="form-control form-control-sm" readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputSemanalDesdeVer">Semanal Desde:</label>
                                                <input type="text" name="inputSemanalDesdeVer" id="inputSemanalDesdeVer"
                                                    class="form-control form-control-sm" readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputSemanalHastaVer">Semanal Hasta:</label>
                                                <input type="text" name="inputSemanalHastaVer" id="inputSemanalHastaVer"
                                                    class="form-control form-control-sm" readonly>
                                            </div>
                                            <div id="NombreVer" class="col-md-6">
                                                <label for="inputISemanalPublicaciónVer">Semanal Publicación:</label>
                                                <input type="text" name="inputISemanalPublicaciónVer" id="inputISemanalPublicaciónVer"
                                                    class="form-control form-control-sm" readonly>
                                            </div>
                                        </div>
                                        <div id="NombreVer" class="row">
                                            <div class="col-md-6">
                                                <label for="inputMensualDesdeVer">Mensual Desde:</label>
                                                <input type="text" name="inputMensualDesdeVer" id="inputMensualDesdeVer"
                                                    class="form-control form-control-sm" readonly>
                                            </div>
                                            <div id="NombreVer" class="col-md-6">
                                                <label for="inputMensualHastaVer">Mensual Hasta:</label>
                                                <input type="text" name="inputMensualHastaVer" id="inputMensualHastaVer"
                                                    class="form-control form-control-sm" readonly>
                                            </div>
                                        </div>
                                        <div id="NombreVer" class="row">
                                            <div class="col-md-12">
                                                <label for="inputMensualPublicacionVer">Mensual Publicación:</label>
                                                <input type="text" name="inputMensualPublicacionVer" id="inputMensualPublicacionVer"
                                                    class="form-control form-control-sm" readonly>
                                            </div>
                                        </div>
                                        <div id="NombreVer" class="row">
                                            <div class="col-md-12">
                                                <label for="inputMensualPublicacionVer">Para(Quien Recibe):</label>
                                                <input type="text" name="inputparaVer" id="inputparaVer"
                                                    class="form-control form-control-sm" readonly>
                                            </div>
                                        </div>
                                    </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="modal-footer justify-content-between">
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- /Windows Modal Visualizar Registros-->
<?php $this->load->view('Layout/Footer');?>

<script>
function cargarClienteEdit(Id_Cliente){
    var settings = {
        "url": '<?php echo urlApi; ?>getAllCliente',
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let selectClienteEdit = $("#inputClienteEdit");
        selectClienteEdit.find("option").remove();
        selectClienteEdit.append("<option value='' selected disabled> -- Seleccione -- </option>");
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].Id_Cliente == Id_Cliente) {
                selectClienteEdit.append("<option value=" + response.data[i].Id_Cliente + " selected>" + response.data[i].Id_Cliente + "-" + response.data[i].Cliente + "</option>");
            }else{
                selectClienteEdit.append("<option value=" + response.data[i].Id_Cliente + ">" + response.data[i].Id_Cliente + "-" + response.data[i].Cliente + "</option>");
            }
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
function cargarCategoriaEdit(Id_Categoria){
    var settings = {
        "url": '<?php echo urlApi; ?>getAllCategorias',
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let selectCategoriaEdit = $("#inputCategoriaEdit");
        selectCategoriaEdit.find("option").remove();
        selectCategoriaEdit.append("<option value='' selected disabled> -- Seleccione -- </option>");
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id == Id_Categoria) {
                selectCategoriaEdit.append("<option value=" + response.data[i].id + " selected>" + response.data[i].id + "-" + response.data[i].nombre + "</option>");
            }else{
                selectCategoriaEdit.append("<option value=" + response.data[i].id + ">" + response.data[i].id + "-" + response.data[i].nombre + "</option>");
            }
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
function SemanalDesdeEdit(Id_SemanaDesde){
    console.log(Id_SemanaDesde);
    debugger;
    var settings = {
        "url": '<?php echo urlApi; ?>getSemanaAll',
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let selectDesdeEdit = $("#inputSemanaDesdeEdit");
        selectDesdeEdit.find("option").remove();
        selectDesdeEdit.append("<option value='0' selected> -- Seleccione -- </option>");
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].IDSemana == Id_SemanaDesde){
            selectDesdeEdit.append("<option value=" + response.data[i].IDSemana + " selected>" + response.data[i].Semana + "</option>");
        }else{
            selectDesdeEdit.append("<option value=" + response.data[i].IDSemana + ">" + response.data[i].Semana + "</option>");
            }
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
function SemanalHastaEdit(Id_SemanaHasta){
    debugger;
    var settings = {
        "url": '<?php echo urlApi; ?>getSemanaAll',
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let selectHastaEdit = $("#inputSemanaHastaEdit");
        selectHastaEdit.find("option").remove();
        selectHastaEdit.append("<option value='0' selected> -- Seleccione -- </option>");
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].IDSemana == Id_SemanaHasta){
                selectHastaEdit.append("<option value=" + response.data[i].IDSemana + " selected>" + response.data[i].Semana + "</option>");
        }else{
            selectHastaEdit.append("<option value=" + response.data[i].IDSemana + ">" + response.data[i].Semana + "</option>");
            }
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
function SemanalPublicaciónEdit(Id_SemanaPub){
    debugger;
    var settings = {
        "url": '<?php echo urlApi; ?>getSemanaAll',
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let selectPublicacionSemanaEdit = $("#inputSemanaPublicacionEdit");
        selectPublicacionSemanaEdit.find("option").remove();
        selectPublicacionSemanaEdit.append("<option value='0' selected> -- Seleccione -- </option>");
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].IDSemana == Id_SemanaPub){
                selectPublicacionSemanaEdit.append("<option value=" + response.data[i].IDSemana + " selected>" + response.data[i].Semana + "</option>");
        }else{
            selectPublicacionSemanaEdit.append("<option value=" + response.data[i].IDSemana + ">" + response.data[i].Semana + "</option>");
            }
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
function MensualDesdeEdit(Id_PeriodoDesde){
    debugger;
    var settings = {
        "url": '<?php echo urlApi; ?>getSemanaAll',
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let selectPeriodoDesdeEdit = $("#inputPeriodoDesdeEdit");
        selectPeriodoDesdeEdit.find("option").remove();
        selectPeriodoDesdeEdit.append("<option value='0' selected> -- Seleccione -- </option>");
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].IDSemana == Id_PeriodoDesde){
                selectPeriodoDesdeEdit.append("<option value=" + response.data[i].IDSemana + " selected>" + response.data[i].Semana + "</option>");
        }else{
            selectPeriodoDesdeEdit.append("<option value=" + response.data[i].IDSemana + ">" + response.data[i].Semana + "</option>");
            }
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
function MensualHastaEdit(Id_PeriodoHasta){
    debugger;
    var settings = {
        "url": '<?php echo urlApi; ?>getSemanaAll',
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let selectPeriodoHastaEdit = $("#inputPeriodoHastaEdit");
        selectPeriodoHastaEdit.find("option").remove();
        selectPeriodoHastaEdit.append("<option value='0' selected> -- Seleccione -- </option>");
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].IDSemana == Id_PeriodoHasta){
                selectPeriodoHastaEdit.append("<option value=" + response.data[i].IDSemana + " selected>" + response.data[i].Semana + "</option>");
        }else{
            selectPeriodoHastaEdit.append("<option value=" + response.data[i].IDSemana + ">" + response.data[i].Semana + "</option>");
            }
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
function MensualPublicaciónEdit(Id_PeriodoPub){
    debugger;
    var settings = {
        "url": '<?php echo urlApi; ?>getSemanaAll',
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let selectPeriodoPublicacionEdit = $("#inputPeriodoPublicacionEdit");
        selectPeriodoPublicacionEdit.find("option").remove();
        selectPeriodoPublicacionEdit.append("<option value='0' selected> -- Seleccione -- </option>");
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].IDSemana == Id_PeriodoPub){
                selectPeriodoPublicacionEdit.append("<option value=" + response.data[i].IDSemana + " selected>" + response.data[i].Semana + "</option>");
        }else{
            selectPeriodoPublicacionEdit.append("<option value=" + response.data[i].IDSemana + ">" + response.data[i].Semana + "</option>");
            }
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
function EditAction(data) {
    debugger;
    var settings = {
        "url": '<?php echo urlApi; ?>getClienteCategoriaId/' + data,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        console.log(response.data[0].Semanal);
        $('#inputIdEdit').val(response.data[0].Id_ClienteCategoria);
        cargarClienteEdit(response.data[0].Id_Cliente);
        cargarCategoriaEdit(response.data[0].Id_Categoria);
        if (response.data[0].Semanal=='Si'){
            $('#inputSemanalEdit').prop("checked",true)
        }else{
            $('#inputSemanalEdit').prop("checked",false)
        }
        if (response.data[0].Mensual=='Si'){
            $('#inputMensualEdit').prop("checked",true)
        }else{
            $('#inputMensualEdit').prop("checked",false)
        }
        SemanalDesdeEdit(response.data[0].Id_SemanaDesde);
        SemanalHastaEdit(response.data[0].Id_SemanaHasta);
        SemanalPublicaciónEdit(response.data[0].Id_SemanaPub);
        MensualDesdeEdit(response.data[0].Id_PeriodoDesde);
        MensualHastaEdit(response.data[0].Id_PeriodoHasta);
        MensualPublicaciónEdit(response.data[0].Id_PeriodoPub);
        $('#inputparaEdit').val(response.data[0].CorreosNotificacion);
        if (response.data[0].Activo=='Si'){
            $('#Activa').prop("checked",true)
        }else{
            $('#Activa').prop("checked",false)
        }
        $('#modal-CategoriaClienteEditar').modal('show');
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
function VisualizarAction(data) {
    //debugger;
    var settings = {
        "url": '<?php echo urlApi; ?>getClienteCategoriaId/' + data,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        $('#inputCodigoVer').val(response.data[0].Id_ClienteCategoria);
        $('#inputClienteVer').val(response.data[0].Cliente);
        $('#inputCategoriaVer').val(response.data[0].Categoria);
        $('#inputEstatusVer').val(response.data[0].Activo);
        $('#inputSemanalVer').val(response.data[0].Semanal);
        $('#inputMensualVer').val(response.data[0].Mensual);
        $('#inputSemanalDesdeVer').val(response.data[0].SemanalDesde);
        $('#inputSemanalHastaVer').val(response.data[0].SemanalHasta);
        $('#inputISemanalPublicaciónVer').val(response.data[0].SemanalPublicación);
        $('#inputMensualDesdeVer').val(response.data[0].MensualDesde);
        $('#inputMensualHastaVer').val(response.data[0].MensualHasta);
        $('#inputMensualPublicacionVer').val(response.data[0].MensualPublicación);
        $('#inputparaVer').val(response.data[0].CorreosNotificacion);
        $('#modal-CategoriaClienteVisualizar').modal('show');
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
function deleteAction(data) {
    Swal.fire({
        title: '¿Estas seguro que desea desactivar?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: '¡Sí, bórralo!'
    }).then((result) => {
        if (result.isConfirmed) {
            var settings = {
                "url": '<?php echo urlApi; ?>deleteClienteCategoria/' + data,
                "method": "get",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
            }
            $.ajax(settings).done(function(response) {
                var DatosJson = JSON.parse(JSON.stringify(response));
                Swal.fire({
                    title: DatosJson.message,
                    width: '400px',
                    height: '25px'
                }).then(function() {
                    let xtable = $('#TableCategoriaCliente').DataTable();
                    xtable.ajax.reload(null, false);
                });
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
    })
}
function EnviarCorreo(data){
    alert(data);
}
function ActualizarRegistro() {
        var Ind_Semanal;
        var Ind_Mensual;
        debugger;
        if($('#inputSemanalEdit').is(":checked")){
            Ind_Semanal=1;
        }else{
            Ind_Semanal=0;
        }
        if($('#inputMensualEdit').is(":checked")){
            Ind_Mensual=1;
        }else{
            Ind_Mensual=0;
        }
        if($('#Activa').is(":checked")){
            Activo=1;
        }else{
            Activo=0;
        }
    if ($("#FormCategoriaClienteEdit").valid()) {
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": '<?php echo urlApi; ?>UpdateClienteCategoria',
            "method": "post",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "data": {
                "Id_ClienteCategoria": $("#inputIdEdit").val(),
                "Id_Cliente": $("#inputClienteEdit").val(),
                "Id_Categoria": $("#inputCategoriaEdit").val(),
                "Ind_Semanal": Ind_Semanal,
                "Ind_Mensual": Ind_Mensual,
                "Id_SemanaDesde": $("#inputSemanaDesdeEdit").val(),
                "Id_SemanaHasta": $("#inputSemanaHastaEdit").val(),
                "Id_SemanaPub": $("#inputSemanaPublicacionEdit").val(),
                "Id_PeriodoDesde": $("#inputPeriodoDesdeEdit").val(),
                "Id_PeriodoHasta": $("#inputPeriodoHastaEdit").val(),
                "Id_PeriodoPub": $("#inputPeriodoPublicacionEdit").val(),
                "CorreosNotificacion": $("#inputparaEdit").val(),
                "Ind_Activo": Activo
            }
        }
        $.ajax(settings).done(function(response) {
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
                icon: 'success',
                title: response.message,
                confirmButtonText: `Ok`,
            })
            var form = document.querySelector('#FormCategoriaClienteEdit');
            form.reset();
            $('#modal-CategoriaClienteEditar').modal('hide');
            let xtable = $('#TableCategoriaCliente').DataTable();
            xtable.ajax.reload(null, false);
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
                    icon: 'info',
                    title: 'Su Session ha Expirado',
                    confirmButtonText: `Ok`,
                })
                var form = document.querySelector('#FormCategoriaClienteEdit');
                form.reset();
                window.location = '/retailscannig/index.php';
            }
        })
    }
}
function CargarCategoria() {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllCategorias',
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        console.log(response.data);
        let selectCategoria = $("#inputCategoria");
        selectCategoria.find("option").remove();
        selectCategoria.append("<option value='' selected disabled> -- Seleccione -- </option>");
        for (var i = 0; i < response.data.length; i++) {
            console.log(response.data[i].id_Categoria);
            selectCategoria.append("<option value=" + response.data[i].id + ">" + response.data[i].id + "-" + response.data[i].nombre + "</option>");
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
function CargarCliente() {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllCliente',
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
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
function CargarSemanaDesde() {
    var settings = {
        "url": '<?php echo urlApi; ?>getSemanaAll',
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let selectDesde = $("#inputSemanaDesde");
        selectDesde.find("option").remove();
        selectDesde.append("<option value='0' selected disabled> -- Seleccione -- </option>");
        for (var i = 0; i < response.data.length; i++) {
            selectDesde.append("<option value=" + response.data[i].IDSemana + ">" + response.data[i].Semana + "</option>");
        }
        $('#inputSemanaDesde').find('option').clone().appendTo('#inputSemanaHasta');
        $('#inputSemanaDesde').find('option').clone().appendTo('#inputSemanaHasta');
        $('#inputSemanaDesde').find('option').clone().appendTo('#inputSemanaPublicacion');
        $('#inputSemanaDesde').find('option').clone().appendTo('#inputPeriodoDesde');
        $('#inputSemanaDesde').find('option').clone().appendTo('#inputPeriodoHasta');
        $('#inputSemanaDesde').find('option').clone().appendTo('#inputPeriodoPublicacion');
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
$(document).ready(function() {
    //debugger;
    CargarCategoria();
    CargarCliente();
    CargarSemanaDesde();
    document.getElementById('FormCategoriaCliente').reset();
    document.getElementById('FormCategoriaClienteEdit').reset();
    //Validacion del Formularios de Nueva Cliente Categoria
    $('#FormCategoriaCliente').validate({
        rules: {
            inputCliente: {
                required: true,
            },
            inputCategoria: {
                required: true,
            }
        },
        messages: {
            inputCliente: {
                required: "Por favor seleccione un cliente"
            },
            inputCategoria: {
                required: "Por favor seleccione la categoria del cliente"
            },
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
    //Boton de Guardar Actualizar Cliente Categoria
    $('#FormCategoriaClienteEdit').validate({
        rules: {
            inputClienteEdit: {
                required: true,
            },
            inputCategoriaEdit: {
                required: true,
            }
        },
        messages: {
            inputClienteEdit: {
                required: "Por favor Seleccione el Cliente",
            },
            inputCategoriaEdit: {
                required: "Por favor Seleccione la Categoria del Cliente",
            }
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
    //Boton de Guardar Nuevo Categoria
    $("#botonenviar").click(function() {
        var Ind_Semanal;
        var Ind_Mensual;
        debugger;
        if($('#inputSemanal').is(":checked")){
            Ind_Semanal=1;
        }else{
            Ind_Semanal=0;
        }
        if($('#inputMensual').is(":checked")){
            Ind_Mensual=1;
        }else{
            Ind_Mensual=0;
        }
        if ($("#FormCategoriaCliente").valid()) {
            var settings = {
                "async": true,
                "crossDomain": true,
                "url": '<?php echo urlApi; ?>AddNewClienteCategoria',
                "method": "POST",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
                "data": {
                    "Id_Cliente": $("#inputCliente").val(),
                    "Id_Categoria": $("#inputCategoria").val(),
                    "Ind_Semanal": Ind_Semanal,
                    "Ind_Mensual": Ind_Mensual,
                    "Id_SemanaDesde": $("#inputSemanaDesde").val(),
                    "Id_SemanaHasta": $("#inputSemanaHasta").val(),
                    "Id_SemanaPub": $("#inputSemanaPublicacion").val(),
                    "Id_PeriodoDesde": $("#inputPeriodoDesde").val(),
                    "Id_PeriodoHasta": $("#inputPeriodoHasta").val(),
                    "Id_PeriodoPub": $("#inputPeriodoPublicacion").val(),
                    "Para_Email": $("#para_email").val(),
                }
            }
            $.ajax(settings).done(function(response) {
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
                    icon: 'success',
                    title: response.message,
                    confirmButtonText: `Ok`,
                })
                var form = document.querySelector('#FormCategoriaCliente');
                form.reset();
                let xtable = $('#TableCategoriaCliente').DataTable();
                xtable.ajax.reload(null, false);
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
                        icon: 'info',
                        title: 'Su Session ha Expirado',
                        confirmButtonText: `Ok`,
                    })
                    var form = document.querySelector('#FormCategoriaCliente');
                    form.reset();
                    window.location = '/retailscannig/index.php';
                }
            })
        }
    });
    $('#TableCategoriaCliente').dataTable({
        "lengthMenu": [
            [20, 35, 60, 100, -1],
            [20, 35, 60, 100, "All"]
        ],
        "bDestroy": true,
        "autoWidth": true,
        "dom": '<"wrapper"flitp><"center"B>',
        "responsive": true,
        "buttons": [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        "ajax": {
            "url": '<?php echo urlApi; ?>getAllClienteCategoria',
            "type": "GET",
            "headers": {
                'Authorization': 'bearer ' + localStorage.getItem('Token')
            },
            "error": function(xhr, error, thrown) {
                if (xhr.status === 403) {
                    var err = JSON.parse(xhr.responseText);
                    Swal.fire({
                        title: err.message,
                        width: '300px',
                        height: '100px'
                    })
                }
                if (xhr.status === 400) {
                    var err = JSON.parse(xhr.responseText);
                    Swal.fire({
                        title: err.message,
                        width: '250px',
                        height: '25px'
                    })
                    window.location.href = '/retailscannig/Principal/logout';
                }
            }
        },
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        },
        "aoColumns": [{
                mData: 'Cliente',
                className: "text-center"
            },
            {
                mData: 'Categoria',
                className: "text-center"
            },
            {
                mData: 'Activo',
                className: "text-center"
            },
            {
                mData: 'Semanal',
                className: "text-center"
            },
            {
                mData: 'Mensual',
                className: "text-center"
            },
            {
                mData: 'SemanalDesde',
                className: "text-center"
            },
            {
                mData: 'SemanalPublicación',
                className: "text-center"
            },
            {
                mData: 'MensualDesde',
                className: "text-center"
            },
            {
                mData: 'MensualPublicación',
                className: "text-center"
            },
            {
                mData: 'CorreosNotificacion',
                className: "text-center"
            }

        ],
        "columnDefs": [{
            "targets": 10,
            "orderable": true,
            "data": 'Id_ClienteCategoria',
            "className": "text-center",
            "render": function(data, type, row, meta) {
                return '<a title="Eliminar" href="#"><img id="EliminarImg" src=<?php echo base_url('assets/iconos/delete.png')?> width="15" height="15"  onclick="deleteAction(' +
                    data +
                    '); return false;"></a>&nbsp;&nbsp;<a title="Editar" href="#"><img src=<?php echo base_url('assets/iconos/editar.png')?> width="12" height="12" onclick="EditAction(' +
                    data +
                    '); return false;"></a>&nbsp;&nbsp;<a title="Visualizar" href="#"><img src=<?php echo base_url('assets/iconos/ver.png')?> width="12" height="12" onclick="VisualizarAction(' +
                    data + '); return false;"></a>';
            }
        }],
    });
});
</script>