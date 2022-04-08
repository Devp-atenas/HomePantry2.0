$(document).ready(function() {
    //cargarPerfil('#selectPerfil',0);
    //.max = new Date().toISOString().split("T")[0];
    //fechaHasta.max = new Date().toISOString().split("T")[0];
    cargarPeriodo('#selectPeriodoActualizacion',0);
    cargarActividad('#selectActividad',0);
    cargarTablaItems('#TablaItems');
    
    
});

function cargarPeriodo(etiqueta,idSeleccionado) {
    var settings = {
        "url":localStorage.getItem("urlApi")+'getAllPeriodo',
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
                    response.data[i].Periodo + "</option>");
            } else {
                selected.append("<option value=" + response.data[i].Id + ">" + response.data[i].Periodo + "</option>");
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

function cargarActividad(etiqueta,idSeleccionado) {
    var settings = {
        "url":localStorage.getItem("urlApi")+'getActividadAbierta',
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
            if (response.data[i].ind_activo == 1) {
                selected.append("<option value=" + response.data[i].Id + " selected>" +
                    response.data[i].Actividad + "</option>");
            } else {
                selected.append("<option value=" + response.data[i].Id + ">" + response.data[i].Actividad + "</option>");
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

function asociarActividadItems(arrayID) {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    })
    swalWithBootstrapButtons.fire({
        title: '¿Seguro desea asociar la Actividad a los Items?',
        text: " ... ",
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText:  'No, Cancelar',
        confirmButtonText: 'Si, Asociar Items',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            var settings = {
                "url": localStorage.getItem("urlApi")+'asociarActividadItems',
                "method": "POST",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
                "data": {
                    "arrayID":arrayID,
                    "idActividad":idArea = $("#selectActividad").val()
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
                //cargarTablaUsuriosPerfil();
                //var//////// form = document.querySelector('#FormUsuarioPerfil');
                //form.reset();
                //cargarUsuarios('#selectUsuario',0);
                //document.getElementById('guardarAsociarPerfilUsuario').disabled = true;
                //$('#selectPerfil').empty();
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

function cargarTablaItems(idDivTabla){
    var table = new Tabulator(idDivTabla, {
        ajaxURL: localStorage.getItem("urlApi")+'getAllItems/',
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
        groupBy:"Paso",
        placeholder:"Datos no encontrados",
        selectable:true,
        locale:true,
        selectablePersistence:true, //make rows selectable
        columns:[
            {formatter:"rowSelection", titleFormatter:"rowSelection", align:"center", headerSort:false},
            {title:"Campos", field:"Item", sorter:"number"},
            {title:"No va", field:"tipo_campohtml", sorter:"number"}
            /**/
            //{title:"TTTTTTT", field:"BDBDBDBD", sorter:"number", headerFilter:"input"},
        ],
    });

    document.getElementById("idGuardarActividadItems").addEventListener("click", function(){
        //alert(row.select());
        var selectedData = table.getSelectedData();
        var arrayID;
        arrayID = jQuery.map(selectedData, function(value, index) {
            return (value.Id);
        });
        
        asociarActividadItems(arrayID);
    });
}

