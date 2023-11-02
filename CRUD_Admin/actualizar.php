<?php
include_once("../conexion/conectar.php");
include("actualizardatos.php");


$cedula=$_REQUEST['idUsuario'];

$sql=$link->query("SELECT * FROM usuarios WHERE idUsuario=$cedula");
$datos=$sql->fetch_array();                  
  
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
      <input class="form-control" type="hidden" name="cedulaNueva" value="<?php echo$datos['idUsuario'] ?>" >

        <div class="mb-2">
          <label for="exampleInputEmail1" class="form-label">Nombre del admin:</label>
          <input class="form-control" type="text" aria-label="default input example" name="usuario" value="<?php echo$datos['nomUsuario'] ?>">
        </div>
        <div class="mb-2">
          <label for="exampleInputEmail1" class="form-label">apellido:</label>
          <input class="form-control" type="text" aria-label="default input example" name="apellidos" value="<?php echo$datos['apellidoUsuario'] ?>">
        </div>
        <div class="mb-2">
          <label for="exampleInputEmail1" class="form-label">Contraseña:</label>
          <input class="form-control" type="text" name="contraseña"value="<?php echo$datos['passUsuario'] ?>">

        </div>
        <div class="mb-2">
          <label for="exampleInputEmail1" class="form-label">Numero de identificacion:</label>
          <input class="form-control" type="text" name="cedula" value="<?php echo$datos['idUsuario'] ?>" >

        </div>
        <div class="mb-2">
          <label for="exampleInputEmail1" class="form-label">Fecha de expedicion CC:</label>
          <input type="Date" class="form-control" name="fechaCC"value="<?php echo$datos['fechaCedula'] ?>">

        </div>
        <label for="jornada">Jornada:</label>
        <select class="form-select form-select-sm-mb-3" name="jornada" id="" required>
            <?php
          
          if($datos['idJornada']==1){
            echo"<option value='1'>tarde</option>";
            echo"<option value='2'>Mañana</option>";
        }else{
            echo"<option value='2'>Mañana</option>";
            echo"<option value='1'>tarde</option>";
        }
    

        ?>
        
        </select>
        <label for="rol">Rol:</label>
        <select class="form-select form-select-sm-mb-3" name="rol" id="" required>
            <?php
          
          if($datos['idRol']==1){
            echo"<option value='1'>Administrador</option>";
            echo"<option value='2'>Usuario</option>";
        }else{
            echo"<option value='2'>Usuario</option>";
            echo"<option value='1'>Administrador</option>";
        }
    

        ?>
        
        </select>
        <div class="d-flex flex-row  mb-4 mt-2 ">
          <div class="container">

            <button type="submit" class="btn btn-primary  ms-2" name="actualizar">actualizar</button>
          </div>
          <div class="container ">
            <button type="submit" class="btn btn-danger" name="cancel">Cancelar</button>

          </div>
        </div>
      </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
</body>

</html>