<?php
    require "conexion.php";

    $resp = mysqli_query($con, "select *from alumno");
    if($resp){
        $xml = new DOMDocument("1.0");
    $xml->formatOutput=true;
    $fitness=$xml->createElement("alumnos");
    $xml->appendChild($fitness);
    while($row=mysqli_fetch_array($resp)){
        $alumno=$xml->createElement("alumno");
        $fitness->appendChild($alumno);
         
        $idalumno=$xml->createElement("idalumno", $row['idalumno']);
        $alumno->appendChild($idalumno);
         
        $nombres=$xml->createElement("nombres", $row['nombres']);
        $alumno->appendChild($nombres);
         
        $apellidos=$xml->createElement("apellidos", $row['apellidos']);
        $alumno->appendChild($apellidos);
         
        $dni=$xml->createElement("dni", $row['dni']);
        $alumno->appendChild($dni);
         
        $direccion=$xml->createElement("direccion", $row['direccion']);
        $alumno->appendChild($direccion);
         
        $telefono=$xml->createElement("telefono", $row['telefono']);
        $alumno->appendChild($telefono);
         
        $correo=$xml->createElement("correo", $row['correo']);
        $alumno->appendChild($correo);         
    }
    echo "<xmp>".$xml->saveXML()."</xmp>";
    $xml->save("report.xml");
    }else{
        echo "Error...!";
    }

?>