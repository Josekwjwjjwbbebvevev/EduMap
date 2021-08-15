
<?php
if(isset($_COOKIE['EduMap_user']) or isset($_COOKIE['EduMap_password'])){
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EduMap</title>
        <link rel="stylesheet" href="css/index.css">
        <style>
            h1{
                font-size: 70px;
                color: white;
                text-align: center;
            }
            *{
               font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
            }
            input[type="text"]{
                text-align: center;
                border-radius: .3rem;
                padding: .5rem;
                height: 2rem;
                border: 1px solid gray;
                flex: 5 1 auto;
                margin: .5rem;
                overflow-x: scroll;
                width: 20rem;
            }
            input[type="submit"]{
                border-radius: .3rem;
                padding: .5rem;
                height: 2rem;
                border: 1px solid gray;
                flex: 5 1 auto;
                margin: .5rem;
                width: 15rem;
                background-color: purple;
                text-align: center;
            }
            .sombrero{
                top: 10px;
            }
            h5{
                color: white;
                font-size: 40px;
            }
            a{
                color: black;
            }
            h5{
                text-align: right;
            }
            
    
            
        </style>
    <link rel="icon" href="icon/favicon.ico">    
    </head>
    <body>
    <div class="form-register">
    <h1>Education </h1>
    <h1> map</h1>
    <center>
    </center>
        <center>
        <img src="img/images.png" alt="" width="350px" height="360px" align="center"><br>
        <div style="margin-bottom: 0px;">
    
        </div>
        </center>
        <br><br><br>
        <center>
        <form action="search.php" method="get">
        <input type="text" name="search" placeholder="Search a education center">
        <br>
        <input type="submit" value="search it" name="search_it">
        <br><br>
        </form>
        </center>
        </div>
        <div id="tooltip" class="hidden style-scope tp-yt-paper-tooltip">
      
      <!-- ㅤ -->
    </div>
        </body>
    </html>';
}
else{
    require('config/nocuenta.php');
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EduMap</title>
        <link rel="stylesheet" href="css/index.css">
        <style>
            h1{
                font-size: 70px;
                color: white;
                text-align: center;
            }
            *{
               font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
            }
            input[type="text"]{
                text-align: center;
                border-radius: .3rem;
                padding: .5rem;
                height: 2rem;
                border: 1px solid gray;
                flex: 5 1 auto;
                margin: .5rem;
                overflow-x: scroll;
                width: 20rem;
            }
            input[type="submit"]{
                border-radius: .3rem;
                padding: .5rem;
                height: 2rem;
                border: 1px solid gray;
                flex: 5 1 auto;
                margin: .5rem;
                width: 15rem;
                background-color: purple;
                text-align: center;
            }
            .sombrero{
                top: 10px;
            }
            h5{
                color: white;
                font-size: 40px;
            }
            a{
                color: black;
            }
            h5{
                text-align: right;
            }
            
    
            
        </style>
    <link rel="icon" href="icon/favicon.ico">    
    </head>
    <body>
    <div class="form-register">
    <h1>Education </h1>
    <h1> map</h1>
    <center>
    </center>
        <center>
        <img src="img/images.png" alt="" width="350px" height="360px" align="center"><br>
        <div style="margin-bottom: 0px;">
    
        </div>
        </center>
        <br><br><br>
        <center>
        <form action="search.php" method="get">
        <input type="text" name="search" placeholder="Search a education center">
        <br>
        <input type="submit" value="search it" name="search_it">
        <br><br>
        </form>
        </center>
        </div>
        <div id="tooltip" class="hidden style-scope tp-yt-paper-tooltip">
      
      <!-- ㅤ -->
    </div>
        </body>
    </html>';
}
?>