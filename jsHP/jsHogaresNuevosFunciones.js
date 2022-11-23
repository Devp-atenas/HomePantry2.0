$('.buttonNext').click(function() {
    alert('Hola');
});


$(document).ready(function() {
    /*let button = document.querySelector(".buttonNext");
    button.disabled = true;*/
    $('.buttonNext').prop('disabled', true);
    //$("#formUbicacionHogar :input").prop("disabled", true);
});

$(function(){
    $("#fechaNacimientoResponsable").datepicker({
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
});

$(function(){
    $("#fechaNacimientoJefe").datepicker({
        changeMonth: true,
        changeYear: true
    });
});

$(function(){
    $("#fechaNacimientoComposicion").datepicker({
        changeMonth: true,
        changeYear: true
    });
});

$(function(){
    $("#fechaNacimientoComposicionEdit").datepicker({
        changeMonth: true,
        changeYear: true
    });
});

$(function(){
    $("#fechaNacimientoComposicionView").datepicker({
        changeMonth: true,
        changeYear: true
    });
});





function calcularEdad(inputFecha,inputCalculada){ ///calcular edad
    const fechaActual = new Date();
    const anoActual = parseInt(fechaActual.getFullYear());
    const mesActual = parseInt(fechaActual.getMonth()) + 1;
    const diaActual = parseInt(fechaActual.getDate());
    
    const diaNacimiento = parseInt(String(inputFecha).substring(0, 2));
    const mesNacimiento = parseInt(String(inputFecha).substring(3, 5));
    const anoNacimiento = parseInt(String(inputFecha).substring(6, 10));
    
    var edad = anoActual - anoNacimiento;
    if (mesActual < mesNacimiento) {
        edad--;
    } else if (mesActual === mesNacimiento) {
        if (diaActual < diaNacimiento) {
            edad--;
        }
    }
    $(inputCalculada).val(edad);
}

function msgCrearHogar(Codigo){
    if (Codigo == ""){
        Swal.fire(
            'The Internet?',
            'That thing is still around?',
            'question'
        )
    }
}

function blanquearCamposPorActividad(idHogar) {
    var mURL = localStorage.getItem("urlApi")+'getCamposLimpiarAllStep/'+idHogar;
    //alert(mURL);
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": mURL,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        //debugger;
        var tipoCampo;
        var valor;
        var idCampohtml;
        var idItemsHogar;

        for (var i = 0; i < response.data.length; i++) {
            tipoCampo = response.data[i].tipo_campohtml;
            idItemsHogar = response.data[i].id_itemsHogar;
            valor = "";
            if (tipoCampo == 'input'){
                valor = $('#'+response.data[i].Id_campohtml).val();
                //alert(response.data[i].Id_campohtml+' input: '+valor);
                $('#'+response.data[i].Id_campohtml).val('');
            }else if (tipoCampo == 'select'){
                valor = $('#'+response.data[i].Id_campohtml).val();
                idCampohtml = response.data[i].Id_campohtml;
                //alert('Id_campohtml: '+response.data[i].Id_campohtml+' select valor: '+valor);
                limpiarCombo(response.data[i].Id_campohtml);
            }else if (tipoCampo == 'radio'){
                valor = $('input[name='+response.data[i].Id_campohtml+']:checked').val();
                //alert(' radio: '+valor);
                $('input:radio[name='+response.data[i].Id_campohtml+']').attr('checked',false);
            }

            guardarValorAnterior(idHogar,idItemsHogar,valor);
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

function guardarCamposPorActividad(idHogar,step) {
    var mURL;
    if (step == 0){
        mURL = localStorage.getItem("urlApi")+'getCamposLimpiarAllStep/'+idHogar;
    }else{
        mURL = localStorage.getItem("urlApi")+'getCamposLimpiarxStep/'+idHogar+'/'+step;
    }
    //alert(mURL);
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": mURL,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        var tipoCampo;
        var valor;
        var idItemsHogar;
        //debugger;
        for (var i = 0; i < response.data.length; i++) {
            tipoCampo = response.data[i].tipo_campohtml;
            idItemsHogar = response.data[i].id_itemsHogar;
            if (tipoCampo == 'input'){
                valor = $('#'+response.data[i].Id_campohtml).val();
            }else if (tipoCampo == 'select'){
                valor = $("#"+response.data[i].Id_campohtml).val();
                //alert('Id_campohtml: '+response.data[i].Id_campohtml+' select valor: '+valor);
            }else if (tipoCampo == 'radio'){
                valor = $('input[name='+response.data[i].Id_campohtml+']:checked').val();
                //alert(response.data[i].Id_campohtml+' radio: '+valor);
            }
            guardarValorNuevo(idHogar,idItemsHogar,valor);
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

function guardarValorAnterior(idHogar,idItemsHogar,valor) {
    var settings = {
        "async": true,
        "crossDomain": true,
        "url":localStorage.getItem("urlApi")+'updateValorAnteriorActividadHogar/'+idHogar+'/'+idItemsHogar+'/'+valor,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {



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

function guardarValorNuevo(idHogar,idItemsHogar,valor) {
    var settings = {
        "async": true,
        "crossDomain": true,
        "url":localStorage.getItem("urlApi")+'updateValorNuevoActividadHogar/'+idHogar+'/'+idItemsHogar+'/'+valor,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {



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

function limpiarCombo(Id_campohtml) {
    
    switch (Id_campohtml) {
        case "estadoHogar":
            cargarEstado('#estadoHogar',0);
            $("#ciudadHogar").empty();
            $("#municipioHogar").empty();
            $("#parroquiaHogar").empty();
            break;
        /*case "estadoCivilResponsable":
            cargarEstadoCivil('#estadoCivilResponsable',0);
            break;
        case "parentescoJefeResponsable":
            cargarParentesco('#parentescoJefeResponsable',0);
            break;
        case "educacionResponsable":
            cargarEducacion('#educacionResponsable',0);
            break;
        case "tipoIngresoResponsable":
            cargarTipoIngreso('#tipoIngresoResponsable',0);
            break;*/
        case "bancoTransferenciaResponsable":
            cargarBanco('#bancoTransferenciaResponsable',0);
            break;
        case "tipoVivienda":
            cargarTipoVivienda('#tipoVivienda',0);
            $('#especifiqueTipoVivienda').val();
            break;
        case "metrosVivienda":
            cargarMetrosVivienda('#metrosVivienda',0);
            break;
        case "ocupacionVivienda":
            cargarOcupacionVivienda('#ocupacionVivienda',0);
            $('#especifiqueOcupacionVivienda').val();
            break;
        case "puntosLuz":
            cargarPuntosLuz('#puntosLuz',0);
            break;
        case "montoVivienda":
            cargarMontoVivienda('#montoVivienda',0);
            break;
        case "aguasBlancas":
            cargarAguasBlancas('#aguasBlancas',0);
            break;
        case "aguasNegras":
            cargarAguasNegras('#aguasNegras',0);
            break;
        case "aseoUrbano":
            cargarAseoUrbano('#aseoUrbano',0);
            break;
        case "cantidadTV":
            cargarCantidadTV('#cantidadTV',0);
            break;
        case "tipoTV":
            cargarTipoTV('#tipoTV',0);
            break;
        case "Senal":
            cargarSenal('#Senal',0);
            break;
        case "cablera1":
            cargarCablera('#cablera1',0);
            break;
        case "cablera2":
            cargarCablera('#cablera2',0);
            break;
        case "tvOnline1":
            cargarTvOnline('#tvOnline1',0);
            break;
            case "tvOnline2":
            cargarTvOnline('#tvOnline2',0);
            break;
        case "totalAutos":
            cargarAutos('#totalAutos',0);
            break;
        default:
            break;
    }
    // Jefe del Hogar
    /*
    cargarEstadoCivil('#estadoCivilJefe',0);
    cargarParentesco('#parentescoJefeJefe',0);
    cargarEducacion('#educacionJefe',0);
    cargarTipoIngreso('#tipoIngresoJefe',0);*/
    // Composicion del Hogar
    /*cargarEstadoCivil('#estadoCivilComposicion',0);
    cargarParentesco('#parentescoJefeComposicion',0);
    cargarEducacion('#educacionComposicion',0);
    cargarTipoIngreso('#tipoIngresoComposicion',0);*/
}

function fechaActual(){
    var f = new Date();
    return(f.getDate() + "/"+ f.getMonth()+ "/" +f.getFullYear());
}

function validarDiasCompra() {
    var lunes = document.getElementById('lunes');
    var martes = document.getElementById('martes');
    var miercoles = document.getElementById('miercoles');
    var jueves = document.getElementById('jueves');
    var viernes = document.getElementById('viernes');
    var sabado = document.getElementById('sabado');
    var domingo = document.getElementById('domingo');
    if ((lunes.checked != true) && (martes.checked != true) && (miercoles.checked != true) && (jueves.checked != true) && (viernes.checked != true) && (sabado.checked != true) && (domingo.checked != true)) {
        return (false);
    } else {
        return (true);
    }
}

function finalizarFicha(idHogar) {
    var settings = {
        "async": true,
        "crossDomain": true,
        "url":localStorage.getItem("urlApi")+'finalizarFicha_idHogar/'+idHogar,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        // La alerta de desactiva en el controlador
        // 66666666666
        
        if (response.NSECalculado != response.NSEAnterior){
            AlertaCambioNSE(idHogar,response.NSEAnterior,response.NSECalculado);
            Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Alerta cambio NSE (idPanelHogar)",$("#identificacion2Hogar").val(),"U");
        }else{
            $('#claseSocialInformacion').val(response.NSECalculado);
            Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Registro de Hogar",idHogar,"U");
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
                title: 'Su Session ha Expirado',
                confirmButtonText: `Ok`,
            })
            window.location = '/homepantry20/index.php';
        }
    })
}
function pad (str, max) {
    str = str.toString();
    return str.length < max ? pad("0" + str, max) : str;
}
function editPanelistasResponsableJefe(idHogar,responsable,parentesco){
    if (localStorage.getItem("idHogarEditar") !== null) {
        var settings = {
            "async": true,
            "crossDomain": true,
            "url":localStorage.getItem("urlApi")+'getPanelistaIdHogar/' + idHogar+'/'+ responsable+'/'+ parentesco,
            "method": "get",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            }
        }
        $.ajax(settings).done(function(response) {
            if (response.data.length != 0){
                if (responsable == 1 && parentesco == 0){
                    $("#inputIdEditResponsable").val(response.data[0].Id_Panelista);
                    $("#primerNombreResponsable").val(response.data[0].Nombre1);
                    $("#segundoNombreResponsable").val(response.data[0].Nombre2);
                    $("#primerApellidoResponsable").val(response.data[0].Apellido1);
                    $("#segundoApellidoResponsable").val(response.data[0].Apellido2);
                    var oblig = $("input:radio[name='nacionalidadResponsable']");
                    oblig.filter("[value='"+response.data[0].Id_Nacionalidad+"']").attr('checked', true);
                    $("#cedulaResponsable").val(response.data[0].Cedula);
                    var oblig = $("input:radio[name='sexoResponsable']");
                    oblig.filter("[value='"+response.data[0].Id_Sexo+"']").attr('checked', true);
                    //$("#estadoCivilResponsable option[value='"+ response.data[0].Id_EstadoCivil +"']").attr("selected",true);
                    //$("#parentescoJefeResponsable option[value='"+ response.data[0].Id_Parentesco +"']").attr("selected",true);
                    $("#fechaNacimientoResponsable").val(response.data[0].Fec_Nacimiento);
                    calcularEdad($("#fechaNacimientoResponsable").val(),'#edadResponsable');
                    $("#correoResponsable").val(response.data[0].Correo);
                    $("#correoAlternoResponsable").val(response.data[0].CorreoAlterno);
                    //$("#tipoIngresoResponsable option[value='"+ response.data[0].Id_TipoIngreso +"']").attr("selected",true);
                    $("#personasDelHogar option[value='"+ response.data[0].CantidadPersonas +"']").attr("selected",true);

                    cargarEducacion('#educacionResponsable',response.data[0].Id_Educacion);
                    cargarEstadoCivil('#estadoCivilResponsable',response.data[0].Id_EstadoCivil);
                    cargarParentesco('#parentescoJefeResponsable',response.data[0].Id_Parentesco);
                    cargarTipoIngreso('#tipoIngresoResponsable',response.data[0].Id_TipoIngreso);

                    var oblig = $("input:radio[name='frecuenciaCompraResponsable']");
                    oblig.filter("[value='"+response.data[0].Id_FrecuenciaCompra+"']").attr('checked', true);
                    if(response.data[0].id_Lunes == 1){
                        $("#lunes").prop("checked", true);
                    }
                    if(response.data[0].id_Martes == 1){
                        $("#martes").prop("checked", true);
                    }
                    if(response.data[0].id_Miercoles == 1){
                        $("#miercoles").prop("checked", true);
                    }
                    if(response.data[0].id_Jueves == 1){
                        $("#jueves").prop("checked", true);
                    }
                    if(response.data[0].id_Viernes == 1){
                        $("#viernes").prop("checked", true);
                    }
                    if(response.data[0].id_Sabado == 1){
                        $("#sabado").prop("checked", true);
                    }
                    if(response.data[0].id_Domingo == 1){
                        $("#domingo").prop("checked", true);
                    }
                    var oblig = $("input:radio[name='beneficioSocialistaResponsable']");
                    oblig.filter("[value='"+response.data[0].id_BeneficioSocialista+"']").attr('checked', true);
                    $("#celularResponsable").val(response.data[0].Celular);
                    $("#celularAdicionalResponsable").val(response.data[0].CelularAdicional);
                    $("#numeroCortesiaResponsable").val(response.data[0].NumeroCortesia);
                    $("#titularTransferenciaResponsable").val(response.data[0].Titular);
                    var oblig = $("input:radio[name='nacionalidadTransferenciaResponsable']");
                    oblig.filter("[value='"+response.data[0].id_NacionalidadTitular+"']").attr('checked', true);
                    $("#cedulaTransferenciaResponsable").val(response.data[0].CedulaTitular);
                    cargarBanco('#bancoTransferenciaResponsable',response.data[0].Id_Banco);
                    $("#numeroCuentaResponsable").val(response.data[0].NumeroCuenta);
                    var oblig = $("input:radio[name='pagoRapidoTrasferencia']");
                    oblig.filter("[value='"+response.data[0].Id_PagoRapido+"']").attr('checked', true);
                }
                if (responsable == 0 && parentesco == 1){
                    if (response.data[0].ResponsablePanel != response.data[0].Id_Parentesco){
                        document.getElementById("divResponsableJefe").style.visibility = "visible";
                        var oblig = $("input:radio[name='jefeResponsableIO']");
                        oblig.filter("[value='1']").attr('checked', true);
                    }else{
                        document.getElementById("divResponsableJefe").style.visibility = "hidden";
                        var oblig = $("input:radio[name='jefeResponsableIO']");
                        oblig.filter("[value='0']").attr('checked', true);
                    }
                    document.getElementById("responsableJefeNO").disabled=true;
                    document.getElementById("responsableJefeSI").disabled=true;

                    $("#inputIdEditJefe").val(response.data[0].Id_Panelista);
                    $("#primerNombreJefe").val(response.data[0].Nombre1);
                    $("#segundoNombreJefe").val(response.data[0].Nombre2);
                    $("#primerApellidoJefe").val(response.data[0].Apellido1);
                    $("#segundoApellidoJefe").val(response.data[0].Apellido2);
                    var oblig = $("input:radio[name='nacionalidadJefe']");
                    oblig.filter("[value='"+response.data[0].Id_Nacionalidad+"']").attr('checked', true);
                    $("#cedulaJefe").val(response.data[0].Cedula);
                    var oblig = $("input:radio[name='sexoJefe']");
                    oblig.filter("[value='"+response.data[0].Id_Sexo+"']").attr('checked', true);
                    $("#parentescoJefeJefe option[value='"+ response.data[0].Id_Parentesco +"']").attr("selected",true);
                    $("#fechaNacimientoJefe").val(response.data[0].Fec_Nacimiento);
                    calcularEdad($("#fechaNacimientoJefe").val(),'#edadJefe');
                    
                    
                    $("#correoJefe").val(response.data[0].Correo);
                    $("#correoAlternoJefe").val(response.data[0].CorreoAlterno);
                    $("#personasDelHogar option[value='"+ response.data[0].CantidadPersonas +"']").attr("selected",true);
                    var oblig = $("input:radio[name='frecuenciaCompraJefe']");
                    oblig.filter("[value='"+response.data[0].Id_FrecuenciaCompra+"']").attr('checked', true);
                    var oblig = $("input:radio[name='beneficioSocialistaJefe']");
                    oblig.filter("[value='"+response.data[0].id_BeneficioSocialista+"']").attr('checked', true);
                    $("#celularJefe").val(response.data[0].Celular);
                    $("#celularAdicionalJefe").val(response.data[0].CelularAdicional);

                    cargarEducacion('#educacionJefe',response.data[0].Id_Educacion);
                    cargarEstadoCivil('#estadoCivilJefe',response.data[0].Id_EstadoCivil);
                    cargarParentesco('#parentescoJefeJefe',response.data[0].Id_Parentesco);
                    cargarTipoIngreso('#tipoIngresoJefe',response.data[0].Id_TipoIngreso);
                }
            }else{
                if (responsable == 1 && parentesco == 0){
                    cargarEducacion('#educacionResponsable',0);
                    cargarEstadoCivil('#estadoCivilResponsable',0);
                    cargarParentesco('#parentescoJefeResponsable',0);
                    cargarTipoIngreso('#tipoIngresoResponsable',0);
                    cargarBanco('#bancoTransferenciaResponsable',0);
                    
                }
                if (responsable == 0 && parentesco == 1){
                    cargarEducacion('#educacionJefe',0);
                    cargarEstadoCivil('#estadoCivilJefe',0);
                    cargarParentesco('#parentescoJefeJefe',0);
                    cargarTipoIngreso('#tipoIngresoJefe',0);
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
}
// vvvvvvvvvvvvvv
function EditAction(data) {
    //alert('id_panelista: '+data);
    //ActualizarRegistro
    document.getElementById('FormPanelistaEdit').reset();
    //$("#FormPanelistaEdit")[0].reset();
    var settings = {
        "async": true,
        "crossDomain": true,
        "url":localStorage.getItem("urlApi")+'getPanelistas_x_IdPanelista/' + data,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        $('#primerNombreComposicionEdit').val(response.data[0].Nombre1);
        $('#segundoNombreComposicionEdit').val(response.data[0].Nombre2);
        $('#primerApellidoComposicionEdit').val(response.data[0].Apellido1);
        $('#segundoApellidoComposicionEdit').val(response.data[0].Apellido2);
        var oblig = $("input:radio[name='nacionalidadComposicionEdit']");
        oblig.filter("[value='"+response.data[0].Id_Nacionalidad+"']").attr('checked', true);
        $('#cedulaComposicionEdit').val(response.data[0].Cedula);
        var oblig = $("input:radio[name='sexoComposicionEdit']");
        oblig.filter("[value='"+response.data[0].Id_Sexo+"']").attr('checked', true);
        cargarEstadoCivil('#estadoCivilComposicionEdit',response.data[0].Id_EstadoCivil);
        cargarParentesco('#parentescoJefeComposicionEdit',response.data[0].Id_Parentesco);
        cargarEducacion('#educacionComposicionEdit',response.data[0].Id_Educacion);
        $('#celularComposicionEdit').val(response.data[0].Celular);
        $('#celularAdicionalComposicionEdit').val(response.data[0].CelularAdicional);
        $('#correoComposicionEdit').val(response.data[0].Correo);
        cargarTipoIngreso('#tipoIngresoComposicionEdit',response.data[0].Id_TipoIngreso);
        $('#inputIdEditComposicion').val(response.data[0].Id_Panelista);
        var oblig = $("input:radio[name='beneficioSocialistaComposicionEdit']");
        oblig.filter("[value='"+response.data[0].id_BeneficioSocialista+"']").attr('checked', true);
        var oblig = $("input:radio[name='activoEdit']");
        oblig.filter("[value='"+response.data[0].status+"']").attr('checked', true);
        $("#fechaNacimientoComposicionEdit").val(response.data[0].Fec_Nacimiento);            
        calcularEdad($("#fechaNacimientoComposicionEdit").val(),'#edadComposicionEdit');
                    
        $('#modal-PanelistaEditar').modal('show');
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
    document.getElementById('FormPanelistaView').reset();
    var settings = {
        "async": true,
        "crossDomain": true,
        "url":localStorage.getItem("urlApi")+'getPanelistas_x_IdPanelista/' + data,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        $('#primerNombreComposicionView').val(response.data[0].Nombre1);
        $('#segundoNombreComposicionView').val(response.data[0].Nombre2);
        $('#primerApellidoComposicionView').val(response.data[0].Apellido1);
        $('#segundoApellidoComposicionView').val(response.data[0].Apellido2);
        var oblig = $("input:radio[name='nacionalidadComposicionView']");
        oblig.filter("[value='"+response.data[0].Id_Nacionalidad+"']").attr('checked', true);
        $('#cedulaComposicionView').val(response.data[0].Cedula);
        var oblig = $("input:radio[name='sexoComposicionView']");
        oblig.filter("[value='"+response.data[0].Id_Sexo+"']").attr('checked', true);
        cargarEstadoCivil('#estadoCivilComposicionView',response.data[0].Id_EstadoCivil);
        cargarParentesco('#parentescoJefeComposicionView',response.data[0].Id_Parentesco);
        cargarEducacion('#educacionComposicionView',response.data[0].Id_Educacion);
        $('#celularComposicionView').val(response.data[0].Celular);
        $('#celularAdicionalComposicionView').val(response.data[0].CelularAdicional);
        $('#correoComposicionView').val(response.data[0].Correo);
        cargarTipoIngreso('#tipoIngresoComposicionView',response.data[0].Id_TipoIngreso);
        $('#inputIdEditComposicion').val(response.data[0].Id_Panelista);
        var oblig = $("input:radio[name='beneficioSocialistaComposicionView']");
        oblig.filter("[value='"+response.data[0].id_BeneficioSocialista+"']").attr('checked', true);
        var oblig = $("input:radio[name='activoView']");
        oblig.filter("[value='"+response.data[0].status+"']").attr('checked', true);
        
        
        $('#modal-PanelistaView').modal('show');
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

function deleteAction(data) {
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
                "async": true,
                "crossDomain": true,
                "url":localStorage.getItem("urlApi")+'deletePanelista/' + data,
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

function ActualizarRegistro() {
    var format = $("#fechaNacimientoComposicionEdit").val().split("/");
    var fechaYYYYMMDD = format[2]+'-'+format[1] +'-'+format[0]
    //if ($("#FormAtributoEdit").valid()) {
    if (true) {
        var settings = {
            "async": true,
            "crossDomain": true,
            "url":localStorage.getItem("urlApi")+'updatePanelista',
            "method": "post",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "data": {                
                "idPanelista": $("#inputIdEditComposicion").val(),
                "primerNombreComposicionEdit": $("#primerNombreComposicionEdit").val(),
                "segundoNombreComposicionEdit": $("#segundoNombreComposicionEdit").val(),
                "primerApelidoComposicionEdit": $("#primerApellidoComposicionEdit").val(),
                "segundoApellidoComposicionEdit": $("#segundoApellidoComposicionEdit").val(),
                "cedulaComposicionEdit": $("#cedulaComposicionEdit").val(),
                "celularComposicionEdit": $("#celularComposicionEdit").val(),
                "celularAdicionalComposicionEdit": $("#celularAdicionalComposicionEdit").val(),
                "correoComposicionEdit": $("#correoComposicionEdit").val(),

                "estadoCivilComposicionEdit": $("#estadoCivilComposicionEdit").val(),
                "parentescoJefeComposicionEdit": $("#parentescoJefeComposicionEdit").val(),
                "educacionComposicionEdit": $("#educacionComposicionEdit").val(),
                "tipoIngresoComposicionEdit": $("#tipoIngresoComposicionEdit").val(),
                "fechaNacimientoComposicionEdit": fechaYYYYMMDD,

                "nacionalidadComposicionEdit": $('input:radio[name=nacionalidadComposicionEdit]:checked').val(),
                "sexoComposicionEdit": $('input:radio[name=sexoComposicionEdit]:checked').val(),
                "beneficioSocialistaComposicionEdit": $('input:radio[name=beneficioSocialistaComposicionEdit]:checked').val(),


                "activo": $('input:radio[name=activoEdit]:checked').val(),

            }
        }
        $.ajax(settings).done(function(response) {
            ///let xtable = $('#TableAtributo').DataTable();
            //xtable.ajax.reload(null, false);
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
            cargarTablaComposicion($("#identificacion2Hogar").val());
            Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Actualizacion Panelista",$("#inputIdEditComposicion").val(),"U");
            var form = document.querySelector('#FormPanelistaEdit');
            form.reset();
            $('#modal-PanelistaEditar').modal('hide');
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

function HogarEditar() {
    //alert('ENTROOOOOO');
    var idHogar = localStorage.getItem("idHogarEditar");
    var settings = {
        "async": true,
        "crossDomain": true,
        "url":localStorage.getItem("urlApi")+'getHogarId/' + idHogar,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        $("#identificacion1Hogar").val(response.data[0].CodigoHogar);
        $("#identificacion2Hogar").val(response.data[0].Id_PanelHogar);
        // Paso 1
        $("#estadoHogar option[value='"+ response.data[0].Id_Estado +"']").attr("selected",true);
        var Estado = $("#estadoHogar").val();
        cargarEstado("#estadoHogar",response.data[0].Id_Estado);
        cargarCiudad("#ciudadHogar",response.data[0].Id_Estado,response.data[0].Id_Ciudad);
        cargarMunicipio("#municipioHogar",response.data[0].Id_Estado,response.data[0].Id_Municipio);
        cargarParroquia("#parroquiaHogar",response.data[0].Id_Municipio,response.data[0].Id_Parroquia);
        var oblig = $("input:radio[name='calle']");
        oblig.filter("[value='"+response.data[0].Ind_CalleAvenidad+"']").attr('checked', true);
        $('#nombreCalle').val(response.data[0].calle);

        if (response.data[0].Piso == ''){
            var oblig = $("input:radio[name='vivienda']");
            oblig.filter("[value='vivienda']").attr('checked', true);
            $("#divVivienda").show();
        oblig.filter("[value='vivienda']").attr('checked', true);
        }else{
            var oblig = $("input:radio[name='vivienda']");
            oblig.filter("[value='edificio']").attr('checked', true);
            $("#divEdificio").show();
        }

        $('#nombreEdificio').val(response.data[0].Edificio);
        $('#nombreCasa').val(response.data[0].Casa);
        $('#escaleraCasa').val(response.data[0].Escalera);
        $('#pisoHogar').val(response.data[0].Piso);
        $('#apartamentoEdificio').val(response.data[0].Apto);
        var oblig = $("input:radio[name='tipoZona']");
        oblig.filter("[value='"+response.data[0].Ind_BarrioUrbanizacion+"']").attr('checked', true);
        $('#nombreCalle').val(response.data[0].calle);
        $('#nombreTipoZona').val(response.data[0].barrio);
        $('#referenciaHogar').val(response.data[0].Referencia);
        $('#telefonoHogar').val(response.data[0].TelefonoLocal);
        // Responsable del hogar
        // Jefe del Hogar
        // Composición del Hogar
        cargarTablaComposicion(idHogar); // ****
        // Características y tenencia de la vivienda
        cargarTipoVivienda('#tipoVivienda',response.data[0].Id_TipoVivienda);
        cargarMetrosVivienda('#metrosVivienda',response.data[0].id_Metros);
        cargarOcupacionVivienda('#ocupacionVivienda',response.data[0].Id_OcupacionVivienda);
        cargarPuntosLuz('#puntosLuz',response.data[0].id_PuntosLuz);
        cargarMontoVivienda('#montoVivienda',response.data[0].Id_MontoVivienda);
        // Servicios Públicos
        cargarAguasBlancas('#aguasBlancas',response.data[0].Id_AguasBlancas);
        cargarAguasNegras('#aguasNegras',response.data[0].Id_AguasNegras);
        cargarAseoUrbano('#aseoUrbano',response.data[0].Id_AseoUrbano);
        // TV
        cargarCantidadTV('#cantidadTV',response.data[0].Id_Televisores)
        cargarTipoTV('#tipoTV',response.data[0].Id_TipoTelevisores)
        cargarSenal('#Senal',response.data[0].Id_Senal)
        // Medios
        cargarCablera('#cablera1',response.data[0].Id_Cablera1);
        cargarCablera('#cablera2',response.data[0].Id_Cablera2);
        cargarTvOnline('#tvOnline1',response.data[0].Id_TelevisionOnline1)
        cargarTvOnline('#tvOnline2',response.data[0].Id_TelevisionOnline2)
        // Vehiculos
        cargarAutos('#totalAutos',response.data[0].Id_Autos);
        // Características y tenencia de la vivienda
        $('#especifiqueTipoVivienda').val(response.data[0].OtroTipoVivienda);
        $('#numeroAmbientes').val(response.data[0].NumeroAmbientes);
        $('#numeroBanos').val(response.data[0].NumeroBanos);
        $("#ocupacionVivienda option[value='"+ response.data[0].Id_OcupacionVivienda +"']").attr("selected",true);
        $('#especifiqueOcupacionVivienda').val(response.data[0].OtroOcupacionVivienda);
        // Servicios Públicos
        var oblig = $("input:radio[name='servicioElectricidad']");
        oblig.filter("[value='"+response.data[0].Id_ServicioElectricidad+"']").attr('checked', true);
        var oblig = $("input:radio[name='servicioTelefonico']");
        oblig.filter("[value='"+response.data[0].Id_ServicioTelefono+"']").attr('checked', true);
        var oblig = $("input:radio[name='cortesElectricos']");
        oblig.filter("[value='"+response.data[0].Id_CortesElectricos+"']").attr('checked', true);
        // Servicios y equipamiento del hogar
        var oblig = $("input:radio[name='domesticaFija']");
        oblig.filter("[value='"+response.data[0].Id_DomesticaFija+"']").attr('checked', true);
        var oblig = $("input:radio[name='laboresFijas']");
        oblig.filter("[value='"+response.data[0].Id_PersonalLabores+"']").attr('checked', true);
        var oblig = $("input:radio[name='domesticaXDia']");
        oblig.filter("[value='"+response.data[0].Id_DomesticaDia+"']").attr('checked', true);
        var oblig = $("input:radio[name='conexionInternetTlf']");
        oblig.filter("[value='"+response.data[0].id_ConexionInternet1+"']").attr('checked', true);
        var oblig = $("input:radio[name='conexionInternetMovil']");
        oblig.filter("[value='"+response.data[0].id_ConexionInternet2+"']").attr('checked', true);
        var oblig = $("input:radio[name='conexionInternetBandaAncha']");
        oblig.filter("[value='"+response.data[0].id_ConexionInternet3+"']").attr('checked', true);
        var oblig = $("input:radio[name='celularJefeFamilia']");
        oblig.filter("[value='"+response.data[0].id_CelularJefe+"']").attr('checked', true);
        var oblig = $("input:radio[name='seguroHcmJefeFamilia']");
        oblig.filter("[value='"+response.data[0].id_SeguroHCMParticular+"']").attr('checked', true);
        var oblig = $("input:radio[name='seguroHcmEmpresaJefeFamilia']");
        oblig.filter("[value='"+response.data[0].id_SeguroHCMColectivo+"']").attr('checked', true);
        var oblig = $("input:radio[name='seguroSocialJefeFamilia']");
        oblig.filter("[value='"+response.data[0].id_SeguroHCMSS+"']").attr('checked', true);
        var oblig = $("input:radio[name='aireAcondicionado']");
        oblig.filter("[value='"+response.data[0].Id_AireAcondicionado+"']").attr('checked', true);
        var oblig = $("input:radio[name='calentadorAguaElectrico']");
        oblig.filter("[value='"+response.data[0].Id_Calentador1+"']").attr('checked', true);
        var oblig = $("input:radio[name='calentadorAguaGas']");
        oblig.filter("[value='"+response.data[0].Id_Calentador2+"']").attr('checked', true);
        var oblig = $("input:radio[name='computadorPersonal']");
        oblig.filter("[value='"+response.data[0].Id_Computador1+"']").attr('checked', true);
        var oblig = $("input:radio[name='computadorLaptop']");
        oblig.filter("[value='"+response.data[0].Id_Computador2+"']").attr('checked', true);
        var oblig = $("input:radio[name='DVD']");
        oblig.filter("[value='"+response.data[0].Id_DVD+"']").attr('checked', true);
        var oblig = $("input:radio[name='homeTeatro']");
        oblig.filter("[value='"+response.data[0].Id_HomeTheater+"']").attr('checked', true);
        var oblig = $("input:radio[name='juegosVideo']");
        oblig.filter("[value='"+response.data[0].Id_JuegosVodeo+"']").attr('checked', true);
        var oblig = $("input:radio[name='hornoMicroOnda']");
        oblig.filter("[value='"+response.data[0].Id_HornoMicro+"']").attr('checked', true);
        var oblig = $("input:radio[name='cocinaElectrica']");
        oblig.filter("[value='"+response.data[0].Id_Cocina1+"']").attr('checked', true);
        var oblig = $("input:radio[name='cocinaGasBombona']");
        oblig.filter("[value='"+response.data[0].Id_Cocina2+"']").attr('checked', true);
        var oblig = $("input:radio[name='cocinaGasDirecto']");
        oblig.filter("[value='"+response.data[0].Id_Cocina3+"']").attr('checked', true);
        var oblig = $("input:radio[name='cocinaKerosene']");
        oblig.filter("[value='"+response.data[0].Id_Cocina4+"']").attr('checked', true);
        var oblig = $("input:radio[name='secadoraRopa']");
        oblig.filter("[value='"+response.data[0].Id_Secadora+"']").attr('checked', true);
        var oblig = $("input:radio[name='lavadoraAutomatica']");
        oblig.filter("[value='"+response.data[0].Id_Lavadora1+"']").attr('checked', true);
        var oblig = $("input:radio[name='lavadoraSemiAutomatica']");
        oblig.filter("[value='"+response.data[0].Id_Lavadora2+"']").attr('checked', true);
        var oblig = $("input:radio[name='lavadoraRodillo']");
        oblig.filter("[value='"+response.data[0].Id_Lavadora3+"']").attr('checked', true);
        var oblig = $("input:radio[name='nevera']");
        oblig.filter("[value='"+response.data[0].Id_Nevera+"']").attr('checked', true);
        var oblig = $("input:radio[name='freezer']");
        oblig.filter("[value='"+response.data[0].Id_Freezer+"']").attr('checked', true);
        var oblig = $("input:radio[name='lavaplatos']");
        oblig.filter("[value='"+response.data[0].Id_LavaPlato+"']").attr('checked', true);
        var oblig = $("input:radio[name='cantvAcometida']");
        oblig.filter("[value='"+response.data[0].id_CantvAcometida+"']").attr('checked', true);
        var oblig = $("input:radio[name='cantvFijo']");
        oblig.filter("[value='"+response.data[0].id_CantvFijo+"']").attr('checked', true);
        var oblig = $("input:radio[name='movistar']");
        oblig.filter("[value='"+response.data[0].id_Movistar+"']").attr('checked', true);
        var oblig = $("input:radio[name='digitel']");
        oblig.filter("[value='"+response.data[0].id_Digitel+"']").attr('checked', true);
        // Medios
        $("#cantidadTV option[value='"+ response.data[0].Id_Televisores +"']").attr("selected",true);
        $("#tipoTV option[value='"+ response.data[0].Id_TipoTelevisores +"']").attr("selected",true);
        $("#Senal option[value='"+ response.data[0].Id_TipoTelevisores +"']").attr("selected",true);
        $("#Senal option[value='"+ response.data[0].Id_Senal +"']").attr("selected",true);
        $("#cablera1 option[value='"+ response.data[0].Id_Cablera1 +"']").attr("selected",true);
        $("#cablera2 option[value='"+ response.data[0].Id_Cablera2 +"']").attr("selected",true);
        $("#tvOnline1 option[value='"+ response.data[0].Id_TelevisionOnline1 +"']").attr("selected",true);
        $("#tvOnline2 option[value='"+ response.data[0].Id_TelevisionOnline2 +"']").attr("selected",true);
        var oblig = $("input:radio[name='escucharRadio']");
        if(response.data[0].id_FM == 1 || response.data[0].id_AM == 1){
            
            oblig.filter("[value='1']").attr('checked', true);
            $("#divEmisora").show();
            if(response.data[0].id_FM == 1){
                $("#FM").prop("checked", true);
            }
            if(response.data[0].id_AM == 1){
                $("#AM").prop("checked", true);
            }
        }else{
            oblig.filter("[value='0']").attr('checked', true);
        }

        // Vehículos
        $("#totalAutos option[value='"+ response.data[0].Id_Autos +"']").attr("selected",true);
        var oblig = $("input:radio[name='moto']");
        oblig.filter("[value='"+response.data[0].Id_Moto+"']").attr('checked', true);
        var oblig = $("input:radio[name='casco']");
        oblig.filter("[value='"+response.data[0].Id_SeguroCasco+"']").attr('checked', true);
        // Mascotas
        
        var oblig = $("input:radio[name='poseeMascota']");
        oblig.filter("[value='"+response.data[0].Id_Mascotas+"']").attr('checked', true);
        
        
        
        if(response.data[0].Ind_Perro == 1){
            $("#Perro").prop("checked", true);
        }
        if(response.data[0].Ind_Gato == 1){
            $("#Gato").prop("checked", true);
        }
        if(response.data[0].Ind_Pez == 1){
            $("#Pez").prop("checked", true);
        }
        if(response.data[0].Ind_Ave == 1){
            $("#Ave").prop("checked", true);
        }
        if(response.data[0].Ind_Roedor == 1){
            $("#Roedor").prop("checked", true);
        }
        if(response.data[0].Ind_Otro == 1){
            $("#Otro").prop("checked", true);
        }
        // Información General
        $("#claseSocialInformacion").val(response.data[0].ClaseSocial);
        $("#fechaRegistroInformacion").val(response.data[0].Fec_Registro);

        if (response.data[0].Ind_fichaCompleta == 1){
            blanquearCamposPorActividad(idHogar);
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

function desactivarAlerta(idHogar) {
    var settings = {
        "async": true,
        "crossDomain": true,
        "url":localStorage.getItem("urlApi")+'desactivarAlertaFichaIncompleta/'+idHogar,
        "method": "get",
        "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            }
    }
    $.ajax(settings).done(function(response) {        
        Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Alerta desactivada en ficha incompleta(IdHogar)",idHogar,"U");
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