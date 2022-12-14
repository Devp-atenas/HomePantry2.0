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
                <h1><i class="bi bi-diagram-3"></i></i>&nbsp;Perfiles</h1>
            </div>
            
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Crear Perfil</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body" style="display: none;">
                    <form id="FormPerfil">
                        <div class="form-group row mb-0 mt-0">
                            <div class="col-md-3">
                                <label class="inputText font-weight-bold">Nombre del Perfil:</label>
                                <input type="text" name="inputPerfil" id="inputPerfil" class="form-control">
                            </div>
                            <div class="col-md-5">
                                <label class="inputText font-weight-bold">Descripcion:</label>
                                <input type="text" name="inputDescripcion" id="inputDescripcion" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <div class="inputText font-weight-bold">Activo:</div>
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
                                <div class="inputText font-weight-bold">Guardar:</div>
                                <button id="idCrearPerfil"type="button" class="btn btn-block btn-xs btn-primary" data-toggle="modal" data-target="#guardarCambioFacturaModal">
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
                    <h3 class="card-title">Mantenimiento Perfil</h3>
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
                                <th>Perfil</th>
                                <th>Descripcion</th>
                                <th>Estatus</th>
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
                    <h3 class="card-title">Agregar Opciones al Perfil</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body" style="display: none;">
                    <div id="showTablas">
                        <h2 class="text-center">Funciones de Home Pantry</h2>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row mb-0 mt-0">
                                    <div class="col-md-4">
                                        <div class="inputText font-weight-bold">Perfil:</div>
                                            <select id="selectPerfil" name="selectPerfil" class="form-control form-control-sm">
                                            </select>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="inputText font-weight-bold">Guardar:</div>
                                        <button id="idGuardarPerfilOpciones"type="button" class="btn btn-block btn-xs btn-primary" data-toggle="modal" data-target="#guardarCambioFacturaModal">
                                            <i class="fas fa-save fa-2x"></i>
                                        </button>
                                    </div>
                                </div>
                                <HR/>
                                <div class="text-center">
                                    <div class="form-group row mb-0 mt-0">
                                        <div class="col-md-12">
                                            <div id="TablaFunciones"></div>
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



<div class="modal fade" id="modal-PerfilOpcionesEditar" aria-hidden="true">
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
                            <h3 class="card-title">Perfil</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="FormActividadEdit">
                                <div class="form-group row mb-0 mt-0">
                                <div class="col-md-5">
                                        <label class="inputText font-weight-bold">Perfil:</label>
                                        <input type="text" name="inputPerfilEdit" id="inputPerfilEdit" class="form-control">
                                    </div>
                                    <div class="col-md-5">
                                        <label class="inputText font-weight-bold">Descripcion:</label>
                                        <input type="text" name="inputDescripcionPerfildEdit" id="inputDescripcionPerfildEdit" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <label class="inputText font-weight-bold">Activo:</label>
                                        <div class="card">
                                            <div class="form-group">
                                            <div class="form-check d-inline">
                                                    <input class="form-check-input" type="radio" id="activoEdit" name="activoEdit" value="0">
                                                    <label class="form-check-label">No</label>
                                                </div>
                                                <div class="form-check d-inline">
                                                    <input class="form-check-input" type="radio" id="activoEdit" name="activoEdit" value="1">
                                                    <label class="form-check-label">Si</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="display:none;">
                                        <div class="col-md-1">
                                            <div class="form-group">
                                                <label for="inputIdEdit">id:</label>
                                                <input type="text" name="inputIdEdit" id="inputIdEdit"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
                
                
                <div class="col-md-12">
                    <div id="myCard" class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Opciones del Perfil</h3>
                            <div class="card-tools">
                                <button id="idItemsActividad" type="button" class="btn btn-tool" aria-expanded="false" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group row mb-0 mt-0">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <button id="bMostrarOpcionesPerfil" class="btn btn-info" type="button">
                                            <i class="bi bi-eye">&nbsp;Cargar Opciones</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div id="activar" class="form-group row mb-0 mt-0">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <div id="PerfilOpcionesEditar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="bi bi-x-square"></i> Cancelar</button>
                <button id="idActualizarOpcionesPerfil" type="button" class="btn btn-primary" disabled="disabled">
                    <i class="bi bi-save"></i> Guardar
                </button>

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>




<?php $this->load->view('Plantillas/Footer');?>

<script>
$(document).ready(function() {
    var urlApi = '<?php echo urlApi; ?>';
    sessionStorage.setItem("urlApi",urlApi);
    cargarTablaFunciones('#TablaFunciones');
    cargarTablaPerfiles();
    //$('#showButton').hide();
});

function cargarTablaPerfiles(){
    $('#TablePerfil').DataTable({
        "lengthMenu": [
            [10, 25, 50, 100, -1],
            [10, 25, 50, 100, "All"]
        ],
        "bDestroy":     true,
        "autoWidth":    true,
        "searching":    false,
        "bPaginate":    false,
        "dom": '<"wrapper"flitp><"center"B>',
        "responsive":   false,
        "buttons": [
            {
                extend: 'excelHtml5',
                title: 'Reporte NSE'
            }
        ],
        "fixedHeader":  true,
        "scrollY":      300,
        "deferRender":  true,
        "scroller":     true,
        "buttons": [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        "ajax": {
            "url": '<?php echo urlApi; ?>getAllPerfiles/2',
            "type": "GET",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
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
                    window.location.href = '/homepantry20/Principal/logout';
                }
            }
        },
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        },
        "aoColumns": [{
                mData: 'Id',
                className: "text-center"
            },
            {
                mData: 'Perfil',
                className: "text-center"
            },
            {
                mData: 'descripcion',
                className: "text-center"
            },
            {
                mData: 'Ind_Activo',
                className: "text-center"
            },
        ],
        "columnDefs": [{
            //"width": "100%",
            "targets": 4,
            "orderable": true,
            "data": 'Id',
            "className": "text-center",
            "render": function(data, type, row, meta) {
                return  '<div class="text-wrap width-200">'+
                '<button type="button" class="btn btn-danger btn-sm" onclick="deleteAction(' +
                    data +');"><i class="bi bi-trash3"></i></button>'+
                '<button id="bEdit" type="button" class="btn btn-primary btn-sm" onclick="EditAction(' +
                    data +');"><i class="bi bi-pencil-square"></i></button>'+
                '<button type="button" class="btn btn-info btn-sm" onclick="VisualizarAction(' +
                    data +');"><i class="bi bi-zoom-in"></i></button>'+
                '</div>';
            }
        }],
    });
}
</script>

<script src="<?php echo base_url('jsHP/jsGestionarPerfil.js') ?>"></script>
<script src="<?php echo base_url('jsHP/jsBitacora.js') ?>"></script>

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