<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>TITLE</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

	<!-- Stylesheets -->
	<link href="public/common-css/bootstrap.css" rel="stylesheet">
	<link href="public/common-css/ionicons.css" rel="stylesheet">
	<link href="public/layout-1/css/styles.css" rel="stylesheet">
	<link href="public/layout-1/css/responsive.css" rel="stylesheet">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
</head>
<body>
	<header>
		<div class="container-fluid position-relative no-side-padding">

			<a href="#" class="logo"><img src="public/images/logo.png" alt="Logo Image"></a>
			<div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>
			<ul class="main-menu visible-on-click" id="main-menu">
				<li><a href="#">Accueil</a></li>
				<!--<li><a href="#">Categories</a></li>-->
				<!--postécreate-->
				<li><a href="post&create">Créer un article</a></li>
			</ul><!-- main-menu -->

			<div class="src-area">
				<form>
					<button class="src-btn" type="submit"><i class="ion-ios-search-strong"></i></button>
					<input class="src-input" type="text" placeholder="Type of search">
				</form>
			</div>

		</div><!-- conatiner -->
	</header>




    <!-- Affichage de mon contenu -->
    <?= $content ?>




	<footer>
		<div class="container">
			<div class="row">

				<div class="col-lg-4 col-md-6">
					<div class="footer-section">

						<a class="logo" href="#"><img src="public/images/logo.png" alt="Logo Image"></a>
						<ul class="icons">
							<li><a href="#"><i class="fab fa-facebook"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						</ul>

					</div><!-- footer-section -->
				</div><!-- col-lg-4 col-md-6 -->


				<div class="col-lg-4 col-md-6">
					<div class="footer-section">

						<h4 class="title"><b>S'inscrire'</b></h4>
						<div class="input-area">
							<form>
								<input class="email-input" type="text" placeholder="Entrer votre email">
								<button class="submit-btn" type="submit"><i class="fas fa-search"></i></button>
							</form>
						</div>

					</div><!-- footer-section -->
				</div><!-- col-lg-4 col-md-6 -->

			</div><!-- row -->
		</div><!-- container -->
	</footer>


	<!-- SCIPTS -->

	<script src="public/common-js/jquery-3.1.1.min.js"></script>
	<script src="public/common-js/tether.min.js"></script>
	<script src="public/common-js/bootstrap.js"></script>
	<script src="public/common-js/scripts.js"></script>
</body>
</html>