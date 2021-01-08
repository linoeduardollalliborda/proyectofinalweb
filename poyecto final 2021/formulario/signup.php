<?php
// CÓDIGOS COMENTADA TEMPORALMENTE, PERO MAS ADELANTE SE PODRÁ ADECUAR LA CONEXIÓN A LA BASE DE DATOS MYSQL. ESTE COMETARIO ES POR SI EL -
//PROFESOR QUIERE EJECUTAR EN EL NAVEGADOR, PARA QUE NO SE PRESENTE ALGÚN ERROR AL EJECUTAR./// ...importante !
  /*  require_once 'conect.php';
    $conexion = new mysqli($hn, $un, $pw, $db, $port);
    if ($conexion->connect_error) die ("Fatal error");

     

    if (isset($_POST['username']) && isset($_POST['password']))
    {
        $nombre = mysql_entities_fix_string($conexion, $_POST['nombre']);
        $apellido = mysql_entities_fix_string($conexion, $_POST['apellido']);
        $dni = mysql_entities_fix_string($conexion, $_POST['dni']);
        $correo = mysql_entities_fix_string($conexion, $_POST['username']);
        $telefono = mysql_entities_fix_string($conexion, $_POST['telefono']);
        $pw_temp = mysql_entities_fix_string($conexion, $_POST['password']);
        $password = password_hash($pw_temp, PASSWORD_DEFAULT);
        $query = "INSERT INTO usuarios VALUES('$nombre','$apellido','$dni', $correo, $telefono, '$password')";

      
        
 

       $result = $conexion->query($query);
          
        if (!$result) die ("Falló registro");
     
     header("location: ../signin.php");//direccionando para que pueda iniciar sesion con el usuario creado
    }
    else
    {*/
        echo <<<_END
             <head>
             <title> Elegancia y pasión</title> 
             </header>
             <div class="contenedor">
             <form action="signup.php" class="formulario" id="formulario" name="formulario" method="post"><pre>
             <div class="contenedor-inputs">
             <center><p><b><h2> REGISTRATE </h2></b> </p></center>
           Nombre  <input required type="text" name="nombre" placeholder="Nombre">
           Apellido  <input required type="text" name="apellido" placeholder="Apellidos">
           DNI      <input required type="text" name="dni" placeholder="número de DNI">
           Correo  <input required type="text" name="username" placeholder="Correo">
           Password <input required type="password" name="password" placeholder="contraseña">
           telefono <input required type="text" name="telefono" placeholder="número de telefono">
                 <input type="hidden" name="reg" value="yes"><div class="terminos">
                 <input required type="checkbox" name="terminos" id="terminos">  Acepto Terminos y Condiciones
                  </div>
                  <p class="regtext"> Ya tienes una cuenta? <a href="../signin.php" >Ingresar Aquí!</a>!  SALIR =>[<a href="../index.html" >HOME]</a></p>
                 <input type="submit" class="btn" name="registrarse" value="REGISTRAR">
                 </div>
             </form>
             </div>
           <style>
          *{
            margin: 0;
            padding: 0;
            }
            body{
            background: #2ADDEA;
            font-family: sans-serif;
            font-size: 13px;
            }
          .contenedor{
           width: 500px;
           height: 420px;
           display:block;
           margin-left: auto;
           margin-right: auto;
           }
          .contenedor .formulario .contenedor-inputs{
            padding: 20px;
            background: #fff;
            border-radius: 6px 6px 6px 6px;
            }
            
            .contenedor .formulario input[type="text"],
            .contenedor .formulario input[type="password"]{
            display: block;
            width: 100%;
            margin-bottom: 10px;
            padding:  10px 5px;
            border: none;
            border-bottom: 2px solid #ccc;
            font-family: sans-serif;
            font-size: 13px;
            }
            .contenedor .formulario input[type="text"]:focus{
            border-bottom: 2px solid #246eb9;
            }
            .contenedor .formulario .terminos{
                display:inline-block;
                color: orange;
                font-family: sans-serif;
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
                font-size: 20px;
            }
            .contenedor .formulario .btn:hover{
                background: #4357ad;
            }
            </style>
          _END;
         /*  }
         function mysql_entities_fix_string($conexion, $string)
          {
          return htmlentities(mysql_fix_string($conexion, $string));
          }
        function mysql_fix_string($conexion, $string)
          {
          if (get_magic_quotes_gpc()) $string = stripslashes($string);
          return $conexion->real_escape_string($string);
          }   */
?>