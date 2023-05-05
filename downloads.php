<?php include('./inc/env.php')?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Downloads - <?php echo $hostname ?></title>
	<?php include('./inc/css.php')?>
</head>

<body>
	<div id="preloader">
		<div id="status"></div>
	</div>
	<?php include('./inc/header.php')?>
	<section class="breadcrumb-main" style="background-image: url(images/breadcrumb/admission.jpg);">
		<div class="container">
			<div class="breadcrumb-inner">
				<h2>Downloads</h2>
				<ul class="breadcrumb-url py-1">
					<li class="mr-3"><a href="http://<?php echo $host?>">Home</a></li>
					<li>Downloads</li>
				</ul>
			</div>
		</div>
	</section>
	<section class="brief-details-cbse-norms px-0">
		<div class="container" style="z-index: 2;position: relative;">
			<div class="row">
				<div class="col-lg-12 mx-auto">
					<div class="card">
						<div class="card-body text-center">
							<h4 class="mb-0">No Download File Available</h4>
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
