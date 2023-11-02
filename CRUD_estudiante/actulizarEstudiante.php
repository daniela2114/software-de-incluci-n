<?php
include_once("../conexion/conectar.php");
include("actualizarDatos.php");


$cedula=$_REQUEST['idEst'];





$sql = $link->query("SELECT * FROM estudiantess WHERE idEst=$cedula");

if ($datos = $sql->fetch_array()) {
  $grado=$datos['idGrado'];
    $tipo_documentos = $datos['idTipo'];
    $jornada=$datos['idJornada'];
} 
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

    <h3 class="text-center text-secondary mb-3 mt-3">Datos de Estudiante</h2>
      <form class="col-4" method="post" >
      <input class="form-control" type="hidden" name="ti_vieja" value="<?php echo$datos['idEst'] ?>">

        <div class="mb-2">
          <label for="exampleInputEmail1" class="form-label">Nombre del Estudiante:</label>
          <input class="form-control" type="text" aria-label="default input example" name="usuario"value="<?php echo$datos['nomEst'] ?>">
        </div>
        <div class="mb-2">
          <label for="exampleInputEmail1" class="form-label">apellido:</label>
          <input class="form-control" type="text" aria-label="default input example" name="apellidos"value="<?php echo$datos['apeEst'] ?>">
        </div>
        <div class="mb-2">
          <label for="exampleInputEmail1" class="form-label">Edad:</label>
          <input class="form-control" type="number" name="Edad"value="<?php echo$datos['Edad'] ?>">

        </div>

        <?php
// Obtén el valor de $tipo_documentos de la base de datos
?>
          <label for="exampleInputEmail1" class="form-label">Tipo de identificacion:</label>

<select class="form-select form-select-sm-mb-3" name="identificacion" id="" required>
    <option value="">Tipos de Identificacion</option>
    <?php
    $select = $link->query('SELECT * FROM tipos_id');

    while ($row = $select->fetch_assoc()) {
        $selected = ($row['idTipo'] == $tipo_documentos) ? 'selected' : '';
        echo "<option value='{$row['idTipo']}' $selected>{$row['descTipo']}</option>";
    }
    ?>
</select>
<div class="mb-2 mt-2">
          <label for="exampleInputEmail1" class="form-label">Numero de identificacion:</label>
          <input class="form-control" type="text" name="t_identificacion" value="<?php echo$datos['idEst'] ?>">

        </div>
        <div class="d-flex flex-row  mb-3 mt-2 ">
        <div class="d-flex flex-row   mt-2 ps-4 align-items-center ">
        <div class="d-flex flex-row   p-2 align-items-center ">

           <label for="" >Jornada:</label>
        </div>
        <select class="form-select form-select-sm-mb-3" name="jornada" id="" required>
    <option value="">Jornada</option>
    <?php
    $seleccion = $link->query('SELECT * FROM jornad');

    while ($select2 = $seleccion->fetch_assoc()) {
        $selected2 = ($select2['idJornada'] == $jornada) ? 'selected' : '';
        echo "<option value='{$select2['idJornada']}' $selected2>{$select2['nomJornada']}</option>";
    }
    ?>
</select>
  </div>
  <div class="d-flex flex-row   mt-2 ps-4  align-items-center ">
<div class="d-flex flex-row   p-2  align-items-center ">

  <label for="" class="">Grado:</label>
</div>

<select class="form-select  " name="grado" id="" required>
    <option value="">Grado</option>
    <?php
    $seleccion3 = $link->query('SELECT * FROM grados');

    while ($select3 = $seleccion3->fetch_assoc()) {
        $selected3 = ($select3['idGrado'] == $grado) ? 'selected' : '';
        echo "<option value='{$select3['idGrado']}' $selected3>{$select3['nomGrado']}</option>";
    }
    ?>
</select>
  </div>
  </div>   
  <div class="d-flex flex-row justify-content-between  ">
          <div class="container">

            <button type="submit" class="btn btn-primary ms-4 " name="actualizarEst">actualizar</button>
          </div>
          <div class="container ">
            <button type="submit" class="btn btn-danger mr-5" name="cancel">Cancelar</button>

          </div>  
      </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
</body>

</html>