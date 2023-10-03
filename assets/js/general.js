$( "document" ).ready(function() {
    // Blur effect
    setTimeout(()=>{
        $(".ctn-main").css("filter", "blur(0px)");
        $(".ctn-main").css("transition", "0.75s");
    },600)

});

// Close menu in reponsive Mobile
function closeNav() {
    document.querySelector('.navbar-collapse').classList.remove('show');
}