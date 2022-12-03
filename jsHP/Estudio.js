$(document).ready(function() {
    cargarTablaEstudios();
    $('#formNuevoEstudio').validate({
        rules: {
            inputEstudio: {
                required: true,
                minlength: 3,
            },
            inputCantidad: {
                required: true,
                number: true,
                min: 2
            },
            activoAdd: {
                required: true
            },
            frecuencia: {
                required: true
            },
        },
        messages: {
            inputEstudio: {
                required: "Por favor ingrese el nombre del estudio",
                minlength: "Nombre del Estudio debe tener al menos 3 caracteres",
            },
            inputCantidad: {
                required: "Por favor ingrese cantidad de hogares",
                number: "El valor debe ser numerico",
                min: "El estudio debe ser con al menos 2 hogares"
            },
            activoAdd: {
                required: "Por favor ingrese si es activo",
            },
            frecuencia: {
                required: "Por favor indique al menos una frecuencia",
            },
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
    
    $('#FormEstudioEdit').validate({
        rules: {
            inputEstudioEdit: {
                required: true,
                minlength: 3,
            },
            inputCantidadEdit: {
                required: true,
                number: true,
                min: 2
            },
            activoEdit: {
                required: true
            },
            frecuenciaEdit: {
                required: true
            },
        },
        messages: {
            inputEstudioEdit: {
                required: "Por favor ingrese el nombre del estudio",
                minlength: "Nombre del Estudio debe tener al menos 3 caracteres",
            },
            inputCantidadEdit: {
                required: "Por favor ingrese cantidad de hogares",
                number: "El valor debe ser numerico",
                min: "El estudio debe ser con al menos 2 hogares"
            },
            activoEdit: {
                required: "Por favor ingrese si es activo",
            },
            frecuenciaEdit: {
                required: "Por favor indique al menos una frecuencia",
            },
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
    
    
});

$("#btCrearEstudio").click(function() {
    if ($("#formNuevoEstudio").valid()) {
        var urlApi = localStorage.getItem("urlApi");
        var semanal = document.getElementById('semanal').checked ? 1 : 0;
        var mensual = document.getElementById('mensual').checked ? 1 : 0;
        var settings = {
            "async": true,
            "crossDomain": true,
            "url":urlApi+'addNewEstudio',
            "method": "POST",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "data": {
                "estudio": $("#inputEstudio").val(),
                "ind_Semana": semanal,
                "ind_Mensual": mensual,
                "cantidad": $("#inputCantidad").val(),
                "activo":  $('input:radio[name=activoAdd]:checked').val()
            }
        }
        $.ajax(settings).done(function(response) {
            cargarTablaEstudios();
    
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
                icon: 'success',
                title: response.message,
                confirmButtonText: `Ok`,
            })
            var form = document.querySelector('#formNuevoEstudio');
            form.reset();
            cargarTablaEstudios();
            //let xtable = $('#TableAtributo').DataTable();
            //xtable.ajax.reload(null, false);
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
                var form = document.querySelector('#FormAtributo');
                form.reset();
                window.location = '/homepantry20/index.php';
            }
        })
    }
});

$("#btActualizarEstudio").click(function() {
    if ($("#FormEstudioEdit").valid()) {
        var urlApi = localStorage.getItem("urlApi");
        var semanal = document.getElementById('semanalEdit').checked ? 1 : 0;
        var mensual = document.getElementById('mensualEdit').checked ? 1 : 0;
        var settings = {
            "async": true,
            "crossDomain": true,
            "url":urlApi+'updateEstudioId',
            "method": "POST",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "data": {
                "id_Estudio": $("#inputIdEditEstudio").val(),
                "estudio": $("#inputEstudioEdit").val(),
                "ind_Semana": semanal,
                "ind_Mensual": mensual,
                "cantidad": $("#inputCantidadEdit").val(),
                "activo":  $('input:radio[name=activoEdit]:checked').val()
            }
        }
        $.ajax(settings).done(function(response) {
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
                icon: 'success',
                title: response.message,
                confirmButtonText: `Ok`,
            })
            var form = document.querySelector('#formNuevoEstudio');
            form.reset();
            cargarTablaEstudios();
            //let xtable = $('#TableAtributo').DataTable();
            //xtable.ajax.reload(null, false);
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
                var form = document.querySelector('#FormAtributo');
                form.reset();
                window.location = '/homepantry20/index.php';
            }
        })
    }
});


function callUpdateEstudio(id) {
    document.getElementById('FormEstudioEdit').reset();
    var urlApi = localStorage.getItem("urlApi");
    
    var settings = {
        "url":urlApi+'getEstudioId/'+id,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        $('#inputIdEditEstudio').val(response.data[0].Id_Estudio);
        $('#inputEstudioEdit').val(response.data[0].Estudio);
        if(response.data[0].Ind_Semanal == 1){
            $("#semanalEdit").prop("checked", true);
        }
        if(response.data[0].Ind_Mensual == 1){
            $("#mensualEdit").prop("checked", true);
        }
        $('#inputCantidadEdit').val(response.data[0].Cantidad_Hogares);
        var oblig = $("input:radio[name='activoEdit']");
        oblig.filter("[value='"+response.data[0].status+"']").attr('checked', true);
        $('#modalEstudioEditar').modal('show');
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


function callEliminarEstudio(id) {
    var urlApi = localStorage.getItem("urlApi");
    Swal.fire({
        title: '¿Estas seguro de eliminar el estudio?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: '¡Sí, bórralo!'
    }).then((result) => {
        if (result.isConfirmed) {
            var settings = {
                "url":urlApi+'deleteEstudio/'+id,
                "method": "get",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
            }
            $.ajax(settings).done(function(response) {
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
                    icon: 'success',
                    title: response.message,
                    confirmButtonText: `Ok`,
                })
                cargarTablaEstudios();
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
    })
}

function cargarTablaEstudios(){
    var urlApi = localStorage.getItem("urlApi");
    var bottomAcciones = function(cell, formatterParams){
    var id = cell.getRow().getData().Id_Estudio;
    return  "<a id='fg003' href='#' onclick='callUpdateEstudio("+id+"); return false;' ><i class='fas fa-edit text-primary data-toggle='tooltip' data-placement='top' title='Actualizar'></i></a>"
            +"<a id='fg003' href='#' onclick='callEliminarEstudio("+id+"); return false;' ><i class='fa fa-eraser text-danger data-toggle='tooltip' data-placement='top' title='Eliminar'></i></a>";
    };

    var table = new Tabulator("#TablaEstudios", {
        ajaxURL: urlApi+'getAllEstudios/2',
        ajaxConfig:{
            method:"GET", //set request type to Position
            headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
        },
        layout:"fitDataStretch",
        placeholder:"Datos no encontrados",
        selectable:false, //make rows selectable
        columns:[
            {title:"Nombre del Estudio", field:"Estudio", sorter:"string"},
            {title:"Indicador Semanal", field:"Ind_Semanal", hozAlign:"center", formatter : "tickCross",  headerFilter:"tickCross",  headerFilterParams:{"tristate":true},headerFilterEmptyCheck:function(value){return value === null}},,
            {title:"Indicador Mensual", field:"Ind_Mensual", hozAlign:"center", formatter : "tickCross",  headerFilter:"tickCross",  headerFilterParams:{"tristate":true},headerFilterEmptyCheck:function(value){return value === null}},,
            {title:"Cantidad de Hogares", field:"Cantidad_Hogares", hozAlign:"center", sorter:"Number"},
            {title:"Status", field:"Ind_Activo", hozAlign:"center", formatter : "tickCross",  headerFilter:"tickCross",  headerFilterParams:{"tristate":true},headerFilterEmptyCheck:function(value){return value === null}},,
            {title:"Hogares Cargados", field:"Ind_HogaresCargado", hozAlign:"center", formatter : "tickCross",  headerFilter:"tickCross",  headerFilterParams:{"tristate":true},headerFilterEmptyCheck:function(value){return value === null}},,
            {formatter:bottomAcciones, hozAlign:"center"}
            
            
            
        ],
    });
}
