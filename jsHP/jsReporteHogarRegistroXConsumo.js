$(document).ready(function() {
    //$("#showTableReporteConsumoXDia").hide();
    cargarPeriodo('#selectPeriodo',0);
    //cargarEstado('#selectEstado',0);
    //cargarSemanaTop6('#selectSemana',0);
    //cargarTablaReporteConsumo("","","",3000);
});

$("#selectPeriodo").change(function() {
    $("#showTableReporteConsumoXDia").hide();
    cargarTipoConsumo("#selecTipoConsumo",0);
    
});

$("#selecTipoConsumo").change(function() {
    $("#showTableReporteHogarRegistroXConsumo").show();
    cargarTablaHogarRegistroxConsumo();
    
});

function cargarTablaHogarRegistroxConsumo(){
    var urlApi = localStorage.getItem("urlApi");
    var bottomAcciones = function(cell, formatterParams){
    var id = cell.getRow().getData().Id_Estudio;
    return  "<a id='fg003' href='#' onclick='callUpdateEstudio("+id+"); return false;' ><i class='fas fa-edit text-primary data-toggle='tooltip' data-placement='top' title='Actualizar'></i></a>"
            +"<a id='fg003' href='#' onclick='callEliminarEstudio("+id+"); return false;' ><i class='fa fa-eraser text-danger data-toggle='tooltip' data-placement='top' title='Eliminar'></i></a>";
    };

    var table = new Tabulator("#TableReporteHogarRegistroXConsumo", {
        ajaxURL: urlApi+'getDatosReporteHogarRegistrsoXConsumo/',
        ajaxConfig:{
            method:"GET", //set request type to Position
            headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
        },
        layout:"fitDataStretch",
        //groupBy:"Id_PanelHogar",
        //groupBy:["Id_PanelHogar", "CodigoHogar", "ClaseSocial", "TotalPersonas"],
        //groupStartOpen:[true, true, true, true],
        /*groupBy:function(data){
            //data - the data object for the row being grouped
            return data.Id_PanelHogar + " - " + data.CodigoHogar + " - " + data.ClaseSocial + " - " + data.TotalPersonas
             + " - " + data.Area + " - " + data.Estado + " - " + data.Nombre1 + " - " + data.Apellido1; //groups by data and age
        },*/
        locale:true,
        placeholder:"Datos no encontrados",
        selectable:false, //make rows selectable
        columns:[
            {title:"idHogar", field:"Id_PanelHogar", sorter:"string"},
            {title:"Hogar", field:"CodigoHogar", sorter:"string"},
            {title:"Clase Social", field:"ClaseSocial", sorter:"string"},
            {title:"# Personas", field:"TotalPersonas", sorter:"string"},
            {title:"Area", field:"Area", sorter:"string"},
            {title:"Estado", field:"Estado", sorter:"string"},
            {title:"Nombre Panelista", field:"Nombre1", sorter:"string"},
            {title:"Apellido Panelista", field:"Apellido1", sorter:"string"},
            {title:"detalle2", field:"detalle2", sorter:"string"},
            {title:"# Hogares que Faltan", formatter:function(cell, formatterParams, onRendered){
                return cantidad - cell.getValue(); //return the contents of the cell;
            },/*{title:"Variacion", field:"Variacion", sorter:"string"},
            {title:"# Hogares que Faltan", field:"Hogares_que_Reportaron", formatter:function(cell, formatterParams, onRendered){
            
                return cantidad - cell.getValue(); //return the contents of the cell;
            },
            },
            {formatter:bottomAcciones, hozAlign:"center"}*/
        ],


        




    });
}
