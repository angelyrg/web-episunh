<!-- Barra de Navegación -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark menu_navbar">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="../assets/img/episunh_logo.png" class="img-fluid" width="35px" alt="Logo sistemas unh" >
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <span class="close-menu-button" onclick="closeNav()">&#10006;</span>
            <ul class="navbar-nav text-center d-flex justify-content-center h-100">
                <li class="nav-item">
                    <a href="#"  class="nav-link <?php echo ($current_page === 'inicio') ? 'active' : ''; ?>">Inicio</a>
                </li>
                <li class="nav-item">
                    <a href="#"  class="nav-link <?php echo ($current_page === 'documentos') ? 'active' : ''; ?>">Documentos</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php echo ($current_page === 'bienestar' || $current_page === 'calidad') ? 'active' : ''; ?>" href="#" id="navbarAreasDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Areas
                    </a>
                    <ul class="dropdown-menu mt-0 text-center" aria-labelledby="navbarAreasDropdown">
                        <li><a class="dropdown-item" href="#">Bienestar</a></li>
                        <li><a class="dropdown-item" href="#">Calidad</a></li>
                    </ul>
                </li>
                

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php echo ($current_page === 'autoridades') ? 'active' : ''; ?>" href="#" id="navbarNosotrosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Nosotros
                    </a>
                    <ul class="dropdown-menu mt-0 text-center" aria-labelledby="navbarNosotrosDropdown">
                        <li><a class="dropdown-item" href="#">Presentación</a></li>
                        <li><a class="dropdown-item" href="#">Visión y Misión</a></li>
                        <li><a class="dropdown-item <?php echo ($current_page === 'autoridades') ? 'active' : ''; ?>" href="#">Autoridades</a></li>
                        <li><a class="dropdown-item" href="#">Historia</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#"  class="nav-link <?php echo ($current_page === 'contacto') ? 'active' : ''; ?>">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>