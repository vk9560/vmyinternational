<?php include('./inc/env.php')?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Admission Enquiry - <?php echo $hostname ?></title>
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
				<h2>Admission Enquiry</h2>
				<ul class="breadcrumb-url py-1">
					<li class="mr-3"><a href="http://<?php echo $host?>">Home</a></li>
					<li>Admission Enquiry</li>
				</ul>
			</div>
		</div>
	</section>
	<section class="brief-details-cbse-norms mt-3">
	   <div class="container">
			<div class="row">
				<div class="col-lg-10 mx-auto">
					<div class="card">
						<div class="card-body px-5 py-5">
						<div class="row">
							<div class="col-lg-12">
							<div class="contact-form">
								<h3>Enquiry Form </h3>
								<div class="message"></div>
								<form class="m-auto text-center" id="enquirydetailsform" method="post" action="javascript:void(0)" enctype="multipart/form-data">
								<div class="row">
									<div class="col-md-6 col-lg-6 mb-3">
									<input type="text" class="form-control onlychar form-control-sm" name="name" placeholder="name" id="name" size="15">
									<br>
									</div>
									<div class="col-md-6 col-lg-6 mb-3">
									<input type="email" id="email" value="" autocomplete="off" minlength="3" maxlength="50" name="email" placeholder="email" class="form-control form-control-sm">
									</div>
									<div class="col-md-6 col-lg-6 mb-3">
									<input type="text" id="phone" value="" autocomplete="off" minlength="10" maxlength="10" name="phone" placeholder="Mobile No" class="form-control onlydigit form-control-sm">
									</div>
									<div class="col-md-6 col-lg-6 mb-3">
									<input type="text" class="form-control onlychar form-control-sm" name="father_name" placeholder="Father's Name" id="father_name" size="30">
									<br>
									</div>
									<div class="col-md-6 col-lg-6 mb-3">
									<input type="text" class="form-control onlychar form-control-sm" name="mother_name" placeholder="Mother's Name" id="mother_name" size="30">
									<br>
									</div>
									<div class="col-md-6 col-lg-6 mb-3">
									<input type="date" id="dob" value="" placeholder="Date of birth" autocomplete="off" minlength="10" maxlength="40" name="dob" class="form-control datereadonly form-control-sm">
									</div>
									<div class="col-md-6 col-lg-6 mb-3">
									<div class="d-flex mt-3 position-relative gender-group">
										<div class="form-check d-flex justify-comntent-center mr-2">
										<input class="form-check-input" type="radio" name="gender" id="gender_Male" value="Male" checked="">
										<label class="form-check-label" for="gender_Male">Male</label>
										</div>
										<div class="form-check d-flex justify-comntent-center mr-2">
										<input class="form-check-input" type="radio" name="gender" id="gender_Female" value="Female">
										<label class="form-check-label" for="gender_Female">Female</label>
										</div>
										<div class="form-check d-flex justify-comntent-center">
										<input class="form-check-input" type="radio" name="gender" id="gender_Transducer" value="Other">
										<label class="form-check-label" for="gender_Transducer">Other</label>
										</div>
									</div>
									</div>
									<div class="col-md-6 col-lg-6 mb-3">
									<input type="text" id="address" value="" autocomplete="off" minlength="0" maxlength="40" name="address" placeholder="Address" class="form-control form-control-sm">
									</div>
									<div class="col-md-12 col-lg-12 mb-3">
									<input type="text" class="form-control onlychar form-control-sm" name="description" placeholder="Description" id="description" size="15">
									<br>
									</div>
									<div class="col-md-12 col-lg-12 mb-3 d-flex flex-column justify-content-center align-items-center">
									<input type="hidden" name="enquiry_type" value="VMY International School">
									<br>
									<button type="submit" id="submit" name="submit" class="py-2 px-4 btn text-white btn--color btn-md custom--btn text-uppercase w-50">Submit</button>
									</div>
								</div>
								</form>
							</div>
							</div>
						</div>
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
