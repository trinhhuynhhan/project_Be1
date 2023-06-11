<?php
include "headercart.php";
$role = 1;
$getad = $user->getUserByRole($role);
?>

<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<h3 class="breadcrumb-header">Account Information</h3>
				<ul class="breadcrumb-tree">
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
			<!-- Order Details -->
			<div class="col-md-5 order-details" style="margin-left: 350px;">
				<div class="section-title text-center">
					<h3 class="title" style="padding-bottom: 30px;">Your Information</h3>
					<h4 style="color: red;"><strong><?php echo $_SESSION['user'] ?></strong></h4>
					<?php
						if (isset($_POST['role_id']) == $user->getUserByRole($role)):
					?>
						<div><a href="">aaaaaaaaaaaaaaaaaa</a></div>
						
					<?php
					endif;
					var_dump($_POST);
					?>
				</div>
				<!-- /Order Details -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->
	<section class="content" style="padding-bottom: 50px;">

		<!-- Default box -->
		<div class="card">
			<div class="card-header">
				<a class="btn btn-success btn-sm" href="add-info.php">
					<i class="fas fa-plus"></i> Add Information
				</a>
				<br>
			</div>
			<div class="card-body p-0">
				<table class="table table-striped projects">
					<thead>
						<tr>
							<th style="width: 20%">
								Name
							</th>
							<th style="width: 10%" class="text-center">
								Date of bird
							</th>
							<th style="width: 30%" class="text-center">
								Address
							</th>
							<th style="width: 20%" class="text-center">
								Phone
							</th>
							<th style="width: 20%" class="text-center">
								CCCD
							</th>
							<th style="width: 20%">
							</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$getUser = $info->getUser();
						foreach ($getUser as $value) :
						?>
							<tr>
								<td style="text-align: center;"><?php echo $value['name'] ?></td>
								<td style="text-align: center;"><?php echo $value['dob'] ?></td>
								<td style="text-align: center;"><?php echo $value['address'] ?></td>
								<td style="text-align: center;"><?php echo $value['phone'] ?></td>
								<td style="text-align: center;"><?php echo $value['cccd'] ?></td>
								<td class="project-actions text-right">
									<a class="btn btn-info btn-sm" href="product-edit.php?id=<?php echo $value['id'] ?>">
										<i class="fas fa-pencil-alt">
										</i>
										Edit
									</a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->

	</section>

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