$(document).ready(function() {
    $(function($) {
        $('#inputPrecioMasivoProcesar').autoNumeric('init', {
            lZero: 'deny',
            aSep: '.',
            aDec: ','
        });
        $('#inputPrecioMasivoModal').autoNumeric('init', {
            lZero: 'deny',
            aSep: '.',
            aDec: ','
        });
        $('#inputPrecioUnitario').autoNumeric('init', {
            lZero: 'deny',
            aSep: '.',
            aDec: ','
        });
        $('#inputCantidad').autoNumeric('init', {
            lZero: 'deny',
            aSep: '.',
            aDec: ','
        });
    });
    
    $('#showBotones').hide();
    $('#showTabla').hide();
    $('#DatosProductosPendiente').hide();//aaaaaaaaa
    //$('#selectProductosPendientes').select2();
    var PPTOP = $('input:radio[name=PPTOP]:checked').val()
    cargarProductosPendientesTopN('#selectProductosPendientes',PPTOP);
    
    // Crear Producto
    
    //cargarCategoria("#selectCategoriaNP",0);
    $('#FormProducto').validate({
        rules: {
            selectCategoriaNP: {
                required: true,
            },
            selectFabricanteNP: {
                required: true
            },
            selectMarca: {
                required: true
            },
            selectSegmentoNP: {
                required: true
            },
            selectTamanoNP: {
                required: true
            },
            selectTamanoRangoNP: {
                required: true
            },
            selectUnidadMedidaNP: {
                required: true
            },
            inputFragmentacion: {
                required: true
            },
            inputCodigoBarra: {
                required: true,
                minlength: 13,
                maxlength: 20
            },
            inputProducto: {
                required: true
            },
            activoAdd: {
                required: true
            },
            pendienteAdd: {
                required: true
            },
            inputAbreviatura: {
                required: true,
                minlength: 3,
                maxlength: 5
            },
        },
        messages: {
            selectCategoriaNP: {
                required: "Por favor ingrese la categoria"
            },
            selectMarca: {
                required: "Por favor ingrese la Marca"
            },
            inputTam: {
                required: "Por favor ingrese el Producto",
            },
            inputAbreviatura: {
                required: "Por favor ingrese la abreviatura del Producto",
                minlength: "Su abrevitura debe tener al menos 3 caracteres",
                maxlength: "Su abreviatura debe tener al menos 5 caracteres"
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
    document.getElementById('FormProducto').reset();
    //cargarCategoria("#selectCategoriaNPTabla",0);
    /* ------------------------- */
    // Fin Crear Producto
});


$("#crearPN").click(function() {
    cargarCategoria("#selectCategoriaNP",-1);
});


$("#selectFabricanteNP").change(function() {
    var id_categoria = $("#selectCategoriaNP").val();
    var id_fabricante = $("#selectFabricanteNP").val();
    let selectMarca = $("#selectMarcaNP");
    selectMarca.find("option").remove();
    cargarMarca("#selectMarcaNP",id_categoria,id_fabricante,0);
});

$("#selectCategoriaNP").change(function() {
    var id_categoria = $("#selectCategoriaNP").val();
    cargarFabricante("#selectFabricanteNP",id_categoria,0);
    let selectMarca = $("#selectMarca");
    selectMarca.find("option").remove();

    if ($.trim($('#selectFabricanteNP').val()) !== '') {
        var id_fabricante = $("#selectFabricante").val();
        let selectMarca = $("#selectMarca");
        selectMarca.find("option").remove();
        cargarMarca("#selectMarcaNP",id_categoria,id_fabricante,0);
    }

    cargarSegmento("#selectSegmentoNP",id_categoria,0);
    cargarTamano("#selectTamanoNP",id_categoria,0);
    cargarTamanoRango("#selectTamanoRangoNP",id_categoria,0);
    cargarUnidadMedida("#selectUnidadMedidaNP",id_categoria,0);
    cargarAtributo1("#selectAtributo1NP",id_categoria,0);
    cargarAtributo2("#selectAtributo2NP",id_categoria,0);
    cargarAtributo3("#selectAtributo3NP",id_categoria,0);
    cargarAtributo4("#selectAtributo4NP",id_categoria,0);
    cargarAtributo5("#selectAtributo5NP",id_categoria,0);
    cargarAtributo6("#selectAtributo6NP",id_categoria,0);
    cargarAtributo7("#selectAtributo7NP",id_categoria,0);
});

function showMostrarMasivoPrecios() {    
    $("#inputCodigoBarraModal").val($("#selectProductosPendientes").val());
	$("#inputPrecioMasivoModal").val("");
	$("#modal-MasivoPrecios").modal("show");
}
//****
function actualizarPrecioMasivo(){
    var CodigoBarras = $('#inputCodigoBarraModal').val();
    var precio = eliminarSeparadorMiles($('#inputPrecioMasivoModal').val());
    
    var settings = {
        "url": localStorage.getItem("urlApi")+'UpdatePrecioMasivoProductosPendientes/' + CodigoBarras+"/"+precio,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        var CodigoBarras = $('#selectProductosPendientes').val();
        cargarTabla(CodigoBarras);
        cargarAVG(CodigoBarras);
        cargarModa(CodigoBarras);
        $("#modal-MasivoPrecios").modal("hide");
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
//----
function actualizarPrecioMasivoV2(CodigoBarras,Precio,ArraySeleccionados){
    //var CodigoBarras = $('#inputCodigoBarraModal').val();
    //var Precio = eliminarSeparadorMiles($('#inputPrecioMasivoModal').val());
    
    console.log('Longitud array: '+ArraySeleccionados.length)
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": localStorage.getItem("urlApi")+'UpdatePrecioMasivoProductosPendientes',
        "method": "POST",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
        "data": {
            "codigoBarra": CodigoBarras,
            "precio": Precio,
            "array": ArraySeleccionados
        }
    }
    $.ajax(settings).done(function(response) {
        var CodigoBarras = $('#selectProductosPendientes').val();
        cargarTabla(CodigoBarras);
        cargarAVG(CodigoBarras);
        cargarModa(CodigoBarras);
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
//**** */
function cargarAVG(CodigoBarra) {
    var settings = {
        "url": localStorage.getItem("urlApi")+'getAVGProductosPendientes/' + CodigoBarra,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        $('#inputPromedioR').val(new Intl.NumberFormat("de-DE").format(response[0].promedio));
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

function cargarModa(CodigoBarra) {
    var settings = {
        "url": localStorage.getItem("urlApi")+'getModaProductosPendientes/' + CodigoBarra,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        //$('#inputModaR').val(response[0].Moda);
        $('#inputModaR').val(new Intl.NumberFormat("de-DE").format(response[0].Moda));
        $('#DatosProductosPendiente').show();
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

function cargarResumen(semana,categoria,producto) {
    var settings = {
        "url": localStorage.getItem("urlApi")+'getResumenConsumoSemanaCatProd/' + semana+'/'+categoria+'/'+producto,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        $('#inputPORCMinVal').val(response.Min_Por_Val);
        $('#inputPORCMaxVal').val(response.Max_Por_Val);
        $('#inputMinVal').val(response.Min_Val);
        $('#inputMaxVal').val(response.Max_Val);
        $('#inputPromedio').val(response.Promedio);
        $('#inputModa').val(response.Moda);
        cargarTabla(semana,categoria,producto,response.Min_Val,response.Max_Val);
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

function cargarTotales(etiqueta,titulo,idCodigoBarras,idStatus) {
    var settings = {
        "url": localStorage.getItem("urlApi")+'getContarProductosPendientesxValidar/'+idCodigoBarras+'/'+idStatus,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        $(etiqueta).html('<strong>'+titulo+'</strong>'+response.data[0].total);
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

function verificarProductoExista() {
    CodigoBarras = $('#selectProductosPendientes').val();
    //alert('CodigoBarras: '+CodigoBarras);
    var settings = {
        "url": localStorage.getItem("urlApi")+'getProductoPendienteExista/'+CodigoBarras,
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        if (response.data[0].cant == 0){
            Swal.fire({
                icon: 'error',
                title: 'Codigo Barras: '+CodigoBarras,
                text: 'No existe, debe crearlo primero..!',
                })
        }else{
            CerrarProductoPendiente(CodigoBarras);
            $('#showBotones').hide();
            $('#showTabla').hide();
            $('#DatosProductosPendiente').hide();
            //$('#selectProductosPendientes').select2();
            jQuery("#PPTOP").attr('checked', true);
            var PPTOP = $('input:radio[name=PPTOP]:checked').val()
            cargarProductosPendientesTopN('#selectProductosPendientes',PPTOP);
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


function CerrarProductoPendiente(CodigoBarras){
    
    const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
    })
    swalWithBootstrapButtons.fire({
        title: '¿Seguro Estan Verificados',
        text: ".. todos los Productos?",
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText:  'No, Cancelar',
        confirmButtonText: 'Si, Cerrar Producto',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            var settings = {
                "url": localStorage.getItem("urlApi")+'updateCerrarProductoPendiente/'+CodigoBarras,
                "method": "get",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
            }
            $.ajax(settings).done(function(response){
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
            //cargarTabla(idConsumo);
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
                    //var form = document.querySelector('#FormUsuariosEdit');
                    //form.reset();
                    //window.location = '/homepantry20/index.php';
                }
            })
        }
    })
}


function cargarTotalesAll(etiqueta,titulo,idCodigoBarras) {
    var settings = {
        "url": localStorage.getItem("urlApi")+'getContarProductosPendientesxValidarAll/'+idCodigoBarras,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        $(etiqueta).html('<strong>'+titulo+'</strong>'+response.data[0].total);
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



function cargarResumenProducto(idCodigoBarras) {
    var settings = {
        "url": localStorage.getItem("urlApi")+'getPendbuscarDatosCodigoBarras/'+idCodigoBarras,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        $('#categoriaR').html("Categoria: "+response.data[0].Categoria);
        $('#descripcionR').html("Descripción: "+response.data[0].Producto);
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


function cargarProductosPendientes(identificador) {
    var settings = {
        "url": localStorage.getItem("urlApi")+'getAllProductosPendiente/',
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        let selected = $(identificador);
        selected.find("option").remove();
        selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].TipMed){ 
                TipoMed="Med"
            }else{
                TipoMed=""
            }
            selected.append("<option value=" + response.data[i].Numero_codigo_barras + ">" + response
                .data[i].Numero_codigo_barras +" - ("+response.data[i].Total+") - "+response.data[i].Estatus+" - "+TipoMed+"</option>");
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

function cargarProductosPendientesTopN(identificador,N) {
    var settings = {
        "url": localStorage.getItem("urlApi")+'getAllProductosPendienteTopN/'+N,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        let selected = $(identificador);
        selected.find("option").remove();
        selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].TipMed){ 
                TipoMed="Med"
            }else{
                TipoMed=""
            }
            selected.append("<option value=" + response.data[i].Numero_codigo_barras + ">" + response
                .data[i].Numero_codigo_barras +" - ("+response.data[i].Total+") - "+response.data[i].Estatus+" - "+TipoMed+"</option>");
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

function UpdatePrecioCantidadManual(idConsumoDetalle,idMoneda,tasaCambio,cantidad,precio){
    var CodigoBarras = $('#selectProductosPendientes').val();
    $('#inputId').val(idConsumoDetalle);
    $('#inputIdMoneda').val(idMoneda);
    $('#inputTasaCambio').val(tasaCambio);
    $('#inputCodigoBarra').val(CodigoBarras);
    $('#inputCantidad').val(new Intl.NumberFormat("de-DE").format(cantidad));
    $('#inputPrecioUnitario').val(new Intl.NumberFormat("de-DE").format(precio));
    $('#modal-EditarDatos').modal('show');
}

function Visualizar(cantidad,precio,tasaCambio,/*moneda,*/precioConversion){
    var CodigoBarras = $('#selectProductosPendientes').val();
    $('#inputCodigoBarrasVis').val(CodigoBarras);
    $('#inputCantidadVis').val(new Intl.NumberFormat("de-DE").format(cantidad));
    $('#inputPrecioVis').val(new Intl.NumberFormat("de-DE").format(precio));
    $('#inputTasaCambioVis').val(new Intl.NumberFormat("de-DE").format(tasaCambio));
    //$('#inputMonedaVis').val(moneda);
    $('#inputTotalCompraVis').val(new Intl.NumberFormat("de-DE").format(precioConversion));
    $('#MostrarDetallesModal').modal('show');
}

function ActualizarConsumoManual() {
    
    var idConsumoDetalle =$('#inputId').val();
    var idMoneda = $('#inputIdMoneda').val();
    var tasaCambio = $('#inputTasaCambio').val();
    var cantidad = eliminarSeparadorMiles($('#inputCantidad').val());
    var precio = eliminarSeparadorMiles($('#inputPrecioUnitario').val());
    //precio = preformatFloat(precio);
    //alert(precio);
    //alert(cantidad);
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": localStorage.getItem("urlApi")+'UpdateProductosPendientesPrecioxAll/'+idConsumoDetalle+'/'+idMoneda+'/'+tasaCambio+'/'+precio+'/'+cantidad,
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        var CodigoBarras = $('#selectProductosPendientes').val();
        cargarTabla(CodigoBarras);
        cargarAVG(CodigoBarras);
        cargarModa(CodigoBarras);
    $('#modal-EditarDatos').modal('hide');
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
            var form = document.querySelector('#FormUsuariosEdit');
            form.reset();
            window.location = '/homepantry20/index.php';
        }
    })
}

function UpdatePrecioxPromedio(idConsumoDetalle,idMoneda,tasaCambio,cantidad){
    var precio = eliminarSeparadorMiles($('#inputPromedioR').val());
    const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
    })
    swalWithBootstrapButtons.fire({
        title: 'Desea Actualizar el Precio',
        text: ".. con el Promedio ??",
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText:  'No, Cancelar',
        confirmButtonText: 'Si, Actualizat con Promedio',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            var settings = {
                "url": localStorage.getItem("urlApi")+'UpdateProductosPendientesPrecioxAll/'+idConsumoDetalle+'/'+idMoneda+'/'+tasaCambio+'/'+precio+'/'+cantidad,
                "method": "get",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
            }
            $.ajax(settings).done(function(response){
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
            var CodigoBarras = $('#selectProductosPendientes').val();
            cargarTabla(CodigoBarras);
            cargarAVG(CodigoBarras);
            cargarModa(CodigoBarras);
    
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
                    //var form = document.querySelector('#FormUsuariosEdit');
                    //form.reset();
                    //window.location = '/homepantry20/index.php';
                }
            })
        }
    })
}
function UpdatePrecioxModa(idConsumoDetalle,idMoneda,tasaCambio,cantidad){
    var precio = eliminarSeparadorMiles($('#inputModaR').val());
    const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
    })
    swalWithBootstrapButtons.fire({
        title: 'Desea Actualizar el Precio',
        text: ".. con la Moda ?",
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText:  'No, Cancelar',
        confirmButtonText: 'Si, Actualizat con Moda',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            var settings = {
                "url": localStorage.getItem("urlApi")+'UpdateProductosPendientesPrecioxAll/'+idConsumoDetalle+'/'+idMoneda+'/'+tasaCambio+'/'+precio+'/'+cantidad,
                "method": "get",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
            }
            $.ajax(settings).done(function(response){
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
            var CodigoBarras = $('#selectProductosPendientes').val();
            cargarTabla(CodigoBarras);
            cargarAVG(CodigoBarras);
            cargarModa(CodigoBarras);
    
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
                    //var form = document.querySelector('#FormUsuariosEdit');
                    //form.reset();
                    //window.location = '/homepantry20/index.php';
                }
            })
        }
    })
}

function eliminarSeparadorMiles(number){
    
    const regex = /[.]/g;
    var aux = number.replace(regex, '');
    aux = aux.replace(',', '.');
    return aux;
}




    