$("#botonenviar").click(function() {
    if ($("#FormSegmento").valid()) {
        existeSegmento($("#inputSegmento").val().toUpperCase());
    }
});

function existeSegmento(Segmento) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url": urlApi+'CantidadSegmentoV1/' + Segmento,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        if (response.data[0].Cantidad != 0){
            var idCategoria = $('#selectCategoria').val();
            cargarTablaDiccionarioExistente(Segmento,idCategoria);
            $('#htmlItem').html(Segmento);
            $('#DiccionarioExistenteModal').modal('show');
        }else{
            ejecutarAgregarSegmento();
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

function ejecutarAgregarSegmento(){
    if ($("#FormSegmento").valid()) {
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": localStorage.getItem("urlApi")+'addNewSegmentoV1',
            "method": "POST",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "data": {
                "Id_Categoria": $("#selectCategoria").val(),
                "Segmento": $("#inputSegmento").val(),
                "activo":  $('input:radio[name=activoAdd]:checked').val()
            }
        }
        $.ajax(settings).done(function(response) {
            Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Nuevo Segmento: "+$("#inputSegmento").val(),0,"C");
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
            var form = document.querySelector('#FormSegmento');
            form.reset();
            
            if ($.trim($('#selectCategoriaTabla').val()) != '') {
                let xtable = $('#TableSegmento').DataTable();
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
                var form = document.querySelector('#FormSegmento');
                form.reset();
                window.location = '/homepantry20/index.php';
            }
        })
    }
}


function cargarTablaDiccionarioExistente(Item,idCategoria){
    var msg = "Si de desea agregar el item presione en agregar";
    var flag = false;
    $("#idBotonAgregarSegmento").prop('disabled', false);
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
                title: 'Listado de marcas duplicadas'
            }
        ],
        "bPaginate":    false,
        "scrollY":      '25vh',
        //"fixedHeader":  true,
        //"deferRender":  true,
        "ajax": {
            "url": localStorage.getItem("urlApi")+'getSegmentoXNombreSegmentoV1/' + Item,
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
                $("#idBotonAgregarSegmento").prop('disabled', true);
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
        "url": localStorage.getItem("urlApi")+'getCantidadProducto4IdSegmentoV1/'+data+"/"+idCategoria,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        if (response.data[0].Cant != 0){
            if (response.data[0].Cant == 1){
                msg = "No se puede eliminar el segmento debido a que existe "+response.data[0].Cant
                    +" producto asociado";
            }else{
                msg = "No se puede eliminar el segmento debido a que existen "+response.data[0].Cant
                    +" productos asociados";
            }
            $('#msg').html(msg);
            $('#NosePuedeEliminarModal').modal('show');
        }else{
            deleteSegmento(data);
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



function deleteSegmento(data) {
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
                "url": localStorage.getItem("urlApi")+'deleteSegmentoV1/' + data,
                "method": "get",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
            }
            $.ajax(settings).done(function(response) {
                Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Borrar Segmento (IdSegmento)",data,"D");
                var DatosJson = JSON.parse(JSON.stringify(response));
                Swal.fire({
                    title: DatosJson.message,
                    width: '450px',
                    height: '35px'
                }).then(function() {
                    let xtable = $('#TableSegmento').DataTable();
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
    
    $('#FormSegmento').validate({
        rules: {
            selectCategoria: {
                required: true,
            },
            inputSegmento: {
                required: true,
                minlength: 2,
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
            inputSegmento: {
                required: "Por favor ingrese Segmento",
                minlength: "Su Segmento debe tener al menos 2 caracteres",
                maxlength: "Su Segmento debe tener al menos 50 caracteres"
            },
            inputAbreviatura: {
                required: "Por favor ingrese la abreviatura del Segmento",
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

    $('#FormSegmentoEdit').validate({
        rules: {
            selectCategoriaEdit: {
                required: true,
            },
            inputSegmentoEdit: {
                required: true,
                minlength: 10,
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
            inputSegmentoEdit: {
                required: "Por favor ingrese el nombre de la Segmento",
                minlength: "Su Segmento debe tener al menos 5 caracteres",
                maxlength: "Su Segmento debe tener al menos 50 caracteres"
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
    


    document.getElementById('FormSegmento').reset();
    
});

function deleteAction_(data) {
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
                "url": localStorage.getItem("urlApi")+'deleteSegmentoV1/' + data,
                "method": "get",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
            }
            $.ajax(settings).done(function(response) {
                Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Borrar Segmento (IdSegmento)",data,"D");
                var DatosJson = JSON.parse(JSON.stringify(response));
                Swal.fire({
                    title: DatosJson.message,
                    width: '450px',
                    height: '35px'
                }).then(function() {
                    let xtable = $('#TableSegmento').DataTable();
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
// 33333333
function ActualizarRegistro() {
    if ($("#FormSegmentoEdit").valid()) {
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": localStorage.getItem("urlApi")+'updateSegmentoV1',
            "method": "post",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "data": {
                "Id_Segmento": $("#inputIdEditSegmento").val(),
                "Id_Categoria": $("#selectCategoriaEdit").val(),
                "Segmento": $("#inputSegmentoEdit").val(),
                "activo":  $('input:radio[name=activoEdit]:checked').val()
            }
        }
        $.ajax(settings).done(function(response) {
            Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Actualizar Segmento (IdSegmento)",$("#inputIdEditSegmento").val(),"U");
            let xtable = $('#TableSegmento').DataTable();
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
            var form = document.querySelector('#FormSegmentoEdit');
            form.reset();
            $('#modal-SegmentoEditar').modal('hide');
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
// 9999

// 2222
function EditAction(data) {
    document.getElementById('FormSegmentoEdit').reset();
    var settings = {
        "url": localStorage.getItem("urlApi")+'getSegmentoIdV1/' + data,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        cargarCategoria("#selectCategoriaEdit",response.data[0].Id_Categoria);
        $('#inputSegmentoEdit').val(response.data[0].Segmento);
        var oblig = $("input:radio[name='activoEdit']");
        oblig.filter("[value='"+response.data[0].status+"']").attr('checked', true);
        $('#inputIdEditSegmento').val(response.data[0].Id_Segmento);
        $('#modal-SegmentoEditar').modal('show');
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
// 44444
function VisualizarAction(data) {
    var settings = {
        "url": localStorage.getItem("urlApi")+'getSegmentoIdV1/' + data,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        $('#inputCodigoVer').val(response.data[0].Id_Segmento);
        $('#selectCategoriaVer').val(response.data[0].Categoria);
        $('#inputSegmentoVer').val(response.data[0].Segmento);
        var oblig = $("input:radio[name='activoVer']");
        oblig.filter("[value='"+response.data[0].status+"']").attr('checked', true);
        Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Consulta Segmento (IdCategoria)",data,"R");
        $('#modal-SegmentoVisualizar').modal('show');
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
// 999999
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
    Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Consulta Tabla Segmento (IdCategoria)",Id,"R");
    $('#TableSegmento').dataTable({
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
                title: 'Listado de Segmento - '+$('select[name="selectCategoriaTabla"] option:selected').text()
            }
        ],
        "bPaginate":    false,
        "scrollY":      400,
        "fixedHeader":  true,
        "deferRender":  true,
        "ajax": {
            "url": localStorage.getItem("urlApi")+'getSegmento4CategoriaV1/'+Id,
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
        "aoColumns": [
            {
                mData: 'Id_Segmento',
                className: "text-center"
            },
            {
                mData: 'Categoria',
                className: "text-center"
            },
            {
                mData: 'Segmento',
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
            "data": 'Id_Segmento',
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
