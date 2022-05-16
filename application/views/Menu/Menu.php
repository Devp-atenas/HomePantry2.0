    <nav class="mt-2 nav-compact">
        <ul id="menuXD" class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        </ul>
    </nav>

<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js')?>"></script>

<script>
    $(document).ready(function() {
        generarMenu(localStorage.getItem("user"));
    });
    
    function generarMenu(user){
        var settings = {
            "url": '<?php echo urlApi; ?>getOpcionesMenu/'+user,
            "method": "get",
            "headers": {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer " + localStorage.getItem('Token')
            }
        }
        $.ajax(settings).done(function(response) {
            //let menuXD.find("menuXD");
            //alert(8888);
            //let menuXD = $("#menuXD");
            var url;
            var TT = "";
            $.each(response, function(menuKey, menuValue) {
                TT += '<li class="nav-item">'
                +       '<a href="#" class="nav-link">'
                +           '<i class="nav-icon bi bi-menu-app-fill"></i>'
                +           '<p>'+menuKey+'<i class="right fas fa-angle-left"></i></p>'
                +       '</a>'
                +       '<ul class="nav nav-treeview">';
            $.each(menuValue, function(subMenuKey, subMenuValue) {
                url = "<?php echo base_url('"+subMenuValue.Url+"');?>"
                TT += '<li class="nav-item">'
                    +              '<a href="'+url+'" class="nav-link">'
                    +                  '<i class="nav-icon '+subMenuValue.icon+'"></i>'
                    +                  '<p>'+subMenuValue.Nombre+'</p>'
                    +              '</a>'
                    +          '</li>';
            });
                TT += '</ul>';
                TT += '</li>';
            });
            //alert(999999);
            //alert(TT);
            //console.log(TT);
            //var TT = localStorage.getItem("menuXD");
            let menuXD = $("#menuXD");
            menuXD.append(TT);
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
</script>