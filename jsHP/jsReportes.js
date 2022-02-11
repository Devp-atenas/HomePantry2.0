function cargarTablaReporteGeneral(idDivTabla){
    var urlApi = sessionStorage.getItem("urlApi");
    var table = new Tabulator(idDivTabla, {
        ajaxURL: urlApi+'getReporteTotalHomePantry/',
        renderVerticalBuffer:600,
        ajaxConfig:{
            method:"GET", //set request type to Position
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
        },
        height : "400px" ,
        layout:"fitDataStretch",//,fitDataStretch,fitDataTable",
        progressload : "scroll",
        //paginationSize : 20,
        placeholder:"Datos no encontrados",
        selectablePersistence:true, //make rows selectable
        columns:[
            {title:"Id PanelHogar", field:"Id_PanelHogar", sorter:"number"},
            {title:"Codigo del Hogar", field:"CodigoHogar", sorter:"number"},
            {title:"Estado", field:"Estado", sorter:"string"},
            {title:"Ciudad", field:"Ciudad", sorter:"string"},
            {title:"Municipio", field:"Municipio", sorter:"string"},
            {title:"Parroquia", field:"Parroquia", sorter:"string"},
            {title:"Calle", field:"Calle", sorter:"string"},
            {title:"Casa", field:"Casa", sorter:"string"},
            {title:"Escalera", field:"Escalera", sorter:"number"},
            {title:"Piso", field:"Piso", sorter:"number"},
            {title:"Apto", field:"Apto", sorter:"string"},
            {title:"Referencia", field:"Barrio", sorter:"string"},
            {title:"Telefono Local", field:"TelefonoLocal", sorter:"number"},
            {title:"TotalPersonas", field:"TotalPersonas", sorter:"number"},
            {title:"Tipo de Vivienda", field:"TipoVivienda", sorter:"string"},
            {title:"Otro Tipo de Vivienda", field:"OtroTipoVivienda", sorter:"string"},
            {title:"Metros Vivienda", field:"MetrosVivienda", sorter:"string"},
            {title:"Numero de Ambientes", field:"NumeroAmbientes", sorter:"number"},
            {title:"Numero de Banos", field:"NumeroBanos", sorter:"number"},
            {title:"Puntos de Luz", field:"PuntosLuz", sorter:"string"},
            {title:"Ocupacion de la Vivienda", field:"OcupacionVivienda", sorter:"string"},
            {title:"Otro Ocupacion de Vivienda", field:"OtroOcupacionVivienda", sorter:"number"},
            {title:"Monto de Vivienda", field:"MontoVivienda", sorter:"string"},
            {title:"Aguas Blancas", field:"AguasBlancas", sorter:"string"},
            {title:"Aguas Negras", field:"AguasNegras", sorter:"string"},
            {title:"Aseo Urbano", field:"AseoUrbano", sorter:"string"},
            {title:"Servicio Electricidad", field:"Id_ServicioElectricidad", hozAlign:"center", formatter:"tickCross"},
            {title:"Servicio Telefono", field:"Id_ServicioTelefono", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"Personal Labores", field:"Id_PersonalLabores", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"Domestica Dia", field:"Id_DomesticaDia", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"Conexion Internet1", field:"id_ConexionInternet1", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"ConexionInternet2", field:"id_ConexionInternet2", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"ConexionInternet3", field:"id_ConexionInternet3", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"Celular Jefe", field:"id_CelularJefe", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"SeguroHCMParticular", field:"id_SeguroHCMParticular", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"Seguro HCM Colectivo", field:"id_SeguroHCMColectivo", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"SeguroHCMSS", field:"id_SeguroHCMSS", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"AireAcondicionado", field:"Id_AireAcondicionado", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"Calentador1", field:"Id_Calentador1", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"Calentador2", field:"Id_Calentador2", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"Computador1", field:"Id_Computador1", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"Computador2", field:"Id_Computador2", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"DVD", field:"Id_DVD", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"HomeTheater", field:"Id_HomeTheater", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"JuegosVodeo", field:"Id_JuegosVodeo", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"HornoMicro", field:"Id_HornoMicro", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"Secadora", field:"Id_Secadora", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"Lavadora1", field:"Id_Lavadora1", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"Lavadora2", field:"Id_Lavadora2", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"Lavadora3", field:"Id_Lavadora3", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"Nevera", field:"Id_Nevera", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"Freezer", field:"Id_Freezer", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"Cocina1", field:"Id_Cocina1", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"Cocina2", field:"Id_Cocina2", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"Cocina3", field:"Id_Cocina3", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"Cocina4", field:"Id_Cocina4", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"LavaPlato", field:"Id_LavaPlato", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"Televisores", field:"Televisores", sorter:"string"},
            {title:"Tipo Televisores", field:"TipoTelevisores", sorter:"string"},
            {title:"Senal", field:"Senal", sorter:"string"},
            {title:"OperadoraCable", field:"OperadoraCable", sorter:"string"},
            {title:"Expr1", field:"Expr1", sorter:"number"},
            {title:"TvOnline", field:"TvOnline", sorter:"number"},
            {title:"Expr2", field:"Expr2", sorter:"number"},
            {title:"Autos", field:"Autos", sorter:"string"},
            {title:"Moto", field:"Id_Moto", sorter:"number"},
            {title:"SeguroCasco", field:"Id_SeguroCasco", sorter:"number"},
            {title:"Mascotas", field:"Id_Mascotas", sorter:"number"},
            {title:"Perro", field:"Ind_Perro", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"Gato", field:"Ind_Gato", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"Pez", field:"Ind_Pez", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"Ave", field:"Ind_Ave", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"Roedor", field:"Ind_Roedor", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"Otro", field:"Ind_Otro", sorter:"number", hozAlign:"center", formatter:"tickCross"},
            {title:"ClaseSocial", field:"ClaseSocial", sorter:"number"},
            {title:"Estado", field:"Estado", sorter:"number"}
            /**/
            //{title:"TTTTTTT", field:"BDBDBDBD", sorter:"number"},
        ],
    });
    
    document.getElementById("download-xlsx").addEventListener("click", function(){
        if ($("#formReporte").valid()) {
            var file = "";
            var file = $('#inputNombreExcel').val() + ".xlsx";
            table.download("xlsx", file, {sheetName:"Hogares"});
        }
    });
}

