$(document).ready(function(){
    
    $("#btn_conductor").click(function(){
        $.ajax({
            type: 'GET',
            url: '../Models/select_user.php',
            success: function(msg) {
              let tipoUsuario=msg;
              if(tipoUsuario=='P'){
                swal({
                    title: "No eres conductor!",
                    text: "Registrate como coductor para poder acceder!",
                    icon: "warning",	   	
                    buttons: ["Cancelar", "Registrarse"]
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = '../Views/registroauto.php';
                    } else {
                      swal("Registro cancelado");
                    }
                  });

              }else{
                window.location = '../Views/vistapasajero.php';
              }
            },
            error: function() {
              alert('Error...');
            }
          });
    });
    
});

