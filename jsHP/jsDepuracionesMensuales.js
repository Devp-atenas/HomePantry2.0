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


$("#Pre-DepurarTR").click(function() {  
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
        })
        swalWithBootstrapButtons.fire({
            title: "¿Seguro deseas depurar?",
            text: " ",
            icon: 'warning',
            showCancelButton: true,
            cancelButtonText:  'No, Cancelar',
            confirmButtonText: 'Si, Depurar',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {

                var idJerarquia = $("#selectJerarquia").val();
                var Jerarquia = $('select[name="selectJerarquia"] option:selected').text();
                var idDim = $("#selectTamanoRango").val();
                var descDim = $('select[name="selectTamanoRango"] option:selected').text();
                var lineasCB = $('#CodigosBarraTR').val().split(/\n+/);
                var codigosBarraComa = "";
                var tam = lineasCB.length;
                
                for(var i = 0;i < tam;i++){
                    if (i+1<tam){
                        codigosBarraComa+="'"+$.trim(lineasCB[i])+"',";
                    }else{
                        codigosBarraComa+="'"+$.trim(lineasCB[i])+"'";
                    }
                }

                console.log(codigosBarraComa.replace(",''",""));
                
                var settings = {
                    "url":localStorage.getItem("urlApi")+'updateTamanoRangoDepuracionV2',
                    "method": "post",
                    "headers": {
                        "Content-Type": "application/x-www-form-urlencoded",
                        "Authorization": "Bearer " + localStorage.getItem('Token')
                    },
                    "data": {
                        "idJerarquia": idJerarquia,
                        "Jerarquia": Jerarquia,
                        "idDim": idDim,
                        "descDim": descDim,
                        "codigosBarraComa":codigosBarraComa.replace(",''","")
                    }
                }
                $.ajax(settings).done(function(response){
                    /*$("#investigarConsumoModal").modal("hide");
                    cargarTablaConsumos(idConsumo);
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
                })*/
                Toast.fire({
                    icon: 'success',
                    title: response.message,
                    confirmButtonText: `Ok`,
                })
                
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
                    }
                })
            }
        })



});


$("#siguienteDepuracion").click(function() {

    var accion = $('input:radio[name=accionDepurar]:checked').val()
    
    if (accion == 1){
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
    }else{

        $('#selectJerarquia').val()
        cargarTabla($('#selectJerarquia').val());
    }
});






function cargarTabla(idJerarquia){
    $('#showReporte').show();
    var arr = [
        ["Id_Producto","CodigoBarra","Producto","Id_Fabricante","Fabricante","Id_Fabricante_Nuevo","Fabricante_Nuevo"], 
        ["Id_Producto","CodigoBarra","Producto","Id_Fabricante","Fabricante","Id_Fabricante_Nuevo","Fabricante_Nuevo"], 
        ["Id_Producto","CodigoBarra","Producto","Id_Fabricante","Fabricante","Id_Fabricante_Nuevo","Fabricante_Nuevo"], 
        ["Id_Producto","CodigoBarra","Producto","Id_Marca","Marca","Id_Marca_Nuevo","Marca_Nuevo"], 
        ["Id_Producto","CodigoBarra","Producto","Id_Segmento","Segmento","Id_Segmento_Nuevo","Segmento_Nuevo"], 
        ["Id_Producto","CodigoBarra","Producto","Id_RangoTamano","RangoTamano","Id_RangoTamano_Nuevo","RangoTamano_Nuevo"], 
        ["Id_Producto","CodigoBarra","Producto","Id_Tamano","Tamano","Id_Tamano_Nuevo","Tamano_Nuevo"]
        //["Id_Producto","CodigoBarra","Producto","Id_RangoTamano","TamañoRango","Id_RangoTamano","TamañoRango"], 
        
    ];
    var i = idJerarquia;

    


    table = new Tabulator("#TableReporte", {
        ajaxURL: localStorage.getItem("urlApi")+'getCambiosMensuales4JerarquiaV2/'+idJerarquia,
        height : "350px" ,
        ajaxConfig:{
            method:"GET", //set request type to Position
            headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
        },
        layout:"fitDataStretch",//,fitDataStretch,fitDataTable",
        progressload : "scroll",
        //paginationSize : 20,
        placeholder:"Datos no encontrados",
        //selectable:1,
        selectablePersistence:true, //make rows selectable
        
        //autoColumns:true,
        
        columns:[
            {title:"IdCod", field:"IdCod", sorter:"number"},
            {title:"CodBar", field:"CodBar", sorter:"string"},
            {title:"Prod", field:"Prod", sorter:"string"},
            {title:"ICod1", field:"ICod1", sorter:"number"},
            {title:"Desc1", field:"Desc1", sorter:"string"},
            {title:"ICod2", field:"ICod2", sorter:"number"},
            {title:"Desc2", field:"Desc2", sorter:"string"}
            
        ],
    });
}