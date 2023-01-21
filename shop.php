<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>E-Store - Magazin online de suplimente alimentare</title>
	<link rel="stylesheet" href="styles/bootstrap-337.min.css">
	<link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
	<link rel="stylesheet" href="styles/style.css">
</head>

<body>

	<div id="top"><!--Top begin-->
		<div class="container"><!--container begin-->
			<div class="col-md-6 offer"><!--col-md-6 offer begin-->

				<a href="#" class="btn btn-success btn-sm">Welcome</a>
				<a href="checkout.php">4 Produse in Cos | Pret total: 300 RON</a>

			</div><!--col-md-6 offer end-->

			<div class="col-md-6"><!--col-md-6 begin-->

				<ul class="menu"><!--menu begin-->

					<li>
						<a href="cutomer_register.php">Inregistrare</a>
					</li>
					<li>
						<a href="checkout.php">Contul meu</a>
					</li>
					<li>
						<a href="cart.php">Cos cumparaturi</a>
					</li>
					<li>
						<a href="checkout.php">Login</a>
					</li>

				</ul><!--menu end-->

			</div><!--col-md-6 end-->

		</div><!--container end-->

	</div><!--Top end-->

	<div id="nav" class="navbar navbar-default"><!--navbar navbar-default begin -->

		<div class="container"><!--container begin -->

			<div class="navbar-header"><!--navbar-header begin -->

				<a href="index.php" class="navbar-brand home"><!--navbar-brand home begin -->

					<img src="images/ecom-store-logo.png" alt="E-Store logo" class="hidden-xs">
					<img src="images/ecom-store-logo-mobile.png" alt="E-Store logo mobile" class="visible-xs">

				</a> <!--navbar-brand home end -->

				<button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">

					<span class="sr-only">Comutare navigatie</span>

					<i class="fa fa-align-justify"></i>

				</button>

				<button class="navbar-toggle" data-toggle="collapse" data-target="#search">

					<span class="sr-only">Comutare Cautare</span>

					<i class="fa fa-search"></i>

				</button>

			</div><!--navbar-header end -->

			<div class="navbar-collapse collapse" id="navigation"><!--navbar-collapse collapse begin -->

				<div class="padding-nav"><!--padding-nav begin -->

					<ul class="nav navbar-nav left"><!--nav navbar-nav left begin -->

						<li >
							<a href="index.php">Acasa</a>
						</li>
						<li class="active">
							<a href="shop.php">Magazin</a>
						</li>
						<li>
							<a href="checkout.php">Contul meu</a>
						</li>
						<li>
							<a href="cart.php">Cos Cumparaturi</a>
						</li>
						<li>
							<a href="contact.php">Contact</a>
						</li>

					</ul><!--nav navbar-nav left end -->

				</div><!--padding-nav end -->

				<a href="cart.php" class="btn navbar-btn btn-primary right"><!--btn navbar-btn btn-primary right begin -->

					<i class="fa fa-shopping-cart"></i>
					<span>4 Produse in Cos</span>

				</a><!--btn navbar-btn btn-primary right end -->

				<div class="navbar-collapse collapse right"><!--navbar-collapse collapse right begin-->

					<button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">

						<span class="sr-only">Comutare Cautare</span>

						<i class="fa fa-search"></i>

					</button>

				</div><!--navbar-collapse collapse right end-->

				<div class="collapse clearfix" id="search"><!--collapse clearfix begin-->

					<form method="get" action="results.php" class="navbar-form"><!--navbar-form begin-->

						<div class="input-group"><!--input-group begin-->

							<input type ="text" class="form-control" placeholder="Cautare" name="user_query" required>

							<span class="input-group-btn">

							<button type="submit" name="search" value="Cautare" class="btn btn-primary">

								<i class="fa fa-search"></i>

							</button>

							</span>

						</div><!--input-group end-->

					</form><!--navbar-form end-->

				</div><!--collapse clearfix end-->

			</div><!--navbar-collapse collapse -->

		</div><!--container end -->

	</div><!--navbar navbar-default end -->

	<div id="content"><!--#content begin -->
		<div class="container"><!--container begin -->
			<div class="col-md-12"><!--col-md-12 begin -->

				<ul class="breadcrumb"><!--breadcrumbs begin -->

					<li>
						<a href="index.php">Acasa</a>
					</li>
					<li>
						Magazin
					</li>

				</ul><!--breadcrumbs end -->

			</div><!--col-md-12 end -->

			<div class="col-md-3"><!--col-md-3 begin -->

					<?php

					include("includes/sidebar.php");

					?>

			</div><!--col-md-3 end -->

			<div class="col-md-9"><!--col-md-9 begin -->
				<div class="box"><!--box begin -->
					<h1>Magazin</h1>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellat amet suscipit ratione! Incidunt reiciendis, ex dolorem architecto ipsum laboriosam, quia, iure adipisci provident eveniet laudantium, at impedit dignissimos saepe!</p>


				</div><!--box end -->

				<div class="row"><!--row begin-->
					<div class="col-md-4 col-sm-6 center-responsive">

						<div class="product"><!--product begin -->

							<a href="details.php">

								<img class ="img-responsive" src="admin_area/product_images/produs1.JPG" alt="Produs 1">

							</a>

							<div class="text"><!--text begin -->

								<h3>

									<a href="details.php">Proteine IWHEY 2000g</a>

								</h3>

							<p class="price">289 lei</p>

							<p class="button">

								<a href="details.php" class="btn btn-default">Detalii</a>
								<a href="details.php" class="btn btn-primary">

									<i class="fa fa-shopping-cart">
									Adaugare in Cos
									</i>

								</a>

							</p>

							</div><!--text end -->

						</div><!--product end -->

					</div>
					<div class="col-md-4 col-sm-6 center-responsive">

						<div class="product"><!--product begin -->

							<a href="details.php">

								<img class ="img-responsive" src="admin_area/product_images/produs1.JPG" alt="Produs 1">

							</a>

							<div class="text"><!--text begin -->

								<h3>

									<a href="details.php">Proteine IWHEY 2000g</a>

								</h3>

							<p class="price">289 lei</p>

							<p class="button">

								<a href="details.php" class="btn btn-default">Detalii</a>
								<a href="details.php" class="btn btn-primary">

									<i class="fa fa-shopping-cart">
									Adaugare in Cos
									</i>

								</a>

							</p>

							</div><!--text end -->

						</div><!--product end -->

					</div>
					<div class="col-md-4 col-sm-6 center-responsive">

						<div class="product"><!--product begin -->

							<a href="details.php">

								<img class ="img-responsive" src="admin_area/product_images/produs1.JPG" alt="Produs 1">

							</a>

							<div class="text"><!--text begin -->

								<h3>

									<a href="details.php">Proteine IWHEY 2000g</a>

								</h3>

							<p class="price">289 lei</p>

							<p class="button">

								<a href="details.php" class="btn btn-default">Detalii</a>
								<a href="details.php" class="btn btn-primary">

									<i class="fa fa-shopping-cart">
									Adaugare in Cos
									</i>

								</a>

							</p>

							</div><!--text end -->

						</div><!--product end -->

					</div>
					<div class="col-md-4 col-sm-6 center-responsive">

						<div class="product"><!--product begin -->

							<a href="details.php">

								<img class ="img-responsive" src="admin_area/product_images/produs1.JPG" alt="Produs 1">

							</a>

							<div class="text"><!--text begin -->

								<h3>

									<a href="details.php">Proteine IWHEY 2000g</a>

								</h3>

							<p class="price">289 lei</p>

							<p class="button">

								<a href="details.php" class="btn btn-default">Detalii</a>
								<a href="details.php" class="btn btn-primary">

									<i class="fa fa-shopping-cart">
									Adaugare in Cos
									</i>

								</a>

							</p>

							</div><!--text end -->

						</div><!--product end -->

					</div>
					<div class="col-md-4 col-sm-6 center-responsive">

						<div class="product"><!--product begin -->

							<a href="details.php">

								<img class ="img-responsive" src="admin_area/product_images/produs1.JPG" alt="Produs 1">

							</a>

							<div class="text"><!--text begin -->

								<h3>

									<a href="details.php">Proteine IWHEY 2000g</a>

								</h3>

							<p class="price">289 lei</p>

							<p class="button">

								<a href="details.php" class="btn btn-default">Detalii</a>
								<a href="details.php" class="btn btn-primary">

									<i class="fa fa-shopping-cart">
									Adaugare in Cos
									</i>

								</a>

							</p>

							</div><!--text end -->

						</div><!--product end -->

					</div>
					<div class="col-md-4 col-sm-6 center-responsive">

						<div class="product"><!--product begin -->

							<a href="details.php">

								<img class ="img-responsive" src="admin_area/product_images/produs1.JPG" alt="Produs 1">

							</a>

							<div class="text"><!--text begin -->

								<h3>

									<a href="details.php">Proteine IWHEY 2000g</a>

								</h3>

							<p class="price">289 lei</p>

							<p class="button">

								<a href="details.php" class="btn btn-default">Detalii</a>
								<a href="details.php" class="btn btn-primary">

									<i class="fa fa-shopping-cart">
									Adaugare in Cos
									</i>

								</a>

							</p>

							</div><!--text end -->

						</div><!--product end -->

					</div>
				</div><!--row end -->

				<center>
					<ul class="pagination">
						<li><a href="#">Prima Pagina</a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">Ultima pagina</a></li>
					</ul>
				</center>

			</div><!--col-md-9 end -->

		</div><!--container end -->
	</div><!--#content end -->

	<?php

	include("includes/footer.php");

	?>

	<script src="js/jquery-331.min.js"></script>
	<script src="js/bootstrap-337.min.js"></script>
</body>
</html>
