fetch("https://sistemas.unh.edu.pe/api/autoridades.php")
.then(res=>res.json())
.then(data=>{
    var api_img = $("api_img");
    
    for(i=0;i<data.data.length;i++){
        console.log(data.data[i])
        api_img.innerHTML+=`
        <div class="ctn-main-autoridades">
            <div class="ctn-main-autoridades-image" style="background-image: url('${data.data[i].url_foto}')">
                <div class="ctn-main-autoridades-image-content">
                </div>
                <div class="ctn-main-autoridades-text">
                    <div class="ctn-main-autoridades-text-content">
                        <span class="titulo_grande">
                            ${data.data[i].nombre_completo}
                        </span>
                        <span class="texto_grande">
                            ${data.data[i].cargo}
                        </span>
                    </div>
                </div>
            </div>
        </div>`
    }
    Apifooter(api_img);
})