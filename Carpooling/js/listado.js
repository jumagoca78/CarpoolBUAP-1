$(document).ready(function() {
	$("#tablaUsuarios").DataTable({
		"destroy": true,
		"processing": true,
		"ajax": {
			"url": "../Models/users.php",
			"dataSrc": function (json){
				return json.data;
			}
		},
		"order" : []
	});	

	$("#tablaConductores").DataTable({
		 "destroy": true,
		"processing": true,
		"ajax": {
			"url": "../Models/drivers.php",
			"dataSrc": function (json){
				return json.data;
			}
		},
		"order" : []
	});
	$("#tablaVehiculos").DataTable({
		"destroy": true,
		"processing": true,
		"ajax": {
			"url": "../Models/vehicles.php",
			"dataSrc": function (json){
				return json.data;
			}
		},
		"order" : []
	});
});

function verfoto(foto) {
  $("#verfotomodal").html("");
  $("#modalfoto").modal("show");
  $("#verfotomodal").append('<img src="../Fotos/'+foto+'" class="img-responsive" style="width: 100%;">');
}
function verfoto_licencia(licencia) {
  $("#verfotomodal_licen").html("");
  $("#modalfoto_licen").modal("show");
  $("#verfotomodal_licen").append('<img src="../Licencias/'+licencia+'" class="img-responsive" style="width: 100%;">');
}
function verfoto_seguro(seguro) {
  $("#verfotomodal_seguro").html("");
  $("#modalfoto_seguro").modal("show");
  $("#verfotomodal_seguro").append('<img src="../Seguros/'+seguro+'" class="img-responsive" style="width: 100%;">');
}
function verfoto_tc(tc) {
  $("#verfotomodal_tc").html("");
  $("#modalfoto_tc").modal("show");
  $("#verfotomodal_tc").append('<img src="../TarjetasCirculacion/'+tc+'" class="img-responsive" style="width: 100%;">');
}
