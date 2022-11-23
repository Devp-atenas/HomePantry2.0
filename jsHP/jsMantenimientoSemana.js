$(document).ready(function() {
    //cargarPerfil('#selectPerfil',0);
    fechaDesde.max = new Date().toISOString().split("T")[0];
    fechaHasta.max = new Date().toISOString().split("T")[0];
    cargarPeriodo('#inputPeriodo',0);
});

function cargarPeriodo(etiqueta,idSeleccionado) {
    var settings = {
        "url":localStorage.getItem("urlApi")+'getAllPeriodo',
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        let selected = $(etiqueta);
        selected.find("option").remove();
        if (idSeleccionado == 0){
            selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].Id == idSeleccionado) {
                selected.append("<option value=" + response.data[i].Id + " selected>" +
                    response.data[i].Periodo + "</option>");
            } else {
                selected.append("<option value=" + response.data[i].Id + ">" + response.data[i].Periodo + "</option>");
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


function deleteAction_(id){
    alert(id);
}

function deleteAction(id) {
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
                "url": '<?php echo urlApi; ?>deleteSemana/' + id,
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

function EditAction(id) {
    document.getElementById('FormSemanaEdit').reset();
    var settings = {
        "url": localStorage.getItem("urlApi")+'getSemanaId/' + id,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        fechaDesdeEdit.max = new Date().toISOString().split("T")[0];
        fechaHastaEdit.max = new Date().toISOString().split("T")[0];
        $('#inputCodSemanaEdit').val(response.data[0].IdSemana);
        cargarPeriodo('#inputPeriodoEdit',response.data[0].Id_Periodo);
        $('#inputAnoEdit').val(response.data[0].IdAno);
        $('#inputMesEdit').val(response.data[0].IdMes);

        //$('#fechaDesdeEdit').datePicker().val(response.data[0].Fec_Inicio);
        //$('#fechaHastaEdit').val(response.data[0].Fec_Inicio).datepicker("update");

        $('#fechaDesdeEdit').val(response.data[0].Fec_Inicio);
        $('#fechaHastaEdit').val(response.data[0].Fec_Fin);

        $('#inputDescripcionEdit').val(response.data[0].Semana);
        $('#inputDolarEdit').val(response.data[0].Dolar);
        $('#inputEuroEdit').val(response.data[0].Euro);
        $('#inputPetroEdit').val(response.data[0].Petro);
        $('#inputPesoEdit').val(response.data[0].Peso);
        $('#inputSemanaCortaEdit').val(response.data[0].SemanaCorta);
        var radios  = $("input:radio[name='UltSemEdit']");
        radios.filter("[value='"+response.data[0].Ind_Ult+"']").attr('checked', true);
        
        $('#modal-SemanaEditar').modal('show');
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

function ActualizarRegistro() {
    if ($("#FormAtributoEdit").valid()) {
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": '<?php echo urlApi; ?>updateAtributo3___',
            "method": "post",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "data": {
                "idSemana": $("#inputCodSemanaEdit").val(),
                "idPeriodo": $("#inputPeriodoEdit").val(),
                "Semana": $("#inputDescripcionEdit").val(),
                "idAno": $("#inputAnoEdit").val(),
                "idMes": $("#inputMesEdit").val(),
                "SemanaCorta": $("#inputSemanaCortaEdit").val(),
                "FecInicio": $("#fechaDesdeEdit").val(),
                "FecFin": $("#fechaHastaEdit").val(),
                "UltSem": $('input:radio[name=UltSemEdit]:checked').val(),
                "Dolar": $("#inputDolarEdit").val(),
                "Euro": $("#inputEuroEdit").val(),
                "Petro": $("#inputPetroEdit").val(),
                "Peso": $("#inputPesoEdit").val()
            }
        }
        $.ajax(settings).done(function(response) {
            let xtable = $('#TableAtributo').DataTable();
            xtable.ajax.reload(null, false);
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
            var form = document.querySelector('#FormAtributoEdit');
            form.reset();
            $('#modal-AtributoEditar').modal('hide');
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

//6666666666666666
function VisualizarAction(id) {
    var settings = {
        "url": '<?php echo urlApi; ?>getSemanaId/' + id,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        $('#inputCodigoVer').val(response.data[0].Id_Atributo);
        $('#inputCategoriaVer').val(response.data[0].Categoria);
        //$('#inputAtributoVer').val(response.data[0].Tamano);
        $('#inputAtributoVer').val(response.data[0].Atributo);
        //$('#inputAtributoEdit').val(response.data[0].Tamano);
        //Number.parseFloat(response.data[0].Tamano).toFixed(3);
        var oblig = $("input:radio[name='activoVer']");
        oblig.filter("[value='"+response.data[0].status+"']").attr('checked', true);
        $('#modal-AtributoVisualizar').modal('show');
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

