    // https://sistemas.unh.edu.pe/dev_v1/api/contacto.php
    fetch("https://sistemas.unh.edu.pe/dev_v1/api/contacto.php")
    .then(res=>res.json())
    .then(data=>{
        //console.log(data.data[0])
        var api_celular = $("api_celular");
        var api_email = $("api_email");
        var api_direccion = $("api_direccion");
        api_celular.innerHTML = data.data[0].celular;
        api_celular.href=`https://api.whatsapp.com/send?phone=+51${data.data[0].celular}&text=Hola, Nececito mas informacion!`
        api_email.innerHTML = data.data[0].email;
        api_email.href = `mailto:${data.data[0].email}`
        api_direccion.innerHTML = data.data[0].direccion; 
    })