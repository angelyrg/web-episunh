<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="../assets/css/documentos.css">
    <link rel="stylesheet" href="../assets/css/general.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />   
    
    <title>Documentos</title>
</head>
<body class="ctn-principal" id="ctn_body">
    <div class="panel-menu-items" id="panel_menu_items">
        <navbar class="nav-menu">
            <ul class="ul-menu">
                <li class="menu-option">
                    <a href="../" class="menu-option-span">Inicio</a> 
                </li>
                <li class="menu-option">
                    <a href="#" class="menu-option-span  menu-option-span-solid "> Documentos</a> 
                </li>
                <li class="menu-option">
                    <span class="menu-option-span"id="menu_option">
                        <img src="../assets/svg/expand_less_white_24dp.svg"> Areas
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
                        <img src="../assets/svg/expand_more_white_24dp.svg">  Nosotros
                    </span> 
                    <ul class="menu-ctn-items" id="items_menu1">
                        <li class="menu-option-n1">
                            <a href="./presentacion.html">Presentacion</a>
                        </li>
                        <li class="menu-option-n1">
                            <a href="./visionymision.html">Vision y Mision</a>
                        </li>
                        <li class="menu-option-n1">
                            <a href="./autoridades.php">Autoridades</a>
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
    <header id="body" class="header">
        <div class="ctn-header-logo">
            <div class="ctn-header-logo-item-1" id="aparece">
                
            </div>
        </div>
        <nav>
            <ul class="content_hello">
                <li class="content_hello-titulo">
                    <a onclick="documentos('../')">
                        <span class="style-linkAll">Inicio</span> 
                    </a>
                </li>
            </ul>
            <ul class="content_hello">
                <li class="content_hello-titulo  animate__animated animate__flash">
                    <a>
                        <span class="style-linkAll-solid">Documentos</span>
                    </a>
                </li>
            </ul>
            <ul class="content_hello">
                <li class="content_hello-titulo">
                    <span id="content">Areas</span>
                </li>
                <ul class="content_hello-items" id="show">
                    <a onclick="documentos('./bienestar.html')">
                        <li class="content_hello-items1">
                            Bienestar
                        </li>
                    </a>
                    <a onclick="documentos('./calidad.html')">
                        <li class="content_hello-items1">
                            Calidad
                        </li>
                    </a>
                    <a onclick="documentos('./proyectos.html')">
                        <li class="content_hello-items1">
                            Proyeccion<br>Social
                        </li>
                    </a>
                </ul>
            </ul>
            <ul class="content_hello">
                <li class="content_hello-titulo content_hello-titulo2">
                    <span id="content1">Nosotros</span>
                </li>
                <ul class="content_hello-items" id="show1">
                    <a onclick="documentos('./presentacion.html')">
                        <li class="content_hello-items1">
                            Presentación
                        </li>
                    </a>
                    <a onclick="documentos('./visionymision.html')">
                        <li class="content_hello-items1">
                            Visión y Misión
                        </li>
                    </a>
                    <a onclick="documentos('./autoridades.php')">
                        <li class="content_hello-items1">
                            Autoridades
                        </li>
                    </a>
                    <a onclick="documentos('./historia.html')">
                        <li class="content_hello-items1">
                            Historia
                        </li>
                    </a>
                </ul>
            </ul>
            <ul class="content_hello">
                <a onclick="documentos('./contacto.html')">
                    <li class="centreado">
                        <button class="button">Contacto</button>
                    </li>
                </a>
            </ul>
        </nav>
        <div class="content_menu" id="content_menu">
            <span class="menu" id="menu"></span>
            <span class="close" id="close"></span>
        </div>
    </header>
    <main class="ctn-main" id="movi">

        <section class="ctn-main-box">
            <div class="ctn-main-box-ctn" >
                <div class="ctn-main-box-ctn-part1">
                    <span class="text_title">Documentos de Gestión</span>
                    <span class="text_subtitle">Nuestros documentos de Gestión</span>
                </div>
                <div class="ctn-main-box-ctn-part2">
                    
                    <div class="items">
                        <div class="items-image" style="background:url('http://sistemas.unh.edu.pe/images/icon_1.png');background-position: center;">
                        </div>
                        <div class="items-text">
                            <div class="items-text-a">
                                <span class="items-text-a-title">statuto</span>
                                <span class="items-text-a-subtitle">statuto universitario</span>
                            </div>
                            <a href="/dd" target="_blank">
                                <div class="items-text-b">
                                    <span>→</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="items">
                        <div class="items-image" style="background:url('http://sistemas.unh.edu.pe/images/icon_2.png');background-position: center;">
                        </div>
                        <div class="items-text">
                            <div class="items-text-a">
                                <span class="items-text-a-title">Plan Estratégico</span>
                                <span class="items-text-a-subtitle">Plan Estratégico Institucional</span>
                            </div>
                            <a href="/dd" target="_blank">
                                <div class="items-text-b">
                                    <span>→</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="items">
                        <div class="items-image" style="background:url('http://sistemas.unh.edu.pe/images/icon_3.png');background-position: center;">
                        </div>
                        <div class="items-text">
                            <div class="items-text-a">
                                <span class="items-text-a-title">Organigrama UNH</span>
                                <span class="items-text-a-subtitle">Resolución N° 088-2019-R-UNH</span>
                            </div>
                            <a href="/dd" target="_blank">
                                <div class="items-text-b">
                                    <span>→</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="items">
                        <div class="items-image" style="background:url('https://sistemas.unh.edu.pe/images/unicheck.jpg');background-position: center;">
                        </div>
                        <div class="items-text">
                            <div class="items-text-a">
                                <span class="items-text-a-title">Directiva UNICHECK</span>
                                <span class="items-text-a-subtitle">Software Antiplagio</span>
                            </div>
                            <a href="/dd" target="_blank">
                                <div class="items-text-b">
                                    <span>→</span>
                                </div>
                            </a>
                        </div>
                    </div>

                   
                </div>
            </div>
        </section>


        <!-- Footer -->
        <?php include("../includes/footer.html"); ?>
    </main>
    
</body>
<script src="../assets/js/script.js"></script>
</html>