

const enviar_datos = () => {
    //formularios, construye uno de nuevo
    let email = document.getElementById("email").value;
    let pass = document.getElementById("pass").value;
    let data = new FormData();
    //append añade los elementos
    data.append("email", email);
    data.append("pass", pass);
    //genera o manda a llamar el datos
    //url direccion ip para hacer referencia a la misma,
    // apunta a un hosting, servidro local, DIRECCION EXTERNA
    //URI es una direccion interna
    fetch("app/controller/login.php",{
        //vamos a pasar dato por metodo post
        method:"POST",
        body:data
    }).then(respuesta => respuesta.json())
        .then(respuesta => {
            if (respuesta[0] == 1){
                alert(respuesta[1]);
                window.location="index.php";
            }else{
                alert(respuesta[1]);
            }
            
        })
    //se envia una promesa, recibira datos o una respuesta, argumentos
    //se convierte en formato json
    //en el segundo then se trabja con la informacion
}

document.getElementById("btn-saludar").addEventListener("click",()=>{
    enviar_datos();

});



//$('#btn_saludar').on('click',() => {
 //   enviar_datos();

//});



//error 200 todo bien o 500 error de servidor 0 404 error de archivo no encontrado