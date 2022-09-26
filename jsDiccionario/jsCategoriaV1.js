$("#botonenviar").click(function() {
    if ($("#FormCategoria").valid()) {
        existeCategoria($("#CategoriaAdd").val().toUpperCase());
    }
});

function existeCategoria(Categoria) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url": urlApi+'CantidadCategoriaV1/' + Categoria,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        if (response.data[0].Cantidad != 0){
            cargarTablaDiccionarioExistente(Categoria);
            $('#htmlItem').html(Categoria);
            $('#DiccionarioExistenteModal').modal('show');
        }else{
            ejecutarAgregarCategoria();
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

function ejecutarAgregarCategoria(Fabricante) {

    if ($("#FormCategoria").valid()) {
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": localStorage.getItem("urlApi")+'addNewCategoriaV1',
            "method": "POST",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "data": {
                "Categoria": $("#CategoriaAdd").val().toUpperCase(),
                "ind_Medicina": $('input:radio[name=medicinaAdd]:checked').val(),
                "Factor": $("#inputFactorAdd").val(),
                "Min_Por_Val": $("#inputminimoAdd").val(),
                "Max_Por_Val": $("#inputmaximoAdd").val()
            }
        }
        $.ajax(settings).done(function(response) {
            $('#DiccionarioExistenteModal').modal('hide');
            Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Nueva Categoria: "+$("#CategoriaAdd").val(),0,"C");
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
            var form = document.querySelector('#FormCategoria');
            form.reset();
            let xtable = $('#TableCategoria').DataTable();
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
                var form = document.querySelector('#FormUsuarios');
                form.reset();
                window.location = '/homepantry20/index.php';
            }
        })
    }        
}



function cargarTablaDiccionarioExistente(Item){
    var msg = "Si de desea agregar el item presione en agregar";
    var flag = false;
    $("#idBotonAgregarCategoria").prop('disabled', true);
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
                title: 'Listado de Fabricantes duplicadas'
            }
        ],
        "bPaginate":    false,
        "scrollY":      '25vh',
        //"fixedHeader":  true,
        //"deferRender":  true,
        "ajax": {
            "url": localStorage.getItem("urlApi")+'getCategoriaXNombreCategoriaV1/' + Item,
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
                mData: 'Item',
                className: "text-center"
            },
            {
                mData: 'status',
                className: "text-center"
            }
            
        ],
        "createdRow": function( row, data, dataIndex){
            
            
            msg = "El Item ya existe no podra ser agregado";
            $('#htmlMensajeModal').html(msg);
        }
    });
}



function deleteAction(data) {
    var idCategoria = $('#selectCategoriaTabla').val();
    var settings = {
        "url": localStorage.getItem("urlApi")+'getCantidadProducto4IdCategoriaV1/'+data,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        if (response.data[0].Cant != 0){
            if (response.data[0].Cant == 1){
                msg = "No se puede eliminar Fabricante debido a que existe "+response.data[0].Cant
                    +" producto asociado";
            }else{
                msg = "No se puede eliminar Fabricante debido a que existen "+response.data[0].Cant
                    +" productos asociados";
            }
            $('#msg').html(msg);
            $('#NosePuedeEliminarModal').modal('show');
        }else{
            deleteCategoria(data);
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
            window.location = '/homepantry20/';
        }
    })
}

function deleteCategoria(data) {
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
                "url": localStorage.getItem("urlApi")+'deleteCategoriaV1/' + data,
                "method": "get",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
            }
            $.ajax(settings).done(function(response) {
                Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Borrar Categoria (IdCategoria)",data,"D");
                var DatosJson = JSON.parse(JSON.stringify(response));
                Swal.fire({
                    title: DatosJson.message,
                    width: '400px',
                    height: '25px'
                }).then(function() {
                    let xtable = $('#TableCategoria').DataTable();
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
    cargarTabla();
    document.getElementById('FormCategoria').reset();
    document.getElementById('FormCategoriaEdit').reset();
    //Validacion del Formularios de Nuevo Categoria
    $.validator.addMethod('decimal', function(value, element) {
        return this.optional(element) || /^((\d+(\\.\d{0,2})?)|((\d*(\.\d{1,2}))))$/.test(value);
    }, "Please ingrese a formato de numero correcto, formato 0.00");
    
    $('#FormCategoria').validate({
        rules: {
            CategoriaAdd: {
                required: true,
            },
            inputMinimo: {
                required: true,
                decimal: true
            },
            inputMaximo: {
                required: true,
                decimal: true
            },
            medicinaAdd: {
                required: true
            },
            inputFactorAdd: {
                required: true,
                decimal: true
            },
            inputminimoAdd: {
                required: true,
                decimal: true
            },
            inputmaximoAdd: {
                required: true,
                decimal: true
            }
        },
        messages: {
            CategoriaAdd: {
                required: "Por favor ingrese los nombres del Categoria",
                minlength: "Categoriae debe tener al menos 5 caracteres"
            },
            inputminimoAdd: {
                required: "Por favor ingrese el Minimo de la Categoria",
                decimal: "Please enter a correct number, format 0.00"

            },
            inputmaximoAdd: {
                required: "Por favor ingrese el Maximo de la Categoria",
                decimal: "Please enter a correct number, format 0.00"
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
    //Boton de Guardar Actualizar Categoria
    $('#FormCategoriaEdit').validate({
        rules: {
            inputNombresEdit: {
                required: true,
            },
            inputAbreviaturaEdit: {
                required: true,
                minlength: 3,
                maxlength: 5,
            },
            inputminimoEdit: {
                required: true,
                decimal: true
            },
            inputmaximoEdit: {
                required: true,
                decimal: true
            },
        },
        messages: {
            inputNombresEdit: {
                required: "Por favor ingrese los nombres del Categoria",
                minlength: "Su nombre debe tener al menos 5 caracteres"
            },
            inputAbreviaturaEdit: {
                required: "Por favor ingrese los Abreviatura del Categoria",
                minlength: "Su abreviatura debe tener al minimo 3 caracteres",
                maxlength: "Su abreviatura debe tener al maximo 5 caracteres"
            },
            inputminimoEdit: {
                required: "Por favor ingrese el Minimo de la Categoria",
                decimal: "Please enter a correct number, format 0.00"

            },
            inputmaximoEdit: {
                required: "Por favor ingrese el Maximo de la Categoria",
                decimal: "Please enter a correct number, format 0.00"
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

function VisualizarAction(data) {
    var settings = {
        "url": localStorage.getItem("urlApi")+'getCategoriaIdV1/' + data,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        $('#CategoriaView').val(response.data[0].Categoria);
        var oblig = $("input:radio[name='medicinaView']");
        oblig.filter("[value='"+response.data[0].ind_Medicina+"']").attr('checked', true);
        $('#inputFactorView').val(response.data[0].Factor);
        $('#inputminimoView').val(response.data[0].Min_Por_Val);
        $('#inputmaximoView').val(response.data[0].Max_Por_Val);
        Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Consulta Categoria (IdCategoria)",data,"R");
        $('#modal-CategoriaVisualizar').modal('show');
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
//1111111111111111111111
// -222222222
function EditAction(data) {
    var settings = {
        "url": localStorage.getItem("urlApi")+'getCategoriaIdV1/' + data,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        //$('input[name="medicinaEdit"]').attr('checked', false);
        //$('input[name="medicinaEdit"]').removeAttr('checked');

        $('#idCategoriaEdit').val(response.data[0].Id_Categoria);
        $('#CategoriaEdit').val(response.data[0].Categoria);
        var oblig = $("input:radio[name='medicinaEdit']");
        oblig.filter("[value='"+response.data[0].ind_Medicina+"']").attr('checked', true);
        var oblig = $("input:radio[name='activoEdit']");
        oblig.filter("[value='"+response.data[0].status+"']").attr('checked', true);
        $('#inputFactorEdit').val(response.data[0].Factor);
        $('#inputminimoEdit').val(response.data[0].Min_Por_Val);
        $('#inputmaximoEdit').val(response.data[0].Max_Por_Val);
        $('#modal-CategoriaEditar').modal('show');
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
// 333333333
function ActualizarRegistro() {
    if ($("#FormCategoriaEdit").valid()) {
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": localStorage.getItem("urlApi")+'updateCategoriaV1',
            "method": "post",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "data": {
                "id_Categoria": $("#idCategoriaEdit").val(),
                "Categoria": $("#CategoriaEdit").val().toUpperCase(),
                "ind_Medicina": $('input:radio[name=medicinaEdit]:checked').val(),
                "activo": $('input:radio[name=activoEdit]:checked').val(),
                "Factor": $("#inputFactorEdit").val(),
                "Min_Por_Val": $("#inputminimoEdit").val(),
                "Max_Por_Val": $("#inputmaximoEdit").val()
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
            var form = document.querySelector('#FormCategoriaEdit');
            form.reset();
            $('#modal-CategoriaEditar').modal('hide');
            let xtable = $('#TableCategoria').DataTable();
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
                var form = document.querySelector('#FormCategoriaEdit');
                form.reset();
                window.location = '/homepantry20/index.php';
            }
        })
    }
}

function cargarTabla(){
    Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Consulta Tabla Categorias",0,"R");
    $('#TableCategoria').dataTable({
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
                title: 'Listado de Categoria'
            }
        ],
        "bPaginate":    false,
        "scrollY":      400,
        "fixedHeader":  true,
        "deferRender":  true,
        "ajax": {
            "url": localStorage.getItem("urlApi")+'getAllCategoriaV1',
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
                mData: 'id_Categoria',
                className: "text-center"
            },
            {
                mData: 'Categoria',
                className: "text-center"
            },
            {
                mData: 'Factor',
                render: $.fn.dataTable.render.number('.', ',', 2, ''),
                className: "text-center"
            },
            {
                mData: 'Min_Por_Val',
                render: $.fn.dataTable.render.number('.', ',', 2, ''),
                className: "text-center"
            },
            {
                mData: 'Max_Por_Val',
                render: $.fn.dataTable.render.number('.', ',', 2, ''),
                className: "text-center"
            },
            {
                mData: 'ind_Medicina',
                className: "text-center"
            },
            {
                mData: 'status',
                className: "text-center"
            },
        ],
        "columnDefs": [{
            "targets": 7,
            "orderable": true,
            "data": 'id_Categoria',
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