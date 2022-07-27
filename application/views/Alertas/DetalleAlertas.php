<!-- Content Header (Page header) -->
<?php $this->load->view('Plantillas/Header');?>

<!-- Content Header (Page header) -->

<!-- Main content Agregar Producto 11111-->
<!-- /Windows datatables Producto Rango-->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            
                <h1><i class="bi bi-bell"></i>&nbsp;Detalle de alertas</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
    
        <div class="row">
            <div class="col-md-12">
                <div class="form-group row mb-0 mt-0">
                <div class="col-md-2">
                        <label class="inputText font-weight-bold">Tipo de Alertas:</label>
                        <select id="selectTipoAlertas" name="selectTipoAlertas" class="form-control form-control-sm">
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <HR/>
        <div id="showTabla">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group row mb-0 mt-0">
                        <div class="col-md-12 text-center">
                            <div id="TableAlert"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="modal-responderAlerta" aria-hidden="true">
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
                            <h3 class="card-title">Responder Alerta</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="FormAlerta">
                            <div class="form-group row mb-0 mt-0">
                                    <div class="col-md-5">
                                        <label class="inputText font-weight-bold">Alerta:</label>
                                        <input type="text" name="inputAlerta" id="inputAlerta" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="form-group row mb-0 mt-0">
                                    <div class="col-md-12">
                                        <label class="inputText font-weight-bold">Respuesta:</label>
                                        <input type="text" name="inputRespuestaAlerta" id="inputRespuestaAlerta" class="form-control">
                                    </div>
                                    <div class="row" style="display:none;">
                                        <div class="col-md-1">
                                            <div class="form-group">
                                                <label for="inputId">id:</label>
                                                <input type="text" name="inputId" id="inputId"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="bi bi-x-square"></i> Cancelar</button>
                <button id="idResponderAlerta" type="button" class="btn btn-primary">
                    <i class="bi bi-save"></i> Guardar
                </button>

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modal-visualizarRespuestaAlerta" aria-hidden="true">
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
                            <h3 class="card-title">Visualizando respuesta alerta</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="FormRespuestaAlerta">
                                <div class="form-group row mb-0 mt-0">
                                    <div class="col-md-5">
                                        <label class="inputText font-weight-bold">Alerta:</label>
                                        <input type="text" name="inputAlertaResp" id="inputAlertaResp" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-5">
                                        <label class="inputText font-weight-bold">Usuario:</label>
                                        <input type="text" name="inputUsuarioResp" id="inputUsuarioResp" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="form-group row mb-0 mt-0">
                                    <div class="col-md-12">
                                        <label class="inputText font-weight-bold">Respuesta:</label>
                                        <input type="text" name="inputRespuestaAlertaResp" id="inputRespuestaAlertaResp" class="form-control" readonly>
                                    </div>
                                    <div class="row" style="display:none;">
                                        <div class="col-md-1">
                                            <div class="form-group">
                                                <label for="inputId">id:</label>
                                                <input type="text" name="inputId" id="inputId"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="bi bi-x-square"></i> Cancelar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modal-visualizarAlerta" aria-hidden="true">
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
                            <h3 class="card-title">Visualizando respuesta alerta</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="FormRespuestaAlerta">
                                <div class="form-group row mb-0 mt-0">
                                    <div class="col-md-5">
                                        <label class="inputText font-weight-bold">Alerta:</label>
                                        <input type="text" name="inputAlertaAlert" id="inputAlertaAlert" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="form-group row mb-0 mt-0">
                                    <div class="col-md-3">
                                        <label class="inputText font-weight-bold">NSE Anterior:</label>
                                        <input type="text" name="inputNSEAnteriorAlert" id="inputNSEAnteriorAlert" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="inputText font-weight-bold">NSE Actualizado:</label>
                                        <input type="text" name="inputNSENuevoAlert" id="inputNSENuevoAlert" class="form-control" readonly>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="bi bi-x-square"></i> Cancelar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modal-visualizarAlerta__" aria-hidden="true">
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
                            <h3 class="card-title">Visualizando Alerta</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="FormAlerta">
                            <div class="form-group row mb-0 mt-0">
                                    <div class="col-md-5">
                                        <label class="inputText font-weight-bold">Alerta:</label>
                                        <input type="text" name="inputAlerta" id="inputAlerta" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="form-group row mb-0 mt-0">
                                    <div class="col-md-12">
                                        <label class="inputText font-weight-bold">Respuesta:</label>
                                        <input type="text" name="inputRespuestaAlerta" id="inputRespuestaAlerta" class="form-control">
                                    </div>
                                    <div class="row" style="display:none;">
                                        <div class="col-md-1">
                                            <div class="form-group">
                                                <label for="inputId">id:</label>
                                                <input type="text" name="inputId" id="inputId"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="bi bi-x-square"></i> Cancelar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<?php $this->load->view('Plantillas/Footer');?>


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

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/js/dataTables.checkboxes.min.js"></script>
