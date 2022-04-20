<!-- Content Header (Page header) -->
<?php $this->load->view('Plantillas/Header');?>
<style>
.table.dataTable {
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: 10px;
}

.table.dataTable thead {
    background: linear-gradient(to right, #D69232, #B6a232, #D69232);
    color: white;
    /*font-bold: weight;*/
    /*font-weight: bold;*/
    font-weight: 900;
    
}

table.dataTable thead .sorting_asc,
.sorting_desc,
.sorting {
    background-image: none !important;
}

#tablaValPrecios {
    table-layout: fixed;
    width: 100% !important;
}

#tablaValPrecios td,
#tablaValPrecios th {
    width: auto !important;
    white-space: normal;
    text-overflow: ellipsis;
    overflow: hidden;
}

#tablaValPrecios select {
    width: 50px;
}

select:focus {
    width: auto;
}
</style>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="bi bi-diagram-3"></i></i>&nbsp;Actividad</h1>
            </div>
            
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Crear Actividad</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body" style="display: none;">
                    <form id="FormActividad">
                        <div class="form-group row mb-0 mt-0">
                            <div class="col-md-5">
                                <label class="inputText font-weight-bold">Actividad:</label>
                                <input type="text" name="inputActividad" id="inputActividad" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label class="inputText font-weight-bold">¿Abrir actividad?:</label>
                                <div class="card">
                                    <div class="form-group">
                                    <div class="form-check d-inline">
                                            <input class="form-check-input" type="radio" id="abrir0" name="abrirAdd" value="0">
                                            <label class="form-check-label">No</label>
                                        </div>
                                        <div class="form-check d-inline">
                                            <input class="form-check-input" type="radio" id="abrirI" name="abrirAdd" value="1">
                                            <label class="form-check-label">Si</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label class="inputText font-weight-bold">Activo:</label>
                                <div class="card">
                                    <div class="form-group">
                                    <div class="form-check d-inline">
                                            <input class="form-check-input" type="radio" id="activoAdd" name="activoAdd" value="0">
                                            <label class="form-check-label">No</label>
                                        </div>
                                        <div class="form-check d-inline">
                                            <input class="form-check-input" type="radio" id="activoAdd" name="activoAdd" value="1">
                                            <label class="form-check-label">Si</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <label class="inputText font-weight-bold">Guardar:</label>
                                <button id="CrearActividad"type="button" class="btn btn-block btn-xs btn-primary">
                                    <i class="fas fa-save fa-2x"></i>
                                </button>
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


<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Mantenimiento Actividad</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body" style="display: none;">
                    <table id="TablePerfil" class="table table-bordered table-striped table-sm">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Actividad</th>
                                <th>ind_activo</th>
                                <th>¿Abierta?</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Agregar items a la Actividad</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body" style="display: none;">
                    <div id="showTablas">
                        <h2 class="text-center">Items Ficha del Hogar</h2>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row mb-0 mt-0">
                                    <div class="col-md-3">
                                        <div class="inputText font-weight-bold">Actividad:</div>
                                            <select id="selectActividad" name="selectActividad" class="form-control form-control-sm">
                                            </select>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="inputText font-weight-bold">Guardar:</div>
                                        <button id="idGuardarActividadItems"type="button" class="btn btn-block btn-xs btn-primary" data-toggle="modal" data-target="#guardarCambioFacturaModal">
                                            <i class="fas fa-save fa-2x"></i>
                                        </button>
                                    </div>
                                </div>
                                <HR/>
                                <div class="text-center">
                                    <div class="form-group row mb-0 mt-0">
                                        <div class="col-md-12">
                                            <div id="TablaItems"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
$(document).ready(function() {
    //var urlApi = '<?php echo urlApi; ?>';
    //sessionStorage.setItem("urlApi",urlApi);
    //
    //cargarTabla();
    //$('#showButton').hide();
});


</script>

<script src="<?php echo base_url('jsHP/jsActividad.js') ?>"></script>

<script type="text/javascript" src="https://oss.sheetjs.com/sheetjs/xlsx.full.min.js"></script>
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables-buttons/js/dataTables.buttons.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables-buttons/js/buttons.bootstrap4.min.js') ?>"></script>
<script src="<?php echo base_url('assets/jszip/jszip.min.js') ?>"></script>
<script src="<?php echo base_url('assets/pdfmake/pdfmake.min.js') ?>"></script>
<script src="<?php echo base_url('assets/pdfmake/vfs_fonts.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables-buttons/js/buttons.html5.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables-buttons/js/buttons.print.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables-buttons/js/buttons.colVis.min.js') ?>"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.4/js/dataTables.select.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>