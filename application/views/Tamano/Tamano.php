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

    select:focus {
        width: auto;
    }

    .text-wrap{
        white-space:normal;
    }
    .width-200{
        width:120px;
    }
</style>


<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="bi bi-rulers"></i>&nbsp;Mantenimiento Tamaño</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content Agregar Tamaño 11111-->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Tamaño</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body" style="display: none;">
                    <form id="FormTam">
                        
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Categoria:</div>
                                    <select id="selectCategoria" name="selectCategoria" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Tamaño:</div>
                                    <input type="text" name="inputTam" id="inputTam" class="form-control text-right">
                                </div>
                            </div>
                            <div class="col-md-3">
                            <div class="inputText font-weight-bold">Activo:</div>
                                <div class="card">
                                    <div class="form-group">
                                    <div class="form-check d-inline">
                                            <input class="form-check-input" type="radio" id="activoAdd" name="activoAdd" value="0" disabled='disabled'">
                                            <label class="form-check-label">No</label>
                                        </div>
                                        <div class="form-check d-inline">
                                            <input class="form-check-input" type="radio" id="activoAdd" name="activoAdd" value="1" checked disabled='disabled'">
                                            <label class="form-check-label">Si</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
<!-- /Windows datatables Tamaño Rango-->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Listados de Tamaño</h3>
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
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="inputText font-weight-bold">Categoria:</div>
                                        <select id="selectCategoriaTabla" name="selectCategoriaTabla" class="form-control">
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <table id="TableTamano" class="table table-bordered table-striped table-sm" style="display:none;">
                                <thead>
                                    <tr>
                                        <th>Categoria</th>
                                        <th>Tamaño</th>
                                        <th>Estatus</th>
                                        <th></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Windows Modal Editar Registros 222222 -->
<div class="modal fade" id="modal-TamanoEditar">
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
                            <h3 class="card-title">Tamaño</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="FormTamEdit">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Categoria:</div>
                                            <select id="selectCategoriaEdit" name="selectCategoriaEdit" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Tamaño:</div>
                                            <input type="text" name="inputTamEdit" id="inputTamEdit" class="form-control text-right">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                    <div class="inputText font-weight-bold">Activo:</div>
                                        <div class="card">
                                            <div class="form-group">
                                            <div class="form-check d-inline">
                                                    <input class="form-check-input" type="radio" id="activoEdit" name="activoEdit" value="0" disabled='disabled'">
                                                    <label class="form-check-label">No</label>
                                                </div>
                                                <div class="form-check d-inline">
                                                    <input class="form-check-input" type="radio" id="activoEdit" name="activoEdit" value="1" checked disabled='disabled'">
                                                    <label class="form-check-label">Si</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="visibility:hidden;">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputIdEditTamano">id:</label>
                                            <input type="text" name="inputIdEditTamano" id="inputIdEditTamano"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <input type="button" onclick="ActualizarRegistro()" id="editUsuario"
                                                value="Guardar" class="btn btn-success float-right">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
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
<div class="modal fade" id="modal-TamanoVisualizar">
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
                            <h3 class="card-title">Tamaño</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="inputText font-weight-bold">Categoria:</div>
                                        <input type="text" name="selectCategoriaVer" id="selectCategoriaVer" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <div class="inputText font-weight-bold">Tamaño:</div>
                                        <input type="text" name="inputTamanoVer" id="inputTamanoVer" class="form-control text-right" readonly>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                <div class="inputText font-weight-bold">Activo:</div>
                                    <div class="card">
                                        <div class="form-group">
                                        <div class="form-check d-inline">
                                                <input class="form-check-input" type="radio" id="activoVer" name="activoVer" value="0" disabled='disabled'">
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check d-inline">
                                                <input class="form-check-input" type="radio" id="activoVer" name="activoVer" value="1" disabled='disabled'">
                                                <label class="form-check-label">Si</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
<?php $this->load->view('Plantillas/Footer');?>
<script src="<?php echo base_url('jsDiccionario/jsTamanoV1.js') ?>"></script>
<script src="<?php echo base_url('jsHP/jsBitacora.js') ?>"></script>

<script>
    $("#selectCategoriaTabla").change(function() {
        var id_categoriaT = $("#selectCategoriaTabla").val();
        cargarTabla(id_categoriaT);
        $('#TableTamano').show();
    });
</script>
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
<script src="<?php echo base_url('assets/autoNumeric-1.9.18.js') ?>"></script>