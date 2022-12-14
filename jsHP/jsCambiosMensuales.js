$(document).ready(function() {
    cargarJerarquia('#selectJerarquia',0);
});

$('#selectJerarquia').change(function(){
    cargarProceso('#selectProceso',0);
});

$('#selectProceso').change(function(){
    document.getElementById('ejecutarActualizacion').disabled = false;
});

$("#ejecutarActualizacion").click(function() {
    var Jerarquia = $('select[name="selectJerarquia"] option:selected').text();
    var Proceso = $('select[name="selectProceso"] option:selected').text();
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
        })
        swalWithBootstrapButtons.fire({
            title: "¿Seguro deseas actualizar para "+ Jerarquia + " "+Proceso +"?",
            text: "Esta o   peracion no podra ser reversada",
            icon: 'warning',
            showCancelButton: true,
            cancelButtonText:  'No, Cancelar',
            confirmButtonText: 'Si, Actualizar',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                var idJerarquia = $('#selectJerarquia').val();
                var idProceso = $('#selectProceso').val();

                var idUsuario = localStorage.getItem('IdUsuario');
                var API;

                console.log( typeof idProceso);

                switch(parseInt(idProceso)) {
                    case 1:
                    // Solo Diccionario
                    API = localStorage.getItem("urlApi")+'CambiarProd4JerarquiaSP/'+idJerarquia+"/"+idUsuario;
                    break;
                    case 2:
                    // Solo Data Historica
                    API = localStorage.getItem("urlApi")+'CambiarDataHistoricaSP';
                    break;
                    default:
                    // Diccionario/Data Historica
                    API = localStorage.getItem("urlApi")+'CambiarDiccionarioDataHistoricaSP';
                    break;
                    
                }
                
                var settings = {                    
                    "url":API,
                    "method": "get",
                    "headers": {
                        "Content-Type": "application/x-www-form-urlencoded",
                        "Authorization": "Bearer " + localStorage.getItem('Token')
                    }
                }
                $.ajax(settings).done(function(response){
                    $("#ItemModificarDescripcionModal").modal("show");
                    cargarTabla($('#selectJerarquia').val(),localStorage.getItem('IdUsuario'));
                    
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
                })
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



$('#selectCategoria').change(function(){
    $('#selectProceso').empty();
    $('#file').empty();
    $('#selectProceso').empty();
    $('#showReporte').hide();
    //$('#zonaCarga').hide();
    document.getElementById('file').disabled = true;
    document.getElementById('SubirArchivo').disabled = true;
    document.getElementById('ejecutarActualizacion').disabled = true;
    cargarJerarquia('#selectJerarquia',0);
    
});

$('#selectJerarquia_').change(function(){
    $('#showReporte').hide();
    //$('#zonaCarga').show();
    $('#file').empty();
    $('#selectProceso').empty();
    document.getElementById('file').disabled = false;
    document.getElementById('SubirArchivo').disabled = true;
    document.getElementById('ejecutarActualizacion').disabled = true;
    
});



$("#file").change(function() {
    $('#selectProceso').empty();
    $('#showReporte').hide();
    
    document.getElementById('SubirArchivo').disabled = false;
    document.getElementById('ejecutarActualizacion').disabled = true;
});

$("#SubirArchivo").click(function(event) {
    event.preventDefault();
    $('#showReporte').hide();
    //var urlApi = localStorage.getItem("urlApi"); 
    var file = $("#file").val();
    var nameFile = file.split('\\').pop(); 
    var nombreArchivo = nameFile.split('.');   
    var formData = new FormData();
    formData.append('file', $("#file")[0].files[0]);
    formData.append('nameFile',nameFile);
    formData.append('idUsuario',localStorage.getItem("IdUsuario"));
    

    var settings = {
        "async": true,
        "crossDomain": true,
        "contentType": false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
        "processData": false, // NEEDED, DON'T OMIT THIS
        "url":localStorage.getItem("urlApi")+'fileUploadExcel',
        "method": "post",
        "headers": {
            //"Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        },
        "data":formData,
        /*"data": {
            "file": formData,
            "temp":3333333
        }*/
    }
    $.ajax(settings).done(function(response) {
        //excelToBD(idUsuario,nameFile)
        cargarTabla(response);
        cargarProceso('#selectProceso',0);
    
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
});

$("#selectProceso").change(function() {
    jQuery('#ejecutarActualizacion').prop('disabled', false);
    //document.getElementById('ejecutarActualizacion').disabled = false;      
});




function cargarTabla(Json){
    $('#showReporte').show();
    var arr = [
        ["Id_Producto","CodigoBarra","Producto","Id_Fabricante","Fabricante","Id_Fabricante_Nuevo","Fabricante_Nuevo"], 
        ["Id_Producto","CodigoBarra","Producto","Id_Marca","Marca","Id_Marca_Nuevo","Marca_Nuevo"], 
        ["Id_Producto","CodigoBarra","Producto","Id_Segmento","Segmento","Id_Segmento_Nuevo","Segmento_Nuevo"], 
        ["Id_Producto","CodigoBarra","Producto","Id_RangoTamano","RangoTamano","Id_RangoTamano_Nuevo","RangoTamano_Nuevo"], 
        ["Id_Producto","CodigoBarra","Producto","Id_Tamano","Tamano","Id_Tamano_Nuevo","Tamano_Nuevo"]
        //["Id_Producto","CodigoBarra","Producto","Id_RangoTamano","TamañoRango","Id_RangoTamano","TamañoRango"], 
        
    ];
    var i;

    switch($('select[name="selectJerarquia"] option:selected').text()) {
        case 'Fabricante':
            i = 0
            break;
        case 'Marca':
            i = 1
            break;
        case 'Segmento':
            i = 2
            break;
        case 'Rango Tamaño':
            i = 3
            break;
        case 'Tamaño':
            i = 4
            break;
        default:
          // code block
      }


    table = new Tabulator("#TableReporte", {
        //ajaxURL: localStorage.getItem("urlApi")+'cargarTablaFromJson/'+Json,
        height : "350px" ,
        layout:"fitDataStretch",//,fitDataStretch,fitDataTable",
        progressload : "scroll",
        //paginationSize : 20,
        placeholder:"Datos no encontrados",
        //selectable:1,
        selectablePersistence:true, //make rows selectable
        data:Json, //set initial table data

        //autoColumns:true,
        
        columns:[
            {title:arr[i][0], field:arr[i][0], sorter:"number"},
            {title:arr[i][1], field:arr[i][1], sorter:"string"},
            {title:arr[i][2], field:arr[i][2], sorter:"string"},
            {title:arr[i][3], field:arr[i][3], sorter:"number"},
            {title:arr[i][4], field:arr[i][4], sorter:"string"},
            {title:arr[i][5], field:arr[i][5], sorter:"number"},
            {title:arr[i][6], field:arr[i][6], sorter:"string"}
            
        ],
    });
}