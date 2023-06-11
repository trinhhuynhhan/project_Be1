<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/protype.php";
require "models/manufacture.php";
require "models/user.php";
$product = new Product;
$manufacture = new Manufacture;
$role_id = new User;
$getManu = $manufacture->getAllManufactures();
$getAllManu = $manufacture->getAllManufactures();
$getAllProducts = $product->getAllProducts();
$total_price = 0;

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Electro - HTML Ecommerce Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<!-- HEADER -->
	<header>
		<!-- TOP HEADER -->
		<div id="top-header">
			<div class="container">
				<ul class="header-links pull-left">
					<li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
					<li><a href="#"><i class="fa fa-envelope-o"></i> tdc@email.com</a></li>
					<li><a href="#"><i class="fa fa-map-marker"></i> TP.HCM</a></li>
				</ul>
				<ul class="header-links pull-right">
					<li><a href="#"><i class="fa fa-dollar"></i> VNĐ </a></li>
					<li><a href="login/login.php"><i class="fa fa-user-o"></i>
							<?php
							if (isset($_SESSION['user'])) {
								if ($_SESSION['user'] != "") {
							?>
									<a href="information.php"> <?php echo $_SESSION['user'] ?></a>
					<li><a href="login/logout.php">Logout </a></li>
			<?php
								}
							} else {
								echo "My account";
							}
			?>
			</a></li>
				</ul>
			</div>
		</div>
		<!-- /TOP HEADER -->

		<!-- MAIN HEADER -->
		<div id="header">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- LOGO -->
					<div class="col-md-3">
						<div class="header-logo">
							<a href="index.php" class="logo">
								<img src="" alt="">
							</a>
						</div>
					</div>
					<!-- /LOGO -->

					<!-- SEARCH BAR -->
					<div class="col-md-6">
						<div class="header-search">
							<form action="result.php" method="get">
								<select class="input-select">
									<option value="0">All Categories</option>
									<option value="1">Category 01</option>
									<option value="1">Category 02</option>
								</select>
								<input name="keyword" class="input" placeholder="Search here">
								<button type="submit" class="search-btn">Search</button>
							</form>
						</div>
					</div>
					<!-- /SEARCH BAR -->

					<!-- ACCOUNT -->
					<div class="col-md-3 clearfix">
						<div class="header-ctn">
							<!-- Wishlist -->
							<div class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
									<i class="fa fa-heart-o"></i>
									<span>Your Wishlist</span>
									<?php
									$getAll = $product->getAllProducts();
									if (empty($_SESSION['wish'])) :
										$status = "<a>empty</a>";
									else :
										if (isset($_SESSION['wish'])) :
									?>
											<?php
											if (!empty($_SESSION['wish'])) :
												$cart_count = count(array_keys($_SESSION['wish']));
											?>
												<div class="qty"><span><?php echo $cart_count ?></span></div>
											<?php endif; ?>
								</a>
								<div class="cart-dropdown">
									<div class="cart-list">
										<?php foreach ($_SESSION['wish'] as $key => $value) :
												foreach ($getAll as $p) :
													if ($p['id'] == $key) :
										?>
													<div class="product-widget">
														<div class="product-img">
															<img src="./img/<?php echo $p['image'] ?>" alt="">
														</div>
														<div class="product-body">
															<h3 class="product-name"><a href="#"><?php echo $p['name'] ?></a></h3>
															<h4 class="product-price"><span class="qty" style="color: #000055"></span> <?php echo number_format($p['price']) ?> VNĐ</h4>
														</div>
														<button class="delete"><a href="delwish.php?id=<?php echo $key ?>" target="_self"><strong><i class="fa fa-close" style="color: red;"></i></strong></a></button>
													</div>
										<?php
													endif;
												endforeach;
											endforeach;
										?>
									</div>
								</div>
						<?php
										endif;
									endif;
						?>
							</div>
							<!-- /Wishlist -->

							<!-- Cart -->
							<div class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
									<i class="fa fa-shopping-cart"></i>
									<span>Your Cart</span>
									<?php
									$getAll = $product->getAllProducts();
									if (isset($_SESSION['cart'])) :
									?>
										<?php
										if (!empty($_SESSION['cart'])) :
											$cart_count = count(array_keys($_SESSION['cart']));
										?>
											<div class="qty"><span><?php echo $cart_count ?></span></div>
										<?php endif; ?>
								</a>
								<div class="cart-dropdown">
									<div class="cart-list">
										<?php foreach ($_SESSION['cart'] as $key => $value) :
											foreach ($getAll as $p) :
												if ($p['id'] == $key) :
										?>
													<div class="product-widget">
														<div class="product-img">
															<img src="./img/<?php echo $p['image'] ?>" alt="">
														</div>
														<div class="product-body">
															<h3 class="product-name"><a href="#"><?php echo $p['name'] ?></a></h3>
															<h4 class="product-price"><span class="qty" style="color: #000055">x<?php echo $value ?></span> <?php echo number_format($p['price']) ?> VNĐ</h4>
														</div>
														<button class="delete"><a href="delete.php?id=<?php echo $key ?>" target="_self"><strong><i class="fa fa-close" style="color: red;"></i></strong></a></button>
													</div>
										<?php
													$total_price += ($p['price'] * $value);
												endif;
											endforeach;
										endforeach;
										?>
									</div>
									<div class="cart-summary">
										<h5>SUBTOTAL: <?php echo number_format($total_price) ?> VNĐ</h5>
									</div>
									<div class="cart-btns">
										<a href="viewcart.php">View Cart</a>
										<a href="checkout.php">Checkout <i class="fa fa-arrow-circle-right"></i></a>
									</div>
								</div>
							<?php endif; ?>
							</div>
							<!-- /Cart -->

							<!-- Menu Toogle -->
							<div class="menu-toggle">
								<a href="#">
									<i class="fa fa-bars"></i>
									<span>Menu</span>
								</a>
							</div>
							<!-- /Menu Toogle -->
						</div>
					</div>
					<!-- /ACCOUNT -->
				</div>
				<!-- row -->
			</div>
			<!-- container -->
		</div>
		<!-- /MAIN HEADER -->
	</header>
	<!-- /HEADER -->

	<!-- NAVIGATION -->
	<nav id="navigation">
		<!-- container -->
		<div class="container">
			<!-- responsive-nav -->
			<div id="responsive-nav">
				<!-- NAV -->
				<ul class="main-nav nav navbar-nav">
					<li class="active"><a href="index.php">Home</a></li>
					<?php foreach ($getManu as $value) :
					?>
						<li><a href="resultmanu.php?manu_id=<?php echo $value['manu_id'] ?>">
								<?php echo $value['manu_name'] ?>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
				<!-- /NAV -->
			</div>
			<!-- /responsive-nav -->
		</div>
		<!-- /container -->
	</nav>
	<!-- /NAVIGATION -->