$(document).ready(function() {
    //$("#showTableReporteConsumoXDia").hide();
    cargarPeriodo('#selectPeriodo',0);
    //cargarEstado('#selectEstado',0);
    //cargarSemanaTop6('#selectSemana',0);
    //cargarTablaReporteConsumo("","","",3000);
});

$("#selectPeriodo").change(function() {
    $("#showTableReporteConsumoXDia").hide();
    cargarTipoConsumo("#selecTipoConsumo",0);
    
});

$("#selecTipoConsumo").change(function() {
    $("#showTableReporteHogarRegistroXConsumo").show();
    var idPeriodo = $('#selectPeriodo').val();
    var idTipoConsumo = $('#selecTipoConsumo').val();
    cargarTablaHogarRegistroxConsumo(idPeriodo,idTipoConsumo);
});


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


function cargarTablaHogarRegistroxConsumo(idPeriodo,idTipoConsumo){
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
