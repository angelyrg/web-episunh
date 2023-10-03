<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/icon/epislogo.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/sass3.css">
    <link rel="stylesheet" href="assets/css/general.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />   
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <meta name="theme-color" content="black">
    <title>Sistemas UNH</title>
</head>

<body class="ctn-principal" id="body_ctn">
    <div id="particles-container"></div>
    <div class="panel-black" id="panel_black"></div>
    <div class="panel-menu-items" id="panel_menu_items">
        <navbar class="nav-menu">
            <ul class="ul-menu">
                <li class="menu-option">
                    <a href="#" class="menu-option-span menu-option-span-solid ">Inicio</a>
                </li>
                <li class="menu-option">
                    <a href="./page/documentos.php" class="menu-option-span"> Documentos</a>
                </li>
                <li class="menu-option">
                    <span class="menu-option-span" id="menu_option">
                        <img src="assets/svg/expand_more_white_24dp.svg"> Areas
                    </span>
                    <ul class="menu-ctn-items" id="items_menu">
                        <li class="menu-option-n1">
                            <a href="./page/bienestar.html">Bienestar</a>
                        </li>
                        <li class="menu-option-n1">
                            <a href="./page/calidad.html">Calidad</a>

                        </li>
                        <li class="menu-option-n1">
                            <a href="./page/proyectos.html">Proyeccion Social</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-option">
                    <span class="menu-option-span" id="menu_option1">
                        <img src="assets/svg/expand_more_white_24dp.svg"> Nosotros
                    </span>
                    <ul class="menu-ctn-items" id="items_menu1">
                        <li class="menu-option-n1">
                            <a href="./page/presentacion.html">Presentacion</a>
                        </li>
                        <li class="menu-option-n1">
                            <a href="./page/visionymision.html">Vision y Mision</a>
                        </li>
                        <li class="menu-option-n1">
                            <a href="./page/autoridades.php">Autoridades</a>
                        </li>
                        <li class="menu-option-n1">
                            <a href="./page/historia.html">Historia</a>
                        </li>

                    </ul>
                </li>
                <li class="menu-option">
                    <a href="./page/contacto.html" class="menu-option-span">Contacto</a>

                </li>

            </ul>
        </navbar>
    </div>
    <header id="body" class="header">
        <div class="ctn-header-logo">
            <div class="ctn-header-logo-item-1" id="aparece">
                <img src="assets/img/episunh_logo.png" class="img-fluid" width="50px" alt="Logo sistemas unh" >
                <!-- <span class="span-epis">EPIS
                    <span class="span-unh">UNH</span>
                </span> -->
            </div>
        </div>
        <nav>
            <ul class="content_hello">
                <li class="content_hello-titulo">
                    <a>
                        <span class="style-linkAll-solid ">
                            <h6 class="style-linkAll-solid  animate__animated animate__flash">Inicio</h6>
                        </span>
                    </a>
                </li>
            </ul>
            <ul class="content_hello">
                <li class="content_hello-titulo">
                    <a onclick="documentos('./page/documentos.html')">
                        <span class="style-linkAll">Documentos</span>
                    </a>
                </li>
            </ul>
            <ul class="content_hello">
                <li class="content_hello-titulo">
                    <span id="content">Areas</span>
                </li>
                <ul class="content_hello-items" id="show">
                    <a onclick="documentos('./page/bienestar.html')">
                        <li class="content_hello-items1">
                            Bienestar
                        </li>
                    </a>
                    <a onclick="documentos('./page/calidad.html')">
                        <li class="content_hello-items1">
                            Calidad
                        </li>
                    </a>
                    <a onclick="documentos('./page/proyectos.html')">
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
                    <a onclick="documentos('./page/presentacion.html')">
                        <li class="content_hello-items1">
                            Presentación
                        </li>
                    </a>
                    <a onclick="documentos('./page/visionymision.html')">
                        <li class="content_hello-items1">
                            Visión y Misión
                        </li>
                    </a>
                    <a onclick="documentos('./page/autoridades.php')">
                        <li class="content_hello-items1">
                            Autoridades
                        </li>
                    </a>
                    <a onclick="documentos('./page/historia.html')">
                        <li class="content_hello-items1">
                            Historia
                        </li>
                    </a>
                </ul>
            </ul>
            <ul class="content_hello">
                <a onclick="documentos('./page/contacto.html')">
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

        <section id="section-welcome-container">
            <div class="container d-flex hero_container">
                <div class="row my-auto"  style="width: 100%;">
                    <div class="col-md-6 d-flex align-content-end">
                        <div class="ctn-main-page-welcome-text">
                            <div class="ctn-main-page-welcome-text-title">
                                <span>
                                    <h1 id="letter2" class="letter2 animate__animated animate__fadeInUp">
                                        UNIVERSIDAD NACIONAL DE HUANCAVELICA
                                    </h1>
                                    <h1 class="title animate__animated animate__fadeInUp">
                                        <span id="blure1" class="blure1">ESCUELA&nbsp;</span><span class="blure2"
                                            id="blure2">PROFESIONAL</span>
                                    </h1>
                                    <h1 class=" title animate__animated animate__fadeInUp">
                                        <span id="blure4" class="blure2">INGENIERIA&nbsp;</span><span class="blure1"
                                            id="blure3">DE</span>
                                    </h1>
                                    <h1 class=" title animate__animated animate__fadeInUp">
                                        <span id="blure5" class="blure1">SISTEMAS</span>
                                    </h1>
                                </span>
            
                                <br>
                                <span class="animate__animated animate__fadeInUp animate__fadeIn">
                                    <h5 class="text-description animate__animated animate__fadeInUp animate__fadeIn">
                                        "Forjando innovadores en el mundo digital.<br>¡Tu futuro comienza aquí!"
                                    </h5>
                                </span>
                                <br>


                                <h4 class="text-white" ><span id="efecto_escritura"></span><span class="blinking-pipe">|</span></h4>

                                <br>

                                TODO: Los links deben ser clickeables :)
                                <div class="hero_external_links">
                                    <a href="https://www.unh.edu.pe/" target="_blank">
                                        <button class="text-button">IR A UNH
                                            <img width="9" height="9" src="assets/svg/north_east_white_18dp.svg">
                                        </button>
                                    </a>
                                    <a href="http://fies.unh.edu.pe/" target="_blank">
                                        <button class="text-button">IR A FACULTAD
                                            <img width="9" height="9" src="assets/svg/north_east_white_18dp.svg">
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center">
                        <img src="assets/img/coding.gif" class="img-fluid" draggable="false" alt="">
                    </div>
                </div>
            </div>

        </section>

        <section class="ctn-main-page-information" id="page_information">
            <div class="container my-auto">
                <div class="row">
                    <div class="col-md-6">
                        <div class="ctn-main-page-information-text-text">
                            <div class="content">
                                <div class="animate__animated animate__fadeInUp">
                                    <h1 class="information-bienvenido" id="bienvenido_id">| BIENVENIDOS</h1>
                                </div>
                            </div>
                            <br>
                            <br>
                            <span>
                                <div id="cambia1" class="cambia1">
                                    <div class="ctn_message">
                                        <div class="typewriter">
                                            <h1 class="text-muestra" id="bienvenido_id1">
                                                La Escuela Profesional de Ingeniería de Sistemas
                                            </h1>
                                        </div>
                                        <br>
                                        <div class="typewriter">
                                            <h1 class="text-muestra" id="bienvenido_id2">
                                                de la Universidad Nacional de Huancavelica,
                                            </h1>
                                        </div>
                                        <br>
                                        <div class="typewriter">
                                            <h1 class="text-muestra" id="bienvenido_id3">
                                                le da la bienvenida a esta Casa superior de estudios,
                                            </h1>
                                        </div>
                                        <br>
                                        <div class="typewriter">
                                            <h1 class="text-muestra" id="bienvenido_id4">
                                                deseando que su estancia y desarrollo
                                            </h1>
                                        </div>
                                        <br>
                                        <div class="typewriter">
                                            <h1 class="text-muestra" id="bienvenido_id5">
                                                perdure y que sea el punto de partida de 
                                            </h1>
                                        </div>
                                        <br>
                                        <div class="typewriter">
                                            <h1 class="text-muestra" id="bienvenido_id6">
                                                un proceso de crecimiento y desarrollo profesional
                                            </h1>
                                        </div>
                                        <br>
                                        <div class="typewriter">
                                            <h1 class="text-muestra" id="bienvenido_id7">
                                                para cada uno de nuestros nuevos estudiantes.
                                            </h1>
                                        </div>
                                    </div>
                                    <div class="mt-5">
                                        <span class="span-encuentranos">
                                            &nbsp;Encuéntranos en nuestras redes sociales: </span>
                                        <br>
                                        <br>
                                        <a type="button" href="https://www.facebook.com/SistemasUNH/" class="styleB Faccebok" target="_blank">
                                            <i class="fa-brands fa-facebook effect"></i>
                                        </a>
                                        <a type="button" href="https://twitter.com/UNH_Sistemas" class="styleB Twitter" target="_blank">
                                        <i class="fa-brands fa-x-twitter effect"></i>
                                        </a>
                                        <a type="button" href="https://www.instagram.com/SistemasUNH/" class="styleB Instagram" target="_blank">
                                            <i class="fa-brands fa-instagram effect"></i>
                                        </a>
                                        <a type="button" href="https://www.youtube.com/@escuelaprofesionaldeingeni4998" class="styleB Youtube" target="_blank">
                                            <i class="fa-brands fa-youtube effect"></i>
                                        </a>
                                        <a type="button" href="https://www.linkedin.com/company/sistemasunh/" class="styleB Linkedin" target="_blank">
                                            <i class="fa-brands fa-linkedin effect"></i>
                                        </a>
                                    </div>
                                </div>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6 my-auto">
                        <img src="./assets/img/sistemas_unh-min.jpg" class="img-fluid rounded-4" alt="">
                    </div>
                </div>
            </div>
            <!-- <div class="ctn-main-page-information-text">
            </div> -->
        </section>
        
        <section class="ctn-main-page-target" id="page_target">
            <div class="ctn-main-page-target-grande" id="an1">
                <div class="ctn-main-page-target-grande-text ">

                    <span class="target-text-tittle">Habilidades</span>
                    <span>
                        1. Creatividad y capacidad de ser original, innovador, descubridor e inventor.
                        <br>
                        <br>
                        2. Capacidad de comunicación y facilidad para contactarse con los demás de una forma eficiente
                        ya sea de forma escrita, oral o gráfica.
                        <br>
                        <br>
                        3. Pensamiento que le permita al estudiante de esta carrera tener una integración focalizada de
                        sus conocimientos para el establecimiento de prioridades adecuadas a la hora de tomar
                        decisiones.
                        <br>
                        <br>
                        4. Capacidad para implementar más de una solución correcta a un problema determinado.
                        <br>
                        <br>
                        5. Pensamiento analítico y habilidad de poder descomponer un problema en sus partes
                        constitutivas, extrayendo las variables principales que intervienen y relacionando los síntomas
                        con sus causas; a la vez, capacidad para construir, con esta información, algoritmos y modelos
                        de la vida real.
                        <br>
                        <br>
                        6. Diseño conceptual que permita identificar y diseñar especificaciones generales y detalladas
                        de los sistemas, cualquiera que estos sean, así como implementar y mantener los sistemas de
                        información desarrollados.

                    </span>
                </div>
            </div>
            <div class="ctn-main-page-target-mediano" id="an2">
                <div class="ctn-main-page-target-mediano-text ">

                    <span class="target-text-tittle">Conocimiento</span>

                    <span>
                        1. Debe de poseer conocimientos sólidos, tanto de matemáticas, física y conocimientos generales
                        de química, así como conocimientos básicos tanto de software como de hardware, y de
                        comunicaciones que le permiten responder a las diversas necesidades que se presentan en el campo
                        de trabajo de la Ingeniería en Sistemas.
                        <br>
                        <br>
                        2. Además, debe tener aptitud para el razonamiento lógico-matemático y para la operación de
                        computadoras.
                        <br>
                        <br>
                        3. Conocimiento de un idioma técnico: este deberá ser, al menos, el idioma inglés.
                    </span>
                </div>
            </div>
            <div class="ctn-main-page-target-pequeno" id="an3">
                <div class="ctn-main-page-target-pequeno-text">

                    <span class="target-text-tittle">Actitudes</span>
                    <br>
                    <span>
                        Responsabilidad y constante búsqueda de respuestas mediante la investigación y el
                        autoaprendizaje.
                    </span>
                </div>
            </div>
        </section>

        <section class="ctn-main-page-abouti" id="page_abouti">
            <div class="ctn-main-page-abouti-items-2">
                <div class="ctn-main-page-abouti-items-2-perspectivas">
                    <span class="abouti-title">PERSPECTIVAS OCUPACIONALES</span>
                    <br>
                    <br>
                    <span>
                        1. Gerente de tecnologías de información (GTI): Planifica y gestiona todas las tecnologías
                        utilizadas en el manejo de la información de una organización.
                        <br>
                        2. Jefe de Proyectos: Gestiona, planifica, dirige, monitorea y controla proyectos de Tecnologías
                        de Información y Comunicación.
                        <br>
                        3. Arquitecto de Tecnología: Diseña, desarrolla, evalúa e integra aplicaciones de negocios, y
                        redes de computadoras.
                        <br>
                        4. Analistas de sistemas: Responsable de la traducción de los requerimientos funcionales en
                        diseños de sistemas, diseña e implementa la arquitectura de la información de una determinada
                        organización.
                        <br>
                        5. Analista de procesos: Análisis, identificación de oportunidades para la optimización de
                        procesos, diseño de propuestas de mejoras, realizar análisis de impacto de negocio por la
                        introducción de cambios.
                        <br>
                        6. Analista de seguridad informática: Diseña e implementa políticas de seguridad para proteger
                        la información en las organizaciones.
                        <br>
                        7. Desarrolla el Software: Se encarga de desarrollar el software de calidad para dar solución a
                        problemas organizacionales.
                        <br>
                        8. Gestionador de Base de Datos: Responsable de la construcción, verificación, instalación y
                        gestión de las bases de datos de las organizaciones.
                        <br>
                        9. Auditor de Sistemas: Encargado de asegurar que aspectos de un sistema de información estén
                        funcionando de acuerdo a las especificaciones y requerimientos de la organización.
                        <br>
                        10. Docente en Universidades e Institutos Superiores.
                    </span>
                </div>
            </div>
            <div class="ctn-main-page-abouti-items-1">
                <div class="ctn-main-page-abouti-items-1-perfil">
                    <span class="abouti-title">PERFIL PROFESIONAL</span>
                    <span>
                        Profesional dedicado a la aplicación del enfoque de sistemas en la solución de problemas
                        organizacionales y sociales, mediante el diseño, implementación y gestión de tecnologías de
                        información y comunicación generando competitividad en las organizaciones; además de diseñar e
                        implementar sistemas de gestión por procesos, generando sistemas de gestión de calidad en las
                        organizaciones con una visión innovadora, emprendedora, humanista, científica, orientado al
                        desarrollo, bienestar de la sociedad y el medio ambiente.
                    </span>
                </div>

            </div>
        </section>

        <section class="ctn-main-page-linea " id="page_linea">
            <div class="ctn-main-page-linea-content">
                <div class="ctn-main-page-linea-content-items grado_img" id="line_img1" >
                    <span class="items-title">Grado Académico</span>
                    <span class="items-text">Bachiller en Ingeniería de Sistemas</span>
                </div>
                <div class="ctn-main-page-linea-content-items titulo_img" id="line_img2">
                    <span class="items-title">Título Profesional</span>
                    <span class="items-text">Ingeniero de Sistemas</span>
                </div>
                <div class="ctn-main-page-linea-content-items estudiantes_img" id="line_img3">
                    <span class="items-title ">Duración</span>
                    <span class="items-text">5 años</span>
                </div>
                <div class="ctn-main-page-linea-content-items sede_img" id="line_img4">
                    <span class="items-title">Sede</span>
                    <span class="items-text">Daniel Hernández</span>
                </div>

            </div>
        </section>

        <!-- Footer -->
        <?php include("includes/footer.html"); ?>

    </main>
</body>
<script src="./assets/js/script.js"></script>
<script src="./assets/js/index.js"></script>
<script src="./assets/js/scroll.js"></script>
<script src="./assets/js/particles.js"></script>
<script src="./assets/js/efectoEscritura.js"></script>

</html>