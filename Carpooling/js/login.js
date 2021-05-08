$(document).ready(function(){
    $("#btn_login").click(function(){
        VerificarCredenciales();
    });
 });

 function VerificarCredenciales(){
    let usuario = {
        email: $('#email').val(),
        password:  $('#password').val(),   
    };

    $.ajax({
        type: 'POST',
        url: 'Models/login.php',
        data: usuario,
        success: function(msg) {
          alert(msg);
          if(msg=='ok'){
            window.location = 'Views/seleccionarusuario.php';
          }else{
            swal({
              title: "Error de credenciales",
              text: "El correo o contraseña son incorrectos",
              icon: "error"	   	
            });
          }
        },
        error: function() {
          alert("Ocurrio un error");
        }
      });

    
} 