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
            {title:"Id PanelHogar", field:"Id_PanelHogar", sorter:"number"},
            {title:"Codigo del Hogar", field:"CodigoHogar", sorter:"number"},
            {title:"Estado", field:"Estado", sorter:"string"},
            {title:"Ciudad", field:"Ciudad", sorter:"string"},
            {title:"Municipio", field:"Municipio", sorter:"string"},
            {title:"Parroquia", field:"Parroquia", sorter:"string"},
            {title:"Barrio", field:"Barrio", sorter:"string"},
            {title:"Referencia", field:"Referencia", sorter:"string"},
            {title:"TotalPersonas", field:"TotalPersonas", sorter:"string"},
            {title:"TelefonoLocal", field:"TelefonoLocal", sorter:"string"},
            {title:"Nombre1", field:"Nombre1", sorter:"string"},
            {title:"Apellido1", field:"Apellido1", sorter:"string"},
            {title:"ResponsablePanel", field:"ResponsablePanel", sorter:"string"},
            {title:"cedula", field:"cedula", sorter:"string"},
            {title:"correo", field:"correo", sorter:"string"},
            {title:"celular", field:"celular", sorter:"string"},
            {title:"titular", field:"titular", sorter:"string"},
            {title:"NumeroCuenta", field:"NumeroCuenta", sorter:"string"},
            {title:"Banco", field:"Banco", sorter:"string"},
        ],
    });

    document.getElementById("download-xlsx").addEventListener("click", function(){
        table.download("xlsx", "ReporteHogaresInactivoseIntegrantes.xlsx", {sheetName:"Hoja 1"});
    });
}
