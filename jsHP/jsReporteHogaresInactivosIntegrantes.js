$(document).ready(function() {
    cargarTablaReporteGeneral('#TablaReporte');
    
    //$('#showButton').hide();
});
function cargarTablaReporteGeneral(idDivTabla){
    var urlApi = localStorage.getItem("urlApi");
    var table = new Tabulator(idDivTabla, {
        ajaxURL: urlApi+'getDatosReporteHogaresInactivosIntegrantes/',
        renderVerticalBuffer:600,
        ajaxConfig:{
            method:"GET", //set request type to Position
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
        },
        height : "400px" ,
        layout:"fitDataStretch",//,fitDataStretch,fitDataTable",
        progressload : "scroll",
        groupBy:"Id_PanelHogar",
        placeholder:"Datos no encontrados",
        selectablePersistence:true, //make rows selectable
        columns:[
            {title:"Id PanelHogar", field:"Id_PanelHogar", sorter:"number", headerFilter:true},
            {title:"Codigo del Hogar", field:"CodigoHogar", sorter:"number", headerFilter:true},
            {title:"Estado", field:"Estado", sorter:"string", headerFilter:true},
            {title:"Ciudad", field:"Ciudad", sorter:"string", headerFilter:true},
            {title:"Municipio", field:"Municipio", sorter:"string", headerFilter:true},
            {title:"Parroquia", field:"Parroquia", sorter:"string", headerFilter:true},
            {title:"Barrio", field:"Barrio", sorter:"string", headerFilter:true},
            {title:"Referencia", field:"Referencia", sorter:"string", headerFilter:true},
            {title:"TotalPersonas", field:"TotalPersonas", sorter:"string", headerFilter:true},
            {title:"TelefonoLocal", field:"TelefonoLocal", sorter:"string", headerFilter:true},
            {title:"Nombre1", field:"Nombre1", sorter:"string", headerFilter:true},
            {title:"Apellido1", field:"Apellido1", sorter:"string", headerFilter:true},
            {title:"ResponsablePanel", field:"ResponsablePanel", sorter:"string", hozAlign:"center", formatter:"tickCross"},
            {title:"cedula", field:"cedula", sorter:"string", headerFilter:true},
            {title:"correo", field:"correo", sorter:"string", headerFilter:true},
            {title:"celular", field:"celular", sorter:"string", headerFilter:true},
            {title:"titular", field:"titular", sorter:"string", headerFilter:true},
            {title:"NumeroCuenta", field:"NumeroCuenta", sorter:"string"},
            {title:"Banco", field:"Banco", sorter:"string"},
        ],
    });

    document.getElementById("download-xlsx").addEventListener("click", function(){
        table.download("xlsx", "ReporteHogaresInactivoseIntegrantes.xlsx", {sheetName:"Hoja 1"});
    });
}
