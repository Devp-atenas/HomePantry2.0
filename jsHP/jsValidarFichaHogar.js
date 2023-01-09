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
                "Id_Hogar": 6988,
                //"Id_Hogar": $("#identificacion2Hogar").val(),
                
                "id_CelularJefe": $('input:radio[name=celularJefeFamilia]:checked').val(),
                
                
                
                
                
                "Id_DomesticaFija": $('input:radio[name=domesticaFija]:checked').val(),
                "Id_PersonalLabores": $('input:radio[name=laboresFijas]:checked').val(),
                "Id_DomesticaDia": $('input:radio[name=domesticaXDia]:checked').val(),
                "id_ConexionInternet1": $('input:radio[name=conexionInternetTlf]:checked').val(),
                "id_ConexionInternet2": $('input:radio[name=conexionInternetMovil]:checked').val(),
                "id_ConexionInternet3": $('input:radio[name=conexionInternetBandaAncha]:checked').val(),
                "id_SeguroHCMParticular": $('input:radio[name=seguroHcmJefeFamilia]:checked').val(),
                "id_SeguroHCMColectivo": $('input:radio[name=seguroHcmEmpresaJefeFamilia]:checked').val(),
                "id_SeguroHCMSS": $('input:radio[name=seguroSocialJefeFamilia]:checked').val(),
                "Id_AireAcondicionado": $('input:radio[name=aireAcondicionado]:checked').val(),
                "Id_Calentador1": $('input:radio[name=calentadorAguaElectrico]:checked').val(),
                "Id_Calentador2": $('input:radio[name=calentadorAguaGas]:checked').val(),
                "Id_Computador1": $('input:radio[name=computadorPersonal]:checked').val(),
                "Id_Computador2": $('input:radio[name=computadorLaptop]:checked').val(),
                "Id_DVD": $('input:radio[name=DVD]:checked').val(),
                "Id_HomeTheater": $('input:radio[name=homeTeatro]:checked').val(),
                "Id_JuegosVodeo": $('input:radio[name=juegosVideo]:checked').val(),
                "Id_HornoMicro": $('input:radio[name=hornoMicroOnda]:checked').val(),
                "Id_Secadora": $('input:radio[name=secadoraRopa]:checked').val(),
                "Id_Lavadora1": $('input:radio[name=lavadoraAutomatica]:checked').val(),
                "Id_Lavadora2": $('input:radio[name=lavadoraSemiAutomatica]:checked').val(),
                "Id_Lavadora3": $('input:radio[name=lavadoraRodillo]:checked').val(),
                "Id_Nevera": $('input:radio[name=nevera]:checked').val(),
                "Id_Freezer": $('input:radio[name=freezer]:checked').val(),
                "Id_Cocina1": $('input:radio[name=cocinaElectrica]:checked').val(),
                "Id_Cocina2": $('input:radio[name=cocinaGasBombona]:checked').val(),
                "Id_Cocina3": $('input:radio[name=cocinaGasDirecto]:checked').val(),
                "Id_Cocina4": $('input:radio[name=cocinaKerosene]:checked').val(),
                "Id_LavaPlato": $('input:radio[name=lavaplatos]:checked').val(),
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
