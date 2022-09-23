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
                                    <input type="text" class="form-control input-sm" id="CategoriaAdd" name="CategoriaAdd" placeholder="Ingrese nombre de la categoria ...">
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
                                    <input type="number" step="0.01" class="form-control input-sm" id="inputFactorAdd" name="inputFactorAdd" placeholder="Ingrese Factor ...">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Minimo % Categoria:</div>
                                    <input type="number" step="0.01" class="form-control input-sm" id="inputminimoAdd" name="inputminimoAdd" placeholder="Ingrese minimo % categoria ...">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Maximo % Categoria:</div>
                                    <input type="number" step="0.01" class="form-control input-sm" id="inputmaximoAdd" name="inputmaximoAdd" placeholder="Ingrese maximo % categoria ...">
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
                    <h3 class="card-title">Listado de Categoria</h3>
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
                                        <th>#</th>
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
                                    <div class="col-md-3">
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
                                    <div class="col-md-3">
                                        <div class="inputText font-weight-bold">Activo:</div>
                                            <div class="card">
                                                <div class="form-group">
                                                    <div class="form-check d-inline">
                                                        <input class="form-check-input" type="radio" id="activoEdit" name="activoEdit" value="0" disabled='disabled'>
                                                        <label class="form-check-label">No</label>
                                                    </div>
                                                    <div class="form-check d-inline">
                                                        <input class="form-check-input" type="radio" id="activoEdit" name="activoEdit" value="1" disabled='disabled'>
                                                        <label class="form-check-label">Si</label>
                                                    </div>
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
                            <h3 class="card-title">Categorias Existente</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="FormDatosEdit">
                                <h5 class="text-center">Duplicados para: <span class="label label-danger" id="htmlItem"></span>
                                </h5>
                                <div class="row">
                                    <div class="col-md-12">
                                        <table id="TableDiccionarioExistente" class="table table-bordered table-striped table-sm">
                                            <thead>
                                                <tr>
                                                    <th>Categoria</th>
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
                        <button id="idBotonAgregarCategoria"type="button" class="btn btn-success" onclick="ejecutarAgregarCategoria()">Agregar</button>
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
                            <h3 class="card-title">Categoria Existente</h3>
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







<?php $this->load->view('Plantillas/Footer'); ?>
<script src="<?php echo base_url('jsDiccionario/jsCategoriaV1.js') ?>"></script>

<script>
    $("#CategoriaAdd").keyup(function () {
        //var idCategoria = $("#selectCategoria").val();
        var valorBuscar = $("#CategoriaAdd").val();
        
        $.ajax({
            type: "POST",
            url: localStorage.getItem("urlApi")+'getAllCategoriaV1_Autocompletar',
            data: JSON.stringify({ "valorBuscar": valorBuscar}),
            headers: {
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function (data) {
                var arrayElemento = jQuery.map(data, function(value, index) {
                        return (value.Categoria);
                });

                $('#CategoriaAdd').autocomplete({
                    clearButton: true,
                    source: arrayElemento,
                    selectFirst: true,
                    minLength: 2
                });
            },
            error: function (xhr, textStatus, errorThrown) {
                console.log('Error: ' + xhr.responseText);
            }
        });
    });

    

</script>



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
