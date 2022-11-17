function cargarSemana(identificador,idEditar) {
    var settings = {
        "url":localStorage.getItem("urlApi")+'getAllSemanaV1/',
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        let selected = $(identificador);
        selected.find("option").remove();
        if (idEditar == 0){
            selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].IdSemana == idEditar) {
                selected.append("<option value=" + response.data[i].IdSemana + " selected>" +
                    response.data[i].Semana + "</option>");
            } else {
                selected.append("<option value=" + response.data[i].IdSemana + ">" + response.data[i].Semana + "</option>");
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

