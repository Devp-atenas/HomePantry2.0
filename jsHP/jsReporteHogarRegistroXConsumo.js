$(document).ready(function() {
    cargarPeriodo('#selectPeriodo',0);
});

$("#selectPeriodo").change(function() {
    $("#showTableReporteHogarRegistroXConsumo").hide();
    cargarTipoConsumo("#selecTipoConsumo",0);
});

$("#selecTipoConsumo").change(function() {
    cargarMostrar('#selecMostrar');
    $("#showTableReporteHogarRegistroXConsumo").hide();
});

$("#selecMostrar").change(function() {
    $("#showTableReporteHogarRegistroXConsumo").hide();
    var idPeriodo = $('#selectPeriodo').val();
    var idTipoConsumo = $('#selecTipoConsumo').val();
    var mostrar = $('#selecMostrar').val();
    cargarTablaHogarRegistroxConsumo(idPeriodo,idTipoConsumo,mostrar);
    $("#showTableReporteHogarRegistroXConsumo").show();
});


function cargarMostrar(etiqueta) {
    let selected = $(etiqueta);
    selected.find("option").remove();
    selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
    selected.append("<option value='1'>Mostrar Todos</option>");
    selected.append("<option value='2'>Mostrar Registros Indebidos</option>");
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

function cargarTipoConsumo(etiqueta,idSeleccionado) {
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
//55555


function cargarTablaHogarRegistroxConsumo(idPeriodo,idTipoConsumo,mostrar){
    var urlApi = localStorage.getItem("urlApi");
    var urlV;
    
    if (mostrar == 1){
        urlV = urlApi+'getDatosReporteHogarRegistroXConsumo/'+idPeriodo+'/'+idTipoConsumo;
    }else{
        urlV = urlApi+'getDatosReporteHogarRegistroIndebidoXConsumo/'+idPeriodo+'/'+idTipoConsumo;
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
            "targets": 13,
            "orderable": true,
            "data": 'Id_PanelHogar',
            "className": "text-center",
        }],
        "createdRow": function( row, data, dataIndex){
            var consDet_1 = data['detalle_1'].split("-");
            if(consDet_1[0] == 0){
                $('td', row).eq(8).css('background', '#E32017');
                $('td', row).eq(8).css('color', '#FFFFFF');
                $('td', row).eq(8).css('font-weigh', 'bold');
            }else if (Number(consDet_1[1])-Number(consDet_1[0]) < 5){
                $('td', row).eq(8).css('background', '#FFC059');
                $('td', row).eq(8).css('color', '#FFFFFF');
                $('td', row).eq(8).css('font-weigh', 'bold');
            }
            
            var consDet_2 = data['detalle_2'].split("-");
            if(consDet_2[0] == 0){
                $('td', row).eq(9).css('background', '#E32017');
                $('td', row).eq(9).css('color', '#FFFFFF');
            }else if (Number(consDet_2[1])-Number(consDet_2[0]) < 5){
                $('td', row).eq(9).css('background', '#FFC059');
                $('td', row).eq(9).css('color', '#FFFFFF');
            }
            
            var consDet_3 = data['detalle_3'].split("-");
            if(consDet_3[0] == 0){
                $('td', row).eq(10).css('background', '#E32017');
                $('td', row).eq(10).css('color', '#FFFFFF');
            }else if (Number(consDet_3[1])-Number(consDet_3[0]) < 5){
                $('td', row).eq(10).css('background', '#FFC059');
                $('td', row).eq(10).css('color', '#FFFFFF');
            }
            
            var consDet_4 = data['detalle_4'].split("-");
            if(consDet_4[0] == 0){
                $('td', row).eq(11).css('background', '#E32017');
                $('td', row).eq(11).css('color', '#FFFFFF');
            }else if (Number(consDet_4[1])-Number(consDet_4[0]) < 5){
                $('td', row).eq(11).css('background', '#FFC059');
                $('td', row).eq(11).css('color', '#FFFFFF');
            }
            
            /*var consDet_5 = data['detalle_5'].split("-");
            if(consDet_5[0] == 0){
                $('td', row).eq(12).css('background', '#E32017');
                $('td', row).eq(12).css('color', '#FFFFFF');
            }else if (Number(consDet_5[1])-Number(consDet_5[0]) < 5){
                $('td', row).eq(12).css('background', '#FFC059');
                $('td', row).eq(12).css('color', '#FFFFFF');
            }*/
            
        },
        
    });
   
   
}






//55555
function cargarTablaHogarRegistroxConsumo2(idPeriodo,idTipoConsumo){
    var urlApi = localStorage.getItem("urlApi");
    var cantidad = 11;
    var bottomAcciones = function(cell, formatterParams){
    var id = cell.getRow().getData().Id_Estudio;
    return  "<a id='fg003' href='#' onclick='callUpdateEstudio("+id+"); return false;' ><i class='fas fa-edit text-primary data-toggle='tooltip' data-placement='top' title='Actualizar'></i></a>"
            +"<a id='fg003' href='#' onclick='callEliminarEstudio("+id+"); return false;' ><i class='fa fa-eraser text-danger data-toggle='tooltip' data-placement='top' title='Eliminar'></i></a>";
    };

    var table = new Tabulator("#TableReporteHogarRegistroXConsumo", {
        ajaxURL: urlApi+'getDatosReporteHogarRegistrsoXConsumo/'+idPeriodo+"/"+idTipoConsumo,
        ajaxConfig:{
            method:"GET", //set request type to Position
            headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
        },
        layout:"fitDataStretch",
        locale:true,
        placeholder:"Datos no encontrados",
        selectable:false, //make rows selectable
        columns:[
            {title:"idHogar", field:"Id_PanelHogar", sorter:"string"},
            {title:"Hogar", field:"CodigoHogar", sorter:"string"},
            {title:"Clase Social", field:"ClaseSocial", sorter:"string"},
            {title:"# Personas", field:"TotalPersonas", sorter:"string"},
            {title:"Area", field:"Area", sorter:"string"},
            {title:"Estado", field:"Estado", sorter:"string"},
            {title:"Nombre Panelista", field:"Nombre1", sorter:"string"},
            {title:"Apellido Panelista", field:"Apellido1", sorter:"string"},
            {title:"detalle_1", field:"detalle_1", formatter:function(cell, formatterParams){
                var value = cell.getValue();
                var consDet = value.split("-");
                if(consDet[0]==consDet[1]){
                    if (consDet[0]==0){
                        return "<span style='color:green; font-weight:bold;'>" + value + "</span>";
                    }else{
                        return "<span style='color:Red; font-weight:bold;'>" + value + "</span>";
                    }
                }else{
                    return value;
                }
            }},
            {title:"detalle_2", field:"detalle_2", formatter:function(cell, formatterParams){
                var value = cell.getValue();
                var consDet = value.split("-");
                if(consDet[0]==consDet[1]){
                    if (consDet[0]==0){
                        return "<span style='color:green; font-weight:bold;'>" + value + "</span>";
                    }else{
                        return "<span style='color:Red; font-weight:bold;'>" + value + "</span>";
                    }
                }else{
                    return value;
                }
            }},
            {title:"detalle_3", field:"detalle_3", formatter:function(cell, formatterParams){
                var value = cell.getValue();
                var consDet = value.split("-");
                if(consDet[0]==consDet[1]){
                    if (consDet[0]==0){
                        return "<span style='color:green; font-weight:bold;'>" + value + "</span>";
                    }else{
                        return "<span style='color:Red; font-weight:bold;'>" + value + "</span>";
                    }
                }else{
                    return value;
                }
            }},
            {title:"detalle_4", field:"detalle_4", formatter:function(cell, formatterParams){
                var value = cell.getValue();
                var consDet = value.split("-");
                if(consDet[0]==consDet[1]){
                    if (consDet[0]==0){
                        return "<span style='color:green; font-weight:bold;'>" + value + "</span>";
                    }else{
                        return "<span style='color:Red; font-weight:bold;'>" + value + "</span>";
                    }
                }else{
                    return value;
                }
            }},
            {title:"detalle_5", field:"detalle_5", formatter:function(cell, formatterParams){
                var value = cell.getValue();
                var consDet = value.split("-");
                if(consDet[0]==consDet[1]){
                    if (consDet[0]==0){
                        return "<span style='color:green; font-weight:bold;'>" + value + "</span>";
                    }else{
                        return "<span style='color:Red; font-weight:bold;'>" + value + "</span>";
                    }
                }else{
                    return value;
                }
            }},
            
        ],


        




    });
}
