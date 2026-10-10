jQuery(document).on('submit','#formlog', function(event) {
	event.preventDefault();

	jQuery.ajax ({
		url: 'main_app/login.php',
		type: 'POST',
		dataType: 'json',
		data: $(this).serialize(),
		beforeSend: function() {
			$('.botonlog').val('Validando...');
		}
	})
	.done(function(respuesta) {
		console.log(respuesta);
		if(!respuesta.error) {
			if(respuesta.tipo == 'Admin') {
				location.href = 'main_app/Admin/';
			} else if (respuesta.tipo == 'User') {
				location.href = 'main_app/User/index.php';
			}
		} else {
			$('.error').slideDown('slow');
			setTimeout(function() {
				$('.error').slideUp('slow');
			},3000);
			$('.botonlog').val('Iniciar Sesión');
		}
	})
	.fail(function(resp) {
		console.log(resp.responseText);
	})
	.always(function() {
		console.log("complete");
	});
});