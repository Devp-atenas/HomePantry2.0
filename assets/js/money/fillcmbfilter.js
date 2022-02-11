// Fillcmbfilter.js - 23ago21 - 23ago21
//
function makeVarFiltro(Data){
    //
    let idSem = reemplazaTodo(Data[0]['Id_Semana'], "*", ",");
    idSem = idSem.split(',');
    $('#cboSemanas').selectpicker();
    $('#cboSemanas').selectpicker('val', idSem );
    $('#cboSemanas').selectpicker('refresh');
    //
    sessionStorage.setItem('idSem', Data[0]['Id_Semana']);
    //debugger;
    let idRet = reemplazaTodo(Data[0]['Id_Retail'], "*", ",");
    idRet = idRet.split(',');
    sessionStorage.setItem('idRet', JSON.stringify(idRet));
    //
    let idEtd = reemplazaTodo(Data[0]['Id_Estado'], "*", ",");
    idEtd = idEtd.split(',');
    sessionStorage.setItem('idEtd', JSON.stringify(idEtd));
    //
    let idTnd = reemplazaTodo(Data[0]['Id_Tienda'], "*", ",");
    idTnd = idTnd.split(',');
    sessionStorage.setItem('idTnd', JSON.stringify(idTnd));
    //
    let idCat = reemplazaTodo(Data[0]['Id_Categoria'], "*", ",");
    idCat = idCat.split(',');
    sessionStorage.setItem('idCat', JSON.stringify(idCat));
    //
    let idFab = reemplazaTodo(Data[0]['Id_Fabricante'], "*", ",");
    idFab = idFab.split(',');
    sessionStorage.setItem('idFab', JSON.stringify(idFab));
    //
    let idMar = reemplazaTodo(Data[0]['Id_Marca'], "*", ",");
    idMar = idMar.split(',');
    sessionStorage.setItem('idMar', JSON.stringify(idMar));
    //
    let idBar = reemplazaTodo(Data[0]['Barcode'], "*", ",");
    idBar = idBar.split(',');
    sessionStorage.setItem('idBar', JSON.stringify(idBar));
    //
    let idMnd = Data[0]['Id_Moneda'];
    sessionStorage.setItem('idMnd', Data[0]['Id_Moneda']);
    $('#cboMoneda').selectpicker();
    $('#cboMoneda').selectpicker('val', idMnd );
    $('#cboMoneda').selectpicker('refresh');
    //
    callerRet();
    callerEtd();
    callerTnd();
    callerCat();
    callerFab();
    callerMar();
    callerBar();
    //
}
//
async function callerRet(){ await asyncRet(); }
//
async function callerEtd(){ await asyncEtd(); }
//
async function callerTnd(){ await asyncTnd(); }
//
async function callerCat(){ await asyncCat(); }
//
async function callerFab(){ await asyncFab(); }
//
async function callerMar(){ await asyncMar(); }
//
async function callerBar(){ await asyncBar(); }
//
function asyncRet(){
    return new Promise((resolve,reject)=>{
        //here our function should be implemented
        //
        //debugger;
        let idSem = $('#cboSemanas').val();
        var settings = {
            url: sessionStorage.getItem('urlApi') + 'getAllRetxMnyMrk/' + idSem + '',
            method: "get",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded",
                Authorization: "Bearer " + localStorage.getItem('Token'),
            },
        };
        $.ajax(settings)
            .done(function(response) {
                //debugger;
                let select = $('#cboRetailers');
                select.find('option').remove();
                for (var i = 0; i < response.data.length; i++) {
                    select.append( "<option value=" + response.data[i].id + ">" + response.data[i].nombre + "</option>" );
                }
                //
                let idRet = JSON.parse(sessionStorage.getItem('idRet'));
                $('#cboRetailers').selectpicker();
                $('#cboRetailers').selectpicker('val', idRet );
                $('#cboRetailers').selectpicker('refresh');
                //
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
                            toast.addEventListener('mouseenter', Swal.stopTimer);
                            toast.addEventListener('mouseleave', Swal.resumeTimer);
                        },
                    });
                    Toast.fire({
                        title: "Su Session ha Expirado",
                        confirmButtonText: `Ok`,
                    });
                    window.location = "/retailscannig/index.php";
                }
            })
            .always(function(jqXHR, textStatus) {
                $('#cargando').css('display', 'none');
                $('.selectpicker').prop('disabled', false);
                $('.selectpicker').selectpicker('refresh');
            });
    });
}
//
function asyncEtd(){
    return new Promise((resolve,reject)=>{
        //here our function should be implemented
        //
        $('.selectpicker').prop('disabled', true);
        $('.selectpicker').selectpicker('refresh');
        let idSem = $('#cboSemanas').val();
        // Retrieve the object from storage
        let idRet = JSON.parse(sessionStorage.getItem('idRet'));
        //console.log(idRet);
        //debugger;
        var settings = {
            url: sessionStorage.getItem('urlApi') + 'getAllEtdxMnyMrk/' + idSem + '/' + idRet + '',
            method: "get",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded",
                Authorization: "Bearer " + localStorage.getItem('Token'),
            },
        };
        $.ajax(settings)
        .done(function(response) {
            //debugger;
            let select = $('#cboEstados');
            select.find('option').remove();
            for (var i = 0; i < response.data.length; i++) {
                select.append(
                    "<option value=" +
                    response.data[i].id +
                    ">" +
                    response.data[i].nombre +
                    "</option>"
                );
            }
            //
            let idEtd = JSON.parse(sessionStorage.getItem('idEtd'));
            $('#cboEstados').selectpicker();
            $('#cboEstados').selectpicker('val', idEtd );
            $('#cboEstados').selectpicker('refresh');
            //
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
                        toast.addEventListener('mouseenter', Swal.stopTimer);
                        toast.addEventListener('mouseleave', Swal.resumeTimer);
                    },
                });
                Toast.fire({
                    title: "Su Session ha Expirado",
                    confirmButtonText: `Ok`,
                });
                window.location = "/retailscannig/index.php";
            }
        })
        .always(function(jqXHR, textStatus) {
            $('#cargando').css('display', 'none');
            $('.selectpicker').prop('disabled', false);
            $('.selectpicker').selectpicker('refresh');
        });
            //
    }); // Fin
}
//
function asyncTnd(){
    return new Promise((resolve,reject)=>{
        //here our function should be implemented
        //
        $('#cargando').css('display', 'block');
        $('.selectpicker').prop('disabled', true);
        $('.selectpicker').selectpicker('refresh');
        let idSem = $('#cboSemanas').val();
        let idRet = JSON.parse(sessionStorage.getItem('idRet'));
        let idEtd = JSON.parse(sessionStorage.getItem('idEtd'));
        var settings = {
            url: sessionStorage.getItem('urlApi') + 'getAllTndxMnyMrk/' + idSem + '/' + idRet + '/' + idEtd + '',
            method: "get",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded",
                Authorization: "Bearer " + localStorage.getItem('Token'),
            },
        };
        $.ajax(settings)
            .done(function(response) {
                //debugger;
                let select = $('#cboTiendas');
                select.find('option').remove();
                for (var i = 0; i < response.data.length; i++) {
                    select.append(
                        "<option value=" +
                        response.data[i].id +
                        ">" +
                        response.data[i].nombre +
                        "</option>"
                    );
                }
                //

                let idTnd = JSON.parse(sessionStorage.getItem('idTnd'));
                $('#cboTiendas').selectpicker();
                $('#cboTiendas').selectpicker('val', idTnd );
                $('#cboTiendas').selectpicker('refresh');
                //
                //$('#cboTiendas').focus();
                //
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
                            toast.addEventListener('mouseenter', Swal.stopTimer);
                            toast.addEventListener('mouseleave', Swal.resumeTimer);
                        },
                    });
                    Toast.fire({
                        title: "Su Session ha Expirado",
                        confirmButtonText: `Ok`,
                    });
                    window.location = "/retailscannig/index.php";
                }
            })
            .always(function(jqXHR, textStatus) {
                $('#cargando').css('display', 'none');
                $('.selectpicker').prop('disabled', false);
                $('.selectpicker').selectpicker('refresh');
            });
            //
    }); // Fin
}
//
function asyncCat(){
    return new Promise((resolve,reject)=>{
        //here our function should be implemented
        $('#cargando').css('display', 'block');
        $('.selectpicker').prop('disabled', true);
        $('.selectpicker').selectpicker('refresh');
        //
        let idSem = $('#cboSemanas').val();
        let idRet = JSON.parse(sessionStorage.getItem('idRet'));
        let idTnd = JSON.parse(sessionStorage.getItem('idTnd'));
        //
        var settings = {
            url: sessionStorage.getItem('urlApi') + 'getAllCatxMnyMrk/' + idSem + '/' + idRet + '/' + idTnd + '',
            method: "get",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded",
                Authorization: "Bearer " + localStorage.getItem('Token'),
            },
        };
        $.ajax(settings)
            .done(function(response) {
                let select = $('#cboCategorias');
                select.find('option').remove();
                for (var i = 0; i < response.data.length; i++) {
                    select.append(
                        "<option value=" +
                        response.data[i].id +
                        ">" +
                        response.data[i].nombre +
                        "</option>"
                    );
                }
                let idCat = JSON.parse(sessionStorage.getItem('idCat'));
                $('#cboCategorias').selectpicker();
                $('#cboCategorias').selectpicker('val', idCat );
                $('#cboCategorias').selectpicker('refresh');
                //
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
                            toast.addEventListener('mouseenter', Swal.stopTimer);
                            toast.addEventListener('mouseleave', Swal.resumeTimer);
                        },
                    });
                    Toast.fire({
                        title: "Su Session ha Expirado",
                        confirmButtonText: `Ok`,
                    });
                    window.location = "/retailscannig/index.php";
                }
            })
            .always(function(jqXHR, textStatus) {
                $('#cargando').css('display', 'none');
                $('.selectpicker').prop('disabled', false);
                $('.selectpicker').selectpicker('refresh');
            });
            //
    }); // Fin
}
//
function asyncFab(){
    return new Promise((resolve,reject)=>{
        //here our function should be implemented
        //
        $('#cargando').css('display', 'block');
        $('.selectpicker').prop('disabled', true);
        $('.selectpicker').selectpicker('refresh');
        let idSem = $('#cboSemanas').val();
        let idRet = JSON.parse(sessionStorage.getItem('idRet'));
        let idTnd = JSON.parse(sessionStorage.getItem('idTnd'));
        let idCat = JSON.parse(sessionStorage.getItem('idCat'));
        var settings = {
            url: sessionStorage.getItem('urlApi') + 'getAllFabxMnyMrk/' + idSem + '/' + idRet + '/' + idTnd + '/' +
                idCat + '',
            method: "get",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded",
                Authorization: "Bearer " + localStorage.getItem('Token'),
            },
        };
        $.ajax(settings)
            .done(function(response) {
                //debugger;
                let select = $('#cboFabricantes');
                select.find('option').remove();
                for (var i = 0; i < response.data.length; i++) {
                    select.append(
                        "<option value=" +
                        response.data[i].id +
                        ">" +
                        response.data[i].nombre +
                        "</option>"
                    );
                }
                let idFab = JSON.parse(sessionStorage.getItem('idFab'));
                $('#cboFabricantes').selectpicker();
                $('#cboFabricantes').selectpicker('val', idFab );
                $('#cboFabricantes').selectpicker('refresh');
                //
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
                            toast.addEventListener('mouseenter', Swal.stopTimer);
                            toast.addEventListener('mouseleave', Swal.resumeTimer);
                        },
                    });
                    Toast.fire({
                        title: "Su Session ha Expirado",
                        confirmButtonText: `Ok`,
                    });
                    window.location = "/retailscannig/index.php";
                }
            })
            .always(function(jqXHR, textStatus) {
                $('#cargando').css('display', 'none');
                $('.selectpicker').prop('disabled', false);
                $('.selectpicker').selectpicker('refresh');
            });
            //

    }); // Fin
}
//
function asyncMar(){
    return new Promise((resolve,reject)=>{
        //here our function should be implemented
        //
        $('#cargando').css('display', 'block');
        $('.selectpicker').prop('disabled', true);
        $('.selectpicker').selectpicker('refresh');
        let idSem = $('#cboSemanas').val();
        let idRet = JSON.parse(sessionStorage.getItem('idRet'));
        let idTnd = JSON.parse(sessionStorage.getItem('idTnd'));
        let idCat = JSON.parse(sessionStorage.getItem('idCat'));
        let idFab = JSON.parse(sessionStorage.getItem('idFab'));
        //
        var settings = {
            url: sessionStorage.getItem('urlApi') + 'getAllMrcxMnyMrk/' + idSem + '/' + idRet + '/' + idTnd + '/' +
                idCat + '/' + idFab + '',
            method: "get",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded",
                Authorization: "Bearer " + localStorage.getItem('Token'),
            },
        };
        $.ajax(settings)
            .done(function(response) {
                let select = $('#cboMarcas');
                select.find('option').remove();
                for (var i = 0; i < response.data.length; i++) {

                    select.append(
                        "<option value=" +
                        response.data[i].id +
                        ">" +
                        response.data[i].nombre +
                        "</option>"
                    );

                }
                let idMar = JSON.parse(sessionStorage.getItem('idMar'));
                $('#cboMarcas').selectpicker();
                $('#cboMarcas').selectpicker('val', idMar );
                $('#cboMarcas').selectpicker('refresh');
                //
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
                            toast.addEventListener('mouseenter', Swal.stopTimer);
                            toast.addEventListener('mouseleave', Swal.resumeTimer);
                        },
                    });
                    Toast.fire({
                        title: "Su Session ha Expirado",
                        confirmButtonText: `Ok`,
                    });
                    window.location = "/retailscannig/index.php";
                }
            })
            .always(function(jqXHR, textStatus) {
                $('#cargando').css('display', 'none');
                $('.selectpicker').prop('disabled', false);
                $('.selectpicker').selectpicker('refresh');
            });
            //
    }); // Fin
}
//
function asyncBar(){
    return new Promise((resolve,reject)=>{
        //here our function should be implemented
        //debugger;
        $('#cargando').css('display', 'block');
        $('.selectpicker').prop('disabled', true);
        $('.selectpicker').selectpicker('refresh');
        let idSem = $('#cboSemanas').val();
        let idRet = JSON.parse(sessionStorage.getItem('idRet'));
        let idTnd = JSON.parse(sessionStorage.getItem('idTnd'));
        let idCat = JSON.parse(sessionStorage.getItem('idCat'));
        let idFab = JSON.parse(sessionStorage.getItem('idFab'));
        let idMar = JSON.parse(sessionStorage.getItem('idMar'));
        //
        var settings = {
            url: sessionStorage.getItem('urlApi') + 'getAllCodBarxMnyMrk/' + idSem + '/' + idRet + '/' + idTnd + '/' +
                idCat + '/' + idFab + '/' + idMar + '',
            method: "get",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded",
                Authorization: "Bearer " + localStorage.getItem('Token'),
            },
        };
        $.ajax(settings)
            .done(function(response) {
                let select = $('#cboBarcodes');
                select.find('option').remove();
                for (var i = 0; i < response.data.length; i++) {
                    select.append(
                        "<option value=" +
                        response.data[i].id +
                        ">" +
                        response.data[i].nombre +
                        "</option>"
                    );
                }
                let idBar = JSON.parse(sessionStorage.getItem('idBar'));
                $('#cboBarcodes').selectpicker();
                $('#cboBarcodes').selectpicker('val', idBar );
                $('#cboBarcodes').selectpicker('refresh');
                //
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
                            toast.addEventListener('mouseenter', Swal.stopTimer);
                            toast.addEventListener('mouseleave', Swal.resumeTimer);
                        },
                    });
                    Toast.fire({
                        title: "Su Session ha Expirado",
                        confirmButtonText: `Ok`,
                    });
                    window.location = "/retailscannig/index.php";
                }
            })
            .always(function(jqXHR, textStatus) {
                $('#cargando').css('display', 'none');
                $('.selectpicker').prop('disabled', false);
                $('.selectpicker').selectpicker('refresh');
            });
            //
    }); // Fin

}

