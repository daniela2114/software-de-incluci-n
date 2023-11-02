<?php
$db=mysqli_connect('localhost','root','','niños de inclusion');
if($db){
    echo"error";
    exit;
}
echo"conexion correcta";