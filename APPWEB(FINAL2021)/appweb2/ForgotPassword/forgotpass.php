
<?php
error_reporting(0);

$errors ='';

if($_POST['submit']=='Send')
{ 
    $email=$_POST['email'];
    $password = $_GET['passsword'];
    
    $con=mysqli_connect("localhost","root","","tienda_alquiler_ternos");
   // require_once 'db.php';
    //$conexion = new mysqli($servername, $username, $password,$db);
    //if ($conexion->connect_error) die ("Fatal error");
    // Check connection
    if (mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $query = mysqli_query($con,"SELECT * FROM user_info WHERE email='$email'")
    or die(mysqli_error($con));
    
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    //smtp settings
    $mail->isSMTP(); // send as HTML
    $mail->Host = "smtp.gmail.com"; // SMTP servers
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->Username = "eleganciaypasion2021@gmail.com"; // Your mail  
    $mail->Password = 'elegancia2021'; // Your password mail 
    $mail->Port = 587; //specify SMTP Port
    $mail->SMTPSecure = 'tls';                               
    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress($email); // Your mail
    $mail->addReplyTo($_POST['email'],$_POST['name']);
    $mail->isHTML(true);
    $mail->Subject='Form Submission:' .$_POST['subject'];
    $code= rand(100,999);
    mail($email, "Send Code", $message);
   
    $mail->Body= $message="LINK DE REACTIVACION DE CONTRASEÑA:http://localhost/appweb2/ForgotPassword/resetpassword.php?email=code=$code";

    if (mysqli_num_rows ($query)==1)
    {
        if($mail->send())
        {
          $correct= '<center><div role="alert"> Enviado codigo de reactivación, puede verificar su correo !</div></center><br>';
        }
        $query2 = mysqli_query($con, "UPDATE user_info SET password ='$password' WHERE email='$email'")
        or die(mysqli_error($con)); 
        }
        else
        {
       $errors = '<center><div role="alert">Lo sentimos, el correo no existe en nuestra base de datos ! </div></center><br>';
    }
}

?>

<!DOCTYPE html>
          <html lang="es">
          <head>
          <title>Recuperacion de contraseña</title> 

  <link rel="shortcut icon" type="img/css" href="../product_images/logo.png">
  <link  rel="stylesheet"href="css/bootstrap-theme.css" />
 
          </header>
          <body>
          <div class="title">
<h2 class="main1"> 
             <ul>
             <li ><a href="index.php"> <img style="margin-top:10px;margin-left:40px;margin-right:20px;" class="img1" src="../product_images/logo.png" width="40px" height="40px"> <a href="../index.php" class="navbar-brand">Elegancia y pasión  </a>  </li>   
             </ul>
             </div><br>
          <div class="contenedor">
          <form action="forgotpass.php" class="formulario" id="formulario" name="formulario" method="post"><pre><br>
          <?= $errors?>
          <?= $correct?>
          <div class="contenedor-inputs">
          <center><p><b><h1>RECUPERAR PASSWORD</h1></b> </p></center>
            
            <center><input type="email"name="email" id="email"  placeholder="Email"></center> 
          <div class="registrarnuevo>
          <p class="regtext"> No estas seguro? <a href="../index.php" >SALIR</a></p>
          </div>
         
          <center><button type="submit" class="btn" name="submit" value="Send">Enviar código al correo</button></center> 
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
             font-size: 14px;
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
          .contenedor .formulario input[type="email"]
          {
          display: block;
          width: 100%;
          margin-bottom: 10px;
          padding:  15px 10px;
          border: none;
          border-bottom: 2px solid #ccc;
          font-family: sans-serif;
          font-size: 16px;
          }
          .contenedor .formulario input[type="email"]:focus{
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








