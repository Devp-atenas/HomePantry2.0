$(document).ready(function() {
    cargarTiposAlertas('#selectTipoAlertas',localStorage.getItem("IdUsuario"),0);

});

$('#selectTipoAlertas').change(function(){
    idTipoAlerta = $("#selectTipoAlertas").val();
    if (idTipoAlerta != 2){
        cargarTablaAlertas4TipoAlerta('#TableAlert',idTipoAlerta)
    }else if (idTipoAlerta == 2){
        cargarTablaAlertasFichaIncompleta('#TableAlert');
    }
    
    
});


$('#idResponderAlerta').click(function(){
    var idAlerta = $("#inputId").val();
    var settings = {
        "async": true,
        "crossDomain": true,
        "url":localStorage.getItem("urlApi")+'RespuestaAlerta/',
        "method": "post",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        },
        "data": {
            "idAlerta": idAlerta,
            "Alerta": $("#inputAlerta").val(),
            "RespuestaAlerta": $("#inputRespuestaAlerta").val(),
            "IdUsuario":localStorage.getItem('IdUsuario')
        }
    }
    $.ajax(settings).done(function(response) {
        
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
        Toast.fire({
            icon: 'success',
            title: response.message,
            confirmButtonText: `Ok`,
        })
        var form = document.querySelector('#FormAlerta');
        form.reset();
        idTipoAlerta = $("#selectTipoAlertas").val();
        cargarTablaAlertas4TipoAlerta('#TableAlert',idTipoAlerta)
        $('#modal-responderAlerta').modal('hide');
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
                icon: 'info',
                title: 'Su Session ha Expirado',
                confirmButtonText: `Ok`,
            })
            var form = document.querySelector('#FormUsuariosEdit');
            form.reset();
            window.location = '/homepantry20/index.php';
        }
    })
});

function AlertaFichaIncompleta(idHogar) {
    var settings = {
        "url":localStorage.getItem("urlApi")+'addAlertaFichaIncompleta/'+idHogar,
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
    })
}


function AlertaHogarSinRecalcularNSE(idHogar) {
    var settings = {
        "url":localStorage.getItem("urlApi")+'addAlertaHogarSinRecalcularNSE/'+idHogar,
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
    })
}


function AlertaCambioNSE(idHogar,NSEAnterior,NSENuevo) {
    var settings = {
        "url":localStorage.getItem("urlApi")+'addAlertaCambioNSE/',
        "method": "POST",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        },
        "data": {
            "idHogar": idHogar,
            "NSEAnterior": NSEAnterior,
            "NSENuevo": NSENuevo
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
    })
}


function ListaAlertas(IdUsuario){
    var settings = {
        "url":localStorage.getItem("urlApi")+'getAlertas4Perfil/'+IdUsuario,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        var TT = "";
        var TA = "";
        var Cantidad;
        var CantidadTotal = 0;
        var TipoAlerta;
        var icono;

        for (var i = 0; i < response.data.length; i++) {
            CantidadTotal += Cantidad = response.data[i].Cantidad;
            TipoAlerta = response.data[i].TipoAlerta;
            icono = response.data[i].icono;
            if (TipoAlerta.length > 27){
                TipoAlerta = TipoAlerta.substring(0, 27)+" ...";
            }
            
            TT += '<a href="#" class="dropdown-item">'
            +       '<i class="'+icono+'"></i> '+ TipoAlerta + ' ('+Cantidad+')'
            +     '</a>'
            +     '<div class="dropdown-divider"></div>';
        }

        TA = '<span class="dropdown-item dropdown-header text-primary">'+CantidadTotal+' Alertas Importantes</span>';

        let listAlert = $("#Alertas4Perfil");
        listAlert.append(TT);
        let CantTot = $("#TotalAlertas");
        CantTot.append(TA);
        let AAAA = $("#Total");
        AAAA.append(CantidadTotal);
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

function cargarTiposAlertas(etiqueta,idUsuario,idSeleccionado) {
    var settings = {
        "url":localStorage.getItem("urlApi")+'getTiposAlertas4Perfil/'+idUsuario,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let selected = $(etiqueta);
        selected.find("option").remove();
        if (idSeleccionado == 0){
            selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].Id == idSeleccionado) {
                selected.append("<option value=" + response.data[i].Id + " selected>" +
                    response.data[i].Perfil + "</option>");
            } else {
                selected.append("<option value=" + response.data[i].Id + ">" + response.data[i].TipoAlerta + "</option>");
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

function showVisualizarAlerta(id) {
    var settings = {
        "url": localStorage.getItem("urlApi")+'getAlertaId/' + id,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        if (response.data[0].Id_TipoAlerta == 1){
            if (response.data[0].Ind_RespuestaAlerta){
                $("#inputAlertaVer").val(response.data[0].Alerta);
                $("#inputAlertaResp").val(response.data[0].Alerta);
                $("#inputUsuarioResp").val(response.data[0].nombreUsuario);
                $("#inputRespuestaAlertaResp").val(response.data[0].RespuestaAlerta);
                $('#modal-visualizarRespuestaAlerta').modal('show');
            }else{
                $("#inputAlertaAlert").val(response.data[0].Alerta);
                $("#inputNSEAnteriorAlert").val(response.data[0].NSE_Anterior);
                $("#inputNSENuevoAlert").val(response.data[0].NSE_Nuevo);
                $('#modal-visualizarAlerta').modal('show');
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

function showResponderAlerta(id) {
    var settings = {
        "url": localStorage.getItem("urlApi")+'getAlertaId/' + id,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        $("#inputId").val(id);
        $("#inputAlerta").val(response.data[0].Alerta);
        $('#modal-responderAlerta').modal('show');
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

function cargarTablaAlertas4TipoAlerta(idDivTabla,idTipoAlerta){
    var bottomAcciones = function(cell, formatterParams){
        var id = cell.getRow().getData().id_Alerta;
        var IndRespuestaAlerta = cell.getRow().getData().Ind_RespuestaAlerta;
        var Alerta = cell.getRow().getData().Alerta;
        var IndRespuestaAlerta = cell.getRow().getData().Ind_RespuestaAlerta;
        var botones =  "<a id='fg003' href='#' onclick='showResponderAlerta("+id+")' ><i class='bi bi-reply-fill text-info data-toggle='tooltip' data-placement='top' title='Responder'></i></a>"
                    +" <a id='fg003' href='#' onclick='showVisualizarAlerta("+id+"); return false;' ><i class='bi bi-search text-dark data-toggle='tooltip' data-placement='top' title='Visualizar'></i></a> ";

        if (!IndRespuestaAlerta){
            return botones;
        }else{
            return "<a id='fg003' href='#' onclick='showVisualizarAlerta("+id+"); return false;' ><i class='bi bi-search text-dark data-toggle='tooltip' data-placement='top' title='Ver respuesta'></i></a> ";
        }
    };

    table = new Tabulator(idDivTabla, {
        ajaxURL: localStorage.getItem("urlApi")+'getAlertas4TipoAlerta/'+idTipoAlerta,
        renderVerticalBuffer:600,
        ajaxConfig:{
            method:"GET", //set request type to Position
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
        },
        height : "280px" ,
        layout:"fitDataTable",//fitDataTable",
        progressload : "scroll",
        groupBy:"Alerta",
        placeholder:"Datos no encontrados",
        selectable:false,
        locale:true,
        selectablePersistence:true, //make rows selectable
        columns:[
            {title:"Informacion", field:"Ind_RespuestaAlerta", hozAlign:"center", formatter:function(cell, formatterParams){
                var Ind_RespuestaAlerta = cell.getRow().getData().Ind_RespuestaAlerta;

                if (Ind_RespuestaAlerta){
                    return "<i class='bi bi-chat-text text-info'></i>";
                }else{
                    return "<i class='bi bi-bell text-danger'></i>";
                }
            }},
            {title:"Alerta", field:"RespuAlert", sorter:"string"},
            //{title:"Alerta", field:"Alerta", sorter:"string"},
            //{title:"Respuesta", field:"RespuestaAlerta", sorter:"string"},
            {title:"Referencia", field:"Id_Referencia", sorter:"number"},
            {title:"Usuario", field:"nombreUsuario", hozAlign:"center", formatter:function(cell, formatterParams){
                var Ind_RespuestaAlerta = cell.getRow().getData().Ind_RespuestaAlerta;

                if (Ind_RespuestaAlerta){
                    return cell.getRow().getData().nombreUsuario;
                }else{
                    return "<i class='bi bi-cpu text-dark'></i>";
                }
            }},
            {title:"Fecha de la Alerta", field:"Fec_Ult_Mod", sorter:"number"},
            {formatter:bottomAcciones, hozAlign:"right"}
        ],
    });
}
function cargarTablaAlertasFichaIncompleta(idDivTabla){
    table = new Tabulator(idDivTabla, {
        ajaxURL: localStorage.getItem("urlApi")+'getHogaresFichaIncompleta/',
        ajaxConfig:{
            method:"GET", //set request type to Position
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
        },
        height : "280px" ,
        layout:"fitDataStretch",//,fitDataStretch,fitDataTable",
        progressload : "scroll",
        //paginationSize : 20,
        placeholder:"Datos no encontrados",
        selectable:1,
        selectablePersistence:true, //make rows selectable
        columns:[
            {title:"Creado por:", field:"Creado", sorter:"string", headerFilter:true},
            {title:"Fecha", field:"Fec_Ult_Mod", sorter:"number", headerFilter:true},
            {title:"Id PanelHogar", field:"Id_PanelHogar", sorter:"number", headerFilter:true},
            {title:"CodigoHogar", field:"CodigoHogar", sorter:"string", headerFilter:true},
            {title:"Estado", field:"Estado", sorter:"string", headerFilter:true},
            {title:"Ciudad", field:"Ciudad", sorter:"string", headerFilter:true},
            {title:"Municipio", field:"Municipio", sorter:"string", headerFilter:true},
            {title:"Parroquia", field:"Parroquia", sorter:"string", headerFilter:true},
            {title:"Responsable del hogar", field:"ind_paso2", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"Jefe del Hogar", field:"ind_paso3", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"Composición del hogar", field:"ind_paso4", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"Características y tenencia", field:"ind_paso5", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"Servicios Público", field:"ind_paso6", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"Servicios y equipamiento", field:"ind_paso7", hozAlign:"center", sorter:"number", formatter:"tickCross"},
            {title:"Medios", field:"ind_paso8", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"Vehículos", field:"ind_paso9", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"Mascotas", field:"ind_paso10", sorter:"string", hozAlign:"center", formatter:"tickCross"}
        ],
    });
}
