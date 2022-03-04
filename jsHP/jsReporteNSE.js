var oTable;
var selected = [];
    
$(document).ready(function() {
    //var editor;
    cargarTablaReporteNSE2();
});



function cargarTablaReporteNSE2(){
    var urlApi = localStorage.getItem("urlApi");
    
    oTable = $('#TablaReporteNSE').DataTable({
    //var oTable = jQuery('#TablaReporteNSE').DataTable({
            "lengthMenu": [
            [ -1],
            ["All"]
        ],
        "bDestroy":     true,
        "autoWidth":    true,
        "searching":    false,
        select: true,
        select: 'single',
        "bPaginate":    false,
        "dom": '<"wrapper"flitp><"center"B>',
        "responsive":   false,
        "buttons": [
            {
                extend: 'excelHtml5',
                title: 'Reporte NSE'
            }
        ],
        "fixedHeader":  true,
        "scrollX":      true,
        "scrollY":      400,
        "deferRender":  true,
        "scroller":     true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json",
            "decimal": ",",
            "thousands": "."
        },
        
        "ajax": {
            "url": urlApi+'getDatosReporteNSE/',
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
                    window.location.href = '/HomePantry20/Principal/logout';
                }
            }
        },
        /*
        "rowCallback": function( row, data ) {
            if ( $.inArray(data.DT_RowId, selected) !== -1 ) {
                $(row).addClass('selected');
            }
        },*/
        "aoColumns": [{
                mData: 'idHogar',
                className: "text-center"
            },
            {
                mData: 'CodigoHogar',
                className: "text-center"
            },
            {
                mData: 'Estado',
                className: "text-center"
            },
            {
                mData: 'Ciudad',
                className: "text-center"
            },
            {
                mData: 'Municipio',
                className: "text-center"
            },
            {
                mData: 'Parroquia',
                className: "text-center"
            },
            {
                mData: 'TipoVivienda',
                className: "text-center"
            },
            {
                mData: 'PesoTipoVivienda',
                className: "text-center"
            },
            {
                mData: 'MetrosVivienda',
                className: "text-center"
            },
            {
                mData: 'PesoMetrosVivienda',
                className: "text-center"
            },
            {
                mData: 'NumeroAmbientes',
                className: "text-center"
            },
            {
                mData: 'PesoNumAmbientes',
                className: "text-center"
            },
            {
                mData: 'TotalPersonas',
                className: "text-center"
            },
            {
                mData: 'PesoTotalPersonas',
                className: "text-center"
            },
            {
                mData: 'NumeroBanos',
                className: "text-center"
            },
            {
                mData: 'PesoNumBanos',
                className: "text-center"
            },
            {
                mData: 'OcupacionVivienda',
                className: "text-center"
            },
            {
                mData: 'PesoOcupacionVivienda',
                className: "text-center"
            },
            {
                mData: 'MontoVivienda',
                className: "text-center"
            },
            {
                mData: 'PesoMontoVivienda',
                className: "text-center"
            },
            {
                mData: 'PuntosLuz',
                className: "text-center"
            },
            {
                mData: 'PesoPuntoLuz',
                className: "text-center"
            },
            {
                mData: 'AguasBlancas',
                className: "text-center"
            },
            {
                mData: 'PesoAguasBlancas',
                className: "text-center"
            },
            {
                mData: 'AguasNegras',
                className: "text-center"
            },
            {
                mData: 'PesoAguasNegras',
                className: "text-center"
            },
            {
                mData: 'AseoUrbano',
                className: "text-center"
            },
            {
                mData: 'PesoAseoUrbano',
                className: "text-center"
            },
            {
                mData: 'Id_ServicioElectricidad',
                className: "text-center"
            },
            {
                mData: 'PesoServicioElectricidad',
                className: "text-center"
            },
            {
                mData: 'Id_DomesticaFija',
                className: "text-center"
            },
            {
                mData: 'Id_PersonalLabores',
                className: "text-center"
            },
            {
                mData: 'Id_DomesticaDia',
                className: "text-center"
            },
            {
                mData: 'PesoPeronalAseo',
                className: "text-center"
            },
            {
                mData: 'BandaAncha',
                className: "text-center"
            },
            {
                mData: 'PesoBandaAncha',
                className: "text-center"
            },
            {
                mData: 'Movil',
                className: "text-center"
            },
            {
                mData: 'PesoMovil',
                className: "text-center"
            },
            {
                mData: 'DialUp',
                className: "text-center"
            },
            {
                mData: 'PesoDialUp',
                className: "text-center"
            },
            {
                mData: 'CelularJefe',
                className: "text-center"
            },
            {
                mData: 'PesoCelularJefe',
                className: "text-center"
            },
            {
                mData: 'AireAcondicionado',
                className: "text-center"
            },
            {
                mData: 'PesoAireAcondicionado',
                className: "text-center"
            },
            {
                mData: 'CalentadorElectrico',
                className: "text-center"
            },
            {
                mData: 'PesoCalentadorElectrico',
                className: "text-center"
            },
            {
                mData: 'CalectadorGas',
                className: "text-center"
            },
            {
                mData: 'PesoCalentadorGas',
                className: "text-center"
            },
            {
                mData: 'PC',
                className: "text-center"
            },
            {
                mData: 'PesoPC',
                className: "text-center"
            },
            {
                mData: 'Laptop',
                className: "text-center"
            },
            {
                mData: 'PesoLaptop',
                className: "text-center"
            },
            {
                mData: 'DVD',
                className: "text-center"
            },
            {
                mData: 'PesoDVD',
                className: "text-center"
            },
            {
                mData: 'HomeTheater',
                className: "text-center"
            },
            {
                mData: 'VideoJuego',
                className: "text-center"
            },
            {
                mData: 'PesoVideoJuego',
                className: "text-center"
            },
            {
                mData: 'HornoMicro',
                className: "text-center"
            },
            {
                mData: 'PesoHornoMicro',
                className: "text-center"
            },
            {
                mData: 'LavadoraAuto',
                className: "text-center"
            },
            {
                mData: 'PesoLavadoraAuto',
                className: "text-center"
            },
            {
                mData: 'LavadoraSemi',
                className: "text-center"
            },
            {
                mData: 'PesoLavadoraSemi',
                className: "text-center"
            },
            {
                mData: 'LavadoraRodillo',
                className: "text-center"
            },
            {
                mData: 'PesoLavadoraRodillo',
                className: "text-center"
            },
            {
                mData: 'Secadora',
                className: "text-center"
            },
            {
                mData: 'PesoSecadora',
                className: "text-center"
            },
            {
                mData: 'Nevera',
                className: "text-center"
            },
            {
                mData: 'PesoNevera',
                className: "text-center"
            },
            {
                mData: 'Freezer',
                className: "text-center"
            },
            {
                mData: 'PesoFreezer',
                className: "text-center"
            },
            {
                mData: 'CocinaElectrica',
                className: "text-center"
            },
            {
                mData: 'PesoCocinaElectrica',
                className: "text-center"
            },
            {
                mData: 'CocinaBombona',
                className: "text-center"
            },
            {
                mData: 'PesoCocinaBombona',
                className: "text-center"
            },
            {
                mData: 'ConinaGasDirecto',
                className: "text-center"
            },
            {
                mData: 'PesoCocinaGasDirecto',
                className: "text-center"
            },
            {
                mData: 'CocinaKerosene',
                className: "text-center"
            },
            {
                mData: 'PesoCocinaKerosene',
                className: "text-center"
            },
            {
                mData: 'Lavaplatos',
                className: "text-center"
            },
            {
                mData: 'PesoLavaplatos',
                className: "text-center"
            },
            {
                mData: 'Vehiculos',
                className: "text-center"
            },
            {
                mData: 'PesoVehiculo',
                className: "text-center"
            },
            {
                mData: 'Televisores',
                className: "text-center"
            },
            {
                mData: 'PesoTelevisores',
                className: "text-center"
            },
            {
                mData: 'SeguroParticular',
                className: "text-center"
            },
            {
                mData: 'PesoSeguroParticular',
                className: "text-center"
            },
            {
                mData: 'SeguroColectivo',
                className: "text-center"
            },
            {
                mData: 'PesoSeguroColectivo',
                className: "text-center"
            },
            {
                mData: 'SeguroSocial',
                className: "text-center"
            },
            {
                mData: 'PesoSeguroSocial',
                className: "text-center"
            },
            {
                mData: 'SeguroVehiculo',
                className: "text-center"
            },
            {
                mData: 'PesoSeguroVehiculo',
                className: "text-center"
            },
            {
                mData: 'educacion',
                className: "text-center"
            },
            {
                mData: 'pesoEducacion',
                className: "text-center"
            },
            {
                mData: 'TipoIngreso',
                className: "text-center"
            },
            {
                mData: 'pesoIngreso',
                className: "text-center"
            },
            {
                mData: 'PesoTotal',
                className: "text-center"
            },
        ],
        "columnDefs": [{
            "width": "100%",
            "targets": 98,
            "orderable": true,
            "data": 'idHogar',
            "className": "text-center",
        }],
    });
    
    
    //var table = $('#example').DataTable();
 
    oTable.on( 'select', function ( e, dt, type, indexes ) {
    if ( type === 'row' ) {
        var data = table.rows( indexes ).data().pluck( 'id' );
 
        // do something with the ID of the selected items
    }
} );
    
    
/*
    $('#example tbody').on('click', 'tr', function () {
        var id = this.id;
        var index = $.inArray(id, selected);

        if ( index === -1 ) {
            selected.push( id );
        }else {
            selected.splice( index, 1 );
        }

        $(this).toggleClass('selected');
    });
*/


}



function cargarTablaReporteNSE(){
    var urlApi = localStorage.getItem("urlApi");
    var bottomAcciones = function(cell, formatterParams){
    var id = cell.getRow().getData().Id_Estudio;
    return  "<a id='fg003' href='#' onclick='callUpdateEstudio("+id+"); return false;' ><i class='fas fa-edit text-primary data-toggle='tooltip' data-placement='top' title='Actualizar'></i></a>"
            +"<a id='fg003' href='#' onclick='callEliminarEstudio("+id+"); return false;' ><i class='fa fa-eraser text-danger data-toggle='tooltip' data-placement='top' title='Eliminar'></i></a>";
    };

    var table = new Tabulator("#TablaReporte", {
        ajaxURL: urlApi+'getDatosReporteNSE/',
        ajaxConfig:{
            method:"GET", //set request type to Position
            headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
        },
        layout:"fitDataStretch",
        placeholder:"Datos no encontrados",
        selectable:false, //make rows selectable
        columns:[
            {title:"idHogar", field:"idHogar", sorter:"number"},
            {title:"CodigoHogar", field:"CodigoHogar", sorter:"string"},
            {title:"Estado", field:"Estado", sorter:"string"},
            {title:"Municipio", field:"Municipio", sorter:"string"},
            {title:"Parroquia", field:"Parroquia", sorter:"string"},
            {title:"TipoVivienda", field:"TipoVivienda", sorter:"string"},
            {title:"PesoTipoVivienda", field:"PesoTipoVivienda", sorter:"string"},
            {title:"MetrosVivienda", field:"MetrosVivienda", sorter:"string"},
            {title:"PesoMetrosVivienda", field:"PesoMetrosVivienda", sorter:"string"},
            {title:"NumeroAmbientes", field:"NumeroAmbientes", sorter:"string"},
            {title:"PesoNumAmbientes", field:"PesoNumAmbientes", sorter:"string"},
            {title:"TotalPersonas", field:"TotalPersonas", sorter:"string"},
            {title:"PesoTotalPersonas", field:"PesoTotalPersonas", sorter:"string"},
            {title:"NumeroBanos", field:"NumeroBanos", sorter:"string"},
            {title:"PesoNumBanos", field:"PesoNumBanos", sorter:"string"},
            {title:"OcupacionVivienda", field:"OcupacionVivienda", sorter:"string"},
            {title:"PesoOcupacionVivienda", field:"PesoOcupacionVivienda", sorter:"string"},
            {title:"MontoVivienda", field:"MontoVivienda", sorter:"string"},
            {title:"PesoMontoVivienda", field:"PesoMontoVivienda", sorter:"string"},
            {title:"PuntosLuz", field:"PuntosLuz", sorter:"string"},
            {title:"PesoPuntoLuz", field:"PesoPuntoLuz", sorter:"string"},
            {title:"AguasBlancas", field:"AguasBlancas", sorter:"string"},
            {title:"PesoAguasBlancas", field:"PesoAguasBlancas", sorter:"string"},
            {title:"AguasNegras", field:"AguasNegras", sorter:"string"},
            {title:"PesoAguasNegras", field:"PesoAguasNegras", sorter:"string"},
            {title:"AseoUrbano", field:"AseoUrbano", sorter:"string"},
            {title:"PesoAseoUrbano", field:"PesoAseoUrbano", sorter:"string"},
            {title:"Id_ServicioElectricidad", field:"Id_ServicioElectricidad", sorter:"string"},
            {title:"PesoServicioElectricidad", field:"PesoServicioElectricidad", sorter:"string"},
            {title:"Id_DomesticaFija", field:"Id_DomesticaFija", sorter:"string"},
            {title:"Id_PersonalLabores", field:"Id_PersonalLabores", sorter:"string"},
            {title:"Id_DomesticaDia", field:"Id_DomesticaDia", sorter:"string"},
            {title:"PesoPeronalAseo", field:"PesoPeronalAseo", sorter:"string"},
            {title:"BandaAncha", field:"BandaAncha", sorter:"string"},
            {title:"PesoBandaAncha", field:"PesoBandaAncha", sorter:"string"},
            {title:"Movil", field:"Movil", sorter:"string"},
            {title:"PesoMovil", field:"PesoMovil", sorter:"string"},
            {title:"DialUp", field:"DialUp", sorter:"string"},
            {title:"PesoDialUp", field:"PesoDialUp", sorter:"string"},
            {title:"CelularJefe", field:"CelularJefe", sorter:"string"},
            {title:"PesoCelularJefe", field:"PesoCelularJefe", sorter:"string"},
            {title:"AireAcondicionado", field:"AireAcondicionado", sorter:"string"},
            {title:"PesoAireAcondicionado", field:"PesoAireAcondicionado", sorter:"string"},
            {title:"CalentadorElectrico", field:"CalentadorElectrico", sorter:"string"},
            {title:"PesoCalentadorElectrico", field:"PesoCalentadorElectrico", sorter:"string"},
            {title:"CalectadorGas", field:"CalectadorGas", sorter:"string"},
            {title:"PesoCalentadorGas", field:"PesoCalentadorGas", sorter:"string"},
            {title:"PC", field:"PC", sorter:"string"},
            {title:"PesoPC", field:"PesoPC", sorter:"string"},
            {title:"Laptop", field:"Laptop", sorter:"string"},
            {title:"PesoLaptop", field:"PesoLaptop", sorter:"string"},
            {title:"DVD", field:"DVD", sorter:"string"},
            {title:"PesoDVD", field:"PesoDVD", sorter:"string"},
            {title:"HomeTheater", field:"HomeTheater", sorter:"string"},
            {title:"PesoHomeTheater", field:"PesoHomeTheater", sorter:"string"},
            {title:"VideoJuego", field:"VideoJuego", sorter:"string"},
            {title:"PesoVideoJuego", field:"PesoVideoJuego", sorter:"string"},
            {title:"HornoMicro", field:"HornoMicro", sorter:"string"},
            {title:"PesoHornoMicro", field:"PesoHornoMicro", sorter:"string"},
            {title:"LavadoraAuto", field:"LavadoraAuto", sorter:"string"},
            {title:"PesoLavadoraAuto", field:"PesoLavadoraAuto", sorter:"string"},
            {title:"LavadoraSemi", field:"LavadoraSemi", sorter:"string"},
            {title:"PesoLavadoraSemi", field:"PesoLavadoraSemi", sorter:"string"},
            {title:"LavadoraRodillo", field:"LavadoraRodillo", sorter:"string"},
            {title:"PesoLavadoraRodillo", field:"PesoLavadoraRodillo", sorter:"string"},
            {title:"Secadora", field:"Secadora", sorter:"string"},
            {title:"PesoSecadora", field:"PesoSecadora", sorter:"string"},
            {title:"Nevera", field:"Nevera", sorter:"string"},
            {title:"PesoNevera", field:"PesoNevera", sorter:"string"},
            {title:"Freezer", field:"Freezer", sorter:"string"},
            {title:"PesoFreezer", field:"PesoFreezer", sorter:"string"},
            {title:"CocinaElectrica", field:"CocinaElectrica", sorter:"string"},
            {title:"PesoCocinaElectrica", field:"PesoCocinaElectrica", sorter:"string"},
            {title:"CocinaBombona", field:"CocinaBombona", sorter:"string"},
            {title:"PesoCocinaBombona", field:"PesoCocinaBombona", sorter:"string"},
            {title:"ConinaGasDirecto", field:"ConinaGasDirecto", sorter:"string"},
            {title:"PesoCocinaGasDirecto", field:"PesoCocinaGasDirecto", sorter:"string"},
            {title:"CocinaKerosene", field:"CocinaKerosene", sorter:"string"},
            {title:"PesoCocinaKerosene", field:"PesoCocinaKerosene", sorter:"string"},
            {title:"Lavaplatos", field:"Lavaplatos", sorter:"string"},
            {title:"PesoLavaplatos", field:"PesoLavaplatos", sorter:"string"},
            {title:"Vehiculos", field:"Vehiculos", sorter:"string"},
            {title:"PesoVehiculo", field:"PesoVehiculo", sorter:"string"},
            {title:"Televisores", field:"Televisores", sorter:"string"},
            {title:"PesoTelevisores", field:"PesoTelevisores", sorter:"string"},
            {title:"SeguroParticular", field:"SeguroParticular", sorter:"string"},
            {title:"PesoSeguroParticular", field:"PesoSeguroParticular", sorter:"string"},
            {title:"SeguroColectivo", field:"SeguroColectivo", sorter:"string"},
            {title:"PesoSeguroColectivo", field:"PesoSeguroColectivo", sorter:"string"},
            {title:"SeguroSocial", field:"SeguroSocial", sorter:"string"},
            {title:"PesoSeguroSocial", field:"PesoSeguroSocial", sorter:"string"},
            {title:"SeguroVehiculo", field:"SeguroVehiculo", sorter:"string"},
            {title:"PesoSeguroVehiculo", field:"PesoSeguroVehiculo", sorter:"string"},
            





            
        ],
    });
}
