<?php
session_start();

if (!isset($_SESSION['login'])){
	header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Intranet Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/admin-web.png" type="image/x-icon">

    <!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


</head>
<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar  ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
								
				<ul class="nav pcoded-inner-navbar ">

					<li class="nav-item pcoded-menu-caption">
						<label>Menú</label>
					</li>
					<li class="nav-item">
					    <a href="index.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home">

                        </i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>
					
                    <li class="nav-item">
					    <a href="news.php" class="nav-link ">
                            <span class="pcoded-micon"><i class="feather icon-message-square"></i>
                        </span><span class="pcoded-mtext">Noticias</span>
                        </a>
					</li>
                    <li class="nav-item">
					    <a href="document.php" class="nav-link ">
                            <span class="pcoded-micon"><i class="feather icon-file-text"></i>
                        </span><span class="pcoded-mtext">Documentos</span>
                        </a>
					</li>

                    <li class="nav-item">
					    <a href="authority.php" class="nav-link ">
                            <span class="pcoded-micon"><i class="feather icon-briefcase"></i>
                        </span><span class="pcoded-mtext">Autoridades</span>
                        </a>
					</li>


					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Dependencias</span></a>
					    <ul class="pcoded-submenu">
					        <li><a href="projects.php" >Extensión cultural y Proyección Social</a></li>
					        <li><a href="#" target="_blank">Tutoría</a></li>
					        <li><a href="#" target="_blank">Investigación</a></li>
					        <li><a href="#" target="_blank">Calidad Académica y Acreditación </a></li>
					        <li><a href="#" target="_blank">Prácticas Pre Profesionales </a></li>
					        <li><a href="#" target="_blank">Etc...</a></li>
					    </ul>
					</li>

                    <li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-align-left"></i></span><span class="pcoded-mtext">Nosotros</span></a>
					    <ul class="pcoded-submenu">
					        <li><a href="#" target="_blank">Presentación</a></li>
					        <li><a href="#" target="_blank">Misión y Visión</a></li>
					    </ul>
					</li>

                    <li class="nav-item">
					    <a href="contact.php" class="nav-link ">
                            <span class="pcoded-micon"><i class="feather icon-phone-outgoing"></i></span><span class="pcoded-mtext">Contacto</span>
                        </a>
					</li>

					
				</ul>
				
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">
		
			
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            <a href="#!" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <img src="assets/images/logo.png" alt="logo" class="img-fluid logo">
                <img src="assets/images/logo-icon.png" alt="" class=" logo-thumb">
            </a>
            <a href="#!" class="mob-toggler">
                <i class="feather icon-more-vertical"></i>
            </a>
        </div>
        <div class="collapse navbar-collapse">
            
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="dropdown drp-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="feather icon-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="assets/images/user/avatar-2.jpg" class="img-radius" alt="User-Profile-Image">
                                <span>Usuario</span>
                            </div>
                            <ul class="pro-body">
                                <li><a href="user-profile.html" class="dropdown-item"><i class="feather icon-user"></i> Perfil</a></li>
                                <li><a href="email_inbox.html" class="dropdown-item"><i class="feather icon-settings"></i> Configuración</a></li>
                                <li><a href="app/auth.logout.php" class="dropdown-item"><i class="feather icon-log-out"></i> Cerrar sesión</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        
			
	</header>
	<!-- [ Header ] end -->
	
	<!-- [ Main Content ] start -->
    <div class="pcoded-main-container">