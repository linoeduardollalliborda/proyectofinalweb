<?php 
	require_once 'db.php';
    $conexion = new mysqli($servername, $username, $password,$db);
    if ($conexion->connect_error) die ("Fatal error");
	 

    if (isset($_POST['dni1']) && isset($_POST['guardar'])){ 
        $dni1 = mysql_entities_fix_string($conexion, $_POST['dni1']);
        $email2 = mysql_entities_fix_string($conexion, $_POST['email2']);
        $mobile2 = mysql_entities_fix_string($conexion, $_POST['mobile2']);
        $address2 = mysql_entities_fix_string($conexion, $_POST['address2']);
        $region2 = mysql_entities_fix_string($conexion, $_POST['region2']);
        

        
        $query = " UPDATE user_info SET email='$email2',mobile='$mobile2',address1='$address2',region='$region2' WHERE dni ='$dni1' "; 
      
        
 
       $result = $conexion->query($query);
          
        if (!$result) die ("Falló registro");
     
     header("location: profile.php"); 
    }
    else
    {   
        echo <<<_END
             <div class="title">
             <h2 class="main2"> 
             <ul>
             <li ><a href="index.php"> <img style="margin-top:10px;margin-left:40px;margin-right:20px;" class="img1" src="product_images/epis.png" width="40px" height="40px"> <a href="profile.php" class="navbar-brand">Elegancia y pasión  </a>  </li>   
             </ul></div>
             <div class="contenedor">
             <form action="update.php" class="formulario" id="formulario" name="formulario" method="post"><pre>
             <div class="contenedor-inputs">
              <div class="titulo1"> <center><p><h3> "INDIQUE DNI REGISTRADO PARA ACTUALIZAR EL REGISTRO"</h3></p></center></<div>
                  <label for="dni">DNI</label>
                  <input required type="text" id="dni1" name="dni1" class="form-control">
                  <center><p><h3> " Actualizar datos: "</h3></p></center>
                  <label for="email2">Email</label>
                  <input required type="text" id="email2" name="email2" class="form-control">
                  <label required for="mobile2">Celular</label>
                  <input type="text" id="mobile2" name="mobile2" class="form-control">
                  <label for="address2">Dirección </label>
                  <input required type="text" id="address2" name="address2" class="form-control">
                  <label for="region2">Región</label>
                  <input required type="text" id="region2" name="region2" class="form-control"><br><br>
                  <input style="float:right; margin-right:60px;    cursor: pointer;  width: 27%; height: 45px; font-size: 1.1em;border-radius:4px 4px 4px 4px;" value="Actualizar y cerrar" type="submit" name="guardar" class="form-control1"> <li class="bottonsalir"><a class="textout" href="index.php">  SALIR  </a> </li>
            </form>
             </div>
           <style>
           .title{
            width: 100%;
            height: 80px;
            background: #332F2E;
            
            } 
            
            a{
              font-weight: bold;
              text-decoration: none;
              color: #3498DB ;
              }
           .main2{
             text-decoration:none;
            font-family:sans-serif;
            display: inline-block;
            font-size: 2.1em;
            height: 90px;
            cursor: pointer;
            }
          .bottonsalir{
           padding-top:10px;
           list-style:none;
           float:left;
           margin-left:60px;
           background-color:orange;
           cursor: pointer; 
           width: 27%;
           height: 45px; 
           font-size: 1.5em;
           border-radius:4px 4px 4px 4px;
           text-align:center;
           border: 2px solid;
          }
          .bottonsalir .textout{
          padding-top:100px;
          color:black;
          text-align:center;
          }
          *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            }
            body{
            background: skyblue;
            font-family: sans-serif;
             
            }
          .contenedor{
           width: 600px;
           height: 350px;
           display:block;
           margin-left: auto;
           margin-right: auto;
           }
          
          .contenedor .formulario .contenedor-inputs{ 
            margin-left:auto;
            margin-right:auto;
            padding: 6px;
            background: #fff;
            border-radius: 6px 6px 6px 6px;
            }
            
            .contenedor .formulario input[type="text"]{
            display: inline-block;
            width: 80%;
            margin-bottom: 10px;
            padding:  15px 10px;
            border: none;
            border-bottom: 2px solid #ccc;
            font-family: sans-serif;
            font-size: 10px;
            }
            .contenedor .formulario input[type="text"]:focus{
            border-bottom: 2px solid #246eb9;
            }
                                 
           
           .bottonsalir:hover
           {
           background-color: #A9EE1D ;
           border-color: blue;
           }
           .form-control1{
            background-color: #F2DD15 ;
            font-size: 2.5em;
            
           }
           .form-control1:hover{
             cursor:pointer;
             background-color: #15BEF2 ;
             border-color: blue;
           }
          
            </style>
          _END;
           }
         function mysql_entities_fix_string($conexion, $string)
          {
          return htmlentities(mysql_fix_string($conexion, $string));
          }
        function mysql_fix_string($conexion, $string)
          {
          if (get_magic_quotes_gpc()) $string = stripslashes($string);
          return $conexion->real_escape_string($string);
          }   
?>