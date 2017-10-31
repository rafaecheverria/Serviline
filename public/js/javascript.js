function redirect(ruta)
{
	window.location = ruta;
	//setTimeout("location."+ruta, 5000);
}
$(document).ready(function(){

	 toastr.options = {
		  "closeButton": true,
		  "debug": false,
		  "newestOnTop": false,
		  "positionClass": "toast-bottom-right",
		  "onclick": null,
		  "showDuration": "300",
		  "hideDuration": "1000",
		  "timeOut": "5000",
		  "extendedTimeOut": "1000",
		  "showEasing": "swing",
		  "hideEasing": "linear",
		  "showMethod": "fadeIn",
		  "hideMethod": "fadeOut"
		}

	$( "#guardar" ).click(function(event){ 
		event.preventDefault();
		var dataString  = $( '#form_contacto' ).serializeArray();
		var route = "contacto";
		$.ajax({
			url: route,
			headers: {'X-CSRF-TOKEN':$('input[name=_token]').attr('content')},
			type: 'post',
			datatype: 'json',
			data:dataString,

			beforeSend: function(){
				$("#guardar").text("Enviando...");
				$("#guardar").attr("disabled", true);
			},
			complete: function(data){
				$("#guardar").text("Enviar");
				$("#guardar").attr("disabled", false);
			},
			success:function(){
				toastr["success"]("Responderemos a su solicitud a la brevedad, gracias por escribirnos!","Mensaje Enviado:");
				$('#form_contacto')[0].reset();
			},
			error:function(data){
				var error = data.responseJSON;
				for(var i in error){
					for(var j in error[i]){
						var message = error[i][j];
						toastr.error(message);
					}
				}
			}
		});
	});
	$( "#ingresar" ).click(function(event){ 
		event.preventDefault();
		var dataString  = $( '#form_login' ).serializeArray();
		var route = "login";
		$.ajax({
			url: route,
			headers: {'X-CSRF-TOKEN':$('input[name=_token]').attr('content')},
			type: 'post',
			datatype: 'json',
			data:dataString,
			beforeSend: function(){
				$("#ingresar").text("Ingresar...");
				$("#ingresar").attr("disabled", true);
			},
			complete: function(data){
				$("#ingresar").text("Ingresar");
				$("#ingresar").attr("disabled", false);
			},
			success:function(){
				toastr["success"]("Se ha autenticado correctamente!");
				$('#modal1').modal('close');
				//setTimeout("redirect('/')", 700);
				redirect('/');
			},
			error:function(data){
				var error = data.responseJSON;
				for(var i in error){
					var message = error[i];
					toastr.error(message);
				}
			}
		});
	});
	$( "#registrar" ).click(function(event){ 
		event.preventDefault();
		var dataString  = $( '#form_register' ).serializeArray();
		var route = "register";

		$.ajax({
			url: route,
			headers: {'X-CSRF-TOKEN':$('input[name=_token]').attr('content')},
			type: 'post',
			datatype: 'json',
			data:dataString,
			beforeSend: function(){
				$("#registrar").text("Registrando...");
				$("#registrar").attr("disabled", true);
			},
			complete: function(data){
				$("#registrar").text("Registrar");
				$("#registrar").attr("disabled", false);
			},
			success:function(){
				toastr["success"]("Se ha registrado correctamente!");
				redirect('/');
			},
			error:function(data){
				var error = data.responseJSON;
				for(var i in error){
					var message = error[i];
					toastr.error(message);
				}
			}
		});
	});
	$( "#update_profile" ).click(function(event){ 
		event.preventDefault();
		var id= $('#id').val();
		var route = "/usuarios/perfil/"+id+"";
		var dataString  = $( '#form_profile' ).serializeArray();		
		$.ajax({
			url: route,
			headers: {'X-CSRF-TOKEN':$('input[name=_token]').attr('content')},
			type: 'PUT',
			datatype: 'json',
			data:dataString,
			success:function(res){
				if (res.success){ 
					$('#name_avatar').html(res.name+'<i class="material-icons right">arrow_drop_down</i>');
					toastr["success"](res.message);
				}else{
					toastr["error"](res.message);
				}
			},
		});
	});
});
// Subir Imagen de Perfil
	var $avatarInput, $avatarImage, $avatarForm;
	var avatarUrl;

	$(function(){
	
		$avatarInput = $('#avatarInput');
		$avatarImage = $('.avatarImage');
		$avatarForm = $('#avatarForm');
		avatarUrl = "/usuarios/perfil";
		$id = $('#id').val();

		$avatarImage.on('click', function(){	
			$avatarInput.click();
		});
		
		$avatarInput.on('change', function(){

		var formData = new FormData();
		formData.append('avatar', $avatarInput[0].files[0]);

			$.ajax({
				
				url: avatarUrl+'?'+$avatarForm.serialize(),
				method: 'POST',
				data: formData,
				processData: false,
				contentType: false,

			beforeSend: function(){
					$avatarImage.attr('src', '/img/giphy-downsized.gif');
			},
			success: function(data){
				if (data.success)
					$avatarImage.attr('src', '/img/'+data.file_name+'?'+ new Date().getTime());
					$avatarImage.attr('src', '/img/'+data.file_name+'?'+ new Date().getTime());
					toastr["success"](data.message);
			},
			error: function(data){
				console.log(data);
				var error = data.responseJSON;
				for(var i in error){
					var message = error[i];
					toastr.error(message);
				}
			}
		});

	});
});