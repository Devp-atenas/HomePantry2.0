<?php $this->load->view('Plantillas/Header'); ?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="fa fa-plus-square aria-hidden=true"></i>&nbsp;Hogares en el panel</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section> <!-- / section class="content header"> -->
<!-- Content Wrapper. Contains page content -->
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div id="TableHogaresPanelistas"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
<?php $this->load->view('Plantillas/Footer'); ?>

<script src="<?php echo base_url('jsHP/jsListaHogares.js') ?>"></script>
<script>
    $(document).ready(function() {
        //debugger;
        cargarTablaHogares("#TableHogaresPanelistas"); 
    });

    function EditAction(data) {
        localStorage.setItem("idHogarEditar",data);
        //HogarEditar();
        //editPanelistasResponsableJefe
        window.location.href = "FichaHogar"
    }
</script>

<!-- DataTables  & Plugins -->
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
