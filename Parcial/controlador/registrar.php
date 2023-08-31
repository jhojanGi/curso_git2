<?php
if (!empty($_POST["btnregistrar"])){
    if (!empty($_POST["identificador"]) and !empty($_POST["color"]) and !empty($_POST["versionn"]) and !empty($_POST["concesionario"]) and !empty($_POST["interior"]) and !empty($_POST["exterior"]) and !empty($_POST["seguridad"]) and !empty($_POST["mecanicastecnicas"])){
        $identificador = $_POST["identificador"];
        $color = $_POST["color"];
        $versionn = $_POST["versionn"];
        $concesionario = $_POST["concesionario"];
        $interior = $_POST["interior"];
        $exterior = $_POST["exterior"];
        $seguridad = $_POST["seguridad"];
        $mecanicastecnicas = $_POST["mecanicastecnicas"];

        $sql=$conexion->query("INSERT INTO inventario (identificador, color, versionn, concesionario, interior, exterior, seguridad, mecanicastecnicas) VALUES ('$identificador', '$color', '$versionn', '$concesionario', '$interior', '$exterior', '$seguridad', '$mecanicastecnicas')");
        if ($sql==1){
            echo "registrado correctamente";
        }else{
            echo "error al registrar";
        }
    }else{
        echo "debe llenar todos los espacios";
    }
}
?>