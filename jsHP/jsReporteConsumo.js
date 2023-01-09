$(document).ready(function() {
    cargarEstadosAgrupados('#selectEstadosAgrupados')
    $('#selectEstadosAgrupados').select2({
        closeOnSelect: false
    });

});


$("#selectEstadosAgrupados").change(function() {
    $("#showTabla").hide();
    $("#showTablaPanelistasFaltaron4Consumo").hide();
    cargarSemanaTop6('#selectSemana',0);
});

$("#selectSemana").change(function() {
    var idEstados = $('#selectEstadosAgrupados').val();
    var idSemana = $('#selectSemana').val(); 
    $("#showTablaPanelistasFaltaron4Consumo").hide();
    cargarTablaReporteConsumo(idEstados,idSemana);
});

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

function cargarEstadosAgrupados(etiqueta){
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
                TT += '<option value="'+subMenuValue.Id_Estado+'">'+subMenuValue.Id_Estado+' - '+subMenuValue.Estado+'</option>';
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

function cargarTablaReporteConsumo(idEstados,idSemana){
    //alert(idEstados);
    //alert(idSemana);
    
    $("#showTabla").show();
    
    var bottomAcciones = function(cell, formatterParams){
    var idTipoConsumo = cell.getRow().getData().id_TipoConsumo;
    return  "<a id='fg003' href='#' onclick='cargarPanelistasReportaron("+idTipoConsumo+"); return false;' ><i class='bi bi-bag-check text-primary data-toggle='tooltip' data-placement='top' title='Hogares que reportaron'></i></a>"
            +"<a id='fg003' href='#' onclick='cargarPanelistasFaltaron4Consumo("+idTipoConsumo+"); return false;' ><i class='bi bi-bag-x text-danger data-toggle='tooltip' data-placement='top' title='Hogares que faltan'></i></a>";
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

function cargarPanelistasReportaron(idTipoConsumo){
    var idEstados = $('#selectEstadosAgrupados').val().join();
    var idSemana = $('#selectSemana').val(); 
    $('#showTablaPanelistasFaltaron4Consumo').show();
    
    var table = new Tabulator("#TablePanelistasFaltaron4Consumo", {
        ajaxURL: localStorage.getItem("urlApi")+'getPanelistasReportaron/'+idEstados+'/'+idSemana+'/'+idTipoConsumo,
        ajaxConfig:{
            method:"GET", //set request type to Position
            headers: {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
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
            {title:"Medio", field:"Medio", sorter:"string"},
            {title:"Moneda", field:"Moneda", sorter:"string"},
            {title:"Tiene Factura", field:"Tiene_Factura", sorter:"string", formatter:"tickCross"},
            {title:"Total Compra", field:"Total_Compra", sorter:"string"}
            
        ],
    });
}
function cargarPanelistasFaltaron4Consumo(idTipoConsumo){
    var idEstados = $('#selectEstadosAgrupados').val().join();
    var idSemana = $('#selectSemana').val(); 
    
    $('#showTablaPanelistasFaltaron4Consumo').show();
    
    var table = new Tabulator("#TablePanelistasFaltaron4Consumo", {
        ajaxURL: localStorage.getItem("urlApi")+'getPanelistasFaltaron4Consumo/'+idEstados+'/'+idSemana+'/'+idTipoConsumo,
        ajaxConfig:{
            method:"GET", //set request type to Position
            headers: {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
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
