<?php

include("conexion/validar.php");
include("CRUD_estudiante/crearEstudiante.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body>
  <div class="container-fluid row justify-content-center">

    <h3 class="text-center text-secondary mb-3 mt-3">Registro de Estudiante</h2>
      <form class="col-4" method="post" >
        <div class="mb-2">
          <label for="exampleInputEmail1" class="form-label">Nombre del Estudiante:</label>
          <input class="form-control" type="text" aria-label="default input example" name="usuario">
        </div>
        <div class="mb-2">
          <label for="exampleInputEmail1" class="form-label">apellido:</label>
          <input class="form-control" type="text" aria-label="default input example" name="apellidos">
        </div>
        <div class="mb-2">
          <label for="exampleInputEmail1" class="form-label">Edad:</label>
          <input class="form-control" type="number" name="Edad">

        </div>
        <select class="form-select form-select-sm-mb-3" name="identificacion" id="" required>
          <option value="">Tipos de Identificacion</option>
          <?php
        while($identificacion=$sql2-> fetch_array()) {
    

         ?>
          <option value="<?php echo $identificacion[0]?>"><?php echo $identificacion[1]?></option>
          <?php
        }
        ?>
        </select>
        <div class="mb-2 mt-2">
          <label for="exampleInputEmail1" class="form-label">Numero de identificacion:</label>
          <input class="form-control" type="text" name="t_identificacion">

        </div>
    
        
        <div class="d-flex flex-row  mb-4 mt-2 ">
          <select class="form-select form-select" name="jornada" id="" required>
          <option value="">Jornada</option>
          <?php
         while($jornada=$sql-> fetch_array()) {
    

         ?>
          <option value="<?php echo $jornada[0]?>"><?php echo $jornada[1]?></option>
          <?php
          }
          ?>
        </select>

          <div class="container">
          <select class="form-select form-select" name="grado" id="" required>
          <option value="">grados</option>
          <?php
         while($grados=$sql3-> fetch_array()) {
    

         ?>
          <option value="<?php echo $grados[0]?>"><?php echo $grados[1]?></option>
          <?php
         }
          ?>
         </select>
      </div>
    </div>
    <div class="container ">
              <button type="submit" class="btn btn-primary  " name="regisEst">Registrar</button>
            <a href="http://localhost/Angelita/datatable.php" type="submit" class="btn btn-danger" name="cancel">Cancelar</a>

          </div>
      </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
</body>

</html>