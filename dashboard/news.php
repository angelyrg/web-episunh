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
						<h5 class="m-b-10">Noticias</h5>
					</div>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a></li>
						<li class="breadcrumb-item"><a href="#!">Noticias listar</a></li>
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
						<h5>Noticias</h5>
						<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal_new_news" data-whatever="@getbootstrap">
							<i class="feather icon-plus-circle"></i> Nuevo
						</button>
					</div>
				</div>
				<div class="card-body table-border-style">
					<div class="table-responsive">
						<table class="table table-hover" id="news_table">
							<thead>
								<tr>
									<th>Imagen</th>
									<th>Título</th>
									<th>Link</th>
									<th>Fecha</th>
									<th>Acción</th>
								</tr>
							</thead>
							<tbody id="news_table_body"></tbody>
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
<div class="modal fade" id="modal_new_news" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Nueva noticia</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">×</span></button>
			</div>
			<form  method="POST" id="form_news_new" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="form-group">
						<label for="news_name" class="col-form-label">Título:</label>
						<input type="text" class="form-control" name="news_name" id="news_name" placeholder="Nombre de la noticia" required>
					</div>
					<div class="form-group">
						<label for="news_image" class="col-form-label">Imagen:</label>
						<input type="file" class="form-control" name="news_image" id="news_image" accept="image/*" required>
					</div>
					<div class="form-group">
						<label for="news_link" class="col-form-label">Link:</label>
						<input type="text" class="form-control" name="news_link" id="news_link" placeholder="link">
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


<script>
	$( document ).ready(function() {
		getAllData();
	});
	
	$("#form_news_new").submit(function(e) {
		e.preventDefault();    
		
		const formData = new FormData(this);

		$.ajax({
			url: "app/news.create.php",
			type: 'POST',
			data: formData,
			cache: false,
			contentType: false,
			processData: false,
			success: function (resp) {
				let result = parseInt(resp)

				if (result=1){
					$("#form_news_new")[0].reset();
					$('#modal_new_news').modal('hide');
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

	function getAllData(){
		$.ajax({
			url: "app/news.get_all.php",
			success: function (resp) {
				$("#news_table_body").html("");

				const data=JSON.parse(resp);

				for(let i in data){
					const tr = "<tr>" + 
								"<td>  <img src='../upload/images/" + data[i].picture + "' width='50px' alt=''> </td>" +
								"<td>" + data[i].name + "</td>" +
								"<td>" + data[i].link + "</td>" +
								"<td>" + data[i].created_at + "</td>" +
								"<td>" + 
									'<a href="#" class="btn btn-sm btn-warning"><i class="feather icon-edit"></i></a> ' + 
									'<a href="#" class="btn btn-sm btn-danger"><i class="feather icon-trash-2"></i></a>'+
								"</td>" + 
						"</tr>";
					$("#news_table_body").append(tr);
				}
			}
		});
	}

</script>



<?php 
include_once("layouts/footer.php");
?>
