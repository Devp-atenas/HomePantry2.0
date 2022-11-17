$(document).ready(function() {
    cargarSemana("#selectSemana",0);
});


$("#selectSemana").change(function() {
    document.getElementById("idGenerarReporteFinal").disabled = false;
     
    
    //cargarTabla(id_categoriaT);
    $('#showReporte').show();
});