<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "transporte";

    $connect = new mysqli($host,$user,$pass,$db);

    if($connect){
        echo "Conectado al servidor";
    }else{
        echo "Error al conectar";
        exit();
    }

?>
