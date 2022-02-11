$(document).ready(function() {
    //alert(9999)
    cargarTablaReporteNSE();
});


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
