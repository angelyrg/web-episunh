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
						<h5 class="m-b-10">Bienvenido 🤗</h5>
					</div>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="/"><i class="feather icon-home"></i></a></li>
						<li class="breadcrumb-item"><a href="#!">Welcome Page</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- [ breadcrumb ] end -->
	<!-- [ Main Content ] start -->
	<div class="row">
		<!-- [ sample-page ] start -->
		<div class="col-sm-12">
			<div class="card">

				<div class="card-header">
					<h5>Panel de adminitración de la página web - Sistemas UNH</h5>
					<div class="card-header-right">
						<div class="btn-group card-option">
							<button type="button" class="btn dropdown-toggle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="feather icon-more-horizontal"></i>
							</button>
							<ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
								<li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> Maximizar</span><span style="display:none"><i class="feather icon-minimize"></i> Restablecer</span></a></li>
								<li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> Colapsar</span><span style="display:none"><i class="feather icon-plus"></i> Expandir</span></a></li>
								<li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> Recargar</a></li>
								<li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> Quitar</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="card-body">
					<p>
						Administra el contenido de la página web de la Escuela Profesional de Ingeniería de Sistemas, de la Universidad Nacional de Huancavelica
					</p>
				</div>
			</div>
		</div>
		<!-- [ sample-page ] end -->
	</div>
	<!-- [ Main Content ] end -->
</div>

<?php
include_once("layouts/footer.php");
?>