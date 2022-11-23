$(document).ready(function() {
    var urlApi = '<?php echo urlApi; ?>';
    cargarTablaReporteCablera('#TablaReporte');
    
    //$('#showButton').hide();
});
function cargarTablaReporteCablera(idDivTabla){
    Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Consulta Reporte cablera",0,"R");

    var urlApi = localStorage.getItem("urlApi");
    var table = new Tabulator(idDivTabla, {
        ajaxURL: urlApi+'getDatosReporteCablera/',
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
        //paginationSize : 20,
        placeholder:"Datos no encontrados",
        selectablePersistence:true, //make rows selectable
        columns:[
            {title:"Id PanelHogar", field:"Id_PanelHogar", sorter:"number"},
            {title:"Codigo del Hogar", field:"CodigoHogar", sorter:"number"},
            {title:"Estado", field:"Estado", sorter:"string"},
            {title:"Ciudad", field:"Ciudad", sorter:"string"},
            {title:"Cablera1", field:"Cablera1", sorter:"string"},
            {title:"Cablera2", field:"Cablera2", sorter:"string"},
            {title:"TvOnline1", field:"TvOnline1", sorter:"string"},
            {title:"TvOnline2", field:"TvOnline2", sorter:"string"},
            
        ],
    });

    document.getElementById("download-xlsx").addEventListener("click", function(){
        table.download("xlsx", "Reporte-Cablera.xlsx", {sheetName:"Hoja 1"});
    });
}
