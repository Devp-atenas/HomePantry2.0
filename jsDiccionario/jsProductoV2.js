function cargarCategoria(etiqueta,idS) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url": urlApi+'getAllCategorias',
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
            if (response.data[i].id === idS){
                select.append("<option value=" + response.data[i].id + " selected>" +  response.data[i].nombre +
                " - " + response.data[i].id + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id + ">" + response.data[i].nombre
                + " - " + response.data[i].id + "</option>");
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
        "url": urlApi+'getAllFabricantes_x_Categoria/'+idCat,
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
            if (response.data[i].id_Fabricante === idS){
            select.append("<option value=" + response.data[i].id_Fabricante + " selected>" + response
                .data[i].Fabricante + " - "+ response.data[i].id_Fabricante + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id_Fabricante + ">" + response
                .data[i].Fabricante + " - "+ response.data[i].id_Fabricante + "</option>");
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
        "url": urlApi+'getAllMarca_x_Categoria_x_Fabricante/' + id_categoria+'/'+id_fabricante,
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
        "url": urlApi+'getAllSegmento_x_Categoria/' + id_categoria,
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
        "url": urlApi+'getAllAtributo7_x_Categoria/' + id_categoria,
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
        "url": urlApi+'getAllAtributo6_x_Categoria/' + id_categoria,
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
        "url": urlApi+'getAllAtributo5_x_Categoria/' + id_categoria,
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
        "url": urlApi+'getAllAtributo4_x_Categoria/' + id_categoria,
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
        "url": urlApi+'getAllAtributo3_x_Categoria/' + id_categoria,
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
        "url": urlApi+'getAllAtributo2_x_Categoria/' + id_categoria,
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
        "url": urlApi+'getAllAtributo1_x_Categoria/' + id_categoria,
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
        "url": urlApi+'getAllUnidadMed_x_Categoria/' + id_categoria,
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
        "url": urlApi+'getAllRango_x_Categoria/' + id_categoria,
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
function cargarTamano(etiqueta,id_categoria,idS) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url": urlApi+'getAllTamano_x_Categoria/' + id_categoria,
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
        confirmButtonText: '¡Sí, bórralo!'
    }).then((result) => {
        if (result.isConfirmed) {
            var urlApi = localStorage.getItem("urlApi");
            var settings = {
                "url": urlApi+'deleteProducto/' + data,
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
            "url": urlApi+'updateProducto',
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
                "id_Segmento": $("#inputSegmentoEdit").val(),
                "Id_Tamano": $("#selectTamanoEdit").val(),
                "Id_TamanoRango": $("#selectTamanoRangoEdit").val(),
                "id_UnidadMedida": $("#selectUnidadMedidaEdit").val(),
                "Fragmentacion": $("#inputFragmentacionEdit").val(),
                "CodigoBarra": $("#inputCodigoBarraEdit").val(),
                "Producto": $("#inputProductoEdit").val(),
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
        "url": urlApi+'getProductoId/' + data,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        $('#inputIdEditProducto').val(response.data[0].Id_Producto);
        cargarCategoria("#selectCategoriaEdit",response.data[0].id_Categoria);
        cargarSegmento("#inputSegmentoEdit",response.data[0].id_Categoria,response.data[0].id_Segmento);
        cargarTamano("#selectTamanoEdit",response.data[0].id_Categoria,response.data[0].Id_Tamano);
        cargarFabricante("#selectFabricanteEdit",response.data[0].id_Categoria,response.data[0].id_Fabricante);
        cargarTamanoRango("#selectTamanoRangoEdit",response.data[0].id_Categoria,response.data[0].id_Categoria);
        cargarUnidadMedida("#selectUnidadMedidaEdit",response.data[0].id_Categoria,response.data[0].id_UnidadMedida);
        cargarAtributo1("#selectAtributo1Edit",response.data[0].id_Categoria,response.data[0].id_Atributo1);
        cargarAtributo2("#selectAtributo2Edit",response.data[0].id_Categoria,response.data[0].Id_Atributo2);
        cargarAtributo3("#selectAtributo3Edit",response.data[0].id_Categoria,response.data[0].id_Atributo3);
        cargarAtributo4("#selectAtributo4Edit",response.data[0].id_Categoria,response.data[0].id_Atributo4);
        cargarAtributo5("#selectAtributo5Edit",response.data[0].id_Categoria,response.data[0].id_Atributo5);
        cargarAtributo6("#selectAtributo6Edit",response.data[0].id_Categoria,response.data[0].id_Atributo6);
        cargarAtributo7("#selectAtributo7Edit",response.data[0].id_Categoria,response.data[0].id_Atributo7);
        cargarMarca("#selectMarcaEdit",response.data[0].id_Categoria,response.data[0].id_Fabricante,response.data[0].id_Marca);
        $('#inputFragmentacionEdit').val(response.data[0].Fragmentacion);
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
        "url": urlApi+'getProductoId/' + data,
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
        $('#inputSegmentoVer').val(response.data[0].Segmento);
        $('#inputTamanoVer').val(Number.parseFloat(response.data[0].Tamano).toFixed(3));
        $('#inputTamanoRangoVer').val(response.data[0].TamanoRango);
        $('#inputUnidadMedidaVer').val(response.data[0].UnidadMedida);
        $('#inputFragmentacionVer').val(response.data[0].Fragmentacion);
        $('#inputCodigoBarraVer').val(response.data[0].CodigoBarra);
        $('#inputProductoVer').val(response.data[0].Producto);
        $('#inputAtributo1Ver').val(response.data[0].id_Atributo1);
        $('#inputAtributo2Ver').val(response.data[0].id_Atributo2);
        $('#inputAtributo3Ver').val(response.data[0].id_Atributo3);
        $('#inputAtributo4Ver').val(response.data[0].id_Atributo4);
        $('#inputAtributo5Ver').val(response.data[0].id_Atributo5);
        $('#inputAtributo6Ver').val(response.data[0].id_Atributo6);
        $('#inputAtributo7Ver').val(response.data[0].id_Atributo7);
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
            "url": urlApi+'addProductoNuevo',
            "method": "POST",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
            "data": {
                "Id_Categoria": $("#selectCategoria").val(),
                "CodigoBarra": $("#inputCodigoBarra").val(),
                "Producto": $("#inputProducto").val(),
                "id_Segmento": $("#inputSegmento").val(),
                "Id_Fabricante": $("#selectFabricante").val(),
                "Id_Marca": $("#selectMarca").val(),
                "Id_Tamano": $("#selectTamano").val(),
                "Id_TamanoRango": $("#selectTamanoRango").val(),
                "id_UnidadMedida": $("#selectUnidadMedida").val(),
                "Fragmentacion": $("#inputFragmentacion").val(),
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
    var settings = {
        "url": urlApi+'CantidadProductoXCodigoBarra/' + CodigoBarras,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        if (response.data[0].Cantidad != 0){
            var idCategoria = $('#selectCategoria').val();
            cargarTablaCodigoBarrasExistente(CodigoBarras,idCategoria);
            $('#htmlCodigoBarras').html(CodigoBarras);
            $('#CodigoBarraExistenteModal').modal('show');
        }else{
            ejecutarAgregarProductoNuevo();
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
