$(document).on("ready", inicio);

$("#mensaje").text("El usuario: $usuario esta en uso");

$(document).ready(function(e) {
    
	$("#entrar").click(function(e) {
        var user = $("#userid").val();
		var pass = $("#pass").val();
		var passpanel = $("#passpanel").val();
		if(user != "" && pass != "" && passpanel != "")
		{
			$.ajax({
				url: "login.php",
				type: "POST",
				data: { "userid": user, "pass": pass, "passpanel": passpanel}
			}).done(function (data){
				var obj = jQuery.parseJSON(data);
				if(obj.UserID != "")
				{
					$("#respuesta_titulo").text( "Bienvenido" );
					$("#respuesta_body").text( "Bienvenido " + obj.UserID + ", Que tengas un buen dia! ;D <br />Recuerda VEEMOS TODO LO QUE HACES!" );
				}else{
					$("#respuesta_titulo").text( "Error de Acceso" );
					$("#respuesta_body").text( obj.Error );
				}
			}).fail(function (){
				$("#respuesta_titulo").text( "Error del Servidor" );
				$("#respuesta_body").text( "Error en la conexion al servidor!" );
			});
			$("#respuesta").modal('show');
		}
    });
	
	$("#respuesta_button").click(function(e) {
		var resp = $("#respuesta_titulo").text();
		if( resp === "Bienvenido" )
		{
	        document.location = "./";
		}else{
			$("#respuesta").modal('hide');
		}
    });
	
	/*$("body").queryLoader2({
        percentage: true
    });*/
	
});

function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(80)
                        .height(80);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }