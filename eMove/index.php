<?php
	include 'config/functions.php';
	require 'blocs/head.php'; 
?>
<body>
	<header>
		<nav class="container">
			<a href="/"><img src="img/logo.png" /></a>
			<ul>
				<li><button type="button"  data-toggle="modal" data-target="#insription">Inscription</button></li>
				<li> | </li>
				<li><button type="button"  data-toggle="modal" data-target="#connexion">Connexion</button></li>
				<li><a href="#"><img src="img/user.png" alt="" /></a></li>
			</ul>
		</nav>
	</header>
	<div class="container-fluid">
		<div id="carrousel" class="carousel row slide" data-ride="carousel">
			<div class="search container">
			<h2>Avec eMove, louer votre véhicule facilement et rapidement</h2>
				<form class="form">
					<div class="row">
						<div class="col-sm-4 col-xs-12 ">
							<label class="mr-sm-2" for="inlineFormCustomSelect">Agence</label>
							<select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
								<option value="1">Paris</option>
								<option value="2">Lyon</option>
							</select>
						</div>
						<div class="col-sm-4  col-xs-12 input-group date" >
							<label class="mr-sm-2" for="inlineFormCustomSelect">Début</label>
						    <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="start">
						</div>
						<div class="col-sm-4  col-xs-12 input-group date">
							<label class="mr-sm-2" for="inlineFormCustomSelect">Fin</label>
						    <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="end">
						</div>
					</div>
					<button type="button" class="btn">RECHERCHE</button>
				</form>
			</div>
		  	<div class="carousel-inner">
		    	<div class="carousel-item active">
		      		<img class="d-block w-100" src="img/car_1.jpg" alt="First slide">
		    	</div>
		    	<div class="carousel-item">
		      		<img class="d-block w-100" src="img/car_1.jpg" alt="Second slide">
		    	</div>
		    	<div class="carousel-item">
		      		<img class="d-block w-100" src="img/car_1.jpg" alt="Third slide">
		   		</div>
		  	</div>
		</div>
		<div class="row introduce">
			<div class="col-sm-12 col-md-12">
				<h2>Près de 2 agences de location de voitures en France</h2>
				<h2>Qualité et Service sont nos priorités</h2>
			</div>
			<div class="summary">
				<div class="card  col-xs-8 col-sm-8 col-md-3 ">
					<i class="fa fa-building-o card-img" aria-hidden="true"></i>
				  	<div class="card-img-overlay">
				    <h3 class="card-title">Agence</h3>
				  </div>
				</div>
				
				<div class="card  col-xs-8 col-sm-6 col-md-3 ">
					<i class="fa fa-car card-img" aria-hidden="true"></i>
				  	<div class="card-img-overlay">
				    <h3 class="card-title">Catalogue</h3>
				  </div>
				</div>

				<div class="card  col-xs-8 col-sm-6 col-md-3 ">
					<i class="fa fa-shopping-cart card-img" aria-hidden="true"></i>
				  	<div class="card-img-overlay">
				    <h3 class="card-title">Promo</h3>
				  </div>
				</div>

			</div>
		</div>
		<hr>
		<div class="promo">
			<h2>Actualité</h2>
			<div class="owl-carousel">
			  	<div> 
			  		<div class="card" >
				  	<img class="card-img-top" src="img/vintage.jpg" alt="Card image cap">
				  	<div class="card-body">
				    	<h5 class="card-title">Card title</h5>
				    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="#" class="btn btn-primary">Go somewhere</a>
				  	</div>
					</div>
			  </div>
			  	<div> 
			  		<div class="card" >
				  	<img class="card-img-top" src="img/vintage.jpg" alt="Card image cap">
				  	<div class="card-body">
				    	<h5 class="card-title">Card title</h5>
				    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="#" class="btn btn-primary">Go somewhere</a>
				  	</div>
					</div>
			  </div>
			  	<div> 
			  		<div class="card" >
				  	<img class="card-img-top" src="img/vintage.jpg" alt="Card image cap">
				  	<div class="card-body">
				    	<h5 class="card-title">Card title</h5>
				    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="#" class="btn btn-primary">Go somewhere</a>
				  	</div>
					</div>
			  </div>
			  	<div> 
			  		<div class="card" >
				  	<img class="card-img-top" src="img/vintage.jpg" alt="Card image cap">
				  	<div class="card-body">
				    	<h5 class="card-title">Card title</h5>
				    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="#" class="btn btn-primary">Go somewhere</a>
				  	</div>
					</div>
			  </div>
			  	<div> 
			  		<div class="card" >
				  	<img class="card-img-top" src="img/vintage.jpg" alt="Card image cap">
				  	<div class="card-body">
				    	<h5 class="card-title">Card title</h5>
				    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="#" class="btn btn-primary">Go somewhere</a>
				  	</div>
					</div>
			  </div>
			  	<div> 
			  		<div class="card" >
				  	<img class="card-img-top" src="img/vintage.jpg" alt="Card image cap">
				  	<div class="card-body">
				    	<h5 class="card-title">Card title</h5>
				    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="#" class="btn btn-primary">Go somewhere</a>
				  	</div>
					</div>
			  </div>
			</div>
		</div>
		<div class="map">
			<h2>Où nous trouver ?</h2>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.507672328738!2d2.3861542159290914!3d48.8485289093547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6720ccc2ca7b1%3A0x45528eb90c108f61!2sIPSSI+Paris+%2F+Groupe+IP-Formation!5e0!3m2!1sfr!2sfr!4v1529315928827"  height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="contact">
			<form class="row" action="envoi.php" method="POST">
				<div class="col-md-4 offset-md-1 col-xs-8">
					<ul class="infos">
						<li><i class="fa fa-map-marker" aria-hidden="true"></i><span class="adresse">khghgcjgcjgf ytf i fi</span></li>
						<li><i class="fa fa-phone" aria-hidden="true"></i><span class="tel">06.06.06.06.06</span></li>
						<li><i class="fa fa-envelope-o" aria-hidden="true"></i><span class="email">lskmdfq@gmail.com</span></li>
					</ul>
					<!--<ul class="sociaux">
						<li>
							<a href="" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
						</li>
						<li>
							<a href="" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
						</li>
						<li>
							<a href="" target="_blank"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
						</li>
						<li>
							<a href="" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						</li>
						<li>
							<a href="" target="_blank"><i class="fa fa-youtube-square" aria-hidden="true"></i></a>
						</li>
					</ul>-->
				</div>
				<div class="col-md-6 col-xs-8">
					<div class="form-row">
					    <div class="form-group col-md-6">
					      	<label for="name">Nom</label>
					      	<input type="text" class="form-control" id="name" placeholder="Nom">
					    </div>
    					<div class="form-group col-md-6">
					      	<label for="email">Email</label>
					      	<input type="email" class="form-control" id="email" placeholder="Email">
					    </div>
				  	</div>
					<div class="form-group">
					    <label for="message">Message</label>
						<textarea class="form-control" id="message" rows="3" placeholder="Message"></textarea>
					</div>
					<button class="btn btn-primary" type="submit">Envoyer</button>
				</div>
			</form>
			<hr>
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