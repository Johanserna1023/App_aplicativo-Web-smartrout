<?php
    session_start();

    if(isset($_POST["enviar"])){
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        include("conexion.php");
        $result = $connect -> query("SELECT * FROM registro WHERE email LIKE '".$email."'");
        if($result -> num_rows==0){
            $connect -> query("INSERT INTO registro VALUES (null,'$nombre', '$apellido', '$email', '$password')");
            header("location: iniciar_sesion.html");
            exit();
        }else{
            header("location: registro.html");
        }
    }else{
        header("location: registro.html");
        exit();
    }
?>
