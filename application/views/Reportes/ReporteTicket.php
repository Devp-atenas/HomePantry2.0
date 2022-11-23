<?php
if(!isset($_SESSION)){
    session_start();
}else{
    session_destroy();
    session_start();
}
?>
<!-- Content Header (Page header) -->
<?php $this->load->view('Plantillas/Header');?>
<style>
.table.dataTable {
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: 10px;
}

.table.dataTable thead,tfoot {
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
            <div class="col-sm-6">
                <h1><i class="bi bi-journal-text"></i>&nbsp;Reporte Ticket</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group row mb-0 mt-0">
                    <div class="col-md-3">
                        <label class="inputText font-weight-bold">Semana:</label>
                        <select id="selectSemana" name="selectSemana" class="form-control form-control-sm">
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="inputText font-weight-bold">Area:</label>
                        <select id="selectGArea" name="selectGArea" class="form-control form-control-sm">
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="inputText font-weight-bold">Estado:</label>
                        <select id="selectEstado" name="selectEstado" class="form-control form-control-sm">
                        </select>
                    </div>
                    
                </div>
            </div>
        </div>
        <HR/>
        <div id="showTablaReporteTicket" style="display:none;">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group row mb-0 mt-0">
                        <div class="col-md-12 text-center">
                            <div id="TableReporteTicket"></div>
                            <table id="TablaReporteTicket" class="table hover table-striped table-sm">
                            <thead>
                                    <tr>
                                        <th>idHogar</th>
                                        <th>CodigoHogar</th>
                                        <th>Area</th>
                                        <th>Estado</th>
                                        <th>Consumo</th>
                                        <th>Medio</th>
                                        <th>Moneda</th>
                                        <th>Semana</th>
                                        <th>fecha_consumo</th>
                                        <th>FormaPago</th>
                                        <th>Total_items</th>
                                        <th>Total_Compra</th>
                                        <th>Moneda</th>
                                        <th>Canal</th>
                                        <th>Cadena</th>
                                        <th>Dolar</th>
                                        <th>Euro</th>
                                        <th>Petro</th>
                                        <th>Peso</th>
                                        <th>Ind_Activo</th>
                                        <th>idHogar</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>idHogar</th>
                                        <th>CodigoHogar</th>
                                        <th>Area</th>
                                        <th>Estado</th>
                                        <th>Consumo</th>
                                        <th>Medio</th>
                                        <th>Moneda</th>
                                        <th>Semana</th>
                                        <th>fecha_consumo</th>
                                        <th>FormaPago</th>
                                        <th>Total_items</th>
                                        <th>Total_Compra</th>
                                        <th>Moneda</th>
                                        <th>Canal</th>
                                        <th>Cadena</th>
                                        <th>Dolar</th>
                                        <th>Euro</th>
                                        <th>Petro</th>
                                        <th>Peso</th>
                                        <th>Ind_Activo</th>
                                        <th>idHogar</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('Plantillas/Footer');?>
<script src="<?php echo base_url('jsHP/jsBitacora.js') ?>"></script>

<script src="<?php echo base_url('jsHP/jsReporteTicket.js') ?>"></script>

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
