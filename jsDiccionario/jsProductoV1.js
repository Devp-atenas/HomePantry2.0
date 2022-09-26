$("#botonenviar").click(function() {
    if ($("#FormProducto").valid()) {
        var CodigoBarras = $('#inputCodigoBarra').val();
        existeCodigoBarra(CodigoBarras);
    }
});

$(document).ready(function() {

    
    $(function($) {
        $('#inputFragmentacion').autoNumeric('init', {
            lZero: 'deny',
            aSep: '.',
            aDec: ','
        });
        $('#inputFragmentacionEdit').autoNumeric('init', {
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

    //$('#inputCategoria').select2();
    $('#TableProducto').hide();
    cargarCategoria("#selectCategoria",-1);
    $('#FormProductoEdit').validate({
        rules: {
            selectCategoriaEdit: {
                required: true,
            },
            selectFabricanteEdit: {
                required: true,
            },
            selectMarcaEdit: {
                required: true,
            },
            selectSegmentoEdit: {
                required: true,
            },
            selectTamanoEdit: {
                required: true,
            },
            selectTamanoRangoEdit: {
                required: true,
            },
            selectUnidadMedidaEdit: {
                required: true,
            },
            inputCodigoBarraEdit: {
                required: true,
                minlength: 3
            },
            inputProductoEdit: {
                required: true,
                minlength: 3
            },
            
        },
        messages: {
            selectCategoriaEdit: {
                required: "Por favor ingrese la XXXXXXXX"
            },
            selectCategoriaEdit: {
                required: "Por favor ingrese la XXXXXXXX"
            },
            selectCategoriaEdit: {
                required: "Por favor ingrese la XXXXXXXX"
            },
            selectCategoriaEdit: {
                required: "Por favor ingrese la XXXXXXXX"
            },
            selectCategoriaEdit: {
                required: "Por favor ingrese la XXXXXXXX"
            },
            selectCategoriaEdit: {
                required: "Por favor ingrese la XXXXXXXX"
            },
            selectCategoriaEdit: {
                required: "Por favor ingrese la XXXXXXXX"
            },
            selectCategoriaEdit: {
                required: "Por favor ingrese la XXXXXXXX"
            },
            selectCategoriaEdit: {
                required: "Por favor ingrese la XXXXXXXX"
            },
            selectCategoriaEdit: {
                required: "Por favor ingrese la XXXXXXXX"
            },
            selectCategoriaEdit: {
                required: "Por favor ingrese la XXXXXXXX"
            },
            selectCategoriaEdit: {
                required: "Por favor ingrese la XXXXXXXX"
            },
            selectCategoriaEdit: {
                required: "Por favor ingrese la XXXXXXXX"
            },
            inputAbreviaturaEdit: {
                required: "Por favor ingrese la abreviatura de la Producto",
                minlength: "Su Abreviatura debe tener al menos 3 caracteres",
                maxlength: "Su Abreviatura debe tener al menos 5 caracteres"
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
    $('#FormProducto').validate({
        rules: {
            selectCategoria: {
                required: true,
            },
            selectFabricante: {
                required: true
            },
            selectMarca: {
                required: true
            },
            selectSegmento: {
                required: true
            },
            selectTamano: {
                required: true
            },
            selectTamanoRango: {
                required: true
            },
            selectUnidadMedida: {
                required: true
            },
            inputCodigoBarra: {
                required: true,
                minlength: 8,
                maxlength: 20
            },
            inputProducto: {
                required: true,
                minlength: 2,
                maxlength: 50
            },
            activoAdd: {
                required: true
            }
        },
        messages: {
            selectCategoria: {
                required: "Por favor ingrese la categoria"
            },
            selectFabricante: {
                required: "Por favor ingrese Fabricante"
            },
            selectMarca: {
                required: "Por favor ingrese el Marca",
            },
            selectSegmento: {
                required: "Por favor ingrese el Segmento",
            },
            selectTamanoRango: {
                required: "Por favor ingrese el Tamaño Rango",
            },
            selectTamano: {
                required: "Por favor ingrese el Tamaño",
            },
            selectUnidadMedida: {
                required: "Por favor ingrese el Unidad Medida",
            },
            inputCodigoBarra: {
                required: "Por favor ingrese el Codigo de Barra",
                minlength: "Longitud Minima 8",
                required: "Longitud Maxima 20",
                
            },
            inputProducto: {
                required: "Por favor ingrese el Producto",
                minlength: "Longitud Minima 8",
                maxlength: "Longitud Maxima 50",
                
            }
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
    cargarCategoria("#selectCategoriaTabla",-1);
});

function cargarNombreAtributos(id_categoria) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url": urlApi+'getNombreAtributos/' + id_categoria,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        $("#Atrib1").html(response.data[0].NomAtr01);
        $("#Atrib2").html(response.data[0].NomAtr02);
        $("#Atrib3").html(response.data[0].NomAtr03);
        $("#Atrib4").html(response.data[0].NomAtr04);
        $("#Atrib5").html(response.data[0].NomAtr05);
        $("#Atrib6").html(response.data[0].NomAtr06);
        $("#Atrib7").html(response.data[0].NomAtr07);
        
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

function cargarCategoria(etiqueta,idS) {
    var settings = {
        "url": localStorage.getItem("urlApi")+'getAllCategoriaV1',
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let select = $(etiqueta);
        select.find("option").remove();
        if (idS == -1){
            select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id_Categoria === idS){
            select.append("<option value=" + response.data[i].id_Categoria + " selected>" + response
                .data[i].Categoria + " - "+ response.data[i].id_Categoria + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id_Categoria + ">" + response
                .data[i].Categoria + " - "+ response.data[i].id_Categoria + "</option>");
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

function cargarFabricante(etiqueta,idCat,idS) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url": urlApi+'getAllFabricantes_x_CategoriaV1/'+idCat,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let select = $(etiqueta);
        select.find("option").remove();
        if (idS == 0){
            select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id === idS){
            select.append("<option value=" + response.data[i].id + " selected>" + response
                .data[i].nombre + " - "+ response.data[i].id + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id + ">" + response
                .data[i].nombre + " - "+ response.data[i].id + "</option>");
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

function cargarMarca(etiqueta,id_categoria,id_fabricante,idS) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url": urlApi+'getAllMarca_x_CategoriaV1/' + id_categoria,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let selectMarca = $(etiqueta);
        selectMarca.find("option").remove();
        if (idS == 0){
            selectMarca.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id === idS){
                selectMarca.append("<option value=" + response.data[i].id + " selected>" + response
                .data[i].nombre + "</option>");
            }else{
                selectMarca.append("<option value=" + response.data[i].id + ">" + response
                .data[i].nombre + "</option>");
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
//****
function cargarSegmento(etiqueta,id_categoria,idS) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url": urlApi+'getAllSegmento_x_CategoriaV1/' + id_categoria,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let select = $(etiqueta);
        select.find("option").remove();
        if (idS == 0){
            select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id === idS){
                select.append("<option value=" + response.data[i].id + " selected>" + response
                .data[i].nombre + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id + ">" + response
                .data[i].nombre + "</option>");
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

function cargarAtributo7(etiqueta,id_categoria,idS) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url": urlApi+'getAllAtributo7_x_CategoriaV1/' + id_categoria,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let select = $(etiqueta);
        select.find("option").remove();
        if (idS == 0){
            select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id === idS){
                select.append("<option value=" + response.data[i].id + " selected>" + response
                .data[i].nombre + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id + ">" + response
                .data[i].nombre + "</option>");
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
function cargarAtributo6(etiqueta,id_categoria,idS) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url": urlApi+'getAllAtributo6_x_CategoriaV1/' + id_categoria,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let select = $(etiqueta);
        select.find("option").remove();
        if (idS == 0){
            select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id === idS){
                select.append("<option value=" + response.data[i].id + " selected>" + response
                .data[i].nombre + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id + ">" + response
                .data[i].nombre + "</option>");
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
function cargarAtributo5(etiqueta,id_categoria,idS) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url": urlApi+'getAllAtributo5_x_CategoriaV1/' + id_categoria,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let select = $(etiqueta);
        select.find("option").remove();
        if (idS == 0){
            select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id === idS){
                select.append("<option value=" + response.data[i].id + " selected>" + response
                .data[i].nombre + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id + ">" + response
                .data[i].nombre + "</option>");
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
function cargarAtributo4(etiqueta,id_categoria,idS) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url": urlApi+'getAllAtributo4_x_CategoriaV1/' + id_categoria,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let select = $(etiqueta);
        select.find("option").remove();
        if (idS == 0){
            select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id === idS){
                select.append("<option value=" + response.data[i].id + " selected>" + response
                .data[i].nombre + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id + ">" + response
                .data[i].nombre + "</option>");
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
function cargarAtributo3(etiqueta,id_categoria,idS) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url": urlApi+'getAllAtributo3_x_CategoriaV1/' + id_categoria,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let select = $(etiqueta);
        select.find("option").remove();
        if (idS == 0){
            select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id === idS){
                select.append("<option value=" + response.data[i].id + " selected>" + response
                .data[i].nombre + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id + ">" + response
                .data[i].nombre + "</option>");
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
function cargarAtributo2(etiqueta,id_categoria,idS) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url": urlApi+'getAllAtributo2_x_CategoriaV1/' + id_categoria,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let select = $(etiqueta);
        select.find("option").remove();
        if (idS == 0){
            select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id === idS){
                select.append("<option value=" + response.data[i].id + " selected>" + response
                .data[i].nombre + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id + ">" + response
                .data[i].nombre + "</option>");
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
function cargarAtributo1(etiqueta,id_categoria,idS) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url": urlApi+'getAllAtributo1_x_CategoriaV1/' + id_categoria,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let select = $(etiqueta);
        select.find("option").remove();
        if (idS == 0){
            select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id === idS){
                select.append("<option value=" + response.data[i].id + " selected>" + response
                .data[i].nombre + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id + ">" + response
                .data[i].nombre + "</option>");
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

function cargarUnidadMedida(etiqueta,id_categoria,idS) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url": urlApi+'getAllUnidadMed_x_CategoriaV1/' + id_categoria,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let select = $(etiqueta);
        select.find("option").remove();
        if (idS == 0){
            select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id === idS){
                select.append("<option value=" + response.data[i].id + " selected>" + response
                .data[i].nombre + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id + ">" + response
                .data[i].nombre + "</option>");
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
function cargarTamanoRango(etiqueta,id_categoria,idS) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url": urlApi+'getAllRango_x_CategoriaV1/' + id_categoria,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let select = $(etiqueta);
        select.find("option").remove();
        if (idS == 0){
            select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id === idS){
                select.append("<option value=" + response.data[i].id + " selected>" + response
                .data[i].nombre + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id + ">" + response
                .data[i].nombre + "</option>");
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
function cargarTamano(etiqueta,id_categoria,idS,idTamanoRango) { 
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url": urlApi+'getAllTamano_x_CategoriaV1/' + id_categoria+"/"+idTamanoRango,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let select = $(etiqueta);
        select.find("option").remove();
        if (idS == 0){
            select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id === idS){
                select.append("<option value=" + response.data[i].id + " selected>" + response
                .data[i].nombre + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id + ">" + response
                .data[i].nombre + "</option>");
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

function deleteAction(data) {
    Swal.fire({
        title: '¿Estas seguro?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText:  'No, Cancelar',
        confirmButtonText: '¡Sí, bórralo!',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            var urlApi = localStorage.getItem("urlApi");
            var settings = {
                "url": urlApi+'deleteProductoV1/' + data,
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
                    let xtable = $('#TableProducto').DataTable();
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
// 333333
function ActualizarRegistro() {
    if ($("#FormProductoEdit").valid()) {
        var urlApi = localStorage.getItem("urlApi");
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": urlApi+'updateProductoV1',
            "method": "post",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "data": {
                "Id_Producto": $("#inputIdEditProducto").val(),
                "Id_Categoria": $("#selectCategoriaEdit").val(),
                "Id_Fabricante": $("#selectFabricanteEdit").val(),
                "Id_Marca": $("#selectMarcaEdit").val(),
                "id_Segmento": $("#selectSegmentoEdit").val(),
                "Id_Tamano": $("#selectTamanoEdit").val(),
                "Id_TamanoRango": $("#selectTamanoRangoEdit").val(),
                "id_UnidadMedida": $("#selectUnidadMedidaEdit").val(),
                "Fragmentacion": eliminarSeparadorMiles($("#inputFragmentacionEdit").val()),
                "CodigoBarra": $("#inputCodigoBarraEdit").val(),
                "Producto": $("#inputProductoEdit").val().toUpperCase(),
                "activo": $('input:radio[name=activoEdit]:checked').val(),
                "Ind_Pendiente": $('input:radio[name=pendienteEdit]:checked').val(),
                "Id_Atributo1": $("#selectAtributo1Edit").val(),
                "Id_Atributo2": $("#selectAtributo2Edit").val(),
                "Id_Atributo3": $("#selectAtributo3Edit").val(),
                "Id_Atributo4": $("#selectAtributo4Edit").val(),
                "Id_Atributo5": $("#selectAtributo5Edit").val(),
                "Id_Atributo6": $("#selectAtributo6Edit").val(),
                "Id_Atributo7": $("#selectAtributo7Edit").val()
            }
        }
        $.ajax(settings).done(function(response) {
            let xtable = $('#TableProducto').DataTable();
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
            var form = document.querySelector('#FormProductoEdit');
            form.reset();
            $('#actualizarProductoModal').modal('hide');
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

// 22222
function EditAction(data) {
    document.getElementById('FormProductoEdit').reset();
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url": urlApi+'getProductoIdV1/' + data,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        $('#inputIdEditProducto').val(response.data[0].Id_Producto);
        cargarCategoria("#selectCategoriaEdit",response.data[0].id_Categoria);
        cargarSegmento("#selectSegmentoEdit",response.data[0].id_Categoria,response.data[0].id_Segmento);
        cargarFabricante("#selectFabricanteEdit",response.data[0].id_Categoria,response.data[0].id_Fabricante);
        cargarTamanoRango("#selectTamanoRangoEdit",response.data[0].id_Categoria,response.data[0].Id_RangoTamano);
        cargarTamano("#selectTamanoEdit",response.data[0].id_Categoria,response.data[0].Id_Tamano,response.data[0].Id_RangoTamano);
        
        
        
        
        
        cargarUnidadMedida("#selectUnidadMedidaEdit",response.data[0].id_Categoria,response.data[0].id_UnidadMedida);
        cargarAtributo1("#selectAtributo1Edit",response.data[0].id_Categoria,response.data[0].id_Atributo1);
        cargarAtributo2("#selectAtributo2Edit",response.data[0].id_Categoria,response.data[0].Id_Atributo2);
        cargarAtributo3("#selectAtributo3Edit",response.data[0].id_Categoria,response.data[0].id_Atributo3);
        cargarAtributo4("#selectAtributo4Edit",response.data[0].id_Categoria,response.data[0].id_Atributo4);
        cargarAtributo5("#selectAtributo5Edit",response.data[0].id_Categoria,response.data[0].id_Atributo5);
        cargarAtributo6("#selectAtributo6Edit",response.data[0].id_Categoria,response.data[0].id_Atributo6);
        cargarAtributo7("#selectAtributo7Edit",response.data[0].id_Categoria,response.data[0].id_Atributo7);
        cargarMarca("#selectMarcaEdit",response.data[0].id_Categoria,response.data[0].id_Fabricante,response.data[0].id_Marca);
        $('#inputFragmentacionEdit').val(SeparadorMiles(response.data[0].Fragmentacion));
        $('#inputCodigoBarraEdit').val(response.data[0].CodigoBarra);
        $('#inputProductoEdit').val(response.data[0].Producto);
        var oblig = $("input:radio[name='activoEdit']");
        oblig.filter("[value='"+response.data[0].status+"']").attr('checked', true);
        var oblig = $("input:radio[name='pendienteEdit']");
        oblig.filter("[value='"+response.data[0].status+"']").attr('checked', true);
        $('#actualizarProductoModal').modal('show');
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
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url": urlApi+'getProductoIdV1/' + data,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        $('#inputCategoriaVer').val(response.data[0].Categoria);
        $('#inputFabricanteVer').val(response.data[0].Fabricante);
        $('#inputMarcaVer').val(response.data[0].Marca);
        $('#selectSegmentoVer').val(response.data[0].Segmento);
        $('#inputTamanoVer').val(Number.parseFloat(response.data[0].Tamano).toFixed(3));
        $('#inputTamanoRangoVer').val(response.data[0].TamanoRango);
        $('#inputUnidadMedidaVer').val(response.data[0].UnidadMedida);
        $('#inputFragmentacionVer').val(SeparadorMiles(response.data[0].Fragmentacion));
        $('#inputCodigoBarraVer').val(response.data[0].CodigoBarra);
        $('#inputProductoVer').val(response.data[0].Producto);
        $('#inputAtributo1Ver').val(response.data[0].Atributo1);
        $('#inputAtributo2Ver').val(response.data[0].Atributo2);
        $('#inputAtributo3Ver').val(response.data[0].Atributo3);
        $('#inputAtributo4Ver').val(response.data[0].Atributo4);
        $('#inputAtributo5Ver').val(response.data[0].Atributo5);
        $('#inputAtributo6Ver').val(response.data[0].Atributo6);
        $('#inputAtributo7Ver').val(response.data[0].Atributo7);
        var oblig = $("input:radio[name='activoVer']");
        oblig.filter("[value='"+response.data[0].status+"']").attr('checked', true);
        var oblig = $("input:radio[name='pendienteVer']");
        oblig.filter("[value='"+response.data[0].status+"']").attr('checked', true);
        $('#visualizarProductoModal').modal('show');
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

function ejecutarAgregarProductoNuevo(){
    if ($("#FormProducto").valid()) {
        var urlApi = localStorage.getItem("urlApi");
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": urlApi+'addProductoNuevoV1',
            "method": "POST",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "data": {
                "Id_Categoria": $("#selectCategoria").val(),
                "CodigoBarra": $("#inputCodigoBarra").val(),
                "Producto": $("#inputProducto").val().toUpperCase(),
                "id_Segmento": $("#selectSegmento").val(),
                "Id_Fabricante": $("#selectFabricante").val(),
                "Id_Marca": $("#selectMarca").val(),
                "Id_Tamano": $("#selectTamano").val(),
                "Id_TamanoRango": $("#selectTamanoRango").val(),
                "id_UnidadMedida": $("#selectUnidadMedida").val(),
                "Fragmentacion": eliminarSeparadorMiles($("#inputFragmentacion").val()),
                "activo": $('input:radio[name=activoAdd]:checked').val(),
                "Ind_Pendiente": $('input:radio[name=pendienteAdd]:checked').val(),
                "Id_Atributo1": $("#selectAtributo1").val(),
                "Id_Atributo2": $("#selectAtributo2").val(),
                "Id_Atributo3": $("#selectAtributo3").val(),
                "Id_Atributo4": $("#selectAtributo4").val(),
                "Id_Atributo5": $("#selectAtributo5").val(),
                "Id_Atributo6": $("#selectAtributo6").val(),
                "Id_Atributo7": $("#selectAtributo7").val()
            }
        }
        $.ajax(settings).done(function(response) {
            $('#CodigoBarraExistenteModal').modal('hide');
            Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Se agrego producto (IdCategoria): "+$("#inputProducto").val() + " - " +$("#inputCodigoBarra").val(),$("#selectCategoria").val(),"C");
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
            $('#CodigoBarraExistenteModal').modal('hide');
            var form = document.querySelector('form');
            form.reset();
            let select = $('#selectFabricante');
            select.find("option").remove();
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
                var form = document.querySelector('#FormProducto');
                form.reset();
                window.location = '/homepantry20/index.php';
            }
        })
    }
}

function existeCodigoBarra(CodigoBarras) {
    var urlApi = localStorage.getItem("urlApi");
    //alert(CodigoBarras);
    var settings = {
        "url": urlApi+'CantidadProductoXCodigoBarraV1/' + CodigoBarras,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        if (response.data[0].Cantidad != 0){
            // 
            var idCategoria = $('#selectCategoria').val();
            cargarTablaCodigoBarrasExistente(CodigoBarras,idCategoria);
            $('#htmlCodigoBarras').html(CodigoBarras);
            $('#CodigoBarraExistenteModal').modal('show');
        }else{
            ejecutarAgregarProductoNuevo();
            // BIT
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

function cargarTablaCodigoBarrasExistente(CodigoBarras,idCategoria){
    var msg = "Si de desea agregar el producto presione en agregar";
    var flag = false;
    $('#TableCodigoBarraExistente').dataTable({
        "bDestroy": true,
        "autoWidth": true,
        "dom": '<"wrapper"flitp><"center"B>',
        "responsive": true,
        "searching": false,
        "bPaginate": false,
        "ordering": false,
        "info":     false,
        "ajax": {
            "url": localStorage.getItem("urlApi")+'getProductoXCodigoBarraV1/' + CodigoBarras,
            "type": "GET",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "error": function(xhr, error, thrown) {
                if (xhr.status === 403) {
                    var err = JSON.parse(xhr.responseText);
                    Swal.fire({
                        title: err.message,
                        width: '300px',
                        height: '100px'
                    })
                }
                if (xhr.status === 400) {
                    var err = JSON.parse(xhr.responseText);
                    Swal.fire({
                        title: err.message,
                        width: '250px',
                        height: '25px'
                    })
                    window.location.href = '/homepantry20/Principal/logout';
                }
            }
        },
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        },
        "aoColumns": [{
                mData: 'Categoria',
                className: "text-center"
            },
            {
                mData: 'Producto',
                className: "text-center"
            }
        ],
        "createdRow": function( row, data, dataIndex){
            if (data['Id_Categoria'] == idCategoria){
                $('td', row).eq(0).css('color', '#EE0000');
                $('td', row).eq(1).css('color', '#EE0000');
                $("#idBotonAgregarPoducto").prop('disabled', true);
                msg = "El codigo de barra ya pertenece a una categoria!!!";
                $('#htmlMensajeModal').html(msg);
            }
            
            $('#htmlMensajeModal').html(msg);
        }
    });
}

function eliminarSeparadorMiles(number){
    const regex = /[.]/g;
    var aux = number.replace(regex, '');
    aux = aux.replace(',', '.');
    return aux;
}

function SeparadorMiles(number){
    return new Intl.NumberFormat("de-DE").format(number);
}

function cargarTabla(Id){
    $('#TableProducto').dataTable({
        "lengthMenu": [
            [ -1],
            ["All"]
        ],
        "bDestroy": true,
        "autoWidth": true,
        "searching": true,
        "bPaginate": false,
        "dom": 'Bfrtip',
        "responsive": false,
        "buttons": [
            {
                extend: 'excelHtml5',
                title: 'Reporte de Hogar Registro por Consumo'
            }
        ],
        "fixedHeader":    true,
        "scrollX":        true,
        "scrollY":        400,
        "deferRender":    true,
        "scroller":       true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json",
            "decimal": ",",
            "thousands": "."
        },        
        "ajax": {
            "url": localStorage.getItem("urlApi")+'getAllProductos_x_categoriaV1/' + Id,
            "type": "GET",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "error": function(xhr, error, thrown) {
                if (xhr.status === 403) {
                    var err = JSON.parse(xhr.responseText);
                    Swal.fire({
                        title: err.message,
                        width: '300px',
                        height: '100px'
                    })
                }
                if (xhr.status === 400) {
                    var err = JSON.parse(xhr.responseText);
                    Swal.fire({
                        title: err.message,
                        width: '250px',
                        height: '25px'
                    })
                    window.location.href = '/homepantry20/Principal/logout';
                }
            }
        },
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        },
        "aoColumns": [
            {
                mData: 'Id_Producto',
                className: "text-center"
            },
            {
                mData: 'Producto',
                className: "text-center"
            },
            {
                mData: 'CodigoBarra',
                className: "text-center"
            },
            {
                mData: 'Fabricante',
                className: "text-center"
            },
            {
                mData: 'Marca',
                className: "text-center"
            },
            {
                mData: 'Segmento',
                className: "text-center"
            },
            {
                mData: 'TamanoRango',
                className: "text-center"
            },
            {
                mData: 'Tamano',
                className: "text-center"
            },
            {
                mData: 'UnidadMedida',
                className: "text-center"
            },
            {
                mData: 'Fec_Alta',
                className: "text-center"
            },
            {
                mData: 'Ind_Activo',
                className: "text-center"
            },
            {
                mData: 'Ind_Pendiente',
                className: "text-center"
            },
            
        ],
        "columnDefs": [{
            "targets": 12,
            "orderable": true,
            "data": 'Id_Producto',
            "className": "text-center",
            "render": function(data, type, row, meta) {
                return  '<div class="text-wrap width-200">'+
                            '<button type="button" class="btn btn-danger btn-sm" onclick="deleteAction(' +
                                data +');"><i class="bi bi-trash3"></i></button>'+
                            '<button type="button" class="btn btn-primary btn-sm" onclick="EditAction(' +
                                data +');"><i class="bi bi-pencil-square"></i></button>'+
                            '<button type="button" class="btn btn-info btn-sm" onclick="VisualizarAction(' +
                                data +');"><i class="bi bi-zoom-in"></i></button>'+
                        '</div>';
            }
        }],
    });
}
