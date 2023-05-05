<?php include('./inc/env.php')?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Management - <?php echo $hostname ?></title>
	<?php include('./inc/css.php')?>
</head>

<body>
	<div id="preloader">
		<div id="status"></div>
	</div>
	<?php include('./inc/header.php')?>
	<section class="breadcrumb-main">
		<div class="container">
			<div class="breadcrumb-inner">
				<h2>Management</h2>
				<ul class="breadcrumb-url py-1">
					<li class="mr-3"><a href="http://<?php echo $host?>">Home</a></li>
					<li>Management</li>
				</ul>
			</div>
		</div>
		<div class="sl-overlay"></div>
	</section>
	<section class="brief-details-cbse-norms px-0 bg-theme">
		<div class="container" style="z-index: 2;position: relative;">
			<div class="row">
				<div class="col-lg-12 mx-auto">
					<div class="card card bg-transparent border-0">
						<div class="card-body text-center">
						<iframe src="<?php echo $host ?>assets/docs/PTA.pdf" height="1000px" width="100%" style="border:0"></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include('./inc/footer.php')?>
	<?php include('./inc/js.php')?>

</body>

</html>
