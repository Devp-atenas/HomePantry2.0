var idCategoria;
$(document).ready(function() {
    cargarJerarquia('#selectJerarquia',0);
});

$('#selectJerarquia').change(function(){
    document.getElementById('siguienteDepuracion').disabled = false;
    
});


$('#selectCategoriaTR').change(function(){
    var idCategoria = $('#selectCategoriaTR').val();
    cargarTamanoRango('#selectTamanoRango',idCategoria,0);
});


$("#Pre-DepurarTR").click(function() {  
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
        })
        swalWithBootstrapButtons.fire({
            title: "¿Seguro deseas depurar?",
            text: " ",
            icon: 'warning',
            showCancelButton: true,
            cancelButtonText:  'No, Cancelar',
            confirmButtonText: 'Si, Depurar',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                var idCategoriaTR = $("#selectCategoriaTR").val();
                var idTamanoRando = $("#selectTamanoRango").val();
                
                var settings = {
                    "url":localStorage.getItem("urlApi")+'XXXXXXXXXXXXXXXXXXXXXX',
                    "method": "post",
                    "headers": {
                        "Content-Type": "application/x-www-form-urlencoded",
                        "Authorization": "Bearer " + localStorage.getItem('Token')
                    },
                    "data": {
                        "idCategoriaTR":idCategoriaTR,
                        "idTamanoRando": idTamanoRando,
                        "idHogar":idHogar,
                        "observacion": observacion
                    }
                }
                $.ajax(settings).done(function(response){
                    $("#investigarConsumoModal").modal("hide");
                    cargarTablaConsumos(idConsumo);
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
                    }
                })
            }
        })



});


$("#siguienteDepuracion").click(function() {

    var accion = $('input:radio[name=accionDepurar]:checked').val()
    
    if (accion == 1){
        switch($('select[name="selectJerarquia"] option:selected').text()) {
            case "Fabricante":
                break;
            case 'Marca':
                break;
            case 'Segmento':
                break;
            case 'Rango Tamaño':
                cargarCategoria('#selectCategoriaTR',-1);
                $('#TamanoRangoModal').modal('show');
                break;
            case 'Tamaño':
                break;
            default:
                alert('default');
          }
    }else{
        alert('Llamar cargar tabla');
    }
});