<!-- Content Header (Page header) -->
<?php $this->load->view('Plantillas/Header');?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1><i class="bi bi-sliders2-vertical"></i>&nbsp;Sustitucion de hogar por cambio NSE</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>



<section class="content">
    <div class="row">
        <div class="col-md-12">
            
            
            <div class="form-group row mb-0 mt-0">
                <div class="col-md-4">
                    <label class="inputText font-weight-bold">Estado:</label>
                    <select id="selectEstadoII" name="selectEstadoII" class="form-control">
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="inputText font-weight-bold">Clase Social:</label>
                    <select id="selectClaseSocialII" name="selectClaseSocialII" class="form-control">
                    </select>
                </div>
                <div class="col-md-2">
                    <div id="showButton">
                        <label>Sustituir Hogar:</label>
                        <button id="bSustituirII" type="button" class="btn btn-block btn-sm btn-primary" onclick="callSustituirHogar();">
                            <i class="fas fa-sync-alt"></i>&nbsp;Sustituir
                        </button>
                    </div>
                </div>
            </div>
            <div id="showTablas">
                <h2 class="text-center">Hogares Muestra</h2>
                <div class="form-group row mb-0 mt-0">
                    <div class="col-md-12 text-center">
                        <div id="TablaHogaresMuestraII"></div>
                    </div>
                </div>
                <HR/>
                <h2 class="text-center">Hogares Sustitutos</h2>
                <div class="form-group row mb-0 mt-0">
                    <div class="col-md-12 text-center">
                        <div id="TablaHogaresMuestra00"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Windows Modal sustituirHogarModal -->
<div class="modal fade" id="sustituirHogarModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fas fa-sync-alt"></i>&nbsp;Sustituir Hogar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Detalle de la sustitucion</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="FormDatosEdit">
                                <h3 class="text-center">Hogar a Sustituir</h3>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Id Hogar:</div>
                                            <input type="text" class="form-control input-sm" id="inputIdHogarSustituido" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Codigo Hogar:</div>
                                            <input type="text" class="form-control input-sm" id="inputCodigoHogarSustituido" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Responsable del Hogar:</div>
                                            <input type="text" class="form-control input-sm" id="inputResponsableHogarSustituido" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="inputText font-weight-bold">Dejar Activo?:</div>
                                        <div class="card">
                                            <div class="form-group">
                                                <div class="form-check d-inline">
                                                    <input class="form-check-input" type="radio" id="activoHogar" name="activoHogar" value="0">
                                                    <label class="form-check-label">No</label>
                                                </div>
                                                <div class="form-check d-inline">
                                                    <input class="form-check-input" type="radio" id="activoHogar" name="activoHogar" value="1">
                                                    <label class="form-check-label">Si</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <h3 class="text-center">Hogar Sustituto</h3>
                                <div class="form-group row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Id Hogar:</div>
                                            <input type="text" class="form-control input-sm" id="inputIdHogarSustituto" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Codigo Hogar:</div>
                                            <input type="text" class="form-control input-sm" id="inputCodigoHogarSustituto" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Responsable del Hogar:</div>
                                            <input type="text" class="form-control input-sm" id="inputResponsableHogarSustituto" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="motivoSustitucion">Especifique motivo de la sustitucion:</label>
                                        <textarea class="form-control" id="motivoSustitucion" rows="1"></textarea>
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
                    <button type="button" class="btn btn-danger" data-dismiss="modal">No, Cancelar</button>
                    <button type="button" class="btn btn-success" onclick="ejecutarSustituirHogar()">Si, Sustituir Hogar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal Masivo precios -->

<?php $this->load->view('Plantillas/Footer');?>

<script>
$(document).ready(function() {
    var urlApi = '<?php echo urlApi; ?>';
    sessionStorage.setItem("urlApi",urlApi);
    $('#showTablas').hide();
    cargarEstado(urlApi,'#selectEstadoI');
    //$('#showButton').hide();
    $('#bSustituirI').prop('disabled', true);
    sessionStorage.removeItem("flag0");
    sessionStorage.removeItem("flagI");
});

$("#selectEstadoI").change(function() {
    var urlApi = '<?php echo urlApi; ?>';
    cargarClaseSocial(urlApi,'#selectClaseSocialI');
    
    $('#showTablas').hide();
    //$('#showButton').hide();
    $('#bSustituirI').prop('disabled', true);
    sessionStorage.removeItem("flag0");
    sessionStorage.removeItem("flagI");
});

$("#selectClaseSocialI").change(function() {
    var urlApi = '<?php echo urlApi; ?>';
    var idEstado = $("#selectEstadoI").val();
    var claseSocial =  $("#selectClaseSocialI").val();
    cargarTablaHogaresMuestraIO(urlApi,"#TablaHogaresMuestraI",idEstado,claseSocial,1);
    cargarTablaHogaresMuestraIO(urlApi,"#TablaHogaresMuestra0",idEstado,claseSocial,0);
    $('#showTablas').show();
    //$('#showButton').hide();
    $('#bSustituirI').prop('disabled', true);
    sessionStorage.removeItem("flag0");
    sessionStorage.removeItem("flagI");
});
</script>

<script src="<?php echo base_url('jsHP/maestro.js') ?>"></script>
<script src="<?php echo base_url('jsHP/jsSustitucionHogaresNSE.js') ?>"></script>

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

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>