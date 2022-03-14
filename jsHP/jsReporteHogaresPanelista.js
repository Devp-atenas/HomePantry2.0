$(document).ready(function() {
    var urlApi = '<?php echo urlApi; ?>';
    cargarTablaReporteGeneral('#TablaReporte');
    
    //$('#showButton').hide();
});
function cargarTablaReporteGeneral(idDivTabla){
    var urlApi = localStorage.getItem("urlApi");
    var table = new Tabulator(idDivTabla, {
        ajaxURL: urlApi+'getDatosReporteHogaresPanelista/',
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
            {title:"Codigo del Hogar", field:"CodigoHogar", sorter:"string"},
            {title:"Estado", field:"Estado", sorter:"string"},
            {title:"Ciudad", field:"Ciudad", sorter:"string"},
            {title:"Municipio", field:"Municipio", sorter:"string"},
            {title:"Parroquia", field:"Parroquia", sorter:"string"},
            {title:"Nombre1", field:"Nombre1", sorter:"string"},
            {title:"Apellido1", field:"Apellido1", sorter:"string"},
            {title:"Cedula", field:"Cedula", sorter:"number"},
            {title:"Parentesco", field:"Parentesco", sorter:"string"},
            {title:"Sexo", field:"Sexo", sorter:"string"},
            {title:"Fec_Nacimiento", field:"Fec_Nacimiento", sorter:"string"},
            {title:"Titular", field:"Titular", sorter:"string"},
            {title:"CedulaTitular", field:"CedulaTitular", sorter:"number"},
            {title:"Banco", field:"Banco", sorter:"string"},
            {title:"NumeroCuenta", field:"NumeroCuenta", sorter:"string"},
            {title:"Id_Mascotas", field:"Id_Mascotas", sorter:"string"},
            {title:"Ind_Perro", field:"Ind_Perro", sorter:"string"},
            {title:"Ind_Ave", field:"Ind_Ave", sorter:"string"},
            {title:"Ind_Roedor", field:"Ind_Roedor", sorter:"string"},
            {title:"Ind_Otro", field:"Ind_Otro", sorter:"string"},
            {title:"ClaseSocial", field:"ClaseSocial", sorter:"string"}
            
        ],
    });

    document.getElementById("download-xlsx").addEventListener("click", function(){
        table.download("xlsx", "ReporteHogaresPanelista.xlsx", {sheetName:"Hoja 1"});
    });
}
