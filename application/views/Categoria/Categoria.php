<!-- Content Header (Page header) -->
<?php $this->load->view('Plantillas/Header'); ?>
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
                <h1><i class="bi bi-diagram-3"></i>&nbsp;Mantenimiento de Categoria</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content Agregar Categoria 1111-->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Categoria</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body" style="display: none;">
                    <form id="FormCategoria">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Nombre de la Categoria:</div>
                                    <input type="text" class="form-control input-sm" id="CategoriaAdd" placeholder="Ingrese nombre de la categoria ...">
                                </div>
                            </div>
                            <div class="col-md-6">
                            <div class="inputText font-weight-bold">Medicina:</div>
                                <div class="card">
                                    <div class="form-group">
                                    <div class="form-check d-inline">
                                            <input class="form-check-input" type="radio" id="medicinaAdd" name="medicinaAdd" value="0">
                                            <label class="form-check-label">No</label>
                                        </div>
                                        <div class="form-check d-inline">
                                            <input class="form-check-input" type="radio" id="medicinaAdd" name="medicinaAdd" value="1">
                                            <label class="form-check-label">Si</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Factor:</div>
                                    <input type="number" step="0.01" class="form-control input-sm" id="inputFactorAdd" placeholder="Ingrese Factor ...">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Minimo % Categoria:</div>
                                    <input type="number" step="0.01" class="form-control input-sm" id="inputminimoAdd" placeholder="Ingrese minimo % categoria ...">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Maximo % Categoria:</div>
                                    <input type="number" step="0.01" class="form-control input-sm" id="inputmaximoAdd" placeholder="Ingrese maximo % categoria ...">
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
<!-- /Windows datatables Categoria-->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Listados de Categoria</h3>
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
                            <table id="TableCategoria" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Categoria</th>
                                        <th>Factor</th>
                                        <th>Minimo %</th>
                                        <th>Maximo %</th>
                                        <th>Medicina</th>
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
<!-- Windows Modal Editar Registros-->
<div class="modal fade" id="modal-CategoriaEditar">
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
                            <h3 class="card-title">Categoria</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="FormCategoriaEdit">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Nombre de la Categoria:</div>
                                            <input type="text" class="form-control input-sm" id="CategoriaEdit" placeholder="Ingrese nombre de la categoria ...">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="inputText font-weight-bold">Medicina:</div>
                                        <div class="card">
                                            <div class="form-group">
                                            <div class="form-check d-inline">
                                                    <input class="form-check-input" type="radio" id="medicinaEdit" name="medicinaEdit" value="0">
                                                    <label class="form-check-label">No</label>
                                                </div>
                                                <div class="form-check d-inline">
                                                    <input class="form-check-input" type="radio" id="medicinaEdit" name="medicinaEdit" value="1">
                                                    <label class="form-check-label">Si</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Factor:</div>
                                            <input type="number" step="0.01" class="form-control input-sm" id="inputFactorEdit" placeholder="Ingrese Factor ...">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Minimo % Categoria:</div>
                                            <input type="number" step="0.01" class="form-control input-sm" id="inputminimoEdit" placeholder="Ingrese minimo % categoria ...">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Maximo % Categoria:</div>
                                            <input type="number" step="0.01" class="form-control input-sm" id="inputmaximoEdit" placeholder="Ingrese maximo % categoria ...">
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="visibility:hidden;">
                                    <div class="col-md-6">
                                
                                        <div class="form-group">
                                            <label for="inputIdEditFabricante">id:</label>
                                            <input type="text" name="idCategoriaEdit" id="idCategoriaEdit"
                                                class="form-control">
                                        </div>
                                    </div>
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
<!-- Windows Modal Campos Vacio-->
<div class="modal fade" id="modalCamposVacio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">
                    Aviso:
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                </button>
            </div>
            <div class="modal-body">
                Complete los siguientes datos para poder guardar
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="modal-body">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" aria-hidden="true"> Aceptar
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- Windows Modal Visualizar Registros-->
<div class="modal fade" id="modal-CategoriaVisualizar">
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
                            <h3 class="card-title">Categoria</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="FormCategoria">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Nombre de la Categoria:</div>
                                            <input type="text" class="form-control input-sm" id="CategoriaView" placeholder="Ingrese nombre de la categoria ..." readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="inputText font-weight-bold">Medicina:</div>
                                        <div class="card">
                                            <div class="form-group">
                                            <div class="form-check d-inline">
                                                    <input class="form-check-input" type="radio" id="medicinaView" name="medicinaView" value="0" disabled='disabled'">
                                                    <label class="form-check-label">No</label>
                                                </div>
                                                <div class="form-check d-inline">
                                                    <input class="form-check-input" type="radio" id="medicinaView" name="medicinaView" value="1" disabled='disabled'">
                                                    <label class="form-check-label">Si</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Factor:</div>
                                            <input type="number" step="0.01" class="form-control input-sm" id="inputFactorView" placeholder="Ingrese Factor ..." readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Minimo % Categoria:</div>
                                            <input type="number" step="0.01" class="form-control input-sm" id="inputminimoView" placeholder="Ingrese minimo % categoria ..." readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Maximo % Categoria:</div>
                                            <input type="number" step="0.01" class="form-control input-sm" id="inputmaximoView" placeholder="Ingrese maximo % categoria ..." readonly>
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

<!-- /Windows Modal Visualizar Registros-->
<?php $this->load->view('Plantillas/Footer'); ?>
<script src="<?php echo base_url('jsDiccionario/jsCategoriaV2.js') ?>"></script>
<!-- DataTables  & Plugins -->

<script src="<?php echo base_url('jsHP/jsBitacora.js') ?>"></script>
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
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
