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
	
	function inicioLoading(msg) {
		$(".espera").removeClass('ocultar');
		}

		function closeLoading() {
			$(".espera").addClass('ocultar')
		}	
		

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
