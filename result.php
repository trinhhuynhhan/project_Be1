<?php include "header.php" ?>

<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb-tree">
					<li><a href="#">Home</a></li>
					<li><a href="#">All Categories</a></li>
					<li><a href="#">Accessories</a></li>
					<li class="active"></li>
				</ul>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /BREADCRUMB -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- ASIDE -->
			<div id="aside" class="col-md-3">
				<!-- aside Widget -->
				<div class="aside">
					<h3 class="aside-title">Categories</h3>
					<div class="checkbox-filter">

						<div class="input-checkbox">
							<input type="checkbox" id="category-1">
							<label for="category-1">
								<span></span>
								Laptops
								<small>(120)</small>
							</label>
						</div>

						<div class="input-checkbox">
							<input type="checkbox" id="category-2">
							<label for="category-2">
								<span></span>
								Smartphones
								<small>(740)</small>
							</label>
						</div>

						<div class="input-checkbox">
							<input type="checkbox" id="category-3">
							<label for="category-3">
								<span></span>
								Cameras
								<small>(1450)</small>
							</label>
						</div>

						<div class="input-checkbox">
							<input type="checkbox" id="category-4">
							<label for="category-4">
								<span></span>
								Accessories
								<small>(578)</small>
							</label>
						</div>

						<div class="input-checkbox">
							<input type="checkbox" id="category-5">
							<label for="category-5">
								<span></span>
								Laptops
								<small>(120)</small>
							</label>
						</div>

						<div class="input-checkbox">
							<input type="checkbox" id="category-6">
							<label for="category-6">
								<span></span>
								Smartphones
								<small>(740)</small>
							</label>
						</div>
					</div>
				</div>
				<!-- /aside Widget -->

				<!-- aside Widget -->
				<div class="aside">
					<h3 class="aside-title">Price</h3>
					<div class="price-filter">
						<div id="price-slider"></div>
						<div class="input-number price-min">
							<input id="price-min" type="number">
							<span class="qty-up">+</span>
							<span class="qty-down">-</span>
						</div>
						<span>-</span>
						<div class="input-number price-max">
							<input id="price-max" type="number">
							<span class="qty-up">+</span>
							<span class="qty-down">-</span>
						</div>
					</div>
				</div>
				<!-- /aside Widget -->

				<!-- aside Widget -->
				<div class="aside">
					<h3 class="aside-title">Brand</h3>
					<div class="checkbox-filter">
						<div class="input-checkbox">
							<input type="checkbox" id="brand-1">
							<label for="brand-1">
								<span></span>
								SAMSUNG
								<small>(578)</small>
							</label>
						</div>
						<div class="input-checkbox">
							<input type="checkbox" id="brand-2">
							<label for="brand-2">
								<span></span>
								LG
								<small>(125)</small>
							</label>
						</div>
						<div class="input-checkbox">
							<input type="checkbox" id="brand-3">
							<label for="brand-3">
								<span></span>
								SONY
								<small>(755)</small>
							</label>
						</div>
						<div class="input-checkbox">
							<input type="checkbox" id="brand-4">
							<label for="brand-4">
								<span></span>
								SAMSUNG
								<small>(578)</small>
							</label>
						</div>
						<div class="input-checkbox">
							<input type="checkbox" id="brand-5">
							<label for="brand-5">
								<span></span>
								LG
								<small>(125)</small>
							</label>
						</div>
						<div class="input-checkbox">
							<input type="checkbox" id="brand-6">
							<label for="brand-6">
								<span></span>
								SONY
								<small>(755)</small>
							</label>
						</div>
					</div>
				</div>
				<!-- /aside Widget -->


				<!-- aside Widget -->
				<div class="aside">
					<h3 class="aside-title">Top selling</h3>
					<?php
					$get5TopSellingProducts = $product->get5TopSellingProducts();
					foreach ($get5TopSellingProducts as $value) :
					?>
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/<?php echo $value['image'] ?>" alt="">
							</div>
							<div class="product-body">
								<p class="product-category"><?php echo $value['type_name'] ?></p>
								<h3 class="product-name"><a href="#"><?php echo $value['name'] ?></a></h3>
								<h4 class="product-price"><?php echo number_format($value['price']) ?> VND</del></h4>
							</div>
						</div>
					<?php
					endforeach;
					?>

				</div>
				<!-- /aside Widget -->
			</div>
			<!-- /ASIDE -->

			<!-- STORE -->
			<div id="store" class="col-md-9">
				<!-- store top filter -->
				<div class="store-filter clearfix">
					<div class="store-sort">
						<label>
							Sort By:
							<select class="input-select">
								<option value="0">Popular</option>
								<option value="1">Position</option>
							</select>
						</label>

						<label>
							Show:
							<select class="input-select">
								<option value="0">20</option>
								<option value="1">50</option>
							</select>
						</label>
					</div>
					<ul class="store-grid">
						<li class="active"><i class="fa fa-th"></i></li>
						<li><a href="#"><i class="fa fa-th-list"></i></a></li>
					</ul>
				</div>
				<!-- /store top filter -->

				<!-- store products -->
				<div class="row">
					<?php
					if (isset($_GET['keyword'])) :
						$keyword = $_GET['keyword'];
						$search = $product->search($keyword);
						foreach ($search as $value) :

					?>
							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img style="height: 263px" src="./img/<?php echo $value['image'] ?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category"><?php echo $value['type_name'] ?></p>
										<h3 class="product-name"><a href="#"><?php echo $value['name'] ?></a></h3>
										<h4 class="product-price"><?php echo number_format($value['price']) ?> VNĐ</h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart">
									<button class="add-to-cart-btn" type="submit" name="add_to_cart"><a href="cart.php?id=<?php echo $value['id'] ?>" target="_self"> add to cart</a><i class="fa fa-shopping-cart"></i></button>	
									</div>
								</div>
							</div>
					<?php
						endforeach;
					endif;
					?>
					<!-- /product -->
					<!-- /store products -->

					<!-- store bottom filter -->
					<!-- /store bottom filter -->
				</div>
				<!-- /STORE -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- NEWSLETTER -->
	<div id="newsletter" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12">
					<div class="newsletter">
						<p>Sign Up for the <strong>NEWSLETTER</strong></p>
						<form>
							<input class="input" type="email" placeholder="Enter Your Email">
							<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
						</form>
						<ul class="newsletter-follow">
							<li>
								<a href="#"><i class="fa fa-facebook"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-twitter"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-instagram"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-pinterest"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /NEWSLETTER -->

	<?php include "footer.php" ?>

	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>

	</body>

	</html>