
<?php
$errors = array();
if(isset($_POST['guardar']))
{
    $db=mysqli_connect("localhost","root","","tienda_alquiler_ternos");
    // Check connection
    if (mysqli_connect_errno())
    {
    echo "No se pudo conectar a MySQL: " . mysqli_connect_error();
    }


    // receive all input values from the form
    $dni1=$_POST['dni'];
	$password = mysqli_real_escape_string($db, $_POST['password']);
    if (empty($password))
	{
		array_push($errors, '<div role="alert">se requiere contraseña</div>');
	}
   // $query = mysqli_query($db,"SELECT * FROM user_info WHERE `user_login`.`id` = 1")
   // or die(mysqli_error($db)); 

   // if (mysqli_num_rows ($query)==1)
   // {


    if (isset($_POST['dni']) && isset($_POST['password']))
    {
       
        $dni1 = mysql_entities_fix_string($db, $_POST['dni']);
        $pw_temp = mysql_entities_fix_string($db, $_POST['password']);

        $password = md5($pw_temp);
       // $query = "INSERT INTO user_info VALUES('$nombre','$apellido','$username', '$password')";



        $query = mysqli_query($db," UPDATE user_info SET `password`='$password' WHERE dni = '$dni1'")
        or die(mysqli_error($db));

    echo '<div class="text-center"><div role="alert">Contraseña cambiada </div> </div>';

       //$result = $db->query($query);
          
       //if (!$result) die ("Falló registro");
     
    // header("location: #");//direccionando para que pueda iniciar sesion con el usuario creado
   }
/*
        if (isset($_POST['dni1']) && isset($_POST['guardar'])){
        $password = md5($password);
        $query3 = mysqli_query($db,"UPDATE user_info SET `password`='$password' WHERE dni = '$dni1'")
        or die(mysqli_error($db));

        echo  '<div class="text-center"><div role="alert">Contraseña cambiada </div> </div>';
    }
    */
}

function mysql_entities_fix_string($db, $string)
          {
          return htmlentities(mysql_fix_string($db, $string));
          }
        function mysql_fix_string($db, $string)
          {
          if (get_magic_quotes_gpc()) $string = stripslashes($string);
          return $db->real_escape_string($string);
          }   
?>
