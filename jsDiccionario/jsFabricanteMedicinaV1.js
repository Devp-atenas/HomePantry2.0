$("#botonenviar").click(function() {
    if ($("#FormFabricante").valid()) {
        existeFabricante($("#inputFabricante").val().toUpperCase());
    }
});

function existeFabricante(Fabricante) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url": urlApi+'CantidadFabricanteV1/',
        "method": "POST",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        },
        "data": {
            "Fabricante": Fabricante
        }
    }
    $.ajax(settings).done(function(response) {
        if (response.data[0].Cantidad != 0){
            var idCategoria = $('#selectCategoria').val();
            cargarTablaDiccionarioExistente(Fabricante,idCategoria);
            $('#htmlItem').html(Fabricante);
            $('#DiccionarioExistenteModal').modal('show');
        }else{
            ejecutarAgregarFabricante();
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


function ejecutarAgregarFabricante(Fabricante) {
    if ($("#FormFabricante").valid()) {
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": localStorage.getItem("urlApi")+'addNewFabricanteV1',
            "method": "POST",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": 'bearer ' + localStorage.getItem('Token')
            },
            "data": {
                "Id_Categoria": 0, //$("#selectCategoria").val(),
                "Fabricante": $("#inputFabricante").val().toUpperCase(),
                "Ind_Medicina": $('input:radio[name=medicinaAdd]:checked').val(),
                "Ind_MarcaPropia": $('input:radio[name=marcaAdd]:checked').val(),
                "status": $('input:radio[name=activoAdd]:checked').val()
            }
        }
        $.ajax(settings).done(function(response) {
            Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Nuevo Fabricante (IdCategoria): "+$("#inputFabricante").val().replace("'","''"),$("#selectCategoria").val(),"C");
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
            var form = document.querySelector('#FormFabricante');
            form.reset();
            if ($.trim($('#selectCategoriaTabla').val()) != '') {
                let xtable = $('#TableFabricante').DataTable();
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
                var form = document.querySelector('#FormFabricante');
                form.reset();
                window.location = '/homepantry20/index.php';
            }
        })
    }
}


function cargarTablaDiccionarioExistente(Item,idCategoria){
    var msg = "Si de desea agregar el item presione en agregar";
    var flag = false;
    $("#idBotonAgregarFabricante").prop('disabled', false);
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
            "url": localStorage.getItem("urlApi")+'getFabricantesXNombreFabricanteV1/',
            "type": "POST",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "data": {
                "Fabricante": Item
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
            if (data['Categoria'] == idCategoria){
                $('td', row).eq(0).css('color', '#EE0000');
                $('td', row).eq(1).css('color', '#EE0000');
                $('td', row).eq(2).css('color', '#EE0000');
                $("#idBotonAgregarFabricante").prop('disabled', true);
                msg = "El Item ya pertenece a la categoria: "+data['Categoria']+"; no podra ser agregado";
                $('#htmlMensajeModal').html(msg);
            }
            

            $('#htmlMensajeModal').html(msg);
        }
    });
}



function deleteAction(data) {
    var idCategoria = $('#selectCategoriaTabla').val();
    var settings = {
        "url": localStorage.getItem("urlApi")+'getCantidadProducto4IdFabricanteV1/'+data,
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
            deleteFabricante(data);
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


function deleteFabricante(data) {
    Swal.fire({
        title: '¿Estas seguro de eliminar fabricante?',
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
                "url": localStorage.getItem("urlApi")+'deleteFabricanteV1/' + data,
                "method": "get",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": 'bearer ' + localStorage.getItem('Token')
                }
            }
            $.ajax(settings).done(function(response) {
                Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Borrar Fabricante (IdFabricante)",data,"D");
                var DatosJson = JSON.parse(JSON.stringify(response));
                Swal.fire({
                    title: DatosJson.message,
                    width: '250px',
                    height: '25px'
                }).then(function() {
                    let xtable = $('#TableFabricante').DataTable();
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
    document.getElementById('FormFabricante').reset();
    cargarCategoriaMedicina("#selectCategoria",0);
    cargarCategoriaMedicina("#selectCategoriaTabla",0);

    cargarTabla(0);
    $('#TableFabricante').show();


    $('#FormFabricante').validate({
        rules: {
            selectCategoria: {
                required: true,
            },
            inputFabricante: {
                required: true,
                minlength: 2,
                maxlength: 50,
            },
            medicinaAdd: {
                required: true
            },
            marcaAdd: {
                required: true
            },
        },
        messages: {
            selectCategoria: {
                required: "Por favor ingrese la categoria"
            },
            inputFabricante: {
                required: "Por favor ingrese fabricante",
                minlength: "Su fabricante debe tener al menos 2 caracteres",
                maxlength: "Su fabricante debe tener máximo 50 caracteres"
            },
            medicinaAdd: {
                required: "Por favor ingrese medicina"
            },
            marcaAdd: {
                required: "Por favor ingrese marca"
            }
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
    $('#FormFabricanteEdit').validate({
        rules: {
            inputCategoriaEdit: {
                required: true,
            },
            inputFabricanteEdit: {
                required: true
            },
            inputAbreviaturaEdit: {
                required: true
            },
        },
        messages: {
            inputCategoriaEdit: {
                required: "Por favor ingrese la categoria del Fabricante"
            },
            inputFabricanteEdit: {
                required: "Por favor ingrese el nombre del fabricante",
                minlength: "Su nombre debe tener al menos 5 caracteres"
            },
            inputAbreviaturaEdit: {
                required: "Por favor ingrese la abreviatura del Fabricante",
                minlength: "Su nombre debe tener al menos 3 caracteres"
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


// *****
function ActualizarRegistro() {
    if ($("#FormFabricanteEdit").valid()) {
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": localStorage.getItem("urlApi")+'updateFabricanteV1',
            "method": "post",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": 'bearer ' + localStorage.getItem('Token')
            },
            "data": {
                "IdFabricante": $("#inputIdEditFabricante").val(),
                "Fabricante": $("#inputFabricanteEdit").val().toUpperCase(),
                "Ind_Medicina":  $('input:radio[name=medicinaEdit]:checked').val(),
                "Ind_MarcaPropia":  $('input:radio[name=marcaEdit]:checked').val(),
                "activo":  $('input:radio[name=activoEdit]:checked').val()
            }
        }
        $.ajax(settings).done(function(response) {
            Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Actualizar Fabricante (IdFabricante)",$("#inputIdEditFabricante").val(),"U");
            let xtable = $('#TableFabricante').DataTable();
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
            document.getElementById('FormFabricanteEdit').reset();
            var form = document.querySelector('#FormFabricanteEdit');
            form.reset();
            $('#modal-FabricanteEditar').modal('hide');
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
    //debugger;
    document.getElementById('FormFabricanteEdit').reset();
    var settings = {
        "url": localStorage.getItem("urlApi")+'getFabricanteIdV1/' + data,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": 'bearer ' + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        document.getElementById('FormFabricanteEdit').reset();
        var form = document.querySelector('#FormFabricanteEdit');
        form.reset();
        //$('input[name=marcaEdit]').attr('checked',false);
        console.log(response.data[0].id_Fabricante);  
        $('#inputIdEditFabricante').val(response.data[0].id_Fabricante);
        $('#inputFabricanteEdit').val(response.data[0].Fabricante);
        //var oblig = $("input:radio[name='activoEdit']");
        //oblig.filter("[value='"+response.data[0].status+"']").attr('checked', true);
        $("input[name=activoEdit][value='"+response.data[0].status+"']").prop("checked",true);
        
        //var oblig = $("input:radio[name='medicinaEdit']");
        //oblig.filter("[value='"+response.data[0].Ind_Medicina+"']").attr('checked', true);
        $("input[name=medicinaEdit][value='"+response.data[0].Ind_Medicina+"']").prop("checked",true);
        
        //var oblig = $("input:radio[name='marcaEdit']");
        //oblig.filter("[value='"+response.data[0].Ind_MarcaPropia+"']").attr('checked', true);
        $("input[name=marcaEdit][value='"+response.data[0].Ind_MarcaPropia+"']").prop("checked",true);
        $('#modal-FabricanteEditar').modal('show');
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
        "url": localStorage.getItem("urlApi")+'getFabricanteIdV1/' + data,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        },
    }
    $.ajax(settings).done(function(response) {
        $('#inputFabricanteVer').val(response.data[0].Fabricante);
        //var oblig = $("input:radio[name='activoVer']");
        //oblig.filter("[value='"+response.data[0].status+"']").attr('checked', true);
        $("input[name=activoVer][value='"+response.data[0].status+"']").prop("checked",true);
        
        //var oblig = $("input:radio[name='medicinaVer']");
        //oblig.filter("[value='"+response.data[0].Ind_Medicina+"']").attr('checked', true);
        $("input[name=medicinaVer][value='"+response.data[0].Ind_Medicina+"']").prop("checked",true);
        
        //var oblig = $("input:radio[name='marcaVer']");
        //oblig.filter("[value='"+response.data[0].Ind_MarcaPropia+"']").attr('checked', true);
        $("input[name=marcaVer][value='"+response.data[0].Ind_MarcaPropia+"']").prop("checked",true);
        
        Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Consulta Fabricante (IdFabricante)",data,"R");
        $('#modal-FabricanteVisualizar').modal('show');
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

function cargarCategoriaMedicina(etiqueta,idS) {
    var settings = {
        "url": localStorage.getItem("urlApi")+'getAllCategoriasMedicinaV1',
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
            if (response.data[i].id == idS){
            select.append("<option value=" + response.data[i].id + " selected>" + response
                .data[i].nombre + " - "+ response.data[i].id + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id + ">" + response
                .data[i].nombre + " - "+ response.data[i].id + "</option>");
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

function cargarCategoria(etiqueta,edit) {
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
        if (edit == 0){
            select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id_Categoria == edit){
                select.append("<option value=" + response.data[i].id_Categoria + "Seleted>"+response.data[i].Categoria +  " - " +response.data[i]
                .id_Categoria +"</option>");
            }else{
                select.append("<option value=" + response.data[i].id_Categoria + ">"+response.data[i].Categoria +  " - " +response.data[i]
                .id_Categoria +"</option>");
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
    Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Consulta Tabla Fabricantes (IdCategoria)",Id,"R");
    $('#TableFabricante').dataTable({
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
                title: 'Listado de Fabricante - '+$('select[name="selectCategoriaTabla"] option:selected').text()
            }
        ],
        "bPaginate":    false,
        "scrollY":      400,
        "fixedHeader":  true,
        "deferRender":  true,
        "ajax": {
            "url": localStorage.getItem("urlApi")+'getAllFabricante4CategoriaV1/'+Id,
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
                mData: 'id_Fabricante',
                className: "text-center"
            },
            {
                mData: 'Fabricante',
                className: "text-center"
            },
            {
                mData: 'Ind_Medicina',
                className: "text-center"
            },
            {
                mData: 'Ind_MarcaPropia',
                className: "text-center"
            },
            {
                mData: 'status',
                className: "text-center"
            },
        ],
        "columnDefs": [{
            "targets": 5,
            "orderable": true,
            "data": 'id_Fabricante',
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

