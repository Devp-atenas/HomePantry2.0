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
                <h1><i class="bi bi-calendar3"></i>&nbsp;Cambios Mensuales</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group row mb-0 mt-0">
                    <div class="col-md-4">
                        <label class="inputText font-weight-bold">Categoria:</label>
                        <select id="selectCategoria" name="selectCategoria" class="form-control form-control-sm">
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="inputText font-weight-bold">Jerarquia:</label>
                        <select id="selectJerarquia" name="selectJerarquia" class="form-control form-control-sm">
                        </select>
                    </div>
                    
                </div>

                <HR/>
                <div class="form-group row mb-0 mt-0">
                    <form method="post" enctype="multipart/form-data">
                        <div class="col-md-9">
                            <input type="file" id="file" name="file" accept=".xls, .xlsx"/>
                        </div>
                        <div class="col-md-3">
                            <button id="SubirArchivo" class="btn btn-primary btn-sm" disabled="disabled">
                                <i class="bi bi-upload"></i>Subir
                            </button>
                        </div>
                    </form>
                </div>
                <div class="form-group row mb-0 mt-0">
                    <div class="col-md-4">
                        <label class="inputText font-weight-bold">Proceso:</label>
                        <select id="selectProceso" name="selectProceso" class="form-control form-control-sm">
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="inputText font-weight-bold">Proceso:</label>
                        <button id="SubirArchivo" class="btn btn-primary btn-sm" disabled="disabled">
                            <i class="bi bi-upload"></i>Subir
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
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Windows Modal -->
<div class="modal fade" id="ValidacionCerradaModal">
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
                            <h3 class="card-title">Semana Cerrada</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            Ya la semana se encuentra cerrada
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<?php $this->load->view('Plantillas/Footer');?>
<script src="<?php echo base_url('jsHP/jsBitacora.js') ?>"></script>
<script src="<?php echo base_url('jsHP/jsAllCombosV1.js') ?>"></script>
<script src="<?php echo base_url('jsHP/jsCambiosMensuales.js') ?>"></script>
