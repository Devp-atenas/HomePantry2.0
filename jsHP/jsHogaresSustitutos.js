function cargarTablaHogaresMuestraIO(urlApi,idDivTabla,idEstado,claseSocial,muestra){
    //var tableData = [{data:{idEstado:idEstado, claseSocial:claseSocial,muestra:muestra}}];
    
    var flagG = false;
    if (muestra == 1){
        height = "200px";
    }else{
        height = "150px";
    }
    
    
    var table = new Tabulator(idDivTabla, {
        ajaxURL: urlApi+'getListaHogaresMuestraIO/'+idEstado+'/'+claseSocial+'/'+muestra,
        //data:tableData, //set initial table data
        //ajaxParams:tableData,
        ajaxConfig:{
            method:"GET", //set request type to Position
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            },
        },
        height : height ,
        layout:"fitDataStretch",//,fitDataStretch,fitDataTable",
        progressload : "scroll",
        //paginationSize : 20,
        placeholder:"Datos no encontrados",
        selectable:1,
        selectablePersistence:true, //make rows selectable
        columns:[
            {title:"ID Muestra", field:"Id_Muestra", sorter:"number", headerFilter:"input"},
            {title:"ID Hogar", field:"Id_Hogar", sorter:"number", headerFilter:"input"},
            {title:"Codigo Hogar", field:"CodigoHogar", sorter:"string", headerFilter:"input"},
            {title:"Panelista Responsable", field:"NombrePanelista", sorter:"string", headerFilter:"input"},
            {title:"Cedula", field:"cedula",  sorter:"number", headerFilter:"input"},
            {title:"Correo", field:"correo", sorter:"string", headerFilter:"input"},
            {title:"Total Personas", field:"TotalPersonas", sorter:"number", headerFilter:"input"},
            {title:"Masculinos", field:"cantM", sorter:"number", headerFilter:"input"},
            {title:"Femeninos", field:"cantF", sorter:"number", headerFilter:"input"},
        ],
    });
    
    table.on("rowSelectionChanged", function(data, rows){
        
        console.log(data, rows);
        const selectRowMod = table.modules.selectRow;
		//console.log(ids);
        
        
        
        if (muestra == 1){
            if (data.length != 0){
                const Id_Hogar = data.map(d => d.Id_Hogar);
                sessionStorage.setItem("Id_HogarI",data.map(d => d.Id_Hogar));
                sessionStorage.setItem("CodigoHogarI",data.map(d => d.CodigoHogar));
                sessionStorage.setItem("Id_Muestra",data.map(d => d.Id_Muestra));
                sessionStorage.setItem("NombrePanelistaI",data.map(d => d.NombrePanelista));
                /*data.forEach(persona => {
                    console.log("Id_Hogar: "+persona.Id_Hogar);
                    console.log("CodigoHogar: "+persona.CodigoHogar);
                    console.log("NombrePanelista: "+persona.NombrePanelista);
                    sessionStorage.setItem("Id_HogarI",Id_Hogar);
                    sessionStorage.setItem("CodigoHogarI",CodigoHogar);
                    sessionStorage.setItem("NombrePanelistaI",NombrePanelista);
                });
                */
                sessionStorage.setItem("flagI",true);
            }else{
                sessionStorage.setItem("flagI",false);
                $('#showButton').hide();
            }
        }else{
            if (data.length != 0){
                sessionStorage.setItem("Id_Hogar0",data.map(d => d.Id_Hogar));
                sessionStorage.setItem("CodigoHogar0",data.map(d => d.CodigoHogar));
                sessionStorage.setItem("NombrePanelista0",data.map(d => d.NombrePanelista));
                sessionStorage.setItem("flag0",true);

            }else{
                sessionStorage.setItem("flag0",false);
                $('#showButton').hide();

            }
        }
        
        if ((sessionStorage.getItem("flag0") == 'true') && (sessionStorage.getItem("flagI") == 'true')){
            $('#showButton').show();
        }
        
    });
}

function callSustituirHogar(){
    
    var Id_HogarI = sessionStorage.getItem("Id_HogarI");
    var CodigoHogarI = sessionStorage.getItem("CodigoHogarI");
    var NombrePanelistaI = sessionStorage.getItem("NombrePanelistaI");
    var Id_Hogar0 = sessionStorage.getItem("Id_Hogar0");
    var CodigoHogar0 = sessionStorage.getItem("CodigoHogar0");
    var NombrePanelista0 = sessionStorage.getItem("NombrePanelista0");

    $('#inputIdHogarSustituido').val(Id_HogarI);
    $('#inputCodigoHogarSustituido').val(CodigoHogarI);
    $('#inputResponsableHogarSustituido').val(NombrePanelistaI);
    $('#inputIdHogarSustituto').val(Id_Hogar0);
    $('#inputCodigoHogarSustituto').val(CodigoHogar0);
    $('#inputResponsableHogarSustituto').val(NombrePanelista0);

    $('#sustituirHogarModal').modal('show');
}

function ejecutarSustituirHogar(){
    var urlApi = sessionStorage.getItem("urlApi");
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": urlApi+'sustituirHogar',
        "method": "POST",
        "headers": {
            "Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        },
        "data": {
            "Id_HogarI": $('#inputIdHogarSustituido').val(),
            "Id_Hogar0": $('#inputIdHogarSustituto').val(),
            "motivoSustitucion":  $('#motivoSustitucion').val(),
            "Id_Muestra":  sessionStorage.getItem("Id_Muestra")
            
        }
    }
    $.ajax(settings).done(function(response) {
        $('#sustituirHogarModal').modal('hide');
        var idEstado = $("#selectEstadoI").val();
        var claseSocial =  $("#selectClaseSocialI").val();
        cargarTablaHogaresMuestraIO(urlApi,"#TablaHogaresMuestraI",idEstado,claseSocial,1);
        cargarTablaHogaresMuestraIO(urlApi,"#TablaHogaresMuestra0",idEstado,claseSocial,0);
    
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
            icon: 'success',
            title: response.message,
            confirmButtonText: `Ok`,
        })
        var form = document.querySelector('#FormProducto');
        form.reset();
        
        //let xtable = $('#TableProducto').DataTable();
        //xtable.ajax.reload(null, false);
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
            var form = document.querySelector('#FormProducto');
            form.reset();
            window.location = '/homepantry20/index.php';
        }
    })
}

