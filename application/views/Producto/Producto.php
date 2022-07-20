<!-- Content Header (Page header) -->
<?php $this->load->view('Plantillas/Header');?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="fas fa-list-ol"></i>&nbsp;Mantenimiento de Producto:</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content Agregar Producto 11111-->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Producto</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body" style="display: none;">
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
                                    <select id="inputSegmento" name="inputSegmento" class="form-control">
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
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Tamaño Rango:</div>
                                    <select id="selectTamanoRango" name="selectTamanoRango" class="form-control">
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
                                    <input type="text" name="inputFragmentacion" id="inputFragmentacion" class="form-control">
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
                                            <input class="form-check-input" type="radio" id="activoAdd" name="activoAdd" value="0">
                                            <label class="form-check-label">No</label>
                                        </div>
                                        <div class="form-check d-inline">
                                            <input class="form-check-input" type="radio" id="activoAdd" name="activoAdd" value="1" checked>
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
                                    <div class="inputText font-weight-bold">Atributo 1:</div>
                                    <select id="selectAtributo1" name="selectAtributo1" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Atributo 2:</div>
                                    <select id="selectAtributo2" name="selectAtributo2" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Atributo 3:</div>
                                    <select id="selectAtributo3" name="selectAtributo3" class="form-control">
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Atributo 4:</div>
                                    <select id="selectAtributo4" name="selectAtributo4" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Atributo 5:</div>
                                    <select id="selectAtributo5" name="selectAtributo5" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Atributo 6:</div>
                                    <select id="selectAtributo6" name="selectAtributo6" class="form-control">
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="inputText font-weight-bold">Atributo 7:</div>
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
                    <h3 class="card-title">Listados de Producto</h3>
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
                
                            <table id="TableProducto" class="table table-bordered table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>Producto</th>
                                        <th>Codigo de Barra</th>
                                        <th>Segmento</th>
                                        <th>Fabricanta</th>
                                        <th>Marca</th>
                                        <th>Tamano</th>
                                        <th>Tamaño Rango</th>
                                        <th>Unidad Medida</th>
                                        <th>Fragmentacion</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Producto</th>
                                        <th>Codigo de Barra</th>
                                        <th>Segmento</th>
                                        <th>Fabricanta</th>
                                        <th>Marca</th>
                                        <th>Tamano</th>
                                        <th>Tamaño Rango</th>
                                        <th>Unidad Medida</th>
                                        <th>Fragmentacion</th><th></th>
                                    </tr>
                                </tfoot>
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
                            <form id="FormProductoEditar">
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
                                            <select id="inputSegmentoEdit" name="inputSegmentoEdit" class="form-control">
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
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Tamaño Rango:</div>
                                            <select id="selectTamanoRangoEdit" name="selectTamanoRangoEdit" class="form-control">
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
                                            <input type="text" name="inputFragmentacionEdit" id="inputFragmentacionEdit" class="form-control">
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
                                                    <input class="form-check-input" type="radio" id="pendienteEdit" name="pendienteEdit" value="0">
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
                            <form id="FormProductoEditar">
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
                                            <input type="text" name="inputSegmentoVer" id="inputSegmentoVer" class="form-control" readonly>
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
                                            <div class="inputText font-weight-bold">Atributo 1:</div>
                                            <input type="text" name="inputAtributo1Ver" id="inputAtributo1Ver" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Atributo 2:</div>
                                            <input type="text" name="inputAtributo2Ver" id="inputAtributo2Ver" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Atributo 3:</div>
                                            <input type="text" name="inputAtributo3Ver" id="inputAtributo3Ver" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Atributo 4:</div>
                                            <input type="text" name="inputAtributo4Ver" id="inputAtributo4Ver" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Atributo 5:</div>
                                            <input type="text" name="inputAtributo5Ver" id="inputAtributo5Ver" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Atributo 6:</div>
                                            <input type="text" name="inputAtributo6Ver" id="inputAtributo6Ver" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="inputText font-weight-bold">Atributo 7:</div>
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




<!-- Windows Modal CodigoBarraExistenteModal
 -->
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
                                        <h5 class="text-center"><span class="label label-danger" id="htmlMensajeModal"></span></h5>
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
<!-- /Windows Modal Visualizar Registros-->
<?php $this->load->view('Plantillas/Footer');?>

<script>
$("#botonenviar").click(function() {
    CodigoBarras = $('#inputCodigoBarra').val();
    existeCodigoBarra(CodigoBarras);
    //ejecutarAgregarProductoNuevo();
});

$(document).ready(function() {
    //$('#inputCategoria').select2();
    $('#TableProducto').hide();
    cargarCategoria("#selectCategoria",-1);
    $('#FormProductoEdit').validate({
        rules: {
            selectCategoriaEdit: {
                required: true,
            },
            inputTamEdit: {
                required: true,
                decimal: true
            },
            inputAbreviaturaEdit: {
                required: true,
                minlength: 3,
                maxlength: 5,
            },
        },
        messages: {
            selectCategoriaEdit: {
                required: "Por favor ingrese la categoria"
            },
            inputTamEdit: {
                required: "Por favor ingrese el Producto",

            },
            inputAbreviaturaEdit: {
                required: "Por favor ingrese la abreviatura de la Producto",
                minlength: "Su Abreviatura debe tener al menos 3 caracteres",
                maxlength: "Su Abreviatura debe tener al menos 5 caracteres"
            },
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
    $('#FormProducto').validate({
        rules: {
            selectCategoria: {
                required: true,
            },
            selectFabricante: {
                required: true
            },
            selectMarca: {
                required: true
            },
            inputSegmento: {
                required: true
            },
            selectTamano: {
                required: true
            },
            selectTamanoRango: {
                required: true
            },
            selectUnidadMedida: {
                required: true
            },
            inputFragmentacion: {
                required: true
            },
            inputCodigoBarra: {
                required: true,
                minlength: 13,
                maxlength: 20
            },
            inputProducto: {
                required: true
            },
            activoAdd: {
                required: true
            },
            pendienteAdd: {
                required: true
            },
            inputAbreviatura: {
                required: true,
                minlength: 3,
                maxlength: 5
            },
        },
        messages: {
            selectCategoria: {
                required: "Por favor ingrese la categoria"
            },
            selectMarca: {
                required: "Por favor ingrese la Marca"
            },
            inputTam: {
                required: "Por favor ingrese el Producto",
            },
            inputAbreviatura: {
                required: "Por favor ingrese la abreviatura del Producto",
                minlength: "Su abrevitura debe tener al menos 3 caracteres",
                maxlength: "Su abreviatura debe tener al menos 5 caracteres"
            },
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
    document.getElementById('FormProducto').reset();
    cargarCategoria("#selectCategoriaTabla",-1);
});
// ??????????????????????????????????????????????????????????????????????
$("#selectCategoriaTabla").change(function() {
    var id_categoriaT = $("#selectCategoriaTabla").val();
    console.log(id_categoriaT);
    cargarTabla(id_categoriaT);
    $('#TableProducto').show();
});

$("#selectCategoria").change(function() {
    $("#idBotonAgregarPoducto").prop('disabled', false);
    $('#selectFabricante').select2();
    cargarFabricante("#selectFabricante",0);

    var id_categoria = $("#selectCategoria").val();
    if ($.trim($('#selectFabricante').val()) !== '') {
        var id_fabricante = $("#selectFabricante").val();
        let selectMarca = $("#selectMarca");
        selectMarca.find("option").remove();
        cargarMarca("#selectMarca",id_categoria,id_fabricante,0);
    }
    let selectSegmento = $("#inputSegmento");
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
    cargarSegmento("#inputSegmento",id_categoria,0);
    cargarTamano("#selectTamano",id_categoria,0);
    cargarTamanoRango("#selectTamanoRango",id_categoria,0);
    cargarUnidadMedida("#selectUnidadMedida",id_categoria,0);
    cargarAtributo1("#selectAtributo1",id_categoria,0);
    cargarAtributo2("#selectAtributo2",id_categoria,0);
    cargarAtributo3("#selectAtributo3",id_categoria,0);
    cargarAtributo4("#selectAtributo4",id_categoria,0);
    cargarAtributo5("#selectAtributo5",id_categoria,0);
    cargarAtributo6("#selectAtributo6",id_categoria,0);
    cargarAtributo7("#selectAtributo7",id_categoria,0);
});

$("#selectFabricante").change(function() {
    var id_categoria = $("#selectCategoria").val();
    var id_fabricante = $("#selectFabricante").val();
    let selectMarca = $("#selectMarca");
    selectMarca.find("option").remove();
    cargarMarca("#selectMarca",id_categoria,id_fabricante,0);
});


function deleteAction(data) {
    Swal.fire({
        title: '¿Estas seguro?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: '¡Sí, bórralo!'
    }).then((result) => {
        if (result.isConfirmed) {
            var settings = {
                "url": '<?php echo urlApi; ?>deleteTamano/' + data,
                "method": "get",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
            }
            $.ajax(settings).done(function(response) {
                var DatosJson = JSON.parse(JSON.stringify(response));
                Swal.fire({
                    title: DatosJson.message,
                    width: '350px',
                    height: '45px'
                }).then(function() {
                    let xtable = $('#TableProducto').DataTable();
                    xtable.ajax.reload(null, false);
                });
            }).fail(function(jqXHR, textStatus) {
                if (jqXHR.status == 400) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 10000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })
                    Toast.fire({
                        title: 'Su Session ha Expirado',
                        confirmButtonText: `Ok`,
                    })
                    window.location = '/homepantry20/index.php';
                }
            })
        }
    })
}
// 333333
function ActualizarRegistro() {
    if ($("#FormProductoEdit").valid()) {
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": '<?php echo urlApi; ?>updateTamano',
            "method": "post",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "data": {
                "Id_Tamano": $("#inputIdEditTamano").val(),
                "Id_Categoria": $("#selectCategoriaEdit").val(),
                "Tamano": $("#inputTamEdit").val(),
                "activo": $('input:radio[name=activoAdd]:checked').val()
            }
        }
        $.ajax(settings).done(function(response) {
            let xtable = $('#TableProducto').DataTable();
            xtable.ajax.reload(null, false);
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'success',
                title: response.message,
                confirmButtonText: `Ok`,
            })
            var form = document.querySelector('#FormProductoEdit');
            form.reset();
            $('#actualizarProductoModal').modal('hide');
        }).fail(function(jqXHR, textStatus) {
            if (jqXHR.status == 400) {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 10000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
                Toast.fire({
                    icon: 'info',
                    title: 'Su Session ha Expirado',
                    confirmButtonText: `Ok`,
                })
                var form = document.querySelector('#FormUsuariosEdit');
                form.reset();
                window.location = '/homepantry20/index.php';
            }
        })
    }
}

// 22222
function EditAction(data) {
    document.getElementById('FormProductoEditar').reset();
    var settings = {
        "url": '<?php echo urlApi; ?>getProductoId/' + data,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        $('#inputIdEditProducto').val(response.data[0].Id_Producto);
        cargarCategoria("#selectCategoriaEdit",response.data[0].id_Categoria);
        cargarSegmento("#inputSegmentoEdit",response.data[0].id_Categoria,response.data[0].id_Segmento);
        cargarTamano("#selectTamanoEdit",response.data[0].id_Categoria,response.data[0].Id_Tamano);
        cargarFabricante("#selectFabricanteEdit",response.data[0].id_Fabricante);
        cargarTamanoRango("#selectTamanoRangoEdit",response.data[0].id_Categoria,response.data[0].id_Categoria);
        cargarUnidadMedida("#selectUnidadMedidaEdit",response.data[0].id_Categoria,response.data[0].id_UnidadMedida);
        cargarAtributo1("#selectAtributo1Edit",response.data[0].id_Categoria,response.data[0].id_Atributo1);
        cargarAtributo2("#selectAtributo2Edit",response.data[0].id_Categoria,response.data[0].Id_Atributo2);
        cargarAtributo3("#selectAtributo3Edit",response.data[0].id_Categoria,response.data[0].id_Atributo3);
        cargarAtributo4("#selectAtributo4Edit",response.data[0].id_Categoria,response.data[0].id_Atributo4);
        cargarAtributo5("#selectAtributo5Edit",response.data[0].id_Categoria,response.data[0].id_Atributo5);
        cargarAtributo6("#selectAtributo6Edit",response.data[0].id_Categoria,response.data[0].id_Atributo6);
        cargarAtributo7("#selectAtributo7Edit",response.data[0].id_Categoria,response.data[0].id_Atributo7);
        cargarMarca("#selectMarcaEdit",response.data[0].id_Categoria,response.data[0].id_Fabricante,response.data[0].id_Marca);
        $('#inputFragmentacionEdit').val(response.data[0].Fragmentacion);
        $('#inputCodigoBarraEdit').val(response.data[0].CodigoBarra);
        $('#inputProductoEdit').val(response.data[0].Producto);
        var oblig = $("input:radio[name='activoEdit']");
        oblig.filter("[value='"+response.data[0].status+"']").attr('checked', true);
        var oblig = $("input:radio[name='pendienteEdit']");
        oblig.filter("[value='"+response.data[0].status+"']").attr('checked', true);
        $('#actualizarProductoModal').modal('show');
    }).fail(function(jqXHR, textStatus) {
        if (jqXHR.status == 400) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 10000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                title: 'Su Session ha Expirado',
                confirmButtonText: `Ok`,
            })
            window.location = '/homepantry20/index.php';
        }
    })
}

function VisualizarAction(data) {
    var settings = {
        "url": '<?php echo urlApi; ?>getProductoId/' + data,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        
        $('#inputCategoriaVer').val(response.data[0].Categoria);
        $('#inputFabricanteVer').val(response.data[0].Fabricante);
        $('#inputMarcaVer').val(response.data[0].Marca);
        $('#inputSegmentoVer').val(response.data[0].Segmento);
        $('#inputTamanoVer').val(Number.parseFloat(response.data[0].Tamano).toFixed(3));
        $('#inputTamanoRangoVer').val(response.data[0].TamanoRango);
        $('#inputUnidadMedidaVer').val(response.data[0].UnidadMedida);
        
        $('#inputFragmentacionVer').val(response.data[0].Fragmentacion);
        $('#inputCodigoBarraVer').val(response.data[0].CodigoBarra);
        $('#inputProductoVer').val(response.data[0].Producto);
        
        
        $('#inputAtributo1Ver').val(response.data[0].id_Atributo1);
        $('#inputAtributo2Ver').val(response.data[0].id_Atributo2);
        $('#inputAtributo3Ver').val(response.data[0].id_Atributo3);
        $('#inputAtributo4Ver').val(response.data[0].id_Atributo4);
        $('#inputAtributo5Ver').val(response.data[0].id_Atributo5);
        $('#inputAtributo6Ver').val(response.data[0].id_Atributo6);
        $('#inputAtributo7Ver').val(response.data[0].id_Atributo7);
        
        
        var oblig = $("input:radio[name='activoVer']");
        oblig.filter("[value='"+response.data[0].status+"']").attr('checked', true);
        var oblig = $("input:radio[name='pendienteVer']");
        oblig.filter("[value='"+response.data[0].status+"']").attr('checked', true);
        
        $('#visualizarProductoModal').modal('show');
    }).fail(function(jqXHR, textStatus) {
        if (jqXHR.status == 400) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 10000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                title: 'Su Session ha Expirado',
                confirmButtonText: `Ok`,
            })
            window.location = '/homepantry20/index.php';
        }
    })
}

function cargarCategoria(etiqueta,idS) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllCategorias',
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let select = $(etiqueta);
        select.find("option").remove();
        if (idS == -1){
            select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id_Categoria === idS){
                select.append("<option value=" + response.data[i].id_Categoria + " selected>" + response
                .data[i].Categoria + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id_Categoria + ">" + response
                .data[i].Categoria + "</option>");
            }
        }
    }).fail(function(jqXHR, textStatus) {
        if (jqXHR.status == 400) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 10000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                title: 'Su Session ha Expirado',
                confirmButtonText: `Ok`,
            })
            window.location = '/homepantry20/index.php';
        }
    })
}
// ****

//****

function ejecutarAgregarProductoNuevo(){
    if ($("#FormProducto").valid()) {
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": '<?php echo urlApi; ?>addProductoNuevo',
            "method": "POST",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "data": {
                "Id_Categoria": $("#selectCategoria").val(),
                "CodigoBarra": $("#inputCodigoBarra").val(),
                "Producto": $("#inputProducto").val(),
                "id_Segmento": $("#inputSegmento").val(),
                "Id_Fabricante": $("#selectFabricante").val(),
                "Id_Marca": $("#selectMarca").val(),
                "Id_Tamano": $("#selectTamano").val(),
                "Id_TamanoRango": $("#selectTamanoRango").val(),
                "id_UnidadMedida": $("#selectUnidadMedida").val(),
                "Fragmentacion": $("#inputFragmentacion").val(),
                "activo": $('input:radio[name=activoAdd]:checked').val(),
                "Ind_Pendiente": $('input:radio[name=pendienteAdd]:checked').val(),
                "Id_Atributo1": $("#selectAtributo1").val(),
                "Id_Atributo2": $("#selectAtributo2").val(),
                "Id_Atributo3": $("#selectAtributo3").val(),
                "Id_Atributo4": $("#selectAtributo4").val(),
                "Id_Atributo5": $("#selectAtributo5").val(),
                "Id_Atributo6": $("#selectAtributo6").val(),
                "Id_Atributo7": $("#selectAtributo7").val()
            }
        }
        $.ajax(settings).done(function(response) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 10000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'success',
                title: response.message,
                confirmButtonText: `Ok`,
            })
            $('#CodigoBarraExistenteModal').modal('hide');
            var form = document.querySelector('form');
            form.reset();
            let select = $('#selectFabricante');
            select.find("option").remove();
        
            
        }).fail(function(jqXHR, textStatus) {
            if (jqXHR.status == 400) {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 10000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
                Toast.fire({
                    icon: 'info',
                    title: 'Su Session ha Expirado',
                    confirmButtonText: `Ok`,
                })
                var form = document.querySelector('#FormProducto');
                form.reset();
                window.location = '/homepantry20/index.php';
            }
        })
    }
}

function existeCodigoBarra(CodigoBarras) {
    var settings = {
        "url": '<?php echo urlApi; ?>CantidadProductoXCodigoBarra/' + CodigoBarras,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        if (response.data[0].Cantidad != 0){
            var idCategoria = $('#selectCategoria').val();
            cargarTablaCodigoBarrasExistente(CodigoBarras,idCategoria);
            $('#htmlCodigoBarras').html(CodigoBarras);
            $('#CodigoBarraExistenteModal').modal('show');
        }else{
            ejecutarAgregarProductoNuevo();
        }
        
    }).fail(function(jqXHR, textStatus) {
        if (jqXHR.status == 400) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 10000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                title: 'Su Session ha Expirado',
                confirmButtonText: `Ok`,
            })
            window.location = '/homepantry20/index.php';
        }
    })
}

function cargarAtributo7(etiqueta,id_categoria,idS) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllAtributo7_x_Categoria/' + id_categoria,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let select = $(etiqueta);
        select.find("option").remove();
        if (idS == 0){
            select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id === idS){
                select.append("<option value=" + response.data[i].id + " selected>" + response
                .data[i].nombre + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id + ">" + response
                .data[i].nombre + "</option>");
            }
        }
    }).fail(function(jqXHR, textStatus) {
        if (jqXHR.status == 400) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 10000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                title: 'Su Session ha Expirado',
                confirmButtonText: `Ok`,
            })
            window.location = '/homepantry20/index.php';
        }
    })
}
function cargarAtributo6(etiqueta,id_categoria,idS) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllAtributo6_x_Categoria/' + id_categoria,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let select = $(etiqueta);
        select.find("option").remove();
        if (idS == 0){
            select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id === idS){
                select.append("<option value=" + response.data[i].id + " selected>" + response
                .data[i].nombre + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id + ">" + response
                .data[i].nombre + "</option>");
            }
        }
    }).fail(function(jqXHR, textStatus) {
        if (jqXHR.status == 400) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 10000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                title: 'Su Session ha Expirado',
                confirmButtonText: `Ok`,
            })
            window.location = '/homepantry20/index.php';
        }
    })
}
function cargarAtributo5(etiqueta,id_categoria,idS) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllAtributo5_x_Categoria/' + id_categoria,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let select = $(etiqueta);
        select.find("option").remove();
        if (idS == 0){
            select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id === idS){
                select.append("<option value=" + response.data[i].id + " selected>" + response
                .data[i].nombre + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id + ">" + response
                .data[i].nombre + "</option>");
            }
        }
    }).fail(function(jqXHR, textStatus) {
        if (jqXHR.status == 400) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 10000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                title: 'Su Session ha Expirado',
                confirmButtonText: `Ok`,
            })
            window.location = '/homepantry20/index.php';
        }
    })
}
function cargarAtributo4(etiqueta,id_categoria,idS) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllAtributo4_x_Categoria/' + id_categoria,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let select = $(etiqueta);
        select.find("option").remove();
        if (idS == 0){
            select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id === idS){
                select.append("<option value=" + response.data[i].id + " selected>" + response
                .data[i].nombre + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id + ">" + response
                .data[i].nombre + "</option>");
            }
        }
    }).fail(function(jqXHR, textStatus) {
        if (jqXHR.status == 400) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 10000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                title: 'Su Session ha Expirado',
                confirmButtonText: `Ok`,
            })
            window.location = '/homepantry20/index.php';
        }
    })
}
function cargarAtributo3(etiqueta,id_categoria,idS) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllAtributo3_x_Categoria/' + id_categoria,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let select = $(etiqueta);
        select.find("option").remove();
        if (idS == 0){
            select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id === idS){
                select.append("<option value=" + response.data[i].id + " selected>" + response
                .data[i].nombre + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id + ">" + response
                .data[i].nombre + "</option>");
            }
        }
    }).fail(function(jqXHR, textStatus) {
        if (jqXHR.status == 400) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 10000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                title: 'Su Session ha Expirado',
                confirmButtonText: `Ok`,
            })
            window.location = '/homepantry20/index.php';
        }
    })
}
function cargarAtributo2(etiqueta,id_categoria,idS) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllAtributo2_x_Categoria/' + id_categoria,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let select = $(etiqueta);
        select.find("option").remove();
        if (idS == 0){
            select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id === idS){
                select.append("<option value=" + response.data[i].id + " selected>" + response
                .data[i].nombre + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id + ">" + response
                .data[i].nombre + "</option>");
            }
        }
    }).fail(function(jqXHR, textStatus) {
        if (jqXHR.status == 400) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 10000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                title: 'Su Session ha Expirado',
                confirmButtonText: `Ok`,
            })
            window.location = '/homepantry20/index.php';
        }
    })
}
function cargarAtributo1(etiqueta,id_categoria,idS) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllAtributo1_x_Categoria/' + id_categoria,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let select = $(etiqueta);
        select.find("option").remove();
        if (idS == 0){
            select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id === idS){
                select.append("<option value=" + response.data[i].id + " selected>" + response
                .data[i].nombre + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id + ">" + response
                .data[i].nombre + "</option>");
            }
        }
    }).fail(function(jqXHR, textStatus) {
        if (jqXHR.status == 400) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 10000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                title: 'Su Session ha Expirado',
                confirmButtonText: `Ok`,
            })
            window.location = '/homepantry20/index.php';
        }
    })
}
function cargarUnidadMedida(etiqueta,id_categoria,idS) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllUnidadMed_x_Categoria/' + id_categoria,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let select = $(etiqueta);
        select.find("option").remove();
        if (idS == 0){
            select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id === idS){
                select.append("<option value=" + response.data[i].id + " selected>" + response
                .data[i].nombre + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id + ">" + response
                .data[i].nombre + "</option>");
            }
        }
    }).fail(function(jqXHR, textStatus) {
        if (jqXHR.status == 400) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 10000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                title: 'Su Session ha Expirado',
                confirmButtonText: `Ok`,
            })
            window.location = '/homepantry20/index.php';
        }
    })
}
function cargarTamanoRango(etiqueta,id_categoria,idS) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllRango_x_Categoria/' + id_categoria,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let select = $(etiqueta);
        select.find("option").remove();
        if (idS == 0){
            select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id === idS){
                select.append("<option value=" + response.data[i].id + " selected>" + response
                .data[i].nombre + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id + ">" + response
                .data[i].nombre + "</option>");
            }
        }
    }).fail(function(jqXHR, textStatus) {
        if (jqXHR.status == 400) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 10000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                title: 'Su Session ha Expirado',
                confirmButtonText: `Ok`,
            })
            window.location = '/homepantry20/index.php';
        }
    })
}
function cargarTamano(etiqueta,id_categoria,idS) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllTamano_x_Categoria/' + id_categoria,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let select = $(etiqueta);
        select.find("option").remove();
        if (idS == 0){
            select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id === idS){
                select.append("<option value=" + response.data[i].id + " selected>" + response
                .data[i].nombre + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id + ">" + response
                .data[i].nombre + "</option>");
            }
        }
    }).fail(function(jqXHR, textStatus) {
        if (jqXHR.status == 400) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 10000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                title: 'Su Session ha Expirado',
                confirmButtonText: `Ok`,
            })
            window.location = '/homepantry20/index.php';
        }
    })
}
function cargarSegmento(etiqueta,id_categoria,idS) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllSegmento_x_Categoria/' + id_categoria,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let select = $(etiqueta);
        select.find("option").remove();
        if (idS == 0){
            select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id === idS){
                select.append("<option value=" + response.data[i].id + " selected>" + response
                .data[i].nombre + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id + ">" + response
                .data[i].nombre + "</option>");
            }
        }
    }).fail(function(jqXHR, textStatus) {
        if (jqXHR.status == 400) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 10000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                title: 'Su Session ha Expirado',
                confirmButtonText: `Ok`,
            })
            window.location = '/homepantry20/index.php';
        }
    })
}
function cargarMarca(etiqueta,id_categoria,id_fabricante,idS) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllMarca_x_Categoria_x_Fabricante/' + id_categoria+'/'+id_fabricante,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let selectMarca = $(etiqueta);
        selectMarca.find("option").remove();
        if (idS == 0){
            selectMarca.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id === idS){
                selectMarca.append("<option value=" + response.data[i].id + " selected>" + response
                .data[i].Marca + "</option>");
            }else{
                selectMarca.append("<option value=" + response.data[i].id + ">" + response
                .data[i].Marca + "</option>");
            }
        }
    }).fail(function(jqXHR, textStatus) {
        if (jqXHR.status == 400) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 10000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                title: 'Su Session ha Expirado',
                confirmButtonText: `Ok`,
            })
            window.location = '/homepantry20/index.php';
        }
    })
}
function cargarFabricante(etiqueta,idS) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllFabricante',
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let select = $(etiqueta);
        select.find("option").remove();
        if (idS == 0){
            select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id_Fabricante === idS){
            select.append("<option value=" + response.data[i].id_Fabricante + " selected>" + response
                .data[i].Fabricante + " - "+ response.data[i].id_Fabricante + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id_Fabricante + ">" + response
                .data[i].Fabricante + " - "+ response.data[i].id_Fabricante + "</option>");
            }
        }
    }).fail(function(jqXHR, textStatus) {
        if (jqXHR.status == 400) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 10000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                title: 'Su Session ha Expirado',
                confirmButtonText: `Ok`,
            })
            window.location = '/homepantry20/index.php';
        }
    })
}
//****
function cargarTablaCodigoBarrasExistente(CodigoBarras,idCategoria){
    var msg = "";
    var flag = false;
    $('#TableCodigoBarraExistente').dataTable({
        "bDestroy": true,
        "autoWidth": true,
        "dom": '<"wrapper"flitp><"center"B>',
        "responsive": true,
        "searching": false,
        "bPaginate": false,
        "ordering": false,
        "info":     false,
        "ajax": {
            "url": '<?php echo urlApi; ?>getProductoXCodigoBarra/' + CodigoBarras,
            "type": "GET",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "error": function(xhr, error, thrown) {
                if (xhr.status === 403) {
                    var err = JSON.parse(xhr.responseText);
                    Swal.fire({
                        title: err.message,
                        width: '300px',
                        height: '100px'
                    })
                }
                if (xhr.status === 400) {
                    var err = JSON.parse(xhr.responseText);
                    Swal.fire({
                        title: err.message,
                        width: '250px',
                        height: '25px'
                    })
                    window.location.href = '/homepantry20/Principal/logout';
                }
            }
        },
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        },
        "aoColumns": [{
                mData: 'Categoria',
                className: "text-center"
            },
            {
                mData: 'Producto',
                className: "text-center"
            }
            
        ],
        "createdRow": function( row, data, dataIndex){
            if (data['Id_Categoria'] == idCategoria){
                $('td', row).eq(0).css('color', '#EE0000');
                $('td', row).eq(1).css('color', '#EE0000');
                $("#idBotonAgregarPoducto").prop('disabled', true);
                flag = true;
                msg = "El codigo de barra ya pertenece a una categoria!!!";
                $('#htmlMensajeModal').html(msg);
            }
            
            if (flag){
                msg = "El codigo de barra ya pertenece a una categoria!!!";
                $('#htmlMensajeModal').html(msg);
            }else{
                msg = "Si de desea agregar el producto con el mismo codigo de barras presione en agregar Producto";
                $('#htmlMensajeModal').html(msg);
            }
            
        }
    });


}


function cargarTabla(Id){
    $('#TableProducto').dataTable({
        "lengthMenu": [
            [10, 25, 50, 100, -1],
            [10, 25, 50, 100, "All"]
        ],
        "bDestroy": true,
        "autoWidth": true,
        "dom": '<"wrapper"flitp><"center"B>',
        "responsive": true,
        "buttons": [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        "ajax": {
            "url": '<?php echo urlApi; ?>getAllProductos_x_categoria/' + Id,
            "type": "GET",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "error": function(xhr, error, thrown) {
                if (xhr.status === 403) {
                    var err = JSON.parse(xhr.responseText);
                    Swal.fire({
                        title: err.message,
                        width: '300px',
                        height: '100px'
                    })
                }
                if (xhr.status === 400) {
                    var err = JSON.parse(xhr.responseText);
                    Swal.fire({
                        title: err.message,
                        width: '250px',
                        height: '25px'
                    })
                    window.location.href = '/homepantry20/Principal/logout';
                }
            }
        },
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        },
        "aoColumns": [{
                mData: 'Producto',
                className: "text-center"
            },
            {
                mData: 'CodigoBarra',
                className: "text-center"
            },
            {
                mData: 'Segmento',
                className: "text-center"
            },
            {
                mData: 'Fabricante',
                className: "text-center"
            },
            {
                mData: 'Marca',
                className: "text-center"
            },
            {
                mData: 'Tamano',
                className: "text-center"
            },
            {
                mData: 'TamanoRango',
                className: "text-center"
            },
            {
                mData: 'UnidadMedida',
                className: "text-center"
            },
            {
                mData: 'Fragmentacion',
                className: "text-center"
            },
            
        ],
        "columnDefs": [{
            "targets": 9,
            "orderable": true,
            "data": 'Id_Producto',
            "className": "text-center",
            "render": function(data, type, row, meta) {
                return '<a title="Eliminar" href="#"><img id="EliminarImg" src=<?php echo base_url('assets/iconos/delete.png') ?> width="30" height="30"  onclick="deleteAction(' +
                    data +
                    '); return false;"></a>&nbsp;&nbsp;<a title="Editar" href="#"><img src=<?php echo base_url('assets/iconos/editar.png') ?> width="25" height="25" onclick="EditAction(' +
                    data +
                    '); return false;"></a>&nbsp;&nbsp;<a title="Visualizar" href="#"><img src=<?php echo base_url('assets/iconos/ver.png') ?> width="25" height="25" onclick="VisualizarAction(' +
                    data + '); return false;"></a>';
            }
        }],
    });
}


</script>
<script src="<?php echo base_url('jsHP/jsProductoV1.js') ?>"></script>
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