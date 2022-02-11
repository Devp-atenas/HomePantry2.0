// Eventos.js - 23ago21 - 24ago21
//
$("#btnCrearFiltro").click(function(event) {
    event.preventDefault();
    $('.selectpicker').prop('disabled', true);
    $('.selectpicker').selectpicker('refresh');
    if (validarEntradaDatos()) {
        sessionStorage.removeItem('nuevo');
        sessionStorage.removeItem('idReg');
        sessionStorage.removeItem('apiFill');
        if($("#cboFiltros").val()=='0'){
            $('#nombreFiltro').val('');
            sessionStorage.setItem('nuevo', 1);
        }else{
            $('#nombreFiltro').val($('#cboFiltros option:selected').text().trim());
            sessionStorage.setItem('nuevo', 0);
        }
        $('#Crearfiltro').modal('show');
        $('.modal-title').html("<i class='fas fa-filter'></i>&nbsp;Crear Filtro de Selección");
    }
});
//
$('#Crearfiltro').on('hidden.bs.modal', function() {
    $('.selectpicker').prop('disabled', false);
    $('.selectpicker').selectpicker('refresh');
    $('#nombreFiltro').val('');
});
//
$('#btnGrabarFiltro').click(function(event) {
    //
    //debugger;
    event.preventDefault();
    $('#Crearfiltro').modal('hide');
    //
    let idFil = $('#nombreFiltro').val();
    if (idFil == null || idFil == undefined || idFil.length == 0) {
        Swal.fire({
            icon: 'error',
            title: '<i class="fas fa-filter"></i>',
            text: 'Falta el nombre del Filtro..!'
        });
        $('.selectpicker').prop('disabled', true);
        $('.selectpicker').selectpicker('refresh');
        return false;
    }
    //
    if (validarEntradaDatos()) {
        let idSem = $('#cboSemanas').val();
        if (idSem.length > 8) {
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 10000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener("mouseenter", Swal.stopTimer);
                    toast.addEventListener("mouseleave", Swal.resumeTimer);
                },
            });
            Toast.fire({
                icon: "error",
                title: "Seleccione 8 Semanas máximo..!",
            });
            //
            $('#procesando').css('display', 'none');
            $('.selectpicker').prop('disabled', false);
            $('.selectpicker').selectpicker('refresh');
            return false;
        }
        //
        let idBar = $('#cboBarcodes').val();
        idBar = idBar.join();
        let totalBar = idBar.length
        if (totalBar.length > 8000) {
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 10000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener("mouseenter", Swal.stopTimer);
                    toast.addEventListener("mouseleave", Swal.resumeTimer);
                },
            });
            Toast.fire({
                icon: "error",
                title: "Seleccione hasta un máximo de 550 Código Barras..!",
            });
            //
            $('#procesando').css('display', 'none');
            $('.selectpicker').prop('disabled', false);
            $('.selectpicker').selectpicker('refresh');
            return false;
        }
        //
        let idRet = $("#cboRetailers").val();
        let idEtd = $("#cboEstados").val();
        let idTnd = $("#cboTiendas").val();
        let idCat = $("#cboCategorias").val();
        let idFab = $("#cboFabricantes").val();
        let idMar = $("#cboMarcas").val();
        let idMnd = $("#cboMoneda").val();
        let idFil = $("#nombreFiltro").val();
        let idReg = $("#cboFiltros").val();
        //
        idSem = idSem.join();
        idRet = idRet.join();
        idEtd = idEtd.join();
        idTnd = idTnd.join();
        idCat = idCat.join();
        idFab = idFab.join();
        idMar = idMar.join();
        //
        idSem = reemplazaTodo(idSem, ",", "*");
        idRet = reemplazaTodo(idRet, ",", "*");
        idEtd = reemplazaTodo(idEtd, ",", "*");
        idTnd = reemplazaTodo(idTnd, ",", "*");
        idEtd = reemplazaTodo(idEtd, ",", "*");
        idCat = reemplazaTodo(idCat, ",", "*");
        idFab = reemplazaTodo(idFab, ",", "*");
        idMar = reemplazaTodo(idMar, ",", "*");
        idBar = reemplazaTodo(idBar, ",", "*");
        //
        sessionStorage.setItem('idReg', idReg);
        let ajax = null;
        let sFlag = sessionStorage.getItem('nuevo');
        if(sFlag==0){
            ajax = {
                "idSem": idSem,
                "idRet": idRet,
                "idEtd": idEtd,
                "idTnd": idTnd,
                "idCat": idCat,
                "idFab": idFab,
                "idMar": idMar,
                "idBar": idBar,
                "idMnd": idMnd,
                "idFil": idFil,
                "idReg": idReg
            };
            sessionStorage.setItem('apiFill', 'updFiltroMnyMrk');
        } else {
            ajax = {
                "idSem": idSem,
                "idRet": idRet,
                "idEtd": idEtd,
                "idTnd": idTnd,
                "idCat": idCat,
                "idFab": idFab,
                "idMar": idMar,
                "idBar": idBar,
                "idMnd": idMnd,
                "idFil": idFil,
                "idClt": localStorage.getItem('ID_Cliente'),
                "activo": 1
            };
            sessionStorage.setItem('apiFill', 'addFiltroMnyMrk');
        }
        //
        //console.log(ajax);
        //
        let settings = {
            "async": true,
            "crossDomain": true,
            "url": sessionStorage.getItem("urlApi") + sessionStorage.getItem("apiFill"),
            "method": "POST",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "data": ajax,
        };
        $.ajax(settings)
        .done(function(response) {
            //console.log(response);
            fillFiltros();
            if(sFlag==0){
                sMsg='Actualizado...!';
            }else{
                sMsg='Grabado...!';
            }
            //
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 4000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener("mouseenter", Swal.stopTimer);
                    toast.addEventListener("mouseleave", Swal.resumeTimer);
                },
            });
            Toast.fire({
                icon: "success",
                title: sMsg,
            });
        })
        .fail(function(jqXHR, textStatus) {
            if (jqXHR.status == 400) {
                const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 8000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener("mouseenter", Swal.stopTimer);
                        toast.addEventListener("mouseleave", Swal.resumeTimer);
                    },
                });
                Toast.fire({
                    title: "Su Cesión ha Expirado",
                    confirmButtonText: `Ok`,
                });
                window.location = "/retailscannig/index.php";
            }
        })
        .always(function(jqXHR, textStatus) {
            $("#procesando").css("display", "none");
            $('.selectpicker').prop('disabled', false);
            $('.selectpicker').selectpicker('refresh');
        });
    }

});
//
$('#cboFiltros').on('change', function(event) {
    //debugger;
    event.preventDefault();
    $('.selectpicker').prop('disabled', true);
    $('.selectpicker').selectpicker('refresh');
    let idFil = $("#cboFiltros").val();
    if (idFil == null || idFil == undefined || idFil.length == 0) {
        Swal.fire({
            icon: 'error',
            title: '<i class="fas fa-filter"></i>',
            text: 'Seleccione un Filtro guardado..!'
        });
        $('.selectpicker').prop('disabled', false);
        $('.selectpicker').selectpicker('refresh');
        return false;
    }
    //
    findData(idFil);
    //
});