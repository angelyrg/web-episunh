fetch("https://sistemas.unh.edu.pe/dev_v1/api/autoridades.php")
.then(res=>res.json())
.then(data=>{
    let autoridesContainer = document.getElementById("autoridades_lista");

    let result = '';
    
    for(i=0;i<data.data.length;i++){
        // console.log(data.data[i])

        result += `<div class="col-12 col-md-6 col-lg-4">
            <div class="container mt-5">
                <div class="card custom-card">
                    <img src="https://${data.data[i].url_foto}" alt="Imagen" class="card-img-top">
                    <div class="info-box">
                        <h5 class="card-title">${data.data[i].nombre_completo}</h5>
                        <p class="card-text">${data.data[i].cargo}</p>
                    </div>
                </div>
            </div>
        </div>`;


        // api_img.innerHTML+=`
        // <div class="ctn-main-autoridades">
        //     <div class="ctn-main-autoridades-image" style="background-image: url('https://${data.data[i].url_foto}')">
        //         <div class="ctn-main-autoridades-image-content">
        //         </div>
        //         <div class="ctn-main-autoridades-text">
        //             <div class="ctn-main-autoridades-text-content">
        //                 <span class="titulo_grande">
        //                     ${data.data[i].nombre_completo}
        //                 </span>
        //                 <span class="texto_grande">
        //                     ${data.data[i].cargo}
        //                 </span>
        //             </div>
        //         </div>
        //     </div>
        // </div>`
    }

    console.log(result);

    autoridesContainer.innerHTML = result;
    
    // Apifooter(api_img);
})
