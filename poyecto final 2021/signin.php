        <?php 
  

   /* require_once './code/conect.php';
    $conexion = new mysqli($hn, $un, $pw, $db, $port);
    if ($conexion->connect_error) die ("Fatal error");

 
    if (isset($_POST['username'])&&
        isset($_POST['password']))
    {
        $un_temp = mysql_entities_fix_string($conexion, $_POST['username']);
        $pw_temp = mysql_entities_fix_string($conexion, $_POST['password']);

        $query   = "SELECT * FROM usuarios WHERE username='$un_temp'";
        $result  = $conexion->query($query);
        
        if (!$result) die ("Usuario no encontrado");
        elseif ($result->num_rows)
        {
            $row = $result->fetch_array(MYSQLI_NUM);
            $result->close();

            if (password_verify($pw_temp, $row[3])) 
            {
                session_start();
                $_SESSION['nombre']=$row[0];
                $_SESSION['apellido']=$row[1];
               
               
               
                header("location: ./#");// si es correcto direcciona al menu principal del usuario
            }
            else {
                 
                header("location: signin.php?fallo=true");// si falla retorna a la misma pagina
               
            }
        }
        else {
        
     
         header("location: signin.php?fallo=true");// retona a la misma pagina de signin.php
         }

        
         }
          else
         {*/
            echo <<<_END
          <!DOCTYPE html>
          <html lang="es">
          <head>
          <title> Elegancia y pasión</title> 
          </header>
          <body>
          <div class="contenedor">
          <form action="signin.php" class="formulario" id="formulario" name="formulario" method="post"><pre><br>
          <div class="contenedor-inputs">
          <center><p><b><h1> INGRESAR</h1></b> </p></center>
          Usuario  <input required type="text" name="username" placeholder="Correo">
          Password <input required type="password" name="password" placeholder="contraseña">
          
          <div class="registrarnuevo>
          <p class="regtext"> No tienes una cuenta? <a href="./formulario/signup.php" >Registrate Aquí!</a>!</p>
                                  <p class="regtext"> recuperar contraseña: <a href="#" >has click</a>! SALIR =>[<a href="index.html" >HOME]</a></p>
          </div>
          </div>
          <input type="submit" class="btn" name="ingresar" value="INGRESAR">
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
              background-image: url(../img/models/mejores-accesorios.jpg);
             background: #2ADDEA ;
             font-family: sans-serif;
             font-size: 14px;
             }
          .contenedor{
             width: 450px;
              height: 400px;
             display:block;
             margin-left: auto;
             margin-right: auto;
          }
          .contenedor .formulario .contenedor-inputs{
          padding: 40px;
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
              font-size: 20px;
          }
          .contenedor .formulario .btn:hover{
              background: #4357ad;
          }
          </style>
          </body>
          </html>
          _END;
        /*  }

          $conexion->close();

        function mysql_entities_fix_string($conexion, $string)
        {
        return htmlentities(mysql_fix_string($conexion, $string));
        }
        function mysql_fix_string($conexion, $string)
        {
        if (get_magic_quotes_gpc()) $string = stripslashes($string);
        return $conexion->real_escape_string($string);
        }  */
?>

     
 