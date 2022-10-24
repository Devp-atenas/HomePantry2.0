$("#botonenviar").click(function() {
    if ($("#FormMarca").valid()) {
        existeMarca($("#inputMarca").val().toUpperCase());
    }
});

function existeMarca(Marca) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url": urlApi+'CantidadMarcaV1/',
        "method": "post",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        },
        "data": {
            "Marca": Marca
        },
    }
    $.ajax(settings).done(function(response) {
        if (response.data[0].Cantidad != 0){
            var idCategoria = $('#selectCategoria').val();
            cargarTablaDiccionarioExistente(Marca,idCategoria);
            $('#htmlItem').html(Marca);
            $('#DiccionarioExistenteModal').modal('show');
        }else{
            ejecutarAgregarMarca();
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

function ejecutarAgregarMarca(){
    if ($("#FormMarca").valid()) {
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": localStorage.getItem("urlApi")+'addNewMarcaV1',
            "method": "POST",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "data": {
                "Id_Categoria": 0,//$("#selectCategoria").val(),
                "Id_Fabricante": $("#selectFabricante").val(),
                "Marca": $("#inputMarca").val().toUpperCase(),
                "Ind_Medicina":  $('input:radio[name=medicinaAdd]:checked').val(),
                "Ind_MarcaPropia":  $('input:radio[name=marcaAdd]:checked').val(),
                "activo":  $('input:radio[name=activoAdd]:checked').val()
            }
        }
        $.ajax(settings).done(function(response) {
            $('#DiccionarioExistenteModal').modal('hide');
            Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Nueva Marca: "+$("#inputMarca").val().replace("'","''"),0,"C");
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
            var form = document.querySelector('#FormMarca');
            form.reset();
            if ($.trim($('#selectCategoriaTabla').val()) != '') {
                let xtable = $('#TableMarca').DataTable();
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
                var form = document.querySelector('#FormUsuariosEdit');
                form.reset();
                window.location = '/homepantry20/index.php';
            }
        })
    }
}

function cargarTablaDiccionarioExistente(Item,idCategoria){
    var msg = "Si de desea agregar el item presione en agregar";
    $("#idBotonAgregarMarca").prop('disabled', false);
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
            "url": localStorage.getItem("urlApi")+'getMarcasXNombreMarcaV1/',
            "type": "POST",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "data": {
                "Marca": Item
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
                $("#idBotonAgregarMarca").prop('disabled', true);
                msg = "El Item ya pertenece a la categoria: "+data['Categoria']+"; no podra ser agregado";
                $('#htmlMensajeModal').html(msg);
            }
            $('#htmlMensajeModal').html(msg);
        }
    });
}

$(document).ready(function() {
    cargarCategoriaMedicina("#selectCategoria",-1);
    cargarCategoriaMedicina("#selectCategoriaTabla",-1);

    cargarTabla(0);
    $('#TableMarca').show();



    $('#FormMarcaEdit').validate({
        rules: {
            selectCategoriaEdit: {
                required: true,
            },
            selectFabricanteEdit: {
                required: true
            },
            medicinaEdit: {
                required: true,
            },
            marcaEdit: {
                required: true,
            },
            inputMarcaEdit: {
                required: true,
                minlength: 2,
                maxlength: 50,
            }
        },
        messages: {
            selectCategoriaEdit: {
                required: "Por favor ingrese la categoria"
            },
            selectFabricanteEdit: {
                required: "Por favor ingrese el Fabricante"
            },
            inputMarcaEdit: {
                required: "Por favor ingrese el nombre de la Marca",
                minlength: "Su marca debe tener al menos 2 caracteres",
                maxlength: "Su marca debe tener al menos 50 caracteres"
            },
            medicinaEdit: {
                required: "Por favor ingrese medicina"
            },
            marcaEdit: {
                required: "Por favor ingrese marca"
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
    
    $('#FormMarca').validate({
        rules: {
            selectCategoria: {
                required: true,
            },
            selectFabricante: {
                required: true,
            },
            medicinaAdd: {
                required: true,
            },
            marcaAdd: {
                required: true,
            },
            inputMarca: {
                required: true,
                minlength: 2,
                maxlength: 50,
            }
        },
        messages: {
            selectCategoria: {
                required: "Por favor ingrese la categoria"
            },
            selectFabricante: {
                required: "Por favor ingrese el fabricante"
            },
            medicinaAdd: {
                required: "Por favor ingrese medicina"
            },
            marcaAdd: {
                required: "Por favor ingrese marca"
            },
            inputMarca: {
                required: "Por favor ingrese la categoria del Marca",
                minlength: "Su marca debe tener al menos 2 caracteres",
                maxlength: "Su marca debe tener al máximo 50 caracteres"
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
    document.getElementById('FormMarca').reset();
});

function deleteAction(data) {
    var idCategoria = $('#selectCategoriaTabla').val();
    var msg;
    var settings = {
        "url": localStorage.getItem("urlApi")+'getCantidadProducto4IdMarcaV1/'+data,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        if (response.data[0].Cant != 0){
            if (response.data[0].Cant == 1){
                msg = "No se puede eliminar la marca debido a que existe "+response.data[0].Cant
                    +" producto asociado";
            }else{
                msg = "No se puede eliminar la marca debido a que existen "+response.data[0].Cant
                    +" productos asociados";
            }
            $('#msg').html(msg);
            $('#NosePuedeEliminarModal').modal('show');
        }else{
            deleteMarca(data);
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

function deleteMarca(data) {
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
                "url": localStorage.getItem("urlApi")+'deleteMarcaV1/' + data,
                "method": "get",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
            }
            $.ajax(settings).done(function(response) {
                Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Borrar Marca (IdMarca)",data,"D");
                var DatosJson = JSON.parse(JSON.stringify(response));
                Swal.fire({
                    title: DatosJson.message,
                    width: '350px',
                    height: '25px'
                }).then(function() {
                    let xtable = $('#TableMarca').DataTable();
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
                    window.location = '/homepantry20/index.php/index.php/index.php';
                }
            })
        }
    })
}

function ActualizarRegistro() {
    if ($("#FormMarcaEdit").valid()) {
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": localStorage.getItem("urlApi")+'updateMarcaV1',
            "method": "post",
            "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
            "data": {
                "Id_Marca": $("#inputIdEditMarca").val(),
                "Id_Categoria": $("#selectCategoriaEdit").val(),
                "Id_Fabricante": $("#selectFabricanteEdit").val(),
                "Marca": $("#inputMarcaEdit").val().toUpperCase(),
                "activo":  $('input:radio[name=activoEdit]:checked').val(),
                "Ind_MarcaPropia":  $('input:radio[name=marcaEdit]:checked').val(),
                "Ind_Medicina":  $('input:radio[name=medicinaEdit]:checked').val()
            }
        }
        $.ajax(settings).done(function(response) {
            Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Actualizar Marca (IdMarca)",$("#inputIdEditMarca").val(),"U");
            let xtable = $('#TableMarca').DataTable();
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
            var form = document.querySelector('#FormMarcaEdit');
            form.reset();
            $('#modal-MarcaEditar').modal('hide');
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
                window.location = '/homepantry20/index.php/index.php/index.php';
            }
        })
    }
}


function EditAction(data) {
    document.getElementById('FormMarcaEdit').reset();
    var settings = {
        "url": localStorage.getItem("urlApi")+'getMarcaIdV1/' + data,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        cargarCategoriaMedicina("#selectCategoriaEdit",response.data[0].Id_Categoria);
        cargarFabricante('#selectFabricanteEdit',response.data[0].Id_Categoria,response.data[0].Id_Fabricante);
        $('#inputIdEditMarca').val(response.data[0].Id_Marca);
        $('#inputMarcaEdit').val($.trim(response.data[0].Marca));
        $("#inputCategoriaEdit option[value='"+ response.data[0].Id_Categoria +"']").attr("selected",true);
        //var oblig = $("input:radio[name='activoEdit']");
        //oblig.filter("[value='"+response.data[0].status+"']").attr('checked', true);
        $("input[name=activoEdit][value='"+response.data[0].status+"']").prop("checked",true);
        
        //var oblig = $("input:radio[name='medicinaEdit']");
        //oblig.filter("[value='"+response.data[0].Ind_Medicina+"']").attr('checked', true);
        $("input[name=medicinaEdit][value='"+response.data[0].Ind_Medicina+"']").prop("checked",true);
    
        //var oblig = $("input:radio[name='marcaEdit']");
        //oblig.filter("[value='"+response.data[0].Ind_MarcaPropia+"']").attr('checked', true);
        $("input[name=marcaEdit][value='"+response.data[0].Ind_MarcaPropia+"']").prop("checked",true);
    
        
        $('#modal-MarcaEditar').modal('show');
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

function VisualizarAction(data) {
    var settings = {
        "url": localStorage.getItem("urlApi")+'getMarcaIdV1/' + data,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        $('#inputCodigoVer').val(response.data[0].Id_Marca);
        $('#inputCategoriaVer').val(response.data[0].Categoria);
        $('#inputMarcaVer').val(response.data[0].Marca);
        $('#inputFabricanteVer').val(response.data[0].nombre);
        $('#inputAbreviaturaVer').val(response.data[0].Abreviatura);
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
        
        Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Consulta Marca (IdCategoria)",data,"R");
        $('#modal-MarcaVisualizar').modal('show');
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
// 9999
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

function cargarFabricante(etiqueta,idCat,idS) {
    var settings = {
        "url": localStorage.getItem("urlApi")+'getAllFabricantes_x_CategoriaV1/'+idCat,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let select = $(etiqueta);
        select.find("option").remove();
        if (idS == 0){
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


function cargarTabla(Id){
    Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Consulta Tabla Marca (IdCategoria)",Id,"R");
    $('#TableMarca').dataTable({
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
                title: 'Listado de Marca - '+$('select[name="selectCategoriaTabla"] option:selected').text()
            }
        ],
        "bPaginate":    false,
        "scrollY":      400,
        "fixedHeader":  true,
        "deferRender":  true,
        "ajax": {
            "url": localStorage.getItem("urlApi")+'getMarca4CategoriaV1/'+Id,
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
                mData: 'Id_Marca',
                className: "text-center"
            },
            {
                mData: 'Categoria',
                className: "text-center"
            },
            {
                mData: 'Fabricante',
                className: "text-center"
            },
            {
                mData: 'Marca',
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
            "targets": 7,
            "orderable": true,
            "data": 'Id_Marca',
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
