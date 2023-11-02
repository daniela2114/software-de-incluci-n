<?php

include("conexion/validar.php");
include("CRUD_Admin/crear.php");

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

    <h3 class="text-center text-secondary mb-3 mt-3">Registro de Administrador</h2>
      <form class="col-4" method="post" >
        <div class="mb-2">
          <label for="exampleInputEmail1" class="form-label">Nombre del admin:</label>
          <input class="form-control" type="text" aria-label="default input example" name="usuario">
        </div>
        <div class="mb-2">
          <label for="exampleInputEmail1" class="form-label">apellido:</label>
          <input class="form-control" type="text" aria-label="default input example" name="apellidos">
        </div>
        <div class="mb-2">
          <label for="exampleInputEmail1" class="form-label">Contraseña:</label>
          <input class="form-control" type="text" name="contraseña">

        </div>
        <div class="mb-2">
          <label for="exampleInputEmail1" class="form-label">Numero de identificacion:</label>
          <input class="form-control" type="text" name="cedula">

        </div>
        <div class="mb-2">
          <label for="exampleInputEmail1" class="form-label">Fecha de expedicion CC:</label>
          <input type="Date" class="form-control" name="fechaCC">

        </div>
        <select class="form-select form-select-sm-mb-3" name="jornada" id="" required>
          <option value="">Jornada</option>
          <?php
        while($jornada=$sql-> fetch_array()) {
    

         ?>
          <option value="<?php echo $jornada[0]?>"><?php echo $jornada[1]?></option>
          <?php
        }
        ?>
        </select>

        <div class="d-flex flex-row  mb-4 mt-2 ">
          <div class="container">

            <button type="submit" class="btn btn-primary  ms-2" name="regisAdmin">Registrar</button>
          </div>
          <div class="container ">
            <a href="http://localhost/Angelita/datatable.php" type="submit" class="btn btn-danger" name="cancel">Cancelar</a>

          </div>
        </div>
      </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
</body>

</html>