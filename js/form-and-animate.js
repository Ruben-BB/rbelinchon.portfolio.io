// animate skills
			$(window).on('scroll', function(){
				scrollActual = $(window).scrollTop();
				let profundidadUsuario = $(window).scrollTop();
		
				$('.progress-bar').each(function(){

					let profundidadObjetivoProgress = $(this).offset().top - $(window).innerHeight();

					if (profundidadUsuario >= profundidadObjetivoProgress) {

						$(this).addClass('progress-animation');
					}
				});
			});
			

			// validación formulario
			$('form').on('submit', function(e){

				let nombre = $('#campoNombre').val();
				let email = $('#campoEmail').val();
				let mensaje = $('#campoMensaje').val();

				if (nombre.length < 2) {
					mostrarError("Por favor, introduce un nombre.");
					e.preventDefault();}

				if ( email.includes('@') == false || email.includes('.') == false ) {
					mostrarError("Por favor, introduce un email válido.");
					e.preventDefault();}

				if (mensaje.length < 12) {
					mostrarError("El mensaje es demasiado corto.");
					e.preventDefault();}
			});