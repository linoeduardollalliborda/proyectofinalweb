<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>REGISTRARSE EN ELEGANCIA Y PASIÓN</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
                <link rel="shortcut icon" type="img/css" href="product_images/logo.png">
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
	</head>
<body style="background-color:#2BD3DF;">



	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
			<li ><a href="#"> <img style="margin-top:5px;margin-left:0px;margin-right:20px;" class="img1" src="product_images/logo.png" width="40px" height="40px"> <a href="#" class="navbar-brand">Elegancia y pasión  </a></li>

			</div>
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span> Producto</a></li>

					<!--start session (iniciar)-->
			<li style="background-color:#30E9AD ;margin-left:10px;pading-top:10px;pading-bottom:10px; border-radius:4px 4px 4px 4px;" ><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>  INICIAR SESION </a>
					<ul class="dropdown-menu">
						<div style="width:400px;">
							<div class="panel panel-primary">
								<div class="panel-heading">Iniciar sesión </div>
								<div class="panel-heading">
									<label for="email">Email</label>
									<input type="email" class="form-control" id="email" required/>
									<label for="email">Password</label>
									<input type="password" class="form-control" id="password" required/>
									<p><br/></p>
									<a href="#" style="color:white; list-style:none;"> Password Olvidado</a><input type="submit" class="btn btn-success" style="float:right;" id="login" value="Login">
								</div>
								<div class="panel-footer" id="e_msg"></div>
							</div>
						</div>
					</ul>
				</li>

			</ul>
		</div>
	</div>


	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading"> FORMULARIO DE REGISTRO DE LOS CLIENTES</div>
					<div class="panel-body">
					
					<form method="post">
						<div class="row">
							<div class="col-md-6">
								<label for="f_name">Nombre</label>
								<input type="text" id="f_name" name="f_name" class="form-control">
							</div>
							<div class="col-md-6">
								<label for="f_name">Apellidos</label>
								<input type="text" id="l_name" name="l_name" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="text" id="email" name="email" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="password">password</label>
								<input type="password" id="password" name="password" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="repassword">Repetir Password</label>
								<input type="password" id="repassword" name="repassword" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="mobile">Celular</label>
								<input type="text" id="mobile" name="mobile" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address1">Dirección </label>
								<input type="text" id="address1" name="address1" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="region">Región</label>
								<input type="text" id="region" name="region" class="form-control">
							</div>
                         </div>
						<div class="row">
						<div class="col-md-12">
								<label for="dni">DNI</label>
								<input type="text" id="dni" name="dni" class="form-control">
						  </div>
						</div>
						<p><br/></p>
						<div class="row">
							<div class="col-md-12">
								<input style="float:right;" value="Sign Up" type="button" id="signup_button" name="signup_button"  class="btn btn-success btn-lg">
							</div>
						</div>
						
					</div>
					</form>
					<div class="panel-footer"> </div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
</html>



















