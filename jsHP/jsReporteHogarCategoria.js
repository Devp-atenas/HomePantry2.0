$(document).ready(function() {
    cargarGArea('#selectGArea');
    cargarEstado('#selectEstado');
    cargarSemanaTop6('#selectSemana');
    cargarCategoria('#selectCategoria');
});

$("#selectGArea").change(function() {
    idArea = $("#selectGArea").val();
    
    if (idArea !== ''){
        cargarEstadoidArea(selectEstado,idArea);
    }else{
        cargarEstado('#selectEstado');
    }

    if ($("#selectCategoria").val() !== ''){
        idEstado = $("#selectEstado").val();
        idSemana = $("#selectSemana").val();
        idCategoria = $("#selectCategoria").val();
        cargarTabla(idArea,idEstado,idSemana,idCategoria);
    }
});

$("#selectEstado").change(function() {
    if ($("#selectCategoria").val() !== ''){
        idArea = $("#selectGArea").val();
        idEstado = $("#selectEstado").val();
        idSemana = $("#selectSemana").val();
        idCategoria = $("#selectCategoria").val();
        cargarTabla(idArea,idEstado,idSemana,idCategoria);
    }
});

$("#selectSemana").change(function() {
    if ($("#selectCategoria").val() !== ''){
        idArea = $("#selectGArea").val();
        idEstado = $("#selectEstado").val();
        idSemana = $("#selectSemana").val();
        idCategoria = $("#selectCategoria").val();
        cargarTabla(idArea,idEstado,idSemana,idCategoria);
    }
});

$("#selectCategoria").change(function() {
    if ($("#selectCategoria").val() !== '0'){
        idArea = $("#selectGArea").val();
        idEstado = $("#selectEstado").val();
        idSemana = $("#selectSemana").val();
        idCategoria = $("#selectCategoria").val();
        cargarTabla(idArea,idEstado,idSemana,idCategoria);
    }
});

function cargarGArea(etiqueta) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url":urlApi+'getAllGArea',
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        let selected = $(etiqueta);
        selected.find("option").remove();
        selected.append("<option value='' selected> -- Seleccione -- </option>");

        for (var i = 0; i < response.data.length; i++) {
            selected.append("<option value=" + response.data[i].Id_Area + ">" + response
            .data[i].Id_Area + " - " + response.data[i].Area + "</option>");
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

function cargarEstado(etiqueta) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url":urlApi+'getAllEstado',
        "method": "get",
        "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            }
    }
    $.ajax(settings).done(function(response) {
        let selected = $(etiqueta);
        selected.find("option").remove();
        selected.append("<option value='' selected> -- Seleccione -- </option>");

        for (var i = 0; i < response.data.length; i++) {
            selected.append("<option value=" + response.data[i].id + ">" + response
                    .data[i].id + " - " + response.data[i].Estado + "</option>");
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

function cargarEstadoidArea(etiqueta,idArea) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url":urlApi+'getEstadoXArea/'+idArea,
        "method": "get",
        "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            }
    }
    $.ajax(settings).done(function(response) {
        let selected = $(etiqueta);
        selected.find("option").remove();
        selected.append("<option value='' selected> -- Seleccione -- </option>");

        for (var i = 0; i < response.data.length; i++) {
            selected.append("<option value=" + response.data[i].id + ">" + response
                    .data[i].id + " - " + response.data[i].Estado + "</option>");
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

function cargarSemanaTop6(etiqueta) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url":urlApi+'getSemanaTop6/',
        "method": "get",
        "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            }
    }
    $.ajax(settings).done(function(response) {
        let selected = $(etiqueta);
        selected.find("option").remove();
        for (var i = 0; i < response.data.length; i++) {
            selected.append("<option value=" + response.data[i].id + ">" + response
                    .data[i].id + " - " + response.data[i].Semana + "</option>");
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

function cargarCategoria(etiqueta) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url":urlApi+'getAllCategoria',
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        let select = $(etiqueta);
        select.find("option").remove();
        select.append("<option value='0' selected> -- Seleccione -- </option>");

        for (var i = 0; i < response.data.length; i++) {
            select.append("<option value=" + response.data[i].id_Categoria + ">" + response
                .data[i].Categoria + "</option>");
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

function cargarTabla(idArea,idEstado,idSemana,idCategoria){
    var urlApi = localStorage.getItem("urlApi");
    
    $('#TablaReporte').dataTable({
        "lengthMenu": [
            [ -1],
            ["All"]
        ],
        "bDestroy":     true,
        "autoWidth":    true,
        "searching":    false,
        "bPaginate":    false,
        "dom": '<"wrapper"flitp><"center"B>',
        "responsive":   true,
        "buttons": [
            {
                extend: 'excelHtml5',
                title: 'Reporte Hogar Categoria'
            }
        ],
        //"fixedHeader":  true,
        "scrollX":      true,
        "scrollY":      400,
        "deferRender":  true,
        //"scroller":     true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json",
            "decimal": ",",
            "thousands": "."
        },
        
        "ajax": {
            "url": urlApi+'getDatosReporteHogarCategoria/',
            "type": "POST",
            "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
            "data": {
                "idArea":idArea,
                "idEstado": idEstado,
                "idSemana": idSemana,
                "idCategoria": idCategoria
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
                    window.location.href = '/HomePantry20/Principal/logout';
                }
            }
        },
        
        "aoColumns": [{
                mData: 'idHogarCodigo',
                className: "text-center"
            },
            {
                mData: 'Area',
                className: "text-center"
            },
            {
                mData: 'Estado',
                className: "text-center"
            },
            {
                mData: 'SumaDeCantidad',
                className: "text-center"
            },
            {
                mData: 'cantReposicion',
                className: "text-center"
            },
            {
                mData: 'cantMedicina',
                className: "text-center"
            },
            
        ],
        "columnDefs": [{
            "width": "100%",
            "orderable": true,
            "className": "text-center",
            
        }],
    });
    
}

