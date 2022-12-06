var idCategoria;
$(document).ready(function() {
    cargarJerarquia('#selectJerarquia',0);
});

$('#selectJerarquia').change(function(){
    document.getElementById('siguienteDepuracion').disabled = false;
    
});


$('#selectCategoriaTR').change(function(){
    var idCategoria = $('#selectCategoriaTR').val();
    cargarTamanoRango('#selectTamanoRango',idCategoria,0);
});

$("#siguienteDepuracion").click(function() {

    var accion = $('input:radio[name=accionDepurar]:checked').val()
    alert(accion);


    
    switch($('select[name="selectJerarquia"] option:selected').text()) {
        case "Fabricante":
            break;
        case 'Marca':
            break;
        case 'Segmento':
            break;
        case 'Rango Tamaño':
            cargarCategoria('#selectCategoriaTR',-1);
            $('#TamanoRangoModal').modal('show');
            break;
        case 'Tamaño':
            break;
        default:
            alert('default');
    
      }
});