<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css" />
    <title>Document</title>
    <script>
     
     function habilitarCampoInconvenientes() {
       var interior = document.getElementById("interior");
       var exterior = document.getElementById("exterior");
       var seguridad = document.getElementById("seguridad");
       var mecanicasTecnicas = document.getElementById("mecanicasTecnicas");
       var campoInconvenientes = document.getElementById("inconvenientes");
   
       if (
         interior.value === "buenasCondiciones" &&
         exterior.value === "buenasCondiciones" &&
         seguridad.value === "buenasCondiciones" &&
         mecanicasTecnicas.value === "buenasCondiciones"
       ) {
         campoInconvenientes.disabled = true;
         campoInconvenientes.value = "";
       } else {
         campoInconvenientes.disabled = false;
       }
     }
   </script>
   
    <style>
      body {
    font-family: Arial, sans-serif;
    background-image: url(img/onix.jpg);
    margin: 0;
    padding: 20px;
    background-repeat: no-repeat;
    background-size: cover;
  }

  h1 {
    text-align: center;
    color: #333333;
  }

  .form-container {
    max-width: 550px;
    margin: 0 auto;
    background-color: #ffffff;
    padding: 30px;
    border-radius: 25px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }

  .form-group {
    margin-bottom: 20px;
  }

  .form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
  }

  .form-group input[type="text"],
  .form-group input[type="number"] {
    width: 60%;
    padding: 10px;
    font-size: 16px;
    border-radius: 3px;
    border: 1px solid #cccccc;
  }

  .form-group button {
    background-color: #333333;
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 3px;
    cursor: pointer;
  }

  .form-group button:hover {
    background-color: #555555;
  }

    </style>


      
</head>
<body>
<h1>Inventario Chevrolet Onix Turbo Sedán</h1>
  <div class="form-container">
  <form method="POST" >
    
    <?php
    include "modelo/conexion.php";
    include "controlador/registrar.php";
    ?>

  <div class="form-group">
  <label >Serial:</label>
  <input type="number"  name="identificador" required>
  </div>

    <div class="form-group">
      <label >Color:</label>
      <select type="text"  name="color" required>
        <option class="opciones">---Escoje El Color---</option>      
        <option value="blanco">Blanco</option>
        <option value="negro">Negro</option>
        <option value="rojo">Rojo</option>
        <option value="gris">Gris</option>
      </select>
    </div>
    <div class="form-group">
      <label >Versión:</label>
      <select type="text"  name="versionn" required>
        <option class="opciones">---Selecciona La Version---</option>
        <option value="Onix Turbo Sedan 2022">Onix Turbo Sedan 2022</option>
        <option value="Onix Turbo Sedan 2023">Onix Turbo Sedan 2023</option>
      </select>
    </div>
    <div class="form-group">
      <label >Concesionario:</label>
      <select type="text"  name="concesionario" required>
        <option class="opciones">---Selecciona el concesionario---</option>
        <option value="COLTOLIMA MIROLINDO PRINCIPAL KM 4 VÍA Mirolindo IBAGUE">COLTOLIMA MIROLINDO PRINCIPAL KM 4 VÍA Mirolindo IBAGUE</option>
      </select>
    </div>

    <div class="form-group">
    <label for="ficha">Ficha Tecnica:</label>
  <label >Interior:</label>
  <input type="text"  name="interior" required>
  </div>

  <div class="form-group">
  
  <label >Exterior:</label>
  <input type="text"  name="exterior" required>
  </div>

<div class="form-group">
  
  <label >Seguridad:</label>
  <input type="text"  name="seguridad" required>
  </div>

  <div class="form-group">
    
  <label >Mecanica y Tecnica:</label>
  <input type="text" name="mecanicastecnicas" required>
  </div>
  


 
  
      <button name="btnregistrar" type="submit" value="ok">Agregar al inventario</button>
      <a href="vistaformulario.php">Ver registros</a>
    </div>
  </form>
</div>

  </div>
</body>
</html>