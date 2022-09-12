<!-- Content Header (Page header) -->
<?php $this->load->view('Plantillas/Header');?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            
                <h1><i class="bi bi-journal-text"></i>&nbsp;Reporte Consumos</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content Agregar Producto 11111-->
<!-- /Windows datatables Producto Rango-->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group row mb-0 mt-0">
                <div class="col-md-2">
                        <label class="inputText font-weight-bold">Area:</label>
                        <select id="selectGArea" name="selectGArea" class="form-control form-control-sm">
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label class="inputText font-weight-bold">Semana:</label>
                        <select id="selectSemana" name="selectSemana" class="form-control form-control-sm">
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label class="inputText font-weight-bold">Estado:</label>
                        <select id="selectEstado" name="selectEstado" class="form-control form-control-sm">
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label class="font-weight-bold">Estado A:</label>
                        <select id="selectEstadosAgrupados" class="form-control form-control-sm">
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
                            <div id="TableReporteConsumo"></div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <HR/>
        <div id="showTablaPanelistasFaltaron4Consumo">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group row mb-0 mt-0">
                        <div class="col-md-12 text-center">
                            <div id="TablePanelistasFaltaron4Consumo"></div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>
</section>

<?php $this->load->view('Plantillas/Footer');?>

<script src="<?php echo base_url('jsHP/jsReporteConsumo.js') ?>"></script>




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
