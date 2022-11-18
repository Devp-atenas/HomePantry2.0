$(document).ready(function() {
    $('#formUbicacionHogar').validate({
        rules: {
            estadoHogar: {
                required: true
            },
            ciudadHogar: {
                required: true
            },
            municipioHogar: {
                required: true
            },
            parroquiaHogar: {
                required: true
            },
            calle: {
                required: true
            },
            selectZona: {
                required: true
            },
            vivienda: {
                required: true
            },
            telefonoHogar: {
                required: true
            },
            referenciaHogar: {
                required: true
            },
            coordenadaX: {
                required: true
            },
            coordenadaY : {
                required: true
            },
        },
        messages: {
            estadoHogar: {
                required: "Ingrese estado"
            },
            ciudadHogar: {
                required: "Ingrese ciudad"
            },
            municipioHogar: {
                required: "Ingrese municipio"
            },
            parroquiaHogar: {
                required: "Ingrese parroquia"
            },
            calle: {
                required: "Ingrese calle"
            },
            selectZona: {
                required: "Ingrese zona"
            },
            vivienda: {
                required: "Ingrese tipo vivienda"
            },
            telefonoHogar: {
                required: "Ingrese telefono local"
            },
            referenciaHogar: {
                required: "Ingrese referencia"
            },
            coordenadaX: {
                required: "Ingrese coordenada X"
            },
            coordenadaY : {
                required: "Ingrese coordenada Y"
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
                "YY": YY,
                
                "idEstadoHogar": $("#estadoHogar").val(),
                "idCiudadHogar": $("#ciudadHogar").val(),
                "idMunicipioHogar": $("#municipioHogar").val(),
                "idParroquiaHogar": $("#parroquiaHogar").val(),
                "indCalleAvenidad": $('input:radio[name=calle]:checked').val(),
                "nombreCalle":$("#nombreCalle").val(),
                "idZona":$("#selectZona").val(),
                "otraZona":$("#nombreTipoZona").val(),
                "indVivienda": $("#viviendaCasa").val(),
                
                "nombreCasa": $("#nombreCasa").val(),
                "escaleraCasa": $("#escaleraCasa").val(),
                
                "nombreEdificio": $("#nombreEdificio").val(),
                "pisoHogar": $("#pisoHogar").val(),
                "apartamentoEdificio": $("#apartamentoEdificio").val(),
                "telefonoHogar": $("#telefonoHogar").val(),
                "referenciaHogar": $("#referenciaHogar").val(),
                "coordenadaX": $("#coordenadaX").val(),
                "coordenadaY": $("#coordenadaY").val(),
                

                
                


                "idUsuario": localStorage.getItem("IdUsuario"),
                
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