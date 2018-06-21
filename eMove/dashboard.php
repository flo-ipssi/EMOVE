<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>eMove - Location de voiture et scooter</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" >
	<link rel="stylesheet" href="css/font-awesome.min.css" >
	<link rel="stylesheet" href="css/slick-theme.css"/>
	<link rel="stylesheet" href="css/slick.css"> 
	<link rel="stylesheet" type="text/css" href="css/admin.css" />
	<script src="js/jquery-3.3.1.min.js"></script>

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
		<a class="navbar-brand" href="#">
			<button type="button" id="sidebarCollapse">
	    		<i class="fa fa-fw fa-bars"></i>
            	<span class="nav-link-text">eMove</span>
		    </button>
	  	</a>
	  	<ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>David Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          	<a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	            <i class="fa fa-fw fa-bell"></i>
	            <span class="d-lg-none">Alerts
	              <span class="badge badge-pill badge-warning">6 New</span>
	            </span>
	            <span class="indicator text-warning d-none d-lg-block">
	              <i class="fa fa-fw fa-circle"></i>
	            </span>
	          </a>
          	<div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Recherche ...">
              <span class="input-group-append">
                <button class="btn btn-light" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          	<a href="" class="nav-link" data-toggle="modal" >
            	<i class="fa fa-fw fa-sign-out"></i>Déconnexion
        	</a>
        </li>
      </ul>
	</nav>
	<div class="wrapper">

	    <!-- Sidebar -->
	    <nav id="sidebar">
	        <div class="sidebar-header">
	            <h3>Admin</h3>
	        </div>
	        <ul class="list-unstyled components">
	            <a href="#"><li>Utilisateur</li></a>
	            <a href="#"><li>Véhicule</li></a>
	            <a href="#"><li>Messageries</li></a>
	            <a href="#"><li>Mes locations</li></a>
	            <a href="#"><li>Contact</li></a>
	        </ul>
	    </nav>

	    <!-- Page Content -->
	    <div id="content" class="container-fluid">
    		<div class="row">
		        <div class="col-xl-3 col-sm-6 mb-3">
		          <div class="card text-white bg-primary o-hidden h-100">
		            <div class="card-body">
		              <div class="mr-5"><i class="fa fa-fw fa-user"></i> Utilisateur</div>
		              <span>50 000 utilisateurs</span>
		            </div>
		            <a class="card-footer text-white clearfix small z-1" href="#">
		              <span class="float-left" data-toggle="modal" data-target="#new_user"><i class="fa fa-plus" aria-hidden="true" data-target="#new_user"></i></span>
		              <span class="float-right">
		                <i class="fa fa-list-ul" aria-hidden="true" data-slick-index="1" class="list"></i>
		              </span>
		            </a>
		          </div>
		        </div>
		        <div class="col-xl-3 col-sm-6 mb-3">
		          <div class="card text-white bg-warning o-hidden h-100">
		            <div class="card-body">
		              <div class="mr-5"><i class="fa fa-fw fa-car"></i> Véhicule</div>
		              <span>50 000 véhicules</span>
		            </div>
		            <a class="card-footer text-white clearfix small z-1" href="#">
		              <span class="float-left" data-toggle="modal" data-target="#new_car"><i class="fa fa-plus" data-toggle="modal" data-target="#new_car"></i></span>
		              <span class="float-right">
		                <i class="fa fa-list-ul" aria-hidden="true" data-slick-index="2" class="list"></i>
		              </span>
		            </a>
		          </div>
		        </div>
		        <div class="col-xl-3 col-sm-6 mb-3">
		          <div class="card text-white bg-success o-hidden h-100">
		            <div class="card-body">
		              <div class="mr-5"><i class="fa fa-fw fa-building-o"></i> Agence</div>
		              <span>2 agences</span>
		            </div>
		            <a class="card-footer text-white clearfix small z-1" href="#">
		              <span class="float-left" data-toggle="modal" data-target="#new_agency" ><i class="fa fa-plus" aria-hidden="true" data-toggle="modal" data-target="#new_agency" ></i></span>
		              <span class="float-right">
		                <i class="fa fa-list-ul" aria-hidden="true" data-slick-index="3" class="list"></i>
		              </span>
		            </a>
		          </div>
		        </div>
		        <div class="col-xl-3 col-sm-6 mb-3">
		          <div class="card text-white bg-danger o-hidden h-100">
		            <div class="card-body">
		              <div class="mr-5"><i class="fa fa-fw fa-shopping-cart"></i> Offre en cours</div>
		              <span>5 promotions</span>
		            </div>
		            <a class="card-footer text-white clearfix small z-1" href="#">
		              <span class="float-left"><i class="fa fa-plus" aria-hidden="true"></i></span>
		              <span class="float-right">
		                <i class="fa fa-list-ul" aria-hidden="true" data-slick-index="4" class="list"></i>
		              </span>
		            </a>
		          </div>
		        </div>
		    </div>
			<div class="dashboard-carousel">
				<div> 
				    <h2>Location en cours</h2>
				    <table class="table">
					  <thead class="thead-dark">
					    <tr>
						    <th scope="col">Commande N°</th>
						    <th scope="col">Véhicule</th>
						    <th scope="col">Locataire</th>
						    <th scope="col">Début</th>
						    <th scope="col">Fin</th>
						    <th scope="col">Statut</th>
						    <th scope="col">Suivi</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">1</th>
					      <td>Mark</td>
					      <td>Otto</td>
					      <td>@mdo</td>
					      <td>Mark</td>
					      <td>Otto</td>
					      <td>Otto</td>
					    </tr>
					  </tbody>
					</table>
				</div>
				<div> 
				    <h2>Utilisateur</h2>
				    <table class="table">
					  <thead class="thead-light">
					    <tr>
						    <th scope="col">Véhicule</th>
						    <th scope="col">Locataire</th>
						    <th scope="col">Suivi</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">1</th>
					      <td>Mark</td>
					      <td>Otto</td>
					    </tr>
					  </tbody>
					</table>
				</div>
				<div> 
				    <h2>Véhicule</h2>
				    <table class="table">
					  <thead class="thead-dark">
					    <tr>
						    <th scope="col">Véhicule</th>
						    <th scope="col">Locataire</th>
						    <th scope="col">Suivi</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">1</th>
					      <td>Mark</td>
					      <td>Otto</td>
					    </tr>
					  </tbody>
					</table>
				</div>
				<div> 
				    <h2>Agence</h2>
				    <table class="table">
					  <thead class="thead-light">
					    <tr>
						    <th scope="col">Véhicule</th>
						    <th scope="col">Locataire</th>
						    <th scope="col">Suivi</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">1</th>
					      <td>Mark</td>
					      <td>Otto</td>
					    </tr>
					  </tbody>
					</table>
				</div>
			</div>
	    </div>
	</div>

	<?php require 'blocs/modal_admin.php'; ?>
	<script src="js/slick.min.js"></script>
	<script src="js/admin.js" ></script>
	<script src="js/popper.min.js" ></script>
	<script src="js/bootstrap-datepicker.min.js" ></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>