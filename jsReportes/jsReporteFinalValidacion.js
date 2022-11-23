$(document).ready(function() {
    cargarUltimaSemana("#selectSemana",0);
});


$("#selectSemana").change(function() {
    document.getElementById("idBotonGenerarReporteFinal").disabled = false;
    document.getElementById("idBotonCerrarValidacion").disabled = false;
    
});

$("#idBotonGenerarReporteFinal").click(function() {
    var idSemana = $('#selectSemana').val();
    cargarTabla(idSemana);
    $('#showReporte').show();
});

$("#idBotonCerrarValidacion").click(function() {
    var idSemana = $('#selectSemana').val();
    isValidacionCerrada(idSemana);
});



function isValidacionCerrada(idSemana) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url": urlApi+'getValidacionCerradaV1/',
        "method": "POST",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        },
        "data": {
            "idSemana": idSemana
        }
    }
    $.ajax(settings).done(function(response) {
        if (response.data[0].Ind_CierreValidacion == 1){
            $('#ValidacionCerradaModal').modal('show');
        }else{
            var idSemana = $('#selectSemana').val();
            cerrarValidacion(idSemana);
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

function cerrarValidacion(idSemana) {
    Swal.fire({
        title: '¿Estas seguro de cerrar?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText:  'No, Cancelar',
        confirmButtonText: '¡Sí, bórralo!',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            var settings = {
                "url": localStorage.getItem("urlApi")+'getCerrarValidacionV1/'+idSemana,
                "method": "get",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": 'bearer ' + localStorage.getItem('Token')
                }
            }
            $.ajax(settings).done(function(response) {
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








function cerrarValidacion_(idSemana) {
    var settings = {
        "url": localStorage.getItem("urlApi")+'getCerrarValidacionV1/'+idSemana,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
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









function cargarTabla(Id){
    //Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Consulta Tabla Atributo3 (IdCategoria)",Id,"R");
    $('#TablaReporte').dataTable({
        "lengthMenu": [
            [10, 25, 50, 100, -1],
            [10, 25, 50, 100, "All"]
        ],
        "bDestroy": true,
        "select": true,
        "autoWidth": true,
        "searching": true,
        "bPaginate": true,
        "dom": 'Bfrtip',
        "responsive": false,
       //"fixedHeader":    true,
        "scrollX":        true,
        "scrollY":        400,
        //"deferRender":    true,
        "scroller":       true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json",
            "decimal": ",",
            "thousands": "."
        },        
        "buttons": [
            {
                extend: 'excelHtml5',
                title: 'ReporteFinalValidacion '
            }
        ],
        "ajax": {
            "url": localStorage.getItem("urlApi")+'getReporteFinalValidacionV1/'+Id,
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
                    window.location = '/homepantry20/index.php';
                }
            }
        },
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        },
        "aoColumns": [
            {mData: 'Semana',className: "text-center"},
            {mData: 'Categoria',className: "text-center"},
            {mData: 'Area',className: "text-center"},
            {mData: 'Estado',className: "text-center"},
            {mData: 'Id_Hogar',className: "text-center"},
            {mData: 'ClaseSocial',className: "text-center"},
            {mData: 'Id_Consumo',className: "text-center"},
            {mData: 'Canal',className: "text-center"},
            {mData: 'CodigoBarra',className: "text-center"},
            {mData: 'Producto',className: "text-center"},
            {mData: 'Fabricante',className: "text-center"},
            {mData: 'Marca',className: "text-center"},
            {mData: 'Tamano',className: "text-center"},
            {mData: 'Segmento',className: "text-center"},
            {mData: 'Cantidad',className: "text-center"},
            {mData: 'Precio_producto',className: "text-center"},
            {mData: 'Tasa_de_cambio',className: "text-center"},
            {mData: 'Total_compra',className: "text-center"},
            {mData: 'Moneda',className: "text-center"},
            {mData: 'Dolar',className: "text-center"},
            {mData: 'Euro',className: "text-center"},
            {mData: 'Petro',className: "text-center"},
            {mData: 'Peso',className: "text-center"},
        ],
    });
}