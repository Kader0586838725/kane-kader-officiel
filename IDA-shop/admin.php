<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ADMINISTRATION DU SITE</title>

	<!-- lien bootstrap -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>
<body>
	 <header class="navbar navbar-inverse">
	 	 <div class="container-fluid">
	 	 	 <div class="navbar-header">
	 	 	 	<a class="navbar-brand">IDA-SHOP</a>
	 	 	 	<button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
	 	 	 		<span class="sr-only">Toggle navigation</span>
	 	 	 		<span class="icon-bar"></span>
	 	 	 		<span class="icon-bar"></span>
	 	 	 		<span class="icon-bar"></span>
	 	 	 	</button>
	 	 	 </div>
	 	 	 <!-- bloc menu -->
	 	 	 <div class="collapse navbar-collapse" id="menu">
	 	 	 	  <ul class="nav navbar-nav">
	 	 	 	  	  <li >
	 	 	 	  	  	 <a href="">Se deconnecter</a>
	 	 	 	  	  </li>
	 	 	 	  </ul>
	 	 	 </div>
	 	 </div>
	 </header>
	 <div class="container">
	 	<div class="row">
	 		<div class="col-md-10">
	 			<h1>
	 				<i class="glyphicon glyphicon-cog"></i>
	 				Tableau de bord <small>Gestion du site </small>
	 			</h1>
	 		</div>
	 		<div class="col-md-2">
	 			<div class="dropdown creation">
	 				<button class="dropdown-toggle btn btn-default">
	 					Creation  de contenu
	 					<b class="caret"></b>
	 				</button>
	 				<ul class="dropdown-menu" aria-labelledbay="Habib">
	 					<li>
	 						<a href="#">Produits</a>
	 					</li>
	 						<li>
	 						<a href="#">Visiteurs</a>
	 					</li>
	 				</ul>
	 			</div>
	 		</div>
	 	</div>
	 </div>
	 <div class="container-fluid">
	 	<ol class="breadcrumb">
	 		<li>Tableau de bord</li>
	 		<li>Les produits</li>
	 	</ol>
	 </div>
	 <div class="container-fluid">
	 	<div class="row">
	 	<!-- Côté gauche -->
	 		<div class="col-md-3">
	 			<ul class="list-group">
	 				<li class="list-group-item main-color-bg">
	 					<a href="#" class="active"> 
                          <i class="glyphicon glyphicon-home"></i>
                           Accueil
	 					</a>
	 				</li>
	 				<li class="list-group-item ">
	 					<a href="#" class=""> 
                          <i class="glyphicon glyphicon-list"></i>
                           Produits
	 					</a>
	 				</li>
	 				<li class="list-group-item ">
	 					<a href="#" class=""> 
                          <i class="glyphicon glyphicon-user"></i>
                           Clients
	 					</a>
	 				</li>
	 			</ul>
	 		</div>
	 		<!-- Côté droit -->
	 		<div class="col-md-9">
	 			<div class="panel panel-default">
	 				<div class="panel-heading">
	 					<h3 class="panel-title">
	 						<i class="glyphicon glyphicon-list"></i>
	 						Liste des produits
	 					</h3>
	 				</div>
	 				<div class="panel-body">
	 					<table class="table table-striped">
	 						<thead>
	 							<tr>
	 								<th>N°</th>
	 								<th>Désignation</th>
	 								<th>Prix</th>
	 								<th>Quantité</th>
	 								<th>Actions</th>

	 							</tr>
	 						</thead>
	 						<tbody>
	 							<td>1</td>
	 							<td>Le produit</td>
	 							<td>100000f</td>
	 							<td>5</td>
	 							<td>
	 								<a  href="#" class="btn-primary btn">
	 								 <i class="glyphicon glyphicon-edit"></i>
	 								  Modifier
	 								</a>
	 								<a  href="#" class="btn-danger btn">
	 								 <i class="glyphicon glyphicon-trash"></i>
	 								  Supprimer
	 								</a>
	 							</td>
	 						</tbody>
	 					</table>
	 				</div>
	 			</div>
	 		</div>
	 	</div>
	 </div>

	<script src="assets/js/jquery.js"></script> 
	<script src="assets/js/bootstrap.min.js"></script> 
</body>
</html>