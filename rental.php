<?php  ?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>NARENTAL - Rental</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<div class="container">

		<div class="sebar">
			<img src="img/logo.png">
		</div>

		<!-- navbar -->
		<div class="topnav" id="myTopnav">
			<ul>
				<a href="index.php">Beranda</a>
				<a href="rental.php" class="active">Rental</a>
				<a href="tentang.php">Tentang</a>
<!-- 				<a href="register.php">Register</a> -->
				<a href="login.php">Masuk</a>
				<a href="javascript:void(0);" class="icon" onclick="myFunction()">
					<i class="fa fa-bars"></i>
				</a>
			</ul>
		</div>

		<div class="isi">			

			<div class="grid-container">
			  <div class="grid-item">
			  	
			  		<div class="ps1">
			  			<img src="img/playstation1.jpg"></a>
					</div>

					<div class="ps1detail">
						<h2> - Playstation 1 - </h2>
							<ul>
							</ul>
					</div>		

			  </div>

			  <div class="grid-item">

			  		<div class="ps2">
			  			<img src="img/playstation2.jpg"></a>
					</div>
			  
			  		<div class="ps2detail">
						<h2> - Playstation 2 - </h2>
							<ul>
							</ul>
					</div>

			  </div>

			  <div class="grid-item">

			  		<div class="ps3">
						<img src="img/playstation3.jpg"></a>
					</div>
			  
			  		<div class="ps3detail">
						<h2> - Playstation 3 - </h2>
							<ul>
							</ul>
					</div>

			  </div>

			  <div class="grid-item">

			  		<div class="ps4">
						<img src="img/playstation4.jpg"></a>
					</div>
			  
			  		<div class="ps4detail">
						<h2> - Playstation 4 - </h2>
							<ul>
							</ul>
					</div>

			  </div>

			</div>

			
			<a href="login.php"><input type="submit" class="btn btn-primary" value="Rental Sekarang!"></button></a>
			<br>
			<br>

		</div>

		<script>
			function myFunction() {
			  var x = document.getElementById("myTopnav");
			  if (x.className === "topnav") {
			    x.className += " responsive";
			  } else {
			    x.className = "topnav";
			  }
			}
		</script>

		<div class="footer-rental">
			<p class="copy">Copyright 2019.ragilmaulana.</p>
		</div>

	</div>

</body>
</html>