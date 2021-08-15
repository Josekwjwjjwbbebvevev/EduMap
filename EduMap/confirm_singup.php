<?php
require('config/config.php');
$nick = $_POST['nick'];
$pass = $_POST['pass'];
$rpass = $_POST['rpass'];
$terms = $_POST['terms'];
$encrypted_pass = hash('sha512', $pass);
if($pass == $rpass or empty($nick) or empty($pass) or empty($rpass) or isset($_COOKIE['EduReview_user']) or isset($terms)){
    
    $consulta = "INSERT INTO `registro`(`id`, `nick`, `pass`) VALUES ('','$nick','$encrypted_pass');";
    $resultado = mysqli_query($conexion,$consulta);
    echo'
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>You have an account</title>
        <link rel="stylesheet" href="config/err.css">
    </head>
    <body>
    
        <section class="form-register">
            <center><h1>The account has been created</h1></center>
            <br><br><br><br>
            <center>
            <a href="http://localhost/EduMap/"><h2>Go to home</h2></a>
            </center>
        </section>
    </body>
    </html>';
}
if(empty($_COOKIE['EduMap_user'])){
    session_start();
    $_SESSION['EduMap_user'] = "$nick";
    $_SESSION['EduMap_password'] = $pass;
    $_SESSION['session_id'] = session_id();
    $segundosmes = 2629800;
    $user = $_SESSION['EduMap_user'];
    setcookie("EduMap_user", $_SESSION['EduMap_user'], time() + $segundosmes);
    setcookie("EduMap_password", $_SESSION['EduMap_password'], time() + $segundosmes);
}
?>