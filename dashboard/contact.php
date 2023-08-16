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
						<h5 class="m-b-10">Contactos</h5>
					</div>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a></li>
						<li class="breadcrumb-item"><a href="#!">Contactos listar</a></li>
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
						<h5>Contactos</h5>
						<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal_create_contact" data-whatever="@getbootstrap">
							<i class="feather icon-plus-circle"></i> Nuevo
						</button>
					</div>
				</div>
				<div class="card-body table-border-style">
					<div class="table-responsive">
						<table class="table table-hover" id="authority_table">
							<thead>
								<tr>
									<th>Ubicación</th>
									<th>Teléfono / N° celular</th>
									<th>Correo</th>
									<th>Fecha</th>
									<th>Acción</th>
								</tr>
							</thead>
							<tbody id="contact_table_body"></tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- [ sample-page ] end -->
	</div>
</div>

<!-- MODAL: NUEVO CONTACTO -->
<div class="modal fade" id="modal_create_contact" tabindex="-1" role="dialog" aria-labelledby="createModal" style="display: none;" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Nuevo Contacto</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">x</span></button>
			</div>
			<form  method="POST" id="form_create_contact" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="form-group">
                    <div class="form-group">
						<label for="news_image" class="col-form-label">Nueva ubicación</label>
						<input type="text" class="form-control" name="address_name" id="news_name" placeholder="Nombre la nueva ubicación" required>
					</div>
						<label for="news_name" class="col-form-label"> Teléfono / N° Celular</label>
						<input type="text" class="form-control" name="phone_name" id="news_name" maxlength="12" placeholder="Escriba el Teléfono  / N° Celular" required>
					</div>
					<div class="form-group">
						<label for="news_image" class="col-form-label">Correo</label>
						<input type="text" class="form-control" name="email_name" id="news_name" placeholder="Escriba el Correo" required>
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


<!-- MODAL: ELIMINAR CONTACTO -->
<div class="modal fade" id="modal_delete_contact" tabindex="-1" role="dialog" aria-labelledby="deleteModal" style="display: none;" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Eliminar contacto</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">×</span></button>
			</div>
			<form method="POST" id="form_delete_contact" >
				<div class="modal-body">
					<div class="form-group">
						<label for="">¿Estás seguro de eliminar <span id="contact_phone-delete" class="text-info"></span>, <span id="contact_email-delete" class="text-info"></span>?</label>
						<input type="hidden" class="form-control" name="contact_id-delete" id="contact_id-delete" required>
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
	$("#form_create_contact").submit(function(e) {
		e.preventDefault();    
		
		const formData = new FormData(this);

		$.ajax({
			url: "app/contact.create.php",
			type: 'POST',
			data: formData,
			cache: false,
			contentType: false,
			processData: false,
			success: function (resp) {
				let result = parseInt(resp)

				if (result=1){
					$("#form_create_contact")[0].reset();
					$('#modal_create_contact').modal('hide');
					getAllData();

				}else if(result = 0){
					console.log("No se pudo guardar");

				}else{
					console.log("Otro error");
					console.log(resp);
				}

			}
		});
	});

	//Eliminar registro (DELETE)
	$("#form_delete_contact").submit(function(e) {
		e.preventDefault();

		$.ajax({
			url: "app/contact.disable.php",
			type: 'POST',
			data: $("#form_delete_contact").serialize(),
			success: function (resp) {
				console.log(resp);
				let result = parseInt(resp)
				if (result=1){
					$('#modal_delete_contact').modal('hide');
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
			url: "app/contact.get_all.php",
			success: function (resp) {
				$("#contact_table_body").html("");

				const data=JSON.parse(resp);

				for(let i in data){
					const tr = "<tr>" + 
								//"<td>  <img src='../upload/images/" + data[i].picture + "' width='50px' alt=''> </td>" +
								"<td>" + data[i].address + "</td>" +
								"<td>" + data[i].phone + "</td>" +
								"<td>" + data[i].email + "</td>" +
								"<td>" + data[i].created_at + "</td>" +
								"<td>" + 
									'<button type="button" class="btn btn-sm btn-danger" onclick="updateDeleteModal(' + data[i].id + ', \'' + data[i].phone + '\', \'' + data[i].email + '\')" data-toggle="modal" data-target="#modal_delete_contact" data-whatever="@getbootstrap"><i class="feather icon-trash-2"></i></button>'
								"</td>" + 
						"</tr>";
					$("#contact_table_body").append(tr);
				}
			}
		});
	}

	//Actualiza la info del registro en el modal para eliminar
	 function updateDeleteModal(id, phone, email){
	 	$("#contact_id-delete").val(id);
	 	$("#contact_phone-delete").html(phone);
		 $("#contact_email-delete").html(email);
	 }

</script>


<?php 
include_once("layouts/footer.php");
?>