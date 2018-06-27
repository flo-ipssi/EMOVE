<?php
  include 'config/functions.php';
  require 'blocs/head.php'; 
?>
<body>
	<!-- Navigation -->
  <?php
    require 'blocs/navigation.php'; 
  ?>
    <!-- Page Content -->
    <div class="container-fluid shop">

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
        <!-- /.col-lg-2 -->

        <div class="col-lg-10">
          <div class="feed"></div>
          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <h3>-50% sur votre prochaine location pour l'achat d'une carte fidélité</h3>
                <img class="d-block img-fluid" src="img/promo.jpg" alt="">
                <p>Chaque offre du jour est valable 24 heures seulement : elle commence à minuit et s'achève à 23h59 (voir conditions en bas de cette page).</p>
              </div>
              <div class="carousel-item">
                <h3>-50% sur votre prochaine location pour l'achat d'une carte fidélité</h3>
                <img class="d-block img-fluid" src="img/promo.jpg" alt="">
                <p>Chaque offre du jour est valable 24 heures seulement : elle commence à minuit et s'achève à 23h59 (voir conditions en bas de cette page).</p>
              </div>
              <div class="carousel-item">
                <h3>-50% sur votre prochaine location pour l'achat d'une carte fidélité</h3>
                <img class="d-block img-fluid" src="img/promo.jpg" alt="">
                <p>Chaque offre du jour est valable 24 heures seulement : elle commence à minuit et s'achève à 23h59 (voir conditions en bas de cette page).</p>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="row">

            <div class="col-lg-3 col-md-6 mb-3">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/item.jpg" alt=""></a>
                <div class="card-header">
                  <h4><a href="#">Mercedes</a></h4>
                  <p>$24.99</p>
                </div>
                <div class="card-body">
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <a href="">Notes et commentaires </a>
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

          </div>

          <div class="row">
            <p id="content">Dynamic page content</p>
            <p id="pagination-here"></p>
            <script>
                // init bootpag
                $('#pagination-here').bootpag({
                    total: 7,          // total pages
                    page: 1,            // default page
                    maxVisible: 5,     // visible pagination
                    leaps: true         // next/prev leaps through maxVisible
                }).on("page", function(event, num){
                    $("#content").html("Page " + num); // or some ajax content loading...
                    // ... after content load -> change total to 10
                    $(this).bootpag({total: 10, maxVisible: 10});
                });
            </script>
          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-10 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
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
		    <a href="#"> eMove.com</a>
		  </div>
		</footer>	
	<!-- Footer -->
	<!-- Modal -->
  	<?php require 'blocs/modal.php' ?>
  	<!-- Modal-->
  <script src="js/api.js" ></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/fancybox.min.js"></script>
  <script src="js/popper.min.js" ></script>
  <script src="js/bootstrap-datepicker.min.js" ></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>