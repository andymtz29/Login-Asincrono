

const confirmacion = () => {

    let nombre = document.getElementById("nombre").value;
    let apellido = document.getElementById("apellido").value;
    let email = document.getElementById("email").value;
    let pass = document.getElementById("pass").value;

    let datos = new FormData();
    
    datos.append("nombre", nombre);
    datos.append("apellido", apellido);
    datos.append("email", email);
    datos.append("pass", pass);
    
    fetch("app/controller/registro.php",{
        method:"POST",
        body:datos
    }).then(respuesta => respuesta.json())
        .then(respuesta => {            
            if (respuesta[0] == 1) {
                alert(respuesta[1]);
                window.location="login.php";
            } else{
                alert(respuesta[1]);
            }
            
        })   
}

document.getElementById("btn-registrar").addEventListener("click",()=>{
    confirmacion();
});


