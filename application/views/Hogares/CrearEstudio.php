<!-- Content Header (Page header) -->
<?php $this->load->view('Plantillas/Header');?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="icon-group"></i>&nbsp;Estudios:</h1>
            </div>
            
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content Agregar Atributo ****-->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Estudio</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body" style="display: none;">
                    <form id="formNuevoEstudio" method="post">
                        <div class="row">
                            <div class="col-md-12"> <!-- bg-danger bg-gradient -->
                                <div class="form-group row mb-0 mt-0">
                                    <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="forEstudio" class="inputText font-weight-bold">Nombre del Estudio:</label>
                                        <input type="text" name="inputEstudio" id="inputEstudio" class="form-control">
                                    </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="inputText font-weight-bold">Frecuencia del Estudio:</div>
                                        <div class="card">
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="frecuencia" id="semanal" value="1">
                                                    <label class="form-check-label">Semanal</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="frecuencia" id="mensual" value="1">
                                                    <label class="form-check-label">Mensual</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="forCantidad" class="inputText font-weight-bold">Cantidad de Hogares:</label>
                                            <input type="number" name="inputCantidad" id="inputCantidad" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
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
                                    <div class="col-3">
                                        <div class="inputText font-weight-bold">Accion:</div>
                                        <button type="submit" id="btCrearEstudio" class="btn btn-success">Crear Estudio</button>
                                    </div>
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
                    <h3 class="card-title">Listados Estudios</h3>
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
                                <div class="col-md-12">
                                    <div class="form-group row mb-0 mt-0">
                                        <div class="col-md-12 text-center">
                                            <div id="TablaEstudios"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="modalEstudioEditar">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class='fas fa-plus'></i>&nbsp;Actualizar Estudio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Estudio</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="FormEstudioEdit">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="inputText font-weight-bold">Estudio:</label>
                                            <input type="text" name="inputEstudioEdit" id="inputEstudioEdit" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="inputText font-weight-bold">Frecuencia del Estudio:</label>
                                        <div class="card">
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="frecuenciaEdit" id="semanalEdit" value="1">
                                                    <label class="form-check-label">Semanal</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="frecuenciaEdit" id="mensualEdit" value="1">
                                                    <label class="form-check-label">Mensual</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="inputCantidadEdit" class="inputText font-weight-bold">Cantidad de Hogares:</label>
                                            <input type="number" name="inputCantidadEdit" id="inputCantidadEdit" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="inputText font-weight-bold">Activo:</div>
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
                                </div>
                                <div class="row" style="visibility:hidden;">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputIdEditEstudio">id:</label>
                                            <input type="text" name="inputIdEditEstudio" id="inputIdEditEstudio"
                                            class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" id="btActualizarEstudio" class="btn btn-primary">Actualizar</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- /Windows Modal Visualizar Registros-->
<?php $this->load->view('Plantillas/Footer');?>
<script src="<?php echo base_url('jsHP/Estudio.js') ?>"></script>
<script src="<?php echo base_url('jsHP/Miscelaneo.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/6.0.0-beta.2/dropzone-min.js" integrity="sha512-FFyHlfr2vLvm0wwfHTNluDFFhHaorucvwbpr0sZYmxciUj3NoW1lYpveAQcx2B+MnbXbSrRasqp43ldP9BKJcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>