function desactivarHogar(idPanelHogar){
    var settings = {
        "url": localStorage.getItem("urlApi")+'getIdMuestra4IdPanelHogar/' + idPanelHogar,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        
        if (response.data[0].id_muestra != 0){
            $('#hogarPerteneceMuestraModal').modal('show');
        }else{

        }


    }).fail(function(jqXHR, textStatus) {
        if (jqXHR.status == 400) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 10000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                title: 'Su Session ha Expirado',
                confirmButtonText: `Ok`,
            })
            window.location = '/homepantry20/index.php';
        }
    })
}


function cargarTablaHogares(idDivTabla){ 
    var bottomAcciones = function(cell, formatterParams){
        var value = cell.getRow().getData().Id_PanelHogar;
        return  "<a id='jjj' href='#' onclick='EditAction("+value+"); return false;' ><i class='bi bi-house-fill' data-toggle='tooltip' data-placement='top' title='Cargar Hogar'></i></a>"
                +"<a id='jjj' href='#' onclick='desactivarHogar("+value+"); return false;' ><i class='bi bi-file-x text-danger' data-toggle='tooltip' data-placement='top' title='Desactivar Hogar'></i></a>";
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
        var value = cell.getRow().getData().Id_PanelHogar;
        return  "<a id='jjj' href='#' onclick='EditAction("+value+"); return false;' ><i class='bi bi-house-fill' data-toggle='tooltip' data-placement='top' title='Cargar Hogar'></i></a>";
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
