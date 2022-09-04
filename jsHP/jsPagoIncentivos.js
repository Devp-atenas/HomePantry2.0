$(document).ready(function() {
    cargarUltimoPeriodo('#selectPeriodo',0);
    cargarGArea("#selectArea",0);
    //cargarPeriodo('#selectPeriodo',0);

    //cargarEstado("#selecEstado",0)
    
});

$("#selectPeriodo").change(function() {
    //var idArea = $('#selectArea').val();
    $("#showReportePagoIncentivos").hide();
        
    cargarGArea("#selectArea",0);
    $('#selectCantSemana').empty();
});

$("#selectArea").change(function() {
    $("#showReportePagoIncentivos").hide();
        
    cargarCantidadSemana('#selectCantSemana',0);
    //cargarEstadoXArea('#selecEstado',0,idArea);
});



$("#selectCantSemana").change(function() {
    var idPeriodo = $('#selectPeriodo').val();
    
    callCargarTablaIncentivo(idPeriodo);
    
    
    //cargarGArea("#selectArea",0);
    //$("#showTableReporteHogarRegistroXConsumo").hide();
    //cargarTipoConsumo("#selecTipoConsumo",0);
});

function cargarCantidadSemana(etiqueta,idS) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url":urlApi+'getCantidadSemana',
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
            if (response.data[i].Id == idS) {
                selected.append("<option value=" + response.data[i].Id + " selected>" +
                    response.data[i].Cantidad + "</option>");
            } else {
                selected.append("<option value=" + response.data[i].Id + ">" + response.data[i].Cantidad + "</option>");
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

function cargarGArea(etiqueta,idEditar) {
    var settings = {
        "url":localStorage.getItem("urlApi")+'getAllGArea/',
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        let selected = $(etiqueta);
        selected.find("option").remove();
        if (idEditar == 0){
            selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].Id_Area == idEditar) {
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

function cargarPeriodo(etiqueta,idSeleccionado) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url":urlApi+'getAllPeriodo',
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
                    response.data[i].Periodo + "</option>");
            } else {
                selected.append("<option value=" + response.data[i].Id + ">" + response.data[i].Periodo + "</option>");
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



function cargarUltimoPeriodo(etiqueta,idSeleccionado) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url":urlApi+'getPeriodoMesAno',
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
            if (response.data[i].Id == idSeleccionado) {
                selected.append("<option value=" + response.data[i].Id + " selected>" +
                    response.data[i].Periodo + "</option>");
            } else {
                selected.append("<option value=" + response.data[i].Id + ">" + response.data[i].Periodo + "</option>");
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

//55555




function callCargarTablaIncentivo(idPeriodo) {
    var settings = {
        "async": true,
        "crossDomain": true,
        "url":localStorage.getItem("urlApi")+'getSemanas4Periodo/'+idPeriodo,
        "method": "get",
        "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            }
    }
    $.ajax(settings).done(function(response) {
        
        $("#showReportePagoIncentivos").hide();

        var idPeriodo = $('#selectPeriodo').val();
        var idArea = $('#selectArea').val();
        var idCantidadSemana = $('#selectCantSemana').val();
    
        cargarTablaIncentivos(idPeriodo,idArea,idCantidadSemana,response.data);
    


        debugger;

        //Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Consulta Reporte registro por consumo {idPeriodo:"+idPeriodo+",idTipoConsumo:"+idTipoConsumo+",mostrar:"+mostrar+"} (idTipoConsumo)",idTipoConsumo,"R");
        $("#showReportePagoIncentivos").show();

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


function cargarTablaIncentivos(idPeriodo,idArea,idCantSemana,arraySemanas){
    var urlApi = localStorage.getItem("urlApi");
    var urlV;
    urlV = urlApi+'getDatosReporteIncentivos/'+idPeriodo+'/'+idArea+'/'+idCantSemana;
    
    
    
    
    
    var oTable = $('#TablaPagoIncentivos').DataTable({
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
                title: 'Reporte de Hogar Registro por Consumo'
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
                mData: 'Id_PanelHogar',
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
                mData: 'Nombre1',
                className: "text-center"
            },
            {
                mData: 'Apellido1',
                className: "text-center"
            },
            {
                mData: 'Titular',
                className: "text-center"
            },
            {
                mData: 'CedulaTitular',
                className: "text-center"
            },
            {
                mData: 'Banco',
                className: "text-center"
            },
            {
                mData: 'CodigoBanco',
                className: "text-center"
            },
            {
                mData: 'NumeroCuenta',
                className: "text-center"
            },
            {
                title:`${arraySemanas[0].Semana}`,
                mData: 'detalle_1',
                className: "text-center",
                render: function (data, type, row) {
                    if (data != "0-0"){
                        return "<a id='fg003' href='#' onclick='callReporteConsumoHogar("+row.Id_Semana_1+","+row.Id_Area+","+row.Id_Estado+","+row.Id_PanelHogar+"); return false;' >"+data+"</a>";
                    }else{
                        return data;
                    }
                }
            },
            {
                title:`${arraySemanas[1].Semana}`,
                mData: 'detalle_2',
                className: "text-center",
                render: function (data, type, row) {
                    if (data != "0-0"){
                        return "<a id='fg003' href='#' onclick='callReporteConsumoHogar("+row.Id_Semana_2+","+row.Id_Area+","+row.Id_Estado+","+row.Id_PanelHogar+"); return false;' >"+data+"</a>";
                    }else{
                        return data;
                    }
                }
            },
            {
                title:`${arraySemanas[2].Semana}`,
                mData: 'detalle_3',
                className: "text-center",
                render: function (data, type, row) {
                    if (data != "0-0"){
                        return "<a id='fg003' href='#' onclick='callReporteConsumoHogar("+row.Id_Semana_3+","+row.Id_Area+","+row.Id_Estado+","+row.Id_PanelHogar+"); return false;' >"+data+"</a>";
                    }else{
                        return data;
                    }
                }
            },
            {
                title:`${arraySemanas[3].Semana}`,
                mData: 'detalle_4',
                className: "text-center",
                render: function (data, type, row) {
                    if (data != "0-0"){
                        return "<a id='fg003' href='#' onclick='callReporteConsumoHogar("+row.Id_Semana_4+","+row.Id_Area+","+row.Id_Estado+","+row.Id_PanelHogar+"); return false;' >"+data+"</a>";
                    }else{
                        return data;
                    }
                }
            },
            {               
                title: `${arraySemanas[4].Semana}`,
                mData: 'detalle_5',
                className: "text-center",
                render: function (data, type, row) {
                    if (data != "0-0"){
                        return "<a id='fg003' href='#' onclick='callReporteConsumoHogar("+row.Id_Semana_5+","+row.Id_Area+","+row.Id_Estado+","+row.Id_PanelHogar+"); return false;' >"+data+"</a>";
                    }else{
                        return data;
                    }
                }
            }
        ],
        "columnDefs": [{
            "width": "100%",
            "targets": 16,
            "orderable": true,
            "data": 'Id_PanelHogar',
            "className": "text-center",
        }],
        "createdRow": function( row, data, dataIndex){
            var posInicial = 11;

            var consDet_1 = data['detalle_1'].split("-");
            if(consDet_1[0] == 0){
                $('td', row).eq(posInicial).css('background', '#E32017');
                $('td', row).eq(posInicial).css('color', '#FFFFFF');
                $('td', row).eq(posInicial).css('font-weigh', 'bold');
            }else if (Number(consDet_1[1])-Number(consDet_1[0]) < 5){
                $('td', row).eq(posInicial).css('background', '#FFC059');
                $('td', row).eq(posInicial).css('color', '#FFFFFF');
                $('td', row).eq(posInicial).css('font-weigh', 'bold');
            }
            
            var consDet_2 = data['detalle_2'].split("-");
            if(consDet_2[0] == 0){
                $('td', row).eq(posInicial+1).css('background', '#E32017');
                $('td', row).eq(posInicial+1).css('color', '#FFFFFF');
            }else if (Number(consDet_2[1])-Number(consDet_2[0]) < 5){
                $('td', row).eq(posInicial+1).css('background', '#FFC059');
                $('td', row).eq(posInicial+1).css('color', '#FFFFFF');
            }
            
            var consDet_3 = data['detalle_3'].split("-");
            if(consDet_3[0] == 0){
                $('td', row).eq(posInicial+2).css('background', '#E32017');
                $('td', row).eq(posInicial+2).css('color', '#FFFFFF');
            }else if (Number(consDet_3[1])-Number(consDet_3[0]) < 5){
                $('td', row).eq(posInicial+2).css('background', '#FFC059');
                $('td', row).eq(posInicial+2).css('color', '#FFFFFF');
            }
            
            var consDet_4 = data['detalle_4'].split("-");
            if(consDet_4[0] == 0){
                $('td', row).eq(posInicial+3).css('background', '#E32017');
                $('td', row).eq(posInicial+3).css('color', '#FFFFFF');
            }else if (Number(consDet_4[1])-Number(consDet_4[0]) < 5){
                $('td', row).eq(posInicial+3).css('background', '#FFC059');
                $('td', row).eq(posInicial+3).css('color', '#FFFFFF');
            }
            
            if ( data['detalle_5']!=undefined){
                var consDet_5 = data['detalle_5'].split("-");
                if(consDet_5[0] == 0){
                    $('td', row).eq(posInicial+4).css('background', '#E32017');
                    $('td', row).eq(posInicial+4).css('color', '#FFFFFF');
                }else if (Number(consDet_5[1])-Number(consDet_5[0]) < 5){
                    $('td', row).eq(posInicial+4).css('background', '#FFC059');
                    $('td', row).eq(posInicial+4).css('color', '#FFFFFF');
                }
            }
        },
        
    });
}
    
    