
document.addEventListener("scroll", function () {
    const section = document.getElementById("page_information");
    const sectionTop = section.offsetTop;
    const sectionHeight = section.clientHeight;
    const scrollPosition = window.scrollY;
    const windowHeight = window.innerHeight;

    // Calculamos la posición vertical de la tercera parte de la sección
    const sectionThird = sectionTop + (sectionHeight / 4) * 2;

    // Verificamos si el scroll está en la tercera parte de la sección
    if (scrollPosition > sectionThird - windowHeight &&
        scrollPosition < sectionThird) {
        //console.log("El usuario está en la tercera parte de la sección.");
        bi = $("bienvenido_id")
        
        //$("cambia2").classList.add("animate__animated", "animate__fadeInDown")
        //$("cambia3").classList.add("animate__animated", "animate__fadeInDown")
        

        bi.style.color = "#00ffad"
        bi.classList.add("text");
        $("bienvenido_id1").classList.add("text");
        $("bienvenido_id2").classList.add("text");
        $("bienvenido_id3").classList.add("text");
        $("bienvenido_id4").classList.add("text");
        $("bienvenido_id5").classList.add("text");
        $("bienvenido_id6").classList.add("text");
        $("bienvenido_id7").classList.add("text");
        
    }
    const section1 = document.getElementById("page_target");
    const sectionTop1 = section1.offsetTop;
    const sectionHeight1 = section1.clientHeight;
    const scrollPosition1 = window.scrollY;
    const windowHeight1 = window.innerHeight;

    // Calculamos la posición vertical de la tercera parte de la sección
    const sectionThird1 = sectionTop1 + (sectionHeight1 / 6) * 2;

    // Verificamos si el scroll está en la tercera parte de la sección
    if (scrollPosition1 > sectionThird1 - windowHeight1 && scrollPosition1 < sectionThird1){
        console.log("tagert");
       
        $("an1").classList.add("animate__animated", "animate__rotateInUpLeft")
        $("an2").classList.add("animate__animated", "animate__rotateInDownLeft")
        $("an3").classList.add("animate__animated", "animate__fadeInRight")
        
    }

    const section2 = document.getElementById("page_linea");
    const sectionTop2 = section2.offsetTop;
    const sectionHeight2 = section2.clientHeight;
    const scrollPosition2 = window.scrollY;
    const windowHeight2 = window.innerHeight;

    // Calculamos la posición vertical de la tercera parte de la sección
    const sectionThird2 = sectionTop2 + (sectionHeight2 / 3) * 2;

    // Verificamos si el scroll está en la tercera parte de la sección
    if (scrollPosition2 > sectionThird2 - windowHeight2 && scrollPosition2 < sectionThird2){
        console.log("tagert");
       
        $("line_img1").classList.add("animate__animated", "animate__flipInX")
        $("line_img2").classList.add("animate__animated", "animate__flipInX")
        $("line_img3").classList.add("animate__animated", "animate__flipInX")
        $("line_img4").classList.add("animate__animated", "animate__flipInX")
        
    }
});
