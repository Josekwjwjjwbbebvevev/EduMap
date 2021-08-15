<?php
require('config/config.php');
$consulta = "SELECT * FROM `edu_cen` WHERE name LIKE '$center' ORDER BY id DESC";
$resultado = mysqli_query($conexion,$consulta);
if($resultado == True){
    while($row = $resultado->fetch_array()){
        require('config/config_cen2.php');
    }
}
?>