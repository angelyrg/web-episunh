function Apifooter(ev){
    fetch("https://sistemas.unh.edu.pe/api/contacto.php")
    .then(res=>res.json())
    .then(data=>{
    ev.innerHTML+=`
    <footer class="ctn-footer">
        <div class="ctn_bg2">
            <div class="bg"></div>
        </div>
        <div class="ctn-footer-content">
            <div class="ctn-footer-content-items">
                <h1>EPIS UNH</h1>
                <br>
                <span>
                    Email: <a class="style-linkAll" href ='mailto:${data.data[0].email}'>${data.data[0].email}</a> - Teléfono: 
                    <a href='https://api.whatsapp.com/send?phone=+51${data.data[0].celular}&text=Hola, Nececito mas informacion!' class=" style-linkAll" id="api_celular">${data.data[0].celular}</a> 
                    <br>
                    <span id="api_direccion">
                    ${data.data[0].direccion}
                    </span>
                </span>

                <div class="ctn-footer-content-social">
                    <i class="fa-brands fa-facebook effect" onclick="ir('https://www.facebook.com/SistemasUNH/')" ></i>
                    <i class="fa-brands fa-twitter effect" onclick="ir('https://www.twitter.com/UNH_Sistemas/')" ></i>
                    <i class="fa-brands fa-youtube effect" onclick="ir('https://www.youtube.com/SistemasUNH/')" ></i>
                    <i class="fa-brands fa-instagram effect" onclick="ir('https://www.instagram.com/SistemasUNH/')" ></i>
                    <i class="fa-brands fa-linkedin effect" onclick="ir('https://www.linkedin.com/company/sistemasunh/')" ></i>
                </div>
            </div>
        </div>

    </footer>
    <div class="ctn-copyright">
        <span>Copyright ©2023, EPIS UNH - Todos los derechos reservados</span>
    </div>`
    })
}