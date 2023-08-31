<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        tr{
            text-align: center;
        }
    </style>

</head>
<body>
<script>
        function eliminar(){
            var respuesta=confirm("¿seguro que quiere eliminar este registro?")
            return respuesta
        }
    </script>

<?php
include "modelo/conexion.php";
include "controlador/eliminarregistro.php";
?>




        <div class="todo">
            <h1>Vista de los registros de los carros</h1>
            
            <table class="table">
                    
                    <thead class="bg-warning">
                        <tr>
                            <th scope="col">Identificador</th>
                            <th scope="col">Color</th>
                            <th scope="col">Version</th>
                            <th scope="col">Concesionario</th>
                            <th scope="col">Interior</th>
                            <th scope="col">Exterior</th>
                            <th scope="col">Seguridad</th>
                            <th scope="col">Mecanicas Tecnicas</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                <?php
                include "modelo/conexion.php";
                $sql = $conexion->query("SELECT * FROM inventario");
                while ($datos = $sql->fetch_object()) {
                ?>
                    <tr>
                        <td><?= $datos->identificador ?></td>
                        <td><?= $datos->color ?></td>
                        <td><?= $datos->versionn ?></td>
                        <td><?= $datos->concesionario ?></td>
                        <td><?= $datos->interior ?></td>
                        <td><?= $datos->exterior ?></td>
                        <td><?= $datos->seguridad ?></td>
                        <td><?= $datos->mecanicastecnicas ?></td>
                        
                        <td>
                            <a onclick="return eliminar()"; href="vistaformulario.php?id=<?= $datos->identificador ?>" >Eliminar</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
                
            </tbody>
            
            </table>
        </div>
        <a href="index.php" class="regresar">Regresar</a>
        

        



</body>
</html>