<!DOCTYPE html>
<html>
<head>
	<title>Ajax</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/ajax.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css"> 
</head>
<body>
	<div class="container">
		<h3 align="center">Pagination Ajax, PHP, SQL</h3>
		<div class="table-responsive" id="pagination_data">
			
		</div>
	</div>
	<script>
		$(document).ready(function() {
			load_data();
			function load_data(page){
				$.ajax({
					url : "pagination.php",
					method: "POST",
					data:{page:page},
					success:function(data){
						$('#pagination_data').html(data);
					}
				})
			}
			$(document).on('click', '.page-item', function(){
  				var page = $(this).attr("id");
  				load_data(page);
  			});
		});
    </script>
</body>
</html>