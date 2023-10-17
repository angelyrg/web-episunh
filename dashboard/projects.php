<?php
include_once("layouts/head.php");
?>

<div class="pcoded-content">
	<!-- [ breadcrumb ] start -->
	<div class="page-header">
		<div class="page-block">
			<div class="row align-items-center">
				<div class="col-md-12">
					<div class="page-header-title">
						<h5 class="m-b-10">Proyectos</h5>
					</div>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a></li>
						<li class="breadcrumb-item"><a href="#!">Proyectos listar</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- [ breadcrumb ] end -->
	<!-- [ Main Content ] start -->
	<div class="row">
		<!-- [ sample-page ] start -->
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="row d-flex justify-content-between align-items-center mx-2">
						<h5>Proyectos</h5>
						<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal_create_project" data-whatever="@getbootstrap">
							<i class="feather icon-plus-circle"></i> Nuevo
						</button>
					</div>
				</div>
				<div class="card-body table-border-style">
					<div class="table-responsive">
						<table class="table table-hover" id="projects_table">
							<thead>
								<tr>
									<th>Proyecto</th>
									<th>Grupo</th>
									<th>Descripción</th>
									<th>Fecha</th>
									<th>Acción</th>
								</tr>
							</thead>
							<tbody id="projects_table_body"></tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- [ sample-page ] end -->
	</div>
	<!-- [ Main Content ] end -->
</div>



<!-- MODAL: NUEVO PROYECTO -->
<div class="modal fade" id="modal_create_project" tabindex="-1" role="dialog" aria-labelledby="createModal" style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Nuevo proyecto</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">×</span></button>
			</div>
			<form method="POST" id="form_create_project" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="form-group">
						<label for="project_name" class="col-form-label">Nombre del proyecto:</label>
						<input type="text" class="form-control" name="project_name" id="project_name" placeholder="Nombre del proyecto" required>
					</div>
					<div class="form-group">
						<label for="group_name" class="col-form-label">Nombre del grupo:</label>
						<input type="text" class="form-control" name="group_name" id="group_name" placeholder="Nombre del grupo" required>
					</div>
					<div class="form-group">
						<label for="descripcion" class="col-form-label">Descripción:</label>
						<textarea name="descripcion" id="descripcion" cols="30" rows="6" class="form-control" required></textarea>
					</div>

					<div class="row">
						<div class="col-6">
							<div class="form-group">
								<label for="inform_file" class="col-form-label">Informe del grupo (.pdf): <span class="text-danger">*</span></label>
								<input type="file" name="inform_file" id="inform_file" class="form-control" accept="application/pdf" required>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="resolution_file" class="col-form-label">Resolución de aprobación (.pdf): <span class="text-danger">*</span></label>
								<input type="file" name="resolution_file" id="resolution_file" class="form-control" accept="application/pdf" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							<div class="form-group">
								<label for="cover_picture" class="col-form-label">Carátula: <span class="text-danger">*</span></label>
								<input type="file" name="cover_picture" id="cover_picture" class="form-control" accept="image/png, image/gif, image/jpeg" required>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="fotos" class="col-form-label">Fotos (4):</label>
								<input type="file" name="fotos[]" id="fotos" class="form-control" multiple accept="image/png, image/jpg, image/jpeg">
							</div>
							<div class="upload__img-wrap"></div>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn  btn-secondary" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn  btn-primary">Guardar</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- MODAL: EDITAR PROYECTO -->
<div class="modal fade" id="modal_edit_project" tabindex="-1" role="dialog" aria-labelledby="editModal" style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Nuevo proyecto</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">×</span></button>
			</div>
			<form method="POST" id="form_edit_project" enctype="multipart/form-data">
				<div class="modal-body">
					<input type="hidden" name="project_id_edit" id="project_id_edit" required>
					<div class="form-group">
						<label for="project_name_edit" class="col-form-label">Nombre del proyecto:</label>
						<input type="text" class="form-control" name="project_name_edit" id="project_name_edit" placeholder="Nombre del proyecto" required>
					</div>
					<div class="form-group">
						<label for="group_name_edit" class="col-form-label">Nombre del grupo:</label>
						<input type="text" class="form-control" name="group_name_edit" id="group_name_edit" placeholder="Nombre del grupo" required>
					</div>
					<div class="form-group">
						<label for="descripcion_edit" class="col-form-label">Descripción:</label>
						<textarea name="descripcion_edit" id="descripcion_edit" cols="30" rows="6" class="form-control" required></textarea>
					</div>

					<div class="row">
						<div class="col-6">
							<div class="form-group">
								<label for="inform_file_edit" class="col-form-label">Informe del grupo (.pdf): </label>
								<input type="file" name="inform_file_edit" id="inform_file_edit" class="form-control" accept="application/pdf">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="resolution_file_edit" class="col-form-label">Resolución de aprobación (.pdf): </label>
								<input type="file" name="resolution_file_edit" id="resolution_file_edit" class="form-control" accept="application/pdf">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							<div class="form-group">
								<label for="cover_picture_edit" class="col-form-label">Carátula: </label>
								<input type="file" name="cover_picture_edit" id="cover_picture_edit" class="form-control" accept="image/png, image/gif, image/jpeg">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="fotos_edit" class="col-form-label">Fotos (4):</label>
								<input type="file" name="fotos_edit[]" id="fotos_edit" class="form-control" multiple accept="image/png, image/jpg, image/jpeg">
							</div>
							<div class="upload__img-wrap"></div>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-primary">Guardar</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- MODAL: ELIMINAR PROYECTO--> 
<div class="modal fade" id="modal_delete_project" tabindex="-1" role="dialog" aria-labelledby="deleteModal" style="display: none;" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Eliminar autoridad</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">×</span></button>
			</div>
			<form method="POST" id="form_delete_project">
				<div class="modal-body">
					<div class="form-group">
						<label for="">¿Estás seguro de eliminar el proyecto <span id="project_name-delete" class="text-info"></span>?</label>
						<input type="hidden" class="form-control" name="project_id-delete" id="project_id-delete" required>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-danger">Eliminar</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- MODAL: VER PROYECTO -->
<div class="modal fade" id="modal_show_project" tabindex="-1" role="dialog" aria-labelledby="createModal" style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Ver proyecto</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">×</span></button>
			</div>
			<div class="modal-body">
				<div class="rounded-4 border p-1">
					<h5 id="project_name_show"></h5>
				</div>
				<br>
				<b id="project_groupname_show"></b>
				<br><br>
				<a href="" class="btn btn-sm btn-outline-secondary" target="_blank" id="link_show_informe" rel="noopener noreferrer">Ver Informe</a>
				<a href="" class="btn btn-sm btn-outline-secondary" target="_blank" id="link_show_resolucion" rel="noopener noreferrer">Ver Resolución</a>
				<br>

				<label for=""><b>Descripción:</b></label>
				<p id="project_description_show">description</p>

				<br>
				<label for="">Carátula</label>
				<div class="row">
					<div class="col-12 col-lg-3 col-md-6">
						<img class="img-fluid" id="project_cover_show" src="" alt="">
					</div>
				</div>

				<br>
				<label for="">Fotos:</label>
				<div class="row mb-3">

					<div class="col-12 col-lg-3 col-md-6">
						<img class="img-fluid" id="project_photo1_show" src="" alt="">
					</div>
					<div class="col-12 col-lg-3 col-md-6">
						<img class="img-fluid" id="project_photo2_show" src="" alt="">
					</div>
					<div class="col-12 col-lg-3 col-md-6">
						<img class="img-fluid" id="project_photo3_show" src="" alt="">
					</div>
					<div class="col-12 col-lg-3 col-md-6">
						<img class="img-fluid" id="project_photo4_show" src="" alt="">
					</div>
				</div>
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn  btn-secondary" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>

<script>
	//Carga la lista de registros al cargar la página
	$(document).ready(function() {
		getAllData();
	});

	//Guardar registro de nuevo proyecto (CREATE)
	$("#form_create_project").submit(function(e) {
		e.preventDefault();

		const formData = new FormData(this);

		$.ajax({
			url: "app/projects.create.php",
			type: 'POST',
			data: formData,
			// cache: false,
			contentType: false,
			processData: false,
			success: function(resp) {
				console.log(resp);

				let result = parseInt(resp)
				if (result = 1) {
					$("#form_create_project")[0].reset();
					$('#modal_create_project').modal('hide');
					getAllData();

				} else if (result = 0) {
					console.log("No se pudo guardar el registro");

				} else {
					console.error("Error :(". resp);
				}

			}
		});
	});

	//Actualizar proyecto (UPDATE)
	$("#form_edit_project").submit(function(e) {
		e.preventDefault();

		const formData = new FormData(this);

		$.ajax({
			url: "app/projects.update.php",
			type: 'POST',
			data: formData,
			// cache: false,
			contentType: false,
			processData: false,
			success: function(resp) {
				console.log(resp);

				let result = parseInt(resp)
				if (result = 1) {
					$("#form_edit_project")[0].reset();
					$('#modal_edit_project').modal('hide');
					getAllData();

				} else if (result = 0) {
					console.log("No se pudo actualizar el registro");

				} else {
					console.error("Error :(". resp);
				}

			}
		});
	});

	//Eliminar registro (DELETE)
	$("#modal_delete_project").submit(function(e) {
		e.preventDefault();

		$.ajax({
			url: "app/projects.disable.php",
			type: 'POST',
			data: $("#form_delete_project").serialize(),

			success: function(resp) {
				console.log(resp);

				let result = parseInt(resp)
				if (result = 1) {
					$('#modal_delete_project').modal('hide');
					getAllData();
				} else if (result = 0) {
					console.log("No se pudo eliminar la noticia");
				} else {
					console.log(resp);
				}
			}
		});
	});


	// ====FUNCIONES==== //

	// Obtener todos los registros de los anuncios (READ)
	function getAllData() {
		$.ajax({
			url: "app/projects.get_all.php",
			success: function(resp) {
				$("#projects_table_body").html("");

				const data = JSON.parse(resp);

				for (let i in data) {
					const tr = "<tr>" +
						"<td>" + data[i].project_name.substring(0, 25)  + "..." + "</td>" +
						"<td>" + data[i].group_name.substring(0, 40)  + "..." + "</td>" +
						"<td>" + data[i].description.substring(0, 25)  + "..." + "</td>" +
						"<td>" + data[i].created_at + "</td>" +
						"<td>" +
						'<button type="button" class="btn btn-sm btn-primary mx-1" onclick="updateShowModal(' + data[i].id + ')" ><i class="feather icon-eye"></i></button>' +
						'<button type="button" class="btn btn-sm btn-warning mx-1" onclick="updateEditModal(' + data[i].id + ')" ><i class="feather icon-edit"></i></button>' +
						'<button type="button" class="btn btn-sm btn-danger mx-1" onclick="updateDeleteModal(' + data[i].id + ', \'' + data[i].project_name + '\')" data-toggle="modal" data-target="#modal_delete_project" data-whatever="@getbootstrap"><i class="feather icon-trash-2"></i></button>'
					"</td>" +
					"</tr>";
					$("#projects_table_body").append(tr);
				}
			}
		});
	}

	//(show)Actualiza info para previsualizar información del proyecto
	function updateShowModal(id){
		$.ajax({
			method: "POST",
			url: "app/projects.get_one.php",
			data: {project_id: id},
			dataType: 'json',
			success: function(resp) {
				$("#project_name_show").text(resp.project_name);
				$("#project_groupname_show").text(resp.group_name);
				$("#project_description_show").text(resp.description);				
				$("#project_description_show").text(resp.description);

				$("#link_show_resolucion").attr("href", "../upload/docs/" + resp.resolution_file);
				$("#link_show_informe").attr("href", "../upload/docs/" + resp.inform_file);
				
				$("#project_photo1_show").attr("src", "../upload/images/"+resp.picture1);
				$("#project_photo2_show").attr("src", "../upload/images/"+resp.picture2);
				$("#project_photo3_show").attr("src", "../upload/images/"+resp.picture3);
				$("#project_photo4_show").attr("src", "../upload/images/"+resp.picture4);
				$("#project_cover_show").attr("src", "../upload/images/"+resp.cover_picture);

				$('#modal_show_project').modal('show'); 

			}
		});
	}
	
	//(edit)Actualiza modal para editar
	function updateEditModal(id){
		$.ajax({
			method: "POST",
			url: "app/projects.get_one.php",
			data: {project_id: id},
			dataType: 'json',
			success: function(resp) {
				$("#project_id_edit").val(resp.id);
				$("#project_name_edit").val(resp.project_name);
				$("#group_name_edit").val(resp.group_name);
				$("#descripcion_edit").text(resp.description);
				$('#modal_edit_project').modal('show');
			}
		});
	}

	//Actualiza la info del registro en el modal para eliminar
	function updateDeleteModal(id, project_name) {
		$("#project_id-delete").val(id);
		$("#project_name-delete").html(project_name);
	}
</script>


<?php
include_once("layouts/footer.php");
?>