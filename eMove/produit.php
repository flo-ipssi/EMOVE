<?php
	include 'config/functions.php';
	require 'blocs/head.php'; 
?>
<body>
	<!-- Navigation -->
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
    <!-- Page Content -->
    <div class="container-fluid shop product">
      	<div class="row">
	        <div class="col-lg-2">
	          	<h2 class="my-4">Nouveautés</h2>
	            <div class="list-group">
	              <a href="#vehiculetype" class="list-group-item" data-toggle="collapse" href="#vehiculetype" role="button" aria-expanded="false" aria-controls="vehiculetype">Vehicule</a>
	              <div class="collapse" id="vehiculetype">
	                <ul class="list-group">
	                  <li class="list-group-item ">
	                    <input type="checkbox" aria-label="Choix"> Choix</li>
	                </ul>
	              </div>
	              <a href="#km" class="list-group-item" data-toggle="collapse" href="#km" role="button" aria-expanded="false" aria-controls="km">Kilometrage</a>
	              <div class="collapse" id="km">
	                <ul class="list-group">
	                  <li class="list-group-item ">
	                    <input type="checkbox" aria-label="Choix"> Choix</li>
	                </ul>
	              </div>
	              <a href="#price" class="list-group-item" data-toggle="collapse" href="#price" role="button" aria-expanded="false" aria-controls="price">Prix</a>
	              <div class="collapse" id="price">
	                <div class="input-group">
	                  <div class="input-group-prepend">
	                    <span class="input-group-text" id=""><i class="fas fa-euro-sign"></i></span>
	                  </div>
	                  <input type="text" class="form-control" placeholder="Min">
	                  <input type="text" class="form-control" placeholder="Max">
	                </div>
	              </div>
	            </div>
	        </div>
	        <!-- /.col-lg-3 -->
	        <div class="col-lg-10 ">
	          	<div class="card mt-4">
	            	<div id="productControl" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
					    	<div class="carousel-item active">
					      		<a class="gallery_image" href="img/amg.jpg"><img class="d-block w-100" src="img/amg.jpg" alt=""></a>
					    	</div>
						    <div class="carousel-item">
						      	<a class="gallery_image" href="img/amg.jpg"><img class="d-block w-100" src="img/amg.jpg" alt=""></a>
						    </div>
						    <div class="carousel-item">
						      	<a class="gallery_image" href="img/amg.jpg"><img class="d-block w-100" src="img/amg.jpg" alt=""></a>
						    </div>
					  	</div>
					  	<a class="carousel-control-prev" href="#productControl" role="button" data-slide="prev">
					    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					  	</a>
					  	<a class="carousel-control-next" href="#productControl" role="button" data-slide="next">
					    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
					  	</a>
					</div>
	            	<div class="card-body">
			            <a class="btn btn-primary booking" href="#" role="button">Réservation</a>
	              		<h3 class="card-title">Product Name</h3>
			            <h4>$24.99</h4>
			            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dicta fugit fugiat hic aliquam itaque facere, soluta. Totam id dolores, sint aperiam sequi pariatur praesentium animi perspiciatis molestias iure, ducimus!</p>
			            <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
			              4.0 stars
	            	</div>
	          	</div>
	          	<!-- /.card -->
	          	<div class="jumbotron">
				 	<h1 class="display-4">Caractéristiques</h1>
				  	<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
				  	<hr class="my-3">
				  	<table class="table">
					  	<thead class="thead-dark">
					    	<tr>
					      		<th scope="col">Caractéristique</th>
					      		<th scope="col"></th>
					    	</tr>
					  	</thead>
					  	<tbody>
					    	<tr>
					      		<td>Otto</td>
					      		<td>@mdo</td>
					    	</tr>
					    	<tr>
					      		<td>Thornton</td>
					      		<td>@fat</td>
					    	</tr>
					    	<tr>
					      		<td>the Bird</td>
					      		<td>@twitter</td>
					    	</tr>
					    	<tr>
					      		<td>the Bird</td>
					      		<td>@twitter</td>
					    	</tr>
					    	<tr>
					      		<td>the Bird</td>
					      		<td>@twitter</td>
					    	</tr>
					    	<tr>
					      		<td>the Bird</td>
					      		<td>@twitter</td>
					    	</tr>
					    	<tr>
					      		<td>the Bird</td>
					      		<td>@twitter</td>
					    	</tr>
					  	</tbody>
					</table>
				  	<!--<p class="lead">
				    	<a class="btn btn-primary btn-lg" href="#" role="button">Plus</a>
				  	</p>-->
				</div>
	          	<div class="card card-outline-secondary my-5">
	            	<div class="card-header">
	              		AVIS DES CLIENTS
	            	</div>
		            <div class="card-body">
		              	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
		              	<small class="text-muted">Posted by Anonymous on 3/1/17</small>
		              	<hr>
		              	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
		              	<small class="text-muted">Posted by Anonymous on 3/1/17</small>
		              	<hr>
		              	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
		              	<small class="text-muted">Posted by Anonymous on 3/1/17</small>
		              	<hr>
		              	<form class="form-group">
						    <label for="exampleFormControlTextarea1">Laisser un commentaire</label>
						    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		              		<button type="submit" class="btn btn-success">Envoyer</button>
						</form>
		            </div>
	          	</div>
	          	<!-- /.card -->
	        </div>
	        <!-- /.col-lg-9 -->
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
	<script src="js/fancybox.min.js"></script>
	<script src="js/api.js" ></script>
	<script src="js/popper.min.js" ></script>
	<script src="js/bootstrap-datepicker.min.js" ></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>