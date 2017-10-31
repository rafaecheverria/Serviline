
$(document).ready(function(){
// Funcion que valida el rut
	$('#rut').Rut({
     on_error: function(){
		toastr["error"]("El rut tiene un formato incorrecto, intente nuevamente!");
	     $('#rut').val("");
	     $('#rut').focus();
   },
 	on_success: function(){
		toastr["success"]("El rut es correcto!");
	   $('#nombres').focus();
   },
     format_on: 'keyup'
   });
});