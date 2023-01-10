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
        var Ind_Vivienda;
        var Ind_Edificio;
        
        if ( $('input:radio[name=vivienda]:checked').val() == 1){
            Ind_Vivienda = 1;
            Ind_Edificio = 0;
        }else{
            Ind_Vivienda = 0;
            Ind_Edificio = 1;

        }
        //alert(111);
        var idHogar2 = $("#identificacion2Hogar").val();
        const fecha = new Date();
        const YYYY = fecha.getFullYear();
        const YY = YYYY%100;
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": localStorage.getItem("urlApi")+'addNewHogar/',
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
                "Ind_CalleAvenidad": $('input:radio[name=calle]:checked').val(),
                "nombreCalle":$("#nombreCalle").val(),
                "Id_Zona":$("#selectZona").val(),
                "OtraZona":$("#nombreTipoZona").val(),
                "Ind_Vivienda": Ind_Vivienda,
                "Ind_Edificio":Ind_Edificio,
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

$(document).ready(function() {
    $('#formCaracteristicaVivienda').validate({
        rules: {
            tipoVivienda: {
                required: true
            },
            especifiqueTipoVivienda: {
                required: true
            },
            metrosVivienda: {
                required: true
            },
            numeroAmbientes: {
                required: true
            },
            numeroBanos: {
                required: true
            },
            puntosLuz: {
                required: true
            },
            ocupacionVivienda: {
                required: true
            },
            especifiqueOcupacionVivienda: {
                required: true
            },
            montoVivienda: {
                required: true
            },
            selectTecho: {
                required: true
            },
            selectPiso : {
                required: true
            },
            selectParedes : {
                required: true
            },
            Pintura : {
                required: true
            },
            selectPEstacionamiento : {
                required: true
            },
            selectPlanVacacional : {
                required: true
            },
            selectViajeVacacional : {
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







$("#guardar-paso-5").click(function() {
    var camposVacios = "";
    
    alert($("#identificacion2Hogar").val());
    alert($("#montoVivienda").val());
    alert($("#selectTecho1").val());
    alert($("#selectViajeVacacional").val());
    alert($("#selectPlanVacacional").val());
    

        if (localStorage.getItem("flagActividad") !== null){
            flagNuevoHogar = 0;
        }else{
            flagNuevoHogar = 1;
        }

        var settings = {
            "async": true,
            "crossDomain": true,
            "url": localStorage.getItem("urlApi")+'updateCaracteristicaHogar/',
            "method": "POST",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "data": {
                "Id_Hogar": $("#identificacion2Hogar").val(),
                "Id_TipoVivienda": $("#tipoVivienda").val(),
                "OtroTipoVivienda": $("#especifiqueTipoVivienda").val(),
                "id_Metros": $("#metrosVivienda").val(),
                "numeroHabitaciones": $("#numeroHabitaciones").val(),
                "NumeroBanos": $("#numeroBanos").val(),
                "id_PuntosLuz": $("#puntosLuz").val(),
                "Id_OcupacionVivienda": $("#ocupacionVivienda").val(),
                "OtroOcupacionVivienda": $("#especifiqueOcupacionVivienda").val(),
                "Id_MontoVivienda": $("#montoVivienda").val(),
                
                "selectTecho": $("#selectTecho1").val(),
                "selectPiso": $("#selectPiso").val(),
                "selectParedes": $("#selectParedes").val(),
                "Pintura": $('input:radio[name=Pintura]:checked').val(),
                "selectPEstacionamiento": $("#selectPEstacionamiento").val(),
                "selectPlanVacacional": $("#selectPlanVacacional").val(),
                "selectViajeVacacional": $("#selectViajeVacacional").val(),
                "ViviendaVacacional": $('input:radio[name=ViviendaVacacional]:checked').val(),
                

                "flagNuevoHogar":flagNuevoHogar
            }
        }
        $.ajax(settings).done(function(response) {
            var idHogar = $("#identificacion2Hogar").val();
            if (response.isFichaCompleta==1){
                Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Se actualizo Características y tenencia de la vivienda (Paso 5) Falta Puntaje NSE(idPanelHogar)",$("#identificacion2Hogar").val(),"U");
                AlertaHogarSinRecalcularNSE($("#identificacion2Hogar").val());
            }else{
                Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Se Guardo Características y tenencia de la vivienda (Paso 5) (idPanelHogar)",$("#identificacion2Hogar").val(),"C");
            }

            if (localStorage.getItem('flagActividad') !== null){
                guardarCamposPorActividad(idHogar,5);
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
   
});


$("#guardar-paso-6").click(function() {
    
        if (localStorage.getItem("flagActividad") !== null){
            flagNuevoHogar = 0;
        }else{
            flagNuevoHogar = 1;
        }

        var settings = {
            "async": true,
            "crossDomain": true,
            "url": localStorage.getItem("urlApi")+'updateServiciosHogar/',
            "method": "POST",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "data": {
                "Id_Hogar": $("#identificacion2Hogar").val(),
                "Id_AguasBlancas": $("#aguasBlancas").val(),
                "Id_AguasNegras": $("#aguasNegras").val(),
                "Id_AseoUrbano": $("#aseoUrbano").val(),
                "Id_ServicioElectricidad": $('input:radio[name=servicioElectricidad]:checked').val(),
                "Id_ServicioTelefono": $('input:radio[name=servicioTelefonico]:checked').val(),
                "selectFrecuenciaElectricidad": $("#selectFrecuenciaElectricidad").val(),
                "selectFrecuenciaAgua": $("#selectFrecuenciaAgua").val(),
                "selectTipoAlmacAgua": $("#selectTipoAlmacAgua").val(),
                "PlantaElectrica": $('input:radio[name=PlantaElectrica]:checked').val(),
                
                
                
                "flagNuevoHogar":flagNuevoHogar
            }
        }
        $.ajax(settings).done(function(response) {
            var idHogar = $("#identificacion2Hogar").val();

            if (response.isFichaCompleta==1){
                Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Se Actualizo Servicios Públicos(Paso 6) y se Recalculo Puntaje NSE(idPanelHogar)",$("#identificacion2Hogar").val(),"U");
                AlertaHogarSinRecalcularNSE($("#identificacion2Hogar").val());
            }else{
                Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Se Guardo Servicios Públicos(Paso 6)",$("#identificacion2Hogar").val(),"C");
            }
            
            if (localStorage.getItem('flagActividad') !== null){
                guardarCamposPorActividad(idHogar,6);
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
   
});


$("#guardar-paso-7").click(function() {
    
        if (localStorage.getItem("flagActividad") !== null){
            flagNuevoHogar = 0;
        }else{
            flagNuevoHogar = 1;
        }

        var settings = {
            "async": true,
            "crossDomain": true,
            "url": localStorage.getItem("urlApi")+'updateEquipamientosHogar/',
            "method": "POST",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "data": {
                //"Id_Hogar": 6988,
                "Id_Hogar": $("#identificacion2Hogar").val(),
                "id_CelularJefe": $('input:radio[name=celularJefeFamilia]:checked').val(),
                "Id_TipoInternet": $("#selectTipoInternet").val(),
                "Id_AireAcondicionado": $("#selectAireAcondicionados").val(),
                "Ind_CalentadorElectrico": $('input:radio[name=calentadorAguaElectrico]:checked').val(),
                "Ind_CalentadorGas": $('input:radio[name=calentadorAguaGas]:checked').val(),
                "Ind_Computadora": $('input:radio[name=computadorPersonal]:checked').val(),
                "Ind_Laptop": $('input:radio[name=computadorLaptop]:checked').val(),
                "Ind_Secadora": $('input:radio[name=secadoraRopa]:checked').val(),
                "Ind_LavadoraAutomatica": $('input:radio[name=lavadoraAutomatica]:checked').val(),
                "Ind_LavadoraSemiAutomatica": $('input:radio[name=lavadoraSemiAutomatica]:checked').val(),
                "Id_TipoGas": $("#selectTipoGas").val(),
                "Id_FrecuenciaGas": $("#selectFrecuenciaGas").val(),
                "Ind_Nevera": $('input:radio[name=nevera]:checked').val(),
                "Ind_Freezer": $('input:radio[name=freezer]:checked').val(),
                "Ind_HornoMicro": $('input:radio[name=hornoMicroOnda]:checked').val(),
                "id_CantvAcometida": $('input:radio[name=cantvAcometida]:checked').val(),
                "id_CantvFijo": $('input:radio[name=cantvFijo]:checked').val(),
                "id_Movistar": $('input:radio[name=movistar]:checked').val(),
                "id_Digitel": $('input:radio[name=digitel]:checked').val(),
                "flagNuevoHogar":flagNuevoHogar
            }
        }
        $.ajax(settings).done(function(response) {
            var idHogar = $("#identificacion2Hogar").val();

            if (response.isFichaCompleta==1){
                Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Se Actualizo Servicios y equipamiento del hogar(Paso 7) y se Recalculo Puntaje NSE(idPanelHogar)",$("#identificacion2Hogar").val(),"U");
                AlertaHogarSinRecalcularNSE($("#identificacion2Hogar").val());
            }else{
                Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Se Guardo Servicios y equipamiento del hogar(Paso 7)",$("#identificacion2Hogar").val(),"C");
            }
            
            if (localStorage.getItem('flagActividad') !== null){
                guardarCamposPorActividad(idHogar,7);
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
    
});

// Medios PASO 8
$("#guardar-paso-8").click(function() {
    //alert($("#cablera1").val());
    
    var FM = document.getElementById('FM').checked ? 1 : 0;
    var AM = document.getElementById('AM').checked ? 1 : 0;
    
    if (localStorage.getItem("flagActividad") !== null){
        flagNuevoHogar = 0;
    }else{
        flagNuevoHogar = 1;
    }

    var settings = {
        "async": true,
        "crossDomain": true,
        "url": localStorage.getItem("urlApi")+'updateMediosHogar/',
        "method": "POST",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        },
        "data": {
            "Id_Hogar": $("#identificacion2Hogar").val(),
            "Id_TipoTelevisores": $("#tipoTV").val(),
            "Id_CantidadTV": $("#cantidadTV").val(),
            "Id_Senal": $("#Senal").val(),
            "Id_Cablera1": $("#cablera1").val(),
            //"Id_Cablera2": $("#cablera2").val(),
            "Id_TelevisionOnline1": $("#tvOnline1").val(),
            //"Id_TelevisionOnline2":$("#tvOnline2").val(),
            "Ind_Streaming": $('input:radio[name=Streaming]:checked').val(),
            "Ind_MusicStreaming": $('input:radio[name=MusicStreaming]:checked').val(),
            "Ind_Escuchar_Radio": $('input:radio[name=escucharRadio]:checked').val(),
            "ind_FM": FM,
            "ind_AM": AM,
            "flagNuevoHogar":flagNuevoHogar
        }
    }
    $.ajax(settings).done(function(response) {
        var idHogar = $("#identificacion2Hogar").val();

        if (response.isFichaCompleta==1){
            Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Se Actualizo Medios(Paso 8) y se Recalculo Puntaje NSE(idPanelHogar)",$("#identificacion2Hogar").val(),"U");
            AlertaHogarSinRecalcularNSE($("#identificacion2Hogar").val());
        }else{
            Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Se Guardo Medios(Paso 8)",$("#identificacion2Hogar").val(),"C");
        }
        
        if (localStorage.getItem('flagActividad') !== null){
            guardarCamposPorActividad(idHogar,8);
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
});



// Vehículos PASO 9
$("#guardar-paso-9").click(function() {
   
        if (localStorage.getItem("flagActividad") !== null){
            flagNuevoHogar = 0;
        }else{
            flagNuevoHogar = 1;
        }

        var carrorMenorYY = document.getElementById('carrorMenorYY').checked ? 1 : 0;
        var carrorMayorYY = document.getElementById('carrorMayorYY').checked ? 1 : 0;

        var settings = {
            "async": true,
            "crossDomain": true,
            "url": localStorage.getItem("urlApi")+'updateVehiculosHogar/',
            "method": "POST",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "data": {
                "Id_Hogar": $("#identificacion2Hogar").val(),
                "Id_Autos": $("#totalAutos").val(),
                "Ind_AutosMenorAnoYY": carrorMenorYY,
                "Ind_AutosMayorAnoYY": carrorMayorYY,
                "Ind_Moto": $('input:radio[name=moto]:checked').val(),
                "Ind_SeguroCasco": $('input:radio[name=casco]:checked').val(),
                "flagNuevoHogar":flagNuevoHogar
            }
        }
        $.ajax(settings).done(function(response) {
            var idHogar = $("#identificacion2Hogar").val();
            // 66666
            if (response.isFichaCompleta==1){
                Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Se Actualizo Vehículos(Paso 9) y se Recalculo Puntaje NSE(idPanelHogar)",$("#identificacion2Hogar").val(),"U");
                AlertaHogarSinRecalcularNSE($("#identificacion2Hogar").val());
            }else{
                Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Se GuardoVehículos(Paso 9)",$("#identificacion2Hogar").val(),"C");
            }
            
            if (localStorage.getItem('flagActividad') !== null){
                guardarCamposPorActividad(idHogar,9);
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

});
// Mascotas PASO 10
$("#guardar-paso-10").click(function() {
    var camposVacios = "";
    
   
        var Perro = document.getElementById('Perro').checked ? 1 : 0;
        var Gato = document.getElementById('Gato').checked ? 1 : 0;
        var Pez = document.getElementById('Pez').checked ? 1 : 0;
        var Ave = document.getElementById('Ave').checked ? 1 : 0;
        var Roedor = document.getElementById('Roedor').checked ? 1 : 0;
        var Otro = document.getElementById('Otro').checked ? 1 : 0;

        if (localStorage.getItem("flagActividad") !== null){
            flagNuevoHogar = 0;
        }else{
            flagNuevoHogar = 1;
        }

        var settings = {
            "async": true,
            "crossDomain": true,
            "url": localStorage.getItem("urlApi")+'updateMascotaHogar/',
            "method": "POST",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "data": {
                "Id_Hogar": $("#identificacion2Hogar").val(),
                "Ind_Mascotas": $('input:radio[name=poseeMascota]:checked').val(),
                "Ind_Perro": Perro,
                "Ind_Gato": Gato,
                "Ind_Pez": Pez,
                "Ind_Ave": Ave,
                "Ind_Roedor": Roedor,
                "Ind_Otro": Otro,
                "flagNuevoHogar":flagNuevoHogar
            }
        }
        $.ajax(settings).done(function(response) {
            var idHogar = $("#identificacion2Hogar").val();

            if (response.isFichaCompleta==1){
                Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Se Actualizo Mascotas(Paso 10) y se Recalculo Puntaje NSE(idPanelHogar)",$("#identificacion2Hogar").val(),"U");
                AlertaHogarSinRecalcularNSE($("#identificacion2Hogar").val());
            }else{
                Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Se Mascotas(Paso 10)",$("#identificacion2Hogar").val(),"C");
            }
            
            if (localStorage.getItem('flagActividad') !== null){
                guardarCamposPorActividad(idHogar,10);
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
});


// GAstos
$("#guardar-paso-11").click(function() {
    //alert($("#cablera1").val());
    
    
    
    if (localStorage.getItem("flagActividad") !== null){
        flagNuevoHogar = 0;
    }else{
        flagNuevoHogar = 1;
    }

    var settings = {
        "async": true,
        "crossDomain": true,
        "url": localStorage.getItem("urlApi")+'updateGastosHogar/',
        "method": "POST",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        },
        "data": {
            "Id_Hogar": $("#identificacion2Hogar").val(),
            "Gasto_Alimentos": $("#inputGastoAlimento").val(),
            "Gasto_Medicinas": $("#inputGastoMedicinas").val(),
            "Gastos_Educacion": $("#inputGastoEducacion").val(),
            "Gasto_Transporte": $("#inputGastoTransporte").val(),
            "Gasto_Cuidadopersonal": $("#inputGastoCuidadoPersonal").val(),
            "Gasto_RopayCalzado": $("#inputGastoRopaCalzado").val(),
            "Gasto_Entretenimiento": $("#inputGastoEntretenimiento").val(),
            "Gasto_Electrodomesticos": $("#inputGastoElectrodomesticos").val(),
            "Gasto_Servicios": $("#inputGastoServicios").val(),
            "Gasto_Reparaciones": $("#inputGastoReparaciones").val(),
            "Gasto_Ahorro": $("#inputGastoAhorro").val(),
            "flagNuevoHogar":flagNuevoHogar
        }
    }
    $.ajax(settings).done(function(response) {
        var idHogar = $("#identificacion2Hogar").val();

        if (response.isFichaCompleta==1){
            Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Se Actualizo Medios(Paso 8) y se Recalculo Puntaje NSE(idPanelHogar)",$("#identificacion2Hogar").val(),"U");
            AlertaHogarSinRecalcularNSE($("#identificacion2Hogar").val());
        }else{
            Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Se Guardo Medios(Paso 8)",$("#identificacion2Hogar").val(),"C");
        }
        
        if (localStorage.getItem('flagActividad') !== null){
            guardarCamposPorActividad(idHogar,8);
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
});

