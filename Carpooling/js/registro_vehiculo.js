$(document).ready(function(){
    let Vehiculo;
    $("#btn_registrarAuto").click(function(){
        CapturarDatos();
        if(ValidarFormulario()){
            swal({
                title: "Registro conductor",
                text: "¿Esta seguro de registrar este auto?",
                icon: "warning",	   	
                buttons: ["Cancelar", "Registrarse"]
            })
            .then((willDelete) => {
                if (willDelete) {
                    SubirDatosAuto();
                } else {
                  swal("Registro cancelado");
                }
              });
        } 
    });
 });

 function CapturarDatos(){
    Vehiculo = {
        modelo      : $("#modelo").val(),
        marca       : $("#marca").val(),
        color       : $("#color").val(),
        antiguedad  : $("#antiguedad").val(),
        capacidad   : $("#capacidad").val(),
        placa       : $("#placa").val()
    };
 }

 function ValidarFormulario(){
    if(Vehiculo.modelo == "" ||Vehiculo.marca == "" || Vehiculo.color == "" || Vehiculo.antiguedad == "" || 
        Vehiculo.capacidad == "") {

        swal("MENSAJE", "Faltan datos por llenar", "warning");
        return false;

    }
	if(Vehiculo.capacidad < 4)  {
        swal("MENSAJE", "La capacidad del vehículo no puede ser menos de 4 plazas", "warning");
	    return false;
	}
	if(Vehiculo.antiguedad > 10)  {
        swal("MENSAJE", "La antiguedad del auto rebasa lo permitido. Recuerda que a lo más, debe ser de 10 años", "error");
	    return false;
	}
	if(Vehiculo.placa.length < 6 || Vehiculo.placa.length > 12) {
	   swal("MENSAJE", "Por favor, verifica que la placa cumpla el formato", "warning");
	   return false;
	}
    return true;
 }

 function SubirDatosAuto(){
    $.ajax({
        type: 'POST',
        url: '../Models/register_car.php',
        data: Vehiculo,
        success: function(msg) {
            swal("Registro Exitoso","Gracias por unirte a nosotros!", {
                icon: "success",
              })
              .then(() => {
                window.location = '../Views/seleccionarusuario.php';
              });
        },
        error: function() {
          alert('Error...');
        }
      });
 }