<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/autoridades2.css">
    <link rel="stylesheet" href="../assets/css/general.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />   
    <title>Autoridades</title>
</head>
<body class="ctn-principal" id="ctn_body">
    <div class="panel-menu-items" id="panel_menu_items">
        <navbar class="nav-menu">
            <ul class="ul-menu">
                <li class="menu-option">
                    <a href="../" class="menu-option-span">Inicio</a> 
                </li>
                <li class="menu-option">
                    <a href="./documentos.php" class="menu-option-span">Documentos</a> 
                </li>
                <li class="menu-option">
                    <span class="menu-option-span"id="menu_option">
                        <img src="../assets/svg/expand_less_white_24dp.svg"> 
                        Areas
                    </span> 
                    <ul class="menu-ctn-items" id="items_menu">
                        <li class="menu-option-n1">
                            <a href="./bienestar.html">Bienestar</a>
                        </li>
                        <li class="menu-option-n1" >
                            <a href="#">Calidad</a>
    
                        </li>
                        <li class="menu-option-n1">
                            <a href="./proyectos.html">Proyeccion Social</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-option">
                    <span class="menu-option-span" id="menu_option1">
                        <img src="../assets/svg/expand_more_white_24dp.svg">  
                        <a class="menu-option-span-solid">Nosotros</a>
                    </span>  
                    <ul class="menu-ctn-items" id="items_menu1">
                        <li class="menu-option-n1">
                            <a href="./presentacion.html">Presentacion</a>
                        </li>
                        <li class="menu-option-n1">
                            <a href="./visionymision.html">Vision y Mision</a>
                        </li>
                        <li class="menu-option-n1 menu-option-n1-solid">
                            <a href="#">Autoridades</a>
                        </li>
                        <li class="menu-option-n1">
                            <a href="./historia.html">Historia</a>
                        </li>
    
                    </ul>
                </li>
                <li class="menu-option">
                    <a href="./contacto.html" class="menu-option-span">Contacto</a> 
                    
                </li>
                
            </ul>
        </navbar>
    </div>
    <header id="body">
        <div class="ctn-header-logo">
            <div class="ctn-header-logo-item-1" id="aparece">
                <span class="span-epis">
                    <span class="span-unh"></span>
                </span>
            </div>
        </div>
        <nav>
            <ul class="content_hello">
                <li class="content_hello-titulo">
                    <a href="../">
                        <span class="style-linkAll">Inicio</span> 
                    </a>
                </li>
            </ul>
            <ul class="content_hello">
                <li class="content_hello-titulo">
                    <a href="./documentos.php">
                        <span class="style-linkAll">Documentos</span>  
                    </a>
                </li>
            </ul>
            <ul class="content_hello">
                <li class="content_hello-titulo">
                    <span id="content">Areas</span> 
                </li>
                <ul class="content_hello-items" id="show" >
                    <a href="./bienestar.html">
                        <li class="content_hello-items1">
                            Bienestar
                        </li>
                    </a>
                    <a href="#">
                        <li class="content_hello-items1">
                            Calidad
                        </li>
                    </a>
                    <a href="./proyectos.html">
                        <li class="content_hello-items1">
                            Proyeccion<br>Social
                        </li>
                    </a>
                </ul>
            </ul>
            <ul class="content_hello">
                <li class="content_hello-titulo content_hello-titulo2">
                    <span id="content1" class="style-linkAll-solid">Nosotros</span>
                </li>
                <ul class="content_hello-items" id="show1">
                    <a href="./presentacion.html">
                        <li class="content_hello-items1">
                            Presentación
                        </li>
                    </a>
                    <a href="./visionymision.html">
                        <li class="content_hello-items1">
                            Visión y Misión
                        </li>
                    </a>
                    <a href="./autoridades.html">
                        <li class="content_hello-items1 content_hello-items1-solid">
                            Autoridades
                        </li>
                    </a>
                    <a href="./historia.html">
                        <li class="content_hello-items1">
                            Historia
                        </li>
                    </a>
                </ul>
            </ul>
            <ul class="content_hello">
                <a href="./contacto.html">
                    <li class="centreado">
                        <button class="button">Contacto</button>
                    </li>
                </a>
                
            </ul>
        </nav>
        <div class="content_menu" id="content_menu">
            <span class="menu" id="menu">
            </span>
            <span class="close" id="close">
            </span>
        </div>
    </header>
    <main class="ctn-main" id="movi" style="margin-top:140px">
        <div class="container text-white" >
            <div class="row py-4">
                <div class="col text-center ">
                    <h1>Nuestras autoridades</h1>
                </div>
            </div>
            <div class="row justify-content-center align-items-center g-2" id="autoridades_lista"></div>
        </div>
        <!-- TODO: Rediseñar vista de autoridades -->
        <!-- <div class="img border border-solid" id="api_img"></div> -->
        <!-- Footer -->
        <?php include("./../includes/footer.html"); ?>
    </main>
</body>
<script src="../assets/js/script.js"></script>
<script src="../assets/js/api/Api_autoridades.js"></script>
<!-- <script src="../assets/js/api/Api_Footer.js"></script> -->
</html>