<?php
	include 'config/functions.php';
	require 'blocs/head.php'; 
?>
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
	<div class="container">
		<div class="row resume">
	        <div class="well col-xs-12 col-sm-12">
	            <div class="row">
	                <div class="col-xs-6 col-sm-6 col-md-6">
	                    <address>
	                        <strong>eMove</strong>
	                        <p>25 Rue Claude Tillier</p>
	                        <p>Paris, 75012</p>
	                        <p>01 55 43 26 65</p>
	                    </address>
	                </div>
	                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
	                    <p>
	                        <?php
	                        	dateFacture();
							?>

	                    </p>
	                    <p>
	                        <?php
		                        refFacture();
							?>
	                    </p>
	                </div>
	            </div>
	            <div class="row">
	                <div class="text-center">
	                    <h1>Facture</h1>
	                </div>
	                </span>
	                <table class="table table-hover">
	                    <thead>
	                        <tr>
	                            <th>Produit</th>
	                            <th>Début</th>
	                            <th>Fin</th>
	                            <th class="text-center">Réduction</th>
	                            <th class="text-center">Total</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                        <tr>
	                            <td class="col-md-8"><em>Mercedes</em></h4></td>
	                            <td class="col-md-1" style="text-align: center"> 3 </td>
	                            <td class="col-md-1" style="text-align: center"> 3 </td>
	                            <td class="col-md-1 text-center">0,00 €</td>
	                            <td class="col-md-1 text-center">48,00 €</td>
	                        </tr>
	                        <tr>
	                            <td colspan="3" class="text-right">
	                            	<p><strong>Sous-total: </strong></p>
	                            	<p><strong>Tax: </strong></p>
	                        	</td>
	                            <td colspan="3" class="text-center">
	                            	<p><strong>35,56 €</strong></p>
	                            	<p><strong>6,94 €</strong></p>
	                            </td>
	                        </tr>
	                        <tr>
	                            <td colspan="3" class="text-right"><h4><strong>Total: </strong></h4></td>
	                            <td colspan="3" class="text-center text-danger"><h4><strong>31.53 €</strong></h4></td>
	                        </tr>
	                    </tbody>
	                </table>
	                <button type="button" class="btn btn-success btn-lg btn-block">PAYER <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
	            </div>
	        </div>
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