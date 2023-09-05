    $ = ev => document.getElementById(ev);

    $("body").addEventListener("mouseleave", () => {
        $("show").style.display = "none";
        $("show1").style.display = "none";
    })

    $("show").addEventListener("mouseleave", () => {
        $("show").style.display = "none";
    })
    function eventoU(content, show, show2) {
        $(content).addEventListener("mouseover", () => {
            $(show).style.display = "flex";
            $(show2).style.display = "none";
            $(show).style.flexDirection = "column";

        })

    }
    eventoU("content", "show", "show1");
    eventoU("content1", "show1", "show");

    /* RESPONSIVE :V ***/

    conteo = 0;
    conteo0 = 0;
    conteo1 = 0;

    $("content_menu").addEventListener("click", () => {
        if (conteo1 == 0) {
            $("panel_menu_items").style.marginLeft = "0px";
            $("panel_menu_items").style.transition = "0.3s";
            $("body_ctn").style.overflow = "hidden";

            $("close").style.display = "flex";
            $("menu").style.display = "none";
            conteo1 = 1;
        }
        else if (conteo1 == 1) {
            $("body_ctn").style.overflow = "scroll ";
            $("panel_menu_items").style.marginLeft = "-2000px";
            $("panel_menu_items").style.transition = "0.8s";
            $("close").style.display = "none";
            $("menu").style.display = "flex";
            conteo1 = 0;

        }
    })
    $("menu_option").addEventListener("click", () => {
        if (conteo == 0) {
            $("items_menu").style.display = "flex";
            $("menu_option").innerHTML = "<img src='assets/svg/expand_less_white_24dp.svg'> Areas";
            $("menu_option").style.color = "white";
            conteo = 1;
        }
        else if (conteo == 1) {
            $("items_menu").style.display = "none";
            $("menu_option").innerHTML = "<img src='assets/svg/expand_more_white_24dp.svg'> Areas";
            $("menu_option").style.color = "#6f6a6a";
            conteo = 0;
        }
    })
    $("menu_option1").addEventListener("click", () => {
        if (conteo0 == 0) {
            $("items_menu1").style.display = "flex";
            $("menu_option1").innerHTML = "<img src='assets/svg/expand_less_white_24dp.svg'> Nosotros";
            $("menu_option1").style.color = "white";
            conteo0 = 1;
        }
        else if (conteo0 == 1) {
            $("items_menu1").style.display = "none";
            $("menu_option1").innerHTML = "<img src='assets/svg/expand_more_white_24dp.svg'> Nosotros";
            $("menu_option1").style.color = "#6f6a6a";
            conteo0 = 0;
        }
    })


    var edith = document.querySelector('#aparece')
        
    setTimeout(()=>{
        edith.style.opacity=1;
        edith.style.filter= "blur(0px)";
        edith.style.transition="0.75s";
    },100)
    
    
    setTimeout(()=>{
        $("movi").style.filter= "blur(0px)";
        $("movi").style.transition="0.75s";
        
    },600)
    function documentos(e) {
        $("movi").style.filter= "blur(12px)";
        $("movi").style.transition="0.5s";
        setTimeout(() => {
            location.href = e;
        }, 400)
    }
    
function ir(e){
    location.href=e;
}