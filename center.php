<?php
require('config/config.php');
$center = $_GET['center'];
$consulta = "SELECT * FROM `reviews` WHERE center = '$center';";
$resultado = mysqli_query($conexion,$consulta);
if($resultado == True){

    while($row = $resultado->fetch_array()){
        $user = $row['user'];
        $review = $row['review'];
        require("config/img_cen.php");
        echo "<title>$center</title>";
        echo "<style> div{ width: 500px; height: 100px; background: white; border: 3px solid black; text-align: left; color: black;} </style>";
        echo "<link rel='stylesheet' href='css/centers.css'>";
        echo "<center>";
        echo "<div class='div-review'>";
        echo "From: $user <br>";
        echo "$review";
        echo "</div>";
        echo "</center>";
        echo "<br>";
    
    }
}
?>