<!DOCTYPE html>

<?php
	session_start();
?>
<html>
	<head>
		<link href="./css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<link href="./css/style.css" rel="stylesheet" id="bootstrap-css">
		<script src="./css/bootstrap.min.js"></script>
		<script src="./css/jquery-1.11.1.min.js"></script>
		<title> Inicio </title>
		
		<meta charset="utf-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
	</head>
	<body>
		<div class="container-fluid">
		<nav class="navbar navbar-default sidebar" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					  <a class="navbar-brand" href="Inicio.html">E-VAL</a>
				</div>
				<div class="collapse.in navbar-collapse" id="bs-sidebar-navbar-collapse-1" >
				  <ul class="nav navbar-nav">
					<li class="active"><a href="Inicio.html">Inicio<span style="font-size:16px;padding-left:5px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
					<li ><a href="Menus.html">Datos de empleado <span style="font-size:16px;padding-left:5px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>        
					<li ><a href="Desempenno.html">Desempe&ntilde;o<span style="font-size:16px;padding-left:5px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a></li>    
					</ul>
				</div>
			</div> 
		</nav>
		</div>
		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="well well-sm">
							<div class="row">
								<div class="col-sm-6 col-md-4">
									<img src="profile.png" alt="" class="img-rounded img-responsive" />
								</div>
								<div class="col-sm-6 col-md-8">
									<h4>Juan Perez</h4>
									<small>Central, Alajuela <i class="glyphicon glyphicon-map-marker"></i></small>
									<p>
										<i class="glyphicon glyphicon-envelope"></i>juan.perez@example.com
										<br />
										<i class="glyphicon glyphicon-globe"></i><a href="http://www.compannia.com">www.compannia.com</a>
										<br />
										<i styleclass="glyphicon glyphicon-gift"></i>June 02, 1988
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
		<div class="container">
    		<div class="row">
				<div class="col-md-12">
					<div class="page-header">
					  <h1>Evaluaciones de desempe&ntilde;o</h1>
					</div>
					<div style="display:inline-block;width:100%;overflow-y:auto;">
					<ul class="timeline timeline-horizontal">
						<li class="timeline-item">
							<div class="timeline-badge primary"><i class="glyphicon glyphicon-check"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Enero</h4>
									<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 10-Ene-2018 10:00</small></p>
								</div>
								<div class="timeline-body">
									<p>Total de puntos:100</p>
									<p>Califici&oacute;n: Top Performer</p>
								</div>
							</div>
						</li>
						<li class="timeline-item">
							<div class="timeline-badge success"><i class="glyphicon glyphicon-check"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Febrero</h4>
									<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 10-Feb-2018 14:00</small></p>
								</div>
								<div class="timeline-body">
									<p>Total de puntos:125</p>
									<p>Califici&oacute;n: Top Performer</p>
								</div>
							</div>
						</li>
						<li class="timeline-item">
							<div class="timeline-badge info"><i class="glyphicon glyphicon-check"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Marzo</h4>
									<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 10-Mar-2018 11:25</small></p>
								</div>
								<div class="timeline-body">
									<p>Total de puntos:114</p>
									<p>Califici&oacute;n: Top Performer</p>
								</div>
							</div>
						</li>
						<li class="timeline-item">
							<div class="timeline-badge warning"><i class="glyphicon glyphicon-check"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Abril</h4>
									<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>
									<?php if(isset($_SESSION['fechaEvaluacion'])){
										echo $_SESSION['fechaEvaluacion'];
									}else{
										echo "Aun no hay evaluacion";
									}?></small></p>
								</div>
								<div class="timeline-body">
									<p>Total de puntos: <?php if(isset($_SESSION['resultado'])){
										echo $_SESSION['resultado'];
									}else{
										echo "Aun no hay evaluacion!";
									}
									?></p>
									<p>Califici&oacute;n: <?php if(isset($_SESSION['resultado'])){
										if($_SESSION['resultado']>=60){
											echo "Top Performer";
										}elseif($_SESSION['resultado']>30 && $_SESSION['resultado']<60 ){
											echo "Regular";
										}else{
											echo "Poor Performance";
										}
									}else{
										echo "Aun no hay evaluacion!";
									}
									?></p>
								</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
				</div>
			</div>
	<body>
</html>