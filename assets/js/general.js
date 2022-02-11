
		const Toast = Swal.mixin({
		  toast: true,
		  position: 'top-end',
		  showConfirmButton: false,
		  timer: 3000,
		  timerProgressBar: true,
		  onOpen: (toast) => {
			toast.addEventListener('mouseenter', Swal.stopTimer)
			toast.addEventListener('mouseleave', Swal.resumeTimer)
		  }
		})
		
	


	//const Toast_n = Swal();		
	
	function block() {
	$.blockUI({ 
		message: '<h2>Procesando petición</h2>' 
	});
	  setTimeout(unBlock, 2000); 
	}

	function unBlock() {
	  $.unblockUI();
	}
	
	
	function inicioLoading(msg) {
		$(".espera").removeClass('ocultar');
        /*$.blockUI({
            message: '<h1>Espere por Favor...</h1>'
			});*/
		}

		function closeLoading() {
			$(".espera").addClass('ocultar')
			//$.unblockUI();
		}	
		
	/*.swal-container {
        z-index: 2000;
      };*/
		
		function showError_n(msg) {
				Toastalert.fire({
						icon: 'error',
						title: msg
				})		
		}
		

	function showSuccess_n(msg) {
					Swal.fire({
					  position: 'top-end',
					  icon: 'success',
					  title: msg,
					  showConfirmButton: false,
					timer: 1500
					})		
		}
		
		
		
		
function showError(msg) {
					Toast.fire({
						icon: 'error',
						title: msg
				})		
		}			
		
function showSuccess(msg) {
					Toast.fire({
						icon: 'success',
						title: msg
				})		
		}

	// function RefrescarTableros() {
				// $.getJSON(base_url+'Apidollar/actualiza_tablero/', function(data) {
						// if (data !== false) {
							// $("#div_tablero").empty();
							// $("#div_tablero").html(data);
						// }	
				// });
				// return false;
		// }

		
		//$('#chatAudio')[0].play();

(function( $ ) {
	'use strict';
	jQuery(document).ready(function($) {
		
				
				
		
		$.sevent.init({
			url: base_url+'/Apidollar/Procesoactual/',
		});
		
		$.sevent.on('saldo_web', function(response) {
			$("#saldo_web").html(response.data);
			$("#saldo_web_home").html(response.data);
		});
		
		$.sevent.on('HomeProceso', function(response) {
			var data = $.sevent.json(response);
			if (data !== false) {
				$("#div_proceso").empty();
				$("#div_proceso").html(data);
			}
		});
		
		$.sevent.on('HomeUltimas', function(response) {
			var data = $.sevent.json(response);
			if (data !== false) {
				$("#div_ultimas").empty();
				$("#div_ultimas").html(data);
			}
		});
		
		
		$.sevent.on('HomeTableros', function(response) {
			var data = $.sevent.json(response);
			if (data !== false) {
				$("#div_tablero").empty();
				$("#div_tablero").html(data);
			}
		});
		
		$.sevent.on('HomeTableros_ret', function(response) {
			var data = $.sevent.json(response);
			if (data !== false) {
				$("#div_tablero_ret").empty();
				$("#div_tablero_ret").html(data);
			}
		})
		
		
		$.sevent.on('push_web', function(response) {
			
			var data = $.sevent.json(response);
    		if (data !== false) {
					var valor = $("#cantidad").val();
				if (data.cantidad>0 && parseInt(data.cantidad)!=parseInt(valor) ){
					$("#notification-count").html('<span class="badge badge-pill badge-danger"  style="position:absolute; font-size:9px;right: -1px;top:0px;">+'+data.cantidad+'</span>');
					$('#chatAudio')[0].play();
					$("#cantidad").val(data.cantidad);
				}
				
				if (data.datos!=""){
					$("#notification-latest").html(data.datos);
				}else{
		            $("#notification-latest").html('<a href="javascript:void(0);" class="dropdown-item d-block p-15 border-bottom">							<div class="d-flex"><div class="avatar avatar-blue avatar-icon"><i class="anticon anticon-mail"></i></div><div class="m-l-15"><p class="m-b-0 text-dark">No existe Mensaje actualmente</p></div></div></a>');
				}
				
				
				
				
			}else{
				//console.log("nada");
			}	
			

			
		});
		
		
		 
		
	});
})( jQuery );