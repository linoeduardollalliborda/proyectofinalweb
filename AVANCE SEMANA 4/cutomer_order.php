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
		<title>ELEGANCIA Y PASIÓN</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
	</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
			<li ><a href="#"> <img style="margin-top:5px;margin-left:0px;margin-right:20px;" class="img1" src="product_images/epis.png" width="40px" height="40px"> <a href="#" class="navbar-brand">Elegancia y pasión  </a></li>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-modal-window"></span> Producto</a></li>
			</ul>
		</div>
	</div>
	
</body>
</html>
















































