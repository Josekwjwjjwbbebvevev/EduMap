
<?php
if(isset($_SESSION['EduReview_user'])){
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
        <center><h1>You have an account</h1></center>
        <br><br><br><br>
        <center>
        <a href="http://localhost/EduMap/"><h2>Go to home</h2></a>
        </center>
    </section>
</body>
</html>';
}
else{
    echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an account</title>
    <link rel="stylesheet" href="css/singup.css">
</head>
<body>
    <section class="form-register">
    <h1>Create an account</h1><br>
    <form method="post" action="confirm_singup.php">
        <input class="controls" type="text" name="nick" placeholder="User name">
        <input class="controls" type="password" name="pass" placeholder="Create a password">
        <input class="controls" type="password" name="rpass" placeholder="Repeat password">
        <h3>Doing the account I accept the terms and conditions</h6>
        <input class="botons" type="submit" value="Create" name="submit">
        <a href="login.php"><h2>I have an account? Login</h2></a>
    </form>
    </section>
</body>
</html>';
}
?>