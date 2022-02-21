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
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="text-center"><i class="fas fa-search-dollar"></i>&nbsp;Reporte de Hogar Registrso por Consumo</h1>
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
                        <label class="inputText font-weight-bold">Periodo:</label>
                        <select id="selectPeriodo" name="selectPeriodo" class="form-control form-control-sm">
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label class="inputText font-weight-bold">Tipo de Consumo:</label>
                        <select id="selecTipoConsumo" name="selecTipoConsumo" class="form-control form-control-sm">
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div id="showTableReporteHogarRegistroXConsumo" style="display: none">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group row mb-0 mt-0">
                        <div class="col-md-12 text-center">
                            <div id="TableReporteHogarRegistroXConsumo"></div>
                            <table id="TablaRegistroXConsumo" class="table table-bordered table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>idHogar</th>
                                        <th>CodigoHogar</th>
                                        <th>Clase Social</th>
                                        <th># Personas</th>
                                        <th>Area</th>
                                        <th>Estado</th>
                                        <th>Nombre Panelista</th>
                                        <th>Apellido Panelista</th>
                                        <th>detalle_1</th>
                                        <th>detalle_2</th>
                                        <th>detalle_3</th>
                                        <th>detalle_4</th>
                                        <th>detalle_5</th>
                                        <th>idHogar</th>
                                        
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('Plantillas/Footer');?>

<script src="<?php echo base_url('jsHP/jsReporteHogarRegistroXConsumo.js') ?>"></script>

<script type="text/javascript" src="https://oss.sheetjs.com/sheetjs/xlsx.full.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>