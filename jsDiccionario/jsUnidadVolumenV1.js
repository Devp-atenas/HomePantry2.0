$("#botonenviar").click(function() {
    if ($("#FormUndMedida").valid()) {
        existeUnidadMedida($("#inputUndMedida").val().toUpperCase());
    }
});

function existeUnidadMedida(UnidadMedida) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url": urlApi+'CantidadUnidadMedidaV1/' + UnidadMedida,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        if (response.data[0].Cantidad != 0){
            var idCategoria = $('#selectCategoria').val();
            cargarTablaDiccionarioExistente(UnidadMedida,idCategoria);
            $('#htmlItem').html(UnidadMedida);
            $('#DiccionarioExistenteModal').modal('show');
        }else{
            ejecutarAgregarUnidadMedida();
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

function ejecutarAgregarUnidadMedida() {
    if ($("#FormUndMedida").valid()) {
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": localStorage.getItem("urlApi")+'addNewUnidaMedidaV1',
            "method": "POST",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "data": {
                "Id_Categoria": $("#selectCategoria").val(),
                "UnidadMedida": $("#inputUndMedida").val().toUpperCase(),
                "activo":  $('input:radio[name=activoAdd]:checked').val()
            }
        }
        $.ajax(settings).done(function(response) {
            Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Nuevo Unidad Volumen: "+$("#inputUndMedida").val(),0,"C");
            $('#DiccionarioExistenteModal').modal('hide');
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
            var form = document.querySelector('#FormUndMedida');
            form.reset();
            let xtable = $('#TableUnidMedida').DataTable();
            xtable.ajax.reload(null, false);
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
                var form = document.querySelector('#FormUndMedida');
                form.reset();
                window.location = '/homepantry20/index.php';
            }
        })
    }
}

function cargarTablaDiccionarioExistente(Item,idCategoria){
    var msg = "Si de desea agregar el item presione en agregar";
    var flag = false;
    $("#idBotonAgregarUnidadMedida").prop('disabled', false);
    $('#TableDiccionarioExistente').dataTable({
        "lengthMenu": [
            [10, 25, 50, 100, -1],
            [10, 25, 50, 100, "All"]
        ],
        "bDestroy": true,
        "autoWidth": true,
        "dom": '<"wrapper"flitp><"center"B>',
        "responsive": false,
        "buttons": [
            {
                extend: 'excelHtml5',
                title: 'Listado de Tamano Rangos duplicadas'
            }
        ],
        "bPaginate":    false,
        "scrollY":      '25vh',
        //"fixedHeader":  true,
        //"deferRender":  true,
        "ajax": {
            "url": localStorage.getItem("urlApi")+'getUnidadMedidasXNombreUnidadMedidaV1/' + Item,
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
        "aoColumns": [
            {
                mData: 'Categoria',
                className: "text-center"
            },
            {
                mData: 'Item',
                className: "text-center"
            },
            {
                mData: 'status',
                className: "text-center"
            }
            
        ],
        "createdRow": function( row, data, dataIndex){
            if (data['Id_Categoria'] == idCategoria){
                $('td', row).eq(0).css('color', '#EE0000');
                $('td', row).eq(1).css('color', '#EE0000');
                $('td', row).eq(2).css('color', '#EE0000');
                $("#idBotonAgregarUnidadMedida").prop('disabled', true);
                //flag = true;
                msg = "El Item ya pertenece a la categoria: "+data['Categoria']+"; no podra ser agregado";
                $('#htmlMensajeModal').html(msg);
            }
            /*if (flag){
                //msg = "El Item ya pertenece a una categoria!!!";
                $('#htmlMensajeModal').html(msg);
            }else{
                msg = "Si de desea agregar el item presione en agregar";
                $('#htmlMensajeModal').html(msg);
            }*/

            $('#htmlMensajeModal').html(msg);
        }
    });
}


function deleteAction(data) {
    var idCategoria = $('#selectCategoriaTabla').val();
    var settings = {
        "url": localStorage.getItem("urlApi")+'getCantidadProducto4IdUnidadMedidaV1/'+data,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        if (response.data[0].Cant != 0){
            if (response.data[0].Cant == 1){
                msg = "No se puede eliminar Unidad Medida rango debido a que existe "+response.data[0].Cant
                    +" producto asociado";
            }else{
                msg = "No se puede eliminar Unidad Medida debido a que existen "+response.data[0].Cant
                    +" productos asociados";
            }
            $('#msg').html(msg);
            $('#NosePuedeEliminarModal').modal('show');
        }else{
            deleteUnidadMedida(data);
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
            window.location = '/homepantry20/index.php/index.php/index.php';
        }
    })
}


function deleteUnidadMedida(data) {
    Swal.fire({
        title: '¿Estas seguro?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText:  'No, Cancelar',
        confirmButtonText: '¡Sí, bórralo!',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            var settings = {
                "url": localStorage.getItem("urlApi")+'deleteUnidadMedidaV1/' + data,
                "method": "get",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
            }
            $.ajax(settings).done(function(response) {
                Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Borrar UnidadVolumen (IdUnidadVolumen)",data,"D");
                var DatosJson = JSON.parse(JSON.stringify(response));
                Swal.fire({
                    title: DatosJson.message,
                    width: '650px',
                    height: '35px'
                }).then(function() {
                    let xtable = $('#TableUnidMedida').DataTable();
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




$(document).ready(function() {
    cargarCategoria("#selectCategoria",-1);
    cargarCategoria("#selectCategoriaTabla",-1);
    
    //cargarTabla();
    
    $('#FormUndMedidaEdit').validate({
        rules: {
            selectCategoriaEdit: {
                required: true,
            },
            inputUndMedidaEdit: {
                required: true,
                minlength: 5,
                maxlength: 20,
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
            inputUndMedidaEdit: {
                required: "Por favor ingrese la Unidad de Medida",
                minlength: "Su Segmento debe tener al menos 5 caracteres",
                maxlength: "Su Segmento debe tener al menos 20 caracteres"
            },
            inputAbreviaturaEdit: {
                required: "Por favor ingrese la abreviatura de la Unidad de Medida",
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
    $('#FormUndMedida').validate({
        rules: {
            selectCategoria: {
                required: true,
            },
            inputUndMedida: {
                required: true,
                minlength: 2,
                maxlength: 20,
            }
        },
        messages: {
            selectCategoria: {
                required: "Por favor ingrese la categoria"
            },
            inputUndMedida: {
                required: "Por favor ingrese la Unidad de Medida",
                minlength: "Unidad Medida debe tener al menos 5 caracteres",
                maxlength: "Unidad Medida debe ser menor a 20 caracteres"
            },
            inputAbreviatura: {
                required: "Por favor ingrese la abreviatura de la Unidad Medida",
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
    document.getElementById('FormUndMedida').reset();
    
});


function ActualizarRegistro() {
    if ($("#FormUndMedidaEdit").valid()) {
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": localStorage.getItem("urlApi")+'updateUndVolumenV1',
            "method": "post",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "data": {
                "Id_UnidadMedida": $("#inputIdEditUndMedida").val(),
                "Id_Categoria": $("#selectCategoriaEdit").val(),
                "UnidadMedida": $("#inputUndMedidaEdit").val().toUpperCase(),
                "activo":  $('input:radio[name=activoEdit]:checked').val()
            }
        }
        $.ajax(settings).done(function(response) {
            Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Actualizar Unidad Volumen (IdUnidadVolumen)",$("#inputIdEditUndMedida").val(),"U");
            let xtable = $('#TableUnidMedida').DataTable();
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
            var form = document.querySelector('#FormUndMedidaEdit');
            form.reset();
            $('#modal-UndMedidaEditar').modal('hide');
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
    document.getElementById('FormUndMedidaEdit').reset();
    var settings = {
        "url": localStorage.getItem("urlApi")+'getUnidaMedidaIdV1/' + data,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        $('#inputIdEditUndMedida').val(response.data[0].Id_UnidadMedida);
        cargarCategoria("#selectCategoriaEdit",response.data[0].Id_Categoria);
        $('#inputUndMedidaEdit').val(response.data[0].UnidadMedida);
        var oblig = $("input:radio[name='activoEdit']");
        oblig.filter("[value='"+response.data[0].status+"']").attr('checked', true);
        Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Consulta UnidadVolumen (IdUnidadVolumen)",data,"R");
        $('#modal-UndMedidaEditar').modal('show');
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
        "url": localStorage.getItem("urlApi")+'getUnidaMedidaIdV1/' + data,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        $('#inputCodigoVer').val(response.data[0].Id_UnidadMedida);
        $('#selectCategoriaVer').val(response.data[0].Categoria);
        $('#inputUndMedidaVer').val(response.data[0].UnidadMedida);
        var oblig = $("input:radio[name='activoVer']");
        oblig.filter("[value='"+response.data[0].status+"']").attr('checked', true);
        
        
        $('#modal-UndMedidaVisualizar').modal('show');
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
            window.location = '/homepantry20/index.php/index.php/index.php';
        }
    })
}

function cargarTabla(Id){
    Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Consulta Tabla Unidad Volumen",0,"R");
    $('#TableUnidMedida').dataTable({
        "lengthMenu": [
            [10, 25, 50, 100, -1],
            [10, 25, 50, 100, "All"]
        ],
        "bDestroy": true,
        "autoWidth": false,
        "dom": '<"wrapper"flitp><"center"B>',
        "responsive": false,
        "buttons": [
            {
                extend: 'excelHtml5',
                title: 'Listado de Unidad Medida - '+$('select[name="selectCategoriaTabla"] option:selected').text()
            }
        ],
        "bPaginate":    false,
        "scrollY":      400,
        "fixedHeader":  true,
        "deferRender":  true,
        "ajax": {
            "url": localStorage.getItem("urlApi")+'getAllUnidadMedidaV1/'+Id,
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
        "aoColumns": [
            {
                mData: 'Id_UnidadMedida',
                className: "text-center"
            },
            {
                mData: 'Categoria',
                className: "text-center"
            },
            {
                mData: 'UnidadMedida',
                className: "text-center"
            },
            {
                mData: 'status',
                className: "text-center"
            },
        ],
        "columnDefs": [{
            "targets": 4,
            "orderable": true,
            "data": 'Id_UnidadMedida',
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
