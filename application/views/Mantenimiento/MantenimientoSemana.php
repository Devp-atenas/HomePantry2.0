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
                <h1><i class="bi bi-calendar-check"></i>&nbsp;Mantenimiento Semana</h1>
            </div>
            
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content ">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Crear Semana</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body" style="display: none;">
                    <form id="FormPerfil">
                        <div class="form-group row mb-0 mt-0">
                            <div class="col-md-2">
                                <label class="inputText font-weight-bold">Codigo Semana:</label>
                                <input type="text" name="inputCodSemana" id="inputCodSemana" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label class="inputText font-weight-bold">Periodo:</label>
                                <select id="inputPeriodo" name="inputPeriodo" class="form-control">
                                </select>
                            </div>
                            <div class="col-md-1">
                                <label class="inputText font-weight-bold">Año:</label>
                                <input type="text" name="inputAno" id="inputAno" class="form-control">
                            </div>
                            <div class="col-md-1">
                                <label class="inputText font-weight-bold">Mes:</label>
                                <input type="text" name="inputMes" id="inputMes" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label class="inputText font-weight-bold">Desde:</label>
                                <input type="date" name="fechaDesde" id="fechaDesde" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label class="inputText font-weight-bold">Hasta:</label>
                                <input type="date" name="fechaHasta" id="fechaHasta" class="form-control">
                            </div>
                            
                        </div>
                        
                        <div class="form-group row mb-0 mt-0">
                            <div class="col-md-2">
                                <label class="inputText font-weight-bold">Ult Sem Mes?</label>
                                <div class="card">
                                    <div class="form-group">
                                    <div class="form-check d-inline">
                                            <input class="form-check-input" type="radio" id="UltSemAdd" name="UltSemAdd" value="0">
                                            <label class="form-check-label">No</label>
                                        </div>
                                        <div class="form-check d-inline">
                                            <input class="form-check-input" type="radio" id="UltSemAdd" name="UltSemAdd" value="1">
                                            <label class="form-check-label">Si</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label class="inputText font-weight-bold">Descripcion:</label>
                                <input type="text" name="inputDescripcion" id="inputDescripcion" class="form-control">
                            </div>
                            <div class="col-md-1">
                                <label class="inputText font-weight-bold">Dolar:</label>
                                <input type="text" name="inputDolar" id="inputDolar" class="form-control">
                            </div>
                            <div class="col-md-1">
                                <label class="inputText font-weight-bold">Euro:</label>
                                <input type="text" name="inputEuro" id="inputEuro" class="form-control">
                            </div>
                            <div class="col-md-1">
                                <label class="inputText font-weight-bold">Petro:</label>
                                <input type="text" name="inputPetro" id="inputPetro" class="form-control">
                            </div>
                            <div class="col-md-1">
                                <label class="inputText font-weight-bold">Peso:</label>
                                <input type="text" name="inputPeso" id="inputPeso" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label class="inputText font-weight-bold">Semana Corta</label>
                                <input type="text" name="inputSemanaCorta" id="inputSemanaCorta" class="form-control">
                            </div>
                            <div class="col-md-1">
                                <label class="inputText font-weight-bold">Guardar:</label>
                                <button id="idCrearPerfil"type="button" class="btn btn-block btn-xs btn-primary" data-toggle="modal" data-target="#guardarCambioFacturaModal">
                                <i class="fas fa-save fa-2x"></i>
                                </button>
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
                    <h3 class="card-title">Mantenimiento Semana</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body" style="display: none;">
                    <table id="TableSemana" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Codigo Semana</th>
                                <th>Periodo</th>
                                <th>Año</th>
                                <th>Mes</th>
                                <th>Desde</th>
                                <th>Hasta</th>
                                <th>Ult Semestre Mes?</th>
                                <th>Descripcion</th>
                                <th>Dolar</th>
                                <th>Euro</th>
                                <th>Petro</th>
                                <th>Peso</th>
                                <th>SemanaCorta</th>
                                <th>Opciones</th>
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
<!-- Windows Modal Editar 222222 -->
<div class="modal fade" id="modal-SemanaEditar"" aria-hidden="true">
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
                            <h3 class="card-title">Semana</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="FormSemanaEdit">
                                <div class="form-group row mb-0 mt-0">
                                    <div class="col-md-2">
                                        <label class="inputText font-weight-bold">Cod Semana:</label>
                                        <input type="text" name="inputCodSemanaEdit" id="inputCodSemanaEdit" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <label class="inputText font-weight-bold">Periodo:</label>
                                        <select id="inputPeriodoEdit" name="inputPeriodoEdit" class="form-control">
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="inputText font-weight-bold">Descripcion:</label>
                                        <input type="text" name="inputDescripcionEdit" id="inputDescripcionEdit" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <label class="inputText font-weight-bold">Año:</label>
                                        <input type="text" name="inputAnoEdit" id="inputAnoEdit" class="form-control">
                                    </div>
                                    <div class="col-md-1">
                                        <label class="inputText font-weight-bold">Mes:</label>
                                        <input type="text" name="inputMesEdit" id="inputMesEdit" class="form-control">
                                    </div>
                                </div>
                            
                                <div class="form-group row mb-0 mt-0">
                                    <div class="col-md-5">
                                        <label class="inputText font-weight-bold">Semana Corta:</label>
                                        <input type="text" name="inputSemanaCortaEdit" id="inputSemanaCortaEdit" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <label class="inputText font-weight-bold">Desde:</label>
                                        <input type="date" name="fechaDesdeEdit" id="fechaDesdeEdit" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <label class="inputText font-weight-bold">Hasta:</label>
                                        <input type="date" name="fechaHastaEdit" id="fechaHastaEdit" class="form-control">
                                    </div>
                                    
                                </div>
                                <div class="form-group row mb-0 mt-0">
                                    <div class="col-md-2">
                                        <label class="inputText font-weight-bold">Ult Sem Mes?</label>
                                        <div class="card">
                                            <div class="form-group">
                                            <div class="form-check d-inline">
                                                    <input class="form-check-input" type="radio" id="UltSem_Edit0" name="UltSemEdit" value="0">
                                                    <label class="form-check-label">No</label>
                                                </div>
                                                <div class="form-check d-inline">
                                                    <input class="form-check-input" type="radio" id="UltSem_Edit1" name="UltSemEdit" value="1">
                                                    <label class="form-check-label">Si</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="inputText font-weight-bold">Dolar:</label>
                                        <input type="text" name="inputDolarEdit" id="inputDolarEdit" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <label class="inputText font-weight-bold">Euro:</label>
                                        <input type="text" name="inputEuroEdit" id="inputEuroEdit" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <label class="inputText font-weight-bold">Petro:</label>
                                        <input type="text" name="inputPetroEdit" id="inputPetroEdit" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <label class="inputText font-weight-bold">Peso:</label>
                                        <input type="text" name="inputPesoEdit" id="inputPesoEdit" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <label class="inputText font-weight-bold">Guardar:</label>
                                        <button id="idEditarSemana" type="button" class="btn btn-block btn-xs btn-primary">
                                            <i class="fas fa-save fa-2x"></i>
                                        </button>
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

<script>
$(document).ready(function() {
    var urlApi = '<?php echo urlApi; ?>';
    sessionStorage.setItem("urlApi",urlApi);
    //cargarTablaFunciones('#TablaFunciones');
    cargarTabla();
    //$('#showButton').hide();
});

function cargarTabla(){
    $('#TableSemana').DataTable({
        lengthMenu: [
            [10, 25, 50, 100, -1],
            [10, 25, 50, 100, "All"]
        ],
        Destroy:     true,
        autoWidth:    true,
        searching:    false,
        bPaginate:    false,
        dom: '<"wrapper"flitp><"center"B>',
        responsive:   true,
        buttons: [
            {
                extend: 'excelHtml5',
                title: 'Reporte NSE'
            }
        ],
        scrollY:      300,
        scrollX:      true,
        fixedColumns: true,
        scrollCollapse: true,
        /*
        columnDefs: [
            {width    : "auto", targets: [13]},
        ],*/
        deferRender:    true,
        ajax: {
            "url": '<?php echo urlApi; ?>getAllSemana',
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
        language: {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        },
        aoColumns: [{
                mData: 'IdSemana',
                className: "text-center"
            },
            {
                mData: 'Id_Periodo',
                className: "text-center"
            },
            {
                mData: 'IdAno',
                className: "text-center"
            },
            {
                mData: 'IdMes',
                className: "text-center"
            },
            {
                mData: 'Fec_Inicio',
                className: "text-center",
            },
            {
                mData: 'Fec_Fin',
                className: "text-center"
            },
            {
                mData: 'Ind_Ult',
                className: "text-center"
            },
            {
                mData: 'Semana',
                className: "text-center"
            },
            {
                mData: 'Dolar',
                className: "text-center",
                render: $.fn.dataTable.render.number( '.', ',', 5 )
            },
            {
                mData: 'Euro',
                className: "text-center",
                render: $.fn.dataTable.render.number( '.', ',', 5 )
            },
            {
                mData: 'Petro',
                className: "text-center",
                render: $.fn.dataTable.render.number( '.', ',', 5 )
            },
            {
                mData: 'Peso',
                className: "text-center",
                render: $.fn.dataTable.render.number( '.', ',', 5 )
            },
            {
                mData: 'SemanaCorta',
                className: "text-center"
            },
        ],
        columnDefs: [{
            "targets": 13,
            "width": "50%",
            "orderable": true,
            "data": 'IdSemana',
            "className": "text-center",
            "render": function(data, type, row, meta) {
                return  '<div class="text-wrap width-200">'+
                            '<button type="button" class="btn btn-danger btn-sm" onclick="deleteAction(' +
                                data +');"><i class="bi bi-trash3"></i></button>'+
                            '<button type="button" class="btn btn-primary btn-sm" onclick="EditAction(' +
                                data +');"><i class="bi bi-pencil-square"></i></button>'+
                            '<button type="button" class="btn btn-info btn-sm" onclick="VisualizarAction(' +
                                data +');"><i class="bi bi-zoom-in"></i></button>'+
                        '</div>';
            }
        }],
    });
}
</script>

<script src="<?php echo base_url('jsHP/jsMantenimientoSemana.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>