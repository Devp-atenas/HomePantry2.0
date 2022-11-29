$(document).ready(function() {
    cargarCategoria("#selectCategoria",-1);
});

$('#selectCategoria').change(function(){
    cargarJerarquia('#selectJerarquia',0);
    $('#selectProceso').empty();
    document.getElementById('idBotonGenerar').disabled = true;
});

$('#selectJerarquia').change(function(){
    document.getElementById('idBotonGenerar').disabled = true;
    cargarProceso('#selectProceso',0);
});

$('#selectProceso').change(function(){
    document.getElementById('idBotonGenerar').disabled = false;
});




function cargarTablaHogares(idDivTabla){ 
    var bottomAcciones = function(cell, formatterParams){
        var idPanelHogar = cell.getRow().getData().Id_PanelHogar;
        var idMuestra = cell.getRow().getData().Id_Muestra;
        
        return  "<a id='jjj' href='#' onclick='EditAction("+idPanelHogar+"); return false;' ><i class='bi bi-house-fill' data-toggle='tooltip' data-placement='top' title='Cargar Hogar'></i></a>";
    };
    
    table = new Tabulator(idDivTabla, {
        ajaxURL: localStorage.getItem("urlApi")+'getListaPanelista/',
        ajaxConfig:{
            method:"GET", //set request type to Position
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
        },
        height : "350px" ,
        layout:"fitDataStretch",//,fitDataStretch,fitDataTable",
        progressload : "scroll",
        //paginationSize : 20,
        placeholder:"Datos no encontrados",
        selectable:1,
        selectablePersistence:true, //make rows selectable
        columns:[
            {title:"Id_PanelHogar:", field:"Id_PanelHogar", sorter:"number", headerFilter:true},
            {title:"CodigoHogar", field:"CodigoHogar", sorter:"string", headerFilter:true},
            {title:"Muestra", field:"Id_Muestra", sorter:"string", headerFilter:true},
            {title:"Responsable", field:"NombreR", sorter:"string", headerFilter:true},
            {title:"Cedula", field:"cedulaR", sorter:"number", headerFilter:true},
            {title:"Jefe", field:"NombreJJ", sorter:"string", headerFilter:true},
            {title:"Cedula", field:"cedulaJJ", sorter:"number", headerFilter:true},
            {title:"Acciones",formatter:bottomAcciones, hozAlign:"center", maxWidth : 150}
            
        ],
    });
}

function cargarTablaHogaresPendientes(idDivTabla,idUsuario){
    var bottomAcciones = function(cell, formatterParams){
        var idPanelHogar = cell.getRow().getData().Id_PanelHogar;
        return  "<a id='jjj' href='#' onclick='EditAction("+idPanelHogar+"); return false;' ><i class='bi bi-house-fill' data-toggle='tooltip' data-placement='top' title='Cargar Hogar'></i></a>";
    };
    
    table = new Tabulator(idDivTabla, {
        ajaxURL: localStorage.getItem("urlApi")+'getHogaresPendientesIdUsuario/'+idUsuario,
        ajaxConfig:{
            method:"GET", //set request type to Position
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
        },
        height : "350px" ,
        layout:"fitDataStretch",//,fitDataStretch,fitDataTable",
        progressload : "scroll",
        //paginationSize : 20,
        placeholder:"Datos no encontrados",
        selectable:1,
        selectablePersistence:true, //make rows selectable
        columns:[
            {title:"Id_PanelHogar:", field:"Id_PanelHogar", sorter:"number", headerFilter:true},
            {title:"CodigoHogar", field:"CodigoHogar", sorter:"string", headerFilter:true},
            {title:"Responsable", field:"NombreR", sorter:"string", headerFilter:true},
            {title:"Cedula", field:"cedulaR", sorter:"number", headerFilter:true},
            {title:"Jefe", field:"NombreJJ", sorter:"string", headerFilter:true},
            {title:"Cedula", field:"cedulaJJ", sorter:"number", headerFilter:true},
            {title:"Acciones",formatter:bottomAcciones, hozAlign:"center", maxWidth : 150}
            
        ],
    });
}
