<?php



$search = $_GET['search'];



?>
<?php
if(isset($_COOKIE['EduMap_user']) or isset($_COOKIE['EduMap_password'])){
echo "<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Search</title>
    <link rel='stylesheet' href='index.css'>
    <style type='text/css'>
    *{
           font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    input[type='text']{
            text-align: center;
            border-radius: .3rem;
            padding: .5rem;
            height: 2rem;
            border: 1px solid gray;
            flex: 5 1 auto;
            margin: .5rem;
            overflow-x: scroll;
            width: 30rem;
        }
    body{
        background-color: rgb(82, 82, 246);
        color: white;
    }
    h1{
        font-size: 60px;
    }    
    </style>
</head>
<body>
    <center>
    <h1>EduMap</h1>
    <h5><a href='http://localhost/EduMap'><img src='img/download.png' width='100px'></a></h5>
    <form method='GET' action=''>   
   <input type='text' placeholder='$search' name='search'>
   <br><input type='submit' value='search it' name='search_it'>
   </form>
    </center>
</body>
</html>
";
}
else{
    require ('config/nocuenta.php');
    echo "<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Search</title>
    <link rel='stylesheet' href='index.css'>
    <style type='text/css'>
    *{
           font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    input[type='text']{
            text-align: center;
            border-radius: .3rem;
            padding: .5rem;
            height: 2rem;
            border: 1px solid gray;
            flex: 5 1 auto;
            margin: .5rem;
            overflow-x: scroll;
            width: 30rem;
        }
    body{
        background-color: rgb(82, 82, 246);
        color: white;
    }
    h1{
        font-size: 60px;
    }    
    </style>
</head>
<body>
    <center>
    <h1>EduMap</h1>
    <h5><a href='http://localhost/EduMap'><img src='img/download.png' width='100px'></a></h5>
    <form method='GET' action=''>   
   <input type='text' placeholder='$search' name='search'>
   <br><input type='submit' value='search it' name='search_it'>
   </form>
    </center>
</body>
</html>
";
}
require('config/config.php');
$consulta = "SELECT * FROM `edu_cen` WHERE name LIKE '%$search%' ORDER BY id DESC";
$resultado = mysqli_query($conexion,$consulta);
if($resultado == True){
    while($row = $resultado->fetch_array()){
        require('config_search.php');
    }
}
?>