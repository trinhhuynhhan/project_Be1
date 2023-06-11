<?php include "header.php" ?>
<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<form action="billingaddress.php" method="post" enctype="multipart/form-data">
				<div class="col-md-7">
					<!-- Billing Details -->

					<div class="billing-details">
						<div class="section-title">
							<h3 class="title">Billing address</h3>
						</div>
						<div class="form-group">
							<input class="input" type="text" name="first-name" placeholder="First Name">
						</div>
						<div class="form-group">
							<input class="input" type="text" name="last-name" placeholder="Last Name">
						</div>
						<div class="form-group">
							<input class="input" type="email" name="email" placeholder="Email">
						</div>
						<div class="form-group">
							<input class="input" type="text" name="address" placeholder="Address">
						</div>
						<div class="form-group">
							<input class="input" type="text" name="city" placeholder="City">
						</div>
						<div class="form-group">
							<input class="input" type="text" name="country" placeholder="Country">
						</div>
						<div class="form-group">
							<input class="input" type="text" name="zip-code" placeholder="ZIP Code">
						</div>
						<div class="form-group">
							<input class="input" type="tel" name="tel" placeholder="Telephone">
						</div>
						<div class="form-group">
							<div class="input-checkbox">
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
									<input class="input" type="password" name="password" placeholder="Enter Your Password">
								</div>
							</div>
						</div>
					</div>
					<!-- /Billing Details -->

					<!-- Shiping Details -->

					<!-- /Shiping Details -->

					<!-- Order notes -->
					<div class="order-notes">
						<textarea class="input" placeholder="Order Notes"></textarea>
					</div>
					<!-- /Order notes -->
				</div>

				<!-- Order Details -->
				<div class="col-md-5 order-details">
					<div class="section-title text-center">
						<h3 class="title">Your Order</h3>
					</div>
					<div class="order-summary">
						<?php
						$total_price = 0;
						$getAll = $product->getAllProducts();
						if (isset($_SESSION['cart'])) :
						?>
							<div class="order-col">
								<div><strong>PRODUCT</strong></div>
								<div><strong>TOTAL</strong></div>
							</div>
							<div class="order-products">
								<?php foreach ($_SESSION['cart'] as $key => $value) :
									foreach ($getAll as $p) :
										if ($p['id'] == $key) :
								?>
											<div class="order-col">
												<div><span>x<?php echo $value ?></span> - <?php echo $p['name'] ?></div>
												<div><?php echo number_format($p['price']) ?> VNĐ</div>
											</div>
								<?php
											$total_price += ($p['price'] * $value);
										endif;
									endforeach;
								endforeach;
								?>
							</div>
							<div class="order-col">
								<div>Shiping</div>
								<div><strong>
										<?php
										$ship = 50000;
										if ($total_price > 15000000) {
											echo "FREE";
										} else if (1 < $total_price && $total_price < 15000000) {
											echo number_format($ship) . " VNĐ";
										} else {
											echo $ship = 0;
										} ?>
									</strong></div>
							</div>
							<div class="order-col">
								<div><strong>TOTAL</strong></div>
								<div><strong class="order-total">
										<?php
										if ($total_price > 15000000) {
											echo number_format($total_price);
										} else {
											echo number_format($total_price + $ship);
										}
										?> VNĐ
									</strong></div>
							</div>
						<?php
						endif; ?>
					</div>
					<div class="payment-method">
						<div class="input-radio">
							<input type="radio" name="payment" id="payment-1">
							<label for="payment-1">
								<span></span>
								Direct Bank Transfer
							</label>
							<div class="caption">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
						<div class="input-radio">
							<input type="radio" name="payment" id="payment-2">
							<label for="payment-2">
								<span></span>
								Cheque Payment
							</label>
							<div class="caption">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
						<div class="input-radio">
							<input type="radio" name="payment" id="payment-3">
							<label for="payment-3">
								<span></span>
								Paypal System
							</label>
							<div class="caption">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
					</div>
					<div class="input-checkbox">
						<input type="checkbox" id="terms">
						<label for="terms">
							<span></span>
							I've read and accept the <a href="#">terms & conditions</a>
						</label>
					</div>
					<!-- <a href="#" class="primary-btn order-submit">Place order</a> -->
					<input type="submit" value="Place order" class="primary-btn order-submit">
					<a href="viewcart.php" class="primary-btn order-submit">Back to Cart</a>
				</div>
				<!-- /Order Details -->
			</form>
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


<?php include "footer.php"; ?>
<!-- jQuery Plugins -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/nouislider.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="js/main.js"></script>

</body>

</html>