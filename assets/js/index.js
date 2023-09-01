function setTim(ev, tiempo) {
    setTimeout(() => {
        var edith = document.querySelector('#' + ev)
        edith.style.transition = "0.75s";
        edith.style.opacity = 1;
        edith.style.filter = "blur(0px)";
    }, tiempo)
}
const primary = 500;
const second = 600;
setTim("blure2", second)
setTim("blure1", primary)
setTim("aparece", 100)
setTim("blure3", primary)
setTim("blure4", second)
setTim("blure5", 1000)


setTimeout(() => {
    $("letter2").style.display = "flex"
}, 200)