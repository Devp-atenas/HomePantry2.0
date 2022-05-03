$(document).ready(function() {
    cargarTiposAlertas('#selectTipoAlertas',localStorage.getItem("IdUsuario"),0);

});

$('#selectTipoAlertas').change(function(){
    idTipoAlerta = $("#selectTipoAlertas").val();
    cargarTablaAlertas4TipoAlerta('#TableAlert',idTipoAlerta)
});

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

function cargarTablaAlertas4TipoAlerta(idDivTabla,idTipoAlerta){
    var bottomAcciones = function(cell, formatterParams){
        var value_ = cell.getValue();
        var id = cell.getRow().getData().Id_Consumo_Detalle_Productos;
        var codiBarra = cell.getRow().getData().Numero_codigo_barras;
        var idMoneda = cell.getRow().getData().id_Moneda;
        var tasaCambio = cell.getRow().getData().Tasa_de_cambio;
        var cantida = cell.getRow().getData().Cantidad;
        var precioProducto = cell.getRow().getData().Precio_producto;
        var total = cell.getRow().getData().total;

        return  "<a id='fg003' href='#' onclick='responderAlerta("+id+","+codiBarra+","+idMoneda+","+tasaCambio+","+cantida+","+precioProducto+","+total+"); return false;' ><i class='bi bi-reply-fill text-info data-toggle='tooltip' data-placement='top' title='Responder'></i></a>"
                +" <a id='fg003' href='#' onclick='VerAlerta("+id+"); return false;' ><i class='bi bi-search text-dark data-toggle='tooltip' data-placement='top' title='Visualizar'></i></a> ";
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
        height : "300px" ,
        layout:"fitDataTable",//fitDataTable",
        progressload : "scroll",
        groupBy:"Alerta",
        placeholder:"Datos no encontrados",
        selectable:true,
        locale:true,
        selectablePersistence:true, //make rows selectable
        columns:[
            {title:"Indicador Respusta Alerta", field:"Ind_RespuestaAlerta", hozAlign:"center", formatter:function(cell, formatterParams){
                var Ind_RespuestaAlerta = cell.getRow().getData().Ind_RespuestaAlerta;

                if (Ind_RespuestaAlerta){
                    return "<i class='bi bi-chat-text text-info'></i>";
                }else{
                    return "<i class='bi bi-bell text-danger'></i>";
                }
            }},
            {title:"Alerta", field:"Alerta", sorter:"string"},
            {title:"Respuesta", field:"RespuestaAlerta", sorter:"string"},
            {title:"Referencia", field:"Id_Referencia", sorter:"number"},
            {title:"Fecha de la Alerta", field:"Fec_Ult_Mod", sorter:"number"},
            {formatter:bottomAcciones, hozAlign:"center"}
        ],
    });
}
