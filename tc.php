<?php include('./inc/env.php')?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Download TC - <?php echo $hostname ?></title>
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
				<h2>Download TC</h2>
				<ul class="breadcrumb-url py-1">
					<li class="mr-3"><a href="http://<?php echo $host?>">Home</a></li>
					<li>Download TC</li>
				</ul>
			</div>
		</div>
	</section>
	<section class="brief-details-cbse-norms  bg-white">
	   <div class="container">
	   <form action="/tc.php" method="POST">
			<div class="row">
				<div class="col">
				<select name="years" class="form-control px-2 py-1" required="">
					<option value="">Select Years</option>
					<option value="2015-16">2015-2016</option>
					<option value="2015-16">2016-2017</option>
					<option value="2017-18">2017-2018</option>
					<option value="2018-19">2018-2019</option>
					<option value="2019-20">2019-2020</option>
					<option value="2020-21">2020-2021</option>
					<option value="2021-22">2021-2022</option>
					<option value="2022-23">2022-2023</option>
				</select>
				</div>
				<div class="col">
				<select class="form-control px-2 py-1 required " name="class" required="">
					<option value="">Select Class </option>
					<option value="Nursery">Nursery</option>
					<option value="LKG"> LKG </option>
					<option value="UKG"> UKG </option>
					<option value="I"> I </option>
					<option value="II"> II </option>
					<option value="III"> III </option>
					<option value="IV"> IV </option>
					<option value="V"> V </option>
					<option value="VI"> VI </option>
					<option value="VII"> VII </option>
					<option value="VIII"> VIII </option>
					<option value="IX"> IX </option>
					<option value="X"> X </option>
					<option value="XI"> XI </option>
					<option value="XII"> XII </option>
				</select>
				</div>
				<div class="col">
				<input type="number" class="form-control" placeholder="Enter Admission No" name="admission_no">
				</div>
				<div class="col">
				<input type="submit" class="form-control btn btn-primary" name="submit" value="Submit">
				</div>
			</div>
		</form>
		</div>
	</section>
	<?php include('./inc/footer.php')?>
	<?php include('./inc/js.php')?>

</body>

</html>
