function CambiarMoneda(data) {
    var settings = {
        "url": 'urlApi getDetalleCompraId/' + data,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        $('#inputId').val(response.data[0].Id_Consumo_Detalle_Productos);
        $('#inputCodigoBarra').val(response.data[0].Numero_codigo_barras);
        $('#inputMonedaActual').val(response.data[0].Moneda);
        $('#inputTasaCambio').val(response.data[0].Tasa_de_cambio);
        $('#inputCantidad').val(response.data[0].Cantidad);
        $('#inputPrecioUnitario').val(response.data[0].Precio_producto);
        $('#inputTotalCompra').val(response.data[0].Total_compra);
        //cargarCategoriaEdit(response.data[0].id_Categoria);
        
        $('#modal-TipoMoneda').modal('show');
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


function cargarSemana(identificador) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllSemana/',
        //"url": "'"+urlApi + getDetalleCompraId+"/'" + data,
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
            selected.append("<option value=" + response.data[i].IdSemana + ">" + response
                .data[i]
                .Semana + "</option>");
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
function cargarMoneda(identificador) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllSemana/',
        //"url": "'"+urlApi + getDetalleCompraId+"/'" + data,
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
            selected.append("<option value=" + response.data[i].IdSemana + ">" + response
                .data[i]
                .Semana + "</option>");
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
function cargarResumen(semana,categoria,producto) {
    var settings = {
        "url": '<?php echo urlApi; ?>getResumenConsumoSemanaCatProd/' + semana+'/'+categoria+'/'+producto,
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

function cargarTabla(id_semanaT,id_categoriaT,id_productoT,minimo,maximo){
    $('#TableProducto').dataTable({
        "lengthMenu": [
            [ -1],
            [ "Todo"]
        ],
        "bDestroy": true,
        "autoWidth": true,
        "dom": '<"wrapper"flitp><"center"B>',
        "responsive": true,
        "buttons": [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        "ajax": {
            "url": '<?php echo urlApi; ?>getConsumoSemanaCatProd/' + id_semanaT +'/'+id_categoriaT+'/'+id_productoT,
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
                    window.location.href = '/retailscannig/Principal/logout';
                }
            }
        },
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json",
            "sProcessing": "Procesando...",
            "decimal": ",",
            "thousands": "."
        },
        "aoColumns": [{
                mData: 'Id_Hogar',
                className: "text-center"
            },
            {
                mData: 'CodigoBarra',
                className: "text-center"
            },
            {
                mData: 'Producto',
                className: "text-center"
            },
            {
                mData: 'Cantidad',
                className: "text-center"
            },
            {
                mData: 'Precio',
                className: "text-center",
                render: $.fn.dataTable.render.number( '.', ',', 2, '' )
            },
            {
                mData: 'Area',
                className: "text-center"
            },
            {
                mData: 'Estado',
                className: "text-center"
            },
            {
                mData: 'Fecha_Creacion',
                className: "text-center"
            },
        ],
        "columnDefs": [{
            "targets": 8,
            "orderable": true,
            "data": 'Id_Consumo_Detalle_Productos',
            "className": "text-center",
            "render": function(data, type, row, meta) {
                return '<a title="Cambiar Precio" href="#"><i class="fa fa-money-check-alt" style="font-size:24px;color:#000" aria-hidden="true" onclick="CambiarPrecio(' +
                    data +
                    '); return false;"y></i></a>&nbsp;&nbsp;<a title="Cambiar Moneda" href="#"><i class="fa fa-comments-dollar" style="font-size:24px;color:#000" aria-hidden="true" onclick="CambiarMoneda(' +
                    data +
                    '); return false;"y></i></a>';
            }
        }],
        
        "createdRow": function( row, data, dataIndex){
            if (data['Precio'] < minimo || data['Precio'] > maximo){
                //$('td', row).eq(3).css('background-color', 'Orange');
                $('td', row).eq(4).css('color', '#EE0012');
                //$(row).addClass( 'bg-warning' );
            }
            /*if ( data['Precio'] > maximo){
                $('td', row).eq(4).css('color','#EE0012');
            }*/
            
                
        }
    });
}

function cargarProductoCategoria(parametro,idS) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllProductos_x_categoria/' + parametro,
        "method": "get",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        }
    }
    $.ajax(settings).done(function(response) {
        let select = $("#selectProductoTabla");
        select.find("option").remove();
        if (idS == 0){
            select.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].id === idS){
                select.append("<option value=" + response.data[i].Id_Producto + " selected>" + response
                .data[i].Producto + "</option>");
            }else{
                select.append("<option value=" + response.data[i].Id_Producto + ">" + response
                .data[i].Producto + "</option>");
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

function cargarCategoria(etiqueta,idS) {
    var settings = {
        "url": '<?php echo urlApi; ?>getAllCategoria',
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
                select.append("<option value=" + response.data[i].id_Categoria + " selected>" + response
                .data[i].Categoria + "</option>");
            }else{
                select.append("<option value=" + response.data[i].id_Categoria + ">" + response
                .data[i].Categoria + "</option>");
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
