fetch("https://sistemas.unh.edu.pe/api/autoridades.php")
.then(res=>res.json())
.then(data=>{
    let autoridesContainer = document.getElementById("autoridades_lista");

    let result = '';
    
    for(i=0;i<data.data.length;i++){

        result += `<div class="col-12 col-md-6 col-lg-4 mb-5">
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
    }

    autoridesContainer.innerHTML = result;

})
