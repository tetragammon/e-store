<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Store - Magazin Online de suplimente alimentare</title>
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

						<li class="active">
							<a href="index.php">Acasa</a>
						</li>
						<li>
							<a href="shop.php">Magazin</a>
						</li>
						<li>
							<a href="/customer/my_account.php">Contul meu</a>
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

   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->

               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Acasa</a>
                   </li>
                   <li>
                       Magazin
                   </li>
               </ul><!-- breadcrumb Finish -->

           </div><!-- col-md-12 Finish -->

           <div class="col-md-3"><!-- col-md-3 Begin -->

   <?php

    include("includes/sidebar.php");

    ?>

           </div><!-- col-md-3 Finish -->

           <div class="col-md-9"><!-- col-md-9 Begin -->
               <div id="productMain" class="row"><!-- row Begin -->
                   <div class="col-sm-6"><!-- col-sm-6 Begin -->
                       <div id="mainImage"><!-- #mainImage Begin -->
                           <div id="myCarousel" class="carousel slide" data-ride="carousel"><!-- carousel slide Begin -->
                               <ol class="carousel-indicators"><!-- carousel-indicators Begin -->
                                   <li data-target="#myCarousel" data-slide-to="0" class="active" ></li>
                                   <li data-target="#myCarousel" data-slide-to="1"></li>
                               </ol><!-- carousel-indicators Finish -->

                               <div class="carousel-inner">
                                   <div class="item active">
                                       <center><img class="img-responsive" src="admin_area/product_images/produs1.JPG" alt="Product 1"></center>
                                   </div>
                                   <div class="item">
                                       <center><img class="img-responsive" src="admin_area/product_images/produs1-2.JPG" alt="Product 2"></center>
                                   </div>
                               </div>

                               <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Begin -->
                                   <span class="glyphicon glyphicon-chevron-left"></span>
                                   <span class="sr-only">Inapoi</span>
                               </a><!-- left carousel-control Finish -->

                               <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- right carousel-control Begin -->
                                   <span class="glyphicon glyphicon-chevron-right"></span>
                                   <span class="sr-only">Inainte</span>
                               </a><!-- right carousel-control Finish -->

                           </div><!-- carousel slide Finish -->
                       </div><!-- mainImage Finish -->
                   </div><!-- col-sm-6 Finish -->

                   <div class="col-sm-6"><!-- col-sm-6 Begin -->
                       <div class="box"><!-- box Begin -->
                           <h1 class="text-center">Proteine IWHEY 2000g</h1>

                           <form action="details.php" class="form-horizontal" method="post"><!-- form-horizontal Begin -->
                               <div class="form-group"><!-- form-group Begin -->
                                   <label for="" class="col-md-5 control-label">Cantitate Produs</label>

                                   <div class="col-md-7"><!-- col-md-7 Begin -->
                                          <select name="product_qty" id="" class="form-control"><!-- select Begin -->
                                           <option>1</option>
                                           <option>2</option>
                                           <option>3</option>
                                           <option>4</option>
                                           <option>5</option>
                                           </select><!-- select Finish -->

                                    </div><!-- col-md-7 Finish -->

                               </div><!-- form-group Finish -->

                               <div class="form-group"><!-- form-group Begin -->
                                   <label class="col-md-5 control-label">Aroma</label>

                                   <div class="col-md-7"><!-- col-md-7 Begin -->

                                       <select name="product_size" class="form-control"><!-- form-control Begin -->

                                           <option>Selectati o aroma</option>
                                           <option>Ciocolata</option>
                                           <option>Vanilie</option>
                                           <option>Banana</option>

                                       </select><!-- form-control Finish -->

                                   </div><!-- col-md-7 Finish -->
                               </div><!-- form-group Finish -->

                               <p class="price">289 lei</p>

                               <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart"> Adaugare in Cos</button></p>

                           </form><!-- form-horizontal Finish -->

                       </div><!-- box Finish -->

                       <div class="row" id="thumbs"><!-- row Begin -->

                           <div class="col-xs-4"><!-- col-xs-4 Begin -->
                               <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb"><!-- thumb Begin -->
                                   <img src="admin_area/product_images/produs1.JPG" alt="Produs 1" class="img-responsive">
                               </a><!-- thumb Finish -->
                           </div><!-- col-xs-4 Finish -->

                           <div class="col-xs-4"><!-- col-xs-4 Begin -->
                               <a data-target="#myCarousel" data-slide-to="1" href="#" class="thumb"><!-- thumb Begin -->
                                   <img src="admin_area/product_images/produs1-2.JPG" alt="Produs 2" class="img-responsive">
                               </a><!-- thumb Finish -->
                           </div><!-- col-xs-4 Finish -->

                       </div><!-- row Finish -->

                   </div><!-- col-sm-6 Finish -->


               </div><!-- row Finish -->

               <div class="box" id="details"><!-- box Begin -->

                       <h4>Detalii produs</h4>

                   <p>

                       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione praesentium ipsum accusantium facere nulla, beatae vitae consequatur enim et nesciunt possimus doloribus omnis dolorum, ea quibusdam excepturi asperiores, temporibus! Consequatur?

                   </p>

                       <h4>Arome</h4>

                       <ul>
                           <li>Ciocolata</li>
                           <li>Vanilie</li>
                           <li>Banana</li>
                       </ul>

                       <hr>

               </div><!-- box Finish -->

               <div id="row same-heigh-row"><!-- #row same-heigh-row Begin -->
                   <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Begin -->
                       <div class="box same-height headline"><!-- box same-height headline Begin -->
                           <h3 class="text-center">Produse care ti-ar placea</h3>
                       </div><!-- box same-height headline Finish -->
                   </div><!-- col-md-3 col-sm-6 Finish -->

                   <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive Begin -->
                       <div class="product same-height"><!-- product same-height Begin -->
                           <a href="details.php">
                               <img class="img-responsive" src="admin_area/product_images/produs2.JPG" alt="Produs 2">
                            </a>

                            <div class="text"><!-- text Begin -->
                                <h3><a href="details.php">Omega - 3T</a></h3>

                                <p class="price">87 lei</p>

                            </div><!-- text Finish -->

                        </div><!-- product same-height Finish -->
                   </div><!-- col-md-3 col-sm-6 center-responsive Finish -->

                   <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive Begin -->
                       <div class="product same-height"><!-- product same-height Begin -->
                           <a href="details.php">
                               <img class="img-responsive" src="admin_area/product_images/produs3.JPG" alt="Produs 3">
                            </a>

                            <div class="text"><!-- text Begin -->
                                <h3><a href="details.php">Creapure 300g</a></h3>

                                <p class="price">129 lei</p>

                            </div><!-- text Finish -->

                        </div><!-- product same-height Finish -->
                   </div><!-- col-md-3 col-sm-6 center-responsive Finish -->

                   <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive Begin -->
                       <div class="product same-height"><!-- product same-height Begin -->
                           <a href="details.php">
                               <img class="img-responsive" src="admin_area/product_images/produs4.JPG" alt="Produs 4">
                            </a>

                            <div class="text"><!-- text Begin -->
                                <h3><a href="details.php">iGlutamine 450g</a></h3>

                                <p class="price">129 lei</p>

                            </div><!-- text Finish -->

                        </div><!-- product same-height Finish -->
                   </div><!-- col-md-3 col-sm-6 center-responsive Finish -->

               </div><!-- #row same-heigh-row Finish -->

           </div><!-- col-md-9 Finish -->

       </div><!-- container Finish -->
   </div><!-- #content Finish -->

   <?php

    include("includes/footer.php");

    ?>

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>


</body>
</html>
