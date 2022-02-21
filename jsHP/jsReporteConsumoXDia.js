$(document).ready(function() {
    cargarGArea('#selectGArea',0);
    cargarSemanaTop6("#selectSemana",0);
    
    
});

$("#selectGArea").change(function() {
    $("#showTableReporteConsumoXDia").hide();
    idArea = $("#selectGArea").val();
    idSemana = $("#selectSemana").val();
    cargarEstadoXArea("#selectEstado",0,idArea);
    cargarTablaReporteConsumoXDia_Area(idArea,idSemana);
    $("#showTableReporteConsumoXDia").show();
    //$("#selectSemana").empty();
});

$("#selectEstado").change(function() {
    idArea = $("#selectGArea").val();
    idEstado = $("#selectEstado").val();
    idSemana = $("#selectSemana").val();
    $("#showTableReporteConsumoXDia").show();
    cargarTablaReporteConsumoXDia_AreaEstado(idArea,idEstado,idSemana);
});


$("#selectSemana").change(function() {
    idArea = $("#selectGArea").val();
    idEstado = $("#selectEstado").val();
    idSemana = $("#selectSemana").val();
    $("#showTableReporteConsumoXDia").show();
    cargarTablaReporteConsumoXDia(idArea,idEstado,idSemana);
});





function cargarTablaReporteConsumoXDia_Area(idArea,idSemana){
    var urlApi = localStorage.getItem("urlApi");
    
    var table = new Tabulator("#TableReporteConsumoXDia", {
        ajaxURL: urlApi+'getDatosReporteTipoConsumoXDia_Area/'+idArea+'/'+idSemana,
        ajaxConfig:{
            method:"GET", //set request type to Position
            headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
        },
        layout:"fitDataStretch",
        height : "400px" ,
        //groupBy:"Fecha_Creacion",
        placeholder:"Datos no encontrados",
        selectable:false, //make rows selectable
        columns:[
            {title:"Dia", field:"Fecha_Creacion", sorter:"date"},
            {title:"Area", field:"Area", sorter:"string"},
            {title:"Estado", field:"Estado", sorter:"string"},
            {title:"Tipo de Consumo", field:"TipoConsumo", sorter:"string"},
            {title:"# Hogares que Reportaron", field:"cantidad", sorter:"number"},
        ],
    });
}

function cargarTablaReporteConsumoXDia_AreaEstado(idArea,idEstado,idSemana){
    var urlApi = localStorage.getItem("urlApi");
    
    var table = new Tabulator("#TableReporteConsumoXDia", {
        ajaxURL: urlApi+'getDatosReporteTipoConsumoXDia_AreaEstado/'+idArea+'/'+idEstado+'/'+idSemana,
        ajaxConfig:{
            method:"GET", //set request type to Position
            headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
        },
        layout:"fitDataStretch",
        height : "400px" ,
        //groupBy:"Fecha_Creacion",
        placeholder:"Datos no encontrados",
        selectable:false, //make rows selectable
        columns:[
            {title:"Dia", field:"Fecha_Creacion", sorter:"date"},
            {title:"Area", field:"Area", sorter:"string"},
            {title:"Estado", field:"Estado", sorter:"string"},
            {title:"Tipo de Consumo", field:"TipoConsumo", sorter:"string"},
            {title:"# Hogares que Reportaron", field:"cantidad", sorter:"number"},
            
        ],
    });
}



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
