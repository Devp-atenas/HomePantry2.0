$(document).ready(function() {
    cargarTablaReporte('#TablaReporte');
});
function cargarTablaReporte(idDivTabla){
    Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Consulta Reporte General",0,"R");

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
            {title:"Id PanelHogar", field:"Id_PanelHogar", sorter:"number", headerFilter:true},
            {title:"Codigo del Hogar", field:"CodigoHogar", sorter:"number", headerFilter:true},
            {title:"Estado", field:"Estado", sorter:"string", headerFilter:true},
            {title:"Ciudad", field:"Ciudad", sorter:"string", headerFilter:true},
            {title:"Municipio", field:"Municipio", sorter:"string", headerFilter:true},
            {title:"Parroquia", field:"Parroquia", sorter:"string", headerFilter:true},
            {title:"Barrio", field:"Barrio", sorter:"string", headerFilter:true},
            {title:"Nombre1", field:"Nombre1", sorter:"string", headerFilter:true},
            {title:"Apellido1", field:"Apellido1", sorter:"string", headerFilter:true},
            {title:"Parentesco", field:"Parentesco", sorter:"string", headerFilter:true},
            {title:"Fec_Nacimiento", field:"Fec_Nacimiento", sorter:"string"},
            {title:"Sexo", field:"Sexo", sorter:"string"},
            {title:"Educacion", field:"Educacion", sorter:"string"},
            {title:"TipoIngreso", field:"TipoIngreso", sorter:"string"},
            {title:"Correo", field:"Correo", sorter:"string", headerFilter:true},
            {title:"Celular", field:"Celular", sorter:"string", headerFilter:true},
            {title:"Titular", field:"Titular", sorter:"string"},
            {title:"CedulaTitular", field:"CedulaTitular", sorter:"string"},
            {title:"Banco", field:"Banco", sorter:"string"},
            {title:"NumeroCuenta", field:"NumeroCuenta", sorter:"string"},
            {title:"CantidadPersonas", field:"CantidadPersonas", sorter:"string", hozAlign:"center"},
            {title:"Mascotas", field:"Id_Mascotas", sorter:"string", hozAlign:"center", formatter:"tickCross"},
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

