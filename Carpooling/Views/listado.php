<!DOCTYPE html>
<html lang="es" xml:lang="es">
<head>
	<title>Listado de Imagnes</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="title" content="Registros de usuario" />
	<link rel="stylesheet" href="../libs/css/bootstrap.min.css">
	<link rel="stylesheet" href="../libs/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="../libs/css/listado.css">
</head>

<body>

	<div class="container">
		<div class="row-fluid">
			<h1 class="text-center mt-3">Usuarios registrados</h1>
			<div class="col-lg-12">
				<p>Consulta de registros.</p>
				<a class="btn btn-success btn-sm float-right" type="button" href="registro.php">Registrar</a><br><br>
				<div class="row">
					<div class="card-body pad table-responsive">
						<div class="row">
							<div class="col-12">
								<div class="table-responsive">
									<table id="tablaUsuarios" class="table table-striped table-hover table-bordered" width="100%">
										<thead>
											<tr>
												<th>Nombre</th>
												<th>Apellido paterno</th>
												<th>Apellido materno</th>
												<th>edad</th>
												<th>sexo</th>
												<th>Matrícula</th>
												<th>Email</th>
												<th>Tipo</th>
												<th>Telefono</th>
												<th>Direccion</th>
												<th>Registro</th>
											        <th></th>
											</tr>
										</thead>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" id="modalfoto">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">VISUALIZAR FOTO</h4>
				</div>
				<div class="modal-body">
					<div id="verfotomodal"></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"> Cerrar</button>
				</div>
			</div>
		</div>
	</div>
 
	<div class="container">
		<div class="row-fluid">
			<h1 class="text-center mt-3">Conductores registrados</h1>
			<div class="col-lg-12">
				<div class="row">
					<div class="card-body pad table-responsive">
						<div class="row">
							<div class="col-12">
								<div class="table-responsive">
									<table id="tablaConductores" class="table table-striped table-hover table-bordered" width="100%">
										<thead>
											<tr>
												<th>Indentificador</th>
												<th>Email</th>
												<th>registro</th>
												<th>Partida</th>
												<th>Destino</th>
												<th></th>
												<th></th>
												<th></th>	
											</tr>
										</thead>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    
	<div class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" id="modalfoto_licen">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">VISUALIZAR FOTO</h4>
				</div>
				<div class="modal-body">
					<div id="verfotomodal_licen"></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"> Cerrar</button>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" id="modalfoto_seguro">
		<div class="modal-dialog" role="document">	
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">VISUALIZAR FOTO</h4>
				</div>
				<div class="modal-body">
					<div id="verfotomodal_seguro"></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"> Cerrar</button>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" id="modalfoto_tc">
		<div class="modal-dialog" role="document">	
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">VISUALIZAR FOTO</h4>
				</div>
				<div class="modal-body">
					<div id="verfotomodal_tc"></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"> Cerrar</button>
				</div>
			</div>
		</div>
	</div>
	
    <div class="container">
		<div class="row-fluid">
			<h1 class="text-center mt-3">Vehiculos registrados</h1>
			<div class="col-lg-12">
				<div class="row">
					<div class="card-body pad table-responsive">
						<div class="row">
							<div class="col-12">
								<div class="table-responsive">
									<table id="tablaVehiculos" class="table table-striped table-hover table-bordered" width="100%">
										<thead>
											<tr>
												<th>Dueño</th>
												<th>Placa</th>
												<th>Modelo</th>
												<th>Marca</th>
												<th>Color</th>
												<th>Capacidad</th>
												<th>Antigüedad</th>
											</tr>
										</thead>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>     	


	<script src="../libs/js/jquery.min.js"></script>
	<script src="../libs/js/bootstrap.min.js"></script>
	<script src="../libs/js/jquery.datatables.min.js"></script>
	<script src="../libs/js/dataTables.bootstrap4.min.js"></script>
	<script src="../js/listado.js"></script>

</body>
</html>
