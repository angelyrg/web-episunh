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
						<h5 class="m-b-10">Nosotros</h5>
					</div>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a></li>
						<li class="breadcrumb-item"><a href="#!">Nosotros</a></li>
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
			<div class="card" id="about_info_card">
				<div class="card-header">
					<div class="row d-flex justify-content-between align-items-center mx-2">
						<h5>Nosotros</h5>
						<div>
							<button href="" class="btn btn-warning" id="btn_actualizar">
								<i class="feather icon-edit"></i> Actualizar
							</button>
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="row mb-4">
						<div class="col-12">
							<h5>PRESENTACIÓN:</h5>
							<div id="text_welcome"></div>
						</div>
					</div>	
					<div class="row mb-4">
						<div class="col-12 col-md-6">
							<h5>MISIÓN:</h5>
							<div id="text_mision"></div>
						</div>
						<div class="col-12 col-md-6">
							<h5>VISIÓN:</h5>
							<div id="text_vision"></div>
						</div>
					</div>
				</div>
			</div>

			<div class="card d-none" id="about_edit_card">
				<div class="card-header">
					<div class="row d-flex justify-content-between align-items-center mx-2">
						<h5>Nosotros</h5>
					</div>
				</div>
				<div class="card-body">
					<form action="" method="post" id="about_edit_form">
						<div class="row mb-4">
							<input type="hidden" name="about_id" id="about_id">
							<div class="col-12">
								<h5>PRESENTACIÓN:</h5>
								<textarea name="about_presentation" class="form-control" id="about_presentation" cols="30" rows="8" placeholder="Presentación..."></textarea>
							</div>
						</div>	
						<div class="row mb-4">
							<div class="col-12 col-md-6">
								<h5>MISIÓN:</h5>
								<textarea name="about_mision" class="form-control" id="about_mision" cols="30" rows="6" placeholder="Misión..."></textarea>
							</div>
							<div class="col-12 col-md-6">
								<h5>VISIÓN:</h5>
								<textarea name="about_vision" class="form-control" id="about_vision" cols="30" rows="6" placeholder="Visión..."></textarea>
							</div>
						</div>
						<div class="row d-flex justify-content-center">
							<button class="btn btn-secondary mx-1" id="btn_cancelar">Cancelar</button>
							<button type="submit" class="btn btn-success mx-1">
								<i class="feather icon-save"></i> Guardar
							</button>
						</div>
					</form>
				
				</div>
				
			</div>
		</div>
		<!-- [ sample-page ] end -->
	</div>
</div>


<script>
	//Carga la lista de registros al cargar la página
	$( document ).ready(function() {
		getAbout();
	});

	$("#btn_actualizar").on("click", function(e){
		e.preventDefault();
		toggleCardView("#about_info_card", "#about_edit_card");
	});
	$("#btn_cancelar").on("click", function(e){
		e.preventDefault();
		toggleCardView("#about_edit_card", "#about_info_card");
	});

	$("#about_edit_form").submit(function(e) {
		e.preventDefault();

		const formInputData = $("#about_edit_form").serialize();
		$.ajax({
			url: "app/about.update.php",
			type: 'POST',
			data: formInputData,
			success: function (resp) {
				let result = parseInt(resp);

				if (result=1){
					getAbout();
					toggleCardView("#about_edit_card", "#about_info_card");
				}else if(result = 0){
					console.log("No se pudo guardar");

				}else{
					console.log("Otro error");
					console.log(resp);
				}

			}
		});
	});

	function toggleCardView(selectorToHide, selectorToShow){
		$(selectorToHide).removeClass("d-block").addClass("d-none");
		$(selectorToShow).removeClass("d-none").addClass("d-block");
	}

	function getAbout(){
		$.ajax({
			type: 'GET',
			url: "app/about.get_last.php",
			dataType: 'json',
			success: function (resp) {
				$("#text_welcome").text(resp.welcome)
				$("#text_vision").text(resp.vision)
				$("#text_mision").text(resp.mision)

				$("#about_id").val(resp.id)
				$("#about_presentation").val(resp.welcome)
				$("#about_vision").val(resp.vision)
				$("#about_mision").val(resp.mision)

			}
		});
	}

</script>


<?php 
include_once("layouts/footer.php");
?>