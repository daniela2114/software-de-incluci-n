<?php
include("CRUD_Admin/eliminar.php");
include_once("conexion/conectar.php");


?>


<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="css/libreria.css">
        <link rel="stylesheet" href="css/stilo.css">

        <link rel="stylesheet" href="css/libreria2.css">
    <title>Document</title>
</head>
<header class="cabeza">
      

<div class="logo">

        <div class="img">
          <img src="img/logo.png" alt="" srcset="">
        </div> 
        <div class="tituloo">
        <a href=""><h5 >I.E Ricardo Borrero Alvarez</h5> </a>
          
        </div>
     </div>

        <nav class="navbar">
            <ul class="nav-list">
                
                <li class="dropdown">
        <a href="#">Operaciones</a>
        <div class="dropdown-content">
          <a href="http://localhost/Angelita/inicio.php">Estudiante</a>
          <a href="http://localhost/Angelita/datatable.php">Usuarios</a>
        </div>
      </li>
                <li><a  onclick="return salir()"  href="salir.php">Salir</a></li>
            </ul>
        </nav>
    </header>

<body>
<?php
  session_start();
?>
  <?php echo"<h1 ><i class='fa-solid fa-user-tie'></i> ". $_SESSION['usuario']." ".$_SESSION['apellidos']."</h1>";?>
  <h2 class="text-center mt-2">Estudiantes</h2>
  <a href="http://localhost/Angelita/regisEst.php"class="btn btn-warning ms-3">Registro Estudiante</a>
  <div class="continer table-responsive table-bordered p-3 border border-dark rounded mt-2 m-3">
    <table id="example" class="responsive table table-striped table-bordered mt-4" style="width:100%">
      <thead class="table-dark">
        <tr>
            <th >nombre</th>
                <th>apellido</th>
                <th>Jornada</th>
                <th>Tipo de indentificacion</th>
                <th>Numero de identificacion</th>
                <th>Grado</th>
                <th>Edad</th>
                <th>Operaciones P I A R</th>
              </tr>
          </thead>
        
          <tbody>
         <?php
              $sql=$link->query("SELECT e.nomEst,e.apeEst,e.Edad,e.idEst,(e.idGrado) AS GRADO,(G.nomGrado),(e.idTipo)AS identificacion,(T.descTipo),(e.idJornada) AS idJornada,(j.nomJornada) AS jornada
              FROM estudiantess e
              INNER JOIN jornad j 
              ON e.idJornada=j.idJornada
              INNER JOIN tipos_id T 
              ON e.idTipo=T.idTipo
              INNER JOIN grados g
              ON e.idGrado=G.idGrado;");


              
              
              while($resultado=$sql->fetch_array()){
            ?>
            <td>
              <?php echo $resultado['nomEst']?>
            </td>
            <td>
                <?php echo $resultado['apeEst']?>
            </td>
            <?php
            //   $sql2=$link->query("SELECT * FROM jornad");
            //   while($resultado2=$sql2->fetch_array()){
              ?>
            <td>
              
                <?php echo $resultado['jornada']  
               ?>
            </td>
            <?php
            //   }
            ?>
             <td>
                 <?php echo $resultado['descTipo']?>
              </td>
              <td>
                 <?php echo $resultado['idEst']?>
              </td>
               <td>
                  <?php echo $resultado['nomGrado']?>
              </td>
              <?php
              /* $sql3=$link->query("SELECT * FROM rol");
              while($resultado3=$sql3-> fetch_array()){ */
            ?>
           
               <?php
            //  } 
            ?>
            <td>
            <?php
             echo$resultado['Edad']
            ?>
            </td>
            <td>
              <a href="CRUD_estudiante/actulizarEstudiante.php?idEst=<?php echo $resultado['idEst']  ?>"class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
              <!-- declara una variable del id de Estudiante y lo deberia mandar a la pagina del formulario para llenarlo pero de momento estoy mirando de como generar el pdf en el proyecto  -->
              <a href="pdf/pdf.php?idEst=<?php echo $resultado['idEst']  ?>"class="btn btn-success"><i class="fas fa-file-pdf"></i>
            </a>
            <a onclick="return eliminar2()" href="inicio.php?idEliminar2=<?php echo $resultado['idEst']  ?>"  class="btn btn-danger" ><i class="fas fa-trash"></i>
          </a>
          
          
        </td>
      </tr>
      <?php
             }

            ?>
        </tbody>

        
        
        
        
      </table>
    </div>  
  </div>

      
  </body>
  
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="jss/eliminar.js"></script>
  <script src="jss/salir.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/eef00a1c74.js" crossorigin="anonymous"></script>
  <script>
       
        $(document).ready(function() {
    $('#example').DataTable({
      language: {
        "decimal": "",
        "emptyTable": "No hay datos",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
        "infoEmpty": "Mostrando 0 a 0 de 0 registros",
        "infoFiltered": "(Filtro de MAX total registros)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ registros",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "No se encontraron coincidencias",
        "paginate": {
          "first": "",
          "last": "",
          "next": "",
          "previous": ""
        },
        "aria": {
          "sortAscending": ": Activar orden de columna ascendente",
          "sortDescending": ": Activar orden de columna desendente"
        }
      }
    });

  });
  
    </script>

</html>















<script>


<script>