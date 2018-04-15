<!DOCTYPE html>
	<head>
		<title>Booking2</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body bgcolor="#c1e5ff">

		<ul class="navbar">
			<li class="li"><a href="login.php"> LOGIN </a></li>
			<li class="li"><a href="register.php"> REGISTER </a></li>
			<li class="li"><a href="#about"> ABOUT </a></li>
			<li class="li" style="float: left"><a href="#home"> Booking2 </a></li>
		</ul>

		<div id="carousel" class="carousel slide" data-ride="carousel">
		 	<ol class="carousel-indicators">
		    	<li data-target="#carousel" data-slide-to="0" class="active"></li>
		    	<li data-target="#carousel" data-slide-to="1"></li>
		    	<li data-target="#carousel" data-slide-to="2"></li>
		    	<li data-target="#carousel" data-slide-to="3"></li>
		    	<li data-target="#carousel" data-slide-to="4"></li>
		  	</ol>

		  	<div class="carousel" style="top: -20px;">
			  	<div class="carousel-inner">
			  		<div class="item active">
			      		<img src="Img/img0.jpg" alt="Img0" width="100%">
			      		<div class="carousel-caption">
			        		<h3>New York</h3>
			      		</div>
			    	</div>

			    	<div class="item">
			      		<img src="Img/img1.jpg" alt="Img1" width="100%" height="600px">
			      		<div class="carousel-caption">
			        		<h3>Tokyo</h3>
			      		</div>
			    	</div>

			    	<div class="item">
			      		<img src="Img/img2.jpg" alt="Img2" width="100%" height="600px">
			      		<div class="carousel-caption">
			        		<h3>Venice</h3>
			      		</div>
			    	</div>

			    	<div class="item">
			      		<img src="Img/img3.jpg" alt="Img3" width="100%" height="600px">
			      		<div class="carousel-caption">
			        		<h3>Timbuktu</h3>
			      		</div>
			    	</div>

			    	<div class="item">
			      		<img src="Img/img4.jpg" alt="Img4" width="100%" height="600px">
			      		<div class="carousel-caption">
			        		<h3>Damasc</h3>
			      		</div>
			    	</div>
				</div>
			</div>

			<a class="left carousel-control" href="#carousel" data-slide="prev" style="top: -20px;">
				<span class="glyphicon glyphicon-chevron-left"></span>
			    <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel" data-slide="next" style="top: -20px;">
				<span class="glyphicon glyphicon-chevron-right"></span>
			    <span class="sr-only">Next</span>
			</a>
		</div>
	</body>

</html>
