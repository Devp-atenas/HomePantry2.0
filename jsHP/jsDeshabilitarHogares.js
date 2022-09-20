function desactivarHogar(idPanelHogar,idMuestra){
    if (idMuestra != 0){
        $('#modal-hogarPerteneceMuestra').modal('show');
    }else{
        cargarMotivoDeshabilitarHogar('#selectMotivo',0);
        $('#modal-deshabilitarHogar').modal('show');
    }

    
    /*
    
    
    
    
    var settings = {
        "url": localStorage.getItem("urlApi")+'getIdMuestra4IdPanelHogar/' + idPanelHogar,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        
        


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
    })*/
}


function cargarMotivoDeshabilitarHogar(etiqueta,idS) {
    var settings = {
        "url": localStorage.getItem("urlApi")+'getMotivosParaDeshabilitarHogar',
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let select = $(etiqueta);
        select.find("option").remove();
        if (idS == 0){
            select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id === idS){
            select.append("<option value=" + response.data[i].id + " selected>" + response
                .data[i].Motivo + " - "+ response.data[i].id + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id + ">" + response
                .data[i].Motivo + " - "+ response.data[i].id + "</option>");
            }
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
        var idPanelHogar = cell.getRow().getData().Id_PanelHogar;
        var idMuestra = cell.getRow().getData().Id_Muestra;
        
        return  "<a id='jjj' href='#' onclick='EditAction("+idPanelHogar+"); return false;' ><i class='bi bi-house-fill' data-toggle='tooltip' data-placement='top' title='Cargar Hogar'></i></a>&nbsp;"
                +"<a id='jjj' href='#' onclick='desactivarHogar("+idPanelHogar+","+idMuestra+"); return false;' ><i class='bi bi-x-circle-fill text-danger' data-toggle='tooltip' data-placement='top' title='Desactivar Hogar'></i></a>";

        //return  "<a id='jjj' href='#' onclick='EditAction("+idPanelHogar+"); return false;' ><i class='bi bi-house-fill' data-toggle='tooltip' data-placement='top' title='Cargar Hogar'></i></a>";
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
