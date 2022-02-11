<!-- Content Header (Page header) -->
<?php $this->load->view('Plantillas/Header');?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="fa fa-home"></i>&nbsp;Creacion de Perfil</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12"> <!-- bg-danger bg-gradient -->
                <div class="form-group row mb-0 mt-0">
                    <div class="col-md-4">
                        <label class="inputText font-weight-bold">Nombre del Perfil:</label>
                        <input type="text" name="inputPerfil" id="inputPerfil" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <HR/>
        
        
    </div><!-- /.container-fluid -->
</section>
<!-- Main content Agregar Producto 11111-->
<!-- /Windows datatables Producto Rango-->
<section class="content">
    <div class="container-fluid">
        <div id="showTablas" class=" text-center">
            <h2 class="text-center">Funciones de Home Pantry</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row mb-0 mt-0">
                        <div class="col-md-12">
                            <div id="TablaFunciones"></div>
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
    cargarTablaFunciones('#TablaFunciones');
    //$('#showButton').hide();
});

</script>

<script src="<?php echo base_url('jsHP/jsGestionarPerfil.js') ?>"></script>

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