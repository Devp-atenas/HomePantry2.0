            <!-- Colocar Include Header y Menu 27jul21 -->
            <?php $this->load->view('Plantillas/Header'); ?>
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1><i class="fa fa-plus-square aria-hidden=" true""></i>&nbsp;Listar Hogares</h1>
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
                                <div class="card-header">
                                    <h3 class="card-title">Lista</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="TableListaHogares" class="table table-bordered table-striped table-sm">
                                    <thead>
                                        <tr>
                                            <th>ID Hogar</th>
                                            <th>Codigo Hogar</th>
                                            <th>Nombre</th>
                                            <th>Cedula</th>
                                            <th>Tipo</th>
                                            <th>Accion</th>
                                        </tr>
                                    </thead>
                                    
                                    <tfoot>
                                        <tr>
                                            <th>ID Hogar</th>
                                            <th>Codigo Hogar</th>
                                            <th>Nombre</th>
                                            <th>Cedula</th>
                                            <th>Tipo</th>
                                            <th>Accion</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
            <!-- Windows Modal Visualizar Registros-->
            <?php $this->load->view('Plantillas/Footer'); ?>
<script>
$(document).ready(function() {
    $('#TableListaHogares').dataTable({
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
            "url": '<?php echo urlApi; ?>getListaPanelista',
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
                    //window.location.href = '/retailscannig/Principal/logout';
                }
            }
        },
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        },
        "aoColumns": [{
                mData: 'Id_Hogar',
                className: "text-center"
            },
            {
                mData: 'CodigoHogar',
                className: "text-center"
            },
            {
                mData: 'Nombre',
                className: "text-center"
            },
            {
                mData: 'cedula',
                className: "text-center"
            },
            {
                mData: 'Tipo',
                className: "text-center"
            },
        ],
        "columnDefs": [{
            "targets": 5,
            "orderable": true,
            "data": 'Id_Hogar',
            "className": "text-center",
            "render": function(data, type, row, meta) {
                return '<a title="Editar" href="#"><img src=<?php echo base_url('assets/iconos/editar.png') ?> width="25" height="25" onclick="EditAction(' +
                    data +
                    '); return false;"></a>';
            }
        }],
    });
});

function EditAction(data) {
    localStorage.setItem("idHogarEditar",data);
    //HogarEditar();
    //editPanelistasResponsableJefe
    window.location.href = "Hogares/HogaresNuevos"
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
