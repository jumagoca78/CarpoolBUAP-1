/* al cargar el documento */
$(document).ready(function(){
    $("#btn-save").click(function(){
        //alert(direccion);
        SubirDatos();
    });
});

function SubirDatos(){
    let perfil = $('#perfil').val();
    let direccion = $('#direccion').val();
    let telefono = $('#telefono').val();
    //alert(perfil+direccion+telefono);
    $.ajax({
        type: 'POST',
        url: '../Models/edit-profile.php',
        data: {perfil,direccion,telefono},
        success: function(msg) {
          alert(msg);
        },
        error: function() {
          alert('Error...');
        }
      });
}