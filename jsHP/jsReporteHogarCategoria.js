$(document).ready(function() {
    cargarGArea('#selectGArea',0);
    cargarEstado('#selectEstado',0);
    cargarSemanaTop6('#selectSemana',0);
    cargarTablaReporteConsumo("","","",3000);
});

function cargarTablaReporteConsumo(idArea,idEstado,idSemana,cantidad){
    var urlApi = localStorage.getItem("urlApi");
    var bottomAcciones = function(cell, formatterParams){
    var id = cell.getRow().getData().Id_Estudio;
    return  "<a id='fg003' href='#' onclick='callUpdateEstudio("+id+"); return false;' ><i class='fas fa-edit text-primary data-toggle='tooltip' data-placement='top' title='Actualizar'></i></a>"
            +"<a id='fg003' href='#' onclick='callEliminarEstudio("+id+"); return false;' ><i class='fa fa-eraser text-danger data-toggle='tooltip' data-placement='top' title='Eliminar'></i></a>";
    };

    var table = new Tabulator("#TableReporteConsumo", {
        ajaxURL: urlApi+'getDatosReporteHogarCategoria/',
        ajaxConfig:{
            method:"GET", //set request type to Position
            headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
            "data": {
                "idArea":idArea,
                "idEstado": idEstado,
                "idSemana": idSemana
            }
        },
        layout:"fitDataStretch",
        placeholder:"Datos no encontrados",
        selectable:false, //make rows selectable
        columns:[
            {title:"Tipo de Consumo", field:"TipoConsumo", sorter:"string"},
            {title:"Hogares_que_Reportaron", field:"Hogares_que_Reportaron", sorter:"string"},
            {title:"Hogares_que_ReportaronAntr", field:"Hogares_que_ReportaronAnt", sorter:"string"},
            {title:"Variacion", field:"Variacion", sorter:"string"},
            {title:"# Hogares que Faltan", field:"Hogares_que_Reportaron", formatter:function(cell, formatterParams, onRendered){
                //cell - the cell component
                //formatterParams - parameters set for the column
                //onRendered - function to call when the formatter has been rendered
            
                return cantidad - cell.getValue(); //return the contents of the cell;
            },
            },
            {formatter:bottomAcciones, hozAlign:"center"}
        ],
    });
}
