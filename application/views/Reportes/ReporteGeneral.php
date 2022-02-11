<!-- Content Header (Page header) -->
<?php $this->load->view('Plantillas/Header');?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="fa fa-home"></i>&nbsp;Reporte General</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content Agregar Producto 11111-->
<!-- /Windows datatables Producto Rango-->
<section class="content">
    <div class="container-fluid">
        <div id="showTablas">
            <h2 class="text-center">Reportes Hogares</h2>
            <div class="row">
                <div class="col-md-12"> <!-- bg-danger bg-gradient -->
                    <form id="formReporte" action="" method="post">
                        <div class="form-group row mb-0 mt-0">
                                <div class="col-md-4">
                                    <label class="inputText font-weight-bold">Nombre del Archivo:</label>
                                    <input type="text" name="inputNombreExcel" id="inputNombreExcel" class="form-control">
                                </div>
                                <div class="col-md-2">
                                    <label class="inputText font-weight-bold">Seleccionar Archivo:</label>
                                    <button id="download-xlsx" class="form-control">Descargar<i class="fa fa-file-excel-o" aria-hidden="true"></i></button>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
            <HR/>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group row mb-0 mt-0">
                        <div class="col-md-12 text-center">
                            <div id="TablaReporte"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('Plantillas/Footer');?>

<script>
$(document).ready(function() {
    var urlApi = '<?php echo urlApi; ?>';
    sessionStorage.setItem("urlApi",urlApi);
    cargarTablaReporteGeneral('#TablaReporte');
    $('#formReporte').validate({
        rules: {
            inputNombreExcel: {
                required: true,
                minlength: 3,
            },
        },
        messages: {
            inputNombreExcel: {
                required: "Por favor ingrese nombre del archivo",
                minlength: "El  nombre del archivo debe tener al menos 3 caracteres",
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
    $("#download-xlsx").click(function() {
        $("#formReporte").validate({
            rules: {
                inputNombreExcel : {
                    required: true,
                    minlength: 3
                }
            },
            messages : {
                inputNombreExcel : {
                    inputNombreExcel: "Campo Requerido"
                }
            }
        });
    });
    //$('#showButton').hide();
});

</script>

<script src="<?php echo base_url('jsHP/jsReportes.js') ?>"></script>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>