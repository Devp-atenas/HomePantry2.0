$(document).ready(function() {
    cargarPerfil('#selectPerfil',0);
    
});

$('#idCrearPerfil').click(function(){
    crearPerfil();
});


function cargarTablaFunciones(idDivTabla){
    var urlApi = sessionStorage.getItem("urlApi");
    var table = new Tabulator(idDivTabla, {
        ajaxURL: urlApi+'getAllFunciones/',
        renderVerticalBuffer:600,
        ajaxConfig:{
            method:"GET", //set request type to Position
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
        },
        height : "550px" ,
        layout:"fitDataTable",//fitDataTable",
        progressload : "scroll",
        groupBy:"Padre",
        placeholder:"Datos no encontrados",
        selectable:true,
        locale:true,
        selectablePersistence:true, //make rows selectable
        columns:[
            {formatter:"rowSelection", titleFormatter:"rowSelection", align:"center", headerSort:false},
            {title:"Opciones", field:"Opcion", sorter:"number"}
            /**/
            
            //{title:"TTTTTTT", field:"BDBDBDBD", sorter:"number", headerFilter:"input"},
            
        ],
    });
    
    document.getElementById("idGuardarPerfilOpciones").addEventListener("click", function(){
        //alert(row.select());
        var selectedData = table.getSelectedData();
        var arrayID;
        arrayID = jQuery.map(selectedData, function(value, index) {
            return (value.id_opcion);
        });
        //crearPerfil(arrayID);
        
       
       
    });
    
    
}

function crearPerfil(){
    var urlApi = localStorage.getItem("urlApi");
    
    const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
    })
    swalWithBootstrapButtons.fire({
        title: '¿Seguro crear el perfil '+$("#inputPerfil").val()+'?',
        text: " ... ",
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText:  'No, Cancelar',
        confirmButtonText: 'Si, Crear Perfil',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            var settings = {
                "url": urlApi+'addPerfil',
                "method": "POST",
                "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                },
                "data": {
                    "Perfil":$("#inputPerfil").val(),
                    "Descripcion":$("#inputDescripcion").val(),
                    "activo":  $('input:radio[name=activoAdd]:checked').val()
                }
            }
            $.ajax(settings).done(function(response){
                
                
                
                
                
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
                cargarTabla();
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
                    //var form = document.querySelector('#FormUsuariosEdit');
                    //form.reset();
                    //window.location = '/homepantry20/index.php';
                }
            })
        
        
    }
        
    })
}



function cargarPerfil(etiqueta,idSeleccionado) {
    var urlApi = localStorage.getItem("urlApi");
    var settings = {
        "url":urlApi+'getAllPerfiles/1',
        "method": "get",
        "headers": {
                    "Content-Type": "application/x-www-form-urlencoded",
                    "Authorization": "Bearer " + localStorage.getItem('Token')
                }
    }
    $.ajax(settings).done(function(response) {
        let selected = $(etiqueta);
        selected.find("option").remove();
        if (idSeleccionado == 0){
            selected.append("<option value='' selected disabled> -- Seleccione -- </option>");
        }
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].Id == idSeleccionado) {
                selected.append("<option value=" + response.data[i].Id + " selected>" +
                    response.data[i].Perfil + "</option>");
            } else {
                selected.append("<option value=" + response.data[i].Id + ">" + response.data[i].Perfil + "</option>");
            }
        }
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
}



