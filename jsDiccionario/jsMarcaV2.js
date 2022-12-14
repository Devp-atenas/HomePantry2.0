$("#botonenviar").click(function() {
    if ($("#FormMarca").valid()) {
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": localStorage.getItem("urlApi")+'addNewMarca',
            "method": "POST",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "data": {
                "Id_Categoria": $("#selectCategoria").val(),
                "Id_Fabricante": $("#selectFabricante").val(),
                "Marca": $("#inputMarca").val(),
                "Ind_Medicina":  $('input:radio[name=medicinaAdd]:checked').val(),
                "Ind_MarcaPropia":  $('input:radio[name=marcaAdd]:checked').val(),
                "activo":  $('input:radio[name=activoAdd]:checked').val()
            }
        }
        $.ajax(settings).done(function(response) {
            Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Nueva Marca: "+$("#inputMarca").val(),0,"C");
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
});

$(document).ready(function() {
    cargarCategoria("#selectCategoria",-1);
    cargarCategoria("#selectCategoriaTabla",-1);

    $('#FormMarcaEdit').validate({
        rules: {
            selectCategoriaEdit: {
                required: true,
            },
            selectFabricanteEdit: {
                required: true
            },
            inputMarcaEdit: {
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
            selectFabricanteEdit: {
                required: "Por favor ingrese el Fabricante"
            },
            inputMarcaEdit: {
                required: "Por favor ingrese el nombre de la Marca",
                minlength: "Su marca debe tener al menos 5 caracteres",
                maxlength: "Su marca debe tener al menos 50 caracteres"
            },
            inputAbreviaturaEdit: {
                required: "Por favor ingrese la abreviatura de la Marca",
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
    
    $('#FormMarca').validate({
        rules: {
            selectCategoria: {
                required: true,
            },
            selectFabricante: {
                required: true,
            },
            inputMarca: {
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
            selectFabricante: {
                required: "Por favor ingrese el fabricante"
            },
            inputMarca: {
                required: "Por favor ingrese la categoria del Marca",
                minlength: "Su marca debe tener al menos 5 caracteres",
                maxlength: "Su marca debe tener al m??ximo 50 caracteres"
            },
            inputAbreviatura: {
                required: "Por favor ingrese la abreviatura del Marca",
                minlength: "Su abrevitura debe tener al menos 3 caracteres",
                maxlength: "Su abreviatura debe tener al m??ximo 5 caracteres"
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
    Swal.fire({
        title: '??Estas seguro?',
        text: "??No podr??s revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText:  'No, Cancelar',
        confirmButtonText: '??S??, b??rralo!',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            var settings = {
                "url": localStorage.getItem("urlApi")+'deleteMarca/' + data,
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

function cargarFabricanteEdit(id_Fabricante) {

    var settings = {
        "url": localStorage.getItem("urlApi")+'getAllFabricante/',
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let selectFabricanteEdit = $("#inputFabricanteEdit");
        selectFabricanteEdit.find("option").remove();
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id == id_Fabricante) {
                selectFabricanteEdit.append("<option value=" + response.data[i].id + " selected>" +
                    response.data[i].nombre + "</option>");
            }else{
                selectFabricanteEdit.append("<option value=" + response.data[i].id + ">" + response.data[i].nombre + "</option>");
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

function ActualizarRegistro() {
    if ($("#FormMarcaEdit").valid()) {
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": localStorage.getItem("urlApi")+'updateMarca',
            "method": "post",
            "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
            "data": {
                "Id_Marca": $("#inputIdEditMarca").val(),
                "Id_Categoria": $("#selectCategoriaEdit").val(),
                "Id_Fabricante": $("#selectFabricanteEdit").val(),
                "Marca": $("#inputMarcaEdit").val(),
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
        "url": localStorage.getItem("urlApi")+'getMarcaId/' + data,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        cargarCategoria("#selectCategoriaEdit",response.data[0].Id_Categoria);
        cargarFabricante('#selectFabricanteEdit',response.data[0].Id_Categoria,response.data[0].Id_Fabricante);
        $('#inputIdEditMarca').val(response.data[0].Id_Marca);
        $('#inputMarcaEdit').val(response.data[0].Marca);
        $("#inputCategoriaEdit option[value='"+ response.data[0].Id_Categoria +"']").attr("selected",true);
        //$("#inputFabricanteEdit option[value='"+ response.data[0].id +"']").attr("selected",true);
        var oblig = $("input:radio[name='activoEdit']");
        oblig.filter("[value='"+response.data[0].status+"']").attr('checked', true);
        var oblig = $("input:radio[name='medicinaEdit']");
        oblig.filter("[value='"+response.data[0].Ind_Medicina+"']").attr('checked', true);
        var oblig = $("input:radio[name='marcaEdit']");
        oblig.filter("[value='"+response.data[0].Ind_MarcaPropia+"']").attr('checked', true);

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
        "url": localStorage.getItem("urlApi")+'getMarcaId/' + data,
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

        var oblig = $("input:radio[name='activoVer']");
        oblig.filter("[value='"+response.data[0].status+"']").attr('checked', true);
        var oblig = $("input:radio[name='medicinaVer']");
        oblig.filter("[value='"+response.data[0].Ind_Medicina+"']").attr('checked', true);
        var oblig = $("input:radio[name='marcaVer']");
        oblig.filter("[value='"+response.data[0].Ind_MarcaPropia+"']").attr('checked', true);
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
function cargarCategoria(etiqueta,idS) {
    var settings = {
        "url": localStorage.getItem("urlApi")+'getAllCategoria',
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

function cargarFabricante(etiqueta,idCat,idS) {
    var settings = {
        "url": localStorage.getItem("urlApi")+'getAllFabricantes_x_Categoria/'+idCat,
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
            if (response.data[i].id === idS){
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
        "buttons": ['copy', 'csv', 'excel', 'pdf', 'print'],
        "bPaginate":    false,
        "scrollY":      400,
        "fixedHeader":  true,
        "deferRender":  true,
        "ajax": {
            "url": localStorage.getItem("urlApi")+'getMarca4Categoria/'+Id,
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
            "targets": 6,
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
