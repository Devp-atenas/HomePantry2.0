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
                <h1><i class="bi bi-card-list"></i>&nbsp;Mantenimiento Nombre Atributos</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content Agregar Atributo 71111-->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Nombre Atributos</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body" style="display: none;">
                    <form id="FormAtributo">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Categoria:</div>
                                    <select id="selectCategoria" name="selectCategoria" class="form-control">
                                    </select>   
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Atributo 1:</div>
                                    <input type="text" name="inputAtributo1" id="inputAtributo1" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Atributo 2:</div>
                                    <input type="text" name="inputAtributo2" id="inputAtributo2" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Atributo 3:</div>
                                    <input type="text" name="inputAtributo3" id="inputAtributo3" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Atributo 4:</div>
                                    <input type="text" name="inputAtributo4" id="inputAtributo4" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Atributo 5:</div>
                                    <input type="text" name="inputAtributo5" id="inputAtributo5" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Atributo 6:</div>
                                    <input type="text" name="inputAtributo6" id="inputAtributo6" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Atributo 7:</div>
                                    <input type="text" name="inputAtributo7" id="inputAtributo7" class="form-control">
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

<!-- /Windows datatables Atributo Rango-->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Listados Nombre Atributos</h3>
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
                            <table id="TableAtributosNombre" class="table table-bordered table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Categoria</th>
                                        <th>Atributo 1</th>
                                        <th>Atributo 2</th>
                                        <th>Atributo 3</th>
                                        <th>Atributo 4</th>
                                        <th>Atributo 5</th>
                                        <th>Atributo 6</th>
                                        <th>Atributo 7</th>
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
<div class="modal fade" id="modal-AtributoEditar">
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
                            <h3 class="card-title">Atributo</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">                            
                            <form id="FormAtributo">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Categoria:</div>
                                            <select id="selectCategoria" name="selectCategoria" class="form-control">
                                            </select>   
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Atributo 1:</div>
                                            <input type="text" name="inputAtributo1" id="inputAtributo1" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Atributo 2:</div>
                                            <input type="text" name="inputAtributo2" id="inputAtributo2" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Atributo 3:</div>
                                            <input type="text" name="inputAtributo3" id="inputAtributo3" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Atributo 4:</div>
                                            <input type="text" name="inputAtributo4" id="inputAtributo4" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Atributo 5:</div>
                                            <input type="text" name="inputAtributo5" id="inputAtributo5" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Atributo 6:</div>
                                            <input type="text" name="inputAtributo6" id="inputAtributo6" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Atributo 7:</div>
                                            <input type="text" name="inputAtributo7" id="inputAtributo7" class="form-control">
                                        </div>
                                    </div>
                                </div>                               

                               <div class="row" style="visibility:hidden;">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputIdEditAtributo">id:</label>
                                            <input type="text" name="inputIdEditAtributo" id="inputIdEditAtributo"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    <i class="bi bi-x-square"></i> Cancelar
                </button>
                <button type="button" class="btn btn-primary" id="idBTNAtributosNombre" onclick="ActualizarRegistro()">
                    <i class="bi bi-save"></i> Actualizar
                </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Windows Modal Visualizar Registros-->
<div class="modal fade" id="modal-AtributoVisualizar">
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
                            <h3 class="card-title">Atributo</h3>
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
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <div class="inputText font-weight-bold">Atributo:</div>
                                        <input type="text" name="inputAtributoVer" id="inputAtributoVer" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                <div class="inputText font-weight-bold">Activo:</div>
                                    <div class="card">
                                        <div class="form-group">
                                        <div class="form-check d-inline">
                                                <input class="form-check-input" type="radio" id="activoVer" name="activoVer" value="0" disabled='disabled'>
                                                <label class="form-check-label">No</label>
                                            </div>
                                            <div class="form-check d-inline">
                                                <input class="form-check-input" type="radio" id="activoVer" name="activoVer" value="1" disabled='disabled'>
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

<!-- Windows Modal DiccionarioExistenteModal -->
<div class="modal fade" id="DiccionarioExistenteModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title"><i class="bi bi-info-circle"></i>&nbsp;Informacion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Atributo1 Existente</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="FormDatosEdit">
                                <h5 class="text-center">Duplicado para: <span class="label label-danger" id="htmlItem"></span>
                                </h5>
                                <div class="row">
                                    <div class="col-md-12">
                                        <table id="TableDiccionarioExistente" class="table table-bordered table-striped table-sm">
                                            <thead>
                                                <tr>
                                                    <th>Categoria</th>
                                                    <th>Atributo1</th>
                                                    <th>Activo?</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                                <HR/>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 class="text-center"><span class="bg-info text-white" id="htmlMensajeModal"></span></h5>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-12">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button id="idBotonAgregarAtributo1"type="button" class="btn btn-success" onclick="ejecutarAgregarAtributo1()">Agregar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Windows Modal No se puede eliminar -->
<div class="modal fade" id="NosePuedeEliminarModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="bi bi-info-circle"></i>&nbsp;Informacion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Atributo1 Existente</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="text-center"><span class="label label-danger" id="msg"></span></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-12">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Entendido</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>



<?php $this->load->view('Plantillas/Footer');?>
<script src="<?php echo base_url('jsDiccionario/jsAtributosNombre.js') ?>"></script>
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