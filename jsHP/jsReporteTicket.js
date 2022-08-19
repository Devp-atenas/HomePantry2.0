$(document).ready(function() {
    cargarSemana('#selectSemana',0);
    
    //cargarTablaReporteConsumo("","","",3000);
});

$("#selectSemana").change(function() {
    $("#showTablaReporteTicket").hide();
    cargarGArea('#selectGArea',0);
    $("#selectEstado").empty();
    
    
});

$("#selectGArea").change(function() {
    $("#showTablaReporteTicket").hide();
    var idSemana = $("#selectSemana").val();
    var idArea = $("#selectGArea").val();
    cargarEstadoXArea('#selectEstado',0,idArea);
    cargarTablaReporteTicket(idSemana,idArea,"");
    $("#showTablaReporteTicket").show();
    
});

$("#selectEstado").change(function() {
    $("#showTablaReporteTicket").hide();
    var idSemana = $("#selectSemana").val();
    var idArea = $("#selectGArea").val();
    var idEstado = $("#selectEstado").val();
    cargarTablaReporteTicket(idSemana,idArea,idEstado);
    $("#showTablaReporteTicket").show();
    
});



function cargarGArea(etiqueta,idSeleccionado) {
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
        if (idSeleccionado == 0){
            selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].Id_Area == idSeleccionado) {
                selected.append("<option value=" + response.data[i].Id_Area + " selected>" +
                    response.data[i].Id_Area + " - " + response.data[i].Area + "</option>");
            } else {
                selected.append("<option value=" + response.data[i].Id_Area + ">" + response
                    .data[i].Id_Area + " - " + response.data[i].Area + "</option>");
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

function cargarEstadoXArea(etiqueta,idSeleccionado,idArea) {
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
        if (idSeleccionado == 0){
            selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id == idSeleccionado) {
                selected.append("<option value=" + response.data[i].id + " selected>" +
                    response.data[i].id + " - " + response.data[i].Estado + "</option>");
            } else {
                selected.append("<option value=" + response.data[i].id + ">" + response
                    .data[i].id + " - " + response.data[i].Estado + "</option>");
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
function cargarSemana(identificador,idEditar) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url":urlApi+'getAllSemana/',
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
        
    }
    $.ajax(settings).done(function(response) {
        let selected = $(identificador);
        selected.find("option").remove();
        if (idEditar == 0){
            selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].IdSemana == idEditar) {
                selected.append("<option value=" + response.data[i].IdSemana + " selected>" +
                    response.data[i].Semana + "</option>");
            } else {
                selected.append("<option value=" + response.data[i].IdSemana + ">" + response.data[i].Semana + "</option>");
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



function cargarTablaReporteTicket(idSemana,idArea,idEstado){
    Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Consulta Reporte Reporte Ticket: {idSemana:"+idSemana+",idArea:"+idArea+",idEstado:"+idEstado+"}",0,"R");

    var urlApi = localStorage.getItem("urlApi");
    
    $('#TablaReporteTicket').dataTable({
        "lengthMenu": [
            [ -1],
            ["All"]
        ],
        "bDestroy":     true,
        "autoWidth":    true,
        "searching":    false,
        "bPaginate":    false,
        "dom": '<"wrapper"flitp><"center"B>',
        "responsive":   false,
        "buttons": [
            {
                extend: 'excelHtml5',
                title: 'Reporte NSE'
            }
        ],
        "fixedHeader":  true,
        "scrollX":      true,
        "scrollY":      400,
        "deferRender":  true,
        "scroller":     true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json",
            "decimal": ",",
            "thousands": "."
        },
        
        "ajax": {
            "url": urlApi+'getDatosReporteTicket/',
            "type": "POST",
            "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
            "data": {
                "idArea":idArea,
                "idEstado": idEstado,
                "idSemana": idSemana
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
                mData: 'IdHogar',
                className: "text-center"
            },
            {
                mData: 'CodigoHogar',
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
                mData: 'Consumo',
                className: "text-center"
            },
            {
                mData: 'Medio',
                className: "text-center"
            },
            {
                mData: 'Moneda',
                className: "text-center"
            },
            {
                mData: 'Semana',
                className: "text-center"
            },
            {
                mData: 'fecha_consumo',
                className: "text-center"
            },
            {
                mData: 'FormaPago',
                className: "text-center"
            },
            {
                mData: 'Total_items',
                className: "text-center"
            },
            {
                mData: 'Total_Compra',
                className: "text-center"
            },
            {
                mData: 'Moneda',
                className: "text-center"
            },
            {
                mData: 'Canal',
                className: "text-center"
            },
            {
                mData: 'Cadena',
                className: "text-center"
            },
            {
                mData: 'Dolar',
                className: "text-center"
            },
            {
                mData: 'Euro',
                className: "text-center"
            },
            {
                mData: 'Petro',
                className: "text-center"
            },
            {
                mData: 'Peso',
                className: "text-center"
            },
            {
                mData: 'Ind_Activo',
                className: "text-center"
            }
        ],
        "columnDefs": [{
            "width": "100%",
            "targets": 20,
            "orderable": true,
            "data": 'IdHogar',
            "className": "text-center",
            
        }],
    });
    
}

