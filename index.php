<?php

$active='Acasa';
include("includes/header.php");
?>



	<div class="container" id="slider"><!--container begin -->

		<div class="col-md-12"><!--col-md-12 begin -->

			<div class="carousel slide" id="myCarousel" data-ride="carousel"><!--carousel slide begin -->

				<ol class="carousel-indicators">

					<li class="active" data-target="#myCarousel" data-slide-to="0"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>

				</ol>

				<div class="carousel-inner"><!--carousel-inner begin -->

					 <?php

                   $get_slides = "select * from slider LIMIT 0,1";

                   $run_slides = mysqli_query($con,$get_slides);

                   while($row_slides=mysqli_fetch_array($run_slides)){

                       $slide_name = $row_slides['slide_name'];
                       $slide_image = $row_slides['slide_image'];

                       echo "

                       <div class='item active'>

                       <img src='admin_area/slides_images/$slide_image'>

                       </div>

                       ";

                   }

                   $get_slides = "select * from slider LIMIT 1,3";

                   $run_slides = mysqli_query($con,$get_slides);

                   while($row_slides=mysqli_fetch_array($run_slides)){

                       $slide_name = $row_slides['slide_name'];
                       $slide_image = $row_slides['slide_image'];

                       echo "

                       <div class='item'>

                       <img src='admin_area/slides_images/$slide_image'>

                       </div>

                       ";

                   }

                   ?>

				</div><!--carousel-inner end -->

				<a href="#myCarousel" class="left carousel-control" data-slide="prev">

					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Inapoi</span>

				</a>
				<a href="#myCarousel" class="right carousel-control" data-slide="next">

					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Inainte</span>

				</a>

			</div><!--carousel slide end -->

		</div><!--col-md-12 end -->

	</div><!--container end -->

	<div id="advantages"><!--advantages begin -->

		<div class="container"><!--container begin -->

			<div class="same-height-row"><!--same-height-row begin -->

				<div class="col-sm-4"><!--col-sm-4 begin -->

					<div class="box same-height"><!--box same-heightbegin -->

						<div class="icon">

							<i class="fa fa-heart"></i>

						</div>

						<h3><a href="#">Ne iubim clientii</a></h3>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

					</div><!--box same-height end -->

				</div><!--col-sm-4 end -->

				<div class="col-sm-4"><!--col-sm-4 begin -->

					<div class="box same-height"><!--box same-heightbegin -->

						<div class="icon">

							<i class="fa fa-tag"></i>

						</div>

						<h3><a href="#">Cele mai bune preturi</a></h3>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

					</div><!--box same-height end -->

				</div><!--col-sm-4 end -->

				<div class="col-sm-4"><!--col-sm-4 begin -->

					<div class="box same-height"><!--box same-heightbegin -->

						<div class="icon">

							<i class="fa fa-thumbs-up"></i>

						</div>

						<h3><a href="#">100% Original</a></h3>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

					</div><!--box same-height end -->

				</div><!--col-sm-4 end -->


			</div><!--same-height-row end -->

		</div><!--container end -->

	</div><!--advantages end -->

	<div id="hot"><!--#hot begin -->

		<div class="box"><!--box begin -->

			<div class="container"><!--container begin -->

				<div class="col-md-12"><!--col-md-12 begin -->

					<h2>
						Produse recente
					</h2>

				</div><!--col-md-12 end -->

			</div><!--container end -->

		</div><!--box end -->

	</div><!--#hot end -->

	<div id="content" class="container"><!--container begin -->

		<div class="row"><!--row begin -->

		   <?php

           getPro();

           ?>

		</div><!--row end -->

	</div><!--container end -->

	<?php

	include("includes/footer.php");

	?>

	<script src="js/jquery-331.min.js"></script>
	<script src="js/bootstrap-337.min.js"></script>
</body>
</html>


