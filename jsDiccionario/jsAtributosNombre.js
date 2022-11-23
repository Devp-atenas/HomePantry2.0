$("#botonenviar").click(function() {
    if ($("#FormAtributo").valid()) {
        existeAtributo1($("#inputAtributo").val());
    }
});

function existeAtributo1(Atributo) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url": urlApi+'CantidadAtributo1V1/',
        "method": "POST",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        },
        "data":{
            "Atributo":Atributo
        }
    }
    $.ajax(settings).done(function(response) {
        if (response.data[0].Cantidad != 0){
            var idCategoria = $('#selectCategoria').val();
            cargarTablaDiccionarioExistente(Atributo,idCategoria);
            $('#htmlItem').html(Atributo);
            $('#DiccionarioExistenteModal').modal('show');
        }else{
            ejecutarAgregarAtributo1();
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

function ejecutarAgregarAtributo1() {
    if ($("#FormAtributo").valid()) {
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": localStorage.getItem("urlApi")+'addNewAtributo1V1',
            "method": "POST",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "data": {
                "Id_Categoria": $("#selectCategoria").val(),
                "Atributo": $("#inputAtributo").val().toUpperCase(),
                "activo":  $('input:radio[name=activoAdd]:checked').val()
            }
        }
        $.ajax(settings).done(function(response) {
            $('#DiccionarioExistenteModal').modal('hide');
            Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Nuevo Atributo1: "+$("#inputAtributo").val(),0,"C");
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
            var form = document.querySelector('#FormAtributo');
            form.reset();
            if ($.trim($('#selectCategoriaTabla').val()) != '') {
                let xtable = $('#TableAtributo').DataTable();
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
                var form = document.querySelector('#FormAtributo');
                form.reset();
                window.location = '/homepantry20/index.php';
            }
        })
    }
}


function cargarTablaDiccionarioExistente(Item,idCategoria){
    var msg = "Si de desea agregar el item presione en agregar";
    $("#idBotonAgregarAtributo1").prop('disabled', false);
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
        "scrollY":      '30vh',
        //"fixedHeader":  true,
        //"deferRender":  true,
        "ajax": {
            "url": localStorage.getItem("urlApi")+'getAtributo1XNombreAtributo1V1/',
            "type": "POST",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "data":{
                "Atributo":Item
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
                $("#idBotonAgregarAtributo1").prop('disabled', true);
                msg = "El Item ya pertenece a la categoria: "+data['Categoria']+"; no podra ser agregado";
                $('#htmlMensajeModal').html(msg);
            }
            $('#htmlMensajeModal').html(msg);
        }
    });
}


function deleteAction(data) {
    var idCategoria = $('#selectCategoriaTabla').val();
    var msg;
    var settings = {
        "url": localStorage.getItem("urlApi")+'getCantidadProducto4IdAtributo1V1/'+data,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        if (response.data[0].Cant != 0){
            if (response.data[0].Cant == 1){
                msg = "No se puede eliminar Atributo debido a que existe "+response.data[0].Cant
                    +" producto asociado";
            }else{
                msg = "No se puede eliminar la marca debido a que existen "+response.data[0].Cant
                    +" productos asociados";
            }
            $('#msg').html(msg);
            $('#NosePuedeEliminarModal').modal('show');
        }else{
            deleteAtributo1(data);
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





$(document).ready(function() {
    
    cargarTabla();
         
    
    cargarCategoria("#selectCategoria",-1);
    cargarCategoria("#selectCategoriaTabla",-1);
    $.validator.addMethod('decimal', function(value, element) {
        return this.optional(element) || /^((\d+(\\.\d{0,3})?)|((\d*(\.\d{1,3}))))$/.test(value);
    }, "Please ingrese a formato de numero correcto, formato 0.000");
    $('#FormAtributoEdit').validate({
        rules: {
            selectCategoriaEdit: {
                required: true,
            },
            inputAtributoEdit: {
                required: true
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
            inputAtributoEdit: {
                required: "Por favor ingrese el Atributo",

            },
            inputAbreviaturaEdit: {
                required: "Por favor ingrese la abreviatura de la Atributo",
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
    $('#FormAtributo').validate({
        rules: {
            selectCategoria: {
                required: true,
            },
            inputAtributo: {
                required: true
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
            inputAtributo: {
                required: "Por favor ingrese el Atributo",
            },
            inputAbreviatura: {
                required: "Por favor ingrese la abreviatura del Atributo",
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
    document.getElementById('FormAtributo').reset();
});

function deleteAtributo1(data) {
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
                "url": localStorage.getItem("urlApi")+'deleteAtributo1V1/' + data,
                "method": "get",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
            }
            $.ajax(settings).done(function(response) {
                Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Borrar Atributo 1 (IdAtributo1)",data,"D");
                var DatosJson = JSON.parse(JSON.stringify(response));
                Swal.fire({
                    title: DatosJson.message,
                    width: '350px',
                    height: '45px'
                }).then(function() {
                    let xtable = $('#TableAtributo').DataTable();
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
// 333333
function ActualizarRegistro() {
    if ($("#FormAtributoEdit").valid()) {
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": localStorage.getItem("urlApi")+'updateAtributo1V1',
            "method": "post",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "data": {
                "Id_Atributo": $("#inputIdEditAtributo").val(),
                "Id_Categoria": $("#selectCategoriaEdit").val(),
                "Atributo": $("#inputAtributoEdit").val().toUpperCase(),
                "activo": $('input:radio[name=activoEdit]:checked').val()
            }
        }
        $.ajax(settings).done(function(response) {
            Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Actualizar Atributo1 (IdAtributo1)",$("#inputIdEditAtributo").val(),"U");
            let xtable = $('#TableAtributo').DataTable();
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
            var form = document.querySelector('#FormAtributoEdit');
            form.reset();
            $('#modal-AtributoEditar').modal('hide');
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
    //document.getElementById('FormAtributoEdit').reset();
    var settings = {
        "url": localStorage.getItem("urlApi")+'getAtributo1IdV1/' + data,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        $('#inputIdEditAtributo').val(response.data[0].Id_Atributo);
        cargarCategoria("#selectCategoriaEdit",response.data[0].Id_Categoria);
        $('#inputAtributoEdit').val(response.data[0].Atributo);
        //var oblig = $("input:radio[name='activoEdit']");
        //oblig.filter("[value='"+response.data[0].status+"']").attr('checked', true);
        $("input[name=activoEdit][value='"+response.data[0].status+"']").prop("checked",true);
        
        Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Consulta Atributo1 (IdAtributo1)",data,"R");
        $('#modal-AtributoEditar').modal('show');
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
//6666666666666666
function VisualizarAction(data) {
    var settings = {
        "url": localStorage.getItem("urlApi")+'getAtributo1IdV1/' + data,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        $('#inputCodigoVer').val(response.data[0].Id_Atributo);
        $('#selectCategoriaVer').val(response.data[0].Categoria);
        $('#inputAtributoVer').val(response.data[0].Atributo);
        //var oblig = $("input:radio[name='activoVer']");
        //oblig.filter("[value='"+response.data[0].status+"']").attr('checked', true);
        $("input[name=activoVer][value='"+response.data[0].status+"']").prop("checked",true);
        
        Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Consulta Atributo1 (IdAtributo1)",data,"R");
        $('#modal-AtributoVisualizar').modal('show');
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


function cargarTabla(){
    //Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Consulta Tabla Atributo3 (IdCategoria)",Id,"R");
    $('#TableAtributosNombre').dataTable({
        "lengthMenu": [
            [ -1],
            ["All"]
        ],
        "bDestroy": true,
        "autoWidth": false,
        "dom": '<"wrapper"flitp><"center"B>',
        "responsive": false,
        "buttons": [
            {
                extend: 'excelHtml5',
                title: 'Nombre Atributos'
            }
        ],
        "bPaginate":    false,
        "scrollY":      400,
        "fixedHeader":  true,
        "deferRender":  true,
        "ajax": {
            "url": localStorage.getItem("urlApi")+'getAllAtributosNombreV1/',
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
                mData: 'Id',
                className: "text-center"
            },
            {
                mData: 'Categoria',
                className: "text-center"
            },
            {
                mData: 'NomAtr01',
                className: "text-center"
            },
            {
                mData: 'NomAtr02',
                className: "text-center"
            },
            {
                mData: 'NomAtr03',
                className: "text-center"
            },
            {
                mData: 'NomAtr04',
                className: "text-center"
            },
            {
                mData: 'NomAtr05',
                className: "text-center"
            },
            {
                mData: 'NomAtr06',
                className: "text-center"
            },
            {
                mData: 'NomAtr07',
                className: "text-center"
            },
            
        ],
        "columnDefs": [{
            "targets": 9,
            "orderable": true,
            "data": 'Id',
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