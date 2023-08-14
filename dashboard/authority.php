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
						<h5 class="m-b-10">Autoridades</h5>
					</div>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a></li>
						<li class="breadcrumb-item"><a href="#!">Autoridades listar</a></li>
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
						<h5>Autoridades</h5>
						<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal_create_authority" data-whatever="@getbootstrap">
							<i class="feather icon-plus-circle"></i> Nuevo
						</button>
					</div>
				</div>
				<div class="card-body table-border-style">
					<div class="table-responsive">
						<table class="table table-hover" id="authority_table">
							<thead>
								<tr>
									<th>Nombres y apellidos</th>
									<th>Foto</th>
									<th>Cargo</th>
									<th>Fecha</th>
									<th>Acción</th>
								</tr>
							</thead>
							<tbody id="authority_table_body"></tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- [ sample-page ] end -->
	</div>
	<!-- [ Main Content ] end -->
</div>



<!-- MODAL: NUEVA NOTICIA -->
<div class="modal fade" id="modal_create_authority" tabindex="-1" role="dialog" aria-labelledby="createModal" style="display: none;" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Nueva autoridad</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">×</span></button>
			</div>
			<form  method="POST" id="form_create_authority" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="form-group">
						<label for="authority_name" class="col-form-label">Nombres:</label>
						<input type="text" class="form-control" name="authority_name" id="authority_name" placeholder="Nombres" required>
					</div>
					<div class="form-group">
						<label for="authority_lastname" class="col-form-label">Apellidos:</label>
						<input type="text" class="form-control" name="authority_lastname" id="authority_lastname" placeholder="Apellidos" required>
					</div>
					<div class="form-group">
						<label for="authority_degree" class="col-form-label">Grado:</label>
						<input type="text" class="form-control" name="authority_degree" id="authority_degree" placeholder="Mg." required>
					</div>
					<div class="form-group">
						<label for="authority_photo" class="col-form-label">Foto:</label>
						<input type="file" class="form-control" name="authority_photo" id="authority_photo" accept="image/*" required>
					</div>

					<div class="form-group">
						<label for="authority_position" class="col-form-label">Cargo:</label>
						<input type="text" class="form-control" name="authority_position" id="authority_position" placeholder="Director de la Escuela Profesional de Ingeniería de Sistemas" required>
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


<!-- MODAL: ELIMINAR AUTORIDAD -->
<div class="modal fade" id="modal_delete_authority" tabindex="-1" role="dialog" aria-labelledby="deleteModal" style="display: none;" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Eliminar autoridad</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">×</span></button>
			</div>
			<form method="POST" id="form_delete_authority" >
				<div class="modal-body">
					<div class="form-group">
						<label for="">¿Estás seguro de eliminar la autoridad <span id="authority_name-delete" class="text-info"></span>?</label>
						<input type="hidden" class="form-control" name="authority_id-delete" id="authority_id-delete" required>
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



<script>
	//Carga la lista de registros al cargar la página
	$( document ).ready(function() {
		getAllData();
	});
	
	//Guardar registro de nuevo anuncio (CREATE)
	$("#form_create_authority").submit(function(e) {
		e.preventDefault();
		
		const formData = new FormData(this);

		$.ajax({
			url: "app/authority.create.php",
			type: 'POST',
			data: formData,
			cache: false,
			contentType: false,
			processData: false,
			success: function (resp) {
				console.log(resp);
				let result = parseInt(resp)

				if (result = 1){
					$("#form_create_authority")[0].reset();
					$('#modal_create_authority').modal('hide');
					getAllData();

				}else if(result = 0){
					console.log("No se pudo guardar el registro");

				}else{
					console.log("Ocurrió otro error");
					console.log(resp);
				}

			}
		});
	});

	//Eliminar registro (DELETE)
	$("#form_delete_authority").submit(function(e) {
		e.preventDefault();

		$.ajax({
			url: "app/authority.disable.php",
			type: 'POST',
			data: $("#form_delete_authority").serialize(),

			success: function (resp) {
				console.log(resp);

				let result = parseInt(resp)
				if (result=1){
					$('#modal_delete_authority').modal('hide');
					getAllData();
				}else if(result = 0){
					console.log("No se pudo eliminar la noticia");
				}else{
					console.log(resp);
				}
			}
		});
	});

                                                 
	// ====FUNCIONES==== //

	// Obtener todos los registros de los anuncios (READ)
	function getAllData(){
		$.ajax({
			url: "app/authority.get_all.php",
			success: function (resp) {
				$("#authority_table_body").html("");

				const data=JSON.parse(resp);

				for(let i in data){
					const tr = "<tr>" + 
								"<td>" + data[i].degree + " " + data[i].name + " " + data[i].lastname +  "</td>" +
								"<td>  <img src='../upload/images/" + data[i].photo + "' width='50px' alt=''> </td>" +
								"<td>" + data[i].position + "</td>" +
								"<td>" + data[i].created_at + "</td>" +
								"<td>" + 
									'<button type="button" class="btn btn-sm btn-danger" onclick="updateDeleteModal(' + data[i].id + ', \'' + data[i].name + '\')" data-toggle="modal" data-target="#modal_delete_authority" data-whatever="@getbootstrap"><i class="feather icon-trash-2"></i></button>'
								"</td>" + 
						"</tr>";
					$("#authority_table_body").append(tr);
				}
			}
		});
	}

	//Actualiza la info del registro en el modal para eliminar
	function updateDeleteModal(id, new_name){
		$("#authority_id-delete").val(id);
		$("#authority_name-delete").html(new_name);
	}

</script>


<?php 
include_once("layouts/footer.php");
?>
