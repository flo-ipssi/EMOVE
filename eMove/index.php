<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>eMove - Location de voiture et scooter</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" >
	<link rel="stylesheet" href="css/font-awesome.min.css" >
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<script src="js/jquery-3.3.1.min.js"></script>
	
</head>
<body>
	<header>
		<nav  class="container">
			<a href="/"><img src="img/logo.png" /></a>
			<ul>
				<li><a href="">Inscription</a></li>
				<li> | </li>
				<li><a href="">Connexion</a></li>
				<li></li>
			</ul>
		</nav>
	</header>
	<div class="container-fluid">
		<div id="carouselExampleSlidesOnly" class="carousel row slide" data-ride="carousel">
			<div class="search">
			<h2>Avec eMove, louer votre véhicule facilement et rapidement</h2>
				<form class="form row">
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
				<h2>Près de 2 agences de ocation de voitures en France</h2>
				<h2>Qualité et Service sont nos priorités</h2>
			</div>
			<div class="row">
				<div class="card  col-xs-8 col-md-3">
					<i class="fa fa-building-o card-img" aria-hidden="true"></i>
				  	<div class="card-img-overlay">
				    <h3 class="card-title">Agence</h3>
				  </div>
				</div>
				
				<div class="card  col-xs-8 col-md-3">
					<i class="fa fa-car card-img" aria-hidden="true"></i>
				  	<div class="card-img-overlay">
				    <h3 class="card-title">Catalogue</h3>
				  </div>
				</div>

				<div class="card  col-xs-8 col-md-3">
					<i class="fa fa-shopping-cart card-img" aria-hidden="true"></i>
				  	<div class="card-img-overlay">
				    <h3 class="card-title">Promo</h3>
				  </div>
				</div>

			</div>
		</div>
		<div class="row">
			<form class="contain" action="envoi.php" method="POST">
				<div>
					<ul class="coordonnees">
						<li><i class="fa fa-map-marker" aria-hidden="true"></i><span class="adresse">khghgcjgcjgf ytf i fi</span></li>
						<li><i class="fa fa-phone" aria-hidden="true"></i><span class="tel">06.06.06.06.06</span></li>
						<li><i class="fa fa-envelope-o" aria-hidden="true"></i><span class="email">lskmdfq@gmail.com</span></li>
					</ul>
					<hr>
					<ul class="sociaux">
						<li>
							<a href="" target="_blank"></a>
						</li>
						<li>
							<a href="" target="_blank"></a>
						</li>
						<li>
							<a href="" target="_blank"></a>
						</li>
					</ul>
				</div>
				<div>
					<input type="text" name="nom" placeholder="NOM">
					<input type="text" name="email" placeholder="EMAIL">
					<textarea name="sujet" placeholder="MESSAGE"></textarea>
					<input type="submit" value="Envoyer">
				</div>
			</form>
		</div>
		<footer>
			<ul>
				<li>2018 Copyright</li>
				<li><a href="">Mentions</a></li>
				<li><a href="">Conditions</a></li>
			</ul>
		</footer>

	</div>
	<script src="js/api.js" ></script>
	<script src="js/popper.min.js" ></script>
	<script src="js/bootstrap-datepicker.min.js" ></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>