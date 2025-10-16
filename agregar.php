	<?php include "./header.php"; ?>

	<div class="container">
		<div class="row">
			<div class="col">
				<div class="card mt-4">
					<div class="card-body">
						<a href="index.php" class="btn btn-outline-info">
							<i class="fa-solid fa-angles-left"></i> Regresar
						</a>
						<h2>Agregar nuevo registro</h2>
						<form action="./procesos/insertar.php" method="post">
							<label for="mascota">Nombre mascota</label>
							<input type="text" class="form-control" id="mascota" name="mascota" required>

							<label for="edad">Edad</label>
							<input type="text" class="form-control" id="edad" name="edad">

							<label for="especie">Especie</label>
							<input type="text" class="form-control" id="especie" name="especie" required>

							<label for="raza">Raza</label>
							<input type="text" name="raza" id="raza" class="form-control" required>

							<label for="nombreDueño">Nombre del dueño</label>
							<input type="text" name="nombreDueño" id="nombreDueño" class="form-control" required>
							
							<button class="btn btn-primary mt-3">
								<i class="fa-solid fa-floppy-disk"></i> Agregar
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include "./scripts.php"; ?>