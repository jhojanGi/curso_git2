<?php
if (!empty($_GET["id"])){
    $id=$_GET["id"];
    $sql=$conexion->query("delete from inventario where identificador=$id ");
    if ($sql==1){
        echo "Eliminado";
    }else{
        ;

    }

}
?>