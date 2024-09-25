<?php
session_start();
//pregunta si existe la variable usuario para mandarte a donde estas sin que regrese a registro
if (isset($_SESSION['usuario'])) {
    //header("location:index.php");
    //exit();
}

if ($_POST) {
    //valida que el input email y pass tengan contenido
    if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['pass']) && !empty($_POST['pass'])) {

        $email = $_POST['email'];
        $pass = $_POST['pass'];
        
        if (empty($_SESSION['registro'])) {
            //validan que si existe la variable registro
            echo json_encode([0,"Datos incorrectos"]);
        } else {
            if ($email == $_SESSION['registro']['email'] && $pass == $_SESSION['registro']['pass']) {
                //valida si el email y el password son correctos
                $_SESSION['usuario'] = $_SESSION['registro'];
                //header("location: ./index.php");
                echo json_encode([1, "Datos de acceso correctos"]);
            } else {
                echo json_encode([0,"Password incorrectos"]);
            }
        }
    } else {
        echo json_encode([0,"email no encontrado"]);
    }
}

?>
