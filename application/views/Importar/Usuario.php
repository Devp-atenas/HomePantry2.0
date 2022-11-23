<?php $this->load->view('Layout/Header');?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="fas fa-users"></i>&nbsp; Importar Usuarios de Home Pantry</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('Principal/dashboard') ?>">Inicio</a></li>
                    <li class="breadcrumb-item active"><a href="<?php echo base_url('Principal/logout') ?>">Salir</a>
                    </li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content Agregar Usuario -->
<section class="content">

</section>
<!-- /Windows datatables Usuarios-->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Listados de Usuarios Home Pantry</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card">
                        <div class="card-body">
                            <table id="TableUsuariosHp" class="table table-bordered table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>Nombres:&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                        <th>Apellidos:&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                        <th>Usuarios:&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                        <th>Cliente:&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Usuario</th>
                                        <th>Cliente</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('Layout/Footer');?>
<script>
function ImportarAction(data) {
    Swal.fire({
        title: '¿Estas seguro que desea importar el usuario a Retail Scannig?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: '¡Sí, Importarlo!'
    }).then((result) => {
        if (result.isConfirmed) {
            var settings = {
                "url": '<?php echo urlApi; ?>ImpotarUsHp/' + data,
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
                    height: '25px'
                }).then(function() {
                    let xtable = $('#TableUsuariosHp').DataTable();
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
                    window.location = '/retailscannig/index.php';
                }
            })
        }
    })
}
$(document).ready(function() {
    $('#TableUsuariosHp').dataTable({
        "lengthMenu": [
            [10, 20, 50, -1],
            [10, 20, 50, "All"]
        ],
        "bDestroy": true,
        "autoWidth": true,
        "dom": '<"wrapper"flitp><"center"B>',
        "responsive": true,
        "buttons": [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        "ajax": {
            "url": '<?php echo urlApi; ?>getAllUsuarioHp',
            "type": "GET",
            "headers": {
                'Authorization': 'bearer ' + localStorage.getItem('Token')
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
                    window.location.href = '/retailscannig/Principal/logout';
                }
            }
        },
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        },
        "aoColumns": [{
                mData: 'Nombres',
                className: "text-center"
            },
            {
                mData: 'Apellidos',
                className: "text-center"
            },
            {
                mData: 'Usuario',
                className: "text-center"
            },
            {
                mData: 'Cliente',
                className: "text-center"
            },
        ],
        "columnDefs": [{
            "targets": 4,
            "orderable": true,
            "data": 'Id_Usuario',
            "className": "text-center",
            "render": function(data, type, row, meta) {
                return '<a title="Importar" href="#" onclick="ImportarAction(' + data + ')"><i class="fas fa-database"></i></a>';
            }
        }],
        initComplete: function(d) {
                this.api().columns([0, 1, 2, 3, 4]).every(function() {
                    var column = this;
                    var Jobs = $("#table th").eq([d]).text();
                    var select = $(
                            '<select class="drop-down"><option value="">Todos</option></select>'
                            )
                        .appendTo($(column.header()))
                        .on('change', function() {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );
                            column
                                .search(val ? '^' + val + '$' : '', true, false)
                                .draw();
                        });

                    column.data().unique().sort().each(function(d, j) {
                        select.append('<option value="' + d + '">' + d +
                            '</option>')
                    });
                });
            },
    });
});
</script>