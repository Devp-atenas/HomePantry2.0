$(document).ready(function() {
    cargarTabla();
    fechaDesde.max = new Date().toISOString().split("T")[0];
    fechaHasta.max = new Date().toISOString().split("T")[0];
    cargarPeriodo('#inputPeriodo',0);


    $('#FormSemana').validate({
        rules: {
            inputCodSemana: {
                required: true,
            },
            inputPeriodo: {
                required: true,
            },
            inputAno: {
                required: true,
            },
            inputMes: {
                required: true,
            },
            fechaDesde: {
                required: true,
            },
            fechaHasta: {
                required: true,
            },
            UltSemAdd: {
                required: true,
            },
            inputDescripcion: {
                required: true,
            },
            inputDolar: {
                required: true,
            },
            inputEuro: {
                required: true,
            },
            inputPetro: {
                required: true,
            },
            inputPeso: {
                required: true,
            },
            inputSemanaCorta: {
                required: true,
            },
            
        },
        messages: {
            inputCodSemana: {
                required: "Por favor ingrese la codigo semana"
            },
            inputPeriodo: {
                required: "Por favor ingrese periodo"
            },
            inputAno: {
                required: "Por favor ingrese la categoria"
            },
            inputMes: {
                required: "Por favor ingrese la categoria"
            },
            fechaDesde: {
                required: "Por favor ingrese la categoria"
            },
            fechaHasta: {
                required: "Por favor ingrese la categoria"
            },
            UltSemAdd: {
                required: "Por favor ingrese la categoria"
            },
            inputDescripcion: {
                required: "Por favor ingrese la categoria"
            },
            inputDolar: {
                required: "Por favor ingrese la categoria"
            },
            inputEuro: {
                required: "Por favor ingrese la categoria"
            },
            inputPetro: {
                required: "Por favor ingrese la categoria"
            },
            inputPeso: {
                required: "Por favor ingrese la categoria"
            },
            inputSemanaCorta: {
                required: "Por favor ingrese la categoria"
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

$("#idGuardarSemana").click(function() {
    if ($("#FormSemana").valid()) {
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": localStorage.getItem("urlApi")+'addNewAtributo1V1____',
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
});





$("#fechaDesdeEdit").datepicker({   
    changeMonth: true,
    changeYear: true,
    minDate: -30*12*70, 
    maxDate: "0D",
    monthNames: ['Enero', 'Febreo', 'Marzo',
    'Abril', 'Mayo', 'Junio',
    'Julio', 'Agosto', 'Septiembre',
    'Octubre', 'Noviembre', 'Diciembre'],
    dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa']
});

$("#fechaHastaEdit").datepicker({
    changeMonth: true,
    changeYear: true,
    minDate: -30*12*70, 
    maxDate: "0D",
    monthNames: ['Enero', 'Febreo', 'Marzo',
    'Abril', 'Mayo', 'Junio',
    'Julio', 'Agosto', 'Septiembre',
    'Octubre', 'Noviembre', 'Diciembre'],
    dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa']


});



function deleteAction_(id){
    alert(id);
}

function deleteAction(id) {
    Swal.fire({
        title: '¿Estas seguro?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: '¡Sí, bórralo!'
    }).then((result) => {
        if (result.isConfirmed) {
            var settings = {
                "url": '<?php echo urlApi; ?>deleteSemanaV1/' + id,
                "method": "get",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
            }
            $.ajax(settings).done(function(response) {
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

function EditAction(id) {
    document.getElementById('FormSemanaEdit').reset();
    var settings = {
        "url": localStorage.getItem("urlApi")+'getSemanaIdV1/' + id,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        fechaDesdeEdit.max = new Date().toISOString().split("T")[0];
        fechaHastaEdit.max = new Date().toISOString().split("T")[0];
        $('#inputCodSemanaEdit').val(response.data[0].IdSemana);
        cargarPeriodo('#inputPeriodoEdit',response.data[0].Id_Periodo);
        $('#inputAnoEdit').val(response.data[0].IdAno);
        $('#inputMesEdit').val(response.data[0].IdMes);

        //$('#fechaDesdeEdit').datePicker().val(response.data[0].Fec_Inicio);
        //$('#fechaHastaEdit').val(response.data[0].Fec_Inicio).datepicker("update");

        $('#fechaDesdeEdit').val(response.data[0].Fec_Inicio);
        $('#fechaHastaEdit').val(response.data[0].Fec_Fin);

        $('#inputDescripcionEdit').val(response.data[0].Semana);
        $('#inputDolarEdit').val(response.data[0].Dolar);
        $('#inputEuroEdit').val(response.data[0].Euro);
        $('#inputPetroEdit').val(response.data[0].Petro);
        $('#inputPesoEdit').val(response.data[0].Peso);
        $('#inputSemanaCortaEdit').val(response.data[0].SemanaCorta);
        //var radios  = $("input:radio[name='UltSemEdit']");
        //radios.filter("[value='"+response.data[0].Ind_Ult+"']").attr('checked', true);
        $("input[name=UltSemEdit][value='"+response.data[0].Ind_Ult+"']").prop("checked",true);
        $('#modal-SemanaEditar').modal('show');
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

function ActualizarRegistro() {
    if ($("#FormAtributoEdit").valid()) {
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": '<?php echo urlApi; ?>updateAtributo3___',
            "method": "post",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "data": {
                "idSemana": $("#inputCodSemanaEdit").val(),
                "idPeriodo": $("#inputPeriodoEdit").val(),
                "Semana": $("#inputDescripcionEdit").val(),
                "idAno": $("#inputAnoEdit").val(),
                "idMes": $("#inputMesEdit").val(),
                "SemanaCorta": $("#inputSemanaCortaEdit").val(),
                "FecInicio": $("#fechaDesdeEdit").val(),
                "FecFin": $("#fechaHastaEdit").val(),
                "UltSem": $('input:radio[name=UltSemEdit]:checked').val(),
                "Dolar": $("#inputDolarEdit").val(),
                "Euro": $("#inputEuroEdit").val(),
                "Petro": $("#inputPetroEdit").val(),
                "Peso": $("#inputPesoEdit").val()
            }
        }
        $.ajax(settings).done(function(response) {
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

//6666666666666666
function VisualizarAction(id) {
    var settings = {
        "url": '<?php echo urlApi; ?>getSemanaIdV1/' + id,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        $('#inputCodigoVer').val(response.data[0].Id_Atributo);
        $('#inputCategoriaVer').val(response.data[0].Categoria);
        //$('#inputAtributoVer').val(response.data[0].Tamano);
        $('#inputAtributoVer').val(response.data[0].Atributo);
        //$('#inputAtributoEdit').val(response.data[0].Tamano);
        //Number.parseFloat(response.data[0].Tamano).toFixed(3);
        var oblig = $("input:radio[name='activoVer']");
        oblig.filter("[value='"+response.data[0].status+"']").attr('checked', true);
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

function cargarTabla(){
    $('#TableSemana').DataTable({
        "lengthMenu": [
            [ -1],
            ["All"]
        ],
        "bDestroy": true,
        "select": true,
        "autoWidth": true,
        "searching": true,
        "bPaginate": false,
        "dom": 'Bfrtip',
        "responsive": false,
        "buttons": [
            {
                extend: 'excelHtml5',
                title: 'Semanas'
            }
        ],
        //"fixedHeader":    true,
        "scrollX":        true,
        "scrollY":        300,
        //"deferRender":    true,
        "scroller":       true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json",
            "decimal": ",",
            "thousands": "."
        },        
        ajax: {
            "url": localStorage.getItem("urlApi")+'getAllSemanaV1',
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
        language: {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        },
        aoColumns: [{
                mData: 'IdSemana',
                className: "text-center"
            },
            {
                mData: 'Id_Periodo',
                className: "text-center"
            },
            {
                mData: 'IdAno',
                className: "text-center"
            },
            {
                mData: 'IdMes',
                className: "text-center"
            },
            {
                mData: 'Fec_Inicio',
                className: "text-center",
            },
            {
                mData: 'Fec_Fin',
                className: "text-center"
            },
            {
                mData: 'Ind_Ult',
                className: "text-center"
            },
            {
                mData: 'Semana',
                className: "text-center"
            },
            {
                mData: 'Dolar',
                className: "text-center",
                render: $.fn.dataTable.render.number( '.', ',', 5 )
            },
            {
                mData: 'Euro',
                className: "text-center",
                render: $.fn.dataTable.render.number( '.', ',', 5 )
            },
            {
                mData: 'Petro',
                className: "text-center",
                render: $.fn.dataTable.render.number( '.', ',', 5 )
            },
            {
                mData: 'Peso',
                className: "text-center",
                render: $.fn.dataTable.render.number( '.', ',', 5 )
            },
            {
                mData: 'SemanaCorta',
                className: "text-center"
            },
        ],
        columnDefs: [{
            "targets": 13,
            "width": "50%",
            "orderable": true,
            "data": 'IdSemana',
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

