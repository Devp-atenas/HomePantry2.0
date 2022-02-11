function cargarTablaFunciones(idDivTabla){
    var urlApi = sessionStorage.getItem("urlApi");
    var table = new Tabulator(idDivTabla, {
        ajaxURL: urlApi+'getAllFunciones/',
        renderVerticalBuffer:600,
        ajaxConfig:{
            method:"GET", //set request type to Position
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
        },
        height : "550px" ,
        layout:"fitDataTable",//fitDataTable",
        progressload : "scroll",
        groupBy:"Departamento",
        placeholder:"Datos no encontrados",
        selectable:true,
        locale:true,
        selectablePersistence:true, //make rows selectable
        columns:[
            {formatter:"rowSelection", titleFormatter:"rowSelection", align:"center", headerSort:false},
            {title:"Funcionalidad", field:"funcion", sorter:"number"}
            /**/
            
            //{title:"TTTTTTT", field:"BDBDBDBD", sorter:"number", headerFilter:"input"},
            
        ],
    });
}
