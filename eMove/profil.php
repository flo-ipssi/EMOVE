<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>eMove - Location de voiture et scooter</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" >
	<link rel="stylesheet" href="css/font-awesome.min.css" >
	<link rel="stylesheet" href="css/owl.carousel.min.css"> 
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<script src="js/jquery-3.3.1.min.js"></script>

</head>
<body>
	<header>
		<nav  class="container">
	      <div class="row">
	        <div class="col-sm-2">
	          <a href="/"><img src="img/logo.png" /></a>
	        </div>
	        <div class="col-sm-6">
	          <form>
	            <div class="form-group row">
	              <div class="col-sm-12">
	                <input type="text" class="form-control-plaintext bar_search" placeholder="Search..." name="search">
	              </div>
	            </div>
	          </form>
	        </div>
	        <div class="col-sm-4">
	          <ul>
	            <!-- <li><button type="button"  data-toggle="modal" data-target="#insription">Inscription</button></li>
	            <li> | </li>
	            <li><button type="button"  data-toggle="modal" data-target="#connexion">Connexion</button></li>
	            <li><a href="#"><img src="img/user.png" alt="" /></a></li> -->
	            <li><a href="#">Véhicule</a></li>
	            <li class="nav-item dropdown">
	              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Profil <i class="fa fa-user" aria-hidden="true"></i></a>
	              <div class="dropdown-menu dropdown-menu-right">
	                <a class="dropdown-item" href="#">Profil</a>
	                <a class="dropdown-item" href="#">Commandes</a>
	                <div class="dropdown-divider"></div>
	                <button type="button" class="btn btn-danger">Déconnexion</button>
	              </div>
	            </li>
	          </ul>         
	        </div>
	      </div>
		</nav>
	</header>
	<div class="container profile">	
    	<div class="row">
        	<div class="col-sm-12 banner">
      			<img title="profile" class="img-circle img-responsive icon" src="img/profil.png">
            	<h3>User</h3>
        	</div>
    	</div>
    	<div class="row">
        	<div class="col-sm-3">
            	<!--left col-->
            	<ul class="list-group">
                	<li class="list-group-item text-muted" contenteditable="false">Commandes <i class="fa fa-dashboard fa-1x"></i></li>
                	<a href="#" class="list-group-item text-right" data="orders"><span class="pull-left"><strong>Vos commmandes</strong></span></a>
                	<a href="#" class="list-group-item text-right" data="advantage"><span class="pull-left"><strong class="">Vos avantages</strong></span></a>
                	<a href="#" class="list-group-item text-right" data="favorite"><span class="pull-left"><strong class="">Favoris</strong></span></a>
            	</ul>
                <ul class="list-group">
                	<li class="list-group-item text-muted">Paramètre du compte <i class="fa fa-address-card-o" aria-hidden="true"></i></li>
                	<a href="#" class="list-group-item text-right" data="connexion"><span class="pull-left"><strong class="">Connexion</strong></span></a>
                	<a href="#" class="list-group-item text-right" data="information"><span class="pull-left"><strong class="">Informations personnelles</strong></span></a>
                    <a href="#" class="list-group-item text-right" data="plan"><span class="pull-left"><strong class="">Bon Plans</strong></span></a>
            	</ul>
        	</div>
	        <!--/col-3-->
	        <div class="col-sm-9" style="" contenteditable="false">
	        	<div class="jumbotron-fluid orders ">
				  	<div class="container">
				  		<h2>Mes dernières commandes</h2>
				    	<table class="table table-striped">
							<thead>
						    	<tr class="bg-danger">
								    <th scope="col">N° Commande</th>
								    <th scope="col">Vehicule</th>
								    <th scope="col">Début</th>
								    <th scope="col">Fin</th>
								    <th scope="col">Lien</th>
						    	</tr>
						  	</thead>
						  	<tbody>
						    	<tr>
						    		<th scope="row">1</th>
						      		<td>Mark</td>
						      		<td>Otto</td>
						      		<td>@mdo</td>
						      		<td>@mdo</td>
						    	</tr>
						    	<tr>
						      		<th scope="row">2</th>
						      		<td>Jacob</td>
						      		<td>Thornton</td>
						      		<td>@fat</td>
						      		<td>@fat</td>
						    	</tr>
						    	<tr>
						      		<th scope="row">3</th>
						      		<td>Larry</td>
						      		<td>the Bird</td>
						      		<td>@twitter</td>
						      		<td>@twitter</td>
						    	</tr>
						  	</tbody>
						</table>
				  	</div>
				</div>
	        	<div class="jumbotron-fluid advantage ">
				  	<div class="container">
				  		<h2>Avantages</h2>
				    	<table class="table table-striped">
							<thead>
						    	<tr class="bg-danger">
								    <th scope="col">N° Commande</th>
								    <th scope="col">Vehicule</th>
								    <th scope="col">Début</th>
								    <th scope="col">Fin</th>
								    <th scope="col">Lien</th>
						    	</tr>
						  	</thead>
						  	<tbody>
						    	<tr>
						    		<th scope="row">1</th>
						      		<td>Mark</td>
						      		<td>Otto</td>
						      		<td>@mdo</td>
						      		<td>@mdo</td>
						    	</tr>
						    	<tr>
						      		<th scope="row">2</th>
						      		<td>Jacob</td>
						      		<td>Thornton</td>
						      		<td>@fat</td>
						      		<td>@fat</td>
						    	</tr>
						    	<tr>
						      		<th scope="row">3</th>
						      		<td>Larry</td>
						      		<td>the Bird</td>
						      		<td>@twitter</td>
						      		<td>@twitter</td>
						    	</tr>
						  	</tbody>
						</table>
				  	</div>
				</div>
	        	<div class="jumbotron-fluid favorite ">
				  	<div class="container">
				  		<h2>Favoris</h2>
				    	<table class="table table-striped">
							<thead>
						    	<tr class="bg-danger">
								    <th scope="col">N° Commande</th>
								    <th scope="col">Vehicule</th>
								    <th scope="col">Début</th>
								    <th scope="col">Fin</th>
								    <th scope="col">Lien</th>
						    	</tr>
						  	</thead>
						  	<tbody>
						    	<tr>
						    		<th scope="row">1</th>
						      		<td>Mark</td>
						      		<td>Otto</td>
						      		<td>@mdo</td>
						      		<td>@mdo</td>
						    	</tr>
						    	<tr>
						      		<th scope="row">2</th>
						      		<td>Jacob</td>
						      		<td>Thornton</td>
						      		<td>@fat</td>
						      		<td>@fat</td>
						    	</tr>
						    	<tr>
						      		<th scope="row">3</th>
						      		<td>Larry</td>
						      		<td>the Bird</td>
						      		<td>@twitter</td>
						      		<td>@twitter</td>
						    	</tr>
						  	</tbody>
						</table>
				  	</div>
				</div>
	        	<div class="jumbotron-fluid connexion ">
				  	<div class="container">
				  		<h2>Paramètres de connexion</h2>
				    	<table class="table table-striped">
							<thead>
						    	<tr class="bg-danger">
								    <th scope="col">N° Commande</th>
								    <th scope="col">Vehicule</th>
								    <th scope="col">Début</th>
								    <th scope="col">Fin</th>
								    <th scope="col">Lien</th>
						    	</tr>
						  	</thead>
						  	<tbody>
						    	<tr>
						    		<th scope="row">1</th>
						      		<td>Mark</td>
						      		<td>Otto</td>
						      		<td>@mdo</td>
						      		<td>@mdo</td>
						    	</tr>
						    	<tr>
						      		<th scope="row">2</th>
						      		<td>Jacob</td>
						      		<td>Thornton</td>
						      		<td>@fat</td>
						      		<td>@fat</td>
						    	</tr>
						    	<tr>
						      		<th scope="row">3</th>
						      		<td>Larry</td>
						      		<td>the Bird</td>
						      		<td>@twitter</td>
						      		<td>@twitter</td>
						    	</tr>
						  	</tbody>
						</table>
				  	</div>
				</div>
	        	<div class="jumbotron-fluid information ">
				  	<div class="container">
				  		<h2>Informations personnelles</h2>
				    	<table class="table table-striped">
							<thead>
						    	<tr class="bg-danger">
								    <th scope="col">N° Commande</th>
								    <th scope="col">Vehicule</th>
								    <th scope="col">Début</th>
								    <th scope="col">Fin</th>
								    <th scope="col">Lien</th>
						    	</tr>
						  	</thead>
						  	<tbody>
						    	<tr>
						    		<th scope="row">1</th>
						      		<td>Mark</td>
						      		<td>Otto</td>
						      		<td>@mdo</td>
						      		<td>@mdo</td>
						    	</tr>
						    	<tr>
						      		<th scope="row">2</th>
						      		<td>Jacob</td>
						      		<td>Thornton</td>
						      		<td>@fat</td>
						      		<td>@fat</td>
						    	</tr>
						    	<tr>
						      		<th scope="row">3</th>
						      		<td>Larry</td>
						      		<td>the Bird</td>
						      		<td>@twitter</td>
						      		<td>@twitter</td>
						    	</tr>
						  	</tbody>
						</table>
				  	</div>
				</div>
	        	<div class="jumbotron-fluid plan ">
				  	<div class="container">
				  		<h2>Bon plans</h2>
				    	<table class="table table-striped">
							<thead>
						    	<tr class="bg-danger">
								    <th scope="col">N° Commande</th>
								    <th scope="col">Vehicule</th>
								    <th scope="col">Début</th>
								    <th scope="col">Fin</th>
								    <th scope="col">Lien</th>
						    	</tr>
						  	</thead>
						  	<tbody>
						    	<tr>
						    		<th scope="row">1</th>
						      		<td>Mark</td>
						      		<td>Otto</td>
						      		<td>@mdo</td>
						      		<td>@mdo</td>
						    	</tr>
						    	<tr>
						      		<th scope="row">2</th>
						      		<td>Jacob</td>
						      		<td>Thornton</td>
						      		<td>@fat</td>
						      		<td>@fat</td>
						    	</tr>
						    	<tr>
						      		<th scope="row">3</th>
						      		<td>Larry</td>
						      		<td>the Bird</td>
						      		<td>@twitter</td>
						      		<td>@twitter</td>
						    	</tr>
						  	</tbody>
						</table>
				  	</div>
				</div>
			</div>
            <div id="push"></div>
		</div>
	</div>
	<!-- Footer -->
		<footer class="small-footer font-small cyan darken-3 mt-4">
		  <div class="container">
		    <div class="row">
		      <div class="col-md-12 py-5">
		        <div class="mb-5 flex-center">
		          <a href="" class="fb-ic">
		            <i class="fa fa-facebook fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
		          </a>
		          <a href="" class="tw-ic">
		            <i class="fa fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
		          </a>
		          <a href="" class="gplus-ic">
		            <i class="fa fa-google-plus fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
		          </a>
		          <a href="" class="li-ic">
		            <i class="fa fa-linkedin fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
		          </a>
		          <a href="" class="ins-ic">
		            <i class="fa fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
		          </a>
		          <a href="" class="pin-ic">
		            <i class="fa fa-pinterest fa-lg white-text fa-2x"> </i>
		          </a>
		        </div>
		      </div>
		    </div>
		  </div>
		  <div class="footer-copyright text-center py-3">© 2018 Copyright 
		    <a href="https://mdbootstrap.com/bootstrap-tutorial/"> eMove.com</a>
		  </div>
		</footer>	
	<!-- Footer -->
	<!-- Modal -->
  	<?php require 'blocs/modal.php' ?>
  	<!-- Modal-->
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/api.js" ></script>
	<script src="js/popper.min.js" ></script>
	<script src="js/bootstrap-datepicker.min.js" ></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>