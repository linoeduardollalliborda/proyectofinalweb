
<?php include('updatepass.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Actualizando contraseña</title>
    <link rel="shortcut icon" type="img/css" href="../product_images/logo.png">
 
  

</head>
<body>

<body>    <div class="title">
<h2 class="main1"> 
             <ul>
             <li ><a href="index.php"> <img style="margin-top:10px;margin-left:40px;margin-right:20px;" class="img1" src="../product_images/logo.png" width="40px" height="40px"> <a href="index.php" class="navbar-brand">Elegancia y pasión  </a>  </li>   
             </ul>
             </div>
          <div class="contenedor">
          <form action="resetpassword.php" class="formulario" id="formulario" name="formulario" method="post"><pre><br>
          <div class="contenedor-inputs">
          <center><b><h1> NUEVA CONTRASEÑA</h1></b> </center>
          <input required type="text" name="dni" id="dni" placeholder="ingrese DNI registrado, para actualizar">
          <input required type="password" name="password" id="password" placeholder="Nueva contraseña">
          <div class="registrarnuevo>
          <p class="regtext"> EMPEZAR AHORA! <a href="../index.php" >click Aquí</a>!</p>
          </div>
          <center> <button type="submit" class="btn" name="guardar"> ACTUALIZAR </button> </center>
          </div> 
          </form>
          </div>
            <style>
           *{
             margin: 0;
             padding: 0;
              box-sizing: border-box;
            }
             body{
             background: skyblue;
             font-family: sans-serif;
             font-size: 12px;
             }
          .contenedor{
             width: 400px;
              height: 300px;
             display:block;
             margin-left: auto;
             margin-right: auto;
          }
          .title{
            width: 100%;
            height: 80px;
            background: #332F2E;
            color:orange;
            } 
            
            
           .main1{
             text-decoration:none;
            font-family:sans-serif;
            display: inline-block;
            font-size: 2.1em;
            height: 90px;
            cursor: pointer;
             color:orange;
            }    
            a{
              font-weight: bold;
              text-decoration: none;
              color: #3498DB ;
              }
          .contenedor .formulario .contenedor-inputs{
          padding: 30px;
          background: #fff;
          border-radius: 6px 6px 6px 6px;
          }
          .contenedor .formulario input[type="text"],
          .contenedor .formulario input[type="password"]{
          display: block;
          width: 100%;
          margin-bottom: 10px;
          padding:  15px 10px;
          border: none;
          border-bottom: 2px solid #ccc;
          font-family: sans-serif;
          font-size: 16px;
          }
          .contenedor .formulario input[type="text"]:focus{
          border-bottom: 2px solid #246eb9;
          }
          .contenedor .formulario .btn{
              width: 100%;
              text-align: center;
              background: #246eb9;
              color: #fff;
              border: none;
              display: block;
              padding: 15px 10px;
              cursor: pointer;
              border-radius: 6px 6px 6px 6px;
              font-family: sans-serif;
              font-size: 16px;
          }
          .contenedor .formulario .btn:hover{
              background: #4357ad;
          }
          </style>
          </body>
</html>

