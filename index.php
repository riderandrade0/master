<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">RIDER ANDRADE HEREDIA</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#form_modal"><span class="glyphicon glyphicon-plus"></span> Agregar Empleado</button>
		<a href="export.php" class="btn btn-success pull-right"><span class="glyphicon glyphicon-export"></span> ELIMINAR</a>
		<br /><br />
		<table class="table table-bordered">
			<thead class="alert-success">
				<tr>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Dirección</th>
					<th>Edad</th>
					<th>Trabajo</th>
					<th>Profecion</th>
				</tr>
			</thead>
			<tbody style="background-color:#fff;">
				<?php
					require 'conn.php';
					
					$query = $conn->query("SELECT * FROM `employee` ORDER BY `lastname` ASC");
					while($fetch = $query->fetch_array()){
				?>
				<tr>
					<td><?php echo $fetch['firstname']?></td>
					<td><?php echo $fetch['lastname']?></td>
					<td><?php echo $fetch['address']?></td>
					<td><?php echo $fetch['age']?></td>
					<td><?php echo $fetch['job']?></td>
					<td><?php echo $fetch['prof']?></td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
	</div>
	
	
	<div class="modal fade" id="form_modal" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<form method="POST" action="save_query.php">
				<div class="modal-content">
					<div class="modal-body">
						<div class="col-md-3"></div>
						<div class="col-md-8">
							<div class="form-group">
								<label>Nombre</label>
								<input class="form-control" type="text" name="firstname"/>
							</div>
							<div class="form-group">
								<label>Apellido</label>
								<input class="form-control" type="text" name="lastname"/>
							</div>
							<div class="form-group">
								<label>Dirección</label>
								<input class="form-control" type="text" name="address"/>
							</div>
							<div class="form-group">
								<label>Edad</label>
								<input class="form-control" type="number" name="age"/>
							</div>
							<div class="form-group">
								<label>Trabajo</label>
								<input class="form-control" type="text" name="job"/>
							</div>
							<div class="form-group">
								<label>Profecion</label>
								<input class="form-control" type="text" name="prof"/>
							</div>
						</div>
					</div>
					<div style="clear:both;"></div>
					<div class="modal-footer">
						<button type="button"  class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cerrar</button>
						<button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</html>