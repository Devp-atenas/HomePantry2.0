$(document).ready(function() {
    cargarGArea('#selectGArea',0);
    generarEstadosAgrupados('#selectEstadosAgrupados')
    $('#selectEstadosAgrupados').select2();
});

$("#selectEstadosAgrupados").change(function() {
    cargarSemanaTop6('#selectSemana',0);
});

$("#selectSemana").change(function() {
    /*var idArea = $('#selectGArea').val();
    var idSemana = $('#selectSemana').val(); 
    cargarEstadoXArea('#selectEstado',0,idArea);
    cargarTablaReporteConsumo(idArea,0,idSemana);*/
    //debugger;
    //var idEstados = $('#selectEstadosAgrupados option:selected').toArray().map(item => item.value);
    var idEstados = $('#selectEstadosAgrupados').val();
    idEstados = idEstados.join();
    var idSemana = $('#selectSemana').val(); 
    console.log(idEstados);
    console.log(idSemana);
    cargarTablaReporteConsumo(idEstados,idSemana);
});


//---------------------------







$("#selectGArea_").change(function() {
    cargarSemanaTop6('#selectSemana',0);
    $('#showTablaPanelistasFaltaron4Consumo').hide();
    //$('#showButton').hide();
});

$("#selectSemana_").change(function() {
    var idArea = $('#selectGArea').val();
    var idSemana = $('#selectSemana').val(); 
    cargarEstadoXArea('#selectEstado',0,idArea);
    cargarTablaReporteConsumo(idArea,0,idSemana);
});

$("#selectEstado_").change(function() {
    var idArea = $('#selectGArea').val();
    var idEstado = $('#selectEstado').val();
    var idSemana = $('#selectSemana').val(); 
    //cargarTablaReporteConsumo(idArea,idEstado,idSemana);
});



$("#multipleSelect :selected").map(function(i, el) {
    return $(el).val();
}).get();
/*
var select_button_text = $('#SelectQButton option:selected')
                .toArray().map(item => item.value);

*/
function cargarSemanaTop6(etiqueta,idSeleccionado) {
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
        if (idSeleccionado == 0){
            selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id == idSeleccionado) {
                selected.append("<option value=" + response.data[i].id + " selected>" +
                    response.data[i].id + " - " + response.data[i].Semana + "</option>");
            } else {
                selected.append("<option value=" + response.data[i].id + ">" + response
                    .data[i].id + " - " + response.data[i].Semana + "</option>");
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






function generarEstadosAgrupados(etiqueta){
    var settings = {
        "url":localStorage.getItem("urlApi")+'getEstados4AreaAgrupado/',
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        var TT = "";
        $.each(response, function(menuKey, menuValue) {
            TT += '<optgroup label="'+menuKey+'">';
            
            $.each(menuValue, function(subMenuKey, subMenuValue) {
                TT += '<option value="'+subMenuValue.Id_Estado+'">'+subMenuValue.Estado+'</option>';
            });
            TT += '</optgroup>';
        });
        let estadosAgrupados = $(etiqueta);
        estadosAgrupados.append(TT);
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

function cargarTablaReporteConsumo(idEstados,idSemana){
    //alert(idEstados);
    //alert(idSemana);
    
    
    var bottomAcciones = function(cell, formatterParams){
    var id = cell.getRow().getData().Id_Estudio;
    return  "<a id='fg003' href='#' onclick='callUpdateEstudio_(); return false;' ><i class='bi bi-bag-check text-primary data-toggle='tooltip' data-placement='top' title='Hogares que reportaron'></i></a>"
            +"<a id='fg003' href='#' onclick='cargarPanelistasFaltaron4Consumo(); return false;' ><i class='bi bi-bag-x text-danger data-toggle='tooltip' data-placement='top' title='Hogares que faltan'></i></a>";
    };

    var table = new Tabulator("#TableReporteConsumo", {
        ajaxURL: localStorage.getItem("urlApi")+'getDatosReporteConsumo4EstadoAgrupados/'+idEstados+'/'+idSemana,
        ajaxConfig:{
            method:"GET", //set request type to Position
            headers: {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            }
        },
        layout:"fitDataFill",
        placeholder:"Datos no encontrados",
        selectable:false, //make rows selectable
        columns:[
            {title:"Tipo de Consumo", field:"TipoConsumo", sorter:"string"},
            {title:"# Hogares que Reportaron", field:"CantSemAct", hozAlign:"center", sorter:"string"},
            {title:"# Hogares que Reportaron (Ant)", field:"CantSemAnt", hozAlign:"center", sorter:"string"},
            {title:"Variacion", field:"Variacion",  hozAlign:"center", sorter:"string"},
            {title:"# Hogares que Faltan", field:"cantHogaresFaltan", hozAlign:"center", sorter:"string"},
            {title:"% de Cumplimiento", field:"Cumplimiento", hozAlign:"center", sorter:"string"},
            {formatter:bottomAcciones, hozAlign:"center"}
        ],
    });
}
function cargarTablaReporteConsumo_(idArea,idEstado,idSemana){
    
    
    var API;
    if (idEstado == 0){
        API = localStorage.getItem("urlApi")+'getDatosReporteConsumo/'+idArea+'/'+idSemana;
    }else{
        API = localStorage.getItem("urlApi")+'getDatosReporteConsumo4Estado/'+idArea+'/'+idEstado+'/'+idSemana;
    }
    
    var urlApi = localStorage.getItem("urlApi");
    var bottomAcciones = function(cell, formatterParams){
    var id = cell.getRow().getData().Id_Estudio;
    return  "<a id='fg003' href='#' onclick='callUpdateEstudio_(); return false;' ><i class='bi bi-bag-check text-primary data-toggle='tooltip' data-placement='top' title='Hogares que reportaron'></i></a>"
            +"<a id='fg003' href='#' onclick='cargarPanelistasFaltaron4Consumo(); return false;' ><i class='bi bi-bag-x text-danger data-toggle='tooltip' data-placement='top' title='Hogares que faltan'></i></a>";
    };

    var table = new Tabulator("#TableReporteConsumo", {
        ajaxURL: API,
        ajaxConfig:{
            method:"GET", //set request type to Position
            headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
        },
        layout:"fitDataFill",
        placeholder:"Datos no encontrados",
        selectable:false, //make rows selectable
        columns:[
            {title:"Tipo de Consumo", field:"TipoConsumo", sorter:"string"},
            {title:"# Hogares que Reportaron", field:"CantSemAct", hozAlign:"center", sorter:"string"},
            {title:"# Hogares que Reportaron (Ant)", field:"CantSemAnt", hozAlign:"center", sorter:"string"},
            {title:"Variacion", field:"Variacion",  hozAlign:"center", sorter:"string"},
            {title:"# Hogares que Faltan", field:"cantHogaresFaltan", hozAlign:"center", sorter:"string"},
            {title:"% de Cumplimiento", field:"Cumplimiento", hozAlign:"center", sorter:"string"},
            {formatter:bottomAcciones, hozAlign:"center"}
        ],
    });
}


function cargarPanelistasFaltaron4Consumo(){
    
    var idArea = $('#selectGArea').val();
    var idEstado = $('#selectEstado').val();
    var idSemana = $('#selectSemana').val(); 
    
    $('#showTablaPanelistasFaltaron4Consumo').show();
    
    
    
    
    
    
    var API;
    if (idEstado != ""){
        API = localStorage.getItem("urlApi")+'getPanelistasFaltaron4Consumo/'+idArea+'/'+idSemana;
    }else{
        API = localStorage.getItem("urlApi")+'getDatosReporteConsumo4Estado/'+idArea+'/'+idEstado+'/'+idSemana;
    }
    
    
    var table = new Tabulator("#TablePanelistasFaltaron4Consumo", {
        ajaxURL: API,
        ajaxConfig:{
            method:"GET", //set request type to Position
            headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
            "data": {
                "idArea":idArea,
                "idEstado": idEstado,
                "idSemana": idSemana
            }
        },
        height:"300px",
        layout:"fitDataFill",
        placeholder:"Datos no encontrados",
        selectable:false, //make rows selectable
        columns:[
            {title:"idHogar", field:"Id_PanelHogar", sorter:"string"},
            {title:"CodHogar", field:"CodigoHogar", sorter:"string"},
            {title:"Area", field:"Area", sorter:"string"},
            {title:"Estado", field:"Estado", sorter:"string"},
            {title:"Nombre", field:"Nombre1", sorter:"string"},
            {title:"Apellido", field:"Apellido1", sorter:"string"},
            {title:"Celular", field:"Celular", sorter:"string"},
            {title:"Otros Consumos", field:"CheckOtrosConsumos", hozAlign:"center", sorter:"string", formatter:"tickCross"}
        ],
    });
}
