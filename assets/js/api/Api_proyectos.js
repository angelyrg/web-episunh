fetch("https://sistemas.unh.edu.pe/api/proyectos.php")
.then(res=>res.json())
.then(data=>{
    var Api_proyectos = $("Api_proyectos")
    for(i=0;i<data.data.length;i++){
        console.log(data.data[i]) 
        Api_proyectos.innerHTML+= `
        <div class="proyecto">
                <div class="ctn-main-proyectos-part1">
                    <div class="ctn-main-proyectos-part1-img">
                        <img src="https://${data.data[i].url_foto1}" loading="lazy" alt="Imagen-sobre-invg" title="no se expande">
                        <img src="https://${data.data[i].url_foto2}" loading="lazy" alt="Imagen-sobre-invg" title="no se expande">
                        <img src="https://${data.data[i].url_foto3}" loading="lazy" alt="Imagen-sobre-invg" title="no se expande">
                        <img src="https://${data.data[i].url_foto4}" loading="lazy" alt="Imagen-sobre-invg"  title="no se expande">
                    </div>
                </div>
                <div class="ctn-main-proyectos-part2 animate__animated animate__slideInLeft">
                    <div class="ctn-main-proyectos-part2-ctn">
                        <span class="span-titulo">${data.data[i].nombre}</span>
                        <span class="span-description">${data.data[i].grupo}</span>
                        <div class="ctn-main-proyectos-part2-ctn-text">
                            <span>
                            ${data.data[i].descripcion}    
                            </span>
                            <span>
                                Ver aqui la resolucion: &nbsp;
                                <a href="http://${data.data[i].url_resolucion}">
                                    <button class="button-ver" >VER PROYECTO</button>
                                </a>
                            </span>
                            <span>
                                Ver aqui el Informe: &nbsp;
                                <a href="http://${data.data[i].url_informe}">
                                    <button class="button-ver" >LEER INFORME</button>
                                </a>
                            </span>
        
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        `
        Apifooter(Api_proyectos);
    }
})