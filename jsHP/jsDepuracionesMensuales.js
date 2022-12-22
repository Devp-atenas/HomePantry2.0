var idCategoria;
$(document).ready(function() {
    cargarJerarquia('#selectJerarquia',0);
});

$('#selectJerarquia').change(function(){
    $('#showReporte').hide();
    document.getElementById('siguienteDepuracion').disabled = false;
});

$('#selectCategoriaMarca').change(function(){
    var idCategoriaM = $('#selectCategoriaMarca').val();
    $('#selectMarcaModificar').empty();
    cargarFabricante('#selectFabricante',idCategoriaM,0);
});

$('#selectCategoriaTamano').change(function(){
    var idCategoriaM = $('#selectCategoriaTamano').val();
    $('#selectMarcaModificar').empty();
    cargarTamanoRango('#selectTamanoRangoTR',idCategoriaM,0);
});

$('#selectTamanoRangoTR').change(function(){//--------------
    var idCategoriaM = $('#selectCategoriaTamano').val();
    var idTamanoRango = $('#selectTamanoRangoTR').val();
    $('#selectMarcaModificar').empty();
    cargarTamano('#selectItemModificarTamano',idCategoriaM,0,idTamanoRango);
});

$('#selectFabricante').change(function(){
    var idCategoriaM = $('#selectCategoriaMarca').val();
    var idFabricanteM = $('#selectFabricante').val();
    $('#selectMarcaModificar').empty();
    
    cargarMarca('#selectMarcaModificar',idCategoriaM,idFabricanteM,0);
});

$('#selectCategoriaTR').change(function(){
    var idCategoria = $('#selectCategoriaTR').val();

    switch($('select[name="selectJerarquia"] option:selected').text()) {
        case "Fabricante":
            cargarFabricante('#selectItemModificar',idCategoria,0);
            break;
        case 'Segmento':
            cargarSegmento('#selectItemModificar',idCategoria,0);
            break;
        case 'Rango Tamaño':
            cargarTamanoRango('#selectItemModificar',idCategoria,0);
            break;
        case 'Tamaño':
            cargarTamano('#selectItemModificar',idCategoria,0);
            break;
        default:
            alert('default');
    }
});


$("#siguienteDepuracion").click(function() {
    document.getElementById('formItemModificar').reset();
    $("#formItemModificar")[0].reset();
    var form = document.querySelector('#formItemModificar');
    form.reset();         
    var accion = $('input:radio[name=accionDepurar]:checked').val()
    var TituloCombo;
    var TituloModal;
    
    if (accion == 1){
        switch($('select[name="selectJerarquia"] option:selected').text()) {
            case "Descripcion":
                cargarCategoria('#selectCategoriaTR',-1);
                $('#ItemModificarDescripcionModal').modal('show');
                break;
            case "Fabricante":
                TituloModal = "Modificar fabricante por depuracion";
                TituloCombo = "Fabricante";
                $('#TituloModal').html(TituloModal);
                $('#TituloCombo').html(TituloCombo);
                cargarCategoria('#selectCategoriaTR',-1);
                $('#ItemModificarModal').modal('show');
                break;
            case 'Marca':
                TituloModal = "Modificar marca por depuracion";
                TituloCombo = "Marca";
                $('#TituloModalMarca').html(TituloModal);
                $('#TituloComboMarca').html(TituloCombo);
                cargarCategoria('#selectCategoriaMarca',-1);
                $('#ItemModificarMarcaModal').modal('show');
                break;
            case 'Segmento':
                TituloModal = "Modificar segmento por depuracion";
                TituloCombo = "Segmento";
                $('#TituloModal').html(TituloModal);
                $('#TituloCombo').html(TituloCombo);
                cargarCategoria('#selectCategoriaTR',-1);
                $('#ItemModificarModal').modal('show');
                break;
            case 'Rango Tamaño':
                TituloModal = "Modificar tamaño rango por depuracion";
                TituloCombo = "Tamaño Rango";
                $('#TituloModal').html(TituloModal);
                $('#TituloCombo').html(TituloCombo);
                cargarCategoria('#selectCategoriaTR',-1);
                $('#ItemModificarModal').modal('show');
                break;
            case 'Tamaño':
                TituloModal = "Modificar tamaño por depuracion";
                TituloCombo = "Tamaño";
                $('#TituloModalTamano').html(TituloModal);
                $('#TituloComboTamano').html(TituloCombo);
                cargarCategoria('#selectCategoriaTamano',-1);
                $('#ItemModificarTamanoModal').modal('show');
                break;
            default:
                alert('default');
        }
        
        $('#TituloModal').html(TituloModal);
        $('#TituloCombo').html(TituloCombo);
        
    }else{
        switch($('select[name="selectJerarquia"] option:selected').text()) {
            case "Descripcion":
                cargarTablaDescripcion(localStorage.getItem('IdUsuario'));
                break;
            default:
                cargarTabla($('#selectJerarquia').val(),localStorage.getItem('IdUsuario'));
        }
    }
});





$("#continuarDescripcion").click(function() {
    var CodigoBarra = $('#CodigoBarraDescripcion').val();
    var settings = {                    
        "url":localStorage.getItem("urlApi")+'getProducto4CodigoBarraV1/',
        "method": "post",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        },
        "data": {
            "CodigoBarra": CodigoBarra
        }
    }
    $.ajax(settings).done(function(response){
        
        if (response.data.length != 0){
            $('#inputIdEdit').val(response.data[0].id);
            
            $('#DescripcionActual').val(response.data[0].Producto);
            $('#showDescripciones').show();
        }else{
            alert('No existe Producto')
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
                icon: 'info',
                title: 'Su Session ha Expirado',
                confirmButtonText: `Ok`,
            })
        }
    })
});


$("#Pre-DepurarDescripcion").click(function() {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
        })
        swalWithBootstrapButtons.fire({
            title: "¿Seguro deseas depurar la descripcion del producto?",
            text: " ",
            icon: 'warning',
            showCancelButton: true,
            cancelButtonText:  'No, Cancelar',
            confirmButtonText: 'Si, Depurar',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                var idProducto = $("#inputIdEdit").val();
                var CodigoBarra = $("#CodigoBarraDescripcion").val();
                var descripcionActual = $("#DescripcionActual").val();
                var descripcionNueva = $("#DescripcionNueva").val();
                
                var settings = {                    
                    "url":localStorage.getItem("urlApi")+'updateDescripcionProductoDepuracionV2',
                    "method": "post",
                    "headers": {
                        "Content-Type": "application/x-www-form-urlencoded",
                        "Authorization": "Bearer " + localStorage.getItem('Token')
                    },
                    "data": {
                        "idProducto": idProducto,
                        "CodigoBarra": CodigoBarra,
                        "descripcionActual": descripcionActual,
                        "descripcionNueva": descripcionNueva,
                        "idUsuario":localStorage.getItem('IdUsuario')
                    }
                }
                $.ajax(settings).done(function(response){
                    $("#ItemModificarDescripcionModal").modal("show");
                    cargarTabla($('#selectJerarquia').val(),localStorage.getItem('IdUsuario'));
                    
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
                    }
                })
            }
        })
});

$("#Pre-DepurarTamano").click(function() {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
        })
        swalWithBootstrapButtons.fire({
            title: "¿Seguro deseas depurar?",
            text: " ",
            icon: 'warning',
            showCancelButton: true,
            cancelButtonText:  'No, Cancelar',
            confirmButtonText: 'Si, Depurar',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                var idJerarquia = $("#selectJerarquia").val();
                var Jerarquia = $('select[name="selectJerarquia"] option:selected').text();
                var idDim = $("#selectItemModificarTamano").val();
                var descDim = $('select[name="selectItemModificarTamano"] option:selected').text();
                var lineasCB = $('#CodigosBarraTamano').val().split(/\n+/);
                var codigosBarraComa = "";
                var tam = lineasCB.length;
            
                for(var i = 0;i < tam;i++){
                    if (i+1<tam){
                        codigosBarraComa+="'"+$.trim(lineasCB[i])+"',";
                    }else{
                        codigosBarraComa+="'"+$.trim(lineasCB[i])+"'";
                    }
                }
                
                var settings = {                    
                    "url":localStorage.getItem("urlApi")+'updateTamanoDepuracionV2',
                    "method": "post",
                    "headers": {
                        "Content-Type": "application/x-www-form-urlencoded",
                        "Authorization": "Bearer " + localStorage.getItem('Token')
                    },
                    "data": {
                        "idJerarquia": idJerarquia,
                        "Jerarquia": Jerarquia,
                        "idDim": idDim,
                        "descDim": descDim,
                        "codigosBarraComa":codigosBarraComa.replace(",''",""),
                        "idUsuario":localStorage.getItem('IdUsuario'),
                        "idCategoria":$('#selectCategoriaTamano').val()
                    }
                }
                $.ajax(settings).done(function(response){
                    $("#ItemModificarTamanoModal").modal("hide");
                    document.getElementById('formItemModificar').reset();
                    cargarTabla($('#selectJerarquia').val(),localStorage.getItem('IdUsuario'));
                    
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
                    }
                })
            }
        })
});

$("#Pre-DepurarTR").click(function() {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
        })
        swalWithBootstrapButtons.fire({
            title: "¿Seguro deseas depurar?",
            text: " ",
            icon: 'warning',
            showCancelButton: true,
            cancelButtonText:  'No, Cancelar',
            confirmButtonText: 'Si, Depurar',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                var idJerarquia = $("#selectJerarquia").val();
                var Jerarquia = $('select[name="selectJerarquia"] option:selected').text();
                var idDim = $("#selectItemModificar").val();
                var descDim = $('select[name="selectItemModificar"] option:selected').text();
                var lineasCB = $('#CodigosBarraTR').val().split(/\n+/);
                var codigosBarraComa = "";
                var tam = lineasCB.length;
            
                for(var i = 0;i < tam;i++){
                    if (i+1<tam){
                        codigosBarraComa+="'"+$.trim(lineasCB[i])+"',";
                    }else{
                        codigosBarraComa+="'"+$.trim(lineasCB[i])+"'";
                    }
                }
                var API;

                switch($('select[name="selectJerarquia"] option:selected').text()) {
                    case "Fabricante":
                        API = localStorage.getItem("urlApi")+'updateFabricanteDepuracionV2'
                        break;
                    case 'Marca':
                        API = localStorage.getItem("urlApi")+'updateMarcaDepuracionV2'
                        break;
                    case 'Segmento':
                        API = localStorage.getItem("urlApi")+'updateSegmentoDepuracionV2'
                        break;
                    case 'Rango Tamaño':
                        API = localStorage.getItem("urlApi")+'updateTamanoRangoDepuracionV2'
                        break;
                    case 'Tamaño':
                        API = localStorage.getItem("urlApi")+'updateTamanoDepuracionV2'
                        break;
                    default:
                        alert('default');
                }

                var settings = {                    
                    "url":API,
                    "method": "post",
                    "headers": {
                        "Content-Type": "application/x-www-form-urlencoded",
                        "Authorization": "Bearer " + localStorage.getItem('Token')
                    },
                    "data": {
                        "idJerarquia": idJerarquia,
                        "Jerarquia": Jerarquia,
                        "idDim": idDim,
                        "descDim": descDim,
                        "codigosBarraComa":codigosBarraComa.replace(",''",""),
                        "idUsuario":localStorage.getItem('IdUsuario'),
                        "idCategoria":$('#selectCategoriaTR').val()
                    }
                }
                $.ajax(settings).done(function(response){
                    $("#ItemModificarModal").modal("hide");
                    document.getElementById('formItemModificar').reset();
                    cargarTabla($('#selectJerarquia').val(),localStorage.getItem('IdUsuario'));
                    
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
                    }
                })
            }
        })
});

$("#Pre-DepurarMarca").click(function() {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
        })
        swalWithBootstrapButtons.fire({
            title: "¿Seguro deseas depurar?",
            text: " ",
            icon: 'warning',
            showCancelButton: true,
            cancelButtonText:  'No, Cancelar',
            confirmButtonText: 'Si, Depurar',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                var idJerarquia = $("#selectJerarquia").val();
                var Jerarquia = $('select[name="selectJerarquia"] option:selected').text();
                var idDim = $("#selectMarcaModificar").val();
                var descDim = $('select[name="selectMarcaModificar"] option:selected').text();
                var lineasCB = $('#CodigosBarraMarca').val().split(/\n+/);
                var codigosBarraComa = "";
                var tam = lineasCB.length;
            
                for(var i = 0;i < tam;i++){
                    if (i+1<tam){
                        codigosBarraComa+="'"+$.trim(lineasCB[i])+"',";
                    }else{
                        codigosBarraComa+="'"+$.trim(lineasCB[i])+"'";
                    }
                }
                
                var settings = {                    
                    "url":localStorage.getItem("urlApi")+'updateMarcaDepuracionV2',
                    "method": "post",
                    "headers": {
                        "Content-Type": "application/x-www-form-urlencoded",
                        "Authorization": "Bearer " + localStorage.getItem('Token')
                    },
                    "data": {
                        "idJerarquia": idJerarquia,
                        "Jerarquia": Jerarquia,
                        "idDim": idDim,
                        "descDim": descDim,
                        "codigosBarraComa":codigosBarraComa.replace(",''",""),
                        "idUsuario":localStorage.getItem('IdUsuario'),
                        "idCategoria":$('#selectCategoriaMarca').val()
                    }
                }
                $.ajax(settings).done(function(response){
                    $("#ItemModificarModal").modal("hide");
                    cargarTabla($('#selectJerarquia').val(),localStorage.getItem('IdUsuario'));
                    
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
                    }
                })
            }
        })
});

function cargarTablaDescripcion(idUsuario){
    $('#showReporte').show();
    $('#ItemModificarModal').modal('hide');
    
    table = new Tabulator("#TableReporte", {
        ajaxURL: localStorage.getItem("urlApi")+'getCambiosMensualesDescripcionV2/'+idUsuario,
        ajaxConfig:{
            method:"GET", //set request type to Position
            headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
        },
        height : "350px" ,
        layout:"fitDataStretch",//,fitDataStretch,fitDataTable",
        progressload : "scroll",
        placeholder:"Datos no encontrados",
        selectablePersistence:true, //make rows selectable
        columns:[
            {title:"Id Producto", field:"Id", sorter:"number"},
            {title:"Codigo Barra", field:"CodBarra", sorter:"string"},
            {title:"Descripcion Actual", field:"Prod", sorter:"string"},
            {title:"Descripcion Nueva", field:"Descr", sorter:"string"}
        ],
    });
}

function cargarTabla(idJerarquia,idUsuario){
    $('#showReporte').show();
    $('#ItemModificarModal').modal('hide');
    
    table = new Tabulator("#TableReporte", {
        ajaxURL: localStorage.getItem("urlApi")+'getCambiosMensuales4JerarquiaV2/'+idJerarquia+"/"+idUsuario,
        ajaxConfig:{
            method:"GET", //set request type to Position
            headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
        },
        height : "350px" ,
        layout:"fitDataStretch",//,fitDataStretch,fitDataTable",
        progressload : "scroll",
        placeholder:"Datos no encontrados",
        selectablePersistence:true, //make rows selectable
        columns:[
            {title:"Id Producto", field:"IdCod", sorter:"number"},
            {title:"Codigo Barra", field:"CodBar", sorter:"string"},
            {title:"Producto", field:"Prod", sorter:"string"},
            {title:"Id Actual", field:"ICod1", sorter:"number"},
            {title:"Descripcion Actual", field:"Desc1", sorter:"string"},
            {title:"Id a Modificar", field:"ICod2", sorter:"number"},
            {title:"Descripcion a Modificar", field:"Desc2", sorter:"string"},
            {title:"Ind_MismaCategoria", field:"Ind_MismaCategoria", formatter:"tickCross"},
        ],
    });
}