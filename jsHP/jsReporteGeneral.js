$(document).ready(function() {
    cargarTablaReporte('#TablaReporte');
});
function cargarTablaReporte(idDivTabla){
    var urlApi = localStorage.getItem("urlApi");
    var table = new Tabulator(idDivTabla, {
        ajaxURL: urlApi+'getDatosReporteGeneral/',
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
            {title:"Municipio", field:"Municipio", sorter:"string"},
            {title:"Parroquia", field:"Parroquia", sorter:"string"},
            {title:"Barrio", field:"Barrio", sorter:"string"},
            {title:"Nombre1", field:"Nombre1", sorter:"string"},
            {title:"Apellido1", field:"Apellido1", sorter:"string"},
            {title:"Parentesco", field:"Parentesco", sorter:"string"},
            {title:"Fec_Nacimiento", field:"Fec_Nacimiento", sorter:"string"},
            {title:"Sexo", field:"Sexo", sorter:"string"},
            {title:"Educacion", field:"Educacion", sorter:"string"},
            {title:"TipoIngreso", field:"TipoIngreso", sorter:"string"},
            {title:"Correo", field:"Correo", sorter:"string"},
            {title:"Celular", field:"Celular", sorter:"string"},
            {title:"Titular", field:"Titular", sorter:"string"},
            {title:"CedulaTitular", field:"CedulaTitular", sorter:"string"},
            {title:"Banco", field:"Banco", sorter:"string"},
            {title:"NumeroCuenta", field:"NumeroCuenta", sorter:"string"},
            {title:"CantidadPersonas", field:"CantidadPersonas", sorter:"string"},
            {title:"Mascotas", field:"Id_Mascotas", sorter:"string"},
            {title:"Usuario", field:"Usuario", sorter:"string"},
            {title:"Fec_Registro", field:"Fec_Registro", sorter:"string"},
            
            /**/
            //{title:"TTTTTTT", field:"BDBDBDBD", sorter:"number"},
        ],
    });
    
    document.getElementById("download-xlsx").addEventListener("click", function(){
        table.download("xlsx", "Reporte-General.xlsx", {sheetName:"Hoja 1"});
    });
}

