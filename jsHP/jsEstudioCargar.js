$(document).ready(function() {
    var flag = false;
    cargarTablaEstudiosCargar();
    cargarEstudios("#selectEstudio",0);
});

$("#btSubirArchivo").click(function() {
    jQuery('#btSubirArchivo').prop('disabled', true);
        
});

function cargarTablaEstudiosCargar(){
    var cont = 0;
    var urlApi = localStorage.getItem("urlApi");
    var table = new Tabulator("#TablaEstudiosCargar", {
        ajaxURL: urlApi+'getAllEstudios/0',
        ajaxConfig:{
            method:"GET", //set request type to Position
            headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
        },
        layout:"fitDataStretch",
        placeholder:"Datos no encontrados",
        selectable:1, //make rows selectable
        columns:[
            {title:"ID", field:"Id_Estudio", sorter:"string"},
            {title:"Nombre del Estudio", field:"Estudio", sorter:"string"},
            {title:"Indicador Semanal", field:"Ind_Semanal", hozAlign:"center", formatter : "tickCross",  headerFilter:"tickCross",  headerFilterParams:{"tristate":true},headerFilterEmptyCheck:function(value){return value === null}},
            {title:"Indicador Mensual", field:"Ind_Mensual", hozAlign:"center", formatter : "tickCross",  headerFilter:"tickCross",  headerFilterParams:{"tristate":true},headerFilterEmptyCheck:function(value){return value === null}},
            {title:"Cantidad de Hogares", field:"Cantidad_Hogares", hozAlign:"center", sorter:"Number"},
            {title:"Hogares Cargados", field:"Ind_HogaresCargados", hozAlign:"center", formatter : "tickCross",  headerFilter:"tickCross",  headerFilterParams:{"tristate":true},headerFilterEmptyCheck:function(value){return value === null}},,
        ],
    });

    table.on("rowSelectionChanged", function(data, rows){
        var I0;
        if (data.length != 0){
            $('#btSubirArchivo').prop('disabled', false);
        }else{
            $('#btSubirArchivo').prop('disabled', true);
        }



    });




    document.getElementById("btSubirArchivo").addEventListener("click", function(){
        jQuery('#btSubirArchivo').prop('disabled', true);
        //alert(row.select());
        var selectedData = table.getSelectedData();
        var idEstudio;
        var cantidadHogares;
        var flagHogaresCargados = false;
        
        idEstudio = jQuery.map(selectedData, function(value, index) {
            if (value.Ind_HogaresCargados){
                flagHogaresCargados = true;
            }
            return (value.Id_Estudio);
        });

        cantidadHogares = jQuery.map(selectedData, function(value, index) {
            return (value.Cantidad_Hogares);
        });

        if (flagHogaresCargados){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Ya exsiten Hogares cargados, si quiere cargar nuevos hogares a este estudio ingrese en:',
                footer: '<a href="CrearEstudio">Crear Estudios</a>'
            })
        }else{
            var file = $("#file").val();
            var fileName = file.split('\\').pop();
            upLoadFile(file,fileName,idEstudio,cantidadHogares);
        }
        
    });
}

function CargarEstudio_(idConsumoDetalle,idMoneda,tasaCambio,cantidad){
    var precio = eliminarSeparadorMiles($('#inputPromedioR').val());
    const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
    })
    swalWithBootstrapButtons.fire({
        title: 'Desea Actualizar el Precio',
        text: ".. con el Promedio ??",
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText:  'No, Cancelar',
        confirmButtonText: 'Si, Actualizat con Promedio',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            var settings = {
                "url": '<?php echo urlApi; ?>UpdateProductosPendientesPrecioxAll/'+idConsumoDetalle+'/'+idMoneda+'/'+tasaCambio+'/'+precio+'/'+cantidad,
                "method": "get",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
            }
            $.ajax(settings).done(function(response){
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
            var CodigoBarras = $('#selectProductosPendientes').val();
            cargarTabla(CodigoBarras);
            cargarAVG(CodigoBarras);
            cargarModa(CodigoBarras);
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
                    //var form = document.querySelector('#FormUsuariosEdit');
                    //form.reset();
                    //window.location = '/homepantry20/index.php';
                }
            })
        }
    })
}

function upLoadFile(file,fileName,idEstudio,cantidadHogares){
    var urlApi = localStorage.getItem("urlApi"); 
    var formData = new FormData();
    formData.append('file', $("#file")[0].files[0]);
    formData.append('idEstudio',idEstudio);

    var settings = {
        "async": true,
        "crossDomain": true,
        "contentType": false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
        "processData": false, // NEEDED, DON'T OMIT THIS
        "url":urlApi+'fileUploadEstudio',
        "method": "post",
        "headers": {
            //"Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        },
        "data":formData
        /*"data": {
            "file": formData,
            "prueba":3333333
        }*/
    }
    $.ajax(settings).done(function(response) {
        jQuery('#btSubirArchivo').prop('disabled', true);
        readExcell(fileName,idEstudio,cantidadHogares);
        
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

function cargarEstudios(etiqueta,idS) {
    var settings = {
        "url": localStorage.getItem("urlApi")+'getAllEstudiosData/0',
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let select = $(etiqueta);
        select.find("option").remove();
        if (idS == -1){
            select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].Id_Estudio === idS){
            select.append("<option value=" + response.data[i].Id_Estudio + " selected>" + response
                .data[i].Estudio + " - "+ response.data[i].Id_Estudio + "</option>");
            }else{
                select.append("<option value=" + response.data[i].Id_Estudio + ">" + response
                .data[i].Estudio + " - "+ response.data[i].Id_Estudio + "</option>");
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





function readExcell(fileName,idEstudio,cantidadHogares) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url":urlApi+'readExcell',
        "method": "POST",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        },
        "data": {
            "fileName": fileName,
            "idEstudio": idEstudio,
            "cantidadHogares": cantidadHogares,
            
        }
    }
    $.ajax(settings).done(function(response) {
        cargarTablaEstudiosCargar();
        jQuery('#btSubirArchivo').prop('disabled', false);
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
                title: 'Su Session ha Expirado',
                confirmButtonText: `Ok`,
            })
            window.location = '/homepantry20/index.php';
        }
    })
}