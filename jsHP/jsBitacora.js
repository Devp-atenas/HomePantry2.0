function Bitacora(idUsuario,IP,Operacion,idPrincipal,CRUD) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "async": true,
        "crossDomain": true,
        "url":urlApi+'addHistory',
        "method": "POST",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        },
        "data": {
            "idUsuario": idUsuario,
            "IP": IP,
            "Operacion": Operacion,
            "idPrincipal": idPrincipal,
            "CRUD": CRUD
            
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
