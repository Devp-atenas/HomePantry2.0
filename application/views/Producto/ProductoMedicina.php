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

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="bi bi-heart-pulse"></i>&nbsp;Mantenimiento Producto Medicina</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content Buscar Producto 11111-->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Buscar Producto</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body" style="display:none;">
                    <form id="FormBuscarProducto">
                        <div class="row">
                             <!--
                                <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Categoria:</div>
                                    <select id="selectCategoriaBuscar" name="selectCategoriaBuscar" class="form-control">
                                    </select>
                                </div>
                            </div>-->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Codigo de Barra:</div>
                                    <input type="text" name="inputCodigoBarraBuscar" id="inputCodigoBarraBuscar" class="form-control">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="col-12">
                                    <input type="button" id="botonBuscarProducto" value="Buscar Producto"
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
<!-- Main content Agregar Producto 11111-->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Producto Medicina</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body" style="display:none;">
                    <form id="FormProducto">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Categoria:</div>
                                    <select id="selectCategoria" name="selectCategoria" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Fabricante:</div>
                                    <select id="selectFabricante" name="selectFabricante" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Marca:</div>
                                    <select id="selectMarca" name="selectMarca" class="form-control">
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Segmento:</div>
                                    <select id="selectSegmento" name="selectSegmento" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Tamaño Rango:</div>
                                    <select id="selectTamanoRango" name="selectTamanoRango" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Tamaño:</div>
                                    <select id="selectTamano" name="selectTamano" class="form-control">
                                    </select>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Unidad Medida:</div>
                                    <select id="selectUnidadMedida" name="selectUnidadMedida" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Fragmentacion:</div>
                                    <input type="text" name="inputFragmentacion" id="inputFragmentacion" class="form-control" readonly="readonly" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Codigo de Barra:</div>
                                    <input type="text" name="inputCodigoBarra" id="inputCodigoBarra" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Producto:</div>
                                    <input type="text" name="inputProducto" id="inputProducto" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="inputText font-weight-bold">Activo:</div>
                                <div class="card">
                                    <div class="form-group">
                                    <div class="form-check d-inline">
                                            <input class="form-check-input" type="radio" id="activoAdd" name="activoAdd" value="0" disabled='disabled'>
                                            <label class="form-check-label">No</label>
                                        </div>
                                        <div class="form-check d-inline">
                                            <input class="form-check-input" type="radio" id="activoAdd" name="activoAdd" value="1" checked disabled='disabled'>
                                            <label class="form-check-label">Si</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                            <div class="inputText font-weight-bold">Pendiente:</div>
                                <div class="card">
                                    <div class="form-group">
                                    <div class="form-check d-inline">
                                            <input class="form-check-input" type="radio" id="pendienteAdd" name="pendienteAdd" value="0" checked>
                                            <label class="form-check-label">No</label>
                                        </div>
                                        <div class="form-check d-inline">
                                            <input class="form-check-input" type="radio" id="pendienteAdd" name="pendienteAdd" value="1">
                                            <label class="form-check-label">Si</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold" id="Atrib1">Atributo 1:</div>
                                    <select id="selectAtributo1" name="selectAtributo1" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold" id="Atrib2">Atributo 2:</div>
                                    <select id="selectAtributo2" name="selectAtributo2" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold" id="Atrib3">Atributo 3:</div>
                                    <select id="selectAtributo3" name="selectAtributo3" class="form-control">
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold" id="Atrib4">Atributo 4:</div>
                                    <select id="selectAtributo4" name="selectAtributo4" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold" id="Atrib5">Atributo 5:</div>
                                    <select id="selectAtributo5" name="selectAtributo5" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold" id="Atrib6">Atributo 6:</div>
                                    <select id="selectAtributo6" name="selectAtributo6" class="form-control">
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold" id="Atrib7">Atributo 7:</div>
                                    <select id="selectAtributo7" name="selectAtributo7" class="form-control">
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-12">
                                    <input type="button" id="botonenviar" value="Agregar Producto"
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
<!-- /Windows datatables Producto Rango-->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Listados de Producto Medicina</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body" >
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="inputText font-weight-bold">Categoria:</div>
                                        <select id="selectCategoriaTabla" name="selectCategoriaTabla" class="form-control">
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <table id="TableProducto" class="table table-bordered table-striped table-hover table-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Producto</th>
                                        <th>Codigo de Barra</th>
                                        <th>Fabricante</th>
                                        <th>Marca</th>
                                        <th>Segmento</th>
                                        <th>Tamaño Rango</th>
                                        <th>Tamano</th>
                                        <th>Unidad Medida</th>
                                        <th>Fecha Alta</th>
                                        <th>Activo?</th>
                                        <th>Pendiente?  </th>
                                        <th>Atributo 1</th>
                                        <th>Atributo 2</th>
                                        <th>Atributo 3</th>
                                        <th>Atributo 4</th>
                                        <th>Atributo 5</th>
                                        <th>Atributo 6</th>
                                        <th>Atributo 7</th>
                                       
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
<!-- Windows Modal actualizarProductoModal -->
<div class="modal fade" id="actualizarProductoModal">
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
                            <h3 class="card-title">Producto</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="FormProductoEdit">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Categoria:</div>
                                            <select id="selectCategoriaEdit" name="selectCategoriaEdit" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Fabricante:</div>
                                            <select id="selectFabricanteEdit" name="selectFabricanteEdit" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Marca:</div>
                                            <select id="selectMarcaEdit" name="selectMarcaEdit" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Segmento:</div>
                                            <select id="selectSegmentoEdit" name="selectSegmentoEdit" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Tamaño Rango:</div>
                                            <select id="selectTamanoRangoEdit" name="selectTamanoRangoEdit" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Tamaño:</div>
                                            <select id="selectTamanoEdit" name="selectTamanoEdit" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Unidad Medida:</div>
                                            <select id="selectUnidadMedidaEdit" name="selectUnidadMedidaEdit" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Fragmentacion:</div>
                                            <input type="text" name="inputFragmentacionEdit" id="inputFragmentacionEdit" class="form-control" readonly="readonly" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Codigo de Barra:</div>
                                            <input type="text" name="inputCodigoBarraEdit" id="inputCodigoBarraEdit" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Producto:</div>
                                            <input type="text" name="inputProductoEdit" id="inputProductoEdit" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
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
                                    <div class="col-md-4">
                                        <div class="inputText font-weight-bold">Pendiente:</div> 
                                        <div class="card">
                                            <div class="form-group">
                                                <div class="form-check d-inline">
                                                    <input class="form-check-input" type="radio" id="pendienteEdit" name="pendienteEdit" value="0" checked>
                                                    <label class="form-check-label">No</label>
                                                </div>
                                                <div class="form-check d-inline">
                                                    <input class="form-check-input" type="radio" id="pendienteEdit" name="pendienteEdit" value="1">
                                                    <label class="form-check-label">Si</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Atributo 1:</div>
                                            <select id="selectAtributo1Edit" name="selectAtributo1Edit" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Atributo 2:</div>
                                            <select id="selectAtributo2Edit" name="selectAtributo2Edit" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Atributo 3:</div>
                                            <select id="selectAtributo3Edit" name="selectAtributo3Edit" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Atributo 4:</div>
                                            <select id="selectAtributo4Edit" name="selectAtributo4Edit" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Atributo 5:</div>
                                            <select id="selectAtributo5Edit" name="selectAtributo5Edit" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Atributo 6:</div>
                                            <select id="selectAtributo6Edit" name="selectAtributo6Edit" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Atributo 7:</div>
                                            <select id="selectAtributo7Edit" name="selectAtributo7Edit" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="visibility:hidden;">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputIdEditProducto">id:</label>
                                            <input type="text" name="inputIdEditProducto" id="inputIdEditProducto"
                                            class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <input type="button" onclick="ActualizarRegistro()" id="editUsuario"
                                        value="Guardar" class="btn btn-success float-right">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Windows Modal Visualizar Registro-->
<div class="modal fade" id="visualizarProductoModal">
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
                            <h3 class="card-title">Producto</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="FormProductoEdit">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Categoria:</div>
                                            <input type="text" name="inputCategoriaVer" id="inputCategoriaVer" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Fabricante:</div>
                                            <input type="text" name="inputFabricanteVer" id="inputFabricanteVer" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Marca:</div>
                                            <input type="text" name="inputMarcaVer" id="inputMarcaVer" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Segmento:</div>
                                            <input type="text" name="selectSegmentoVer" id="selectSegmentoVer" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Tamaño:</div>
                                            <input type="text" name="inputTamanoVer" id="inputTamanoVer" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Tamaño Rango:</div>
                                            <input type="text" name="inputTamanoRangoVer" id="inputTamanoRangoVer" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Unidad Medida:</div>
                                            <input type="text" name="inputUnidadMedidaVer" id="inputUnidadMedidaVer" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Fragmentacion:</div>
                                            <input type="text" name="inputFragmentacionVer" id="inputFragmentacionVer" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Codigo de Barra:</div>
                                            <input type="text" name="inputCodigoBarraVer" id="inputCodigoBarraVer" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Producto:</div>
                                            <input type="text" name="inputProductoVer" id="inputProductoVer" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="inputText font-weight-bold">Activo:</div>
                                        <div class="card">
                                            <div class="form-group">
                                                <div class="form-check d-inline">
                                                    <input class="form-check-input" type="radio" id="activoVer" name="activoVer" value="0" disabled='disabled'">
                                                    <label class="form-check-label">No</label>
                                                </div>
                                                <div class="form-check d-inline">
                                                    <input class="form-check-input" type="radio" id="activoVer" name="activoVer" value="1" disabled='disabled'">
                                                    <label class="form-check-label">Si</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="inputText font-weight-bold">Pendiente:</div>
                                        <div class="card">
                                            <div class="form-group">
                                                <div class="form-check d-inline">
                                                    <input class="form-check-input" type="radio" id="pendienteVer" name="pendienteVer" value="0" disabled='disabled'">
                                                    <label class="form-check-label">No</label>
                                                </div>
                                                <div class="form-check d-inline">
                                                    <input class="form-check-input" type="radio" id="pendienteVer" name="pendienteVer" value="1" disabled='disabled'">
                                                    <label class="form-check-label">Si</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="inputText font-weight-bold" id="atrib1">Atributo 1:</label>
                                            <input type="text" name="inputAtributo1Ver" id="inputAtributo1Ver" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="inputText font-weight-bold" id="atrib2">Atributo 2:</label>
                                            <input type="text" name="inputAtributo2Ver" id="inputAtributo2Ver" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="inputText font-weight-bold" id="atrib3">Atributo 3:</label>
                                            <input type="text" name="inputAtributo3Ver" id="inputAtributo3Ver" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="inputText font-weight-bold" id="atrib4">Atributo 4:</label>
                                            <input type="text" name="inputAtributo4Ver" id="inputAtributo4Ver" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="inputText font-weight-bold" id="atrib5">Atributo 5:</label>
                                            <input type="text" name="inputAtributo5Ver" id="inputAtributo5Ver" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="inputText font-weight-bold" id="atrib6">Atributo 6:</label>
                                            <input type="text" name="inputAtributo6Ver" id="inputAtributo6Ver" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="inputText font-weight-bold" id="atrib7">Atributo 7:</label>
                                            <input type="text" name="inputAtributo7Ver" id="inputAtributo7Ver" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="visibility:hidden;">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputIdEditProducto">id:</label>
                                            <input type="text" name="inputIdEditProducto" id="inputIdEditProducto"
                                            class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <input type="button" onclick="ActualizarRegistro()" id="editUsuario"
                                        value="Guardar" class="btn btn-success float-right">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Windows Modal CodigoBarraExistenteModal -->
<div class="modal fade" id="CodigoBarraExistenteModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa-light fa-barcode-scan"></i>&nbsp;Productos con el mismos codigo de barra</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Codigos de Barras Existente</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="FormDatosEdit">
                                <h5 class="text-center">Productos con el codigo de barras <span class="label label-danger" id="htmlCodigoBarras"></span>
                                </h5>
                                <div class="row">
                                    <div class="col-md-12">
                                        <table id="TableCodigoBarraExistente" class="table table-bordered table-striped table-sm">
                                            <thead>
                                                <tr>
                                                    <th>Categoria</th>
                                                    <th>Producto</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
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
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button id="idBotonAgregarPoducto"type="button" class="btn btn-success" onclick="ejecutarAgregarProductoNuevo()">Agregar Producto</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal Masivo precios -->
<!-- Windows Modal CodigoBarraExistenteVerificarModal -->
<div class="modal fade" id="CodigoBarraExistenteVerificarModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa-light fa-barcode-scan"></i>&nbsp;Productos con el mismos codigo de barra B</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Codigos de Barras Existente</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="FormDatosEdit">
                                <h5 class="text-center"><span class="label label-danger" id="htmlCodigoBarrasVerificar"></span>
                                </h5>
                                <div class="row">
                                    <div class="col-md-12">
                                        <table id="TableCodigoBarraExistenteVerificar" class="table table-bordered table-striped table-sm">
                                            <thead>
                                                <tr>
                                                    <th>Categoria</th>
                                                    <th>Producto</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
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
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal Masivo precios -->

<!-- /Windows Modal Visualizar Registros-->
<?php $this->load->view('Plantillas/Footer');?>
<script src="<?php echo base_url('jsDiccionario/jsProductoMedicinaV1.js') ?>"></script>

<script>
    $("#inputProducto_").keyup(function () {
        var idCategoria = $("#selectCategoria").val();
        var valorBuscar = $("#inputProducto").val();
        
        $.ajax({
            type: "POST",
            url: localStorage.getItem("urlApi")+'getAllProductos_x_categoriaV1_Autocompletar',
            data: JSON.stringify({ "valorBuscar": valorBuscar,"idCategoria":idCategoria }),
            headers: {
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function (data) {
                var arrayElemento = jQuery.map(data, function(value, index) {
                        return (value.Producto);
                });

                $('#inputProducto').autocomplete({
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

    $("#selectCategoriaTabla").change(function() {
        var id_categoriaT = $("#selectCategoriaTabla").val();
        cargarTabla(id_categoriaT);
        $('#TableProducto').show();
    });

    $("#selectCategoria").change(function() {
        var id_categoria = $("#selectCategoria").val();
        cargarNombreAtributos(id_categoria);
        $("#idBotonAgregarPoducto").prop('disabled', false);
        $('#selectFabricante').select2();
        cargarFabricante("#selectFabricante",id_categoria,0);

        if ($.trim($('#selectFabricante').val()) !== '') {
            var id_fabricante = $("#selectFabricante").val();
            let selectMarca = $("#selectMarca");
            selectMarca.find("option").remove();
            $('#selectMarca').select2();
            cargarMarca("#selectMarca",id_categoria,id_fabricante,0);
        }
        let selectSegmento = $("#selectSegmento");
        selectSegmento.find("option").remove();
        let selectTamano = $("#selectTamano");
        selectTamano.find("option").remove();
        let selectTamanoRango = $("#selectTamanoRango");
        selectTamanoRango.find("option").remove();
        let selectUnidadMedida = $("#selectUnidadMedida");
        selectUnidadMedida.find("option").remove();
        let selectAtributo1 = $("#selectAtributo1");
        selectAtributo1.find("option").remove();
        let selectAtributo2 = $("#selectAtributo2");
        selectAtributo2.find("option").remove();
        let selectAtributo3 = $("#selectAtributo3");
        selectAtributo3.find("option").remove();
        let selectAtributo4 = $("#selectAtributo4");
        selectAtributo4.find("option").remove();
        let selectAtributo5 = $("#selectAtributo5");
        selectAtributo5.find("option").remove();
        let selectAtributo6 = $("#selectAtributo6");
        selectAtributo6.find("option").remove();
        let selectAtributo7 = $("#selectAtributo7");
        selectAtributo7.find("option").remove();
        cargarSegmento("#selectSegmento",id_categoria,0);
        cargarTamanoRango("#selectTamanoRango",id_categoria,0);
        //cargarTamano("#selectTamano",id_categoria,0);
        cargarUnidadMedida("#selectUnidadMedida",id_categoria,0);
        cargarAtributo1("#selectAtributo1",id_categoria,0);
        cargarAtributo2("#selectAtributo2",id_categoria,0);
        cargarAtributo3("#selectAtributo3",id_categoria,0);
        cargarAtributo4("#selectAtributo4",id_categoria,0);
        cargarAtributo5("#selectAtributo5",id_categoria,0);
        cargarAtributo6("#selectAtributo6",id_categoria,0);
        cargarAtributo7("#selectAtributo7",id_categoria,0);
    });

    $("#selectTamanoRango").change(function() {
        var idTamanoRango = $("#selectTamanoRango").val();
        var id_categoria = $("#selectCategoria").val();
        cargarTamano("#selectTamano",id_categoria,0,idTamanoRango);
    });

    $("#selectCategoriaEdit").change(function() {
        var id_categoria = $("#selectCategoria").val();

        $("#idBotonAgregarPoducto").prop('disabled', false);
        $('#selectFabricanteEdit').select2();
        cargarFabricante("#selectFabricanteEdit",id_categoria,0);

        if ($.trim($('#selectFabricanteEdit').val()) !== '') {
            var id_fabricante = $("#selectFabricanteEdit").val();
            let selectMarca = $("#selectMarcaEdit");
            selectMarca.find("option").remove();
            $('#selectMarcaEdit').select2();
            cargarMarca("#selectMarcaEdit",id_categoria,id_fabricante,0);
        }
        let selectSegmento = $("#selectSegmentoEdit");
        selectSegmento.find("option").remove();
        let selectTamano = $("#selectTamano");
        selectTamano.find("option").remove();
        let selectTamanoRango = $("#selectTamanoRangoEdit");
        selectTamanoRango.find("option").remove();
        let selectUnidadMedida = $("#selectUnidadMedidaEdit");
        selectUnidadMedida.find("option").remove();
        let selectAtributo1 = $("#selectAtributo1Edit");
        selectAtributo1.find("option").remove();
        let selectAtributo2 = $("#selectAtributo2Edit");
        selectAtributo2.find("option").remove();
        let selectAtributo3 = $("#selectAtributo3Edit");
        selectAtributo3.find("option").remove();
        let selectAtributo4 = $("#selectAtributo4Edit");
        selectAtributo4.find("option").remove();
        let selectAtributo5 = $("#selectAtributo5Edit");
        selectAtributo5.find("option").remove();
        let selectAtributo6 = $("#selectAtributo6Edit");
        selectAtributo6.find("option").remove();
        let selectAtributo7 = $("#selectAtributo7Edit");
        selectAtributo7.find("option").remove();
        cargarSegmento("#selectSegmentoEdit",id_categoria,0);
        cargarTamanoRango("#selectTamanoRangoEdit",id_categoria,0);
        cargarUnidadMedida("#selectUnidadMedidaEdit",id_categoria,0);
        cargarAtributo1("#selectAtributo1Edit",id_categoria,0);
        cargarAtributo2("#selectAtributo2Edit",id_categoria,0);
        cargarAtributo3("#selectAtributo3Edit",id_categoria,0);
        cargarAtributo4("#selectAtributo4Edit",id_categoria,0);
        cargarAtributo5("#selectAtributo5Edit",id_categoria,0);
        cargarAtributo6("#selectAtributo6Edit",id_categoria,0);
        cargarAtributo7("#selectAtributo7Edit",id_categoria,0);
    });

    //999999999
    $("#selectTamanoRangoEdit").change(function() { 
        var id_categoria = $("#selectCategoriaEdit").val();
        var idTamanoRango = $("#selectTamanoRangoEdit").val();
        cargarTamano("#selectTamanoEdit",id_categoria,0,idTamanoRango);
        
    });

    $("#selectFabricante").change(function() {
        var id_categoria = $("#selectCategoria").val();
        var id_fabricante = $("#selectFabricante").val();
        let selectMarca = $("#selectMarca");
        selectMarca.find("option").remove();
        $('#selectMarca').select2();
        cargarMarca("#selectMarca",id_categoria,id_fabricante,0);
    });
</script>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.2.4/js/dataTables.fixedHeader.min.js"></script>



<script src="<?php echo base_url('assets/autoNumeric-1.9.18.js') ?>"></script>