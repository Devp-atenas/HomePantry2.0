$(document).ready(function() {
    var urlApi = '<?php echo urlApi; ?>';
    cargarTablaReportePanelistas('#TablaReporte');
    
    //$('#showButton').hide();
});
function cargarTablaReportePanelistas(idDivTabla){
    Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Consulta Reporte Panelistas",0,"R");
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
        columnCalcs:"both",
        height : "400px" ,
        layout:"fitDataStretch",//,fitDataStretch,fitDataTable",
        progressload : "scroll",
        groupBy:"Id_PanelHogar",
        placeholder:"Datos no encontrados",
        selectablePersistence:true, //make rows selectable
        columns:[
            {title:"Id PanelHogar", field:"Id_PanelHogar", sorter:"number", headerFilter:true},
            {title:"Codigo del Hogar", field:"CodigoHogar", sorter:"string", headerFilter:true},
            {title:"Estado", field:"Estado", sorter:"string", headerFilter:true},
            {title:"Ciudad", field:"Ciudad", sorter:"string", headerFilter:true},
            {title:"Municipio", field:"Municipio", sorter:"string", headerFilter:true},
            {title:"Parroquia", field:"Parroquia", sorter:"string", headerFilter:true},
            {title:"Nombre1", field:"Nombre1", sorter:"string", headerFilter:true},
            {title:"Apellido1", field:"Apellido1", sorter:"string", headerFilter:true},
            {title:"Cedula", field:"Cedula", sorter:"number", headerFilter:true},
            {title:"Parentesco", field:"Parentesco", sorter:"string"},
            {title:"Sexo", field:"Sexo", sorter:"string"},
            {title:"Fec_Nacimiento", field:"Fec_Nacimiento", sorter:"string"},
            {title:"Celular", field:"Celular", sorter:"string"},
            {title:"Movilnet", field:"Movilnet", sorter:"string",
                bottomCalc:"sum", topCalcParams:{
                    precision:2
                }
            },
            {title:"Movistar", field:"Movistar", sorter:"string",
                bottomCalc:"sum", topCalcParams:{
                    precision:2
                }
            },
            {title:"Digitel", field:"Digitel", sorter:"string",
                bottomCalc:"sum", topCalcParams:{
                    precision:2
                }
            },
            //{title:"Movistar", field:"Movistar", sorter:"string"},
            //{title:"Digitel", field:"Digitel", sorter:"string"},
            {title:"Titular", field:"Titular", sorter:"string"},
            {title:"CedulaTitular", field:"CedulaTitular", sorter:"number"},
            {title:"Banco", field:"Banco", sorter:"string"},
            {title:"NumeroCuenta", field:"NumeroCuenta", sorter:"string"},
            {title:"Id_Mascotas", field:"Id_Mascotas", sorter:"string", hozAlign:"center", formatter:"tickCross"},
            {title:"Ind_Perro", field:"Ind_Perro", sorter:"string", hozAlign:"center", formatter:"tickCross"},
            {title:"Ind_Ave", field:"Ind_Ave", sorter:"string", hozAlign:"center", formatter:"tickCross"},
            {title:"Ind_Roedor", field:"Ind_Roedor", sorter:"string", hozAlign:"center", formatter:"tickCross"},
            {title:"Ind_Otro", field:"Ind_Otro", sorter:"string", hozAlign:"center", formatter:"tickCross"},
            {title:"ClaseSocial", field:"ClaseSocial", sorter:"string"}
            
        ],
    });

    document.getElementById("download-xlsx").addEventListener("click", function(){
        table.download("xlsx", "ReporteHogaresPanelista.xlsx", {sheetName:"Hoja 1"});
    });
}
