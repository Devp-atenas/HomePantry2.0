var table;

$(document).ready(function() {
    cargarActividad('#selectActividad',0);
    cargarTablaItems('#TablaItems');
    cargarTabla();
    
    
    //$('#TablaItemsEdit').children().attr('disabled', disabled);
    $("TablaItemsEdit").find("*").attr("disabled", "disabled");
    //table.selectRow([8,9]);
    document.getElementById("bMostrar").addEventListener("click", function(){
        
        cargarItemsActividad();
        //table.deselectRow();
        //table.selectRow([1,2,3,4]);
        //table.selectRow(table.getRows().filter(row => row.getData().id == 11 ));
    });
});

$('#CrearActividad').click(function(){
    addActividad();
});



function cargarItemsActividad() {
    var settings = {
        "url":localStorage.getItem("urlApi")+'getItemsActividadAbierta',
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        //table.selectRow(response.data);
        for (var i = 0; i < response.data.length; i++) {
            table.selectRow(response.data[i].id);
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





function EditAction(id) {
    document.getElementById('FormActividadEdit').reset();
    var settings = {
        "url": localStorage.getItem("urlApi")+'getActividadId/' + id,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        cargarTablaItems('#TablaItemsEdit');
        $('#inputIdEdit').val(response.data[0].id);
        $('#inputActividadEdit').val(response.data[0].Actividad);
        var radios  = $("input:radio[name='abrirEdit']");
        radios.filter("[value='"+response.data[0].ind_abierta+"']").attr('checked', true);
        var radios  = $("input:radio[name='activoEdit']");
        radios.filter("[value='"+response.data[0].ind_activo+"']").attr('checked', true);
        
        
        $('#modal-ActividadEditar').modal('show');

        
        
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

function addActividad() {
    var msg;

    if ($('input:radio[name=abrirAdd]:checked').val() == 1){
        msg = "Si deja abierta esta actividad, automaticamente la que este actualmente abierta se cerrara!";
    }else{
        msg = "...";
    }
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    })
    swalWithBootstrapButtons.fire({
        title: '¿Seguro desea crear la actividad?',
        text: msg,
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText:  'No, Cancelar',
        confirmButtonText: 'Si, Crear Actividad',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            var settings = {
                "url": localStorage.getItem("urlApi")+'addActividad',
                "method": "POST",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
                "data": {
                    "Actividad":$("#inputActividad").val(),
                    "activo": $('input:radio[name=activoAdd]:checked').val(),
                    "abrirActividad": $('input:radio[name=abrirAdd]:checked').val()
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
                cargarActividad('#selectActividad',0);
                cargarTabla();
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
                selected.append("<option value=" + response.data[i].id + " selected>" +
                    response.data[i].Actividad + "</option>");
            } else {
                selected.append("<option value=" + response.data[i].id + ">" + response.data[i].Actividad + "</option>");
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
    table = new Tabulator(idDivTabla, {
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
            {title:"id", field:"id", sorter:"number"},
            {title:"Campos", field:"Item", sorter:"number"},
            {title:"No va", field:"tipo_campohtml", sorter:"number"}
        ],
    });

    document.getElementById("idGuardarActividadItems").addEventListener("click", function(){
        //alert(row.select());
        var selectedData = table.getSelectedData();
        var arrayID;
        arrayID = jQuery.map(selectedData, function(value, index) {
            return (value.id);
        });

        asociarActividadItems(arrayID);
    });
    
//$("#TablaItemsEdit").tabulator("selectRow", 1);
    //table.selectRow(3);
    //table.selectRow(table.getRows().filter(row => row.getData().id == 1));
    //table.getRows().filter(row => row.getData().id == 1).forEach(row => row.toggleSelect());
    
    //table.selectRow(table.getRows().filter(row => row.getData().id == 0 ));
    
    //table.selectRow([1,2,3,4,5,6,7,8,9,10]);
    
    
}

function cargarTabla(){
    $('#TablePerfil').DataTable({
        "lengthMenu": [
            [10, 25, 50, 100, -1],
            [10, 25, 50, 100, "All"]
        ],
        "bDestroy":     true,
        "autoWidth":    true,
        "searching":    false,
        "bPaginate":    false,
        "dom": '<"wrapper"flitp><"center"B>',
        "responsive":   false,
        "buttons": [
            {
                extend: 'excelHtml5',
                title: 'Actividades'
            }
        ],
        "fixedHeader":  true,
        "scrollY":      300,
        "deferRender":  true,
        "scroller":     true,
        "ajax": {
            "url": localStorage.getItem("urlApi")+'getAllActividades/',
            "type": "GET",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "error": function(xhr, error, thrown) {
                if (xhr.status === 403) {
                    var err = JSON.parse(xhr.responseText);
                    Swal.fire({
                        title: err.message,
                        width: '300px',
                        height: '100px'
                    })
                }
                if (xhr.status === 400) {
                    var err = JSON.parse(xhr.responseText);
                    Swal.fire({
                        title: err.message,
                        width: '250px',
                        height: '25px'
                    })
                    window.location.href = '/homepantry20/Principal/logout';
                }
            }
        },
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        },
        "aoColumns": [{
                mData: 'Actividad',
                className: "text-center"
            },
            {
                mData: 'ind_activo',
                className: "text-center"
            },
            {
                mData: 'ind_abierta',
                className: "text-center"
            },
        ],
        "columnDefs": [{
            "targets": 3,
            "orderable": true,
            "data": 'id',
            "className": 'text-center',
            "render": function(data, type, row, meta) {
                return  '<div class="text-wrap width-200">'+
                '<button type="button" class="btn btn-danger btn-sm" onclick="deleteAction(' +
                    data +');"><i class="bi bi-trash3"></i></button>'+
                '<button id="bEdit" type="button" class="btn btn-primary btn-sm" onclick="EditAction(' +
                    data +');"><i class="bi bi-pencil-square"></i></button>'+
                '<button type="button" class="btn btn-info btn-sm" onclick="VisualizarAction(' +
                    data +');"><i class="bi bi-zoom-in"></i></button>'+
                '</div>';
            }
        }],
    });
    
    
   
    
    
}

