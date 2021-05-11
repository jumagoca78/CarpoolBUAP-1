/* al cargar el documento */
$(document).ready(function(){
    $("#btn-save").click(function(){
        //alert(direccion);
        swal({
          title: "¿Estas seguro?",
          text: "Los datos anteriores se perderan!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            SubirDatos();
          } else {
            swal("Edición cancelada!");
          }
        });
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
          swal("Perfil actualizado correctamente", {
            icon: "success",
          })
          .then(() => {
            window.location = '../Views/profile.php';
          });
        },
        error: function() {
          alert('Error...');
        }
      });
}