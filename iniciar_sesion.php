<?php
    session_start();
    if(isset($_POST["enviar"])){
        $usuario = $_POST["email"];
        $password = $_POST["password"];
            include("conexion.php");
            $result = $connect -> query("SELECT * FROM registro WHERE email LIKE '".$usuario."' AND contraseña LIKE '".$password."'");

            if($result -> num_rows==1){
                header("location: index.html");
            }else{
                header("location: iniciar_sesion.html");
            }
    }else{
        exit();
    }
?>
