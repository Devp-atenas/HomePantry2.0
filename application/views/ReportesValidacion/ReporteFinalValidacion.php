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
                <h1><i class="bi bi-journal-text"></i>&nbsp;Reporte Final de Validación</h1>
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
                    <div class="col-md-2">
                        <div class="inputText font-weight-bold">&nbsp;</div>
                        <button id="idGenerarReporteFinal" type="button" class="btn btn-primary" disabled="disabled">
                            Generar
                        </button>
                    </div>




                </div>
            </div>
        </div>
        <div id="showReporte" style="display: none">
            <HR/>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group row mb-0 mt-0">
                        <div class="col-md-12 text-center">
                            <div id="TableReporte"></div>
                            <table id="TablaReporte" class="table table-bordered table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>Semana</th>
                                        <th>Categoria</th>
                                        <th>Area</th>
                                        <th>Estado</th>
                                        <th>Id_Hogar</th>
                                        <th>ClaseSocial</th>
                                        <th>Id_Consumo</th>
                                        <th>Canal</th>
                                        <th>CodigoBarra</th>
                                        <th>Producto</th>
                                        <th>Fabricante</th>
                                        <th>Marca</th>
                                        <th>Tamano</th>
                                        <th>Segmento</th>
                                        <th>Cantidad</th>
                                        <th>Precio_producto</th>
                                        <th>Tasa_de_cambio</th>
                                        <th>Total_compra</th>
                                        <th>Moneda</th>
                                        <th>Dolar</th>
                                        <th>Euro</th>
                                        <th>Petro</th>
                                        <th>Peso</th>
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
<script src="<?php echo base_url('jsHP/jsBitacora.js') ?>"></script>
<script src="<?php echo base_url('jsHP/jsAllCombosV1.js') ?>"></script>
<script src="<?php echo base_url('jsHP/jsReporteFinalValidacion.js') ?>"></script>


<script>
    function callReporteConsumoHogar(idSemana,idArea,idEstado,idHogar){
        var idTipoConsumo = $('#selecTipoConsumo').val();
        localStorage.setItem("idSemana", idSemana);
        localStorage.setItem("idArea", idArea);
        localStorage.setItem("idEstado", idEstado);
        localStorage.setItem("idPanelHogar", idHogar);
        localStorage.setItem("flagHogarRegCon", 1);
        localStorage.setItem("idTipoConsumo",idTipoConsumo);
            
        var win = window.open("<?php echo base_url('Principal/ReporteConsumoPorHogar')?>", '_blank');
        win.focus();
        
    }




</script>






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