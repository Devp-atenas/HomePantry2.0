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
                <h1><i class="bi bi-person-plus-fill"></i>&nbsp;Mantenimiento Usuario</h1>
            </div>
            
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content ">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Crear Usuario</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body" style="display: none;">
                    <form id="FormCrearUsuario">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="inputText font-weight-bold">Apellido:</label>
                                    <input type="text" name="inputApellido" id="inputApellido" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="inputText font-weight-bold">Nombre:</label>
                                    <input type="text" name="inputNombre" id="inputNombre" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="inputText font-weight-bold">Correo:</label>
                                    <input type="text" name="inputCorreo" id="inputCorreo" class="form-control">
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="inputText font-weight-bold">Celular:</label>
                                    <input type="text" name="inputCelular" id="inputCelular" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="inputText font-weight-bold">Departamento:</label>
                                    <select name="selectDepartamento" id="selectDepartamento" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="inputText font-weight-bold">Perfil:</label>
                                    <select name="selectPerfil" id="selectPerfil" class="form-control">
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row"> 
                            <div class="col-md-1">
                                <div class="form-group">
                                    <label class="inputText font-weight-bold">Guardar:</label>
                                    <button id="idGuardar"type="button" class="btn btn-block btn-xs btn-primary" data-toggle="modal" data-target="#guardarCambioFacturaModal">
                                        <i class="fas fa-save fa-2x"></i>
                                    </button>
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


<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Mantenimiento Usuario</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body" style="display: none;">
                   
                    <button type="button" id="btnEliminar" class="btn btn-danger btn-sm" onclick="deleteAction2("+idSelect+");" disabled="disabled"><i class="bi bi-trash3"></i></button>
                    <button type="button" id="btnEdicion" class="btn btn-primary btn-sm" onclick="EditAction2();" disabled="disabled"><i class="bi bi-pencil-square"></i></button>
                    <button type="button" id="btnVisualizar" class="btn btn-info btn-sm" onclick="VisualizarAction2();" disabled="disabled"><i class="bi bi-zoom-in"></i></button>
                    
                    <table id="TableUsuarios" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Apellido</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Celular</th>
                                <th>Departamento</th>
                                <th>Perfil</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</section>


<!-- Windows Modal Editar Registros 222222 -->
<div class="modal fade" id="modal-SemanaEditar">
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
                            <h3 class="card-title">Semana</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="FormSemanaEdit">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="inputText font-weight-bold">Cod Semana:</label>
                                            <input type="text" name="inputCodSemanaEdit" id="inputCodSemanaEdit" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="inputText font-weight-bold">Periodo:</label>
                                            <select name="inputPeriodoEdit" id="inputPeriodoEdit" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label class="inputText font-weight-bold">Año:</label>
                                            <input type="text" name="inputAnoEdit" id="inputAnoEdit" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label class="inputText font-weight-bold">Mes:</label>
                                            <input type="text" name="inputMesEdit" id="inputMesEdit" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="inputText font-weight-bold">Desde:</label>
                                            <input type="text" name="fechaDesdeEdit" id="fechaDesdeEdit" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="inputText font-weight-bold">Hasta:</label>
                                            <input type="text" name="fechaHastaEdit" id="fechaHastaEdit" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="inputText font-weight-bold">Ult Sem Mes?</label>
                                            <div class="card">
                                                <div class="form-group">
                                                <div class="form-check d-inline">
                                                        <input class="form-check-input" type="radio" id="UltSemMesEdit" name="UltSemMesEdit" value="0">
                                                        <label class="form-check-label">No</label>
                                                    </div>
                                                    <div class="form-check d-inline">
                                                        <input class="form-check-input" type="radio" id="UltSemMesEdit" name="UltSemMesEdit" value="1">
                                                        <label class="form-check-label">Si</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="inputText font-weight-bold">Descripcion:</label>
                                            <input type="text" name="inputDescripcionEdit" id="inputDescripcionEdit" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="inputText font-weight-bold">Dolar:</label>
                                            <input type="number" step=0.00001 name="inputDolarEdit" id="inputDolarEdit" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="inputText font-weight-bold">Euro:</label>
                                            <input type="number" step=0.00001 name="inputEuroEdit" id="inputEuroEdit" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="inputText font-weight-bold">Petro:</label>
                                            <input type="number" step=0.00001 name="inputPetroEdit" id="inputPetroEdit" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="inputText font-weight-bold">Peso:</label>
                                            <input type="number" step=0.00001 name="inputPesoEdit" id="inputPesoEdit" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="inputText font-weight-bold">Semana Corta</label>
                                            <input type="text" name="inputSemanaCortaEdit" id="inputSemanaCortaEdit" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row"> 
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label class="inputText font-weight-bold">Guardar:</label>
                                            <button id="idGuardarSemanaEdit" onclick="ActualizarRegistro()" type="button" class="btn btn-block btn-xs btn-primary" data-toggle="modal" data-target="#guardarCambioFacturaModal">
                                                <i class="fas fa-save fa-2x"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="visibility:hidden;">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputIdEditSemana">id:</label>
                                            <input type="text" name="inputIdEditSemana" id="inputIdEditSemana"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>






<?php $this->load->view('Plantillas/Footer');?>



<script src="<?php echo base_url('jsHP/jsAllCombosV1.js') ?>"></script>
<script src="<?php echo base_url('jsHP/jsCrearUsuario.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>

<script type="text/javascript" src="https://oss.sheetjs.com/sheetjs/xlsx.full.min.js"></script>
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
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.4/js/dataTables.select.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>