var tablAA;
var idSelect;
$(document).ready(function() {
    cargarTabla();
    //cargarPeriodo('#inputPeriodo',0);

    $('#FormCrearUsuario').validate({
        rules: {
            inputApellido: {
                required: true,
            },
            inputNombre: {
                required: true,
            },
            inputCorreo: {
                required: true,
            },
            inputCelular: {
                required: true,
            },
            selectDepartamento: {
                required: true,
            },
            selectPerfil: {
                required: true,
            },
        },
        messages: {
            inputApellido: {
                required: "Por favor ingrese apellido"
            },
            inputNombre: {
                required: "Por favor ingrese nombre"
            },
            inputCorreo: {
                required: "Por favor ingrese correo"
            },
            inputCelular: {
                required: "Por favor ingrese celular"
            },
            selectDepartamento: {
                required: "Por favor ingrese departamento"
            },
            selectPerfil: {
                required: "Por favor ingrese perfil"
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

    $('#FormSemanaEdit').validate({
        rules: {
            inputCodSemanaEdit: {
                required: true,
            },
            inputPeriodoEdit: {
                required: true,
            },
            inputAnoEdit: {
                required: true,
            },
            inputMesEdit: {
                required: true,
            },
            fechaDesdeEdit: {
                required: true,
            },
            fechaHastaEdit: {
                required: true,
            },
            UltSemMesEdit: {
                required: true,
            },
            inputDescripcionEdit: {
                required: true,
            },
            inputDolarEdit: {
                required: true,
                //pattern: "^[1-9]\d*(\.\d+)?$",
            },
            inputEuroEdit: {
                required: true,
            },
            inputPetroEdit: {
                required: true,
            },
            inputPesoEdit: {
                required: true,
            },
            inputSemanaCortaEdit: {
                required: true,
            },
            
        },
        messages: {
            inputCodSemanaEdit: {
                required: "Por favor ingrese la codigo semana"
            },
            inputPeriodoEdit: {
                required: "Por favor ingrese periodo"
            },
            inputAnoEdit: {
                required: "Por favor ingrese año"
            },
            inputMesEdit: {
                required: "Por favor ingrese mes"
            },
            fechaDesdeEdit: {
                required: "Por favor ingrese fecha desde"
            },
            fechaHastaEdit: {
                required: "Por favor ingrese fecha hasta"
            },
            UltSemMesEdit: {
                required: "Por favor ingrese si es ultima semana de mes"
            },
            inputDescripcionEdit: {
                required: "Por favor ingrese descripcion"
            },
            inputDolarEdit: {
                required: "Por favor ingrese dolar",
                pattern: "Formato invalido"
            },
            inputEuroEdit: {
                required: "Por favor ingrese euro"
            },
            inputPetroEdit: {
                required: "Por favor ingrese petro"
            },
            inputPesoEdit: {
                required: "Por favor ingrese peso"
            },
            inputSemanaCortaEdit: {
                required: "Por favor ingrese semana corta"
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

$("#idGuardar").click(function() {           
    if ($("#FormCrearUsuario").valid()) {
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": localStorage.getItem("urlApi")+'addNewSemanaV1____',
            "method": "POST",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "data": {
                "idSemana": $("#inputCodSemana").val(),
                "idPeriodo": $("#inputPeriodo").val(),
                "idAno": $("#inputAno").val(),
                "idMes": $("#inputMes").val(),
                "fechaInicio": $("#fechaDesde").val(),
                "fechaFin": $("#fechaHasta").val(),
                "ultMes":  $('input:radio[name=UltSemMes]:checked').val(),
                "descripcion": $("#inputDescripcion").val(),
                "dolar": $("#inputDolar").val(),
                "euro": $("#inputEuro").val(),
                "petro": $("#inputPetro").val(),
                "peso": $("#inputPeso").val(),
                "semanaCorta": $("#inputSemanaCorta").val()
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

function cargarTabla(){
    tablAA = $('#TableUsuarios').DataTable({
        "lengthMenu": [
            [ -1],
            ["All"]
        ],
        "bDestroy": true,
        "select": true,
        "autoWidth": false,
        "searching": true,
        "bPaginate": true,
        "dom": 'Bfrtip',
        "responsive": false,
       //"fixedHeader":    true,
        "scrollX":        true,
        "scrollY":        400,
        //"deferRender":    true,
        "scroller":       true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json",
            "decimal": ",",
            "thousands": "."
        },        
        "buttons": [
            {
                extend: 'excelHtml5',
                title: 'ReporteDataCrudaValidada'
            }
        ],
        "ajax": {
            "url": localStorage.getItem("urlApi")+'getDatosUsuarios',
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
        aoColumns: [
            {mData: 'id_usuario',className: "text-center"},
            {mData: 'apellidos',className: "text-center"},
            {mData: 'nombres',className: "text-center"},
            {mData: 'usuario',className: "text-center"},
            {mData: 'Celular',className: "text-center"},
            {mData: 'Departamento',className: "text-center"},
            {mData: 'Perfil',className: "text-center"}
        ],
        
    });
}




function EditAction2(data) {
    alert(data);


}




$('#TableUsuarios').on('click', 'tr', function () {
    
    var data = tablAA.row( this ).data();
    
    if ($(this).hasClass('selected')) {
        document.getElementById("btnEliminar").disabled = true;
        document.getElementById("btnEdicion").disabled = true;
        document.getElementById("btnVisualizar").disabled = true;
        idSelect = "";
        
        
        
    } else {
        document.getElementById("btnEliminar").disabled = false;
        document.getElementById("btnEdicion").disabled = false;
        document.getElementById("btnVisualizar").disabled = false;
        idSelect = data['id_usuario'];
    }
    //alert('Id___: '+idSelect);
} );