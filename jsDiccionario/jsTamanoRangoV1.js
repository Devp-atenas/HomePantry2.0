$("#botonenviar").click(function() {
    if ($("#FormTamRango").valid()) {
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": localStorage.getItem("urlApi")+'addNewTamRangoV1',
            "method": "POST",
            "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
            "data": {
                "Id_Categoria": $("#selectCategoria").val(),
                "TamanoRango": $("#inputTamRango").val(),
                "activo":  $('input:radio[name=activoAdd]:checked').val()
            }
        }
        $.ajax(settings).done(function(response) {
            Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Nuevo tamaño rango: "+$("#inputTamRango").val(),0,"C");
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
            var form = document.querySelector('#FormTamRango');
            form.reset();
            if ($.trim($('#selectCategoriaTabla').val()) != '') {
                let xtable = $('#TableTamRango').DataTable();
                xtable.ajax.reload(null, false);
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
                var form = document.querySelector('#FormTamRango');
                form.reset();
                window.location = '/homepantry20/index.php';
            }
        })
    }
});

$(document).ready(function() {
    cargarCategoria("#selectCategoria",-1);
    cargarCategoria("#selectCategoriaTabla",-1);
    $('#FormTamRangoEdit').validate({
        rules: {
            selectCategoriaEdit: {
                required: true,
            },
            inputTamRangoEdit: {
                required: true,
                minlength: 5,
                maxlength: 50,
            },
            inputAbreviaturaEdit: {
                required: true,
                minlength: 3,
                maxlength: 5,
            },
        },
        messages: {
            selectCategoriaEdit: {
                required: "Por favor ingrese la categoria"
            },
            inputTamRangoEdit: {
                required: "Por favor ingrese el Tamaño Rango",
                minlength: "Su Tamaño Rango debe tener al menos 5 caracteres",
                maxlength: "Su Tamaño Rango debe tener al menos 50 caracteres"
            },
            inputAbreviaturaEdit: {
                required: "Por favor ingrese la abreviatura de la Segmento",
                minlength: "Su Abreviatura debe tener al menos 3 caracteres",
                maxlength: "Su Abreviatura debe tener al menos 5 caracteres"
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
    $('#FormTamRango').validate({
        rules: {
            selectCategoria: {
                required: true,
            },
            inputTamRango: {
                required: true,
                minlength: 5,
                maxlength: 50,
            },
            inputAbreviatura: {
                required: true,
                minlength: 3,
                maxlength: 5,
            },
        },
        messages: {
            selectCategoria: {
                required: "Por favor ingrese la categoria"
            },
            inputTamRango: {
                required: "Por favor ingrese el Tamaño Rango ",
                minlength: "Su Tamaño Rango debe tener al menos 5 caracteres",
                maxlength: "Su Tamaño Rango debe tener al menos 50 caracteres"
            },
            inputAbreviatura: {
                required: "Por favor ingrese la abreviatura del Tamaño Rango",
                minlength: "Su abrevitura debe tener al menos 3 caracteres",
                maxlength: "Su abreviatura debe tener al menos 5 caracteres"
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
    document.getElementById('FormTamRango').reset();
    
});

function deleteAction(data) {
    Swal.fire({
        title: '¿Estas seguro?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: '¡Sí, bórralo!',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            var settings = {
                "url": localStorage.getItem("urlApi")+'deleteTamRangoV1/' + data,
                "method": "get",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
            }
            $.ajax(settings).done(function(response) {
                Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Borrar Tamaño (IdTamanoRango)",data,"D");
                var DatosJson = JSON.parse(JSON.stringify(response));
                Swal.fire({
                    title: DatosJson.message,
                    width: '650px',
                    height: '45px'
                }).then(function() {
                    let xtable = $('#TableTamRango').DataTable();
                    xtable.ajax.reload(null, false);
                });
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

function ActualizarRegistro() {
    if ($("#FormTamRangoEdit").valid()) {
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": localStorage.getItem("urlApi")+'updateTamRangoV1',
            "method": "post",
            "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
            "data": {
                "Id_TamanoRango": $("#inputIdEditTamRango").val(),
                "Id_Categoria": $("#selectCategoriaEdit").val(),
                "TamanoRango": $("#inputTamRangoEdit").val(),
                "activo":  $('input:radio[name=activoEdit]:checked').val()
                
            }
        }
        $.ajax(settings).done(function(response) {
            Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Actualizar Tamano (IdTamanoRango)",$("#inputIdEditTamRango").val(),"U");
            let xtable = $('#TableTamRango').DataTable();
            xtable.ajax.reload(null, false);
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
            var form = document.querySelector('#FormTamRangoEdit');
            form.reset();
            $('#modal-TamRangoEditar').modal('hide');
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
    }
}

function EditAction(data) {
    document.getElementById('FormTamRangoEdit').reset();
    var settings = {
        "url": localStorage.getItem("urlApi")+'getTamRangoIdV1/' + data,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        $('#inputIdEditTamRango').val(response.data[0].Id_TamanoRango);
        cargarCategoria("#selectCategoriaEdit",response.data[0].Id_Categoria);
        $('#inputTamRangoEdit').val(response.data[0].TamanoRango);
        var oblig = $("input:radio[name='activoEdit']");
        oblig.filter("[value='"+response.data[0].status+"']").attr('checked', true);
        $('#inputIdEditSegmento').val(response.data[0].Id_Segmento);
        Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Consulta Tamaño Rango (IdTamanoRango)",data,"R");
        $('#modal-TamRangoEditar').modal('show');
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

function VisualizarAction(data) {
    var settings = {
        "url": localStorage.getItem("urlApi")+'getTamRangoIdV1/' + data,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        $('#inputCodigoVer').val(response.data[0].Id_TamanoRango);
        $('#selectCategoriaVer').val(response.data[0].Categoria);
        $('#inputTamanoRango').val(response.data[0].TamanoRango);
        $('#inputAbreviaturaVer').val(response.data[0].Abreviatura);
        var oblig = $("input:radio[name='activoVer']");
        oblig.filter("[value='"+response.data[0].status+"']").attr('checked', true);
        Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Consulta Tamaño Rango (IdTamanoRango)",data,"R");
        $('#modal-TamRangoVisualizar').modal('show');
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

function cargarCategoria(etiqueta,idS) {
    var settings = {
        "url": localStorage.getItem("urlApi")+'getAllCategoriaV1',
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
            if (response.data[i].id_Categoria === idS){
            select.append("<option value=" + response.data[i].id_Categoria + " selected>" + response
                .data[i].Categoria + " - "+ response.data[i].id_Categoria + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id_Categoria + ">" + response
                .data[i].Categoria + " - "+ response.data[i].id_Categoria + "</option>");
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

function cargarTabla(Id){
    Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Consulta Tabla Tamaño Rango (IdCategoria)",Id,"R");
    $('#TableTamRango').dataTable({
        "lengthMenu": [
            [10, 25, 50, 100, -1],
            [10, 25, 50, 100, "All"]
        ],
        "bDestroy": true,
        "autoWidth": false,
        "dom": '<"wrapper"flitp><"center"B>',
        "responsive": false,
        "buttons": ['copy', 'csv', 'excel', 'pdf', 'print'],
        "bPaginate":    false,
        "scrollY":      400,
        "fixedHeader":  true,
        "deferRender":  true,
        "ajax": {
            "url": localStorage.getItem("urlApi")+'getTamRango4CategoriaV1/'+Id,
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
                    window.location.href = '/retailscannig/Principal/logout';
                }
            }
        },
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        },
        "aoColumns": [{
                mData: 'Categoria',
                className: "text-center"
            },
            {
                mData: 'TamanoRango',
                className: "text-center"
            },
            {
                mData: 'status',
                className: "text-center"
            },
        ],
        "columnDefs": [{
            "targets": 3,
            "orderable": true,
            "data": 'Id_TamanoRango',
            "className": "text-center",
            "render": function(data, type, row, meta) {
                return  '<div class="text-wrap width-200">'+
                            '<button type="button" class="btn btn-danger btn-sm" onclick="deleteAction(' +
                                data +');"><i class="bi bi-trash3"></i></button>'+
                            '<button type="button" class="btn btn-primary btn-sm" onclick="EditAction(' +
                                data +');"><i class="bi bi-pencil-square"></i></button>'+
                            '<button type="button" class="btn btn-info btn-sm" onclick="VisualizarAction(' +
                                data +');"><i class="bi bi-zoom-in"></i></button>'+
                        '</div>';
            }
        }],
    });
}
