<?php
$user = $_POST['username'];
$password = $_POST['password'];
$segundosmes = 2629800;
setcookie("EduMap_user", $user, time() + $segundosmes);
setcookie("EduMap_password", $password, time() + $segundosmes);
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
?>