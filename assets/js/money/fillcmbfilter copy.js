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

    debugger;
    //let idRet = reemplazaTodo(Data[0]['Id_Retail'], "*", ",");
    //sessionStorage.setItem('idRet', Data[0]['Id_Retail']);
    //sessionStorage.setItem('idRet', idRet);

    console.log('idRet org: ', Data[0]['Id_Retail']);
    let idRet = reemplazaTodo(Data[0]['Id_Retail'], "*", ",");
    /*
    console.log('idRet: ', idRet);
    sessionStorage.setItem('idRet', JSON.stringify(idRet));
    */
    //
    idRet = idRet.split(',');
    sessionStorage.setItem('idRet', JSON.stringify(idRet));
    console.log('idRet split: ', idRet);
    //
    idRet = JSON.parse(sessionStorage.getItem('idRet'));

    let item = sessionStorage.getItem('idRet');
    let user = item ? JSON.stringify(item) : {}
    console.log('user '+user);


/*
    sessionStorage.setItem('idEtd', Data[0]['Id_Estado']);
    sessionStorage.setItem('idTnd', Data[0]['Id_Tienda']);
    sessionStorage.setItem('idCat', Data[0]['Id_Categoria']);
    sessionStorage.setItem('idFab', Data[0]['Id_Fabricante']);
    sessionStorage.setItem('idMar', Data[0]['Id_Marca']);
    sessionStorage.setItem('idBar', Data[0]['Barcode']);
    sessionStorage.setItem('idMnd', Data[0]['Id_Moneda']);
    */
    debugger;
    //
    callerRet();
    callerEtd();
    //
    /*
    Promise.all([fillRet(), fillEtd() ]).then(() => { // try removing ajax 1 or replacing with ajax2
        //alert('All Ajax done with success!');
        console.log('All Ajax done with success!');
        //
        }).catch((response) => {
        //alert('All Ajax done: some failed!');
        console.log('All Ajax some failed!');
    });
    /*
    sessionStorage.setItem('idEtd', idEtd);
    sessionStorage.setItem('idTnd', idTnd);
    sessionStorage.setItem('idCat', idCat);
    sessionStorage.setItem('idFab', idFab);
    sessionStorage.setItem('idMar', idMar);
    sessionStorage.setItem('idBar', idBar);
    sessionStorage.setItem('idMnd', idMnd);
    */
    //
}
//
async function callerRet(){
    console.log("Retailer");
    await asyncRet();
    console.log("Retailer final");
}
//
async function callerEtd(){
    console.log("Estado");
    await asyncEtd();
    console.log("Estado final");
}
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
                if(sessionStorage.getItem('idRet')!=0){
                    let idRet = reemplazaTodo(sessionStorage.getItem('idRet'), "*", ",");
                    idRet = idRet.split(',');
                    $('#cboRetailers').selectpicker();
                    $('#cboRetailers').selectpicker('val', idRet );
                    $('#cboRetailers').selectpicker('refresh');
                }
                //$('#cboRetailers').focus();
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
        debugger;
        //$('#cargando').css('display', 'block');
        $('.selectpicker').prop('disabled', true);
        $('.selectpicker').selectpicker('refresh');
        let idSem = $('#cboSemanas').val();
        // Retrieve the object from storage

        let idRet = JSON.parse(sessionStorage.getItem('idRet'));
        console.log(idRet);
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
                debugger;
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
                if(sessionStorage.getItem('idEtd')!=0){
                    let idEtd = reemplazaTodo(sessionStorage.getItem('idEtd'), "*", ",");
                    idEtd = idEtd.split(',');
                    $('#cboEstados').selectpicker();
                    $('#cboEstados').selectpicker('val', idEtd );
                    $('#cboEstados').selectpicker('refresh');
                }
                //$('#cboEstados').focus();
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

