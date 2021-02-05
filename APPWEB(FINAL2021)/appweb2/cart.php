<?php

session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>	Elegancia y pasión </title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
                <link rel="shortcut icon" type="img/css" href="product_images/logo.png">
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
	</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navegación</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<li ><a href="profile.php"> <img style="margin-top:5px;margin-left:0px;margin-right:20px;" class="img1" src="product_images/logo.png" width="40px" height="40px"> <a href="profile.php" class="navbar-brand">Elegancia y pasión  </a></li>

			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span> Producto</a></li>
			</ul>
		</div>
	</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="cart_msg">
				<!--Cart Message--> 
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Carro de productos para alquilar</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-2 col-xs-2"><b>Acción</b></div>
							<div class="col-md-2 col-xs-2"><b>Imagen del producto</b></div>
							<div class="col-md-2 col-xs-2"><b>nombre del producto</b></div>
							<div class="col-md-2 col-xs-2"><b>Cantidad</b></div>
							<div class="col-md-2 col-xs-2"><b>Precio del producto</b></div>
							<div class="col-md-2 col-xs-2"><b>Precio en S/.</b></div>
						</div>
						<div id="cart_checkout"></div>
						 
						</div> 
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
			
		</div>
</body>	
</html>
















		