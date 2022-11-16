$(document).ready(function() {
    $('#formUbicacionHogar').validate({
        rules: {
            estadoHogar: {
                required: true
            }
        },
        messages: {
            estadoHogar: {
                required: "Por favor ingrese estado"
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
});

// Ubicacion del hogar (PASO 1)
$("#guardar-paso-1").click(function() {
    if ($("#formUbicacionHogar").valid()) {
        alert(111);
        var idHogar2 = $("#identificacion2Hogar").val();
        const fecha = new Date();
        const YYYY = fecha.getFullYear();
        const YY = YYYY%100;
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": '<?php echo urlApi; ?>addNewHogar/',
            "method": "POST",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "data": { // ****
                "identificacion1Hogar": $("#identificacion1Hogar").val(),
                "Id_Hogar": $("#identificacion2Hogar").val(),
                "idUsuario": localStorage.getItem("IdUsuario"),
                "YY": YY,
                "Id_estadoHogar": $("#estadoHogar").val(),
                "Id_ciudadHogar": $("#ciudadHogar").val(),
                "Id_municipioHogar": $("#municipioHogar").val(),
                "Id_parroquiaHogar": $("#parroquiaHogar").val(),
                "Ind_CalleAvenidad": $('input:radio[name=calle]:checked').val(),
                "Ind_BarrioUrbanizacion": $('input:radio[name=tipoZona]:checked').val(),
                "calle":$("#nombreCalle").val(),
                "nombreEdificio": $("#nombreEdificio").val(), // 2
                "nombreCasa": $("#nombreCasa").val(), // 1
                "escaleraCasa": $("#escaleraCasa").val(), // 1
                "pisoHogar": $("#pisoHogar").val(), // 2
                "apartamentoEdificio": $("#apartamentoEdificio").val(), // 2
                "tipoZona": $("#nombreTipoZona").val(),
                "referenciaHogar": $("#referenciaHogar").val(),
                "telefonoHogar": $("#telefonoHogar").val(),
                "viviendaCasa": $("#viviendaCasa").val(),
                "Id_Usuario": localStorage.getItem("IdUsuario"),
                "tipoCasa": $("#tipoCasa").val()
            }
        }
        $.ajax(settings).done(function(response) {
            $("#identificacion1Hogar").val(response.Codi_Hogar);
            $("#identificacion2Hogar").val(response.maxIDPanelHogar);
            
            if (idHogar2 == ""){
                AlertaFichaIncompleta(response.maxIDPanelHogar);
            }
            
            if (localStorage.getItem('flagActividad') !== null){
                var idHogar = $("#identificacion2Hogar").val();
                guardarCamposPorActividad(idHogar,1);
            }
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
            Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Se Guardo Paso 1 (idPanelHogar)",$("#identificacion2Hogar").val(),"C");
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
                var form = document.querySelector('#FormPaisEdit');
                form.reset();
                window.location = '/homepantry20/index.php';
            }
        }) 
    }    
});