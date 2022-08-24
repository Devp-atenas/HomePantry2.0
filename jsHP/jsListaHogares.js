function cargarTablaHogares(idDivTabla){ 
    var bottomAcciones = function(cell, formatterParams){
        var value = cell.getRow().getData().Id_PanelHogar;
        return  "<a id='jjj' href='#' onclick='EditAction("+value+"); return false;' ><i class='bi bi-house-fill' data-toggle='tooltip' data-placement='top' title='Cargar Hogar'></i></a>";
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
            {title:"Responsable", field:"NombreR", sorter:"string", headerFilter:true},
            {title:"Cedula", field:"cedulaR", sorter:"number", headerFilter:true},
            {title:"Jefe", field:"NombreJJ", sorter:"string", headerFilter:true},
            {title:"Cedula", field:"cedulaJJ", sorter:"number", headerFilter:true},
            {title:"Acciones",formatter:bottomAcciones, hozAlign:"center", maxWidth : 150}
            
        ],
    });
}
