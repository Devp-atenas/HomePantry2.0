function callUpLoadFile(){
    var file = $("#file").val();
    var nameFile = file.split('\\').pop();
    var idEstudio = $("#file").val(); 

    //alert("Ruta: "+file);
    //alert("Archivo: "+nameFile);
    upLoadFile(file,nameFile);
}

function upLoadFile_(file,idHogar) {
    var urlApi = localStorage.getItem("urlApi"); 
    var formData = new FormData();
    formData.append('file', $("#file")[0].files[0]);
    formData.append('ID_HOGAR',idHogar);
    
    var settings = {
        "async": true,
        "crossDomain": true,
        "contentType": false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
        "processData": false, // NEEDED, DON'T OMIT THIS
        "url":urlApi+'fileUploadEstudio',//
        "method": "post",
        "headers": {
            //"Content-Type": "application/x-www-form-urlencoded",
            "Authorization": "Bearer " + localStorage.getItem('Token')
        },
        "data":formData
        /*"data": {
            "file": formData,
            "prueba":3333333
        }*/
        
        
        
    }
    $.ajax(settings).done(function(response) {
        //alert("Subido correctamente");
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
                title: 'Su Session ha Expirado',
                confirmButtonText: `Ok`,
            })
            window.location = '/homepantry20/index.php';
        }
    })
}