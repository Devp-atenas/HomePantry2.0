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
                <h1><i class="bi bi-bezier2"></i>&nbsp;Depuraciones e Inconsistencias</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label class="inputText font-weight-bold">Jerarquia:</label>
                    <select id="selectJerarquia" name="selectJerarquia" class="form-control form-control-sm">
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="inputText font-weight-bold">Accion:</div>
                <div class="card">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="accionDepurar1" name="accionDepurar" value="1" checked>
                            <label class="form-check-label">Modificar</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="accionDepurar1" name="accionDepurar" value="2"'>
                            <label class="form-check-label">Mostrar cambios</label>
                        </div>
                    </div>
                </div>
            </div>
                        
            <div class="col-md-3">
                <div class="form-group">  
                    <button id="siguienteDepuracion" class="btn btn-primary btn-sm" disabled="disabled">
                        <i class="bi bi-cpu"></i>&nbsp;Siguiente
                    </button>
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

<!-- Windows Modal ItemModificarDescripcionModal-->
<div class="modal fade" id="ItemModificarDescripcionModal">
    <div class="modal-dialog modal-xl">
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
                            <h3 class="card-title">Modificar descripcion producto por depuracion</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="inputText font-weight-bold">Codigos de Barra:</label>
                                        <input type="text" name="CodigoBarraDescripcion" id="CodigoBarraDescripcion" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">  
                                        <button id="continuarDescripcion" class="btn btn-primary btn-sm">
                                            <i class="bi bi-cpu"></i>&nbsp;Continuar
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div id="showDescripciones" style="display: none">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="inputText font-weight-bold">Descripcion actual:</label>
                                            <input type="text" name="DescripcionActual" id="DescripcionActual" class="form-control" disabled='disabled'>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="inputText font-weight-bold">Descripcion a modificar:</label>
                                            <input type="text" name="DescripcionNueva" id="DescripcionNueva" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="display: none">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="inputIdEdit" id="inputIdEdit">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button id="Pre-DepurarDescripcion" type="button" class="btn btn-primary">Pre-Depurar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Windows Modal ItemModificarTamanoModal-->
<div class="modal fade" id="ItemModificarTamanoModal">
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
                            <h3 class="card-title"><span class="label label-danger" id="TituloModal"></span></h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="inputText font-weight-bold">Codigos de Barra:</label>
                                        <textarea class="form-control" id="CodigosBarraTamano" rows="6"></textarea>
                                    </div>
                                </div>
                            </div>
                            <form id="formItemModificarTamano">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="inputText font-weight-bold">Categoria:</label>
                                            <select id="selectCategoriaTamano" name="selectCategoriaTamano" class="form-control form-control-sm">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="inputText font-weight-bold">Tamaño Rango:</label>
                                            <select id="selectTamanoRangoTR" name="selectTamanoRangoTR" class="form-control form-control-sm">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="inputText font-weight-bold">
                                                <span class="label label-danger" id="TituloCombo"></span>:
                                            </label>
                                            <select id="selectItemModificarTamano" name="selectItemModificarTamano" class="form-control form-control-sm">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button id="Pre-DepurarTamano" type="button" class="btn btn-primary">Pre-Depurar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Windows Modal ItemModificarModal-->
<div class="modal fade" id="ItemModificarModal">
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
                            <h3 class="card-title"><span class="label label-danger" id="TituloModal"></span></h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="formItemModificar">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="inputText font-weight-bold">Codigos de Barra:</label>
                                            <textarea class="form-control" id="CodigosBarraTR" rows="6"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="inputText font-weight-bold">Categoria:</label>
                                            <select id="selectCategoriaTR" name="selectCategoriaTR" class="form-control form-control-sm">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="inputText font-weight-bold">
                                                <span class="label label-danger" id="TituloCombo"></span>:
                                            </label>
                                            <select id="selectItemModificar" name="selectItemModificar" class="form-control form-control-sm">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button id="Pre-DepurarTR" type="button" class="btn btn-primary">Pre-Depurar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Windows Modal ItemModificarMarcaModal-->
<div class="modal fade" id="ItemModificarMarcaModal">
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
                            <h3 class="card-title"><span class="label label-danger" id="TituloMarcaModal"></span></h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="inputText font-weight-bold">Codigos de Barra:</label>
                                        <textarea class="form-control" id="CodigosBarraMarca" rows="6"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="inputText font-weight-bold">Categoria:</label>
                                        <select id="selectCategoriaMarca" name="selectCategoriaMarca" class="form-control form-control-sm">
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="inputText font-weight-bold">Fabricante:</label>
                                        <select id="selectFabricante" name="selectFabricante" class="form-control form-control-sm">
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="inputText font-weight-bold">
                                            <span class="label label-danger" id="TituloMarcaCombo"></span>:
                                        </label>
                                        <select id="selectMarcaModificar" name="selectMarcaModificar" class="form-control form-control-sm">
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button id="Pre-DepurarMarca" type="button" class="btn btn-primary">Pre-Depurar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<?php $this->load->view('Plantillas/Footer');?>
<script src="<?php echo base_url('jsHP/jsBitacora.js') ?>"></script>
<script src="<?php echo base_url('jsHP/jsAllCombosV1.js') ?>"></script>
<script src="<?php echo base_url('jsHP/jsDepuracionesMensuales.js') ?>"></script>
<script src="<?php echo base_url('jsHP/Miscelaneo.js') ?>"></script>

