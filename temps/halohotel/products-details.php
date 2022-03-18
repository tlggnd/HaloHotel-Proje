<?php $sayfa = "Products Name";?><!-- LİSTELENEN ÜRÜN ADI GELECEK -->
<?php require_once 'header.php'; ?>


<title>Halo Hotel Equipment || <?php echo $sayfa; ?>  </title>

<br>
<br>
<br>
<br>
<br>

<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="index.php">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a>Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->




<div class="product-area section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h2> <?php echo $sayfa; ?> </h2>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="card">
				<div class="container-fliud">
					<div class="wrapper row">
						<div class="preview col-md-6">

							<div class="preview-pic tab-content">
								 <div class="tab-pane active" id="pic-1"><img style="width: 250px; height: 100%;"   src="images/glasses.jpg" alt="KEYWORS GELECEK"></div>
							</div>

						</div>
						<div class="details col-md-6">
							<h3 class="product-title">Product Name</h3>

							<p class="product-description">ÜRÜN AÇIKLAMA Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat.  </p>
							<h6 class="price">Code <span>3011.PBC.66199</span></h6>
							<h6 class="price">Size <span>770 cc / 270 mm</span></h6>
							<h6 class="price">Unit(s) Per Package <span>12 units</span></h6>

							<div class="action">
								<button class="add-to-cart btn btn-default" type="button">add to cart</button>
								<button class="like btn btn-default" type="button">go to claim list</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


	</div>
</div>

<!-- End Product Area -->


<?php require_once 'footer.php'; ?>