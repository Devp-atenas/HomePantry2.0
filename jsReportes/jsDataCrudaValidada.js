$(document).ready(function() {
    cargarPeriodoComa4Asterisco("#selectPeriodo",0);
});


$("#selectPeriodo").change(function() {
    document.getElementById("idBotonGenerar").disabled = false;
    //document.getElementById("idBotonCerrarValidacion").disabled = false;
    
});

$("#idBotonGenerar").click(function() {
    var semanas4Asteriscos= $('#selectPeriodo').val();
    cargarTabla(semanas4Asteriscos);
    $('#showReporte').show();
});

function cargarTabla(Id){
    //Bitacora(localStorage.getItem("IdUsuario"),localStorage.getItem("IP"),"Consulta Tabla Atributo3 (IdCategoria)",Id,"R");
    $('#TablaReporte').dataTable({
        "lengthMenu": [
            [10, 25, 50, 100, -1],
            [10, 25, 50, 100, "All"]
        ],
        "bDestroy": true,
        "select": true,
        "autoWidth": true,
        "searching": true,
        "bPaginate": true,
        "dom": 'Bfrtip',
        "responsive": false,
       //"fixedHeader":    true,
        "scrollX":        true,
        "scrollY":        400,
        //"deferRender":    true,
        "scroller":       true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json",
            "decimal": ",",
            "thousands": "."
        },        
        "buttons": [
            {
                extend: 'excelHtml5',
                title: 'ReporteDataCrudaValidada'
            }
        ],
        "ajax": {
            "url": localStorage.getItem("urlApi")+'getReporteDataCrudaValidadaV1/'+Id,
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
                    window.location = '/homepantry20/index.php';
                }
            }
        },
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        },
        "aoColumns": [
            {mData: 'Semana',className: "text-center"},
            {mData: 'Categoria',className: "text-center"},
            {mData: 'Area',className: "text-center"},
            {mData: 'Estado',className: "text-center"},
            {mData: 'Id_Hogar',className: "text-center"},
            {mData: 'ClaseSocial',className: "text-center"},
            {mData: 'Id_Consumo',className: "text-center"},
            {mData: 'FechaConsumo',className: "text-center"},
            {mData: 'Medio',className: "text-center"},
            {mData: 'MedioDelivery',className: "text-center"},
            {mData: 'FormaPago',className: "text-center"},
            {mData: 'MonedaConsumo',className: "text-center"},
            {mData: 'Canal',className: "text-center"},
            {mData: 'Cadena',className: "text-center"},
            {mData: 'CodigoBarra',className: "text-center"},
            {mData: 'Producto',className: "text-center"},
            {mData: 'Segmento',className: "text-center"},
            {mData: 'Fabricante',className: "text-center"},
            {mData: 'Marca',className: "text-center"},
            {mData: 'Tamano',className: "text-center"},
            {mData: 'RangoTamano',className: "text-center"},
            {mData: 'Cantidad',className: "text-center"},
            {mData: 'Precio_Producto',className: "text-center"},
            {mData: 'Tasa_de_Cambio',className: "text-center"},
            {mData: 'Total_Compra',className: "text-center"},
            {mData: 'Moneda',className: "text-center"},
            {mData: 'Sexo',className: "text-center"},
            {mData: 'Edad',className: "text-center"},
            {mData: 'RangoEdad',className: "text-center"},
            {mData: 'Dolar',className: "text-center"},
            {mData: 'Euro',className: "text-center"},
            {mData: 'Petro',className: "text-center"},
            {mData: 'Peso',className: "text-center"},
        ],
    });
}