@extends ('layouts.home')

@section('title', 'Laravel E-Ticaret Sitesi')

@section('content')

@include ('home._slider')



<!-- Start Product Area -->
<div class="product-area section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h2>New Products</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="product-info">
					<div class="nav-main">
						<!-- Tab Nav -->
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#hotelhquipments" role="tab">Hotel Equipments</a></li>
							<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#industrialkitchen" role="tab">Industrial Kitchen</a></li>

						</ul>
						<!--/ End Tab Nav -->
					</div>
					<div class="tab-content" id="myTabContent">
						<!-- Start Single Tab -->
						<div class="tab-pane fade show active" id="hotelhquipments" role="tabpanel">
							<div class="tab-single">
								<div class="row">

										<!--/ Ana sayfa da listelenecek son eklenen ürünler alt alta 2 yana doğru 4 adet olacak 
											kategori bazında toplamda 8 ürün listelenecek  -->


											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="products-details.php">
															<img class="default-img" src="{{ asset('assets') }}/images/products.webp" alt="#">
															<img class="hover-img" src="{{ asset('assets') }}/images/products.webp" alt="#">
															<span class="new">New</span>
														</a>
														<div class="button-head">
															<div class="product-action">

																<a title="See Details" href="#"><i class=" ti-eye"></i><span>See Details</span></a>

															</div>
															<div class="product-action-2">
																<a title="Add to bid" href="#">Add to Bid</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="products-details.php">Products Name</a></h3>
													</div>
												</div>
											</div>

											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="products-details.php">
															<img class="default-img" src="{{ asset('assets') }}/images/products.webp" alt="#">
															<img class="hover-img" src="{{ asset('assets') }}/images/products.webp" alt="#">
															<span class="new">New</span>
														</a>
														<div class="button-head">
															<div class="product-action">

																<a title="See Details" href="#"><i class=" ti-eye"></i><span>See Details</span></a>

															</div>
															<div class="product-action-2">
																<a title="Add to bid" href="#">Add to Bid</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="products-details.php">Products Name</a></h3>
													</div>
												</div>
											</div>

											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="products-details.php">
															<img class="default-img" src="{{ asset('assets') }}/images/products.webp" alt="#">
															<img class="hover-img" src="{{ asset('assets') }}/images/products.webp" alt="#">
															<span class="new">New</span>
														</a>
														<div class="button-head">
															<div class="product-action">

																<a title="See Details" href="#"><i class=" ti-eye"></i><span>See Details</span></a>

															</div>
															<div class="product-action-2">
																<a title="Add to bid" href="#">Add to Bid</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="products-details.php">Products Name</a></h3>
													</div>
												</div>
											</div>

											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="products-details.php">
															<img class="default-img" src="{{ asset('assets') }}/images/products.webp" alt="#">
															<img class="hover-img" src="{{ asset('assets') }}/images/products.webp" alt="#">
															<span class="new">New</span>
														</a>
														<div class="button-head">
															<div class="product-action">

																<a title="See Details" href="#"><i class=" ti-eye"></i><span>See Details</span></a>

															</div>
															<div class="product-action-2">
																<a title="Add to bid" href="#">Add to Bid</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="products-details.php">Products Name</a></h3>
													</div>
												</div>
											</div>

											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="products-details.php">
															<img class="default-img" src="{{ asset('assets') }}/images/products.webp" alt="#">
															<img class="hover-img" src="{{ asset('assets') }}/images/products.webp" alt="#">
															<span class="new">New</span>
														</a>
														<div class="button-head">
															<div class="product-action">

																<a title="See Details" href="#"><i class=" ti-eye"></i><span>See Details</span></a>

															</div>
															<div class="product-action-2">
																<a title="Add to bid" href="#">Add to Bid</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="products-details.php">Products Name</a></h3>
													</div>
												</div>
											</div>

											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="products-details.php">
															<img class="default-img" src="{{ asset('assets') }}/images/products.webp" alt="#">
															<img class="hover-img" src="{{ asset('assets') }}/images/products.webp" alt="#">
															<span class="new">New</span>
														</a>
														<div class="button-head">
															<div class="product-action">

																<a title="See Details" href="#"><i class=" ti-eye"></i><span>See Details</span></a>

															</div>
															<div class="product-action-2">
																<a title="Add to bid" href="#">Add to Bid</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="products-details.php">Products Name</a></h3>
													</div>
												</div>
											</div>

											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="products-details.php">
															<img class="default-img" src="{{ asset('assets') }}/images/products.webp" alt="#">
															<img class="hover-img" src="{{ asset('assets') }}/images/products.webp" alt="#">
															<span class="new">New</span>
														</a>
														<div class="button-head">
															<div class="product-action">

																<a title="See Details" href="#"><i class=" ti-eye "></i><span>See Details</span></a>

															</div>
															<div class="product-action-2">
																<a title="Add to bid" href="#">Add to Bid</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="products-details.php">Products Name</a></h3>
													</div>
												</div>
											</div>

											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="products-details.php">
															<img class="default-img" src="{{ asset('assets') }}/images/products.webp" alt="#">
															<img class="hover-img" src="{{ asset('assets') }}/images/products.webp" alt="#">
															<span class="new">New</span>
														</a>
														<div class="button-head">
															<div class="product-action">

																<a title="See Details" href="#"><i class=" ti-eye "></i><span>See Details</span></a>

															</div>
															<div class="product-action-2">
																<a title="Add to bid" href="#">Add to Bid</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="products-details.php">Products Name</a></h3>
													</div>
												</div>
											</div>




										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="industrialkitchen" role="tabpanel">
									<div class="tab-single">
										<div class="row">




											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="products-details.php">
															<img class="default-img" src="{{ asset('assets') }}/images/products2.webp" alt="#">
															<img class="hover-img" src="{{ asset('assets') }}/images/products2.webp" alt="#">
															<span class="new">New</span>
														</a>
														<div class="button-head">
															<div class="product-action">

																<a title="See Details" href="#"><i class=" ti-eye"></i><span>See Details</span></a>

															</div>
															<div class="product-action-2">
																<a title="Add to bid" href="#">Add to Bid</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="products-details.php">Products Name</a></h3>
													</div>
												</div>
											</div>

											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="products-details.php">
															<img class="default-img" src="{{ asset('assets') }}/images/products2.webp" alt="#">
															<img class="hover-img" src="{{ asset('assets') }}/images/products2.webp" alt="#">
															<span class="new">New</span>
														</a>
														<div class="button-head">
															<div class="product-action">

																<a title="See Details" href="#"><i class=" ti-eye"></i><span>See Details</span></a>

															</div>
															<div class="product-action-2">
																<a title="Add to bid" href="#">Add to Bid</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="products-details.php">Products Name</a></h3>
													</div>
												</div>
											</div>

											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="products-details.php">
															<img class="default-img" src="{{ asset('assets') }}/images/products2.webp" alt="#">
															<img class="hover-img" src="{{ asset('assets') }}/images/products2.webp" alt="#">
															<span class="new">New</span>
														</a>
														<div class="button-head">
															<div class="product-action">

																<a title="See Details" href="#"><i class=" ti-eye"></i><span>See Details</span></a>

															</div>
															<div class="product-action-2">
																<a title="Add to bid" href="#">Add to Bid</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="products-details.php">Products Name</a></h3>
													</div>
												</div>
											</div>

											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="products-details.php">
															<img class="default-img" src="{{ asset('assets') }}/images/products2.webp" alt="#">
															<img class="hover-img" src="{{ asset('assets') }}/images/products2.webp" alt="#">
															<span class="new">New</span>
														</a>
														<div class="button-head">
															<div class="product-action">

																<a title="See Details" href="#"><i class=" ti-eye"></i><span>See Details</span></a>

															</div>
															<div class="product-action-2">
																<a title="Add to bid" href="#">Add to Bid</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="products-details.php">Products Name</a></h3>
													</div>
												</div>
											</div>

											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="products-details.php">
															<img class="default-img" src="{{ asset('assets') }}/images/products2.webp" alt="#">
															<img class="hover-img" src="{{ asset('assets') }}/images/products2.webp" alt="#">
															<span class="new">New</span>
														</a>
														<div class="button-head">
															<div class="product-action">

																<a title="See Details" href="#"><i class=" ti-eye"></i><span>See Details</span></a>

															</div>
															<div class="product-action-2">
																<a title="Add to bid" href="#">Add to Bid</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="products-details.php">Products Name</a></h3>
													</div>
												</div>
											</div>

											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="products-details.php">
															<img class="default-img" src="{{ asset('assets') }}/images/products2.webp" alt="#">
															<img class="hover-img" src="{{ asset('assets') }}/images/products2.webp" alt="#">
															<span class="new">New</span>
														</a>
														<div class="button-head">
															<div class="product-action">

																<a title="See Details" href="#"><i class=" ti-eye"></i><span>See Details</span></a>

															</div>
															<div class="product-action-2">
																<a title="Add to bid" href="#">Add to Bid</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="products-details.php">Products Name</a></h3>
													</div>
												</div>
											</div>

											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="products-details.php">
															<img class="default-img" src="{{ asset('assets') }}/images/products2.webp" alt="#">
															<img class="hover-img" src="{{ asset('assets') }}/images/products2.webp" alt="#">
															<span class="new">New</span>
														</a>
														<div class="button-head">
															<div class="product-action">

																<a title="See Details" href="#"><i class=" ti-eye "></i><span>See Details</span></a>

															</div>
															<div class="product-action-2">
																<a title="Add to bid" href="#">Add to Bid</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="products-details.php">Products Name</a></h3>
													</div>
												</div>
											</div>

											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="products-details.php">
															<img class="default-img" src="{{ asset('assets') }}/images/products2.webp" alt="#">
															<img class="hover-img" src="{{ asset('assets') }}/images/products2.webp" alt="#">
															<span class="new">New</span>
														</a>
														<div class="button-head">
															<div class="product-action">

																<a title="See Details" href="#"><i class=" ti-eye "></i><span>See Details</span></a>

															</div>
															<div class="product-action-2">
																<a title="Add to bid" href="#">Add to Bid</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="products-details.php">Products Name</a></h3>
													</div>
												</div>
											</div>



										</div>
									</div>
								</div>
								<!--/ End Single Tab -->


							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Product Area -->

		<!-- Start Midium Banner  -->
		<section class="midium-banner">
			<div class="container">
				<div class="row">
					<!-- Single Banner  -->
					<div class="col-lg-6 col-md-6 col-12">
						<div class="single-banner">
							<img src="{{ asset('assets') }}/images/main4.webp" alt="#">
							<div class="content">
								<p>Hotel Equipments</p>
								<h3 style="border-style: solid;">Offers <br>Up to<span> 50%</span></h3>
								<a href="#">Shop Now</a>
							</div>
						</div>
					</div>
					<!-- /End Single Banner  -->
					<!-- Single Banner  -->
					<div class="col-lg-6 col-md-6 col-12">
						<div class="single-banner">
							<img src="{{ asset('assets') }}/images/main3.webp" alt="#">
							<div class="content">
								<p>Industrial Kitchen</p>
								<h3 style="border-style: solid;">Offers <br>Up to<span> 30%</span></h3>
								<a href="#" class="btn">Shop Now</a>
							</div>
						</div>
					</div>
					<!-- /End Single Banner  -->
				</div>
			</div>
		</section>
		<!-- End Midium Banner -->



		<section class="section free-version-banner">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-8 offset-md-2 col-xs-12">
						<div class="section-title mb-60">
							<span class="text-white wow fadeInDown" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">Lorem ipsum dolor sit amet</span>
							<h2 class="text-white wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Lorem ipsum dolor sit amet,<br> Lorem ipsum dolor.</h2>
							<p class="text-white wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br>
							tempor incididunt ut labore et dolore magna aliqua.</p>

							<div class="button">
								<a href="#" target="_blank" rel="nofollow" class="btn wow fadeInUp" data-wow-delay=".8s">Contact Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

@endsection