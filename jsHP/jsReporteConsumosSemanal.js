$(document).ready(function() {
    cargarArea('#selectArea',0);
});

$("#selectArea").change(function(){
    $("#showTableReporteHogarRegistroXConsumo").hide();
    var idArea = $('#selectArea').val();
    cargarTipoConsumo("#selecTipoConsumo",0);
});

$("#selecTipoConsumo").change(function() {
    $("#showTableReporteHogarRegistroXConsumo").hide();
    var idArea = $('#selectArea').val();
    var idTipoConsumo = $('#selecTipoConsumo').val();
    //cargarEstado("#selecEstado",0);
    cargarEstadoXArea("#selecEstado",0,idArea);
    cargarTablaHogarRegistroxConsumoSemanal(idArea,0,idTipoConsumo);
    Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Consulta Reporte registro por consumo Semanal por area(idTipoConsumo)",idTipoConsumo,"R");
    $("#showTableReporteHogarRegistroXConsumo").show();
});

$("#selecEstado").change(function() {
    $("#showTableReporteHogarRegistroXConsumo").hide();
    var idArea = $('#selectArea').val();
    var idTipoConsumo = $('#selecTipoConsumo').val();
    var idEstado = $('#selecEstado').val();
    cargarTablaHogarRegistroxConsumoSemanal(idArea,idEstado,idTipoConsumo);
    Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Consulta Reporte registro por consumo Semanal por estado(idTipoConsumo)",idTipoConsumo,"R");
    $("#showTableReporteHogarRegistroXConsumo").show();
});



function callCargarTabla(idPeriodo,idEstado) {
    var settings = {
        "async": true,
        "crossDomain": true,
        "url":localStorage.getItem("urlApi")+'getSemanasUltimoPeriodo/',
        "method": "get",
        "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            }
    }
    $.ajax(settings).done(function(response) {
        
        $("#showTableReporteHogarRegistroXConsumo").hide();
        var idTipoConsumo = $('#selecTipoConsumo').val();
        var mostrar = $('#selecMostrar').val();
        cargarTablaHogarRegistroxConsumo(idPeriodo,idTipoConsumo,mostrar,idEstado,response.data);
        Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Consulta Reporte registro por consumo {idPeriodo:"+idPeriodo+",idTipoConsumo:"+idTipoConsumo+",mostrar:"+mostrar+"} (idTipoConsumo)",idTipoConsumo,"R");
        $("#showTableReporteHogarRegistroXConsumo").show();

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




function cargarSemanas4Periodo(etiqueta,idS) {
    var settings = {
        "async": true,
        "crossDomain": true,
        "url":localStorage.getItem("urlApi")+'getAllArea/',
        "method": "get",
        "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            }
    }
    $.ajax(settings).done(function(response) {
        let selected = $(etiqueta);
        selected.find("option").remove();
        if (idS == 0){
            selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id === idS){
                selected.append("<option value='" + response.data[i].id + "' selected>" + response
                .data[i].nombre + "</option>");
            }else{
                selected.append("<option value='" + response.data[i].id + "'>" + response
                .data[i].nombre + "</option>");
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



function cargarArea(etiqueta,idS) {
    var settings = {
        "async": true,
        "crossDomain": true,
        "url":localStorage.getItem("urlApi")+'getAllArea/',
        "method": "get",
        "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            }
    }
    $.ajax(settings).done(function(response) {
        let selected = $(etiqueta);
        selected.find("option").remove();
        if (idS == 0){
            selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id === idS){
                selected.append("<option value='" + response.data[i].id + "' selected>" + response
                .data[i].nombre + "</option>");
            }else{
                selected.append("<option value='" + response.data[i].id + "'>" + response
                .data[i].nombre + "</option>");
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



function cargarEstado(identificador,idS) {
    var settings = {
        "async": true,
        "crossDomain": true,
        "url":localStorage.getItem("urlApi")+'getAllEstado/',
        "method": "get",
        "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            }
    }
    $.ajax(settings).done(function(response) {
        let selected = $(identificador);
        selected.find("option").remove();
        if (idS == 0){
            selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id === idS){
                selected.append("<option value='" + response.data[i].id + "' selected>" + response
                .data[i].Estado + "</option>");
            }else{
                selected.append("<option value='" + response.data[i].id + "'>" + response
                .data[i].Estado + "</option>");
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

function cargarTipoConsumo(etiqueta,idSeleccionado){
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url":urlApi+'getAllTipoConsumo',
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
            if (response.data[i].Id == idSeleccionado) {
                selected.append("<option value=" + response.data[i].Id + " selected>" +
                    response.data[i].TipoConsumo + "</option>");
            } else {
                selected.append("<option value=" + response.data[i].Id + ">" + response.data[i].TipoConsumo + "</option>");
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

function cargarTablaHogarRegistroxConsumoSemanal(idArea,idEstado,idTipoConsumo){
    var urlApi = localStorage.getItem("urlApi");
    var urlV;

    var p;
    
    if (idEstado == 0){
        urlV = urlApi+'getDatosReporteConsumosSemanal/'+idArea+'/'+idTipoConsumo;
    }else{
        urlV = urlApi+'getDatosReporteConsumosSemanal4Estado/'+idPeriodo+'/'+idTipoConsumo+'/'+idEstado;
    }
    
    var oTable = $('#TablaRegistroXConsumo').DataTable({
        "lengthMenu": [
            [ -1],
            ["All"]
        ],
        "bDestroy": true,
        "autoWidth": true,
        "searching": false,
        "bPaginate": false,
        "dom": 'Bfrtip',
        "responsive": false,
        "buttons": [
            {
                extend: 'excelHtml5',
                title: 'Reporte de Hogar Registro por Consumo Semanal'
            }
        ],
        "fixedHeader":    true,
        "scrollX":        true,
        "scrollY":        400,
        "deferRender":    true,
        "scroller":       true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json",
            "decimal": ",",
            "thousands": "."
        },        
        "ajax": {
            "url": urlV,
            "type": "GET",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            /*"success": function (data, type, row) {
                p = row.Id_Semana_1;
            
            },*/
            "error": function(xhr, error, thrown) {
                if (xhr.status === 403) {
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
                mData: 'Id_PanelHogar',
                className: "text-center"
            },
            {
                mData: 'CodigoHogar',
                className: "text-center"
            },
            {
                mData: 'ClaseSocial',
                className: "text-center"
            },
            {
                mData: 'TotalPersonas',
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
                mData: 'Nombre1',
                className: "text-center"
            },
            {
                mData: 'Apellido1',
                className: "text-center"
            },
            {
                mData: 'TipoConsumo',
                className: "text-center"
            },
            {
                mData: 'detalle_1',
                className: "text-center",
                render: function (data, type, row) {
                    if (data != "0"){
                        return "<a id='fg003' href='#' onclick='callReporteConsumoHogar("+row.Id_Semana_1+","+row.Id_Area+","+row.Id_Estado+","+row.Id_PanelHogar+"); return false;' >"+data+"</a>";
                    }else{
                        return data;
                    }
                }
            },
            {
                mData: 'detalle_2',
                /*title:jQuery.map(data, function(value, index) {
                    return (value.Id_Semana_2);
                }),*/
                /*title:`${p}`,*/
                className: "text-center",
                render: function (data, type, row) {
                    if (data != "0"){
                        p=15;
                        return "<a id='fg003' href='#' onclick='callReporteConsumoHogar("+row.Id_Semana_2+","+row.Id_Area+","+row.Id_Estado+","+row.Id_PanelHogar+"); return false;' >"+data+"</a>";
                    }else{
                        return data;
                    }
                }
            },
            {
                mData: 'detalle_3',
                className: "text-center",
                render: function (data, type, row) {
                    if (data != "0"){
                        return "<a id='fg003' href='#' onclick='callReporteConsumoHogar("+row.Id_Semana_3+","+row.Id_Area+","+row.Id_Estado+","+row.Id_PanelHogar+"); return false;' >"+data+"</a>";
                    }else{
                        return data;
                    }
                }
            },
            {
                mData: 'detalle_4',
                className: "text-center",
                render: function (data, type, row) {
                    if (data != "0"){
                        return "<a id='fg003' href='#' onclick='callReporteConsumoHogar("+row.Id_Semana_4+","+row.Id_Area+","+row.Id_Estado+","+row.Id_PanelHogar+"); return false;' >"+data+"</a>";
                    }else{
                        return data;
                    }
                }
            },
            {
                mData: 'detalle_5',
                className: "text-center",
                render: function (data, type, row) {
                    if (data != "0"){
                        return "<a id='fg003' href='#' onclick='callReporteConsumoHogar("+row.Id_Semana_5+","+row.Id_Area+","+row.Id_Estado+","+row.Id_PanelHogar+"); return false;' >"+data+"</a>";
                    }else{
                        return data;
                    }
                }
            }
        ],
        "columnDefs": [{
            "width": "100%",
            "targets": 14,
            "orderable": true,
            "data": 'Id_PanelHogar',
            "className": "text-center",
        }],
        "createdRow": function( row, data, dataIndex){
            var consDet_1 = data['detalle_1'];
            if(consDet_1 == 0){
                $('td', row).eq(9).css('background', '#E32017');
                $('td', row).eq(9).css('color', '#FFFFFF');
                $('td', row).eq(9).css('font-weigh', 'bold');
            }
            
            var consDet_2 = data['detalle_2'];
            if(consDet_2 == 0){
                $('td', row).eq(10).css('background', '#E32017');
                $('td', row).eq(10).css('color', '#FFFFFF');
            }

            var consDet_3 = data['detalle_3'];
            if(consDet_3 == 0){
                $('td', row).eq(11).css('background', '#E32017');
                $('td', row).eq(11).css('color', '#FFFFFF');
            }
            
            var consDet_4 = data['detalle_4'];
            if(consDet_4 == 0){
                $('td', row).eq(12).css('background', '#E32017');
                $('td', row).eq(12).css('color', '#FFFFFF');
            }
            
            if ( data['detalle_5']!=undefined){
                var consDet_5 = data['detalle_5'];
                if(consDet_5 == 0){
                    $('td', row).eq(13).css('background', '#E32017');
                    $('td', row).eq(13).css('color', '#FFFFFF');
                }
            }
        },
    });
}
//--------------------------------------------------------------------------------------------

