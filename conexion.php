<?php
    $con = new mysqli("localhost", "root", "root", "bdxml");
    if($con->connect_errno){
        die("Error de Conexión...!");
    }else{
        echo "Conexión exitosa...!";
    }

?>